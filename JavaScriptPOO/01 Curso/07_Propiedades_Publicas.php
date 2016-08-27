<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Propiedades públicas</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            function Persona(dni, nombre) {
                this.dni = dni;
                this.nombre = nombre;
            }

            var yo = new Persona('1234567', 'Marcos');
            var tu = new Persona('7654321', 'Pedro');

            tu['nombre'] = 'Fernando';

            console.log(yo);
            console.log(tu);
        </script>
    </body>
</html>