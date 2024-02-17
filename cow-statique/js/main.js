// ------------------------ Starting of Script ---------------------------

// Add hovered class in selected list item
let list = document.querySelectorAll('.navigation ul li');

function activeLink() {
    list.forEach((item) =>
        item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item) =>
    item.addEventListener('mouseover', activeLink));

// Side Menu Toggle
let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');

toggle.onclick = function () {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}

// Account Menu Toggle
let toggleMenu = document.querySelector('.accountMenu');
let userToggler = document.querySelector('.user');
userToggler.onclick = function () {
    toggleMenu.classList.toggle('active');
}



function showCard() {
    document.getElementById('cowCard').classList.add('show');
}

function hideCard() {
    document.getElementById('cowCard').classList.remove('show');
}

function saveCow() {
    // Add logic to save cow information
    hideCard(); // Hide the card after saving
}


//*----------------------------------------birth---------------------------------------------*/


/* -----------------------------------rotation card animation------------------------------------------------ */


// Save function (you can customize this according to your needs)
function saveCow() {
    // Add your save logic here
    alert('Cow information saved!');
}
