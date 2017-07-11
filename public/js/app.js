var HomeGraphs = (function($){
    var HomeGraphs = function () {

        var elemOne = 'expense-one';
        var elemTwo = 'expense-two';

        var init = function () {
            //todo:
            expenseOne();
            expenseTwo();
        };
        
        var expenseOne = function () {
            new Chart(elemOne, {
                type: 'doughnut',
                data: {
                    labels: ['Social', 'Personal', 'Personal'],
                    datasets: [{
                        data: [10, 20, 30],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FF9F40']
                    }]
                },
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }

            });
        };

        var expenseTwo = function () {
            new Chart(elemTwo, {
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
    
    return HomeGraphs;
})($);