<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/index_head.php');
?>

<ul id="comp_bn">
    <li>
        <button type="button" class="accordion-toggle bubn_btn">학생회 SNS<span></span></button>
        <div class="accordion-content default bubn_img">
            <img src="<?php echo G5_URL ?>/theme/company/img/student1.jpg" alt="회사설명">
            <div class="bubn_img_ov">
		<h3 style="line-height:5px; margin-top:60px">facebook</h3>
                <a href="https://www.facebook.com/csedeu">facebook</a>
		<h3 style="line-height:5px; margin-top:50px">instagram</h3>
		<a href="https://www.instagram.com/deu_smartcse/">instagram</a>
            </div>
        </div>

    </li>

    <li>
        <button  onclick="location.href='https://cse.deu.ac.kr/bbs/board.php?bo_table=gallery'" type="button" class="bubn_btn">학과소식<span></span></button>
    </li>

    <li>
        <button  onclick="location.href='https://cse.deu.ac.kr/bbs/board.php?bo_table=notice'" type="button" class="bubn_btn">공지사항<span></span></button>
    </li>

</ul>
<script type="text/javascript">
  $(document).ready(function($) {
    $("#comp_bn").find(".accordion-toggle").click(function(){
        $(this).next().slideToggle('fast');
        $(".accordion-content").not($(this).next()).slideUp('fast');
    });
  });
</script>
<ul id="comp_if">
    <li  class="com_bg1">
      <a href="/1_1_introduce.php" class="combg1">
		<h2>학과소개</h2>
		<p>동의대학교 <br>컴퓨터소프트웨어공학과<br>학과소개</p>
	</a>
    </li>

    <li  class="com_bg2">
      <a href="/4_1_prof.php" class="combg2">
		<h2>교수진</h2>
		<p>저희 학과소속<br>교수진을 소개합니다</p>
	</a>
    </li>

    <li class="com_bg3">
        <a href="/2_1_abeek.php" class="combg3">
	        <h2>ABEEK</h2>
        	<p>차세대 소프트웨어 인재를<br>양성하기위한 ABEEK 프로그램</p>
	  </a>
    </li>

</ul>
<div id="comp_lt">
    <div class="li_notice">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'notice', 4, 18);
        ?>
    </div>
    <div class="li_gall">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수, 캐시타임, option);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        $options = array(
            'thumb_width'    => 143, // 썸네일 width
            'thumb_height'   => 89,  // 썸네일 height
            'content_length' => 40   // 간단내용 길이
        );
        echo latest('theme/gallery', 'gallery', 3, 25, 1, $options);
        ?>
    </div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
