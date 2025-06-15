{#head}
{#header}
<div class="intro-y flex items-center justify-between mt-8">
    <h2 class="text-xl font-bold mr-auto">계정 등록</h2>
    <div class="flex items-center gap-1">
        <button class="btn btn-primary" data-tw-toggle="modal" data-tw-target="#department_add-modal">부서 추가</button>
    </div>
</div>

<!-- detail -->
{? !empty( data['department'] ) }
<div class="intro-y box p-5 mt-4">
    <ul id="tabList" class="nav nav-boxed-tabs flex-wrap gap-0.5 border-b-2 border-primary" role="tablist">
        {@ data['department'] }
        <li id="department-{(.index_ + 1)}-tab" data-tab="{(.index_ + 1)}" data-p_idx="{.idx}" class="nav-item" role="presentation">
            <button class="nav-link py-2 {? .index_ == 0 }active{/}" data-tw-toggle="pill" data-tw-target="#department-tab-{(.index_ + 1)}" type="button" role="tab" aria-controls="department-tab-{(.index_ + 1)}" aria-selected="true">{.name}</button>
        </li>
        {/}
    </ul>
    <div class="tab-content mt-5">
        {@ data['department'] }
        <div id="department-tab-{(.index_ + 1)}" class="tab-pane leading-relaxed {? .index_ == 0 }active{/}" role="tabpanel" aria-labelledby="department-{(.index_ + 1)}-tab">

            {@ data['gnb'] }
            <div class="flex flex-col md:flex-row items-center gap-3 mb-5">
                <div class="w-full md:w-20 font-medium text-slate-600">{..name}</div>
                <div class="flex-1 flex flex-wrap items-center gap-5">
                    {@ ..menu }
                    <div class="form-check">
                        <input id="account_{.idx}_{..index_}_{...index_}" {? data['auth'][.idx][...idx] }checked{/} class="form-check-input mTypeVal" type="checkbox" value="{...idx}">
                        <label class="form-check-label" for="account_{.idx}_{..index_}_{...index_}">{...name}</label>
                    </div>
                    {/}
                </div>
            </div>
            {/}
        </div>
        {/}
    </div>
</div>
{/}




<div class="intro-y flex w-full items-center justify-end gap-2 mt-4">
    <button type="button" class="btn btn-primary" id="sbm_department_auth"><i data-lucide="plus" class="w-4 h-4"></i> 부서저장</button>
    <button type="button" class="btn btn-danger" onClick="location.href='/sys/service/service_account.php';"><i data-lucide="x" class="w-4 h-4"></i> 저장취소</button>
</div>




<!-- 부서추가 -->
<div id="department_add-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <form name="department_add-modal-form" id="department_add-modal-form" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">부서 추가</h2>
                <button class="flex items-center gap-1" data-tw-dismiss="modal"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">부서명</div>
                    <div class="flex-1">
                        <input type="text" name="name" class="form-control required" placeholder="코드를 입력해주세요.">
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button type="button" class="px-6 btn btn-outline-danger" data-tw-dismiss="modal">취소</button>
                    <button type="button" class="px-6 btn btn-primary">저장</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
{#bottom}