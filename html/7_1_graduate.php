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
                <a href=""><span>대학원</span></a>
            </h1>
            <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                <ul class="unstyled list-hover-slide">
                    <li><a href="/7_1_graduate.php">대학원과정</a></li>
                </ul>
                </nav>
            </div>
        </header>
    </div>
    <!--본문 컨텐츠-->
    <div class="contents">
        <div class="navigator">
            홈 > 대학원 > 대학원 과정
        </div>
        <div class="contents-header">
            대학원 과정
        </div>
        <div class="contents-body">
		<div class="bodytitle">
                	대학원 교육목표
            </div>
		<div class="normaltext">
			컴퓨터소프트웨어공학과는 컴퓨터에 기반을 둔 소프트웨어공학, 인터넷정보보호, 임베디드소프트웨어, 멀티미디어처리, 응용소프트웨어 등의 분야에 대한 전문 지식과 기술을 탐구하고 첨단 연구 수행 능력을 배양하여 정보화 산업사회에 기여 할 수 있는 창조적이고 진취적인 컴퓨터 전문 인력을 양성하는데 교육의 목표를 둔다.
		</div> 

            <div class="bodytitle">
	                대학원 교과과정
            </div>
            <ul class="accordion">
                <li class="accordion-item">
                    <input id="s1" class="hide" type="checkbox" checked>
                    <label for="s1"class="accordion-label">대학원 교과 과정</label>
                    <div class="accordion-child"><iframe src="/js/pdfjs/web/viewer.html?file=대학원교과과정수정.pdf#page=277" style="width:100%; height:600px;border:none;"></iframe></div>
                </li>
            </ul>     


           
        </div>
    </div>
</div>



<?php
include_once("./_tail.php");
?>
