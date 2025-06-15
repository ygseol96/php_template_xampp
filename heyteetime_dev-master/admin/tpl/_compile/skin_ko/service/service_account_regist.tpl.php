<?php /* Template_ 2.2.8 2024/05/10 10:51:14 C:\xampp\heytee_dev\admin\_global\skin_ko\service\service_account_regist.tpl 000005568 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">계정 등록</h2>
    <div class="flex items-center gap-1">
        <a href="./service_account_department.php" class="btn btn-primary">부서별 권한관리</a>
        <button class="btn btn-primary sbm_account_regist"><i data-lucide="plus" class="w-4 h-4"></i> 계정등록</button>
        <button class="btn btn-danger" onClick="location.href='/sys/service/service_account.php';"><i data-lucide="x" class="w-4 h-4"></i> 등록취소</button>
    </div>
</div>

<!-- detail -->
<form name="service_account_regist_form" id="service_account_regist_form">
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">사용자명*</div>
        <div class="flex-1">
            <input type="text" name="name" class="form-control w-full md:w-52 required" placeholder="사용자를 입력해주세요.">
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">사용자계정*</div>
            <div class="flex-1">
                <input type="text" name="account" class="form-control w-full md:w-52 required" onKeyUp="alphaNumeric(this);" placeholder="사용자를 입력해주세요.">
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">비밀번호*</div>
            <div class="flex-1 flex flex-wrap items-center gap-2">
                <input type="password" name="passwd" class="form-control w-full md:w-52 required" placeholder="비밀번호를 입력해주세요.">
                <p class="text-slate-500">•영문,숫자,특수문자포함 8자이상</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">전화번호*</div>
            <div class="flex-1 flex items-center gap-1">
                <select name="country" class="form-select w-1/3 md:w-34">
<?php if(!empty($TPL_VAR["data"]['nationPhone'])){?>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['nationPhone'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                    <option value="<?php echo $TPL_V1["NP_SEQ"]?>">+<?php echo $TPL_V1["PHONE_CODE"]?> (<?php echo $TPL_V1["NAT_NM_KR"]?>)</option>
<?php }}?>
<?php }else{?>
                    <option>+82</option>
<?php }?>
                </select>
                <input type="text" name="hp_number" class="form-control w-2/3 md:w-52 required" onKeyUp="onlyNumeric(this);" placeholder="전화번호를 입력해주세요.">
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 mb-3">
            <div class="w-full md:w-40 pt-2 font-semibold">이메일*</div>
            <div class="flex-1">
                <input type="text" name="email" class="form-control w-full md:w-52 required" placeholder="이메일을 입력해주세요.">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">상태</div>
        <div class="flex-1">
            <select name="status" class="form-select w-full md:w-52">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['status'])&&!empty($TPL_R1)){$TPL_I1=-1;foreach($TPL_R1 as $TPL_V1){$TPL_I1++;?>
                <option value="<?php echo $TPL_I1?>" <?php if($TPL_I1== 1){?>selected<?php }?>><?php echo $TPL_V1["name"]?></option>
<?php }}?>
            </select>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-3 my-5 py-5 border-y border-slate-300">
        <div class="w-full md:w-40 pt-2 font-semibold">권한설정</div>
        <div class="flex-1">
<?php if(!empty($TPL_VAR["data"]['department'])){?>
            <div class="flex flex-col md:flex-row gap-3 mb-3">
                <div class="w-full md:w-20 pt-2 font-medium text-slate-600">권한설정</div>
                <div class="flex-1">
                    <select name="department" class="form-select w-full md:w-28">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['department'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                        <option value="<?php echo $TPL_V1["idx"]?>"><?php echo $TPL_V1["name"]?></option>
<?php }}?>
                    </select>
                </div>
            </div>
<?php }?>
            <div id="authArea">
            <!-- 권한설정 메뉴 영역 //-->
            </div>
        </div>
    </div>
</div>
</form>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-primary sbm_account_regist"><i data-lucide="plus" class="w-4 h-4"></i> 계정등록</button>
    <button class="btn btn-danger" onClick="location.href='/sys/service/service_account.php';"><i data-lucide="x" class="w-4 h-4"></i> 등록취소</button>
</div>
<script type="text/javascript">
    var accType = <?php echo $TPL_VAR["data"]['accType']?>;
</script>
<?php $this->print_("bottom",$TPL_SCP,1);?>