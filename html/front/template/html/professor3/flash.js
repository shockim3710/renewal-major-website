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
  location.href="01_int_01.html"; 
	 }else if(menuName=="m12"){ // 01_교수님소개
  		 location.href="01_int_02.html"; 


	 }else if(menuName=="m21"){  // 02_연구실소개
  		 location.href="02_lab.html"; 			 

	 }else if(menuName=="m31"){ // 03_학과과정
  		 location.href="03_res.html"; 	
		 
	 }else if(menuName=="m41"){ // 04_사회봉사실적
  		 location.href="04_sma.html"; 			 

	 }else if(menuName=="m51"){ //05_프로젝트실적
  		 location.href="05_pro.html"; 
		 
	 }else if(menuName=="m61"){ //06_커뮤니티
  		 location.href="06_board01.html"; 		 
	 }else if(menuName=="m62"){ 
  		 location.href="06_board02.html"; 		 
	 }else if(menuName=="m63"){ 
  		 location.href="06_board03.html"; 
	 }else if(menuName=="m64"){ 
  		 location.href="06_board04.html";		 
	 }else if(menuName=="m999"){ 
  		 location.href="index.html"; 	 
 }else{
 alert('error!');
 }
}