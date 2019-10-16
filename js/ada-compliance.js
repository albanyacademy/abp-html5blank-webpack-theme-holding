// Establishing Elements
const ada_content = document.getElementById('ada-content');
const ada_button = document.getElementById('ada-open-container');

// add and remove ADA Compliance class 'open'
  ada_button.addEventListener('click', e => {
    ada_content.classList.toggle('open');
    ada_button.classList.toggle('open');
  })
