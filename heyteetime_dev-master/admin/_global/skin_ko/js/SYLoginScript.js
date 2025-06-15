
function MouseFocus(id,mode) {
	if(mode=="In") {
		id.style.border="2px solid #231916";
	} else {
		id.style.border="2px solid #DDDDDD";
	}
}
function SYLoging() {
	location.href="<?=$IncDir?>Login/";
}
function SYReFormMark(objnm) {
	var objs = document.getElementById(objnm);
	if (objs.value=='')
		objs.style.backgroundImage='url(../img/sy_bg_'+objnm+'_text01.gif)';
}
function SYLoginForm(f) {
	if (f.idsave.checked == true){
		SaveID();
	} else {
		UnSaveID();
	}
	if(f.SYLogId.value=="") {
		alert("아이디를 입력해주세요!");
		f.SYLogId.focus();
		return false;
	} else if(f.SYLogPW.value=="") {
		alert("비밀번호를 입력해주세요!");
		f.SYLogPW.focus();
		return false;
	}
	f.target="SYHiddenFrame";
	f.action="../Login/SYLogin.asp";
	f.submit();
	return true;
}
function SYIDCheck() {
//alert("idcheck()")
//alert(cookieVal("idsave"))
	if(cookieVal("idsave") == "on")
	{
		var loginid = cookieVal("loginid");
		document.fm.idsave.checked = true;	
		document.fm.SYLogId.value = loginid; 	
		document.fm.SYLogPW.focus();
	}
	else
		document.fm.SYLogId.focus();
}

function cookieVal(cookieName)
{
   thisCookie = document.cookie.split("; ");
	//alert(thisCookie)
   for(i=0; i<thisCookie.length; i++)
   {
     if(cookieName == thisCookie[i].split("=")[0])
       return thisCookie[i].split("=")[1]
   }
   return "x"
} 

function SaveID() {
	var id;
	id = document.fm.SYLogId.value; 	
	var todayDate = new Date();
	todayDate.setDate(todayDate.getDate() + 365);
	document.cookie = "idsave=on; expires=" + todayDate.toGMTString();
	document.cookie = "loginid=" + id + "; expires=" + todayDate.toGMTString();
}

function UnSaveID() {
	var todayDate = new Date();
	todayDate.setDate(todayDate.getDate() + 365);

	document.cookie = "idsave=off; expires=" + todayDate.toGMTString();
	document.cookie = "loginid=; expires=" + todayDate.toGMTString();
}