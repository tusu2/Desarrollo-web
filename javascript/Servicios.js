document.addEventListener("DOMContentLoaded", () => {
    const img = document.querySelector(".animate-on-load");
    img.addEventListener("load", () => {
        img.classList.add("loaded");
    });

    // Si la imagen ya está en caché, disparar manualmente
    if (img.complete) {
        img.classList.add("loaded");
    }
   
});

// Detectar el scroll y activar la animación
window.addEventListener("scroll", function() {
    const cards = document.querySelectorAll('.animate-card');

    cards.forEach(function(card) {
        const cardPosition = card.getBoundingClientRect().top;
        const screenPosition = window.innerHeight;

        if (cardPosition < screenPosition) {
            card.classList.add('visible');
        }
    });
});



    
    

