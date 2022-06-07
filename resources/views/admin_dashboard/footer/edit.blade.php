
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
            <div class="breadcrumb-title pe-3">Footer</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-footer-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Footer</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Footer</h5>
                <hr/>

                <form action="{{ route('admin.footer.update') }}" method='post' enctype='multipart/form-data'>
                    @csrf

                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">

                                <!-- Title -->
                                <div class="mb-3">
                                    <label for="title" class="form-label">Short Description</label>
                                    <textarea name='title'  id='title' class="form-control" rows="3">{{-- old("title", $allfooter->title) --}}</textarea>
                                
                                    @error('title')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Category -->
                                <div class="mb-3">
                                    <label for="title" class="form-label">Category</label>
                                    <textarea name='title'  id='title' class="form-control" rows="3">{{-- old("title", $allfooter->title) --}}</textarea>
                                
                                    @error('title')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Blog -->

                                <div class="mb-3">
                                    <label for="title" class="form-label">Blog</label>
                                    <textarea name='title'  id='title' class="form-control" rows="3">{{-- old("title", $allfooter->title) --}}</textarea>
                                
                                    @error('title')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                                <!--Contact Us-->
                                <div class="mb-3">
                                    <label for="title" class="form-label">Contact Us</label>
                                    <textarea name='title'  id='title' class="form-control" rows="3">{{-- old("title", $allfooter->title) --}}</textarea>
                                
                                    @error('title')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>



                                <!-- Facebook -->
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook Link</label>
                                    <input name='facebook'  id='facebook' class="border rounded h-[38px] w-full"  value='{{-- old("facebook", $allfooter->facebook) --}}'>
                                
                                    @error('facebook')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                                    
                                <!-- Twitter -->
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter Link</label>
                                    <input name='twitter'  id='twitter' class="border rounded h-[38px] w-full" value='{{-- old("twitter", $allfooter->twitter) --}}'>
                                
                                    @error('twitter')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Instagram -->
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram Link</label>
                                    <input name='instagram'  id='instagram' class="border rounded h-[38px] w-full" value='{{-- old("instagram", $allfooter->instagram) --}}'>
                                
                                    @error('instagram')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- YouTube -->
                                <div class="mb-3">
                                    <label for="youtube" class="form-label">Youtube Link</label>
                                    <input name='youtube'  id='youtube' class="border rounded h-[38px] w-full" value='{{-- old("youtube", $allfooter->youtube) --}}'>
                                
                                    @error('youtube')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
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