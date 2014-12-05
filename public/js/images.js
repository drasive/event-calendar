$(function(){
    
    // Instantiate the jQuery plugin fancyBox
    $('.fancybox').fancybox({
        type:'image',
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        
        helpers : {
            title : {
                type : 'float'
            }
        }
    });
    
});
