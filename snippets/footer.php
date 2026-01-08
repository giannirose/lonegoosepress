<footer id="footer" class="footer">
  <hr>
  <p><?= $site->address()->kt() ?></p>
  <p><?= $site->addressTwo()->kt() ?></p>
  <p><a href="tel:<?= $site->telephone() ?>"><?= $site->telephone() ?></a></p>
  <p><a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a></p>
  <div class="footertext">
    <?= $site->footerMessage()->kt() ?>
  </div>
  <div>
    <p class="footer-attribute"><?= $site->photoCitation() ?></p>
    <p class="footer-attribute"><?= $site->photoCitationTwo() ?></p>
  </div>
</footer>
