<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-96 flex items-center justify-center overflow-hidden bg-black">
  <!-- Imagen de fondo -->
  <div class="absolute inset-0 z-0">
    <img 
      src="https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" 
      alt="Atención al cliente" 
      class="w-full h-full object-cover opacity-50"
    >
  </div>
  
  <!-- Overlay oscuro -->
  <div class="absolute inset-0 bg-black bg-opacity-60 z-10"></div>
  
  <!-- Contenido principal -->
  <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 animate-fade-in-up">
      Atención al <span class="text-accent">Cliente</span>
    </h1>
    <p class="text-xl text-light-gray mb-8 max-w-2xl mx-auto leading-relaxed">
      Tu satisfacción es nuestra prioridad. Contamos con un equipo especializado listo para ayudarte en cada paso.
    </p>
    <div class="animate-fade-in-up delay-200">
      <a href="#contacto" class="bg-accent text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-lg">
        <i class="fas fa-headset mr-3"></i>
        Contáctanos Ahora
      </a>
    </div>
  </div>
</section>

<!-- Sección de Estadísticas -->
<section class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Resultados que Hablan por Sí Solos</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Nuestro compromiso con la excelencia en el servicio se refleja en estos números
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Estadística 1 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="98">0</div>
        <div class="text-light-gray">Satisfacción del Cliente</div>
      </div>

      <!-- Estadística 2 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="24">0</div>
        <div class="text-light-gray">Soporte 24/7</div>
      </div>

      <!-- Estadística 3 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="5">0</div>
        <div class="text-light-gray">Minutos de Respuesta</div>
      </div>

      <!-- Estadística 4 -->
      <div class="bg-gray rounded-xl p-6 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter" data-target="1500">0</div>
        <div class="text-light-gray">Clientes Atendidos</div>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Beneficios -->
<section class="py-16 bg-black">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
        Ventajas de Nuestro <span class="text-accent">Servicio</span>
      </h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Ofrecemos soluciones personalizadas que se adaptan a las necesidades específicas de tu empresa
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Beneficio 1 -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-headset"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Soporte 24/7</h3>
        <p class="text-light-gray">
          Atención continua todos los días del año, porque sabemos que las necesidades no tienen horario.
        </p>
      </div>

      <!-- Beneficio 2 -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-users"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Agentes Especializados</h3>
        <p class="text-light-gray">
          Profesionales capacitados en resolver cualquier inquietud con amabilidad y eficiencia.
        </p>
      </div>

      <!-- Beneficio 3 -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-rocket"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Respuesta Rápida</h3>
        <p class="text-light-gray">
          Tiempos de espera mínimos y soluciones inmediatas para tus requerimientos.
        </p>
      </div>

      <!-- Beneficio 4 -->
      <div class="service-card bg-dark-gray p-8 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-6 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Seguimiento Continuo</h3>
        <p class="text-light-gray">
          Monitoreo constante para garantizar la calidad del servicio y tu completa satisfacción.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Proceso de Atención -->
<section class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso de Atención</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Conoce cómo trabajamos para brindarte la mejor experiencia de servicio al cliente
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Paso 1 -->
      <div class="bg-gray rounded-xl p-8 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-20 h-20 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold text-lg shadow-lg">
          1
        </div>
        <h3 class="text-xl font-semibold mb-4 text-white">Contacto Inicial</h3>
        <p class="text-light-gray">
          Nos contactas por cualquiera de nuestros canales disponibles
        </p>
      </div>

      <!-- Paso 2 -->
      <div class="bg-gray rounded-xl p-8 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-20 h-20 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold text-lg shadow-lg">
          2
        </div>
        <h3 class="text-xl font-semibold mb-4 text-white">Evaluación</h3>
        <p class="text-light-gray">
          Analizamos tu caso para ofrecerte la mejor solución posible
        </p>
      </div>

      <!-- Paso 3 -->
      <div class="bg-gray rounded-xl p-8 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="w-20 h-20 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold text-lg shadow-lg">
          3
        </div>
        <h3 class="text-xl font-semibold mb-4 text-white">Solución</h3>
        <p class="text-light-gray">
          Implementamos la solución y verificamos tu completa satisfacción
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Testimonios -->
<section class="py-16 bg-black">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Lo que Dicen Nuestros Clientes</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        La satisfacción de nuestros clientes es el mejor indicador de nuestro trabajo
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Testimonio 1 -->
      <div class="bg-dark-gray rounded-xl p-8 border border-gray hover:border-accent transition-all duration-300 group">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-accent rounded-full overflow-hidden mr-4">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" 
                 alt="Cliente" class="w-full h-full object-cover">
          </div>
          <div>
            <h4 class="font-semibold text-white">Carlos Mendoza</h4>
            <p class="text-accent text-sm">Empresa TechSolutions</p>
          </div>
        </div>
        <p class="text-light-gray mb-4">
          "El servicio de atención al cliente de BDO transformó nuestra relación con los clientes. Ahora tenemos índices de satisfacción nunca antes vistos."
        </p>
        <div class="flex text-yellow-400">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>

      <!-- Testimonio 2 -->
      <div class="bg-dark-gray rounded-xl p-8 border border-gray hover:border-accent transition-all duration-300 group">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-accent rounded-full overflow-hidden mr-4">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80" 
                 alt="Cliente" class="w-full h-full object-cover">
          </div>
          <div>
            <h4 class="font-semibold text-white">María González</h4>
            <p class="text-accent text-sm">Directora de Marketing</p>
          </div>
        </div>
        <p class="text-light-gray mb-4">
          "La capacidad de respuesta y el profesionalismo del equipo de BDO son excepcionales. Siempre tienen una solución para nuestras necesidades."
        </p>
        <div class="flex text-yellow-400">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <!-- Testimonio 3 -->
      <div class="bg-dark-gray rounded-xl p-8 border border-gray hover:border-accent transition-all duration-300 group">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 bg-accent rounded-full overflow-hidden mr-4">
            <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80" 
                 alt="Cliente" class="w-full h-full object-cover">
          </div>
          <div>
            <h4 class="font-semibold text-white">Javier López</h4>
            <p class="text-accent text-sm">Gerente General</p>
          </div>
        </div>
        <p class="text-light-gray mb-4">
          "Desde que externalizamos nuestro servicio de atención al cliente con BDO, hemos podido enfocarnos en nuestro core business con total tranquilidad."
        </p>
        <div class="flex text-yellow-400">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Canales de Contacto -->
<section id="contacto" class="py-16 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Contáctanos</h2>
      <p class="text-light-gray max-w-2xl mx-auto">
        Estamos disponibles a través de múltiples canales para tu comodidad
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Canal 1 -->
      <div class="bg-gray rounded-xl p-8 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-accent text-4xl mb-6">
          <i class="fas fa-phone-alt"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4">Llamada Telefónica</h3>
        <p class="text-light-gray mb-6">
          Habla directamente con nuestros agentes especializados
        </p>
        <a href="tel:+525637713882" class="inline-block bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 w-full">
          +52 5637713882
        </a>
      </div>

      <!-- Canal 2 -->
      <div class="bg-gray rounded-xl p-8 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-accent text-4xl mb-6">
          <i class="fas fa-envelope"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4">Correo Electrónico</h3>
        <p class="text-light-gray mb-6">
          Escríbenos y te responderemos en menos de 24 horas
        </p>
        <a href="mailto:admin@bdosoluciones.com" class="inline-block bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 w-full">
          admin@bdosoluciones.com
        </a>
      </div>

      <!-- Canal 3 -->
      <div class="bg-gray rounded-xl p-8 text-center text-white hover:transform hover:scale-105 transition-all duration-300">
        <div class="text-accent text-4xl mb-6">
          <i class="fab fa-whatsapp"></i>
        </div>
        <h3 class="text-xl font-semibold mb-4">WhatsApp</h3>
        <p class="text-light-gray mb-6">
          Chatea con nosotros de forma rápida y sencilla
        </p>
        <a href="https://wa.me/525637713882" target="_blank" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition-all duration-300 w-full">
          Enviar Mensaje
        </a>
      </div>
    </div>
  </div>
</section>

<style>
  /* Animaciones específicas para atención a clientes */
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
  // Función para animación de contadores
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