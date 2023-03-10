@if ($project->exists)
    <form action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data" method="POST"
        novalidate>
        @method('PUT')
    @else
        <form action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" method="POST" novalidate>
@endif
@csrf
<div class="row cols-3">
    <div class="col">
        {{-- Name project --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                value="{{ old('name', $project->name) }}">
        </div>
    </div>

    <div class="col">
        {{-- description project --}}
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="numeric" class="form-control" id="description" name="description" placeholder="description"
                value="{{ old('description', $project->description) }}">
        </div>
    </div>

    <div class="col">
        {{-- linkedin project  --}}
        <div class="mb-3">
            <label for="linkedin" class="form-label">linkedin</label>
            <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="linkedin"
                value="{{ old('linkedin', $project->linkedin) }}">
        </div>
    </div>
</div>

<div class="row row-cols-1">
    <div class="col">
        {{-- created_at project --}}
        <div class="mb-3">
            <label for="github" class="form-label">github</label>
            <input type="url" class="form-control"id="github" name="github"
                value="{{ old('github', $project->github) }}" placeholder="github">
        </div>
    </div>
</div>

<div class="row row-cols-1">
    <div class="col">
        {{-- created_at project --}}
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
    </div>
</div>


<div class="d-flex justify-content-between">
    <div>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
    <div class="mb-3">
        <button class="btn btn-small btn-success" type="submit">Submit</button>
    </div>
</div>
</form>
