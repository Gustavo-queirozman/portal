<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('configuracao-email') }}" method="post">
        @csrf
        <input type="text" name="servidor" placeholder="servidor" value="{{ isset($configuracao)?$configuracao['servidor']: '' }}">
        <input type="text" name="porta" placeholder="porta" value="{{ isset($configuracao)?$configuracao['porta']: '' }}">
        <input type="text" name="seguranca" placeholder="seguranca" value="{{ isset($configuracao)?$configuracao['seguranca']: '' }}">
        <input type="text" name="usuario" placeholder="usuario" value="{{ isset($configuracao)?$configuracao['usuario']: '' }}">
        <input type="text" name="senha" placeholder="senha" value="{{ isset($configuracao)?$configuracao['senha']: '' }}">
        <input type="text" name="email" placeholder="email" value="{{ isset($configuracao)?$configuracao['email']: '' }}">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
