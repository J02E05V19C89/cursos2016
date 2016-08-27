<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script language="JavaScript">
            function VerSeleccion(form)
            {
                var ventana;
                ventana = window.open("", "", 'width= 340,height=150');
                ventana.document.write("<p>Has elegido el siguiente viaje:</p>");
                ventana.document.write("<strong>Salida: </strong>");
                primero = form.salida.selectedIndex;
                if (form.salida.options[primero].value == "")
                {
                    alert("No has elegido ninguna ciudad");
                }
                ventana.document.write(form.salida.options[primero].value + "<br>");
                ventana.document.write("<strong>Llegada :</strong>");

                segundo = form.llegada.selectedIndex;
                ventana.document.write(form.llegada.options[segundo].text + "<br");
                ventana.document.write("<strong>Medio :</strong>");
                for (i = 0; i < form.medio.length; i++)
                {
                    if (form.medio[i].checked)
                    {
                        ventana.document.write(form.medio[i].value + "<br>");
                    }
                }
                ventana.document.close();
            }
        </script>
    </head>
    <body>
        <h1 align="center"><font color="#0000CC">Elige viaje</font></h1>
        <table width="824" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top" bgcolor="#99CCFF"> 
                    <form name="form1" method="post" action="">
                        <p><b>Lugar de Salida</b>: 
                            <select size="1" name="salida">
                                <option value="" selected>Selecciona lugar de salida</option>
                                <option value="Oviedo" >Oviedo</option>
                                <option value="Madrid">Madrid</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Sevilla">Sevilla</option>
                            </select>
                        </p>
                        <p><b>Lugar de llegada :</b> 
                            <select size="3" name="llegada" multiple>
                                <option>Londres</option>
                                <option>Roma</option>
                                <option>París</option>
                                <option selected>Londres</option>
                            </select>
                        </p>
                        <p><b>Medio de transporte: </b> 
                            <input type="radio" value="Avión" checked name="medio">Avión 
                            <input type="radio" name="medio" value="Tren">Tren 
                            <input type="radio" name="medio" value="Autobús">Autobús 
                            <input type="button" value="Ver viaje" name="VER" onClick="VerSeleccion(this.form)">
                        </p>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>
