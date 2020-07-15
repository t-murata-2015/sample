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

			$('#sample').append(insert);
		}
	});
});