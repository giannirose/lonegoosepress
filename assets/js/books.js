localStorage.setItem("Books", JSON.stringify([{ "id": "<?= $page->idValue() ?>", "author": "<?= $page->author() ?>", "title": "<?= $page->titleValue() ?>", "price": "<?= $page->price()" }
]))