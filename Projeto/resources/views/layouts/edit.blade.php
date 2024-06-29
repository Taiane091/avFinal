<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<form action="{{route('alterar_cliente', ['id'=>$cliente->id])}}" method="POST">
    @csrf
<label for="">Clientes</label>
<input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
<input type="text" name="telefone" id="telefone" value="{{$cliente->telefone}}">
<input type="text" name="cidade" id="cidade" value="{{$cliente->cidade}}">
<input type="text" name="produto_desejado" id="produto_desejado" value="{{$cliente->produto_desejado}}">
<button type="submit">Editar</button>
</form>

</body>

</html>