<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cesta de la compra</title>
        <meta name="description" content="Ejercicio práctico. Curso 'HTML'" />
        <meta name="keywords" content="tienda en internet, cesta de compra, artículos, cesta, datos, facturación" />
        <link rel="stylesheet" type="text/css" href="css.css" media="all" />
        <script>
            function VerSeleccion(form)
            {
                var cad = "";
                if (form.nombre.value == "Su nombre")
                {
                    cad += "Escriba un nombre en el campo \"Nombre\". \n";
                }
                if (form.email.value.indexOf('@') == -1)
                {
                    cad += "Escriba un email correcto en el campo \"Email\". \n";
                }
                if ((form.tlf.value.length < 9) || isNaN(form.tlf.value))
                {
                    cad += "Escriba un teléfono correcto en el campo \"Teléfono\". \n";
                }
                alert(cad);


            }
        </script>

    </head>
    <body>
        <div id="contenido">
            <!--
            ************************************************
            *                  CABECERA                    *
            ************************************************
            -->
            <h1 id="logo">
                <span id="pz">Tu</span>
                <span id="shop">Tienda</span> 
                <span id="lema"><br/>Ya puedes vender lo que quieras por internet</span>
            </h1>

            <h2 class="t1">Cesta de la compra</h2>


            <!--
            ************************************************
            *      Contenido de la CESTA de la compra      *
            ************************************************
            -->


            <div id="articulos">

                <h3 class="t2">Artículos en la cesta</h3>
                <table id="tabla_compra" summary="Esta tabla muestra el número de artículos incluidos en la cesta de compra, su precio por unidad y el importe total en euros">
                    <caption>Tabla de artículos incluidos en la cesta de la compra e importes</caption>
                    <thead>
                        <tr id="conceptos">
                            <th>Producto</th>
                            <th id="pvp">Precio unitario</th>
                            <th id="uds">Cantidad</th>
                            <th id="eur">Precio total por producto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th id="art1">Gafas de sol</th>
                            <td headers="pvp art1">140 &euro;</td>
                            <td headers="uds art1">1</td>
                            <td headers="eur art1">140 &euro;</td>
                        </tr>
                        <tr id="total">
                            <th colspan="3" id="tot">Precio total</th>
                            <td headers="tot">140 €</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr />


            <!--
            ************************************************
            *             DATOS de facturación             *
            ************************************************
            -->
            <div id="datos">
                <h3 class="t2">Datos de facturación</h3>
                <p class="info">Los campos marcados en <strong class="obligatorio">negrita </strong> son obligatorios.</p>

                <form id="formularioCompra">
                    <fieldset id="datos_personales">
                        <legend>Datos personales</legend>
                        <label for="empresa" accesskey="1">
                            <span class="etiqueta_formulario"><span class="acceskey"></span> Empresa	</span>
                            <input name="empresa" type="text" id="empresa" value="Nombre de la empresa" onfocus="if (this.value == 'Nombre de la empresa' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Nombre de la empresa'
                                            }" />
                        </label>
                        <label class="obligatorio" for="nombre" accesskey="2">
                            <span class="etiqueta_formulario"><span class="acceskey"></span><strong> Nombre</strong></span>
                            <input name="nombre" type="text" id="nombre" value="Su nombre" onfocus="if (this.value == 'Su nombre' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Su nombre'
                                            }" />
                        </label>
                        <label for="apellidos" accesskey="3">
                            <span class="etiqueta_formulario"><span class="acceskey"></span>Apellidos</span>
                            <input name="apellidos" type="text" id="apellidos" value="Sus apellidos" onfocus="if (this.value == 'Sus apellidos' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Sus apellidos'
                                            }" />
                        </label>
                        <label class="obligatorio" for="email" accesskey="4">
                            <span class="etiqueta_formulario"><span class="acceskey"></span> <strong>Correo electrónico</strong></span>
                            <input name="email" type="text" id="email" value="Correo electrónico" onfocus="if (this.value == 'Correo electrónico' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Correo electrónico'
                                            }" />
                        </label>
                        <label class="obligatorio" for="tlf" accesskey="5">
                            <span class="etiqueta_formulario"><span class="acceskey"></span> <strong><abbr title="Teléfono">Tlf.</abbr> de contacto</strong></span>
                            <input name="tlf" type="text" id="tlf" value="Teléfono" onfocus="if (this.value == 'Teléfono' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Teléfono'
                                            }" />
                        </label>
                    </fieldset>

                    <fieldset id="datos_envio">
                        <legend>Datos de envío</legend>
                        <label for="dir" accesskey="7">
                            <span class="etiqueta_formulario"><span class="acceskey"></span> Dirección</span>
                            <input name="dir" type="text" id="dir" value="Dirección" onfocus="if (this.value == 'Dirección' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Dirección'
                                            }" />
                        </label>
                        <label for="localidad" accesskey="8">
                            <span class="etiqueta_formulario"><span class="acceskey"></span> Localidad</span>
                            <input name="localidad" type="text" id="localidad" value="Localidad" onfocus="if (this.value == 'Localidad' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Localidad'
                                            }" />
                        </label>
                        <label for="provincia" accesskey="9">
                            <span class="etiqueta_formulario"><span class="acceskey"></span> Provincia</span>
                            <input name="provincia" type="text" id="provincia" value="Provincia" onfocus="if (this.value == 'Provincia' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Provincia'
                                            }" />
                        </label>
                        <label for="cp" accesskey="0">
                            <span class="etiqueta_formulario"><span class="acceskey"></span> <acronym title="Código Postal">CP</acronym></span>
                            <input name="cp" type="text" id="cp" value="Código Postal" onfocus="if (this.value == 'Código Postal' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Código Postal'
                                            }" />
                        </label>
                    </fieldset>

                    <fieldset id="observaciones" style="padding:0">
                        <legend class="observa">Observaciones:</legend>
                        <label for="obs">
                            <textarea rows="6" cols="80" id="obs" name="obs" onfocus="if (this.value == 'Escriba sus observaciones aquí' || this.value == '') {
                                        this.value = '';
                                    }" onblur="if (this.value == '') {
                                                this.value = 'Escriba sus observaciones aquí'
                                            }">Escriba sus observaciones aquí</textarea>
                        </label>
                    </fieldset>

                    <p style=" width:100%; text-align:right;"><input type="submit" value="Realizar Pedido" onclick="VerSeleccion(this.form)" /></p>
                </form>
            </div>
            <hr />
        </div>
    </body>

</body>
</html>
