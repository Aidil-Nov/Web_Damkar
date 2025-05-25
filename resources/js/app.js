import "./bootstrap";
import "remixicon/fonts/remixicon.css";

// JavaScript untuk mengontrol modal
const searchButton = document.getElementById("searchButton");
const closeButton = document.getElementById("closeButton");
const searchModal = document.getElementById("searchModal");
const body = document.body;

// Fungsi untuk membuka modal
function openModal() {
    searchModal.classList.remove("hidden");
    body.style.overflow = "hidden";
    body.style.position = "fixed";
    body.style.width = "100%";
}

// Fungsi untuk menutup modal
function closeModal() {
    searchModal.classList.add("hidden");
    body.style.overflow = "";
    body.style.position = "";
    body.style.width = "";
}

// Buka modal saat tombol search diklik
searchButton.addEventListener("click", openModal);

// Tutup modal saat tombol close diklik
closeButton.addEventListener("click", closeModal);

// Tutup modal saat klik di luar area modal
searchModal.addEventListener("click", (e) => {
    if (e.target === searchModal) {
        closeModal();
    }
});
