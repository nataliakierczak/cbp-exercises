module.controller('productDetail', function($scope, $http){
    //retrieve data from the server
    var controller=this;
$http.get('data.php').then(function(response){
    console.log(response.data);

//put the data from the response into the view
    $scope.product_name=response.data.product_name;
    $scope.description=response.data.description;

});
});