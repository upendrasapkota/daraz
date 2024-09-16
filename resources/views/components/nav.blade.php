<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            padding: 10px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            text-align: center;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
            }

            .navbar a {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="/user">User</a>
    <a href="/product">Product</a>
    <a href="/order">Order</a>
    <a href="/categories">Category</a>
</div>

</body>
</html>
