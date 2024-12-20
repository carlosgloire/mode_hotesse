<?php
  require_once('news-letter.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Klee+One:wght@400;600&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Outfit:wght@100..900&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="logo_gen_consulting.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="styles.css">
  <title>Coming Soon mode et hotesse</title>
</head>
<body>
  <section class="content">

    <div class="logo">
        <p><img src="logo.png" alt="Logo general consulting mode et hotesse"></p>
    </div>
    <div class="countdown-container">
      <div>
        <div class="countdown" id="days">00</div>
        <div class="label">Days</div>
      </div>
      <div>
        <div class="countdown" id="hours">00</div>
        <div class="label">Hours</div>
      </div>
      <div>
        <div class="countdown" id="minutes">00</div>
        <div class="label">Minutes</div>
      </div>
      <div>
        <div class="countdown" id="seconds">00</div>
        <div class="label">Seconds</div>
      </div>
    </div>
    <h1>Coming Soon</h1>
    <p><span>#</span>underDevelopment</p>
    <p>Subscribe to the newsletter to stay in the latest news.</p>
    <div class="email-container">
        <form action="" method="post">
          <input type="text" class="email-input" name="mail-newsLetter" placeholder="Your E-mail">
          <button class="subscribe-button" name="send-NewsLetter">Subscribe</button>
        </form>
    
    </div>
    <?php if (!empty($error)): ?>
            <div class="alert alert-error" id="alertMessage">
                <?= $error; ?>
                <span class="close-btn" onclick="closeAlert()">&times;</span>
            </div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div class="alert alert-success" id="alertMessage">
                <?= $success; ?>
                <span class="close-btn" onclick="closeAlert()">&times;</span>
            </div>
        <?php endif; ?>
  </section>

  <script src="script.js"></script>
</body>
</html>
