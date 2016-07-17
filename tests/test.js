;(function($) {
    $(function(){
        $('a[href$=".pdf"],a.external-link').on('click',function(e){
            e.preventDefault();
            window.open($(this).attr("href"));
        });
        $('a.noLink, a[href="GOTOLINK"]').on('click',function(e){
            e.preventDefault();
        });


        $('.description .btn').each(function(i,el){

            $(this).on('click',function(e){
                e.preventDefault();

                var
                    rel = $(this).data('rel'),
                    section = $(this).parent().parent().parent();


                if(!$('.'+rel).hasClass('active')) {
                    $('.description .btn').removeClass('active');
                    $(this).addClass('active');
                    section.find('.main').removeClass('active');
                    $('.'+rel).addClass('active');
                } else {
                    $(this).removeClass('active');
                    $('.'+rel).removeClass('active');
                }
            });
        });
    });
})(jQuery);
