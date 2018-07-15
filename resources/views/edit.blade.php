<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    </head>
    <body>
        <div class="container">
          <h2>Films</h2><br/>
          <form method="post" action="{{action('FilmController@update', $id)}}" enctype="multipart/form-data">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$film->name}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" value="{{$film->description}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="ticket_price">Ticket price:</label>
                    <input type="text" class="form-control" name="ticket_price" value="{{$film->ticket_price}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="file" name="photo">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <strong>Release date : </strong>  
                    <input class="date form-control"  type="text" id="datepicker" name="release_date" value="{{$film->release_date}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                <strong>Country : </strong>  
                    <select name="country_id" id="country_id" class="form-control">
                        @foreach ($countries as $country => $value)
                        <option value="{{ $country }}" @if($film->country_id==$country) selected @endif> {{ $value }}</option>   
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
          </form>
        </div>
        <script type="text/javascript">  
            $('#datepicker').datepicker({ 
                autoclose: true,   
                format: 'yyyy-mm-dd'
             });  
        </script>
    </body>
</html>
