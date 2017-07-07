/**
 * Created by suhendra on 07/07/2017.
 */
var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);
app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
        when('/', {
            templateUrl: 'templates/home.html',
            controller: 'AdminController'
        }).
        when('/items', {
            templateUrl: 'templates/items.html',
            controller: 'ItemController'
        });
    }]);