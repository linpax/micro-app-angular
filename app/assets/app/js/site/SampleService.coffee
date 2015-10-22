'use strict'

angular.module( 'SiteModule' ).factory 'SampleService', ['Restangular', (Restangular) ->
  Restangular.service 'sample'
]
