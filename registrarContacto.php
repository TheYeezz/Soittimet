<?php include_once("header.php");?>
<div class="contactopadre">
<div class="contactimg2">
    <img src="img/contact.png" alt="">
</div>
<?php
            if($_POST)
            {
                //echo"<h3>Form Enviado</h3>";
                //Recibir los datos desde el Formulario
                $Nombre    = $_POST['nombre'];
                $Apellido  = $_POST['apellido'];
                $Telefono  = $_POST['telefono'];
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
                if(empty($Telefono))
                {
                    echo"<h4><center>Debe escribir el Telefono</center></h4>";
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
                if( (!empty($Nombre)) && (!empty($Apellido)) && (!empty($Telefono)) && (!empty($Correo)) && (!empty($Mensaje)))
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
                        INSERT INTO contacto
                            (nombre,apellido,telefono,correo,mensaje)
                        VALUES
                            ('$Nombre','$Apellido','$Telefono','$Correo','$Mensaje')
                    ";
                    //Procedemos a conectar y ejecutar la SENTENCIA SAQL para Guardar
                    if(mysqli_query($Conexion,$Guardar))
                    {
                        echo"<h2><center>Se ha enviado tu Mensaje</center></h2>";
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
</div>
<?php include_once("footer.php");?>