'use strict';
angular.module("myApp.controllers").controller('HomeCtrl', ['$scope','$location', function($scope, $location){
	$scope.searchTerms = "";
	
	$scope.search = function(){
		$location.url('/browse');
	};
 
}]);