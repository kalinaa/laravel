<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Namestaj</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Namestaj</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="namestaj">Namestaj</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="row ml-2">
        <div class="col-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naziv</th>
                        <th>Tip</th>
                        <th>Kreiran</th>
                        <th>Izmena</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($namestaji as $namestaj)
                    <tr >
                        <td>{{ $namestaj->id }}</td>
                        <td>{{ $namestaj->naziv }}</td>
                        <td>{{ $namestaj->tip->naziv }}</td>
                        <td>{{ $namestaj->created_at }}</td>
                        <td><a href="/namestaj/{{$namestaj->id}}">Izmena</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-3 mt-2">
            <form action="/namestaj" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label>Naziv</label>
                <input type="text" class="form-control" name="naziv">
                <label>Tip</label>
                <select class="form-control" name="tip_id">
                    @foreach($tipovi as $tip)
                    <option value="{{$tip->id}}">{{$tip->naziv}}</option>
                    @endforeach
                </select>
                <button class="form-control btn btn-dark" type="submit">Sacuvaj</button>
            </form>
        </div>
    </div>
</body>

</html>