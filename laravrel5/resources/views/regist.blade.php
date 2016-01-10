<!doctype html>
<html lang="l">
<head>
    <meta charset="UTF-8">
    <title>regist</title>
</head>
<body>
<form action="text" method="get">
    <input type="hidden" name="_token" id="" value="{{csrf_token()}}">
    <input type="text" name="uname" id=""><br>
    <input type="password" name="pwd" id=""><br>
    <button type="submit">提交</button>
</form>
</body>
</html>