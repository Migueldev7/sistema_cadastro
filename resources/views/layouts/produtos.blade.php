@extends('layouts.app', ["current"=> "produtos"])

@section('body')

<div class="car-border">
    <div class="card-body">
        <h5 class="cart-title">Cadastros de Produtos</h5>
        <table class="table table-ordered table-hover" id="tabelaProdutos">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Departamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
 
            </tbody>
        </table>
     
    </div>
        <div class="card-footer">
        <button href="/produtos/novo" class="btn btn-sm btn-primary" role="button" onClick="NovoProduto()">Novo Produto</a>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formProduto">
                <h5 class="modal-title">Novo Produto</h5>
                <div class="modal-body">
                    <input type="hidden" class="form-control">
                    <div class="form-group">
                        <label for="nomeProduto" class="control-label">Nome do Produto</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeProduto" placeholder="">
                        </div>
                    </div>
                    
                    <input type="hidden" class="form-control">
                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Peço</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="precoProduto" placeholder="Preço">
                        </div>
                    </div>

                    <input type="hidden" class="form-control">
                    <div class="form-group">
                        <label for="quantidadeProduto" class="control-label">Quantidade</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="quantidadeProduto" placeholder="quantidade">
                        </div>

                    </div>
                    <input type="hidden" class="form-control">
                    <div class="form-group">
                        <label for="categoriaProduto" class="control-label">Categorias</label>
                        <div class="input-group">
                            <select  class="form-control" id="categoriaProduto">
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-secodary" data-dissmiss="modal">Cancelar</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    function NovoProduto() {
        $('#id').val('');
        $('#nomeProduto').val('');
        $('#precoProduto').val('');
        $('#quantidadeProduto').val('');
        $('#dlgProdutos').modal('show');
    }
   
        function carregarCategorias() {
        $.getJSON('/api/categorias', function(data) { 
            for(i=0;i<data.length;i++) {
                opcao = '<option value ="' + data[i].id + '">' + 
                    data[i].nome + '</option>';
                $('#categoriaProduto').append(opcao);
            }
        });
    }
        $(function(){
            carregarCategorias();
            carregarProdutos();
        });
        
        function montarLiha() {
            var linha = "<tr>" +
            "<td>" + p.id + "</td>" +
            "<td>" + p.nome + "</td>" +
            "<td>" + p.estoque + "</td>" +
            "<td>" + p.categoria_id + "</td>" +
            "<td>"
                '<button class"btn btn-xs btn-primary">Editar</button>' +
                '<button class"btn btn-xs btn-danger">Apagar</button>' 
            "</td>"
            "</tr>";

            return linha;
        }

        function carregarProdutos(){
            $.getJSON('/api/produtos', function(produtos){
                for(i=0;i<produtos.length;i++) {
                    linh = montarLiha(produtos[i]);
                    $('#tabelaProduts>tbody').append(linha);
                }
            });
        }
</script>

@endsection


    
    
      
