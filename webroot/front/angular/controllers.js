


var app=angular.module('SampleApp.controllers', ['ngRoute', 'ngCookies']);

app.config(function($locationProvider){
	$locationProvider.html5Mode(true);
});

app.controller('testController', function($scope, $http, $cookies, $cookieStore) {

	//vars


	if ($cookies.get('cart_items') !== undefined) {
		$scope.cart_items = JSON.parse($cookies.get('cart_items'));
		$scope.cart_items_count = $scope.cart_items.length;
	} else {
		$scope.cart_items_count = 0;
	}

// 	angular.forEach($scope.cart_items, function(value, key){
//      console.log(key + ': ' + value);
// });



	//linking urls

	//product listings

	 $http.get("/api/viewToCart")
	 .then(function(response) {
	 	$scope.itemis=response.data;
	 });


	 //cart views

	 $http.get("/api/images/")
	 .then(function(response) {
	 	$scope.items=response.data;
	 });

	 //controllers for ngclick

	 $scope.checkout=function(){
	 	location.href="/checkout";
	 }




	 // $http.get("/api/viewToCart")
	 // .then(function(response) {
	 // 	$scope.itemsCart=response.data;
	 // });

	//adding to cart


	$scope.invoice = {
		

		items: [{
			qty: 0,
			description: 'item',
			cost: 9.95

		}]


	};

	$scope.addItem = function(item_id) {
		// Check if Cart Cookie exists
		if ($cookies.get('cart_items') !== undefined) {
			// Get and Convert Cookie to Object
			 cart = JSON.parse($cookies.get('cart_items'));


			// Check if item_id not exists
			if(cart.indexOf(item_id) == -1) {
			  cart.push(item_id);
			}

			// Save to Cookie
			$cookies.put('cart_items', JSON.stringify(cart));
		} else {
			// Cookie Template
			var cart = [item_id]

			// Save and covert cookie to string
			$cookies.put('cart_items', JSON.stringify(cart));
		}

		// Update cart
		$scope.cart_items_count = cart.length;

		console.log(JSON.parse($cookies.get('cart_items')));
	},


	$scope.removeItem = function(index) {
		$scope.invoice.items.splice(index, 1);
	},

	$scope.total = function() {
		var total = 0;
		angular.forEach($scope.invoice.items, function(item) {
			total += item.qty * item.cost;
		})

		return total;
	},

	$scope.totalqty = function() {
		var totalqty = 0;
		angular.forEach($scope.invoice.items, function(item) {
			totalqty += item.qty;
		})

		return totalqty;

	}

});


app.controller('ItemDetailsController',['$location','$scope','$http', function($location,$scope,$http) {

	var ItemDetail = {};

	ItemDetail.init = function() {
		// Init functions / source

		ItemDetail.parameter();
	};

	ItemDetail.parameter=function(){
		var item_id=$location.search().item_id;
		ItemDetail.getDetails(item_id);
	}

	ItemDetail.getDetails=function(item_id){
		$http.get('/clothing/fetchDetails',{
			headers:{'Content-Type':'application/x-www-form-urlencoded'},
			params: {item_id:item_id}
		}).then(function(response){
			$scope.details=response.data;
			console.log($scope.details);
		});
	};

	ItemDetail.init();

	// scope Vars to view
	$scope.var = "";

	// scope function to view
	$scope.func = function(){

	};

}]);

app.controller('cartController',function($scope,$http){


});


