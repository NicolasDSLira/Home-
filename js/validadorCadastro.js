document.getElementById('olho').addEventListener('mousedown', function() {
        document.getElementById('senha').type = 'text';
        document.getElementById('csenha').type = 'text';
    });

    document.getElementById('olho').addEventListener('mouseup', function() {
      document.getElementById('senha').type = 'password';
      document.getElementById('csenha').type = 'password';
    });

    // Para que o password não fique exposto apos mover a imagem.

    document.getElementById('olho').addEventListener('mousemove', function() {
        document.getElementById('senha').type = 'password';
        document.getElementById('csenha').type = 'password';
    });

     function validar(){

        var senha = document.getElementById('senha').value;
        var csenha = document.getElementById('csenha').value;
          if (senha != csenha){ 
          alert("SENHAS DIFERENTES! \nFAVOR DIGITAR SENHAS IGUAIS");
          return false;  
        }
        return true;
    }

 //Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)

    .forEach(function (form) {

      form.addEventListener('submit', function (event) {

        if (!form.checkValidity()) {

          event.preventDefault()

          event.stopPropagation()

        }

        form.classList.add('was-validated')

      }, false)

    })

})()