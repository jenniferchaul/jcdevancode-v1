// Sélectionnez tous les liens de questions
const questionToggles = document.querySelectorAll('.active');

// Ajoutez un gestionnaire d'événements à chaque lien
questionToggles.forEach(toggle => {
    toggle.addEventListener('click', function(e) {
        // Empêchez le comportement par défaut du lien (aller vers une autre page)
        e.preventDefault();
        // Sélectionnez le paragraphe suivant (la réponse à la question)
        const answer = this.nextElementSibling;
        // Basculer la visibilité de la réponse
        answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
        this.classList.toggle('open');
        this.classList.toggle('close');
    });
});

const links = document.querySelectorAll("nav li");

icons.addEventListener("click", () => {
  nav.classList.toggle("active");
});

links.forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("active");
  });
});