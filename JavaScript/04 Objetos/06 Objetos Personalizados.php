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
        <script language="javascript">
            function persona(Nombre, Apellidos, Localidad, Pais)
            {
                this.nombre = Nombre;
                this.apellidos = Apellidos;
                this.localidad = Localidad;
                this.pais = Pais;
                this.obtener_datos = Obtener_datos;
            }
            function Obtener_datos()
            {
                var datos = this.nombre + " " + this.apellidos + " de " + this.localidad + " (" + this.pais + ")";
                return (datos);
            }

        </script>
    </head>

    <body>
        <script language="javascript">
            var yo = new persona("Luis", "Alonso", "Oviedo", "España");
            alert(yo.obtener_datos());
        </script> 
    </body>
</html>
