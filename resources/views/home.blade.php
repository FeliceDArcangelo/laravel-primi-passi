<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Laravel</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1{
            text-align: center;
            font-size: 5rem;
        }
        nav{
            max-width: 1000px;
            margin: auto;
            background-color: rgb(250, 250, 250);
            border-radius: .3em;
        }
        nav ul{
            display: flex;
            justify-content: center;
            gap: 2em;
            list-style: none;
        }

        ul li{
            width: calc((100% - 6em) / 4);
            text-align: center;
        }

        li a{
            text-decoration: none;
            color: black;
        }
        li a:hover{
            text-decoration: underline;
            color: green;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hello Laravel!</h1>
        <nav>
            <ul>
                <li><a href="/chisiamo">Chi siamo</a></li>
                <li><a href="/prodotti">I nostri prodotti</a></li>
                <li><a href="/trovarci">Vieni a trovarci</a></li>
                <li><a href="/contattaci">Contattaci</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>