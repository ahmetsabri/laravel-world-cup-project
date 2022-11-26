<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World CUP 2022</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
    @foreach($groups as $group)
         <h3 class="center">
            <b>
                Group {{$group->name}}
            </b>
        </h3>
            <table class="centered">
            <thead>
              <tr>
                  <th>Team</th>
                  <th>Matches played</th>
                  <th>Won</th>
                  <th>Draw</th>
                  <th>Lost</th>
                  <th>Goals for</th>
                  <th>Goals against</th>
                  <th>Goals Difference</th>
                  <th>Points</th>
              </tr>
            </thead>
            <tbody>
            @foreach($group->teams as $team)

                  <tr>
                <td>{{$team->name}}</td>
                <td>{{$team->matches_played}}</td>
                <td>{{$team->won}}</td>
                <td>{{$team->draw}}</td>
                <td>{{$team->lost}}</td>
                <td>{{$team->goals_for}}</td>
                <td>{{$team->goals_against}}</td>
                <td>{{$team->goals_difference}}</td>
                <td>{{$team->pts}}</td>

              </tr>

            @endforeach
            </tbody>
          </table>

    @endforeach
    </div>


</body>
</html>
