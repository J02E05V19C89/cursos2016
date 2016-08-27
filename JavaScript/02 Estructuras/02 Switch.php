<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
            var respuesta = prompt("Introduce un numero para saber que dia de la semana es", "");

            switch (parseInt(respuesta)) {

                case 1:
                    alert("Es lunes");
                    break;
                case 2:
                    alert("Es Martes");
                    break;
                case 3:
                    alert("Es Miercoles");
                    break;
                case 4:
                    alert("Es Jueves");
                    break;
                case 5:
                    alert("Es Viernes");
                    break;
                case 6:

                case 7:
                    alert("Es fin de samana");
                    break;
                default :
                    alert("Este dia no esta en la semana");
                    break;
            }


        </script>

    </body>
</html>
