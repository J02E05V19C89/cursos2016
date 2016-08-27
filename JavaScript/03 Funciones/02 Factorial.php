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
            function factorial(numero){
                
                if(numero > 1){
                    return numero * factorial(numero- 1);
                }else{
                    return numero;
                }
                
            }
           
        </script>
    </head>
    <body>
        <script>
            var entero = prompt("introduzca un numero entero");
            
            if (isNaN(entero)){
                alert("El valor introducido no es un numero");
                
            }else{
                entero = parseFloat(entero)
                document.write("El factorial "+ entero + " = " + factorial(entero));
            }
        </script>
    </body>
</html>
