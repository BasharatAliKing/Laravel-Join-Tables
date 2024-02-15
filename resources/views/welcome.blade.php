<h2>Students Data</h2>

@foreach ($students as $id=>$data )
     <h4>{{$data->id}} |
     {{$data->name}} |
     {{$data->age}} |
     {{$data->roll}} |
     {{$data->city_name}}</h4>
@endforeach