<?php

$g5['title'] = "학과장 인사말";
include_once('./_common.php');
include_once('./_head.php');
?>
<!--본문 시작-->
<div class="contents-wrapper">
    <!--사이드메뉴-->
    <div class="side-menu">
        <header class="sidemenuheader" role="banner">
            <h1 class="logo">
                <a href=""><span>게시판</span></a>
            </h1>
            <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                <ul class="unstyled list-hover-slide">
                    <li><a href="/bbs/board.php?bo_table=notice">공지사항</a></li>
                    <li><a href="/bbs/board.php?bo_table=gallery">학과소식</a></li>
                    <li><a href="https://www.facebook.com/csedeu">학생회</a></li>
                    <li><a href="/5_1_RecommendedMenu.php">오늘의 추천메뉴</a></li>
                </ul>
                </nav>
            </div>
        </header>
    </div>
    <!--본문 컨텐츠-->
    <div class="contents">
    <div class="navigator">
            홈 > 게시판 > 오늘의 추천메뉴
            </div>
        <div class="contents-header">
             오늘의 추천메뉴   
        </div>
        <div class="contents-body">
            <div class="normaltext">
            

            <head>
            <!--지도를 나타낼때 필요한 코드-->
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
            <title>간단한 지도 표시하기</title>
            <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=z69by399pk&submodules=panorama,geocoder,drawing,visualization">
            </script>
     
            </head>

            <body>
            <div id="map" style="width:50%;height:400px;float:left"></div>    
            <!--div id="pano" style="width:50%;height:500px;float:left"></div-->
            </body>   
            <script>
            
            var  rand = Math.floor(Math.random()*5);
            var arr = ['수영공원돼지국밥','가야포차 수구레국밥','성원칼국수','향미각','개금밀면'];
            </script>

            <script>
            var HOME_PATH = window.HOME_PATH || '.';

            if (rand == 0){
                document.write('오늘의 추천메뉴는?'+'<br>');
                document.write('<h3>수영공원돼지국밥</h3>' +'<br>');
                //설명 추가

                document.write('추천도　┃　'+'<img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork2.png" width="20" height="20" alt="별X" class="thumb" /><br/>'
                +'코멘트　┃　학교 근처 국밥거리 중에서 돼지국밥으로 제일' +'<br/>'
                +'　　　　　　괜찮다고 생각해! 고기가 항정살이라서 더' +'<br/>'
                +'　　　　　　부드러워 국이랑 밥 따로 받을거면 미리' + '<br/>'
                +'　　　　　　말해야 하니까 명심해!' + '<br/>');
                //여기서 부터 지도 코드
//
var bobgip = new naver.maps.LatLng(35.148046936980506, 129.0301874503403),
    map = new naver.maps.Map('map', {
        center: new naver.maps.LatLng(35.148046936980506, 129.0301874503403),
        zoom: 18
    }),
    marker = new naver.maps.Marker({
        map: map,
        position: bobgip,
        animation: naver.maps.Animation.BOUNCE
    });

var contentString = [
    '<div class="iw_inner">',
        '   <img src="img/SwimParkPorkandRiceSoup2.jpeg" width="200" height="150" alt="수영공원돼지국밥" class="thumb" /><br />',
        '   <p>　　　☎ 051-893-8297<br />',
        '   <p>　오전 8시 ~ 오후 10시 영업<br />',
        '   <a href="https://map.naver.com/v5/directions/-/14363581.99409553,4184019.5692317225,%EC%88%98%EC%98%81%EA%B3%B5%EC%9B%90%EB%8F%BC%EC%A7%80%EA%B5%AD%EB%B0%A5,32013908,PLACE_POI/-/transit?c=14363813.4612797,4183833.2936461,15,0,0,0,dh" target="_blank">　　　　길찾기 안내</a>',
        
        '</div>'
    ].join('');

var infowindow = new naver.maps.InfoWindow({
    content: contentString
});
//


naver.maps.Event.addListener(marker, "click", function(e) {
    if (infowindow.getMap()) {
        infowindow.close();
    } else {
        infowindow.open(map, marker);
    }
});

infowindow.open(map, marker);


            }else if(rand == 1){
                document.write('오늘의 추천메뉴는?'+'<br>');
                document.write('<h3>가야포차선지국밥</h3>' +'<br>');
                //설명 추가
                document.write('추천도　┃　'+'<img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" /><br/>'
                +'코멘트　┃　수구레라는 재료를 쓰는데 호불호가 심할 수 있다' +'<br/>'
                +'　　　　　　는 것 주의! 모르겠으면 선지국밥이라고 생각하면' +'<br/>'
                +'　　　　　　편할 듯해! 밑반찬으로 김이랑 계란부침 전구지' + '<br/>'
                +'　　　　　　깍두기가 나오고 가격이 정말 착한 집이야.' + '<br/>');


                var bobgip = new naver.maps.LatLng(35.148157980322004, 129.02990599761685),
    map = new naver.maps.Map('map', {
        center: new naver.maps.LatLng(35.148157980322004, 129.02990599761685),
        zoom: 18
    }),
    marker = new naver.maps.Marker({
        map: map,
        position: bobgip,
        animation: naver.maps.Animation.BOUNCE
    });

var contentString = [
    '<div class="iw_inner">',
        '   <img src="img/GayapoChoseonjiRiceSoup.jpeg" width="300" height="100" alt="가야포차선지국밥" class="thumb" /><br />',
        '   <p>　　　　　　 ☎ 051-894-6921<br />',
        '   <p>　　　오전 10시 ~ 오후 10시30분 영업<br />',
        '   <a href="https://map.naver.com/v5/directions/-/14363547.852407712,4184035.9880648013,%EA%B0%80%EC%95%BC%ED%8F%AC%EC%B0%A8%EC%84%A0%EC%A7%80%EA%B5%AD%EB%B0%A5,19949427,PLACE_POI/-/transit?c=14362579.7198701,4184201.1468447,14,0,0,0,dh" target="_blank">　　　　　　　길찾기 안내</a>',
        
        '</div>'
    ].join('');

var infowindow = new naver.maps.InfoWindow({
    content: contentString
});
//


naver.maps.Event.addListener(marker, "click", function(e) {
    if (infowindow.getMap()) {
        infowindow.close();
    } else {
        infowindow.open(map, marker);
    }
});

infowindow.open(map, marker);

            }else if(rand == 2){
                document.write('오늘의 추천메뉴는?'+'<br>');
                document.write('<h3>성원칼국수</h3>' +'<br>');
                //설명 추가

                document.write('추천도　┃　'+'<img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork2.png" width="20" height="20" alt="별X" class="thumb" /><br/>'
                +'코멘트　┃　멸치육수가 베이스인 칼국수집이야. 칼국수' +'<br/>'
                +'　　　　　　속에 들어가는 재료는 별 거 없지만 국물이' +'<br/>'
                +'　　　　　　엄청 시원해서 부담스럽지 않게 먹을 수' + '<br/>'
                +'　　　　　　있어.' + '<br/>');
                var bobgip = new naver.maps.LatLng(35.15095255708517, 129.02388522449476),
    map = new naver.maps.Map('map', {
        center: new naver.maps.LatLng(35.15095255708517, 129.02388522449476),
        zoom: 18
    }),
    marker = new naver.maps.Marker({
        map: map,
        position: bobgip,
        animation: naver.maps.Animation.BOUNCE
    });

var contentString = [
    '<div class="iw_inner">',
        '   <img src="img/SungwonKalguksu.jpeg" width="300" height="100" alt="성원칼국수" class="thumb" /><br />',
        '   <p>　　 ☎ 051-8911-3888, 051-891-1388<br />',
        '   <p>　　　　오전 11시30분 ~ 오후 8시 영업<br />',
        '   <a href="https://map.naver.com/v5/directions/-/14362877.631149482,4184408.495176863,%EC%84%B1%EC%9B%90%EC%B9%BC%EA%B5%AD%EC%88%98,19654436,PLACE_POI/-/transit?c=14363613.3592893,4184051.6230546,17,0,0,0,dh" target="_blank">　　　　　　　길찾기 안내</a>',
        
        '</div>'

    ].join('');

var infowindow = new naver.maps.InfoWindow({
    content: contentString
});
//


naver.maps.Event.addListener(marker, "click", function(e) {
    if (infowindow.getMap()) {
        infowindow.close();
    } else {
        infowindow.open(map, marker);
    }
});

infowindow.open(map, marker);

            }else if(rand == 3){
                document.write('오늘의 추천메뉴는?'+'<br>');
                document.write('<h3>향미각</h3>' +'<br>');
                //설명 추가

                document.write('추천도　┃　'+'<img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork2.png" width="20" height="20" alt="별X" class="thumb" />'
                +'   <img src="img/spoonfork2.png" width="20" height="20" alt="별X" class="thumb" /><br/>'
                +'코멘트　┃　학교 근처에 중국집 중에서는 상위권이라고 생각' +'<br/>'
                +'　　　　　　해. 사실 학교주변 중국집들 맛이 내가 느끼기에는' +'<br/>'
                +'　　　　　　거의 다 비슷비슷하더라구. 그래도 짬뽕은 이 집이' + '<br/>'
                +'　　　　　　좋았었어! 중국집 어디갈지 곤란하다면 여기 한 번' + '<br/>'
                +'　　　　　　가보도록!' + '<br/>');

                var bobgip = new naver.maps.LatLng(35.14988429419474, 129.03414911609806),
    map = new naver.maps.Map('map', {
        center: new naver.maps.LatLng(35.14988429419474, 129.03414911609806),
        zoom: 18
    }),
    marker = new naver.maps.Marker({
        map: map,
        position: bobgip,
        animation: naver.maps.Animation.BOUNCE
    });

var contentString = [
    '<div class="iw_inner">',
        '   <img src="img/hyangmigag.jpg" width="200" height="80" alt="향미각" class="thumb" /><br />',
        '   <p>　　　☎ 051-898-4700<br />',
        '   <p>　오전 11시 ~ 오후 10시 영업<br />',
        '   <a href="https://map.naver.com/v5/directions/-/14364004.228924114,4184057.4169929978,%ED%96%A5%EB%AF%B8%EA%B0%81,19954314,PLACE_POI/-/transit?c=14363034.4341277,4184224.6229924,14,0,0,0,dh" target="_blank">　　　　길찾기 안내</a>',
        
        '</div>'
    ].join('');

var infowindow = new naver.maps.InfoWindow({
    content: contentString
});
//


naver.maps.Event.addListener(marker, "click", function(e) {
    if (infowindow.getMap()) {
        infowindow.close();
    } else {
        infowindow.open(map, marker);
    }
});

infowindow.open(map, marker);

            }else if(rand == 4){
                document.write('오늘의 추천메뉴는?'+'<br>');
                document.write('<h3>개금밀면</h3>' +'<br>');
                //설명 추가

                document.write('추천도　┃　'+'<img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork1.png" width="20" height="20" alt="별O" class="thumb" />'
                +'   <img src="img/spoonfork2.png" width="20" height="20" alt="별X" class="thumb" />'
                +'   <img src="img/spoonfork2.png" width="20" height="20" alt="별X" class="thumb" /><br/>'
                +'코멘트　┃　개금에서 유명한 밀면 맛집이야. 다른 ' +'<br/>'
                +'　　　　　　밀면보다 좀 더 시큼하면서 깔끔한 맛!' +'<br/>');
                var bobgip = new naver.maps.LatLng(35.15239186404169, 129.02509333450402),
    map = new naver.maps.Map('map', {
        center: new naver.maps.LatLng(35.15239186404169, 129.02509333450402),
        zoom: 18
    }),
    marker = new naver.maps.Marker({
        map: map,
        position: bobgip,
        animation: naver.maps.Animation.BOUNCE
    });

var contentString = [
    '<div class="iw_inner">',
        '   <img src="img/GaegeumWheatNoodles.jpg" width="220" height="180" alt="개금밀면" class="thumb" /><br />',
        '   <p>　　　☎ 051-892-3466<br />',
        '   <p>　오전 10시 ~ 오후 7시40분 영업<br />',
        '   <a href="https://map.naver.com/v5/directions/-/14363006.850814406,4184614.7606703285,%EA%B0%9C%EA%B8%88%EB%B0%80%EB%A9%B4,13574118,PLACE_POI/-/transit?c=14363034.4341277,4184224.6229924,14,0,0,0,dh" target="_blank">　　　　　길찾기 안내</a>',    
        '</div>'
    ].join('');

var infowindow = new naver.maps.InfoWindow({
    content: contentString
});
//


naver.maps.Event.addListener(marker, "click", function(e) {
    if (infowindow.getMap()) {
        infowindow.close();
    } else {
        infowindow.open(map, marker);
    }
});

infowindow.open(map, marker);
            }
            
            
            
            </script>
            
            
            </div>
        </div>
    </div>
</div>



<?php
include_once("./_tail.php");
?>