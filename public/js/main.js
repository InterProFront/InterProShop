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