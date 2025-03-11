import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

#parameter distribusi
mean = 170 #rata-rata tinggi badan
std_dev = 10 #standar deviasi tinggi badan
sample_size = 1000 #jumlah sampel

#Bangkitkan data tinggi badan
heights = np.random.normal(mean, std_dev, sample_size)

#Buat DataFrame
df = pd.DataFrame(heights, columns=['Tinggi Badan'])

#Tampilkan 5 baris pertama
print(df.head())

#Plot Histogram
plt.figure(figsize=(8,6))
sns.histplot(df['Tinggi Badan'], kde=True, color='blue')
plt.title('Distribusi Tinggi Badan dalam Populasi')
plt.xlabel('Tinggi Badan (cm)')
plt.ylabel('Frekuensi')
plt.show()

#Hitung Probabilitas
prob = np.sum((df['Tinggi Badan']>=160) & (df['Tinggi Badan']<=180)) /sample_size
print(f"Probabilitas Tinggi Badan antara 160-180 cm: {prob:.2f}")

#PLot CDF
plt.figure(figsize=(8,6))
sns.ecdfplot(df['Tinggi Badan'], color='green')
plt.title('Probabilitas Kumulatif Tinggi Badan')
plt.xlabel('Tinggi Badan (cm)')
plt.ylabel('Probabilitas Kumulatif')
plt.show()

#Statistik deskriptif
print(df['Tinggi Badan'].describe())