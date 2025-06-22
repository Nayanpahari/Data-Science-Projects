# Titanic Dataset Exploratory Data Analysis (EDA)

This repository contains a Google Colab notebook (`.ipynb`) performing an extensive Exploratory Data Analysis (EDA) on the famous Titanic dataset. The analysis aims to understand the dataset's structure, identify patterns, handle missing values, and create new features to gain insights into factors influencing survival on the Titanic.

## Table of Contents

1.  [Introduction](#introduction)
2.  [Dataset](#dataset)
3.  [EDA Process](#eda-process)
    *   [Why do EDA?](#why-do-eda)
    *   [Column Types](#column-types)
    *   [Univariate Analysis](#univariate-analysis)
        *   [Numerical Features](#numerical-features)
        *   [Categorical Features](#categorical-features)
    *   [Feature Engineering](#feature-engineering)
    *   [Bivariate Analysis](#bivariate-analysis)
    *   [Correlation Analysis](#correlation-analysis)
4.  [Key Findings and Conclusions](#key-findings-and-conclusions)
5.  [How to Run the Notebook](#how-to-run-the-notebook)
6.  [Dependencies](#dependencies)
7.  [License](#license)

## Introduction

The Titanic dataset is a classic dataset for machine learning and data analysis. It contains information about the passengers of the ill-fated RMS Titanic, including their demographics, travel details, and survival status. This notebook delves into the dataset to uncover relationships and prepare the data for potential modeling.

## Dataset

The dataset used in this analysis is the standard Titanic dataset, typically available as `train.csv`. It includes the following columns:

*   `PassengerId`: A unique identifier for each passenger.
*   `Survived`: Survival status (0 = No, 1 = Yes).
*   `Pclass`: Passenger class (1st, 2nd, or 3rd).
*   `Name`: Passenger's name.
*   `Sex`: Passenger's gender.
*   `Age`: Passenger's age.
*   `SibSp`: Number of siblings/spouses aboard.
*   `Parch`: Number of parents/children aboard.
*   `Ticket`: Ticket number.
*   `Fare`: Passenger fare.
*   `Cabin`: Cabin number.
*   `Embarked`: Port of embarkation (C = Cherbourg, Q = Queenstown, S = Southampton).

## EDA Process

The EDA process followed in the notebook is iterative and covers several key steps:

### Why do EDA?

*   Model building
*   Analysis and reporting
*   Validate assumptions
*   Handling missing values
*   Feature engineering
*   Detecting outliers

### Column Types

The columns are categorized into:

*   **Numerical**: Age, Fare, PassengerId
*   **Categorical**: Survived, Pclass, Sex, SibSp, Parch, Embarked
*   **Mixed**: Name, Ticket, Cabin

### Univariate Analysis

Analyzing each feature independently to understand its distribution, central tendency, and dispersion, and to identify potential issues like outliers, skewness, and missing values.

#### Numerical Features

*   **Distribution analysis**: Histograms, KDE plots are used.
*   **Descriptive statistics**: Mean, median, mode, standard deviation, range, and quartiles are computed.
*   **Identifying potential issues**: Outliers are visualized using box plots.
*   **Skewness**: Skewness is calculated to understand the asymmetry of the distribution.

#### Categorical Features

*   **Frequency analysis**: Value counts are used to understand the distribution of categories.
*   **Visualizations**: Bar plots and pie charts are used to visualize the frequency distribution.
*   **Missing values**: The count of missing values is checked.

### Feature Engineering

Creating new features from existing ones to potentially improve the analysis and modeling:

*   `individual_fare`: Calculated by dividing `Fare` by the number of people covered by the ticket (`SibSp + Parch + 1`).
*   `family_size`: Sum of `SibSp`, `Parch`, and 1 (for the passenger).
*   `family_type`: Categorized based on `family_size` ('alone', 'small', 'large').
*   `surname`: Extracted from the `Name` column.
*   `title`: Extracted from the `Name` column and categorized into major titles.
*   `deck`: Extracted from the first character of the `Cabin` column after handling missing values.

### Bivariate Analysis

Exploring the relationships between pairs of features. Different visualization and statistical techniques are used based on the types of columns being analyzed:

*   **Numerical - Numerical**: Scatter plots, correlation coefficients.
*   **Numerical - Categorical**: Bar plots, box plots, KDE plots, violin plots comparing numerical distribution across categories.
*   **Categorical - Categorical**: Cross-tabulations, heatmaps, stacked bar plots.

### Correlation Analysis

Calculating and visualizing the correlation matrix for numerical features to understand the linear relationships between them, with a specific focus on correlation with the `Survived` column.

## Key Findings and Conclusions

Based on the EDA performed in the notebook, some key findings include:

*   **Survival Patterns:** Survival rates were significantly influenced by factors like `Pclass`, `Sex`, `Age`, `Family Type`, `Title`, and `Deck`.
*   **Missing Data:** Significant missing values were found in the `Age` and `Cabin` columns, with imputation performed for `Cabin`.
*   **Data Distribution:** Features like `Fare` were highly skewed, suggesting potential need for transformation in future modeling.
*   **Feature Importance:** The analysis highlights potential features that are strongly correlated with survival.

A more detailed list of conclusions for each analyzed feature is provided within the notebook's markdown cells.

## How to Run the Notebook

1.  Clone this repository.
2.  Open the `.ipynb` file in Google Colab or a Jupyter Notebook environment.
3.  Ensure you have the necessary dependencies installed (see [Dependencies](#dependencies)).
4.  Run the cells sequentially to execute the EDA steps.

## Dependencies

The following libraries are required to run the notebook:

*   pandas
*   numpy
*   seaborn
*   matplotlib

These can typically be installed using pip:

If running in Google Colab, these libraries are usually pre-installed.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details (assuming you have a LICENSE file in your repository).
