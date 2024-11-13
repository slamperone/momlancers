<script>
window.addEventListener('load', function() {
  // Hace desaparecer el loading animation
  document.getElementById('status').style.display = 'none';

  // Desaparece el DIV blanco que cubre el sitio web con un retraso
  setTimeout(function() {
    document.getElementById('preloader').classList.add('fade-out');
    setTimeout(function() {
      document.getElementById('preloader').style.display = 'none';
    }, 500);
  }, 0);

  // Oculta el body al inicio y luego lo muestra con fade-in
  document.body.classList.add('fade-in');
  setTimeout(function() {
    document.body.classList.add('fade-in-visible');
  }, 0);
});

// Muestra el preloader al abandonar la página
window.addEventListener('beforeunload', function(event) {
  document.getElementById('status').style.display = 'block';
  document.getElementById('preloader').style.display = 'flex';
  document.body.classList.remove('fade-in-visible');
});
</script>
 

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>
<script>
  AOS.init({
     once: true, // whether animation should happen only once - while scrolling down
  });

   window.addEventListener('scroll', function() {
            var header = document.getElementById('header');
 
           

            if (window.scrollY > 100) {
                header.classList.add('sticky');
               
            } else {
                header.classList.remove('sticky');
           
            }
  });
  
        // Detectar si el dispositivo es móvil
        function isMobile() {
            return /Mobi|Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
        }

        // Cambiar el archivo del video si es un dispositivo móvil
        function changeVideoForMobile() {
            if (isMobile()) {
                const videoElement = document.getElementById('videoPlayer');
                const videoSource = document.getElementById('videoSource');
                videoSource.src = '<?php bloginfo('template_directory');?>/assets/video/momlancer_home_video_mobile'; // Cambiar el archivo para móviles
                videoElement.load(); // Recargar el video con el nuevo archivo
            }
        }

        // Ejecutar la función para cambiar el video si es móvil
        changeVideoForMobile();
    </script>