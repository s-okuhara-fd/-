
//登録状況


'use strict';{
  const open = document.getElementById('statusopen');
  // const close = document.getElementById('statusclose');
  const modal = document.getElementById('modal');
  const mask = document.getElementById('mask');

  open.addEventListener('click', function () {
    modal.classList.remove('hidden');
    mask.classList.remove('hidden');
  });
  // close.addEventListener('click', function () {
  //   modal.classList.add('hidden');
  //   mask.classList.add('hidden');
  // });
  mask.addEventListener('click', function () {
    modal.classList.add('hidden');
    mask.classList.add('hidden');
  });
}


// $('#kousinbtn').on('submit', function(){
//     // idを取得
//     var title = $('#kousinbtn').val();
//     //ajax処理
//     $.post('_ajax.php',{
//       title: status,
//       mode: 'create',
//       token: $('#token').val()
//     },function(res){
//     /*3の処理*/
//     });
//   });
//
//
//   function(res){
//       //liを追加 index.phpのテンプレ―を複製
//       var $li = $('kousinbtn').clone();
//       $li
//       .attr('id','todo_' + res.id)
//       .data('id',res.id)
//       .find('.company_status').text(title);
//       $('#todos').prepend($li.fadeIn());
//       $('#new_todo').val('').focus(); //空にしてfocusを当てて連続で入力可能に
//    }
