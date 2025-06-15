	</div>
</div>

<!-- JS Assets-->
<script src="/_global/{_SESSION['adm_skin']}/dist/js/app.js?v=<?=time()?>"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

    <!-- 테이블 js : tabulator -->
<script src="/_global/{_SESSION['adm_skin']}/dist/js/tabulator.min.js?v=<?=time()?>"></script>
<!-- 차트 js 추가 -->
<script src="/_global/{_SESSION['adm_skin']}/dist/js/chart.js?v=<?=time()?>"></script>
<script src="/_global/{_SESSION['adm_skin']}/dist/js/datalabels.js?v=<?=time()?>"></script>
<script src="/_global/{_SESSION['adm_skin']}/dist/js/swiper-bundle.min.js?v=<?=time()?>"></script>

<script src="/_global/{=_SESSION['adm_skin']}/js/jquery-2.2.4.min.js?v=<?=time()?>"></script>


<!-- custom js 파일 호출 //-->
<script src="/_global/{_SESSION['adm_skin']}/dist/js/custom.js?v=<?=time()?>"></script>

<!-- https://www.daterangepicker.com //-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="/_global/skin_ko/js/custom/common.js?v=<?=time()?>"></script>
<script src="/_global/skin_ko/js/custom/litepicker.js?v=<?=time()?>"></script>

<link rel="stylesheet" href="/_global/skin_ko/css/litepicker.css?v=<?=time()?>"/>

<!--{? !empty( data['js'] ) }-->
    <!--{@ data['js'] }-->
<script src="/_global/{=_SESSION['adm_skin']}/js/custom/{.name}?v=<?=time()?>"></script>
    <!--{/}-->
<!--{/}-->

{*톰셀랙트 적용*}
<script src="/_global/skin_ko/dist/js/tom_select.js?v=<?=time()?>"></script>
<script>
    let options = {
        plugins: [ 'remove_button' ],
        persist: false,
        // create: true,
        onInitialize: function() {
            if($(this.control.children[0]).hasClass('item')) {
                $(this.control.children[0]).addClass('select-all')
            }
        },
        onItemAdd : function (value, $element) {
            if(value == 'all') {
                $($element).addClass('select-all');
            }

            if(this.items.length > 1 && this.items.includes('all')) {
                this.removeItem('all');
                this.removeOption('all');
            }
        },
        onItemRemove : function (value){
            if(this.items.length == 0) {
                this.addOption({value: 'all', text: '전체'});
                this.addItem('all');
            }
        }
    }
</script>

<!-- 공통모달 영역 //-->
<!-- 채널추가 모달 -->
<div id="coupon_channel_add-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="flex items-center justify-between p-3 border-b border-slate-400">
                    <div class="flex-1">
                        <div class="relative w-2/3 md:w-1/2">
                            <input type="text" class="form-control" id="coupon_channel1">
                            <label for="coupon_channel1"><i data-lucide="search" class="absolute right-2 top-2.5 w-4 h-4"></i></label>
                            <!-- 연관검색어 표기시 hidden 클래스 삭제 -->
                            <div class="hidden absolute left-0 top-full w-full overflow-y-auto max-h-32 bg-white p-1 border border-slate-300 border-t-0 rounded">
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길일</button>
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길이</button>
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길삼</button>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">채널 추가</button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[1px] bg-slate-400">
                    <div class="overflow-y-auto h-[140px] md:h-[440px] p-3 bg-white">
                        <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                        <button class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">골프장</button>
                        <button class="block w-full text-left p-2">골프장예약</button>
                        <button class="block w-full text-left p-2">골프장ERP</button>
                        <button class="block w-full text-left p-2">검색/포털</button>
                        <button class="block w-full text-left p-2">OTA/여행사</button>
                        <button class="block w-full text-left p-2">항공/숙박/차량</button>
                        <button class="block w-full text-left p-2">금융/은행/카드</button>
                        <button class="block w-full text-left p-2">쇼핑/마켓</button>
                        <button class="block w-full text-left p-2">대기업/브랜드</button>
                        <button class="block w-full text-left p-2">멤버쉽/마일리지</button>
                        <button class="block w-full text-left p-2">소셜/메신저/기타</button>
                    </div>
                    <div class="md:col-span-2 overflow-y-auto max-h-[auto] md:max-h-[440px] md:h-[440px] p-3 bg-white">
                        <div class="flex flex-wrap items-center gap-1">
                            <button class="px-5 py-2 rounded">전체(11)</button>
                            <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                            <button class="px-5 py-2 rounded bg-primary bg-opacity-10 font-bold text-primary">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                            <button class="px-5 py-2 rounded bg-primary bg-opacity-10 font-bold text-primary">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                            <button class="px-5 py-2 rounded bg-primary bg-opacity-10 font-bold text-primary">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                            <button class="px-5 py-2 rounded">사이트</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 전시등록 모달 -->
<div id="exhibit_prod_select-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">상품 선택</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-link-tabs" role="tablist">
                    <li id="exhibit_prod-1-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1 active" data-tw-toggle="pill" data-tw-target="#exhibit_prod-tab-1" type="button" role="tab" aria-controls="exhibit_prod-tab-1" aria-selected="true">지역선택</button>
                    </li>
                    <li id="exhibit_prod-2-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1" data-tw-toggle="pill" data-tw-target="#exhibit_prod-tab-2" type="button" role="tab" aria-controls="exhibit_prod-tab-2" aria-selected="false">기획전선택</button>
                    </li>
                    <li id="exhibit_prod-3-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1" data-tw-toggle="pill" data-tw-target="#exhibit_prod-tab-3" type="button" role="tab" aria-controls="exhibit_prod-tab-3" aria-selected="false">테마선택</button>
                    </li>
                    <li id="exhibit_prod-4-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full py-2 !px-1" data-tw-toggle="pill" data-tw-target="#exhibit_prod-tab-4" type="button" role="tab" aria-controls="exhibit_prod-tab-4" aria-selected="false">상품선택</button>
                    </li>
                </ul>
                <div class="tab-content overflow-y-auto h-[400px]">
                    <div id="exhibit_prod-tab-1" class="tab-pane leading-relaxed pt-3 active" role="tabpanel" aria-labelledby="exhibit_prod-1-tab">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <select class="form-select">
                                <option>대륙선택</option>
                                <option>미주</option>
                                <option>유럽</option>
                                <option>아시아</option>
                                <option>중동</option>
                                <option>남태평양</option>
                                <option>아프리카</option>
                            </select>
                            <select class="form-select">
                                <option>국가선택</option>
                                <option>대한민국</option>
                                <option>중국</option>
                                <option>일본</option>
                                <option>태국</option>
                                <option>베트남</option>
                                <option>필리핀</option>
                            </select>
                            <select class="form-select">
                                <option>지역선택</option>
                                <option>큐슈</option>
                                <option>오키나와</option>
                                <option>간사이</option>
                                <option>간토</option>
                                <option>추부</option>
                                <option>주고쿠</option>
                            </select>
                        </div>
                    </div>
                    <div id="exhibit_prod-tab-2" class="tab-pane leading-relaxed pt-3" role="tabpanel" aria-labelledby="exhibit_prod-2-tab">
                        <div class="flex flex-col gap-2">
                            <!-- 버튼선택시 -->
                            <button class="overflow-hidden relative rounded-xl border-4 border-primary">
                                <img src="/_global/{_SESSION['adm_skin']}/dist/images/banner_sample.png" alt="">
                                <!-- 이미지 + 텍스트 같이 사용시 아래 주석내용 추가 -->
                                <!-- <div class="relative md:absolute left-0 top-0 w-full h-full p-2 md:p-4 bg-slate-900 bg-opacity-30 text-white text-left">
                                    <div class="text-xs">겨울 골프와 힐링의 도시</div>
                                    <div class="md:py-1 font-bold text-xl">치앙마이 콜렉션</div>
                                    <div class="text-xs">당신의 페어웨이를 찾아보세요</div>
                                </div>  -->
                            </button>
                            <button class="overflow-hidden relative rounded-xl">
                                <img src="/_global/{_SESSION['adm_skin']}/dist/images/banner_sample.png" alt="">
                                <!-- 이미지 + 텍스트 같이 사용시 아래 주석내용 추가 -->
                                <!-- <div class="relative md:absolute left-0 top-0 w-full h-full p-2 md:p-4 bg-slate-900 bg-opacity-30 text-white text-left">
                                    <div class="text-xs">겨울 골프와 힐링의 도시</div>
                                    <div class="md:py-1 font-bold text-xl">치앙마이 콜렉션</div>
                                    <div class="text-xs">당신의 페어웨이를 찾아보세요</div>
                                </div>  -->
                            </button>
                            <button class="overflow-hidden relative rounded-xl">
                                <img src="/_global/{_SESSION['adm_skin']}/dist/images/banner_sample.png" alt="">
                                <!-- 이미지 + 텍스트 같이 사용시 아래 주석내용 추가 -->
                                <!-- <div class="relative md:absolute left-0 top-0 w-full h-full p-2 md:p-4 bg-slate-900 bg-opacity-30 text-white text-left">
                                    <div class="text-xs">겨울 골프와 힐링의 도시</div>
                                    <div class="md:py-1 font-bold text-xl">치앙마이 콜렉션</div>
                                    <div class="text-xs">당신의 페어웨이를 찾아보세요</div>
                                </div>  -->
                            </button>
                            <button class="overflow-hidden relative rounded-xl">
                                <img src="/_global/{_SESSION['adm_skin']}/dist/images/banner_sample.png" alt="">
                                <!-- 이미지 + 텍스트 같이 사용시 아래 주석내용 추가 -->
                                <!-- <div class="relative md:absolute left-0 top-0 w-full h-full p-2 md:p-4 bg-slate-900 bg-opacity-30 text-white text-left">
                                    <div class="text-xs">겨울 골프와 힐링의 도시</div>
                                    <div class="md:py-1 font-bold text-xl">치앙마이 콜렉션</div>
                                    <div class="text-xs">당신의 페어웨이를 찾아보세요</div>
                                </div>  -->
                            </button>
                        </div>
                    </div>
                    <div id="exhibit_prod-tab-3" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="exhibit_prod-3-tab">
                        <div class="sticky top-0 flex items-center gap-1 p-2 bg-white">
                            <input type="text" class="flex-1 form-control" placeholder="테마명을 입력하세요">
                            <button class="btn btn-primary-soft">테마검색</button>
                        </div>
                        <div class="grid grid-cols-2 gap-1">
                            <div>
                                <button class="px-4 py-1 rounded-lg">미주</button>
                            </div>
                            <div>
                                <!-- 버튼클릭시 bg-slate-200 클래스추가 -->
                                <button class="px-4 py-1 rounded-lg bg-slate-200">미주</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">유럽</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">유럽</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">아시아</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">아시아</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">중동</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">중동</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">남태평양</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">남태평양</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">아프리카</button>
                            </div>
                            <div>
                                <button class="px-4 py-1 rounded-lg">아프리카</button>
                            </div>

                        </div>
                    </div>
                    <div id="exhibit_prod-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="exhibit_prod-4-tab">
                        <div class="z-20 sticky top-0 p-2 bg-white">
                            <div class="grid grid-cols-3 gap-1 md:gap-3">
                                <select class="form-select">
                                    <option>대륙선택</option>
                                    <option>미주</option>
                                    <option>유럽</option>
                                    <option>아시아</option>
                                    <option>중동</option>
                                    <option>남태평양</option>
                                    <option>아프리카</option>
                                </select>
                                <select class="form-select">
                                    <option>국가선택</option>
                                    <option>대한민국</option>
                                    <option>중국</option>
                                    <option>일본</option>
                                    <option>태국</option>
                                    <option>베트남</option>
                                    <option>필리핀</option>
                                </select>
                                <select class="form-select">
                                    <option>지역선택</option>
                                    <option>큐슈</option>
                                    <option>오키나와</option>
                                    <option>간사이</option>
                                    <option>간토</option>
                                    <option>추부</option>
                                    <option>주고쿠</option>
                                </select>
                            </div>
                            <div class="flex items-center gap-1 mt-2">
                                <input type="text" class="flex-1 form-control" placeholder="상품명, 키워드를 입력하세요.">
                                <button class="btn btn-primary-soft">상품검색</button>
                            </div>
                        </div>
                        <div class="z-10 relative flex flex-wrap items-center gap-2">
                            <!-- 이미지 클릭시  border-4 border-primary 클래스 추가 -->
                            <div class="overflow-hidden relative flex items-center gap-2 border-4 border-primary bg-white rounded-lg cursor-pointer">
                                <img class="w-40" src="/_global/{_SESSION['adm_skin']}/dist/images/sample_img.jpg" alt="">
                                <!-- 이미지로만 사용시 아래 div 제거 -->
                                <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                    <div class="text-xs">태국 • 방콕</div>
                                    <div class="flex items-center justify-between">
                                        <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                        <button><i data-lucide="heart" class="w-4 h-4 fill-white"></i></button>
                                    </div>
                                    <div>KRW 199,000 ~ <span class="text-xs line-through">299,000</span></div>
                                </div>
                            </div>
                            <div class="overflow-hidden relative flex items-center gap-2 bg-white rounded-lg cursor-pointer">
                                <img class="w-40" src="/_global/{_SESSION['adm_skin']}/dist/images/sample_img.jpg" alt="">
                                <!-- 이미지로만 사용시 아래 div 제거 -->
                                <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                    <div class="text-xs">태국 • 방콕</div>
                                    <div class="flex items-center justify-between">
                                        <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                        <!-- 하트 색 채우기 fill- -->
                                        <button><i data-lucide="heart" class="w-4 h-4 text-red-500 fill-red-500"></i></button>
                                    </div>
                                    <div>KRW 199,000 ~ <span class="text-xs line-through">299,000</span></div>
                                </div>
                            </div>
                            <div class="overflow-hidden relative flex items-center gap-2 bg-white rounded-lg cursor-pointer">
                                <img class="w-40" src="/_global/{_SESSION['adm_skin']}/dist/images/sample_img.jpg" alt="">
                                <!-- 이미지로만 사용시 아래 div 제거 -->
                                <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                    <div class="text-xs">태국 • 방콕</div>
                                    <div class="flex items-center justify-between">
                                        <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                        <!-- 하트 색 채우기 fill- -->
                                        <button><i data-lucide="heart" class="w-4 h-4 text-red-500 fill-red-500"></i></button>
                                    </div>
                                    <div>KRW 199,000 ~ <span class="text-xs line-through">299,000</span></div>
                                </div>
                            </div>
                            <div class="overflow-hidden relative flex items-center gap-2 bg-white rounded-lg cursor-pointer">
                                <img class="w-40" src="/_global/{_SESSION['adm_skin']}/dist/images/sample_img.jpg" alt="">
                                <!-- 이미지로만 사용시 아래 div 제거 -->
                                <div class="absolute left-0 bottom-0 w-full p-2 bg-slate-800 bg-opacity-50 text-white zoom-70">
                                    <div class="text-xs">태국 • 방콕</div>
                                    <div class="flex items-center justify-between">
                                        <div class="text-base font-bold">알파인 GC 3박 4일</div>
                                        <!-- 하트 색 채우기 fill- -->
                                        <button><i data-lucide="heart" class="w-4 h-4 text-red-500 fill-red-500"></i></button>
                                    </div>
                                    <div>KRW 199,000 ~ <span class="text-xs line-through">299,000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-1 mt-4">
                    <button class="btn btn-primary"><i data-lucide="plus" class="w-4 h-4"></i> 선택추가</button>
                    <button class="btn btn-danger"><i data-lucide="x" class="w-4 h-4"></i> 선택초기화</button>
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
                            <input type="text" class="form-control" id="coupon_channel2">
                            <label for="coupon_channel2"><i data-lucide="search" class="absolute right-2 top-2.5 w-4 h-4"></i></label>
                            <!-- 연관검색어 표기시 hidden 클래스 삭제 -->
                            <div class="hidden absolute left-0 top-full w-full overflow-y-auto max-h-32 bg-white p-1 border border-slate-300 border-t-0 rounded">
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길일</button>
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길이</button>
                                <button class="block w-full px-2 py-0.5 hover:bg-slate-100 text-left">홍길삼</button>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">채널 추가</button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[1px] bg-slate-400">
                    <div class="overflow-y-auto h-[140px] md:h-[440px] p-3 bg-white">
                        <!-- 버튼 클릭시 클래스추가 bg-primary bg-opacity-10 font-bold text-primary -->
                        <button class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">골프장</button>
                        <button class="block w-full text-left p-2">미주</button>
                        <button class="block w-full text-left p-2">유럽</button>
                        <button class="block w-full text-left p-2">아시아</button>
                        <button class="block w-full text-left p-2">남태평양</button>
                        <button class="block w-full text-left p-2">아프리카</button>
                        <button class="block w-full text-left p-2">중동/기타</button>
                    </div>
                    <div class="overflow-y-auto max-h-[auto] md:max-h-[440px] md:h-[440px] p-3 bg-white">
                        <button class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">대한민국</button>
                        <button class="block w-full text-left p-2">일본</button>
                        <button class="block w-full text-left p-2">중국</button>
                        <button class="block w-full text-left p-2">필리핀</button>
                        <button class="block w-full text-left p-2">베트남</button>
                        <button class="block w-full text-left p-2">태국</button>
                    </div>
                    <div class="overflow-y-auto max-h-[auto] md:max-h-[440px] md:h-[440px] p-3 bg-white">
                        <button class="block w-full text-left p-2 bg-primary bg-opacity-10 font-bold text-primary">인천공항</button>
                        <button class="block w-full text-left p-2">제주공항</button>
                        <button class="block w-full text-left p-2">김해공항</button>
                        <button class="block w-full text-left p-2">부산공항</button>
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
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
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
                    <button class="btn btn-primary w-24">검색</button>
                </div>
                <div class="overflow-x-auto mt-5">
                    <table class="table table-sm">
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
                        <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>아시아</td>
                            <td>일본</td>
                            <td>큐슈</td>
                            <td>도쿄</td>
                            <td>도쿄 유명한 골프장</td>
                        </tr>
                        <tr>
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
                    <button class="btn btn-primary"><i data-lucide="plus" class="w-5 h-5 mr-1"></i> 골프장 추가</button>
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
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
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
                    <button class="btn btn-primary w-24">검색</button>
                </div>
                <div class="overflow-x-auto mt-5">
                    <table class="table table-sm">
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
                        <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>아시아</td>
                            <td>일본</td>
                            <td>큐슈</td>
                            <td>도쿄</td>
                            <td>도쿄 유명한 호텔</td>
                        </tr>
                        <tr>
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
                    <button class="btn btn-primary"><i data-lucide="plus" class="w-5 h-5 mr-1"></i> 호텔 추가</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 경고창( alert ) //-->
<div id="submit_error-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">안내</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="items-center gap-2 mb-2">
                    <div class="shrink-0  py-2 font-semibold message"></div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-primary" data-tw-dismiss="modal">확인</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 공통모달 영역 끝 //-->
</body>
</html>
