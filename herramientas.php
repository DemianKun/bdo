<?php 
$page_title = "Herramientas Digitales";
include 'header.php'; 
?>

<section class="relative h-96 flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img 
      src="img/hero-herramientas.jpg" 
      alt="Herramientas Digitales Empresariales" 
      class="w-full h-full object-cover opacity-40 mix-blend-overlay"
    >
  </div>
  
  <div class="absolute inset-0 bg-gradient-to-b from-navy/90 to-navy/60 z-10"></div>

  <div class="container mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
      Herramientas Digitales <span class="text-accent">Empresariales</span>
    </h1>
    <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10 animate-fade-in-up delay-200">
      Soluciones tecnológicas innovadoras diseñadas para optimizar procesos y maximizar resultados.
    </p>
    <div class="animate-fade-in-up delay-400">
      <a href="#herramientas" class="bg-accent text-white px-8 py-3 rounded-lg font-semibold text-lg shadow-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
        Explorar Herramientas
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Potencia tu Negocio</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Mejora la eficiencia y productividad con tecnología de vanguardia.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      
      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-chart-line"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="40" data-symbol="%">0</div>
        <div class="text-gray-400 text-sm">Productividad</div>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-clock"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="60" data-symbol="%">0</div>
        <div class="text-gray-400 text-sm">Ahorro de tiempo</div>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="35" data-symbol="%">0</div>
        <div class="text-gray-400 text-sm">Reducción costos</div>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-users"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="500" data-symbol="+">0</div>
        <div class="text-gray-400 text-sm">Empresas activas</div>
      </div>

    </div>
  </div>
</section>

<section id="herramientas" class="bg-navy py-16">
  <div class="container mx-auto px-6">
    
    <div class="text-center max-w-3xl mx-auto mb-12">
      <h2 class="text-3xl font-bold text-white mb-4">¿Por qué elegir nuestras herramientas?</h2>
      <p class="text-gray-400">
        Ofrecemos soluciones innovadoras para ayudar a nuevos negocios a crecer mediante un enfoque estratégico de planeación y diseño.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
      <div class="bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent hover:-translate-y-2 transition-all duration-300">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 text-accent">
          <i class="fas fa-project-diagram text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3 text-center">Planeación Estratégica</h3>
        <p class="text-gray-400 text-center text-sm">Definición de visión y objetivos comerciales con un plan de acción detallado.</p>
      </div>

      <div class="bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent hover:-translate-y-2 transition-all duration-300">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 text-accent">
          <i class="fas fa-palette text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3 text-center">Diseño de Marca</h3>
        <p class="text-gray-400 text-center text-sm">Identidad visual que refleja tus valores y atrae a tu público objetivo.</p>
      </div>

      <div class="bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent hover:-translate-y-2 transition-all duration-300">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 text-accent">
          <i class="fas fa-tools text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3 text-center">Herramientas Digitales</h3>
        <p class="text-gray-400 text-center text-sm">Software moderno de gestión y soluciones en la nube para tu empresa.</p>
      </div>
    </div>

    <div class="bg-navy-light/30 rounded-2xl p-8 md:p-12 border border-white/5">
      <div class="text-center mb-10">
        <h2 class="text-2xl font-semibold text-white mb-4">Software Especializado</h2>
        <p class="text-gray-400 max-w-2xl mx-auto">
          Plataformas listas para implementar hoy mismo en tu negocio.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-navy p-6 rounded-xl border border-white/5 hover:border-accent transition-all duration-300 text-center group">
          <div class="w-14 h-14 bg-navy-light rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-accent transition-colors">
            <i class="fas fa-user-friends text-accent text-xl group-hover:text-white transition-colors"></i>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">CRM de Ventas</h3>
          <p class="text-gray-400 text-xs mb-4">Gestión de clientes y automatización de procesos comerciales.</p>
          <a href="https://wa.me/525637713882" class="text-accent text-sm font-semibold hover:text-white transition-colors">Más información <i class="fas fa-arrow-right ml-1"></i></a>
        </div>

        <div class="bg-navy p-6 rounded-xl border border-white/5 hover:border-accent transition-all duration-300 text-center group">
          <div class="w-14 h-14 bg-navy-light rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-accent transition-colors">
            <i class="fas fa-bullhorn text-accent text-xl group-hover:text-white transition-colors"></i>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Suite de Marketing</h3>
          <p class="text-gray-400 text-xs mb-4">Herramientas para campañas, redes sociales y análisis.</p>
          <a href="https://wa.me/525637713882" class="text-accent text-sm font-semibold hover:text-white transition-colors">Más información <i class="fas fa-arrow-right ml-1"></i></a>
        </div>

        <div class="bg-navy p-6 rounded-xl border border-white/5 hover:border-accent transition-all duration-300 text-center group">
          <div class="w-14 h-14 bg-navy-light rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-accent transition-colors">
            <i class="fas fa-tasks text-accent text-xl group-hover:text-white transition-colors"></i>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Gestión de Proyectos</h3>
          <p class="text-gray-400 text-xs mb-4">Control de tareas, plazos y colaboración de equipos.</p>
          <a href="https://wa.me/525637713882" class="text-accent text-sm font-semibold hover:text-white transition-colors">Más información <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Implementación</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Proceso sencillo para integrar tecnología en tu flujo de trabajo.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <?php 
      $steps = [
        ['num' => '1', 'title' => 'Diagnóstico', 'desc' => 'Análisis de necesidades actuales.'],
        ['num' => '2', 'title' => 'Selección', 'desc' => 'Elección de herramientas adecuadas.'],
        ['num' => '3', 'title' => 'Integración', 'desc' => 'Configuración en tu sistema.'],
        ['num' => '4', 'title' => 'Capacitación', 'desc' => 'Entrenamiento a tu equipo.']
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
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Opiniones de Clientes</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-navy-light p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
          <p class="text-gray-300 mb-6 italic">"El sistema de gestión ha simplificado nuestros procesos y mejorado nuestra eficiencia de forma notable."</p>
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
               <i class="fas fa-user text-gray-400 text-xl"></i>
            </div>
            <div>
              <h4 class="font-semibold text-white">Gerente General</h4>
              <p class="text-accent text-xs">Sector Restaurantero</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="bg-navy-light p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
          <p class="text-gray-300 mb-6 italic">"Las herramientas de marketing transformaron nuestra presencia. Llegamos a más clientes con menos esfuerzo."</p>
          <div class="flex items-center">
             <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
               <i class="fas fa-user text-gray-400 text-xl"></i>
            </div>
            <div>
              <h4 class="font-semibold text-white">Dueña de Negocio</h4>
              <p class="text-accent text-xs">Comercio Retail</p>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-navy-light p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
          <p class="text-gray-300 mb-6 italic">"La implementación del CRM mejoró nuestro seguimiento y aumentó nuestras ventas considerablemente."</p>
          <div class="flex items-center">
             <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
               <i class="fas fa-user text-gray-400 text-xl"></i>
            </div>
            <div>
              <h4 class="font-semibold text-white">Director de Ventas</h4>
              <p class="text-accent text-xs">Consultoría</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contacto" class="py-20 bg-accent">
  <div class="container mx-auto px-6 relative z-10">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Listo para Digitalizarte?</h2>
      <p class="text-blue-100 max-w-2xl mx-auto">
        Solicita una demostración gratuita hoy mismo.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-xl font-bold mb-6 text-white border-b border-white/10 pb-4">Contacto</h3>
        <div class="space-y-4 text-gray-300">
          <p class="flex items-center"><i class="fas fa-envelope text-accent w-8 text-xl"></i> admin@bdosoluciones.com</p>
          <p class="flex items-center"><i class="fas fa-phone-alt text-accent w-8 text-xl"></i> +52 5637713882</p>
          <p class="flex items-center"><i class="fas fa-map-marker-alt text-accent w-8 text-xl"></i> Ixtapaluca, Edo. Méx.</p>
        </div>
      </div>

      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-2xl font-bold mb-6 text-white border-b border-white/10 pb-4">Solicitar Asesoría</h3>
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20estoy%20interesado%20en%20el%20servicio%20de%20cobranza" 
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
  // Animaciones generales (Fade In)
  const observerFade = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });

  document.addEventListener('DOMContentLoaded', () => {
    // 1. Iniciar observador de Fade In
    document.querySelectorAll('.fade-in, .tool-card, .process-card, .testimonial-card').forEach(element => {
      observerFade.observe(element);
    });

    // 2. Lógica para animar contadores (Números y Símbolos)
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

    const observerCounter = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          // Solo animar si está en 0 o vacío
          if (counter.innerText === '0' || counter.innerText === '') {
            runAnimation(counter);
            observerCounter.unobserve(counter);
          }
        }
      });
    }, { threshold: 0.5 });

    // Observar todos los contadores
    document.querySelectorAll('.counter').forEach(c => observerCounter.observe(c));

    // 3. Smooth scroll
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