<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/configuracaoEmail" method="post">
        @csrf
        <input type="text" name="servidor" placeholder="servidor">
        <input type="text" name="porta" placeholder="porta">
        <input type="text" name="seguranca" placeholder="seguranca">
        <input type="text" name="usuario" placeholder="usuario">
        <input type="text" name="senha" placeholder="senha">
        <input type="text" name="email" placeholder="email">
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
