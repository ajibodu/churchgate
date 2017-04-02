<div class="container">
  <div class="about">
    <div style="height:80px"class="logo">
    </div>
    <p class="about_info">
      Lorem Ipsum has been the industry's standard dummy
      text ever since the 1500s, when an unknown printer
      standard dummy text ever since the 1500s...
    </p>
    <p class="email">
      Email : &nbsp &nbsp information @churchgateradio.org
    </p>
  </div>


  <script>
  function myMap() {
  var mapProp= {
      center:new google.maps.LatLng(6.4897681,3.3125058),
      zoom:5,
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  </script>
  <div class="map" id="googleMap">
  </div>

  <div class="newsletter">
    <div class="head_cont">
      <h3 style="float:none">newsletter</h3>
    </div>
    <p style="line-height:1.6">To receive the latest update and post </br>
      Enter your email here :
    </p>
    <form method="post" action="">
      <input type="text" name="sub_email" placeholder="Enter your email here" />
      <input type="submit" id="submit" name="subscribe" value=""/>
      <label for="submit" class="fa fa-check"></label>
    </form>

    <div class="head_cont">
      <h3 style="float:none">connect with us</h3>
    </div>

    <div class="social_cont">
      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
    </div>
  </div>

</div>
<div class="developer">
  <div class="container">
      <span>Powerd by HopHub Technologies</span>
      <span>Back to Top <a class="fa fa-top"></a></span>
  </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr4W9Xcpmo7KxrOnehYrMyyPkQryB29pk&callback=myMap"></script>
