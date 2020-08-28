<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Xenith Computer Club</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="icon" href="./favicon.png" type="image/png">
</head>
<body>
  <div class="banner" style="background-image: url(./assets/banner-default.png); height: 300px; background-size: 3840px 350px; background-position:60% -50px;"></div>

  <iframe src="./toolbar.html" style="height:45px;" scrolling="no"></iframe>

  <div class="row">
    <div>
      <p><a href="https://github.com/xenithx-d/">Xenith</a> is a computer club based out of <a href="https://academyacl.org">Academy ACL</a>.</p>
      <p>Our members are aged 4th grade through 8th grade.</p>
    </div>
  </div>
  <?php
$yr=date("Y");
if ($yr="2020") {
  echo  "© 2020 Xenith Computer Club";}
  else {
  echo  "© 2020 - " . $yr . " Xenith Computer Club";}?>
</body>
</html>
