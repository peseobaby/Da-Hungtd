//  Carousel 

$('#homestays').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive:{
        0:{
            items:1,
            nav:false,
            dots:false
        },
        770:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            dots:false
        }
    }
});

$('#news').owlCarousel({
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive:{
        0:{
            items:1,
            nav:false,
            dots:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:2,
            nav:false,
            dots:false
        },
        1100:{
            items:3,
            nav:false,
            dots:false
        }
    }
});



// DatimePicker

$(function() {

  $('input[name="daterange"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
      console.log($(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY')))
  });

  $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});

// Range Slider

$("#rangePrice").ionRangeSlider({
    type: "double",
    min: 1000,
    max: 2000,
    from: 1200,
    to: 1800,
    hide_min_max: true,
    hide_from_to: false,
    grid: false
});

var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value + 'đ');
    });

    range.on('input', function(){
      $(this).next(value).html(this.value + ' đ');
    });
  });
};

rangeSlider();


window.onresize = displayWindowSize;
window.onload = displayWindowSize;

function displayWindowSize() {
  myWidth = window.innerWidth;
  if (myWidth >= 1000) {
    $("input[type=checkbox]#mobileNav").prop('checked', false);
  }
}


$(function() {
  $('input[name="checkday"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 2017,
    timePicker: true,
    maxYear: parseInt(moment().format('YYYY'),10),
    startDate: moment().startOf('month'),
    endDate: moment().startOf('month').add(32, 'day'),
    locale: {
      format: 'M/DD/YYYY'
    }
  });
});

