angular.module('myApp', ['ngRoute']);


angular.module('myApp').directive('navigation', function(){
    return {
        templateUrl:'navigation.html'
    };
});


//below should be in a separate file

angular.module('myApp').component('greetUser', {

    template: 'Hello, {{ $ctrl.name }}!',

    controller: function () {
        this.name = 'Jan';
    }

  });