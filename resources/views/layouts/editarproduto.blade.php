@extends('layouts.app', ["current" => "produtos"])


@section('body')

    <div class="card-border">
        <div class="card-body">
            <form method="POST" action="/produtos/{{$pro->id}}" > 
               
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nome" id="nomeProduto" placeholder="Produto"  value="{{$pro->nome}}"> 
                    <label for="nomeEstoque">Quantidade</label>
                    <input type="text" class="form-control" name="estoque" id="nomeEstoque" placeholder="Quantidade" value="{{$pro->estoque}}"><br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Categorias...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    <label for="nomePreco">Preço do Produto</label>
                    <input type="text" class="form-control" name="preco" id="nomePeco" placeholder="Preço" value="{{$pro->preco}}"><br>
                </div>
                <button type="submit" class="btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn-danger btn-sm">Cancel</button>
            </form>
        </div>
    </div>




@endsection