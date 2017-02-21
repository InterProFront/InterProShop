$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.thank').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });

    // Проверка почты на соответствие маске *@*.*
    function isEmail( mail ){
        regex = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;
        return !regex.test(mail);
    }


    // Очистка формы
    function clearFields(id){
        $('#'+id+' .popup-input').each(function(){
            $(this).val('').removeClass('error');
            $('.status-bar').removeClass('show');
        });
    }

    // Проверка полей формы на отсутствие пустых полей
    function  fieldsCheck( selector ){
        var error = false;
        $(selector).each(function () {
            $this = $(this);


            if ( !( $this.val() != '') ){
                error = true;
                $this.addClass('error');
            }
            if ( $this.data('name') == 'email' || $this.data('name') == 'ask_mail' ){
                if (isEmail($this.val())){
                    $this.addClass('error');
                    error = true;
                }
            }
        });
        return error;
    }

    // Сбор данных с формы и формирование объекта
    function addFields( selector, object ){

        $(selector).each(function () {
            $this = $(this);

            object['fields'][$this.data('name')] = $this.val();
        });
    }
    var active = true;
    $('.send-form').on('click',function() {
        if(active){
            unical = $(this).closest('.white-popup').attr('id');
            active = false;
            var $this = $(this);
            var dataobj = {};

            dataobj['form'] = $(this).data('form');
            dataobj['fields'] = {};


            var selector = '#'+unical+' .popup-input';
            var validForm  = fieldsCheck( selector );

            if (!validForm){
                addFields(selector, dataobj);

                if(dataobj['fields']['discuss_service'] == 'Базовый'){

                    ga('send', 'event', 'discuss-project-type', 'click', 'Discuss the project : Basic');

                }else if(dataobj['fields']['discuss_service'] == 'Расширенный'){

                    ga('send', 'event', 'discuss-project-type', 'click', 'Discuss the project : Extended');

                }else if(dataobj['fields']['discuss_service'] == 'Гипермаркет'){

                    ga('send', 'event', 'discuss-project-type', 'click', 'Discuss the project : Hypermarket');

                }

                var deferred = $.ajax(
                    {
                        type: 'POST',
                        url: '/feedback/mail',
                        dataType: 'json',
                        data: dataobj
                    }
                );

                $this.addClass('load');

                deferred.success(function(data){
                    if(!data.error){
                        $('.thank').click();
                        active = true;
                        clearFields(unical);
                        $this.removeClass('load');
                    }else{
                        $this.removeClass('load');
                        active = true;
                    }
                });
                deferred.error(function(data){
                    console.log(data);
                    $this.removeClass('load');
                });

            }else{
                active = true;
                $('#'+unical+' .status-bar').addClass('show');
            }


        }

    });
});