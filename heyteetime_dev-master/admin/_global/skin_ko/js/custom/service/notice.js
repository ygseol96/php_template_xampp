$(function() {
	let editors = {};
	$('[id^="editor-"]').each(function() {
		const editorId = $(this).attr('id');
		ClassicEditor
			.create(document.querySelector('#' + editorId))
			.then(newEditor => {
				editors[editorId] = newEditor;
			})
			.catch(error => {
				console.error(error);
			});
	});

	var sel_files = [];
	$(document)
		// 등록취소시 리스트이동
		.on('click', '#add_notice-form #btn_duplication', function(e) {
			//e.stopPropagation();
			alert("중복체크");
		})
		// 등록취소시 리스트이동
		.on('click', '#add_notice-form .btn-danger', function(e) {
			//e.stopPropagation();
			window.location.href = "./service_notice_mng.php";
		}) // 공지 등록버튼 누를경우

		.on('click', '#add_notice-form .btn-primary', function(e) {
			//event.preventDefault();

			// 각 에디터 인스턴스에서 내용을 가져옵니다.
			var editorContents = {};
			for (const [key, editor] of Object.entries(editors)) {
				editorContents[key] = editor.getData();
			}

			// 필수 입력값 체크
			var inputFlag = true;
			$('#add_notice-form .required').each(function(e) {
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

			var formData = new FormData($('#add_notice-form')[0]);

			var checkboxes = document.querySelectorAll('input[name="lang_1"]:checked'); // 선택된 체크박스 가져오기
			var checkedValues = [];  // 체크된 값 저장할 문자열
			checkboxes.forEach(function(checkbox) {

				checkedValues.push(checkbox.value);

				var index = checkbox.getAttribute('data-index');
				formData.append('subject-' + index, document.querySelector('input[name="subject-' + index + '"]').value);
				formData.append('content-' + index, editorContents['editor-' + index]); // 에디터 내용을 추가합니다.
				var fileInputs = document.querySelectorAll('input[name="uploaded_files-' + index + '[]"]');
				fileInputs.forEach(function(fileInput) {
					if (fileInput.files.length > 0) {
						for (var i = 0; i < fileInput.files.length; i++) {
							formData.append('uploaded_files-' + index + '[]', fileInput.files[i]);
						}
					}
				});
			});

			formData.append('langs', checkedValues.join(','));
			formData.append('mode', 'NoticeInsert');

			for (const [key, value] of formData.entries()) {
				console.log(`${key}: ${value}`);
			}

			$.ajax({        // ajax
				url		    : '/service/ajax_service.php',
				type		: 'POST',
				enctype		: 'multipart/form-data',
				processData	: false,
				contentType	: false,
				data		: formData,
				async		: false,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
				},
				success		: function(res) {
					if( res ) {
						window.location.href = "./service_notice_mng.php";
					}
				}, error : function(e) {
					console.error(e);
				}
			});
		})


			// 등록취소시 리스트이동
			.on('click', '#modify_notice-form .btn-danger', function(e) {
				e.preventDefault();  // 기본 동작 방지
				window.location.href = "./service_notice_mng.php";
			}) // 공지 등록버튼 누를경우

			.on('click', '#modify_notice-form .btn-primary', function(e) {
				//event.preventDefault();

				// 각 에디터 인스턴스에서 내용을 가져옵니다.
				var editorContents = {};
				for (const [key, editor] of Object.entries(editors)) {
					editorContents[key] = editor.getData();
				}

				// 필수 입력값 체크
				var inputFlag = true;
				$('#modify_notice-form .required').each(function(e) {
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

				var formData = new FormData($('#modify_notice-form')[0]);
				formData.append('idx', $('#main_idx').val());

				var checkboxes = document.querySelectorAll('input[name="lang_1"]:checked'); // 선택된 체크박스 가져오기
				var checkedValues = [];  // 체크된 값 저장할 문자열
				checkboxes.forEach(function(checkbox) {

					checkedValues.push(checkbox.value);

					var index = checkbox.getAttribute('data-index');
					formData.append('subject-' + index, document.querySelector('input[name="subject-' + index + '"]').value);
					formData.append('content-' + index, editorContents['editor-' + index]); // 에디터 내용을 추가합니다.
					var fileInputs = document.querySelectorAll('input[name="uploaded_files-' + index + '[]"]');
					fileInputs.forEach(function(fileInput) {
						if (fileInput.files.length > 0) {
							for (var i = 0; i < fileInput.files.length; i++) {
								formData.append('uploaded_files-' + index + '[]', fileInput.files[i]);
							}
						}
					});
				});

				formData.append('langs', checkedValues.join(','));
				formData.append('mode', 'NoticeModify');

				for (const [key, value] of formData.entries()) {
					console.log(`${key}: ${value}`);
				}

				$.ajax({        // ajax
					url		    : '/service/ajax_service.php',
					type		: 'POST',
					enctype		: 'multipart/form-data',
					processData	: false,
					contentType	: false,
					data		: formData,
					async		: false,
					beforeSend: function(xhr) {
						xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
					},
					success		: function(res) {
						if( res ) {
							setTimeout(function() {
								window.location.href = "./service_notice_mng.php";
							}, 100); // 100ms 지연 시간 추가
						}
					}, error : function(e) {
						console.error(e);
					}
				});
			});

	// 탭 활성화 비활성화
	$(document).on('change', 'input[name="lang_1"]', function() {
		var index = $(this).data('index');
		var tabButton = $('#lang-' + index + '-tab button');
		var tabContent = $('#lang-tab-' + index);

		if ($(this).is(':checked')) {
			tabButton.prop('disabled', false);
			tabButton.tab('show');
		} else {
			tabButton.prop('disabled', true);
			tabButton.removeClass('active');
			tabContent.removeClass('active show');
		}
	});

	// 초기 상태로 첫 번째 탭 활성화
	const firstTab = $('.nav-item:first-child button');
	const firstTabContent = $('.tab-pane:first-child');

	firstTab.prop('disabled', false);
	firstTab.addClass('active');
	firstTabContent.addClass('active show');
});