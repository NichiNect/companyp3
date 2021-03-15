@if (isset($article))
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Fill the title.." value="{{ $article->title }}">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('/storage/artikel/' . $article->picture) }}" alt="" class="img-thumbnail" width="80%">
            </div>
            <div class="col-md-8">
                <input type="file" name="picture" id="picture" class="form-control" placeholder="Fill the picture..">
            </div>
        </div>
        @error('picture')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="10" placeholder="Fill the content..">{{ $article->content }}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Create New Article!</button>
    </div>
@else
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Fill the title..">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" name="picture" id="picture" class="form-control" placeholder="Fill the picture..">
        @error('picture')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="10" placeholder="Fill the content.."></textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary" style="border-radius: 0px;">Create New Article!</button>
    </div>
@endif