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
            Quieres saber algo m&aacute;s de nosotros o de los instrumentos?
        </h3>
        </div>
            <div class="form">
                <form action='registrarPreguntas.php' method='post' name='frmPreguntas' class="cf">
                <div class="half left cf">
                    <input type="text" name="nombre" id="input-name" placeholder="Nombre">
                    <input type="text" name="apellido" id="input-name" placeholder="Apellido">
                    <input type="email" name="correo" id="input-email" placeholder="Correo">
                </div>
                <div class="half right cf">
                    <textarea name="mensaje" type="text" id="input-message" placeholder="Pregunta"></textarea>
                </div>  
                <input type="submit" value="Enviar" id="input-submit">
                </form>
             </div>
<?php include_once("footer.php");?>