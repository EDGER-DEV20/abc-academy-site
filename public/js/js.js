//Scrolled Navbar
window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// 1. Select the toggler button and the navbar
const toggler = document.querySelector('.navbar-toggler');
const navbar = document.querySelector('.navbar');

// 2. Add the click event listener
toggler.addEventListener('click', () => {
    // Toggles the 'navbar-expanded' class on and off
    navbar.classList.toggle('clickable'); 
});


//Javascript to Trigger Bootstrap Toaster
 document.addEventListener('DOMContentLoaded', function () {
        var toastEl = document.getElementById('liveToast');
        if (toastEl) {
            var toast = new bootstrap.Toast(toastEl, {
                delay: 10000 // Automatically hides after 5 seconds
            });
            toast.show();
        }
    })
