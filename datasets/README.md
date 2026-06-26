# Datasets

This folder is the **data catalog** for the Artificial Intelligence course. Every
notebook in the course loads its data from here, so the materials are
**reproducible** (the exact bytes used in class are versioned in git) and
**reusable** (each dataset is documented with a card describing its source,
license, schema, and provenance).

All three datasets are small, openly licensed, real-world **earth/climate**
records, chosen so the course connects machine-learning methods to a concrete
scientific question.

| Dataset | File | Rows | Source | License | Card |
| --- | --- | --- | --- | --- | --- |
| Global temperature anomaly (annual) | `gistemp_global_annual.csv` | 1880–2025 | NASA GISS GISTEMP v4 | Public domain (U.S. Gov.) | [card](gistemp_global_annual.DATASET.md) |
| Atmospheric CO₂ (annual mean, Mauna Loa) | `maunaloa_co2_annual.csv` | 1959–2025 | NOAA GML | Public domain (U.S. Gov.) | [card](maunaloa_co2_annual.DATASET.md) |
| Daily weather, Maceió/AL, Brazil | `maceio_daily_weather.csv` | 2010–2024 | Open-Meteo (ERA5) | CC BY 4.0 | [card](maceio_daily_weather.DATASET.md) |

## Reproducing the data

The CSVs are committed so the course runs offline. To regenerate them from the
upstream sources, see `scripts/fetch_data.py` (documents the exact API calls and
cleaning steps used to produce these files).

## Provenance summary

These files are *derived* (subset/cleaned) from the upstream sources cited in
each card. They are redistributed here for teaching under the upstream licenses,
with attribution. No values were altered; cleaning was limited to column
selection, renaming, dropping missing rows, and (for the weather data) deriving a
`month` field and a binary `rained` label (precipitation ≥ 1 mm, the WMO
rain-day threshold).
