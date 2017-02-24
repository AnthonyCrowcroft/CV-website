const angular = require('angular');
const _ = lodash = require('lodash');

angular
    .module('anthonyApp', [require('angular-route')])
    .config(function($routeProvider, $locationProvider) {
        $routeProvider
            .when("/profile", {
                template : require('./components/profile.html')
            })
            .when("/contact", {
                template : require('./components/contact.html')
            })
            .when("/education", {
                template : require('./components/education.html')
            })
            .when("/experience", {
                template : require('./components/experience.html')
            })
            .when("/technology", {
                template : require('./components/technology.html')
            })
            .otherwise({redirectTo: '/profile'});

        $locationProvider.html5Mode(true);
    })
    .run(function($rootScope, $location, $http) {

        $rootScope.navStyle = function(possible) {
            if($location.path() === possible){
                return "nav-active"
            } else {
                return "nav-inactive"
            }
        };
        $rootScope.navCollapsed = false;

        $rootScope.contact = function() {
            $http.post('/api/contact', {'key' : 'value'})
                 .then(function(res) {
                     console.log(res);
                 }, function(err) {
                     console.log('broken');
                 });
        }
    });