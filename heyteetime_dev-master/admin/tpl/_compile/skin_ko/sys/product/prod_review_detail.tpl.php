<?php /* Template_ 2.2.8 2024/05/16 09:02:01 C:\xampp\heytee_dev\admin\_global\skin_ko\sys\product\prod_review_detail.tpl 000013978 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between">
    <div>
        <div class="flex items-center mt-4">
            <a href="./prod_review_mng.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 여행후기 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">여행후기 상세</h2>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <button class="btn btn-primary">노출</button>
        <button class="btn btn-danger">미노출</button>
    </div>
</div>

<!-- detail -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col sm:flex-row items-start lg:items-center gap-4">
        <div class="overflow-hidden w-full sm:w-40 rounded"><img class="w-full" src="/_global/dist/images/sample_img.jpg" alt=""></div>
        <div class="grid grid-cols-1 lg:grid-cols-2 flex-1">
            <div>
                <div class="flex items-center">
                    <p class="w-20 text-slate-700 font-medium text-left">ID</p>
                    <p class="text-slate-500">test@test.com</p>
                </div>
                <div class="flex items-center mt-2">
                    <p class="w-20 text-slate-700 font-medium text-left">사용자명</p>
                    <p class="text-slate-500">Jim Hwang</p>
                </div>
                <div class="flex items-center mt-2">
                    <p class="w-20 text-slate-700 font-medium text-left">에디터명</p>
                    <p class="text-slate-500">Mr.Jim</p>
                </div>
                <div class="flex items-center mt-2">
                    <p class="w-20 text-slate-700 font-medium text-left">전화번호</p>
                    <p class="text-slate-500">+82-1234-5678</p>
                </div>
                <div class="flex items-center mt-2">
                    <p class="w-20 text-slate-700 font-medium text-left">국적</p>
                    <p class="text-slate-500">Republic of Korea</p>
                </div>
            </div>
            <div>
                <div class="flex items-center">
                    <p class="w-20 text-slate-700 font-medium text-left">후기수</p>
                    <p class="text-slate-500">1,234</p>
                </div>
                <div class="flex items-center mt-2">
                    <p class="w-20 text-slate-700 font-medium text-left">전체평점</p>
                    <p class="text-slate-500">4.5</p>
                </div>
                <div class="flex items-center mt-2">
                    <p class="w-20 text-slate-700 font-medium text-left">팔로워</p>
                    <p class="text-slate-500">100,000</p>
                </div>
                <div class="flex items-center mt-2">
                    <p class="w-20 text-slate-700 font-medium text-left">SNS</p>
                    <div>
                        <button><img class="w-8" src="/_global/dist/images/insta.png" alt=""></button>
                        <button><img class="w-8" src="/_global/dist/images/youtube.png" alt=""></button>
                        <button><img class="w-8" src="/_global/dist/images/face.png" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-7">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <div class="text-left">
                <b>베트남 - 다낭</b>
                <div class="flex items-center mt-1">
                    <b class="text-2xl">호이아나</b>
                    <a class="btn btn-dark ml-2" href="javascript:;">골프장보기</a>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <span>2024.02.03</span>
                <p class="flex items-center gap-1"><i data-lucide="star" class="w-5 h-5 text-yellow-400 fill-yellow-400"></i> 4.5</p>
                <p class="flex items-center gap-1 font-bold text-primary"><i data-lucide="thumbs-up" class="w-5 h-5"></i> 10K</p>
            </div>
        </div>
        <div class="mt-2 text-left">
            일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다. 일본 최고의 골프장에서 즐거운 라운딩을 경험했다.
        </div>
        <div class="mt-3 flex flex-wrap items-center gap-3 text-slate-400">
            <span>#만족스러운 가격</span>
            <span>#훌륭한 골프코스</span>
            <span>#아름다운 경치</span>
            <span>#다양한 주변 관광지</span>
        </div>
        <div class="grid grid-cols-5 md:grid-cols-7 gap-2 mt-4">
            <div class="col-span-5 md:col-span-2 row-span-5 md:row-span-2">
                <video muted="muted" controls>
                    <source src="/_global/dist/images/video01.mp4" type="video/mp4">
                </video>
            </div>
            <div class="overflow-hidden rounded"><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></div>
            <div class="overflow-hidden rounded"><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></div>
            <div class="overflow-hidden rounded"><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></div>
            <div class="overflow-hidden rounded"><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></div>
            <div class="overflow-hidden rounded relative cursor-pointer" data-tw-toggle="modal" data-tw-target="#img_detail-modal">
                <img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt="">
                <span class="absolute left-0 right-0 top-0 bottom-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center text-white font-bold text-3xl">+5</span>
            </div>
            <div class="overflow-hidden rounded"><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></div>
            <div class="overflow-hidden rounded"><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></div>
            <div class="overflow-hidden rounded"><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></div>
            <div class="overflow-hidden rounded"><img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt=""></div>
            <div class="overflow-hidden rounded relative cursor-pointer" data-tw-toggle="modal" data-tw-target="#img_detail-modal">
                <img class="w-full" src="/_global/dist/images/heyteetime/sample_img.png" alt="">
                <span class="absolute left-0 right-0 top-0 bottom-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center text-white font-bold text-3xl">+5</span>
            </div>
        </div>
    </div>
</div>
<!-- 이미지 상세 모달 -->
<div id="img_detail-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">다낭 호이아나쇼어스 뉴월드</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i>닫기</button>
            </div>
            <div class="modal-body p-3 lg:p-5 text-center">
                <div class="img_swiper overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                    </ul>
                </div>
                <div class="thumb_swiper mt-3 overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                        <li class="swiper-slide cursor-pointer"><img src="/_global/dist/images/heyteetime/sample_img2.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 영상 상세 모달 -->
<div id="video_detail-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">다낭 호이아나쇼어스 뉴월드</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i>닫기</button>
            </div>
            <div class="modal-body p-3 lg:p-5 text-center">
                <div class="video_swiper overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <video muted="muted" controls>
                                <source src="/_global/dist/images/video01.mp4" type="video/mp4">
                            </video>
                        </li>
                    </ul>
                </div>
                <div class="vthumb_swiper mt-3 overflow-hidden">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide cursor-pointer">
                            <video>
                                <source src="/_global/dist/images/video01.mp4" type="video/mp4">
                            </video>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    // 이미지슬라이드
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