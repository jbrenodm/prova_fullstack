<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <?php 
            include_once '../../lib/head.php';
            if(isset($_SESSION['nomeUsuario'])){
                $nomeCurto = (explode(" ", $_SESSION['nomeUsuario']));
                $nomeCurto = $nomeCurto[0]." ".$nomeCurto[count($nomeCurto) - 1];
            }else{                
                header('Location: ../../index.php');
            }           
        ?>
    </head>

    <body class="bg-aulas">
        <div class="container-fluid px-0">
            
        <section id="nav">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark vw-100">
                <div class="container-md">
                    <div class="row vw-100 pe-4 justify-content-between">
                        <div class="col-7 d-flex align-items-center">
                            <h4 class="title title__effect ms-4">Segurança <span class="no-wrap">da Informação</span>
                            </h4>
                        </div>
                        <!--MENU-->
                        <div class="col-2 d-flex">
                            <input type="checkbox" name="c1" id="overlay-input" />
                            <label for="overlay-input" id="overlay-button"><span></span></label>
                            <div id="overlay">
                                <ul>
                                    <li><a href="../../index.php">Início</a></li>
                                    <li><a href="aula01_p01.php">Aula 01</a></li>
                                    <li id="menuQuiz"><a href="../03_quiz/quiz.php" role="button" class="btn btn__link">Quiz</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--FIM MENU-->
                    </div>
                </div>
            </nav>
        </section>

        <div class="container top-80">
            <div class="aulas aulas-md">
                
                <section id="aula01-01">                    
                    <div class="row">
                        <div class="col-12 mt-5 mb-3 fit-height">
                            <div class="table__border">
                                <div class="table table__title mb-0">
                                    <table width="210" border="0">
                                        <tbody>
                                            <tr>
                                                <td><i class="fas fa-circle"></i></td>
                                                <td class="table__text-spacing">==============</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="table__title-td">
                                                    <h4>Aula 01</h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3 fit-height">
                            <h2>Segurança da <span class="no-wrap">informação 101</span></h2>
                        </div>
                        <div class="col-12 mb-5 fit-height">
                            <!-- AQUI -->
                            <h4><strong><span class="color__light-purple"><?php echo $nomeCurto;?></span></strong>, vamos começar pelo básico._</h4>
                            <div class="border-left">
                                <p>
                                    O avanço tecnológico facilita e melhora nossas vidas de inúmeras maneiras. 
                                    Mas ele também nos deixa mais vulneráveis às ameaças encontradas na internet, que estão crescendo de forma assustadora. 
                                </p>
                                <p>
                                    Veja a seguir alguns exemplos de como esses ataques estão cada vez mais frequentes.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="carousel">
                    <div class="row ">
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <a href="#" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev" id="btnPrev">
                                <img id="imgBtnPrev" src="../../img/seta_esquerda_ativa.png" alt="Anterior" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-8">
                            <div id="carouselCaptions" class="carousel slide m-auto" data-bs-ride="carousel" data-bs-interval="false">
                                <div class="center-block">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-flex  text-center">
                                                <div class="d-md-block">
                                                    <h5>CENTRAL DE NOTÍCIAS</h5>
                                                    <p>Atualizado em Setembro de 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-flex align-items-center">
                                                <div class="d-md-block">
                                                    <p>
                                                        O <strong>Ministério da Economia</strong> sofreu um ataque hacker. 
                                                        O alvo foi a rede interna da Secretaria do Tesouro Nacional, que foi infectada com um ransomware.
                                                        Esse tipo de ataque age como um “sequestrador virtual”, 
                                                        roubando arquivos e exigindo uma quantia em criptomoedas para a liberação. 
                                                        A pasta não divulgou quais arquivos foram criptografados.
                                                    </p>
                                                    <a href="https://apps.canalmeio.com.br/meio/news/r/OTE1NDk=/MTg2ODU=" class="carousel__link" target="_blank">G1</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-flex align-items-center">
                                                <div class="d-md-block">
                                                    <p>
                                                        <strong>Um ataque na Renner</strong> derrubou os sistemas e o site oficial da rede. 
                                                        Os criminosos cobravam um resgate em torno de US$ 1 bilhão (R$ 5,24 bilhões) para liberar os sistemas criptografados da empresa. 
                                                        De acordo com a rede varejista, a maior parte das operações foram restabelecidas e o banco de dados foi preservado.
                                                    </p>
                                                    <a href="https://apps.canalmeio.com.br/meio/news/r/OTIwNTE=/MTg2ODU=" class="carousel__link" target="_blank">Canaltech</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-flex align-items-center">
                                                <div class="d-md-block">
                                                    <p>
                                                        <strong>O ataque hacker</strong> que derrubou o e-commerce da Renner acendeu um alerta para os riscos da cibersegurança no Brasil e uma possível “pandemia” de ransonware. 
                                                        Segundo a ISH Tecnologia, 13 mil empresas são atacadas mensalmente, 
                                                        sendo 57% com ataques do tipo ransomware - que pedem resgate em dinheiro às companhias. 
                                                        Em 2020, os valores cobrados pelos criminosos saltaram 82%, chegando a US$ 570 mil por ocorrência.
                                                    </p>
                                                    <a href="https://apps.canalmeio.com.br/meio/news/r/OTIyMzg=/MTg2ODU=" class="carousel__link" target="_blank">Época Negócios</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-flex align-items-center">
                                                <div class="d-md-block">
                                                    <p>
                                                        <strong>Os ataques hackers</strong> de grandes proporções tornaram-se uma ameaça para empresas e instituições governamentais no mundo inteiro. 
                                                        Segundo dados da RiskIQ, empresa de cibersegurança com sede em São Francisco, 
                                                        bastam 60 segundos para que empresas de todo o globo sofram 648 ameaças hackers de qualquer tipo ou terem 525 mil dados comprometidos.
                                                    </p>
                                                    <p>Além disso, as companhias têm mais de US$ 1 milhão em perdas por minuto devido aos incidentes de segurança. 
                                                        Ou seja, mitigar ciberataques custa tempo, profissionais especializados e dinheiro para as companhias. 
                                                        Por isso, conhecer as vulnerabilidades da sua empresa é fundamental para ficar à frente das ameaças.
                                                    </p>
                                                    <a href="https://apps.canalmeio.com.br/meio/news/r/OTI1NzY=/MTg2ODU=" class="carousel__link" target="_blank">RiskIQ</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel__news"></div>
                                            <div class="carousel-caption d-flex align-items-center">
                                                <div class="d-md-block">
                                                    <p>
                                                        <strong>Em mais um caso</strong> de vazamento de dados, 
                                                        o Detran-SP (Departamento Estadual de Trânsito de São Paulo) sofreu um suposto ciberataque. 
                                                        Uma base de dados com 2 milhões de linhas compostas por informações sensíveis de motoristas, 
                                                        como nome completo, número do documento e placa do carro, foi colocada à venda no mercado ilegal.
                                                    </p>
                                                    <a href="https://apps.canalmeio.com.br/meio/news/r/OTE2NDQ=/MTg2ODU=" class="carousel__link" target="_blank">TecMundo</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-flex align-items-center">
                                                <div class="d-md-block">
                                                    <p>
                                                        Mais uma empresa de grande porte sofreu ataque hacker. Desta vez, a Accenture. 
                                                        Um grupo conhecido como LockBit teria obtido acesso a seis terabytes de arquivos da
                                                        companhia e exigido o pagamento de US$ 50 bilhões em criptomoedas.
                                                    </p>
                                                    <a href="https://apps.canalmeio.com.br/meio/news/r/OTEzNDY=/MTg2ODU=" class="carousel__link" target="_blank">Canaltech</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" disabled></button>
                                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2" disabled></button>
                                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3" disabled></button>
                                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="3" aria-label="Slide 4" disabled></button>
                                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="4" aria-label="Slide 5" disabled></button>
                                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="5" aria-label="Slide 6" disabled></button>
                                        <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="6" aria-label="Slide 7" disabled></button>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <a href="#" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next" id="btnNext">
                            <img id="imgBtnNext" src="../../img/seta_direita_ativa.png" alt="Próximo" class="img-fluid"></a>
                        </div>
                    </div>
                </section>
                <!-- FIM DO CARROUSEL -->

                <section id="mouse">
                    <div class="row">
                        <div class="col-12 my-5 d-flex justify-content-center">
                            <div class="mouse text-center">
                                <!-- -->
                                <div class="arrow-down">
                                    <!-- -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center color__grey mb-5"> <small>Role para baixo</small> </div>
                    </div>
                </section>

            </div>
        </div>

            <div class="container">
                <div class="aulas aulas-md">
                    <section>
                        <div id="aula01-02" class="row">
                            <div class="col-12">
                                <div class="embed-container animate__animated animate__fadeIn">
                                    <iframe
                                        src="https://player.vimeo.com/video/589907288?h=d6c636a27f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                        frameborder="0" allow="autoplay;  picture-in-picture" allowfullscreen
                                        title="Teaser Trilha de Transformação Digital V1">
                                    </iframe>
                                </div>
                                <div class="col-12 py-5 px-2" id="subtitle">
                                    <p class="mb-4 animate__animated animate__fadeIn animate__delay-2s">Aperte <kbd class="text-danger">[c]</kbd> para continuar ou clique no botão abaixo._</p>
                                    <div class="col-12 py-2 visually-hidden" id="showBtn"> 
                                        <a href="#" class="btn btn__primary text-center cyberpunk glitched">CONTINUAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="container-fluid bg-color__white">
                <section class="d-flex justify-content-center">
                    <div id="aula01-03" class="row text-dark p-5">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <div class="d-md-block">
                                <figure><img src="../../img/img01_aula01.png" class="img-fluid" width="471" height="676" alt="Figura" /></figure>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="d-md-block w-70">
                                <h5>Seu primeiro passo é saber que não está seguro.</h5>
                                <p>
                                    Um problema muito comum é você achar que não corre riscos ao navegar na internet, ao
                                    supor que nenhum criminoso terá interesse em utilizar seus dispositivos, ou que
                                    ninguém irá identificar seus equipamentos em meio a tantos outros.
                                </p>
                                <p> 
                                    Pois é exatamente esse sentimento que atrai os atacantes, já que os usuários acabam
                                    não adotando as medidas de prevenção necessárias para uma navegação segura.
                                </p>
                                <h5>A ilusão de segurança costuma terminar quando os primeiros problemas começam a acontecer.</h5>
                                <p>
                                    Muitas vezes, os atacantes estão interessados em acessar grandes quantidades de computadores, 
                                    independentemente de quais são. Para isto, podem efetuar varreduras na rede e localizar computadores conectados à Internet. 
                                </p>
                                <p>Inclusive o seu, <span class="color__light-purple"><?php echo $nomeCurto;?></span>. (; </p>
                                <h5>Você não vai querer que isso aconteça com você. </h5>
                                <p>
                                    Um problema de segurança em seu computador pode torná-lo indisponível e colocar em
                                    risco os dados armazenados. Além disso, ao ser comprometido, seu computador também
                                    pode ser usado para atividades maliciosas como, por exemplo, servir de repositório
                                    para dados fraudulentos, lançar ataques contra outros computadores (e, assim,
                                    esconder a real identidade e localização do atacante), propagar códigos maliciosos e
                                    disseminar spam.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container">
                <div class="aulas-md">
                    <section>
                        <div id="aula01-04" class="row">
                            <div class="col-12">
                                <h4>Os principais riscos</h4>
                                <p>
                                    Dentre os riscos mais comuns que você pode se deparar ao navegar na internet, o Centro de
                                    Estudos, Resposta e Tratamento de Incidentes de Segurança no Brasil (CERT.br) destaca:
                                </p>
                                <p class="color__light-purple">Clique no baralho de cartas para revelar seus conteúdos. </p>
                            </div>

                            <div class="d-md-flex my-5">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a type="button" onclick="baralhoCards()">
                                                <figure class="m-3"><img src="../../img/baralho_active.png" alt="Baralho">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="col-12  d-flex justify-content-center">
                                            <div id="baralhoMiniCards">
                                                <figure class="m-3"><img src="../../img/carta_numeros_disabled.png" alt="Baralhos"></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 d-flex justify-content-start position-relative">
                                    <div class="baralho__texto visually-hidden" id="baralhoCard">

                                    </div>
                                    <figure class="m-3"><img src="../../img/baralho_carta.png" class="img-fluid" alt="Texto no baralho"></figure>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <section id="mouse2">
                        <div class="row">
                            <div class="col-12 my-5 d-flex justify-content-center">
                                <div class="mouse text-center">
                                    <!-- -->
                                    <div class="arrow-down"></div>
                                </div>
                            </div>
                            <div class="col-12 text-center color__grey mb-5"> <small>Role para baixo</small> </div>
                        </div>
                    </section>
                </div>
            </div>

            <div  class="container">
                <div class="aulas-md">
                    <section>
                        <div id="aula01-05" class="row">
                            <div class="col-12 d-md-block">
                                <h4>O que é feito online gera consequências na vida real</h4>
                                <p>
                                    O primeiro passo para se prevenir dos riscos relacionados ao uso da internet é estar ciente de que eles não são “virtuais”. 
                                    Tudo o que ocorre ou é realizado por meio da internet é real: os dados, 
                                    as empresas e pessoas com quem você interage são as mesmas que estão fora dela.
                                </p>
                                <p>
                                    Os riscos aos quais você está exposto ao usá-la são os mesmos presentes no seu dia a dia e 
                                    os golpes que são aplicados por meio dela são similares àqueles que ocorrem na rua ou por telefone.
                                </p>
                                <h4>Se cada um fizer sua parte, a internet vai se tornar um ambiente mais seguro para todos.</h4>
                                <p>
                                    Para tentar reduzir os riscos e se proteger, você deve adotar uma postura preventiva e
                                    incorporar a atenção com a segurança à sua rotina, independentemente do local, tecnologia ou meio utilizado.
                                </p>
                            </div>
                            <div class="col-12 d-flex justify-content-center my-5">
                                <div class="card card__intro card__border animate__animated animate__zoomIn" id="box1">
                                    <div class="card-header card__header"> (1) MENSAGEM DO SISTEMA </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 px-3"> <img src="../../img/icon_baralho.png"
                                                    alt="Ícone baralho" class="animate__animated animate__bounce img-fluid">
                                            </div>
                                            <div class="flex-grow-1 ms-3 card__text">
                                                <p class="color__cyan">
                                                    <strong>Bom começo, <?php echo $nomeCurto;?>!</strong></p>
                                                <p>
                                                    Você conquistou o certificado “Segurança da informação 101”. 
                                                    No próximo módulo, vamos falar sobre uma das questões mais graves e complexas da sociedade atual. 
                                                    Um problema que eu e você temos nossa parcela de responsabilidade.
                                                </p>
                                            </div>
                                        </div>
                                        <div id="03_quiz" class="d-flex justify-content-center py-3">
                                            <a href="../03_quiz/quiz.php" class="btn btn__primary text-center animate__animated animate__bounceIn">IR PARA O QUIZ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <br><br>
            </div>
            <?php include_once '../../lib/footer.php'; ?> 
            <script src="https://player.vimeo.com/api/player.js"></script>
            <script src="../../js/aula01_p01.js"></script>
    </body>

</html>