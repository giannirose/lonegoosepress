// Display books list in a table
function displayBooksList() {
  const booksTableBody = document.querySelector('#booksTable .cart-items');
  booksTableBody.innerHTML = ''; // Clear existing rows

  // Retrieve the booksList array from local storage
  const booksList = JSON.parse(localStorage.getItem('booksList')) || [];

  // Loop through the booksList array and create table rows
  booksList.forEach((book, index) => {
    const row = booksTableBody.insertRow();
    row.classList.add('cart-row');

    const cellTitle = row.insertCell(0);
    cellTitle.classList.add('cart-column', 'cart-title');
    cellTitle.textContent = book.title;

    const cellAuthor = row.insertCell(1);
    cellAuthor.classList.add('cart-column', 'cart-author');
    cellAuthor.textContent = book.author;

    const cellPrice = row.insertCell(2);
    cellPrice.classList.add('cart-column', 'cart-price');
    cellPrice.textContent = book.price;

    const cellCounter = row.insertCell(3);
    cellCounter.classList.add('cart-column', 'cart-quantity');
    cellCounter.innerHTML =
      '$<input class="cart-quantity-input" type="number" value="1">';

    const cellRemove = row.insertCell(4);
    cellRemove.classList.add('cart-column', 'cart-remove');
    cellRemove.innerHTML = `<button class="btn btn-danger" type="button" onclick="removeBookFromBooksList(this, ${index})">Remove</button>`;
  });

  // Attach change listeners to quantity inputs
  const quantityInputs = document.getElementsByClassName('cart-quantity-input');
  for (let i = 0; i < quantityInputs.length; i++) {
    const input = quantityInputs[i];
    input.addEventListener('change', quantityChanged);
  }

  function quantityChanged(event) {
    const input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    calculateTotalPrice();
  }

  // Calculate the total price
  calculateTotalPrice();

  // --- Button state logic ---
  const purchaseButton = document.getElementById('purchaseButton');
  if (booksList.length > 0) {
    purchaseButton.disabled = false;       // enable if items exist
    purchaseButton.textContent = 'Purchase'; // reset text
  } else {
    purchaseButton.disabled = true;        // disable if cart empty
    purchaseButton.textContent = 'Purchase'; // show purchased state
  }
}

// To calculate the total price
function calculateTotalPrice() {
  // Select cart items- first of the cart-row array
  const cartItems = document.getElementsByClassName('cart-items')[0];
  // Get all cart-row individual items
  const cartRows = cartItems.getElementsByClassName('cart-row');
  // Loop over all the cart-row items
  // Set the total to 0 before the loop
  let total = 0;
  for (let i = 0; i < cartRows.length; i++) {
    const cartRow = cartRows[i];
    // Get the price
    const priceElement = cartRow.getElementsByClassName('cart-price')[0];
    // Get the quantity
    const quantityElement = cartRow.getElementsByClassName(
      'cart-quantity-input',
    )[0];
    // Convert string to a number without $ sign
    const price = parseFloat(priceElement.innerText.replace('$', ''));
    // Get the value of the input element of type number
    const quantity = quantityElement.value;
    console.log(price * quantity);
    console.log(price);
    console.log(quantity);
    total += price * quantity;
  }

  // Account for computing to return an accurate amount
  total = Math.round(total * 100) / 100;
  // Set inner Text with the price and add $ sign
  document.getElementsByClassName('cart-total-price')[0].innerText =
    `$${total.toFixed(2)}`;
}


// Disable the Purchase button and show temporary message
function disablePurchaseButton() {
  const purchaseBtn = document.getElementById('purchaseButton');
  purchaseBtn.disabled = true; // keep button visible but inactive
  purchaseBtn.style.opacity = "0.6";
  purchaseBtn.style.cursor = "not-allowed";

  // Add explanatory message underneath
  const divElement = document.getElementById('divButton');
  const infoParagraph = document.createElement('p');
  infoParagraph.classList.add('purchase-info');
  infoParagraph.innerHTML = `
    Our purchase method is being worked on.<br>
    Please copy your desired purchases and email me at 
    <a href="mailto:lonegoose1@icloud.com">lonegoose1@icloud.com</a> 
    and I will assist you.<br>
    Thank you!<br>
    — Sandy
  `;
  divElement.appendChild(infoParagraph);
}

// End disable purchase button








// Function to remove a book from the booksList array in local storage
function removeBookFromBooksList(button, index) {
  const booksList = JSON.parse(localStorage.getItem('booksList')) || [];
  booksList.splice(index, 1); // Remove the item at the specified index
  localStorage.setItem('booksList', JSON.stringify(booksList));
  displayBooksList(); // Update the table
}

// Function to remove the booksList array from local storage and add a thank you message
// function purchaseBooks() {
//   localStorage.removeItem('booksList');
//   console.log('booksList has been removed from local storage.');
//   displayBooksList(); // Update the table

//   // Create new thank you paragraph at purchase
//   const divElement = document.getElementById('divButton');
//   const thankYouParagraph = document.createElement('p');
//   thankYouParagraph.classList.add('thank-you');
//   thankYouParagraph.textContent = 'Thank you for your purchase.';

//   // Append the paragraph to an existing element on the page
//   divElement.appendChild(thankYouParagraph);
// }

// function purchaseBooks() {
//   localStorage.removeItem('booksList');
//   displayBooksList();

//   const divElement = document.getElementById('divButton');

//   if (!divElement.querySelector('.thank-you')) {
//     const thankYouParagraph = document.createElement('p');
//     thankYouParagraph.classList.add('thank-you');
//     thankYouParagraph.textContent = 'Thank you for your purchase.';
//     divElement.appendChild(thankYouParagraph);

//     // Disable the button so it can't be clicked again
//     document.getElementById('purchaseButton').disabled = true;
//   }
// }


// Function to handle purchase
function purchaseBooks() {
  // Calculate current cart total directly
  const totalValue = getCartTotal();

  if (totalValue > 0) {
    // Clear cart
    localStorage.removeItem('booksList');
    displayBooksList();

    const divElement = document.getElementById('divButton');

    // Remove any existing thank-you messages before appending
    divElement.querySelectorAll('.thank-you').forEach(el => el.remove());

    const thankYouParagraph = document.createElement('p');
    thankYouParagraph.classList.add('thank-you');
    thankYouParagraph.textContent = 'Thank you for your purchase.';
    divElement.appendChild(thankYouParagraph);

    // Disable the button and change text
    const purchaseButton = document.getElementById('purchaseButton');
    purchaseButton.disabled = true;
    purchaseButton.textContent = 'Purchased';
  } else {
    console.log('Cart is empty. No purchase made.');
  }
}


// Helper to calculate cart total (avoids relying on DOM text)
function getCartTotal() {
  const cartItems = document.getElementsByClassName('cart-items')[0];
  const cartRows = cartItems.getElementsByClassName('cart-row');
  let total = 0;
  for (let i = 0; i < cartRows.length; i++) {
    const priceElement = cartRows[i].getElementsByClassName('cart-price')[0];
    const quantityElement = cartRows[i].getElementsByClassName('cart-quantity-input')[0];
    const price = parseFloat(priceElement.innerText.replace('$', ''));
    const quantity = parseInt(quantityElement.value, 10);
    total += price * quantity;
  }
  return Math.round(total * 100) / 100;
}


// Add event listener to the Purchase button
document
  .getElementById('purchaseButton')
  .addEventListener('click', purchaseBooks);

// Initial display of books list
displayBooksList();

// Disable purchase functionality temporarily
disablePurchaseButton();


// Listen for changes in local storage and update the table
// window.addEventListener('storage', (event) => {
//   if (event.key === 'booksList') {
//     displayBooksList();
//     location.reload(); // Force the page to reload
//     // window.reload();
//   }
// });

// Listen for changes in local storage and update the table
window.addEventListener('storage', (event) => {
  if (event.key === 'booksList') {
    displayBooksList(); // Update the table
    // ❌ Remove location.reload() to prevent duplicate thank-you messages
  }
});
