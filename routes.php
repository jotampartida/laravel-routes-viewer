<?php
/* Laravel 5.2 routes viewer by @jotampartida */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use Illuminate\Http\Request;
use App\Http\Requests;

// Script to see yours laravel projets routes in a bootstrap table 

Route::get('routes', function() {
echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Routes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="col-md-12">
        <h1>App Routes</h1>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <tr>
              <td><h4>HTTP Method</h4></td>
              <td><h4>Route</h4></td>
              <td><h4>Action</h4></td>
            </tr>';
            foreach (Route::getRoutes() as $route)
            {
              echo "<tr>";
              echo "<td>" . $route->getMethods()[0] . "</td>";
              echo "<td>" . $route->getPath() . "</td>";
              echo "<td>" . $route->getActionName() . "</td>";
              echo "</tr>";
            }
            echo "
          </table>
        </div>
      </div>
    </div>
  </body>
  </html>";
});
