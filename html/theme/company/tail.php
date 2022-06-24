<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
        <a href="#hd" id="top_btn">상단으로</a>
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <df-messenger
          intent="WELCOME"
          chat-title="쏘비스"
          agent-id="ee013e9c-f431-4d1b-b2cc-5a9832cf14ad"
          language-code="ko"
        ></df-messenger>
    </div>
</div>
<script src="<?php echo G5_JS_URL ?>/jquery.flexisel.js"></script>
<!-- } 콘텐츠 끝 -->
<!-- 배너시작-->
<div class="hidden1024" style="margin-left:auto;margin-right:auto;width:80%;overflow:hidden;">
	<ul id="myCarousel"> 
	    <li><a href="https://deu.ac.kr"><img src="<?php echo G5_THEME_IMG_URL ?>/banner1.jpg" alt="banner1"/></a></li>   
	    <li><a href="http://ipsi.deu.ac.kr/main/default.asp"><img src="<?php echo G5_THEME_IMG_URL ?>/banner2.jpg" alt="banner2"/></a></li>   
	    <li><a href="https://dap.deu.ac.kr/sso/login.aspx"><img src="<?php echo G5_THEME_IMG_URL ?>/banner3.jpg" alt="banner3"/></a></li>   
	    <li><a href="https://career.deu.ac.kr/"><img src="<?php echo G5_THEME_IMG_URL ?>/banner4.jpg" alt="banner4"/></a></li>   
	    <li><a href="http://lib.deu.ac.kr/lib/SlimaPlus.csp"><img src="<?php echo G5_THEME_IMG_URL ?>/banner5.jpg" alt="banner5"/></a></li>
	    <li><a href="https://icee.deu.ac.kr"><img src="<?php echo G5_THEME_IMG_URL ?>/banner6.jpg" alt="banner6"/></a></li>
	</ul>
</div>
<div class="clearout"></div> 
<script type="text/javascript">
$(window).load(function() {
  $("#myCarousel").flexisel({
    visibleItems: 6,
    itemsToScroll: 3,
    animationSpeed: 400,
    infinite: true,
    navigationTargetSelector: null,
    autoPlay: {
      enable: false,
      interval: 5000,
      pauseOnHover: true
    },
    responsiveBreakpoints: { 
      portrait: { 
        changePoint:480,
        visibleItems: 1,
        itemsToScroll: 1
      }, 
        landscape: { 
        changePoint:640,
        visibleItems: 2,
        itemsToScroll: 2
      },
        tablet: { 
        changePoint:768,
        visibleItems: 3,
        itemsToScroll: 3
      }
    }
  });
});
</script>


<!--배너 끝 -->


<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div id="ft_wr">

        <div id="ft_copy">
            <a href="">개인정보취급방침</a>
            <a href="">서비스이용약관</a>
            <a href="/1_1_introduce.php">학과소개</a>
            <a href="/1_3_road.php">오시는길</a>   
            <a href="">사이트맵</a>   
        </div>
        <div id="ft_company">
            <p class="ft_info">TEL. 051-890-1724 &nbsp; FAX. 051-890-2629 <br/>부산광역시 부산진구 엄광로 176번지(동의대학교) 정보공학관 9층 <br>
            </p>
            <p class="ft_copy">Copyright &copy; <b>동의대학교 컴퓨터 소프트웨어 공학과</b> All rights reserved.<br/><br/>
            해당 홈페이지는 본 학과 소속 학생인 14학번 박재현 학생이 제작 하였음.</p>

        </div>
    </div>
</div>

<script>
$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
</script>

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
<div id="ft_dv">
<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<a href="<?php echo get_device_change_url(); ?>" id="device_change">모바일 버전으로 보기</a>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
</div>
<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
