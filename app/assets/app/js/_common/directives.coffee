'use strict'

app = angular.module 'app'

app.directive 'headerbar', ['Restangular', (Restangular) ->
  {
    restrict: 'E'
    compile: (elem) ->
      Restangular.one('default/header').get().then (data) ->
        elem.html data
  }
]
