'use strict'

class SiteCtrl
  @$inject: [ '$scope', 'SampleService' ]

  constructor: (@scope, @SampleService) ->

    @scope.sampleFilter = '<h3>MicroPHP, AngularJS and Resangular with CoffeeScript classes</h3>'

    @SampleService.getList().then (data) =>
      @scope.samples = data


angular.module('SiteModule').controller 'SiteCtrl', SiteCtrl
