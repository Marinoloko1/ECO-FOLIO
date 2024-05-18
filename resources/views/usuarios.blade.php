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
            background: -webkit-linear-gradient(to top, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #1D976C;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 10);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: black; 
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
        #logo 
        {
            filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.5));
            color: rgba(255, 0, 0, 1);
        }
    </style>
</head>
<body>
    <header>
        <h1><img src="https://aplicacionesinternas.cecyteg.edu.mx:8084/CentroServicio/logo.php"width="500" id="logo"></h1>
    </header>
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

                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <th>ID</th>
                        <th>     {{ $usuario->nombre }}</th>
                        <th>Uso del dispensador</th>
                        <th>     {{ $usuario->tarjeta }}</th>
                        <th>Intentos restantes</th>
                        <th><a href="/usuarios/{{$usuario->id}}">Ver más</a>  </th>
                    </tr>
               

                @endforeach
                </tbody>
            </table>
        </div>
    </main>


    </body>
</html>
