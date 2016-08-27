<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Propiedades estáticas</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            // ejemplo de propiedad estática en una clase predefinida
            console.log(Math.PI);

            function Convertidor() {

            }
            Convertidor.GRADOS_A_RADIANES = Math.PI / 180;
            Convertidor.RADIANES_A_GRADOS = 180 / Math.PI;

            console.log('180 grados son: ' + 180 * Convertidor.GRADOS_A_RADIANES + ' radianes.');
            console.log('2PI radianes son: ' + 2 * Math.PI * Convertidor.RADIANES_A_GRADOS + ' grados.');
        </script>
    </body>
</html>