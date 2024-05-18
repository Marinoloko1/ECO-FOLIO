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
    </style>
</head>
<body>
<<<<<<< HEAD
    <header> 
    <img src="logo" style= "width:200px; height:200px;">
    </header>
=======
    <header></header>
    <h1>{{$usuario->nombre}}</h1>
>>>>>>> b0d2e20934dfeb1bb3f7e8ffe781507e69bf1ecf
    <main>
        <button id="regresar" href="\usuario\[[$usuario->all]]"> Regresar </button>
        <div class="container">
            <h1>Registro de Usuarios</h1>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del usuario</th>
                        <th>Uso del dispensador</th>
                        <th>N. de tarjeta</th>
                    </tr>
                </thead>
                <tbody id="usuarios"></tbody>
            </table>
        </div>
    </main>
    
</body>
</html>
