<?php 
$page_title = "Servicio de Paquetería";
$page_description = "Soluciones integrales de intermediación en paquetería que conectan tu negocio con una red confiable de transportistas.";
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
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fadeInUp">Servicio de Paquetería y Logística</h1>
    <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-10 animate-fadeInUp">
      Soluciones integrales de intermediación en paquetería que conectan tu negocio con una red confiable de transportistas.
    </p>
    <a href="#contacto" class="bg-white text-navy px-8 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-blue-50 transition-all duration-300 transform hover:scale-105 animate-pulse-slow">
      Solicitar Cotización
    </a>
  </div>
</section>

<!-- Sección de Estadísticas -->
<section class="py-16 bg-gray-100 text-gray-800">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-navy mb-4">Nuestros Resultados en Logística</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Garantizamos eficiencia y confiabilidad en cada entrega a través de nuestra red de transportistas.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- Estadística 1 -->
      <div class="bg-white rounded-xl p-6 text-center shadow-lg stat-item fade-in">
        <div class="text-navy text-4xl mb-4">
          <i class="fas fa-shipping-fast animate-float"></i>
        </div>
        <div class="text-3xl font-bold text-navy mb-2">98%</div>
        <p class="text-gray-600 text-sm">Entregas a tiempo</p>
      </div>

      <!-- Estadística 2 -->
      <div class="bg-white rounded-xl p-6 text-center shadow-lg stat-item fade-in">
        <div class="text-navy text-4xl mb-4">
          <i class="fas fa-map-marked-alt animate-float" style="animation-delay: 0.5s;"></i>
        </div>
        <div class="text-3xl font-bold text-navy mb-2">250+</div>
        <p class="text-gray-600 text-sm">Rutas optimizadas</p>
      </div>

      <!-- Estadística 3 -->
      <div class="bg-white rounded-xl p-6 text-center shadow-lg stat-item fade-in">
        <div class="text-navy text-4xl mb-4">
          <i class="fas fa-users animate-float" style="animation-delay: 1s;"></i>
        </div>
        <div class="text-3xl font-bold text-navy mb-2">150+</div>
        <p class="text-gray-600 text-sm">Transportistas asociados</p>
      </div>

      <!-- Estadística 4 -->
      <div class="bg-white rounded-xl p-6 text-center shadow-lg stat-item fade-in">
        <div class="text-navy text-4xl mb-4">
          <i class="fas fa-boxes animate-float" style="animation-delay: 1.5s;"></i>
        </div>
        <div class="text-3xl font-bold text-navy mb-2">10K+</div>
        <p class="text-gray-600 text-sm">Paquetes entregados mensualmente</p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Servicios de Paquetería -->
<section class="bg-white py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h1 class="text-3xl md:text-4xl font-bold text-navy">Intermediarios en Paquetería</h1>
      <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
        Nos encargamos de ser intermediarios en paquetería, asegurando que tus productos lleguen a su destino de manera segura y eficiente.
      </p>
    </div>

    <!-- Tarjetas de servicios -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Envíos Seguros -->
      <div class="service-card bg-gray-50 rounded-xl shadow-lg p-6 text-center paqueteria-card fade-in">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-shield-alt text-navy text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold text-navy mb-3">Envíos Seguros</h3>
        <p class="text-gray-600">
          Garantizamos que tus paquetes se entreguen sin contratiempos gracias a nuestra red confiable de transportistas.
        </p>
      </div>

      <!-- Red de Transportistas -->
      <div class="service-card bg-gray-50 rounded-xl shadow-lg p-6 text-center paqueteria-card fade-in">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-network-wired text-navy text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold text-navy mb-3">Red de Transportistas</h3>
        <p class="text-gray-600">
          Contamos con aliados estratégicos, motocicletas y vehículos que aseguran entregas rápidas con conductores capacitados.
        </p>
      </div>

      <!-- Gestión de Rutas -->
      <div class="service-card bg-gray-50 rounded-xl shadow-lg p-6 text-center paqueteria-card fade-in">
        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-route text-navy text-2xl icon-hover"></i>
        </div>
        <h3 class="text-xl font-semibold text-navy mb-3">Gestión de Rutas</h3>
        <p class="text-gray-600">
          Optimizamos las rutas de entrega para garantizar puntualidad y eficiencia sin retrasos.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Proceso -->
<section class="py-16 bg-navy-light text-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso de Entrega</h2>
      <p class="text-blue-100 max-w-2xl mx-auto">
        Un sistema eficiente que garantiza que tus paquetes lleguen a destino de manera segura y oportuna.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Paso 1 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          1
        </div>
        <h3 class="text-lg font-semibold mb-3">Recolección</h3>
        <p class="text-blue-200 text-sm">
          Recolectamos tus paquetes en el lugar y hora acordados.
        </p>
      </div>

      <!-- Paso 2 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          2
        </div>
        <h3 class="text-lg font-semibold mb-3">Clasificación</h3>
        <p class="text-blue-200 text-sm">
          Organizamos y clasificamos los paquetes por rutas y destinos.
        </p>
      </div>

      <!-- Paso 3 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          3
        </div>
        <h3 class="text-lg font-semibold mb-3">Distribución</h3>
        <p class="text-blue-200 text-sm">
          Asignamos los paquetes a los transportistas más adecuados para cada ruta.
        </p>
      </div>

      <!-- Paso 4 -->
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          4
        </div>
        <h3 class="text-lg font-semibold mb-3">Entrega</h3>
        <p class="text-blue-200 text-sm">
          Entregamos los paquetes con confirmación y seguimiento en tiempo real.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Empresas Colaboradoras -->
<section class="bg-gray-100 py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-2xl md:text-3xl font-bold text-navy mb-4">Empresas con las que trabajamos</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Colaboramos con las principales plataformas de comercio electrónico y delivery.
      </p>
    </div>
    
    <div class="flex justify-center items-center gap-12 flex-wrap">
      <div class="bg-gray-200 p-6 rounded-xl flex items-center justify-center h-24 w-48 company-logo">
        <span class="text-navy font-bold text-xl">99min</span>
      </div>
      <div class="bg-gray-200 p-6 rounded-xl flex items-center justify-center h-24 w-48 company-logo">
        <span class="text-navy font-bold text-xl">Mercado Libre</span>
      </div>
      <div class="bg-gray-200 p-6 rounded-xl flex items-center justify-center h-24 w-48 company-logo">
        <span class="text-navy font-bold text-xl">Rappi</span>
      </div>
      <div class="bg-gray-200 p-6 rounded-xl flex items-center justify-center h-24 w-48 company-logo">
        <span class="text-navy font-bold text-xl">Uber Eats</span>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Beneficios -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-navy mb-4">Ventajas de Nuestro Servicio</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Por qué elegirnos como tu partner logístico estratégico.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Beneficio 1 -->
      <div class="bg-gray-50 rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-money-bill-wave text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-navy mb-3">Costos Competitivos</h3>
        <p class="text-gray-600 text-sm">
          Tarifas competitivas sin sacrificar la calidad del servicio.
        </p>
      </div>

      <!-- Beneficio 2 -->
      <div class="bg-gray-50 rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-clock text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-navy mb-3">Entregas Rápidas</h3>
        <p class="text-gray-600 text-sm">
          Tiempos de entrega optimizados para mayor satisfacción del cliente.
        </p>
      </div>

      <!-- Beneficio 3 -->
      <div class="bg-gray-50 rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-map-marker-alt text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-navy mb-3">Cobertura Amplia</h3>
        <p class="text-gray-600 text-sm">
          Llegamos a múltiples destinos dentro y fuera de la ciudad.
        </p>
      </div>

      <!-- Beneficio 4 -->
      <div class="bg-gray-50 rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-headset text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-navy mb-3">Soporte 24/7</h3>
        <p class="text-gray-600 text-sm">
          Atención personalizada y seguimiento constante de tus envíos.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Sección de Contacto -->
<section id="contacto" class="py-16 bg-navy text-white">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Necesitas un Servicio de Paquetería Confiable?</h2>
      <p class="text-blue-200 max-w-2xl mx-auto">
        Contáctanos para una cotización personalizada y descubre cómo podemos optimizar tu logística.
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
        <h3 class="text-xl font-semibold mb-4 text-blue-400">Solicitar Cotización</h3>
        <p class="text-blue-200 mb-4">
          Describe tus necesidades de paquetería y te enviaremos una propuesta personalizada.
        </p>
        
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20necesito%20información%20sobre%20el%20servicio%20de%20paquetería" 
             class="block w-full bg-green-600 text-white py-4 rounded-lg font-semibold text-center hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-whatsapp mr-3 text-xl"></i>
            Contactar por WhatsApp
          </a>
          
          <a href="tel:+525637713882" 
             class="block w-full bg-blue-600 text-white py-4 rounded-lg font-semibold text-center hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-phone mr-3"></i>
            Llamar Ahora
          </a>
          
          <a href="mailto:admin@bdosoluciones.com?subject=Solicitud de Cotización - Servicio de Paquetería" 
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
  /* Animaciones específicas para paquetería */
  .service-card, .paqueteria-card, .process-card, .stat-item {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
  }

  .service-card.visible, .paqueteria-card.visible, .process-card.visible, .stat-item.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .fade-in.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* Estilos específicos para paquetería */
  .service-card {
    transition: all 0.4s ease;
    overflow: hidden;
  }

  .service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 25px -5px rgba(30, 58, 138, 0.4), 0 10px 10px -5px rgba(30, 58, 138, 0.2);
  }

  .paqueteria-card {
    border-left: 4px solid #1e3a8a;
    transition: all 0.3s ease;
  }

  .paqueteria-card:hover {
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

  .company-logo {
    transition: all 0.4s ease;
    filter: grayscale(0.5);
  }

  .company-logo:hover {
    transform: scale(1.1);
    filter: grayscale(0);
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
    document.querySelectorAll('.fade-in, .service-card, .paqueteria-card, .process-card, .stat-item, .company-logo').forEach(element => {
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