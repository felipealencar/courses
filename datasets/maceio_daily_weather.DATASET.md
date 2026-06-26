# Dataset card — Daily weather, Maceió/AL (Brazil)

- **File:** `maceio_daily_weather.csv`
- **Title:** Open-Meteo (ERA5 reanalysis) daily weather for Maceió, Alagoas
- **Source:** Open-Meteo Historical Weather API, which redistributes the
  **ERA5 / ERA5-Land** reanalysis produced by ECMWF / Copernicus Climate Change Service.
  <https://open-meteo.com/en/docs/historical-weather-api>
- **License:** Data CC BY 4.0 (Open-Meteo); underlying ERA5 © ECMWF/Copernicus.
- **Location:** lat −9.67, lon −35.74 (Maceió, AL, Brazil); grid elevation ≈ 6 m
- **Temporal coverage:** 2010-01-01 – 2024-12-31 (daily; 5,479 days after dropping rows with missing values)
- **Timezone:** America/Maceio

## Schema

| Column | Type | Description |
| --- | --- | --- |
| `date` | date | Observation day (ISO-8601) |
| `temp_max_c` | float | Daily maximum 2 m air temperature (°C) |
| `temp_min_c` | float | Daily minimum 2 m air temperature (°C) |
| `temp_mean_c` | float | Daily mean 2 m air temperature (°C) |
| `precip_mm` | float | Total daily precipitation (mm) |
| `wind_max_kmh` | float | Daily maximum 10 m wind speed (km/h) |
| `solar_rad_mj_m2` | float | Daily shortwave radiation sum (MJ/m²) |
| `humidity_pct` | float | Daily mean 2 m relative humidity (%) |
| `pressure_hpa` | float | Daily mean surface pressure (hPa) |
| `month` | int | Month of year (1–12), derived |
| `rained` | int | 1 if `precip_mm` ≥ 1.0 (WMO rain-day threshold), else 0 — derived label |

## Suggested citation

> Zippenfenig, P. (2023). *Open-Meteo.com Weather API.* Zenodo.
> https://doi.org/10.5281/zenodo.7970649
>
> Hersbach, H., et al. (2023). *ERA5 hourly data.* Copernicus Climate Change
> Service (C3S) Climate Data Store (CDS).

## Used in

- `lec-05` — classification (predict rain vs. no-rain)
- `lec-06` — model evaluation, decision trees & random forests
- `lec-08` — time-series forecasting of temperature
- `lec-10` — dimensionality reduction (PCA) on weather features
- `lec-11` — capstone
