<?php

$g5['title'] = "ABEEK";
include_once('./_common.php');
include_once('./_head.php');
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--<link rel="stylesheet" href="theme/company/css/contents-header.css">-->
<div class="contents-wrapper">
    <!--사이드메뉴-->

    <!--본문 컨텐츠-->
    <div class="contents">
    
        <div class="navigator">
            홈 > 교수진
        </div>
        <div class="contents-header">
            교수진 
        </div>
        <div class="contents-body">
            <div class="bodytitle">
            전임 교수
            </div>                  
                <div class="prof_list">

                    <div class="prof_box"> <img src="/img/professor/2.gif" alt="권오준 교수">
                        <ul>
                            <li class="prof_name">권오준</li>
                            <li><strong>연구 및 관심분야</strong>인공지능, 컴퓨터 네트워크, 정보 보호</li>
                            <li><strong>연구실</strong>정보공학관 903호</li>
                            <li><strong>전화번호</strong>051-890-1725</li>
                            <li><strong>E-mail</strong><a href="mailto:ojkwon@deu.ac.kr">ojkwon@deu.ac.kr</a></li>
                            <!-- <li class="profhomeButton"><a href="https://www.deu.ac.kr/www/dept/member/55/2">교수홈페이지</a></li> -->
                            <li class="profhomeButton" id="btn" onclick="prof_info('./ojkwon.html');">교수실적소개</li>

                        </ul>
                    </div>

                    <div class="prof_box"> <img src="/img/professor/3.gif" alt="권순각 교수">
                        <ul>
                            <li class="prof_name">권순각</li>
                            <li><strong>연구 및 관심분야</strong>멀티미디어 정보처리, 영상통신</li>
                            <li><strong>연구실</strong>정보공학관 904호</li>
                            <li><strong>전화번호</strong>051-890-1727</li>
                            <li><strong>E-mail</strong><a href="mailto:skkwon@deu.ac.kr">skkwon@deu.ac.kr</a></li>
                            <li class="profhomeButton" id="btn" onclick="prof_info('./skkwon.html');">교수실적소개</li>
                        </ul>
                    </div>

                    <div class="prof_box"> <img src="/img/professor/4.gif" alt="김성우 교수">
                        <ul>
                            <li class="prof_name">김성우</li>
                            <li><strong>연구 및 관심분야</strong>임베디드시스템, 운영체제</li>
                            <li><strong>연구실</strong>정보공학관 905호</li>
                            <li><strong>전화번호</strong>051-890-1728</li>
                            <li><strong>E-mail</strong><a href="mailto:libero@deu.ac.kr">libero@deu.ac.kr</a></li>
                            <li class="profhomeButton" id="btn" onclick="prof_info('./libero.html');">교수실적소개</li>
                        </ul>
                    </div>

                    <div class="prof_box"> <img src="/img/professor/5.gif" alt="이중화 교수">
                        <ul>
                            <li class="prof_name">이중화</li>
                            <li><strong>연구 및 관심분야</strong>데이터베이스, 자료구조, 웹 시스템</li>
                            <li><strong>연구실</strong>정보공학관 906호</li>
                            <li><strong>전화번호</strong>051-890-1729</li>
                            <li><strong>E-mail</strong><a href="mailto:junghwa@deu.ac.kr">junghwa@deu.ac.kr</a></li>
                            <li class="profhomeButton" id="btn" onclick="prof_info('./junghwa.html');">교수실적소개</li>
                        </ul>
                    </div>

                    <div class="prof_box"> <img src="/img/professor/6.gif" alt="이종민 교수">
                        <ul>
                            <li class="prof_name">이종민</li>
                            <li><strong>연구 및 관심분야</strong>모바일 컴퓨팅, 병렬처리(GPU컴퓨팅), S/W공학, OOAD</li>
                            <li><strong>연구실</strong>정보공학관 907호</li>
                            <li><strong>전화번호</strong>051-890-1736</li>
                            <li><strong>E-mail</strong><a href="mailto:jongmin@deu.ac.kr">jongmin@deu.ac.kr</a></li>
                            <li class="profhomeButton"><a href="https://compnet.deu.ac.kr/homepage2/index.html" target="_blank">교수홈페이지</a></li>
                        </ul>
                    </div>

                    <div class="prof_box"> <img src="/img/professor/7.gif" alt="박유현 교수">
                        <ul>
                            <li class="prof_name">박유현</li>
                            <li><strong>연구 및 관심분야</strong>인터넷 시스템, 클러스터 시스템</li>
                            <li><strong>연구실</strong>정보공학관 901호</li>
                            <li><strong>전화번호</strong>051-890-1737</li>
                            <li><strong>E-mail</strong><a href="mailto:yhpark@deu.ac.kr">yhpark@deu.ac.kr</a></li>
                            <li class="profhomeButton" id="btn" onclick="prof_info('./yhpark.html');">교수실적소개</li>
                        </ul>
                    </div>

                    <div class="prof_box"> <img src="/img/professor/8.jpg" alt="임영호 교수">
                        <ul>
                            <li class="prof_name">임영호</li>
                            <li><strong>연구 및 관심분야</strong>컴퓨터 응용, 컨텐츠 제작 기술</li>
                            <li><strong>연구실</strong>정보공학관 808호</li>
                            <li><strong>전화번호</strong>051-890-1847</li>
                            <li><strong>E-mail</strong><a href="mailto:yhleem@deu.ac.kr">yhleem@deu.ac.kr</a></li>
                            <li class="profhomeButton" id="btn" onclick="prof_info('./yhleem.html');">교수실적소개</li>
                        </ul>
                    </div>

                    <div class="prof_box"> <img src="/img/professor/9.gif" alt="장희숙 교수">
                        <ul>
                            <li class="prof_name">장희숙</li>
                            <li><strong>연구 및 관심분야</strong>소프트웨어공학, 시스템 분석 설계, 네트워크 프로토콜</li>
                            <li><strong>연구실</strong>정보공학관 701호</li>
                            <li><strong>전화번호</strong>051-890-1815</li>
                            <li><strong>E-mail</strong><a href="mailto:jang1052@deu.ac.kr">jang1052@deu.ac.kr</a></li>
                            <li class="profhomeButton" id="btn" onclick="prof_info('./jang1052.html');">교수실적소개</li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="clearfix"></div>
        <div class="contents-body" style="margin-top:0px;">
            <div class="bodytitle">
            명예 교수
            </div>                  
                <div class="prof_list">

                    <div class="prof_box"> <img src="/img/professor/1.jpg" alt="김태석 교수">
                        <ul>
                            <li class="prof_name">김태석</li>
                            <li><strong>연구 및 관심분야</strong>자연어처리, 프로그래밍 언어</li>
                            <li><strong>E-mail</strong><a href="mailto:tskim@deu.ac.kr">tskim@deu.ac.kr</a></li>
                        </ul>
                    </div>
                </div>
                
        </div>
        
    </div>

<div id="professor_container">

</div>

<script>

</script>
<script type="text/javascript">
    function retrievemore(gubun) {
        if (gubun == 'paper') {
            $("[id*='paperlst']").css('display', 'list-item');
            $('#iLayoutSubContent_deptmember_more_논문').css('display', 'none');
            $('#iLayoutSubContent_deptmember_close_논문').css('display', 'block');
        }
        else if (gubun == 'book') {
            $("[id*='booklst']").css('display', 'list-item');
            $('#iLayoutSubContent_deptmember_more_저서').css('display', 'none');
            $('#iLayoutSubContent_deptmember_close_저서').css('display', 'block');
        }
        else if (gubun == 'academic') {
            $("[id*='academiclst']").css('display', 'list-item');
            $('#iLayoutSubContent_deptmember_more_학술발표').css('display', 'none');
            $('#iLayoutSubContent_deptmember_close_학술발표').css('display', 'block');
        }
        else if (gubun == 'patents') {
            $("[id*='patentslst']").css('display', 'list-item');
            $('#iLayoutSubContent_deptmember_more_특허').css('display', 'none');
            $('#iLayoutSubContent_deptmember_close_특허').css('display', 'block');
        }
        else if (gubun == 'create') {
            $("[id*='createlst']").css('display', 'list-item');
            $('#iLayoutSubContent_deptmember_more_전시창작').css('display', 'none');
            $('#iLayoutSubContent_deptmember_close_전시창작').css('display', 'block');
        }
        else if (gubun == 'research') {
            $("[id*='researchlst']").css('display', 'list-item');
            $('#iLayoutSubContent_deptmember_more_연구수상').css('display', 'none');
            $('#iLayoutSubContent_deptmember_close_연구수상').css('display', 'block');
        }
    }

    function retrieveclose(gubun) {
        if (gubun == 'paper') {
            $("[id*='paperlst']").css('display', 'none');
            $('#iLayoutSubContent_deptmember_more_논문').css('display', 'block');
            $('#iLayoutSubContent_deptmember_close_논문').css('display', 'none');
        }
        else if (gubun == 'book') {
            $("[id*='booklst']").css('display', 'none');
            $('#iLayoutSubContent_deptmember_more_저서').css('display', 'block');
            $('#iLayoutSubContent_deptmember_close_저서').css('display', 'none');
        }
        else if (gubun == 'academic') {
            $("[id*='academiclst']").css('display', 'none');
            $('#iLayoutSubContent_deptmember_more_학술발표').css('display', 'block');
            $('#iLayoutSubContent_deptmember_close_학술발표').css('display', 'none');
        }
        else if (gubun == 'patents') {
            $("[id*='patentslst']").css('display', 'none');
            $('#iLayoutSubContent_deptmember_more_특허').css('display', 'block');
            $('#iLayoutSubContent_deptmember_close_특허').css('display', 'none');
        }
        else if (gubun == 'create') {
            $("[id*='createlst']").css('display', 'none');
            $('#iLayoutSubContent_deptmember_more_전시창작').css('display', 'block');
            $('#iLayoutSubContent_deptmember_close_전시창작').css('display', 'none');
        }
        else if (gubun == 'research') {
            $("[id*='researchlst']").css('display', 'none');
            $('#iLayoutSubContent_deptmember_more_연구수상').css('display', 'block');
            $('#iLayoutSubContent_deptmember_close_연구수상').css('display', 'none');
        }
    }

    function showModal_Prof(id, no) {
        $('#iLayoutSubContent_deptmember_hdn아이디').val(id);
        $('#iLayoutSubContent_deptmember_hdn모달분류연번').val(no);
        $('#iLayoutSubContent_deptmember_btn모달조회_교수소개').click();
    }

    function InputSession(detailno) {
        $('#iLayoutSubContent_deptmember_hdn분류연번').val(detailno);
        $('#iLayoutSubContent_deptmember_btn분류').click();
    }

</script>

<script>
    // $(".profhomeButton").click( function() {
    //     var url = "./11100.html";
    //     $("#professor_container").load(url);
    //     // $("html, body").addClass("not_scroll");       
    

    // });
    function prof_info(url) {
        $("#professor_container").load(url);
        $("html, body").addClass("not_scroll");
    }


$(document).on("click",".close",function() {
    console.log("hi")
    $(".modal").css("display","none");
    // $("html, body").removeClass("not_scroll");
    //     console.log("hello");
    //     $('.close').css('display','none');
    //     $("html, body").removeClass("not_scroll");
})
    // $(".close").click = function(){
       

    // }
    
</script>

<?php
include_once("./_tail.php");
?>
