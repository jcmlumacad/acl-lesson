<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
    <h1>Hello World</h1>

    @can('edit_forum')
      <a href="#">Edit the forum</a>
    @endcan

    @can('manage_money')
      <a href="#">Manage the funds</a>
    @endcan
    </body>
</html>
