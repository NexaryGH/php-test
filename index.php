<?php
// Configuración inicial
session_start();
// Variables para mensajes del sistema
$mensajesSistema = [];

// Función para validar datos de entrada
function validarDatos($datos) {
    return htmlspecialchars(trim($datos), ENT_QUOTES, 'UTF-8');
}

// Procesar formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contacto'])) {
    $nombre = validarDatos($_POST['nombre'] ?? '');
    $email = validarDatos($_POST['email'] ?? '');
    $mensaje = validarDatos($_POST['mensaje'] ?? '');
    
    // Aquí iría la lógica para procesar el formulario (enviar email, guardar en BD, etc.)
    // Por ejemplo, un mensaje de éxito:
    $mensajesSistema[] = [
        'tipo' => 'success',
        'texto' => 'Tu mensaje ha sido enviado correctamente. ¡Gracias por contactarnos!'
    ];
    
    // Pasar los mensajes a JavaScript
    $mensajesJSON = json_encode($mensajesSistema);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Proyecto mejorado con PHP, Bootstrap y React">
  <title>Proyecto Moderno - PHP, Bootstrap y React</title>
  
  <!-- Favicon -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">
  
  <!-- Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome para iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  <!-- Estilos personalizados -->
  <style>
    :root {
      --primary-color: #3b82f6;
      --secondary-color: #6366f1;
      --dark-color: #1e3a8a;
      --light-color: #f0f9ff;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      background-color: #f8fafc;
    }
    
    .navbar {
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .hero-section {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      color: white;
      padding: 4rem 0;
      border-radius: 0 0 1rem 1rem;
    }
    
    .card {
      transition: transform 0.3s, box-shadow 0.3s;
      border: none;
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .feature-icon {
      width: 4rem;
      height: 4rem;
      border-radius: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1rem;
      background-color: var(--light-color);
      color: var(--primary-color);
    }
    
    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
      background-color: var(--dark-color);
      border-color: var(--dark-color);
    }
    
    footer {
      background-color: var(--dark-color);
      color: white;
    }
    
    .loading-spinner {
      width: 3rem;
      height: 3rem;
    }
    
    /* Animaciones */
    .fade-in {
      animation: fadeIn 0.5s ease-in;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <i class="fas fa-rocket text-primary me-2"></i>
        Mi Proyecto
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#funcionalidades">Funcionalidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#formulario">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sección Hero -->
  <section id="inicio" class="hero-section">
    <div class="container text-center">
      <h1 class="display-4 fw-bold mb-4">Proyecto Moderno</h1>
      <p class="lead mb-4">Una aplicación potente que integra PHP, Bootstrap 5 y React 18 para crear una experiencia de usuario excepcional.</p>
      <button class="btn btn-light btn-lg px-4 me-2">
        <i class="fas fa-info-circle me-2"></i>Más información
      </button>
      <button class="btn btn-outline-light btn-lg px-4">
        <i class="fas fa-code me-2"></i>Ver código
      </button>
    </div>
  </section>

  <!-- Contenedor para React -->
  <div id="root"></div>

  <!-- Contenido tradicional (para demostrar la integración) -->
  <section id="funcionalidades" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Características principales</h2>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 p-4">
            <div class="feature-icon">
              <i class="fas fa-bolt fa-2x"></i>
            </div>
            <h3 class="h4">Rendimiento optimizado</h3>
            <p>Utilizamos las últimas tecnologías para garantizar que la aplicación funcione de manera rápida y eficiente.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 p-4">
            <div class="feature-icon">
              <i class="fas fa-mobile-alt fa-2x"></i>
            </div>
            <h3 class="h4">Diseño responsive</h3>
            <p>Interfaz adaptable que funciona perfectamente en dispositivos móviles, tablets y ordenadores.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 p-4">
            <div class="feature-icon">
              <i class="fas fa-shield-alt fa-2x"></i>
            </div>
            <h3 class="h4">Seguridad mejorada</h3>
            <p>Implementación de mejores prácticas de seguridad para proteger los datos de los usuarios.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de formulario en PHP -->
  <section id="formulario" class="py-5 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card shadow-sm">
            <div class="card-body p-5">
              <h2 class="text-center mb-4">Contacta con nosotros</h2>
              
              <?php if (!empty($mensajesSistema)): ?>
                <?php foreach ($mensajesSistema as $msg): ?>
                  <div class="alert alert-<?php echo $msg['tipo']; ?> alert-dismissible fade show">
                    <?php echo $msg['texto']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
              
              <form method="post" action="#formulario">
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="mensaje" class="form-label">Mensaje</label>
                  <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary py-2" name="contacto">
                    <i class="fas fa-paper-plane me-2"></i>Enviar mensaje
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="mb-md-0">&copy; 2025 Mi Proyecto. Todos los derechos reservados.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <a href="#" class="text-white me-3"><i class="fab fa-github fa-lg"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Cargar React 18 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/18.2.0/umd/react-dom.production.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/7.23.1/babel.min.js"></script>

  <!-- Bootstrap 5.3 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script de React con JSX -->
  <script type="text/babel">
    // Pasar datos de PHP a React
    const mensajesSistema = <?php echo !empty($mensajesJSON) ? $mensajesJSON : '[]'; ?>;

    // Hook personalizado para contador
    function useCounter(initialValue = 0) {
      const [count, setCount] = React.useState(initialValue);
      
      const increment = () => setCount(c => c + 1);
      const decrement = () => setCount(c => c - 1);
      const reset = () => setCount(initialValue);
      
      return { count, increment, decrement, reset };
    }

    // Componente Contador
    function Counter() {
      const { count, increment, decrement, reset } = useCounter(0);
      
      return (
        <div className="card my-4 p-4 text-center">
          <h3 className="mb-3">Contador React</h3>
          <p className="fs-1 fw-bold text-primary">{count}</p>
          <div className="d-flex justify-content-center gap-2">
            <button className="btn btn-primary" onClick={increment}>
              <i className="fas fa-plus me-2"></i>Incrementar
            </button>
            <button className="btn btn-secondary" onClick={decrement}>
              <i className="fas fa-minus me-2"></i>Decrementar
            </button>
            <button className="btn btn-outline-secondary" onClick={reset}>
              <i className="fas fa-redo me-2"></i>Reiniciar
            </button>
          </div>
        </div>
      );
    }

    // Componente Tarjeta de proyecto
    function ProjectCard({ title, description, image, tags }) {
      return (
        <div className="card h-100">
          <img src={image} className="card-img-top" alt={title} />
          <div className="card-body">
            <h5 className="card-title">{title}</h5>
            <p className="card-text">{description}</p>
            <div className="d-flex flex-wrap gap-1 mb-3">
              {tags.map((tag, index) => (
                <span key={index} className="badge bg-light text-primary">{tag}</span>
              ))}
            </div>
            <button className="btn btn-sm btn-outline-primary">Ver detalles</button>
          </div>
        </div>
      );
    }

    // Componente principal
    function App() {
      const [loading, setLoading] = React.useState(true);
      const [projects, setProjects] = React.useState([]);
      
      React.useEffect(() => {
        // Simular carga de datos
        setTimeout(() => {
          setProjects([
            {
              id: 1,
              title: "Sistema de Gestión",
              description: "Plataforma para administrar recursos y usuarios con interfaz intuitiva.",
              image: "https://via.placeholder.com/300x200/3b82f6/ffffff?text=Proyecto+1",
              tags: ["PHP", "MySQL", "React"]
            },
            {
              id: 2,
              title: "Tienda Online",
              description: "E-commerce moderno con carrito de compras y pasarela de pagos.",
              image: "https://via.placeholder.com/300x200/6366f1/ffffff?text=Proyecto+2",
              tags: ["Bootstrap", "API", "Firebase"]
            },
            {
              id: 3,
              title: "Dashboard Analytics",
              description: "Panel de control para visualizar métricas y estadísticas en tiempo real.",
              image: "https://via.placeholder.com/300x200/1e3a8a/ffffff?text=Proyecto+3",
              tags: ["React", "Chart.js", "Rest API"]
            }
          ]);
          setLoading(false);
        }, 1000);
      }, []);

      // Mostrar mensajes del sistema si existen
      const showMessages = () => {
        if (mensajesSistema.length > 0) {
          return (
            <div className="alert alert-success alert-dismissible fade show">
              {mensajesSistema[0].texto}
              <button type="button" className="btn-close" data-bs-dismiss="alert"></button>
            </div>
          );
        }
        return null;
      };

      return (
        <div className="container my-5">
          {showMessages()}
          
          <h2 className="text-center mb-4">Componentes React</h2>
          
          <Counter />
          
          <h2 className="text-center mb-4 mt-5">Proyectos destacados</h2>
          
          {loading ? (
            <div className="text-center py-5">
              <div className="spinner-border text-primary loading-spinner" role="status">
                <span className="visually-hidden">Cargando...</span>
              </div>
              <p className="mt-3">Cargando proyectos...</p>
            </div>
          ) : (
            <div className="row g-4 fade-in">
              {projects.map(project => (
                <div key={project.id} className="col-md-4">
                  <ProjectCard {...project} />
                </div>
              ))}
            </div>
          )}
        </div>
      );
    }

    // Crear root con React 18
    const container = document.getElementById('root');
    const root = ReactDOM.createRoot(container);
    root.render(<App />);
  </script>
</body>
</html>
