import pandas as pd
import matplotlib.pyplot as plt

# Membuat DataFrame
data = {'x': [5, 10, 15, 20, 25], 'y': [10, 20, 20, 30, 30]}
df = pd.DataFrame(data)

# Menghitung statistik kolom x
mean_x = df['x'].mean()
median_x = df['x'].median()
modus_x = df['x'].mode()[0]

# Menghitung statistik kolom y
mean_y = df['y'].mean()
median_y = df['y'].median()
modus_y = df['y'].mode()[0]

# Mencetak hasil perhitungan
print("Statistik Kolom x:")
print(f"Mean x: {mean_x}")
print(f"Median x: {median_x}")
print(f"Modus x: {modus_x}")

print("\nStatistik Kolom y:")
print(f"Mean y: {mean_y}")
print(f"Median y: {median_y}")
print(f"Modus y: {modus_y}")

# Membuat step plot
plt.step(df['x'], df['y'], where='post', color='blue', label='Data Points')

# Membuat garis untuk penanda mean, median, dan modus
plt.axvline(x=mean_x, color='red', linestyle='--', label='Mean x')
plt.axvline(x=median_x, color='orange', linestyle=':', label='Median x')
plt.axhline(y=mean_y, color='green', linestyle='--', label='Mean y')
plt.axhline(y=median_y, color='purple', linestyle=':', label='Median y')

# Menambahkan judul dan label
plt.title('Step Plot dari x vs y dengan Statistik')
plt.xlabel('x')
plt.ylabel('y')

# Menampilkan plot dan legenda
plt.legend()
plt.show()