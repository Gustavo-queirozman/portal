<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/configuracaoSMS" method="post">
        @csrf
        <input type="text" name="empresa" placeholder="empresa">
        <input type="text" name="api_token" placeholder="Api token">
        <input type="text" name="modelo_sms" placeholder="modelo sms">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
