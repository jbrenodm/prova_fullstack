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
            <section id="quiz01">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h2>1/3</h2>
                    </div>
                    <div class="col-12">
                        <div class="d-md-block"></div>
                    </div>
                    <div class="col-12 mt-4 quiz01 form-check-group">
                        <div class="quiz01 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheck1-1">
                            <label class="form-check-label" for="flexCheck1-1"></label>
                        </div>
                        <div class="quiz01 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheck1-2">
                            <label class="form-check-label" for="flexCheck1-2"></label>
                        </div>
                        <div class="quiz01 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheck1-3">
                            <label class="form-check-label" for="flexCheck1-3"></label>
                        </div>
                        <div class="quiz01 form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheck1-4">
                            <label class="form-check-label" for="flexCheck1-4"></label>
                        </div>
                    </div>
                    <div class="col-12 py-2 mt-4">
                         <a href="#" id="btnConferir_quiz01" class="btn btn__disabled-form text-center cyberpunk glitched">CONFERIR</a>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4 d-flex align-items-center justify-content-center">
                        <a href="#" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next" id="btnNext_quiz01">
                            <img src="../../img/seta_direita_ativa.png" alt="Próximo" class="img-fluid">
                        </a>
                    </div>
                </div>
            </section>

            <section id="quiz02">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h2>2/3</h2>
                    </div>
                    <div class="col-12">
                        <div class="d-md-block"></div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio2-1">
                            <label class="form-check-label" for="flexRadio2-1">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio2-2">
                            <label class="form-check-label" for="flexRadio2-2">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio2-3">
                            <label class="form-check-label" for="flexRadio2-3">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio2-4">
                            <label class="form-check-label" for="flexRadio2-4">
                            </label>
                        </div>
                    </div>
                    <div class="col-12 py-2 mt-4">
                        <a href="#" id="btnConferir_quiz02" class="btn btn__disabled-form text-center cyberpunk glitched">CONFERIR</a>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4 d-flex align-items-center justify-content-center">
                        <a href="#" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next" id="btnNext_quiz02">
                            <img src="../../img/seta_direita_ativa.png" alt="Próximo" class="img-fluid">
                        </a>
                    </div>
                </div>
            </section>

            <section id="quiz03">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h2>3/3</h2>
                    </div>
                    <div class="col-12">
                        <div class="d-md-block"></div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio3-1">
                            <label class="form-check-label" for="flexRadio3-1">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio3-2">
                            <label class="form-check-label" for="flexRadio3-2">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio3-3">
                            <label class="form-check-label" for="flexRadio3-3">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio3-4">
                            <label class="form-check-label" for="flexRadio3-4">
                            </label>
                        </div>
                    </div>
                    <div class="col-12 py-2 mt-4">
                        <a href="#" id="btnConferir_quiz03" class="btn btn__disabled-form text-center cyberpunk glitched">CONFERIR</a>
                    </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4 d-flex align-items-center justify-content-center">
                        <a href="#" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next" id="btnNext_quiz03">
                            <img src="../../img/seta_direita_ativa.png" alt="Próximo" class="img-fluid">
                        </a>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <?php include_once '../../lib/footer.php'; ?> 
    <script>
        $(document).ready(function () {
            
            $.getJSON('../../js/quiz.json', function(json) {
                var quiz01 = json[0];
                var quiz02 = json[1];
                var quiz03 = json[2];
                
                // console.log(quiz01.a);
                // console.log( $("#quiz01").find(".d-md-block").html())
                $("#quiz02, #quiz03").hide();
                if(getEtapaConcluida("quiz01")){
                    $("#quiz01").hide();
                    $("#quiz02").show();
                }
                if(getEtapaConcluida("quiz02")){
                    $("#quiz02").hide();
                    $("#quiz03").show();
                }
                
                // FORMULARIO 1/3 CHECKBOX
                $("#quiz01").find(".d-md-block").html(quiz01.question)
                $("#flexCheck1-1").next("label").html(quiz01.a);
                $("#flexCheck1-2").next("label").html(quiz01.b);
                $("#flexCheck1-3").next("label").html(quiz01.c);
                $("#flexCheck1-4").next("label").html(quiz01.d);
                $("#quiz01").find(".col-sm-8").html(quiz01.answerExplanation).hide();
                $("#btnNext_quiz01").hide();
                


                // FORMULARIO 2/3 RADIO
                $("#quiz02").find(".d-md-block").html(quiz02.question)
                $("#flexRadio2-1").next("label").html(quiz02.a);
                $("#flexRadio2-2").next("label").html(quiz02.b);
                $("#flexRadio2-3").next("label").html(quiz02.c);
                $("#flexRadio2-4").next("label").html(quiz02.d);
                $("#quiz02").find(".col-sm-8").html(quiz02.answerExplanation).hide();
                $("#btnNext_quiz02").hide();

                // FORMULARIO 3/3 RADIO
                $("#quiz03").find(".d-md-block").html(quiz03.question)
                $("#flexRadio3-1").next("label").html(quiz03.a);
                $("#flexRadio3-2").next("label").html(quiz03.b);
                $("#flexRadio3-3").next("label").html(quiz03.c);
                $("#flexRadio3-4").next("label").html(quiz03.d);
                $("#quiz03").find(".col-sm-8").html(quiz03.answerExplanation).hide();
                $("#btnNext_quiz03").hide();                            
                
            });

            $("#quiz01").find(".form-check-input").change(function() {                
                var checked = $(".quiz01").find(":checkbox:checked").length;
                var btnConferirClass = $(".quiz01").find(".btn__disabled-form")                
                if(checked > 0) {
                    $("#btnConferir_quiz01").removeClass("btn__disabled-form").addClass("btn__primary");
                } else {
                    $("#btnConferir_quiz01").removeClass("btn__primary").addClass("btn__disabled-form");
                }
            });

            $("#btnConferir_quiz01").click(function() {                
                var checked = $(".quiz01").find(":checkbox:checked").length;

                $("#btnConferir_quiz01").addClass("btn__disabled-form");
                $(".quiz01").find(":checkbox").attr("disabled", true);

                if(checked > 0) {
                    if(checked == 4){
                        $("#quiz01").find("h5").append('&nbsp<span class="badge rounded-pill bg-success"> Correta</span>')
                        setEtapaConcluida("quiz01", "correta");
                    }else{
                        $("#quiz01").find("h5").append('&nbsp<span class="badge rounded-pill bg-danger"> Errada</span>')
                        setEtapaConcluida("quiz01", "errada");
                    }
                    $("#quiz01").find(".col-sm-8").show();
                    $("#quiz01").find(".col-sm-4").hide();
                    $("#btnNext_quiz01").show();
                }
            });

            $("#btnNext_quiz01").click(function() {
                $("#quiz01").hide();
                $("#quiz02").show();
            });

            $("#quiz02").find(".form-check-input").change(function() {
                // Parei aqui
                var checked = $(".quiz02").find("input[name:flexRadio]:checked");
                console.log(checked);
                var btnConferirClass = $(".quiz02").find(".btn__disabled-form")
                if(checked > 0) {
                    $("#btnConferir_quiz02").removeClass("btn__disabled-form").addClass("btn__primary");
                } else {
                    $("#btnConferir_quiz02").removeClass("btn__primary").addClass("btn__disabled-form");
                }
            });            
        });
    </script>
    

</body>

</html>