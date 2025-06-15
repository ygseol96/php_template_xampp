<?php include_once('lib/common.lib.php'); ?>
<!DOCTYPE html>
<html lang="ko">

<head>
<meta charset="utf-8">
	<title>tbgm_admin</title>
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<link href="https://design01.codeidea.io/link_style.css" rel="stylesheet">
	<link rel="stylesheet" href="./dist/css/app.css" />
	<link rel="stylesheet" href="./dist/css/swiper-bundle.min.css" />
	<link rel="stylesheet" href="./dist/css/custom.css" />
	<style>
		.ex_table th{
			border-bottom-width:1px;	
			border-right-width:1px;
		}
		.ex_table th:last-child{
			border-right-width:0px;
		}
	</style>
</head>
</body>

<div class="publishing-help">
	<span class="label not">작업중</span>
	<span class="label popup">팝업</span>
	<span class="label change">수정</span>
	<span class="label add">최근 추가</span>
	<a href="./css/iconfont/intaefont/" target="_blank" class="icon">아이콘 모음</a>
</div>

<?php
function txtRecord($dir)
{
	if (is_dir($dir)) {
		$handle  = opendir($dir);
		$files = array();
		while (false !== ($filename = readdir($handle))) {
			if ($filename == "." || $filename == "..") continue;
			if (is_file($dir . "/" . $filename)) {
				$files[] = $filename;
			}
		}
		closedir($handle);
		rsort($files);
		if (count($files) > 0) {
			echo '<div class="_record rsort">';
			echo '<ul>';
			foreach ($files as $f) {
				$name = '수정 ' . preg_replace("/[^0-9]*/s", "", $f);
				echo '<li><a href="' . $dir . $f . '" target="_black">' . $name . '</a></li>';
			}
			echo '</ul>';
			echo '</div>';
		}
	}
}
echo txtRecord('./@record/');
?>

<div id="publishingContainer">

	<ul class="page-link">
		<li class="" data-label="로그인">
            <ul>
                <li><a href="./login.php" target="_blank">로그인(1차)</a></li>
            </ul>
        </li>
		<li class="mt50" data-label="대시보드">
            <ul>
                <li><a href="./dashboard.php" target="_blank">대시보드(2차)</a></li>
            </ul>
        </li>
		<li class="mt50" data-label="회원관리"  class="mt50">
            <ul>
                <li><a href="./member_mng.php" target="_blank">회원목록(1차)</a></li>
                <li><a href="./member_regist.php" target="_blank">회원등록(1차)</a></li>
            </ul>
        </li>
		<li data-label="견적관리"  class="mt50">
			<ul>
				<li>
					<a href="./estimate_estimate_mng.php" target="_blank">견적 목록(1차)</a>
					<ul>
						<li><a href="./estimate_estimate_regist.php" target="_blank">견적 등록(1차)</a></li>
						<li><a href="./estimate_estimate_detail.php" target="_blank">견적 상세(1차)</a></li>
						<li><button class="pop-modal" onclick="modalOpen01('subscriber_sel-modal')">가입자선택 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('region-modal')">지역선택 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('fixes-modal')">수정사항 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('golf_sel-modal')">골프장선택 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('schedule-modal')">일정 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('airport_select-modal')">공항선택 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('golf_select-modal')">골프장선택 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('hotel_select-modal')">숙소선택 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('reservation_request-modal')">예약요청 모달</button></li>
						<li><button class="pop-modal" onclick="modalOpen01('reservation_info-modal')">예약안내 모달</button></li>
						<li><a href="./reservation_info.php" target="_blank">견적 상세 (일정이 1일만 존재할때)-별도페이지(1차)</a></li>
						<li><a href="./reservation_info2.php" target="_blank">견적 상세 (일정이 2일 이상일때)-별도페이지(1차)</a></li>
						<li><button class="pop-modal" onclick="modalOpen01('share-modal')">공유하기 모달</button></li>
					</ul>
				</li>
			</ul>
		</li>
		<li data-label="견적관리 (골프장)" class="mt50">
			<ul>
				<li>
					<a href="./golf_estimate_mng.php" target="_blank">견적 목록(1차)(골프장)</a>
					<ul>
						<li><a href="./golf_estimate_detail.php" target="_blank">견적 상세(1차)(골프장)</a></li>
					</ul>
				</li>
				<li>
					<a href="./golf_reservation_mng.php" target="_blank">예약 목록(2차)(골프장)</a>
					<ul>
						<li><a href="./golf_reservation_detail.php" target="_blank">예약 상세(2차)(골프장)</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li data-label="행사관리" class="mt50">
			<ul>
				<li>
					<a href="./event_event_mng.php" target="_blank">행사 목록(2차)</a>
					<ul>
						<li><a href="./event_event_regist.php" target="_blank">행사 등록(2차)</a></li>
						<li><a href="./event_event_review.php" target="_blank">행사 후기(2차)</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li data-label="서비스관리" class="mt50">
            <ul>
                <li>
					<a href="./service_notice_mng.php" target="_blank">공지사항(1차)</a>
					<ul>
						<li>
							<a href="./service_notice_regist.php" target="_blank">공지사항 등록(1차)</a>
						</li>
					</ul>
				</li>
                <li>
					<a href="./service_estimate_mng.php" target="_blank">1:1견적(1차)</a>
					<ul>
						<li>
							<a href="./service_estimate_detail.php" target="_blank">1:1견적 상세(1차)</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="./service_faq_mng.php" target="_blank">자주묻는질문(1차)</a>
					<ul>
						<li>
							<a href="./service_faq_regist.php" target="_blank">자주묻는질문 등록(1차)</a>
						</li>
						<li>
							<button class="pop-modal" onclick="modalOpen01('faq_add-modal')">구분추가 모달</button>
						</li>
					</ul>
				</li>
				<li>
					<a href="./service_account_mng.php" target="_blank">계정관리(1차)</a>
					<ul>
						<li>
							<a href="./service_account_regist.php" target="_blank">계정 등록(1차)</a>
						</li>
						<li>
							<a href="./service_account_department_mng.php" target="_blank">부서별 권한 관리(1차)</a>
						</li>
						<li>
							<button class="pop-modal" onclick="modalOpen01('department_add-modal')">부서추가 모달(1차)</button>
						</li>
					</ul>
				</li>
            </ul>
        </li>
		
		<!-- <li class="" data-label="문의관리">
            <ul>
                <li><a href="./inquiry_inquiry_mng.php" target="_blank" class="add">문의 목록</a></li>
                <li><a href="./inquiry_inquiry_detail_01.php" target="_blank" class="add">문의 상세</a></li>
            </ul>
        </li> -->
	</ul>
</div>

<!-- 모달 -->

<!-- 구분추가 모달 -->
<div id="faq_add-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="font-medium text-base mr-auto">자주묻는질문 구분</h2> 
				<button type="button" class="flex items-center gap-1" onclick="closeModal('faq_add-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
				<!-- 내용 -->
				<div>
					<input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
				</div>
				<div class="flex gap-2 justify-center mt-5">
					<button type="button" class="px-6 btn btn-primary" onclick="closeModal('faq_add-modal')">구분추가</button>
				</div>
			</div>
		</div>
	</div>
</div>

 <!-- 부서 추가 모달 -->
 <div id="department_add-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="font-medium text-base mr-auto">부서추가</h2> 
				<button type="button" class="flex items-center gap-1" onclick="closeModal('department_add-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
				<!-- 내용 -->
				<div class="flex items-center">
					<div class="w-24">부서명</div>
					<input type="text" class="form-control" placeholder="구분명을 입력해주세요.">
				</div>
				<div class="flex gap-2 justify-center mt-5">
					<button type="button" class="px-6 btn btn-danger" onclick="closeModal('department_add-modal')">취소</button>
					<button type="button" class="px-6 btn btn-primary" onclick="closeModal('department_add-modal')">저장</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 가입자 선택 모달 -->
<div id="subscriber_sel-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="font-medium text-base mr-auto">가입자 선택</h2> 
				<button type="button" class="flex items-center gap-1" onclick="closeModal('subscriber_sel-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
				<!-- 내용 -->
				<div class="overflow-y-scroll relative h-[460px]">
					<div class="flex items-center flex-wrap gap-2 sticky top-0 bg-white">
						<div>
							<select name="" id="" class="form-select">
								<option value="">구분</option>
								<option value="">...</option>
							</select>
						</div>
						<div class="flex-1">
							<input type="text" class="form-control" placeholder="가입자명, 담당자명">
						</div>
						<button type="button" class="btn btn-primary-soft">검색</button>
					</div>
					<ul class="flex flex-col gap-2 mt-2">
						<li>
							<input type="radio" id="estlist01" value="" class="hidden peer" name="eslist">
							<label for="estlist01" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
									<div class="w-full text-base">담당자명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="radio" id="estlist02" value="" class="hidden peer" name="eslist">
							<label for="estlist02" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
									<div class="w-full text-base">담당자명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="radio" id="estlist03" value="" class="hidden peer" name="eslist">
							<label for="estlist03" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
									<div class="w-full text-base">담당자명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="radio" id="estlist04" value="" class="hidden peer" name="eslist">
							<label for="estlist04" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
									<div class="w-full text-base">담당자명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="radio" id="estlist05" value="" class="hidden peer" name="eslist">
							<label for="estlist05" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
									<div class="w-full text-base">담당자명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="radio" id="estlist06" value="" class="hidden peer" name="eslist">
							<label for="estlist06" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
									<div class="w-full text-base">담당자명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="radio" id="estlist07" value="" class="hidden peer" name="eslist">
							<label for="estlist07" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
									<div class="w-full text-base">담당자명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="radio" id="estlist08" value="" class="hidden peer" name="eslist">
							<label for="estlist08" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">000 기업 - 000 지점</div>
									<div class="w-full text-base">담당자명</div>
								</div>
							</label>
						</li>
					</ul>
				</div>
				
				<div class="flex gap-2 justify-center mt-5">
					<button type="button" class="px-6 btn btn-primary" onclick="closeModal('subscriber_sel-modal')">적용하기</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 지역선택 모달 -->
<div id="region-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header justify-between">
				<h4 class="text-base font-bold">지역 선택</h4>
				<button type="button" onclick="closeModal('region-modal')"><i data-lucide="x" class="w-6 h-6"></i></button>
			</div>
			<div class="modal-body !px-0 !pb-0">
				<div class="flex-wrap flex items-center px-4 border-b border-slate-200 font-semibold text-slate-500">
					<!-- 선택시 border-b-4 border-primary 클래스 추가 -->
					<button type="button" class="py-3 px-4 border-b-4 border-primary text-black">미주</button>
					<button type="button" class="py-3 px-4">유럽</button>
					<button type="button" class="py-3 px-4">아시아</button>
					<button type="button" class="py-3 px-4">남태평양</button>
					<button type="button" class="py-3 px-4">아프리카</button>
					<button type="button" class="py-3 px-4">중동/기타</button>
				</div>
				<div class="flex items-start pt-4">
					<div class="w-24 md:w-32 pl-2 md:pl-4 pr-2 overflow-y-auto text-slate-500 text-left" style="max-height:calc(70vh - 220px)">
						<!-- 선택시 bg-primary text-white 클래스 추가 -->
						<button type="button" class="w-full h-14 mb-1 px-2 rounded text-left bg-primary text-white">일본</button>
						<button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">대한민국</button>
						<button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">태국</button>
						<button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">필리핀</button>
						<button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">베트남</button>
						<button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">미얀마</button>
						<button type="button" class="w-full h-14 mb-1 px-2 rounded text-left">인도네시아</button>
					</div>
					<div class="flex-1 grid grid-cols-2 md:grid-cols-4 gap-3 px-4 overflow-y-auto" style="max-height:calc(70vh - 220px)">
						<!-- 선택시 btn-outline-primary 클래스 추가 -->
						<button type="button" class="h-14 btn btn-outline-primary">미야자키</button>
						<button type="button" class="h-14 btn btn-secondary-soft">오키나와</button>
						<button type="button" class="h-14 btn btn-secondary-soft">나가사키</button>
						<button type="button" class="h-14 btn btn-secondary-soft">도쿄/하코네</button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="relative flex justify-end w-full gap-3">
					<button type="button" class="btn btn-primary">적용하기</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 수정사항 모달  -->
<div id="fixes-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header justify-between">
				<h4 class="text-base font-bold">수정사항</h4>
				<button type="button" class="flex items-center gap-1" onclick="closeModal('fixes-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
				<div class="h-[380px] overflow-y-hidden">
					<ul class="flex flex-col gap-2">
						<li class="p-2 rounded-md bg-slate-100 hover:bg-blue-100">2024.05.01 11:22:33</li>
						<li class="p-2 rounded-md bg-slate-100 hover:bg-blue-100">인원 : 20 > 25</li>
						<li class="p-2 rounded-md bg-slate-100 hover:bg-blue-100">희망지역 : 서울/경기 > 서울/경기, 충청도</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 골프장 선택 모달 -->
<div id="golf_sel-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="font-medium text-base mr-auto">골프장 선택</h2> 
				<button type="button" class="flex items-center gap-1" onclick="closeModal('golf_sel-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
				<!-- 내용 -->
				<div class="overflow-y-scroll relative h-[460px]">
					<div class="flex items-center flex-wrap gap-2 sticky top-0 bg-white">
						<div class="flex-1">
							<select name="" id="" class="form-select">
								<option value="">국가</option>
								<option value="">...</option>
							</select>
						</div>
						<div class="flex-1">
							<select name="" id="" class="form-select">
								<option value="">지역</option>
								<option value="">...</option>
							</select>
						</div>
						<button type="button" class="btn btn-primary-soft">검색</button>
					</div>
					<ul class="flex flex-col gap-2 mt-2">
						<li>
							<input type="checkbox" id="estlist_check01" value="" class="hidden peer" name="eslist_check">
							<label for="estlist_check01" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">국가 - 지역</div>
									<div class="w-full text-base">골프장명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="checkbox" id="estlist_check02" value="" class="hidden peer" name="eslist_check">
							<label for="estlist_check02" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">국가 - 지역</div>
									<div class="w-full text-base">골프장명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="checkbox" id="estlist_check03" value="" class="hidden peer" name="eslist_check">
							<label for="estlist_check03" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">국가 - 지역</div>
									<div class="w-full text-base">골프장명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="checkbox" id="estlist_check04" value="" class="hidden peer" name="eslist_check">
							<label for="estlist_check04" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">국가 - 지역</div>
									<div class="w-full text-base">골프장명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="checkbox" id="estlist_check05" value="" class="hidden peer" name="eslist_check">
							<label for="estlist_check05" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">국가 - 지역</div>
									<div class="w-full text-base">골프장명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="checkbox" id="estlist_check06" value="" class="hidden peer" name="eslist_check">
							<label for="estlist_check06" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">국가 - 지역</div>
									<div class="w-full text-base">골프장명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="checkbox" id="estlist_check07" value="" class="hidden peer" name="eslist_check">
							<label for="estlist_check07" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">국가 - 지역</div>
									<div class="w-full text-base">골프장명</div>
								</div>
							</label>
						</li>
						<li>
							<input type="checkbox" id="estlist_check07" value="" class="hidden peer" name="eslist_check">
							<label for="estlist_check07" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 hover:text-gray-600 peer-checked:text-gray-600 hover:bg-gray-50">                           
								<div class="block">
									<div class="w-full text-sm font-semibold">국가 - 지역</div>
									<div class="w-full text-base">골프장명</div>
								</div>
							</label>
						</li>
					</ul>
				</div>
				
				<div class="flex gap-2 justify-center mt-5">
					<button type="button" class="px-6 btn btn-primary" onclick="closeModal('golf_sel-modal')">적용하기</button>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- 일정 모달 -->
<div id="schedule-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header justify-between">
				<h4 class="text-base font-bold">일정</h4>
				<button type="button" class="flex items-center gap-1" onclick="closeModal('schedule-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
				<div class="flex flex-wrap items-center">
					<ul class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
						<li id="bylanguage-10-tab" class="nav-item" role="presentation"> 
							<button class="nav-link py-2 bg-white active" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-10" type="button" role="tab" aria-controls="bylanguage-tab-10" aria-selected="true">항공</button> 
						</li>
						<li id="bylanguage-11-tab" class="nav-item" role="presentation"> 
							<button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-11" type="button" role="tab" aria-controls="bylanguage-tab-11" aria-selected="false">골프장</button> 
						</li>
						<li id="bylanguage-12-tab" class="nav-item" role="presentation"> 
							<button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-12" type="button" role="tab" aria-controls="bylanguage-tab-12" aria-selected="false">숙박</button> 
						</li>
						<li id="bylanguage-13-tab" class="nav-item" role="presentation"> 
							<button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-13" type="button" role="tab" aria-controls="bylanguage-tab-13" aria-selected="false">일정</button> 
						</li>
						<li id="bylanguage-14-tab" class="nav-item" role="presentation"> 
							<button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-14" type="button" role="tab" aria-controls="bylanguage-tab-14" aria-selected="false">식사</button> 
						</li>
						<li id="bylanguage-15-tab" class="nav-item" role="presentation"> 
							<button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-15" type="button" role="tab" aria-controls="bylanguage-tab-15" aria-selected="false">차량</button> 
						</li>
						<li id="bylanguage-16-tab" class="nav-item" role="presentation"> 
							<button class="nav-link py-2 bg-white" data-tw-toggle="pill" data-tw-target="#bylanguage-tab-16" type="button" role="tab" aria-controls="bylanguage-tab-16" aria-selected="false">수수료</button> 
						</li>
					</ul>

					<div class="tab-content w-full border-primary mt-4">
						
						<!-- 모달 항공 -->
						<div id="bylanguage-tab-10" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="bylanguage-10-tab">
							<div class="flex flex-wrap flex-col gap-2 md:gap-4">
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">항공사 <span class="text-danger">*</span></p>
										<input type="text" class="form-control flex-1" value="대한항공">
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">편명 <span class="text-danger">*</span></p>
										<input type="text" class="form-control flex-1" value="KE787">
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">출발 <span class="text-danger">*</span></p>
										<div class="flex-1 flex items-center">
											<select name="" id="" class="form-select">
												<option value="">08</option>
												<option value="">...</option>
											</select>
											<select name="" id="" class="form-select ml-1">
												<option value="">00</option>
												<option value="">...</option>
											</select>
										</div>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">공항 <span class="text-danger">*</span></p>
										<div class="flex-1 flex items-center">
											<input type="text" class="form-control flex-1" value="인천 국제공항">
											<button class="btn btn-primary ml-1" onclick="modalOpen01('airport_select-modal')">공항선택</button>
										</div>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">도착 <span class="text-danger">*</span></p>
										<div class="flex-1 flex items-center">
											<select name="" id="" class="form-select">
												<option value="">08</option>
												<option value="">...</option>
											</select>
											<select name="" id="" class="form-select ml-1">
												<option value="">00</option>
												<option value="">...</option>
											</select>
										</div>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">공항 <span class="text-danger">*</span></p>
										<div class="flex-1 flex items-center">
											<input type="text" class="form-control flex-1" value="후쿠오카 국제공항">
											<button class="btn btn-primary ml-1" onclick="modalOpen01('airport_select-modal')">공항선택</button>
										</div>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">항공비</p>
										<div class="flex-1 flex flex-col md:flex-row items-center gap-2">
											<input type="text" class="form-control" value="1,000,000"> x
											<input type="text" class="form-control" value="인원수"> =
											<input type="text" class="form-control" value="1,000,000,000">
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- 골프장 -->
						<div id="bylanguage-tab-11" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-11-tab">
							<div class="flex flex-wrap flex-col gap-2 md:gap-4">
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">골프장 <span class="text-danger">*</span></p>
										<div class="flex-1 flex items-center">
											<input type="text" class="form-control flex-1" value=" 오션 팰리스 GC">
											<button class="btn btn-primary ml-1" onclick="modalOpen02('golf_select-modal')">골프장선택</button>
										</div>
									</div>
									<div class="flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">홀 <span class="text-danger">*</span></p>
										<div class="flex items-center">
											<input type="text" class="form-control w-full md:w-16 text-center" value="18">
										</div>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">티오프 <span class="text-danger">*</span></p>
										<textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
									</div>
								</div>
								<!-- 통합금액일 때 -->
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium">금액설정</p>
										<div class="flex-1 flex flex-col gap-2">
											<div class="flex-1 flex items-center">
												<div class="form-check">
													<input id="check_money01_01" class="form-check-input" type="radio" name="check_money01" value="" checked>
													<label class="form-check-label" for="check_money01_01">통합금액</label>
												</div>
												<div class="form-check ml-2">
													<input id="check_money01_02" class="form-check-input" type="radio" name="check_money01" value="">
													<label class="form-check-label" for="check_money01_02">개별금액</label>
												</div>
											</div>
											<div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
												<input type="text" class="form-control lg:w-auto" value="1,000,000">
												x
												<select name="" id="" class="form-select lg:w-auto">
													<option value="">인원</option>
													<option value="">팀</option>
												</select>
												=
												<input type="text" class="form-control lg:w-auto" value="1,000,000,000">
												<div class="flex-1 flex lg:items-center w-full lg:w-auto gap-2">
													<div class="form-check shrink-0">
														<input id="check_money02_01" class="form-check-input" type="checkbox" name="check_money02" value="">
														<label class="form-check-label" for="check_money02_01">그린피</label>
													</div>
													<div class="form-check shrink-0">
														<input id="check_money02_02" class="form-check-input" type="checkbox" value="">
														<label class="form-check-label" for="check_money02_02">카트피</label>
													</div>
													<div class="form-check shrink-0">
														<input id="check_money02_03" class="form-check-input" type="checkbox" value="">
														<label class="form-check-label" for="check_money02_03">캐디피</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- 개별금액일 때 -->
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium">금액설정</p>
										<div class="flex-1 flex flex-col gap-2">
											<div class="flex-1 flex items-center">
												<div class="form-check">
													<input id="check_money01_03" class="form-check-input" type="radio" name="check_money02" value="">
													<label class="form-check-label" for="check_money01_03">통합금액</label>
												</div>
												<div class="form-check ml-2">
													<input id="check_money01_04" class="form-check-input" type="radio" name="check_money02" value="" checked>
													<label class="form-check-label" for="check_money01_04">개별금액</label>
												</div>
											</div>
											<div class="flex-1 flex flex-col gap-2">
												<div class="flex-1 flex items-center gap-2">
													<div class="form-check shrink-0">
														<label class="form-check-label w-16 font-medium" for="check_money03_01">그린피</label>
														<input id="check_money03_01" class="form-check-input" type="checkbox" value="">
													</div>
													<div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
														<input type="text" class="form-control flex-1" value="1,000,000"> x
														<select name="" id="" class="form-select flex-1">
															<option value="">인원</option>
															<option value="">팀</option>
														</select> =
														<input type="text" class="form-control flex-1" value="1,000,000,000">
													</div>
												</div>
												<div class="flex-1 flex items-center gap-2">
													<div class="form-check shrink-0">
														<label class="form-check-label w-16 font-medium" for="check_money03_01">카트피</label>
														<input id="check_money03_01" class="form-check-input" type="checkbox" value="">
													</div>
													<div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
														<input type="text" class="form-control flex-1" value="1,000,000"> x
														<select name="" id="" class="form-select flex-1">
															<option value="">인원</option>
															<option value="">팀</option>
														</select> =
														<input type="text" class="form-control flex-1" value="1,000,000,000">
													</div>
												</div>
												<div class="flex-1 flex items-center gap-2">
													<div class="form-check shrink-0">
														<label class="form-check-label w-16 font-medium" for="check_money03_01">캐디피</label>
														<input id="check_money03_01" class="form-check-input" type="checkbox" value="">
													</div>
													<div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
														<input type="text" class="form-control flex-1" value="1,000,000"> x
														<select name="" id="" class="form-select flex-1">
															<option value="">인원</option>
															<option value="">팀</option>
														</select> =
														<input type="text" class="form-control flex-1" value="1,000,000,000">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">포함</p>
										<textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">불포함</p>
										<textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
									</div>
								</div>
							</div>
						</div>

						<!-- 숙박 -->
						<div id="bylanguage-tab-12" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-12-tab">
							<div class="flex flex-wrap flex-col gap-2 md:gap-4">
								<div class="flex-1 flex flex-wrap gap-3">
									<p class="mt-2 w-16 font-medium">숙박 <span class="text-danger">*</span></p>
									<div class="flex-1 flex items-center">
										<input type="text" class="form-control flex-1" value="미야코 호텔 하카타">
										<button class="btn btn-primary ml-1" onclick="modalOpen02('hotel_select-modal')">숙소선택</button>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">룸타입 <span class="text-danger">*</span></p>
										<input type="text" class="form-control flex-1" value="슈페리얼 트윈 또는 동급">
									</div>
									<div class="flex-1 flex items-center flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium ">투숙자수</p>
										<div class="flex-1 flex items-center gap-2">
											<input type="text" class="form-control w-10" value="2">
											<span>인</span>
											<input type="text" class="form-control w-10" value="1">
											<span>실</span>
										</div>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">포함</p>
										<textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">불포함</p>
										<textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium">숙박비</p>
										<div class="flex-1 flex flex-col gap-2">
											<div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
												<input type="text" class="form-control lg:w-auto" value="1,000,000">
												x
												<input type="text" class="form-control lg:w-32" value="5,000">
												=
												<input type="text" class="form-control lg:w-auto" value="1,000,000,000">
												<div class="flex-1 flex lg:items-center w-full lg:w-auto gap-2">
													<div class="form-check shrink-0">
														<input id="check_money020_01" class="form-check-input" type="checkbox" value="">
														<label class="form-check-label" for="check_money020_01">조식포함</label>
													</div>
													<div class="form-check shrink-0">
														<input id="check_money020_02" class="form-check-input" type="checkbox" value="">
														<label class="form-check-label" for="check_money020_02">중식포함</label>
													</div>
													<div class="form-check shrink-0">
														<input id="check_money020_03" class="form-check-input" type="checkbox" value="">
														<label class="form-check-label" for="check_money020_03">석식포함</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- 일정 -->
						<div id="bylanguage-tab-13" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-13-tab">
							<div class="flex flex-wrap flex-col gap-2 md:gap-4">
								<div class="flex-1 flex flex-wrap gap-3">
									<p class="mt-2 w-16 font-medium">일정 <span class="text-danger">*</span></p>
									<div class="flex-1 flex items-center">
										<input type="text" class="form-control flex-1" value="호텔 체크인 후 휴식">
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">일정설명</p>
										<textarea name="" id="" class="form-control flex-1 h-[80px]">호텔 체크인 후 휴식 호텔에서 미니버스로 000 골프장으로 이동 (2시간)</textarea>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex gap-3">
										<p class="mt-2 w-16 font-medium">이미지</p>
										<div class="flex-1 flex items-center flex-wrap gap-2 p-1 border rounded-md">
											<input type="file" class=" w-48" id="file_upload">
											<button class="btn btn-sm btn-danger-soft"><i data-lucide="x" class="w-4 h-4 mr-1"></i>파일삭제</button>
										</div>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">일정비</p>
										<div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
											<input type="text" class="form-control" value="1,000,000"> x
											<input type="text" class="form-control" value="인원수"> =
											<input type="text" class="form-control" value="1,000,000,000">
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- 식사 -->
						<div id="bylanguage-tab-14" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-14-tab">
							<div class="flex flex-wrap flex-col gap-2 md:gap-4">
									<!-- 통합금액일 때 -->
									<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium">금액설정</p>
										<div class="flex-1 flex flex-col gap-2">
											<div class="flex-1 flex items-center">
												<div class="form-check">
													<input id="check_money10_01" class="form-check-input" type="radio" name="check_money10" value="" checked>
													<label class="form-check-label" for="check_money10_01">통합금액</label>
												</div>
												<div class="form-check ml-2">
													<input id="check_money10_02" class="form-check-input" type="radio" name="check_money10" value="">
													<label class="form-check-label" for="check_money10_02">개별금액</label>
												</div>
											</div>
											<div class="flex-1 flex flex-col lg:flex-row items-center gap-2">
												<div class="flex-1 flex lg:items-center gap-2 w-full lg:w-auto shrink-0">
													<div class="form-check shrink-0">
														<input id="check_money11_01" class="form-check-input" type="checkbox" value="">
														<label class="form-check-label" for="check_money11_01">조식포함</label>
													</div>
													<div class="form-check shrink-0">
														<input id="check_money12_01" class="form-check-input" type="checkbox" value="">
														<label class="form-check-label" for="check_money12_01">중식포함</label>
													</div>
													<div class="form-check shrink-0">
														<input id="check_money13_01" class="form-check-input" type="checkbox" value="">
														<label class="form-check-label" for="check_money13_01">석식포함</label>
													</div>
												</div>
												<input type="text" class="form-control lg:w-auto" value="1,000,000"> x
												<input type="text" class="form-control lg:w-32" value="10,000"> =
												<input type="text" class="form-control lg:w-auto" value="1,000,000,000">
											</div>
										</div>
									</div>
								</div>
								<!-- 개별금액일 때 -->
								<div class="flex-1 flex flex-wrap gap-2 md:gap-4">
									<div class="flex-1 flex gap-3">
										<p class="w-16 font-medium">금액설정</p>
										<div class="flex-1 flex flex-col gap-2">
											<div class="flex-1 flex items-center">
												<div class="form-check">
													<input id="check_money20_01" class="form-check-input" type="radio" name="check_money02" value="">
													<label class="form-check-label" for="check_money20_01">통합금액</label>
												</div>
												<div class="form-check ml-2">
													<input id="check_money20_02" class="form-check-input" type="radio" name="check_money02" value="" checked>
													<label class="form-check-label" for="check_money20_02">개별금액</label>
												</div>
											</div>
											<div class="flex-1 flex flex-col gap-3">
												<div class="flex-1 flex flex-col gap-2">
													<div class="flex-1 flex items-center flex-col lg:flex-row gap-2">
														<div class="form-check w-full lg:w-auto">
															<label class="form-check-label w-16 font-medium" for="check_money22_01">조식 <span class="text-danger">*</span></label>
															<input id="check_money22_01" class="form-check-input" type="checkbox" value="">
														</div>
														<div class="flex-1 w-full flex items-center gap-2 flex-col lg:flex-row">
															<input type="text" class="form-control lg:w-24" value="1,000,000"> x
															<input type="text" class="form-control lg:w-20" value="10,000"> =
															<input type="text" class="form-control lg:w-32" value="1,000,000,000">
														</div>
														<div class="flex-1 w-full flex items-center gap-2">
															<div class="form-check">
																<input id="check_money50_01" class="form-check-input" type="radio" name="check_money20" value="" >
																<label class="form-check-label" for="check_money50_01">룸</label>
															</div>
															<div class="form-check">
																<input id="check_money50_02" class="form-check-input" type="radio" name="check_money20" value="" >
																<label class="form-check-label" for="check_money50_02">홀</label>
															</div>
															<div class="flex-1 flex items-center gap-2 ">
																<div class="form-check">
																	<input id="check_money50_03" class="form-check-input" type="radio" name="check_money20" value="" checked>
																	<label class="form-check-label shrink-0" for="check_money50_03">연회장</label>
																</div>
																<input type="text" class="form-control flex-1 w-24" value="10,000,000">
															</div>
														</div>
													</div>
													<textarea name="" id="" class="form-control h-[80px]"">치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골</textarea>
												</div>
												<div class="flex-1 flex flex-col gap-2">
													<div class="flex-1 flex items-center flex-col lg:flex-row gap-2">
														<div class="form-check w-full lg:w-auto">
															<label class="form-check-label w-16 font-medium">중식 <span class="text-danger">*</span></label>
															<input id="check_money22_01" class="form-check-input" type="checkbox" value="">
														</div>
														<div class="flex-1 w-full flex items-center gap-2 flex-col lg:flex-row">
															<input type="text" class="form-control lg:w-24" value="1,000,000"> x
															<input type="text" class="form-control lg:w-20" value="10,000"> =
															<input type="text" class="form-control lg:w-32" value="1,000,000,000">
														</div>
														<div class="flex-1 w-full flex items-center gap-2">
															<div class="form-check">
																<input id="check_money52_01" class="form-check-input" type="radio" name="check_money21" value="" >
																<label class="form-check-label" for="check_money52_01">룸</label>
															</div>
															<div class="form-check">
																<input id="check_money52_02" class="form-check-input" type="radio" name="check_money21" value="" >
																<label class="form-check-label" for="check_money52_02">홀</label>
															</div>
															<div class="flex-1 flex items-center gap-2 ">
																<div class="form-check">
																	<input id="check_money52_03" class="form-check-input" type="radio" name="check_money21" value="" checked>
																	<label class="form-check-label shrink-0" for="check_money52_03">연회장</label>
																</div>
																<input type="text" class="form-control flex-1 w-24" value="10,000,000">
															</div>
														</div>
													</div>
													<textarea name="" id="" class="form-control h-[80px]"">치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골</textarea>
												</div>
												<div class="flex-1 flex flex-col gap-2">
													<div class="flex-1 flex items-center flex-col lg:flex-row gap-2">
														<div class="form-check w-full lg:w-auto">
															<label class="form-check-label w-16 font-medium">석식 <span class="text-danger">*</span></label>
															<input id="check_money22_01" class="form-check-input" type="checkbox" value="">
														</div>
														<div class="flex-1 w-full flex items-center gap-2 flex-col lg:flex-row">
															<input type="text" class="form-control lg:w-24" value="1,000,000"> x
															<input type="text" class="form-control lg:w-20" value="10,000"> =
															<input type="text" class="form-control lg:w-32" value="1,000,000,000">
														</div>
														<div class="flex-1 w-full flex items-center gap-2">
															<div class="form-check">
																<input id="check_money53_01" class="form-check-input" type="radio" name="check_money22" value="" >
																<label class="form-check-label" for="check_money53_01">룸</label>
															</div>
															<div class="form-check">
																<input id="check_money53_02" class="form-check-input" type="radio" name="check_money22" value="" >
																<label class="form-check-label" for="check_money53_02">홀</label>
															</div>
															<div class="flex-1 flex items-center gap-2 ">
																<div class="form-check">
																	<input id="check_money53_03" class="form-check-input" type="radio" name="check_money22" value="" checked>
																	<label class="form-check-label shrink-0" for="check_money53_03">연회장</label>
																</div>
																<input type="text" class="form-control flex-1 w-24" value="10,000,000">
															</div>
														</div>
													</div>
													<textarea name="" id="" class="form-control h-[80px]"">치즈그린 샐러드, 찹 스테이크, 돌문어 소고기 보양전골</textarea>
												</div>
											</div>
											<div class="flex-1 flex flex-wrap flex-col md:flex-row gap-2 md:gap-4">
												<div class="flex-1 flex flex-wrap gap-3">
													<p class="mt-2 w-16 font-medium">포함</p>
													<input type="text" class="form-control flex-1 h-[80px]" value="빔, 스크린 사용가능">
												</div>
												<div class="flex-1 flex flex-wrap gap-3">
													<p class="mt-2 w-16 font-medium">불포함</p>
													<input type="text" class="form-control flex-1 h-[80px]" value="주류, 음료 이용료">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- 차량 -->
						<div id="bylanguage-tab-15" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-15-tab">
							<div class="flex flex-wrap flex-col gap-2 md:gap-4">
								<div class="flex-1 flex flex-wrap gap-3 flex-col lg:flex-row">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">차량 <span class="text-danger">*</span></p>
										<select name="" id="" class="form-select flex-1">
											<option value="">렌트카</option>
											<option value="">...</option>
										</select>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">차량수</p>
										<input type="text" class="form-control flex-1"value="10">
									</div>
								</div>
								<div class="flex-1 flex flex-wrap gap-3 flex-col lg:flex-row">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">출발지 <span class="text-danger">*</span></p>
										<input type="text" class="form-control flex-1" value="인천 국제공항">
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">출발일시</p>
										<div class="flex-1 flex flex-wrap gap-2">
											<select name="" id="" class="form-select flex-1">
												<option value="">09</option>
												<option value="">...</option>
											</select>
											<select name="" id="" class="form-select flex-1">
												<option value="">09</option>
												<option value="">...</option>
											</select>
										</div>
									</div>
								</div>
								<div class="flex-1 flex flex-wrap gap-3 flex-col lg:flex-row">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">도착지 <span class="text-danger">*</span></p>
										<input type="text" class="form-control flex-1" value="후쿠오카 국제공항">
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="mt-2 w-16 font-medium">출발일시</p>
										<div class="flex-1 flex flex-wrap gap-2">
											<select name="" id="" class="form-select flex-1">
												<option value="">09</option>
												<option value="">...</option>
											</select>
											<select name="" id="" class="form-select flex-1">
												<option value="">09</option>
												<option value="">...</option>
											</select>
										</div>
									</div>
								</div>
								<div class="flex-1 flex flex-col gap-2">
									<div class="flex-1 flex items-center flex-col lg:flex-row gap-2">
										<p class="mt-2 w-16 font-medium">교통비</p>
										<div class="flex-1 w-full flex items-center gap-2 flex-col lg:flex-row">
											<input type="text" class="form-control lg:w-24" value="1,000,000"> x
											<input type="text" class="form-control lg:w-20" value="10,000"> =
											<input type="text" class="form-control lg:w-32" value="1,000,000,000">
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- 수수료 -->
						<div id="bylanguage-tab-16" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="bylanguage-16-tab">
							<div class="flex flex-col gap-3">
								<div class="flex flex-wrap flex-col md:flex-row gap-3">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium">일정</p>
										<div class="flex-1 flex flex-col gap-2">
											<div class="flex-1 flex flex-wrap items-center gap-2">
												<div class="form-check shrink-0">
													<input id="check_money01_01" class="form-check-input" type="radio" name="check_money01" value="" checked>
													<label class="form-check-label" for="check_money01_01">전체일정</label>
												</div>
												<div class="form-check shrink-0">
													<input id="check_money01_02" class="form-check-input" type="radio" name="check_money01" value="">
													<label class="form-check-label" for="check_money01_02">개별일정</label>
												</div>
											</div>
										</div>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium">부가세</p>
										<div class="flex-1 flex items-center">
											<input id="check_01_01" class="form-check-input" type="checkbox" name="check_01" value="">
											<label class="form-check-label" for="check_01_01">전체 총액 10% 추가</label>
										</div>
									</div>
								</div>
								<div class="flex flex-wrap flex-col md:flex-row gap-3">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">전체/인당</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">비용추가</span>
										</div>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">운영비</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">전체/인당 추가</span>
										</div>
									</div>
								</div>
								<div>전체/인당 비용은 견적표기 설정에서 “전체/인당” 구분에 따라 표시</div>
								<div class="flex flex-wrap flex-col md:flex-row gap-3">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">항공비</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">인당 추가</span>
										</div>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">숙박비</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">룸당 추가</span>
										</div>
									</div>
								</div>
								<div class="flex flex-wrap flex-col md:flex-row gap-3">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">그린피</p>
										<div class="flex-1 flex flex-col md:flex-row gap-3 items-start md:items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">팀/인당 추가(통합:그린피/카트피)</span>
										</div>
									</div>
								</div>
								<div class="flex flex-wrap flex-col md:flex-row gap-3">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">그린피</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">팀/인당 추가</span>
										</div>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">카트피</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">팀/인당 추가</span>
										</div>
									</div>
								</div>
								<div>골프장에서 통합금액 / 개별금액 설정에 따라 구분표시</div>
								<div>팀/인당 비용은 골프장 설정에서 팀/인당 설정에 따라 표시</div>
								<div class="flex flex-wrap flex-col md:flex-row gap-3">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">식사</p>
										<div class="flex-1 flex flex-col md:flex-row gap-3 items-start md:items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">팀/인당 추가 (통합 : 조식/중식/석식)</span>
										</div>
									</div>
								</div>
								<div class="flex flex-wrap flex-col md:flex-row gap-3">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">조식</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">인당 추가</span>
										</div>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">중식</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">인당 추가</span>
										</div>
									</div>
								</div>
								<div class="flex flex-wrap flex-col md:flex-row gap-3">
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">석식</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">인당 추가</span>
										</div>
									</div>
									<div class="flex-1 flex flex-wrap gap-3">
										<p class="w-16 font-medium mt-2">연회장</p>
										<div class="flex-1 flex gap-3 items-center">
											<input type="text" class="form-control">
											<span class="shrink-0">인당 추가</span>
										</div>
									</div>
								</div>
								<div>식사에서 통합금액 / 개별금액 설정에 따라 구분 표시 </div>
								<div>팀/인당 비용은 골프장 설정에서 팀/인당 설정에 따라 표시</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="relative flex justify-end w-full gap-3">
					<button type="button" class="btn btn-primary">저장</button>
					<button type="button" class="btn" onclick="closeModal('schedule-modal')">닫기</button>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- 공항선택 모달 -->
<div id="airport_select-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="flex items-center justify-between p-3 border-b border-slate-400">
                    <div class="flex-1">
                        <div class="relative w-2/3 md:w-1/2">
                            <input type="text" class="form-control" id="coupon_channel">
                            <label for="coupon_channel"><i data-lucide="search" class="absolute right-2 top-2.5 w-4 h-4"></i></label>
                            <!-- 연관검색어 표기시 hidden 클래스 삭제 -->
                            <div class="hidden absolute left-0 top-full w-full overflow-y-auto max-h-32 bg-white p-1 border border-slate-300 border-t-0 rounded">
                                <button type="button" class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길일</button>
                                <button type="button" class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길이</button>
                                <button type="button" class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길삼</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">공항추가 추가</button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[1px] bg-slate-400">
                    <div class="overflow-y-auto h-[140px] md:h-[440px] p-3 bg-white">
                        <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                        <button type="button" class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">골프장</button>
                        <button type="button" class="block w-full text-left p-2">미주</button>
                        <button type="button" class="block w-full text-left p-2">유럽</button>
                        <button type="button" class="block w-full text-left p-2">아시아</button>
                        <button type="button" class="block w-full text-left p-2">남태평양</button>
                        <button type="button" class="block w-full text-left p-2">아프리카</button>
                        <button type="button" class="block w-full text-left p-2">중동/기타</button>
                    </div>
                    <div class="overflow-y-auto max-h-[auto] md:max-h-[440px] md:h-[440px] p-3 bg-white">
                        <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                        <button type="button" class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">대한민국</button>
                        <button type="button" class="block w-full text-left p-2">일본</button>
                        <button type="button" class="block w-full text-left p-2">중국</button>
                        <button type="button" class="block w-full text-left p-2">필리핀</button>
                        <button type="button" class="block w-full text-left p-2">베트남</button>
                        <button type="button" class="block w-full text-left p-2">태국</button>
                    </div>
                    <div class="overflow-y-auto max-h-[auto] md:max-h-[440px] md:h-[440px] p-3 bg-white">
                        <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                        <button type="button" class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">인천공항</button>
                        <button type="button" class="block w-full text-left p-2">제주공항</button>
                        <button type="button" class="block w-full text-left p-2">김해공항</button>
                        <button type="button" class="block w-full text-left p-2">부산공항</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 골프장선택 모달 -->
<div id="golf_select-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">골프장 선택</h2> 
                <button type="button" class="flex items-center gap-1" onclick="closeModal('golf_select-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body p-3">
                <div class="flex flex-wrap items-center gap-2">
                    <select class="form-select w-32">
                        <option>대륙선택</option>
                        <option>미주</option>
                        <option>유럽</option>
                        <option>아시아</option>
                        <option>중동</option>
                        <option>남태평양</option>
                        <option>아프리카</option>
                    </select>
                    <select class="form-select w-32">
                        <option>국가선택</option>
                    </select>
                    <select class="form-select w-32">
                        <option>지역선택</option>
                    </select>
                    <select class="form-select w-32">
                        <option>도시선택</option>
                    </select>
                </div>
                <div class="flex flex-wrap items-center gap-2 mt-2">
                    <select class="form-select w-40">
                        <option>골프장선택</option>
                    </select>
                    <input type="text" class="form-control w-72" placeholder="골프장명을 입력하세요">
                    <button type="button" class="btn btn-primary w-24">검색</button>
                </div>
                <div class="overflow-x-auto mt-5">
                    <table class="table table-sm table-hover">
                        <thead class="text-center bg-slate-100">
                            <tr>
                                <th class="whitespace-nowrap">번호</th>
                                <th class="whitespace-nowrap">대륙</th>
                                <th class="whitespace-nowrap">국가</th>
                                <th class="whitespace-nowrap">지역</th>
                                <th class="whitespace-nowrap">도시</th>
                                <th class="whitespace-nowrap">골프장명</th>
                            </tr>
                        </thead>
                        <tbody class="text-center cursor-pointer">
                            <tr>
                                <td>1</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 골프장</td>
                            </tr>
                            <!-- tr 클릭시 bg-primary bg-opacity-10 클래스추가-->
                            <tr class="bg-primary bg-opacity-10">
                                <td>2</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 골프장</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 골프장</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 골프장</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 골프장</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 text-center">
                    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-5 h-5 mr-1"></i> 골프장 추가</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 호텔선택 모달 -->
<div id="hotel_select-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">호텔 선택</h2> 
                <button type="button" class="flex items-center gap-1" onclick="closeModal('hotel_select-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body p-3">
                <div class="flex flex-wrap items-center gap-2">
                    <select class="form-select w-32">
                        <option>대륙선택</option>
                        <option>미주</option>
                        <option>유럽</option>
                        <option>아시아</option>
                        <option>중동</option>
                        <option>남태평양</option>
                        <option>아프리카</option>
                    </select>
                    <select class="form-select w-32">
                        <option>국가선택</option>
                    </select>
                    <select class="form-select w-32">
                        <option>지역선택</option>
                    </select>
                    <select class="form-select w-32">
                        <option>도시선택</option>
                    </select>
                </div>
                <div class="flex flex-wrap items-center gap-2 mt-2">
                    <select class="form-select w-40">
                        <option>호텔선택</option>
                    </select>
                    <input type="text" class="form-control w-72" placeholder="호텔명을 입력하세요">
                    <button type="button" class="btn btn-primary w-24">검색</button>
                </div>
                <div class="overflow-x-auto mt-5">
                    <table class="table table-hover table-sm">
                        <thead class="text-center bg-slate-100">
                            <tr>
                                <th class="whitespace-nowrap">번호</th>
                                <th class="whitespace-nowrap">대륙</th>
                                <th class="whitespace-nowrap">국가</th>
                                <th class="whitespace-nowrap">지역</th>
                                <th class="whitespace-nowrap">도시</th>
                                <th class="whitespace-nowrap">골프장명</th>
                            </tr>
                        </thead>
                        <tbody class="text-center cursor-pointer">
                            <tr>
                                <td>1</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 호텔</td>
                            </tr>
                            <!-- tr 클릭시 bg-primary bg-opacity-10 클래스추가-->
                            <tr class="bg-primary bg-opacity-10">
                                <td>2</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 호텔</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 호텔</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 호텔</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>아시아</td>
                                <td>일본</td>
                                <td>큐슈</td>
                                <td>도쿄</td>
                                <td>도쿄 유명한 호텔</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 text-center">
                    <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-5 h-5 mr-1"></i> 호텔 추가</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 예약요청 모달 -->
<div id="reservation_request-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="font-medium text-base mr-auto">예약요청</h2> 
				<button type="button" class="flex items-center gap-1" onclick="closeModal('reservation_request-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
				<!-- 내용 -->
				<p class="text-center">베이크리크 (춘천) (으)로 예약을 요청하시겠습니까?</p>
				
				<div class="flex gap-2 justify-center mt-5">
					<button type="button" class="px-6 btn" onclick="closeModal('reservation_request-modal')">닫기</button>
					<button type="button" class="px-6 btn btn-primary" onclick="closeModal('reservation_request-modal')">예약요청</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 예약안내 모달 -->
<div id="reservation_info-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="font-medium text-base mr-auto">예약안내</h2> 
				<button type="button" class="flex items-center gap-1" onclick="closeModal('reservation_info-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
				<!-- 내용 -->
				<p class="text-center">확정된 예약건에 대하여 예약안내를 요청자에게 발송하시겠습니까?</p>
				
				<div class="flex gap-2 justify-center mt-5">
					<button type="button" class="px-6 btn" onclick="closeModal('reservation_info-modal')">닫기</button>
					<button type="button" class="px-6 btn btn-primary">예약안내 발송</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 공유하기 모달 -->
<div id="share-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="font-bold text-base mr-auto">공유하기 </h2> 
				<button class="flex items-center gap-1" onclick="closeModal('share-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body text-slate-600">
				<div class="mb-4 text-slate-600">골프여행을 함께하시는 분들에게 아래 내용을 복사해서 공유해주세요</div>
				<div class="text-slate-500">
					<p>[AGL 골프예약]</p>
					<div class="flex gap-2 mt-1">
						<div class="w-16 text-black">예약번호</div>
						<div class="flex-1">24050101</div>
					</div>
					<div class="flex gap-2 mt-2">
						<div class="w-16 text-black">골프여행</div>
						<div class="flex-1">나가사기 3박 4일</div>
					</div>
					<div class="flex gap-2 mt-2">
						<div class="w-16 text-black">골프장</div>
						<div class="flex-1">아소스카이블루, 토마코마이 베어크리크</div>
					</div>
					<div class="flex items-center gap-2 mt-2">
						<div class="w-16 text-black">예약자</div>
						<div class="flex-1"><input type="text" class="form-control"></div>
					</div>
				</div>
				<div class="mt-3">
					예약정보 확인하러가기<br/>
					<a href="javascript:;">http://tbgm.com/r/24050101</a>
				</div>
			</div>
			<div class="modal-footer">
				<div class="relative flex justify-end w-full gap-3">
					<button type="button" class="btn btn-primary w-full">복사하기</button>
				</div>
			</div>
		</div>
	</div>
</div>
    

<script src="./dist/js/app.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src='https://design01.codeidea.io/link_script.js'></script>
<script src="./dist/js/swiper-bundle.min.js"></script>
<script src="./dist/js/custom.js"></script>

<script>
	window.addEventListener('load',function(){
		// 이미지 슬라이드 썸네일
		var imgThumb = new Swiper(".thumb_swiper", {
			spaceBetween: 10,
			slidesPerView: 8,
			freeMode: true,
			watchSlidesProgress: true,
			observer:true,
			observeParents:true,
		});
		// 이미지 슬라이드
		var imgSwiper = new Swiper(".img_swiper", {
			spaceBetween: 10,
			observer:true,
			observeParents:true,
			thumbs: {
				swiper: imgThumb,
			},
		});

		// 영상 슬라이드 썸네일
		var videoThumb = new Swiper(".vthumb_swiper", {
			spaceBetween: 10,
			slidesPerView: 8,
			freeMode: true,
			watchSlidesProgress: true,
			observer:true,
			observeParents:true,
		});
		// 영상 슬라이드
		var videoSwiper = new Swiper(".video_swiper", {
			spaceBetween: 10,
			observer:true,
			observeParents:true,
			thumbs: {
				swiper: videoThumb,
			},
		});
	});
</script>


</body>

</html>