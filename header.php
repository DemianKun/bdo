<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BDO - Soluciones Efectivas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="img/icon.png" type="image/png">
  <style>
    :root {
      --black: #000000;
      --dark-gray: #1a1a1a;
      --gray: #333333;
      --light-gray: #666666;
      --white: #ffffff;
      --accent: #2563eb;
    }

    .bg-black { background-color: var(--black); }
    .bg-dark-gray { background-color: var(--dark-gray); }
    .bg-gray { background-color: var(--gray); }
    .text-white { color: var(--white); }
    .text-light-gray { color: var(--light-gray); }
    .text-accent { color: var(--accent); }
    .border-gray { border-color: var(--gray); }

    /* Encabezado Elegante */
    .header-elegant {
      background: linear-gradient(135deg, var(--black) 0%, var(--dark-gray) 100%);
      border-bottom: 1px solid var(--gray);
      backdrop-filter: blur(10px);
    }

    .logo-container {
      transition: all 0.3s ease;
      border-radius: 8px;
      padding: 0.5rem;
    }

    .logo-container:hover {
      background: rgba(37, 99, 235, 0.05);
      transform: translateY(-1px);
    }

    .nav-item {
      position: relative;
      padding: 0.75rem 1.25rem;
      margin: 0 0.25rem;
      border-radius: 6px;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .nav-item::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 2px;
      background: var(--accent);
      transition: width 0.3s ease;
    }

    .nav-item:hover::before {
      width: 70%;
    }

    .nav-item:hover {
      background: rgba(37, 99, 235, 0.05);
    }

    .dropdown-elegant {
      background: rgba(26, 26, 26, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid var(--gray);
      border-radius: 8px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .dropdown-item {
      transition: all 0.3s ease;
      border-left: 3px solid transparent;
    }

    .dropdown-item:hover {
      background: rgba(37, 99, 235, 0.05);
      border-left-color: var(--accent);
      transform: translateX(5px);
    }

    .action-btn {
      background: rgba(37, 99, 235, 0.1);
      border: 1px solid rgba(37, 99, 235, 0.3);
      border-radius: 6px;
      padding: 0.6rem 1.2rem;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .action-btn:hover {
      background: rgba(37, 99, 235, 0.15);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(37, 99, 235, 0.1);
    }

    .mobile-menu-elegant {
      background: rgba(26, 26, 26, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid var(--gray);
    }

    /* Footer Elegante */
    .footer-elegant {
      background: linear-gradient(135deg, var(--black) 0%, var(--dark-gray) 100%);
      border-top: 1px solid var(--gray);
    }

    .footer-link {
      transition: all 0.3s ease;
      position: relative;
    }

    .footer-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 1px;
      bottom: -2px;
      left: 0;
      background-color: var(--accent);
      transition: width 0.3s ease;
    }

    .footer-link:hover::after {
      width: 100%;
    }

    .social-btn {
      background: var(--gray);
      transition: all 0.3s ease;
    }

    .social-btn:hover {
      background: var(--accent);
      transform: translateY(-2px);
    }
  </style>
</head>
<body class="bg-black text-white">

<!-- Encabezado Elegante y Formal -->
<header class="header-elegant sticky top-0 z-50 py-3">
  <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
    
    <!-- Logo -->
    <div class="flex items-center space-x-3">
      <a href="index.php" class="logo-container flex items-center space-x-3">
        <div class="w-12 h-12">
          <img src="img/logo.png" alt="BDO" class="w-full h-full object-contain">
        </div>
        <div class="hidden md:block">
          <div class="text-white font-bold text-lg">BDO</div>
          <div class="text-accent text-xs">Soluciones Efectivas</div>
        </div>
      </a>
    </div>

    <!-- Navegación Principal -->
    <nav class="hidden md:flex items-center space-x-1">
      <a href="index.php" class="nav-item text-white">
        <i class="fas fa-home mr-2 text-accent"></i>
        Inicio
      </a>
      
      <!-- Servicios -->
      <div class="relative group">
        <button class="nav-item text-white flex items-center">
          <i class="fas fa-cogs mr-2 text-accent"></i>
          Servicios
          <i class="fas fa-chevron-down ml-2 text-xs"></i>
        </button>
        <div class="dropdown-elegant absolute hidden group-hover:block mt-2 py-2 w-56 z-50">
          <a href="cobranza.php" class="dropdown-item block px-4 py-3 text-light-gray hover:text-white">
            <i class="fas fa-money-bill-wave mr-3 text-accent"></i>
            Cobranza
          </a>
          <a href="ventas.php" class="dropdown-item block px-4 py-3 text-light-gray hover:text-white">
            <i class="fas fa-chart-line mr-3 text-accent"></i>
            Ventas
          </a>
          <a href="facturacion.php" class="dropdown-item block px-4 py-3 text-light-gray hover:text-white">
            <i class="fas fa-file-invoice-dollar mr-3 text-accent"></i>
            Facturación
          </a>
          <a href="marqueting.php" class="dropdown-item block px-4 py-3 text-light-gray hover:text-white">
            <i class="fas fa-bullhorn mr-3 text-accent"></i>
            Marketing
          </a>
          <a href="paqueteria.php" class="dropdown-item block px-4 py-3 text-light-gray hover:text-white">
            <i class="fas fa-shipping-fast mr-3 text-accent"></i>
            Paquetería
          </a>
          <a href="atencion-a-clientes.php" class="dropdown-item block px-4 py-3 text-light-gray hover:text-white">
            <i class="fas fa-headset mr-3 text-accent"></i>
            Atención a Clientes
          </a>
        </div>
      </div>
      
      <a href="cartera-de-clientes.php" class="nav-item text-white">
        <i class="fas fa-users mr-2 text-accent"></i>
        Cartera de Clientes
      </a>
      
      <a href="herramientas.php" class="nav-item text-white">
        <i class="fas fa-tools mr-2 text-accent"></i>
        Herramientas
      </a>
    </nav>

    <!-- Acciones -->
    <div class="hidden md:flex items-center space-x-3">
      <a href="https://wa.me/525637713882" class="action-btn text-white text-sm">
        <i class="fab fa-whatsapp mr-2"></i>
        Contactar
      </a>
    </div>

    <!-- Menú Mobile -->
    <button id="menu-toggle" class="md:hidden text-white p-2 rounded-lg bg-gray border border-gray">
      <i class="fas fa-bars"></i>
    </button>
  </div>

  <!-- Menú Móvil -->
  <div id="mobile-menu" class="mobile-menu-elegant md:hidden hidden mt-3 mx-4 rounded-lg">
    <div class="p-4 space-y-2">
      <a href="index.html" class="flex items-center px-4 py-3 text-white bg-dark-gray rounded-lg">
        <i class="fas fa-home mr-3 text-accent"></i>
        Inicio
      </a>
      
      <div class="px-4 py-2 text-light-gray font-semibold">Servicios</div>
      <div class="pl-6 space-y-1">
        <a href="cobranza.php" class="flex items-center px-4 py-2 text-light-gray hover:text-white">
          <i class="fas fa-money-bill-wave mr-3 text-accent text-sm"></i>
          Cobranza
        </a>
        <a href="ventas.php" class="flex items-center px-4 py-2 text-light-gray hover:text-white">
          <i class="fas fa-chart-line mr-3 text-accent text-sm"></i>
          Ventas
        </a>
        <a href="facturacion.php" class="flex items-center px-4 py-2 text-light-gray hover:text-white">
          <i class="fas fa-file-invoice-dollar mr-3 text-accent text-sm"></i>
          Facturación
        </a>
        <a href="marqueting.php" class="flex items-center px-4 py-2 text-light-gray hover:text-white">
          <i class="fas fa-bullhorn mr-3 text-accent text-sm"></i>
          Marketing
        </a>
        <a href="paqueteria.php" class="flex items-center px-4 py-2 text-light-gray hover:text-white">
          <i class="fas fa-shipping-fast mr-3 text-accent text-sm"></i>
          Paquetería
        </a>
        <a href="atencion-a-clientes.php" class="flex items-center px-4 py-2 text-light-gray hover:text-white">
          <i class="fas fa-headset mr-3 text-accent text-sm"></i>
          Atención a Clientes
        </a>
      </div>
      
      <a href="cartera-de-clientes.php" class="flex items-center px-4 py-3 text-light-gray hover:text-white">
        <i class="fas fa-users mr-3 text-accent"></i>
        Cartera de Clientes
      </a>
      
      <a href="herramientas.php" class="flex items-center px-4 py-3 text-light-gray hover:text-white">
        <i class="fas fa-tools mr-3 text-accent"></i>
        Herramientas
      </a>

      <div class="pt-4 border-t border-gray">
        <a href="https://wa.me/525637713882" class="flex items-center justify-center px-4 py-3 bg-accent text-white rounded-lg">
          <i class="fab fa-whatsapp mr-2"></i>
          Contactar por WhatsApp
        </a>
      </div>
    </div>
  </div>
</header>