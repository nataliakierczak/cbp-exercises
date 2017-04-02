//this is where configuration goes

angular.module('myApp').config(['$locationProvider' ,'$routeProvider',
    function config($locationProvider, $routeProvider) { // dependancy injection
        $locationProvider.hashPrefix('!');

        $routeProvider. // all routes are added on the $routeProvider object
        when('/', {
            template: '<h1>The homepage</h1>',
        }).
        when('/contact', {
            template: 'This is contact page'
        }).
        when('/product-list', {
            template: '<product-list></product-list>'
        }).
        when('/error404', {
            template: 'Error 404:page not found'
        }).// use this route when no others are a match

            //reditects to the page error404
        otherwise({
            template: 'Error 404:page not found'
        });
    }
]);