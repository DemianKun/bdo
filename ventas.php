<?php 
$page_title = "Servicio de Ventas";
include 'header.php'; 
?>

<section class="relative h-96 flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img 
      src="img/hero-ventas.jpg" 
      alt="Estrategias de Ventas" 
      class="w-full h-full object-cover opacity-40 mix-blend-overlay"
    >
  </div>
  
  <div class="absolute inset-0 bg-gradient-to-b from-navy/90 to-navy/60 z-10"></div>

  <div class="container mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
      Servicio Especializado de <span class="text-accent">Ventas</span>
    </h1>
    <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10 animate-fade-in-up delay-200">
      Potenciamos tus resultados comerciales con estrategias efectivas y equipos de alto rendimiento.
    </p>
    <div class="animate-fade-in-up delay-400">
      <a href="#contacto" class="bg-accent text-white px-8 py-3 rounded-lg font-semibold text-lg shadow-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
        Solicitar Estrategia
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Resultados que Generamos</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Nuestras estrategias están diseñadas para maximizar el crecimiento y la rentabilidad.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      
      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-chart-line"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="40" data-symbol="%">0</div>
        <p class="text-gray-400 text-sm">Aumento en ventas</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-users"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="200" data-symbol="+">0</div>
        <p class="text-gray-400 text-sm">Clientes satisfechos</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-bullseye"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="85" data-symbol="%">0</div>
        <p class="text-gray-400 text-sm">Efectividad</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-clock"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="30" data-symbol="">0</div>
        <p class="text-gray-400 text-sm">Días para resultados</p>
      </div>

    </div>
  </div>
</section>

<section class="bg-navy py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Estrategias de Ventas</h2>
      <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
        Implementamos soluciones comerciales personalizadas para tu sector.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-navy-light rounded-xl border border-white/5 p-6 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-accent transition-colors">
          <i class="fas fa-handshake text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Ventas Directas</h3>
        <p class="text-gray-400 mb-4">
          Equipos comerciales especializados en ventas B2B y B2C.
        </p>
      </div>

      <div class="bg-navy-light rounded-xl border border-white/5 p-6 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-accent transition-colors">
          <i class="fas fa-headset text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Telemercadeo</h3>
        <p class="text-gray-400 mb-4">
          Estrategias telefónicas con métricas precisas.
        </p>
      </div>

      <div class="bg-navy-light rounded-xl border border-white/5 p-6 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-accent transition-colors">
          <i class="fas fa-digital-tachograph text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Ventas Digitales</h3>
        <p class="text-gray-400 mb-4">
          Estrategias de e-commerce y presencia online.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso de Ventas</h2>
      <p class="text-blue-100 max-w-2xl mx-auto">
        Una metodología probada que garantiza resultados consistentes y crecimiento sostenido.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          1
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Diagnóstico</h3>
        <p class="text-blue-200 text-sm">
          Analizamos tu mercado, competencia y oportunidades comerciales.
        </p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          2
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Estrategia</h3>
        <p class="text-blue-200 text-sm">
          Desarrollamos un plan personalizado con objetivos claros y métricas.
        </p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          3
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Implementación</h3>
        <p class="text-blue-200 text-sm">
          Ejecutamos las estrategias con equipos especializados y seguimiento constante.
        </p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center fade-in process-card">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold step-badge">
          4
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white">Optimización</h3>
        <p class="text-blue-200 text-sm">
          Medimos resultados y ajustamos estrategias para maximizar el ROI.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 fade-in">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ventajas de Nuestro Servicio</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Por qué las empresas confían en nosotros para impulsar sus ventas.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-navy-light rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-dollar-sign text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-white mb-3">Solo Pago por Resultados</h3>
      </div>

      <div class="bg-navy-light rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-chart-pie text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-white mb-3">Métricas Claras</h3>
      </div>

      <div class="bg-navy-light rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-users-cog text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-white mb-3">Equipos Especializados</h3>
      </div>

      <div class="bg-navy-light rounded-xl p-6 text-center fade-in">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-rocket text-navy text-xl"></i>
        </div>
        <h3 class="text-lg font-semibold text-white mb-3">Rápida Implementación</h3>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Lo que Dicen Nuestros Clientes</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-navy p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"Incrementamos nuestras ventas en un 45% en solo 3 meses. El equipo de BDO entendió perfectamente nuestro mercado."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Director Comercial</h4>
                  <p class="text-accent text-sm">Distribuidora Nacional</p>
              </div>
            </div>
        </div>
      </div>

      <div class="bg-navy p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"La estrategia de telemercadeo implementada por BDO nos ayudó a captar nuevos clientes de manera consistente."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Gerente de Ventas</h4>
                  <p class="text-accent text-sm">Empresa Retail</p>
              </div>
            </div>
        </div>
      </div>

      <div class="bg-navy p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"El equipo comercial de BDO representa nuestros productos con profesionalismo y conocimiento. Excelente servicio."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">CEO</h4>
                  <p class="text-accent text-sm">Servicios TI</p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contacto" class="py-20 bg-accent">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Listo para Incrementar tus Ventas?</h2>
      <p class="text-blue-100 max-w-2xl mx-auto text-lg">
        Contáctanos para una consultoría gratuita y descubre cómo podemos impulsar tus resultados comerciales.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-xl font-bold mb-6 text-white border-b border-white/10 pb-4">Información de Contacto</h3>
        <div class="space-y-6">
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent group-hover:text-white group-hover:bg-accent transition-colors">
               <i class="fas fa-envelope text-xl"></i>
            </div>
            <span class="text-lg">admin@bdosoluciones.com</span>
          </div>
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent group-hover:text-white group-hover:bg-accent transition-colors">
               <i class="fas fa-phone-alt text-xl"></i>
            </div>
            <span class="text-lg">+52 5637713882</span>
          </div>
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent group-hover:text-white group-hover:bg-accent transition-colors">
               <i class="fas fa-map-marker-alt text-xl"></i>
            </div>
            <span class="text-lg">Ixtapaluca, Estado de México</span>
          </div>
        </div>
      </div>

      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-xl font-bold mb-6 text-white border-b border-white/10 pb-4">Solicitar Consultoría</h3>
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20me%20interesa%20el%20servicio%20de%20ventas" 
             class="block w-full bg-white text-navy hover:bg-gray-100 py-4 rounded-lg font-bold text-center transition-all shadow-md flex items-center justify-center">
            <i class="fab fa-whatsapp mr-2 text-2xl text-green-600"></i> Contactar por WhatsApp
          </a>
          
          <a href="tel:+525637713882" 
             class="block w-full bg-navy-light hover:bg-accent text-white py-4 rounded-lg font-bold text-center transition-all shadow-md border border-white/10 flex items-center justify-center">
            <i class="fas fa-phone mr-2"></i> Llamar Ahora
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    
    // Función de animación
    const runAnimation = (counter) => {
      const target = parseInt(counter.getAttribute('data-target'));
      const symbol = counter.getAttribute('data-symbol') || '';
      const duration = 2000;
      const frames = 60;
      const increment = target / (duration / (1000 / frames));
      
      let current = 0;
      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          counter.textContent = target + symbol;
          clearInterval(timer);
        } else {
          counter.textContent = Math.ceil(current) + symbol;
        }
      }, 1000 / frames);
    };

    // Observador
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          if (counter.innerText === '0' || counter.innerText === '') {
            runAnimation(counter);
            observer.unobserve(counter);
          }
        }
      });
    }, { threshold: 0.5 });

    // Iniciar observación
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
      observer.observe(counter);
    });

    // Fade-in general para otras secciones
    const observerFade = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in, .service-card, .process-card').forEach(element => {
      observerFade.observe(element);
    });
  });
</script>

<style>
  @keyframes fade-in-up {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fade-in-up { animation: fade-in-up 0.8s ease-out forwards; }
  .delay-200 { animation-delay: 0.2s; }
  .delay-400 { animation-delay: 0.4s; }
</style>

<?php include 'footer.php'; ?>