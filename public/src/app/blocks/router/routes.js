(function () {
	'use strict';

	angular
		.module('blocks.router')
		.config(RouteConfig);

	RouteConfig.$inject = ['$stateProvider', '$urlRouterProvider'];

	function RouteConfig($stateProvider, $urlRouterProvider) {
		
		$urlRouterProvider.otherwise('/404');

		$stateProvider
			.state('notfound', {
				url: '/404',
				templateUrl: 'src/app/errors/404.html'
			})
			.state('master', {
			    abstract: true,
			    templateUrl: 'src/app/layouts/master.html'
			})
			.state('master.home', {
				url: '',
				templateUrl: 'src/app/home/home.html',
				controller: 'HomeController as home'
			});
	}

})();