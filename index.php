<?php
// Este es el inicio de un archivo PHP que podría realizar algunas operaciones antes de mostrar el contenido
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto con PHP, Bootstrap y React</title>
  
  <!-- Cargar Bootstrap desde un CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Cargar React y ReactDOM desde un CDN -->
  <script src="https://cdn.jsdelivr.net/npm/react@17/umd/react.production.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/react-dom@17/umd/react-dom.production.min.js"></script>
  
  <!-- Cargar Babel para usar JSX en el navegador -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">¡Bienvenido a mi Proyecto!</h1>
    <p class="text-center">Este proyecto usa PHP, Bootstrap y React.js en un solo archivo.</p>
  </div>

  <!-- Aquí React renderizará su contenido -->
  <div id="root"></div>

  <!-- Script de React escrito con JSX -->
  <script type="text/babel">
    // Componente React
    function App() {
      return (
        <div className="text-center mt-4">
          <h2>¡Hola, React!</h2>
          <p>Esta es una aplicación que usa React para la parte frontend y PHP para el backend.</p>
        </div>
      );
    }

    // Renderizar el componente en el contenedor con id 'root'
    ReactDOM.render(<App />, document.getElementById('root'));
  </script>

  <!-- Cargar el archivo JS con Bootstrap (opcional, por si necesitas funcionalidades de Bootstrap como modales o carouseles) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
