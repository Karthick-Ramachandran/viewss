@extends('dashboard.layouts.app')
@section('content')
<div class="text-center">
        <h3 class="text-center">Number Plate</h3>

</div>
<div class="row justify-content-center mt-5">
    @foreach ($app as $apps)
        
    <div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 col-sm-6 mb-4">
         <video width="100%" height="300" controls>
                      
                         <source src="{{ asset($apps->image) }}" type="video/mp4">
                         Your browser does not support the video tag.
                       </video>
    </div>
         @endforeach

    
</div>

@endsection


