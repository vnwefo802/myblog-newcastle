
@extends("admin_dashboard.layouts.app")
@section('title', 'Admin - Edit Home Page')
@section("style")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js" integrity="sha512-XNYSOn0laKYg55QGFv1r3sIlQWCAyNKjCa+XXF5uliZH+8ohn327Ewr2bpEnssV9Zw3pB3pmVvPQNrnCTRZtCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection


    @section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
                <div class="breadcrumb-title pe-3">Home</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="p-0 mb-0 breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="p-4 card-body">
                    <h5 class="card-title">Edit Home Page</h5>
                    <hr/>

                    <form action="{{ route('admin.home.update') }}" method='post' enctype='multipart/form-data'>
                        @csrf

                        <div class="mt-4 form-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-4 border rounded border-3">

                                        <!-- Existing Logo -->
                                        <span>Existing Logo</span>
                                        <div class='col-md-4'>
                                            <div class='p-2 user-image'>
                                                <img class='img-fluid img-thumbnail' src="{{ asset('storage/' . $allhome->logo) }}" >
                                            </div>
                                        </div>
                                        <!-- Logo -->
                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class="mb-3">
                                                    <label for="logo" class="form-label">Logo</label>
                                                    <input name='logo' type='file' class="form-control" id="logo">

                                                    @error('logo')
                                                        <p class='text-danger'>{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        <!-- Existing Favicon -->
                                        <span>Existing Favicon</span>
                                        <div class='col-md-4'>
                                                <div class='p-2 user-image'>
                                                    <img class='img-fluid img-thumbnail' src="{{ asset('storage/' . $allhome->favicon) }}" >
                                                </div>
                                            </div>
                                        <!-- Favicon -->
                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class="mb-3">
                                                    <label for="favicon" class="form-label" title="This is the image to the left of the text in the tab.">Favicon</label>
                                                    <input name='favicon' type='file' class="form-control" id="favicon">

                                                    @error('favicon')
                                                        <p class='text-danger'>{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        <!-- Video -->
                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class="mb-3">
                                                    <label for="Video" class="form-label">Video</label>
                                                    <input name='Video' type='file' class="form-control" id="Video">

                                                    @error('Video')
                                                        <p class='text-danger'>{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        <!-- title -->
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <textarea name='title'  id='title' class="form-control" rows="3">{{ old("title", $allhome->title) }}</textarea>

                                            @error('title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- button_1 -->
                                        <div class="mb-3">
                                            <label for="button_1" class="form-label">Button 1</label>
                                            <textarea name='button_1'  id='button_1' class="form-control" rows="3">{{ old("button_1", $allhome->button_1) }}</textarea>

                                            @error('button_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- button_2 -->
                                        <div class="mb-3">
                                            <label for="button_2" class="form-label">Button 2</label>
                                            <textarea name='button_2'  id='button_2' class="form-control" rows="3">{{ old("button_2", $allhome->button_2) }}</textarea>

                                            @error('button_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Box Title 1 -->
                                        <div class="mb-3">
                                            <label for="box_title_1" class="form-label">Box Title 1</label>
                                            <textarea name='box_title_1'  id='box_title_1' class="form-control" rows="3">{{ old("box_title_1", $allhome->box_title_1) }}</textarea>

                                            @error('box_title_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <!-- Box Title 2 -->
                                       <div class="mb-3">
                                            <label for="box_title_2" class="form-label">Box Title 2</label>
                                            <textarea name='box_title_2'  id='box_title_2' class="form-control" rows="3">{{ old("box_title_2", $allhome->box_title_2) }}</textarea>

                                            @error('box_title_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Box Title 3  -->
                                        <div class="mb-3">
                                            <label for="box_title_3" class="form-label">Box Title 3</label>
                                            <textarea name='box_title_3'  id='box_title_3' class="form-control" rows="3">{{ old("box_title_3", $allhome->box_title_3) }}</textarea>

                                            @error('box_title_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Box Title 4 -->
                                        <div class="mb-3">
                                            <label for="box_title_4" class="form-label">Box Title 4</label>
                                            <textarea name='box_title_4'  id='box_title_4' class="form-control" rows="3">{{ old("box_title_4", $allhome->box_title_4) }}</textarea>

                                            @error('box_title_4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <!-- project_title -->
                                        <div class="mb-3">
                                            <label for="project_title" class="form-label">Project Title</label>
                                            <textarea name='project_title'  id='project_title' class="form-control" rows="3">{{ old("project_title", $allhome->project_title) }}</textarea>

                                            @error('project_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Project Short Description -->
                                        <div class="mb-3">
                                            <label for="project_short_title" class="form-label">Project Short Description</label>
                                            <textarea name='project_short_title'  id='project_short_title' class="form-control" rows="3">{{ old("project_short_title", $allhome->project_short_title) }}</textarea>

                                            @error('project_short_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- project_button -->
                                        <div class="mb-3">
                                            <label for="project_button" class="form-label">Project Button</label>
                                            <textarea name='project_button'  id='project_button' class="form-control" rows="3">{{ old("project_button", $allhome->project_button) }}</textarea>

                                            @error('project_button')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- difference_button_1 -->
                                        <div class="mb-3">
                                            <label for="difference_button_1" class="form-label">Difference Button 1</label>
                                            <textarea name='difference_button_1'  id='difference_button_1' class="form-control" rows="3">{{ old("difference_button_1", $allhome->difference_button_1) }}</textarea>

                                            @error('difference_button_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- difference_button_2 -->
                                        <div class="mb-3">
                                            <label for="difference_button_2" class="form-label">Difference Button 2</label>
                                            <textarea name='difference_button_2'  id='difference_button_2' class="form-control" rows="3">{{ old("difference_button_2", $allhome->difference_button_2) }}</textarea>

                                            @error('difference_button_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                         <!-- difference image -->
                                        <div class='col-md-8'>
                                            <div class="mb-3">
                                                <label for="difference_image" class="form-label">difference image</label>
                                                <input name='difference_image' type='file' class="form-control" id="difference_image">

                                                @error('difference_image')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class='col-md-4'>
                                            <div class='p-2 user-image'>
                                                <img class='img-fluid img-thumbnail' src="{{ asset('storage/' . $allhome->difference_image) }}" >
                                            </div>
                                        </div>
                                        <!-- difference image end  -->


                                        <!-- difference -->
                                        <div class="mb-3">
                                            <label for="difference_title" class="form-label">Difference Title</label>
                                            <textarea name='difference_title'  id='difference_title' class="form-control" rows="3">{{   old("difference_title", $allhome->difference_title) }}</textarea>

                                            @error('difference')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <button class="text-white btn btn-primary" type='submit'>Update</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
    <!--end page wrapper -->
    @endsection

@section("script")
<script>
    $(document).ready(function () {

        setTimeout(() => {
            $(".general-message").fadeOut();
        }, 5000);

        let initTinyMCE = (id) => {
            tinymce.init({
                selector: '#'+id,
                plugins: 'advlist autolink lists link charmap print preview hr anchor pagebreak',
                toolbar_mode: 'floating',
                height: '300',

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code | rtl ltr',
                toolbar_mode: 'floating',
            });
        }

        initTinyMCE('title');
        initTinyMCE('box_title_1');
        initTinyMCE('box_title_2');
        initTinyMCE('box_title_3');
        initTinyMCE('box_title_4');
        initTinyMCE('project_short_title');
        initTinyMCE('difference');

    });

</script>
@endsection
