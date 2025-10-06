// Simulasi data cuaca
const weatherData = {
  "Jakarta": {
    temperature: 30,
    condition: "Cerah"
  },
  "Bandung": {
    temperature: 25,
    condition: "Hujan Ringan"
  },
  "Surabaya": {
    temperature: 33,
    condition: "Panas Terik"
  },
  "Samarinda": {
    temperature: 28,
    condition: "Mendung"
  },
  "Balikpapan": {
    temperature: 27,
    condition: "Berawan"
  },
    "Jambi": {
    temperature: 29,
    condition: "Berawan"
  },
    "Batam": {
    temperature: 26,
    condition: "Berawan"
  }
};

function cekCuaca() {
  // Ambil input pengguna
  const city = document.getElementById("cityInput").value.trim();

  // Cek apakah kota ada di data
  if (weatherData[city]) {
    const data = weatherData[city];
    console.log(`Cuaca di ${city}:`);
    console.log(`Suhu: ${data.temperature}°C`);
    console.log(`Kondisi: ${data.condition}`);
  } else {
    console.log(`Data cuaca untuk kota "${city}" tidak tersedia.`);
  }
}
