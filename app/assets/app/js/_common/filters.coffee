'use strict'

angular.module('app').filter 'unsafe', ($sce) ->
  $sce.trustAsHtml
