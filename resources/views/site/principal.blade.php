
    @extends('site.layout.basico')

    @section('titulo','Principal')

    @section('conteudo')

        <div class="conteudo-destaque">
        
            <div class="esquerda">
                <div class="informacoes">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="chamada">
                        <img src="/img/check.png">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="img/player_video.jpg">
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    <form action="{{route('site.contato')}}" method="GET">
                        <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                        <br>
                        <input type="text" name="telefone" placeholder="Telefone" class="borda-preta">
                        <br>
                        <input type="text" name="email" placeholder="E-mail" class="borda-preta">
                        <br>
                        <select name="motivo_contato" class="borda-preta">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="1">Dúvida</option>
                            <option value="2">Elogio</option>
                            <option value="3">Reclamação</option>
                        </select>
                        <br>
                        <textarea class="borda-preta" placeholder>Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="borda-branca">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>

        
    @endsection
