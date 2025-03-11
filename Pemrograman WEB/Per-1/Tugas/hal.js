function hitungBMI() {
    let tinggi = parseFloat(document.getElementById("tinggi").value);
    let berat = parseFloat(document.getElementById("berat").value);
    let gender = document.querySelector('input[name="gender"]:checked');

    if (!gender) {
        alert("Pilih jenis kelamin terlebih dahulu!");
        return;
    }

    if (!isNaN(tinggi) && !isNaN(berat) && tinggi > 0 && berat > 0) {
        let tinggiMeter = tinggi / 100;
        let bmi = (berat / (tinggiMeter * tinggiMeter)).toFixed(2);
        
        localStorage.setItem("bmi", bmi);
        
        window.location.href = "hal2.html?bmi=" + bmi;
    } else {
        alert("Masukkan berat dan tinggi yang valid!");
    }
}

function tampilkanBMI() {
    let params = new URLSearchParams(window.location.search);
    let bmi = parseFloat(params.get("bmi")) || parseFloat(localStorage.getItem("bmi"));

    if (!isNaN(bmi)) {
        document.getElementById("bmiResult").innerText = "BMI Anda: " + bmi;

        let kondisi = "";
        if (bmi < 18.5) {
            kondisi = "Anda memiliki berat badan kurang.";
        } else if (bmi >= 18.5 && bmi <= 24.9) {
            kondisi = "Berat badan Anda normal.";
        } else if (bmi >= 25 && bmi <= 29.9) {
            kondisi = "Anda memiliki berat badan berlebih.";
        } else {
            kondisi = "Anda mengalami obesitas.";
        }

        document.getElementById("bmiCondition").innerText = kondisi;
    } else {
        document.getElementById("bmiResult").innerText = "Data tidak ditemukan.";
    }
}

function tampilkanSaran() {
    let params = new URLSearchParams(window.location.search);
    let bmi = parseFloat(params.get("bmi")) || parseFloat(localStorage.getItem("bmi"));
    
    let saran = "", linkArtikel = "#";

    if (!isNaN(bmi)) {
        if (bmi < 18.5) {
            saran = "Anda memiliki berat badan kurang. Coba makan makanan bergizi lebih banyak.";
            linkArtikel = "https://www.alodokter.com/faktor-penyebab-badan-kurus-dan-tips-sehat-untuk-mengatasinya";
        } else if (bmi >= 18.5 && bmi <= 24.9) {
            saran = "Berat badan Anda normal. Pertahankan pola makan sehat dan olahraga.";
            linkArtikel = "https://ayosehat.kemkes.go.id/5-langkah-efektif-untuk-menjaga-berat-badan";
        } else if (bmi >= 25 && bmi <= 29.9) {
            saran = "Anda memiliki berat badan berlebih. Kurangi kalori dan lebih banyak bergerak.";
            linkArtikel = "https://www.siloamhospitals.com/informasi-siloam/artikel/diet-untuk-menurunkan-berat-badan";
        } else {
            saran = "Anda mengalami obesitas. Konsultasikan dengan ahli gizi untuk diet yang tepat.";
            linkArtikel = "https://www.siloamhospitals.com/informasi-siloam/artikel/rekomendasi-diet-untuk-penderita-obesitas";
        }

        document.getElementById("advice").innerText = saran;
        document.getElementById("article").href = linkArtikel;
    } else {
        document.getElementById("advice").innerText = "Data tidak ditemukan.";
    }
}

function keSaran() {
    let params = new URLSearchParams(window.location.search);
    let bmi = params.get("bmi") || localStorage.getItem("bmi");
    window.location.href = "hal3.html?bmi=" + bmi;
}

function kembali() {
    window.history.back();
}

document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("bmiResult")) tampilkanBMI();
    if (document.getElementById("advice")) tampilkanSaran();
});
