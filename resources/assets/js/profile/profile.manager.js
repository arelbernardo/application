var ProfileManager = (function ($) {
    var ProfileManager = function (user) {

        //element declarations
        var $modal_add_expense = $('#modal_add-expense');
        var $button_add_expense = $("#btn_add-expense");
        

        var init = function () {
            new ProfileExpenseWidget();

            bindUIActions();
        };

        var bindUIActions = function () {
            $button_add_expense.click(function () {
                showAddExpenseForm();
            });
        };

        var showAddExpenseForm = function () {
            $modal_add_expense.load(user+"/addExpenseModal", function () {
                $modal_add_expense.modal();
            });
        };

        init();
        return {};
    };
    
    return ProfileManager;
})($);