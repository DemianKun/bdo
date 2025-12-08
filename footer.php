<!-- Footer Elegante y Formal -->
<footer class="footer-elegant py-12 px-4">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <!-- Información de Contacto -->
    <div>
      <h4 class="font-bold text-white text-xl mb-6 flex items-center">
        <i class="fas fa-envelope mr-3 text-accent"></i>
        Contacto
      </h4>
      <div class="space-y-3">
        <p class="text-light-gray flex items-center">
          <i class="fas fa-envelope text-accent mr-3"></i>
          <a href="mailto:admin@bdosoluciones.com" class="footer-link hover:text-white">admin@bdosoluciones.com</a>
        </p>
        <p class="text-light-gray flex items-center">
          <i class="fas fa-phone-alt text-accent mr-3"></i>
          +52 5637713882
        </p>
        <p class="text-light-gray flex items-center">
          <i class="fas fa-map-marker-alt text-accent mr-3"></i>
          Ixtapaluca, Estado de México
        </p>
      </div>
    </div>

    <!-- Enlaces Rápidos -->
    <div>
      <h4 class="font-bold text-white text-xl mb-6 flex items-center">
        <i class="fas fa-link mr-3 text-accent"></i>
        Enlaces Rápidos
      </h4>
      <ul class="space-y-3">
        <li>
          <a href="index.php" class="footer-link text-light-gray hover:text-white flex items-center">
            <i class="fas fa-chevron-right text-accent mr-2 text-sm"></i>
            Inicio
          </a>
        </li>
        <li>
          <a href="#" class="footer-link text-light-gray hover:text-white flex items-center">
            <i class="fas fa-chevron-right text-accent mr-2 text-sm"></i>
            Términos y Condiciones
          </a>
        </li>
        <li>
          <a href="#" class="footer-link text-light-gray hover:text-white flex items-center">
            <i class="fas fa-chevron-right text-accent mr-2 text-sm"></i>
            Política de Privacidad
          </a>
        </li>
        <li>
          <a href="#" class="footer-link text-light-gray hover:text-white flex items-center">
            <i class="fas fa-chevron-right text-accent mr-2 text-sm"></i>
            Preguntas Frecuentes
          </a>
        </li>
      </ul>
    </div>

    <!-- Redes Sociales y Newsletter -->
    <div>
      <h4 class="font-bold text-white text-xl mb-6 flex items-center">
        <i class="fas fa-share-alt mr-3 text-accent"></i>
        Síguenos
      </h4>
      
      <!-- Redes Sociales -->
      <div class="flex space-x-3 mb-6">
        <a href="https://www.facebook.com/BDOixtapaluca" target="_blank" class="social-btn w-10 h-10 rounded-full flex items-center justify-center text-white">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/bdo_ixtapaluca" target="_blank" class="social-btn w-10 h-10 rounded-full flex items-center justify-center text-white">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://api.whatsapp.com/send?phone=5215637713882" target="_blank" class="social-btn w-10 h-10 rounded-full flex items-center justify-center text-white">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.linkedin.com/company/bdo-ixtapaluca/" target="_blank" class="social-btn w-10 h-10 rounded-full flex items-center justify-center text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>

      <!-- Newsletter -->
      <div>
        <p class="text-light-gray mb-3">Suscríbete a nuestro boletín:</p>
        <div class="flex">
          <input type="email" placeholder="Tu correo electrónico" class="bg-gray text-white px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-accent w-full border border-gray">
          <button class="bg-accent text-white px-4 py-2 rounded-r-lg font-semibold hover:bg-blue-700 transition-colors">
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Línea divisoria y copyright -->
  <div class="max-w-7xl mx-auto mt-10 pt-6 border-t border-gray text-center">
    <p class="text-light-gray mb-2">© 2025 BDO Soluciones Efectivas. Todos los derechos reservados.</p>
    <p class="text-light-gray text-sm">Desarrollado con <i class="fas fa-heart text-accent mx-1"></i> para impulsar tu negocio</p>
  </div>
</footer>

<!-- Script para el menú móvil -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (menuToggle && mobileMenu) {
      menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
      
      document.addEventListener('click', (e) => {
        if (!menuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
          mobileMenu.classList.add('hidden');
        }
      });
    }
  });
</script>

</body>
</html>