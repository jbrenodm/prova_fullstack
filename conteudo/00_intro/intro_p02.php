<!DOCTYPE html>
<html lang="pt_BR">
  <head><?php include_once '../../lib/head.php'; ?></head>

  <body>
    <div class="container">
      <section id="intro_02">
        <div class="row intro intro-md">
          
          <div class="col-12 d-flex align-items-end">
            <p class="animate__animated animate__fadeIn">Antes de começar, por favor, insira os seus dados:</p>
          </div>

          <div class="col-12 d-flex align-items-start mt-5">            
            <form id="frmCadastro" class="row g-3 border-left ms-1 animate__animated animate__fadeIn animate__animated animate__fadeIn animate__delay-1s needs-validation" novalidate>
              
              <div class="col-md-12 position-relative mt-0">
                <label for="inputName1" class="form-label mr-2">
                  <span class="color-cyan glow--blue"><i class="fas fa-arrow-right"></i></span></label>
                  <input type="text" class="form-control form-control__styled d-inline" placeholder="Seu Nome" id="inputName1">
              </div>

              <div class="col-md-12 position-relative">
                <label for="inputName2" class="form-label"><span class="color-cyan glow--blue"><i class="fas fa-arrow-right"></i></span></label>
                <input type="text" class="form-control form-control__styled d-inline" placeholder="Sobrenome" id="inputName2">
              </div>

              <div class="col-md-12 position-relative">
                <label for="inputEmail1" class="form-label"><span class="color-cyan glow--blue"><i class="fas fa-arrow-right"></i></span></label>
                <input type="email" class="form-control form-control__styled d-inline" placeholder="E-mail" id="inputEmail1">
                <div class="invalid-feedback"> Por favor, utilize um e-mail valido! </div>
              </div>
              
              <div class="col-md-12 position-relative">
                <label for="inputBirthDate" class="form-label"><span class="color-cyan glow--blue"><i class="fas fa-arrow-right"></i></span></label>
                <input type="text" class="form-control form-control__styled d-inline" placeholder="Data de nascimento" id="inputBirthDate" maxlength="10" minlength="10" >
                <div class="invalid-feedback"> Por favor, utilize uma data valida! </div>
              </div>

            </form>
          </div>

          <div class="py-1 animate__animated animate__fadeIn animate__delay-2s">
            <a href="intro_p01.php" class="btn btn__primary text-center animate__animated animate__bounceIn animate__delay-2s me-5">VOLTAR</a>
            <!-- <a href="intro_p03.php" class="btn btn__primary text-center animate__animated animate__bounceIn animate__delay-2s">CONTINUAR</a> -->
            <a id="btnContinuarP02" class="btn btn__primary text-center animate__animated animate__bounceIn animate__delay-2s d-none">CONTINUAR</a>
          </div>
        </div>
      </section>
    </div>
    <div class="" id="frmDadoUsuario"></div>
    <?php include_once '../../lib/footer.php'; ?> 
    <script src="../../js/intro_p02.js" type="text/javascript"></script>
  </body>

</html>