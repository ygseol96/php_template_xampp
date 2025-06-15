<!-- BEGIN: Top Bar -->
<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?=$depth_1?></a></li>
            <li class="breadcrumb-item <?=$depth_3 ?'':'active' ?>" aria-current="page"><?=$depth_2?></li>
            <li class="breadcrumb-item <?=$depth_3 ?'active':'hidden' ?>" aria-current="page"><?=$depth_3?></li>
        </ol>
    </nav>
    <!-- END: Breadcrumb -->

    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
        <div class="notification-content pt-2 dropdown-menu">
            <div class="notification-content__box dropdown-content">
                <div class="notification-content__title">알림</div>
                <div class="flex items-center justify-between mb-3">
                    <button type="button" class="btn btn-primary-soft btn-sm">모두읽음</button>
                    <select name="" id="" class="form-select w-24">
                        <option value="">전체</option>
                        <option value="">안읽음</option>
                        <option value="">읽음</option>
                    </select>
                </div>
                <!-- 읽었을 때 bg-slate-100 안 읽었을 때 bg-slate-100 없음 -->
                <div class="cursor-pointer relative flex items-center bg-slate-100 p-3 rounded-md hover:bg-slate-50">
                    <div class="overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">단품예약</a> 
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">24.05.01 11:22:00</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5 font-bold">[국가-지역] 골프장명 / 4인 / YY.MM.DD 코스명 00:00 (티타임 표시)</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center p-3 rounded-md mt-3 hover:bg-slate-50">
                    <div class="overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">단품예약</a> 
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">24.05.01 11:22:00</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5 font-bold">[국가-지역] 골프장명 / 4인 / YY.MM.DD 코스명 00:00 (티타임 표시)</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center p-3 rounded-md mt-3 hover:bg-slate-50">
                    <div class="overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">단품예약</a> 
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">24.05.01 11:22:00</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5 font-bold">[국가-지역] 골프장명 / 4인 / YY.MM.DD 코스명 00:00 (티타임 표시)</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center p-3 rounded-md mt-3 hover:bg-slate-50">
                    <div class="overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">단품예약</a> 
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">24.05.01 11:22:00</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5 font-bold">[국가-지역] 골프장명 / 4인 / YY.MM.DD 코스명 00:00 (티타임 표시)</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center p-3 rounded-md mt-3 hover:bg-slate-50">
                    <div class="overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">단품예약</a> 
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">24.05.01 11:22:00</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5 font-bold">[국가-지역] 골프장명 / 4인 / YY.MM.DD 코스명 00:00 (티타임 표시)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Notifications -->

    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="프로필 이미지" src="./dist/images/sample_img.jpg">
        </div>
        <div class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium">기획팀 홍길동</div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Project Manager</div>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-item hover:bg-white/5" onclick="modalOpen01('my_info-modal')"> <i data-lucide="user" class="w-4 h-4 mr-2" ></i>내정보 수정</a>
                </li>
                <!-- <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                </li> -->
                <!-- <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                </li> -->
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->


<!-- 공통모달 -->
<?php include_once('_modal.php'); ?>