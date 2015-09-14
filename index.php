<?php
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
        <script type="text/javascript" src="home.js"></script>
        <style type="text/css">
        label {
            display: block;
        }
        
        button {
            margin-top: 20px;
        }
        </style>
    </head>

    <body>
        <div id="container">
            <h1> This is demo of AngularJS ajax POST call to PHP file</h1>
            <h3> For tutorial visit this link.</h3>
            <div id="login" ng-app='angular_post_demo' ng-controller='sign_up'>
                <input type="text" size="40" ng-model="email" placeholder="Type your email">
                <br>
                <input type="password" size="40" ng-model="password" placeholder="Type your password">
                <br>
                <button ng-click="check_credentials()">Login</button>
                <br>
                <span id="message">{{message}}</span>
            </div>
        </div>
    </body>

    </html>
