angular.module('SampleApp.controllers', []).
controller('testController', function($scope,$http) {

    $http.get("/api/sum")
    .then(function(response) {
        $scope.items=response.data;

    });


    $scope.items=[{
      item_name:'Hello World!',
      item_id:'2',
      item_description:'Hey!'
    }]
   
});

