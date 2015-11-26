<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
@yield('head')
</head>
<!--header-->
<body>
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
  <div class="denki__kvarea">
    <h1 class="denki__ttlimg">電気代を安くする</h1>
    <p class="denki__ttltxt">毎月の生活に必要不可欠な水道光熱費。生活するうえで欠かせないとはいえ、大きな出費です。水道光熱費の大部分を占めている電気代は大幅節約のチャンス！</p>
  </div>
  <div class="g-nav__area denki">
    <ul class="dropmenu cf">
      <li class="dropmenu__free"><a href="http://recolife.com/free">電力自由化について知ろう</a>
       <ul>
        <li><a href="http://recolife.com/denki/free/description">電力自由化とは</a></li>
        <li><a href="http://recolife.com/denki/free/merit">メリット・デメリット</a></li>
       </ul>
      <li class="dropmenu__choice"><a href="http://recolife.com/denki/choice">電力会社を選ぶ</a>
       <ul>
        <li><a href="http://recolife.com/denki/choice/list">電力会社一覧</a></li>
        <li><a href="http://recolife.com/denki/choice/ranking">ランキング</a></li>
        <li><a href="http://recolife.com/denki/choice/hikaku">電力会社比較</a></li>
        <li><a href="http://recolife.com/denki/choice/search">電力会社乗り換え診断</a></li>
        <li><a href="http://recolife.com/denki/choice/estimate">電力会社口コミ</a></li>
       </ul>
      <li class="dropmenu__kaden"><a href="http://recolife.com/denki/kaden">家電別節約術</a>
       <ul>
        <li><a href="http://recolife.com/denki/kaden/air-con">エアコン</a></li>
        <li><a href="http://recolife.com/denki/kaden">冷蔵庫</a></li>
        <li><a href="http://recolife.com/denki/kaden">電気ストーブ</a></li>
        <li><a href="http://recolife.com/denki/kaden">テレビ</a></li>
        <li><a href="http://recolife.com/denki/kaden">IH</a></li>
        <li><a href="http://recolife.com/denki/kaden">照明</a></li>
        <li><a href="http://recolife.com/denki/kaden">スマートホン</a></li>
       </ul>
      <li class="dropmenu__make"><a href="http://recolife.com/denki/make">自家発電と売電</a>
       <ul>
        <li><a href="http://recolife.com/denki/make/solar">ソーラーパネルで自家発電</a></li>
        <li><a href="http://recolife.com/denki/make/fuel">燃料で自家発電</a></li>
        <li><a href="http://recolife.com/denki/make/wind">風力で自家発電</a></li>
        <li><a href="http://recolife.com/denki/make/man">人力で自家発電</a></li>
       </ul>
      <li class="dropmenu__qa"><a href="http://recolife.com/denki/qa">Q&A</a>
    </ul>
  </div>
<!--/header-->

@yield('contents')

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