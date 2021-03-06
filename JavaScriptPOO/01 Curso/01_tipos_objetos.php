<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tipos de objetos en javaScript</title>
       
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" type="text/css">
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            // Objetos asociados a los tipos primitivos
            var cadena = 'Esto es una cadena';
            var cadena_obj = new String('Esto es una cadena');
            console.log(cadena);
            console.log(cadena_obj);

            var numero = 12;
            var numero_obj = new Number(12);
            console.log(numero);
            console.log(numero_obj);

            var logico = true;
            var logico_obj = new Boolean(false);
            console.log(logico);
            console.log(logico_obj);

            // Objetos compuestos
            var lista = ['0', '1', '2', '3'];
            var lista_obj = new Array('0', '1', '2', '3');
            console.log(lista);
            console.log(lista_obj);

            var objeto_literal = {nombre: 'Pedro', edad: 30};
            var objeto_constructor = new Object();
            objeto_constructor.nombre = 'Pedro';
            objeto_constructor.edad = 30;
            console.log(objeto_literal);
            console.log(objeto_constructor);

            // Objetos predefinidos del lenguaje
            var ahora = new Date();
            console.log(ahora);
            console.log(Math);

            // Objetos definidos por el usuario
        </script>

    </body>
</html>
