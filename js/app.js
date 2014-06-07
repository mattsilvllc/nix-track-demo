/**
 * Created by yurko on 6/7/14.
 */
(function () {
    var module = angular.module('nix-track-demo', ['ngResource', 'ngRoute']);
    module.config(
        ['$routeProvider', '$locationProvider',
         function ($routeProvider, $locationProvider) {
             $locationProvider.html5Mode(true);

             $routeProvider.
                 when('/:userId', {
                     templateUrl: 'site/partials/index.html',
                     controller:  'controllers.index'
                 }).
                 otherwise({
                     redirectTo: '/1'
                 });
         }
        ]
    );

    module.service(
        'TrackLogEntry',
        [
            '$resource',
            function ($resource) {
                return $resource('api/trackLogEntries/:id');
            }
        ]
    );

    module.controller(
        'controllers.index',
        [
            '$scope', '$routeParams', 'TrackLogEntry',
            function ($scope, $routeParams, TrackLogEntry) {
                $scope.showLoader = true;

                TrackLogEntry.query({userId: $routeParams.userId}, function (entries) {
                    var sortedData = {}, dates = [];
                    angular.forEach(entries, function (entry) {
                        var splittedDate = entry.created_at.split(' ');
                        if (!sortedData[splittedDate[0]]) {
                            sortedData[splittedDate[0]] = [];
                            dates.push(splittedDate[0]);
                        }
                        sortedData[splittedDate[0]].push(entry);
                    });

                    $scope.dates = dates;
                    $scope.data = sortedData;
                    $scope.showLoader = false;
                })

            }
        ]
    );

    module.directive('loading', [
        function () {
            return {
                restrict: 'E',
                template: '<div ng-show="visible" class="container loading"><i class="fa fa-spinner fa-spin fa-5x"></i></div>',
                replace:  true,
                scope:    {visible: '='},
                link:     function (scope) {
                    console.log(scope.visible);
                }
            }
        }
    ])
}());