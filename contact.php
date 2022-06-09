<?php
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];


    $to = "kelimcarthur@gmail.com";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    mail($to,$messageSubject,$body);
    $message_sent = true;
}
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doug's Upholstery</title>
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/e6a95c8b6e.js" crossorigin="anonymous"></script>
  <!-- google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Monofett&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<body>

  <header>
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="store.html">Store</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </header>

  <div class="container">
    <section class="contact-hero">
      <div class="contact-textbox">
        <h1 class="title">For All Inquiries</h1>
        <p class="content-para">
          512-348-6417
        </p>

          <?php
          if($message_sent):
             ?>

             <h2> You rock! (and you'll hear from me soon!) </h2>

             <?php>
           else:
             ?>

        <div class="form-container">
          <form action="contact.php" method="POST" class="form">
            <div class="form-group">

              <input type="text" class="form-control" id="name" name="name" placeholder="Spongebob" tabindex="1" required>
              <label for="name" class="form-label">Name</label>
            </div>
            <div class="form-group">

              <input type="email" class="form-control" id="email" name="email" placeholder="sb@squarepants.com" tabindex="2" required>
              <label for="" class="form-label">Email</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello!" tabindex="3" required>
              <label for="" class="form-label">Subject</label>
            </div>
            <div class="form-group"><label for="" class="form-label"></label>

              <textarea rows="5" cols="50" class="form-control" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
              <label for="message" class="form-label message-label">Message</label>
            </div>
            <div>
              <button type="submit" class="button button-accent-cta">Send Message!</button>
            </div>
          </form>
        </div>
      <?php
      endif;
       ?>
      </div>




    </section>
  </div>


    <footer>

      <div class="footer-flexbox-container">

        <div class="footer-1">
          <ul class="unstyled-list">
            <li class="list-title"><strong>Follow</strong></li>
            <li><a href="https://www.instagram.com/dougsupholstery/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.tiktok.com/@dougsupholstery"><i class="fa-brands fa-tiktok"></i></a></li>
          </ul>
        </div>


              <div class="footer-2">
                <ul class="unstyled-list">
                  <li class="list-title"><strong>Services</strong></li>
                  <li><a href="services.html">Custom</a></li>
                  <li><a href="services.html">Mobile</a></li>
                  <li><a href="shop.html">Shop</a></li>
                </ul>
              </div>


              <div class="footer-3">
                <ul class="unstyled-list">
                  <li class="list-title"><strong>Site Design</strong></li>
                  <li><a href="photocredits.html">Unsplash</a></li>
                  <li><a href="https://kelivela.com/">kelivela</a></li>
                </ul>
              </div>
            </div>

      <div class="footer-4">
        <ul class="unstyled-list">
          <li>&#9825;&#9825;&#9825;&#9825;</li>
          <li>
            <h2 class="footer-subtitle">ATX + upcycle</h2>
          </li>
          <li>&#9825;&#9825;&#9825;&#9825;</li>
        </ul>
      </div>



    </footer>
  </body>

  </html>
