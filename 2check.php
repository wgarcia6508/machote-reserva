<?php
$ttYY = 2;
$idT = 7;
/** selecinme el monto tta de id tal o de ulimo id  */
echo "$" . $ttYY;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

    <script src="https://www.2checkout.com/checkout/api/2co.min.js"></script>



</head>



<body>
    <div class=""></div>

    <div class="container">

        <div class="row">

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">


                    <div class="form-group">
                        <h5> Cargue $ 25 USD con 2Checkout </h5>

                        <!--formulario de tarjeta de crédito-->
                        <form id="paymentFrm" method="post" action="vpaymentSubmit.php">
                            <div class="form-group">
                                <label> NAME </label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Enter name" requiere enfoque automático>
                            </div>
                            <div class="form-group">
                                <etiqueta>EMAIL </label>
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label> CARD NUMBER </label>
                                <input class="form-control" type="text" name="card_num" id="card_num" placeholder="Ingrese el número de tarjeta " autocompletar="off" requerido>
                            </div>
                            <div class="form-group">
                            <div class="col-sm-3">
                            <label> Fecha de Vencimiento</label>
                                </div>
                        
                                <div class="col-sm-3">
                                <etiqueta> Mes </etiqueta>
                                    <input class="form-control" type="number" name="exp_month" id="exp_month" placeholder="MM" size = "4" requerido>
                                </div>
                                <div class="col-sm-3">
                                <etiqueta> Año </etiqueta>
                                   <input class="form-control" type="number" name="exp_year" id="exp_year" placeholder="YY" size = "4" requerido>
                                </div>
                                <div class="col-sm-3">
                                <etiqueta> CVV </etiqueta>
                                <input class="form-control" type="number" name="cvv" id="cvv" autocomplete="off" requerido>
                            </div>
                        </div>
                            

                            <!--entrada de token oculto-->
                            <input id="token" name="token" type="hidden" value="">


                            <!--botón de enviar -->
                            <input type="submit" class="btn btn-success" value="Enviar pago">
                            </form>
                    </div>
                </div>
            </div>

        </div>



    </div>



    <H1><?php /*******************************************echo "$" . $ttYY;*******************************************/ ?></H1>
    <script>
// Called when token created successfully.
var successCallback = function(data) {
  var myForm = document.getElementById('paymentFrm');
  
  // Set the token as the value for the token input
  myForm.token.value = data.response.token.token;
  
  // Submit the form
  myForm.submit();
};

// Called when token creation fails.
var errorCallback = function(data) {
  if (data.errorCode === 200) {
    tokenRequest();
  } else {
    alert(data.errorMsg);
  }
};

var tokenRequest = function() {
  // Setup token request arguments
  var args = {
    sellerId: "250241135596",
    publishableKey: "458B44B3-BB24-452A-856A-4E31046FBA9E",
    ccNo: $("#card_num").val(),
    cvv: $("#cvv").val(),
    expMonth: $("#exp_month").val(),
    expYear: $("#exp_year").val()
  };
  
  // Make the token request
  TCO.requestToken(successCallback, errorCallback, args);
};

$(function() {
  // Pull in the public encryption key for our environment=sandbox
  TCO.loadPubKey('production');
  
  $("#paymentFrm").submit(function(e) {
    // Call our token request function
    tokenRequest();
   
    // Prevent form from submitting
    return false;
  });
});
</script>
</body>

</html>