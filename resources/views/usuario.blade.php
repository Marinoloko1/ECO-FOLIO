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
            background: #1D976C;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #1D976C;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
        agregarUsuario.
        {
            color: white;
        }
        button
        {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #logo 
        {
            filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.5));
            color: rgba(255, 0, 0, 1);
        }
        tbody tr 
        {
        background-color: white;
        }
    </style>
</head>
<body>
    <header> 
    <h1><img src="https://aplicacionesinternas.cecyteg.edu.mx:8084/CentroServicio/logo.php"width="500" id="logo"></h1>
    </header>

    <header></header>

    <main>
        <div class="container">
            <h1>Registro de Usuarios</h1>

            <table>
                <thead>
                    <tr>
                        <th>N. de tarjeta</th>
                        <th>Nombre del usuario</th>
                        <th>Carrera</th>
                        <th>Matricula</th>
                        <th>N. de usos</th>
                        <th>Intentos restantes</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td>{{ $usuario->tarjeta }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->carrera }}</td>
                    <td>{{ $usuario->matricula }}</td>
                    <td>{{ $usuario->usos }}</td>
                    <td>{{ $usuario->intentos }}</td>
                    <td><a href="/usuarios{{$usuario->all}}">Regresar</a></td>
                </tr>
            </tbody>

            </table>
        </div>
    </main>
    
</body>
</html>
