<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Cunstom Login Project')</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('script.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
@yield('content')
<script src="{{ asset('script.js') }}"></script>


<script>
    let currentImageIndex = 0; // Start with the first image

    function showImage(index) {
        const images = document.querySelectorAll('#background-images > div');
        images.forEach((image, i) => {
            if (i === index) {
                image.classList.remove('hidden');
            } else {
                image.classList.add('hidden');
            }
        });
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % 2; // Loop between 0 and 1
        showImage(currentImageIndex);
    }

    function previousImage() {
        currentImageIndex = (currentImageIndex - 1 + 2) % 2; // Loop between 0 and 1
        showImage(currentImageIndex);
    }

    // Automatically switch background images every 5 seconds
    setInterval(function() {
        nextImage();
    }, 5000);

    // JavaScript for switching background images (already provided in your previous script) 

    // Function to show fixed navbar on scroll
    window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.remove('translate-y-full');
            } else {
                navbar.classList.add('translate-y-full');
            }
        });

        // // JavaScript to show flash message
        // document.addEventListener('DOMContentLoaded', function() {
        //     const flashMessage = document.getElementById('flash-message');
        //     flashMessage.classList.remove('hidden');
        //     setTimeout(() => {
        //         flashMessage.classList.add('hidden');
        //     }, 3000); // Flash message disappears after 3 seconds
        // });

// JavaScript to show flash message
document.addEventListener('DOMContentLoaded', function() {
            const flashMessage = document.getElementById('flash-message');
            const closeButton = document.getElementById('close-flash');
            
            // Show the flash message
            flashMessage.classList.remove('hidden');
        setTimeout(() => {
            flashMessage.classList.remove('opacity-0');
        }, 100);

            // Hide the flash message when the close button is clicked
            closeButton.addEventListener('click', function() {
                setTimeout(() => {
                flashMessage.classList.add('hidden');
            }, 500); // Match the duration of the transition
            });
        });

        //code to add the click more button onnthe fruits
        document.getElementById('see-more-btn').addEventListener('click', function() {
                   setTimeout(() => {
                document.getElementById('more-fruits-section').classList.remove('hidden');
                  this.style.display = 'none'; // Hide the button after click
                   })
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("upButton").style.display = "block";
    } else {
        document.getElementById("upButton").style.display = "none";
    }
}

function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>



</body>
</html>