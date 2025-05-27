
@extends('site.layout.basico')

@section('titulo','Principal')

@section('conteudo')



<div class="conteudo-destaque">
                
                <div class="contato">
                <h2>Cadastro de Usuário</h2>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    <!-- Formulário para tbServicos -->
                    <h2>Cadastro de Serviço</h2>
                    <form action="{{route('site.servico')}}" method="GET" enctype="multipart/form-data">
                        <label for="cod_usua">Código do Usuário:</label>
                        <input type="number" id="cod_usua" name="cod_usua" required><br><br>

                        <label for="nome_serv">Nome do Serviço:</label>
                        <input type="text" id="nome_serv" name="nome_serv" maxlength="50" required><br><br>

                        <label for="desc_serv">Descrição do Serviço:</label><br>
                        <textarea id="desc_serv" name="desc_serv" maxlength="250" rows="4" cols="50" required></textarea><br><br>

                        <label for="valor_serv">Valor do Serviço (R$):</label>
                        <input type="number" id="valor_serv" name="valor_serv" step="0.01" max="999.99" required><br><br>

                        <label for="imagem_serv">Imagem do Serviço:</label>
                        <input type="file" id="imagem_serv" name="imagem_serv" accept="image/*"><br><br>

                        <input type="submit" value="Cadastrar Serviço">
                    </form>
                    <hr>
                </div>
            



@endsection