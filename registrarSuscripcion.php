<footer>
    <div class="container2">
        <div class="footer_trust_top">
          <p>EMPRESAS COLABORADORAS</p>
          <div class="trustlogos"></div>
        </div><div class="col-lg-12 col-md-12 col-xs-12 footer_main">
        <div class="col-xs-5 col-md-3 footer-left">
          <h4>Explora m&aacute;s</h4>
          <ul class="footer_list">
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="nosotros.php">Pol&iacute;ticas</a></li>
            <li><a href="contacto.php">Cont&aacute;ctanos </a></li>
          </ul>
        </div>
      
        <div class="col-xs-12 col-md-6 col-md-pull-3 footer_middle">
          <h4>S&eacute; el primero en recibir noticias acerda de nuevos instrumentos.</h4>
          <p>Suscr&iacute;bete para obtener las mejor informaci&oacute;n acerca de instrumentos musicales.</p>
      
          <?php
            if($_POST)
            {
                //echo"<h3>Form Enviado</h3>";
                //Recibir los datos desde el Formulario
                $Correo    = $_POST['correo'];

                //Validamos los campos
                if(empty($Correo))
                {
                    echo"<h4><center>Debe escribir un Correo</center></h4>";
                }
                //Procedemos a conectar y guardar los datos posteriormente
                if( (!empty($Correo)))
                {
                    //echo"<h3>Puede Guardar</h3>";
                    //Preparamos la conexion a nuestro Servidor
                    //Datos del Servidor MYSQL
                    $Servidor   = "localhost";
                    $UserDb     = "root";
                    $ClaveDb    = "";
                    $Db         = "db_20186188_soittimet";
                    $Conexion =mysqli_connect($Servidor,$UserDb,$ClaveDb,$Db) or die("Error con la Db");

                    //Preparamos la sentencia para guardar (INSERT)
                    $Guardar="
                        INSERT INTO suscripcion
                            (correo)
                        VALUES
                            ('$Correo')
                    ";
                    //Procedemos a conectar y ejecutar la SENTENCIA SAQL para Guardar
                    if(mysqli_query($Conexion,$Guardar))
                    {
                        echo"<h2><center>Se ha completado tu Suscripci&aacute;n</center></h2>";
                    }else{
                        echo"<h3><center>Ups, ha fallado el Registro</center></h3>";
                    }
                        
                }else{
                    echo"<h3><center>Faltan Campos Por Llenar</center></h3>";
                }
                
            }else
            {
                echo"<h3><center>No hay datos para procesar</center></h3>";
            }
        ?>

        <div class="col-xs-7 col-md-3 col-md-push-6 footer-right">
            <div class="footerbox">
              <h4>Cont&aacute;ctanos</h4>
              <p>Estamos listos para ayudarte!</p>
              <ul class="footer_list">
                <li>RD | STO.DOM</li>
                <li class="phone">+1 829 545 6606</li>
              </ul>
            </div>
          </div></div>
        
        <div class="footer_bottom">
            <div class="col-lg-3 col-md-12 footer_copyright">
                <p>©2020 Todos los derechos reservados.</p>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 footer__partners">
            <img src="https://www.authenticireland.com/wp-content/uploads/2018/04/Bottom_Trust2.png">
        </div>
        <script src="js/formulario.js"></script>
	      <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</footer>
</body>
</html>