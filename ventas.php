<?php 
$page_title = "Servicio de Ventas";
$page_description = "Potenciamos tus resultados comerciales con estrategias de ventas efectivas y un equipo de profesionales capacitados.";
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
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fadeInUp">Servicio Especializado de Ventas</h1>
    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-10 animate-fadeInUp">
      Potenciamos tus resultados comerciales con estrategias de ventas efectivas y un equipo de profesionales capacitados.
    </p>
    <a href="#contacto" class="bg-white text-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-blue-50 transition-all duration-300 transform hover:scale-105 animate-pulse-slow">
      Solicitar Asesoría
    </a>
  </div>
</section>

<!-- Sección de Estadísticas -->
<section class="py-16 bg-gray-100 text-gray-800">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-navy mb-4">Resultados que Generamos</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Nuestras estrategias de ventas están diseñadas para maximizar el crecimiento y la rentabilidad de tu negocio.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Estadística 1 -->
      <div class="bg-white rounded-xl p-6 text-center shadow-lg stat-item fade-in">
        <div class="text-navy text-4xl mb-4">
          <i class="fas fa-chart-line animate-float"></i>
        </div>
        <div class="text-3xl font-bold text-navy mb-2">40%</div>
        <p class="text-gray-600 text-sm">Aumento en ventas promedio</p>
      </div>

      <!-- Estadística 2 -->
      <div class="bg-white rounded-xl p-6 text-center shadow-lg stat-item fade-in">
        <div class="text-navy text-4xl mb-4">
          <i class="fas fa-users animate-float" style="animation-delay: 0.5s;"></i>
        </div>
        <div class="text-3xl font-bold text-navy mb-2">200+</div>
        <p class="text-gray-600 text-sm">Clientes satisfechos</p>
      </div>

      <!-- Estadística 3 -->
      <div class="bg-white rounded-xl p-6 text-center shadow-lg stat-item fade-in">
        <div class="text-navy text-4xl mb-4">
          <i class="fas fa-bullseye animate-float" style="animation-delay: 1s;"></i>
        </div>
        <div class="text-3xl font-bold text-navy mb-2">85%</div>
        <p class="text-gray-600 text-sm">Tasa de efectividad</p>
      </div>

      <!-- Estadística 4 -->
      <div class="bg-white rounded-xl p-6 text-center shadow-lg stat-item fade-in">
        <div class="text-navy text-4xl mb-4">
          <i class="fas fa-clock animate-float" style="animation-delay: 1.5s;"></i>
        </div>
        <div class="text-3xl font-bold text-navy mb-2">30</div>
        <p class="text-gray-600 text-sm">Días para ver resultados</p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Servicios de Ventas -->
<section class="bg-white py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h1 class="text-3xl md:text-4xl font-bold text-navy">Estrategias de Ventas que Implementamos</h1>
      <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
        Desarrollamos e implementamos estrategias comerciales personalizadas para maximizar tus resultados.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Ventas Directas -->
      <div class="service-card bg-gray-50 rounded-xl shadow-lg p-6 text-center ventas-card fade-in">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-handshake text-navy text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold text-navy mb-3">Ventas Directas</h3>
        <p class="text-gray-600">
          Equipos comerciales especializados en ventas B2B y B2C con enfoque en resultados.
        </p>
        <ul class="text-left text-sm text-gray-500 mt-4 space-y-2">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Representantes capacitados</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Gestión de cartera de clientes</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Segmentación de mercado</span>
          </li>
        </ul>
      </div>

      <!-- Telemercadeo -->
      <div class="service-card bg-gray-50 rounded-xl shadow-lg p-6 text-center ventas-card fade-in">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-headset text-navy text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold text-navy mb-3">Telemercadeo</h3>
        <p class="text-gray-600">
          Estrategias de ventas telefónicas efectivas con seguimiento y métricas precisas.
        </p>
        <ul class="text-left text-sm text-gray-500 mt-4 space-y-2">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Call center especializado</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Guiones de ventas optimizados</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Reportes de desempeño</span>
          </li>
        </ul>
      </div>

      <!-- Ventas Digitales -->
      <div class="service-card bg-gray-50 rounded-xl shadow-lg p-6 text-center ventas-card fade-in">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-digital-tachograph text-navy text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold text-navy mb-3">Ventas Digitales</h3>
        <p class="text-gray-600">
          Estrategias de e-commerce y ventas online para maximizar tu presencia digital.
        </p>
        <ul class="text-left text-sm text-gray-500 mt-4 space-y-2">
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Tiendas online</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Chatbots de ventas</span>
          </li>
          <li class="flex items-start">
            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
            <span>Automatización de procesos</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Proceso -->
<section class="py-16 bg-navy-light text-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso de Ventas</h2>
      <p class="text-blue-100 max-w-2xl mx-auto">
        Una metodología probada que garantiza resultados consistentes y crecimiento sostenido.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Paso 1 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          1
        </div>
        <h3 class="text-lg font-semibold mb-3">Diagnóstico</h3>
        <p class="text-blue-200 text-sm">
          Analizamos tu mercado, competencia y oportunidades comerciales.
        </p>
      </div>

      <!-- Paso 2 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          2
        </div>
        <h3 class="text-lg font-semibold mb-3">Estrategia</h3>
        <p class="text-blue-200 text-sm">
          Desarrollamos un plan personalizado con objetivos claros y métricas.
        </p>
      </div>

      <!-- Paso 3 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          3
        </div>
        <h3 class="text-lg font-semibold mb-3">Implementación</h3>
        <p class="text-blue-200 text-sm">
          Ejecutamos las estrategias con equipos especializados y seguimiento constante.
        </p>
      </div>

      <!-- Paso 4 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          4
        </div>
        <h3 class="text-lg font-semibold mb-3">Optimización</h3>
        <p class="text-blue-200 text-sm">
          Medimos resultados y ajustamos estrategias para maximizar el ROI.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Beneficios -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-navy mb-4">Ventajas de Nuestro Servicio</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Por qué las empresas confían en nosotros para impulsar sus ventas.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Beneficio 1 -->
      <div class="bg-white rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-dollar-sign text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-navy mb-3">Solo Pago por Resultados</h3>
        <p class="text-gray-600 text-sm">
          Estructura de comisiones basada en resultados tangibles.
        </p>
      </div>

      <!-- Beneficio 2 -->
      <div class="bg-white rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-chart-pie text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-navy mb-3">Métricas Claras</h3>
        <p class="text-gray-600 text-sm">
          Reportes detallados con indicadores de desempeño en tiempo real.
        </p>
      </div>

      <!-- Beneficio 3 -->
      <div class="bg-white rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-users-cog text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-navy mb-3">Equipos Especializados</h3>
        <p class="text-gray-600 text-sm">
          Profesionales capacitados en técnicas de ventas modernas.
        </p>
      </div>

      <!-- Beneficio 4 -->
      <div class="bg-white rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-rocket text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-navy mb-3">Rápida Implementación</h3>
        <p class="text-gray-600 text-sm">
          Comenzamos a generar resultados en menos de 30 días.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Testimonios -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-navy mb-4">Lo que Dicen Nuestros Clientes</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Empresas que han transformado sus resultados con nuestro servicio de ventas.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Testimonio 1 -->
      <div class="bg-gray-50 rounded-xl p-6 shadow-lg transform transition-all duration-500 hover:scale-105 fade-in testimonial-card">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
            RA
          </div>
          <div>
            <h4 class="font-semibold">Roberto Álvarez</h4>
            <p class="text-blue-600 text-sm">Distribuidora Comercial</p>
          </div>
        </div>
        <p class="text-gray-600">
          "Incrementamos nuestras ventas en un 45% en solo 3 meses. El equipo de BDO entendió perfectamente nuestro mercado."
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
      <div class="bg-gray-50 rounded-xl p-6 shadow-lg transform transition-all duration-500 hover:scale-105 fade-in testimonial-card">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
            MG
          </div>
          <div>
            <h4 class="font-semibold">María González</h4>
            <p class="text-blue-600 text-sm">Tienda de Ropa</p>
          </div>
        </div>
        <p class="text-gray-600">
          "La estrategia de telemercadeo implementada por BDO nos ayudó a captar nuevos clientes de manera consistente."
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
      <div class="bg-gray-50 rounded-xl p-6 shadow-lg transform transition-all duration-500 hover:scale-105 fade-in testimonial-card">
        <div class="flex items-center mb-4">
          <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
            CL
          </div>
          <div>
            <h4 class="font-semibold">Carlos López</h4>
            <p class="text-blue-600 text-sm">Servicios Tecnológicos</p>
          </div>
        </div>
        <p class="text-gray-600">
          "El equipo comercial de BDO representa nuestros productos con profesionalismo y conocimiento. Excelente servicio."
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
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Listo para Incrementar tus Ventas?</h2>
      <p class="text-blue-200 max-w-2xl mx-auto">
        Contáctanos para una consultoría gratuita y descubre cómo podemos impulsar tus resultados comerciales.
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
        <h3 class="text-xl font-semibold mb-4 text-blue-400">Solicitar Consultoría</h3>
        <p class="text-blue-200 mb-4">
          Agenda una cita para una consultoría gratuita de ventas.
        </p>
        
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20me%20interesa%20el%20servicio%20de%20ventas" 
             class="block w-full bg-green-600 text-white py-4 rounded-lg font-semibold text-center hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-whatsapp mr-3 text-xl"></i>
            Contactar por WhatsApp
          </a>
          
          <a href="tel:+525637713882" 
             class="block w-full bg-blue-600 text-white py-4 rounded-lg font-semibold text-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-phone mr-3"></i>
            Llamar Ahora
          </a>
          
          <a href="mailto:admin@bdosoluciones.com?subject=Solicitud de Consultoría - Servicio de Ventas" 
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
  /* Animaciones específicas para ventas */
  .service-card, .ventas-card, .process-card, .stat-item, .testimonial-card {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
  }

  .service-card.visible, .ventas-card.visible, .process-card.visible, .stat-item.visible, .testimonial-card.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .fade-in.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* Estilos específicos para ventas */
  .service-card {
    transition: all 0.4s ease;
    overflow: hidden;
  }

  .service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 25px -5px rgba(30, 58, 138, 0.4), 0 10px 10px -5px rgba(30, 58, 138, 0.2);
  }

  .ventas-card {
    border-left: 4px solid #1e3a8a;
    transition: all 0.3s ease;
  }

  .ventas-card:hover {
    border-left-width: 8px;
    background-color: #f8fafc;
  }

  .icon-hover {
    transition: all 0.3s ease;
  }

  .service-card:hover .icon-hover {
    transform: scale(1.2) rotate(5deg);
    color: #1e3a8a;
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

  .process-card:hover .step-badge {
    background-color: var(--accent-blue);
    color: var(--navy-dark);
    transform: scale(1.06);
  }

  .testimonial-card {
    position: relative;
    border-left: 4px solid transparent;
    transition: transform 180ms ease, box-shadow 220ms ease, border-color 220ms ease, background-color 220ms ease;
  }

  /* Colores azul marino */
  .bg-navy {
    background-color: #0f172a;
  }

  .bg-navy-light {
    background-color: #1e293b;
  }

  .bg-navy-gradient {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
  }

  .text-navy {
    color: #0f172a;
  }

  .border-navy {
    border-color: #0f172a;
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
    document.querySelectorAll('.fade-in, .service-card, .ventas-card, .process-card, .stat-item, .testimonial-card').forEach(element => {
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