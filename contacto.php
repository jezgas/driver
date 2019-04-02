
<?php 
include 'head.php';
include 'header.php';
?>

</br>
   
    <div style="text-align: center;">
        <h1 class="wow tada" data-wow-iteration="3">Contactanos</h1>
    </div>
</br>
    
<!-- 
logo giratorio
multi-imagenes-->


<div class="container">
        
        <div class="row">
          <div class="col-md-6">
           
           <form method="post" action="enviar.php">
        
        <div class="row">
                    <div class="form-group col-sm-5">
                        <label for="name" class="h4">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="name" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="email" class="h4">Correo Electronico</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                    </div>
                </div>
                <div class="form-group col-sm-5">
                    <label for="message" class="h4 ">Mensaje</label>
                    <textarea id="message" name="mensaje" class="form-control"  rows="5" placeholder="Escribe tu mensaje" required style="width:430px; height:100px;"></textarea>
                </div>
                <button type="submit" value="enviar" id="form-submit" class="btn btn-success btn-lg pull-right ">Enviar</button>
        

    </form>
                
<address>
  <font size=5><strong>Datos de Contacto</strong><br>
  <i style="font-size: 32px;color: gray" class="fas fa-phone-square"></i> <a>Telefono: 58443250</a> <br>
  <i style="font-size: 35px; color: green" class="fab fa-whatsapp"></i> <a>WhatsApp: 5528938502</a><br>
  <i style="font-size: 35px;color: blue" class="fab fa-facebook-square"></i> <a href="https://www.facebook.com/driver.osorio" target="_blank"> Driver039</a>


  </font>
</address>

          </div>

          <div class="col-md-6">
            <h4 style="text-align: center;">Mapa del sitio</h4>




        <iframe  class="text-aling-center embed-responsive-item"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.9816936236854!2d-99.04917425051428!3d19.198400373834964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce050309a18ef7%3A0x7eeae474ea345a3!2sEmiliano+Zapata%2C+San+Pedro+Atocpan%2C+Panchimalco%2C+12200+San+Pedro+Atocpan%2C+CDMX!5e0!3m2!1ses!2smx!4v1527268015509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       
        

    
          </div>
          
        </div>

        <hr>

      </div> <!-- /container -->


<?php 
include 'footer.php';

?>








