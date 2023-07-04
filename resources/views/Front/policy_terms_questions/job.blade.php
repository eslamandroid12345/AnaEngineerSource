<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>فرص العمل</title>
  <link rel="stylesheet" href="{{asset('assets/style.css')}}">

</head>

<body>
<!-- partial:index.partial.html -->
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<!-- WRAPPER -->
    <div class="wrapper">

      <!-- COMING SOON -->
      <div class="coming ui-hero hero-center ui-tittle c-animator">
        <!-- CONTAINER -->
        <div class="container">

          <!-- LOGO -->
          <div class="logo"></div>
          <!-- HEADING -->
          <h2 class="heading">سوف تتوفر قريبا</h2>
          <p class="paragraph">هذه الخدمه ليست متوفرة حاليا لكت سوف تتوفر قريبا</p>
          <!-- CLOCK -->

          <!-- CARD EMAIL -->
          <div class="ui-card form-email shadow-card">
            <div class="header-card">
              <h4 class="heading-text">سوف نرسل لك في حال توفرها</h4>
            </div>
            <div class="body-card">
              <!-- FORM -->
              <form class="callback" action="mail.php" method="post">
                <div class="form-group">
                  <div class="input-group">
                    <input class="input-form-mail" type="text" name="mail" value="" placeholder="البريد" required data-validation-error-msg="Coloca tu email" disabled>
                  </div>
                  <div class="input-group-btn">
                    <button type="submit" name="button" class="btn-color btn-notify btn" disabled>ارسل لي اشعارا
                    <i class="fas fa-moon"></i></button>
                  </div>
                </div>
              </form>
              <!-- FORM -->
            </div>
          </div>
        </div>
        <!-- FIN CONTAINER -->
      </div>
      <!-- SECTION -->
      <div class="section">
        <div class="actions social-icon">
         </div>
      </div>
      <!-- FIN COMING SOON -->
    </div>
<!-- partial -->
  <script  src="{{asset('assets/script.js')}}"></script>

</body>
</html>
