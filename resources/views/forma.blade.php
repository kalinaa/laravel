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
                    <a class="nav-link" href="/namestaj">Namestaj</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class='container'>
        <h1 class='title'>Forma za izmenu namestaja</h1>
        <div class='row'>
            <div class="col-8">

                <form action="/namestaj/{{$namestaj->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>Naziv</label>
                    <input type="text" class="form-control" value="{{$namestaj->naziv}}" name="naziv">
                    <label>Tip</label>
                    <select class="form-control" name="tip_id">
                        @foreach($tipovi as $tip)
                        <option value="{{$tip->id}}" {{($namestaj->tip_id==$tip->id)?'selected':''}} >{{$tip->naziv}}</option>
                        @endforeach
                    </select>
                    <button class="mt-2 form-control btn btn-dark" type="submit">Sacuvaj</button>
                    <button class="mt-2 form-control btn btn-danger" name="obrisi" type="submit">Obrisi</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>