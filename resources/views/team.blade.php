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

        <h1 class="center">
            {{$team->name}}
        </h1>

        <div class="row">
            <form class="col s12" method="post" action="{{route('team.update', [$team])}}">
                @csrf

                <div class="row">
                    <div class="center">
                        <div class="col s1"></div>
                        <div class="input-field col s3">
                            <input id="won" type="text" name="won" value="{{$team->won}}">
                            <label for="won">Won</label>
                        </div>

                        <div class="input-field col s3">
                            <input id="lost" type="tel" name="draw" value="{{$team->draw}}">
                            <label for="draw">Draw</label>
                        </div>

                        <div class="input-field col s3">
                            <input id="lost" type="tel" name="lost" value="{{$team->lost}}">
                            <label for="lost">Lost</label>
                        </div>
                    </div>

                    <div class="input-field col s6">
                        <input id="goals_for" type="tel" name="goals_for" value="{{$team->goals_for}}">
                        <label for="goals_for">Goals For</label>
                    </div>
                    <div class="center">

                        <div class="input-field col s6">
                            <input id="goals_against" type="tel" name="goals_against" value="{{$team->goals_against}}">
                            <label for="goals_against">Goals Against</label>
                        </div>
                    </div>

                </div>

                @error('matches_played')
                    <p>
                        {{$message}}
                    </p>
                @enderror
                <div class="center">

                    <button class="btn waves-effect waves-light" type="submit" name="action">update
                    </button>
                </div>
            </form>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
