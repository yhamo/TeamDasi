<section id="directives-calendar" ng-controller="calendarController">
            <div class="page-header">
                <h1>Calendar</h1>
            </div>
            <div class="well">
                <div class="row-fluid">
                    <div class="span4">
                        
                        <div class="btn-group calTools">
                          <button class="btn" ng-click="changeLang()">
                            {{changeTo}}
                          </button>              
                          <button class="btn" ng-click="addRemoveEventSource(eventSources,eventSource)">
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
                              <div class="alert-success calAlert" ng-show="alertMessage != undefined && alertMessage != ''">
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
                           <tab select="renderCalender('myCalendar2');">
                            <tab-heading>
                              <i class="glyphicon glyphicon-bell"></i> Calendar Two
                            </tab-heading>
                              <div class="alert-success calAlert" ng-show="alertMessage != undefined && alertMessage != ''">
                                <h4>{{alertMessage}}</h4>
                              </div>
                              <div class="btn-toolbar">
                                <p class="pull-right lead">Calendar Two View Options</p>
                                <div class="btn-group">
                                    <button class="btn btn-success" ng-click="changeView('agendaDay', 'myCalendar2')">AgendaDay</button>
                                    <button class="btn btn-success" ng-click="changeView('agendaWeek', 'myCalendar2')">AgendaWeek</button>
                                    <button class="btn btn-success" ng-click="changeView('month', 'myCalendar2')">Month</button>
                                </div>
                              </div>
                            <div class="calendar" ng-model="eventSources" calendar="myCalendar2" ui-calendar="uiConfig.calendar"></div>
                           </tab>
                           <tab select="renderCalender('myCalendar3');">
                            <tab-heading>
                              <i class="glyphicon glyphicon-bell"></i> Calendar Three
                            </tab-heading>
                              <div class="alert-success calAlert">
                                <h4>This calendar uses the extended form</h4>
                              </div>
                              <div class="btn-toolbar">
                                <p class="pull-right lead">Calendar Three View Options</p>
                                <div class="btn-group">
                                    <button class="btn btn-success" ng-click="changeView('agendaDay', 'myCalendar3')">AgendaDay</button>
                                    <button class="btn btn-success" ng-click="changeView('agendaWeek', 'myCalendar3')">AgendaWeek</button>
                                    <button class="btn btn-success" ng-click="changeView('month', 'myCalendar3')">Month</button>
                                </div>
                              </div>
                            <div class="calendar" ng-model="eventSources2" calendar="myCalendar3" ui-calendar="uiConfig.calendar"></div>
                           </tab>
                        </tabset>
                    </div>
                </div>
            </div>
        </section>
