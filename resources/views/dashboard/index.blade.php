@extends('layouts.app')
@section('content')<h1>Dashboard</h1><div class='grid'>@foreach($stats as $k=>$v)<div class='card'><strong>{{ $k }}</strong><div>{{ $v }}</div></div>@endforeach</div>@endsection
