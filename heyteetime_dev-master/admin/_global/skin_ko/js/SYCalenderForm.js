var sy_dates="";
function SYLayerCalendarView(sy_type,sy_value, formid) {
	toDate = new Date(); 	
	sy_dates = document.getElementById(formid).value;
	

	SYLayerCalendarViewContent(sy_type,sy_dates, formid)
}



function SYLayerCalendarView_one(sy_type,sy_value) {
	toDate = new Date(); 	
	sy_dates = sy_value;
	
	

	SYLayerCalendarViewContent(sy_type,sy_dates)
}
function SYLayerCalendarViewContent(sy_type,sy_value, formid) {
	
	document.getElementById(sy_type).innerHTML="";
	var SYLayerCalendarTable = document.createElement("table");
	document.getElementById(sy_type).appendChild(SYLayerCalendarTable);
	SYLayerCalendarTable.className="SYLayerCalendar";
	
	
	//document.getElementById(sy_type).style.offsetTop= document.getElementById(formid).offsetTop+"px";
	//document.getElementById(sy_type).style.left= document.getElementById(formid).offsetLeft+"px";
	//SYLayerCalendarTable.style.left = document.body.clientLeft + document.getElementById(formid).offsetLeft -  document.body.scrollLeft;
	
	/*
	SYLayerCalendarTable.style.top="120px";
	if(sy_type=="sy_search_start") SYLayerCalendarTable.style.left = "220px";
	else SYLayerCalendarTable.style.left = "417px";
	*/
	var pos = 	getAbsolutePos(document.getElementById(formid));
	document.getElementById(sy_type).style.top = (pos.y +40)+"px";
	document.getElementById(sy_type).style.left = (pos.x + 20) +"px";

	
	var TR1 = SYLayerCalendarTable.insertRow(0);
	var Tr1Td1 = TR1.insertCell(0);	
	Tr1Td1.style.border = "none";
	Tr1Td1.style.padding = "0";
	toDate = new Date(); 

	if(sy_value!="") {
		sy_dates = sy_value;
	} else { 		
		sy_dates = toDate.getFullYear()+"-"+SYNumCut(toDate.getMonth()+1,2)+"-"+SYNumCut(toDate.getDate(),2);
	}
	var sy_date_type = "-";
	sy_date = sy_dates.replace(/-/gi,"");
	if(sy_date.length != sy_dates.length) sy_date_type="-";
	sy_prev_date = sy_date;
	sy_date = sy_date.replace(/\//gi,"");
	if(sy_date.length != sy_prev_date.length) sy_date_type="/";
	sy_prev_date = sy_date;
	sy_date = sy_date.replace(/\./gi,"");
	if(sy_date.length != sy_prev_date.length) sy_date_type=".";
	sy_year = sy_date.substring(0,4);
	sy_month = sy_date.substring(4,6);
	sy_day = sy_date.substring(6,8);
	SYLastDate = SYCarlendarLastDate(sy_month,sy_year);
	
	var StartAday=new Date(sy_year,sy_month-1,1);
	StartAday = StartAday.getDay(); 

	count = (SYLastDate*1 + StartAday*1)/7;
	SYPrevMonth = sy_year+SYNumCut(sy_month*1-1,2)+sy_day;
	SYNextMonth = sy_year+SYNumCut(sy_month*1+1,2)+sy_day;
	if(sy_month*1 == 1) {
		SYPrevMonth = (sy_year*1-1)+"12"+sy_day;
	} else if(sy_month == 12) {
		SYNextMonth = (sy_year*1+1)+"01"+sy_day;
	}

	var SYLayerCalendarH3 = document.createElement("h3");
	SYLayerCalendarH3.setAttribute("id",sy_type+"Header");
	Tr1Td1.appendChild(SYLayerCalendarH3);
	document.getElementById(sy_type+"Header").innerHTML = "<input type=\"button\" class=\"SYLayerCalendarPrev\" onclick=\"SYLayerCalendarViewContent('"+sy_type+"','"+(sy_year-1)+sy_month+sy_day+"','"+formid+"');\" value=\"\"><span class=\"MouseHand\" onclick=\"SYLayCalendarDateInsert('"+sy_type+"','"+sy_year+"--','"+formid+"');\">"+sy_year+"</span><input type=\"button\" class=\"SYLayerCalendarNext\" onclick=\"SYLayerCalendarViewContent('"+sy_type+"','"+(sy_year*1+1)+sy_month+sy_day+"','"+formid+"');\" value=\"\"> <input type=\"button\" class=\"SYLayerCalendarPrev\" onclick=\"SYLayerCalendarViewContent('"+sy_type+"','"+SYPrevMonth+"','"+formid+"');\" value=\"\"><span class=\"MouseHand\" onclick=\"SYLayCalendarDateInsert('"+sy_type+"','"+sy_year+"-"+sy_month+"-','"+formid+"');\">"+sy_month+"</span><input type=\"button\" class=\"SYLayerCalendarNext\" onclick=\"SYLayerCalendarViewContent('"+sy_type+"','"+SYNextMonth+"','"+formid+"');\" value=\"\">";

	var SYTable = document.createElement("table");
	Tr1Td1.appendChild(SYTable);
	SYTable.className="SYLayerCalendarTable";
	SYTable.onclick = function() {
		document.getElementById(sy_type).innerHTML="";
	}
	
	SYDay = 1;
	for(i=0; i<count; i++) {	
		var TR = SYTable.insertRow(i);
		for(j=0; j<7; j++) {
			var Tr1Td = TR.insertCell(j);	
			DayClass = "Day";
			if(j>=StartAday || i > 0) {
				if(SYDay<=SYLastDate) {
					if(j==0) DayClass = "Sun";
					if(j==6) DayClass = "Sat";
					if((sy_day*1)==SYDay) DayClass = "Today";
					
					Tr1Td.setAttribute("id",sy_year+sy_date_type+sy_month+sy_date_type+SYNumCut(SYDay,2));
					Tr1Td.innerHTML = SYDay;
					if((sy_day*1)!=SYDay) {
						Tr1Td.onmouseover = function() {
							SYLayerCalendarOnOff("On",this);
						}
						Tr1Td.onmouseout = function() {
							SYLayerCalendarOnOff("Off",this);
						}
					}
					Tr1Td.onclick = function() {
						SYLayCalendarDateInsert(sy_type,this.id,formid);
					}
				}
				SYDay++;
			}
			Tr1Td.className = DayClass;
		}
	}
}

function SYLayCalendarSubLink(sy_type,sy_date) {
	SYLayerCalendarViewContent(sy_type,sy_date);
}

function SYLayerCalendarOnOff(mode,id) {
	if(mode=="On") id.className=id.className+" On";
	else id.className=id.className.replace(" On","");
}
function SYLayCalendarDateInsert(sy_type,sy_value,formid) {
	/*
	var sy_date_array = sy_value.split("-");
	document.form1[sy_type+"_year"].value=sy_date_array[0];
	if(sy_date_array[1]!="") document.form1[sy_type+"_month"].value=sy_date_array[1];
	else document.form1[sy_type+"_month"].value="";
	if(sy_date_array[2]!="") document.form1[sy_type+"_day"].value=sy_date_array[2];
	else document.form1[sy_type+"_day"].value="";
	*/
	document.getElementById(formid).value=sy_value;
}
function SYDateReSet() {	
	document.form1.sy_search_start_year.value="";
	document.form1.sy_search_start_month.value="";
	document.form1.sy_search_start_day.value="";
	document.form1.sy_search_end_year.value="";
	document.form1.sy_search_end_month.value="";
	document.form1.sy_search_end_day.value="";
	document.form1.sy_date_reset.value="Reset";
}


/**
	HTML 개체용 유틸리티 함수
**/
function getAbsolutePos(obj) {
 var position = new Object;
 position.x = 0;
 position.y = 0;

 if( obj ) {
  position.x = obj.offsetLeft;
  position.y = obj.offsetTop;

  if( obj.offsetParent ) {
   var parentpos = getAbsolutePos(obj.offsetParent);
   position.x += parentpos.x;
   position.y += parentpos.y;
  }

 }

 return position;
}