
@extends('site.layout.basico')

@section('titulo','Principal')

@section('conteudo')



<div class="conteudo-destaque">
                
                <div class="contato">
                <h2>Cadastro de Loja</h2>
                    <!-- Formulário para tbServicos -->
                    
                    <form action="{{route('site.loja')}}.php" method="GET" enctype="multipart/form-data">
                        <label for="cnpj_loja">CNPJ da Loja:</label>
                        <input type="text" id="cnpj_loja" name="cnpj_loja" maxlength="15" required><br><br>

                        <label for="nome_loja">Nome da Loja:</label>
                        <input type="text" id="nome_loja" name="nome_loja" maxlength="50" required><br><br>

                        <label for="imagem_loja">Imagem da Loja:</label>
                        <input type="file" id="imagem_loja" name="imagem_loja" accept="image/*"><br><br>

                        <label for="cod_usua_loja">Código do Usuário:</label>
                        <input type="number" id="cod_usua_loja" name="cod_usua" required><br><br>

                        <label for="desc_loja">Descrição da Loja:</label><br>
                        <textarea id="desc_loja" name="desc_loja" maxlength="255" rows="4" cols="50"></textarea><br><br>

                        <label for="end_loja">Endereço:</label>
                        <input type="text" id="end_loja" name="end_loja" maxlength="100"><br><br>

                        <label for="email_loja">Email:</label>
                        <input type="email" id="email_loja" name="email_loja" maxlength="50" required><br><br>

                        <label for="cel_loja">Celular:</label>
                        <input type="text" id="cel_loja" name="cel_loja" maxlength="13"><br><br>

                        <label for="tel_loja">Telefone:</label>
                        <input type="text" id="tel_loja" name="tel_loja" maxlength="13"><br><br>

                        <label for="tag_loja">Tag da Loja:</label>
                        <input type="text" id="tag_loja" name="tag_loja" maxlength="50"><br><br>

                        <input type="submit" value="Cadastrar Loja">
                    </form>
                    <hr>
                </div>
            



@endsection