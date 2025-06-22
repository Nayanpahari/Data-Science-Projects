
# Breast Cancer Diagnosis Analysis

This notebook performs an exploratory data analysis on a breast cancer dataset to identify features correlated with a malignant or benign diagnosis.

## Data Content

The dataset contains the following attributes for each observation:

1.  **ID number**
2.  **Diagnosis (M = malignant, B = benign)**
3.  **radius (mean of distances from center to points on the perimeter)**
4.  **texture (standard deviation of gray-scale values)**
5.  **perimeter**
6.  **area**
7.  **smoothness (local variation in radius lengths)**
8.  **compactness (perimeter^2 / area - 1.0)**
9.  **concavity (severity of concave portions of the contour)**
10. **concave points (number of concave portions of the contour)**
11. **symmetry**
12. **fractal dimension ("coastline approximation" - 1)**

## Analysis Steps

1.  **Import Libraries:** Necessary Python libraries for data manipulation, visualization, and statistical analysis are imported.
2.  **Read and Analyze Data:** The dataset is loaded, and initial checks are performed on its structure, columns, and data types.
3.  **Check for Null and Duplicate Values:** The presence of missing or duplicated data is assessed.
4.  **Drop Irrelevant Columns:** Columns that are not necessary for the analysis (like 'Unnamed: 32' and 'id') are removed.
5.  **Descriptive Statistics:** Summary statistics (mean, std, min, max, etc.) are calculated for the numerical features.
6.  **Visualization:**
    *   A countplot shows the distribution of benign and malignant diagnoses.
    *   Boxplots are used to visualize the distribution of features and identify potential outliers.
    *   Outliers are handled by replacing them with the mean of their respective columns.
    *   A heatmap visualizes the correlation matrix of the features.
7.  **Feature Correlation with Diagnosis:**
    *   The correlation coefficients between each feature and the 'diagnosis' are calculated and sorted.
    *   A bar plot displays the top 10 features with the highest absolute correlation to the diagnosis.
8.  **Grouped Analysis:** Descriptive statistics for numerical features are calculated separately for benign and malignant tumors.
9.  **Distribution Analysis:**
    *   Histograms are plotted for selected features ('radius_mean', 'texture_mean', 'perimeter_mean', 'area_mean') to visualize their distribution by diagnosis.
    *   QQ-plots are generated to assess the normality of the distributions.
    *   Skewness and Kurtosis are calculated for these features.
10. **T-tests:** Independent samples t-tests are performed to compare the means of each feature between the benign and malignant groups and determine statistical significance.
11. **Pairwise Relationships:** A pairplot visualizes the relationships between selected features and the diagnosis.
12. **Box Plots of Top Features:** Box plots are created for the top 10 features most correlated with diagnosis to visualize the differences in their distributions between the two groups.

## Conclusion

The analysis provides insights into the characteristics of breast tumors that are associated with a malignant or benign diagnosis. Several features, particularly those related to the size and shape of the tumor (like 'concave points_worst', 'perimeter_worst', 'area_worst', etc.), show strong correlations with the diagnosis and significant differences in their distributions between the two groups. These findings can be valuable for building predictive models.

## How to Run the Notebook

1.  Ensure you have Python and the necessary libraries installed (numpy, pandas, matplotlib, seaborn, statsmodels, scipy).
2.  Make sure the dataset `data.csv` is available in the directory where the notebook is located, or update the file path in the code.
3.  Run the notebook in a Jupyter environment (like Google Colab or Jupyter Notebook).
