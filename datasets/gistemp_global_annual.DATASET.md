# Dataset card — Global temperature anomaly (annual)

- **File:** `gistemp_global_annual.csv`
- **Title:** GISTEMP v4 — Global land-ocean temperature index, annual mean
- **Source:** NASA Goddard Institute for Space Studies (GISS), *GISTEMP Team*.
  GLB.Ts+dSST series.
  <https://data.giss.nasa.gov/gistemp/>
- **Upstream file:** `tabledata_v4/GLB.Ts+dSST.csv` (column `J-D` = January–December annual mean)
- **License:** Public domain (work of the U.S. Government). Please cite GISTEMP.
- **Temporal coverage:** 1880–2025 (annual)
- **Spatial coverage:** Global
- **Units:** °C anomaly relative to the 1951–1980 base period

## Schema

| Column | Type | Description |
| --- | --- | --- |
| `year` | int | Calendar year |
| `temp_anomaly_c` | float | Global mean surface temperature anomaly (°C) vs. 1951–1980 |

## Suggested citation

> GISTEMP Team, 2025: *GISS Surface Temperature Analysis (GISTEMP), version 4.*
> NASA Goddard Institute for Space Studies. Dataset accessed 2026 at
> https://data.giss.nasa.gov/gistemp/
>
> Lenssen, N., et al. (2019), *Improvements in the GISTEMP uncertainty model.*
> J. Geophys. Res. Atmos., 124, 12,376–12,395.

## Used in

- `lec-01` — exploratory data analysis & the data-science workflow
- `lec-04` — regression (trend modeling)
