
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{_SESSION['CSRF_TOKEN']}">
    <link href="/_global/dist/images/heyteetime/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>heyteetime</title>
    <link rel="stylesheet" href="/_global/{_SESSION['adm_skin']}/dist/css/app.css" />
    <link rel="stylesheet" href="/_global/{_SESSION['adm_skin']}/dist/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/_global/{_SESSION['adm_skin']}/dist/css/custom.css" />

    <script src="/_global/{_SESSION['adm_skin']}/dist/js/custom.js"></script>
</head>    <body class="!p-0">
<div class="bg-slate-100 flex items-center justify-center h-dvh">
    <div class="intro-y flex flex-col justify-center items-center bg-white rounded-lg max-w-[540px] h-[600px] w-full px-8">
        <img src="/_global/{_SESSION['adm_skin']}/dist/images/heyteetime/logo.svg" class="w-[150px] py-[40px]" alt="">
        <div class="text-lg font-bold text-slate-500">Welcome to AGL Heyteetime Admin~!!</div>
        <div class="flex flex-col mt-8">
            <label for="" class="form-label text-slate-500">아이디</label>
            <input id="account" type="text" class="w-full md:w-[320px] form-control" placeholder="아이디를 입력해주세요">
        </div>
        <div class="flex flex-col mt-3">
            <label for="" class="form-label text-slate-500">비밀번호</label>
            <input id="password" type="password" class="w-full md:w-[320px] form-control" placeholder="비밀번호를 입력해주세요">
        </div>
        <div class="py-[30px]">
            <button id="loginBtn" class="btn btn-lg btn-primary w-full md:w-[320px] font-semibold">Admin 로그인하기</button>
        </div>
    </div>
</div>

<div id="login_error-modal" class="modal" tabindex="-1" aria-hidden="true">
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

<!-- JS Assets-->
<script src="/_global/{_SESSION['adm_skin']}/dist/js/app.js?v=<?=time()?>"></script>
<script src="/_global/{_SESSION['adm_skin']}/js/jquery-2.2.4.min.js?v=<?=time()?>"></script>
<script src="/_global/{_SESSION['adm_skin']}/js/custom/common.js?v=<?=time()?>"></script>
<!-- JS Assets-->

<script>

    $("#loginBtn").on('click', function () {
        login();
    })

    $('#account, #password').on('keydown', function(event){
        if (event.key === 'Enter') {
            if($("#login_error-modal").hasClass('show')) {
             closeModal('login_error-modal');
            } else {
                login();
            }
        }
    });

    function login() {
        if(validate()) {
            loginByAjax();
        }
    }

    function validate() {
        if($("#account").val().length === 0) {
            $("#login_error-modal .message").text('아이디를 입력해주세요');
            modalOpen('login_error-modal');
            return false;
        } else if($("#password").val().length === 0) {
            $("#login_error-modal .message").text('비밀번호를 입력해주세요');
            modalOpen('login_error-modal');
            return false;
        } else {
            return true;
        }
    }

    function loginByAjax() {
        $.ajax({
            url: '/login/ajax_login.php',
            method: 'POST',
            data : {
                account : $("#account").val(),
                password: $("#password").val(),
            },
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (result) {
                console.log(result);
                location.replace('dashboard.php');
            },
            error: function (e) {
                $("#login_error-modal .message").text(e.responseJSON.message);
                modalOpen('login_error-modal');
            }
        })
    }
</script>
</body>
</html>