import "./bootstrap";
import "remixicon/fonts/remixicon.css";

const searchButton = document.getElementById("searchButton");
const closeButton = document.getElementById("closeButton");
const searchModal = document.getElementById("searchModal");
const body = document.body;
let scrollPosition = 0; // Variabel untuk menyimpan posisi scroll

// Fungsi untuk membuka modal
function openModal() {
    // Simpan posisi scroll saat ini
    scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
    
    // Tambahkan class ke body untuk mencegah scroll
    body.style.overflow = 'hidden';
    body.style.position = 'fixed';
    body.style.top = `-${scrollPosition}px`; // Kompensasi posisi scroll
    body.style.width = '100%';
    
    searchModal.classList.remove("hidden");
}

// Fungsi untuk menutup modal
function closeModal() {
    searchModal.classList.add("hidden");
    
    // Kembalikan properti scroll
    body.style.overflow = '';
    body.style.position = '';
    body.style.top = '';
    body.style.width = '';
    
    // Kembalikan posisi scroll
    window.scrollTo(0, scrollPosition);
}

// Event listeners (tetap sama)
searchButton.addEventListener("click", openModal);
closeButton.addEventListener("click", closeModal);
searchModal.addEventListener("click", (e) => {
    if (e.target === searchModal) closeModal();
});
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !searchModal.classList.contains('hidden')) closeModal();
});