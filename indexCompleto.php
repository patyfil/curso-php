<?php

require_once "configuracoes.php";

function verificaLogado()
{
    if (!isset($_SESSION["usuario_logado"])) {
        //se não estiver logado, vai redirecionar para a pág de login(login.php) 
        header("Location: login.php");
    }

    $pessoa = unserialize($_SESSION["usuario_logado"]);
    return $pessoa;
}

session_start();
$pessoa = verificaLogado(); //chamada da função

?>

<!--Esta é a página pessoal do usuário-->
<!DOCTYPE html />
<html lang="pt-BR" />

<head>
    <meta charset="UTF-8" />
    <title>Home - Logado</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <!-- ícones  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/7ae77fe78b.js" crossorigin="anonymous"></script>
    <!--  fontes  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <!--barra superior con os icones e logo - tipo cabeçalho -->
    <nav>
        <div class="navbar">

            <div class="navEsq">
                <div class="item">
                    <div class="tooltip">Voltar</div>
                    <div class="icon"><a href="login.php"><i class="fa-regular fa-circle-left" alt="Botão Voltar"></i></a></div>
                </div>
                <h1>WeCode</h1>
            </div>

            <div class="navCentro">
                <input type="text" class="pesquisar-box" placeholder="Pesquisar">
            </div>

            <div class="navDir">
                <div class="item">
                    <div class="tooltip"><?php echo $pessoa->getNick() ?></div>
                    <div class="icon"><?php echo $pessoa->getFoto() ?></div>
                    <!-- <img src="img/cheetara.jpg" alt="" /> -->
                </div>
                <div class="item">
                    <div class="tooltip">Home</div>
                    <div class="icon"><a href="index.php"><i class="fa-solid fa-house-chimney" alt="Botão Página Inicial"></i></a></div>
                </div>
                <div class="item">
                    <div class="tooltip">Mensagem</div>
                    <div class="icon"><a href="messenger.php"><i class="fa-regular fa-comments" alt="Botão Mensagem"></i></a></div>
                </div>
                <div class="item">
                    <div class="tooltip">Adicionar</div>
                    <div class="icon"><a href="add.php"><i class="fa-regular fa-square-plus" alt="Botão Adicionar"></i></a></div>
                </div>
                <div class="item">
                    <div class="tooltip">Favoritos</div>
                    <div class="icon"><a href="favoritos.php"><i class="fa-regular fa-heart" alt="Botão Favoritos"></i></a></div>
                </div>
                <div class="item">
                    <div class="tooltip">Sair</div>
                    <!-- <div class="icon"><a href="index.php?acao=sair"><i class="fa-solid fa-right-from-bracket" alt="Botão Sair"></i></a></div> -->
                    <div class="icon"><a href="sair.php" class="icone"><i class="fa-solid fa-right-from-bracket" alt="Botão Sair"></i></a></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sessão do Status   -->
    <section class="principal-1">
        <div class="involucro">
            <div class="col-esquerda">
                <div class="status-involucro">
                    <div class="status-card">
                        <div class="perfil-pic"><img src="img/cheetara.jpg" alt="" /></div>
                        <p class="nomeUsuario">Cheetara</p>
                    </div>
                    <div class="status-card">
                        <div class="perfil-pic"><img src="img/aang.jpg" alt="" /></div>
                        <p class="nomeUsuario">Aang</p>
                    </div>
                    <div class="status-card">
                        <div class="perfil-pic"><img src="img/mestre-dos-magos.jpg" alt="" /></div>
                        <p class="nomeUsuario">Mestre_dos_Magos</p>
                    </div>
                    <div class="status-card">
                        <div class="perfil-pic"><img src="img/diana.jpg" alt="" /></div>
                        <p class="nomeUsuario">Diana</p>
                    </div>
                    <div class="status-card">
                        <div class="perfil-pic"><img src="img/Lion-O.png" alt="" /></div>
                        <p class="nomeUsuario">Lion-O</p>
                    </div>
                    <div class="status-card">
                        <div class="perfil-pic"><img src="img/feiticera.jpg" alt="" /></div>
                        <p class="nomeUsuario">Feiticera</p>
                    </div>
                    <div class="status-card">
                        <div class="perfil-pic"><img src="img/jaspion.jpg" alt="" /></div>
                        <p class="nomeUsuario">Jaspion</p>
                    </div>
                    <div class="status-card">
                        <div class="perfil-pic"><img src="img/naruto.jpg" alt="" /></div>
                        <p class="nomeUsuario">Naruto</p>
                    </div>
                </div>
            </div>
    </section>


    <!-- Sessão - Posts da coluna esquerda (coluna-esquerda) -->
    <section class="principal-2">
        <div class="involucro">
            <div class="col-esquerda">
                <div class="nomeuser">
                    <h1>Seja bem-vindo(a)!</h1>
                    <h2><?php echo $pessoa->getNome(); ?></h2>
                </div>
                <div class="publicacao">
                    <div class="info">
                        <div class="usuario">
                            <div class="perfil-pic"><img src="img/cheetara.jpg" alt="" /></div>
                            <p class="nomeUsuario">Cheetara</p>
                        </div>
                        <img src="img/option.PNG" class="opcoes" alt="" />
                    </div>
                    <img src="img/grace-hopper.jpg" class="publicar-imagem" alt="" />
                    <div class="publicar-conteudo">
                        <div class="reacao-contenitor">
                            <img src="img/like.PNG" class="icone" alt="" />
                            <img src="img/comment.PNG" class="icone" alt="" />
                            <img src="img/send.PNG" class="icone" alt="" />
                            <img src="img/save.PNG" class="salvar icone" alt="" />
                        </div>
                        <p class="curtidas">2,011 curtidas</p>
                        <p class="descricao"><span>Cheetara</span> Nós devemos muito à cientista da computação e almirante da
                            Marinha dos EUA Grace Hopper. Em 1944, ela foi uma das primeiras programadoras do gigantesco computador Mark
                            I, o primeiro computador eletromecânico automático de larga escala. Além disso, ela inventou o primeiro
                            compilador para uma linguagem de programação e dirigiu o programa de desenvolvimento da primeira linguagem
                            de programação voltada ao uso comercial. – o COBOL. O termo “bug” (inseto, em inglês) para indicar um
                            problema técnico no computador foi cunhado por Hopper, quando em uma ocasião ela teve que remover uma
                            mariposa de dentro da máquina.</p>
                        <p class="publicado-tempo">Há 2 minutos</p>
                    </div>
                    <div class="comentario-contenitor">
                        <img src="img/smile.PNG" class="icone" alt="" />
                        <input type="text" class="comentario-box" placeholder="Adicione um comentário" />
                        <button class="comentario-btn">Publicar</button>
                    </div>
                </div>
                <div class="publicacao">
                    <div class="info">
                        <div class="usuario">
                            <div class="perfil-pic"><img src="img/naruto.jpg" alt="" /></div>
                            <p class="nomeUsuario">Naruto</p>
                        </div>
                        <img src="img/option.PNG" class="opcoes" alt="" />
                    </div>
                    <img src="img/index.php.png" class="publicar-imagem" alt="" />
                    <div class="publicar-conteudo">
                        <div class="reacao-contenitor">
                            <img src="img/like.PNG" class="icone" alt="" />
                            <img src="img/comment.PNG" class="icone" alt="" />
                            <img src="img/send.PNG" class="icone" alt="">
                            <img src="img/save.PNG" class="salvar icone" alt="" />
                        </div>
                        <p class="curtidas">1,873 curtidas</p>
                        <p class="descricao"><span>Naruto </span>Ontem eu decidi reescrever um código que o professor ensinou na ultima aula
                            o recurso do SESSION, SERVER e aprendi o que é "mockar"</p>
                        <p class="publicado-tempo">Há 13 minutos</p>
                    </div>
                    <div class="comentario-contenitor">
                        <img src="img/smile.PNG" class="icone" alt="" />
                        <input type="text" class="comentario-box" placeholder="Adicione um comentário" />
                        <button id="publicar" class="comentario-btn">Publicar</button>
                    </div>
                </div>
                <div class="publicacao">
                    <div class="info">
                        <div class="usuario">
                            <div class="perfil-pic"><img src="img/feiticera.jpg" alt="" /></div>
                            <p class="nomeUsuario">Feiticera</p>
                        </div>
                        <img src="img/option.PNG" class="opcoes" alt="" />
                    </div>
                    <img src="img/codekid.jpg" class="publicar-imagem" alt="" />
                    <div class="publicar-conteudo">
                        <div class="reacao-contenitor">
                            <img src="img/like.PNG" class="icone" alt="" />
                            <img src="img/comment.PNG" class="icone" alt="" />
                            <img src="img/send.PNG" class="icone" alt="" />
                            <img src="img/save.PNG" class="salvar icone" alt="" />
                        </div>
                        <p class="curtidas">1,250 curtidas</p>
                        <p class="descricao"><span>Feiticera</span> As crianças de hoje são nativas de um mundo completamente
                            digital, e estão encontrando na programação ferramentas para construírem o mundo que querem habitar.</p>
                        <p class="publicado-tempo">Há 34 minutos</p>
                    </div>
                    <div class="comentario-contenitor">
                        <img src="img/smile.PNG" class="icone" alt="" />
                        <input type="text" class="comentario-box" placeholder="Adicione um comentário" />
                        <button id="publicar" class="comentario-btn">Publicar</button>
                    </div>
                </div>
                <div class="publicacao">
                    <div class="info">
                        <div class="usuario">
                            <div class="perfil-pic"><img src="img/Lion-O.png" alt="" /></div>
                            <p class="nomeUsuario">Lion-O</p>
                        </div>
                        <img src="img/option.PNG" class="opcoes" alt="" />
                    </div>
                    <img src="img/eng-software.jpg" class="publicar-imagem" alt="" />
                    <div class="publicar-conteudo">
                        <div class="reacao-contenitor">
                            <img src="img/like.PNG" class="icone" alt="" />
                            <img src="img/comment.PNG" class="icone" alt="" />
                            <img src="img/send.PNG" class="icone" alt="" />
                            <img src="img/save.PNG" class="salvar icone" alt="" />
                        </div>
                        <p class="curtidas">2,040 curtidas</p>
                        <p class="descricao"><span>Lion-O </span> O engenheiro de software cuida de toda a parte técnica e científica
                            dos sistemas, desde o desenvolvimento até a gestão. Ele pode cuidar tanto das aplicações visíveis aos usuários
                            (que é chamada de front-end) quanto dos bastidores –– nesse caso, o back-end.</p>
                        <p class="publicado-tempo">Há 57 minutos</p>
                    </div>
                    <div class="comentario-contenitor">
                        <img src="img/smile.PNG" class="icone" alt="" />
                        <input type="text" class="comentario-box" placeholder="Adicione um comentário" />
                        <button id="publicar" class="comentario-btn">Publicar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Sessão - Recomendaçoes - (coluna-direita)  -->
    <section class="principal">
        <div class="involucro">
            <div class="col-direita">
                <div class="perfil-ficha">
                    <div class="perfil-pic">
                        <img src="img/profile-pic.jpg" alt="" />
                    </div>
                    <div>
                        <p class="nomeUsuario">Sabedoria_de_Ioda</p>
                        <p class="sub-texto">Rodrigo Cezario</p>
                    </div>
                    <button class="acao-btn">Mudar</button>
                </div>
                <p class="sugestao-texto">Sugestões para você</p>
                <div class="perfil-ficha">
                    <div class="perfil-pic">
                        <img src="img/legopaty2.jpg" alt="" />
                    </div>
                    <div class="nomeuser">
                        <p class="nomeUsuario">Patrícia_Souza</p>
                        <p class="sub-texto">Seguido(a) por Diana</p>
                    </div>
                    <button class="acao-btn">Seguir</button>
                </div>
                <div class="perfil-ficha">
                    <div class="perfil-pic">
                        <img src="img/legodouglas.jpg" alt="" />
                    </div>
                    <div class="nomeuser">
                        <p class="nomeUsuario">Douglas_Fairbanks</p>
                        <p class="sub-texto">Seguido(a) por Jaspion</p>
                    </div>
                    <button class="acao-btn">Seguir</button>
                </div>
                <div class="perfil-ficha">
                    <div class="perfil-pic">
                        <img src="img/legomaikel.jpg" alt="" />
                    </div>
                    <div class="nomeuser">
                        <p class="nomeUsuario">Maikel_Morales</p>
                        <p class="sub-texto">Segue você</p>
                    </div>
                    <button class="acao-btn">Seguir</button>
                </div>
                <div class="perfil-ficha">
                    <div class="perfil-pic">
                        <img src="img/legosav.jpg" alt="" />
                    </div>
                    <div class="nomeuser">
                        <p class="nomeUsuario">Savana_Kurupan</p>
                        <p class="sub-texto">Segue você</p>
                    </div>
                    <button class="acao-btn">Seguir</button>
                </div>
                <div class="perfil-ficha">
                    <div class="perfil-pic">
                        <img src="img/mestre-dos-magos.jpg" alt="" />
                    </div>
                    <div class="nomeuser">
                        <p class="nomeUsuario">Mestre_dos_Magos</p>
                        <p class="sub-texto">Segue você</p>
                    </div>
                    <button class="acao-btn">Seguir</button>
                </div>
            </div>
        </div>
    </section>

</body>

</html>