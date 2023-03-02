angular.module('app',['category.router'])
.config(['$urlRouterProvider','$stateProvider',function($urlRouterProvider,$stateProvider){
	$urlRouterProvider.otherwise('/');

	$stateProvider
	 .state('home',{
	 	url: '/',
	 	templateurl: 'index.php'
	 })
	 .state('category',{
	 	url: '/home/category',
	 	templateurl: 'index.php'
	 })
}])