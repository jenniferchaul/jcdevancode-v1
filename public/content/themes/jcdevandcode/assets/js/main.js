

document.addEventListener('DOMContentLoaded', function() {
  // Sélectionnez toutes les icônes de basculement et les questions
  const questionToggles = document.querySelectorAll('.toggle-icon');
  const questionLinks = document.querySelectorAll('.active.close');

  // Fonction pour basculer la visibilité de la réponse
  function toggleAnswer(element) {
      // Sélectionnez les éléments pertinents
      const listItem = element.closest('li');
      const answer = listItem.querySelector('.answer');
      const plusIcon = listItem.querySelector('.plus-icon');
      const minusIcon = listItem.querySelector('.minus-icon');

      // Basculer la visibilité de la réponse
      answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';

      // Basculer les classes pour les icônes
      plusIcon.classList.toggle('hidden');
      minusIcon.classList.toggle('hidden');
  }

  // Ajoutez un gestionnaire d'événements à chaque icône
  questionToggles.forEach(toggle => {
      toggle.addEventListener('click', function(e) {
          e.preventDefault();
          toggleAnswer(this);
      });
  });

  // Ajoutez un gestionnaire d'événements à chaque question
  questionLinks.forEach(link => {
      link.addEventListener('click', function(e) {
          e.preventDefault();
          toggleAnswer(this);
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

document.addEventListener('DOMContentLoaded', function() {
  const toggleButton = document.querySelector('.toggle');
  const navbarContent = document.querySelector('.navbar-content');
  const menuIcon = document.querySelector('.menu-icon');
  const closeIcon = document.querySelector('.close-icon');

  toggleButton.addEventListener('click', function(e) {
    e.preventDefault();
    navbarContent.classList.toggle('show');
    menuIcon.classList.toggle('hide');
    closeIcon.classList.toggle('hide');
});
});
