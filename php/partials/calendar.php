<section id="directives-calendar" ng-controller="theCalendarController">
    <div class="page-header">
        <h1>Calendar</h1>
    </div>
    <div class="well">
        <div class="row-fluid">
            <div class="span4">

                <div class="btn-group calTools">
                    <button class="btn" ng-click="addRemoveEventSource(eventSources, eventSource)">
                        Toggle Source
                    </button>
                    <button type="button" class="btn btn-primary" ng-click="addEvent()">
                        Add Event
                    </button>
                </div>
            </div>

            <div class="span8">
                <tabset>
                    <tab select="renderCalender('myCalendar1');">
                        <tab-heading>
                            <i class="glyphicon glyphicon-bell"></i> Calendar One
                        </tab-heading>
                        <div class="alert-success calAlert" ng-show="alertMessage !== undefined && alertMessage !== ''">
                            <h4>{{alertMessage}}</h4>
                        </div>
                        <div class="btn-toolbar">
                            <p class="pull-right lead">Calendar One View Options</p>
                            <div class="btn-group">
                                <button class="btn btn-success" ng-click="changeView('agendaDay', 'myCalendar1')">AgendaDay</button>
                                <button class="btn btn-success" ng-click="changeView('agendaWeek', 'myCalendar1')">AgendaWeek</button>
                                <button class="btn btn-success" ng-click="changeView('month', 'myCalendar1')">Month</button>
                            </div>
                        </div>
                        <div class="calendar" ng-model="eventSources" calendar="myCalendar1" ui-calendar="uiConfig.calendar"></div>
                    </tab>
                </tabset>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17352735-3']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

</script>