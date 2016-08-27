<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Métodos privados</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" type="text/css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script>
            function Persona(dni, nombre) {
                var _this = this; //Utilizamos esta forma para solventar el problema de que los metodos privados no puedan llamar metodos publicos
                var edad = 0;
                var edadParaSaludar = 1;

                this.dni = dni;
                this.nombre = nombre;

                // Métodos que accedan a las propiedades o métodos privados aquí.
                function envejecer() {
                    edad++;
                    if (edad >= edadParaSaludar)
                    {
                        _this.saludar('');                        
                    }
                }

                Persona.prototype.crecer = function () { // esta funcion es una especie de get para la funcion envejecer
                    envejecer();
                }
            }
            Persona.prototype.saludar = function (nombre) {
                console.log(this.nombre + ' te saluda ' + nombre);
            }
            var yo = new Persona('1', 'Marcos');
            console.log(yo.edad);
            // devuelve undefined ya que edad no se encuentra en el objeto 
            // al no estar declarada a través de this

            yo.saludar('Pepito');
            yo.crecer();

        </script>
    </body>
</html>