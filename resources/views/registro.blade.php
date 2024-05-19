<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registrar</title>
    <style>
        html {
            background: url(https://www.xtrafondos.com/wallpapers/flores-a-traves-de-montanas-al-atardecer-9883.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 95%;
        }

        .wrapper {
            position: relative;
            top: 60px;
            width: 350px;
            margin: 0 auto;
            border: 1px solid rgb(241, 241, 241);
            border-radius: 12px;
            padding: 10px 20px;
            background: transparent;
            backdrop-filter: blur(8px);
            box-shadow: 10px 10px 15px 0 rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .wrapper h2 {
            font-size: 25px;
            color: #fffefe
        }

        .input-field {
            position: relative;
        }

        .input-field input[type="text"],
        .input-field input[type="password"] {
            border-radius: 10px;
            background: transparent;
            margin: 15px;
            border: 2px solid rgb(255, 255, 255);
            width: 280px;
            height: 2px;
            padding: 20px 40px 20px 20px;
            backdrop-filter: blur(15px);
        }

        .input-field i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            color: rgb(252, 252, 252);
        }

        input::placeholder {
            color: rgb(255, 255, 255);
        }

        .input-field input[type="text"]:focus::placeholder,
        .input-field input[type="password"]:focus::placeholder {
            transform: translateY(-100%);
            transition: transform 0.2s ease-in-out;
            font-size: 14px;
        }

        .input-field input[type="text"]:not(:focus)::placeholder,
        .input-field input[type="password"]:not(:focus)::placeholder {
            transform: translateY(0%);
            font-size: 16px;
            transition: transform 0.25 ease-in-out;
        }

        a.forgot {
            text-decoration: none;
            position: relative;
            color: rgb(255, 255, 255, 0.712);
        }

        a.forgot:hover {
            text-decoration: underline;
            color: #fffffffd;
        }

        a.sign-up {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.712);
        }

        a.sign-up:hover {
            text-decoration: underline;
            color: #fffffffd;
        }

        .wrapper .registrar {
            background: #ffffff;
            border: none;
            outline: none;
            cursor: pointer;
            font-weight: 600;
            border-radius: 45px;
            width: 200px;
            height: 40px; 
            color: #000000;
            display: block; 
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Bienvenido al CECyTE</h2>
        <form action="#">
            <div class="input-field">
                <input type="text" id="usuario" placeholder="Usuario" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-field">
                <input type="text" id="matricula" placeholder="Matrícula" required>
                <i class='bx bx-credit-card'></i>
            </div>
            <div class="input-field">
                <input type="text" id="grupo" placeholder="Grupo" required>
                <i class='bx bx-group'></i>
            </div>
            <div class="input-field">
                <input type="text" id="carrera" placeholder="Especialidad" required>
                <i class='bx bxs-graduation'></i>
            </div>
            <div class="input-field">
                <input type="text" id="tarjeta" placeholder="No. Tarjeta" required>
                <i class='bx bxs-id-card'></i>
            </div>
            <div class="input-field">
                <input type="text" id="semestre" placeholder="Semestre" required>
                <i class='bx bxs-calendar'></i>
            </div>
            <button type="submit" class="registrar">Guardar</button>
        </form>
    </div>
</body>

</html>
