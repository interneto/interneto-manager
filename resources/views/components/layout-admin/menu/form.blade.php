<form action="{{ route('create-link') }}" method="post">
    @csrf

    <div class="form-floating mb-3 h-100">
        <textarea class="form-control h-100" name="web-name" id="web-name" placeholder="Interneto.dev">{{ old('web-name') }}</textarea>
        <label for="short_description">Web name</label>
    </div>

    <div class="form-floating mb-3 h-100">
        <textarea class="form-control h-100" name="link" id="link" placeholder="https://interneto.dev/">{{ old('link') }}</textarea>
        <label for="short_description">Web link</label>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="name" id="name" placeholder="Interneto-folder"
            value="{{ old('name') }}">
        <label for="name">Category name</label>
    </div>

    <div>
        <label for="tags">Tags</label>
        <input class="form-control" type="text" name="tags" id="tags" placeholder="#tag" value="{{ old('tag') }}">
    </div>

    <button type="submit" class="btn btn-primary">Crear link</button>
</form>

<!--
            $table->string('name');
            $table->text('description');
            $table->string('url');
            $table->string('thumbnail'); // screenshot of the web
            $table->string('icon'); // icon of the web
            $table->integer('rating'); // 1 to 5 stars
            $table->timestamps()->date_modify('date_modified'); // date modified
            $table->timestamps(); // created_at
-->
