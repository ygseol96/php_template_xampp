// 스코프 제한을 위한 즉시 실행 함수 사용
(function() {
    // 모달 오픈
    if (typeof modalOpen01 === 'undefined') {
        modalOpen01 = (item)=>{
            const modal = document.querySelector(`#${item}`);
            modal.classList.add('show','overflow-y-auto');
            modal.style.marginTop = "0";
            modal.style.marginLeft = "0";
            modal.style.paddingLeft = "0";
            modal.style.zIndex = "10000";
        }
    }

    // 모달 오픈02 기존보다 상위
    if (typeof modalOpen02 === 'undefined') {
        modalOpen02 = (item)=>{
            const modal = document.querySelector(`#${item}`);
            modal.classList.add('show','overflow-y-auto');
            modal.style.marginTop = "0";
            modal.style.marginLeft = "0";
            modal.style.paddingLeft = "0";
            modal.style.zIndex = "10001";
        }
    }

    // 모달 닫기
    if (typeof closeModal === 'undefined') {
        closeModal = (item)=>{
            const modal = document.querySelector(`#${item}`);
            modal.classList.remove('show','overflow-y-auto');
            modal.style.marginTop = "-10000px";
            modal.style.marginLeft = "-10000px";
            modal.style.paddingLeft = "0";
            modal.style.zIndex = "0";
        }
    }
})();


// 톰셀렉트
// $(".tom-select").each(function () {
//     new TomSelect(this,
//         {
//             plugins: [ 'remove_button' ],
//             persist: false,
//             create: true,
//             onInitialize: function() {
//                 if($(this.control.children[0]).hasClass('item')) {
//                     $(this.control.children[0]).addClass('select-all')
//                 }
//             },
//             onItemAdd : function (value, $element) {
//                 if(value == 'all') {
//                     console.log($element);
//                     console.log($($element).className)
//                     $($element).addClass('select-all');
//                 }
//                 console.log(this.items.length);
//                 if(this.items.length > 1 && this.items.includes('all')) {
//                     this.removeItem('all');
//                     this.removeOption('all');
//                 }
//             },
//             onItemRemove : function (value){
//                 if(this.items.length == 0) {
//                     this.addOption({value: 'all', text: '전체'});
//                     this.addItem('all');
    
//                 }
//             }
//         })
// });



