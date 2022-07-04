$(document).ready(function () {
    var inputs = document.querySelectorAll("input");
    // var button = document.querySelector("button");
    
    $('#inputBirthDate').mask("00/00/0000", {selectOnFocus: true});                

    $("#btnContinuarP02").click(function() {
      var nomeUsuario = $("#inputName1").val() + " " + $("#inputName2").val();
      $("#frmDadoUsuario").html(getFrmNomeUsuario(nomeUsuario, "intro_p03.php"));
      $("#frmNomeUsuario").submit();
    });

    $('#inputEmail1').blur(function() {
      var validacao = validaEmail();
      if(validacao) {
        $('#inputEmail1').removeClass('is-invalid');
        $('#inputEmail1').addClass('is-valid'); 
      } else {
        $('#inputEmail1').removeClass('is-valid');
        $('#inputEmail1').addClass('is-invalid');
      }
    });
    
    $('#inputBirthDate').blur(function() {
      var validacaoData = validaData();
      if(validacaoData) {
        $('#inputBirthDate').removeClass('is-invalid');
        $('#inputBirthDate').addClass('is-valid'); 
      } else {
        $('#inputBirthDate').removeClass('is-valid');
        $('#inputBirthDate').addClass('is-invalid');
      }
    });
    
    inputs.forEach(function(input) {            
      input.addEventListener("keyup", function() {
        if(checkInputs(inputs) && validaData() && validaEmail()) {
          $('#btnContinuarP02').removeClass('d-none');
        }else{
          $('#btnContinuarP02').addClass('d-none'); 
        }
      });
    });     

    function checkInputs(inputs) {
      var filled = true;          
      inputs.forEach(function(input) {              
        if(input.value === "") {
            filled = false;
        }          
      });          
      return filled;
    }

    function validaEmail() {
        var email = document.getElementById("inputEmail1").value;
        var reMask = /\S+@\S+\.\S+/;
        return (reMask.test(email) ? true : false);
    }

    function validaData() {
      var dataInput = document.getElementById("inputBirthDate").value;
      var reMask = /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/;
      
      return ((reMask.test(dataInput) && dataInput.length==10) ? true : false);
    }                

  });      