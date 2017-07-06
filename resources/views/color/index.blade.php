<!DOCTYPE html>
<html>
<head>
<title>ColorThing - Laravel Version</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/colorthing.css">
</head>
<body class="container">

<h1>ColorThing - Laravel Version</h1>

<br />
<br />

<h4>New Color</h4>
<form class="form-inline" method="post" action="/color" style="padding: 0 0 30px 0;">
  {{ csrf_field() }}
  <label class="sr-only" for="colorName">Color Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="colorName" name="colorName" placeholder="The deep dark void...">
  <label class="sr-only" for="hexCode">Hex Code</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon">#</div>
    <input type="text" class="form-control" id="hexCode" name="hexCode" placeholder="000000">
  </div>
  <button type="submit" class="btn btn-secondary">Add Color</button>
</form>

<br />
<br />

<h4>All Colors</h4>

@foreach ($colors as $color)

  <div class="row mx-auto" style="padding: 10px 0;">
    <form method="post" action="/color/{{ $color['id'] }}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <input name="removeColorId" value="37" type="hidden">
      <button type="submit" class="close" aria-label="Remove">
        <span aria-hidden="true" style="padding-right: 10px;">&times;</span>
      </button>
    </form>
    <div class="col" style="min-height: 25px; max-width: 100px; background-color: #{{ $color['hex_code'] }}">
    </div>
    <div class="col">
      <div class="align-middle">
        {{ $color['color_name']}} (#{{ $color['hex_code'] }})
      </div>
    </div>
  </div>  

@endforeach


</body>
</html>