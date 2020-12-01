<?php include_once("header.php");?>
<section class= "banner">
        <h2> NOSOTROS </h2>
    </section>
    <div class="bannerimg">
        <img src="https://i.ibb.co/PTNmPJs/bannernos.jpg" alt="">
    </div>
    <div class="storyform">
        <div class="story">
            <h4>Quienes Somos ?</h4>
            <p>
                Soittimet es una empresa que se encarga del an&aacute;lisis y la muestra de instrumentos musicales. En conjunto con grandisas empresas como son: Fender, Gibson, Yamaha.
                En Soittimet te damos todos los detalles necesarios para que tu proxima compra de un instrumento musical sea una elecci&oacute;n formidable y de gran calidad. Entregandote
                informaci&oacute;n v&aacute;lida y confiable, para que puedas realizar tu compra de instrumento de forma s&aacute;bia, precisa y sin errores.
            </p>
            <h4>Nuestras Pol&iacute;ticas</h4>
            <p>
            Soittimet Brands, Inc. se toma muy en serio su privacidad. Por esa razón, hemos desarrollado esta política para informarle sobre nuestra recopilación, uso y divulgación de sus 
            Datos personales y las opciones que ha asociado con esos datos. Esta Política de privacidad se aplica a todas las divisiones y subsidiarias de Soittimet Brands, Inc. y a los 
            sitios web relacionados. Los datos personales se pueden compartir sin previo aviso entre todas las divisiones y subsidiarias de Soittimet Brands, Inc.
            <br>
            <br>
            Es importante saber que esta política de privacidad no se aplica a sus actividades en los sitios web de las redes sociales u otros proveedores a los que pueda acceder a 
            través de enlaces en nuestros sitios web. No olvide consultar los sitios web de estos proveedores para conocer sus regulaciones de protección de datos.
            <br>
            <br>
            Usamos sus datos para brindar y mejorar nuestros servicios. Pero también utilizamos sus datos para comercializarle directamente. Recopilamos varios tipos diferentes de datos.
            </p>
        </div>
        <div class="formtitle">
        <h4>
            Preg&uacute;ntanos
        </h4>
        <h3>
            Quieres saber algo m&aacute;s de nosotros?
        </h3>
        </div>
<?php
            if($_POST)
            {
                //echo"<h3>Form Enviado</h3>";
                //Recibir los datos desde el Formulario
                $Nombre    = $_POST['nombre'];
                $Apellido  = $_POST['apellido'];
                $Correo    = $_POST['correo'];
                $Mensaje   = $_POST['mensaje'];

                //Validamos los campos
                if(empty($Nombre))
                {
                    echo"<h4><center>Debe escribir el Nombre</center></h4>";
                }
                if(empty($Apellido))
                {
                    echo"<h4><center>Debe escribir el Apellido</center></h4>";
                }
                if(empty($Correo))
                {
                    echo"<h4><center>Debe escribir un Correo</center></h4>";
                }
                if(empty($Mensaje))
                {
                    echo"<h4><center>Debe escribir algun Mensaje</center></h4>";
                }
                //Procedemos a conectar y guardar los datos posteriormente
                if( (!empty($Nombre)) && (!empty($Apellido)) && (!empty($Correo)) && (!empty($Mensaje)))
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
                        INSERT INTO preguntas
                            (nombre,apellido,correo,mensaje)
                        VALUES
                            ('$Nombre','$Apellido','$Correo','$Mensaje')
                    ";
                    //Procedemos a conectar y ejecutar la SENTENCIA SAQL para Guardar
                    if(mysqli_query($Conexion,$Guardar))
                    {
                        echo"<h3><center>Se ha enviado tu Pregunta</center></h3>";
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
<?php include_once("footer.php");?>