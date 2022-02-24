;(function($) {
    $(function(){

        /*!
            -- @ Close alerts @ --
        */
        $(document).on('click', '[data-close-alert]', function(e){
            e.preventDefault();

            $(this).parent().fadeOut(500,function(){
                $(this).remove();
            });
        });


        /*!
            -- @ Modals @ --
        */
        /* Open modal */
        $(document).on('click', '.modal-open, [data-modal]',function(e){
            e.preventDefault();

            var
                modalId = $(this).data('target') || $(this).data('modal'),
                $modal = $('#'+modalId);

            if($modal.length) {

                $('html, body').addClass('opened-modal');
                $modal.addClass('active');

                if(typeof $modal.data('disabled-overlay') == 'undefined')
                    $('html,body').addClass('cursor-cross');

                // Callback
                $modal.trigger('cc.modal.open');
            } else {
                alert('ChuckCSS error : modal with attribute id="'+modalId+'" does not exist!');
            }
        });

        /* Close modal */
        $(document).on('click', '.modal:not([data-disabled-overlay]) .modal-overlay, .modal *[data-close-modal]', function(e) {
            e.preventDefault();

            var $modal = $(this).parents('.modal');

            if($modal.hasClass('active'))
                $modal.removeClass('active');

            if(!$('.modal.active').length)
                $('html,body').removeClass('opened-modal cursor-cross');

            // Callback
            $modal.trigger('cc.modal.close');
        });


        /* Modal callback */
        /*
            EXEMPLES ONLY
            -- Bind your own modal callback by changing the selector
        */
        $('#modal-id-small')
            .on('cc.modal.open', function(){
                // alert('modal small open');
                // Do something...
            })
            .on('cc.modal.close', function(){
                // alert('modal small close');
                // Do something...
            });

        // Modal callback
        $('#modal-id-large')
            .on('cc.modal.open', function(){
                // alert('modal large open');
                // Do something...
            })
            .on('cc.modal.close', function(){
                // alert('modal large closed');
                // Do something...
            });


    });
})(jQuery);
