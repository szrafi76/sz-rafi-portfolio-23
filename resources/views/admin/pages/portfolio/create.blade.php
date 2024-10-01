@extends('admin.app.app')
@section('main-content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create Portfolio</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Portfolios</a></li>
                                <li class="breadcrumb-item active">Create Portfolio</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" placeholder="Type portfolio title" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Sub Title (Optional)</label>
                                        <input type="text" placeholder="Type portfolio sub title" class="form-control" id="subTitle" name="subTitle">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="category" class="form-label">Portfolio Category :</label>
                                        <select id="category_id" name="category_id" class="form-select">

                                            <option selected="">Choose...</option>
                                            @foreach ($Categories as $data)
                                            <option value="{{ $data->id }}">{{ $data->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Client / Company</label>
                                        <input type="text" placeholder="Type client or company name..." class="form-control" id="client" name="client">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="title" class="form-label">Completion Date</label>
                                        <input type="date" class="form-control" id="completion_date" name="completion_date" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="title" class="form-label">Figma Link (Optional)</label>
                                        <input type="text" class="form-control" id="figma_link" name="figma_link">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="title" class="form-label">Website Link (Optional)</label>
                                        <input type="text" class="form-control" id="live_link" name="live_link">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Banner</label>
                                        <input type="file" class="form-control dropify" id="banner" name="banner"
                                          data-default-file="{{ old('banner') }}" data-allowed-file-extensions="jpg jpeg png gif svg" data-max-file-size="2M" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Portfolio Gallery</label>
                                        <input type="file" class="form-control dropify" id="gallery" name="gallery[]"
                                          data-default-file="{{ old('gallery[]') }}" data-allowed-file-extensions="jpg jpeg png gif svg" data-max-file-size="12M" multiple>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="summernote" name="description" rows="20" cols="10"> </textarea>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- page-content -->
<script>
    function getcat(categoryId) {
        fetch(`http://localhost/danyelsas/getsubcat/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    const subcategorySelect = document.getElementById("category_id");
                    subcategorySelect.innerHTML = ""; // Clear previous options

                    data.forEach(subcategory => {
                        const option = document.createElement("option");
                        option.value = subcategory.id;
                        option.text = subcategory.title;
                        subcategorySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error fetching subcategories:", error);
                });
    }
</script>

    {{-- </div> --}}
    @endsection
