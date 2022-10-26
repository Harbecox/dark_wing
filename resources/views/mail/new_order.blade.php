@foreach($data as $k => $v)
    <p><strong>{{ \Illuminate\Support\Str::ucfirst($k) }}: </strong>{{ $v }}</p>
@endforeach
