@extends('layouts.main')

@section('content')
    <section class="page__image image">
        <div class="image__link">
            <input class="image__source-link" type="text" value ="{{ $file->getFilePath() }}" />
        </div>
        <div class="image__preview">
            <img class="image__preview-img" src="{{ $file->getFilePath() }}">
        </div>
    </section>

@endsection
