<!DOCTYPE html>
<html lang="pt_BR">
  
  <head>
    <?php 
      $index = true;
      include_once 'lib/head.php'; 
    ?>
  </head>

  <body>
    <div class="container"> 
      <section id="intro_01">
        <div class="row intro">
          <div class="col-12 d-flex align-items-center justify-content-center"> 
            <h1 class="title title__effect text-center">
              Segurança
              <br>
              da Informação
            </h1>
          </div>
          <div class="col-12 d-flex justify-content-center">
            <div class="card card__intro card__border animate__animated animate__zoomIn" id="box1">
              <div class="card-header card__header"> (1) MENSAGEM DO SISTEMA </div>
              <div class="card-body"> 
                <p class="card-text card__text">
                  As ameaças encontradas na internet têm consequências reais.<br>
                  Aprenda como se prevenir.
                </p>
                <div class="d-flex justify-content-center py-3">
                  <a href="conteudo/00_intro/intro_p01.php" class="btn btn__primary text-center animate__animated animate__bounceIn">
                    CLIQUE PARA COMEÇAR
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div> 

    <?php include_once 'lib/footer.php'; ?>    
  </body>
</html>