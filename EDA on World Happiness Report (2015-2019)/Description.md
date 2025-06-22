# World Happiness Report Analysis (2015-2019)

This repository contains a Jupyter Notebook (`.ipynb` file) that performs an Exploratory Data Analysis (EDA) on the World Happiness Report datasets from 2015 to 2019. The analysis aims to understand trends, key factors influencing happiness, and relationships between different indicators over these five years.

## Table of Contents

- [Overview](#overview)
- [Dataset](#dataset)
- [Analysis Steps](#analysis-steps)
- [Key Findings](#key-findings)
- [Recommendations](#recommendations)
- [Requirements](#requirements)
- [How to Run](#how-to-run)
- [Libraries Used](#libraries-used)

## Overview

The project analyzes the annual World Happiness Reports, which rank countries based on their subjective well-being scores. The analysis explores the relationships between happiness scores and various factors such as GDP per capita, social support, healthy life expectancy, freedom, generosity, and perceptions of corruption.

## Dataset

The analysis uses the following datasets:

- `2015.csv`
- `2016.csv`
- `2017.csv`
- `2018.csv`
- `2019.csv`

These files contain the happiness scores and contributing factors for various countries for each respective year.

## Analysis Steps

The notebook follows a typical EDA workflow:

1.  **Data Loading and Inspection:** Loading the datasets and examining their structure, initial rows, and basic information.
2.  **Data Cleaning:** Checking for and handling missing values and duplicate entries.
3.  **Data Transformation:** Merging the yearly datasets into a single DataFrame for easier analysis and comparison over time. Creating a combined dataset focusing on key variables like happiness score, GDP, and health for each year.
4.  **Univariate Analysis:** Analyzing the distribution of individual variables (GDP, Happiness Score, Health) for each year using histograms.
5.  **Bivariate Analysis:** Exploring the relationships between pairs of variables, specifically:
    -   GDP vs. Happiness Score across the years.
    -   Health vs. Happiness Score across the years.
    This is visualized using scatterplots.
6.  **Multivariate Analysis:** Examining the correlations between multiple numeric variables using a heatmap.
7.  **Time Series Analysis:** Analyzing the trend of the average happiness score globally over the years (2015-2019) using a line plot.
8.  **Identifying Trends:** Analyzing which countries consistently rank high in happiness.

## Key Findings

Based on the analysis, some of the key findings include:

-   Higher GDP per Capita shows a strong positive correlation with higher Happiness Scores.
-   Higher Healthy Life Expectancy is also significantly correlated with higher Happiness Scores.
-   There was a slight global decline in the average happiness score between 2018 and 2019.
-   The top-ranking countries for happiness remained relatively consistent over the five years (e.g., Finland, Denmark, Switzerland).

## Recommendations

Based on the insights, policymakers could consider:

-   Investing in public health and education to improve life expectancy and potentially boost happiness levels.
-   Focusing on sustainable economic growth strategies that can contribute to higher GDP per capita.
-   Promoting environmental protection policies which indirectly support health and well-being.

## Requirements

-   Python 3
-   Jupyter Notebook or Google Colaboratory
-   The following Python libraries:
    -   pandas
    -   numpy
    -   matplotlib
    -   seaborn

## How to Run

1.  Clone this repository or download the notebook file and the CSV datasets.
2.  Ensure you have the required libraries installed (`pip install pandas numpy matplotlib seaborn`).
3.  Open the `.ipynb` file in Jupyter Notebook or upload it to Google Colaboratory.
4.  Make sure the CSV data files (`2015.csv`, `2016.csv`, `2017.csv`, `2018.csv`, `2019.csv`) are in the same directory as the notebook or uploaded to your Google Colab environment.
5.  Run the cells sequentially within the notebook.

## Libraries Used

-   `pandas`: For data manipulation and analysis.
-   `numpy`: For numerical operations.
-   `matplotlib.pyplot`: For creating static, interactive, and animated visualizations.
-   `seaborn`: For creating statistically informative visualizations.
