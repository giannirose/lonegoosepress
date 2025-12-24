<!DOCTYPE html>
<html>
<?php snippet('head') ?>

<body>
  <!-- smallHead is a smaller logo/title set -->
  <?php snippet('smallHead') ?>
  <!-- Begin navigation -->
  <?php snippet('navSet') ?>
  <!-- End Navigation -->

  <main class="main page-margin contact">

    <p class="center">If sending photos, pdf's, or other attachments please email directly: <br><a class="underline"
        href="mailto:info@lonegoosepress.com?subject=Inquiry">info@lonegoosepress.com</a>.
    </p>
    <p class="center">Message or call me at:<br>

      <a href="tel:5419537364">541 953 7364</a>
    </p>
    <p class="center">Studio/Mailing/Shipping address:<br>
      309 Black Knob View<br>
      Bisbee, Arizona 85603
    </p>

    <h1 class="center">Contact Form</h1>

    <hr>

    <?php if ($success): ?>
      <div class="alert success">
        <p>
          <?= $success ?>
        </p>
      </div>
    <?php else: ?>
      <?php if (isset($alert['error'])): ?>
        <div>
          <?= $alert['error'] ?>
        </div>
      <?php endif ?>
      <form class="form" aria-busy="" method="post" action="">
        <div class="honeypot">
          <label for="website">Website <abbr title="required">*</abbr></label>
          <input type="url" id="website" name="website" tabindex="-1">
        </div>
        <div class="field">
          <label for="name">
            Name <abbr title="required">*</abbr>
          </label>
          <input type="text" id="name" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" required>
          <?= isset($alert['name']) ? '<span class="alert error">' . esc($alert['name']) . '</span>' : '' ?>
        </div>
        <div class="field">
          <label for="email">
            Email <abbr title="required">*</abbr>
          </label>
          <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" required>
          <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
        </div>
        <div class="field">
          <label for="text">
            Text <abbr title="required">*</abbr>
          </label>
          <textarea id="text" name="text" required>
                                                        <?= esc($data['text'] ?? '') ?>
                                                        </textarea>
          <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
        </div>
        <input type="submit" name="submit" value="Submit">
      </form>
    <?php endif ?>
  </main>
  <hr>

  <?php snippet('scriptSource') ?>
</body>

</html>