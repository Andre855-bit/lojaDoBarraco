
@extends('site.layout.basico')

@section('titulo','Principal')

@section('conteudo')



<div class="conteudo-destaque">
                
                <div class="contato">
                <h2>Cadastro de Usuário</h2>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    <form action="{{route('site.usuario')}}" method="GET">
                    
                        <label for="nome_usua">Nome:</label>
                        <input type="text" id="nome_usua" name="nome_usua" maxlength="50" required><br><br>

                        <label for="login_usua">Login:</label>
                        <input type="text" id="login_usua" name="login_usua" maxlength="20" required><br><br>

                        <label for="senha_usua">Senha:</label>
                        <input type="password" id="senha_usua" name="senha_usua" maxlength="12" required><br><br>

                        <label for="end_usua">Endereço:</label>
                        <input type="text" id="end_usua" name="end_usua" maxlength="50" required><br><br>

                        <label for="profis_usua">Profissão:</label>
                        <input type="text" id="profis_usua" name="profis_usua" maxlength="30" required><br><br>

                        <label for="email_usua">Email:</label>
                        <input type="email" id="email_usua" name="email_usua" maxlength="50" required><br><br>

                        <label for="tel_usua">Telefone:</label>
                        <input type="tel" id="tel_usua" name="tel_usua" pattern="\d{10}" placeholder="Somente números"><br><br>

                        <label for="cel_usua">Celular:</label>
                        <input type="tel" id="cel_usua" name="cel_usua" pattern="\d{10}" required placeholder="Somente números"><br><br>

                        <label for="cpf_usua">CPF:</label>
                        <input type="text" id="cpf_usua" name="cpf_usua" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required placeholder="000.000.000-00"><br><br>

                        <label for="sexo_">Sexo:</label>
                        <select id="sexo_" name="sexo_">
                        <option value="X" selected>Não informar</option>
                        <option value="F">Feminino</option>
                        <option value="M">Masculino</option>
                        </select><br><br>

                        <input type="submit" value="Cadastrar">
                    </form>
                </div>
            



@endsection