//// Sélectionnez tous les liens de questions
//const questionToggles = document.querySelectorAll('.active');
//
//// Ajoutez un gestionnaire d'événements à chaque lien
//questionToggles.forEach(toggle => {
//    toggle.addEventListener('click', function(e) {
//        // Empêchez le comportement par défaut du lien (aller vers une autre page)
//        e.preventDefault();
//        // Sélectionnez le paragraphe suivant (la réponse à la question)
//        const answer = this.nextElementSibling;
//        // Basculer la visibilité de la réponse
//        answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
//        this.classList.toggle('open');
//        this.classList.toggle('close');
//    });
//});
//
//const links = document.querySelectorAll("nav li");
//
//icons.addEventListener("click", () => {
//  nav.classList.toggle("active");
//});
//
//links.forEach((link) => {
//  link.addEventListener("click", () => {
//    nav.classList.remove("active");
//  });
//});

//document.addEventListener('DOMContentLoaded', function() {
//  // Sélectionnez toutes les icônes de basculement
//  const questionToggles = document.querySelectorAll('.toggle-icon');
//
//  // Ajoutez un gestionnaire d'événements à chaque icône
//  questionToggles.forEach(toggle => {
//    toggle.addEventListener('click', function(e) {
//      // Empêchez le comportement par défaut
//      e.preventDefault();
//
//      // Sélectionnez le lien et le paragraphe suivants (la réponse à la question)
//      const questionLink = this.previousElementSibling;
//      const answer = this.nextElementSibling;
//
//      // Basculer la visibilité de la réponse
//      answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
//
//      // Basculer les classes du lien pour les styles ouverts/fermés
//      questionLink.classList.toggle('open');
//      questionLink.classList.toggle('close');
//
//      // Basculer l'icône entre plus et moins
//      if (this.src.includes('plus.png')) {
//        this.src = 'path/to/moins.png';
//      } else {
//        this.src = 'path/to/plus.png';
//      }
//    });
//  });
//
//  // Gestion du menu de navigation
//  const icons = document.querySelector('.icons');
//  const nav = document.querySelector('nav');
//  const links = document.querySelectorAll('nav li');
//
//  icons.addEventListener('click', () => {
//    nav.classList.toggle('active');
//  });
//
//  links.forEach(link => {
//    link.addEventListener('click', () => {
//      nav.classList.remove('active');
//    });
//  });
//});
//
//

document.addEventListener('DOMContentLoaded', function() {
  // Sélectionnez toutes les icônes de basculement
  const questionToggles = document.querySelectorAll('.toggle-icon');

  // Ajoutez un gestionnaire d'événements à chaque icône
  questionToggles.forEach(toggle => {
    toggle.addEventListener('click', function(e) {
      // Empêchez le comportement par défaut
      e.preventDefault();

      // Sélectionnez les éléments pertinents
      const listItem = this.closest('li');
      const answer = listItem.querySelector('.answer');
      const plusIcon = listItem.querySelector('.plus-icon');
      const minusIcon = listItem.querySelector('.minus-icon');

      // Basculer la visibilité de la réponse
      answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';

      // Basculer les classes pour les icônes
      plusIcon.classList.toggle('hidden');
      minusIcon.classList.toggle('hidden');
    });
  });

  // Gestion du menu de navigation
  const icons = document.querySelector('.icons');
  const nav = document.querySelector('nav');
  const links = document.querySelectorAll('nav li');

  icons.addEventListener('click', () => {
    nav.classList.toggle('active');
  });

  links.forEach(link => {
    link.addEventListener('click', () => {
      nav.classList.remove('active');
    });
  });
});

const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})