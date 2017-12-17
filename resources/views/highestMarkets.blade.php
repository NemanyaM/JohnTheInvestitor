<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
    <div>
        <h3 style="padding-left: 130px;">Hihgest Market Place</h3>
    </div>
    <div class="container">
            <table>
                @foreach ($market as $place)

                @if ($place->stock_type == 'Prefferd Stock')
                    <thead style="background-color: blue;">
                @else
                    <thead style="background-color: orange;">
                    @endif
                    <tr>
                        <th><ul style="list-style-type: none; text-align: justify">
                                <li style="color: white;">{{ $place->company_name}}</li>
                                <li style="color: white;">{{ $place->stock_type}}</li>
                                <li style="color: white;">{{ $place->price}}</li>
                            </ul></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="color: blue;">
                        @if ($place->stock_type == 'Prefferd Stock')
                            <td style="color: blue;">{{ $place->market}}</td>
                        @else
                            <td style="color: orange;">{{ $place->market}}</td>
                        @endif
                    </tr>
                    </tbody>
                @endforeach
            </table>
        <div>
            <a href="/">GO BACK TO MAIN OVERVIEW</a>
        </div>
    </div>
</body>S
</html>