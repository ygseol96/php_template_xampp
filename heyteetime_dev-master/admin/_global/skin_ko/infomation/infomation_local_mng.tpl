{#head}
{#header}
<div class="intro-y flex flex-wrap gap-8 mt-5">
    <!-- 대륙 -->
    <div class="box md:min-h-[600px]">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">대륙</p>
            <button class="btn btn-primary p-1 rounded-full" onclick="modalOpen('continent-modal')"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2">
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div class="mb-2 px-2 border-r-2 border-primary border-opacity-50">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 border border-slate-200 bg-slate-50 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Continent01</span>
                        <p class="mt-1 font-bold text-base">Asia</p>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Continent02</span>
                        <p class="mt-1 font-bold text-base">Europe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 국가 -->
    <div class="box md:min-h-[600px]">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">국가</p>
            <button class="btn btn-primary p-1 rounded-full" onclick="modalOpen('continent-modal')"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2">
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div class="mb-2 px-2 border-r-2 border-primary border-opacity-50">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 border border-slate-200 bg-slate-50 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Country01</span>
                        <p class="mt-1 font-bold text-base">Japan</p>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Country02</span>
                        <p class="mt-1 font-bold text-base">Korea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 지역 -->
    <div class="box md:min-h-[600px]">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">지역</p>
            <button class="btn btn-primary p-1 rounded-full" onclick="modalOpen('continent-modal')"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2">
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div class="mb-2 px-2 border-r-2 border-primary border-opacity-50">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 border border-slate-200 bg-slate-50 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Province01</span>
                        <p class="mt-1 font-bold text-base">ALL</p>
                    </div>
                </div>
            </div>
            <div class="mb-2 px-2">
                <div class="flex items-center justify-between w-full p-3 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">Province02</span>
                        <p class="mt-1 font-bold text-base">Fukuoka</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 도시 -->
    <div class="box md:min-h-[600px]">
        <div class="flex items-center justify-between w-56 p-3 border-b border-slate-300">
            <p class="font-bold">도시</p>
            <button class="btn btn-primary p-1 rounded-full" onclick="modalOpen('continent-modal')"><i data-lucide="plus" class="w-4 h-4"></i></button>
        </div>
        <div class="py-2">
            <!-- 클릭시 border-r-2 border-primary border-opacity-50 클래스 추가-->
            <div class="mb-2 px-2 border-r-2 border-primary border-opacity-50">
                <!-- 클릭시 border border-slate-200 bg-slate-50 클래스 추가 -->
                <div class="flex items-center justify-between w-full p-3 border border-slate-200 bg-slate-50 rounded-lg">
                    <div>
                        <span class="text-xs text-slate-500">City01</span>
                        <p class="mt-1 font-bold text-base">Osaka</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- 대륙저장 -->
<div id="continent-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-bold text-base mr-auto">대륙 저장</h2>
                <button class="flex items-center gap-1" onclick="closeModal('continent-modal')"><i data-lucide="x" class="w-5 h-5"></i></button>
            </div>
            <div class="modal-body">
                <div class="flex items-start gap-2 mb-2">
                    <div class="flex items-center gap-2">
                        <div class="shrink-0 w-20 py-2 font-semibold">코드명</div>
                        <p>Continent_</p>
                    </div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="코드명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">한국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="지역명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">영어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="지역명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">일본어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="지역명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">스페인어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="지역명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex items-start gap-2 mb-2">
                    <div class="shrink-0 w-20 py-2 font-semibold">중국어</div>
                    <div class="flex-1">
                        <input type="text" class="form-control" placeholder="지역명을 입력해주세요.">
                    </div>
                </div>
                <div class="flex gap-2 justify-center mt-5">
                    <button class="px-6 btn btn-outline-danger" onclick="closeModal('continent-modal')">취소</button>
                    <button class="px-6 btn btn-primary">저장</button>
                </div>
            </div>
        </div>
    </div>
</div>
{#bottom}