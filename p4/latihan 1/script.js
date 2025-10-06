// ambil elemen
const tombol = document.getElementById("btn");
const teks = document.getElementById("teks");

//event klik tombol
tombol.addEventListener("click", function() {
    teks.textContent = "Teks berhasil diubah dengan javsacript!";
    teks.style.color = "green";
});

//contoh penggunaa const = nilai tidak bisa diubah
const pi = 3.14159;
console.log("Nilai konstanta pi:", pi);
//jika kita coba ubah nilainya akan eror
// pi = 3.14: //typeError: Assignment to constant variable.

//contoh penggunaan let = nilai bisa diubah
let umur = 20;
console.log("Umur sekarang:", umur);
//ubah nilainya
umur = 21;
console.log("Umur setelah ulang tahun:", umur);

// string - teks
let nama = "Andi";
console.log("Nama :",nama);

// nunmber - angka(bisa integer atau float)
let nilai = 85.5;
console.log("Nilai :", nilai);

//boolean - true/false
let lulus = true;
console.log("apakah lulus?", lulus);

//-- latihan 2: if....else.---
console.log("latihan 2 dijalankan!");

let punyaSIM =true;

if(punyaSIM === true){
    console.log("anda boleh mengemudi");
} else {
    console.log("anda tidak boleh mengemudi");
}