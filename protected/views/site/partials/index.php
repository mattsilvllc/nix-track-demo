<div ng-repeat="date in dates | orderBy : 'toString()' : true">
    <div class="row date-row">
        <div class="col-md-12">
            <div class="total-calories">{{totalCalories[date] | number : 0}}</div>
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
                {{item.parsed_calories ? (item.parsed_calories | number : 0) : '!'}}
            </a>
            <h4>
                {{item.parsed_item_name || item.query}}
            </h4>

            <p>
                <span ng-show="item.parsed_brand_name">
                    {{item.parsed_brand_name | upperFirstLetters}}
                </span>

                <span ng-show="item.parsed_brand_name && item.parsed_serving && item.parsed_serving_qty">|</span>

                <span ng-show="item.parsed_serving && item.parsed_serving_qty">
                    {{item.parsed_serving_qty}} {{item.parsed_serving}}
                </span>
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