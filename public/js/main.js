$(document).ready(function(){
    $('.discuss-project').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                $('.popup-input[data-name=ask_phone]').mask('+7 (000) 000-00-00')
            }
        },
        midClick: true
    }).on('click', function(){

    });

    $('.discuss-project-type').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                $('.popup-input[data-name=discuss_phone]').mask('+7 (000) 000-00-00')
            }
        },
        midClick: true

    }).on('click',function(){
        $('.popup-input[data-name="discuss_service"]').val($(this).closest('.tarif').find('.tarif__name').text());
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