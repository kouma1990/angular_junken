<!DOCTYPE html>
<html ng-app="myApp">
	<head>
		<meta charset="UTF-8">
		<title>AngularJS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
		<script src="js/test.js"></script>
	</head>

	<body ng-controller="MyController" class="container">
		<h1>じゃんけんゲーム！</h1>
		<br><br>
		<form>
			<h2>モード選択</h2>
			<div class="radio-inline" ng-repeat="mode in modes">
			  <label>
			    <input type="radio" ng-model="data.mode" value="{{mode.id}}" name="mode"/>{{mode.name_ja}}
			  </label>
			</div>
		</form>

		<br><br>

		<h2>成績</h2>
		{{win}}勝 {{lose}}敗

		<h2>手を選ぶ</h2>
		<img src="img/gu.JPG" class="img-rounded" alt="gu" width="75" height="100" ng-click="onClickGu()">
		<img src="img/cho.JPG" class="img-rounded" alt="cho" width="75" height="100" ng-click="onClickCho()">
		<img src="img/pa.JPG" class="img-rounded" alt="pa" width="75" height="100" ng-click="onClickPa()">

		<h2>相手</h2>
		<img ng-src="img/{{aite_img}}.JPG" class="img-rounded" alt="aite" width="75" height="100" ng-show="hand">

		<h2>{{judge}}</h2>
	</body>	
</html>