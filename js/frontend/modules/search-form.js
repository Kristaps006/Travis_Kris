var init_search_form = function(){
    
    var search_form_button = $('.search-form button');

    search_form_button.on('click', function(){

        if($(this).hasClass('search-open') == false){

            var input_wrap = $(this).siblings('.search-input-container');

            input_wrap.animate({
                'max-width' : '199px'
            }, 100, function(){
                input_wrap.children('input').focus();
            });

            $(this).addClass('search-open');

            return false;

        }

        return true;

    });
    
};
