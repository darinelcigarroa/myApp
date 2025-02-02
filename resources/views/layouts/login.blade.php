<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        .content-form {
            max-width: 200px;
        }
        .form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="content-form">
        <form action="/login" method="POST" class="form">
            @csrf
            <input type="text" name="mail" placeholder="mail">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>