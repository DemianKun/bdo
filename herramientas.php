<?php 
$page_title = "Herramientas Digitales";
$page_description = "Potencia tu empresa con nuestras soluciones tecnológicas innovadoras diseñadas para optimizar procesos y maximizar resultados.";
include 'header.php'; 
?>

<!-- Hero Section -->
<section class="particles-container bg-navy-gradient py-20 relative overflow-hidden">
  <!-- Partículas de fondo -->
  <div class="particle" style="top: 20%; left: 10%; width: 15px; height: 15px; animation-delay: 0s;"></div>
  <div class="particle" style="top: 60%; left: 80%; width: 20px; height: 20px; animation-delay: 1s;"></div>
  <div class="particle" style="top: 40%; left: 40%; width: 12px; height: 12px; animation-delay: 2s;"></div>
  <div class="particle" style="top: 70%; left: 30%; width: 18px; height: 18px; animation-delay: 3s;"></div>
  <div class="particle" style="top: 30%; left: 70%; width: 10px; height: 10px; animation-delay: 4s;"></div>
  
  <div class="container mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fadeInUp">Herramientas Digitales para tu Negocio</h1>
    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-10 animate-fadeInUp">
      Potencia tu empresa con nuestras soluciones tecnológicas innovadoras diseñadas para optimizar procesos y maximizar resultados.
    </p>
    <a href="#herramientas" class="btn-hero hero-cta px-8 py-3 rounded-full font-semibold text-lg">
      Explorar Herramientas
    </a>
  </div>
</section>

<!-- Sección de Estadísticas -->
<section class="py-16 bg-navy-dark text-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-lightest-blue mb-4">Potencia tu Negocio con Nuestras Herramientas</h2>
      <p class="text-blue-200 max-w-2xl mx-auto">
        Mejora la eficiencia, productividad y crecimiento de tu empresa con soluciones tecnológicas de vanguardia.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Estadística 1 -->
      <div class="stat-card--dark rounded-xl p-6 text-center shadow-lg stat-item fade-in" tabindex="0">
        <div class="text-white text-4xl mb-4">
          <i class="fas fa-chart-line animate-float"></i>
        </div>
        <div class="text-3xl font-bold text-white mb-2">40%</div>
        <p class="text-blue-200 text-sm">Aumento de productividad</p>
      </div>

      <!-- Estadística 2 -->
      <div class="stat-card--dark rounded-xl p-6 text-center shadow-lg stat-item fade-in" tabindex="0">
        <div class="text-white text-4xl mb-4">
          <i class="fas fa-clock animate-float" style="animation-delay: 0.5s;"></i>
        </div>
        <div class="text-3xl font-bold text-white mb-2">60%</div>
        <p class="text-blue-200 text-sm">Ahorro de tiempo en procesos</p>
      </div>

      <!-- Estadística 3 -->
      <div class="stat-card--dark rounded-xl p-6 text-center shadow-lg stat-item fade-in" tabindex="0">
        <div class="text-white text-4xl mb-4">
          <i class="fas fa-dollar-sign animate-float" style="animation-delay: 1s;"></i>
        </div>
        <div class="text-3xl font-bold text-white mb-2">35%</div>
        <p class="text-blue-200 text-sm">Reducción de costos operativos</p>
      </div>

      <!-- Estadística 4 -->
      <div class="stat-card--dark rounded-xl p-6 text-center shadow-lg stat-item fade-in" tabindex="0">
        <div class="text-white text-4xl mb-4">
          <i class="fas fa-users animate-float" style="animation-delay: 1.5s;"></i>
        </div>
        <div class="text-3xl font-bold text-white mb-2">500+</div>
        <p class="text-blue-200 text-sm">Empresas satisfechas</p>
      </div>
    </div>
  </div>
</section>

<!-- Sección Principal de Herramientas -->
<section id="herramientas" class="py-16 bg-navy text-white">
  <div class="container mx-auto px-6">
    
    <!-- Por qué elegir nuestros servicios -->
    <div class="text-center max-w-3xl mx-auto mb-12 fade-in">
      <h2 class="text-3xl font-bold text-lightest-blue mb-4">¿Por qué elegir nuestras herramientas?</h2>
      <p class="text-blue-200">
        Ofrecemos soluciones innovadoras para ayudar a nuevos negocios a crecer mediante un enfoque estratégico de planeación y diseño. Nuestro equipo trabaja contigo para crear una hoja de ruta clara hacia el éxito, además de proporcionarte las herramientas adecuadas para que puedas ejecutar tus ideas de manera eficiente.
      </p>
    </div>

    <!-- Servicios que Ofrecemos -->
    <div class="text-center mb-10 fade-in">
      <h2 class="text-2xl font-semibold text-lightest-blue mb-6">Servicios que Ofrecemos</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Tarjeta 1 -->
        <div class="tool-card tool-card--dark shadow-xl rounded-xl p-6 text-center" tabindex="0">
          <div class="w-16 h-16 icon-surface rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-project-diagram text-2xl icon-hover"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2">Planeación Estratégica</h3>
          <p>Te ayudamos a definir tu visión y objetivos comerciales, creando un plan de acción detallado para asegurar que tu negocio crezca de forma sostenible.</p>
        </div>

        <!-- Tarjeta 2 -->
        <div class="tool-card tool-card--dark shadow-xl rounded-xl p-6 text-center" tabindex="0">
          <div class="w-16 h-16 icon-surface rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-palette text-2xl icon-hover"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2">Diseño de Marca</h3>
          <p>Desarrollamos una identidad visual que refleje los valores de tu negocio y que atraiga a tu público objetivo de forma efectiva.</p>
        </div>

        <!-- Tarjeta 3 -->
        <div class="tool-card tool-card--dark shadow-xl rounded-xl p-6 text-center" tabindex="0">
          <div class="w-16 h-16 icon-surface rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-tools text-2xl icon-hover"></i>
          </div>
          <h3 class="text-xl font-semibold mb-2">Herramientas Digitales</h3>
          <p>Ofrecemos un conjunto de herramientas modernas para gestionar tu negocio de manera eficiente, desde software de gestión hasta soluciones en la nube.</p>
        </div>
      </div>
    </div>

    <!-- Herramientas Interactivas -->
    <div class="text-center max-w-3xl mx-auto mb-10 fade-in bg-navy-light/60 rounded-xl p-6">
      <h2 class="text-2xl font-semibold text-lightest-blue mb-4">Herramientas Interactivas para Tu Negocio</h2>
      <p class="text-blue-200">
        Además de nuestros servicios de planeación y diseño, ponemos a tu disposición un conjunto de herramientas digitales que mejorarán la productividad y administración de tu negocio. ¡Explóralas!
      </p>
    </div>

    <!-- Herramientas Interactivas: tarjetas -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 bg-navy-light/40 rounded-xl p-6">
      
      <!-- Tarjeta 1 -->
      <div class="tool-card tool-card--light shadow-xl rounded-xl p-6 text-center" tabindex="0">
        <div class="w-16 h-16 icon-surface-light rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-user-friends text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">CRM (Gestión de Clientes)</h3>
        <p>Optimiza la relación con tus clientes, automatiza tus procesos de ventas y aumenta la eficiencia con nuestro sistema CRM fácil de usar.</p>
        <a href="https://api.whatsapp.com/send?phone=5215637713882&text=Hola%2C%20Me%20gustar%C3%ADa%20adquirir%20alg%C3%BAn%20servicio." class="mt-4 inline-block bg-navy text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-800 transition" aria-label="Más información: CRM (Gestión de Clientes)">
          Más información
        </a>
      </div>

      <!-- Tarjeta 2 -->
      <div class="tool-card tool-card--light shadow-xl rounded-xl p-6 text-center" tabindex="0">
        <div class="w-16 h-16 icon-surface-light rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-bullhorn text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Herramientas de Marketing</h3>
        <p>Contamos con herramientas digitales para crear campañas de marketing efectivas, gestionar redes sociales y obtener análisis de desempeño.</p>
        <a href="https://api.whatsapp.com/send?phone=5215637713882&text=Hola%2C%20Me%20gustar%C3%ADa%20adquirir%20alg%C3%BAn%20servicio." class="mt-4 inline-block bg-navy text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-800 transition" aria-label="Más información: Herramientas de Marketing">
          Más información
        </a>
      </div>

      <!-- Tarjeta 3 -->
      <div class="tool-card tool-card--light shadow-xl rounded-xl p-6 text-center" tabindex="0">
        <div class="w-16 h-16 icon-surface-light rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-tasks text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2">Gestión de Proyectos</h3>
        <p>Gestiona proyectos de manera eficaz, asigna tareas, controla plazos y mide el progreso con nuestra plataforma intuitiva.</p>
        <a href="https://api.whatsapp.com/send?phone=5215637713882&text=Hola%2C%20Me%20gustar%C3%ADa%20adquirir%20alg%C3%BAn%20servicio." class="mt-4 inline-block bg-navy text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-800 transition" aria-label="Más información: Gestión de Proyectos">
          Más información
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Proceso -->
<section class="py-16 bg-navy-light text-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Cómo Implementamos Nuestras Herramientas</h2>
      <p class="text-blue-100 max-w-2xl mx-auto">
        Un proceso sencillo y efectivo para integrar nuestras soluciones en tu negocio.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Paso 1 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card" tabindex="0">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          1
        </div>
        <h3 class="text-lg font-semibold mb-3">Diagnóstico</h3>
        <p class="text-blue-200 text-sm">
          Analizamos tus necesidades y procesos actuales para identificar áreas de mejora.
        </p>
      </div>

      <!-- Paso 2 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card" tabindex="0">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          2
        </div>
        <h3 class="text-lg font-semibold mb-3">Selección</h3>
        <p class="text-blue-200 text-sm">
          Elegimos las herramientas más adecuadas para tus objetivos específicos.
        </p>
      </div>

      <!-- Paso 3 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card" tabindex="0">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          3
        </div>
        <h3 class="text-lg font-semibold mb-3">Implementación</h3>
        <p class="text-blue-200 text-sm">
          Configuramos e integramos las herramientas en tu flujo de trabajo actual.
        </p>
      </div>

      <!-- Paso 4 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card" tabindex="0">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          4
        </div>
        <h3 class="text-lg font-semibold mb-3">Capacitación</h3>
        <p class="text-blue-200 text-sm">
          Entrenamos a tu equipo para que aprovechen al máximo las nuevas herramientas.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Testimonios -->
<section class="py-16 bg-navy">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-lightest-blue mb-4">Lo que Dicen Nuestros Clientes</h2>
      <p class="text-blue-200 max-w-2xl mx-auto">
        Empresas que han transformado sus operaciones con nuestras herramientas.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Testimonio 1 -->
      <div class="bg-navy-light rounded-xl p-6 shadow-lg transform transition-all duration-200 ease-out fade-in testimonial-card" tabindex="0">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
            RA
          </div>
          <div>
            <h4 class="font-semibold">Roberto Álvarez</h4>
            <p class="text-blue-600 text-sm">Restaurante Azul</p>
          </div>
        </div>
        <p class="text-lightest-blue">
          "El sistema de gestión que implementamos con BDO ha simplificado nuestros procesos y mejorado nuestra eficiencia en un 40%."
        </p>
        <div class="flex mt-4 text-yellow-400">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>

      <!-- Testimonio 2 -->
      <div class="bg-navy-light rounded-xl p-6 shadow-lg transform transition-all duration-200 ease-out fade-in testimonial-card" tabindex="0">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
            MG
          </div>
          <div>
            <h4 class="font-semibold">María González</h4>
            <p class="text-blue-600 text-sm">Tienda Mágica</p>
          </div>
        </div>
        <p class="text-lightest-blue">
          "Las herramientas de marketing han transformado nuestra presencia digital. Ahora llegamos a más clientes con menos esfuerzo."
        </p>
        <div class="flex mt-4 text-yellow-400">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <!-- Testimonio 3 -->
      <div class="bg-navy-light rounded-xl p-6 shadow-lg transform transition-all duration-200 ease-out fade-in testimonial-card" tabindex="0">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
            CL
          </div>
          <div>
            <h4 class="font-semibold">Carlos López</h4>
            <p class="text-blue-600 text-sm">Consultoría Estratégica</p>
          </div>
        </div>
        <p class="text-lightest-blue">
          "La implementación del CRM ha mejorado nuestro seguimiento de clientes y aumentado nuestras ventas en un 25%."
        </p>
        <div class="flex mt-4 text-yellow-400">
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

<!-- Sección de Contacto -->
<section id="contacto" class="py-16 bg-navy text-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Listo para Potenciar tu Negocio?</h2>
      <p class="text-blue-200 max-w-2xl mx-auto">
        Contáctanos para una demostración gratuita de nuestras herramientas y descubre cómo podemos transformar tu empresa.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Información de Contacto -->
      <div class="bg-navy-light rounded-xl p-6 fade-in">
        <h3 class="text-xl font-semibold mb-4 text-blue-400">Información de Contacto</h3>
        <div class="space-y-4">
          <div class="flex items-start">
            <i class="fas fa-envelope text-blue-400 mr-3 mt-1"></i>
            <div>
              <p class="font-semibold">Email</p>
              <p class="text-blue-200">admin@bdosoluciones.com</p>
            </div>
          </div>
          <div class="flex items-start">
            <i class="fas fa-phone-alt text-blue-400 mr-3 mt-1"></i>
            <div>
              <p class="font-semibold">Teléfono</p>
              <p class="text-blue-200">+52 5637713882</p>
            </div>
          </div>
          <div class="flex items-start">
            <i class="fas fa-clock text-blue-400 mr-3 mt-1"></i>
            <div>
              <p class="font-semibold">Horario</p>
              <p class="text-blue-200">Lunes a Viernes: 9:00 - 18:00</p>
            </div>
          </div>
          <div class="flex items-start">
            <i class="fas fa-map-marker-alt text-blue-400 mr-3 mt-1"></i>
            <div>
              <p class="font-semibold">Ubicación</p>
              <p class="text-blue-200">Ixtapaluca, Estado de México</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Formulario de Contacto -->
      <div class="bg-navy-light rounded-xl p-6 fade-in">
        <h3 class="text-xl font-semibold mb-4 text-blue-400">Solicitar Demostración</h3>
        <p class="text-blue-200 mb-4">
          Agenda una cita para una demostración personalizada de nuestras herramientas.
        </p>
        
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20estoy%20interesado%20en%20una%20demostración%20de%20sus%20herramientas%20digitales" 
             class="block w-full bg-green-600 text-white py-4 rounded-lg font-semibold text-center hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-whatsapp mr-3 text-xl"></i>
            Agendar Demostración
          </a>
          
          <a href="tel:+525637713882" 
             class="block w-full bg-blue-600 text-white py-4 rounded-lg font-semibold text-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-phone mr-3"></i>
            Llamar Ahora
          </a>
          
          <a href="mailto:admin@bdosoluciones.com?subject=Solicitud de Demostración - Herramientas Digitales" 
             class="block w-full bg-gray-700 text-white py-4 rounded-lg font-semibold text-center hover:bg-gray-800 transition-all duration-300 transform hover:scale-105 border border-gray-600">
            <i class="fas fa-envelope mr-3"></i>
            Enviar Email
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Animaciones específicas para herramientas */
  .tool-card, .process-card, .testimonial-card, .stat-item {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
  }

  .tool-card.visible, .process-card.visible, .testimonial-card.visible, .stat-item.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .fade-in.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* Estilos específicos para herramientas */
  .tool-card {
    position: relative;
    overflow: hidden;
    border-left: 4px solid rgba(100,255,218,0.18);
    transition: transform 200ms ease, box-shadow 220ms ease, border-color 220ms ease;
  }

  .tool-card:hover, .tool-card:focus-within {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 18px 28px rgba(2,12,27,0.15);
    border-left-color: var(--accent-blue);
  }

  .tool-card--dark {
    background-color: var(--navy-light);
    border: 1px solid rgba(100,255,218,0.12);
    border-radius: 0.75rem;
  }

  .tool-card--light {
    background-color: #233554;
    border-radius: 0.75rem;
  }

  .icon-surface {
    background-color: var(--navy-lighter);
  }

  .icon-surface-light {
    background-color: #DBEAFE;
  }

  .icon-hover {
    transition: transform 220ms ease, color 220ms ease;
  }

  .process-card {
    position: relative;
    background-color: var(--navy);
    border: 1px solid rgba(100,255,218,0.12);
    border-radius: 0.75rem;
    transition: transform 220ms ease, box-shadow 220ms ease, border-color 220ms ease, background-color 220ms ease;
  }

  .step-badge {
    transition: transform 400ms ease, background-color 400ms ease, color 400ms ease;
  }

  .stat-card--dark {
    background-color: var(--navy);
    border: 1px solid rgba(100,255,218,0.12);
    border-radius: 0.75rem;
  }

  .testimonial-card {
    position: relative;
    border-left: 4px solid transparent;
    transition: transform 180ms ease, box-shadow 220ms ease, border-color 220ms ease, background-color 220ms ease;
  }
</style>

<script>
  // Observer para animaciones al hacer scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });

  // Inicializar cuando el DOM esté listo
  document.addEventListener('DOMContentLoaded', () => {
    // Observar elementos con animación
    document.querySelectorAll('.fade-in, .tool-card, .process-card, .testimonial-card, .stat-item').forEach(element => {
      observer.observe(element);
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

    // Crear partículas dinámicas para el fondo
    function createParticles() {
      const container = document.querySelector('.particles-container');
      if (!container) return;
      
      for (let i = 0; i < 10; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        
        const top = Math.random() * 100;
        const left = Math.random() * 100;
        const size = 5 + Math.random() * 15;
        
        particle.style.top = `${top}%`;
        particle.style.left = `${left}%`;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.animationDelay = `${Math.random() * 5}s`;
        
        container.appendChild(particle);
      }
    }
    
    createParticles();
  });
</script>

<?php include 'footer.php'; ?>