@extends('layouts.app')
{{--<script src="{{ asset("js/search.js") }}"></script>--}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/" class = "btn btn-sm btn-info btn-outline">Go back</a>
                <h1 class="display-one" style="margin-top: 5%">{{ ucfirst($article['title']) }}</h1>
                <p>{!! $article['content'] !!}</p>
                <hr>
            </div>
        </div>
    </div>
@endsection

