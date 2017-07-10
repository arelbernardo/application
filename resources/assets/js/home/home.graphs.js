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
            var myDoughnutChart = new Chart(elemOne, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [10, 20, 30],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FF9F40']
                    }],
                    labels: ['Red', 'Blue', 'Orange']
                },
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }

            });
        };

        var expenseTwo = function () {
            var myDoughnutChart = new Chart(elemTwo, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [14, 50, 20],
                        backgroundColor: [ '#36A2EB', '#FF9F40', '#FF6384']
                    }],
                    labels: ['Blue', 'Orange', 'Red']
                },
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }

            });
        };

        init();
        return {};
    };
    
    return HomeGraphs;
})($);