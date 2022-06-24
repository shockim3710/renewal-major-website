<?php
$g5['title'] = "안내도 및 대피로";
include_once('./_common.php');
include_once('./_head.php');
?>
<!--본문 시작-->
<div class="contents-wrapper">
    <!--사이드메뉴-->
    <div class="side-menu">
        <header class="sidemenuheader" role="banner">
            <h1 class="logo">
                <a href=""><span>학과안내</span></a>
            </h1>
            <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                <ul class="unstyled list-hover-slide">
                    <li><a href="/1_1_introduce.php">학과장인사말</a></li>
                    <li><a href="/1_2_goal.php">교육목표 및 연혁</a></li>
                    <li><a href="/1_3_road.php">위치 및 연락처</a></li>
                    <li><a href="/1_4_information_map.php">안내도 및 대피로</a></li>
                </ul>
                </nav>
            </div>
        </header>
    </div>
    
    <div class="contents">
	 <div class="navigator">
            홈 > 학과소개 > 안내도 및 대피로
            </div>
        <div class="contents-header">
            안내도 및 대피로
        </div>
        <div class="contents-body">
            <div class="normaltext">
            <img src="/img/info_map.jpg" name=info usemap="#room" width="750" height="550" alt="안내도 및 대피로">
            </div>
            <map name="room">
                <area onmouseover="if(document.images) info.src='/img/class_901.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="117, 171, 138, 220" alt="901호">
                <area onmouseover="if(document.images) info.src='/img/class_903.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="162, 171, 183, 220" alt="903호">
                <area onmouseover="if(document.images) info.src='/img/class_904.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="184, 171, 205, 220" alt="904호">
                <area onmouseover="if(document.images) info.src='/img/class_905.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="206, 171, 227, 220" alt="905호">
                <area onmouseover="if(document.images) info.src='/img/class_906.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="228, 171, 251, 220" alt="906호">
                <area onmouseover="if(document.images) info.src='/img/class_907.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="253, 171, 274, 220" alt="907호">
                <area onmouseover="if(document.images) info.src='/img/class_911.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="477, 171, 555, 220" alt="911호">
                <area onmouseover="if(document.images) info.src='/img/class_912.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="555, 171, 630, 220" alt="912호">
                <area onmouseover="if(document.images) info.src='/img/class_913.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="603, 256, 660, 300" alt="913호">
                <area onmouseover="if(document.images) info.src='/img/class_914.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="545, 256, 600, 300" alt="914호">
                <area onmouseover="if(document.images) info.src='/img/class_915.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="455, 256, 520, 300" alt="915호">
                <area onmouseover="if(document.images) info.src='/img/class_916.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="354, 256, 432, 300" alt="916호">
                <area onmouseover="if(document.images) info.src='/img/class_918.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="230, 256, 296, 300" alt="918호">
                <area onmouseover="if(document.images) info.src='/img/Terrace1.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="665, 207, 685, 256" alt="테라스1">
                <area onmouseover="if(document.images) info.src='/img/Terrace2.jpg'" onmouseout="if(document.images)
                    info.src='/img/info_map.jpg'" shape = "rect" coords="44, 211, 64, 279" alt="테라스2">
            </map>
        </div>
    </div>
</div>

<?php
include_once("./_tail.php");
?>