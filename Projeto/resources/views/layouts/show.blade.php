<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos clientes</title>
</head>
<body>
<label for="">Clientes</label>
<input type="text" name="cliente" id="cliente" value="{{$cliente->nome}}">
<input type="text" name="cliente" id="cliente" value="{{$cliente->telefone}}">
<input type="text" name="cliente" id="cliente" value="{{$cliente->cidade}}">
<input type="text" name="cliente" id="cliente" value="{{$cliente->produto_desejado}}">
</body>
</html>