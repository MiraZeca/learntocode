<?php
include("includes/config.php");
include("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="sr">

<head>
  <?php include("templates/header.php"); ?>
</head>

<body id="contact">

  <?php include("templates/main_header.php"); ?>

  <main>
    <div class="container white-container">
      <h1>Kontakt</h1>
      <div class="clearfix">
        <div class="col-1-3">
          <div class="info">
            <h3>Ako želite pravi odmor</h3>
            <p class="address">Pogledajte ovu destinaciju!</p>
            <p>Tel: <a href="tel:242-368-2014">242-368-2014</a></p>
            <p>From USA & Canada: <a href="tel:800-223-6961">800-223-6961 Direct</a></p>
            <p>email: <a href="mailto:info@smallhope.com">info@smallhope.com</a></p>
            <p>Facebook: <a href="https://www.facebook.com/smallhope1960/">smallhope1960</a></p>
            <p>Instagram: <a href="https://www.instagram.com/smallhopebay/">@smallhopebay</a></p>
            <p>Website: <a href="https://www.smallhope.com/">www.smallhope.com</a></p>
          </div>
        </div>
        <div class="col-2-3">
          <div class="map">
            <div class="videoWrapper">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5185.090133254909!2d-77.81921978792293!3d24.749817556950582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x892f358c00000000%3A0x74da389373fb9d1b!2sSmall%20Hope%20Bay%20Lodge!5e1!3m2!1sen!2srs!4v1644447698704!5m2!1sen!2srs" width="600" height="450" allowfullscreen></iframe>
              <div class="see-map">
                <span>Pogledaj mapu</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="contact">
        <h2>Za više info, pišite mi...</h2>

        <div class="col-1-2">
          <!-- Poruka -->
          <div class="alert alert-success" style="display: none;">
            <strong>Poruka je uspešno prosleđena!</strong> Hvala na interesovanju.
          </div>
          <!-- Forma -->
          <form action="_send-email.php" method="post" id="contact-form">
            <div class="form-group">
              <label for="SenderName">Ime i prezime<span>*</span></label>
              <input type="text" name="SenderName" class="form-control" id="SenderName" required>
            </div>
            <div class="form-group">
              <label for="SenderEmail">E-mail<span>*</span></label>
              <input type="email" name="SenderEmail" class="form-control" id="SenderEmail" required>
            </div>
            <div class="form-group">
              <label for="SenderPhone">Broj telefona</label>
              <input type="text" name="Sender[Phone]" class="form-control" id="SenderPhone" required>
            </div>
            <div class="form-group">
              <label for="SenderMessage">Poruka<span>*</span></label>
              <textarea name="SenderMessage" id="SenderMessage" class="form-control" required></textarea>
            </div>
            <button class="btn" type="submit">Pošalji</button>
          </form>
        </div>
      </section>

    </div>
  </main>

  <?php include("templates/footer.php"); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/messages_sr_lat.js"></script>
  <script src="js/main.js"></script>
</body>

</html>