

$(document).ready(function(){
    $('.list-qty').each(function(e, selector) {

        var parent = $(selector);

        if (   parent.find('.number-product').val() != 1  ) {
            parent.find('.minus-product').attr('disabled', false);
        }
        
    });
    /*
    var qte     =$('#qty').val();
    var moins   =$('#moins');
    var plus    =$('#plus');
    //décrémenter la quantité
    moins.on('click',function(){
        if (qte <= 1){
            $('#moins').addClass('disabled');
        }
            $('#qty').val(qte-=1);
    });
    //incrémenter la quantité
    plus.on('click',function(){
        if(qte>=1){
            $('#moins').removeClass('disabled');
        }
        qte=parseInt(qte);
        $('#qty').val(qte+=1);
    });

    */

});



