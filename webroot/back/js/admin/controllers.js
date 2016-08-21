var app = angular.module('admin.controllers', ['ngRoute', 'ngFileUpload']);

app.config(function($locationProvider) {
        $locationProvider.html5Mode(true);
    }); 

app.controller('BrandController', function($scope, $http) {
	// Private
	// JS ONLY
	var Brand = {};
	Brand.init = function() {
		Brand.list();
	};
	Brand.list = function() {
		$http.get("/admin/catalog/get_brands")
		    .then(function(response) {
		        $scope.brands = response.data;
		    });
	};
	Brand.add = function(name, prefix) {
		$http({
				url : "/admin/catalog/add_brand",
				method: "POST",
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			    transformRequest: function(obj) {
			        var str = [];
			        for(var p in obj)
			        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
			        return str.join("&");
			    },
				data : 	{brand_name : name, brand_prefix : prefix} // Data to be passed to API
			})
		    .then(function(response) {
		    	$('#modal-close').click();
		    	window.alert('New Brand Added!');
		    	// Clear the boxes
		    	$('#brand_name').val('');
		    	$('#brand_prefix').val(''); 
		        Brand.list();
		    });
	};
	Brand.init(); 
	// Public
	// Will be exposed to view
	$scope.add = function() {
		var name = $('#brand_name').val();
		var prefix = $('#brand_prefix').val(); 
		Brand.add(name, prefix);
	};
});

app.controller('CategoryController', function($scope, $http) {
	
	var Category= {};
	
	$scope.categories="";	
	$scope.parent_id=0;
	$scope.top_parent=0;
	Category.init = function() {
		Category.list();
		Category.parent();
	};
	Category.list = function() {
		$http.get("/admin/catalog/get_categories")
		    .then(function(response) {
		        $scope.categories = response.data;
		    });
	};	
	Category.parent= function() {
		$http.get("/admin/catalog/get_parents")
		    .then(function(response) {
		        $scope.parents = response.data;
		    });
	};
	Category.topGroup=function(categoryid) {
			$http.get("/admin/catalog/top_category",
			{
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				params : { top_parent : categoryid }
			}).then(function(response) {
				$scope.categories = response.data;
			})
	};
	Category.secondGroup=function(categoryid) {
			$http.get("/admin/catalog/second_category",
			{
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				params : { parent_id : categoryid }
			}).then(function(response) {
				$scope.secondGroups = response.data;
				$scope.categories = response.data;
			})
	};
	Category.thirdGroup=function(categoryid) {
			$http.get("/admin/catalog/second_category",
			{
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				params : { parent_id : categoryid }
			}).then(function(response) {
				$scope.categories = response.data;
			})
	};
	Category.secondCategory=function(categoryid) {
			$http.get("/admin/catalog/second_category",
			{
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				params : { parent_id : categoryid }
			}).then(function(response) {
				$scope.secondcategories = response.data;
			})
	};
	Category.add = function(name, parentId, topParent) {
		$http({
				url : "/admin/catalog/add_category",
				method: "POST",
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			    transformRequest: function(obj) {
			        var str = [];
			        for(var p in obj)
			        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
			        return str.join("&");
			    },
				data : 	{category_name : name, parent_id : parentId, top_parent : topParent} // Data to be passed to API
			})
		    .then(function(response) {
		    	$('#modal-close').click();
		    	// Clear the boxes
		    	$('#name').val(''); 
		    	$('#category').val('');
		    	$('#category2').val('');
		    	Category.list();
		 		window.alert('New Category Added!');
		    });
	};
	Category.init();
// GROUP CATEGORY
	$scope.firstGroup = function(category) {
		var firstCateg = $scope.selectedGroup1.category_id;
		Category.secondGroup(firstCateg);
		Category.topGroup(firstCateg);
	}
	$scope.secondGroup = function(category) {
		var firstCateg = $scope.selectedGroup2.category_id;
		Category.thirdGroup(firstCateg);
	}
//ADD CATEGORY MODAL
	$scope.getparent = function(category) {
		var firstCateg = $scope.firstSelected.category_id;
		Category.secondCategory(firstCateg);
		$scope.parent_id = firstCateg;
		$scope.top_parent = firstCateg;
	}
	$scope.secondparent = function(category) {
		var secondCateg = $scope.secondSelected.category_id;
		$scope.parent_id = secondCateg;
	}
	$scope.addCategory = function() {
		var parent_id = $scope.parent_id;
		var category_name = $('#name').val();
		var top_parent = $scope.top_parent;
		Category.add(category_name, parent_id, top_parent);
	};
	$scope.display = function () {
		$('#group1').val('');
		$scope.secondGroups="";
		Category.list();
	}
	
});

app.controller('AddItemController', function($scope, $http) {
	var AddItem = {};
	
	AddItem.init = function() {

		AddItem.brandList();
		AddItem.categoryList();
	};

	AddItem.brandList = function() {
		$http.get("/admin/catalog/get_brands")
		    .then(function(response) {
		        $scope.brands = response.data;
		    });
	};
	AddItem.categoryList = function() {
		$http.get("/admin/catalog/get_parents")
		    .then(function(response) {
		        $scope.firstCategories = response.data;
		    });
	};	
	AddItem.secondCategory = function (categoryId) {		
			$http.get("/admin/catalog/second_category",
			{
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				params : { parent_id : categoryId }
			})
		    .then(function(response) {
		        $scope.secondCategories = response.data;
		    });
	};
	AddItem.thirdCategory = function (categoryId) {		
			$http.get("/admin/catalog/second_category",
			{
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				params : { parent_id : categoryId }
			})
		    .then(function(response) {
		        $scope.thirdCategories = response.data;
		    });
	};
	AddItem.prefix = function(brandId) {
		$http.get("/admin/catalog/get_prefix",
		{
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			params : { brand_id : brandId }
		}).then(function(response) {
			$scope.prefixes = response.data;
		})
	};
	AddItem.addItem = function (item_code, status, brand, quantity, srp, item_name, desc, categoryid){
				$http({
				url : "/admin/catalog/add_item",
				method: "POST",
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			    transformRequest: function(obj) {
			        var str = [];
			        for(var p in obj)
			        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
			        return str.join("&");
			    },
				data : 	{item_code: item_code, status : status, brand : brand, quantity : quantity, srp : srp, item_name : item_name, desc : desc, categoryid : categoryid} // Data to be passed to API
			})
		    .then(function(response) {
		  	window.location.href= "/admin/catalog/items";
			window.alert("Item Added!");
		    });
	};

	AddItem.init();
	$scope.categoryid="";

	
	$scope.addItem = function (categoryid) {
		var item_code = $('#brandPrefix').val() + $('#itemCode').val();
		var category_id = $scope.categoryid;
		var status = $('#status').val();
		var brand = $('#brand').val();
		var quantity = $('#quantity').val();
		var srp = $('#srp').val();
		var item_name = $('#itemName').val();
		var desc = $('#summernote').val();
		AddItem.addItem(item_code, status, brand, quantity, srp, item_name, desc, category_id);
	};
	$scope.firstCategory = function () {
		var parent_id = $scope.selectedCategory.category_id;
		$scope.categoryid = parent_id;
		AddItem.secondCategory(parent_id);
		$('category3').val('');
	};
	$scope.secondCategory = function () {
		var parent_id = $scope.selectedCategory2.category_id;
		$scope.categoryid = parent_id;
		AddItem.thirdCategory(parent_id);
	};
 	$scope.getPrefix = function() {
		var brand_id = $scope.selectedBrand.brand_id;
		AddItem.prefix(brand_id);
	};
});

app.controller('MyCtrl', ['$scope', 'Upload', '$timeout', function ($scope, Upload, $timeout) {
    $scope.uploadPic = function(file) {
    file.upload = Upload.upload({
     method:"POST",        		
      url: '/admin/catalog/upload_image',
      data: {name: $scope.username, file: file},
    });

    file.upload.then(function (response) {
      $timeout(function () {
       file.result = response.data;
      });
    }, function (response) {
      if (response.status > 0)
        $scope.errorMsg = response.status + ': ' + response.data;
    }, function (evt) {
      // Math.min is to fix IE which reports 200% sometimes
      file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      console.log(file.progress);
    });
    }
}]);

app.controller('ItemListController', function($scope, $http) {
	var ItemList = {};
	ItemList.init = function() {
		// Init functions / source
		ItemList.ItemList();
	};

	ItemList.ItemList = function() {
		$http.get("/admin/catalog/get_items")
		    .then(function(response) {
		        $scope.items = response.data;
		    });
	};
	ItemList.init();
	// scope Vars to view
	$scope.var = "";
	// scope function to view

});


app.controller('EditItemController', ["$location", "$scope", "$http", function($location, $scope, $http) {
	
	var EditItem = {};
	EditItem.init = function() {
		// Init functions / source
		EditItem.parameter();

	};

	EditItem.parameter = function() {
		var item_id = $location.search().item_id;
		console.log(item_id);
		EditItem.getDetails(item_id);

	};

	EditItem.getDetails = function(item_id) {
		$http.get("/admin/catalog/get_details",
		{
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			params : { item_id : item_id }
		}).then(function(response) {
			$scope.details = response.data;
		});
	};



	EditItem.init();
	// scope Vars to view
	$scope.var = "";
	// scope function to view

}]);

// app.controller('TestController', function($scope, $http) {
// 	var Test = {};
// 	Test.init = function() {
// 		// Init functions / source
// 	};
// 	Test.init();
// 	// scope Vars to view
// 	$scope.var = "";
// 	// scope function to view
// 	$scope.func = function(){
// 	};
// });