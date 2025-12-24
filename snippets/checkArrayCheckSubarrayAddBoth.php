<script>
  // Function to check and add subarray to booksList in local storage
  function checkAndAddToBooksList(idValue, titleValue, author, price) {
    const booksList = JSON.parse(localStorage.getItem('booksList')) || [];
    const exists = booksList.some((item) => item.id === idValue);

    if (!exists) {
      booksList.push({ id: idValue, title: titleValue, author, price });
      localStorage.setItem('booksList', JSON.stringify(booksList));
      console.log(`Added: ${titleValue} (${idValue})`);
    } else {
      console.log(`Already in cart: ${titleValue} (${idValue})`);
    }
  }

  // Values for hardcover version
  const hardcover = {
    id: '<?= $page->idValue() ?>',
    title: '<?= $page->titleValue() ?>',
    author: '<?= $page->author() ?>',
    price: '<?= $page->price() ?>',
  };

  // Values for auxiliary version (you’ll need to define these in PHP)
  const auxiliary = {
    id: '<?= $page->auxiliaryId() ?>',
    title: '<?= $page->auxiliaryTitle() ?>',
    author: '<?= $page->auxiliaryAuthor() ?>',
    price: '<?= $page->auxiliaryPrice() ?>',
  };

  // Add event listeners
  document.getElementById('addBookButton').addEventListener('click', () => {
    checkAndAddToBooksList(hardcover.id, hardcover.title, hardcover.author, hardcover.price);
    setAddToCartText('addBookButton');
  });

  document.getElementById('addAuxiliaryButton').addEventListener('click', () => {
    checkAndAddToBooksList(auxiliary.id, auxiliary.title, auxiliary.author, auxiliary.price);
    setAddToCartText('addAuxiliaryButton');
  });

  // Text feedback function
  function setAddToCartText(buttonId) {
    const btn = document.getElementById(buttonId);
    const opt = {
      initialText: btn.innerHTML,
      textOnClick: 'Item is now in the Cart',
      interval: 5000,
    };

    btn.innerHTML = opt.textOnClick;
    setTimeout(() => {
      btn.innerHTML = opt.initialText;
    }, opt.interval);
  }

</script>