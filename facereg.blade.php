@extends('dashboard.layouts.newlayout')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Face detection</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>

                        <th>Video</th>
                        <th>Cluster Image</th>
<th>Wanted Person</th>
                    </tr>
                </thead>
                <tbody>
@foreach($app as $apps)
              <tr>
<td> <video width="300" height="300" controls>
                         <source src="{{ asset($apps->image) }}" type="video/mp4">
                         Your browser does not support the video tag.
          </video></td>
                <td>
<div style="display:flex; padding:1rem;">
@foreach($cluster as $clusters)
@if($clusters->id_number == $apps->id)
<div class="mr-3">
<img src="{{ asset($clusters->image)}}" height="300">
</div>
@endif
@if(!$clusters->image)
<p>No Image available</p>
@endif
@endforeach
</div>
</td>
@if($apps->wanted == null)
<td>Not Available</td>
@else
<td><img src="{{ asset($apps->wanted) }}"  style="height:300px; width:300px;"></td>
@endif
</tr>
@endforeach
            </tbody>

                <tfoot>
                        <th>Image</th>
                                              

                       
                        <th>Date</th>
<th>Wanted Person</th>
                </tfoot>
            </table>
        </div>

    </div>
</div>

   
@endsection

