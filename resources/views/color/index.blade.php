@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<div class="panel-heading">ColorThing - Laravel Version</div>

<div class="panel-body">

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

</div>
            </div>
        </div>
    </div>
</div>

@endsection