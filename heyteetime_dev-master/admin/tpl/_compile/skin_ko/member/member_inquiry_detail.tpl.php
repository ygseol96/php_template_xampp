<?php /* Template_ 2.2.8 2024/06/18 16:00:51 C:\Users\코드아이디어\projects\heyteetime_dev\admin\_global\skin_ko\member\member_inquiry_detail.tpl 000008873 */ ?>
<?php $this->print_("head",$TPL_SCP,1);?>

<?php $this->print_("header",$TPL_SCP,1);?>

<div class="intro-y flex flex-wrap items-center justify-between gap-2">
    <div>
        <div class="flex items-center mt-4">
            <a href="/member/member_inquiry.php" class="flex items-center gap-1 text-primary">
                <i data-lucide="move-left" class="w-4 h-4 !stroke-2 text-primary"></i> 1:1문의 목록
            </a>
        </div>
        <div class="flex items-center mt-2">
            <h2 class="text-xl font-bold mr-auto">1:1문의 상세</h2>
        </div>
    </div>
    <div class="flex flex-wrap items-center gap-2 ml-auto">
        <button class="btn btn-primary submitInquiryResponse"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 답변등록</button>
        <button class="btn btn-danger" onclick="location.href='/member/member_inquiry.php'"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 등록취소</button>
    </div>
</div>

<!-- detail -->
<div class="intro-y box p-5 mt-4">
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">문의자</div>
        <div class="flex-1 flex flex-wrap items-center gap-2">
            <input type="text" class="form-control w-full md:w-40" value="<?php echo $TPL_VAR["data"]['data']['name_kr']?>" readonly>
            <input type="text" class="form-control w-full md:w-40" value="<?php echo $TPL_VAR["data"]['data']['hp_number']?>" readonly>
            <input type="text" class="form-control w-full md:w-40" value="<?php echo $TPL_VAR["data"]['data']['account']?>" readonly>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">문의구분</div>
        <div class="flex-1">
            <input type="text" class="form-control w-full md:w-52" value="<?php echo $TPL_VAR["data"]['data']['gubun_name']?>" readonly>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">문의제목</div>
        <div class="flex-1">
            <input type="text" class="form-control" value="<?php echo $TPL_VAR["data"]['data']['subject']?>" readonly>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">문의내용</div>
        <div class="flex-1">
            <textarea class="resize-none form-control h-40" readonly><?php echo $TPL_VAR["data"]['data']['content']?></textarea>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">첨부파일</div>
        <div class="flex-1">
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['inquiry_files'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                <button class="btn btn-outline-secondary" onclick="window.open('<?php echo $TPL_V1["up_name"]?>', '_blank');"><?php echo $TPL_V1["ori_name"].'.'.$TPL_V1["file_ext"]?></button>
<?php }}?>
        </div>
    </div>
</div>

<div class="intro-y box p-5 mt-4">
    <div class="flex flex-wrap flex-col md:flex-row gap-3 mb-3">
        <div class="flex flex-col md:flex-row items-center gap-3">
            <div class="w-full md:w-40 pt-1 font-semibold">답변상태</div>
            <input type="text" class="form-control w-full md:w-40" value="<?php echo $TPL_VAR["data"]['data']['status_name']?>" disabled>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-3">
            <div class="w-full md:w-32 pt-1 font-semibold">답변일시</div>
            <input type="text" class="form-control w-full md:w-40" value="<?php echo $TPL_VAR["data"]['data']['answer_date']?>" disabled>
        </div>
        <div class="flex flex-col md:flex-row items-center gap-3">
            <div class="w-full md:w-32 pt-1 font-semibold">답변자</div>
            <input type="text" class="form-control w-full md:w-40" id="adminName" value="<?php echo $TPL_VAR["data"]['data']['answer']?>" disabled>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">답변내용</div>
        <div class="flex-1">
            <textarea id="inquiryResponseContent" class="resize-none form-control h-40"><?php echo $TPL_VAR["data"]['data']['a_content']?></textarea>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-3">
        <div class="w-full md:w-40 pt-2 font-semibold">첨부파일</div>
        <div class="flex-1">
            <input type="file" class="pt-2">
            <br>
            <br>
<?php if(is_array($TPL_R1=$TPL_VAR["data"]['data']['answer_files'])&&!empty($TPL_R1)){foreach($TPL_R1 as $TPL_V1){?>
                <button class="btn btn-outline-secondary" onclick="window.open('<?php echo $TPL_V1["up_name"]?>', '_blank');"><?php echo $TPL_V1["ori_name"].'.'.$TPL_V1["file_ext"]?></button>
<?php }}?>
        </div>
    </div>
</div>

<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button class="btn btn-primary submitInquiryResponse"><i data-lucide="plus" class="w-4 h-4 mr-1"></i> 답변등록</button>
    <button class="btn btn-danger" onclick="location.href='/member/member_inquiry.php'"><i data-lucide="x" class="w-4 h-4 mr-1"></i> 등록취소</button>
</div>

<div id="submit_complete-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">답변 등록 완료</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="items-center gap-2 mb-2">
                    <div class="shrink-0  py-2 font-semibold">답변 등록이 완료되었습니다.</div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-primary">확인</button>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $this->print_("bottom",$TPL_SCP,1);?>

<script>
    $('.submitInquiryResponse').on('click', function () {

        if($("#inquiryResponseContent").val() === '') {
            $('#submit_error-modal .message').text('답변 내용을 작성해주세요.');
            modalOpen("submit_error-modal")
            return;
        }

        let data = new FormData();

        if($('input:file')[0].files.length) {
            if(!validateFile($('input:file')[0].files[0])) {
                return false;
            }
            data.append('file', $('input:file')[0].files[0]);
        }

        data.append('type', 'patchInquiryResponse');
        data.append('idx', <?php echo $TPL_VAR["data"]['data']['idx']?>);
        data.append('content', $('#inquiryResponseContent').val());

        $.ajax({
            url: '/member/ajax_member.php',
            method: 'POST',
            data: data,
            processData: false,
            contentType: false,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            },
            success: function (result) {
                console.log("success");
                console.log(result);
                if(result.status) {
                    modalOpen("submit_complete-modal")
                }
            },
            error: function (e) {
                console.log("error");
                console.log(e);
                if(e.status === 200) {
                    modalOpen("submit_complete-modal")
                } else {
                    $('#submit_error-modal .message').text(e.responseJSON.msg);
                    modalOpen("submit_error-modal")
                }
            }
        })
    })

    $("#submit_complete-modal .btn-primary").on('click', function () {
        location.reload();
    })

    // 파일 업로드
    function validateFile(file) {
        const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];

        if (!allowedTypes.includes(file.type)) {
            $('#submit_error-modal .message').text('파일 형식은 pdf, png, jpeg만 가능합니다.');
            modalOpen("submit_error-modal")
            return false;
        }

        return true;
    }
</script>