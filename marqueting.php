<?php 
$page_title = "Marketing Digital";
include 'header.php'; 
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<section class="relative h-96 flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img 
      src="img/hero-marketing.jpg" 
      alt="Marketing Digital Estratégico" 
      class="w-full h-full object-cover opacity-40 mix-blend-overlay"
    >
  </div>
  
  <div class="absolute inset-0 bg-gradient-to-b from-navy/90 to-navy/60 z-10"></div>

  <div class="container mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
      Marketing Digital <span class="text-accent">Estratégico</span>
    </h1>
    <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10 animate-fade-in-up delay-200">
      Potencia tu presencia digital con estrategias personalizadas que conectan con tu audiencia y generan resultados tangibles.
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
        Nuestras estrategias de marketing digital están diseñadas para maximizar el retorno de inversión.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      
      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-chart-line"></i>
        </div>
        <div class="text-3xl font-bold text-white mb-2 flex justify-center items-center gap-1">
            <span class="counter" data-target="70">0</span>%
        </div>
        <p class="text-gray-400 text-sm">Aumento en visibilidad</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-users"></i>
        </div>
        <div class="text-3xl font-bold text-white mb-2 flex justify-center items-center gap-1">
            <span class="counter" data-target="45">0</span>%
        </div>
        <p class="text-gray-400 text-sm">Engagement</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="text-3xl font-bold text-white mb-2 flex justify-center items-center gap-1">
            <span class="counter" data-target="60">0</span>%
        </div>
        <p class="text-gray-400 text-sm">Conversiones</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="text-3xl font-bold text-white mb-2 flex justify-center items-center gap-1">
            <span class="counter" data-target="3.5">0</span>x
        </div>
        <p class="text-gray-400 text-sm">ROI promedio</p>
      </div>

    </div>
  </div>
</section>

<section class="bg-navy py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">MARKETING DIGITAL</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Estrategias personalizadas para hacer crecer tu negocio en el mundo digital.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
      <div class="bg-navy-light rounded-xl border border-white/5 p-8 hover:-translate-y-2 transition-transform duration-300">
        <div class="flex items-center mb-6">
          <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center mr-4 text-accent">
            <i class="fas fa-digital-tachograph text-xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-white">Marketing Digital</h3>
        </div>
        <ul class="space-y-4 text-gray-300">
          <li class="flex items-start"><i class="fas fa-search text-accent mt-1 mr-3"></i><span>SEO (Posicionamiento Web)</span></li>
          <li class="flex items-start"><i class="fab fa-facebook text-accent mt-1 mr-3"></i><span>Publicidad en Redes Sociales</span></li>
          <li class="flex items-start"><i class="fas fa-envelope text-accent mt-1 mr-3"></i><span>Email Marketing</span></li>
          <li class="flex items-start"><i class="fas fa-blog text-accent mt-1 mr-3"></i><span>Marketing de Contenidos</span></li>
        </ul>
      </div>

      <div class="bg-navy-light rounded-xl border border-white/5 p-8 hover:-translate-y-2 transition-transform duration-300">
        <div class="flex items-center mb-6">
          <div class="w-12 h-12 bg-navy rounded-full flex items-center justify-center mr-4 text-accent">
            <i class="fas fa-handshake text-xl"></i>
          </div>
          <h3 class="text-2xl font-bold text-white">Marketing Relacional</h3>
        </div>
        <ul class="space-y-4 text-gray-300">
          <li class="flex items-start"><i class="fas fa-heart text-accent mt-1 mr-3"></i><span>Fidelización de Clientes</span></li>
          <li class="flex items-start"><i class="fas fa-headset text-accent mt-1 mr-3"></i><span>Atención Personalizada</span></li>
          <li class="flex items-start"><i class="fas fa-award text-accent mt-1 mr-3"></i><span>Programas de Lealtad</span></li>
          <li class="flex items-start"><i class="fas fa-comments text-accent mt-1 mr-3"></i><span>Gestión de Comunidades</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">Metodología probada para el éxito digital.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <?php 
      $steps = [
        ['num' => '1', 'title' => 'Análisis', 'desc' => 'Estudiamos tu mercado y competencia.'],
        ['num' => '2', 'title' => 'Estrategia', 'desc' => 'Creamos un plan de acción detallado.'],
        ['num' => '3', 'title' => 'Implementación', 'desc' => 'Ejecutamos las campañas con precisión.'],
        ['num' => '4', 'title' => 'Optimización', 'desc' => 'Mejoramos continuamente los resultados.']
      ];
      foreach ($steps as $step): ?>
      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent hover:-translate-y-1 transition-all duration-300">
        <div class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold shadow-lg shadow-accent/20">
          <?php echo $step['num']; ?>
        </div>
        <h3 class="text-lg font-semibold mb-3 text-white"><?php echo $step['title']; ?></h3>
        <p class="text-gray-400 text-sm"><?php echo $step['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-16 bg-navy">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Servicios Adicionales</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-navy-light rounded-xl p-6 text-center border border-white/5 hover:border-accent transition-all duration-300">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-chart-pie text-accent text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Analítica Web</h3>
        <p class="text-gray-400 text-sm">Medición y análisis de datos para decisiones inteligentes.</p>
      </div>
      <div class="bg-navy-light rounded-xl p-6 text-center border border-white/5 hover:border-accent transition-all duration-300">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-mobile-alt text-accent text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Marketing Móvil</h3>
        <p class="text-gray-400 text-sm">Estrategias optimizadas para dispositivos móviles.</p>
      </div>
      <div class="bg-navy-light rounded-xl p-6 text-center border border-white/5 hover:border-accent transition-all duration-300">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-video text-accent text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Video Marketing</h3>
        <p class="text-gray-400 text-sm">Contenido audiovisual para aumentar conversiones.</p>
      </div>
    </div>
  </div>
</section>

<section id="contacto" class="py-20 bg-accent">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Listo para Transformar tu Marketing Digital?</h2>
      <p class="text-blue-100 max-w-2xl mx-auto text-lg">
        Contáctanos para una consultoría gratuita y descubre cómo podemos impulsar tu presencia digital.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-xl font-bold mb-6 text-white border-b border-white/10 pb-4">Información de Contacto</h3>
        <div class="space-y-6">
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent group-hover:bg-white group-hover:text-accent transition-colors">
               <i class="fas fa-envelope text-xl"></i>
            </div>
            <span class="text-lg">admin@bdosoluciones.com</span>
          </div>
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent group-hover:bg-white group-hover:text-accent transition-colors">
               <i class="fas fa-phone-alt text-xl"></i>
            </div>
            <span class="text-lg">+52 5637713882</span>
          </div>
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent group-hover:bg-white group-hover:text-accent transition-colors">
               <i class="fas fa-map-marker-alt text-xl"></i>
            </div>
            <span class="text-lg">Ixtapaluca, Edo. Méx.</span>
          </div>
        </div>
      </div>

      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-xl font-bold mb-6 text-white border-b border-white/10 pb-4">Solicitar Consultoría</h3>
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20estoy%20interesado%20en%20una%20consultoría%20de%20marketing%20digital" 
             class="block w-full bg-white text-navy hover:bg-gray-100 py-4 rounded-lg font-bold text-center transition-all shadow-md flex items-center justify-center">
            <i class="fab fa-whatsapp mr-2 text-2xl text-green-600"></i> Agendar Consultoría
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

<style>
  @keyframes fade-in-up {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fade-in-up { animation: fade-in-up 0.8s ease-out forwards; }
  .delay-200 { animation-delay: 0.2s; }
  .delay-400 { animation-delay: 0.4s; }
</style>

<script>
  // 1. Observer para animaciones de entrada (Fade-in)
  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });

  // 2. Función de Lógica de Conteo (CORREGIDA PARA DECIMALES)
  const runCounterAnimation = (counter) => {
      const target = +counter.getAttribute('data-target');
      const duration = 2000; // Duración: 2 segundos
      const stepTime = 20;   // Intervalo: 20ms
      
      const steps = duration / stepTime; 
      const increment = target / steps;
      
      let current = 0; // Variable interna para evitar errores de redondeo

      const timer = setInterval(() => {
          current += increment;

          if (current >= target) {
              counter.innerText = target;
              clearInterval(timer);
          } else {
              // Si el objetivo tiene decimales (como 3.5), mostramos 1 decimal
              if (target % 1 !== 0) {
                  counter.innerText = current.toFixed(1);
              } else {
                  counter.innerText = Math.ceil(current);
              }
          }
      }, stepTime);
  };

  // 3. Observer para disparar contadores cuando sean visibles
  const counterObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              runCounterAnimation(entry.target);
              observer.unobserve(entry.target); // Ejecutar solo una vez
          }
      });
  }, { threshold: 0.5 });

  document.addEventListener('DOMContentLoaded', () => {
    // Activar Fade In
    document.querySelectorAll('.animate-fade-in-up, .bg-navy-light').forEach(element => {
      fadeObserver.observe(element);
    });

    // Activar Contadores
    document.querySelectorAll('.counter').forEach(counter => {
      counterObserver.observe(counter);
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  });
</script>

<?php include 'footer.php'; ?>