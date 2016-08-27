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
        <script language="JavaScript">
            Meses = new Array();
            Dias = new Array();
            Meses[0] = "Enero";
            Meses[1] = "Febrero";
            Meses[2] = "Marzo";
            Meses[3] = "Abril";
            Meses[4] = "Mayo";
            Meses[5] = "Junio";
            Meses[6] = "Julio";
            Meses[7] = "Agosto";
            Meses[8] = "Septiembre";
            Meses[9] = "Octubre";
            Meses[10] = "Noviembre";
            Meses[11] = "Diciembre";

            Dias[1] = "Lunes";
            Dias[2] = "Martes";
            Dias[3] = "Miércoles";
            Dias[4] = "Jueves";
            Dias[5] = "Viernes";
            Dias[6] = "Sabado";
            Dias[0] = "Domingo";

            function Convertir(fecha)
            {
                dia = Dias[fecha.getDay()];
                mes = Meses[fecha.getMonth()];
                anio = fecha.getYear();
                if (navigator.appName == "Netscape")
                {
                    anio = anio + 1900;
                }
                return dia + ", " + fecha.getDate() + " de " + mes + " de " + anio;
            }
        </script>
    </head>
    <body>
        <script language="JavaScript">
            document.write(Convertir(new Date()));
        </script> 

    </body>
</html>
