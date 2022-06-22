// This is your test publishable API key.
const stripe = Stripe("pk_test_51L5rX5AqjU5JuBqtRAysaa7b1sV1IPA5TVdG3Enq6Phg5v3UsZGmt9Xa8NKENVMz5YNkKfCv9dK7Tq2AEIL7BZGX00w5EysoDP");

// The items the customer wants to buy
const items = [{ id: "xl-tshirt" }];

let elements;

const donateButton = document.querySelector('.donate-button').addEventListener('click', handleDonate);
const donateSpinner = document.querySelector('#donate-spinner');
// initialize();
// checkStatus();

document.querySelector("#payment-form").addEventListener("submit", handleSubmit);

// checks the price
async function handleDonate() {
    const csrf = document.querySelector('meta[name="csrf-token"]').content;

    const amount = document.querySelector('.donate-amount').value;

    const data = { 'amount': amount };

    fetch('/donate/check', {
            method: 'POST', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf
            },
            body: JSON.stringify(data),
        })
        .then(response => {
            if (response.ok) {
                return response.json()
            }
        })
        .then(data => {

            console.log('Success:', data);
            initialize();
            checkStatus();
            donateSpinner.classList.remove('hidden');

        })
        .catch((error) => {
            console.error('Error:', error);
        });

}
// Fetches a payment intent and captures the client secret
async function initialize() {
    const csrf = document.querySelector('meta[name="csrf-token"]').content;

    const { clientSecret } = await fetch("/create", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            'X-CSRF-TOKEN': csrf
        },
        body: JSON.stringify({ items }),
    }).then((r) => r.json());

    elements = stripe.elements({ clientSecret });

    const paymentElement = elements.create("payment");
    paymentElement.mount("#payment-element");

    const paymentForm = document.querySelector("#payment-form");
    const donateDesc = document.querySelector('.donate-desc');


    paymentForm.classList.remove('hidden');
    donateDesc.classList.add('hidden');


    donateSpinner.classList.add('hidden');


}

async function handleSubmit(e) {
    e.preventDefault();
    setLoading(true);

    const { error } = await stripe.confirmPayment({
        elements,
        confirmParams: {
            // Make sure to change this to your payment completion page
            return_url: "http://92.12.95.136/donate/confirmation",
        },
    });

    // This point will only be reached if there is an immediate error when
    // confirming the payment. Otherwise, your customer will be redirected to
    // your `return_url`. For some payment methods like iDEAL, your customer will
    // be redirected to an intermediate site first to authorize the payment, then
    // redirected to the `return_url`.
    if (error.type === "card_error" || error.type === "validation_error") {
        showMessage(error.message);
    } else {
        showMessage("An unexpected error occurred.");
    }

    setLoading(false);
}

// Fetches the payment intent status after payment submission
async function checkStatus() {
    const clientSecret = new URLSearchParams(window.location.search).get(
        "payment_intent_client_secret"
    );

    if (!clientSecret) {
        return;
    }

    const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

    switch (paymentIntent.status) {
        case "succeeded":
            showMessage("Payment succeeded!");
            break;
        case "processing":
            showMessage("Your payment is processing.");
            break;
        case "requires_payment_method":
            showMessage("Your payment was not successful, please try again.");
            break;
        default:
            showMessage("Something went wrong.");
            break;
    }
}

// ------- UI helpers -------

function showMessage(messageText) {
    const messageContainer = document.querySelector("#payment-message");

    messageContainer.classList.remove("hidden");
    messageContainer.textContent = messageText;

    setTimeout(function() {
        messageContainer.classList.add("hidden");
        messageText.textContent = "";
    }, 4000);
}

// Show a spinner on payment submission
function setLoading(isLoading) {
    if (isLoading) {
        // Disable the button and show a spinner
        document.querySelector("#submit").disabled = true;
        document.querySelector("#spinner").classList.remove("hidden");
        document.querySelector("#button-text").classList.add("hidden");
    } else {
        document.querySelector("#submit").disabled = false;
        document.querySelector("#spinner").classList.add("hidden");
        document.querySelector("#button-text").classList.remove("hidden");
    }
}