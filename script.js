$(document).ready(function () {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== '') {
        // Prevent default anchor click behavior
        event.preventDefault()
  
        // Store hash
        var hash = this.hash
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate(
          {
            scrollTop: $(hash).offset().top
          },
          900,
          function () {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash
          }
        )
      } // End if
    })
  
    // função para retornar ao topo
    $(window).scroll(function () {
      $('.slideanim').each(function () {
        var pos = $(this).offset().top
  
        var winTop = $(window).scrollTop()
        if (pos < winTop + 600) {
          $(this).addClass('slide')
        }
      })
    })
  });
  
  
  function alerta() {
    alert("Ok!");
  }
  
  
  // chave para envio de e-mail
  (function () {
    // https://dashboard.emailjs.com/admin/account
    emailjs.init('AZK1VA0C2NZjzrNge');
  })();
  
  // função de envio de e-mail com emailjs
  window.onload = function () {
    document.getElementById('contact-form').addEventListener('submit', function (event) {
      event.preventDefault();
      // these IDs from the previous steps
      emailjs.sendForm('service_h0i6cmb', 'template_cmwz5wj', this)
        .then(function () {
          alert("E-mail enviado com sucesso!");
          document.getElementById("btn-enviar").disabled = true;
          document.getElementById('btn-enviar').style.display = 'none';        
        }, function (error) {
          console.log('FAILED...', error);
        });
    });
  }
  
  
  // mascara de telefone
  const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g, '')
    value = value.replace(/(\d{2})(\d)/, "($1) $2")
    value = value.replace(/(\d)(\d{4})$/, "$1-$2")
    return value
  }
  
  
  
  /*
  function onSubmit(token) {
    alert('thanks ' + document.getElementById('field').value);
  }
  
  function validate(event) {
    event.preventDefault();
    if (!document.getElementById('field').value) {
      alert("You must add text to the required field");
    } else {
      grecaptcha.execute();
    }
  }
  
  function onload() {
    var element = document.getElementById('submit');
    element.onclick = validate;
  }*/