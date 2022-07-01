<!DOCTYPE html>
<html lang="pt_BR">
    <head><?php include_once '../../lib/head.php'; ?></head>
    <body>
      <div class="container">
        <section id="intro_04">
          <div class="row intro">
            <div class="col-12 d-flex align-items-center justify-content-center"> </div>
            <div class="col-12 d-flex justify-content-center">
              <div class="card card__intro card__border animate__animated animate__zoomIn">
                <div class="card-header card__header"> ALERTA! </div>
                <div class="card-body">                  
                  <div class="row d-flex justify-content-center px-3">
                    
                    <div class=" col-12 card-text card__text">
                      <div id="textoSeguranca">
                        <p>
                          <strong>Upload de informações de segurança da informação</strong>
                          <br>
                          Descompactando aulas… 
                          <span id="cursos">Fake news</span>
                        </p>
                      </div>
                    </div>
                    
                    <div class="my-3 px-0 border__dark-blue animate animate__typewriter is-started">
                      <img src="../../img/loading_full.png" alt="carregando..." class="img-fluid">
                    </div>

                  </div>
                  <div class="d-flex justify-content-center py-3">
                    <a href="intro_p02.php" class="btn btn__primary text-center cyberpunk glitched me-5">VOLTAR</a>
                    <a href="../01_aula01/aula01_p01.php" class="btn btn__primary text-center cyberpunk glitched disabled" id="btnContinuarP04">CONTINUAR</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>        
      </div>
      <?php include_once '../../lib/footer.php'; ?> 

      <script>
        $(document).ready(function () {
          // Janela Loading
          
          setTimeout(continuar, 8000)

          function continuar() {
              document.querySelector("#btnContinuarP04").classList.remove('disabled')
              document.querySelector('#textoSeguranca').innerHTML = `
              <p><strong>Inicializando treinamento em Segurança da Informação v.2.021</strong><br><span class="text-info">Instalação completa.</span></p>
              `
          }
        });        
      </script>
    </body>
</html>