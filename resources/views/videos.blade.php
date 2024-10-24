@foreach($data as $row)
    @if(isset($row['id']))
        <video width="320" height="240" muted controls>
            <source src="{{ asset('upload/' . $row['video']) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    @else
        <p>Video not found for entry: {{ $row['id'] }}</p> 
    @endif
@endforeach
