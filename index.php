<?php include 'header.php'; ?>

<!-- Hero Section con Video de Fondo -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
  <!-- Video de fondo libre de derechos -->
  <video autoplay muted loop playsinline class="absolute z-0 w-auto min-w-full min-h-full max-w-none object-cover">
    <source src="https://assets.mixkit.co/videos/preview/mixkit-white-clouds-in-the-sky-4835-large.mp4" type="video/mp4">
    <!-- Video alternativo si el principal no carga -->
    <source src="https://assets.mixkit.co/videos/preview/mixkit-aerial-view-of-a-modern-city-4833-large.mp4" type="video/mp4">
  </video>
  
  <!-- Overlay oscuro para mejor contraste -->
  <div class="absolute inset-0 bg-black bg-opacity-60 z-10"></div>
  
  <!-- Contenido principal -->
  <div class="relative z-20 text-center px-6 max-w-6xl mx-auto">
    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 animate-fade-in-up">
      BDO 
      <span class="text-accent block mt-2">Soluciones Efectivas</span>
    </h1>
    <p class="text-xl md:text-2xl text-light-gray mb-8 max-w-3xl mx-auto leading-relaxed animate-fade-in-up delay-200">
      Desde 2015 brindando soluciones integrales con tecnología propia y equipo humano altamente capacitado
    </p>
    <div class="animate-fade-in-up delay-400">
      <a href="#servicios" class="bg-accent text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-lg">
        <span>Descubrir Servicios</span>
        <i class="fas fa-arrow-down ml-3"></i>
      </a>
    </div>
  </div>

  <!-- Flecha indicadora de scroll -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
    <a href="#about" class="text-white text-2xl">
      <i class="fas fa-chevron-down"></i>
    </a>
  </div>
</section>

<!-- Sección Quiénes Somos -->
<section id="about" class="py-20 bg-dark-gray">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <div class="space-y-8">
      <div class="animate-scale-in">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 flex items-center">
          <span class="bg-accent text-white p-3 rounded-full mr-4">
            <i class="fas fa-building"></i>
          </span>
          ¿QUIÉNES SOMOS?
        </h2>
        <p class="text-lg text-light-gray leading-relaxed">
          Somos un centro de multiservicios especializado en brindar soluciones personalizadas para diversos servicios. 
          Desde nuestra fundación en 2015, hemos establecido un compromiso firme con la calidad e innovación.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="animate-slide-in-left">
          <div class="bg-gray p-6 rounded-lg border-l-4 border-accent hover:transform hover:scale-105 transition-all duration-300">
            <h3 class="text-xl font-bold text-white mb-3 flex items-center">
              <i class="fas fa-bullseye text-accent mr-3"></i>
              MISIÓN
            </h3>
            <p class="text-light-gray">
              Brindar soluciones personalizadas y eficientes a través de un centro de atención multicanal.
            </p>
          </div>
        </div>

        <div class="animate-slide-in-right">
          <div class="bg-gray p-6 rounded-lg border-l-4 border-accent hover:transform hover:scale-105 transition-all duration-300">
            <h3 class="text-xl font-bold text-white mb-3 flex items-center">
              <i class="fas fa-eye text-accent mr-3"></i>
              VISIÓN
            </h3>
            <p class="text-light-gray">
              Ser el centro de atención multicanal líder en innovación y calidad en Latinoamérica.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="relative animate-float">
      <div class="bg-gradient-to-br from-accent to-blue-600 p-1 rounded-2xl shadow-2xl">
        <img 
          src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
          alt="Equipo BDO" 
          class="w-full h-96 object-cover rounded-2xl shadow-lg"
        >
      </div>
      <div class="absolute -bottom-6 -right-6 bg-accent text-white p-6 rounded-2xl shadow-xl">
        <div class="text-3xl font-bold">10+</div>
        <div class="text-sm">Años de Experiencia</div>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Servicios -->
<section id="servicios" class="py-20 bg-black">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 animate-fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
        Nuestros <span class="text-accent">Servicios</span>
      </h2>
      <p class="text-xl text-light-gray max-w-3xl mx-auto">
        Descubre todos los servicios que ofrecemos para impulsar el crecimiento de tu empresa
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Servicio 1 -->
      <div class="service-card bg-dark-gray p-6 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-money-bill-wave"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Servicio de Cobranza</h3>
        <p class="text-light-gray mb-4">
          Gestión eficiente y profesional de cartera con tecnología propia.
        </p>
        <a href="cobranza.php" class="text-accent font-semibold flex items-center group-hover:translate-x-2 transition-transform duration-300">
          Saber más
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>

      <!-- Servicio 2 -->
      <div class="service-card bg-dark-gray p-6 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Servicio de Ventas</h3>
        <p class="text-light-gray mb-4">
          Estrategias comerciales para incrementar tus ingresos.
        </p>
        <a href="ventas.php" class="text-accent font-semibold flex items-center group-hover:translate-x-2 transition-transform duration-300">
          Saber más
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>

      <!-- Servicio 3 -->
      <div class="service-card bg-dark-gray p-6 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-file-invoice-dollar"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Facturación</h3>
        <p class="text-light-gray mb-4">
          Soluciones integrales de gestión documental y fiscal.
        </p>
        <a href="facturacion.php" class="text-accent font-semibold flex items-center group-hover:translate-x-2 transition-transform duration-300">
          Saber más
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>

      <!-- Servicio 4 -->
      <div class="service-card bg-dark-gray p-6 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-bullhorn"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Marketing Digital</h3>
        <p class="text-light-gray mb-4">
          Estrategias digitales para aumentar tu presencia online.
        </p>
        <a href="marqueting.php" class="text-accent font-semibold flex items-center group-hover:translate-x-2 transition-transform duration-300">
          Saber más
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>

      <!-- Servicio 5 -->
      <div class="service-card bg-dark-gray p-6 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Paquetería</h3>
        <p class="text-light-gray mb-4">
          Servicios logísticos integrales para tu empresa.
        </p>
        <a href="paqueteria.php" class="text-accent font-semibold flex items-center group-hover:translate-x-2 transition-transform duration-300">
          Saber más
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>

      <!-- Servicio 6 -->
      <div class="service-card bg-dark-gray p-6 rounded-xl border border-gray hover:border-accent transition-all duration-500 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">
          <i class="fas fa-headset"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3">Atención a Clientes</h3>
        <p class="text-light-gray mb-4">
          Soporte especializado multicanal para tus clientes.
        </p>
        <a href="atencion-a-clientes.php" class="text-accent font-semibold flex items-center group-hover:translate-x-2 transition-transform duration-300">
          Saber más
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Estadísticas -->
<section class="py-20 bg-gradient-to-br from-dark-gray to-black">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center animate-count-up">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2" data-count="500">0</div>
        <div class="text-light-gray">Clientes Satisfechos</div>
      </div>
      <div class="text-center animate-count-up">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2" data-count="10">0</div>
        <div class="text-light-gray">Años de Experiencia</div>
      </div>
      <div class="text-center animate-count-up">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2" data-count="8">0</div>
        <div class="text-light-gray">Servicios</div>
      </div>
      <div class="text-center animate-count-up">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2" data-count="1200">0</div>
        <div class="text-light-gray">Proyectos Completados</div>
      </div>
    </div>
  </div>
</section>

<!-- Sección CTA -->
<section class="py-20 bg-accent">
  <div class="max-w-4xl mx-auto text-center px-6">
    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
      ¿Listo para impulsar tu negocio?
    </h2>
    <p class="text-xl text-blue-100 mb-8">
      Contáctanos hoy mismo y descubre cómo podemos ayudarte a alcanzar tus objetivos.
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="https://wa.me/525637713882" class="bg-white text-accent px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 inline-flex items-center">
        <i class="fab fa-whatsapp mr-3 text-xl"></i>
        Contactar por WhatsApp
      </a>
      <a href="tel:+525637713882" class="bg-dark-gray text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-800 transition-all duration-300 transform hover:scale-105 inline-flex items-center">
        <i class="fas fa-phone mr-3"></i>
        Llamar Ahora
      </a>
    </div>
  </div>
</section>

<style>
  /* Animaciones mejoradas */
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

  @keyframes scale-in {
    from {
      opacity: 0;
      transform: scale(0.9);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  @keyframes slide-in-left {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes slide-in-right {
    from {
      opacity: 0;
      transform: translateX(30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes float {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
  }

  .animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
  }

  .animate-scale-in {
    animation: scale-in 0.8s ease-out;
  }

  .animate-slide-in-left {
    animation: slide-in-left 0.8s ease-out;
  }

  .animate-slide-in-right {
    animation: slide-in-right 0.8s ease-out;
  }

  .animate-float {
    animation: float 3s ease-in-out infinite;
  }

  .animate-bounce {
    animation: bounce 2s infinite;
  }

  .delay-200 {
    animation-delay: 200ms;
  }

  .delay-400 {
    animation-delay: 400ms;
  }

  /* Efectos de scroll */
  .service-card {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
  }

  .service-card.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* Efecto de aumento de texto al hacer scroll */
  .text-scale {
    transition: all 0.3s ease-out;
  }
</style>

<script>
  // Animación de conteo para estadísticas
  function animateCountUp() {
    const counters = document.querySelectorAll('.animate-count-up [data-count]');
    
    counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-count'));
      const duration = 2000;
      const step = target / (duration / 16);
      let current = 0;
      
      const updateCount = () => {
        current += step;
        if (current < target) {
          counter.textContent = Math.floor(current);
          requestAnimationFrame(updateCount);
        } else {
          counter.textContent = target + '+';
        }
      };
      
      updateCount();
    });
  }

  // Observer para animaciones al hacer scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        
        // Si es un contador, iniciar animación
        if (entry.target.classList.contains('animate-count-up')) {
          animateCountUp();
        }
      }
    });
  }, { threshold: 0.1 });

  // Observar elementos
  document.addEventListener('DOMContentLoaded', () => {
    // Observar tarjetas de servicio
    document.querySelectorAll('.service-card').forEach(card => {
      observer.observe(card);
    });

    // Observar contadores
    document.querySelectorAll('.animate-count-up').forEach(counter => {
      observer.observe(counter);
    });

    // Efecto de aumento de texto al hacer scroll
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const rate = scrolled * -0.5;
      
      document.querySelectorAll('.text-scale').forEach(element => {
        const scale = 1 + (scrolled * 0.001);
        element.style.transform = `scale(${Math.min(scale, 1.2)})`;
      });
    });
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
</script>

<?php include 'footer.php'; ?>