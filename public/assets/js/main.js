
window.addEventListener('scroll', function () {
    var navbar = document.getElementById('navbar');
    var distanceFromTop = window.pageYOffset || document.documentElement.scrollTop;

    if (distanceFromTop > 150) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// window.addEventListener('load', function() {
//     var connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
//     if (connection && connection.effectiveType === 'slow-2g') {
//       var loadingScreen = document.getElementById('loading-screen');
//       loadingScreen.classList.remove('hidden');
//     }
//   });

window.addEventListener('load', function () {
    var loadingScreen = document.getElementById('loading-screen');

    function hideLoadingScreen() {
        loadingScreen.style.display = 'none';
    }

    function showLoadingScreen() {
        loadingScreen.style.display = 'flex';
    }

    function checkInternetConnection() {
        if (!navigator.onLine) {
            showLoadingScreen();
            setTimeout(hideLoadingScreen, 3000);
            setTimeout(checkInternetConnection, 1000);
        } else {
            hideLoadingScreen();
        }
    }

    checkInternetConnection();
});
