<?php include 'header.php'; ?>

<!-- Hero Section con imagen de fondo -->
<section class="relative h-96 flex items-center justify-center overflow-hidden bg-black">
  <!-- Imagen de fondo -->
  <div class="absolute inset-0 z-0">
    <img 
      src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
      alt="Servicio de Cobranza" 
      class="w-full h-full object-cover opacity-50"
    >
  </div>
  
  <!-- Overlay oscuro -->
  <div class="absolute inset-0 bg-black bg-opacity-60 z-10"></div>
  
  <!-- Contenido principal -->
  <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 animate-fade-in-up">
      Servicio de <span class="text-accent">Cobranza</span>
    </h1>
    <p class="text-xl text-light-gray mb-8 max-w-2xl mx-auto leading-relaxed">
      Soluciones efectivas para la recuperación de cartera con enfoque profesional y resultados comprobados
    </p>
    <div class="animate-fade-in-up delay-200">
      <a href="#contacto" class="bg-accent text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-lg">
        <i class="fas fa-phone-alt mr-3"></i>
        Solicitar Asesoría
      </a>
    </div>
  </div>
</section>

<!-- Sección de Estadísticas -->
<section class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Resultados Comprobados</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Nuestra metodología de cobranza ha demostrado ser efectiva en la recuperación de cartera vencida
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Estadística 1 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="85">0</div>
        <div class="text-light-gray">Éxito en Cobranza Temprana</div>
      </div>

      <!-- Estadística 2 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="70">0</div>
        <div class="text-light-gray">Recuperación en Cartera Vencida</div>
      </div>

      <!-- Estadística 3 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="200">0</div>
        <div class="text-light-gray">Clientes Satisfechos</div>
      </div>

      <!-- Estadística 4 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="15">0</div>
        <div class="text-light-gray">Años de Experiencia</div>
      </div>
    </div>
  </div>
</section>

<!-- Resto del contenido se mantiene igual -->
<section class="py-16 bg-black">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
        Tipos de <span class="text-accent">Cobranza</span>
      </h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Trabajamos lo que es Cobranza Temprana, Proactiva y Judicial con metodologías especializadas
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Cobranza Temprana -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-clock"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Cobranza Temprana</h3>
        <ul class="space-y-3 text-light-gray">
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Envíos masivos digitales</span>
              <p class="text-sm mt-1">Recordatorios automatizados por email, SMS y WhatsApp</p>
            </div>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Seguimiento sistemático</span>
              <p class="text-sm mt-1">Control y monitoreo de pagos pendientes</p>
            </div>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Comunicación preventiva</span>
              <p class="text-sm mt-1">Recordatorios antes de la fecha de vencimiento</p>
            </div>
          </li>
        </ul>
      </div>

      <!-- Cobranza Proactiva -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-headset"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Cobranza Proactiva</h3>
        <ul class="space-y-3 text-light-gray">
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Contacto personalizado</span>
              <p class="text-sm mt-1">Gestión directa con deudores vía telefónica</p>
            </div>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Negociación de pagos</span>
              <p class="text-sm mt-1">Planes de pago adaptados a cada situación</p>
            </div>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Seguimiento continuo</span>
              <p class="text-sm mt-1">Acompañamiento durante el proceso de pago</p>
            </div>
          </li>
        </ul>
      </div>

      <!-- Cobranza Judicial -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-gavel"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Cobranza Judicial</h3>
        <ul class="space-y-3 text-light-gray">
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Acciones legales</span>
              <p class="text-sm mt-1">Procesos judiciales para deudas incobrables</p>
            </div>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Embargos y demandas</span>
              <p class="text-sm mt-1">Medidas coercitivas conforme a la ley</p>
            </div>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check text-accent mr-3 mt-1"></i>
            <div>
              <span class="text-white font-medium">Asesoría jurídica</span>
              <p class="text-sm mt-1">Acompañamiento legal especializado</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Proceso -->
<section class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso de Cobranza</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Implementamos una metodología estructurada que maximiza las posibilidades de recuperación
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <!-- Paso 1 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold text-lg">
          1
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Análisis</h3>
        <p class="text-light-gray text-sm">
          Evaluamos la cartera y clasificamos por antigüedad y monto
        </p>
      </div>

      <!-- Paso 2 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold text-lg">
          2
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Contacto</h3>
        <p class="text-light-gray text-sm">
          Establecemos comunicación mediante múltiples canales
        </p>
      </div>

      <!-- Paso 3 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold text-lg">
          3
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Negociación</h3>
        <p class="text-light-gray text-sm">
          Proponemos alternativas de pago flexibles y realistas
        </p>
      </div>

      <!-- Paso 4 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold text-lg">
          4
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Seguimiento</h3>
        <p class="text-light-gray text-sm">
          Monitoreamos los acuerdos hasta su cumplimiento total
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Clientes -->
<section class="py-16 bg-black">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Empresas que Confían en Nosotros</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Colaboramos con empresas líderes en sus respectivos sectores
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
      <div class="bg-dark-gray p-6 rounded-xl flex items-center justify-center h-24 grayscale hover:grayscale-0 transition-all duration-300">
        <span class="text-white font-bold text-xl">VOLANA</span>
      </div>
      <div class="bg-dark-gray p-6 rounded-xl flex items-center justify-center h-24 grayscale hover:grayscale-0 transition-all duration-300">
        <span class="text-white font-bold text-xl">EXITUS</span>
      </div>
      <div class="bg-dark-gray p-6 rounded-xl flex items-center justify-center h-24 grayscale hover:grayscale-0 transition-all duration-300">
        <span class="text-white font-bold text-xl">FORTALEZA</span>
      </div>
      <div class="bg-dark-gray p-6 rounded-xl flex items-center justify-center h-24 grayscale hover:grayscale-0 transition-all duration-300">
        <span class="text-white font-bold text-xl">CAME</span>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Contacto -->
<section id="contacto" class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Necesita Ayuda con su Cartera Vencida?</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Contáctenos para una evaluación sin costo de su cartera y una propuesta personalizada
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Información de Contacto -->
      <div class="bg-gray rounded-xl p-8 text-white">
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
      <div class="bg-gray rounded-xl p-8 text-white">
        <h3 class="text-2xl font-semibold mb-6 text-accent">Solicitar Asesoría</h3>
        <p class="text-light-gray mb-6">
          Complete el formulario y nos pondremos en contacto con usted a la brevedad
        </p>
        
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20estoy%20interesado%20en%20el%20servicio%20de%20cobranza" 
             class="block w-full bg-green-600 text-white py-4 rounded-lg font-semibold text-center hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-whatsapp mr-3 text-xl"></i>
            Contactar por WhatsApp
          </a>
          
          <a href="tel:+525637713882" 
             class="block w-full bg-accent text-white py-4 rounded-lg font-semibold text-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-phone mr-3"></i>
            Llamar Ahora
          </a>
          
          <a href="mailto:admin@bdosoluciones.com?subject=Solicitud de Información - Servicio de Cobranza" 
             class="block w-full bg-dark-gray text-white py-4 rounded-lg font-semibold text-center hover:bg-gray-800 transition-all duration-300 transform hover:scale-105 border border-gray">
            <i class="fas fa-envelope mr-3"></i>
            Enviar Email
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Animaciones específicas para cobranza */
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
  // Función mejorada para animación de contadores
  function animateCounter(element, target, duration = 2000) {
    let current = 0;
    const increment = target / (duration / 16);
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        element.textContent = target + (target <= 100 ? '%' : '+');
        clearInterval(timer);
      } else {
        element.textContent = Math.floor(current) + (target <= 100 ? '%' : '+');
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

    // También podemos animar los contadores cuando la sección sea visible
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counters = entry.target.querySelectorAll('.counter');
          counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            animateCounter(counter, target);
          });
          counterObserver.unobserve(entry.target); // Solo animar una vez
        }
      });
    }, { threshold: 0.5 });

    // Observar la sección de estadísticas específicamente
    const statsSectionElement = document.querySelector('.bg-dark-gray');
    if (statsSectionElement) {
      counterObserver.observe(statsSectionElement);
    }
  });

  // Función alternativa más robusta
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