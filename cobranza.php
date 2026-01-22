<?php 
$page_title = "Servicio de Cobranza";
include 'header.php'; 
?>

<section class="relative h-96 flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img src="img/hero-cobranza.jpg" alt="Servicio de Cobranza" class="w-full h-full object-cover opacity-40 mix-blend-overlay">
  </div>
  <div class="absolute inset-0 bg-gradient-to-b from-navy/90 to-navy/60 z-10"></div>
  <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 animate-fade-in-up">
      Servicio de <span class="text-accent">Cobranza</span>
    </h1>
    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
      Soluciones efectivas para la recuperación de cartera con enfoque profesional y resultados comprobados.
    </p>
    <div class="animate-fade-in-up delay-200">
      <a href="#contacto" class="bg-accent text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-lg shadow-accent/20">
        <i class="fas fa-phone-alt mr-3"></i> Solicitar Asesoría
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Resultados Comprobados</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">Metodología efectiva en recuperación de cartera.</p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent/50 hover:shadow-lg transition-all duration-300 group">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter group-hover:scale-110 transition-transform" data-target="85">0</div>
        <div class="text-gray-400 text-sm">Éxito Temprana</div>
      </div>
      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent/50 hover:shadow-lg transition-all duration-300 group">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter group-hover:scale-110 transition-transform" data-target="70">0</div>
        <div class="text-gray-400 text-sm">Recuperación Vencida</div>
      </div>
      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent/50 hover:shadow-lg transition-all duration-300 group">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter group-hover:scale-110 transition-transform" data-target="200">0</div>
        <div class="text-gray-400 text-sm">Clientes Felices</div>
      </div>
      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent/50 hover:shadow-lg transition-all duration-300 group">
        <div class="text-4xl md:text-5xl font-bold text-accent mb-2 counter group-hover:scale-110 transition-transform" data-target="15">0</div>
        <div class="text-gray-400 text-sm">Años Experiencia</div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Tipos de <span class="text-accent">Cobranza</span></h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="service-card bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent transition-all duration-500 group hover:-translate-y-2">
        <div class="text-accent text-4xl mb-6 bg-navy w-16 h-16 rounded-full flex items-center justify-center"><i class="fas fa-clock"></i></div>
        <h3 class="text-2xl font-bold text-white mb-4">Cobranza Temprana</h3>
        <ul class="space-y-4 text-gray-400">
          <li class="flex items-start"><i class="fas fa-check text-accent mr-3 mt-1"></i><div><span class="text-white font-medium block">Envíos digitales</span><p class="text-sm">Recordatorios automáticos.</p></div></li>
          <li class="flex items-start"><i class="fas fa-check text-accent mr-3 mt-1"></i><div><span class="text-white font-medium block">Seguimiento</span><p class="text-sm">Monitoreo constante.</p></div></li>
        </ul>
      </div>
      <div class="service-card bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent transition-all duration-500 group hover:-translate-y-2">
        <div class="text-accent text-4xl mb-6 bg-navy w-16 h-16 rounded-full flex items-center justify-center"><i class="fas fa-headset"></i></div>
        <h3 class="text-2xl font-bold text-white mb-4">Cobranza Proactiva</h3>
        <ul class="space-y-4 text-gray-400">
          <li class="flex items-start"><i class="fas fa-check text-accent mr-3 mt-1"></i><div><span class="text-white font-medium block">Contacto directo</span><p class="text-sm">Gestión telefónica.</p></div></li>
          <li class="flex items-start"><i class="fas fa-check text-accent mr-3 mt-1"></i><div><span class="text-white font-medium block">Negociación</span><p class="text-sm">Planes de pago.</p></div></li>
        </ul>
      </div>
      <div class="service-card bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent transition-all duration-500 group hover:-translate-y-2">
        <div class="text-accent text-4xl mb-6 bg-navy w-16 h-16 rounded-full flex items-center justify-center"><i class="fas fa-gavel"></i></div>
        <h3 class="text-2xl font-bold text-white mb-4">Cobranza Judicial</h3>
        <ul class="space-y-4 text-gray-400">
          <li class="flex items-start"><i class="fas fa-check text-accent mr-3 mt-1"></i><div><span class="text-white font-medium block">Acciones legales</span><p class="text-sm">Procesos judiciales.</p></div></li>
          <li class="flex items-start"><i class="fas fa-check text-accent mr-3 mt-1"></i><div><span class="text-white font-medium block">Embargos</span><p class="text-sm">Medidas coercitivas.</p></div></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <?php 
      $steps = [
        ['num' => '1', 'title' => 'Análisis', 'desc' => 'Evaluamos la cartera.'],
        ['num' => '2', 'title' => 'Contacto', 'desc' => 'Comunicación multicanal.'],
        ['num' => '3', 'title' => 'Negociación', 'desc' => 'Acuerdos de pago.'],
        ['num' => '4', 'title' => 'Seguimiento', 'desc' => 'Cumplimiento total.']
      ];
      foreach ($steps as $step): ?>
      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent hover:-translate-y-1 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold shadow-lg"><?php echo $step['num']; ?></div>
        <h3 class="text-lg font-semibold mb-3 text-white"><?php echo $step['title']; ?></h3>
        <p class="text-gray-400 text-sm"><?php echo $step['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-16 bg-navy">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Empresas que Confían en Nosotros</h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
      <?php $clients = ['VOLANA', 'EXITUS', 'FORTALEZA', 'CAME']; foreach ($clients as $client): ?>
      <div class="bg-navy-light p-6 rounded-xl flex items-center justify-center h-24 border border-white/5 opacity-60 hover:opacity-100 hover:border-accent transition-all duration-300">
        <span class="text-white font-bold text-xl"><?php echo $client; ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="contacto" class="py-20 bg-accent">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Necesita Ayuda con su Cartera Vencida?</h2>
      <p class="text-blue-100 max-w-2xl mx-auto text-lg">Contáctanos para una evaluación sin costo y una propuesta personalizada.</p>
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
  function animateCounter(element, target) {
    let current = 0;
    const increment = target / 100; 
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        element.textContent = target + (target <= 100 ? '%' : '+');
        clearInterval(timer);
      } else {
        element.textContent = Math.floor(current) + (target <= 100 ? '%' : '+');
      }
    }, 20);
  }
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        const counters = entry.target.querySelectorAll('.counter');
        counters.forEach(counter => {
          if(counter.textContent === '0' || counter.textContent === '') {
             animateCounter(counter, parseInt(counter.getAttribute('data-target')));
          }
        });
      }
    });
  }, { threshold: 0.1 });
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('section').forEach(s => observer.observe(s));
  });
</script>

<?php include 'footer.php'; ?>