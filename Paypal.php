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
<script
    src="https://www.paypal.com/sdk/js?client-id=AUuoa91PgH-uy2KZ_l-cEcFY6Z7c42o5tV9nYysI_iwtzyHVQEvGY6FmfDKZR4XSfPZvPmRSNCXGPd8R"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
    <!-- Set up a container element for the button -->
 
 
    <?php $ttYY=1;
								
								echo "$".$ttYY;
								 ?>

      <!-- Set up a container element for the button -->




      <div id="paypal-button-container"></div>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.18'
          }
        }]
      });
    }
  }).render('#paypal-button-container');
</script>

</body>
    
</html>