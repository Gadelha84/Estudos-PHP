<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="/assets/css/estilo.css"/>
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="/exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="/exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="/exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="/exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="/exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="/exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="/exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="/exercicio.php?dir=tipos&file=aritimeticas">Operações Aritiméticas</a></li>
                        <li><a href="/exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedencia</a></li>
                        <li><a href="/exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="/exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="/exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                        <li><a href="/exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li><a href="/exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Dasafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio Pi</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Op. Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternário</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Modulo 05</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Modulo 06</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>Modulo 07</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Modulo 08</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>Modulo 09</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        C0D3R & ALUNOS &copy; <?= date('Y'); ?>
    </footer>
</body>
</html>