<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi calculadora</title>
        <script>
            function calcular(numero1, numero2) {
                while (aux != 1) {
                    operacion = prompt("Listado de operaciones: \n + sumar \n - restar \n * multiplicar \n / dividir \n % modulo ", "");

                    switch (operacion) {
                        case "+" :
                            document.write(numero1 + numero2);
                            aux = 1;
                            break;
                        case "-" :
                            document.write(numero1 - numero2);
                            aux = 1;
                            break;
                        case "*" :
                            document.write(numero1 * numero2);
                            aux = 1;
                            break;
                        case "/" :
                            document.write(numero1 / numero2);
                            aux = 1;
                            break;
                        case "%" :
                            document.write(numero1 % numero2);
                            aux = 1;
                            break;
                        default :
                            document.write("La operacion no es valida");
                            break;

                    }
                }
            }
        </script>
    </head>
    <body>
        <script>
            var operacion;
            var numero1;
            var numero2;
            var aux = "";

            do {
                numero1 = prompt("Introduzca el primer numero");
                if (isNaN(numero1)) {
                    alert("Introduzca un valor correcto");
                }

            } while (isNaN(numero1))


            do {
                numero2 = prompt("Introduzca el segundo numero");
                if (isNaN(numero2)) {
                    alert("Introduzca un valor correcto");
                }

            } while (isNaN(numero2))
            calcular(parseInt(numero1), parseInt(numero2));
        </script>

    </body>
</html>
