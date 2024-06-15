@extends('main')
@section ('Conteudo')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome">
  </div>
  <div class="col-md-6">
    <label for="inputNumber" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="inputNumber">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Ex:Curitiba">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Produto desejado</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Roupas, tênis ou suplementos">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Tipo de compra</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Virtual ou presencial">>
  </div>
 
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
@endsection