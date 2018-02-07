$(document).ready(function(){
    
    $('.sid .li').on('click', function(){
        var val = $(this).text();
        $('.sid .li').each(function(){
            if(val == $(this).text()){
                $(this).addClass('active')
            }else {
                $(this).removeClass('active');
            }
        })
    });
});
