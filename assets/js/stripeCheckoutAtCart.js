    // Initialize Stripe globally
      const key = document.getElementById('purchaseButton').dataset.stripeKey;
const stripe = Stripe(key);

    async function purchaseBooks() {
      const items = getCartItems();
      if (items.length === 0) return;

      const response = await fetch("/checkout", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(items)
      });

      const session = await response.json();

      // 👉 Log the entire session object to the console
      console.log("Checkout session response:", session);

      const { error } = await stripe.redirectToCheckout({ sessionId: session.id });

      if (error) alert(error.message);
    }

    document.getElementById('purchaseButton')
      .addEventListener('click', purchaseBooks);
