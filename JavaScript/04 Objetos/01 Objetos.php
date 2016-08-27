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
    </head>
    <body>
        <script>
            var opciones = "width=750, height=350", scrollbars = "yes";
            var miVentana = window.open("https://www.video2brain.com/es", "Video2Brain", opciones);
            document.write("Path " + location.pathname); 
            
            
            
        </script>
        <form>
            <p><input type="button" value="Atras" onclick="history.back()"></p>
            <p><input type="button" value="Adelante" onclick="history.forward()"></p            
        </form>
       
    </body>
</html>