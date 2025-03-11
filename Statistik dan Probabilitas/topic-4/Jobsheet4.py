import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

# Parameter distribusi normal
mean = 5
std_dev = 2
sample_size = 1000

# Simulasi waktu pengiriman berdasarkan distribusi normal
days = np.random.normal(mean, std_dev, sample_size)

# Membuat DataFrame
df = pd.DataFrame(days, columns=['Waktu Pengiriman'])
print(df.head())

# Hitung Probabilitas Pengiriman Paket dalam Waktu Kurang dari 3 hari
prob_kurang_dari_3 = (df['Waktu Pengiriman'] <= 3).mean()
print(f"Probabilitas Paket Dikirim Kurang dari 3 Hari: {prob_kurang_dari_3:.2f}")

# Hitung Probabilitas Pengiriman Paket dalam Waktu antara 4-7 hari
prob_antara_4_sampai_7 = ((df['Waktu Pengiriman'] >= 4) & (df['Waktu Pengiriman'] <= 7)).mean()
print(f"Probabilitas Paket Dikirim antara 4-7 Hari: {prob_antara_4_sampai_7:.2f}")

# Plot histogram distribusi
plt.figure(figsize=(8,6))
sns.histplot(df['Waktu Pengiriman'], kde=True, color='green')
plt.title('Distribusi Waktu Pengiriman Paket')
plt.xlabel('Waktu Pengiriman (hari)')
plt.ylabel('Frekuensi')
plt.show()

# Plot Probabilitas Kumulatif
plt.figure(figsize=(8,6))
sns.ecdfplot(df['Waktu Pengiriman'], color='blue')
plt.title('Probabilitas Kumulatif Pesanan')
plt.xlabel('Waktu Pengiriman (Hari)')
plt.ylabel('Probabilitas Kumulatif')
plt.show()