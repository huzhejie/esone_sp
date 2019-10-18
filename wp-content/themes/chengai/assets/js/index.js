const house_config = {
  filterDateArray: [],
  filter_data: [],
  order: [],
  oGetVars: {},
  paged: 1,
  windowWid: '',
  cityLeft: 0.65,
}

window.onresize = function() {
  
}

;(function getDocumentWindowSize() {
  house_config.windowWid= document.body.offsetWidth;

  if(house_config.windowWid <= 1366) {
    house_config.cityLeft = 0.60;
    return;
  }
})();

window.onload = function () {

  let cityChildren = getDOMElem('.city-children');
  let all_citys = getDOMElem('.all_house', cityChildren);
  let cityClass = getDOMElem('.city_list');
  let all_city = getDOMElem('li', cityClass, 'all');
  let houseul = getDOMElem('.ajax-query-field', 'all');
  let cityMenuLists = getDOMElem('.city-info-lists');
  let homeSearch = getDOMElem('#houseSearch');
  let cityDec = getDOMElem('.city-info-lists .city-info-target', 'all');
  let windowWidth = document.body.clientWidth / 2;

  addEvent(getDOMElem('.house-ca-lists'), 'click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    let lists = getDOMElem('.house-ca-lists li', 'all');
    if (e.target.nodeName.toLowerCase() === 'li') {
      if (e.target.className === 'active') {
        return;
      }
      for (let j = 0; j < lists.length; j++) {
        lists[j].className = '';
      }
      e.target.className = 'active';
      let data_value = e.target.getAttribute('data-value') || 0;

      let datas = {
        data: data_value
      }

      cityIndex_Ajax(datas);
    }
  });

  if (cityDec) {
    for (let i = 0, len = cityDec.length; i < len; i++) {
      addEvent(cityDec[i], 'mouseenter', function (e) {
        console.log(`.${e.target.dataset.target}`);
        getDOMElem(`.${e.target.dataset.target}`).classList.remove('order-change');
        var orientation = e.target.getBoundingClientRect();
        if (!(e.target.dataset.target)) return;
        let info = `.${e.target.dataset.target}`;
        if (orientation.left > windowWidth) {
          getDOMElem(`.${e.target.dataset.target}`).style.left = (orientation.left * house_config.cityLeft) + 'px';
          getDOMElem(`.${e.target.dataset.target}`).classList.add('order-change');
        } else {
          getDOMElem(`.${e.target.dataset.target}`).style.left = orientation.left + 'px';
        }
        getDOMElem(`.${e.target.dataset.target}`).classList.add('city-dec-show');
      });

      addEvent(cityDec[i], 'mouseleave', function (e) {
        if (!(e.target.dataset.target)) return;
        getDOMElem(`.${e.target.dataset.target}`).classList.remove('city-dec-show');
      });
    }
  }

  function cityPostID(elem) {
    addEvent(elem, 'click', function (e) {
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

        cityChildren_Ajax(datas, all_citys);
        return e.target.parentElement.getAttribute('data-type');
      }
    });

    for (let i = 0, len = all_city.length; i < len; i++) {

      if (!house_config.oGetVars.value) return;
      if (all_city[i].dataset.value !== house_config.oGetVars.value) continue;
      all_city[0].classList.remove('active');

      if (all_city[i].dataset.value === house_config.oGetVars.value) {
        all_city[i].className = 'active';
        let data_value = house_config.oGetVars.value || 0;

        let datas = {
          parentID: elem.getAttribute('data-type'),
          abc: data_value
        }
        cityChildren_Ajax(datas, all_citys);
        objFilter({
          taxonomy: house_config.oGetVars.type,
          terms: house_config.oGetVars.value,
        });
        house_Ajax(house_config.filterDateArray, house_config.order, 1);
        return;
      }
    }

  }

  cityPostID(cityClass);

  if (houseul) {
    for (let i = 0; i < houseul.length; i++) {
      addEvent(houseul[i], 'click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        let lists = houseul[i].querySelectorAll('li');
        if (e.target.nodeName.toLowerCase() === 'li') {
          for (let j = 0; j < lists.length; j++) {
            lists[j].className = '';
          }
          e.target.className = 'active';
          let getdatavalue = e.target.getAttribute('data-value') && e.target.getAttribute('data-value').split(',');
          objFilter({
            taxonomy: houseul[i].getAttribute('data-type'),
            terms: getdatavalue,
          });
          house_Ajax(house_config.filterDateArray, house_config.order, 1);

        }
      });
    }
  }

  function objFilter(obj) {
    for (let i = 0, len = house_config.filterDateArray.length; i < len; i++) {

      if (obj['terms'] && house_config.filterDateArray[i]['taxonomy'] === 'city') {

        if (obj['taxonomy'] === 'cityChildren') {
          if (Array.isArray(house_config.filterDateArray[i]['terms'])) {
            house_config.filterDateArray[i]['terms'] = [house_config.filterDateArray[i]['terms'][0], ...obj['terms']];
          }
        }
      }
      if (!obj['terms'] && house_config.filterDateArray[i]['taxonomy'] === 'city') {
        if (Array.isArray(house_config.filterDateArray[i]['terms'])) {
          if (house_config.filterDateArray[i]['terms'].length > 1) {
            house_config.filterDateArray[i]['terms'] = [house_config.filterDateArray[i]['terms'][0]];
          }
        }
      }
      if (house_config.filterDateArray[i]['taxonomy'] === obj['taxonomy']) {
        house_config.filterDateArray[i]['terms'] = obj['terms'];
        return house_config.filterDateArray;
      }
    }
    house_config.filterDateArray.push(obj);
  }

  function house_order() {
    let orderList = getDOMElem('.house-order-info', 'all');
    let orderBool = true;
    let orderDataObj = {};
    if (!orderList) return;
    for (let i = 0; i < orderList.length; i++) {
      addEvent(orderList[i], 'click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        let orderIcon = orderList[i].querySelector('.order-icon');
        if (orderBool) {
          orderIcon.querySelector('i').className += ' active';
          orderList[i].setAttribute('data-bool', 'true');
          orderList[i].setAttribute('data-order', 'ASC');
          orderIcon.querySelectorAll('i')[1].classList.remove("active");
          orderBool = false;
        } else {
          orderIcon.querySelector('i').classList.remove("active");
          orderList[i].setAttribute('data-bool', 'false');
          orderList[i].setAttribute('data-order', 'DESC');
          orderIcon.querySelectorAll('i')[1].className += ' active';
          orderBool = true;
        }
        orderDataObj = {
          name: orderList[i].dataset.type,
          orders: orderList[i].dataset.order
        };

        house_order_filter(orderDataObj);
        house_Ajax(house_config.filterDateArray, house_config.order, 1);

      });
    }
  }

  house_order();
  house_search_keyword();

  function house_order_filter(obj) {
    for (let i = 0, len = house_config.order.length; i < len; i++) {
      if (house_config.order[i].name === obj.name) {
        house_config.order[i].orders = obj.orders;
        return house_config.order;
      }
    }
    house_config.order.push(obj);
    return house_config.order;
  }

  index_search(homeSearch);
  
  index_city(cityMenuLists);

  // 分页部分
  if (getDOMElem('#pagedNews')) {
    if ($('#pagedHouse').attr('data-num') <= 10) { return; }
    $('#pagedNews').jqPaginator({
      totalPages: Math.ceil($('#pagedNews').attr('data-num') / 10),
      visiblePages: 10,
      currentPage: 1,
      first: '<li class="first page-item"><a href="javascript:void(0);" class="page-link"> &lt;&lt; <\/a><\/li>',
      prev: '<li class="prev page-item"><a href="javascript:void(0);" class="page-link"> &lt; <\/a><\/li>',
      next: '<li class="next page-item"><a href="javascript:void(0);" class="page-link"> &gt; <\/a><\/li>',
      next: '<li class="next page-item"><a href="javascript:void(0);" class="page-link"> &gt; <\/a><\/li>',
      last: '<li class="last page-item"><a href="javascript:void(0);" class="page-link"> &gt;&gt; <\/a><\/li>',
      page: '<li class="page page-item"><a href="javascript:void(0);" class="page-link"> {{page}} <\/a><\/li>',
      onPageChange: function (num, type) {
        if (type !== 'change') return;
        house_config.paged = num;
        let postType = getDOMElem('.post-activiries-dec').dataset.posttype;
        page_news_paged(house_config.paged, postType);
      }
    });
  }

  if (getDOMElem('#pagedHouse')) {
    if ($('#pagedHouse').attr('data-num') <= 5) { return; }
    $('#pagedHouse').jqPaginator({
      totalPages: Math.ceil($('#pagedHouse').attr('data-num') / 5),
      visiblePages: 5,
      currentPage: 1,
      first: '<li class="first page-item"><a href="javascript:void(0);" class="page-link"> &lt;&lt; <\/a><\/li>',
      prev: '<li class="prev page-item"><a href="javascript:void(0);" class="page-link"> &lt; <\/a><\/li>',
      next: '<li class="next page-item"><a href="javascript:void(0);" class="page-link"> &gt; <\/a><\/li>',
      next: '<li class="next page-item"><a href="javascript:void(0);" class="page-link"> &gt; <\/a><\/li>',
      last: '<li class="last page-item"><a href="javascript:void(0);" class="page-link"> &gt;&gt; <\/a><\/li>',
      page: '<li class="page page-item"><a href="javascript:void(0);" class="page-link"> {{page}} <\/a><\/li>',
      onPageChange: function (num, type) {
        if (type !== 'change') return;
        house_config.paged = num;
        house_Ajax(house_config.filterDateArray, house_config.order, house_config.paged);
      }
    });
  }
}

function index_city(elem) {
  if (!elem) return;
  let valueType = elem.dataset.type;
  let elemChilder = getDOMElem('.city-lists-js', elem, 'all');
  let ulrLink = null;
  // function urlLink(str) {
  //   return `${houselistUrl}&type=${valueType}&value=${elemChilder[i].dataset.value}`;
  // }
  if( langs !== 'zh-hans' ) return;
  if (houselistUrl.includes('page_id')) {
    for (let i = 0, len = elemChilder.length; i < len; i++) {
      elemChilder[i].href = `${houselistUrl}&type=${valueType}&value=${elemChilder[i].dataset.value}`;
    }
  }
  else {
    for (let i = 0, len = elemChilder.length; i < len; i++) {
      elemChilder[i].href = `${houselistUrl}?type=${valueType}&value=${elemChilder[i].dataset.value}`;
    }
  }

}

function index_search(elem) {
  addEvent(elem, 'input', function (e) {
    if (houselistUrl.includes('page_id')) {
      getDOMElem('.search-submit').href = `${houselistUrl}&housekeyword=${e.target.value}`;
    }
    else {
      getDOMElem('.search-submit').href = `${houselistUrl}?housekeyword=${e.target.value}`;
    }
  });
}

function getDOMElem(elemStr, parent, type) {
  type = type || '';
  parent = parent || document;
  if (parent.toString().toLocaleLowerCase() === 'all') {
    type = parent;
    parent = document;
  }
  if (!(type.toLocaleLowerCase() === 'all')) {
    type = '';
  };
  Object.prototype.toString.call(elemStr) === "[object String]" ? elemStr : elemStr + '';
  if (!parent.querySelector(elemStr)) {
    return;
  }
  if (type) {
    return parent.querySelectorAll(elemStr);
  } else {
    return parent.querySelector(elemStr);
  }
}

function addEvent(elem, even, fn) {
  if (!elem) return;
  Object.prototype.toString.call(even) === "[object String]" ? even : even + '';

  return elem.addEventListener(even, fn);
}

(function get_vars() {

  if (window.location.search.length <= 1) return;
  for (var aItKey, nKeyId = 0, aCouples = window.location.search.substr(1).split("&"); nKeyId < aCouples.length; nKeyId++) {
    aItKey = aCouples[nKeyId].split("=");
    house_config.oGetVars[decodeURIComponent(aItKey[0])] = aItKey.length > 1 ? decodeURIComponent(aItKey[1]) : "";
  }
})();
