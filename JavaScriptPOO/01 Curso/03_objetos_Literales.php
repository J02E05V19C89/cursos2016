<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Objetos literales en JavaScript</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            var generico = {
                nombre: 'Mi objeto',
                edad: 15,
                saludar: function (nombre) {
                    console.log('Hola ' + nombre);
                }
            };
            console.log(generico.nombre);
            generico.saludar('Marcos');
        </script>
    </body>
</html>
