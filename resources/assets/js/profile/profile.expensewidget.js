var ProfileExpenseWidget = (function($) {
    var ProfileExpenseWidget = function (config) {
        
        //element declaration
        var $daily_remaining_budget = $('#chart_daily-remaining-budget');
        var $month_remaining_budget = $('#chart_month-remaining-budget');
        var $top_categories = $('#chart_top-categories');
        var $three_month_forecast = $('#chart_three-month-forecast');
        //methods
        var init = function () {
            bindUiActions();
            showDailyRemaining();
            showMonthRemaining();
            showTopCategories();
            showThreeMonthForecast();
        };

        var bindUiActions = function () {
            //todo
        };

        var showAddExpenseForm = function () {

        };

        var showDailyRemaining = function () {

        };

        var showMonthRemaining = function () {

        };

        var showTopCategories = function () {
            new Chart($top_categories, {
                type: 'doughnut',
                data: {
                    labels: ['Social', 'Personal', 'Personal'],
                    datasets: [{
                        data: [10, 20, 30],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FF9F40']
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom'
                    }
                }

            });
        };

        var showThreeMonthForecast = function () {
            new Chart($three_month_forecast, {
                type: 'line',
                data: {
                    labels: ['May', 'June', 'July'],
                    datasets: [{
                        data: [86, 114, 106],
                        label: "Total expenses per month",
                        borderColor: "#3e95cd",
                        fill: false
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom'
                    },
                    elements: {
                        line: {
                            tension: 0
                        }
                    }
                }
            });
        };

        init();
        return {};
    };
    return ProfileExpenseWidget;
})($);