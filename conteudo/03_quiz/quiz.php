<!DOCTYPE html>
<html lang="pt_BR">

<head><?php include_once '../../lib/head.php'; ?></head>

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
                        <div class="col-2 d-flex align-items-center">
                            <input type="checkbox" name="c1" id="overlay-input" />
                            <label for="overlay-input" id="overlay-button"><span></span></label>
                            <!--MENU-->
                            <div id="overlay">
                                <ul class="menu">
                                    <li><a href="../../index.php">Início</a></li>
                                    <li><a href="../01_aula01/aula01_p01.php">Aula 01</a></li>
                                    <li><a href="../03_quiz/quiz.php" role="button" class="btn btn__link">Quiz</a></li>
                                </ul>
                            </div>
                            <!--FIM MENU-->
                        </div>
                    </div>
                </div>
            </nav>
        </section>
    </div>
    <div class="container top-80">
        <div class="aulas aulas-md">
            <section id="quiz">
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
                                                <h4>Quiz</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="questions"></div>        
        </div>
    </div>
    <?php include_once '../../lib/footer.php'; ?>
    <script>
        $(document).ready(function () {
            $.getJSON('quiz.json', function(json) {
                var html = ""; 
                Object.keys(json).forEach(function(quiz){                    
                    
                    // console.log(json[quiz].question);                    

                    html += `<section id="`+json[quiz].id+`">
                                <div class="row">                
                                    <div class="col-12 mb-3">
                                        <h2>`+json[quiz].number+`/3</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-md-block">`;
                    html+=                  json[quiz].question;                      
                    html+= `            </div>
                                    </div>
                                    <div class="col-12 mt-4 `+(json[quiz].type == "checkbox" ? json[quiz].id+" form-check-group" : "" )+`">
                                        <div class="`+(json[quiz].type == "checkbox" ? json[quiz].id : "" )+` form-check">
                                            <input class="form-check-input"  type="`+json[quiz].type+`" `+(json[quiz].type == "radio" ? 'name="flexRadio"' : 'value=""' )+`  id="flex`+json[quiz].shotType+`1-1">
                                            <label class="form-check-label" for="flex`+json[quiz].shotType+`1-1">`;
                    html+=                      json[quiz].a;
                    html+= `                </label>
                                        </div>
                                        <div class="`+(json[quiz].type == "checkbox" ? json[quiz].id : "" )+` form-check">
                                            <input class="form-check-input" type="`+json[quiz].type+`" `+(json[quiz].type == "radio" ? 'name="flexRadio"' : 'value=""' )+` id="flex`+json[quiz].shotType+`1-2">
                                            <label class="form-check-label" for="flex`+json[quiz].shotType+`1-2">`;
                    html+=                      json[quiz].b;
                    html+= `                </label>
                                    </div>
                                    <div class="`+(json[quiz].type == "checkbox" ? json[quiz].id : "" )+` form-check">
                                        <input class="form-check-input"  type="`+json[quiz].type+`" `+(json[quiz].type == "radio" ? 'name="flexRadio"' : 'value=""' )+` id="flex`+json[quiz].shotType+`1-3">
                                            <label class="form-check-label" for="flex`+json[quiz].shotType+`1-3">`;
                    html+=                      json[quiz].c;                                            
                    html+= `                </label>
                                    </div>
                                    <div class="`+(json[quiz].type == "checkbox" ? json[quiz].id : "" )+` form-check">
                                        <input class="form-check-input"  type="`+json[quiz].type+`" `+(json[quiz].type == "radio" ? 'name="flexRadio"' : 'value=""' )+` id="flex`+json[quiz].shotType+`1-4">
                                        <label class="form-check-label" for="flex`+json[quiz].shotType+`1-4">`;
                    html+=                      json[quiz].d;                                            
                    html+= `            </label>
                                    </div>
                                </div>
                                <div class="col-12 py-2 mt-4"> <a href="#" class="btn btn__disabled-form text-center cyberpunk glitched">CONFERIR</a></div>
                                <div class="col-sm-8">`
                    html+=                      json[quiz].answerExplanation;
                    html+=`     </div>
                                <div class="col-sm-4 d-flex align-items-center justify-content-center">
                                <a href="#" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next" id="btnNext">
                                    <img src="../../img/seta_direita_ativa.png" alt="Próximo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </section>`;                    
                });
                console.log(html);
                $("#questions").html(html);            
            });                      
        });
    </script>

</body>

</html>