;(function($) {

    /*
        @name : checkRadio
        @function : check or uncheck checkbox & radio inputs
        @params : no params
    */
    function checkRadio() {
        if($('input[type="radio"], input[type="checkbox"]').length) {
            $('input[type="radio"], input[type="checkbox"]').each(function(i,el){
                if($(this).is(':checked'))
                    $(this).parent().addClass('checked'); // add .checked class to <label>
                else
                    $(this).parent().removeClass('checked'); // remove .checked class to <label>
            });
        }
    }


    $(function(){
        /*!
            -- @ CHECK RADIO && CHECKBOX INPUTS @ --
        */
        if($('input[type="radio"], input[type="checkbox"]').length) {
            /* DOM ready : Check radio if already checked */
            checkRadio();

            $('input[type="radio"], input[type="checkbox"]').on('click',function(e){
                checkRadio();
            });
        }


        /*!
            -- @ Close alerts @ --
        */
        $('.alert .close').on('click',function(e){
            e.preventDefault();

            $(this).parent().fadeOut(500,function(){
                $(this).remove();
            });
        });


        /*!
            -- @ Modals @ --
        */
        /* Open modal */
        $('button.modal-open').on('click',function(e){
            e.preventDefault();

            var modal = $(this).data('target');

            if($('#'+modal).length) {
                $('body').addClass('opened-modal');
                $('#'+modal).addClass('active');
            } else {
                alert('ChuckCSS error : modal with attribute id="'+modal+'" is not defined!');
            }
        });
        /* Close modal */
        $('.modal:not([data-disabled-overlay])')
            .find('.modal-overlay')
            .add('.modal .modal-close')
            .on('click',function(e) {

                if($(this).parent().hasClass('active'))
                    $(this).parent().removeClass('active');

                if(!$('.modal.active').length)
                    $('body').removeClass('opened-modal');
            });


    });
})(jQuery);
