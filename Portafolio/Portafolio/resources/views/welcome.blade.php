<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6682f4e14e.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
   
    <!-- Fonte del Proyecto Raleway -->

    <title>Portafolio</title>
    <link rel="icon" href="icono.ico">
</head>
<body>
  <header>
    <!-- Sección del Menú  -->
    <nav>
   
<section class="contenedormenu">
        <div class="logo">
        <p><a href="portada.html">Ayman</a></p>
           </div>
                <div class="enlaces">
                <a class="textoEnlace" href="#about-me">Sobre mi</a>
                <a class="textoEnlace" href="#skills">Habilidades</a>
                <a class="textoEnlace" href="#formacion">Formación</a>
                <a class="textoEnlace" href="#xp">Proyectos</a>     
                <!-- <a class="textoEnlace" href="#contacto">Contacto</a> -->
        </div>
    </section>
        </nav>

        
    <!-- Sección del Header/Title/Hero -->
    <div class="title__container">
        <span>👋Hola,¡Bienvenido...!</span>
    </div>

    <!-- Sección sobre mi -->
    <section class="about-me" id="about-me">
    <div class="contenedorMi">
            <div class="textoMi">
            <h3 class="sobre-mi">Sobre mi</h3>
            
            <p class="parrafo-sobremi">Mi nombre es Ayman, actualmente estoy acabando mis estududios academicos en el instituto Baix camp formandome un Grado Superiod de Desarollador Aplicaciones Web.
              <br><br> 
              Me considero una persona curiosa, me mantengo siempre actualizado en el mundo de la informatica ,me gusta aprender cosas nuevas 
             <br><br>
             Este es mi portafolio donde ire subiendo todos los proyectos donde ire realizando. 
             </p>
            </div>
    </section>

    <!-- Sección de Skills -->
    <section class="skills" id="skills">
      <div class="contenedor-skills">
        <h3 class="skills__title">Habilidades</h3>
            
                <div class="skills__box">
                <div class="skills__img">
                   <i class="fa-brands fa-html5"></i>
                       <h3>HTML 5</h3>
                     </div>

                <div class="skills__img">
                    <i class="fa-brands fa-js"></i> 
                        <h3>Javascript</h3>
                    </div>

                <div class="skills__img">
                    <i class="fa-brands fa-docker"></i> 
                        <h3>Docker</h3>
                    </div>

                <div class="skills__img">
                     <i class="fa-brands fa-laravel"></i>
                        <h3>Laravel</h3>
                    </div>

                <div class="skills__img">
                   <i class="fa-brands fa-react"></i>  
                        <h3>React</h3>
                   </div>
                </div>
        </div>
    </section>

    <!-- Sección de Hobbies -->
    <section class="hobbies" id="hobbies">
        <div class="hobbies-contenedor">
            <h3 class="hobbies__title">Hobbies</h3>
                    <div class="hobbies__box">
                        <div class="hobbies__img">
                        <i class="fa-solid fa-dumbbell"></i>
                            <h3>Deporte</h3>
                         </div>
                    <div class="hobbies__img">
                    <i class="fa-solid fa-car"></i>
                            <h3>Conducir</h3>
                    </div>
                    <div class="hobbies__img">
                    <i class="fa-solid fa-plane"></i>
                            <h3>Viajar</h3>
                        </div>
                    <div  class="hobbies__img">
                    <i class="fa-solid fa-music"></i>
                            <h3>Musica</h3>
                        </div>
                    <div  class="hobbies__img">
                    <i class="fa-solid fa-chalkboard-user"></i> 
                            <h3>Informatica</h3>
                        </div>
                    </div>
            </div>
        </section>

    <!-- Sección de Formación académica -->
    <section class="academic" id="formacion">
      <div class="formacion-contenedor">
        <h3 class="academic__title">Formación académica</h3>
        <div class="card-slider container">
          <div class="card-carousel" id="debug_id_1">
              <button class="button-spin counterclockwise">&lt;</button>
              <div class="inner-carousel">
                <div>
                  <img class="card-img-top" src="{{ asset('img/SMX.png') }}" />
                  <h4>Sistemes Microinformatica i Xarxes</h4>
                </div>
                <div>
                  <img class="card-img-top" src="{{ asset('img/WEB.png') }}" />
                  <h4>Desenvolupador Aplicacions Web</h4>
                </div>
                <div>
                  <img class="card-img-top" src="{{ asset('img/Cyber.png') }}" />
                  <h4>Networking Academy Cybersecurity</h4>
                </div>
                <div>
                  <img class="card-img-top" src="{{ asset('img/PHPyMySQL.jpg') }}" />
                  <h4>Curs de PHP i MySQL Online</h4>
                </div>
                <div>
                  <img class="card-img-top" src="{{ asset('img/PHP.png') }}" />
                  <h4>Curs de PHP bàsic Online</h4>
                </div>
                <div>
                  <img class="card-img-top" src="{{ asset('img/Gitandroid.jpg') }}" />
                  <h4>Curs de Git en Android Studio</h4>
                </div>
              </div>
              <button class="button-spin clockwise">&gt;</button>
            </div>
        </div>
      </div>
    </section>

    <!-- Sección de Experiencia Profesional/Proyectos-->
    <section class="experiencia" id="xp">
      <div class="contenedorEx">
        <h2 class="experience__section__title">Proyectos</h2>
        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
        <div id="slider-container">
        <div id="main-slider">
      <div id="side-1" class="slide card active">
        <img class="card-img-top" src="{{ asset('img/') }}"/>
        <div class="card-body">
          <h5 id="title-lavado" class="card-title">DevChallenge2</h5>
        </div>
      </div>
      <div id="side-2" class="slide card">
        <img class="card-img-top" src="{{ asset('img/') }}"/>
        <div class="card-body">
          <h5 id="title-anticorrupcion" class="card-title">DevChallenge3</h5>
        </div>
      </div>
      <div id="side-3" class="slide card">
        <img class="card-img-top" src="{{ asset('img/') }}" />
        <div class="card-body">
          <h5 id="title-sumariales" class="card-title">DevChallenge4</h5>
        </div>
      </div>
      <div id="side-4" class="slide card">
        <img class="card-img-top" src="{{ asset('img/') }}" />
        <div class="card-body">
          <h5 id="title-adhoc" class="card-title">DevChallenge5</h5>
        </div>
      </div>
      <div id="side-5" class="slide card">
        <img class="card-img-top" src="{{ asset('img/PlanGym.png') }}" />
        <div class="card-body">
          <h5 id="title-duediligence" class="card-title">PlanGym</h5>
          <a class="btn btn-primary" href="https://github.com/Ayman-Kaddar/FINAL-FINAL-PLANGYM" role="button">Link</a>
        </div>
      </div>
      <div id="side-6" class="slide card">
        <img class="card-img-top" src="{{ asset('img/Punch.png') }}"/>
        <div class="card-body">
          <h5 id="title-duediligence" class="card-title">Punch d'aventura</h5>
          <a class="btn btn-primary" href="https://github.com/Hecti1008/Punch_d_aventures/tree/main/Punch%20d'aventures" role="button">Link</a>

        </div>
      </div>

    </div>
    <div class="slide-indicator-container"></div>
    <div class="slider-controls">
      <div id="pre" class="slider-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div id="nex" class="slider-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </section>

    <!-- Sección de Contacto 
    <div  id="contacto" class="contact-section">
      <div class="contact-heading">
        <h2>Contacto</h2>
      </div>
      <div class="container-contact">
       <div class="contact-form">
          <h4 class="contactarme">Complete el siguiente formulario y me pondré en contacto con usted lo antes posible.</h4>
          <form class="form-group"  action="https://formspree.io/f/xyyoqeer" method="POST">
            <input type="text" placeholder="Nombre" class="input" name="name">
            <input type="email" placeholder="Email" class="input" name="email">
            <textarea  placeholder="Escribe su mensaje aqui!" name="message"></textarea>
            <button type="submit" class="btn-submit">Enviar Mensaje</button>
          </form>
        </div>
      </div>
    </div>
-->
        <!-- Sección de Footer -->
        <footer class="footer"> 
      <div class="footer-content">
        <h2>Ayman Kaddar</h2>
        <h5>Desenvolupador Web</h5>
      </div>
      <div class="sotial-networks">
        <a href="https://github.com/Ayman-Kaddar" target="_blank"><i class="fa-brands fa-github"></i></a>
                    
      <a href="https://www.linkedin.com/in/ayman-kaddar/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    </footer>
     <!-- Script del documento JavaScript -->
     <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
     <script src="{{ asset('jQuery/card.js') }}"></script>
</body>
</html>