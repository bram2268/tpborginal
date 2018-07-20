<?php
  $mydomain = $_SERVER['HTTP_HOST'];
  $domaintoproxy = "https://thepiratebay.org";

# Add your custom code before the body (e.g. Google Analytics)
  $footerCode = <<<EOT

<!-- PopAds.net Popunder Code for www.tpbay.win -->
<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
  var _pop = _pop || [];
  _pop.push(['siteId', 2434261]);
  _pop.push(['minBid', 0.001000]);
  _pop.push(['popundersPerIP', 0]);
  _pop.push(['delayBetween', 0]);
  _pop.push(['default', false]);
  _pop.push(['defaultPerDay', 0]);
  _pop.push(['topmostLayer', true]);
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

<!-- <a href="https://proxybay.tv">More Pirate Bay Proxies</a><br> -->
<!-- <a href="https://proxybay.tv/setup.html">Set up your own proxy</a><br> -->
EOT;
?>

