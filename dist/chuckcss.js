;(function($) {
    $(function(){

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
        $('.modal-open').on('click',function(e){
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
                e.preventDefault();

                if($(this).parents('.modal').hasClass('active'))
                    $(this).parents('.modal').removeClass('active');

                if(!$('.modal.active').length)
                    $('body').removeClass('opened-modal');
            });


    });
})(jQuery);
