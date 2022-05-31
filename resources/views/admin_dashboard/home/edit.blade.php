
@extends("admin_dashboard.layouts.app")

@section("style")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js" integrity="sha512-XNYSOn0laKYg55QGFv1r3sIlQWCAyNKjCa+XXF5uliZH+8ohn327Ewr2bpEnssV9Zw3pB3pmVvPQNrnCTRZtCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection


    @section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Home</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
          
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Edit Home Page</h5>
                    <hr/>

                    <form action="{{ route('admin.home.update') }}" method='post' enctype='multipart/form-data'>
                        @csrf
    
                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="border border-3 p-4 rounded">


         
                                       
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

                                        <!-- box_title_1 -->
                                    <div class="mb-3">
                                            <label for="box_title_1" class="form-label">Box Title 1</label>
                                            <textarea name='box_title_1'  id='box_title_1' class="form-control" rows="3">{{ old("box_title_1", $allhome->box_title_1) }}</textarea>
                                        
                                            @error('box_title_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- box_title_2 -->
                                    <div class="mb-3">
                                            <label for="box_title_2" class="form-label">Box Title 2</label>
                                            <textarea name='box_title_2'  id='box_title_2' class="form-control" rows="3">{{ old("box_title_2", $allhome->box_title_2) }}</textarea>
                                        
                                            @error('box_title_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- box_title_3 -->
                                    <div class="mb-3">
                                            <label for="title" class="form-label">Box Title 3</label>
                                            <textarea name='title'  id='title' class="form-control" rows="3">{{ old("box_title_3", $allhome->box_title_3) }}</textarea>
                                        
                                            @error('box_title_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- box_title_4 -->
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

                                        <!-- title -->
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <textarea name='title'  id='title' class="form-control" rows="3">{{ old("title", $allhome->title) }}</textarea>
                                        
                                            @error('title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- box_short_description_1 -->
                                        <div class="mb-3">
                                            <label for="box_short_description_1" class="form-label">Box Short Description 1</label>
                                            <textarea name='box_short_description_1'  id='box_short_description_1' class="form-control" rows="3">{{ old("box_short_description_1", $allhome->box_short_description_1) }}</textarea>
                                        
                                            @error('box_short_description_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- box_short_description_2 -->
                                        <div class="mb-3">
                                            <label for="box_short_description_2" class="form-label">Box Short Description 2</label>
                                            <textarea name='box_short_description_2'  id='box_short_description_2' class="form-control" rows="3">{{ old("box_short_description_2", $allhome->box_short_description_2) }}</textarea>
                                        
                                            @error('box_short_description_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- box_short_description_3 -->
                                        <div class="mb-3">
                                            <label for="box_short_description_3" class="form-label">Box Short Description 3</label>
                                            <textarea name='box_short_description_3'  id='box_short_description_3' class="form-control" rows="3">{{ old("box_short_description_3", $allhome->box_short_description_3) }}</textarea>
                                        
                                            @error('box_short_description_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- box_short_description_4 -->
                                        <div class="mb-3">
                                            <label for="box_short_description_4" class="form-label">Box Short Description 4</label>
                                            <textarea name='box_short_description_4'  id='box_short_description_4' class="form-control" rows="3">{{ old("box_short_description_4", $allhome->box_short_description_4) }}</textarea>
                                        
                                            @error('box_short_description_4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- project_short_title -->
                                        <div class="mb-3">
                                            <label for="project_short_title" class="form-label">Project Short Title</label>
                                            <textarea name='project_short_title'  id='project_short_title' class="form-control" rows="3">{{ old("project_short_title", $allhome->project_short_title) }}</textarea>
                                        
                                            @error('project_short_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- difference_title -->
                                        <div class="mb-3">
                                            <label for="difference_title" class="form-label">Difference Title</label>
                                            <textarea name='difference_title'  id='difference_title' class="form-control" rows="3">{{ old("difference_title", $allhome->difference_title) }}</textarea>
                                        
                                            @error('difference_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        

                                        <button class='btn btn-primary text-blue-500 hover:text-white' type='submit'>Update</button>
                                        
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
        initTinyMCE('box_short_description_1');
        initTinyMCE('box_short_description_2');
        initTinyMCE('box_short_description_3');
        initTinyMCE('box_short_description_4');
        initTinyMCE('project_short_title');
        initTinyMCE('difference_title');

    });

</script>
@endsection