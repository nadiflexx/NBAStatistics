
<div class="splash">
  <img src="../assets/img/loadIcon.gif" alt="icon">
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
      document.querySelector('.splash').style.display = 'none'; // Oculta la splash screen
      document.querySelector('.container').style.display = 'inline-grid';
      document.querySelector('header').style.display = 'block';// Muestra el contenido de la página
      document.querySelector('body').style.overflow = 'visible';// Muestra el contenido de la página
    }, 5000);
  });
</script>
