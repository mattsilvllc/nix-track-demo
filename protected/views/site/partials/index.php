<div ng-repeat="date in dates | orderBy : 'toString()' : true">
    <div class="row date-row">
        <div class="col-md-12">
            <div class="total-calories">-</div>
            {{date | date: 'EEEE, M/d'}}
        </div>
    </div>

    <div class="row" ng-repeat="item in data[date]">
        <div class="col-md-12 item">
            <a href="" class="btn btn-block btn-warning btn-calories">!</a>
            <h4>{{item.query}}</h4>

            <p>-</p>
        </div>
    </div>
</div>

<div class="row">

</div>

<loading visible="showLoader"></loading>