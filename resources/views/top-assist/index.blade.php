<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier League Top Assisters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }

        .team-logo {
            max-width: 40px;
            max-height: 40px;
        }

        .player-name {
            text-transform: capitalize;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Premier League Top Assisters</h1>

        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Player</th>
                            <th>Team</th>
                            <th>Assists</th>
                            <th>Goals</th>
                            <th>Appearances</th>
                            <th>Minutes Played</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($topAssisters as $index => $player)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="player-name">{{ $player['name'] }}</td>
                                <td class="player-name">{{ $player['team']['name'] }}</td>
                                <td>{{ $player['assists'] }}</td>
                                <td>{{ $player['goals'] }}</td>
                                <td>{{ $player['appearances'] }}</td>
                                <td>{{ $player['minutesPlayed'] }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
