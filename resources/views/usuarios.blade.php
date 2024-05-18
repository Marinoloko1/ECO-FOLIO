<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="module" src="js/bootstrap.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #52c234;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061700, #52c234);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061700, #52c234); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #52c234;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061700, #52c234);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061700, #52c234); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 10);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #4CAF50; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
            font-family: Arial, sans-serif;
        }

        input[type="submit"] {
            background-color: #4CAF50; 
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049; 
        }

        .ver-mas {
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }

        .ver-mas:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <header></header>
    <main>
        <div class="container">
            <h1>Registro de Usuarios</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del usuario</th>
                        <th>Uso del dispensador</th>
                        <th>N. de tarjeta</th>
                        <th>Intentos restantes</th>
                        <th>Ver más</th>
                    </tr>
                </thead>
                <tbody id="usuarios"></tbody>
            </table>
        </div>
    </main>
    <script>
        var registroTarjetas = {};

        function agregarUsuario(id, nombre, usoDispensador, numeroTarjeta, intentosRestantes) {
            var usuariosTbody = document.getElementById("usuarios");

            var usuarioRow = document.createElement("tr");
            var datosUsuario = [id, nombre, usoDispensador, numeroTarjeta, intentosRestantes];
            datosUsuario.forEach(function(dato) {
                var td = document.createElement("td");
                td.textContent = dato;
                usuarioRow.appendChild(td);
            });

            var verMasTd = document.createElement("td");
            var verMasLink = document.createElement("a");
            verMasLink.textContent = "Ver más";
            verMasLink.className = "ver-mas";
            verMasLink.href = "C:\Users\x\Desktop\proyectos\ECO-FOLIO\resources\views\usuario.blade.php" + encodeURIComponent(nombre); 
            verMasTd.appendChild(verMasLink);
            usuarioRow.appendChild(verMasTd);

            usuariosTbody.appendChild(usuarioRow);

            if (intentosRestantes <= 0) {
                usuarioRow.style.backgroundColor = "#ffcccc"; 
            }
        }

        function actualizarIntentosRestantes(numeroTarjeta) {
            if (registroTarjetas[numeroTarjeta]) {
                registroTarjetas[numeroTarjeta]--;
                return registroTarjetas[numeroTarjeta];
            } else {
                registroTarjetas[numeroTarjeta] = 2; 
                return registroTarjetas[numeroTarjeta];
            }
        }

        function tarjetaNFCdetectada(numeroTarjeta) {
            document.getElementById("numeroTarjeta").value = numeroTarjeta;
        }

        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                tarjetaNFCdetectada("1234567890"); 
            }, 1500);
        });
        agregarUsuario("123", "Maria Fernanda", "1 de 3", "1234567890");
    </script>
</body>
</html>
