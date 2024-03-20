const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

document.getElementById("printButton").addEventListener("click", function () {
    // Sembunyikan navbar sebelum mencetak
    document.getElementById("sidebar").style.display = "none";
    // Cetak halaman
    window.print();
    // Tampilkan kembali navbar setelah mencetak
    document.getElementById("sidebar").style.display = "block";
});
