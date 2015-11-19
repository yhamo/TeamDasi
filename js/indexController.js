var app = angular.module('myApp', ['ngRoute']);

    app.config(['$routeProvider', function($routeProvider) {
          $routeProvider.
            when('/calendar', {
              templateUrl: 'partials/calendar.php',
              controller: 'calendarController'
            }).
            when('/events', {
              templateUrl: 'partials/events.php',
              controller: 'eventsController'
            }).
            otherwise({
              redirectTo: '/calendar'
            });
    }]);

    app.controller('indexController', function($scope) {
        $scope.error = false;
    });
    
    app.controller('calendarController', function($scope) {
        $scope.error = false;
    });

    app.controller('eventsController', function($scope) {
        $scope.error = false;
    });

