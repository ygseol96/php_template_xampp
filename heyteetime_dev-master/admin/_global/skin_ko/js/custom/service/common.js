$(function() {

    let data;
    $(document)

        // 적용언어 선택시 언어택 활성/비활성 처리
        .on('click', "[id^='lang_1_']", function(e) {
            var isTab = false;
            var firstTabIndex = null;
            $("[id^='lang_1_']").each(function() {
                var _index = $(this).data('index');

                if( $(this).is(':checked') ) {
                    isTab = true;
                    if (firstTabIndex === null) {
                        firstTabIndex = _index;
                    }
                    $("#lang-" + _index + "-tab").find('button').prop('disabled', false);
                } else {
                    $("#lang-" + _index + "-tab").find('button').prop('disabled', true);
                    $("#lang-" + _index + "-tab").find('button').removeClass('active');
                }
            });

            if (!isTab) {
                $('.nav-item > button').removeClass('active');
                $("[id^=lang-tab-]").removeClass('active');
            } else {
                // 활성화된 탭들을 모두 비활성화
                $('.nav-item > button').removeClass('active');
                $("[id^=lang-tab-]").removeClass('active');

                // 첫 번째 체크된 탭을 활성화
                $("#lang-" + firstTabIndex + "-tab").find('button').addClass('active');
                $("#lang-tab-" + firstTabIndex).addClass('active');
            }
        });

    // 페이지 로드 시 첫 번째 체크된 탭을 활성화
    $(document).ready(function() {
        var firstTabIndex = null;
        $("[id^='lang_1_']").each(function() {
            if ($(this).is(':checked')) {
                var _index = $(this).data('index');
                if (firstTabIndex === null) {
                    firstTabIndex = _index;
                }
                $("#lang-" + _index + "-tab").find('button').prop('disabled', false);
            }
        });

        if (firstTabIndex !== null) {
            // 활성화된 탭들을 모두 비활성화
            $('.nav-item > button').removeClass('active');
            $("[id^=lang-tab-]").removeClass('active');

            // 첫 번째 체크된 탭을 활성화
            $("#lang-" + firstTabIndex + "-tab").find('button').addClass('active');
            $("#lang-tab-" + firstTabIndex).addClass('active');
        }
    });
});
