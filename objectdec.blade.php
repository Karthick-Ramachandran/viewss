@extends('dashboard.layouts.app')

@section('content')
<div class=" text-center">
        <h3 class="text-center">Face Detection</h3>

</div>


<div class="row mt-3">

@foreach($app as $apps)
    <div class="col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-6 mb-4">

   
<video width="280" height="300" controls>
                         <source src="{{ asset($apps->image) }}" type="video/mp4">
                         Your browser does not support the video tag.
          </video>
</div>
@endforeach
</div>
@endsection

