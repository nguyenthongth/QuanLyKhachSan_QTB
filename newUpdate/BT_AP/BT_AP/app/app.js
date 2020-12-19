var myApp = angular.module('MVC', ['ui.router', 'ui.bootstrap']);

myApp.config(function ($stateProvider, $locationProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/');
    $stateProvider
            .state('/', {
                url: '/',
                templateUrl: 'templates/Hoso.php',
                controller: 'sinhvien_controler',
                controllerAs: "std_ctrl",
              
                resolve: {
                    'title': ['$rootScope', function ($rootScope) {
                            $rootScope.title = "Kết hợp Angular với PHP trên mô hình MVC";
                        }]
                }
            })
            
    $locationProvider.html5Mode({
        enabled: true,
        requireBase: false
    });




});

