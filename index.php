<?php
  $get = isset($_GET['load']) ? $_GET['load'] : '';
  if(strpos(isset($_GET['load']) ? $_GET['load'] : '','/language/') !== false) {
    $loadurl = file_get_contents("home.html");
    echo($loadurl);
    exit;
  }

  if($get == "/settings" || $get == "/language" ||  $get == "/" || $get == "")
  {
    $loadurl = file_get_contents("home.html");
    echo($loadurl);
    exit;
  }
  include("includes/config.php");
  include("includes/functions.php");
  $loadurl = $get;
  $loadurl = "$domaintoproxy$loadurl";
  $loadurl = str_replace(" ", "+", $loadurl);
  $loadurl = get_data("$loadurl");
  $loadurl = remove_bloat("$loadurl", $footerCode);
  echo($loadurl);
  exit;
?>


<!-- PopAds.net Popunder Code for www.tpbay.ga -->
<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
  var _pop = _pop || [];
  _pop.push(['siteId', 1381494]);
  _pop.push(['minBid', 0]);
  _pop.push(['popundersPerIP', 0]);
  _pop.push(['delayBetween', 0]);
  _pop.push(['default', false]);
  _pop.push(['defaultPerDay', 0]);
  _pop.push(['topmostLayer', false]);
  (function() {
    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
    var s = document.getElementsByTagName('script')[0]; 
    pa.src = '//c1.popads.net/pop.js';
    pa.onerror = function() {
      var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
      sa.src = '//c2.popads.net/pop.js';
      s.parentNode.insertBefore(sa, s);
    };
    s.parentNode.insertBefore(pa, s);
  })();
/*]]>/* */
</script>
<!-- PopAds.net Popunder Code End -->
