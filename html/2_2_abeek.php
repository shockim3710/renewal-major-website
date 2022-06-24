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
                <a href=""><span>공학인증</span></a>
            </h1>
            <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                <ul class="unstyled list-hover-slide">
                    <li><a href="/2_1_abeek.php">공학인증소개</a></li>
                    <li><a href="/2_2_abeek.php">프로그램 내규</a></li>
                    <li><a href="/2_3_abeek.php">예비 지식</a></li>
                    <li><a href="/2_4_abeek.php">교육목표</a></li>
                    <li><a href="/2_5_abeek.php">학습성과</a></li>
                    <li><a href="/2_6_abeek.php">교과목이수체계</a></li>
                    <li><a href="/2_7_abeek.php">인증기준(KCC2015)</a></li>

                </ul>
                </nav>
            </div>
        </header>
    </div>
    <!--본문 컨텐츠-->
    <div class="contents">
        <div class="navigator">
            홈 > ABEEK > 프로그램 내규
        </div>
        <div class="contents-header">
            프로그램 내규
        </div>
        <div class="contents-body">
            <div class="bodytitle">
                공학인증 프로그램 내규
            </div>
            <ul class="accordion">
                <li class="accordion-item">
                    <input id="s1" class="hide" type="checkbox" checked>
                    <label for="s1"class="accordion-label">공학인증 프로그램 내규</label>
                    <div class="accordion-child"><iframe src="/js/pdfjs/web/viewer.html?file=2020공학인증프로그램내규.pdf" style="width:100%; height:600px;border:none;"></iframe></div>
                </li>   
            </ul>     

        </div>
    </div>
</div>



<?php
include_once("./_tail.php");
?>
