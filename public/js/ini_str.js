const stripe = Stripe('publishible_key');
const secret = document.getElementById('secret').innerHTML;

const options = {
   clientSecret: secret
};

const elements = stripe.elements(options);

const paymentElementOptions = { layout: 'accordion' };
const paymentElement = elements.create('payment', paymentElementOptions);
paymentElement.mount('#pay-element');

const form = document.getElementById('form_order');
form.addEventListener('submit', async(e) => {
   e.preventDefault();
   e.submitter.setAttribute('disabled', "");

   stripe.confirmPayment({
      elements,
      confirmParams: {
         return_url: "https://printstitch4.ca"
      },

      redirect: 'if_required',
   }).then(function (result){
      const messages = document.getElementById('result-message');

      if (result) {
         message.innerHTML = result.error.message,
         e.submitter.removeAttribue('disabled');
      } else {
         //message.innerHTML = result.paymentIntent.status;
         if (result.paymentIntent.status == "Succeded!") {
            e.target.submit();
         }
      }
   });
});
