#!/usr/bin/env python3
"""Regenerate the course datasets from their upstream sources.

This documents the exact provenance of every file in ../datasets so the course
is fully reproducible. Run:

    python scripts/fetch_data.py

Requires: requests (or stdlib urllib) and Python 3.9+. No API keys needed.

Sources & licenses (see the per-file DATASET.md cards for full citations):
  - NASA GISTEMP v4 (public domain, U.S. Gov.)
  - NOAA GML Mauna Loa annual CO2 (public domain, U.S. Gov.)
  - Open-Meteo Historical Weather API / ERA5 (CC BY 4.0)
"""
import csv, json, os, urllib.request

HERE = os.path.dirname(os.path.abspath(__file__))
OUT = os.path.normpath(os.path.join(HERE, "..", "datasets"))
os.makedirs(OUT, exist_ok=True)


def _get(url):
    req = urllib.request.Request(url, headers={"User-Agent": "ndp-course/1.0"})
    with urllib.request.urlopen(req, timeout=60) as r:
        return r.read().decode("utf-8", "replace")


def gistemp():
    txt = _get("https://data.giss.nasa.gov/gistemp/tabledata_v4/GLB.Ts+dSST.csv")
    lines = txt.splitlines()
    header = lines[1].split(",")
    jd = header.index("J-D")
    rows = []
    for line in lines[2:]:
        p = line.split(",")
        if not p or not p[0].strip().isdigit():
            continue
        if p[jd].strip() in ("***", ""):
            continue
        rows.append((int(p[0]), float(p[jd])))
    _write("gistemp_global_annual.csv", ["year", "temp_anomaly_c"], rows)


def co2():
    txt = _get("https://gml.noaa.gov/webdata/ccgg/trends/co2/co2_annmean_mlo.csv")
    rows = []
    for line in txt.splitlines():
        if line.startswith("#") or line.startswith("year"):
            continue
        p = line.strip().split(",")
        if len(p) >= 3 and p[0].isdigit():
            rows.append((int(p[0]), float(p[1]), float(p[2])))
    _write("maunaloa_co2_annual.csv", ["year", "co2_ppm", "uncertainty_ppm"], rows)


def maceio():
    url = ("https://archive-api.open-meteo.com/v1/archive?latitude=-9.67&longitude=-35.74"
           "&start_date=2010-01-01&end_date=2024-12-31"
           "&daily=temperature_2m_max,temperature_2m_min,temperature_2m_mean,"
           "precipitation_sum,windspeed_10m_max,shortwave_radiation_sum,"
           "relative_humidity_2m_mean,surface_pressure_mean&timezone=auto")
    d = json.loads(_get(url))["daily"]
    cols = ["time", "temperature_2m_max", "temperature_2m_min", "temperature_2m_mean",
            "precipitation_sum", "windspeed_10m_max", "shortwave_radiation_sum",
            "relative_humidity_2m_mean", "surface_pressure_mean"]
    rows = []
    for i in range(len(d["time"])):
        vals = [d[c][i] for c in cols]
        if any(v is None for v in vals):
            continue
        month = int(vals[0].split("-")[1])
        rained = 1 if vals[4] >= 1.0 else 0
        rows.append(vals + [month, rained])
    _write("maceio_daily_weather.csv",
           ["date", "temp_max_c", "temp_min_c", "temp_mean_c", "precip_mm",
            "wind_max_kmh", "solar_rad_mj_m2", "humidity_pct", "pressure_hpa",
            "month", "rained"], rows)


def _write(name, header, rows):
    with open(os.path.join(OUT, name), "w", newline="") as f:
        w = csv.writer(f)
        w.writerow(header)
        w.writerows(rows)
    print(f"wrote {name}: {len(rows)} rows")


if __name__ == "__main__":
    gistemp()
    co2()
    maceio()
    print("done ->", OUT)
