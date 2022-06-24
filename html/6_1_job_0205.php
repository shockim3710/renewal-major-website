<?php
$g5['title'] = "ABEEK";
include_once('./_common.php');
include_once('./_head.php');
?>
<style>
    .flip-card {
    background-color: transparent;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    float: left;
    margin: 10px;
    text-align: center;
    width: 22%;
    height: 150px;
    border: 1px solid #f1f1f1;
    max-width: 800px;
    perspective: 1000px; /* Remove this if you don't want the 3D effect */
    border-radius: 4px;
    }

    .row{
        position: relative;
        width: 100%;
        max-width: 1200px;
        height: fit-content;
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    button {
        background: #ffffff;
        background-color: rgba(255,255,255,0.5);
        outline: 0px;
        border: 0px;
        width: 100%;
        height:100%;
        display:block;
        cursor: pointer;
        
        color:#333;
        transition:all 0.9s, color 0.3s;
    }

    .hbutton:hover{
        color:#fff;
        box-shadow: 0 800px 0 0 rgba(0,0,0,0.25) inset,
                    0 -800px 0 0 rgba(0,0,0,0.25) inset;
    }

    .modal {
    display: none;
    position: fixed;
    z-index: 5;
    left: 0;
    top: 0;
    bottom: 1;
    width: 100%;
    height: 100%;
    overflow:-moz-hidden-unscrollable;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    }

    .headcon {
    width:100%;
    height: 65px;
    position: absolute;
    background-color: dodgerblue;
    }

    .modal-content{
    background-color: #fefefe;
    height:600px;
    margin: 3% auto;
    border: 1px solid #888;
    width: 50%;
    overflow:scroll;
    }

    .close {
    color:lightsteelblue;
    margin: 15px;
    float: right;
    font-size: 28px;
    font-weight: bold;
    }
    .close:hover,.close:focus{
    color: #ffffff;
    text-decoration: none;
    cursor: pointer;
    }
    .headtitle {
    float: left;
    font-size: large;
    margin-top: 17px;
    margin-left: 15px;
    color: #ffffff;
    }
    .titlecon{
    width: 100%;
    height: 150px;
    margin-top: 9%;
    }
    .titlelogo {
    float: left;
    margin-top: 10px;
    margin-left: 10px;
    width: 30%;
    height: 90%;
    }
    .titletext{
    float: left;
    margin-top : 10px;
    margin-left: 30px;
    width: 50%;
    height: 90%;
    }

    .vertical-line {
        width: 95%;
        height: 1px;
        background-color: lightgrey;
        margin-left: 20px;
    }

    .not_scroll{
        overflow:hidden
    }

    .not_scroll .cont {
        position: relative;
        top: 0;
    }
</style>

<!--본문 시작-->
<div class="contents-wrapper">
    <!--사이드메뉴-->
    <div class="side-menu">
        <header class="sidemenuheader" role="banner">
            <h1 class="logo">
                <a href=""><span>진로 및 취업</span></a>
            </h1>
            <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                <ul class="unstyled list-hover-slide">
                    <li><a href="/6_1_job.php">취업 현황</a></li>
                    <li><a href="http://software.kr/um/um03/um0301/um030102.do">졸업 후 진로</a></li>
                </ul>
                </nav>
            </div>
        </header>
    </div>
    <!--본문 컨텐츠-->
    <div class="contents">
        <div class="navigator">
            홈 > 진로 및 취업 > 취업
        </div>
        <div class="contents-header">
            취업
        </div>
        <div class="contents-body">
            <div class="bodytitle">
            		학과 취업 동향
            </div>
		<div class="normaltext">
			2000년 신설된 컴퓨터소프트웨어공학과는 부산 지역 유일의 소프트웨어 전문학과로서 지역의 핵심 소프트웨어 전문인력 공급을 담당하기 위한 혁신적인 교육체제, 실험/실습 환경 및 시설을 구축하고 있다.
                        이를 바탕으로 졸업생의 진출 분야도 삼성전자, 신용보증기금 등의 대기업과 공기업으로 넓어지고 있다.
		</div>
            <div class="bodytitle">
            		컴퓨터소프트웨어공학과 취업률 통계
            </div>
                <div class="normaltext">
                <table class="history_table" style="padding-right: 50px;">
			<thead>
				<tr>
					<th>년도</th>
					<th>졸업생</th>
					<th>진학자</th>
					<th>입대자</th>
					<th>취업률대상</th>
					<th>취업자</th>
					<th>취업률(%)</th>
					<th>졸업생 기준</th>
					<th>통계기준일</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>2019년도</th>
					<td>50</td>
					<td>0</td>
					<td>0</td>
					<td>50</td>
					<td>27</td>
					<td>54.0</td>
					<td>2018.8 / 2019.2</td>
					<td>2019.12.31</td>
				</tr>
				<tr>
					<td>2018년도</td>
					<td>38</td>
					<td>1</td>
					<td>1</td>
					<td>36</td>
					<td>22</td>
					<td>61.1</td>
					<td>2017.8 / 2018.2</td>
					<td>2018.12.31</td>
				</tr>
				<tr>
					<td>2017년도</td>
					<td>45</td>
					<td>1</td>
					<td>0</td>
					<td>44</td>
					<td>33</td>
					<td>75.0</td>
					<td>2016.8 / 2017.2</td>
					<td>2017.12.31</td>
				</tr>
				<tr>
					<td>2016년도</td>
					<td>61</td>
					<td>0</td>
					<td>0</td>
					<td>61</td>
					<td>41</td>
					<td>67.2</td>
					<td>2015.8 / 2016.2</td>
					<td>2016.12.31</td>
				</tr>
				<tr>
					<td>2015년도</td>
					<td>63</td>
					<td>3</td>
					<td>0</td>
					<td>60</td>
					<td>41</td>
					<td>68.3</td>
					<td>2014.8 / 2015.2</td>
					<td>2015.12.31</td>
				</tr>
				<tr>
					<td>2014년도</td>
					<td>40</td>
					<td>2</td>
					<td>0</td>
					<td>38</td>
					<td>29</td>
					<td>76.3</td>
					<td>2013.8 / 2014.2</td>
					<td>2014.12.31</td>
				</tr>
			</tbody>
		    </table>
		</div>

		<div class="bodytitle">취업 명예의 전당</div>
        <div class="normaltext">
            <div class = "row" >

                <div class="flip-card">
                    <button type="button" id="btn0" class="btn0 hbutton">
                        <img src="./logoimg/naver_logo.png" style="height:35%;width:65%;padding-top: 0px;"><p style="font-weight: bold;"><br/>2020년 졸업생 최O용</p>
                    </button>
                </div>


                <div class="flip-card">
                    <button type="button" id="btn1" class="btn1 hbutton">
                        <img src="./logoimg/ahnlab.png" style="height:35%;width:90%; margin-top: 0px;"><p style="font-weight: bold;"><br/>2020년 졸업생 정O훈</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn2" class="btn2 hbutton">
                        <img src="./logoimg/busanbank.png" style="height:35%;width:95%;margin-top: 0px;"><p style="font-weight: bold;"><br/>2019년 졸업생 이O혁</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn3" class="btn3 hbutton">
                        <img src="./logoimg/lotte.png" style="height:35%;width:95%;margin-right: 0px;"><p style="font-weight: bold;"><br/>2019년 졸업생 서O영</p>
                    </button>
                </div>


            </div>

            <div class = "row" >

                <div class="flip-card">
                    <button type="button" id="btn4" class="btn4 hbutton">
                        <img src="./logoimg/kimchang.png" style="height:35%;width:90%;margin-top: 0%;"><p style="font-weight: bold;"><br/>2019년 졸업생 진O현</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn5" class="btn5 hbutton">
                        <img src="./logoimg/douzone.png" style="height:35%;width:95%;margin-bottom: 0px;"><p style="font-weight: bold;"><br/>2019년 졸업생 박O혜</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn6" class="btn6 hbutton">
                        <img src="./logoimg/seun_bk.png" style="height:35%;width:95%;margin-bottom: 0px;"><p style="font-weight: bold;"><br/>2019년 졸업생 김O휘</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn7" class="btn7 hbutton">
                        <img src="./logoimg/sejung_bk.png" style="height:35%;width:95%;margin-bottom: 0px;"><p style="font-weight: bold;"><br/>2018년 졸업생 오O수</p>
                    </button>
                </div>

            </div>

            <div class = "row" >

                <div class="flip-card">
                    <button type="button" id="btn8" class="btn8 hbutton">
                        <img src="./logoimg/samsung_sds_bk.png" style="height:35%;width:80%;margin-bottom: 0px;"><p style="font-weight: bold;"><br/>2017년 졸업생 김O준</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn23" class="btn23 hbutton">
                        <img src="./logoimg/sk_c&c.png" style="height:35%;width:65%;padding-top: 0px;"><p style="font-weight: bold;"><br/>2016년 졸업생 이O오 </p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn9" class="btn9 hbutton">
                        <img src="./logoimg/samsung.png" style="height:35%;width:80%; "><p style="font-weight: bold;"><br/>2016년 졸업생 김O언</p>
                    </button>

                </div>

                <div class="flip-card">
                    <button type="button" id="btn10" class="btn10 hbutton">
                        <img src="./logoimg/busan.png" style="height:35%;width:90%;margin-top: 0px;"><p style="font-weight: bold;"><br/>2016년 졸업생 이O영</p>
                    </button>
                </div>    
            </div>

            <div class = "row" >

                <div class="flip-card">
                    <button type="button" id="btn11" class="btn11 hbutton">
                        <img src="./logoimg/parkland_bk.png" style="height:35%;width:80%;margin-top: 0px;"><p style="font-weight: bold;"><br/>2016년 졸업생 김O훈</p>
                    </button>
                </div>    

                <div class="flip-card">
                    <button type="button" id="btn12" class="btn12 hbutton">
                        <img src="./logoimg/busanbank.png" style="height:35%;width:95%;margin-top: 0px;"><p style="font-weight: bold;"><br/>2014년 졸업생 허O규</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn13" class="btn13 hbutton">
                        <img src="./logoimg/boeingkorea_bk.png" style="height:35%;width:95%;"><p style="font-weight: bold;"><br/>2014년 졸업생 이O섭</p>
                    </button>
                </div>    
                <div class="flip-card">
                    <button type="button" id="btn14" class="btn14 hbutton">
                        <img src="./logoimg/police.png" style="height:35%;width:85%;"><p style="font-weight: bold;"><br/>2013년 졸업생 구O늘</p>
                    </button>
                </div>

            </div>

            <div class = "row" >

                <div class="flip-card">
                    <button type="button" id="btn15" class="btn15 hbutton">
                        <img src="./logoimg/nbp.png" style="height:35%;width:90%;margin-top: 0px;"><p style="font-weight: bold;"><br/>2013년 졸업생 정O영</p>
                    </button>
                </div>		
                
                <div class="flip-card">
                    <button type="button" id="btn16" class="btn16 hbutton">
                        <img src="./logoimg/kcc.png" style="height:35%;width:80%;margin-bottom: 0%;"><p style="font-weight: bold;"><br/>2012년 졸업생 이O주</p>
                    </button>
                </div>
            
                <div class="flip-card">
                    <button type="button" id="btn17" class="btn17 hbutton">
                        <img src="./logoimg/dk.png" style="height:35%; width:70%;"><p style="font-weight: bold;"><br/>2012년 졸업생 정O욱</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn22" class="btn hbutton">
                        <img src="./logoimg/police.png" style="height:35%;width:65%;padding-top: 0px;"><p style="font-weight: bold;"><br/>2012년 졸업생 박O철</p>
                    </button>
                </div>

            </div>    
  
            

            <div class = "row" >

		<div class="flip-card">
                    <button type="button" id="btn18" class="btn18 hbutton">
                        <img src="./logoimg/card.png" style="height:35%;width:80%;margin-top: 0px;"><p style="font-weight: bold;"><br/>2011년 졸업생 문O호</p>
                    </button>
                </div>

               	<div class="flip-card">
                    <button type="button" id="btn19" class="btn19 hbutton">
                        <img src="./logoimg/aws_bk.png" style="height:35%;width:80%;margin-top: 0px;"><p style="font-weight: bold;"><br/>2010년 졸업생 이O호</p>
                    </button>
                </div>

                    
                <div class="flip-card">
                    <button type="button" id="btn20" class="btn20 hbutton">
                        <img src="./logoimg/busanitagency_bk.png" style="height:35%;width:80%;"><p style="font-weight: bold;"><br/>2009년 졸업생 이O훈</p>
                    </button>
                </div>

                <div class="flip-card">
                    <button type="button" id="btn21" class="btn21 hbutton">
                        <img src="./logoimg/etri.png" style="height:35%;width:100%;"><p style="font-weight: bold;"><br/>2007년 졸업생 최O석</p>
                    </button>
                </div>

            </div>

            

            <div id = "modal0" class="modal">
                <div class="modal-content"> 
                    <div class="headcon">
                        <p class = "headtitle">NAVER</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/naver_logo.png" style="width:100%;margin-top: 0px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2020년 졸업생 최O용</p>
                            <p style="font-size:medium"><br/>네이버 웹 개발자</p>
                        </div>
                    </div>
                   
                    <div class="con">
			 <p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">포털 및 기타 인터넷 정보매개 서비스업</p><br/>
                        <div class="vertical-line"></div>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                        <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">학과 프로젝트를 할 때, 이 프로젝트가 나중에 저의 포트폴리오가 될 것이라는 생각으로 시간 투자를 많이 했습니다.3학년부터는 방학마다 인턴을 갔습니다.4학년 2학기부터는 코딩 테스트를 준비와 함께 희망하는 회사, 직군의 채용공고들을 자주 보며 지원자격, 우대사항에서 부족한 부분에 대해 학습하였습니다.</p>
			<br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
			<p style="margin-left: 15px;font-size: medium;margin-top: 30px;">여러 인턴 경험이 취업에 큰 도움이 되었습니다.

입사 지원 시, 서류에서 경력사항과 자소서 스토리를 풀어가기 쉬워지고, 면접에서 받을 질문을 미리 확보할 수 있었습니다. (xx에서 인턴하면서 어떤 것을 했나요?)

그리고 방학마다 오는 2달의 시간을 열심히 보내는 좋은 계기가 됩니다. 혼자 집에서 공부하는 것보다 훨씬 많은 시간을 투자하게 되어 당시에는 힘들지만 저에게 큰 변화를 주었습니다.

회사에서는 기본기가 매우 튼튼하여 어떤 것을 가르쳐도 금방 익힐 수 있거나, 특정 분야의 경험이 있어 빨리 실무에 투입 가능한 신입을 선호합니다.

체험형 인턴도 좋으니 여기저기 찾아보며, 학생 때 학과생활 이외의 경험을 해보시길 추천드립니다.</p>
                    </div>
                </div>
            </div>


            <div id = "modal1" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">안랩</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/ahnlab.png" style="width:80%;margin-top: 32px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2020년 졸업생 정O훈</p>
                          <p  style="font-size:medium"><br/>커널 드라이버 개발</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">안티 바이러스를 포함해 컴퓨터 전반의 보안 솔루션을 제작 및 관리하는 정보보안업체</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">2학년 군 복학 후에 학과 팀 프로젝트를 열심히 하면서 많이 배울 수 있었습니다. 3학년때부터 1년에 1개씩 공모전을 나갔습니다.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">학교에서 배우는 게 실제로도 필요한 지식이고, 저도 아직 많이 부족하지만 팀 프로젝트에 욕심을 가지고 열심히 하면 많이 배울 수 있을 것 같습니다.</p>
                  </div>
              </div>
          </div>  

          <div id = "modal2" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">부산은행</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/busanbank.png" style="width:80%;margin-top: 50px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2019년 졸업생 이O혁</p>
                          <p  style="font-size:medium;"><br/>IT직군으로 입사 후 은행 업무 프로세스 이해를 위해 지점 근무 이후 유관부서로 배치예정</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">부산은행은 BNK금융그룹의 자회사로 대한민국의 지방은행 중 가장 규모가 큼</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">기초체력과 같은 학점을 잘 받도록 노력한 것 같습니다. 수업시간마다 적어도 하나씩은 얻어가자라는 마음으로 수강했습니다. 팀프로젝트를 할 때도 코딩실력을 키울 수 있는 기회로 삼자는 생각으로 최대한 완성도 있게 구현하려 했습니다. 
                        이후 기사자격증과 토익 등 기본적인 취업자격증을 준비했습니다.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">21세기에 컴퓨터를 전공할 수 있는 기회를 잡은 것은 정말 큰 행운입니다. 뛰어난 교수님들에게 많은 것을 배우고 잘 준비하여 더 크게 다가올 IT시대에 주인공이 되셨으면 좋겠습니다.</p>
                  </div>
              </div>
          </div>

          <div id = "modal3" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">롯데정보통신</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/lotte.png" style="width:80%;margin-top: 40px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2019년 졸업생 서O영</p>
                          <p  style="font-size:medium"><br/>물류센터 시스템 운영 및 개발</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">정보시스템과 관련된 설비, 인력, 하드웨어 등을 위탁 관리, 운영하는 SM사업부문과 정보시스템 구축 계획 및 운영 전략을 기획하고 시스템 설계 및 개발을 지원하는 SI사업부문이 있는 롯데그룹 계열 SI업체</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">관련 자격증을 취득하고 개발만 하기 보다는 설계서나 보고서 작성, 테스트 등의 전체적인 프로세스를 구축하며 준비했습니다.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">재학기간 취업을 위한 스펙 쌓기에 올인하는 것 보다는 그 시기에 맞는 다양한 경험을 해보고 많은 것들을 느껴보았으면 합니다.</p>
                  </div>
              </div>
          </div>          
                    
          <div id = "modal4" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">김앤장 법률사무소</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                        <img src="./logoimg/kimchang.png" style="width:80%;margin-top: 42px;margin-left: 15px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2019년 졸업생 진O현</p>
                          <p style="font-size:medium"><br/>Legal Tech Team</p>
                          <p style="font-size:medium">디지털 포렌식 연구원</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">정식 명칭은 김장 법률사무소. 현재는 대한민국 최대, 최고의 로펌으로 일부 언론에서는 '로펌계의 삼성'이라고 부름</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">정보 보안 분야는 폭 넓습니다. 내재된 여러 분야에 대해 전반적인 지식을 요구하는 분야입니다.
                        시스템 해킹, 리버스 엔지니어링, 악성코드 분석, 디지털 포렌식 등 다양한 분야로 나뉘어져 있기 때문에 각 분야별 공부를 우선적으로 수행했습니다. 이러한 공부 내용을 바탕으로 좀 더 실력을 쌓기 위해 여러 계획을 세웠습니다. 정보보호병이라는 특기병으로 입대하여 2년간 침해사고 대응, 악성코드 분석 등의 업무를 수행하며 갈고 닦을 수 있었고, 전역과 동시에 Best of the Best 라는 국가 정보보안 인재 양성 프로그램에 지원하여 다양한 프로젝트 수행을 하였습니다. 결과적으로 Best 10이라는 좋은 결과를 얻어낼 수 있었고 이러한 과정들을 통해 소프트웨어 공학 외 정보 보안 분야에 대한 제 커리어를 쌓아나갔습니다. 이와 함께 여러 해킹 방어 대회, 디지털 포렌식 대회 등에 도전하여 우승과 같은 실적을 통해 이러한 노력들에 대한 결실을 직접 확인해나갈 수 있었습니다. 이러한 제 능력을 바탕으로 LG 전자, 한국 전자 통신 연구원 등에서 근무할 수 있었고 최종적으로 제가 가진 능력을 십분 활용할 수 있는 현 직장에 디지털 포렌식 연구원으로 입사하였습니다.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">현재 주어진 자신의 환경에 안주하지 말고 목표를 가지고 늘 도전하는 삶을 살기 바랍니다.
                        IT 분야는 특히나 본인이 가진 능력이 최우선시 되는 분야이기 때문에 자신만의 강점을 만든다면 원하는 결과를 얻을 수 있을 것입니다.
                        4년이라는 시간은 매우 많은 것을 할 수 있는 시간입니다. 개발이든 정보 보안이든 본인이 하고 싶은 것을 먼저 찾고 매진하기에 충분한 시간이지요, 늦었다고 생각하지 말고 당장의 생각을 실천으로 옮길 수 있는 행동력을 보여주세요.</p>
                  </div>
              </div>
          </div>

          <div id = "modal5" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">더존 비즈온</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/douzone.png" style="width:80%;margin-top: 50px;margin-left: 30px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2019년 졸업생 박O혜</p>
                          <p  style="font-size:medium"><br/>플랫폼 서비스 개발</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">더존비즈온의 ERP시스템은 대한민국과 중국의 중소기업/벤처기업 위주로 1만여개 기업에서 사용</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">딱히 준비한 건 없고 면접이 중요한듯합니다.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">여러가지 프로젝트를 해보는 게 도움이 됩니다.</p>
                  </div>
              </div>
          </div>

          <div id = "modal6" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">세운철강(주)</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/seun.jpg" style="width:80%;margin-top: 10px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                          <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2019년 졸업생 김O휘</p>
                          <p  style="font-size:medium"><br/>전산직</p>
                      </div>
                  </div>
                 
                   <div class="con">
			 <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">냉연철판 제조(절단,가공),도매/주택신축판매(건설)/전자부품,소프트웨어 도소매,무역,전자상거래/부동산 임대 등 1차 철강 제조업체</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
		      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">크게 준비한 건 없었는데 면접이 중요했던 것 같습니다. 현 직장에서 사용하는 언어와 주요 업무에 대해 알아보고 해당 영역에 대한 예상 질문을 떠올려본 것이 큰 도움이 되었습니다.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
		      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">취업을 해도 공부는 끝나지 않습니다. 앞으로 한 발 더 멀리 보고 대비해서 꽃길만 걸으시길 바랍니다 :)</p>
                  </div>
              </div>
          </div>

          <div id = "modal7" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">세정아이앤씨</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/sejung.jpg" style="width:80%;margin-top: 0px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                          <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2018년 졸업생 오O수</p>
                          <p  style="font-size:medium"><br/>프로그래머</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <!-- <div class="con">
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                  </div> -->
              </div>
          </div>

          <div id = "modal8" class="modal">
                <div class="modal-content">
                    <div class="headcon">
                        <p class = "headtitle">Samsung SDS America</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/samsung_sds.jpg" style="width:100%;margin-top: 20px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2017년 졸업생 김O준</p>
                            <p style="font-size:medium"><br/>시스템개발자, 삼성SDS America 근무</p>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="con">
			<p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">Samsung SDS America는 엔터프라이즈 모빌리티, 보안 및 고급 분석하여 특별히 구축된 기술 솔루션을 제공하는 기업</p><br/>
			
                        <div class="vertical-line"></div>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                        <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">(한국에선 취업준비를 어떻게 하는지 몰라서.. 미국 기준으로 해보겠습니다 교수님)

Algorithm 문제를 많이 풀어봤습니다 그리고 인터뷰 준비를 많이 했습니다.

미국은 인터뷰를 대부분은 Online으로 봅니다. 지원한 회사와 거리가 가까운 경우 on site로 인터뷰를 볼 수도 있지만, 다른 state or city에 있는 경우는 대부분 online으로 인터뷰를 봅니다.

인터뷰를 하면서 본인이 resume에 써놓은 것들에 대해서 잘 설명할 수 있어야하고,

Online으로 인터뷰를 하면서 동시에 Algorithm 문제 테스트를 하는 경우가 많기 때문에 그것들을 잘 준비했습니다.</p>
			<br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
			 <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">모두가 대부분 어려운 취업 상황속에서 있을 것 같은데, 국내 말고도 해외로도 갈 수 있는 기회는 많으니 반드시 한국에 있어야하는게 아니라면 해외로 나가는 것도 고려해보면 좋을 것 같습니다.

그리고 끊임없이 공부하고 스스로 자기 개발을 하고, 변화에 민감하게 반응해서 새로운 상황과 환경에도 잘 적응할 수 있는 사고의 유연함을 기르는 것도 중요한 것 같습니다.</p>
                    </div>
                </div>
            </div>


            <div id = "modal9" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">삼성전자</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/samsung.png" style="width:80%;margin-top: 30px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2016년 졸업생 김O언</p>
                          <p  style="font-size:medium"><br/>RTOS 커널, 파일시스템 개발, Ondevice AI개발</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">삼성전자 주식회사는 전자 제품을 생산하며 정보통신기술에 대한 개발을 진행하고 있고 삼성그룹 안에서도 가장 규모가 큰, 삼성그룹을 대표하는 기업</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">삼성 프로그래밍 대회(scpc) 준비, 회사에서 요구하는 소프트웨어 역량테스트 문제 풀이 준비</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">1) 직장이 노후까지 책임져주지 않음. 직장 다음 진로(사업)도 염두 해둘것.<br/>2) 직장타이틀이 없어도 자신을 내세울 역량을 갖추기위해 꾸준히 성장할 것.<br/>3) 그렇게 성장하여 나중에 본인 사업을 해야 부자됨.</p>
                  </div>
              </div>
          </div>

          <div id = "modal10" class="modal">
                <div class="modal-content">
                    <div class="headcon">
                        <p class = "headtitle">부산광역시청</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/busan.png" style="width:70%;margin-top: 40px;margin-left: 30px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2016년 졸업생 이O영</p>
                            <p  style="font-size:medium"><br/>전산직 공무원</p>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="con">
                        <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">대한민국 동남부 해안에 위치한 광역시인 부산광역시 지방공무원</p><br/>
                        <div class="vertical-line"></div>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                        <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">IT기업등을 준비하는 친구들과는 다른 방향(?)의 진로이기 때문에 틈틈이 시간 날 때마다 도서관에서 공무원 시험 준비를 했습니다.</p>
                        <br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                        <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">학과생활을 하시면서 자신이 하고싶은 일, 목표를 먼저 찾으시면 좋을것 같습니다. 저도 목표가 없을 땐 마냥 놀기만 해서...목표를 생각하며 학과생활 및 준비를 하신다면 좋은 결과 있으실겁니다^^</p>
                    </div>
                </div>
            </div>

            <div id = "modal11" class="modal">
                <div class="modal-content">
                    <div class="headcon">
                        <p class = "headtitle">파크랜드</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/parkland.jpg" style="width:70%;margin-top: 10px;margin-left: 30px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2016년 졸업생 김O훈</p>
                            <p  style="font-size:medium"><br/>컴퓨터 프로그래머</p>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <!-- <div class="con">
                        <div class="vertical-line"></div>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                        <br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                    </div> -->
                </div>
            </div>

            <div id = "modal12" class="modal">
                <div class="modal-content">
                    <div class="headcon">
                        <p class = "headtitle">부산은행</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/busanbank.png" style="width:70%;margin-top: 40px;margin-left: 30px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2014년 졸업생 허O규</p>
                            <p  style="font-size:medium"><br/>IT금융개발자</p>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <!-- <div class="con">
                        <div class="vertical-line"></div>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                        <br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                    </div> -->
                </div>
            </div>

            <div id = "modal13" class="modal">
                <div class="modal-content">
                    <div class="headcon">
                        <p class = "headtitle">보잉코리아</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/boeingkorea.png" style="width:70%;margin-top: 40px;margin-left: 30px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2014년 졸업생 이O섭</p>
                            <p  style="font-size:medium"><br/>IT service management</p>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="con">
                        <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">전 세계 최대 항공우주 기업이며, 상용기 제작 및 방위, 우주, 안보 시스템 업계 선도 기업</p><br/>
                        <div class="vertical-line"></div>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                        <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">토익은 기본이고 스피킹, 영문 이력서 준비 등 외국계 기업 입사를 위해 언어 능력 향상에 많은 투자를 하였습니다.
현 직장에 관한 정보가 당시에는 많지 않아 매일 같이 뉴스를 찾아보고 회사 홈페이지의 채용 공고, 링크드인 등으로 정보를 수집하였고, 직무에 대한 이해도를 높이려 다른 나라에 있는 직무내용 내용도 참조하였습니다.</p>
                        <br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                        <p style="margin-left: 15px;font-size: medium;margin-top: 30px;"> 다른 학생들은 없는 본인만의 강점 혹은 다양한 경험을 해보라고 조언해 주고 싶습니다. 그것이 좋은 학점이든 어학 점수든 공모전 수상이될 수도 있고 대외활동이 될 수도 있고, 성공이든 실패든 본인만의 색깔을 추가하는 것 뿐만아니라 시야도 넓힐 수 있는 좋은 방법이기 때문입니다</p>

                    </div>
                </div>
            </div>

            <div id = "modal14" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">경찰청 사이버안전국</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                        <img src="./logoimg/police.png" style="width:70%;margin-top: 30px;margin-left: 30px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2013년 졸업생 구O늘</p>
                          <p  style="font-size:medium"><br/>사이버수사대</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">각종 컴퓨터, 웹, 사이버 관련 범죄의 수사를 담당하는 대한민국 경찰청의 조직</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">대학시절 열공해 프로그래밍 지식을 쌓고, 교수님 추천 네트워크 전문과정을 거쳐 콤텍시스템 입사 후 5~6년 간 유*무선 네트워크 및 보안 관련 지식 습득 후 경찰 사이버수사대 지원 및 최종합격</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">동기들간 잘 지내는 것이 무엇보다 중요한 것 같습니다. 열심히 공부하시며 재밌는 대학생활하시고, 못하는게 아니라 안 할 뿐이기에 무엇이든 마음을 먹고 끝까지 포기하지 않고 노력해가신다면 어떤 형태로든 원하시는 바를 달성 하실 것 입니다. 후배님들 힘내시고, 화이팅입니다!!</p>
                  </div>
              </div>
          </div>

          <div id = "modal15" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">네이버 비즈니스 플랫폼</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/nbp.png" style="width:80%;margin-top: 42px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                          <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2013년 졸업생 정O영</p>
                          <p  style="font-size:medium"><br/>네이버 비즈니스 플랫폼 과장, 현 중국 주재원</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">온라인마케팅/인터넷광고대행, 정보자료처리/컴퓨터운영관련 등 포털 및 기타 인터넷 정보매개 서비스업체</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">학기 중 학점 관리를 했구요. 방학때는 자격증 취득을 했습니다. 그리고 업무관련된 경력을 가지려고 찾다가 학원에서 컴퓨터 개발 강의을 했어요. 공모전도  1번 나간적이 있습니다. 입사하고 싶은 회사를 정하고, 4년동안 가고 싶은 회사 평균 스펙을 만드려고 노력을 많이 했습니다.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">눈에 보이지 않는 준비가 많이 힘들것으로 보입니다. 하지만, 앞으로를 위해 딱 3년정도만 정말 열심히 노력하고 공부한다면 그 이후 10년이 편할 수 있어요. 조금씩 조금씩 발전하여 어제보다 나은 오늘의 내가 될 수 있도록 노력하길 바랍니다. 회사 근처에 혹시 방문하면 밥은 사드릴게요. 화이팅하세요!</p>
                  </div>
              </div>
          </div>

          <div id = "modal16" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">KCC 글라스</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/kcc.png" style="width:80%;margin-top: 35px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2012년 졸업생 이O주</p>
                          <p  style="font-size:medium"><br/>구매 업무 중심으로 관련 시스템 개발 및 관리 운영</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">KCC글라스는 유리, 홈씨씨인테리어, 바닥재 전문 B2C 기업으로 KCC에서 인적분할해 신설된 법인</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">전 직장에서 진행했던 업무를 정리하는, 일종의 포트폴리오 관리를 열심히 했던 것 같아요.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">사실 IT직은 다른 직종보다 취업이 쉽다고 생각해요. 특히 이직시장에서는 더욱 그렇죠. 너무 대기업만 바라보고 취업의 문을 스스로 좁히지 않았으면 좋겠어요. 특히 여후배님들, 요즘 여성 개발자를 선호하는 회사들이 정말 많아요. 함께 화이팅해요 :)</p>
                  </div>
              </div>
          </div>


          <div id = "modal17" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">디케이테크인</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/dk.png" style="width:70%;margin-top: 35px;margin-left: 40px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2012년 졸업생 정O욱</p>
                          <p style="font-size:medium"><br/>검색시스템 개발팀 팀장</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">(주)카카오의 개발 자회사로 15년 8월 1일 설립, 더욱 안정적이고 차별화된 IT 기술 솔루션을 제공하고 운영</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">다양한 형태의 서비스를 다양한 방법과 방식으로 개발</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">소프트웨어 공학과에서 배우는 커리큘럼은 단순히 개발자만을 위한 과정이 아니라 소프트웨어라는 하나의 제품을 만들기위한 다양한 영역의 지식을 접할수 있도록 합니다. 개발자라는 좁은 시야가 아닌 더 넓은 영역에서 배운 지식을 활용할 수 있도록 노력하면 취업의 길은 열릴 수 있을거라 생각합니다. 포기하지마세요.</p>
                  </div>
              </div>
          </div>

          <div id = "modal18" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">한국신용카드결제</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/card.png" style="width:80%;margin-top: 35px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2011년 졸업생 문O호</p>
                          <p  style="font-size:medium"><br/>PG (온라인 결제 서비스)</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size: small;margin-left: 20px;margin-top: 30px;color: black;">부가통신,전산망운용(신용카드결제대행)/소프트웨어,전산기술 개발 등 통신 재판매업체</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">학교연구실 프로젝트 진행 및 포트폴리오 작성</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">04학번인데.. 아직까지 있는지 몰랐네요. 교수님들이 추천하는 회사도 가보았지만 더 좋은 회사들이 많습니다. 취업을 준비하실 때 여러 업무를 알아보고 취업준비를 하실 것을 추천드립니다.</p>
                  </div>
              </div>
          </div>

          <div id = "modal19" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">Amazon Web Services</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                          <img src="./logoimg/aws.png" style="width:80%;margin-top: 15px;margin-left: 20px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2011년 졸업생 이O호</p>
                          <p  style="font-size:medium"><br/>DNB(Digital Native Business) 팀. 국내 Hot Startup 을 담당하는 영업 대표(Senior Account Manager)</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">사실 이번 직장은 두 번째 직장입니다. 두 번째 직장은 이직 관련 내용이 많아서, 첫 번째 직장(마이크로소프트) 첫번째 직장 이야기를 하는게 맞을 거 같습니다. 

개인적으로 2학년부터 취업에 대한 고민 후 준비를 하였습니다. 첫 번째로 한 한 교환학생 준비였습니다. 취업에 대한 목표가 처음부터 명확하였기 때문에 외국계 기업을 가기 위해서는 영어도 필수이지만 외국적인 사고 및 생활을 꼭 경험해야한다고 생각했습니다. 토플 성정 및 학교 성적 관리를 열심히해서 3학년때 학교 대표로 제가 호주 그리피스로 교환학생을 다녀오게 되었습니다. 호주 교환학생간에 새로운 경험을 많이 했는데 특히 당시 한국에서는 사용자가 거의 없었던 아이폰 관련 개발을 접하게 되었습니다. 이를 바탕으로 한국에와서 마지막 캡스톤 설계에 아이폰 어플 (부산 버스)를 만들게 되었고, 취업을 하는데 있어서 소중한 경험이 되었었습니다. 두 번째로는 영어를 준비했습니다. 사실 영어가 없었으면 지금 제가 이 자리에 있을수 있을지에 대한 자신이 없습니다. 영어가 기본 밑 바탕이 되었기 때문에 원하는 직장에 취업할 수 있었습니다. 영어를 공부하는 방법은 사람마다 매우 상이해서 정답은 없습니다. 자신에게 가장 알맞은 방법을 찾으시면 됩니다. 저는 당시 한 커뮤니티사이트에서 영어 스터디를 부산에서 운영 하였고, 동시에 지속적으로 영어도 공부를 했습니다. 운이 좋은 기회에 해당 스터디가 TV에도 홍보가 되고, 점점 커지게 되었고, 많은 사람들과 외국인들이 스터디에 참석하게 되어서 부산에서는 손에 꼽히는 스터디로 성장하게 되었습니다. 실제로 이때 만난 사람들이 제가 첫 회사 입사를 위한 발표 준비에 큰 도움을 주었습니다. 

준비한 내용들을 짧은 글로 담을 수 없어서 여러분들에게 도움이 될 만한 내용만 짧게 적었습니다. 준비한 내용들을 한 단어로 축약해서 정리하자면 “차별성” 입니다. 내가 지금 다른 사람들과의 차별점은 무엇일까?에 대해서 늘 고민하시고, 본인만의 차별점을 꼭 만들어내시기 바랍니다. 관련해서 도움이 필요하신 분들은 편하게 연락주세요. 다만 도움을 요청하시기 전에 스스로가 충분히 고민하시고 연락을 주세요. 
</p>

                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">사실 전 첫 회사의 인턴시절부터 유명한 대학 졸업생들과 스펙이 좋은 사람들과 경쟁을 하였습니다. 단적인 예로 당시 제가 제가 토익이 960이었는데 제가 제일 점수가 낮았죠..  국내 각종 마케팅 대회를 휩쓸었던 고려대 마케팅학회 회장, 우리나라에서 가장 큰 농구 커뮤니티 운영자 등 쟁쟁한 친구들이 많았습니다. 그로부터 거의 10년 가까이 사회생활을 하면서 느낀점은 현재 내가 다니는 대학이 나를 정의하는게 아니라 내 스스로의 생각이 나를 정의한다는 것 인거 같네요. 저도 사실 처음에 기가 좀 죽었었거든요. 하지만 절대로 기죽지말고 내가 하고 있는 일, 나 스스로에 대한 자신을 꼭 가지시기 바랍니다. (물론 스스로에 자신이 있으려면 위에서 말한 차별성이 있어야겠죠). 그럼 힘내시고, 화이팅하시길.</p>

                  </div>
              </div>
          </div>

          <div id = "modal20" class="modal">
                <div class="modal-content">
                    <div class="headcon">
                        <p class = "headtitle">부산정보산업진흥원</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/busanitagency.jpg" style="width:100%;margin-top: 10px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2009년 졸업생 이O훈</p>
                            <p style="font-size:medium"><br/>부산시 정보통신 정책 기획</p>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="con">
                        <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">정보, 통신, 전자, 방송 및 성과 관련 융복합기술 분야의 산업원천 기술 개발 및 성과확산을 통해 국가경제사회 발전에 기여함을 목적으로 하고 있음</p><br/>
                        <div class="vertical-line"></div>
                        <!-- <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                        <br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p> -->
                    </div>
                </div>
            </div>

            <div id = "modal21" class="modal">
                <div class="modal-content">
                    <div class="headcon">
                        <p class = "headtitle">ETRI 한국전자통신연구원</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/etri.png" style="width:100%;margin-top: 50px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2007년 졸업생 최O석</p>
                            <p style="font-size:medium"><br/>한국 전자 통신 연구원 이동 통신 분야에서 대중 교통 공공 와이파이 관련 연구 개발 및 R&D</p>
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="con">
                        <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">정보, 통신, 전자, 방송 및 성과 관련 융복합기술 분야의 산업원천 기술 개발 및 성과확산을 통해 국가경제사회 발전에 기여함을 목적으로 하고 있음</p><br/>
                        <div class="vertical-line"></div>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                        <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">우선, 무선통신 분야를 지원했기 때문에 요구되는 필수 스팩을 사전에 공부했고 관련된 논문이나 서적을 참고했어요. 그리고 영어 공부는 필수입니다. 지인을 통해서 관련 부서에 컨택하는 노력을 했습니다.</p>
                        <br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                        <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">노력은 배신하지 않는다고 합니다. 한 곳만 바라보지 말고 다양성 있는 노력을 하면 반드시 좋은 기회가 찾아오리라 생각합니다.</p>
                    </div>
                </div>
            </div>

            <div id = "modal22" class="modal">
              <div class="modal-content">
                  <div class="headcon">
                      <p class = "headtitle">경찰청 사이버안전국</p>
                      <span class="close">&times;</span>
                  </div>
                  <div class="titlecon">
                      <div class="titlelogo">
                        <img src="./logoimg/police.png" style="width:70%;margin-top: 30px;margin-left: 30px;">
                      </div>
                      <div class="titletext">
                        <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2012년 졸업생 박O철</p>
                          <p  style="font-size:medium"><br/>사이버수사대</p>
                      </div>
                  </div>
                  <div class="vertical-line"></div>
                  <div class="con">
                      <p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">각종 컴퓨터, 웹, 사이버 관련 범죄의 수사를 담당하는 대한민국 경찰청의 조직</p><br/>
                      <div class="vertical-line"></div>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">대학에서 배운 지식을 바탕으로 대학교 실습을 통해 개발자로 채용되었고, 그 뒤 실무경력을 쌓고 프로그래밍 특채로 현재 직장에 들어오게 되었습니다. 그래서 본업에 충실하였습니다.</p>
                      <br/><br/>
                      <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
                      <p style="margin-left: 15px;font-size: medium;margin-top: 30px;">후배님들은 인생에서 가장 빛나는 시절을 보내는 중입니다. 저는 졸업이후 좋은 학점을 못받은 것에 대한 후회를 한 적은 한번도 없지만 친구들과 더 재밌게 생활하지 못한 것에 대한 후회는 아직도 하고 있습니다. 소중한 시간을 헛되이 보내지 말고 좋은 사람들을 많이 만나면서 즐거운 학교생활하면 좋겠습니다.</p>
                  </div>
              </div>
          </div>


            <div id = "modal23" class="modal">
                <div class="modal-content">
                    <div class="headcon">
                        <p class = "headtitle">SK주식회사 C&C </p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="titlecon">
                        <div class="titlelogo">
                            <img src="./logoimg/sk_c&c.png" style="width:100%;margin-top: 0px;">
                        </div>
                        <div class="titletext">
                            <p style="font-size:x-large;color: dodgerblue;font-weight: bold;">2016년 졸업생 이O오</p>
                            <p style="font-size:medium"><br/>SK주식회사 C&C 개발 </p>
				<a href = "https://www.skcareersjournal.com/1096"><img src = "./logoimg/2016_viedo_thumbnale.png" style="width:60%;height:110%;margin-left: 250px;margin-top:-40px;"/></a><br/>
			    
                        </div>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="con">
 			<p style="font-size:14px;margin-left: 20px;margin-top: 30px;color: black;">IT서비스 기업으로,시스템통합(SI) 및 IT 아웃소싱(Outsourcing) 사업</p><br/>
                        <div class="vertical-line"></div>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q1. 현 직장에 입사하기 위해 어떤 준비를 하셨나요?</p>
			<p style="margin-left: 15px;font-size: medium;margin-top: 30px;">1학년 1년동안만 F 학점이 13개였습니다. 1학년 2학기 때는 총 0.64학점에 학사경고까지 받았었던 적이 있었습니다. 복학 이후 부족한 학점을 채우기 위해 모든 계절학기를 다 수강했고 남들보다 뒤처진 학업을 어떻게든 앞서기 위해 굉장히 열심히 노력했습니다. 휴학을 한 상태에서 교수님의 허가 아래 919호실에서 1년동안 숙식하면서 밤낮없이 개인 작품을 만들었던 기억이 아직도 새록새록합니다. 또한 여러 해 동안 다양한 공모전을 참여하면서 경험을 쌓아오는 것을 쉬지 않았습니다. 어떤 공모전에서는 수상 이후 해당 기관으로부터의 추천을 받아 정부지원사업에 지원하여 중소기업들을 꺾고 결국 사업을 따냈던 일도 있었습니다. 07년도 입학 후 16년도 졸업까지 9년이라는 시간이 걸렸지만 그동안 학생으로서 할 수 있는 최대한 많은 경험을 하려고 노력하였으며 그 기간동안 기업대표이사상, 지자체장상, 장관상 등 다양한 상을 수상하였으며, 그 외 KSCI 논문 1건 게재, 3건의 특허 출원을 하였습니다.
			</p>
                        <br/><br/>
                        <p style="font-size: large;margin-left: 20px;margin-top: 30px;color: dodgerblue;">Q2. 졸업생 선배로서 후배들에게 한마디</p>
			<p style="margin-left: 15px;font-size: medium;margin-top: 30px;">IT 분야만큼 본인의 역량 하나만으로 인정 받을 수 있는 업계는 흔치 않습니다. 열심히 준비한다면 원하는 어느 곳이든 갈 수 있으니 최선을 다하세요. 관련하여 도움이 될듯하여 아래 링크 같이 보내드립니다.
			</p>
			</p>
                    </div>
                </div>
            </div>

                






        </div>
		    </div>
    </div>
  </div>
</div>
<script>

    var modal0 = document.getElementById('modal0');
    var btn0 = document.getElementById('btn0');
    var span0 = document.getElementsByClassName("close")[0];

    var modal1 = document.getElementById('modal1');
    var btn1 = document.getElementById('btn1');
    var span1 = document.getElementsByClassName("close")[1];

    var modal2 = document.getElementById('modal2');
    var btn2 = document.getElementById('btn2');
    var span2 = document.getElementsByClassName("close")[2];

    var modal3 = document.getElementById('modal3');
    var btn3 = document.getElementById('btn3');
    var span3 = document.getElementsByClassName("close")[3];

    var modal4 = document.getElementById('modal4');
    var btn4 = document.getElementById('btn4');
    var span4 = document.getElementsByClassName("close")[4];

    var modal5 = document.getElementById('modal5');
    var btn5 = document.getElementById('btn5');
    var span5 = document.getElementsByClassName("close")[5];

    var modal6 = document.getElementById('modal6');
    var btn6 = document.getElementById('btn6');
    var span6 = document.getElementsByClassName("close")[6];

    var modal7 = document.getElementById('modal7');
    var btn7 = document.getElementById('btn7');
    var span7 = document.getElementsByClassName("close")[7];

    var modal8 = document.getElementById('modal8');
    var btn8 = document.getElementById('btn8');
    var span8 = document.getElementsByClassName("close")[8];

    var modal9 = document.getElementById('modal9');
    var btn9 = document.getElementById('btn9');
    var span9 = document.getElementsByClassName("close")[9];

    var modal10 = document.getElementById('modal10');
    var btn10 = document.getElementById('btn10');
    var span10 = document.getElementsByClassName("close")[10];

    var modal11 = document.getElementById('modal11');
    var btn11 = document.getElementById('btn11');
    var span11 = document.getElementsByClassName("close")[11];

    var modal12 = document.getElementById('modal12');
    var btn12 = document.getElementById('btn12');
    var span12 = document.getElementsByClassName("close")[12];

    var modal13 = document.getElementById('modal13');
    var btn13 = document.getElementById('btn13');
    var span13 = document.getElementsByClassName("close")[13];

    var modal14 = document.getElementById('modal14');
    var btn14 = document.getElementById('btn14');
    var span14 = document.getElementsByClassName("close")[14];

    var modal15 = document.getElementById('modal15');
    var btn15 = document.getElementById('btn15');
    var span15 = document.getElementsByClassName("close")[15];

    var modal16 = document.getElementById('modal16');
    var btn16 = document.getElementById('btn16');
    var span16 = document.getElementsByClassName("close")[16];

    var modal17 = document.getElementById('modal17');
    var btn17 = document.getElementById('btn17');
    var span17 = document.getElementsByClassName("close")[17];

    var modal18 = document.getElementById('modal18');
    var btn18 = document.getElementById('btn18');
    var span18 = document.getElementsByClassName("close")[18];

    var modal19 = document.getElementById('modal19');
    var btn19 = document.getElementById('btn19');
    var span19 = document.getElementsByClassName("close")[19];

    var modal20 = document.getElementById('modal20');
    var btn20 = document.getElementById('btn20');
    var span20 = document.getElementsByClassName("close")[20];

    var modal21 = document.getElementById('modal21');
    var btn21 = document.getElementById('btn21');
    var span21 = document.getElementsByClassName("close")[21];

    var modal22 = document.getElementById('modal22');
    var btn22 = document.getElementById('btn22');
    var span22 = document.getElementsByClassName("close")[22];

    var modal23 = document.getElementById('modal23');
    var btn23 = document.getElementById('btn23');
    var span23 = document.getElementsByClassName("close")[23];



    btn0.onclick = function() {
      modal0.style.display = "block";
      $("html, body").addClass("not_scroll");       
    }

    btn1.onclick = function() {
      modal1.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn2.onclick = function() {
      modal2.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn3.onclick = function() {
      modal3.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn4.onclick = function() {
      modal4.style.display = "block";
      $("html, body").addClass("not_scroll");
    }

    btn5.onclick = function() {
      modal5.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn6.onclick = function() {
      modal6.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn7.onclick = function() {
      modal7.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn8.onclick = function() {
      modal8.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn9.onclick = function() {
      modal9.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn10.onclick = function() {
      modal10.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn11.onclick = function() {
      modal11.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn12.onclick = function() {
      modal12.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn13.onclick = function() {
      modal13.style.display = "block";
      $("html, body").addClass("not_scroll");
    }

    btn14.onclick = function() {
      modal14.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn15.onclick = function() {
      modal15.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn16.onclick = function() {
      modal16.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn17.onclick = function() {
      modal17.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn18.onclick = function() {
      modal18.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn19.onclick = function() {
      modal19.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn20.onclick = function() {
      modal20.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn21.onclick = function() {
      modal21.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn22.onclick = function() {
      modal22.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 

    btn23.onclick = function() {
      modal23.style.display = "block";
      $("html, body").addClass("not_scroll");
    } 


    span0.onclick = function() {
      modal0.style.display = "none";
      $("html, body").removeClass("not_scroll");        
    }
    span1.onclick = function(){
      modal1.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span2.onclick = function(){
      modal2.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span3.onclick = function(){
      modal3.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span4.onclick = function(){
      modal4.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span5.onclick = function(){
      modal5.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span6.onclick = function(){
      modal6.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span7.onclick = function(){
      modal7.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span8.onclick = function(){
      modal8.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span9.onclick = function(){
      modal9.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span10.onclick = function(){
      modal10.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span11.onclick = function(){
      modal11.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span12.onclick = function(){
      modal12.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span13.onclick = function(){
      modal13.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span14.onclick = function(){
      modal14.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }
    span15.onclick = function(){
      modal15.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }
    span16.onclick = function(){
      modal16.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }
    span17.onclick = function(){
      modal17.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }
    span18.onclick = function(){
      modal18.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }
    span19.onclick = function(){
      modal19.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }
    span20.onclick = function(){
      modal20.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }
    span21.onclick = function(){
      modal21.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span22.onclick = function(){
      modal22.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }

    span23.onclick = function(){
      modal23.style.display = "none";
      $("html, body").removeClass("not_scroll");
    }


    window.onclick = function(event){
      if(event.target == modal0 || event.target == modal1 || event.target == modal2 || event.target == modal3 || event.target == modal4  || event.target == modal5 || event.target == modal6 || event.target == modal7 || event.target == modal8 || event.target == modal9  || event.target == modal10 || event.target == modal11 || event.target == modal12 || event.target == modal13 || event.target == modal14 || event.target == modal15 || event.target == modal16 || event.target == modal17 || event.target == modal18 || event.target == modal19 || event.target == modal20 || event.target == modal21 || event.target == modal22){
        modal0.style.display = "none";
        modal1.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "none";
        modal11.style.display = "none";
        modal12.style.display = "none";
        modal13.style.display = "none";
        modal14.style.display = "none";
        modal15.style.display = "none";
        modal16.style.display = "none";
        modal17.style.display = "none";
        modal18.style.display = "none";
        modal19.style.display = "none";
        modal20.style.display = "none";
        modal21.style.display = "none";
        modal22.style.display = "none";
	modal23.style.display = "none";
        $("html, body").removeClass("not_scroll");
      }
    }

  </script>
<?php
include_once("./_tail.php");
?>


