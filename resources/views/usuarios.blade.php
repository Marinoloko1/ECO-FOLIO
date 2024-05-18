<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="module" src="js/bootstrap.js"></script>
</head>

<style>
    body   
    {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container 
    {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1
    {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .row 
    {
        margin-bottom: 20px;
    }

    .col 
    {
        padding: 10px;
    }

    input[type="text"], input[type="number"] 
    {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    input[type="submit"] 
    {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover 
    {
        background-color: #45a049;
    }

    table 
    {
        width: 100%;
        border-collapse: collapse;
    }

    th, td 
    {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th 
    {
        background-color: #f2f2f2;
    }
</style>

<body>
    <header></header>

    <main>
        <div class="container">
            <div class="row">
                
            </div>

            <div id="usuarios"></div>
        </div>
    </main>

    <script>
        var registroTarjetas = {}; 

        function agregarUsuario(id, nombre, usoDispensador, numeroTarjeta) {
            var usuariosDiv = document.getElementById("usuarios");

            var tabla = document.createElement("table");
            tabla.classList.add("usuarios-table");

            var encabezados = ["ID", "Nombre del usuario", "Uso del dispensador", "N. de tarjeta"];
            var encabezadosRow = document.createElement("tr");
            encabezados.forEach(function(encabezado) {
                var th = document.createElement("th");
                th.textContent = encabezado;
                encabezadosRow.appendChild(th);
            });
            tabla.appendChild(encabezadosRow);

            var usuarioRow = document.createElement("tr");
            var datosUsuario = [id, nombre, usoDispensador, numeroTarjeta];
            datosUsuario.forEach(function(dato) {
                var td = document.createElement("td");
                td.textContent = dato;
                usuarioRow.appendChild(td);
            });
            tabla.appendChild(usuarioRow);

            usuariosDiv.appendChild(tabla);

            if (registroTarjetas[numeroTarjeta]) {
                registroTarjetas[numeroTarjeta]++;
                if (registroTarjetas[numeroTarjeta] >= 3) {
                    alert("Ya no puede registrarse más veces con esta tarjeta.");
                }
            } else {
                registroTarjetas[numeroTarjeta] = 1;
            }
        }

        agregarUsuario("123", "Maria Fernanda", "1 de 3", "1234567890");
    </script>
</body>
</html>
