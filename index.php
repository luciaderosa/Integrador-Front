<?php include 'includes/header.php' ?>

<body>
  <!-- Background image and mask-->
  <header class="bg-img" style="
        background-image: url(./img/ba1.jpg);
        height: 100vh;
        background-size: cover;
      ">
    <div class="mask d-flex flex-column justify-content-between text-white"
      style="background-color: rgba(0, 0, 0, 0.65); height: 100vh">
      <!-- Nabbar top menu-->
      <nav class="navbar navbar-expand-lg navbar-dark menu-top-bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./img/codoacodo.png" alt="" height="58" class="d-inline-block align-middle" />
            Conf Bs As
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-4 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">La conferencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#oradores">Los oradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#honolulu">El lugar y la fecha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#convierte">Conviértete en orador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-success" href="#venta">Comprar tickets</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Transparent card -->
      <div class="card text-end bg-transparent align-self-center align-self-sm-end me-5 mb-5 w-50">
        <div class="card-body">
          <h3 class="card-title">Conf Bs As</h3>
          <p class="card-text">
            Bs As llega por primera vez a Argentina. Un evento para compartir
            con nuestra comunidad el conocimiento y experiencia de los
            expertos que están creando el futuro de Internet. Ven a conocer a
            miembros del evento, a otros estudiantes de Codo a Codo y los
            oradores de primer nivel que tenemos para ti. ¡Te esperamos!
          </p>
          <a href="#convierte" class="btn btn-outline-light mb-2 me-2">Quiero ser orador</a>
          <a href="#venta" class="btn btn-success mb-2 me-2">Comprar tickets</a>
        </div>
      </div>
    </div>
    <a onclick="topFunction()" id="vuelve-arriba" class="btn btn-warning btn-sm" href="#" role="button"><i
        class="fa-solid fa-angle-up"></i></a>
  </header>

  <main id="oradores" class="container">
    <h5 class="text-center my-3">CONOCE A LOS</h5>
    <h1 class="text-center my-3">ORADORES</h1>
    <!-- Speakers cards -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="./img/steve.jpg" class="card-img-top" alt="Steve Jobs" />
          <div class="card-body">
            <span class="badge bg-warning text-dark">JavaScript</span>
            <span class="badge bg-primary">React</span>
            <h5 class="card-title">Steve Jobs</h5>
            <p class="card-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem
              quaerat ducimus pariatur vitae, ipsam saepe quod eum iusto nam
              minima quam doloremque odio, velit dolores provident! Porro
              earum amet dolor!
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="./img/bill.jpg" class="card-img-top" alt="Bill Gates" />
          <div class="card-body">
            <span class="badge bg-warning text-dark">JavaScript</span>
            <span class="badge bg-primary">React</span>
            <h5 class="card-title">Bill Gates</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
              dolore magnam laborum aut molestiae eum sed earum velit porro,
              amet incidunt illum consequuntur quisquam eos accusamus quas
              quae animi ullam.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="./img/ada.jpeg" class="card-img-top" alt="Ada Lovelace" />
          <div class="card-body">
            <span class="badge bg-secondary">Negocios</span>
            <span class="badge bg-danger">Startups</span>
            <h5 class="card-title">Ada Lovelace</h5>
            <p class="card-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Dolorum totam facere cum praesentium vel repellendus sed ex
              similique temporibus. Voluptatibus quibusdam quae dignissimos
              doloremque impedit odio nisi exercitationem!
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <section id="honolulu">
    <!-- Horizontal card Honolulu -->
    <div class="card my-3 bg-secondary">
      <div class="row g-0">
        <div class="col-md-6 border border-white">
          <img src="./img/honolulu.jpg" class="img-fluid w-100" alt="Honolulu" />
        </div>
        <div class="col-md-6 border border-white">
          <div class="card-body text-white mb-3">
            <h5 class="card-title">Bs As - Octubre</h5>
            <p class="card-text">
              Honolulu es la más sureña de entre las principales ciudades
              estadounidenses. Aunque el nombre de Honolulu se refiere al área
              urbana en la costa sureste de la isla de Oahu, la ciudad y el
              condado de Honolulu han formado una ciudad-condado consolidada
              que cubre toda la ciudad (aproximadamente 600 km2 de
              superficie).
            </p>
            <a href="#" class="btn btn-outline-light my-2 me-2">Conocé más</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="convierte" class="container w-50">
    <h5 class="text-center my-3">CONVIÉRTETE EN UN ORADOR</h5>
    <h1 class="text-center my-3">ORADOR</h1>
    <p class="text-center my-3">
      Anótate como orador para dar una
      <abbr title="Charla motivadora de 5 minutos de duración">charla ignite</abbr>.¡Cuéntanos de qué quieres hablar!
    </p>
    <!-- Become a speaker form -->
    <form action="guardar2.php" method="POST">
      <div class="row mb-md-3">
        <div class="row mb-3 mx-auto col-md me-md-3">
          <input type="text" class="form-control" name="nombre" placeholder="Nombre del orador" />
        </div>
        <div class="row mb-3 mx-auto col-md">
          <input type="text" class="form-control" name="apellido" placeholder="Apellido del Orador" />
        </div>
      </div>
      <div class="mb-1">
        <textarea class="form-control" placeholder="¿Sobre qué quieres hablar?" rows="3" name="contenido"></textarea>
      </div>
      <div class="form-text text-align-start mb-3">
        Recuerda incluir un título para tu charla.
      </div>
      <div class="d-grid mb-3">
        <!-- <button type="submit" class="btn btn-success">Enviar</button> //#96c93e -->
        <button id="botonEnviar" type="submit" value="guardar2" class="btn btn-lemon-green text-white">
          Enviar
        </button>
        <div class="mt-2">
          <p id="mensajeNombre"></p>          
        </div>
      </div>
    </form>
  </section>
  <!-- 2da parte del TPO Javascript -->
  <section id="venta" class="container my-3">
    <div class="d-flex justify-content-center">
      <div class="card border-primary m-2 rounded-0 text-center" style="max-width: 18rem">
        <div class="card-body text-dark">
          <h5 class="card-title">Estudiante</h5>
          <p class="fs-6 fw-light">tienen un descuento</p>
          <p class="fs-4 fw-bolder">80%</p>
          <p class="fs-6 fw-lighter">*presentar documentación</p>
        </div>
      </div>
      <div class="card border-success m-2 rounded-0 text-center" style="max-width: 18rem">
        <div class="card-body text-dark">
          <h5 class="card-title">Trainee</h5>
          <p class="fs-6 fw-light">tienen un descuento</p>
          <p class="fs-4 fw-bolder">50%</p>
          <p class="fs-6 fw-lighter">*presentar documentación</p>
        </div>
      </div>
      <div class="card border-warning m-2 rounded-0 text-center" style="max-width: 18rem">
        <div class="card-body text-dark">
          <h5 class="card-title">Junior</h5>
          <p class="fs-6 fw-light">tienen un descuento</p>
          <p class="fs-4 fw-bolder">15%</p>
          <p class="fs-6 fw-lighter">*presentar documentación</p>
        </div>
      </div>
    </div>

    <div class="container w-50">
      <div class="text-center">
        <h5 class="text-center my-3">VENTA</h5>
        <h1 class="text-center my-3">VALOR DEL TICKET $200</h1>
      </div>
      <form action="">
        <div class="row mb-md-2">
          <div class="row mb-3 mx-auto col-md me-md-3">
            <input type="text" class="form-control" id="ventaNombre"  placeholder="Nombre" required />
          </div>
          <div class="row mb-3 mx-auto col-md">
            <input type="text" class="form-control" id="ventaApellido" placeholder="Apellido" required />
          </div>
        </div>
        <div class="row mb-md-3 mx-auto">
          <input type="email" class="form-control" id="ventaEmail" placeholder="Correo" required />
        </div>
        <div class="row mb-md-3">
          <div class="row mb-2 mx-auto col-md me-md-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" min="1" class="form-control" id="ventaCantidad" value="1" />
          </div>
          <div class="row mb-3 mx-auto col-md">
            <label for="categoria" class="form-label">Categoría</label>
            <select class="form-select" id="ventaCategoria">
              <option value="0" selected>Sin descuento</option>
              <option value="1">Estudiante</option>
              <option value="2">Trainee</option>
              <option value="3">Junior</option>
            </select>
          </div>
        </div>
        <div id="ventaMensajes" class="alert alert-primary" role="alert">
          Total a Pagar:
        </div>
        <div class="d-flex gap-2 my-4">
          <button id="ventaBorrar" type="reset" class="btn btn-lemon-green text-white flex-fill">
            Borrar
          </button>
          <button id="ventaEnviar" type="button" class="btn btn-lemon-green text-white flex-fill">
            Resumen
          </button>
        </div>
      </form>
    </div>
  </section>
  <footer class="menu-footer-bg">
    <div class="container w-75">
      <!-- En la maqueta este menú de links está centrado y tiene dos items que se parten en dos
            renglones cuando se va achicando el vp-->
      <nav class="nav justify-content-center nav-pills flex-column flex-lg-row flex-nowrap">
        <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Preguntas frecuentes</a>
        <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Contáctanos</a>
        <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Prensa</a>
        <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Conferencias</a>
        <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Términos y condiciones</a>
        <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Privacidad</a>
        <a class="flex-lg-fill text-sm-center nav-link text-white" href="oradores/vista.php" target="_blank">Uso Interno</a>
      </nav>
    </div>
  </footer>
<?php
  include 'includes/footer.php';
  ?>