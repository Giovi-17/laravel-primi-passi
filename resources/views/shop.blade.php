<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <style>

        h1{

            text-align: center

        }

        ul{
            
            width: 100%;
            height: 50px;
            list-style-type: none;
            display: flex;
            justify-content: center;

        }

        li{

            margin: 0 10px;

        }

        a{

            text-decoration: none;
            color: black;

        }

    </style>

    <div>

        <ul>

            <li><a href="{{ route("homepage") }}">Home</a></li>
            <li><a href="{{ route("info") }}">Info</a></li>
            <li><a href="">Partner</a></li>

        </ul>

    </div>

    <h1>Shop</h1>
    
</body>
</html>