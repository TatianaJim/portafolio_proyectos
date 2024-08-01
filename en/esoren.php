<link rel="stylesheet" href="../estilo.css">

<div class="language-selector">
            <span class="en">English</span>
            <input type="checkbox" class="check">
            <span class="es">Spanish</span>
        </div>

        <script>
      document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.querySelector('.check');

        // Redirige a la carpeta de inglés si el checkbox está marcado
        function redirectBasedOnLanguage() {
          const isChecked = checkbox.checked;
          const path = isChecked ? '../index.php' : '../index.html';
          window.location.href = path;
        }

        // Maneja el evento de cambio del checkbox
        checkbox.addEventListener('change', redirectBasedOnLanguage);

        // Opcional: redirige al cargar la página si el checkbox ya está marcado
        if (checkbox.checked) {
          redirectBasedOnLanguage();
        }
      });
    </script>
        