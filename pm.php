<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Alexei Personal Business Card">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <script src="res/script.js"></script>
  </head>

  <body>
    <div class="wrapper">
      <!-- Navigation -->
      <nav>
        <a href="index.html">Home</a>
        <a href="exp.html">Projects</a>
        <a href="hobby.html">Hobby</a>
        <a href="pm.php" class="active">Contact</a>
      </nav>
      <!-- Main Text -->
      <div class="body-text">
        <h2>Contact details:</h2>
        <section>
          Email: alexei.vasko@outlook.com<br />
          <br />
          Phone: +4917634385473 (WhatsApp & Telegram)<br />
        </section>
        <!-- Contact form -->
        <h2>Contact form:</h2>
        <form method="post" action="pm.php">
  					<input class="form-input" type="text" name="name" placeholder="Name">
  					<input class="form-input" type="email" name="email" placeholder="Email">
  					<textarea class="form-text-input" name="message" placeholder="Message"></textarea>
  					<input class="form-button" type="submit" name="submit" value="Send Email">
            <div class="output">
              <?php
                $email_to = "alexei.vasko@outlook.com";
                $email_subject = "Hello! Someone contacted me.";
                $from = 'Received via github/business-card';

                $name = $_POST['name']; // required
                $email = $_POST['email']; // required
                $message = $_POST['message']; // required

                $body = "From: $name\n E-Mail: $email\n Message:\n $message";

                if ($_POST['submit']) {
                  if ($name != '' && $email != '') {
                    if (mail ($email_to, $email_subject, $body, $from)) {
                      echo '<p style="font-size:1em; color:#32CD32;">Your message has been sent!</p>';
                    } else {
                      echo '<p style="font-size:1em; color:#B22222;">Something went wrong, go back and try again!</p>';
                    }
                  } else {
                    echo '<p style="font-size:1em; color:#B22222;">Please fill in all required fields!!</p>';
                  }
                }
              ?>
            </div>
  			</form>
      </div>
      <!-- Social Media Buttons -->
      <div class="social">
        <a href="https://www.github.com/GekkoTheFirst" target="_blank">
          <img src="images/GitHub-Mark-32px.png" alt="GitHub" class="social-icon">
          <span class="tooltip">GekkoTheFirst</span>
        </a>
        <a href="https://www.instagram.com/victor.the.traveler" target="_blank">
          <img src="images/glyph-logo_May2016.png" alt="Instagram" class="social-icon">
          <span class="tooltip">victor.the.traveler</span>
        </a>
        <a href="https://www.linkedin.com/in/alexeivasko" target="_blank">
          <img src="images/In-Black-34px-R.png" alt="LinedIn" class="social-icon-linkedin">
          <span class="tooltip">alexeivasko</span>
        </a>
      </div>
    </div>
  </body>
</html>
