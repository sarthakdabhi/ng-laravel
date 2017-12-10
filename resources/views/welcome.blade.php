<!doctype html>
<html lang="{{ app()->getLocale() }}">
<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <base href="/"> -->

    <title>ng-laravel Essentials</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/bcbb3a7e4c.js"></script>

  </head>
  <body>

    <ui-view></ui-view>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
    <script src="https://unpkg.com/@uirouter/angularjs@1.0.8/release/angular-ui-router.min.js"></script>

    <!-- app -->
    <script src="src/app/app.module.js"></script>
    <script src="src/app/app.config.js"></script>
    
    <!-- core -->
    <script src="src/app/core/core.module.js"></script>
    
    <!-- blocks -->
    <script src="src/app/blocks/blocks.module.js"></script>
    <script src="src/app/blocks/router/router.module.js"></script>
    <script src="src/app/blocks/router/routes.js"></script>

    <!-- home -->
    <script src="src/app/home/home.module.js"></script>
    <script src="src/app/home/home.service.js"></script>
    <script src="src/app/home/home.controller.js"></script>

    <!-- services -->
    <script src="src/app/services/services.module.js"></script>
    <script src="src/app/services/logger/logger.module.js"></script>
    <script src="src/app/services/logger/logger.js"></script>

    <!-- components -->
    <script src="src/app/components/components.module.js"></script>
    <script src="src/app/components/header/header.module.js"></script>
    <script src="src/app/components/header/header.js"></script>

  </body>
</html>