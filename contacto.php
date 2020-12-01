<?php include_once("header.php");?>
<div class="contactopadre">
<div class="contactimg">
    <img src="img/contact.png" alt="">
</div>
    <div class="form2">
        <h3>
            Cont&aacute;ctanos
        </h3>
        <form action='registrarContacto.php' method='post' name='frmContacto' class="cf">
                    <div class="half left cf">
                        <input type="text" name="nombre" id="input-name" placeholder="Nombre">
                        <input type="text" name="apellido" id="input-name" placeholder="Apellido">
                        <input type="number" name="telefono" id="input-name" placeholder="Tel&eacute;fono">
                        <input type="email" name="correo" id="input-email" placeholder="Correo">
                    </div>
                    <div class="half right cf">
                        <textarea name="mensaje" type="text" id="input-message" placeholder="Deja T&uacute; Mensaje"></textarea>
                    </div>  
                    <input type="submit" value="Enviar" id="input-submit">
                    </form>
    </div>
</div>
<?php include_once("footer.php");?>