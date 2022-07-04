<!DOCTYPE html>
<html lang="pt_BR">

    <head><?php include_once '../../lib/head.php'; ?></head>

    <body>
        <div class="container">
            <section id="intro_01">
                <div class="row intro intro-md">
                    <div class="col-12 d-flex align-items-end">
                        <h2 class="title pb-5" id="title1">
                        </h2>
                    </div>
                    <div class="col-12 ch-60 position-relative">
                        <div class="output"></div>
                        <div class="menlo-font">
                            <p><span id="setaText1"></span><span id="text1"></span></p>
                            <p class="border-left"><span id="setaText2"></span><span id="text2"></span></p>
                        </div>
                    </div>
                    <div class="pb-4"> <a href="intro_p02.php" class="btn btn__primary text-center visually-hidden"
                            id="showBtnLonger">CONTINUAR</a>
                    </div>
                </div>
            </section>
        </div>

        <?php include_once '../../lib/footer.php'; ?> 
        <script src="../../js/intro_p01.js"></script>
    </body>

</html>