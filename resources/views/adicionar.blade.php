<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>DIO LABS - Laravel JWT</title>
  </head>
  <body>

    {{-- ERROS de Validação --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <h1>Adicionar CEP</h1>
        <form action="{{ route('salvar') }}" method="POST">
            @csrf

            <div class="form-group">
              <label>CEP</label>
              <input type="text" class="form-control" name="cep" value="{{$cep}}">
            </div>

            <div class="form-group">
              <label>Logradouro</label>
              <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
            </div>

            <div class="form-group">
                <label>Número</label>
                <input type="text" class="form-control" name="numero">
            </div>

            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
            </div>

            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
            </div>

            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control" name="estado" value="{{$estado}}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
