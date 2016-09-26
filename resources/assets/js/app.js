
require('./bootstrap');

const angular = require('angular');
const _ = lodash = require('lodash');

angular
    .module('anthonyApp', [require('angular-route')])
    .config(function($routeProvider, $locationProvider) {
        $routeProvider
            .when("/profile", {
                template : require("./components/profile.html")
            })
            .when("/contact", {
                template : require("./components/contact.html")
            })
            .when("/education", {
                template : require("./components/education.html")
            })
            .when("/experience", {
                template : require("./components/experience.html")
            })
            .when("/technology", {
                template : require("./components/technology.html")
            })
            .otherwise({redirectTo: "/profile"});

        $locationProvider.html5Mode(true);
    })
    .run(function($rootScope, $location) {
        $rootScope.isActive = function(possible) {
            return $location.path() === possible;
        }

    });