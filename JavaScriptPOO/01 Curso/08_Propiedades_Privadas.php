<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Propiedades privadas</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            function Persona(dni, nombre) {
                var edad = 0;
                this.dni = dni;
                this.nombre = nombre;
                // Métodos que accedan a la propiedad privada aquí.
            }

            var yo = new Persona('1', 'Marcos');
            console.log(yo.edad);
            // devuelve undefined ya que edad no se encuentra en el objeto 
            // al no estar declarada a través de this


        </script>
    </body>
</html>