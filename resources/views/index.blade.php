@extends('layouts.app', ["current" => "home"])

@section('body')
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de produtos</h5>
                    <p class="card-text">Aqui voce cadastra todos os seus produtos</p>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">Aqui voce cadastra todos os suas Categorias</p>
                        <a href="/Categorias" class="btn btn-primary">Cadastre seus Categorias</a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection