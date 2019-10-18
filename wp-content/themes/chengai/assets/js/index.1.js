
window.onload = function () {

  let cityChildren = document.querySelector('.city-children');
  let all_citys = cityChildren.querySelector('.all_house');
  let cityClass = document.querySelector('.city_list');
  let filterDateArray = [];
  let filter_data = [];
  let houseul = document.querySelectorAll('.ajax-query-field');
  let submitBth = document.querySelector('#filter_Btn');


  function cityPostID(elem) {
    elem.addEventListener('click', function (e) {
      if (e.target.nodeName.toLowerCase() == 'li') {

        let data_value = e.target.getAttribute('data-value') || 0;

        let datas = {
          parentID: e.target.parentElement.getAttribute('data-type'),
          abc: data_value
        }
        if (e.target.className === 'active') {
          return;
        } else {
          all_citys.className = 'active';
        }
        jQuery.ajax({
          url: 'http://localhost:8000/housePage/wp-content/themes/twentyseventeen/inc/requireFile/ajax.php',
          type: 'POST',
          data: {
            type: 'citys',
            datas: datas
          },
          dataType: 'html',
          success: function (response) {
            jQuery('.city-children li').not('li:first-child').replaceWith('');
            jQuery(response).insertAfter(all_citys);
          }
        });
        return e.target.parentElement.getAttribute('data-type');
      }
    });
  }

  cityPostID(cityClass);

  for (let i = 0; i < houseul.length; i++) {
    houseul[i].addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      let lists = houseul[i].querySelectorAll('li');
      if (e.target.nodeName.toLowerCase() === 'li') {
        for (let j = 0; j < lists.length; j++) {
          lists[j].className = '';
        }
        e.target.className = 'active';
      }
      let getdatavalue = e.target.getAttribute('data-value') && e.target.getAttribute('data-value').split(',')
      objFilter({
        taxonomy: houseul[i].getAttribute('data-type'),
        terms: getdatavalue,
      });
    });
  }

  function objFilter(obj) {
    // obj['terms'] = obj['terms'] - 0;
    for (let i = 0; i < filterDateArray.length; i++) {
      if (obj['terms'] && filterDateArray[i]['taxonomy'] === 'city') {
        if (obj['taxonomy'] === 'cityChildren') {
          if (Array.isArray(filterDateArray[i]['terms'])) {
            // filterDateArray[i]['terms'].pop();
            filterDateArray[i]['terms'] = [...filterDateArray[i]['terms'], ...obj['terms']];
            // }else {
            //   filterDateArray[i]['terms'] = [...filterDateArray[i]['terms'], obj['terms']];
          }
          console.log(filterDateArray[i]['terms']);
        }
      }
      if (filterDateArray[i]['taxonomy'] === obj['taxonomy']) {
        filterDateArray[i]['terms'] = obj['terms'];
        return;
      }
    }
    filterDateArray.push(obj);
  }

  submitBth.addEventListener('click', function (e) {
    e.stopPropagation();
    filterDateArray = filterDateArray.filter((type, num) => {
      if (type['taxonomy'] != 'cityChildren') {
        return type;
      }
    });
    jQuery.ajax({
      url: 'http://localhost:8000/housePage/wp-content/themes/twentyseventeen/inc/requireFile/ajax.php',
      type: 'POST',
      data: {
        type: 'data_filter',
        datas: filterDateArray,
        filter: filter_data
      },
      dataType: 'html',
      success: function (response) {
        mapproplist.innerHTML = response;
      },
      error: function (err) {
        console.log(err);
      }
    });
  });

}