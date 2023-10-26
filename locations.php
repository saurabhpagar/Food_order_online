<html>
<head>
    
    <?php
    include "header.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript">
        var locations = [
            ['saurabh foods', 43.683333, -79.766667, 'Kolkata City, west bengal, ON L6X 1V8'],
            ['saurabh Foods', 42.283333, -83.000000, 'Mumbai City, maharashtra, ON N8X 3J2'],
            ['saurabh Foods', 42.9870, -81.2432, 'Rajkot City, gujrat, ON N6B 2P4'],
            ['saurabh Foods', 43.3616, -80.3144, 'Delhi City, Delhi, ON N1R 2L8'],
            ['saurabh Foods', 42.052841, -82.599683, 'Surat City, gujrat, ON N8H 3A7'],
            ['saurabh Foods', 42.382224, -82.195090, 'Kanpur City, uttar pradesh, ON N7M 6J5'],
            ['saurabh Foods', 42.278869, -83.053150, 'Nagpur City, maharashtra, ON N9C 2L6'],
            ['saurabh Foods', 42.309643, -83.064421, 'Pune City, maharashtra, ON N9B 1E6']
        ];
        function initialize() {
            var myOptions = {
                center: {lat: 42.986950, lng: -81.243177},
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("default"),myOptions);
            setMarkers(map,locations)
        }
        function setMarkers(map,locations){
            var marker, i
            for (i = 0; i < locations.length; i++)
            {
                var loan = locations[i][0]
                var lat = locations[i][1]
                var long = locations[i][2]
                var add =  locations[i][3]

                latlngset = new google.maps.LatLng(lat, long);

                var marker = new google.maps.Marker({
                    map: map, title: loan , position: latlngset
                });
                map.setCenter(marker.getPosition())
                var content = "<h3>" + loan +  '</h3>'+add
                var infowindow = new google.maps.InfoWindow()

                google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
                    return function() {
                        infowindow.setContent(content);
                        infowindow.open(map,marker);
                    };
                })(marker,content,infowindow));
            }
        }
    </script>
    <body style="background-color: lightseagreen;"></body>
    <style>
        #heading{
            font-size: 50px;
            font-family: "Goudy Old Style";

        }
        .text{
            font-size: 20px;

        }
    </style>
</head>
<body onload="initialize()">
<div class="form-group col-md-4">
    <div class="well">
        <p id="heading">Visit our locations</p>
        <div ng-app="myApp" ng-controller="namesCtrl">
            <input type="text" class="form-control" ng-model="test" placeholder="Enter your address here">
            <br><br>
            <ol>
                <li class="text" ng-repeat="x in names | filter:test">
                    {{x}}
                </li>
                <p class="text" ng-show="(names | filter:test).length == 0">Sorry, we are not present at your location</p>
            </ol>
        </div>
        <!-- Script for angular JS -->
        <script>
            angular.module('myApp', []).controller('namesCtrl', function($scope) {
                $scope.names = [
                    'Kolkata City, west bengal, ON',
                    'Mumbai City, maharashtra, ON',
                    'Delhi City, delhi, ON',
                    'Surat City, gujrat, ON',
                    'Rajkot City, gujrat, ON',
                    'Kanpur City, up, ON',
                    'Nagpur City, maharashtra, ON',
                    'Pune City, maharashtra, ON'
                ];
            });
        </script>
    </div>
</div>
<div class="form-group col-md-8">
    <div id="default" style="width:100%; height:550px"></div>
</div>
</body>
</html>

