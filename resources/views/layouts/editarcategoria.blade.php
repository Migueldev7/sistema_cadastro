@extends('layouts.app', ["current" => "produtos"])


@section('body')

    <div class="card-border">
        <div class="card-body">
            <form method="POST" action="/categorias/{{$cat->id}}" > 
               
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <input type="text" class="form-control" name="nome" id="nomeCategoria" placeholder="Categoria" value="{{$cat->nome}}"> 
                </div>
                <button type="submit" class="btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn-danger btn-sm">Cancel</button>
            </form>
        </div>
    </div>




@endsection