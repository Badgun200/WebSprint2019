<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require 'head.php'; ?>
  <body>
    <?php require 'nav.php'; ?>

    <div class="container">
    <form action="start.php" method="post">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="CZ" checked>
        <label class="form-check-label" for="exampleRadios1">
          CZ
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="EN" checked>
        <label class="form-check-label" for="exampleRadios1">
          EN
        </label>
      </div>
      <input type="submit" name="" value="Začít">
    </form>

    </div>
  </body>
</html>
