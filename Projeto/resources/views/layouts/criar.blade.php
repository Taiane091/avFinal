<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar clientes</title>
</head>
<body>
    <form action='{{route("cadastrar_cliente")}}'method='POST'>
        @csrf
        <label>Nome</label>
        <input type='text' name='nome' id='nome'>
        <label for ="">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <label for ="">Cidade</label>
        <input type="text" name="cidade" id="cidade">
        <label for ="">Produto desejado</label>
        <input type="text" name="produto_desejado" id="produto_desejado">
        <label for ="">Tipo de compra</label>
        <input type="text" name="tipo_de_compra" id="tipo_de_compra">
        <button type="submit">Cadastrar</button>
        
</body>
</html>