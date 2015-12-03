<!--<iframe src="https://calendar.google.com/calendar/embed?src=mguv1jjj2gcqr2rnnb6drp94rial2pkg%40import.calendar.google.com&ctz=Europe/Paris" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
-->
<section id="directives-calendar" ng-controller="calendarController">
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

            
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button class="btn btn-success" ng-click="changeView('agendaDay', 'myCalendar1')">AgendaDay</button>
                        <button class="btn btn-success" ng-click="changeView('agendaWeek', 'myCalendar1')">AgendaWeek</button>
                        <button class="btn btn-success" ng-click="changeView('month', 'myCalendar1')">Month</button>
                    </div>
                </div>
                <div class="calendar" ng-model="eventSources" calendar="myCalendar1" ui-calendar="uiConfig.calendar"></div>
                    
            
        </div>
    </div>
</section>