'use strict';
var myApp = angular.module("myApp.controllers");

myApp.controller('HomeCtrl', ['$scope','$location', '$http', function($scope, $location, $http){
	$scope.searchTerms = "";

	$scope.search = function() {
		var url = 'http://' + window.location.host + '/api/beers/' + encodeURI($scope.searchTerms);
		var promise = $http.get(url);
		promise.success(function(results) {
			console.log('success');
			console.log(results);
		}).error(function(error) {
			console.log('fail');
			console.log(error);
		});
	};
 
}]);