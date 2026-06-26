# Artificial Intelligence

> Course taught by **prof. Felipe Alencar** at
> **IFAL — Arapiraca Campus**.
> This branch is the English version of the
> [`inteligencia-artificial`](https://github.com/felipealencar/courses/tree/inteligencia-artificial)
> course and is part of the [`courses`](https://github.com/felipealencar/courses)
> repository (organized by branches). See the
> [course index](https://github.com/felipealencar/courses/tree/master).

A hands-on introduction to the main paradigms of Artificial Intelligence and
Machine Learning, implemented in **Python** and **Jupyter Notebook**. Most
lectures are built around a shared, openly licensed **earth/climate** dataset
collection, so the methods are grounded in a real scientific question: *how is
the climate changing, and what can we model and predict?*

Every notebook runs **on a CPU in seconds** — no GPU required — and loads its
data from the versioned [`datasets/`](datasets/) catalog, so the materials are
fully **reproducible**.

## Syllabus (lecture by lecture)

| Lecture | Topic | Notebook / materials | Data |
| --- | --- | --- | --- |
| [`lec-01`](artificial-intelligence/lec-01) | Introduction to AI & the data-science workflow | `intro_and_eda.ipynb` | global temperature |
| [`lec-02`](artificial-intelligence/lec-02) | Genetic Algorithms (bio-inspired optimization) | `beetle_genetic_algorithm.py` | — |
| [`lec-03`](artificial-intelligence/lec-03) | Fuzzy Logic (inference systems) | `fuzzy_tipping.ipynb` | — |
| [`lec-04`](artificial-intelligence/lec-04) | Regression (linear & polynomial) | `regression.ipynb` | CO₂, temperature |
| [`lec-05`](artificial-intelligence/lec-05) | Classification (logistic regression, k-NN) | `classification.ipynb` | Maceió weather |
| [`lec-06`](artificial-intelligence/lec-06) | Model evaluation, decision trees & random forests | `model_evaluation_trees.ipynb` | Maceió weather |
| [`lec-07`](artificial-intelligence/lec-07) | Artificial Neural Networks — classification | `neural_network_classification.ipynb` | Fashion-MNIST |
| [`lec-08`](artificial-intelligence/lec-08) | Time-series forecasting with a neural network | `time_series_forecasting.ipynb` | Maceió weather |
| [`lec-09`](artificial-intelligence/lec-09) | Unsupervised learning — K-Means clustering | `kmeans_example.ipynb` | — |
| [`lec-10`](artificial-intelligence/lec-10) | Dimensionality reduction (PCA) | `dimensionality_reduction_pca.ipynb` | Maceió weather |
| [`lec-11`](artificial-intelligence/lec-11) | Capstone — end-to-end ML project | `capstone.ipynb` | all three |

Each lecture folder has its own `README.md` with objectives, the dataset used,
and an **Open in Colab** badge.

## Datasets

All notebooks draw from three small, real, openly licensed datasets documented in
[`datasets/`](datasets/) (each with a dataset card describing source, license and
schema):

- **Global temperature anomaly** — NASA GISTEMP v4 (public domain)
- **Atmospheric CO₂** — NOAA Mauna Loa annual means (public domain)
- **Daily weather, Maceió/AL** — Open-Meteo / ERA5 (CC BY 4.0)

To regenerate them from the upstream sources, run
[`scripts/fetch_data.py`](scripts/fetch_data.py).

## Prerequisites

- Programming logic and basic Python.
- Notions of linear algebra, statistics and probability.

## Environment and execution

The course uses Python 3 and a light scientific stack (NumPy, pandas,
scikit-learn, matplotlib, scikit-fuzzy). Pinned in
[`requirements.txt`](requirements.txt) and [`environment.yml`](environment.yml).

```bash
# 1. install dependencies (pip)
pip install -r requirements.txt
#    ...or with conda
conda env create -f environment.yml && conda activate ai-course

# 2a. run a notebook locally
jupyter notebook

# 2b. or run any standalone script
python artificial-intelligence/lec-02/beetle_genetic_algorithm.py
```

> `lec-07` additionally needs **TensorFlow** (`pip install tensorflow`); it is the
> only GPU-friendly lecture and runs nicely on Google Colab.

You can also open any notebook directly in **Google Colab** via the badge at the
top of each one — no local setup required.

## Getting the code

```bash
git clone -b artificial-intelligence git@github.com:felipealencar/courses.git
```
