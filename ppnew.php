<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>



<body>
    <!-- <style>
   
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
  
</style> -->





    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AUuoa91PgH-uy2KZ_l-cEcFY6Z7c42o5tV9nYysI_iwtzyHVQEvGY6FmfDKZR4XSfPZvPmRSNCXGPd8R&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 40
            },
            createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '0.17'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Transaction completed by ' + details.payer.name.given_name);
                    // Call your server to save the transaction
                    return fetch('/transaverif.php', {
                        method: 'post',
                        headers: {
                            'content-type': 'application/json'
                        },
                        body: JSON.stringify({
                            orderID: data.orderID
                        })
                    });
                });
            }



        }).render('#paypal-button-container');
    </script>


</body>

</html>