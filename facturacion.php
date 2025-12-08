<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-96 flex items-center justify-center overflow-hidden bg-black">
  <!-- Imagen de fondo -->
  <div class="absolute inset-0 z-0">
    <img 
      src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
      alt="Servicio de Facturación" 
      class="w-full h-full object-cover opacity-50"
    >
  </div>
  
  <!-- Overlay oscuro -->
  <div class="absolute inset-0 bg-black bg-opacity-60 z-10"></div>
  
  <!-- Contenido principal -->
  <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 animate-fade-in-up">
      Servicio de <span class="text-accent">Facturación</span>
    </h1>
    <p class="text-xl text-light-gray mb-8 max-w-2xl mx-auto leading-relaxed">
      Soluciones integrales de facturación para todo tipo de empresas. Cumplimiento normativo garantizado
    </p>
    <div class="animate-fade-in-up delay-200">
      <a href="#contacto" class="bg-accent text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-lg">
        <i class="fas fa-file-invoice-dollar mr-3"></i>
        Solicitar Asesoría
      </a>
    </div>
  </div>
</section>

<!-- Sección de Estadísticas -->
<section class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ventajas de Nuestro Servicio</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Optimizamos tus procesos de facturación para mayor eficiencia y cumplimiento normativo
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Estadística 1 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="100">0</div>
        <div class="text-light-gray">Cumplimiento normativo SAT</div>
      </div>

      <!-- Estadística 2 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="70">0</div>
        <div class="text-light-gray">Ahorro de tiempo en procesos</div>
      </div>

      <!-- Estadística 3 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2">24/7</div>
        <div class="text-light-gray">Disponibilidad del servicio</div>
      </div>

      <!-- Estadística 4 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="100">0</div>
        <div class="text-light-gray">Seguridad de datos</div>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Tipos de Facturación -->
<section class="py-16 bg-black">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
        Realizamos diferentes tipos de <span class="text-accent">Facturación</span>
      </h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Adaptamos nuestros servicios a las necesidades específicas de tu empresa
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Factura Proforma -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-file-medical"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Factura Proforma</h3>
        <p class="text-light-gray mb-4">
          Documento que se emite para dar una estimación de los productos o servicios que se van a vender
        </p>
        <button onclick="toggleDetails('proforma')" class="bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 w-full">
          Ver Detalles
        </button>
        <div id="proforma" class="details mt-4 text-light-gray">
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>No tiene valor fiscal</li>
            <li>No es un documento de pago</li>
            <li>Útil para trámites aduaneros</li>
            <li>Previa a la factura definitiva</li>
          </ul>
        </div>
      </div>

      <!-- Factura Comercial -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-file-contract"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Factura Comercial</h3>
        <p class="text-light-gray mb-4">
          Documento legalmente válido, utilizado para registrar una transacción de bienes o servicios
        </p>
        <button onclick="toggleDetails('comercial')" class="bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 w-full">
          Ver Detalles
        </button>
        <div id="comercial" class="details mt-4 text-light-gray">
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>Documento legal y fiscal</li>
            <li>Incluye impuestos y descuentos</li>
            <li>Obligatorio para deducciones</li>
            <li>Comprobante de operación</li>
          </ul>
        </div>
      </div>

      <!-- Factura de Crédito -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-credit-card"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Factura de Crédito</h3>
        <p class="text-light-gray mb-4">
          Se utiliza cuando el pago no se realiza al momento de la venta, con plazo para el pago
        </p>
        <button onclick="toggleDetails('credito')" class="bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 w-full">
          Ver Detalles
        </button>
        <div id="credito" class="details mt-4 text-light-gray">
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>Plazo para el pago</li>
            <li>Puede incluir intereses</li>
            <li>Registro de cuenta por cobrar</li>
            <li>Documento legalmente válido</li>
          </ul>
        </div>
      </div>

      <!-- Factura de Contado -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-money-bill-wave"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Factura de Contado</h3>
        <p class="text-light-gray mb-4">
          Cuando el pago se realiza inmediatamente después de la compra, común en transacciones al por menor
        </p>
        <button onclick="toggleDetails('contado')" class="bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 w-full">
          Ver Detalles
        </button>
        <div id="contado" class="details mt-4 text-light-gray">
          <ul class="list-disc pl-5 space-y-2 text-sm">
            <li>Pago inmediato</li>
            <li>Común en transacciones al por menor</li>
            <li>Sin extensión de crédito</li>
            <li>Comprobante de pago completo</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Proceso -->
<section class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso de Facturación</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Implementamos un flujo de trabajo eficiente para garantizar facturación precisa y oportuna
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <!-- Paso 1 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold text-lg">
          1
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Recepción</h3>
        <p class="text-light-gray text-sm">
          Recibimos tus documentos y datos necesarios para la facturación
        </p>
      </div>

      <!-- Paso 2 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold text-lg">
          2
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Validación</h3>
        <p class="text-light-gray text-sm">
          Verificamos que toda la información cumpla con los requisitos fiscales
        </p>
      </div>

      <!-- Paso 3 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold text-lg">
          3
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Emisión</h3>
        <p class="text-light-gray text-sm">
          Generamos las facturas con todos los datos requeridos por el SAT
        </p>
      </div>

      <!-- Paso 4 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold text-lg">
          4
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Entrega</h3>
        <p class="text-light-gray text-sm">
          Enviamos las facturas a tus clientes y te proporcionamos copias
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Beneficios -->
<section class="py-16 bg-black">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Beneficios de Externalizar tu Facturación</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Enfócate en tu negocio principal mientras nosotros nos encargamos de tu facturación
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Beneficio 1 -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-lock"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Seguridad</h3>
        <p class="text-light-gray">
          Tus datos fiscales están protegidos con los más altos estándares de seguridad
        </p>
      </div>

      <!-- Beneficio 2 -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-bolt"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Rapidez</h3>
        <p class="text-light-gray">
          Procesamos tus facturas en tiempo récord, sin retrasos ni complicaciones
        </p>
      </div>

      <!-- Beneficio 3 -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-check-double"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Exactitud</h3>
        <p class="text-light-gray">
          Garantizamos que todas tus facturas cumplan con los requisitos del SAT
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Clientes -->
<section class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Empresas que Confían en Nosotros</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Colaboramos con empresas líderes en sus respectivos sectores
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
      <div class="bg-gray p-6 rounded-xl flex items-center justify-center h-24 grayscale hover:grayscale-0 transition-all duration-300">
        <span class="text-white font-bold text-xl">VOLANA</span>
      </div>
      <div class="bg-gray p-6 rounded-xl flex items-center justify-center h-24 grayscale hover:grayscale-0 transition-all duration-300">
        <span class="text-white font-bold text-xl">EXITUS</span>
      </div>
      <div class="bg-gray p-6 rounded-xl flex items-center justify-center h-24 grayscale hover:grayscale-0 transition-all duration-300">
        <span class="text-white font-bold text-xl">FORTALEZA</span>
      </div>
      <div class="bg-gray p-6 rounded-xl flex items-center justify-center h-24 grayscale hover:grayscale-0 transition-all duration-300">
        <span class="text-white font-bold text-xl">CAME</span>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Contacto -->
<section id="contacto" class="py-16 bg-black">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Necesita Asesoría en Facturación?</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Contáctenos para una evaluación sin costo de sus necesidades de facturación
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Información de Contacto -->
      <div class="bg-dark-gray rounded-xl p-8 text-white">
        <h3 class="text-2xl font-semibold mb-6 text-accent">Información de Contacto</h3>
        <div class="space-y-4">
          <div class="flex items-start">
            <i class="fas fa-envelope text-accent mr-4 mt-1 text-lg"></i>
            <div>
              <p class="font-semibold">Email</p>
              <p class="text-light-gray">admin@bdosoluciones.com</p>
            </div>
          </div>
          <div class="flex items-start">
            <i class="fas fa-phone-alt text-accent mr-4 mt-1 text-lg"></i>
            <div>
              <p class="font-semibold">Teléfono</p>
              <p class="text-light-gray">+52 5637713882</p>
            </div>
          </div>
          <div class="flex items-start">
            <i class="fas fa-clock text-accent mr-4 mt-1 text-lg"></i>
            <div>
              <p class="font-semibold">Horario</p>
              <p class="text-light-gray">Lunes a Viernes: 9:00 - 18:00</p>
            </div>
          </div>
          <div class="flex items-start">
            <i class="fas fa-map-marker-alt text-accent mr-4 mt-1 text-lg"></i>
            <div>
              <p class="font-semibold">Ubicación</p>
              <p class="text-light-gray">Ixtapaluca, Estado de México</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Formulario de Contacto -->
      <div class="bg-dark-gray rounded-xl p-8 text-white">
        <h3 class="text-2xl font-semibold mb-6 text-accent">Solicitar Asesoría</h3>
        <p class="text-light-gray mb-6">
          Completa el formulario y nos pondremos en contacto contigo a la brevedad
        </p>
        
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20estoy%20interesado%20en%20el%20servicio%20de%20facturación" 
             class="block w-full bg-green-600 text-white py-4 rounded-lg font-semibold text-center hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-whatsapp mr-3 text-xl"></i>
            Contactar por WhatsApp
          </a>
          
          <a href="tel:+525637713882" 
             class="block w-full bg-accent text-white py-4 rounded-lg font-semibold text-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-phone mr-3"></i>
            Llamar Ahora
          </a>
          
          <a href="mailto:admin@bdosoluciones.com?subject=Solicitud de Información - Servicio de Facturación" 
             class="block w-full bg-gray text-white py-4 rounded-lg font-semibold text-center hover:bg-gray-800 transition-all duration-300 transform hover:scale-105 border border-gray">
            <i class="fas fa-envelope mr-3"></i>
            Enviar Email
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Animaciones específicas para facturación */
  .service-card {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
  }

  .service-card.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
  }

  .delay-200 {
    animation-delay: 200ms;
  }

  /* Detalles desplegables */
  .details {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease-out;
  }

  .details.open {
    max-height: 500px;
  }

  @keyframes fade-in-up {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<script>
  // Función para animación de contadores
  function animateCounter(element, target, duration = 2000) {
    let current = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        element.textContent = target + '%';
        clearInterval(timer);
      } else {
        element.textContent = Math.floor(current) + '%';
      }
    }, 16);
  }

  // Observer para animaciones al hacer scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        
        // Si contiene contadores, animarlos
        const counters = entry.target.querySelectorAll('.counter');
        counters.forEach(counter => {
          const target = parseInt(counter.getAttribute('data-target'));
          animateCounter(counter, target);
        });
      }
    });
  }, { threshold: 0.1 });

  // Inicializar cuando el DOM esté listo
  document.addEventListener('DOMContentLoaded', () => {
    // Observar secciones que contienen contadores
    const statsSection = document.querySelector('.bg-dark-gray');
    if (statsSection) {
      observer.observe(statsSection);
    }

    // Observar tarjetas de servicio
    document.querySelectorAll('.service-card').forEach(card => {
      observer.observe(card);
    });

    // Smooth scroll para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Observer específico para contadores
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counters = entry.target.querySelectorAll('.counter');
          counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            animateCounter(counter, target);
          });
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    // Observar la sección de estadísticas
    const statsSectionElement = document.querySelector('.bg-dark-gray');
    if (statsSectionElement) {
      counterObserver.observe(statsSectionElement);
    }

    // Inicializar todos los detalles como cerrados
    document.querySelectorAll('.details').forEach(detail => {
      detail.style.maxHeight = '0';
    });
  });

  // Función para detalles desplegables
  function toggleDetails(id) {
    const element = document.getElementById(id);
    element.classList.toggle('open');
    
    // Animación suave de altura
    if (element.classList.contains('open')) {
      element.style.maxHeight = element.scrollHeight + 'px';
    } else {
      element.style.maxHeight = '0';
    }
  }

  // Función alternativa más robusta para contadores
  function initCounters() {
    const counters = document.querySelectorAll('.counter');
    const options = {
      threshold: 0.5,
      rootMargin: '0px 0px -100px 0px'
    };

    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = parseInt(counter.getAttribute('data-target'));
          animateCounter(counter, target);
          counterObserver.unobserve(counter);
        }
      });
    }, options);

    counters.forEach(counter => {
      counterObserver.observe(counter);
    });
  }

  // Ejecutar cuando la página esté completamente cargada
  window.addEventListener('load', initCounters);
</script>

<?php include 'footer.php'; ?>