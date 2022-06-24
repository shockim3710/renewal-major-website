<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>

<div id="ft">
    <div id="ft_copy">
        <div id="ft_company">
            <a href="/1_1_introduce.php">학과소개</a>
            <a href="/1_3_road.php">오시는길</a>   
            <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=gallery&page=">학과소식</a>
  
        </div>

        <p class="ft_info">TEL. 051-890-1724 &nbsp; FAX. 051-890-2629 <br/>부산광역시 부산진구 엄광로 176번지(동의대학교)<br> 정보공학관 9층 <br>
        <p class="copyright">Copyright &copy; <b>동의대학교 컴퓨터소프트웨어공학과.</b><br> All rights reserved.</p>

        <a href="#" class="top_btn">상단으로</a>
    </div>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }
    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>