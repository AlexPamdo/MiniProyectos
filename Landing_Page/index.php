<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <!-- Header --------------------------->

  <header class="header">
    <div class="container">
      <nav class="navbar-custom navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BICINATION</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="">
        <div class="row">
          <div class="col m-5">
            <h1 class="text-white fw-bold">INICIA TU AVENTURA</h1>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima
              possimus, blanditiis error reiciendis ullam, ratione nihil rerum
              commodi, animi consequuntur eum recusandae excepturi adipisci
              magnam unde vitae. Ex, illum voluptatibus!
            </p>
            <buttom
              data-bs-toggle="modal" data-bs-target="#register"
              class="btn btn-outline-light link-offset-2 link-underline link-underline-opacity-0">Reserva tu Tour</buttom>

            <?php require_once("vistas/registrar.php") ?>

            ?>

          </div>
          <div class="col"></div>
        </div>
      </div>
    </div>
  </header>

  <!-- main ------------------------------------------>

  <main class="container pt-5 pb-5">
    <!-- Rutas --------------------------------------->
    <section class="row">
      <h1 class="fw-bold">RUTAS POPULARES</h1>

      <!-- card 1 -->
      <div class="col-sm-12  col-lg">
        <div class="custom-card">
          <div class="image-wrapper">
            <img src="assets/img/rutas/desierto 2.jpg" class="card-img-top card-image-alternate" alt="Imagen 1" />
            <img src="assets/img/rutas/R.jpg" class="card-img-top card-image-overlay" alt="Imagen 2" />
          </div>
          <div class="card-body m-3">
            <h5 class="card-title">Ruta Decertica</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>

          <span class="list-group-item fw-bold">Baja Dificultad</span>

          <a
            href=""
            class="btn btn-outline-dark link-offset-2 link-underline link-underline-opacity-0 m-3">Mas informacion</a>

        </div>
      </div>
      <!-- card 1 -->
      <div class="col-sm-12  col-lg">
        <div class="custom-card">
          <div class="image-wrapper">
            <img src="assets/img/rutas/bosque 2.jpg" class="card-img-top card-image-alternate" alt="Imagen 1" />
            <img src="assets/img/rutas/R (1).jpg" class="card-img-top card-image-overlay" alt="Imagen 2" />
          </div>
          <div class="card-body m-3">
            <h5 class="card-title">Ruta del Bosque</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
          <span class="list-group-item fw-bold">Media Dificultad</span>

          <a
            href=""
            class="btn btn-outline-dark link-offset-2 link-underline link-underline-opacity-0 m-3">Mas informacion</a>
        </div>
      </div>
      <!-- card 1 -->
      <div class="col-sm-12  col-lg">
        <div class="custom-card">
          <div class="image-wrapper">
            <img src="assets/img/rutas/montaña 2.jpg" class="card-img-top card-image-alternate" alt="Imagen 1" />
            <img src="assets/img/rutas/R (2).jpg" class="card-img-top card-image-overlay" alt="Imagen 2" />
          </div>
          <div class="card-body m-3">
            <h5 class="card-title">Ruta de la Montaña</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
          <span class="list-group-item fw-bold">Alta Dificultad</span>

          <a
            href=""
            class="btn btn-outline-dark link-offset-2 link-underline link-underline-opacity-0 m-3">Mas informacion</a>
        </div>
      </div>
    </section>


  </main>

  <!-- Opiniones de clientes ------------------------------->
  <section class="comentary-container pt-5 pb-5">

    <div class="container">

      <h1 class="fw-bold">OPINIONES DESTACADAS</h1>
      <h3>de nuestros clientes</h3>


      <div class="container-fluid overflow-auto"> <!-- Contenedor que permite scroll horizontal -->
        <div class="d-flex flex-nowrap"> <!-- Clase para mostrar las tarjetas en fila -->

          <div class="card-comentary col" style="width: 18rem;">
            <div class="card-body card-body-comentary">
              <div class="display-flex row">
                <img src="assets/img/Profile/profile1.jpg" alt="profile" class="img-profile col">

                <div class="col">
                  <h5 class="fw-bold text-profile">Artur Morgan</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">tu_negrito84</h6>
                </div>
              </div>
              <p class="card-text">Vrga mrko, la pase muy depinga en ese viaje</p>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>

              </div>
            </div>
          </div>
          <div class="card-comentary col" style="width: 18rem;">
            <div class="card-body card-body-comentary">
              <div class="display-flex row">
                <img src="assets/img/Profile/profile1.jpg" alt="profile" class="img-profile col">

                <div class="col">
                  <h5 class="fw-bold text-profile">Artur Morgan</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">tu_negrito84</h6>
                </div>
              </div>
              <p class="card-text">Vrga mrko, la pase muy depinga en ese viaje</p>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>

              </div>
            </div>
          </div>
          <div class="card-comentary col" style="width: 18rem;">
            <div class="card-body card-body-comentary">
              <div class="display-flex row">
                <img src="assets/img/Profile/profile1.jpg" alt="profile" class="img-profile col">

                <div class="col">
                  <h5 class="fw-bold text-profile">Artur Morgan</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">tu_negrito84</h6>
                </div>
              </div>
              <p class="card-text">Vrga mrko, la pase muy depinga en ese viaje</p>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>

              </div>
            </div>
          </div>
          <div class="card-comentary col" style="width: 18rem;">
            <div class="card-body card-body-comentary">
              <div class="display-flex row">
                <img src="assets/img/Profile/profile1.jpg" alt="profile" class="img-profile col">

                <div class="col">
                  <h5 class="fw-bold text-profile">Artur Morgan</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">tu_negrito84</h6>
                </div>
              </div>
              <p class="card-text">Vrga mrko, la pase muy depinga en ese viaje</p>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(249, 181, 0, 1)">
                  <path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path>
                </svg>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>