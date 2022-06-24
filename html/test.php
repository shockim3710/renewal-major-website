<?php
include_once("./_common.php");
$g5['title'] = "교육목표 및 연혁";
include_once("./_head.php");
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
                </ul>
                </nav>
            </div>
            
        </header>
    </div>
    <!--본문 컨텐츠-->
    <div class="contents">
        <div class="navigator">
            홈 > 학과소개 > 위치 및 연락처
        </div>
        <div class="contents-header">
         위치 및 연락처
        </div>
        <div class="contents-body">
            <!--학과위치-->
            <div class="bodytitle" style="margin-bottom:10px;">
                학과위치
            </div>
            <div class="normaltext">
                부산광역시 부산진구 엄광로 176번지(동의대학교) 정보공학관9층 컴퓨터소프트웨어공학과<br/>
            </div>
            <!--연락처-->
            <div class="bodytitle" style="margin-bottom:10px;">
                연락처
            </div>
            <div class="normaltext">
                tel. 051-890-1724 <br/>
                fax. 051-890-2629 <br/>
            </div>
            <!--오시는길-->
            <div class="bodytitle" style="margin-bottom:10px;">
                오시는길
            </div>
            <div class="normaltext">
                컴퓨터 소프트웨어 공학과는 23번 건물 (정보공학관) 9층에 위치하고 있습니다.<br/>

                <html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>간단한 지도 표시하기</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=z69by399pk&submodules=panorama,geocoder,drawing,visualization">
    </script>
     <!--
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=z69by399pk">
    </script-->
</head>
<body>
<div id="map" style="width:50%;height:500px;float:left"></div>
<div id="pano" style="width:50%;height:500px;float:left"></div>

<script>

    var position = new naver.maps.LatLng(35.14595233775946, 129.0361715497984);

    
//정보관 마커 표시 고정    
    var HOME_PATH = window.HOME_PATH || '.';

var cityhall = new naver.maps.LatLng(35.14595233775946, 129.0361715497984),
    map = new naver.maps.Map('map', {
        center: cityhall.destinationPoint(0, 500),
        zoom: 18
    }),
    marker = new naver.maps.Marker({
        map: map,
        position: cityhall,
        animation: naver.maps.Animation.BOUNCE
    });

var contentString = [
    '<div class="iw_inner">',
        '   <h3>　　정보공학관 9층　　</h3>',
        '       <a href="https://map.naver.com/v5/directions/-/14364299.047463533,4183748.9615056273,%EB%8F%99%EC%9D%98%EB%8C%80%ED%95%99%EA%B5%90%20%EA%B0%80%EC%95%BC%EC%BA%A0%ED%8D%BC%EC%8A%A4%EC%A0%95%EB%B3%B4%EA%B3%B5%ED%95%99%EA%B4%80,16797565,PLACE_POI/-/transit?c=14363581.7615377,4183256.4329482,15,0,0,0,dh" target="_blank">　　　　길찾기　　　　</a>',
        '</div>'
    ].join('');

var infowindow = new naver.maps.InfoWindow({
    content: contentString
});

naver.maps.Event.addListener(marker, "click", function(e) {
    if (infowindow.getMap()) {
        infowindow.close();
    } else {
        infowindow.open(map, marker);
    }
});

infowindow.open(map, marker);


naver.maps.onJSContentLoaded = function() {
    // 아이디 혹은 지도 좌표로 파노라마를 표시할 수 있습니다.
    pano = new naver.maps.Panorama("pano", {
        position: new naver.maps.LatLng(35.14595233775946, 129.0361715497984),
        pov: {
            pan: -133,
            tilt: 0,
            fov: 100
        }
    });

    // 파노라마 위치가 갱신되었을 때 발생하는 이벤트를 받아 지도의 중심 위치를 갱신합니다.
    naver.maps.Event.addListener(pano, 'pano_changed', function() {
        var latlng = pano.getPosition();

        if (!latlng.equals(map.getCenter())) {
            map.setCenter(latlng);
             marker.setPosition(latlng);
        }
        
    });
    
};

// 자대로터리를 통해 정보관으로 가는길
var polyline1 = new naver.maps.Polyline({
    map: map,
    path: [
        new naver.maps.LatLng(35.14595233775946, 129.0361715497984),
        new naver.maps.LatLng(35.145588370558116, 129.03583062578238),
        new naver.maps.LatLng(35.14402446993862, 129.03540122087063),
        new naver.maps.LatLng(35.14404649793975, 129.03456034771142),
        new naver.maps.LatLng(35.14360278988536, 129.03460845257123),
        new naver.maps.LatLng(35.14361621917505, 129.03404552498802),
        new naver.maps.LatLng(35.144376033612765, 129.03444352347907),
        new naver.maps.LatLng(35.14604556195906, 129.03429814101827),
        new naver.maps.LatLng(35.14674957881138, 129.03365709308022),
        new naver.maps.LatLng(35.147597003595166, 129.03377164288102),
        new naver.maps.LatLng(35.14801188179502, 129.03310172842188),
        new naver.maps.LatLng(35.15002517354376, 129.03267257499238),
        new naver.maps.LatLng(35.1515427853866, 129.03257601545567),
        new naver.maps.LatLng(35.15371532728947, 129.03195710663644)
    ],
    clickable: true,
    strokeColor: '#FA5858',
    strokeStyle: 'solid',
    strokeOpacity: 0.9,
    strokeWeight: 5
});

naver.maps.Event.addListener(polyline1, 'mouseover', function() {

    polyline1.setOptions({
        strokeColor: '#FF0000',
        strokeStyle: 'solid',
        strokeOpacity: 1
    });
});

naver.maps.Event.addListener(polyline1, 'mouseout', function() {

    polyline1.setOptions({
        strokeColor: '#FA5858',
        strokeStyle: 'solid',
        strokeOpacity: 0.9
    });
});


// 동의대 뒷길을 통해 정보관으로 가는길
var polyline2 = new naver.maps.Polyline({
    map: map,
    path: [
        new naver.maps.LatLng(35.14595233775946, 129.0361715497984),
        new naver.maps.LatLng(35.145567616208965, 129.03570255413499),
        new naver.maps.LatLng(35.14499837306629, 129.03545889959727),
        new naver.maps.LatLng(35.144754894575556, 129.03535448702831),
        new naver.maps.LatLng(35.146008776906044, 129.03523264895512),
        new naver.maps.LatLng(35.14645705064869, 129.03486716714858),
        new naver.maps.LatLng(35.146976475865486, 129.03479755156636),
        new naver.maps.LatLng(35.14746032103024, 129.03478014767083),
        new naver.maps.LatLng(35.14768089654777, 129.03449298339424),
        new naver.maps.LatLng(35.14796550925107, 129.03471053208543),
        //여기서부터
        new naver.maps.LatLng(35.14806646950199, 129.03470732467878),
        new naver.maps.LatLng(35.14983014298178, 129.03450479121568),
        new naver.maps.LatLng(35.15109698347632, 129.03512251828735),
        new naver.maps.LatLng(35.151701416745084,129.03533517842362),
        new naver.maps.LatLng(35.1539600768686, 129.03688469786252)
    ],
    clickable: true,
    strokeColor: '#5882FA',
    strokeStyle: 'solid',
    strokeOpacity: 0.9,
    strokeWeight: 5
});

naver.maps.Event.addListener(polyline2, 'mouseover', function() {

    polyline2.setOptions({
        strokeColor: '#0040FF',
        strokeStyle: 'solid',
        strokeOpacity: 1
    });
});

naver.maps.Event.addListener(polyline2, 'mouseout', function() {

    polyline2.setOptions({
        strokeColor: '#5882FA',
        strokeStyle: 'solid',
        strokeOpacity: 0.9
    });
});


// 거리뷰 레이어를 생성합니다.
var streetLayer = new naver.maps.StreetLayer();
naver.maps.Event.once(map, 'init_stylemap', function() {
    streetLayer.setMap(map);
});

// 거리뷰 버튼에 이벤트를 바인딩합니다.
var btn = $('#street');
btn.on("click", function(e) {
    e.preventDefault();

    // 거리뷰 레이어가 지도 위에 있으면 거리뷰 레이어를 지도에서 제거하고,
    // 거리뷰 레이어가 지도 위에 없으면 거리뷰 레이어를 지도에 추가합니다.
    if (streetLayer.getMap()) {
        streetLayer.setMap(null);
    } else {
        streetLayer.setMap(map);
    }
});

// 거리뷰 레이어가 변경되면 발생하는 이벤트를 지도로부터 받아 버튼의 상태를 변경합니다.
naver.maps.Event.addListener(map, 'streetLayer_changed', function(streetLayer) {
    if (streetLayer) {
        btn.addClass('control-on');
    } else {
        btn.removeClass('control-on');
    }
});

// 지도를 클릭했을 때 발생하는 이벤트를 받아 파노라마 위치를 갱신합니다. 이때 거리뷰 레이어가 있을 때만 갱신하도록 합니다.
naver.maps.Event.addListener(map, 'click', function(e) {
    if (streetLayer.getMap()) {
        var latlng = e.coord;

        // 파노라마의 setPosition()은 해당 위치에서 가장 가까운 파노라마(검색 반경 300미터)를 자동으로 설정합니다.
        pano.setPosition(latlng);
    }
});
    

//setOptions 메서드를 이용해 옵션을 조정할 수도 있습니다.
map.setOptions("mapTypeControl", true); //지도 유형 컨트롤의 표시 여부

naver.maps.Event.addListener(map, 'zoom_changed', function (zoom) {
    console.log('zoom:' + zoom);
});

// 지도 인터랙션 옵션
$("#interaction").on("click", function(e) {
    e.preventDefault();

    if (map.getOptions("draggable")) {
        map.setOptions({ //지도 인터랙션 끄기
            draggable: false,
            pinchZoom: false,
            scrollWheel: false,
            keyboardShortcuts: false,
            disableDoubleTapZoom: true,
            disableDoubleClickZoom: true,
            disableTwoFingerTapZoom: true
        });

        $(this).removeClass("control-on");
    } else {
        map.setOptions({ //지도 인터랙션 켜기
            draggable: true,
            pinchZoom: true,
            scrollWheel: true,
            keyboardShortcuts: true,
            disableDoubleTapZoom: false,
            disableDoubleClickZoom: false,
            disableTwoFingerTapZoom: false
        });

        $(this).addClass("control-on");
    }
});

// 관성 드래깅 옵션
$("#kinetic").on("click", function(e) {
    e.preventDefault();

    if (map.getOptions("disableKineticPan")) {
        map.setOptions("disableKineticPan", false); //관성 드래깅 켜기
        $(this).addClass("control-on");
    } else {
        map.setOptions("disableKineticPan", true); //관성 드래깅 끄기
        $(this).removeClass("control-on");
    }
});

// 타일 fadeIn 효과
$("#tile-transition").on("click", function(e) {
    e.preventDefault();

    if (map.getOptions("tileTransition")) {
        map.setOptions("tileTransition", false); //타일 fadeIn 효과 끄기

        $(this).removeClass("control-on");
    } else {
        map.setOptions("tileTransition", true); //타일 fadeIn 효과 켜기
        $(this).addClass("control-on");
    }
});


// min/max 줌 레벨
$("#min-max-zoom").on("click", function(e) {
    e.preventDefault();

    if (map.getOptions("minZoom") === 10) {
        map.setOptions({
            minZoom: 7,
            maxZoom: 21
        });
        $(this).val(this.name + ': 7 ~ 21');
    } else {
        map.setOptions({
            minZoom: 10,
            maxZoom: 21
        });
        $(this).val(this.name + ': 10 ~ 21');
    }
});


//지도 컨트롤
$("#controls").on("click", function(e) {
    e.preventDefault();

    if (map.getOptions("scaleControl")) {
        map.setOptions({ //모든 지도 컨트롤 숨기기
            scaleControl: false,
            logoControl: false,
            mapDataControl: false,
            zoomControl: false,
            mapTypeControl: false
        });
        $(this).removeClass('control-on');
    } else {
        map.setOptions({ //모든 지도 컨트롤 보이기
            scaleControl: true,
            logoControl: true,
            mapDataControl: true,
            zoomControl: true,
            mapTypeControl: true
        });
        $(this).addClass('control-on');
    }
});

$("#interaction, #tile-transition, #controls").addClass("control-on");

</script>

<div class="normaltext">
                　 <br/>
                <span style="color:red">◎ 자연대로타리를 통해 가는길</span> <br/>
                　동의대역에서 부산진구6, 부산진구6-1 버스 승차 <br/>
                　⇒ 자연대로타리 정류장에서 하차 <br/>
                　⇒ 정보공학관까지 도보로 이동 <br/>
                <br/>
                <span style="color:blue">◎ 뒷길을 통해 가는길</span> <br/>
                　가야1치안센터 정류장에서 부산진구9, 110-1 버스 승차 <br/>
                　⇒ 가야여중 정류장에서 하차 <br/>
                　⇒ 정보공학관까지 도보로 이동 <br/>
            </div>
</body>
</html>            
        </div>
    </div>
</div>
            <br/>
            <br/>
            <br/>
<?php
include_once("./_tail.php");
?>