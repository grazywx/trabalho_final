@section('content')
<h2>ficha</h2>

<ul>
    @foreach ($fichas as $ficha)
        <li>{{ $ficha->firstName}}</li>
    @endforeach
</ul>


@endsection