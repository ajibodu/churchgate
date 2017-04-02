<!doctype html>
<html>
<head>
  <title>  </title>
  <meta name="keyword" content=""/>
  <meta name="description" content=""/>
  <link type="text/css" rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">
  <script></script>
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
        @include "includes/whats_hot.php";
        @include "includes/poll.php";
        @include "includes/recent_comments.php";
        @include "includes/social_page.php";
       ?>
      </div>
    </div>
    <!--main content of the page-->
    <div class="mainbar">
        <?php  @include "includes/mainbar.php" ?>
        <div class="mainbar_article">
          <div class="widget_cont">
            <?php @include "includes/widgets.php" ?>
          </div>
          <div class="post_cont">
            <?php  @include "includes/mainbar_articles.php" ?>
          </div>
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
