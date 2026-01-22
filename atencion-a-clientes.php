<?php 
$page_title = "Atención al Cliente";
include 'header.php'; 
?>

<section class="relative h-96 flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img 
      src="img/hero-atencion.jpg" 
      alt="Centro de Atención al Cliente" 
      class="w-full h-full object-cover opacity-40 mix-blend-overlay"
      onerror="this.src='https://images.unsplash.com/photo-1534536281715-e28d76689b4d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80';"
    >
  </div>
  
  <div class="absolute inset-0 bg-gradient-to-b from-navy/90 to-navy/60 z-10"></div>

  <div class="container mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-fade-in-up">
      Excelencia en <span class="text-accent">Atención al Cliente</span>
    </h1>
    <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10 animate-fade-in-up delay-200">
      Brindamos soporte técnico y atención personalizada para garantizar la satisfacción total de tus usuarios.
    </p>
    <div class="animate-fade-in-up delay-400">
      <a href="#contacto" class="bg-accent text-white px-8 py-3 rounded-lg font-semibold text-lg shadow-lg hover:bg-blue-600 transition-all duration-300 transform hover:scale-105">
        Contactar Soporte
      </a>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestros Indicadores</h2>
      <p class="text-gray-400 max-w-2xl mx-auto">
        Comprometidos con la calidad y la rapidez en cada interacción.
      </p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      
      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-smile"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="98" data-symbol="%">0</div>
        <p class="text-gray-400 text-sm">Satisfacción del Cliente</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-headset"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="24" data-symbol="/7">0</div>
        <p class="text-gray-400 text-sm">Soporte Continuo</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-bolt"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="5" data-symbol=" min">0</div>
        <p class="text-gray-400 text-sm">Tiempo de Respuesta</p>
      </div>

      <div class="bg-navy rounded-xl p-6 text-center border border-white/5 hover:border-accent/50 transition-all duration-300 group">
        <div class="text-accent text-4xl mb-4 group-hover:scale-110 transition-transform">
          <i class="fas fa-users"></i>
        </div>
        <div class="counter text-3xl font-bold text-white mb-2" 
             data-target="1500" data-symbol="+">0</div>
        <p class="text-gray-400 text-sm">Clientes Atendidos</p>
      </div>

    </div>
  </div>
</section>

<section class="bg-navy py-16">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Soluciones de Soporte</h2>
      <p class="mt-4 text-gray-400 max-w-2xl mx-auto">
        Canales de comunicación integrados para tu empresa.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-navy-light rounded-xl border border-white/5 p-8 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent transition-colors">
          <i class="fas fa-desktop text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Mesa de Ayuda (Help Desk)</h3>
        <p class="text-gray-400 mb-4">
          Gestión centralizada de incidencias y tickets técnicos.
        </p>
      </div>

      <div class="bg-navy-light rounded-xl border border-white/5 p-8 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent transition-colors">
          <i class="fas fa-comments text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Atención Multicanal</h3>
        <p class="text-gray-400 mb-4">
          Soporte vía teléfono, chat, correo y WhatsApp integrado.
        </p>
      </div>

      <div class="bg-navy-light rounded-xl border border-white/5 p-8 text-center hover:-translate-y-2 transition-transform duration-300 group">
        <div class="w-16 h-16 bg-navy rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent transition-colors">
          <i class="fas fa-user-cog text-accent text-2xl group-hover:text-white transition-colors"></i>
        </div>
        <h3 class="text-xl font-semibold text-white mb-3">Consultoría Técnica</h3>
        <p class="text-gray-400 mb-4">
          Asesoramiento experto para optimizar tus procesos de servicio.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Clientes Satisfechos</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-navy p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"El tiempo de respuesta es impresionante. Solucionaron nuestro problema de servidor en minutos."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy-light border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Director de TI</h4>
                  <p class="text-accent text-sm">Empresa de Software</p>
              </div>
            </div>
        </div>
      </div>

      <div class="bg-navy p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"Su equipo de atención al cliente siempre es amable y profesional. Nos sentimos muy respaldados."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy-light border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Gerente Administrativo</h4>
                  <p class="text-accent text-sm">Consultoría Legal</p>
              </div>
            </div>
        </div>
      </div>

      <div class="bg-navy p-6 rounded-xl border border-white/5 relative hover:border-accent transition-all duration-300">
        <i class="fas fa-quote-left text-accent/20 text-4xl absolute top-4 left-4"></i>
        <div class="relative z-10 pt-4">
            <p class="text-gray-300 mb-6 italic">"La disponibilidad 24/7 es real. Nos han ayudado en horarios críticos sin demora."</p>
            <div class="flex items-center">
              <div class="w-12 h-12 rounded-full bg-navy-light border-2 border-accent flex items-center justify-center mr-4">
                <i class="fas fa-user text-gray-400 text-xl"></i>
              </div>
              <div>
                  <h4 class="font-semibold text-white">Coordinador de Ops</h4>
                  <p class="text-accent text-sm">Logística Internacional</p>
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
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">¿Necesitas Ayuda?</h2>
      <p class="text-blue-100 max-w-2xl mx-auto text-lg">
        Nuestro equipo está listo para atenderte.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-xl font-bold mb-6 text-white border-b border-white/10 pb-4">Canales de Soporte</h3>
        <div class="space-y-6">
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent group-hover:text-white group-hover:bg-accent transition-colors">
               <i class="fas fa-envelope text-xl"></i>
            </div>
            <span class="text-lg">soporte@bdosoluciones.com</span>
          </div>
          <div class="flex items-center text-gray-200 group">
            <div class="w-12 h-12 rounded-lg bg-navy-light flex items-center justify-center mr-4 text-accent group-hover:text-white group-hover:bg-accent transition-colors">
               <i class="fas fa-phone-alt text-xl"></i>
            </div>
            <span class="text-lg">+52 5637713882</span>
          </div>
        </div>
      </div>

      <div class="bg-navy rounded-xl p-8 shadow-2xl border border-white/10 transform hover:-translate-y-1 transition-transform duration-300">
        <h3 class="text-xl font-bold mb-6 text-white border-b border-white/10 pb-4">Iniciar Chat</h3>
        <div class="space-y-4">
          <a href="https://wa.me/525637713882?text=Hola,%20necesito%20soporte%20técnico" 
             class="block w-full bg-white text-navy hover:bg-gray-100 py-4 rounded-lg font-bold text-center transition-all shadow-md flex items-center justify-center">
            <i class="fab fa-whatsapp mr-2 text-2xl text-green-600"></i> WhatsApp
          </a>
          
          <a href="tel:+525637713882" 
             class="block w-full bg-navy-light hover:bg-accent text-white py-4 rounded-lg font-bold text-center transition-all shadow-md border border-white/10 flex items-center justify-center">
            <i class="fas fa-phone mr-2"></i> Llamar
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
          // Math.ceil para asegurar enteros
          counter.textContent = Math.ceil(current) + symbol;
        }
      }, 1000 / frames);
    };

    // Observador
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          // Solo si está en 0 o vacío
          if (counter.innerText === '0' || counter.innerText === '') {
            runAnimation(counter);
            observer.unobserve(counter);
          }
        }
      });
    }, { threshold: 0.5 });

    // Iniciar observación en contadores
    document.querySelectorAll('.counter').forEach(c => observer.observe(c));

    // Animaciones fade-in
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