// function show1(){
//   document.getElementById('stripe-method').style.display ='none';
// }
// function show2(){
//   document.getElementById('stripe-method').style.display = 'block';
// }

function show1(){
  if (document.getElementById('paypal').checked) {
    document.getElementById('stripe-method').style.display = 'none';
    // document.getElementById('stripe-button').style.display = 'none';
  } else {

  }
}
function show2(){
  if (document.getElementById('credit-card').checked) {
    document.getElementById('stripe-method').style.display = 'block';
    // document.getElementById('paypal-button').style.display = 'block';
  } else {

  }
}
