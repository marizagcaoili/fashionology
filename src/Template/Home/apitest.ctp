<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="/front/public/js/angular.min.js" /></script>
	<link rel="stylesheet" href="">


	<script src="/front/angular/app.js" /></script>
	
	<script src="/front/angular/controllers.js" /></script>

</head>
<body ng-controller="testController" ng-app="SampleApp">
	


	<div>

		<table>
			<tr ng-repeat="item in items">
				<td>{{item.item_id}}</td>
				<td>{{item.item_name}}</td>
				<td>{{item.item_description}}</td>
			</tr>
		</table>

	</div>


</body>
</html>
