$(function() {
  var h = $(window).height();
 
  $('#contents').css('display','none');
  $('#loader-bg ,#loader').height(h).css('display','block');
});
 
$(window).load(function () { //全ての読み込みが完了したら実行
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
  $('#contents').css('display', 'block');
});
 
//10秒たったら強制的にロード画面を非表示
$(function(){
  setTimeout('stopload()',10000);
});
 
function stopload(){
  $('#contents').css('display','block');
  $('#loader-bg').delay(1000).fadeOut(900);
  $('#loader').delay(600).fadeOut(300);
}



$(function() {
	$.ajax({
		url: 'rss.php',
		dataType: 'xml',
		success: function(data) {

            console.log(data);
            
            // 取得件数
			var getCount = 10;
			if ($('entry', data).length < getCount) {
                console.log(data.length);
				getCount = data.length;
			};

			var insert = '';
			insert += '<h3>';
			// リンク先の挿入
			insert += '<a href="' + $('feed', data).children('id').text() + '">';
			// タイトルの挿入
			insert += $('feed', data).children('subtitle').text();
			insert += '</a>';
			insert += '</h1>';

			insert += '<ul>';
			for (var i = 0; i < getCount; i++) {

				var thisItem = $('feed', data).children('entry').eq(i);
				insert += '<li>';

				// 日時の挿入
				insert += '<p class="published">';
				insert += thisItem.children('published').text();
				insert += '</p>';

				// タイトルの挿入
				insert += '<p class="title">';
				insert += thisItem.children('title').text();
				insert += '</p>';

				// 概要の挿入
				insert += '<p class="summary">';
				insert += thisItem.children('summary').text();
				insert += '</p>';
                
				// リンク先の挿入
				insert += '<a href="' + thisItem.children('id').text() + '">詳細はこちら</a>';

				insert += '</li>';
			};
			insert += '</ul>';

			$('#contents').append(insert);
		},
        error: function () {
            alert("読み込み失敗");
        }
	});
});