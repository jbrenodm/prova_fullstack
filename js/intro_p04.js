$(document).ready(function () {
    setTimeout(continuar, 8000)

    function continuar() {
        document.querySelector("#btnContinuarP04").classList.remove('disabled')
        document.querySelector('#textoSeguranca').innerHTML = `
        <p><strong>Inicializando treinamento em Segurança da Informação v.2.021</strong><br><span class="text-info">Instalação completa.</span></p>
        `
    }
  });        