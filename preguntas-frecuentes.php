<?php 
$page_title = "Preguntas Frecuentes";
include 'header.php'; 
?>

<section class="relative h-80 flex items-center justify-center overflow-hidden bg-navy">
  <div class="absolute inset-0 z-0">
    <img 
      src="img/hero-faq.jpg" 
      alt="Centro de Ayuda y Preguntas Frecuentes" 
      class="w-full h-full object-cover opacity-30 mix-blend-overlay"
    >
  </div>
  <div class="absolute inset-0 bg-gradient-to-b from-navy/90 to-navy/60 z-10"></div>
  <div class="relative z-20 text-center px-6">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 animate-fade-in-up">
      Preguntas <span class="text-accent">Frecuentes</span>
    </h1>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto animate-fade-in-up delay-200">
      Resolvemos tus dudas principales sobre nuestros servicios y procesos.
    </p>
  </div>
</section>

<section class="py-16 bg-navy-light border-y border-white/5">
  <div class="max-w-4xl mx-auto px-6">
    
    <div class="mb-12">
      <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
        <i class="fas fa-info-circle text-accent mr-3"></i> General
      </h2>
      <div class="space-y-4">
        
        <div class="bg-navy rounded-xl border border-white/5 overflow-hidden">
          <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
            <span class="text-lg font-semibold text-white">¿Dónde se encuentran ubicados?</span>
            <i class="fas fa-chevron-down text-accent transition-transform duration-300"></i>
          </button>
          <div class="hidden px-6 pb-4 text-gray-400 border-t border-white/5">
            <p>Nuestras oficinas centrales se encuentran en Ixtapaluca, Estado de México. Sin embargo, brindamos servicios digitales y remotos a clientes en todo el país.</p>
          </div>
        </div>

        <div class="bg-navy rounded-xl border border-white/5 overflow-hidden">
          <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
            <span class="text-lg font-semibold text-white">¿Cuáles son sus horarios de atención?</span>
            <i class="fas fa-chevron-down text-accent transition-transform duration-300"></i>
          </button>
          <div class="hidden px-6 pb-4 text-gray-400 border-t border-white/5">
            <p>Nuestro equipo administrativo labora de Lunes a Viernes de 9:00 AM a 6:00 PM. Para servicios críticos de soporte técnico, contamos con guardias disponibles 24/7 bajo contrato previo.</p>
          </div>
        </div>

      </div>
    </div>

    <div class="mb-12">
      <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
        <i class="fas fa-cogs text-accent mr-3"></i> Servicios
      </h2>
      <div class="space-y-4">
        
        <div class="bg-navy rounded-xl border border-white/5 overflow-hidden">
          <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
            <span class="text-lg font-semibold text-white">¿Cómo contrato un paquete de facturación?</span>
            <i class="fas fa-chevron-down text-accent transition-transform duration-300"></i>
          </button>
          <div class="hidden px-6 pb-4 text-gray-400 border-t border-white/5">
            <p>Puedes contactarnos vía WhatsApp o teléfono para solicitar una cotización. Una vez elegido el plan de folios, la activación es inmediata tras la validación de tus datos fiscales.</p>
          </div>
        </div>

        <div class="bg-navy rounded-xl border border-white/5 overflow-hidden">
          <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
            <span class="text-lg font-semibold text-white">¿Venden carteras de clientes garantizadas?</span>
            <i class="fas fa-chevron-down text-accent transition-transform duration-300"></i>
          </button>
          <div class="hidden px-6 pb-4 text-gray-400 border-t border-white/5">
            <p>Sí, todas nuestras carteras pasan por un proceso de "Due Diligence" (auditoría) para garantizar la veracidad de la información y la viabilidad de los clientes antes de ponerlas a la venta.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<section class="py-16 bg-accent">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-white mb-4">¿No encontraste tu respuesta?</h2>
    <p class="text-blue-100 mb-8 max-w-2xl mx-auto">Nuestro equipo está listo para ayudarte con cualquier duda específica que tengas.</p>
    <a href="https://wa.me/525637713882" class="bg-white text-navy font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-100 transition-all transform hover:scale-105 inline-flex items-center">
      <i class="fab fa-whatsapp mr-2 text-xl"></i> Contactar Soporte
    </a>
  </div>
</section>

<script>
  function toggleFaq(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('i');
    
    // Mostrar/Ocultar contenido
    content.classList.toggle('hidden');
    
    // Rotar ícono
    if (content.classList.contains('hidden')) {
      icon.style.transform = 'rotate(0deg)';
      button.classList.remove('bg-white/5');
    } else {
      icon.style.transform = 'rotate(180deg)';
      button.classList.add('bg-white/5');
    }
  }
</script>

<style>
  @keyframes fade-in-up {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fade-in-up { animation: fade-in-up 0.8s ease-out forwards; }
  .delay-200 { animation-delay: 0.2s; }
</style>

<?php include 'footer.php'; ?>