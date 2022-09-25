$(function() {


    function gup( name )
    {
        name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
        var regexS = "[\\?&]"+name+"=([^&#]*)";
        var regex = new RegExp( regexS );
        var results = regex.exec( window.location.href );
        if( results == null )
            return null;
        else
            return results[1];
    }

    var urldecode = function (str) {

        return decodeURIComponent((str + '')
            .replace(/%(?![\da-f]{2})/gi, function() {
                // PHP tolerates poorly formed escape sequences
                return '%25';
            })
            .replace(/\+/g, '%20'));
    }

    var redirect = urldecode(gup('r'));
    var track = gup('track');
    var lang = gup('lang');

    if(redirect){
        $('.link_out').attr('href',redirect);
    }


});