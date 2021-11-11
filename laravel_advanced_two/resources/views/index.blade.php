<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/thank" method="POST">
        @csrf
        <div class="name">
            <label for="name">氏名<br>
                <input type="text" name="name">
            </label>
        </div>
        <div class="email">
            <label for="email">メールアドレス<br>
                <input type="text" name="email">
            </label>
        </div>
        <div class="btn">
            <input type="submit" value="送信する">
        </div>
    </form>
</body>
</html>
