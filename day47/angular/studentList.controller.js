//retrieve the module
var module = angular.module('myApp');

//create a controller
module.controller('studentList', function($scope){


    $scope.total_students=16;
    $scope.unofficial_quitters=1;
    $scope.present_students=15;

    $scope.countMissingStudents = function (){
        return $scope.total_students -  $scope.present_students;
    }

//array of objects - each objects has its properties, three objects in the array
    $scope.students = [
        {
            'name': 'Jan',
        present: true
        },
        {
            'name': 'OG',
        present: true
        },
        {
            'name': 'Kristina',
        present: false
        },
    ];

});

