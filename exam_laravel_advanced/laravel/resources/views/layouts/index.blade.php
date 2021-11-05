<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
</head>
<body>
    <form action="/thanks" method="POST">
        <table>
            @csrf
            <tr>
                <th>名前</th>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <th>メール</th>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </form>
</body>
</html>
