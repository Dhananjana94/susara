
      paypal.Button.render({
        env: 'sandbox', // Or 'production'
        client: {
          sandbox: 'AWJ_Q66URfmdL82b9NTegBdl-gNsu73ePYP9J1AqiQL1vWhHxPDAN4PKTkNRnZWy8GubAGogh-bs22N0',
          production: 'demo_client_id'
        },
        // Customize Button
        style: {
          size: 'large',
          color: 'gold',
          shape: 'pill',
        },
        // Set up the payment:
        // 1. Add a payment callback
        payment: function(data, actions) {
          // 2. Make a request to your server
          return actions.request.post('/api/create-payment')
            .then(function(res) {
              // 3. Return res.id from the response
              // console.log(res);
              return res.id;
            });
        },
        // Execute the payment:
        // 1. Add an onAuthorize callback
        onAuthorize: function(data, actions) {
          // 2. Make a request to your server
          return actions.request.post('/api/execute-payment', {
            paymentID: data.paymentID,
            payerID:   data.payerID
          })
            .then(function(res) {
              console.log(res);
              alert('PAYMENT WENT THROUGH!!');
              // 3. Show the buyer a confirmation message.
            });
        }
      }, '#paypal-button');
