@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    {{$vebinar}}
    <div id="jitsi">
        <jitsi/>
    </div>
</div>
@endsection