
function house_Ajax(data, order, page = 1) {

  data = data.filter((type, num) => {
    if (type['taxonomy'] != 'cityChildren') {
      return type;
    }
  });

  jQuery.ajax({
    url: themeurl + '/inc/requireFile/ajax.php',
    type: 'POST',
    data: {
      type: 'data_filter',
      datas: data,
      orderDate: order,
      pages: page,
      lang_query: langs
    },
    dataType: 'html',
    success: function (response) {
      getDOMElem('.house-lists-info').innerHTML = response;
      $dataNum = $('.house-info-block').attr('data-num');
      if (!$dataNum) {
        $('.house-num .house-num-all').text('0');
        $('#pagedHouse').css('visibility', 'hidden');
        return;
      }
      $('.house-num .house-num-all').text($dataNum);
      $('#pagedHouse').attr('data-num', $dataNum);

      if (getDOMElem('#pagedHouse')) {
        if ($dataNum <= 5) {
          $('#pagedHouse').css('visibility', 'hidden');
          return;
        }
        $('#pagedHouse').css('visibility', 'visible');

        $('#pagedHouse').jqPaginator({
          totalPages: Math.ceil($dataNum / 5),
          visiblePages: 5,
          currentPage: page,
          first: '<li class="first page-item"><a href="javascript:void(0);" class="page-link"> &lt;&lt; <\/a><\/li>',
          prev: '<li class="prev page-item"><a href="javascript:void(0);" class="page-link"> &lt; <\/a><\/li>',
          next: '<li class="next page-item"><a href="javascript:void(0);" class="page-link"> &gt; <\/a><\/li>',
          next: '<li class="next page-item"><a href="javascript:void(0);" class="page-link"> &gt; <\/a><\/li>',
          last: '<li class="last page-item"><a href="javascript:void(0);" class="page-link"> &gt;&gt; <\/a><\/li>',
          page: '<li class="page page-item"><a href="javascript:void(0);" class="page-link"> {{page}} <\/a><\/li>',
          onPageChange: function (num, type) {
            if (type !== 'change') return;
            house_Ajax(house_config.filterDateArray, house_config.order, num);
          }
        });
      }

    },
    error: function (err) {
      console.log(err);
    }
  });
}

function cityIndex_Ajax(datas) {
  console.log(datas);
  jQuery.ajax({
    url: themeurl + '/inc/requireFile/ajax.php',
    type: 'POST',
    data: {
      type: 'index_citys',
      datas: datas,
      lang_query: langs
    },
    dataType: 'html',
    success: function (response) {
      getDOMElem('.house-block-list').innerHTML = response;
    }
  });
}

function cityChildren_Ajax(datas, elem) {
  console.log(datas);
  jQuery.ajax({
    url: themeurl + '/inc/requireFile/ajax.php',
    type: 'POST',
    data: {
      type: 'citys',
      datas: datas,
      lang_query: langs
    },
    dataType: 'html',
    success: function (response) {
      jQuery('.city-children li').not('li:first-child').replaceWith('');
      jQuery(response).insertAfter(elem);
    }
  });
}


function page_news_paged(num = 1, type = 'post') {
  jQuery.ajax({
    url: themeurl + '/inc/requireFile/ajax.php',
    type: 'GET',
    data: {
      type: 'post_paged',
      pages: num,
      postType: type,
      lang_query: langs
    },
    dataType: 'html',
    success: function (response) {
      getDOMElem('.page-news-info').innerHTML = response;
    },
    beforeSend: function() {
      console.log('正在请求');
    },
    complete: function() {
      console.log('请求完成');
    } 
  });
}



function house_search_keyword() {
  if(!house_config.oGetVars.housekeyword) return;
  jQuery.ajax({
    url: themeurl + '/inc/requireFile/ajax.php',
    type: 'GET',
    data: {
      type: 'house_keyword',
      s: house_config.oGetVars.housekeyword,
      lang_query: langs
    },
    dataType: 'html',
    success: function (response) {
      getDOMElem('.house-lists-info').innerHTML = response;
      $dataNum = $('.house-info-block').attr('data-num');
      if (!$dataNum) {
        $('.house-num .house-num-all').text('0');
        $('#pagedHouse').css('visibility', 'hidden');
        return;
      }
      $('.house-num .house-num-all').text($dataNum);
      $('#pagedHouse').attr('data-num', $dataNum);

      if (getDOMElem('#pagedHouse')) {
        if ($dataNum <= 5) {
          $('#pagedHouse').css('visibility', 'hidden');
          return;
        }
        $('#pagedHouse').css('visibility', 'visible');

        $('#pagedHouse').jqPaginator({
          totalPages: Math.ceil($dataNum / 5),
          visiblePages: 5,
          currentPage: page,
          first: '<li class="first page-item"><a href="javascript:void(0);" class="page-link"> &lt;&lt; <\/a><\/li>',
          prev: '<li class="prev page-item"><a href="javascript:void(0);" class="page-link"> &lt; <\/a><\/li>',
          next: '<li class="next page-item"><a href="javascript:void(0);" class="page-link"> &gt; <\/a><\/li>',
          next: '<li class="next page-item"><a href="javascript:void(0);" class="page-link"> &gt; <\/a><\/li>',
          last: '<li class="last page-item"><a href="javascript:void(0);" class="page-link"> &gt;&gt; <\/a><\/li>',
          page: '<li class="page page-item"><a href="javascript:void(0);" class="page-link"> {{page}} <\/a><\/li>',
          onPageChange: function (num, type) {
            if (type !== 'change') return;
            house_Ajax(house_config.filterDateArray, house_config.order, num);
          }
        });
      }
    }
  });
}