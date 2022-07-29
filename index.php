<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP Contact Form with Captcha</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
  <div class="row">
  <div class="container mt-5 header">
    <div class="col-md-12">
    <?php include('contact.php'); ?>
    <!-- Captcha error message -->
    <?php if(!empty($captchaError)) {?>
      <div class="form-group col-12 text-center">
        <div class="alert text-center <?php echo $captchaError['status'];?> message">
          <?php echo $captchaError['message']; ?>
        </div>
      </div>
    <?php }?>
    <!-- Contact form -->
    <form action="" name="contactForm" method="post" enctype="multipart/form-data" class="regform">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      <div class="row">
        <div class="form-group col-6">
          <label>Enter Captcha</label>
          <input type="text" class="form-control" name="captcha" id="captcha">
        </div>
        <div class="form-group col-6">
          <label class="captcha">Captcha Code</label>
          <img src="captcha.php" class="captcha-image" alt="PHP Captcha"> <i class='fa fa-refresh fa-lg refresh-captcha rotate'></i>
        </div>
      </div>
      <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
    </form>
  </div>
</div>
</div>
</body>
<style>
.rotate{transition: all 0.5s ease;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
//    $(".rotate").click(function () {
//     $(this).toggleClass("down");
// })
  var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
    
}
</script>
<script>
  $(document).ready(function() {


  var degrees = 0;
  $('.rotate').click(function rotateMe(e) {

    degrees += 360;
    $('.rotate').css({
      'transform': 'rotate(' + degrees + 'deg)',
      '-ms-transform': 'rotate(' + degrees + 'deg)',
      '-moz-transform': 'rotate(' + degrees + 'deg)',
      '-webkit-transform': 'rotate(' + degrees + 'deg)',
      '-o-transform': 'rotate(' + degrees + 'deg)'
    });

  })
});

  </script>
</html>