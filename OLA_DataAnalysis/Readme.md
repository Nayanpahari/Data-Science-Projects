# 📊 Booking Data Analysis – SQL & Power BI Dashboard

## 📌 Overview
This project analyzes a large **booking dataset (100,000+ records)** using **SQL** for data querying and **Power BI** for visualization.  
It highlights patterns in customer behavior, booking performance, and revenue distribution to support data-driven decisions.

---

## 🧠 Objectives
- Clean, transform, and analyze raw booking data using SQL.
- Derive key KPIs — total bookings, revenue trends, and cancellation rates.
- Build an **interactive Power BI dashboard** for real-time insights.
- Visualize booking performance across regions, time, and customer segments.

---

## 🗂️ Dataset Information
**File Name:** `Bookings-100000-Rows.xlsx - July.csv`  
**Records:** 100,000+ rows  
**Format:** CSV  

### Key Columns
| Column Name | Description |
|--------------|-------------|
| `Booking_ID` | Unique identifier for each booking |
| `Customer_ID` | Unique customer reference |
| `Booking_Date` | Date when the booking was created |
| `Check_In` | Check-in date |
| `Check_Out` | Check-out date |
| `Booking_Status` | Booking status (Confirmed / Cancelled / Pending) |
| `Payment_Method` | Method of payment used |
| `Total_Amount` | Total amount paid for the booking |
| `Country` | Customer’s country of origin |

*(Column names may vary slightly based on the dataset.)*

---

## 🧾 SQL Analysis
Key SQL tasks performed:
- Data cleaning (handling missing values and inconsistent formats)
- Filtering and aggregation for KPIs
- Grouping bookings by **country**, **payment method**, and **month**
- Revenue and performance insights through analytical queries

### Example Query
```sql
SELECT 
    Country,
    COUNT(Booking_ID) AS Total_Bookings,
    SUM(Total_Amount) AS Total_Revenue,
    ROUND(AVG(Total_Amount), 2) AS Avg_Booking_Value
FROM bookings
WHERE Booking_Status = 'Confirmed'
GROUP BY Country
ORDER BY Total_Revenue DESC;
```
### 📈 Power BI Dashboard

- The Power BI report includes:
- Revenue Overview: Total and average revenue by country and booking channel.
- Customer Insights: Repeat customers, booking frequency, and payment preferences.
- Time-Based Trends: Monthly booking and cancellation rate visualization.
- Interactive Filters: Filter data by status, date range, and region.

### 🖼️ Power BI Dashboard Preview

[![Power BI Dashboard Preview](https://raw.githubusercontent.com/Nayanpahari/Data-Science-Projects/main/OLA_DataAnalysis/Dashboard/Overall.png)](https://github.com/Nayanpahari/Data-Science-Projects/blob/main/OLA_DataAnalysis/Dashboard/Overall.png)

### ⚙️ Tools & Technologies

| Tool | Purpose |
|--------------|-------------|
| `SQL (MySQL / PostgreSQL)` | Data cleaning and analysis |
| `Power BI` | Data visualization and dashboard creation |
| `Excel / CSV` | Data source and storage format |

### 🧩 How to Use
- Download the dataset from this repository.
- Import it into SQL (MySQL / PostgreSQL).
- Run the SQL scripts in the /sql/queries.sql folder for preprocessing and KPI calculation.
- Load the cleaned dataset into Power BI and use the .pbix file (if provided) to explore insights.

### 📚 Insights Derived

- Identified top revenue-generating countries and high-performing months.
- Found trends in cancellation behavior and payment method preferences.
- Discovered relationships between stay duration and average booking value.
- Provided clear, actionable insights for business optimization.

### 🧾 Results Snapshot

| Metric | Value |
|--------------|-------------|
| `Total Bookings` | 100,000+ |
| `Data Source` | Booking Records (July) |
| `Dashboard Tool` | Power BI |
| `SQL Engine` | MySQL |

### 📄 License

- This dataset and project are released for educational and analytical purposes.
- You may use, modify, and share it with proper credit.

## 🙌 Author
**Nayan Pahari**  
📍 Kolkata, India  
📧 [nayanpahari434@gmail.com](mailto:nayanpahari434@gmail.com)  
🔗 [Connect with me on LinkedIn – Nayan Pahari](https://www.linkedin.com/in/nayan-pahari) | [GitHub](https://github.com/NayanPahari) | [Portfolio](https://nayanpahari.github.io/)


