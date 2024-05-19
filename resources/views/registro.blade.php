<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registrar</title>
</head>

<style>
    body {
        background: url(https://www.xtrafondos.com/wallpapers/resized/zorro-saltando-11837.jpg?s=large) no-repeat;
        background-position: center;
        background-size: cover;
        width: 400px;
        height: 600px;
    }

    .wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        height: 350px;
        text-align: center;
        border: 1px solid rgb(241, 241, 241);
        border-radius: 12px;
        padding: 10px 20px;
        background: transparent;
        backdrop-filter: blur(6px);
        box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.5);
    }

    .wrapper h2 {
        font-size: 30px;
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

    .wrapper .Login {
        background: #fff;
        border: none;
        outline: none;
        cursor: pointer;
        font-weight: 600;
        border-radius: 45px;
        width: 200px;
        height: 30px;
    }
</style>

<body>
    <div class="wrapper">
        <h2>Bienvenido</h2>
        <form action="#">
            <div class="input-field">
                <input type="text" id="usuario" placeholder="Usuario" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-field">
                <input type="password" id="matricula" placeholder="Matrícula" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <a href="#" class="forgot">
                <p>¿Has olvidado tu matrícula?</p>
            </a>
            <button type="submit" class="login">Acceder</button>
        </form>
    </div>
</body>

</html>
