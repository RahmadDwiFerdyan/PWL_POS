from sklearn.linear_model import LinearRegression
import pandas as pd

from google.colab import files
uploaded = files.upload()
df = pd.read_excel('insurance.xlsx')

# Encoding variabel smoker
df['smoker'] = df['smoker'].map({'yes': 1, 'no': 0})

X = df[['age', 'bmi', 'children', 'smoker']]
y = df['charges']

# Regresi
model = LinearRegression()
model.fit(X, y)

# Persamaan regresi
intercept = model.intercept_
coeffs = model.coef_

print("Persamaan regresi:")
print(f"ŷ = {intercept:.2f} + ({coeffs[0]:.2f} * age) + ({coeffs[1]:.2f} * bmi) + "
      f"({coeffs[2]:.2f} * children) + ({coeffs[3]:.2f} * smoker)")

# Korelasi
print("\nKorelasi tiap variabel dengan charges:")
print(df[['age', 'bmi', 'children', 'smoker', 'charges']].corr()['charges'])
