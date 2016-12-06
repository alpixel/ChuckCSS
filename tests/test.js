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


        var
            XSWidthMax = 359,
            SWidthMax = 767,
            MWidthMax = 989,
            LWidthMax = 1199,
            currentWindowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        $('#screen-infos').find('.screen-width').text(currentWindowWidth);

        if(currentWindowWidth > LWidthMax) {
            $('#screen-infos').find('.screen-media').text("XL");
        }
        else if(currentWindowWidth > MWidthMax && currentWindowWidth <= LWidthMax) {
            $('#screen-infos').find('.screen-media').text("L");
        }
        else if(currentWindowWidth > SWidthMax && currentWindowWidth <= MWidthMax) {
            $('#screen-infos').find('.screen-media').text("M");
        }
        else if(currentWindowWidth > XSWidthMax && currentWindowWidth <= SWidthMax) {
            $('#screen-infos').find('.screen-media').text("S");
        }
        else {
            $('#screen-infos').find('.screen-media').text("XS");
        }

        $(window).on('resize',function(e){

            var currentWindowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            $('#screen-infos').find('.screen-width').text(currentWindowWidth);

            if(currentWindowWidth > LWidthMax) {
                $('#screen-infos').find('.screen-media').text("XL");
            }
            else if(currentWindowWidth > MWidthMax && currentWindowWidth <= LWidthMax) {
                $('#screen-infos').find('.screen-media').text("L");
            }
            else if(currentWindowWidth > SWidthMax && currentWindowWidth <= MWidthMax) {
                $('#screen-infos').find('.screen-media').text("M");
            }
            else if(currentWindowWidth > XSWidthMax && currentWindowWidth <= SWidthMax) {
                $('#screen-infos').find('.screen-media').text("S");
            }
            else {
                $('#screen-infos').find('.screen-media').text("XS");
            }
        });
    });
})(jQuery);
