<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('configuracao-sms') }}" method="post">
        @csrf
        <input type="text" name="empresa" placeholder="empresa" value="{{ isset($configuracao)? $configuracao['empresa']:'' }}">
        <input type="text" name="api_token" placeholder="Api token" value="{{ isset($configuracao['api_token'])? $configuracao['api_token']:'' }}">
        <input type="text" name="modelo_sms" placeholder="modelo sms" value="{{ isset($configuracao['modelo_sms'])? $configuracao['modelo_sms']:'' }}">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
