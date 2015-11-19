<section id="directives-calendar" ng-controller="theCalendarController">
    <div class="page-header">
        <h1>Events</h1>
    </div>
    <div class="well">
        <div class="row-fluid">
            <div class="span4">

                <ul class="unstyled">
                    <li ng-repeat="e in events">
                        <div class="alert alert-info">
                            <a class="close" ng-click="remove($index)"><i class="icon-remove"></i></a>
                            <b> <input ng-model="e.title"></b> 
                            {{e.start | date:"MMM dd"}} - {{e.end | date:"MMM dd"}}
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
