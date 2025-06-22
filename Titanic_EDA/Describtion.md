# Seoul Bike Sharing Demand Prediction

This project aims to predict the daily rented bike count in Seoul based on various environmental and seasonal factors. The analysis uses the Seoul Bike Data dataset.

## Dataset

The dataset contains daily bike rental information along with corresponding weather data, season, holiday, and functioning day information.

## Analysis Steps

The analysis involves the following steps:

1.  **Data Loading and Exploration:** Load the dataset and perform initial exploration to understand its structure, data types, and missing values.
2.  **Data Cleaning and Preprocessing:** Handle missing values (if any), convert date column to datetime objects, and address potential outliers.
3.  **Exploratory Data Analysis (EDA):**
    *   Visualize the relationships between different features using pair plots, heatmaps, box plots, bar plots, scatter plots, and violin plots.
    *   Analyze the correlation between features and the target variable ('Rented Bike Count').
    *   Identify seasonal trends and the impact of holidays and functioning days on bike rentals.
4.  **Feature Engineering:**
    *   Perform one-hot encoding for categorical features like 'Seasons', 'Holiday', and 'Functioning Day'.
5.  **Model Building:**
    *   Split the data into training and testing sets.
    *   Train a Linear Regression model to predict 'Rented Bike Count'.
6.  **Model Evaluation:**
    *   Evaluate the model's performance using metrics like Mean Squared Error (MSE) and R-squared.
    *   Visualize actual vs. predicted rented bike counts.

## Key Findings and Insights

Based on the analysis, the following insights were observed:

*   **Temperature and Seasonality:** Temperature and seasonality are significant factors influencing rented bike count, with higher rentals observed in warmer seasons (Summer, Spring, Autumn) and lower rentals in Winter.
*   **Outlier Handling:** Outlier removal was performed to improve the data quality and potentially enhance model performance.
*   **Holidays:** Holidays seem to have an impact on bike rental patterns.
*   **Functioning Day:** Whether the bike service is functioning is a crucial determinant of rental count.
*   **Other Factors:** Other meteorological factors like humidity, wind speed, visibility, dew point temperature, solar radiation, rainfall, and snowfall also contribute to the prediction.
*   **Model Performance:** The Linear Regression model provides a measure of the predictability of the rented bike count based on the selected features, as indicated by the R-squared value.

## How to Run the Code

1.  Ensure you have a Jupyter Notebook or Google Colaboratory environment set up.
2.  Download the `SeoulBikeData.csv` file and place it in your working directory or provide the correct path in the code.
3.  Run the Python code provided in the notebook cells.

## Dependencies

*   pandas
*   numpy
*   matplotlib
*   seaborn
*   sklearn

You can install the required libraries using pip:

