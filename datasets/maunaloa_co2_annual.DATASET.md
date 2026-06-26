# Dataset card — Atmospheric CO₂, annual mean (Mauna Loa)

- **File:** `maunaloa_co2_annual.csv`
- **Title:** NOAA GML — Mauna Loa annual mean carbon dioxide
- **Source:** NOAA Global Monitoring Laboratory (GML), Mauna Loa Observatory.
  Dr. Pieter Tans (NOAA/GML) and Dr. Ralph Keeling (Scripps Institution of Oceanography).
  <https://gml.noaa.gov/ccgg/trends/>
- **Upstream file:** `webdata/ccgg/trends/co2/co2_annmean_mlo.csv`
- **License:** Public domain (work of the U.S. Government). Please cite NOAA GML.
- **Temporal coverage:** 1959–2025 (annual)
- **Spatial coverage:** Mauna Loa Observatory, Hawaii (representative of well-mixed background atmosphere)
- **Units:** parts per million (ppm), dry air mole fraction

## Schema

| Column | Type | Description |
| --- | --- | --- |
| `year` | int | Calendar year |
| `co2_ppm` | float | Annual mean CO₂ mole fraction (ppm) |
| `uncertainty_ppm` | float | Estimated 1-σ uncertainty of the annual mean (ppm) |

## Suggested citation

> Lan, X., Tans, P. and K.W. Thoning: *Trends in globally-averaged CO₂*,
> NOAA Global Monitoring Laboratory.
> https://gml.noaa.gov/ccgg/trends/

## Used in

- `lec-04` — regression (CO₂ growth & its relationship to global temperature)
- `lec-11` — capstone (linking emissions proxies to warming)
