<div>
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Novos Usuários</title>
    <link rel="stylesheet" href="{{asset('asset/css/estilo.css')}}">
</head>
<body>
<main>
    <div class="logo">
        <h1></h1> 
        <img class="logo_drone"  src="{{asset('imagens/logo.png')}}" >

    </div>

    @csrf
    <form action="{{route('register')}}" method="POST">
        <fieldset>
            <legend>Informações Pessoais</legend>
            <label for="primeiro_nome">Primeiro Nome:</label>
            <input type="text" id="primeiro_nome" name="primeiro_nome" required>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required><br/>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br/><br/>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="email">Senha:</label>
            <input type="password" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone">
        </fieldset>

        <fieldset>
            <legend>Endereço</legend>
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" onchange="buscarInformacoesCEP(this.value)" required>
        
            <label for="logradouro">Logradouro:</label>
            <input type="text" id="logradouro" name="logradouro" required>
        
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>
        
            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento">
        
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" required>
        
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>
        
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required>
        </fieldset>
        

        <fieldset>
            <legend>Cargo</legend>
            <label for="cargo">Selecione o seu cargo:</label>
            <select id="cargo" name="cargo">
                <option value="reporter">Repórter</option>
                <option value="editor">Editor</option>
                <option value="blogueiro">Blogueiro</option>
                <option value="criador_conteudo">Criador de Conteúdo</option>
                <option value="produtor">Produtor</option>
                <option value="editor_chefe">Editor Chefe</option>
                <option value="jornalista">Jornalista</option>
                <option value="apresentador">Apresentador</option>
                <option value="administrador">Administrador</option>
                <option value="colunista">Colunista</option>
                <option value="diretor">Diretor</option>
                <option value="podcaster">Podcaster</option>
                <option value="freelancer">Freelancer</option>
                <option value="streamer">Streamer</option>
                <option value="reviewer">Reviewer</option>
                <option value="social_media">Social Media</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Trabalha em Mídia</legend>
            <label for="midia">Selecione onde trabalha:</label>
            <select id="midia" name="midia">
                <option value="blog">Blog</option>
                <option value="canal_youtube">Canal Youtube</option>
                <option value="radio">Rádio</option>
                <option value="tv">TV</option>
                <option value="redes_sociais">Redes Sociais</option>
                <option value="site">Site</option>
                <option value="agencia">Agência</option>
                <option value="noticias">Notícias</option>
                <option value="canal_twitch">Canal Twitch</option>
                <option value="podcast">Podcast</option>
                <option value="jornal">Jornal</option>
                <option value="revista">Revista</option>
            </select>
        </fieldset>
<fieldset>
    <legend>Editoria (Escolha até duas)</legend>
    <label for="editoria1">Primeira Editoria:</label>
    <select id="editoria1" name="editoria1">
        <option value="">Escolha uma opção</option>
        <option value="entretenimento">Entretenimento</option>
        <option value="variedade">Variedade</option>
        <option value="games">Games</option>
        <option value="tecnologia">Tecnologia</option>
        <option value="esporte">Esporte</option>
        <option value="e-sport">E-Sport</option>
        <option value="veiculos">Veículos</option>
        <option value="life_style">Life Style</option>
        <option value="educacao">Educação</option>
        <option value="negocios">Negócios</option>
        <option value="politica">Política</option>
        <option value="agenda">Agenda</option>
        <option value="turismo">Turismo</option>
        <option value="propaganda_e_marketing">Propaganda e Marketing</option>
        <option value="teen">Teen</option>
        <option value="moda">Moda</option>
        <option value="beleza">Beleza</option>
        <option value="mercado">Mercado</option>
        <option value="canal">Canal</option>
        <option value="economia">Economia</option>
        <option value="saude">Saúde</option>
        <option value="meio_ambiente">Meio Ambiente</option>
        <option value="casa_e_construcao">Casa e Construção</option>
        <option value="infantil">Infantil</option>
    </select>
    <label for="editoria2">Segunda Editoria (opcional):</label>
    <select id="editoria2" name="editoria2">
        <option value="">Escolha uma opção</option>
        <option value="entretenimento">Entretenimento</option>
        <option value="variedade">Variedade</option>
        <option value="games">Games</option>
        <option value="tecnologia">Tecnologia</option>
        <option value="esporte">Esporte</option>
        <option value="e-sport">E-Sport</option>
        <option value="veiculos">Veículos</option>
        <option value="life_style">Life Style</option>
        <option value="educacao">Educação</option>
        <option value="negocios">Negócios</option>
        <option value="politica">Política</option>
        <option value="agenda">Agenda</option>
        <option value="turismo">Turismo</option>
        <option value="propaganda_e_marketing">Propaganda e Marketing</option>
        <option value="teen">Teen</option>
        <option value="moda">Moda</option>
        <option value="beleza">Beleza</option>
        <option value="mercado">Mercado</option>
        <option value="canal">Canal</option>
        <option value="economia">Economia</option>
        <option value="saude">Saúde</option>
        <option value="meio_ambiente">Meio Ambiente</option>
        <option value="casa_e_construcao">Casa e Construção</option>
        <option value="infantil">Infantil</option>
    </select>
</fieldset>

<fieldset>
    <legend>Tipo de Conteúdo e Periodicidade</legend>
    <label for="tipo_conteudo1">Primeiro Tipo de Conteúdo:</label>
    <select id="tipo_conteudo1" name="tipo_conteudo1">
        <option value="">Escolha uma opção</option>
        <option value="coberturas">Coberturas</option>
        <option value="entrevistas">Entrevistas</option>
        <option value="atracoes_palco">Atrações Palco</option>
        <option value="noticias">Notícias</option>
        <option value="tutorial">Tutorial</option>
        <option value="reviews">Reviews</option>
        <option value="materias">Matérias</option>
        <option value="listas">Listas</option>
        <option value="gameplay">Gameplay</option>
        <option value="artigos">Artigos</option>
        <option value="comparativos">Comparativos</option>
        <option value="pod_casts">Podcasts</option>
        <option value="agenda">Agenda</option>
        <option value="vitrine">Vitrine</option>
        <option value="coluna">Coluna</option>
        <option value="eventos">Eventos</option>
        <option value="dicas">Dicas</option>
    </select>
    <label for="periodicidade1">Periodicidade:</label>
    <select id="periodicidade1" name="periodicidade1">
        <option value="">Escolha uma opção</option>
        <option value="diario">Diário</option>
        <option value="segunda_a_sexta">Segunda a Sexta-feira</option>
        <option value="segunda">Segunda-feira</option>
        <option value="terca">Terça-feira</option>
        <option value="quarta">Quarta-feira</option>
        <option value="quinta">Quinta-feira</option>
        <option value="sexta">Sexta-feira</option>
        <option value="sabado">Sábado</option>
        <option value="domingo">Domingo</option>
        <option value="semanal">Semanal</option>
        <option value="mensal">Mensal</option>
        <option value="bimestral">Bimestral</option>
        <option value="semestral">Semestral</option>
        <option value="anual">Anual</option>
    </select>
    <br>
    <label for="tipo_conteudo2">Segundo Tipo de Conteúdo (opcional):</label>
    <select id="tipo_conteudo2" name="tipo_conteudo2">
        <option value="">Escolha uma opção</option>
        <option value="coberturas">Coberturas</option>
        <option value="entrevistas">Entrevistas</option>
        <option value="atracoes_palco">Atrações Palco</option>
        <option value="noticias">Notícias</option>
        <option value="tutorial">Tutorial</option>
        <option value="reviews">Reviews</option>
        <option value="materias">Matérias</option>
        <option value="listas">Listas</option>
        <option value="gameplay">Gameplay</option>
        <option value="artigos">Artigos</option>
        <option value="comparativos">Comparativos</option>
        <option value="pod_casts">Podcasts</option>
        <option value="agenda">Agenda</option>
        <option value="vitrine">Vitrine</option>
        <option value="coluna">Coluna</option>
        <option value="eventos">Eventos</option>
        <option value="dicas">Dicas</option>
    </select>
    <label for="periodicidade2">Periodicidade:</label>
    <select id="periodicidade2" name="periodicidade2">
        <option value="">Escolha uma opção</option>
        <option value="diario">Diário</option>
        <option value="segunda_a_sexta">Segunda a Sexta-feira</option>
        <option value="segunda">Segunda-feira</option>
        <option value="terca">Terça-feira</option>
        <option value="quarta">Quarta-feira</option>
        <option value="quinta">Quinta-feira</option>
        <option value="sexta">Sexta-feira</option>
        <option value="sabado">Sábado</option>
        <option value="domingo">Domingo</option>
        <option value="semanal">Semanal</option>
        <option value="mensal">Mensal</option>
        <option value="bimestral">Bimestral</option>
        <option value="semestral">Semestral</option>
        <option value="anual">Anual</option>
    </select>
</fieldset>
       <fieldset>
            <legend>Trabalha para Veículo</legend>
            <label for="nome_empresa">Nome da Empresa:</label>
            <input type="text" id="nome_empresa" name="nome_empresa" placeholder="Nome da empresa que você trabalha">

            <label for="url_empresa">URL:</label>
            <input type="url" id="url_empresa" name="url_empresa" placeholder="URL do site da empresa"><br/><br/>

            <label for="explicacao_empresa">Explicação:</label>
            <textarea id="explicacao_empresa" name="explicacao_empresa" rows="4" placeholder="Descreva brevemente sobre a empresa"></textarea>
        </fieldset>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Seu formulário de registro aqui -->
        
            <fieldset>
                <legend>Termos de Uso</legend>
                <label>
                    <input type="checkbox" id="aceito_termos" name="aceito_termos" required>
                    Eu li e aceito os <a href="{{ route('terms') }}" target="_blank">termos de uso</a>
                </label>
            </fieldset>
        
            <input type="submit" value="Cadastrar">
        </form>
        
        
        