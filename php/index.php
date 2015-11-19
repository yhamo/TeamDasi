<!DOCTYPE html>
<html lang="en-US">
    <head>
       <meta charset="utf-8"/>
       <script src="../js/jquery.min.js" type="text/javascript"></script>
       <script src="../js/angular.min.js" type="text/javascript"></script>
       <script src="../js/angular-route.min.js" type="text/javascript"></script>
       <script src="../js/bootstrap.min.js" type="text/javascript"></script>
       <script src="../js/ui-bootstrap-tpls-0.14.3.min.js" type="text/javascript"></script>
       <script src="../js/moment.min.js" type="text/javascript"></script>
       <script src="../js/fullcalendar.min.js" type="text/javascript"></script>
       <script src="../js/gcal.js" type="text/javascript"></script>
       <script src="../js/calendar.js" type="text/javascript"></script>
       <script src="../js/indexController.js" type="text/javascript"></script>
       <script src="../js/partialsControllers/eventsController.js" type="text/javascript"></script>
       <script src="../js/partialsControllers/calendarController.js" type="text/javascript"></script>
       
       <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
       <link href="../css/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
       <link href="../css/fullcalendar.print.css" rel="stylesheet" type="text/css"/>
       <link href="../css/calendar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body ng-app="myApp" ng-controller="indexController">
        <header>
            <div ng-include="'header.php'"></div>
        </header>
        <div class="container">
            <div ng-view></div>
       </div>
       <div ng-include="'footer.php'"></div>
    </body>
</html>


