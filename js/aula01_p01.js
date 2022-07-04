$(document).ready(function () {
    setUserNameSession();
    $("#menuQuiz").hide();
    
    $(document).keypress(function(e) {
        if(e.which == 67 || e.which == 99 && getEtapaConcluida("aula01-02") && !getEtapaConcluida("aula01-03")){
            // console.log("Pressionou -> ", e.which);
            $("#aula01-03, #aula01-04").show();
            $("#aula01-03").get(0).scrollIntoView();
        }
    });

    $("#showBtn").click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        
        if(getEtapaConcluida("aula01-02")){
            $("#aula01-03, #aula01-04").show();
            $("#aula01-03").get(0).scrollIntoView();
        }                        
    });

    // Etapa Caroussel
    if(!getEtapaConcluida('aula01-01')){
        if($("button[data-bs-slide-to='0']").hasClass("active")){
            // $("#imgBtnPrev").prop('disabled', true);
            $("#imgBtnPrev").hide();
            $("#mouse").hide();
            $("#aula01-02").hide();
        }

        $("#imgBtnPrev").click(function (e) {
            e.stopPropagation();
            e.preventDefault();

            $("#imgBtnNext").show();
            if($("button[data-bs-slide-to='0']").hasClass("active")){                            
                $("#imgBtnPrev").hide()
            }else{
                $("#imgBtnPrev").show()
            }                       
        });

        $("#imgBtnNext").click(function (e) {
            e.stopPropagation();
            e.preventDefault();
                    
            $("#imgBtnPrev").show();
            if($("button[data-bs-slide-to='6']").hasClass("active")){
                setEtapaConcluida('aula01-01');
                $("#imgBtnNext").hide();
                $("#mouse").show();
                $("#aula01-02").show();
                $("#mouse").get(0).scrollIntoView();

            }else{
                $("#imgBtnNext").show();
            }
        });
    }
    
    // Etapa Video
    if(!getEtapaConcluida('aula01-02')){
        $("#mouse2").hide();
        $("#aula01-03").hide();
        $("#subtitle").hide();
        
        var iframe = document.querySelector('iframe');
        var player = new Vimeo.Player(iframe); 
        player.on('ended', function(){
            setEtapaConcluida('aula01-02');
            $("#subtitle").show();
            $("#showBtn").removeClass("visually-hidden");                    
        });
    }else{
        $("#mouse2").hide();
        $("#subtitle").show();
        $("#showBtn").removeClass("visually-hidden");
    }
    
    //  Etapa Baralho
    if(!getEtapaConcluida("aula01-03")){
        $("#aula01-03, #aula01-04").hide();                     
    }else{
        $("#mouse2").show();
        $("#aula01-05").show();                        
        $("#mouse2").get(0).scrollIntoView();
        $("#menuQuiz").show();
    }                  

    // Etapa Quiz
    if(!getEtapaConcluida("aula01-03")){
        $("#aula01-05").hide();
    }                
});   