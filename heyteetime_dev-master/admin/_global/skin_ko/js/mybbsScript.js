function today() {
	var today = new Date();
	var month = parseInt(today.getMonth()+"") + 1;
	var date = today.getDate();
	var todate = today.getFullYear();
	if (parseInt(month) < 10) todate += "-0"+month;
	else									todate += "-"+month;
	if (parseInt(date) < 10) 	todate += "-0"+date;
	else									todate += "-"+date;
	return todate;
}	

function carlendarView(layer, id, SearchDates) {
		if (SearchDates == "") {
			if (document.getElementById(id).value == "") SearchDates = today().split('-');
			else SearchDates = document.getElementById(id).value.split('-');
		} else {
			SearchDates = SearchDates.split('-');
		}
		var CarlendarDay = 0;
		var TRcount = 0;
		year = SearchDates[0];
		month = SearchDates[1];
		days = SearchDates[2];
		if(eval(month)==0) {
			year = eval(year)-1;
			month = 12;
		} else if(eval(month)==13) {
			year = eval(year)+1;
			month = 1;
		}
		var TotalDay = CarlendarLastDate(month);
		var StartAday=new Date(year,month-1,1);
		document.getElementById(layer).style.display="";
		var CarlendarHTML = "<div class=\"KMScarlendatLayer02\" style=\"width:165px\"><div class=\"KMScarlendarNavi\">";
		CarlendarHTML += "<span class=\"prev\"><a href=\"javascript:carlendarView('"+layer+"','"+id+"','"+year+"-"+(eval(month)-1)+"-"+days+"')\" title=\"이전달 보기\">이전달 보기</a></span>";
		CarlendarHTML += "<span class=\"date\"><span class=\"big\">"+year+"/"+(eval(month) + 100).toString().substr(1)+"</span><span class=\"small\">"+year+"."+month+"."+days+"</span></span>";
		CarlendarHTML += "<span class=\"next\"><a href=\"javascript:carlendarView('"+layer+"','"+id+"','"+year+"-"+(eval(month)+1)+"-"+days+"')\" title=\"다음달 보기\">다음달 보기</a></span>";
		CarlendarHTML += "<span class=\"CloseBtn01\"><a href=\"javascript:carlendarOff('"+layer+"')\" title=\"닫기\">닫기</a></span>";
		CarlendarHTML += "</div>";
		CarlendarHTML += "<table class=\"KMSCarlendarList01\">";	
		CarlendarHTML += "<tr><td colspan=\"7\" class=\"title2\"><img src=\"/img/kms_bar_tit_carlendar01.gif\"></td>";				
		CarlendarHTML += "</tr>";
		CarlendarHTML += "<tr>";
		StartAday = StartAday.getDay(); 
		for(DayCount=0; CarlendarDay < TotalDay; DayCount++) {
			if(DayCount >= StartAday) CarlendarDay++;
			if(CarlendarDay != 0) { 
				if(CarlendarDay==eval(days)) CarlendarHTML += "<td class=\"Todays ";
				else CarlendarHTML += "<td id=\""+layer+CarlendarDay+"\" onmouseover=\"CarneldarOnOff('On','"+layer+CarlendarDay+"')\" onmouseout=\"CarneldarOnOff('Off','"+layer+CarlendarDay+"')\" class=\"day ";
				if(TRcount==0) CarlendarHTML += "KMS_red\"";
				else if(TRcount==6) CarlendarHTML += "KMS_green\"";
				else CarlendarHTML += "\"";
				CarlendarHTML += " onclick=\"javascript:carlendarClick('"+layer+"','"+id+"','"+year+"-"+(eval(month) + 100).toString().substr(1)+"-"+(eval(CarlendarDay) + 100).toString().substr(1)+"')\">"+CarlendarDay+"</a></td>";
			} else {
				CarlendarHTML += "<td class=\"none\"></td>";
			}
			if(TRcount==6) {
					TRcount=0;
				CarlendarHTML += "</tr><tr>";
			} else TRcount++;
		}
		if(TRcount!=0) {
			for(i=TRcount; i<7; i++) {
				CarlendarHTML += "<td class=\"none\"></td>";
				if(i==6) CarlendarHTML += "</tr>";
			}
		}
		CarlendarHTML += "</table></div><iframe name=\"SelectBoxIframe\" frameborder=\"0\" style=\"position:absolute; left:0; top:0; z-index:-1px; width:169px; height:100%;\"></iframe>";
		document.getElementById(layer).innerHTML=CarlendarHTML;
}

function carlendarClick(layer,id,value) {
	document.getElementById(id).value=value;
	document.getElementById(layer).style.display="none";
}

function carlendarOff(layer) {
	document.getElementById(layer).style.display="none";
}

function CarlendarLastDate(ThisMonth) {
	var LastDate = Array (31,28,31,30,31,30,31,31,30,31,30,31);
	ThisMonth = eval(ThisMonth)-1;
	return(LastDate[ThisMonth]);
}

function CarneldarOnOff(mode,no){
	if(mode=='On'){
		document.getElementById(no).style.background="#E0E0E0";
	} else {
		document.getElementById(no).style.background="transparent";
	} 
}