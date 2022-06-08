
@extends("admin_dashboard.layouts.app")

@section("style")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js" integrity="sha512-XNYSOn0laKYg55QGFv1r3sIlQWCAyNKjCa+XXF5uliZH+8ohn327Ewr2bpEnssV9Zw3pB3pmVvPQNrnCTRZtCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection


@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">Footer</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-footer-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Footer</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="p-4 card-body">
                <h5 class="card-title">Edit Footer</h5>
                <hr/>

                <form action="{{ route('admin.footer.update') }}" method='post' >
                    @csrf

                    <div class="mt-4 form-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-4 border rounded border-3">

                                <!-- Title -->
                                <div class="mb-3">
                                    <label for="title" class="form-label">Short Description</label>
                                    <textarea name='title'  id='title' class="form-control" rows="3">{{ old("title", $footer->title) }}</textarea>

                                    @error('title')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- contact info -->
                                <div class="mb-3">
                                    <label for="contact_info" class="form-label">contact info</label>
                                    <textarea name='contact_info'  id='contact_info' class="form-control" rows="3">{{-- old("contact_info", $allfooter->contact_info) --}}</textarea>
                                
                                    @error('contact_info')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- email -->

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <textarea name='email'  id='email' class="form-control" rows="3">{{-- old("email", $allfooter->email) --}}</textarea>
                                
                                    @error('email')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <!-- Facebook -->
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook Link</label>
                                    <input name='facebook'  id='facebook' class="border rounded h-[38px] w-full"  value='{{old("facebook", $footer->facebook) }}'>

                                    @error('facebook')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Twitter -->
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter Link</label>
                                    <input name='twitter'  id='twitter' class="border rounded h-[38px] w-full" value='{{ old("twitter", $footer->twitter) }}'>

                                    @error('twitter')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Instagram -->
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram Link</label>
                                    <input name='instagram'  id='instagram' class="border rounded h-[38px] w-full" value='{{old("instagram", $footer->instagram) }}'>

                                    @error('instagram')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- YouTube -->
                                <div class="mb-3">
                                    <label for="youtube" class="form-label">Youtube Link</label>
                                    <input name='youtube'  id='youtube' class="border rounded h-[38px] w-full" value='{{ old("youtube", $footer->youtube) }}'>

                                    @error('youtube')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class='row'>
                                    <div class='col-md-6'>
                                        <div class="mb-3">
                                            <label for="community_section" class="form-label"> Community Section</label>
                                            <textarea name='community_section'  id='community_section' class="form-control" rows="3">{{ old("community_section", $footer->community_section) }}</textarea>

                                            @error('community_section')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    <div class="mb-5"></div>
                                    <div class="mb-3">
                                        <label for="blog_section" class="form-label"> blog Section</label>
                                        <textarea name='blog_section'  id='blog_section' class="form-control" rows="3">{{ old("blog_section", $footer->blog_section) }}</textarea>

                                        @error('blog_section')
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="contact_us_section" class="form-label"> Contact Us Section</label>
                                        <textarea name='contact_us_section'  id='contact_us_section' class="form-control" rows="3">{{ old("contact_us_section", $footer->contact_us_section) }}</textarea>

                                        @error('contact_us_section')
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <button class='btn btn-primary' type='submit'>Update</button>
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
        initTinyMCE('community_section');
        initTinyMCE('blog_section');
        initTinyMCE('contact_us_section');


    });

</script>
@endsection
