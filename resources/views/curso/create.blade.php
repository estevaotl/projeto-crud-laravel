<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="border-bottom d-flex justify-content-between align-items-center">
                    <h2>Cadastro de Curso</h2>
                    <a class="btn btn-primary" href="{{ route('curso.index') }}">Listar Cursos</a>
                </div>

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $erro)
                            <li class="ms-5">
                                {{$erro}}
                            </li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('curso.store') }}" method="POST">
                    @csrf

                    <div class="form-group mt-2">
                        <label for="nome">Nome do Curso</label>
                        <input type="text" id="nome" name="name" placeholder="Nome" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="descricao">Descrição do Curso</label>
                        <input type="text" id="descricao" name="description" placeholder="Nome" class="form-control" value="{{ old('description') }}">
                    </div>

                    <div class="form-group mt-2">
                        <button class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>