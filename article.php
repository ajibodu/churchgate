<!Doctype html>
<html lang="en">
  <head>
    <title></title>
    <meta name="keyword" content=""/>
    <meta name="descrption" content=""/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/index.css"/>
    <link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="" type="text/js"></script>
    <style>
    .post_cont{
      width: 100%;
    }
    </style>
  </head>
<body>
<?php
@include "includes/top_bar.php";
@include "includes/radio.php";
@include "includes/menu.php";
?>
<div class="container">
  <!-- container for the main article startshers-->
  <div class="sidebar">
    <!--sidebar 25%-->
    <div class="latest_news">
      <!-- contains latest news-->
    <?php
      @include "includes/recent_comments.php";
      @include "includes/poll.php";
      @include "includes/social_page.php";
     ?>
    </div>
  </div>
  <!--main content of the page-->
  <div class="mainbar">
      <?php  @include "includes/mainbar.php" ?>
        <div class="post_cont">
          <?php  @include "includes/post_article.php" ?>
        </div>
  </div>
  <div class="clear"></div>
</div>

<footer>
  <?php
      @include "includes/footer.php"
   ?>
</footer>
</body>
</html>
