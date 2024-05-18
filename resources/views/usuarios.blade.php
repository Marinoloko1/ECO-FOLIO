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
body 
{
    font-family: Arial, sans-serif;
    background-image: url("https://www.xtrafondos.com/wallpapers/resized/hoja-verde-con-gotas-11773.jpg?s=large");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
menu
{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 10;
}
nav
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    background: #222;
    border-radius: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
}

nav a
{
    position: relative;
    display: inline-block;
    font-size: 1em;
    font-weight: 500;
    color: white;
    text-decoration: none;
    padding: 0 23px;
    z-index: 1;
}

nav span
{
    position: absolute;
    top: 0;
    left: 450px;
    width: 95px;
    height: 100%;
    background: linear-gradient(45deg, #194b4f, #33fffc);
    border-radius: 0px;
    transition: 0.5s;
}

nav a:nth-child(1):hover~span
{
    left: 450px;
}

nav a:nth-child(2):hover~span
{
    left: 540px;
}

nav a:nth-child(3):hover~span
{
    left: 630px;
}

nav a:nth-child(4):hover~span
{
    left: 720px;
}

nav a:nth-child(5):hover~span
{
    left: 810px;
}

.container {
    max-width: 700px;
    margin: 110px auto 50px auto; 
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 255);
    background-color: rgba(0, 0, 0, .4);
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: white; 
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
    background-color: rgba(180, 180, 180, 10);
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
    filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 255));
    color: rgba(255, 0, 0, 1);
}
tbody tr 
{
    background-color: white;
    color: black;
}

#derechos
{
    position: center;
}
    </style>
</head>
<body>
    <header>
        <h1><img src="https://aplicacionesinternas.cecyteg.edu.mx:8084/CentroServicio/logo.php" width="500" id="logo"></h1>
    </header>

    <nav>
        <a href="" id="menu">Inicio</a>
        <a href="">Inicio</a>
        <a href="">Inicio</a>
        <a href="">Inicio</a>
        <span></span>
    </nav> 

    <main>

        <div class="container">
            <h1>Registro de Usuarios</h1>
            <table>
                <thead>
                    <tr>
                        <th>Grupo</th>
                        <th>Nombre del usuario</th>
                        <th>Uso del dispensador</th>
                        <th>N. de tarjeta</th>
                        <th>Intentos restantes</th>
                        <th>Más detalles</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>     {{ $usuario->grupo}}</td>
                        <td>     {{ $usuario->nombre }}</td>
                        <td>     {{ $usuario->usos }}</td>
                        <td>     {{ $usuario->tarjeta }}</td>
                        <td>     {{ $usuario->intentos }}</td>
                        <td><a href="\usuarios\[[$usuario->id]]"> Ver más</a>  </td>
                    </tr>
                

                @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <div id="derechos">
        <p class="m-0" style="color: white">&#169; DERECHOS RESERVADOS POR ECO-FOLIO</p>
    </div>

</body>
</html>
