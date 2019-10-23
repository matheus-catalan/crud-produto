<!DOCTYPE html>
<html lang="pt-br">
 <head>
    @include('layouts.partials.head')
 </head>
 <body>
    @include('layouts.partials.header') 
    <div id="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/produtos">Produtos</a></li>                  
                        <li class="active">Cadastrar</li>
                    </ol>              
                </div>          
            </div>
            <div class="container">  
                <h4 id="center"><b>CADASTRO DE PRODUTOS</b></h4>
                <form enctype="multipart/form-data" method="POST" action="{{route('produtos.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-10">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="preco"> Preço </label>
                        <input type="decimal" name="preco" class="form-control">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" name="quantidade" class="form-control" required>
                    </div>
                    <div class="form-group col-md-10">    
                        <label for="descricao" >Descrição</label>
                        <textarea type="text" name="descricao" class="form-control" rows="6"></textarea>
                    </div>      
                    
                    <div class="form-group col-md-4" id="container">
                            <button class="align-baseline btn btn-success">
                                    <span class="glyphicon glyphicon-floppy-disk"> Salvar </span>
                            </button>
                        </div>
                </form>             
            </div>
        
    </div>

    
 </body>
</html>