function SYFormClear(f) {		
	if(f.value == f.title){
		f.value = "";
	}
}

function SYReForm(f) {		
	if(f.value == ""){
		f.value = f.title;
	}
}

function SYMouseFocus(id,mode) {
	if(mode=="In") {
		id.style.border="2px solid #231916";
	} else {
		id.style.border="2px solid #DDD";
	}
}

function SYWriteMouseFocus(id,mode) {
	if(mode=="In") {
		id.style.border="1px solid #231916";
	} else {
		id.style.border="1px solid #DDD";
	}
}

function SYOnlyNum(n) {
	var e = n.which;
	if (e == 37 || e == 39) return;
	var num       = n.value;
	num = num.replace(/[^0-9]/g,"");
	n.value = num;
}

function SYMathNum(n) {
	var e = n.which;
	if (e == 37 || e == 39) return;
	var num       = n.value;
	num = num.replace(/[^0-9,-,.]/g,"");
	n.value = num;
}

function SYSelectChk() {
	var chkList = document.getElementsByName("SYcheckBox[]"); 
	var ChkCount=0;
	for (var i=0; i<chkList.length; i++) { 
		if(chkList[i].checked == true) { 
			ChkCount++; 
		} 
	}
	if(ChkCount==0) { 
		alert("선택된 항목이 없습니다!!!  "); 
		return false; 
	} 
	return true;

}

function SYAllCheckedList() {
	 var chkFlag = ""
	 objForm=document.form1.AllCheck;
	 
		if (objForm.value == "true") {
		    objForm.value = "false"; 
	    	chkFlag = false;
	 } else {
	    	objForm.value = "true";
	    	chkFlag = true;
	 }
  
		var chkList = document.getElementsByName("SYcheckBox[]"); 
  
		if(chkList.length > 0) { 
     for (var i=0; i<chkList.length; i++) { 
          chkList[i].checked = chkFlag; 
      } 
  } else {
      alert("선택된 항목이 없습니다!!!  "); 
      document.fm.AllCheck.value = false; 
      return; 
  } 
	 objForm.checked = chkFlag;
}


function SYTotalSelectChk(num) {
	var chkList = document.getElementsByName("SYcheckBox"+num+"[]"); 
	var ChkCount=0;
	for (var i=0; i<chkList.length; i++) { 
		if(chkList[i].checked == true) { 
			ChkCount++; 
		} 
	}
	if(ChkCount==0) { 
		alert("선택된 항목이 없습니다!!!  "); 
		return false; 
	} 
	return true;

}
function SYTotalAllCheckedList(num) {
	var chkFlag = ""
	if(num=="1") objForm=document.fm.AllCheck1;
	else if(num=="2") objForm=document.fm.AllCheck2;
	else if(num=="3") objForm=document.fm.AllCheck3;
	else if(num=="4") objForm=document.fm.AllCheck4;
	if (objForm.value == "true") {
		objForm.value = "false"; 
		chkFlag = false;
	} else {
		objForm.value = "true";
		chkFlag = true;
	}
    var chkList = document.getElementsByName("SYcheckBox"+num+"[]"); 
    if(chkList.length > 0) { 
        for (var i=0; i<chkList.length; i++) { 
            chkList[i].checked = chkFlag; 
        } 
    } else {
        alert("선택된 항목이 없습니다!!!  "); 
        objForm.value = false; 
        return; 
    } 
	objForm.checked = chkFlag;

}

function SYMoveNext(id_from,id_to,maxSize) {

	var cur = document.getElementById(id_from).value;
	curSize = cur.length;
	var next_go = "";
	var cur_val = "";

	if (curSize >= maxSize) {
		if(next_go || cur_val != cur)
		{
			document.getElementById(id_from).value = cur.substring(0,maxSize);
			next_go = false;
			document.getElementById(id_to).focus();
		}
		return true;
	}
	next_go = true;
}

function SYTableBGChange(f,mode) {
	if(mode=="On") f.className="TableBG02";
	else f.className="TableBG01";
}

function SYLogout(SYManagerCode,SYTopGNBNavi,SYSubMenu,sy_link_id) {
	 //location.href="../Login/SYLogout.asp?SYManagerCode="+SYManagerCode+"&SYTopGNBNavi="+SYTopGNBNavi+"&SYSubMenu="+SYSubMenu+"&sy_link_id="+sy_link_id;
	 var ans = confirm('로그아웃 하시겠습니까?');
	 if(ans) location.href="/IncludeContent/logOut.php";
}
function SYCarlendarLastDate(ThisMonth,ThisYear) {	
	var LastDate = Array (31,28,31,30,31,30,31,31,30,31,30,31);
	ThisMonth = eval(ThisMonth)-1;

	if ((ThisMonth==1)&&(((ThisYear%4==0)&&(ThisYear %100 !=0))||ThisYear % 400 ==0 )) {
			LastDay=29; // 0월 부터 시작하므로 1는 2월임. 윤달 계산 4년마다 29일 , 100년는 28일, 400년 째는 29일
	}
	else {
		if(ThisMonth==-1) {
			LastDay = LastDate[11]; 
		} else LastDay = LastDate[ThisMonth];
	}
	return(LastDay);
}
function SYNumCut(str, cnt) { 
    str = "0000000000000000000"+str; 
  return str.substr(str.length-cnt, cnt); 
}
function SYPopupOpen(sy_type,sy_value) {	
	var sy_id = document.getElementById("sy_id").value;
	var SYPopupOpen = window.open("../PopUpContent/?sy_type="+sy_type+"&sy_value="+sy_value+"&sy_id="+sy_id,"SYPopupOpen","width=500,height=400,menubar=no,status=no,toolbar=no,scrollbars=yes");
	SYPopupOpen.focus();
}

function SYCheckSpace(str) {
	if(str.search(/\s/) != -1){
		return true;
	} else {
		return false;
	}
}

function SYLeftMenuOnOff(sy_type) {
	var todayDate = new Date(); 
	todayDate.setDate(todayDate.getDate() + 1); 
	if(document.getElementById("SYLeftMenuOpenYN").className=="SYLeftMenuClose") {
		document.cookie = "SYLeftMenu=Close; path=/; expires=" + todayDate.toGMTString() + ";";
		SYLeftMenuAction("Close");

	} else {
		document.cookie = "SYLeftMenu=Open; path=/; expires=" + todayDate.toGMTString() + ";" ;
		SYLeftMenuAction("Open");
	}
}
function SYLeftMenuAction(sy_type) {
	if(sy_type=="Close") {
		document.getElementById("SYLeftMenuOpenYN").className="SYLeftMenuOpen";
		document.getElementById("SYLeftArea").style.display = "none";
		document.getElementById("SYLeftMenuBar").style.height="25px";
		document.getElementById("SYRightArea").style.border = "none";
	} else {
		document.getElementById("SYLeftMenuOpenYN").className="SYLeftMenuClose";
		document.getElementById("SYLeftArea").style.display = "";
		document.getElementById("SYLeftMenuBar").style.height="28px";
		//document.getElementById("SYRightArea").style.borderLeft = "1px solid #3B3B3B";
	}
}
function SYMouseOver(sy_id,mode) {
	if(mode=="On") document.getElementById(sy_id).style.display="";
	else document.getElementById(sy_id).style.display="none";
}
function SYGetCookie(sy_id) { 
	var nameOfCookie = sy_id + "="; 
	var x = 0; 
	while ( x <= document.cookie.length ) { 
		var y = (x+nameOfCookie.length); 
		if ( document.cookie.substring( x, y ) == nameOfCookie ) { 
			if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 ) 
			endOfCookie = document.cookie.length; 
			return unescape( document.cookie.substring( y, endOfCookie ) ); 
		} 
		x = document.cookie.indexOf( " ", x ) + 1; 
		if ( x == 0 ) 
		break; 
	} 
	return ""; 
} 
function SYHandlingLayer(sy_type) {
	if(sy_type=="Show") {
		var SYLayer = document.createElement("div");
		document.getElementsByTagName("body").item(0).appendChild(SYLayer);
		SYLayer.setAttribute("id","SYOverlay");
		var SYArrayPageSize = SYGetPageSize();
		document.getElementById("SYOverlay").style.height=SYArrayPageSize[1]+"px";
		document.getElementById("SYOverlay").style.filter="alpha(opacity=80);";
		document.getElementById("SYOverlay").style.opacity="0.80;"; 
		SYHideSelectBox("hidden");
		
		var SYLayer = document.createElement("div");
		document.getElementsByTagName("body").item(0).appendChild(SYLayer);
		SYLayer.setAttribute("id","SYLodingOverlay");
		document.getElementById("SYLodingOverlay").innerHTML = "<div class=\"SYLodingArea\"><img src=\"http://www.rsun.kr/SYdesignImage/sy_icon_handling.gif\"></div>";
		document.getElementById("SYLodingOverlay").style.top = (document.documentElement.scrollTop+(document.body.scrollHeight - (document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight))/2)-100 +"px";
	} else {
		SYHideSelectBox("visible");
		if(document.getElementById("SYOverlay")) document.getElementsByTagName("body").item(0).removeChild(document.getElementById("SYOverlay"));
		if(document.getElementById("SYLodingOverlay")) document.getElementsByTagName("body").item(0).removeChild(document.getElementById("SYLodingOverlay"));
	}
}

function SYGetPageSize() {	
	var xScroll, yScroll;	
	if (window.innerHeight && window.scrollMaxY) {	
		xScroll = window.innerWidth + window.scrollMaxX;
		yScroll = window.innerHeight + window.scrollMaxY;
	} else if (document.body.scrollHeight > document.body.offsetHeight){ 
		xScroll = document.body.scrollWidth;
		yScroll = document.body.scrollHeight;
	} else { 
		xScroll = document.body.offsetWidth;
		yScroll = document.body.offsetHeight;
	}	
	var windowWidth, windowHeight;
	if (self.innerHeight) {	 
		if(document.documentElement.clientWidth){
			windowWidth = document.documentElement.clientWidth; 
		} else {
			windowWidth = self.innerWidth;
		}
		windowHeight = self.innerHeight;
	} else if (document.documentElement && document.documentElement.clientHeight) { 
		windowWidth = document.documentElement.clientWidth;
		windowHeight = document.documentElement.clientHeight;
	} else if (document.body) { 
		windowWidth = document.body.clientWidth;
		windowHeight = document.body.clientHeight;
	}	
	if(yScroll < windowHeight){
		pageHeight = windowHeight;
	} else { 
		pageHeight = yScroll;
	}
	if(xScroll < windowWidth){	
		pageWidth = xScroll;		
	} else {
		pageWidth = windowWidth;
	}
	arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight) 
	return arrayPageSize;
}
function SYHideSelectBox(sy_type) {
	var selects = document.getElementsByTagName("select");
	for (i = 0; i != selects.length; i++) {
		selects[i].style.visibility = sy_type;
	}
}
function SYTopGNBMenuMove(sy_type) {
	document.getElementById("SYTopGNBMenuID").value=5; 
}

function openWin(sURL, sWindowName, w, h, sScroll, reSize, status) {
		// 화면 중앙으로 Popup 띄우기.. 스크롤바는 옵션..
		// ex)
		//			openWin("test.asp", "winTest", 400, 300);			☞ 스크롤바 없음
		//			openWin("test.asp", "winTest", 400, 300, "yes");	☞ 스크롤바 있음
		//			openWin("test.asp", "winTest", 400, 300, "auto");	☞ 스크롤바 자동

		var x = (screen.width - w) / 2;
		var y = (screen.height - h) / 2;

		if (sScroll==null) sScroll = "no";
		if (screen.width == 800 && screen.height== 600 ) sScroll = "yes"; // 해상도 800*600일 때 스크롤 생기도록 함 
		
		var sOption = "";
		sOption = sOption + "toolbar=no, channelmode=no, location=no, directories=no, menubar=no";
		sOption = sOption + ", scrollbars=" + sScroll + ", resizable=" + reSize + ", status=" + status +", left=" + x + ", top=" + y + ", width=" + w + ", height=" + h;

		var win = window.open(sURL, sWindowName, sOption);
		win.focus();
		return win;
}

function numInput() { 
  str = String.fromCharCode(event.keyCode);
		if (str=="t") {
		} else {
						if((/[^(0-9)]/).test(str)){ 
										event.returnValue=false;
						} 	
  }
}

function SYZipSearch() {
	 openWin("/IncludeContent/popup_zip.html", "zipPost", 430, 385);			
}

function fileDel(loc,file,seq) {
  form1.action="/IncludeContent/fileDel.php?loc="+loc+"&file="+file+"&seq="+seq;
		form1.submit();
}

function fileView(wd,he,file) {
  openWin("/IncludeContent/fileView.php?file="+file, "winTest", wd, he);
}

function goDel(tbl) {
		var obj = document.getElementsByName("SYcheckBox[]");
					
		var cnt = 0;

		for (i=0;i<obj.length;i++) {
		     if (obj[i].checked == true) {
							    cnt = cnt+1;
							}
		}

		if (cnt==0) {
		    alert("삭제할 내용을 선택하여 주세요");
		} else {
		    form1.action = "del.php?tbl="+tbl;
						form1.submit();
		}

}

function goExcel(tbl) {
		var obj = document.getElementsByName("SYcheckBox[]");
					
		var cnt = 0;

		for (i=0;i<obj.length;i++) {
		     if (obj[i].checked == true) {
							    cnt = cnt+1;
							}
		}

		if (cnt==0) {
		    alert("엑셀로 저장할 내용을 선택하여 주세요");
		} else {
		    form1.action = "excel.php?tbl="+tbl;
						form1.submit();
		}

}

function goExcelAll(tbl) {
		var frm = document.form1;
		/*

		var s_sale_agency = frm.s_sale_agency.options[frm.s_sale_agency.options.selectedIndex].value;
		var gubun = frm.gubun.options[frm.gubun.options.selectedIndex].value;
		var sido = frm.sido.options[frm.sido.options.selectedIndex].value;
		var s_gubun = frm.s_gubun.options[frm.s_gubun.options.selectedIndex].value;
		var s_dong = frm.s_dong.options[frm.s_dong.options.selectedIndex].value;

		var st = frm.st.options[frm.st.options.selectedIndex].value;
		var sc = frm.sc.value;

		var stype = frm.stype.options[frm.stype.options.selectedIndex].value;
		*/
		
		
		form1.action = "excel_member.php";
		form1.submit();
		

}

function date_add(sDate, nDays) {
  var yy = parseInt(sDate.substr(0, 4), 10);
  var mm = parseInt(sDate.substr(5, 2), 10);
  var dd = parseInt(sDate.substr(8), 10);
 
  d = new Date(yy, mm - 1, dd + nDays);
 
  yy = d.getFullYear();
  mm = d.getMonth() + 1; mm = (mm < 10) ? '0' + mm : mm;
  dd = d.getDate(); dd = (dd < 10) ? '0' + dd : dd;
 
  return '' + yy + '-' +  mm  + '-' + dd;
}

function dayInterval(day1,day2) 
{ 
var yy1 = day1.substring(0,4); 
var mm1 = day1.substring(4,6); 
var dd1 = day1.substring(6,8); 

var t1 = new Date(yy1,mm1,dd1); 

var yy2 = day2.substring(0,4); 
var mm2 = day2.substring(4,6); 
var dd2 = day2.substring(6,8); 

var t2 = new Date(yy2,mm2,dd2); 

d1 = parseInt(t1.getTime() / (1000*60*60*24)); 
d2 = parseInt(t2.getTime() / (1000*60*60*24)); 

var interval = d2-d1; 

return interval; 
} 


//숫자에 콤마 넣기
function commify(n) {
  var reg = /(^[+-]?\d+)(\d{3})/;   // 정규식
  n += '';                          // 숫자를 문자열로 변환

  while (reg.test(n))
    n = n.replace(reg, '$1' + ',' + '$2');

  return n;
}


//============== 레이어 온 오프 ============================//


function layeronoff(mode) {
	if(mode=="on") {
		//alert(document.body.clientHeight);
		//alert(screen.availHeight);
		//alert(document.documentElement.scrollHeight);
		document.getElementById('onoff').style.width = document.body.clientWidth+"px";
		document.getElementById('onoff').style.height = document.documentElement.scrollHeight+"px";
		document.getElementById('onoff').style.display = "inline";
		hide_select() ;

		
		

		
	}
	else if(mode=="off") {
		document.getElementById('onoff').style.display = "none";
		view_select();
	}
}

function hide_select() {
	for(var i=0; i<document.all.length; i++) {
		if(document.all[i].name != undefined && document.all[i].name != "" && document.all[i].type=='select-one') {
			document.all[i].style.display ="none";
		}
	}
	
}
function view_select() {
	for(var i=0; i<document.all.length; i++) {
		if(document.all[i].name != undefined && document.all[i].name != "" && document.all[i].type=='select-one') {
			document.all[i].style.display ="inline";
		}
	}
	
}

function typeToSkin(tname) {
	var rt;
	if(tname=="A타입") {
		rt = "skin1";
	}
	else if(tname=="A타입") {
		rt = "skin1";
	}
	else if(tname=="B타입") {
		rt = "skin2";
	}
	else if(tname=="C타입") {
		rt = "skin3";
	}
	else if(tname=="D타입") {
		rt = "skin4";
	}
	else if(tname=="E타입") {
		rt = "skin5";
	}
	else if(tname=="F타입") {
		rt = "skin6";
	}
	else if(tname=="G타입") {
		rt = "skin7";
	}
	else if(tname=="H타입") {
		rt = "skin8";
	}
	else if(tname=="I타입") {
		rt = "skin9";
	}
	else if(tname=="J타입") {
		rt = "skin10";
	}
	else if(tname=="K타입") {
		rt = "skin11";
	}
	else if(tname=="L타입") {
		rt = "skin12";
	}
	else if(tname=="M타입") {
		rt = "skin13";
	}
	else if(tname=="N타입") {
		rt = "skin14";
	}
	else if(tname=="O타입") {
		rt = "skin15";
	}
	else if(tname=="P타입") {
		rt = "skin16";
	}
	else if(tname=="Q타입") {
		rt = "skin17";
	}
	else if(tname=="R타입") {
		rt = "skin18";
	}
	else if(tname=="S타입") {
		rt = "skin19";
	}
	else if(tname=="T타입") {
		rt = "skin20";
	}
	else if(tname=="U타입") {
		rt = "skin21";
	}
	else if(tname=="V타입") {
		rt = "skin22";
	}
	else if(tname=="W타입") {
		rt = "skin23";
	}
	else if(tname=="X타입") {
		rt = "skin24";
	}
	else if(tname=="Y타입") {
		rt = "skin25";
	}
	else if(tname=="Z타입") {
		rt = "skin26";
	}
	return rt;

}


//사업자 등록번호 유효성 검사
function checkBizID(bizID)
  {
   var re = /-/g;
   var bizID = bizID.replace(re,'');
   var checkID = new Array(1, 3, 7, 1, 3, 7, 1, 3, 5, 1);
   var tmpBizID, i, chkSum=0, c2, remander; 
  for (i=0; i<=7; i++){
    chkSum += checkID[i] * bizID.charAt(i);
   }
 
  c2 = "0" + (checkID[8] * bizID.charAt(8));
   c2 = c2.substring(c2.length - 2, c2.length);
 
  chkSum += Math.floor(c2.charAt(0)) + Math.floor(c2.charAt(1));
 
  remander = (10 - (chkSum % 10)) % 10 ;
 
  if (Math.floor(bizID.charAt(9)) == remander){
    return true; // OK!
   }
   return false;
  }

// email 유효성 검사
function valid_email(ele) {
	 re=/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
	 
	// 위의 조건을 만족하려면 최소 6자 이상이어야 함.
	 if(ele.value.length<6 || !re.test(ele.value)) {
	 //alert("메일형식이 맞지 않습니다.n 다시 입력해주세요.n");
	 //ele.select();
	 //ele.focus();
	 return false;
	 } else {
	 //alert("제대로된 형식");
	 return true;
	 }
 }