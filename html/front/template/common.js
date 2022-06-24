function showRequiredElm() {
	for (var i = 0; i < document.forms.length; i++) {
		for (var j = 0; j < document.forms[i].elements.length; j++) {
			if (document.forms[i].elements[j].getAttribute("required") != null) {
				document.forms[i].elements[j].style.backgroundImage = "url(/front/template/images/required.gif)";
				document.forms[i].elements[j].style.backgroundPosition = "top right";
				document.forms[i].elements[j].style.backgroundRepeat = "no-repeat";
			}
		}
	}
}

function windowOpen(page,w,h,s,r,win) {
	if (win == '') {
		var win = null;
	}
	var l = (screen.width) ? (screen.width-w)/2 : 0; 
	var t = (screen.height) ? (screen.height-h)/2 : 0; 
    var settings='';
    
    settings ='width='+w+','; 
    settings +='height='+h+',';
    settings +='top='+t+','; 
    settings +='left='+l+','; 
    settings +='scrollbars='+s+','; 
    settings +='resizable='+r+','; 
    settings +='status=0';

    var windows=window.open(page,win,settings);
    windows.focus();
}

function viewImage(src) {
	windowOpen('image.php?src=' + src, 100, 100, 0, 0, 'oImage');
}

function catalog_init(code) {
	var url = '/catalog/main/VIEW.php?code=' + code;
	windowOpen(url,1015,720,0,0,'catalogue');
}

// 링크 점선 없애기
function autoBlur(){ 
  if(event.srcElement.tagName=="A"||event.srcElement.tagName=="IMG") 
  document.body.focus(); 
} 
  //document.onfocusin=autoBlur; 
  
//showHideLayers
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
  
function delSpace(str) {
	var result = null;
	for (i=0; i<str.length; i++) {
		if ( str.charAt(i) != ' ') {
			result = str.substring(i, str.length);
			break;
		}
	}
	return result;
}

function isNull(str) {
	var strResult = delSpace(str);
	var isnull = false;

	if (strResult == null)
		isnull = true;
	else if (strResult.length < 1)
		isnull = true;

	return isnull;
}

function insertTab(obj) {
	if (9==event.keyCode) {
		(obj.selection=document.selection.createRange()).text="   ";
		event.returnValue=false;
	} 
}

function trimString(string) { 
	for(;string.indexOf("&nbsp;")!= -1;){
		string = string.replace("&nbsp;","");
	}

	for(;string.indexOf("<br />")!= -1;){
		string = string.replace("<br />","")
	}

	return string; 
}

function addPhoto() {
	var num = document.all["userfile[]"].length;
	if(num != "undifined" && num == 10) {
		alert("첨부파일은 10개까지 가능합니다");
		return;
	}
	attach_file.innerHTML += '내용 사진 <input type="file" size="30" name="userfile[]" class="input"><br>';
}

function toggleBtn(obj, mode) {
	if (mode == '1') {
		obj.style.backgroundColor = 'FFFFCC';
	}
	else {
		obj.style.backgroundColor = '';
	}
}

function toggleInputElm(obj, mode) {
	if (mode == '1') {
		obj.style.backgroundColor = 'CCFFFF';
	}
	else {
		obj.style.backgroundColor = 'FFFFFF';
	}
}

function checkSpecialchar(str) {
	for (i=0; i<str.length; i++) {
		if ((str.charAt(i) == "=") ||  (str.charAt(i) == "`") ||(str.charAt(i) == "!") || (str.charAt(i) == "@") ||
			(str.charAt(i) == "#") || (str.charAt(i) == "$") || (str.charAt(i) == "%") || (str.charAt(i) == "^") ||
			(str.charAt(i) == "&") || (str.charAt(i) == "*") || (str.charAt(i) == "(") || (str.charAt(i) == ")") ||
			(str.charAt(i) == "+") || (str.charAt(i) == "=") ||
			(str.charAt(i) == "\\") || (str.charAt(i) == "|") || (str.charAt(i) == "{") || (str.charAt(i) == "}") ||
			(str.charAt(i) == "[") || (str.charAt(i) == "]") || (str.charAt(i) == ";") || (str.charAt(i) == ":") ||
			(str.charAt(i) == "'") || (str.charAt(i) == "\"") || (str.charAt(i) == "<") || (str.charAt(i) == ">") ||
			(str.charAt(i) == ",") || (str.charAt(i) == ".") || (str.charAt(i) == "?") || (str.charAt(i) == "/") || (str.charAt(i) == " "))
			return	true;
	}
	return	false;
}

function checkSpecialchar2(str) {
	for (i=0; i<str.length; i++) {
		if ((str.charAt(i) == "=") ||  (str.charAt(i) == "`") ||(str.charAt(i) == "!") || (str.charAt(i) == "@") ||
			(str.charAt(i) == "#") || (str.charAt(i) == "$") || (str.charAt(i) == "%") || (str.charAt(i) == "^") ||
			(str.charAt(i) == "&") || (str.charAt(i) == "*") || (str.charAt(i) == "(") || (str.charAt(i) == ")") ||
			(str.charAt(i) == "+") || (str.charAt(i) == "=") ||
			(str.charAt(i) == "\\") || (str.charAt(i) == "|") || (str.charAt(i) == "{") || (str.charAt(i) == "}") ||
			(str.charAt(i) == "[") || (str.charAt(i) == "]") || (str.charAt(i) == ";") || (str.charAt(i) == ":") ||
			(str.charAt(i) == "'") || (str.charAt(i) == "\"") || (str.charAt(i) == "<") || (str.charAt(i) == ">") ||
			(str.charAt(i) == ",") || (str.charAt(i) == ".") || (str.charAt(i) == "?") || (str.charAt(i) == "/"))
			return	true;
	}
	return	false;
}

function checkHangul(Str) {
	var RetVal  = false;

	for (i=0; i<=Str.length -1; i++) {
		cha = Str.substring(i,i+1);

		if ((cha >= "0" && cha <= "9") || (cha >= "a"  && cha <= "z") || (cha >= "A"  && cha <= "Z")) {
			RetVal = false;
		}
		else {
			RetVal = true; break;
		}
	}

	return RetVal;
}

function chkAlNum(strValue) { 
  for(var i=0; i<strValue.length;i ++) { 
    var strCh = strValue.charAt(i).toUpperCase(); 
    if(strCh >="A" && strCh <="Z") continue; 
    else if(strCh >="0" && strCh <="9") continue; 
    else if(strCh == " ") continue; 
    else return false; 
  } 

  return true;
} 

function checkEmailAddress(str) {
	var supported = 0

	if (window.RegExp) {
		var tempStr = "a"
		var tempReg = new RegExp(tempStr);

		if (tempReg.test(tempStr))
			supported = 1
	}

	if (!supported)
		return (str.indexOf(".") > 2) && (str.indexOf("@") > 0);

	var r1 = new RegExp("(@.*@)|(\\.\\.)|(@\\.)|(^\\.)");
	var r2 = new RegExp("^.+\\@(\\[?)[a-zA-Z0-9\\-\\.]+\\.([a-zA-Z]{2,3}|[0-9]{1,3})(\\]?)$");

	return (!r1.test(str) && r2.test(str));
}

function validateNumber(field) {
	var valid = "0123456789" // 유효한 값 
	var ok = "yes"; 
	var temp; 
	for (var i=0; i<field.value.length; i++) { 
		temp = "" + field.value.substring(i, i+1); 
		if (valid.indexOf(temp) == "-1") ok = "no"; 
	} 

	if (ok == "no") { 
		alert("숫자만 입력 가능합니다"); 
		field.focus(); 
		field.select()
	} 
}

function validateNumber2(field) {
	var valid = "0123456789," // 유효한 값 
	var ok = "yes"; 
	var temp; 
	for (var i=0; i<field.value.length; i++) { 
		temp = "" + field.value.substring(i, i+1); 
		if (valid.indexOf(temp) == "-1") ok = "no"; 
	} 

	if (ok == "no") { 
		alert("숫자만 입력 가능합니다"); 
		field.focus(); 
		field.select()
	} 
}

function valForm(f) {
	var fLen = f.elements.length;
	var fMsg;
	var msgSpan;
	
	for (i=0;i<fLen;i++) {
		fObj = f.elements[i];
		fMsg = fObj.getAttribute("msg");        // 경고 메시지
		if (fMsg != null) {
			//f.elements[i].style.backgroundColor = "yellow";
			f.elements[i].style.cssText="background-color:yellow";
			
			msgSpan = document.createElement("SPAN");
			msgSpan.innerHTML = " <font color=red>*필수</font>";
			fObj.insertAdjacentElement("afterEnd", msgSpan); 
			
		}
	}
}

function showRequiredElm() {
	for (var i = 0; i < document.forms.length; i++) {
		for (var j = 0; j < document.forms[i].elements.length; j++) {
			if (document.forms[i].elements[j].getAttribute("required") != null) {
				document.forms[i].elements[j].style.backgroundImage = "url(/front/template/images/required.gif)";
				document.forms[i].elements[j].style.backgroundPosition = "top right";
				document.forms[i].elements[j].style.backgroundRepeat = "no-repeat";
			}
		}
	}
}

function numberFormat(str) { 
	str = "" + str + ""; 
	var format = ""; 
	
	for (i = 0; i < str.length; i++) { 
		if (i > 0 && (i%3)==0) { 
			format = str.charAt(str.length - i -1) + "," + format; 
		} else { 
			format = str.charAt(str.length - i -1) + format;
		} 
	} 
	return format; 
}

function numberFormat2(obj) { 

	var valid = "0123456789," // 유효한 값 
	var ok = "yes"; 
	var temp; 
	for (var i=0; i<obj.value.length; i++) { 
		temp = "" + obj.value.substring(i, i+1); 
		if (valid.indexOf(temp) == "-1") ok = "no"; 
	} 

	if (ok == "no") { 
		alert("숫자만 입력 가능합니다"); 
		obj.focus(); 
		obj.select()
	} else {
		str = "" + obj.value + "";
		
		for(;str.indexOf(",")!= -1;){
			str = str.replace(",","")
		}

		var format = ""; 
		
		for (i = 0; i < str.length; i++) { 
			if (i > 0 && (i%3)==0) { 
				format = str.charAt(str.length - i -1) + "," + format; 
			} else { 
				format = str.charAt(str.length - i -1) + format;
			} 
		} 
		
		obj.value = format; 
	}
} 

var isNN = (navigator.appName.indexOf("Netscape")!=-1);

function autoTab(input,len, e) {
	var keyCode = (isNN) ? e.which : e.keyCode;
	var filter = (isNN) ? [0,8,9] : [0,8,9,16,17,18,37,38,39,40,46];
	if(input.value.length >= len && !containsElement(filter,keyCode)) { 
		input.value = input.value.slice(0, len); 	
		input.form[(getIndex(input)+1) % input.form.length].focus();
	}

	function containsElement(arr, ele) {
		var found = false, index = 0;
		while(!found && index < arr.length)
		if(arr[index] == ele)
		found = true;
		else
		index++;
		return found;
	}

	function getIndex(input) {
	var index = -1, i = 0, found = false;
	while (i < input.form.length && index == -1)
		if (input.form[i] == input)index = i;
		else i++;
		return index;
	}
	return true;
}

function addAttach() {
	var num = document.all["userfile[]"].length;
	if(num != "undifined" && num == 10) {
		alert("첨부파일은 10개까지 가능합니다");
		return;
	}
	attach_file.innerHTML += '<input type="file" size="40" name="userfile[]" class="input"><br>';
}

function containsCharsOnly(input, chars) {
    for (var inx = 0; inx < input.value.length; inx++) {
       if (chars.indexOf(input.value.charAt(inx)) == -1)
           return false;
    }
    return true;
}

function isLowerCase(input) {
    var chars = "abcdefghijklmnopqrstuvwxyz";
    return containsCharsOnly(input,chars);
}

function isLowerCase2(input) {
    var chars = "abcdefghijklmnopqrstuvwxyz0123456789";
    return containsCharsOnly(input,chars);
}

function checkTopSearchFrm(frm) {
	var elm = frm.query;

	if (checkSpecialchar(elm.value)) {
		alert("검색어에 특수문자를 제거하세요!");
		elm.focus();
		return false;
	}

	if (isNull(elm.value)) {
		alert("검색어를 입력하세요.");
		elm.value = '';
		elm.focus();
		return false;
	}

	return true;
}

function flash(value, width, height){
	document.writeln('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="'+width+'" height="'+height+'">');
	document.writeln('<param name="movie" value="'+value+'">');
	document.writeln('<param name="quality" value="high">');
	document.writeln('<param name="wmode" value="transparent">');
	document.writeln('<param name="menu" value="false">');
	document.writeln('<embed src="'+value+'" width="'+width+'" height="'+height+'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" menu="false"></embed>');
	document.writeln('</object>');
}

function viewImage(src) {
	windowOpen('image.php?src=' + src, 100, 100, 0, 0, 'oImage');
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

/******************************************************************************
*** view, hidden
******************************************************************************/
function viewpall(n, txt, count){
  var txtn;
  var view;
  var count2 = parseInt(count)+1;
  for(i=1;i<count2;i++){
  txtn = txt+eval(i);
  view = eval("this.viewp"+txt+i);
  if(n==txtn){
     view.style.display = "";
  }
  else{
     view.style.display = "none";
  }
  }
}