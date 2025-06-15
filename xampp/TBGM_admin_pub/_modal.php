
<!-- 공통모달 -->

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
                <button type="button" class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
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
                <button type="button" class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
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

<!-- 내정보 수정 모달 -->
<div id="my_info-modal" class="modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="font-medium text-base mr-auto">내정보 수정</h2> 
				<button type="button" class="flex items-center gap-1" onclick="closeModal('my_info-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
			</div>
			<div class="modal-body">
                <div class="flex items-center justify-center mb-6">
                    <div class="relative w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center">
                        <!-- 이미지 추가 시  아이콘 삭제 후 img 태크로 변경 클래스 참고 -->
                        <i data-lucide="user" class="w-12 h-12 text-slate-400"></i>
                        <!-- <img src="./dist/images/sample_img.jpg" class="w-24 h-24 object-cover rounded-full" alt=""> -->
                        <label for="my_photos1_1">
                            <div class="absolute cursor-pointer bg-emerald-500 rounded-full w-8 h-8 right-0 bottom-0 p-0 flex items-center justify-center hover:contrast-125">
                                <i data-lucide="camera" class="w-4 h-4 text-white"></i>
                            </div>
                        </label>
                       
                        <input type="file" id="my_photos1_1" name="my_photos1" class="hidden">
                    </div>
                </div>
				<div class="flex items-start gap-2 mb-2">
					<div class="shrink-0 w-20 py-2 font-semibold">사용자명</div>
					<div class="flex-1 flex items-center gap-2">
						<input type="text" class="form-control" placeholder="홍길동" readonly>
					</div>
				</div>
                <div class="flex items-start gap-2 mb-2">
					<div class="shrink-0 w-20 py-2 font-semibold">계정</div>
					<div class="flex-1 flex items-center gap-2">
						<input type="text" class="form-control" placeholder="testhong" readonly>
					</div>
				</div>
                <div class="flex items-start gap-2 mb-2">
					<div class="shrink-0 w-20 py-2 font-semibold">비밀번호*</div>
					<div class="flex-1 flex flex-col gap-1">
						<input type="password" class="form-control" placeholder="">
                        <p class="text-xs text-slate-400">*영문,숫자,특수문자포함 8자이상</p>
					</div>
                </div>
                <div class="flex items-start gap-2 mb-2">
					<div class="shrink-0 w-20 py-2 font-semibold">전화번호*</div>
					<div class="flex-1 flex flex-col gap-1">
						<input type="text" class="form-control" placeholder="010-1123-4455">
					</div>
                </div>
                <div class="flex items-start gap-2 mb-2">
					<div class="shrink-0 w-20 py-2 font-semibold">이메일*</div>
					<div class="flex-1 flex flex-col gap-1">
						<input type="text" class="form-control" placeholder="testhong@gmail.com">
					</div>
                </div>
				<div class="flex gap-2 justify-center mt-5">
					<button type="button" class="px-6 btn btn-outline-danger" onclick="closeModal('my_info-modal')">취소</button>
					<button type="button" class="px-6 btn btn-primary" onclick="closeModal('my_info-modal')">저장</button>
				</div>
			</div>
		</div>
	</div>
</div>