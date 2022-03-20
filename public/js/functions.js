// Set Coockie
function setCookie(name,value,days) {
    if (days)
    {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = '; expires='+date.toGMTString();
    }
    else var expires = '';
    document.cookie = name+'='+value+expires+'; path=/';
}


// Thousand Seperator eg. 12,455
function thousandSeperator(num) {
    divider = 1000000000;
    var check = 0;
    if(num >= divider){
        check = 1;
        num = num/divider;
        
        if(num >= 1){
            num = Math.round(num * 100) / 100 ; 
        }
    }
    
    num += '';
    x = num.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    res = x1 + x2;

    if(check == 1){
        res += ' Billion';
    }
    
    return res;
}


// Redirect with ID onClick
redirectWithID = function(e){
    e.preventDefault();
    var url = $(this).attr("href")+'/id_item/'+$('#hiddenitem2').val();
    window.location.href = url;    
}

jQuery(document).on('click','#anotherPrice',redirectWithID);