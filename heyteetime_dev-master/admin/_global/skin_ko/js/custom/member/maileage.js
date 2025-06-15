$(function() {
    var sel_files = [];
    $(document)
        .on('click', '#add_point-form #btn_duplication', function(e) {
            alert("중복체크");
        })
        .on('click', '#point_top .btn-danger, #point_bottom .btn-danger', function(e) {
            window.location.href = "./member_mileage.php";
        })
        .on('click', '#add_point-form .btn-primary', function(e) {
            var inputFlag = true;
            $('#add_point-form .required').each(function(e) {
                if ($(this).val() == '') {
                    alert($(this).attr('placeholder'));
                    $(this).focus();
                    inputFlag = false;
                    return false;
                }
            });

            if(inputFlag == false) {
                return false;
            }

            var formData = new FormData($('#add_point-form')[0]);

            for (const [key, value] of formData.entries()) {
                console.log(`${key}: ${value}`);
            }

            formData.append('type', 'mileage_insert');

            $.ajax({
                url: '/member/ajax_member.php',
                type: 'POST',
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                data: formData,
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function(res) {
                    if(res) {
                        window.location.href = "./member_mileage.php";
                    }
                },
                error: function(e) {
                    console.error(e);
                }
            });
        });
});



//지급사유추가
function insertKind(){

	var formData = new FormData();
    
    // 폼 데이터 수집
    document.querySelectorAll('#language-inputs input[type="text"]').forEach(function(input) {
        formData.append(input.id, input.value);
    });

    formData.append('type', 'mileage_insertKind');

    console.log(formData);

	$.ajax({        // ajax
		url		    : '/member/ajax_member.php',
		type		: 'POST',
		enctype		: 'multipart/form-data',
		processData	: false,
		contentType	: false,
		data		: formData,
		async		: false,
		beforeSend: function(xhr) {
			xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
		},
		success	: function(res) {
            alert('저장되었습니다.');
            window.location.href = "./member_mileage_regist.php";
            }, error : function(e) {
            console.error(e);
		}
	});
}

//수령자추가
function point_member_insert(){
    var count = parseInt($("#member_count").val());
    var list = $("#member_list").val();
    var member = $("#point_member").val();
    var memberId = $("#point_member_id").val();
    var memberAccount = $("#point_member").attr('data-account');

    if (list.split(',').includes(memberId)) {
        alert("해당 멤버가 이미 추가되어 있습니다.");
        return;
    }

    var div_member = "<div id='member_" + memberId + "' class='flex items-center gap-2 py-1.5 px-3 border border-slate-300 bg-white rounded-full'>";
    div_member += "<div>" + member +  " (" + memberAccount + ")</div>";
    div_member += "<button class='btn p-1 btn-outline-danger rounded-full' onclick='removeMember(\"" + memberId + "\", \"" + member + "\")'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' data-lucide='x' class='lucide lucide-x w-4 h-4'><path d='M18 6 6 18'></path><path d='m6 6 12 12'></path></svg></button></div>";

    if (member) {
        if (count > 0) {
            $("#insert_member").append(div_member);
            list = list + "," + memberId;
            count += 1;
        } else {
            $("#insert_member").html(div_member);
            count = 1;
            list = memberId;
        }

        var firstMember = $("#insert_member div:first-child div:first-child").text();
        var div_member_name = "<div>" + firstMember + (count > 1 ? " 외 " + (count - 1) + "명" : "") + "</div>";
        div_member_name += "<button class='btn btn-sm btn-danger-soft' onclick='removeAllMembers()'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' data-lucide='x' class='lucide lucide-x w-4 h-4'><path d='M18 6 6 18'></path><path d='m6 6 12 12'></path></svg> 전체삭제</button>";

        $("#member_names").val(firstMember);
        $("#insert_name").html(div_member_name);

        $("#point_member").val("");
        $("#point_member_id").val("");
        $("#member_count").val(count);
        $("#member_list").val(list);

        lucide.createIcons();
    }
}

// 수령자 삭제
function removeMember(memberId, memberName) {
    $("#member_" + memberId).remove();

    var count = parseInt($("#member_count").val()) - 1;
    var list = $("#member_list").val().split(',').filter(item => item !== memberId).join(',');

    $("#member_count").val(count);
    $("#member_list").val(list);

    if (count == 0) {
        $("#insert_name").html("");
        $("#member_names").val("");
    } else {
        var firstMember = $("#insert_member div:first-child div:first-child").text();
        var div_member_name = "<div>" + firstMember + (count > 1 ? " 외 " + (count - 1) + "명" : "") + "</div>";
        div_member_name += "<button class='btn btn-sm btn-danger-soft' onclick='removeAllMembers()'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' data-lucide='x' class='lucide lucide-x w-4 h-4'><path d='M18 6 6 18'></path><path d='m6 6 12 12'></path></svg> 전체삭제</button>";
        $("#insert_name").html(div_member_name);
    }
}


function removeAllMembers() {
    // 모든 멤버를 제거합니다.
    $("#insert_member").html("");
    $("#insert_name").html("");
    $("#member_count").val(0);
    $("#member_list").val("");
    $("#member_names").val("");
}

//지급사유 이벤트일때 노출
$('#show_event').hide();
function show_event() {
	var selectElement = document.getElementById("point_kind");
	var selectedOption = selectElement.options[selectElement.selectedIndex];
	var dataName = selectedOption.getAttribute('data-name');
	
	if(dataName === "이벤트") $('#show_event').show();
    else  $('#show_event').hide();
}


//지급구분
$('#show_payment_member').show();
$('#show_payment_total').hide();
function show_payment(vals){

    if(vals == 0){
        $('#show_payment_member').show();
        $('#show_payment_total').hide();
    }else{
        $('#show_payment_member').hide();
        $('#show_payment_total').show();
    }
}

// 유저 검색
function searchMembers(query) {
    if (query.length < 2) {
        document.getElementById('suggestions').classList.add('hidden');
        return;
    }

    $.ajax({
        url: '/member/ajax_member.php',
        method: 'GET',
        data: { type: 'searchMembers', query: query },
        success: function(data) {
            var suggestions = document.getElementById('suggestions');
            suggestions.innerHTML = '';

            if (data.length > 0) {
                data.forEach(function(member) {
                    var div = document.createElement('div');
                    div.classList.add('block', 'w-full', 'px-2', 'py-0.5', 'hover:bg-slate-100', 'text-left', 'cursor-pointer');
                    div.textContent = `${member.name} (${member.account})`;
                    div.addEventListener('click', function() {
                        document.getElementById('point_member').value = member.name;
                        document.getElementById('point_member').setAttribute('data-account', member.account);
                        document.getElementById('point_member_id').value = member.idx;
                        suggestions.classList.add('hidden');
                    });
                    suggestions.appendChild(div);  // 이 부분 추가
                });
                suggestions.classList.remove('hidden');
            } else {
                suggestions.classList.add('hidden');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching member suggestions:', error);
        }
    });
}
