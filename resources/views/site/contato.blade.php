
    @extends('site.layout.basico')

    @section('titulo','Contatos')

    @section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
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
                        <button type="submit" class="borda-preta">ENVIAR</button>
                    </form>
                </div>
            </div>  
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.png">
            </div>
        </div>

        
    @endsection