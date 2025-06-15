//$.ajaxSetup({async :false});

//============== 쿠키 =======================================//
function getCookie(name)
{
    var nameOfCookie = name + "=";
    var x = 0;

    while ( x <= document.cookie.length )
    {
        var y = (x+nameOfCookie.length);

        if ( document.cookie.substring( x, y ) == nameOfCookie )
        {
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
function setCookie( name, value, expiredays )
{
    var todayDate = new Date();
    todayDate.setDate( todayDate.getDate() + expiredays );

    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}


//=================== 공통 =========================//
function bookmarksite(url, title) {
	window.external.AddFavorite(url, title);
}



//객체절대좌표구하기
function getAbsolutePos(obj) {

	var position = new Object;

	position.x = 0;

	position.y = 0;

	if( obj ) {

		position.x = obj.offsetLeft + obj.clientLeft;

		position.y = obj.offsetTop + obj.clientTop;

		if( obj.offsetParent ) {

			var parentpos = getAbsolutePos(obj.offsetParent);

			position.x += parentpos.x;

			position.y += parentpos.y;

		}

	}

	return position;

}

//=========== 백그라운드 onoff ===========================//
function bgBlock(arg) {
	if(arg == "on") {
		$("#onoff").css({
			"height" : $(document).outerHeight() +"px",
			"display" : "inline"
		});
	}
	else {
		$("#onoff").css({
			"display" : "none"
		});
	}
}

// 레이어 가운데로 띄우기
function viewLayerLogin(mode, obj) {
	if(mode == 'on') {
		bgBlock('on');

		if(parseInt($(document).scrollTop() ) > 0 ) {

			var top =  parseInt($(document).scrollTop()) + 20 ;
		}
		else {
			var top = ( parseInt($(document).height()) - parseInt($("#"+obj).height()) ) /2 ;
		}
		
		
		var left = ( parseInt($(".wrapper").width()) - parseInt($("#"+obj).width()) ) /2 ;

		
		$("#"+obj).css('top', top+"px");
		$("#"+obj).css('left', left+"px");
		$("#"+obj).fadeIn('slow');
	}
	else {
		bgBlock('off');
		$("#"+obj).fadeOut('slow');
	}
}

function viewLayer(mode, obj) {
	if(mode == 'on') {
		
		bgBlock('on');
		
		var top =  parseInt($(document).scrollTop()) + 20 ;

		var wrap_width = parseInt($("body").width());

		
		var obj_width =  parseInt($("#"+obj).width());
		

		var left = ( wrap_width - obj_width ) /2 ;
			
		$("#"+obj).css('position', 'absolute');
		$("#"+obj).css('top', top+"px");
		$("#"+obj).css('left', left+"px");
		$("#"+obj).fadeIn('slow');
		
		
	}
	else {
		bgBlock('off');
		$("#"+obj).fadeOut('fast');
	}
}

function viewLayerPhoto(mode, obj) {
	if(mode == 'on') {
		bgBlock('on');
		
		var top =  parseInt($(document).scrollTop()) + 100 ;

		var wrap_width = parseInt($("#wrap").width());

		if($("#"+obj+" img").length > 0 ) {
			
			$("#"+obj+" img").bind('load', function () {
				var obj_width =  parseInt($("#"+obj).width());
				
				var left = ( wrap_width - obj_width ) /2 ;

				
				
				$("#"+obj).css('position', 'absolute');
				$("#"+obj).css('top', top+"px");
				$("#"+obj).css('left', left+"px");
				$("#"+obj).fadeIn('slow');
				//return;
			});
		}
		else {
			var obj_width =  parseInt($("#"+obj).width());
			

			var left = ( wrap_width - obj_width ) /2 ;
				
			$("#"+obj).css('position', 'absolute');
			$("#"+obj).css('top', top+"px");
			$("#"+obj).css('left', left+"px");
			$("#"+obj).fadeIn('slow');
		}
		
	}
	else {
		bgBlock('off');
		$("#"+obj).fadeOut('fast');
	}
}


function colorpicker(id, color, mode) {
	if(!mode || mode =="full") {
		$("#"+id).spectrum({
			color: color,
			showInput: true,
			className: "full-spectrum",
			showInitial: true,
			showPalette: true,
			showSelectionPalette: true,
			maxSelectionSize: 10,
			preferredFormat: "hex",
			localStorageKey: "spectrum.demo",
			move: function (color) {
				
			},
			show: function () {
			
			},
			beforeShow: function () {
			
			},
			hide: function () {
			
			},
			change: function(color) {
				
			},
			palette: [
				["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
				"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
				["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
				"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
				["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
				"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
				"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
				"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
				"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
				"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
				"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
				"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
				"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
				"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
			]
		});
	}
	else {
		$("#"+id).spectrum({
			color: color
		});
	}

	$("#"+id).val(color);
}


// 입력창 포커스 이동
function mv_focus(obj, id, len) {
	if(obj.value.length == len) {
		$("#"+id).focus();
	}
	
}
/*

function getCookie(name)
{
    var nameOfCookie = name + "=";
    var x = 0;

    while ( x <= document.cookie.length )
    {
        var y = (x+nameOfCookie.length);

        if ( document.cookie.substring( x, y ) == nameOfCookie )
        {
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
function setCookie( name, value, expiredays )
{
    var todayDate = new Date();
    todayDate.setDate( todayDate.getDate() + expiredays );

    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}
*/


function setLayerPopupClose(arg_name, arg_day, onoff) {
    if(onoff == "on")	setCookie(arg_name,1,arg_day);
    viewLayer('off', arg_name);
    //document.getElementById(arg_name).style.display ='none';

}


function sch_list(frm_name, page_init) {
	 var frm = eval("document."+frm_name);
	 frm.method='get';
	 frm.action="";

	 if (document.getElementsByName('idx[]')) {

		for (i = 0; i < document.getElementsByName('idx[]').length; i++) {
			document.getElementsByName('idx[]')[i].checked = false;
		}

	}
	 
	 if(frm.page && page_init != 'Y') frm.page.value =1;
	 frm.submit();
 }


function go_back() {
	history.back();
}



function checkMbSize(id){
			
	var size =  $('#'+id)[0].files[0].size;
	var mbsize = Math.round(size/1024/1024,0);
	return mbsize;
}

function checkExt(id) {
	var ext = $('#'+id).val().split('.').pop().toLowerCase();
	return ext;
}
