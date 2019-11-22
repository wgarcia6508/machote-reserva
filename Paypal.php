<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <head>

</head>



<body>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<style>
   
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
           width: 100%;
        }
    }
   
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
           width: 250px;
            display: inline-block;
        }
    }
   
</style>


    <!-- Set up a container element for the button -->
 
 
    <?php $ttYY=2; 
          $idT=7;
								
								echo "$".$ttYY;
								 ?>


    <div id="paypal-button-container"></div>
      <!-- Set up a container element for the button -->



      <script>
    paypal.Button.render({
        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'blue'   // gold | blue | silver | black
        },
 
        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
 
        client: {
            sandbox:    'AUuoa91PgH-uy2KZ_l-cEcFY6Z7c42o5tV9nYysI_iwtzyHVQEvGY6FmfDKZR4XSfPZvPmRSNCXGPd8R',
            production: 'AYwvssQKwttR-v2f5nCYyV-j9P8oRwT40ZTd1Y2k_EAmslJoD2hLWcTyt90y1KHWXz0QzB0pbxDYB11l'
        },
 
        // Wait for the PayPal button to be clicked
 
        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '<?php echo $ttYY;?>', currency: 'USD' },
                            description:"PAGAR mI RESERVA <?php echo number_format($ttYY,2);?>",
                            custom:"Factura # <?php echo $idT;?>"
                        }
                    ]
                }
            });
        },
 
        // Wait for the payment to be authorized by the customer
 
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                console.log(data);
                window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
            });
        }
   
    }, '#paypal-button-container');
 
</script>

  
 
      <script>
 //paypal.Buttons({
   // createOrder: function(data, actions) {
      //- This function sets up the details of the transaction, including the amount and line item details.
     /*  return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    },
    onApprove: function(data, actions) { */
      //- This function captures the funds from the transaction.
     /*  return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container'); */
  //This function displays Smart Payment Buttons on your web page.
</script>

</body>
    
</html>