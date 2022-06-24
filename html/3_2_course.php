<?php

$g5['title'] = "ABEEK";
include_once('./_common.php');
include_once('./_head.php');
?>
<!--본문 시작-->
<div class="contents-wrapper">
    <!--사이드메뉴-->
    <div class="side-menu">
        <header class="sidemenuheader" role="banner">
            <h1 class="logo">
                <a href=""><span>학과과정</span></a>
            </h1>
            <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                <ul class="unstyled list-hover-slide">
                    <li><a href="/3_1_course.php">학년별 교과과정</a></li>
                    <li><a href="/3_2_course.php">교과목 개요</a></li>
                    <li><a href="/3_3_course.php">학과과정 연계표</a></li>
                   
                </ul>
                </nav>
            </div>
        </header>
    </div>
    <!--본문 컨텐츠-->
    <div class="contents">
        <div class="navigator">
            홈 > 학과과정 > 교과목 개요
        </div>
        <div class="contents-header">
            교과목 개요
        </div>
        <div class="contents-body">
            <div class="bodytitle">
                교과목 개요
            </div>
            <ul class="accordion">
                <li class="accordion-item">
                    <input id="s1" class="hide" type="checkbox" checked>
                    <label for="s1"class="accordion-label">2019 교과목 개요</label>
                    <div class="accordion-child"><iframe src="/js/pdfjs/web/viewer.html?file=2019_교과목개요.pdf" style="width:100%; height:600px;border:none;"></iframe></div>
                </li>
                
            </ul>     


           
        </div>
    </div>
</div>



<?php
include_once("./_tail.php");
?>
