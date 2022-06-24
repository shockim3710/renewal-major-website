<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_JS_URL.'/swiper.min.css">', 0);
add_javascript('<script src="'.G5_THEME_JS_URL.'/swiper.min.js"></script>', 10);

?>

<!--메인이미지-->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="bn_txt">
                <h2>미래지향적<br>S/W 인재 양성</h2>
                <p><br>동의대학교 <br>컴퓨터소프트웨어공학과</p>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<script>
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true
});
</script>

<!--메인이미지-->
<ul id="comp_if">
    <li  class="com_bg1">
        <a href="/1_1_introduce.php"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main_img1.jpg" alt="학과소개 바로가기"></a>
        <h2>학과소개</h2>
        <p>동의대학교<br>컴퓨터소프트웨어공학과 <br>
        학과소개</p>
        
    </li>
    <li  class="com_bg2">
        <a href="/4_1_prof.php"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main_img2.jpg" alt="교수진 바로가기"></a>
        <h2>교수진</h2>
        <p>학과소속 교수진을<br>소개합니다</p>
    </li>
    <li class="com_bg3">
        <a href="/2_1_abeek.php"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main_img3.jpg" alt="공학인 바로가기"></a>
        <h2>공학인증제도</h2>
        <p>차세대 소프트웨어<br>인재양성을 위한 <br>
        ABEEK 프로그램 소개</p>
    </li>
</ul>






<!-- 메인화면 최신글 시작 -->

<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/basic', 'notice', 4, 40);
?>
<div class="li_gall">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수, 캐시타임, option);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    $options = array(
        'thumb_width'    => 400, // 썸네일 width
        'thumb_height'   => 250,  // 썸네일 height
    );
    echo latest('theme/gallery', 'gallery', 4, 55, 1, $options);
    ?>
</div>

<!-- 메인화면 최신글 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
