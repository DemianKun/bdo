<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? $page_title . " - " : ""; ?>BDO - Soluciones Efectivas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="img/icon.png" type="image/png">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            navy: {
              DEFAULT: '#0f172a', // Fondo principal unificado
              light: '#1e293b',   // Fondo secundario
              lighter: '#334155'
            },
            accent: {
              DEFAULT: '#2563eb', // Azul BDO
              dark: '#1d4ed8'
            }
          }
        }
      }
    }
  </script>
  <style>
    :root {
      --bg-primary: #0f172a;
      --bg-secondary: #1e293b;
      --text-main: #ffffff;
      --text-muted: #94a3b8;
      --accent-color: #2563eb;
    }

    body {
      background-color: var(--bg-primary);
      color: var(--text-main);
    }

    /* Encabezado Elegante Unificado */
    .header-elegant {
      background: rgba(15, 23, 42, 0.95);
      border-bottom: 1px solid rgba(148, 163, 184, 0.1);
      backdrop-filter: blur(10px);
    }

    .nav-item {
      position: relative;
      padding: 0.75rem 1.0rem; /* Ajustado ligeramente para espacio de iconos */
      margin: 0 0.25rem;
      border-radius: 6px;
      transition: all 0.3s ease;
      font-weight: 500;
      cursor: pointer;
      display: flex;
      align-items: center;
    }

    .nav-item:hover, .nav-item.active {
      background: rgba(37, 99, 235, 0.1);
      color: var(--accent-color);
    }

    /* Dropdown controlado por JS */
    .dropdown-elegant {
      background: #1e293b;
      border: 1px solid rgba(148, 163, 184, 0.1);
      border-radius: 8px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
      min-width: 240px;
    }

    .dropdown-item {
      transition: all 0.2s ease;
      border-left: 3px solid transparent;
      color: var(--text-muted);
    }

    .dropdown-item:hover {
      background: rgba(37, 99, 235, 0.05);
      border-left-color: var(--accent-color);
      color: #ffffff;
      padding-left: 1.5rem;
    }

    .action-btn {
      background: var(--accent-color);
      color: white;
      border-radius: 6px;
      padding: 0.6rem 1.2rem;
      transition: all 0.3s ease;
      font-weight: 500;
      box-shadow: 0 4px 6px rgba(37, 99, 235, 0.2);
    }

    .action-btn:hover {
      background: #1d4ed8;
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(37, 99, 235, 0.3);
    }

    /* Utilitarios */
    .text-light-gray { color: var(--text-muted); }
    .text-accent { color: var(--accent-color); }
    .bg-dark-gray { background-color: var(--bg-secondary); }
  </style>
</head>
<body class="font-sans antialiased selection:bg-accent selection:text-white">

<header class="header-elegant sticky top-0 z-50 py-3">
  <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
    
    <div class="flex items-center space-x-3">
      <a href="index.php" class="logo-container flex items-center space-x-3 hover:opacity-90 transition-opacity">
        <div class="w-12 h-12">
          <img src="img/logo.png" alt="BDO" class="w-full h-full object-contain">
        </div>
        <div class="hidden md:block leading-tight">
          <div class="text-white font-bold text-lg tracking-wide">BDO</div>
          <div class="text-accent text-xs font-medium uppercase tracking-wider">Soluciones Efectivas</div>
        </div>
      </a>
    </div>

    <nav class="hidden lg:flex items-center space-x-1">
      <a href="index.php" class="nav-item text-white">
        <i class="fas fa-home mr-2 text-accent"></i> Inicio
      </a>
      
      <div class="relative" id="services-container">
        <button onclick="toggleServicios()" id="btn-servicios" class="nav-item text-white flex items-center focus:outline-none">
          <i class="fas fa-cogs mr-2 text-accent"></i> Servicios
          <i id="arrow-servicios" class="fas fa-chevron-down ml-2 text-xs transition-transform duration-300"></i>
        </button>
        
        <div id="menu-servicios" class="dropdown-elegant absolute hidden mt-2 py-2 right-0 z-50 transform origin-top-right">
          <a href="cobranza.php" class="dropdown-item block px-4 py-3">
            <i class="fas fa-money-bill-wave w-6 text-accent"></i> Cobranza
          </a>
          <a href="ventas.php" class="dropdown-item block px-4 py-3">
            <i class="fas fa-chart-line w-6 text-accent"></i> Ventas
          </a>
          <a href="facturacion.php" class="dropdown-item block px-4 py-3">
            <i class="fas fa-file-invoice-dollar w-6 text-accent"></i> Facturación
          </a>
          <a href="marqueting.php" class="dropdown-item block px-4 py-3">
            <i class="fas fa-bullhorn w-6 text-accent"></i> Marketing
          </a>
          <a href="paqueteria.php" class="dropdown-item block px-4 py-3">
            <i class="fas fa-shipping-fast w-6 text-accent"></i> Paquetería
          </a>
          <a href="atencion-a-clientes.php" class="dropdown-item block px-4 py-3">
            <i class="fas fa-headset w-6 text-accent"></i> Atención a Clientes
          </a>
        </div>
      </div>
      
      <a href="cartera-de-clientes.php" class="nav-item text-white">
        <i class="fas fa-users mr-2 text-accent"></i> Cartera de Clientes
      </a>
      
      <a href="herramientas.php" class="nav-item text-white">
        <i class="fas fa-tools mr-2 text-accent"></i> Herramientas
      </a>
    </nav>

    <div class="hidden md:flex items-center space-x-3">
      <a href="https://wa.me/525637713882" class="action-btn text-sm flex items-center gap-2">
        <i class="fab fa-whatsapp text-lg"></i>
        <span>Contactar</span>
      </a>
    </div>

    <button onclick="toggleMobileMenu()" class="lg:hidden text-white p-2 rounded-lg hover:bg-white/10 transition-colors">
      <i class="fas fa-bars text-xl"></i>
    </button>
  </div>

  <div id="mobile-menu" class="hidden lg:hidden bg-navy-light border-t border-white/10 absolute w-full left-0 top-full shadow-xl z-40">
    <div class="p-4 space-y-2 max-h-[80vh] overflow-y-auto">
      <a href="index.php" class="block px-4 py-3 text-white bg-white/5 rounded-lg flex items-center">
        <i class="fas fa-home mr-3 text-accent"></i> Inicio
      </a>
      
      <div class="px-4 py-2 text-gray-400 font-semibold text-sm uppercase tracking-wider mt-4 flex items-center">
        <i class="fas fa-cogs mr-2 text-accent"></i> Servicios BDO
      </div>
      <div class="space-y-1 pl-4 border-l-2 border-white/5 ml-4">
        <a href="cobranza.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 rounded">Cobranza</a>
        <a href="ventas.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 rounded">Ventas</a>
        <a href="facturacion.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 rounded">Facturación</a>
        <a href="marqueting.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 rounded">Marketing</a>
        <a href="paqueteria.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 rounded">Paquetería</a>
        <a href="atencion-a-clientes.php" class="block px-4 py-2 text-gray-300 hover:text-white hover:bg-white/5 rounded">Atención a Clientes</a>
      </div>
      
      <div class="border-t border-white/10 my-2"></div>
      
      <a href="cartera-de-clientes.php" class="block px-4 py-3 text-gray-300 hover:text-white flex items-center">
        <i class="fas fa-users mr-3 text-accent"></i> Cartera de Clientes
      </a>
      
      <a href="herramientas.php" class="block px-4 py-3 text-gray-300 hover:text-white flex items-center">
        <i class="fas fa-tools mr-3 text-accent"></i> Herramientas
      </a>

      <div class="pt-4 mt-4 border-t border-white/10">
        <a href="https://wa.me/525637713882" class="flex items-center justify-center px-4 py-3 bg-accent text-white rounded-lg font-bold">
          <i class="fab fa-whatsapp mr-2"></i> Contactar por WhatsApp
        </a>
      </div>
    </div>
  </div>
</header>

<script>
  // Lógica para el Menú Desplegable con Click (Desktop)
  function toggleServicios() {
    const menu = document.getElementById('menu-servicios');
    const arrow = document.getElementById('arrow-servicios');
    const btn = document.getElementById('btn-servicios');
    
    // Alternar visibilidad
    menu.classList.toggle('hidden');
    
    // Rotar flecha y activar estado visual del botón
    if (menu.classList.contains('hidden')) {
      arrow.style.transform = 'rotate(0deg)';
      btn.classList.remove('text-accent'); 
      // Si quieres mantener el fondo activo también, podrías quitar una clase bg aquí
    } else {
      arrow.style.transform = 'rotate(180deg)';
      btn.classList.add('text-accent');
    }
  }

  // Lógica para Menú Móvil
  function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  }

  // Cerrar menús al hacer clic fuera
  document.addEventListener('click', function(event) {
    const container = document.getElementById('services-container');
    const menu = document.getElementById('menu-servicios');
    const arrow = document.getElementById('arrow-servicios');
    const btn = document.getElementById('btn-servicios');
    
    // Si el clic NO fue dentro del contenedor del menú
    if (container && !container.contains(event.target)) {
      if (!menu.classList.contains('hidden')) {
        menu.classList.add('hidden');
        arrow.style.transform = 'rotate(0deg)';
        btn.classList.remove('text-accent');
      }
    }
  });
</script>