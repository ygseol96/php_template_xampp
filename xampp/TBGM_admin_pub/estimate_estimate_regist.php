<?php include_once('_head.php'); ?>
    <body>
        <!-- 모바일 메뉴 -->
        <?php 
        $side_depth = 'estimate';
        $side_2depth = 'estimate';
        $depth_1 = '견적관리';
        $depth_2 = '견적목록';
        $depth_3 = '견적등록';
        include_once('_mobile_menu.php'); ?>


        <div class="flex mt-[4.7rem] md:mt-0">
            
            <!-- 사이드메뉴 -->
            <?php include_once('_side_menu.php'); ?>

            <!-- 컨텐츠 시작 -->
            <div class="content">

                <?php include_once('_header.php'); ?>

                <div class="intro-y flex flex-wrap items-center justify-between ">
                    <div>
                        <div class="flex items-center mt-4">
                            <a href="./estimate_estimate_mng.php" class="flex items-center gap-1 text-primary">
                                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 견적목록
                            </a>
                        </div>
                        <div class="flex items-center mt-2">
                            <h2 class="text-xl font-bold mr-auto">견적 등록</h2>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 ml-auto">
                        <button type="button" class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 견적등록</button>
                    </div>
                </div>

                <!-- 상세 -->
                <div class="grid grid-cols-12 gap-6 mt-4">
                    <!-- 좌측 -->
                    <div class="col-span-12 xl:col-span-8">
                        <div class="intro-y">
                            <div class="flex h-[38px]">
                                <h3 class="text-lg font-bold mr-auto text-slate-600 mt-1">견적내용</h3>
                                <!-- <button type="button" class="btn btn-outline-dark">수정사항(10)</button>
                                <button type="button" class="btn btn-primary-soft ml-3">상담내역(3)</button> -->
                            </div>
                            <!-- 좌측 box -->
                            <div class="box p-5 mt-2">
                                <!-- <div class="flex items-center justify-end">
                                    <button type="button" class="btn btn-success"><i data-lucide="save" class="w-4 h-4 !stroke-2 mr-1"></i> SAVE</button>
                                </div> -->
                                <div class="mt-4 flex flex-col gap-2 md:gap-4">
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">가입자명 <span class="text-danger">*</span></p>
                                            <a href="javascript:;" onclick="modalOpen01('subscriber_sel-modal')" class="rounded-md border border-slate-200 h-[38px] flex-1 px-3 flex items-center">
                                                <span></span>
                                            </a>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">지점명</p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">담당자명 <span class="text-danger">*</span></p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">연락처 <span class="text-danger">*</span></p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">견적제목 <span class="text-danger">*</span></p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">기간 <span class="text-danger">*</span></p>
                                            <div class="relative w-full flex-1">
                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-slate-100 border text-slate-500"> 
                                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                                </div>
                                                <input type="text" class="datepicker form-control pl-12">
                                            </div>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">인원수 <span class="text-danger">*</span></p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">희망지역 <span class="text-danger">*</span></p>
                                            <a href="javascript:;" onclick="modalOpen01('region-modal')" class="rounded-md border border-slate-200 h-[38px] flex-1 px-3 flex items-center">
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">요청사항</p>
                                            <textarea class="form-control h-24 md:h-full flex-1"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">골프장등급</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">회원제</option>
                                                <option value="2">대중제</option>
                                            </select>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">티오프시간</p>
                                            <div class="flex-1 flex items-center gap-2 flex-wrap">
                                                <input type="time" class="form-control w-full md:w-auto flex-1">~<input type="time" class="form-control  w-full md:w-auto flex-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">숙소등급</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">5성급</option>
                                                <option value="2">4성급</option>
                                            </select>
                                        </div>
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">숙소종류</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">다인실</option>
                                                <option value="2">트윈</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">식사</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">라운드 전</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                        <div class="flex-1 flex">
                                            <p class="mt-2 w-24 font-medium">객단가</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">130,000~150,000</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">식사장소</p>
                                            <select name="state[]" multiple autocomplete="off" class="tom-select flex-1">
                                                <option value="all" selected>전체</option>
                                                <option value="1">홈 식사</option>
                                                <option value="2">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap flex-col md:flex-row gap-2 md:gap-6">
                                        <div class="flex-1 flex flex-wrap">
                                            <p class="mt-2 w-24 font-medium">기타</p>
                                            <input type="text" class="form-control flex-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 우측 -->
                    <div class="col-span-12 xl:col-span-4">
                        
                    </div>
                </div>

            </div>

        </div>

        <!-- 가입자선택 모달 -->
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
                        <button type="button" class="flex items-center gap-1" onclick="closeModal('region-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
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


        <?php include_once('_footer.php'); ?>
        
    </body>
</html>