<!DOCTYPE html>
<html lang="ko"> <!-- 휴먼랭귀지 -->
<head>
<meta charset="utf-8"> <!-- 문자셋 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.min.css">
<script src="javascript/jquery-3.2.1.min.js"></script>
<script src="javascript/jquery.bxslider.min.js"></script>
<script src="javascript/jquery.colorbox.js"></script>
<title>오버워치 타이틀</title>
</head>
<body>
<header>
<h1>오버워치</h1>
<nav>
<ul class="login">
<li><a href="">로그인</a></li>
</ul>
</nav> <!-- 메뉴 -->
</header> <!-- 첫머리 -->

<article>
<div id="top_images">
<img class="top_images" src="images/background_ow.jpg">
  <!--<ul class="bxslider">
    <li><img src="images/banner/pharah.png" /></li>
    <li><img src="images/banner/rein.png" /></li>
    <li><img src="images/banner/lucio.png" /></li>
    <li><img src="images/banner/tracer.png" /></li>
  </ul>-->
</div>

<section id="movies">
<h2>하이라이트</h2>
<ul class="highlight">
<li><a href="https://www.youtube.com/embed/Xvjnoagk6GU" class="youtube cboxElement" >싸이 - I LUV IT</a></li>
<li><a href="https://www.youtube.com/embed/_wZ-ezs33lM?ecver=2" class="youtube">오버워치 POTG 매드무비</a></li>
<li><div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/XtRv2GObI4E?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div></li>
<li><div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/5yFX5t2VNeo?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div></li>
<li><div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/DBLNvNmS1So?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div></li>
<li><div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/e2wOilZV820?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div></li>
<li><div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/4OclCw1rr0U?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div></li>
</ul>
</section>
<!--
<section>
  <ul class="test">
  <li>test1</li>
  <li>test2</li>
  <li>test3</li>
  <li>test4</li>

  </ul>
</section>
-->
</article> <!-- 본문 -->
<footer>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  onSlideAfter: function(i,j){
    $("a.bx-pager-link").each(function(){
      if($(this).hasClass("active")){
        $(this).css("background","#F00");
        $(this).animate({opacity:0.8},1500);
      }else{
        /*$(this).css("background","#666");
        $(this).css("opacity","1.0");*/
        $(this).css({background:"#666",opacity:1.0});
      }

    });

console.log(i);
console.log(j);
  }
});
});


$(document).ready(function(){
$(".youtube").colorbox({
iframe:true,
innerWidth:1024,
innerHeight:768
});
});
</script>
</script>
</footer> <!-- 끝머리 -->
</body>
</html>
