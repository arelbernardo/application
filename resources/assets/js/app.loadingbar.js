var AppGlobalListener = (function ($) {
    var AppGlobalListener = function () {        
        var init = function () {
            bindUIActions();
        };

        var bindUIActions = function () {
            $(document).ajaxSend(function () {
                $('#load-indicator').show();
            });
            $(document).ajaxStop(function () {
                $('#load-indicator').hide();
            });
        };

        init();
        return {};
    };
 
    return AppGlobalListener;

}
)($);