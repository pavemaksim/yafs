@extends('layouts.main')

@section('content')
    <section class="page__upload-form upload-form">
        <p class="upload-form__hint">
            The file must be an image (jpeg, png, bmp, gif, or svg).
        </p>
        <div class="upload-form__form form">

            @include ('blocks.errors')

            <form action="/files" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form__file">
                    <input id="file" name="file" type="file" class="form__input-file">
                </div>
                <div class="form__submit">
                    <input type="submit" class="form__input-submit">
                </div>
            </form>
        </div>
    </section>

@endsection
