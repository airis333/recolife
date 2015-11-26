<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
@yield('head')
</head>
<!--header-->
<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-70579107-1', 'auto');
  ga('send', 'pageview');
</script>

  <div class="header">
    <div class="header_inner">
      <div class="logo">
        <a href="http://recolife.com/"><img src="http://recolife.com/images/logo.png"></a>
       </div>
       <div class="sns">
        <ul class="sns__frame">
          <li class="sns-twitter">
          </li>
          <li class="sns-fb">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="top__kvarea">
    <h1 class="top__ttlimg">節約しよう</h1>
  </div>
  <div class="menu">
    <div class="menu__inner">
      <ul class="cf">
        <li class="menu__ttl">MENU</li>
        <li class="menu__denki"><a href="http://recolife.com/denki/">電気代を安くする</a></li>
      </ul>
    </div>
  </div>
<!--/header-->

<div class="contents">
@yield('contents')
</div>

<!--footer-->
<div class="footer">
  <div class="footer__inner">
   <ul class="footer__info cf">
    <li><a href="http://recolife.com/info.html">運営者情報</a></li>
    <li><a href="http://recolife.com/sitemap.html">サイトマップ</a></li>
   </ul>
   <p class="copyright">Copyright© <?php echo date('Y');?> おすすめ節約生活</p>
  </div>
</div>
<!--/footer-->
</body>
</html>