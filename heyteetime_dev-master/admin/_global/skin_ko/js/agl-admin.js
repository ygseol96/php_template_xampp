
$(document).ready(function() {
	basic_script();


	//body에 하이드 layer추가
	var onoffLayer = "<div id='onoff' style='display:none;position:absolute; margin:0 auto;z-index:999; width:100%; height:100%;background-color:#000000;opacity:0.5;filter:alpha(opacity=50); top:0px; left:0px;'></div>";
	//var hidefrm ="<iframe name='hideiframe' width=100% height=0 frameborder=0></iframe>";
	$("body").append(onoffLayer);
	//$("body").append(hidefrm);


	//검색창에 엔터키 눌릴때 검색되게 공통적용

	if($("input[name=s_keyfield]").length > 0 ) {
		//console.log('sch exists!');
		$("input[name=s_keyfield]").on("keydown",function() {
			//console.log('keydown');
			if(event.keyCode == '13') {
				//console.log('enter');
				if($.isFunction(sch_list)) {
					//console.log('sch_list존재')
					sch_list('schForm');
				}
			}
		});

	}


	

	
});

/** common **/
function basic_script() {
	
	// 숫자만 입력
	$('.numOnly').css('imeMode','disabled')
	.keypress(function(event) {
        if(event.which && (event.which < 48 || event.which > 57) && event.which != 8 ) {

            event.preventDefault();

        }

    })
	.keyup(function(){

        if( $(this).val() != null && $(this).val() != '' ) {

            $(this).val( $(this).val().replace(/[^0-9]/g, '') );

        }

    });


	// 숫자 .만 입력
	$('.floatOnly').css('imeMode','disabled')
	
	.keyup(function(){

        if( $(this).val() != null && $(this).val() != '' ) {

            $(this).val( $(this).val().replace(/[^0-9.]/g, '') );

        }

    });

	// 숫자, 마이너스만 입력
	$('.numMinusOnly').css('imeMode','disabled')
	
	.keyup(function(){

        if( $(this).val() != null && $(this).val() != '' ) {

			var ret = $(this).val().replace(/[^0-9-]/g, '');

            $(this).val( ret );

        }

    });

	// 숫자, .만 입력
	$('.floatOnly').css('imeMode','disabled')
	.keypress(function(event) {
        if(event.which && !( (event.which >= 48 && event.which <= 57 ) || event.which == 46 ) ) {
			
            event.preventDefault();

        }

    })
	.keyup(function(){

        if( $(this).val() != null && $(this).val() != '' ) {

            //$(this).val( $(this).val().replace(/[^0-9.]/g, '') );

			var str = $(this).val();
			var regExp = /0-9./gi


			if(regExp.test(str)){
				//특수문자 제거
				var t = str.replace(regExp, "");
				$(this).val(t);
			}

        }

    });

	// 지도용 - 숫자, . ,만 입력
	$('.mapOnly').css('imeMode','disabled')
	.keypress(function(event) {
        if(event.which && !( (event.which >= 48 && event.which <= 57 ) || event.which == 46 || event.which == 44 ) ) {
			//console.log('이건안돼 '+event.which);
            event.preventDefault();

        }

    })
	.keyup(function(){

        if( $(this).val() != null && $(this).val() != '' ) {

            //$(this).val( $(this).val().replace(/[^0-9.]/g, '') );

			var str = $(this).val();
			var regExp = /0-9./gi


			if(regExp.test(str)){
				//특수문자 제거
				var t = str.replace(regExp, "");
				$(this).val(t);
			}

        }

    });

	$('.Comma').keyup(function() {
		if( $(this).val() != null && $(this).val() != '' ) {

			var temp = $(this).val();
			temp = temp.replace(/[^0-9]/g, '');

            var temp = temp.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

            $(this).val( temp );

        }
	});

	// 숫자, 마이너스만 입력
	$('.readOnly').css('imeMode','disabled')
	.keypress(function(event) {
        if(event.which && (event.which < 48 || event.which > 57) && event.which != 8  && event.which != 45 ) {

            event.preventDefault();

        }

    })
	.keyup(function(){

        if( $(this).val() != null && $(this).val() != '' ) {

            $(this).val('') ;

        }

    });

	// 특수문자 제거
	$('.extSpecial').css('imeMode','disabled')
	.keypress(function(event) {

	   if( $(this).val() != null && $(this).val() != '' ) {

			//$(this).val( $(this).val().replace(/[^0-9-]/g, '') );
			
			var str = $(this).val();

			var regExp = /[\{\}\[\]\/?.,;:|\)*~`!^\_+<>@\#$%&\\\=\(\'\"]/gi


			if(regExp.test(str)){
				//특수문자 제거
				var t = str.replace(regExp, "");
				$(this).val(t);
			}
	   }

    })
	.keyup(function(){

        if( $(this).val() != null && $(this).val() != '' ) {

			var str = $(this).val();

			var regExp = /[\{\}\[\]\/?.,;:|\)*~`!^\_+<>@\#$%&\\\=\(\'\"]/gi


			if(regExp.test(str)){

				//특수문자 제거
				var t = str.replace(regExp, "");
				$(this).val(t);
			}

        }

    });




	// 영문만 입력
	$('.engOnly').css('imeMode','disabled')
	
	.keyup(function(){

        if( $(this).val() != null && $(this).val() != '' ) {

			var ret = $(this).val().replace(/[0-9]|[^\!-z\s]/gi, '' );

            $(this).val(ret );

        }

    });

	// 한글입력막기 스크립트
	$(".notKorean").css('imeMode','disabled')
		.keyup(function(e) { 
		if (!(e.keyCode >=37 && e.keyCode<=40)) {
			var v = $(this).val();
			var ret = v.replace(/[^a-z0-9]/gi,'');
			
			$(this).val(ret);
			
		}
	});


	// 아이디 영문숫자 _ 만 가능
	$(".idOnly").css('imeMode','disabled')
		.keyup(function(e) { 
		if (!(e.keyCode >=37 && e.keyCode<=40)) {
			var v = $(this).val();
			var ret = v.replace(/[^a-z0-9_-]/gi,'');
			ret = ret.toLowerCase();
			$(this).val(ret);
		}
	});
	

	
	// 대문자만 가능
	$(".upper").css('imeMode','disabled')
		.keyup(function(e) { 
		
			var v = $(this).val();
			$(this).val(v.toUpperCase());
		
	});

	// 소문자만 가능
	$(".lower").css('imeMode','disabled')
		.keyup(function(e) { 
		
			var v = $(this).val();

			var ret = v.toLowerCase();
			
			$(this).val(ret);
			
		
	});



	

	if($( ".datepicker" ).length > 0 ) {
	
		$( ".datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat:"yy-mm-dd",
			prevText: '이전 달',
			nextText: '다음 달',
			monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
			monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
			dayNames: ['일', '월', '화', '수', '목', '금', '토'],
			dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
			dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
			showMonthAfterYear: true,
			yearSuffix: '년'
		});
		$(  ".datepicker" ).on('click', function(){
			$( this ).datepicker("show");
		});
	}

	

	if($( ".monthpicker" ).length > 0 ) {
	
		$(  ".monthpicker" ).monthpicker({
			changeMonth: true,
			changeYear: true,
			dateFormat:"yy-mm",
			prevText: '이전 달',
			nextText: '다음 달',
			monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
			monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
			yearRange : 'c-20:c+20',
			showMonthAfterYear: true,
			yearSuffix: '년'
		});
		
		
	}

	if($( ".yearpicker" ).length > 0 ) {
	
		$(  ".yearpicker" ).yearpicker({
			changeMonth: true,
			changeYear: true,
			dateFormat:"yy",
			prevText: '이전 년도',
			nextText: '다음 년도',
			yearRange : 'c-20:c+20',
			showMonthAfterYear: true,
			yearSuffix: '년'
		});
		
		
	}

	jq_selectbox();

}


// 이메일 정규식 검사
function emailcheck(strValue) {

	var regExp = /[0-9a-zA-Z][_0-9a-zA-Z-]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;


	//입력을 안했으면

	if(strValue.length == 0)

	{return false;}


	//이메일 형식에 맞지않으면

	if (!strValue.match(regExp))

	{return false;}


	return true;

}

function chk_all(frm_name) {
	//alert(frm_name);
	var frm = eval("document."+frm_name);
	
	var myAll = frm.chkall.checked;
	
	if(document.getElementsByName("idx[]")) {
		for(i=0; i < document.getElementsByName("idx[]").length; i++) {
			document.getElementsByName("idx[]")[i].checked = myAll;

		}
	}
	
}

function chk_all_enabled(frm_name) {
	//alert(frm_name);
	var frm = eval("document."+frm_name);
	
	var myAll = frm.chkall.checked;
	
	if(document.getElementsByName("idx[]")) {
		for(i=0; i < document.getElementsByName("idx[]").length; i++) {
			if(document.getElementsByName("idx[]")[i].disabled == false) {
				document.getElementsByName("idx[]")[i].checked = myAll;
			}

		}
	}
	
}


function numToComma(temp) {

	temp = temp +'';
	
	temp = temp.replace(/[^0-9]/g, '');

	var temp = temp.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

	return temp;
}

function rmComma(temp) {

	temp = temp +'';
	
	temp = temp.replace(/,/g, '');

	return temp;
}


function viewKoreanPrice( strNumber )
{
    strNumber = strNumber.replace(new RegExp(",", "g"), "");

    var arrayAmt = new Array("일", "이", "삼", "사", "오", "육", "칠", "팔", "구", "십");
    var arraypos = new Array("", "십", "백", "천");
    var arrayUnit = new Array("", "만", "억", "조", "경", "해", "자", "양", "구", "간", "정", "재", "극", "항하사", "아승기", "나유타", "불가사의", "무량대수");
 
    var pos = strNumber.length%4;                        //자리수
    var len = (strNumber.length/4).toString();

 

    if( len.indexOf(".") > 0 )
        var unit = len.substring(0, len.indexOf("."));      //단위(0:일단위, 1:만단위...)
     else
        var unit = strNumber.length/4-1;

 

    var korNumber = "";
    var op = 0;

 

    for( i=0; i<strNumber.length; i++ )
    {
        if(pos==0) pos=4;
        var num = parseInt( strNumber.substring( i, i+1 ) );
        if( num != 0 )
        {
            korNumber += arrayAmt[ num-1 ];
            korNumber += arraypos[ pos-1 ];
            op=1;
        }
        if(pos==1)
        {
            if(op==1) korNumber += arrayUnit[unit];
            unit--;
            op = 0;
        }
        pos--;
    }

    if (korNumber.length==0 || korNumber.length==null )
        return  "";
    else {
		return korNumber+"원" ;
	}
}




/**
* login
**/

function login() {
	if(! $('#user-id').val() ) {
		alert('아이디를 입력하세요');
		$('#user-id').focus();
		return;
	}

	if(! $('#user-password').val() ) {
		alert('비밀번호를 입력하세요');
		$('#user-password').focus();
		return;
	}
	$('#loginForm').ajaxSubmit({
				
		dataType:  'json',
		url : '/inc/ajax_common.php',
		type : 'post',
		success:  function (obj) {
			var msg = decodeURIComponent(obj.msg);
			var opt_msg = decodeURIComponent(obj.opt_msg);
			
			if(obj.result == "Y") {
				
				location.href='/';

				
			}
			else {
				alert(msg);	
			}
		}
	});
}

function logout() {
	var ans = confirm('로그아웃 하시겠습니까?');
	if(ans == true) {
		$.post('/inc/ajax_common.php', { mode: 'logout'  },
			function(json) { 
				var obj = $.parseJSON(json); 
				if(obj.result == 'Y') {
					location.href ='/login.html';

				}
				else {
					alert(decodeURIComponent(obj.msg));
				}
				
			}
		);

	}
}


function excel_down(arg) {
	var frm = document.schForm;

	frm.action = 'excel_'+arg+'.php';
	frm.submit();

	
}



function calcPriceHangul(obj_nm) {
	
	var price = rmComma($('#'+obj_nm).val());


	var regExp = /[^0-9]/gi


	if(regExp.test(price)){
		
		$('#view_'+obj_nm).html('원');
		return;
	}
		


	var rt = viewKoreanPrice(price);

	$('#view_'+obj_nm).html(rt);
}


function calc_jd(p, price, obj) {
	
	var rt = parseInt( parseFloat(p) * parseFloat(price) *0.004);	

//	alert(parseFloat(p));
//	alert(parseFloat(price));
//	alert(rt);
	$('#'+obj).val(numToComma(rt));
}


function chk_bizno(value) {
    var valueMap = value.replace(/-/gi, '').split('').map(function(item) {
        return parseInt(item, 10);
    });

    if (valueMap.length === 10) {
        var multiply = new Array(1, 3, 7, 1, 3, 7, 1, 3, 5);
        var checkSum = 0;

        for (var i = 0; i < multiply.length; ++i) {
            checkSum += multiply[i] * valueMap[i];
        }

        checkSum += parseInt((multiply[8] * valueMap[8]) / 10, 10);
        return Math.floor(valueMap[9]) === (10 - (checkSum % 10));
    }

    return false;
}



function leftMenuOnOff(sy_type) {
	var todayDate = new Date(); 
	todayDate.setDate(todayDate.getDate() + 1); 
	if(document.getElementById("SYLeftMenuOpenYN").className=="SYLeftMenuClose") {
		document.cookie = "SYLeftMenu=Close; path=/; expires=" + todayDate.toGMTString() + ";";
		leftMenuAction("Close");

	} else {
		document.cookie = "SYLeftMenu=Open; path=/; expires=" + todayDate.toGMTString() + ";" ;
		leftMenuAction("Open");
	}
}

function leftMenuAction(sy_type) {
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



// 텍스트 한글,영문 byte count
function countByteCheck(id) {
		var str = $('#'+id).val();
		var len = str.length;
		var one_char = "";
		var bytes = 0;
		

		for(var i=0; i<len; i++){ 
			one_char = str.charAt(i); 
			if(escape(one_char).length > 4){ 
				bytes += 2; //한글2Byte 
				
			}
			else{ 
				bytes++; //영문 등 나머지 1Byte 
				
			} 

			
		} 

		return bytes;
	}

//dropdown select box
function drop_search(id) {
	var input = id + "_input";
	var contents = id + "_contents";

	var title_width = parseInt($('#'+id+'_title').css('width').replace("px","")) + 15;
	$('#'+input).width( title_width+"px");
	$('#'+contents).width( title_width+"px");

	//var title_width = $('#'+id+'_title').css('width');
	//$('#'+input).width( title_width);

	document.getElementById(input).classList.toggle("dropdown-show");
	document.getElementById(contents).classList.toggle("dropdown-show");
}

function dropFilter(id) {
	var input, filter, ul, li, a, i;
	var input_id = id + "_txt";

	input = document.getElementById(input_id);
	filter = input.value.toUpperCase();
	div = document.getElementById(id+"_contents");
	a = div.getElementsByTagName("a");
	console.log(filter);

	for (i = 0; i < a.length; i++) {
		txtValue = a[i].textContent || a[i].innerText;
		if (txtValue.toUpperCase().indexOf(filter) > -1) {
		  a[i].style.display = "";
		} else {
		  a[i].style.display = "none";
		}
	}
}

function drop_selected(id, value, name, submit, func) {
	$('#'+id).val(value);
	$('#'+id+'_txt').val(name);
	
	$('#'+id+'_title').html(name);
	/*
	$('#'+id+'_input').css("display","none");
	$('#'+id+'_contents').css("display","none");
	*/
	drop_search(id);

	//console.log($('#'+id).val());
	
	if(submit == 'Y') {
		if($('#'+id+'_ref').length > 0 ) {
			$('#'+id+'_ref').val(value);
		}

		if($('#'+id+'_txt_ref').length > 0 ) {
			$('#'+id+'_txt_ref').val(name);
		}
		sch_list('schForm');
	}

	if(func > '' ) {
		console.log('func='+func);

		func();
		
	}
}









function wopen(url) {
	if(url > '' ) {
		window.open(url);
	}
}


function common_sms_form(mobile) {
	var km_no = '';

	if($('#sms_km_no').length > 0 ) {
		km_no = $('#sms_km_no').val();
	}

	if(!mobile && $('#handphone') > '') {
		mobile = $('#handphone').val();
	}
	$.post('/inc/ajax_common.php', { mode: 'sms_input_form', mobile : mobile, km_no: km_no  },
		function(json) { 
			var obj = $.parseJSON(json); 
			if(obj.result == 'Y') {
				var html = decodeURIComponent(obj.msg);
				var rmobile = decodeURIComponent(obj.opt_msg);

				$('#popSms').html(html);
				basic_script();

				if(rmobile > '' ) {
					var mobile_val = '<option value="'+ rmobile +'" >'+ rmobile +'</option>';
					$('#sms_rlist').html(mobile_val);
				}
				viewLayer('on', 'popSms' );
				
				
			}
			else {
				alert(decodeURIComponent(obj.msg));
				
			}
			
		}
	);
}

function set_sms_msg(idno) {
	var msg = $('#sms_msg_'+idno).html().trim();
	$('#sms_msg').val(msg);
	 countSmsByte();

	$('#sms_msg').focus();


}

function countSmsByte() {
	var bytes = countByteCheck('sms_msg');
	$('#viewByte').html(bytes);
}


//자료 다운로드
function download_file(gubun, seq) {
	location.href = '/inc/attach_download.php?gubun='+gubun+'&seq='+seq;
}


//팝업을 닫는 경우에는 부모창을 리프레시 한다.
$(window).bind("beforeunload", function (e){	
	if(opener) {
		opener.location.reload();
	}
});




//검색가능한 select
function jq_selectbox() {

	if($( ".select-combobox" ).length == 0 ) return;

	 $.widget( "custom.combobox", {
	  _create: function() {
		this.wrapper = $( "<span>" )
		  .addClass( "custom-combobox" )
		  .insertAfter( this.element );
 
		this.element.hide();
		this._createAutocomplete();
		this._createShowAllButton();
	  },
 
	  _createAutocomplete: function() {
		var selected = this.element.children( ":selected" ),
		  value = selected.val() ? selected.text() : "";
 
		this.input = $( "<input>" )
		  .appendTo( this.wrapper )
		  .val( value )
		  .attr( "title", "" )
		  .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
		  .autocomplete({
			delay: 0,
			minLength: 0,
			source: this._source.bind( this )
		  })
		  .tooltip({
			classes: {
			  "ui-tooltip": "ui-state-highlight"
			}
		  });
 
		this._on( this.input, {
		  autocompleteselect: function( event, ui ) {
			ui.item.option.selected = true;
			this._trigger( "select", event, {
			  item: ui.item.option
			});
		  },
 
		  autocompletechange: "_removeIfInvalid"
		});
	  },
 
	  _createShowAllButton: function() {
		var input = this.input,
		  wasOpen = false;
 
		$( "<a>" )
		  .attr( "tabIndex", -1 )
		  .attr( "title", "Show All Items" )
		  .tooltip()
		  .appendTo( this.wrapper )
		  .button({
			icons: {
			  primary: "ui-icon-triangle-1-s"
			},
			text: false
		  })
		  .removeClass( "ui-corner-all" )
		  .addClass( "custom-combobox-toggle ui-corner-right" )
		  .on( "mousedown", function() {
			wasOpen = input.autocomplete( "widget" ).is( ":visible" );
		  })
		  .on( "click", function() {
			input.trigger( "focus" );
 
			// Close if already visible
			if ( wasOpen ) {
			  return;
			}
 
			// Pass empty string as value to search for, displaying all results
			input.autocomplete( "search", "" );
		  });
	  },
 
	  _source: function( request, response ) {
		var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
		response( this.element.children( "option" ).map(function() {
		  var text = $( this ).text();
		  if ( this.value && ( !request.term || matcher.test(text) ) )
			return {
			  label: text,
			  value: text,
			  option: this
			};
		}) );
	  },
 
	  _removeIfInvalid: function( event, ui ) {
 
		// Selected an item, nothing to do
		if ( ui.item ) {
		  return;
		}
 
		// Search for a match (case-insensitive)
		var value = this.input.val(),
		  valueLowerCase = value.toLowerCase(),
		  valid = false;
		this.element.children( "option" ).each(function() {
		  if ( $( this ).text().toLowerCase() === valueLowerCase ) {
			this.selected = valid = true;
			return false;
		  }
		});
 
		// Found a match, nothing to do
		if ( valid ) {
		  return;
		}
 
		// Remove invalid value
		this.input
		  .val( "" )
		  .attr( "title", value + " didn't match any item" )
		  .tooltip( "open" );
		this.element.val( "" );
		this._delay(function() {
		  this.input.tooltip( "close" ).attr( "title", "" );
		}, 2500 );
		this.input.autocomplete( "instance" ).term = "";
	  },
 
	  _destroy: function() {
		this.wrapper.remove();
		this.element.show();
	  }

	});
 
	$( ".select-combobox" ).combobox();
	$( ".toggle" ).on( "click", function() {
	  $( ".select-combobox" ).toggle();
	});
}

// toast plugin 필요
// https://kamranahmed.info/toast
function toast(title,msg, msg_gubun) {
	$.toast({
		heading: title,
		text: msg,
		position: 'mid-center',
		stack: 5,
		loader : false,
		hideAfter: 2000, 
		icon: msg_gubun
	})

}


function toast_refresh(title,msg, msg_gubun) {
	
	toast(title,msg, msg_gubun);

	var ReFresh = function () {
		document.location.reload()
	}

	setTimeout(ReFresh,2200);

}



///////////// 멀티 파일 업로드 함수
function multi_upload(id) {
	
	var obj = $("#"+id);
	
	obj.on('dragenter', function (e) {          
		e.stopPropagation();          
		e.preventDefault();          
		$(this).css('border', '2px solid #5272A0');     
	});
     


	obj.on('dragleave', function (e) {
		e.stopPropagation();          
		e.preventDefault();          
		$(this).css('border', '2px dotted #8296C2');     
	});
    obj.on('dragover', function (e) {          
		e.stopPropagation();          
		e.preventDefault();     
	});
    obj.on('drop', function (e) {          
		e.preventDefault();          
		$(this).css('border', '2px dotted #8296C2');
        
		var files = e.originalEvent.dataTransfer.files;          
		if(files.length < 1) return;
		
		_FileMultiUpload(files, obj);     
	});
}
/*

	// 파일 멀티 업로드
	function _FileMultiUpload(files, obj) {     
	         
		var data = new FormData();         
		for (var i = 0; i < files.length; i++) {            
			data.append('file', files[i]);         
		}
        		
		var url = "table.html";         
		$.ajax({            
			url: url,            
			method: 'post',            
			data: data,            
			dataType: 'json',            
			processData: false,            
			contentType: false,            
			success: function(res) {                
				F_FileMultiUpload_Callback(res.files);            
			}         
		});     
		
	}
	// 파일 멀티 업로드 Callback
	function F_FileMultiUpload_Callback(files) {     
		for(var i=0; i < files.length; i++)  {
			console.log(files[i].file_nm + " - " + files[i].file_size);
		}
	}
*/