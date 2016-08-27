<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Métodos públicos</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            function Persona(dni, nombre) {
                this.dni = dni;
                this.nombre = nombre;
                
//                //Forma basica que hace parte de la clase                
//                this.saludar = function (nombre) {
//                    console.log(this.nombre + ' te saluda ' + nombre);
//                }
            }

            Persona.prototype.saludar = function (nombre) {
                console.log(this.nombre + ' te saluda ' + nombre);
            }

            var yo = new Persona('1', 'Marcos');
            yo.dni = '1234567';
            yo.saludar('Pepito');


        </script>
    </body>
</html>
