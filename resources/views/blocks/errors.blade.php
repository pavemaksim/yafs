@if ($errors->any())
    <div class="form__errors">
        <ul class="form__errors-list">
            @foreach ($errors->all() as $error)
                <li class="form__error-item">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif