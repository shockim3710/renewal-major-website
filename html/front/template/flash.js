function flash(value, width, height){
	document.writeln('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="'+width+'" height="'+height+'">');
	document.writeln('<param name="movie" value="'+value+'">');
	document.writeln('<param name="quality" value="high">');
	document.writeln('<param name="wmode" value="transparent">');
	document.writeln('<param name="menu" value="false">');
	document.writeln('<embed src="'+value+'" width="'+width+'" height="'+height+'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" menu="false"></embed>');
	document.writeln('</object>');
}

function movie(value, width, height){	
	document.writeln('<object id="WMP" classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95" standby="Loading Microsoft Windows Media Player..." width="'+width+'" height="'+height+'">');
	document.writeln('<param name="FileName" value="'+value+'">');
	document.writeln('<param name="AutoStart" value="true">');
	document.writeln('<param name="AutoSize" value="false">');
	document.writeln('<param name="transparentAtStart" value="True">');
	document.writeln('<param name="transparentAtStop" value="True">');
	document.writeln('<param name="ShowControls" value="false">');
	document.writeln('<param name="ShowStatusBar" value="false">');
	document.writeln('<param name="loop" value="-1">');
	document.writeln('<param name="Volume" value="-600">');
	document.writeln('<param name="PLUGINSPAGE" value="http://www.microsoft.com/korea/windows/windowsmedia/">');
	document.writeln('<embed src="'+value+'" width="'+width+'" height="'+height+'" autostart="False" loop="-1" filename="'+value+'" autosize="false" showcontrols="false" showstatusbar="false" volume="-600" pluginspage="http://www.microsoft.com/korea/windows/windowsmedia/"></embed>');
	document.writeln('</object>');
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function submenu(menuName){
  if(menuName=="m11"){ 
  location.href="01_intro_01.php"; 
	 }else if(menuName=="m12"){ // 01_학과소개
  		 location.href="01_intro_02.php"; 
	 }else if(menuName=="m13"){ 
  		 location.href="01_intro_03.php"; 
	 }else if(menuName=="m14"){ 
  		 location.href="01_intro_04.php"; 
	 }else if(menuName=="m12"){ 
  		 location.href="01_intro_02.php"; 

	 }else if(menuName=="m21"){  // 02_공학인증
  		 location.href="02_abeek_01.php"; 
	 }else if(menuName=="m22"){
  		 location.href="02_abeek_02.php"; 		 
	 }else if(menuName=="m23"){
  		 location.href="02_abeek_03.php"; 		 
	 }else if(menuName=="m24"){
  		 location.href="02_abeek_04.php"; 	
	 }else if(menuName=="m25"){
  		 location.href="02_abeek_05.php"; 	
	 }else if(menuName=="m26"){
  		 location.href="02_abeek_06.php"; 	
	 }else if(menuName=="m27"){
  		 location.href="02_abeek_07.php"; 			 
	 }else if(menuName=="m28"){
  		 location.href="02_abeek_08.php"; 			 

	 }else if(menuName=="m31"){ // 03_학과과정
  		 location.href="03_course_01.php"; 	
	 }else if(menuName=="m32"){
  		 location.href="03_course_02.php"; 		 
	 }else if(menuName=="m33"){
  		 location.href="03_course_03.php"; 		 
	 }else if(menuName=="m34"){
  		 location.href="03_course_04.php"; 	
		 
	 }else if(menuName=="m41"){ // 04_교수
  		 location.href="04_pro_01.php"; 		 
	 }else if(menuName=="m42"){
  		 location.href="04_pro_02.php"; 		 

	 }else if(menuName=="m51"){ //05_알림마당
  		 location.href="05_notice_01.php"; 
	 }else if(menuName=="m52"){
  		 location.href="05_notice_02.php"; 	
		 
	 }else if(menuName=="m61"){ //06_커뮤니티
  		 location.href="06_com_01.php"; 		 
	 }else if(menuName=="m62"){ //06_커뮤니티
  		 location.href="06_com_02.php";
	 }else if(menuName=="m63"){ //06_커뮤니티
  		 location.href="06_com_03.php"; 

	 }else if(menuName=="m71"){ //07_입학&장학
  		 location.href="07_ent_01.php"; 		
	 }else if(menuName=="m72"){
  		 location.href="07_ent_02.php"; 			 
		 
	 }else if(menuName=="m81"){ //08_진로&취업
  		 location.href="08_job_01.php"; 			 
	 }else if(menuName=="m82"){
  		 location.href="08_job_02.php"; 			 

	 }else if(menuName=="m91"){ //09_지원사업실적
  		 location.href="09_work_01.php"; 			 
	 }else if(menuName=="m92"){ 
  		 location.href="09_work_02.php"; 			 
	 }else if(menuName=="m93"){ 
  		 location.href="09_work_03.php"; 			 
	 }else if(menuName=="m94"){ 
  		 location.href="09_work_04.php"; 			 
	 }else if(menuName=="m95"){ 
  		 location.href="09_work_05.php"; 			 
	 }else if(menuName=="m96"){ 
  		 location.href="09_work_06.php"; 			 
	 }else if(menuName=="m97"){
  		 location.href="09_work_07.php"; 			 
	 }else if(menuName=="m98"){ 
  		 location.href="09_work_08.php"; 			 
	 }else if(menuName=="m99"){
  		 location.href="09_work_09.php"; 			 
	 }else if(menuName=="m910"){
  		 location.href="09_work_10.php"; 			 
	 }else if(menuName=="m911"){
  		 location.href="09_work.php"; 

	 }else if(menuName=="m105"){ //11_대학원
  		 location.href="11_graduate_01.php"; 	
	 
	 }else if(menuName=="m106"){
  		 location.href="11_graduate_02.php"; 	
		 //window.open("http://www.deu.ac.kr/grd_04/","_blank");
	 }else if(menuName=="m107"){
  		 location.href="11_graduate_03.php"; 	
		 //window.open("http://www.deu.ac.kr/grd_05/","_blank");


	 }else if(menuName=="m101"){ //10_회원정보
  		 location.href="10_member_01.php"; 			 
	 }else if(menuName=="m102"){
  		 location.href="10_member_02.php"; 			 
	 }else if(menuName=="m103"){
  		 location.href="10_member_03.php"; 			 
	 }else if(menuName=="m104"){
  		 location.href="10_member_04.php"; 	
		 
	 }else if(menuName=="m999"){ //홈
  		 location.href="index.php"; 

	 }else if(menuName=="m777"){ //사이트맵
  		 location.href="sitemap.php"; 
		 
		 
		 
// }else{
// alert('준비중입니다!');
 }
}
