<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Регистрация</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;

            margin: 0;
            padding: 30px;
        }

        .result {
            max-width: 600px;

            margin: 50px auto;

            padding: 30px;

            background: white;

            border-radius: 10px;

            box-shadow:
                0 2px 10px
                rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        p {
            font-size: 18px;
        }

        .back {
            display: inline-block;

            margin-top: 15px;

            padding: 10px 20px;

            background: #536d9b;

            color: white;

            text-decoration: none;

            border-radius: 5px;
        }

    </style>

</head>


<body>

<div class="result">

    <h1>Регистрация завершена</h1>


    <?php

        $fullname =
            htmlspecialchars(
                $_POST["fullname"]
                ?? ""
            );


        $login =
            htmlspecialchars(
                $_POST["login"]
                ?? ""
            );


        $password =
            $_POST["password"]
            ?? "";


        $birthdate =
            htmlspecialchars(
                $_POST["birthdate"]
                ?? ""
            );


        echo "<p><b>ФИО:</b> "
             . $fullname
             . "</p>";


        echo "<p><b>Логин:</b> "
             . $login
             . "</p>";


        echo "<p><b>Пароль:</b> "
             . "********"
             . "</p>";


        echo "<p><b>Дата рождения:</b> "
             . $birthdate
             . "</p>";

    ?>


    <a
        class="back"
        href="index.html"
    >
        Вернуться
    </a>

</div>

</body>

</html>