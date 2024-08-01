<link rel="stylesheet" href="./estilo.css">

<div class="language-selector">
            <span class="en">English</span>
            <input type="checkbox" class="check">
            <span class="es">Spanish</span>
        </div>
        
        <script>
      document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.querySelector('.check');

        // Function to determine the current language based on the URL
        function getCurrentLanguage() {
          return window.location.pathname.includes('/es/') ? 'es' : 'en';
        }

        // Set the checkbox state based on the current language
        checkbox.checked = getCurrentLanguage() === 'es';

        // Redirect based on language preference
        function redirectBasedOnLanguage() {
          const currentLanguage = getCurrentLanguage();
          const isChecked = checkbox.checked;
          const newLanguage = isChecked ? 'es' : 'en';

          // Redirect only if the current language is different from the selected language
          if (currentLanguage !== newLanguage) {
            const path = `/portafolio/${newLanguage}/index.php`;
            window.location.href = path;
          }
        }

        // Handle checkbox change event
        checkbox.addEventListener('change', redirectBasedOnLanguage);

        // Optional: Redirect on page load if necessary, but avoid redirection loop
        if (window.location.pathname !== `/portafolio/${getCurrentLanguage()}/index.php`) {
          redirectBasedOnLanguage();
        }
      });
    </script>