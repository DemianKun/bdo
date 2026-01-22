<?php 
$page_title = "Cartera de Clientes";
include 'header.php'; 
?>

<section class="relative h-96 flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img 
      src="img/hero-cartera.jpg" 
      alt="Cartera de Clientes" 
      class="w-full h-full object-cover opacity-40 mix-blend-overlay"
    >
  </div>
  <div class="absolute inset-0 bg-gradient-to-b from-navy/90 to-navy/60 z-10"></div>
  <div class="relative z-20 text-center px-6 max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 animate-fade-in-up">
      Cartera de <span class="text-accent">Clientes</span>
    </h1>
    <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
      Adquiere carteras de clientes establecidas y acelera el crecimiento de tu negocio con nuestra experiencia en evaluación y transacciones.
    </p>
    <div class="animate-fade-in-up delay-200">
      <a href="#contacto" class="bg-accent text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-lg shadow-accent/20">
        <i class="fas fa-users mr-3"></i>
        Solicitar Asesoría
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Por Qué Comprar una Cartera?</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        La forma más efectiva de acelerar el crecimiento empresarial.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      
      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="counter text-4xl md:text-5xl font-bold text-accent mb-2 group-hover:scale-110 transition-transform" 
             data-target="70" data-symbol="%">0</div>
        <div class="text-gray-400 text-sm">Mayor probabilidad de éxito</div>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="counter text-4xl md:text-5xl font-bold text-accent mb-2 group-hover:scale-110 transition-transform" 
             data-target="60" data-symbol="%">0</div>
        <div class="text-gray-400 text-sm">Días ahorrados</div>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="counter text-4xl md:text-5xl font-bold text-accent mb-2 group-hover:scale-110 transition-transform" 
             data-target="40" data-symbol="%">0</div>
        <div class="text-gray-400 text-sm">Reducción de costos</div>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="counter text-4xl md:text-5xl font-bold text-accent mb-2 group-hover:scale-110 transition-transform" 
             data-target="6" data-symbol="%">0</div>
        <div class="text-gray-400 text-sm">Meses retorno inversión</div>
      </div>

    </div>
  </div>
</section>

<section class="py-16 bg-navy">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
        ¿Qué es la <span class="text-accent">Compra de Cartera</span>?
      </h2>
      <p class="text-gray-300 max-w-3xl mx-auto text-lg">
        Estrategia para adquirir relaciones comerciales consolidadas, contratos y obligaciones pendientes para expandir tu negocio rápidamente.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="service-card bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent transition-all duration-500 group hover:-translate-y-2">
        <div class="text-accent text-4xl mb-6 bg-navy w-16 h-16 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
          <i class="fas fa-rocket"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Expansión Rápida</h3>
        <p class="text-gray-400">Reduce el tiempo de construcción de una base de clientes desde cero y accede a una red consolidada inmediatamente.</p>
      </div>
      <div class="service-card bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent transition-all duration-500 group hover:-translate-y-2">
        <div class="text-accent text-4xl mb-6 bg-navy w-16 h-16 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
          <i class="fas fa-file-contract"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Proceso Seguro</h3>
        <p class="text-gray-400">Desde la identificación y evaluación hasta la negociación y formalización legal del contrato.</p>
      </div>
      <div class="service-card bg-navy-light p-8 rounded-xl border border-white/5 hover:border-accent transition-all duration-500 group hover:-translate-y-2">
        <div class="text-accent text-4xl mb-6 bg-navy w-16 h-16 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
          <i class="fas fa-search-dollar"></i>
        </div>
        <h3 class="text-2xl font-bold text-white mb-4">Evaluación Profesional</h3>
        <p class="text-gray-400">Auditoría de antigüedad, volumen de compras y estabilidad financiera para asegurar un valor justo.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestro Proceso de Adquisición</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">Te guiamos con total transparencia y seguridad jurídica.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <?php 
      $steps = [
        ['num' => '1', 'title' => 'Evaluación', 'desc' => 'Análisis de perfil y compatibilidad.'],
        ['num' => '2', 'title' => 'Due Diligence', 'desc' => 'Verificación exhaustiva de valor.'],
        ['num' => '3', 'title' => 'Negociación', 'desc' => 'Acuerdo de términos justos.'],
        ['num' => '4', 'title' => 'Integración', 'desc' => 'Apoyo en la transición operativa.']
      ];
      foreach ($steps as $step): ?>
      <div class="bg-navy rounded-xl p-6 text-center text-white border border-white/5 hover:border-accent hover:-translate-y-1 transition-all duration-300">
        <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold shadow-lg shadow-accent/20">
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
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Clientes Satisfechos</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-navy-light rounded-xl p-8 border border-white/5 hover:border-accent transition-all duration-300 relative">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-6 left-6"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"La adquisición de la cartera nos permitió duplicar nuestro volumen de operaciones en tiempo récord. Un servicio estratégico e impecable."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Director General</h4>
                  <p class="text-accent text-sm">Sector Financiero</p>
              </div>
            </div>
        </div>
      </div>

      <div class="bg-navy-light rounded-xl p-8 border border-white/5 hover:border-accent transition-all duration-300 relative">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-6 left-6"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"El proceso de due diligence fue exhaustivo y transparente, dándonos total seguridad para realizar la inversión."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Gerente Comercial</h4>
                  <p class="text-accent text-sm">Empresa Retail</p>
              </div>
            </div>
        </div>
      </div>

      <div class="bg-navy-light rounded-xl p-8 border border-white/5 hover:border-accent transition-all duration-300 relative">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-6 left-6"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"Gracias a BDO expandimos nuestra presencia en el mercado de manera sólida y rentable. Altamente recomendados."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Socio Fundador</h4>
                  <p class="text-accent text-sm">Consultora de Negocios</p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contacto" class="py-20 bg-accent">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Interesado en Adquirir una Cartera?</h2>
      <p class="text-blue-100 max-w-2xl mx-auto text-lg">
        Contáctanos para una asesoría personalizada.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-xl font-bold mb-6 text-white border-b border-white/10 pb-4">Contacto Directo</h3>
        <div class="space-y-4">
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent"><i class="fas fa-envelope text-xl"></i></div>
            <span class="text-lg">admin@bdosoluciones.com</span>
          </div>
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent"><i class="fas fa-phone-alt text-xl"></i></div>
            <span class="text-lg">+52 5637713882</span>
          </div>
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent"><i class="fas fa-map-marker-alt text-xl"></i></div>
            <span class="text-lg">Ixtapaluca, Edo. Méx.</span>
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
  document.addEventListener('DOMContentLoaded', () => {
    
    // Función para animar un contador específico
    const runAnimation = (counter) => {
      const target = parseInt(counter.getAttribute('data-target'));
      const symbol = counter.getAttribute('data-symbol') || '';
      const duration = 2000; // 2 segundos
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

    // Crear el observador
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          // Solo animar si todavía está en '0' (o vacío)
          if (counter.innerText === '0' || counter.innerText === '') {
            runAnimation(counter);
            observer.unobserve(counter); // Dejar de observar para no repetir
          }
        }
      });
    }, { threshold: 0.5 }); // Se activa cuando el 50% del número es visible

    // Seleccionar todos los elementos con la clase .counter y observarlos
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
      observer.observe(counter);
    });
  });
</script>

<?php include 'footer.php'; ?>