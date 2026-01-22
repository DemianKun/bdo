<?php 
$page_title = "Paquetería y Logística";
include 'header.php'; 
?>

<section class="relative h-96 flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img 
      src="img/hero-paqueteria.jpg" 
      alt="Servicio de Paquetería" 
      class="w-full h-full object-cover opacity-40 mix-blend-overlay"
    >
  </div>
  
  <div class="absolute inset-0 bg-gradient-to-b from-navy/90 to-navy/60 z-10"></div>

  <div class="container mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
      Soluciones de <span class="text-accent">Logística</span>
    </h1>
    <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10 animate-fade-in-up delay-200">
      Envíos seguros, rápidos y eficientes para potenciar tu cadena de suministro.
    </p>
    <div class="animate-fade-in-up delay-400">
      <a href="#contacto" class="bg-accent text-white px-8 py-3 rounded-lg font-semibold text-lg shadow-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
        Cotizar Envío
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestra Eficiencia</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Métricas que respaldan nuestro compromiso con la puntualidad.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      
      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-check-circle"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="99" data-symbol="%">0</div>
        <p class="text-gray-400 text-sm">Entregas a tiempo</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-map-marked-alt"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="100" data-symbol="%">0</div>
        <p class="text-gray-400 text-sm">Cobertura Nacional</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-box-open"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="1000" data-symbol="+">0</div>
        <p class="text-gray-400 text-sm">Envíos diarios</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-stopwatch"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="24" data-symbol="">0</div>
        <p class="text-gray-400 text-sm">Horas entrega express</p>
      </div>

    </div>
  </div>
</section>

<section class="bg-navy py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Servicios de Transporte</h2>
      <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
        Adaptamos nuestra logística a las necesidades de tu negocio.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-navy-light rounded-xl border border-white/5 p-8 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent transition-colors">
          <i class="fas fa-shipping-fast text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Paquetería Express</h3>
        <p class="text-gray-400 mb-4">
          Entregas urgentes día siguiente con rastreo en tiempo real.
        </p>
      </div>

      <div class="bg-navy-light rounded-xl border border-white/5 p-8 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent transition-colors">
          <i class="fas fa-truck-loading text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Carga Consolidada</h3>
        <p class="text-gray-400 mb-4">
          Optimización de costos compartiendo espacio en unidades.
        </p>
      </div>

      <div class="bg-navy-light rounded-xl border border-white/5 p-8 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent transition-colors">
          <i class="fas fa-warehouse text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Almacenaje y Distribución</h3>
        <p class="text-gray-400 mb-4">
          Gestión de inventarios y fulfillment para e-commerce.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Tu Envío paso a paso</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <?php 
      $steps = [
        ['num' => '1', 'title' => 'Recolección', 'desc' => 'Recogemos en tu domicilio.'],
        ['num' => '2', 'title' => 'Procesamiento', 'desc' => 'Clasificación en centro logístico.'],
        ['num' => '3', 'title' => 'Ruta', 'desc' => 'Traslado seguro a destino.'],
        ['num' => '4', 'title' => 'Entrega', 'desc' => 'Confirmación de recepción.']
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
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Clientes Satisfechos</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-navy-light p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"Mis pedidos llegan siempre a tiempo. La plataforma de rastreo es muy precisa y fácil de usar."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Gerente de Logística</h4>
                  <p class="text-accent text-sm">Empresa Automotriz</p>
              </div>
            </div>
        </div>
      </div>

      <div class="bg-navy-light p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"Excelente manejo de mercancía delicada. Nunca hemos tenido problemas con daños o pérdidas."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Dueño de Negocio</h4>
                  <p class="text-accent text-sm">Venta de Electrónica</p>
              </div>
            </div>
        </div>
      </div>

      <div class="bg-navy-light p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"La reducción de costos en envíos masivos ha sido clave para nuestra expansión nacional."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Director de Operaciones</h4>
                  <p class="text-accent text-sm">Cadena de Suministro</p>
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
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Cotiza tu Envío</h2>
      <p class="text-blue-100 max-w-2xl mx-auto text-lg">
        Ponte en contacto para obtener tarifas preferenciales.
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

    // Observador para contadores
    const observerCounter = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          if (counter.innerText === '0' || counter.innerText === '') {
            runAnimation(counter);
            observerCounter.unobserve(counter);
          }
        }
      });
    }, { threshold: 0.5 });

    document.querySelectorAll('.counter').forEach(c => observerCounter.observe(c));

    // Observador para efectos fade-in
    const observerFade = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in, .service-card').forEach(e => observerFade.observe(e));
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