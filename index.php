<?php include('head.html') ?>
<?php include('header.html') ?>

      <section>
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-4">
                  <a href="#" class="cuadro" style="background-image: url('img/settore1.jpg')">
                     <div>
                        <h3>Titulo</h3>
                        <img src="img/icon3.png">
                        <span>Ver más</span>
                     </div>  
                  </a>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4">
                  <a href="#" class="cuadro" style="background-image: url('img/settore1.jpg')">
                     <div>
                        <h3>Titulo</h3>
                        <img src="img/icon3.png">
                        <span>Ver más</span>
                     </div>  
                  </a>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4">
                  <a href="#" class="cuadro"  style="background-image: url('img/settore1.jpg')">
                     <div>
                        <h3>Titulo</h3>
                        <img src="img/icon3.png">
                        <span>Ver más</span>
                     </div>  
                  </a>
               </div>
            </div>            
            
         </div>
      </section> 

      <section>
         <div class="container">    
            <div class="owl-carousel owl-theme">
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>
               <div class="item">
                  <a href="#"><img src="img/icon3.png"></a>
                  <h4>Enlace 1</h4>
               </div>

            </div>
         </div>
      </section>

<!--       <section>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.288322427324!2d-77.03154408575881!3d-12.092403491436915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c866c1eca16d%3A0x4828e197f1befef!2sCalle+las+Camelias+164%2C+San+Isidro+15046!5e0!3m2!1ses!2spe!4v1493858865406" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section> -->

      <!-- Formulario -->
      <section>
            <div class="container">
                <div class="titulos">
                    <h2>Formulario de consultas</h2>
                </div>

                <div class="contenedor-form1">
                    <form>
                        <div class="form-group">
                            <input type="text" required="required"/>
                            <label for="input" class="control-label">Nombre y apellido</label><i class="bar"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required"/>
                            <label for="input" class="control-label">Teléfono</label><i class="bar"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required"/>
                            <label for="input" class="control-label">Correo</label><i class="bar"></i>
                        </div>
                        <div class="form-radio">
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio" checked="checked"/><i class="helper"></i>Femenino
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="radio"/><i class="helper"></i>Masculinos
                            </label>
                          </div>
                        </div>
                        <div class="form-group gruposelect">
                            <select>
                                <option>Tema 1</option>
                                <option>Tema 2</option>
                                <option>Tema 3</option>
                            </select>
                            <label for="select" class="control-label">Temas de interés</label><i class="bar"></i>
                        </div>
                        <div class="form-group">
                          <textarea required="required"></textarea>
                          <label for="textarea" class="control-label">Mensaje</label><i class="bar"></i>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" checked="checked"/><i class="helper"></i>Acepto los términos y políticas
                          </label>
                        </div>
                      </form>
                      <div class="button-container">
                        <button type="button" class="button"><span>Enviar mi consulta</span></button>
                      </div>
                    </div>
                </div>    
      </section>
      <section id="map" class="mapa"></section>

<?php include('footer.html') ?>
<!-- Librería jQuery requerida por los plugins de JavaScript -->

<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDoIcfK6UNd26QjpPHVOrU0SVSR0ZRH3Zg&callback=initMap"></script>


<script type="text/javascript">

function initialize() {
    var loc, map, marker, infobox;
    
    loc = new google.maps.LatLng(-12.0977105,-77.0307775);
    
    map = new google.maps.Map(document.getElementById("map"), {
         zoom: 15,
         scrollwheel: false,
         center: loc,
         
         mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    
    marker = new google.maps.Marker({
        map: map,
        position: loc,
        visible: true,
        //icon: '< ?php bloginfo( 'template_url' ); ?>/img/icomap.png', 
        icon: './img/icomap.png', 
        animation: google.maps.Animation.DROP
    });
    var styles = [
    {
    stylers: [
    { saturation: -50 },
    { hue: "#371E33" },
    { lightness: 10 },
    { gamma: 1.51 }
    ]
    },
    {
    featureType: "poi.business",
    elementType: "all",
    stylers: [
    { visibility: "off" }
    ]
    },
    {
    featureType: "road",
    elementType: "labels",
    stylers: [
    { visibility: "simplified" }
    ]
    }
    
    ]; 
    map.setOptions({styles: styles});
       
    google.maps.event.addListener(marker, 'click', function() {
        infobox.open(map, this);
        map.panTo(loc);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
 
//Script para carrusel
         $(document).ready(function() {
           $('.owl-carousel').owlCarousel({
             loop: true,
             margin: 10,
             responsiveClass: true,
             autoplay: true,

             responsive: {
               0: {
                 items: 1,
                 nav: false
               },
               600: {
                 items: 3,
                 nav: false
               },
               1000: {
                 items: 4,
                 nav: true,
                 dots: false,
                 loop: false,
                 margin: 20
               }
             }
           })
         })  
</script>

  </body>
</html>