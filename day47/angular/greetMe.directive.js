var module = angular.module ('myApp');
module.directive('greetMe', function(){
    return{
        template: "<h1>Hello, {{name}}</h1>"
    };
});
