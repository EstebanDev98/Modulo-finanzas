<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bienvenido a Bancapp</title>
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
        rel="stylesheet">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- AOS CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <style>
            /* Asegura que el contenido colapsable esté alineado y justo debajo del botón */
            .collapse-content {
                position: absolute;
                top: 56px; /* Ajusta según la altura del navbar */
                right: 10px;
                z-index: 1000;
                min-width: 200px;
            }

            .bg-image img {
            /*width: 100px;*/
            height: 500px;
            object-fit: cover; /* Mantiene la calidad de la imagen */
            }

            .mask {
            position: absolute; /* Para posicionar la máscara sobre la imagen */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            }

            .img{
                filter:drop-shadow(
                    0 0 10px rgba(0, 0, 0, .8)
                )
            }

        </style>

</head>
<body style="background-color: #ffffff">
        <nav class="navbar navbar" style="background-color: #ffffff; height:60px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo_bancapp_ultimo.png') }}" class="me-2 ms-2" height="48" alt="MDB Logo" loading="lazy"/>
                    <small>Bancapp</small>
                </a>

                <div class="d-flex ms-auto align-items-center justify-content-center"> <!-- Alinea el botón y el menú en la misma línea -->
                    <ul class="navbar-nav d-flex flex-row me-1"> <!-- Cambia aquí para que estén en la misma línea -->
                        <li class="nav-item me-2">
                            <div class="d-flex align-items-center">
                                <span><a class="nav-link" href="#"><i class="fas fa-user me-2"></i>Persona</a></span>
                            </div>
                        </li>
                        <li class="nav-item me-3">
                            <div class="d-flex align-items-center">
                                <span><a class="nav-link" href="#"><i class="fas fa-chart-line me-2"></i>Admin</a></span>
                            </div>
                        </li>
                        <li class="nav-item me-3">
                            <div class="d-flex align-items-center">
                                <span><a class="nav-link" href="#"> <i class="fas fa-info-circle me-2"></i>Sobre Nosotros</a></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <button class="btn btn-dark ms-auto" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseActions" aria-expanded="false" aria-controls="collapseActions">
                    <i class="fas fa-bars"></i> <!-- Ícono de menú -->
                </button>
            </div>
        </nav>
                <!-- Menú desplegable -->
        <div style="border-radius: 8px; overflow: hidden;"> 
            <div class="collapse collapse-content" id="collapseActions" style="border-radius: 8px; background-color: #080808;">
                <ul class="list-group">
                    <li class="list-group-item" style="background-color: transparent; border: none;">
                        <a href="{{ route('login.ruta') }} " style="color: rgb(252, 255, 255); text-decoration: none;">Iniciar sesión</a>
                    </li>
                    <li class="list-group-item" style="background-color: transparent; border: none;">
                        <a href="{{route('register')}}" style="color: rgb(252, 255, 255); text-decoration: none;">Registrarse</a>
                    </li>
                    <li class="list-group-item" style="background-color: transparent; border: none;">
                        <a href="{{route('password.request')}}" style="color: rgb(255, 255, 255); text-decoration: none;">Recuperar contraseña</a>
                    </li>
                    <li class="list-group-item" style="background-color: transparent; border: none;">
                        <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;">Ayuda</a>
                    </li>
                    <li class="list-group-item" style="background-color: transparent; border: none;">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
                
            
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Disfruta de los beneficios de
                                Bancapp
                            </h1>
                            <p class="lead fw-normal text-white-50 mb-4">Estamos comprometidos con tu crecimiento financiero y queremos darte la mano para que cumplas tus metas!</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href=" {{ route('login.ruta') }} ">Iniciar Sesion</a>
                                <a class="btn btn-outline-light btn-lg px-5" href=" {{ route('register') }} ">Registrarme</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://st2.depositphotos.com/1017986/7551/i/450/depositphotos_75515295-stock-photo-happy-african-woman-with-laptop.jpg" alt="..." /></div>
                </div>
            </div>
        </header>

        
    
        <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5 mb-5 mx-auto" style="max-width: 80%;">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">Deseas mas informacion, sobre nuestros productos.</div>
                    <div class="text-white-50">Suscríbase a nuestro boletin para recibir las últimas actualizaciones.</div>
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Correo electronico..." aria-label="Email address..." aria-describedby="button-newsletter" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="button">Subscribirse</button>
                    </div>
                    <div class="small text-white-50">Nos preocupa la privacidad y nunca compartiremos sus datos.</div>
                </div>
            </div>
        </aside>
    

        
    <section>           <!-- Carousel wrapper -->
        <div id="carouselBasicExample" class="carousel slide carousel-fade mb-10" data-mdb-ride="carousel" data-mdb-carousel-init>
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
  
             <!-- Inner -->
            <div class="carousel-inner mb-6">
            <!-- Single item -->
                <div class="carousel-item active">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100" alt="Sunset Over the City"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Envia dinero facilmente</h5>
                        <p>Nunca habia existido una forma mas facil y segura de mover tu dinero.</p>
                    </div>
                </div>
  
                <!-- Single item -->
                <div class="carousel-item">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="Canyon at Nigh"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Realiza tus Transaciones</h5>
                        <p>Ahora puedes, realizar tus pagos, ver tus facturas, solicitar creditos y mucho mas.</p>
                    </div>
                </div>
  
                <!-- Single item -->
                <div class="carousel-item">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100  " alt="Cliff Above a Stormy Sea"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Solicita un prestamo</h5>
                        <p>Con Bancapp puedes tener un prestamo de libre inversion en menos de 24hr, contáctanos y un asesor te atendera.</p>
                    </div>
                </div>
            </div>
            <!-- Inner -->
  
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->
    </section>


    <div class="d-flex mb-10">
        <div class="card ms-5 me-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://img.freepik.com/vector-gratis/diseno-tarjeta-credito-realista_23-2149126088.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">Conocer más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card ms-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://img.freepik.com/vector-gratis/diseno-tarjeta-credito-realista_23-2149126088.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">Conocer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex mb-10">
        <div class="card ms-5 me-4" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://img.freepik.com/vector-gratis/diseno-tarjeta-credito-realista_23-2149126088.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">Conocer más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card ms-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4 py-3">
                    <img src="https://img.freepik.com/vector-gratis/diseno-tarjeta-credito-realista_23-2149126088.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <a class="btn btn-primary btn-lg px-3 py-2 me-sm-3 fs-6 fw-bolder" href="">Conocer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block" style="color:rgb(22, 24, 26)">
                <span>Get connected with us on social networks:</span>
            </div>
                <!-- Left -->
  
                <!-- Right -->
            <div style="color: rgb(29, 31, 33)">
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
                <!-- Section: Social media -->
  
                <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
                <div class="row mt-3">
                <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="color: rgb(17, 17, 18)">
                    <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src="{{ asset('img/logo_bancapp_ultimo.png') }}"  height="60" alt="MDB Logo" loading="lazy"/>
                            <small>Bancapp</small>
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                        <!-- Grid column -->
                
                        <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color: rgb(15, 16, 17)">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Productos
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                        <!-- Grid column -->
                
                        <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="color: rgb(23, 25, 27)">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                        </div>
                        <!-- Grid column -->
                
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="color: rgb(12, 13, 14)">
                        <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contactos</h6>
                            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                            <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
  
        <!-- Copyright -->
      <div style="color: rgb(255, 255, 255)">
        <div class="text-center p-4" style="background-color: #000000;">
            © 2024 Copyright:
            <a class="text-reset fw-bold" src="" href="https://mdbootstrap.com/">Bancapp.com</a>
        </div>
      </div>  
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

        
        
                
                


        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
        ></script>
        <script
        src="https://kit.fontawesome.com/a076d05399.js"
        crossorigin="anonymous"
        ></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz1Y5rAyLxKE6z7VOQOxncP+dqFvNPOo0IEd2pB7H9kx" crossorigin="anonymous"></script>


        <script src="{{ asset('js/welcome.js') }}"></script>



        <script>
            AOS.init({
              duration: 1200, // Duración de la animación en milisegundos
              once: false // Para que se ejecute tanto al bajar como al subir
            });
        </script>
</body>
</html>
    

