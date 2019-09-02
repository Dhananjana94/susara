// var stripe = Stripe('pk_test_AOtMxA7e0vwRmcrV2NeFSeGz00qpijFlST');
Stripe.setPublishableKey('pk_test_AOtMxA7e0vwRmcrV2NeFSeGz00qpijFlST');

// stripe.createToken(card).then(function(result) {
//   // Handle result.error or result.token
// });
var $form = $('#checkout-form');

$form.submit(function(event) {
  $('#charge-error').addClass('hidden');
  $form.find('button').prop('disabled', true);
  Stripe.card.createToken({
    name: $('#card-name').val(),
    number: $('#card-number').val(),
    cvc: $('#card-cvc').val(),
    exp_month: $('#card-expiry-month').val(),
    exp_year: $('#card-expiry-year').val()
    // address_zip: $('.address_zip').val()
  }, stripeResponseHandler);
  return false;
});

function stripeResponseHandler(status, response){
  if(response.error){
    $('#charge-error').removeClass('hidden');
    $('#charge-error').text(response.error.message);
    $form.find('button').prop('disabled', false);
  }else{
    var token = response.id;
    $form.append($('<input type="hidden" name="stripeToken"/>').val(token));
    //Submit the form
    $form.get(0).submit();
  }

}
