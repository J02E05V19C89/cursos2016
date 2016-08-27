<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function pulsar() {
                //definimos la variable
                var respuesta;
                respuesta = prompt("Estas seguro que desea realizar esta operacion");

                if (respuesta) {
                    alert("se ha recibido un respuesta");   
                }else{
                    alert("Ha reusado contestar");  
                }

            }
        </script>
    </head>
    <body>
    <h1>Funciones</h1>
    <p onclick="pulsar()">Pulsa aqui</p>
        
    </body>
</html>
