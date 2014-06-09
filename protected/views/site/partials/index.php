<div ng-repeat="(date, totalCalories) in dates | orderBy : 'toString()' : true">
    <div class="row date-row">
        <div class="col-md-12">
            <div class="total-calories">{{totalCalories || '-'}}</div>
            {{date | date: 'EEEE, M/d'}}
        </div>
    </div>

    <div class="row" ng-repeat="item in data[date]">
        <div class="col-md-12 item">
            <a
                href=""
                class="btn btn-block btn-calories"
                ng-class="{'btn-warning': !item.parsed_calories, 'btn-info': item.parsed_calories}"
                >
                {{item.parsed_calories || '!'}}
            </a>
            <h4>{{item.query}}</h4>

            <p>
                {{
                item.parsed_serving && item.parsed_serving_qty ?
                (item.parsed_serving_qty + ' ' + item.parsed_serving) : '-'
                }}
            </p>
        </div>
    </div>
</div>

<div class="row">

</div>

<loading visible="showLoader"></loading>
<div class="text-danger" ng-show="error">
    Loading data failed: {{error.status}} {{error.statusText}}
</div>