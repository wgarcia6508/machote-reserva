<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla básica de Bootstrap</title>

    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script type = "text / javascript" src = "https://www.2checkout.com/checkout/api/2co.min.js"> </script>
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <form id = "myCCForm" action = "https://www.mysite.com/examplescript.php" method = "post">
  <input name = "token" type = "hidden" value = "" />
  <div>
    <etiqueta>
      <span> Número de tarjeta </span>
      <input id = "ccNo" type = "text" value = "" autocomplete = "off" requerido />
    </label>
  </div>
  <div>
    <etiqueta>
      <span> Fecha de vencimiento (MM / AAAA) </span>
      <input id = "expMonth" type = "text" size = "2" requerido />
    </label>
    <span> / </span>
    <input id = "expYear" type = "text" size = "4" requerido />
  </div>
  <div>
    <etiqueta>
      <span> CVC </span>
      <input id = "cvv" type = "text" value = "" autocomplete = "off" requerido />
    </label>
  </div>
  <input type = "submit" value = "Enviar pago" />
</form>

<script>
  // Se llama cuando el token se creó con éxito.
  var successCallback = function (data) {
    var myForm = document.getElementById ('myCCForm');

    // Establecer el token como el valor para la entrada del token
    myForm.token.value = data.response.token.token;

    // IMPORTANTE: Aquí llamamos a `submit ()` en el elemento de formulario directamente en lugar de usar jQuery para evitar un ciclo de solicitud de token infinito.
    myForm.submit ();
  };

  // Se llama cuando falla la creación del token.
  var errorCallback = función (datos) {
    // Vuelva a intentar la solicitud del token si falla la llamada ajax
    if (data.errorCode === 200) {
       // Este código de error indica que la llamada ajax falló. Recomendamos que vuelva a intentar la solicitud del token.
    } más {
      alerta (data.errorMsg);
    }
  };

  var tokenRequest = function () {
    // Argumentos de solicitud de token de configuración
    var args = {
      sellerId: "1817037",
      Clave publicable: "E0F6517A-CFCF-11E3-8295-A7DD28100996",
      ccNo: $ ("# ccNo"). val (),
      cvv: $ ("# cvv"). val (),
      expMonth: $ ("# expMonth"). val (),
      expYear: $ ("# expYear"). val ()
    };

    // Hacer la solicitud del token
    TCO.requestToken (successCallback, errorCallback, args);
  };

  $ (function () {
    // Tire de la clave de cifrado pública para nuestro entorno
    TCO.loadPubKey ('producción');

    $ ("# myCCForm"). submit (function (e) {
      // Llama a nuestra función de solicitud de token
      tokenRequest ();

      // Evitar que se envíe el formulario
      falso retorno;
    });
  });

</script>

    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>