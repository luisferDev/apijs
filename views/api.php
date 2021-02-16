<!Doctype html>
<html lang='es'>
   <head>
      <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
	  <meta name="Luis Marín" content="APIRest Prototype">
      <title>API Open Source</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link href="css/style.css" rel="stylesheet">  
	  
   </head>
   
   <body>
      <main>
         <section class="api-search container-fluid">
            <div class="row inner-box">
               <div class="col-md-12 hero">
                  <div class="row">
                     <div class="col-md-6 col-f">
                        <div class="api-title">
                           <h1>
                              <span class="h1">API</span>
                              <span class="h2">Open Source</span>
                              <span class="h3">NASA IMGs</span>
                           </h1>
                        </div>
                        <div class="caja">
                           <div class="message">
                              <p>Indica qué quieres buscar y pulsa el botón. Palabras en inglés preferiblemente, porque: <em>¡You know... es La Nasa!</em></p>
                              <span>Se ha autolimitado a 30 resultados</span>
                           </div>
                           <div class="options">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <input type="text" id="buscar">
                                 </div>
                                 <div class="col-lg-6">
                                    <button type="button" class="btn" id="boton">Buscar</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="void"></div>
                     </div>
                  </div>
                  <img src="imagenes/api/bg-still.png" alt="">
               </div>
   
               <!-- RESULTADO DE BÚSQUEDA -->
               <div class="api-results">
                  <div class="col-md-12">
                     <output id="resultados"></output>
                  </div>
                  <div class="col-md-12">
                     <output id="salida"></output>
                  </div>
               </div><!-- /. FIN RESULTADO DE BÚSQUEDA -->
            </div>
         </section>           
      </main>
      <footer id="contact" class="container-fluid d-flex justify-content-md-center align-items-md-center">
         <div class="row container">
            <div class="col-md-12">
               <h2>API Restful Prototype</h2>
               <div class="contact-content">
                  <p>Visita mi "Web Developer Portfolio"</p>
                  <a class="btn" href="https://lfdev.es/" target="_blank">lfdev.es</a>
               </div>
            <div class="contact-legal">
               <p>Derechos reservados, Luis Marín - Desarrollador Web | Barcelona 2021</p>
            </div>
         </div>
         </div>
      
         </div>
         <!-- /. Cierre de Container -->
      </footer>
      <!-- /. Cierre Footer -->
      
   
      <!----------------------------------
           
           Scripts
   
       ----------------------------------->
      <script src="js/scripts.js"></script>
      <script type="text/javascript"></script>
   </body>   
</html>