let loan_option = {
  payment: null,
  terms: null,
  price: $('#inlineFormInputGroupPrice').val(),
  currency: $('.currency-list option:selected').val(),
  rateInterest: $('#inlineFormInputGroupRofit').val()
}

function payment_amount({ payment, price } = loan_option) {
  return (price * payment) / 100;
}

function loan_calculate_interest({ rateInterest, terms, payment, price } = loan_option) {
  let principal = price - (price * payment) / 100;
  let months = terms * 12;
  rateInterest = ((rateInterest - 0) / 100) / 12;
  let monthlyInterest = (principal * ((rateInterest * Math.pow(1 + rateInterest, months)) / (Math.pow(1 + rateInterest, months) - 1))).toFixed(2)

  return {
    principal: principal,
    months: months,
    monthlyInterest: monthlyInterest,
  };
}

window.onload = function () {
  $(".down-payment-input").ionRangeSlider(
    {
      min: 0,
      max: 100,
      from: 30,
      postfix: '%',
      step: 5,
      onStart: function (data) {
        loan_option.payment = data.from;
      }
    }
  );
  $(".terms-loan-input").ionRangeSlider(
    {
      min: 1,
      max: 35,
      from: 5,
      postfix: '年',
      onStart: function (data) {
        loan_option.terms = data.from;
      }
    }
  );
  // 数据初始化
  $('.payment-amount-text').text(`${payment_amount()}${loan_option.currency}`);


  // 价格改变
  $('#inlineFormInputGroupPrice').on('change', function () {
    loan_option.price = $('#inlineFormInputGroupPrice').val();

    $('.payment-amount-text').text(`${payment_amount(loan_option)}${loan_option.currency}`);
  });

  // 货币改变
  $('.currency-list').on('change', function () {
    var $this = $(this);
    loan_option.currency = $this.val();
    $('.payment-amount-text').text(`${payment_amount(loan_option)}${loan_option.currency}`);
  });


  // 首付比例更改
  $(".down-payment-input").on('change', function () {
    var $this = $(this);

    loan_option.payment = $this.prop("value");
    $('.payment-amount-text').text(`${payment_amount(loan_option)}${loan_option.currency}`);
  });

  // 贷款期限更改
  $(".terms-loan-input").on('change', function () {
    var $this = $(this);

    loan_option.terms = $this.prop("value");
  });
  // 利率更改

  $('#inlineFormInputGroupRofit').on('change', function () {
    loan_option.rateInterest = $('#inlineFormInputGroupRofit').val();
  });

  $('')


  $('.calculate-btn').on('click', function () {
    let { principal, months, monthlyInterest } = loan_calculate_interest();

    $('.loan-rental-js').text(`${principal}${loan_option.currency}`);
    $('.repayment-months-js').text(`${months}`);
    $('.monthly-payments-js').text(`${monthlyInterest}${loan_option.currency}`);
    $('.gross-interest').text(`${monthlyInterest * months}${loan_option.currency}`);
    $('.loan-interest-js').text(`${principal + (monthlyInterest * months)}${loan_option.currency}`);
  });

  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });
}
