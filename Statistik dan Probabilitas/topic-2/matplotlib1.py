import numpy as np
import matplotlib.pyplot as plt

mean_target = 50
std_dev = 5

# Membuat 100 data acak dengan ketentuan
data = np.random.normal(mean_target, std_dev, 100)

# Menghitung statistik
mean_data = np.mean(data)
std_dev = np.std(data)
median_data = np.median(data)

# Membuat plot
plt.plot(data)
plt.scatter([mean_target], [mean_data], label="Rata-rata Target", color="red")
plt.scatter([median_data], [median_data], label="Median Data", color="green")

# Menampilkan statistik
print(f"Random Data: {data}")
print(f"Rata-rata: {mean_data}")
print(f"Standar Deviasi: {std_dev}")
print(f"Median: {median_data}")

# Menambahkan judul dan label
plt.title('Data Distribusi Normal')
plt.xlabel('Indeks')
plt.ylabel('Nilai')
plt.legend()
plt.show()
