'use strict'

app = angular.module 'app', [
  'ngRoute'
  'ui.bootstrap'
  'restangular'

  'SiteModule'

]

app.config [
  '$routeProvider', '$locationProvider', 'RestangularProvider',
  ($routeProvider, $locationProvider, RestangularProvider) ->

    RestangularProvider.setBaseUrl '/rest'

    $routeProvider.otherwise { redirectTo: '/' }

    if window.history && window.history.pushState # disable hash
      $locationProvider.html5Mode true

]
