<?php include 'header.php'; ?>

<section class="relative h-screen flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img src="img/hero-home.jpg" alt="BDO Soluciones Efectivas" class="w-full h-full object-cover opacity-40">
  </div>
  <div class="absolute inset-0 bg-gradient-to-b from-navy/80 via-navy/50 to-navy z-10"></div>
  
  <div class="relative z-20 text-center px-6 max-w-6xl mx-auto">
    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 animate-fade-in-up">
      BDO <span class="text-accent block mt-2">Soluciones Efectivas</span>
    </h1>
    <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed animate-fade-in-up delay-200">
      Desde 2015 brindando soluciones integrales con tecnología propia y equipo humano altamente capacitado.
    </p>
    <div class="animate-fade-in-up delay-400">
      <a href="#servicios" class="bg-accent text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-lg hover:shadow-accent/50">
        <span>Descubrir Servicios</span>
        <i class="fas fa-arrow-down ml-3"></i>
      </a>
    </div>
  </div>

  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
    <a href="#about" class="text-white/70 hover:text-white text-2xl transition-colors">
      <i class="fas fa-chevron-down"></i>
    </a>
  </div>
</section>

<section id="about" class="py-20 bg-navy-light border-b border-white/5">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <div class="space-y-8">
      <div class="animate-scale-in">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 flex items-center">
          <span class="bg-accent/20 text-accent p-3 rounded-full mr-4 text-3xl"><i class="fas fa-building"></i></span>
          ¿QUIÉNES SOMOS?
        </h2>
        <p class="text-lg text-gray-300 leading-relaxed">
          Somos un centro de multiservicios especializado en brindar soluciones personalizadas. 
          Desde nuestra fundación en 2015, hemos establecido un compromiso firme con la calidad e innovación.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="animate-slide-in-left">
          <div class="bg-navy p-6 rounded-lg border-l-4 border-accent shadow-lg hover:shadow-accent/20 transition-all duration-300">
            <h3 class="text-xl font-bold text-white mb-3 flex items-center"><i class="fas fa-bullseye text-accent mr-3"></i> MISIÓN</h3>
            <p class="text-gray-400 text-sm">Brindar soluciones personalizadas y eficientes a través de un centro de atención multicanal.</p>
          </div>
        </div>
        <div class="animate-slide-in-right">
          <div class="bg-navy p-6 rounded-lg border-l-4 border-accent shadow-lg hover:shadow-accent/20 transition-all duration-300">
            <h3 class="text-xl font-bold text-white mb-3 flex items-center"><i class="fas fa-eye text-accent mr-3"></i> VISIÓN</h3>
            <p class="text-gray-400 text-sm">Ser el centro de atención multicanal líder en innovación y calidad en Latinoamérica.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="relative animate-float">
      <div class="absolute -inset-4 bg-gradient-to-r from-accent to-blue-600 rounded-2xl opacity-30 blur-lg"></div>
      <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10">
        <img src="img/quienes-somos.jpg" alt="Equipo BDO" class="w-full h-96 object-cover transform hover:scale-105 transition-transform duration-700">
        <div class="absolute inset-0 bg-navy/20"></div>
      </div>
      <div class="absolute -bottom-6 -right-6 bg-accent text-white p-6 rounded-2xl shadow-xl border border-white/10">
        <div class="text-3xl font-bold">10+</div>
        <div class="text-sm font-medium">Años de Experiencia</div>
      </div>
    </div>
  </div>
</section>

<section id="servicios" class="py-20 bg-navy">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 animate-fade-in-up">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Nuestros <span class="text-accent">Servicios</span></h2>
      <p class="text-xl text-gray-300 max-w-3xl mx-auto">Descubre todos los servicios que ofrecemos para impulsar el crecimiento de tu empresa</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php
      $services = [
        ['icon' => 'fa-money-bill-wave', 'title' => 'Cobranza', 'desc' => 'Gestión eficiente y profesional de cartera con tecnología propia.', 'link' => 'cobranza.php'],
        ['icon' => 'fa-chart-line', 'title' => 'Ventas', 'desc' => 'Estrategias comerciales para incrementar tus ingresos.', 'link' => 'ventas.php'],
        ['icon' => 'fa-file-invoice-dollar', 'title' => 'Facturación', 'desc' => 'Soluciones integrales de gestión documental y fiscal.', 'link' => 'facturacion.php'],
        ['icon' => 'fa-bullhorn', 'title' => 'Marketing', 'desc' => 'Estrategias digitales para aumentar tu presencia online.', 'link' => 'marqueting.php'],
        ['icon' => 'fa-shipping-fast', 'title' => 'Paquetería', 'desc' => 'Servicios logísticos integrales para tu empresa.', 'link' => 'paqueteria.php'],
        ['icon' => 'fa-headset', 'title' => 'Atención a Clientes', 'desc' => 'Soporte especializado multicanal para tus clientes.', 'link' => 'atencion-a-clientes.php'],
      ];
      foreach ($services as $service): ?>
      <div class="service-card bg-navy-light p-6 rounded-xl border border-white/5 hover:border-accent transition-all duration-500 group hover:-translate-y-2 hover:shadow-lg hover:shadow-accent/10">
        <div class="w-14 h-14 bg-navy rounded-lg flex items-center justify-center mb-6 group-hover:bg-accent transition-colors duration-300">
            <i class="fas <?php echo $service['icon']; ?> text-accent text-2xl group-hover:text-white transition-colors duration-300"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-3"><?php echo $service['title']; ?></h3>
        <p class="text-gray-400 mb-6 min-h-[48px]"><?php echo $service['desc']; ?></p>
        <a href="<?php echo $service['link']; ?>" class="inline-flex items-center text-accent font-semibold group-hover:text-white transition-colors">
          Saber más <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-20 bg-gradient-to-br from-navy-light to-navy border-y border-white/5">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <div class="text-center animate-count-up p-4">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2" data-count="500">0</div>
        <div class="text-gray-300 font-medium">Clientes Satisfechos</div>
      </div>
      <div class="text-center animate-count-up p-4">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2" data-count="10">0</div>
        <div class="text-gray-300 font-medium">Años de Experiencia</div>
      </div>
      <div class="text-center animate-count-up p-4">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2" data-count="8">0</div>
        <div class="text-gray-300 font-medium">Servicios</div>
      </div>
      <div class="text-center animate-count-up p-4">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2" data-count="1200">0</div>
        <div class="text-gray-300 font-medium">Proyectos</div>
      </div>
    </div>
  </div>
</section>

<section class="py-20 relative overflow-hidden">
  <div class="absolute inset-0 bg-accent/90 z-0"></div>
  
  <div class="max-w-4xl mx-auto text-center px-6 relative z-10">
    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">¿Listo para impulsar tu negocio?</h2>
    <p class="text-xl text-white/90 mb-10">Contáctanos hoy mismo y descubre cómo podemos ayudarte a alcanzar tus objetivos.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="https://wa.me/525637713882" class="bg-white text-accent px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 inline-flex items-center justify-center shadow-lg">
        <i class="fab fa-whatsapp mr-3 text-2xl"></i> Contactar por WhatsApp
      </a>
      <a href="tel:+525637713882" class="bg-navy text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-navy-light border border-white/20 transition-all duration-300 transform hover:scale-105 inline-flex items-center justify-center shadow-lg">
        <i class="fas fa-phone mr-3"></i> Llamar Ahora
      </a>
    </div>
  </div>
</section>

<style>
  @keyframes fade-in-up { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
  @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  .animate-fade-in-up { animation: fade-in-up 1s ease-out; }
  .animate-float { animation: float 3s ease-in-out infinite; }
  .delay-200 { animation-delay: 200ms; }
  .delay-400 { animation-delay: 400ms; }
  .service-card { opacity: 0; transform: translateY(30px); }
  .service-card.visible { opacity: 1; transform: translateY(0); }
</style>

<script>
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
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        if (entry.target.classList.contains('animate-count-up')) {
          animateCountUp();
          observer.unobserve(entry.target);
        }
      }
    });
  }, { threshold: 0.1 });
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.service-card').forEach(card => observer.observe(card));
    document.querySelectorAll('.animate-count-up').forEach(counter => observer.observe(counter));
  });
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) { target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });
</script>

<?php include 'footer.php'; ?>