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
        <script>
            setTypingIntro();

            /**************  Text Typing ********************/
            function setTypingIntro() {
                const title = '#title1'
                const text1 = '#text1'
                const text2 = '#text2'

                const typeWriter = document.querySelectorAll([title, text1, text2]);
                // const dataTitle = typeWriter[0].getAttribute('data-text-title');
                const dataTitle = `AVISO`;
                // const dataText1 = typeWriter[1].getAttribute('data-text1');
                const dataText1 = `Você participará de um jogo ficcional protagonizado por uma ciberativista que faz uso de suas habilidades hackers para promover a segurança da informação.`;
                // const dataText2 = typeWriter[2].getAttribute('data-text2');
                const dataText2 = `Os perigos encontrados na internet, entretanto, são reais. Para sua segurança, siga as orientações e medidas preventivas que serão apresentadas._`;
                const seta1 = document.querySelector('#setaText1')
                const seta2 = document.querySelector('#setaText2')

                function setaText1() {
                    seta1.innerHTML = `<span class="color__cyan glow--blue"><i class="fas fa-arrow-right"></i></span> `
                }

                function setaText2() {
                    seta2.innerHTML = `<span class="color__cyan glow--blue"><i class="fas fa-arrow-right"></i></span> `
                }

                const delayText1 = 1500
                const delayText2 = 6500

                let countTitle = 0;
                const dataTitleLength = dataTitle.length;

                const setTitle = () => {
                    setTimeout(() => {
                        typeWriter[0].textContent = typeWriter[0].textContent + dataTitle.charAt(countTitle);
                        countTitle++;
                        if (countTitle <= dataTitleLength) {
                            setTitle();
                        }
                    }, 200);
                }

                let countText1 = 0;
                const dataText1Length = dataText1.length;

                const setText1 = () => {
                    setTimeout(() => {
                        typeWriter[1].textContent = typeWriter[1].textContent + dataText1.charAt(countText1);
                        countText1++;
                        if (countText1 <= dataText1Length) {
                            setText1();
                        }
                    }, 50)
                }

                let countText2 = 0;
                const dataText2Length = dataText2.length;

                const setText2 = function () {
                    setTimeout(function () {
                        typeWriter[2].textContent = typeWriter[2].textContent + dataText2.charAt(countText2);
                        countText2++;
                        if (countText2 <= dataText2Length) {
                            setText2();
                        }
                    }, 50);        
                }

                window.onload = () => {
                    setTitle()
                    setInterval(setaText1, delayText1)
                    setInterval(setText1, delayText1)
                    setInterval(setaText2, delayText2)
                    setInterval(setText2, delayText2)
                    setTimeout(showBtnLonger, 13000)
                }
            }

            function showBtnLonger() {
                let tagId = document.querySelector('#showBtnLonger')

                tagId.classList.remove('visually-hidden')
                // tagId.classList.remove('d-none')

                tagId.classList.add('animate__animated', 'animate__bounceIn')
            }
        </script>
    </body>

</html>