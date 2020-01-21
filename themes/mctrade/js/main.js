$(window).scroll(function() {
    let elem = $('.how_we_work');
    let hT = elem.offset().top,
        hH = elem.outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();

    let items = $('.how_we_work .list .item');

    if (wS > (hT+hH-wH)){
        for(let i = 0; i < items.length; i++){
            setTimeout(function () {
                $(items[i]).addClass('item__hover');
            }, 500*i);
        }
    }
});

$(document).ready(function () {
    //open modals
   $('#open_modal_contacts').click(function () {
      $('.modal_contacts').css({'display': 'flex'});
   });
    $('.open_modal_buy').click(function () {
        /*var name = this.parentNode.getAttribute('value');
        $('.modal_buy .hidden').value = name;*/

        $('.modal_buy').css({'display': 'flex'});
    });
    $('.open_modal_detail').click(function () {
        $('.modal_detail').css({'display': 'flex'});
    });


    //close modal
   $('.modal_close').click(function () {
       $('.modal').css({'display': 'none'});
   });
});

function getDetail(id){
    $('.wrapper_detail .content').html('Контент загружается ...');
    $.ajax({
        url: '/wp-admin/admin-ajax.php',
        data: {
            id: id,
            action: 'details',
        },
        type: 'POST',
        context: this,
        success: function (response) {
            $('.wrapper_detail .content').html(response);
            console.log('Успешная отправка');
        },
        error: function () {
            $('.wrapper_detail .content').html('Ошибка загрузки контента, попробуйте еще раз.');
        }
    });
}

$(document).ready(function(){
    let startCount = true;
    $(window).scroll(function() {
        let elem = $('.statistics');
        let hT = elem.offset().top,
            hH = elem.outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();

        if (wS > (hT+hH-wH)){
            if(startCount){
                $('.benefits__number').spincrement({
                    thousandSeparator: "",
                    duration: 3000
                });
            }
            startCount = false;
        }
    });
});
