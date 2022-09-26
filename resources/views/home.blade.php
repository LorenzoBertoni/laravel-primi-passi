<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            width: 100%;
            padding: 1rem .5rem;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0 50px;
        }

        ul {
            display: flex;
            gap: 20px;
        }

        li {
            list-style: none;
        }

        h1, a {
            text-decoration: none; 
            color: #fff;
            text-align: center;
        }
    </style>


    <header>
        <h1>
            {{$message}}
        </h1>
        <ul>
            @foreach ($navLinks as $link)
                <li>
                    <a href="{{route($link['url'])}}">
                        {{$link['name']}}
                    </a>
                </li>
            @endforeach
        </ul>
    </header>
</body>
</html>