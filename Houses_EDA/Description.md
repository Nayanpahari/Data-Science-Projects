
Make sure the `houses.csv` file is in the same directory as the notebook or provide the correct path to load the data.

## Notebook Structure

The notebook `house_price_prediction.ipynb` (or similar name) is organized into the following sections:

1.  **Import Libraries:** Imports all necessary Python libraries.
2.  **Load Data:** Reads the `houses.csv` file into a pandas DataFrame.
3.  **Data Cleaning:**
    *   Handles missing values (fills with mean in this case).
    *   Removes outliers using Z-score and IQR methods.
4.  **Exploratory Data Analysis (EDA):**
    *   Visualizes the distribution of the target variable (`price`).
    *   Explores relationships between `price` and other numerical features (`living_area`, `lot_size`, `land_value`, `bathrooms`) using scatter plots and pair plots.
    *   Analyzes the relationship between categorical features (like `heat`) and numerical features (`land_value`) using violin plots.
    *   Generates a correlation heatmap for selected numerical features.
5.  **Model Preparation:**
    *   Selects features (`lot_size`, `living_area`, `bathrooms`) and the target variable (`price`).
    *   Splits the data into training and testing sets.
6.  **Linear Regression Model:**
    *   Initializes and trains a `LinearRegression` model.
    *   Makes predictions on the test set.
    *   Evaluates the model performance (MSE and R-squared).
7.  **Statistical Modeling (OLS):**
    *   Uses `statsmodels.api` to perform OLS regression.
    *   Includes a constant term in the model.
    *   Prints the OLS regression summary to understand feature significance and coefficients.

## Key Findings and Model Evaluation

*   **Data Cleaning:** The notebook addresses missing values and removes outliers to improve data quality.
*   **EDA Insights:**
    *   A strong positive correlation is observed between `living_area` and `price`.
    *   `lot_size` and `land_value` also show positive correlations with price, though potentially weaker than `living_area`.
    *   The type of heating (`heat`) appears to influence `land_value`.
*   **Linear Regression Model:**
    *   The model using `lot_size`, `living_area`, and `bathrooms` as predictors provides a reasonable fit to the data.
    *   The Mean Squared Error (MSE) and R-squared values indicate the model's predictive performance.
*   **Statistical Analysis (OLS):**
    *   The OLS summary provides p-values for each coefficient, indicating their statistical significance.
    *   The coefficients show the estimated change in price for a one-unit increase in each predictor, holding other predictors constant.

The analysis confirms that `living_area`, `lot_size`, and `bathrooms` are significant factors in determining house prices based on this dataset.

## Contributing

Contributions are welcome! If you find issues or have suggestions for improvement, please open an issue or submit a pull request.

## License

[Specify your license here, e.g., MIT License]
