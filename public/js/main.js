$(document).ready(function(){
    $('.discuss-project').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    }).on('click', function(){
        ga('send', 'event', 'discuss-project', 'click', 'Discuss the project');
    });

    $('.discuss-project-type').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
        
    }).on('click',function(){
        $('.popup-input[data-name="discuss_service"]').val($(this).closest('.tarif').find('.tarif__name').text());

        if($(this).closest('.tarif').find('.tarif__name').text() == 'Базовый'){

            ga('send', 'event', 'discuss-project-type', 'click', 'Discuss the project : Basic');

        }else if($(this).closest('.tarif').find('.tarif__name').text() == 'Расширенный'){

            ga('send', 'event', 'discuss-project-type', 'click', 'Discuss the project : Extended');

        }else if($(this).closest('.tarif').find('.tarif__name').text() == 'Гипермаркет'){

            ga('send', 'event', 'discuss-project-type', 'click', 'Discuss the project : Hypermarket');

        }
    });

    $('.thank').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });
});