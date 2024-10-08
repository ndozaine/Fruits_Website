document.addEventListener('DOMContentLoaded', function() {

    document.addEventListener('DOMContentLoaded', function () {
    const image1 = document.getElementById('image1');
    const image2 = document.getElementById('image2');

    setInterval(function () {
        image1.classList.toggle('rotate-y-180');
        image2.classList.toggle('rotate-y-180');
    }, 3000); // Change interval time as needed (3000 milliseconds = 3 seconds)
});
    console.log('JavaScript loaded!');
});

document.addEventListener('DOMContentLoaded', function () {
    const image1 = document.getElementById('image1');
    const image2 = document.getElementById('image2');

    setInterval(function () {
        image1.classList.toggle('rotate-y-180');
        image2.classList.toggle('rotate-y-180');
    }, 3000); // Change interval time as needed (3000 milliseconds = 3 seconds)
});



var navToggle = document.getElementById('nav-toggle');
var navContent = document.getElementById('nav-content');

navToggle.addEventListener('click', function() {
    navContent.classList.toggle('hidden');
});


  // JavaScript to show flash message
  document.addEventListener('DOMContentLoaded', function() {
    const flashMessage = document.getElementById('flash-message');
    flashMessage.classList.remove('hidden');
    setTimeout(() => {
        flashMessage.classList.add('hidden');
    }, 3000); // Flash message disappears after 3 seconds
});