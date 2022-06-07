
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
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <!-- community 1 -->
                                        <div class="mb-3">
                                            <label for="community1" class="form-label">Community Text 1</label>
                                            <input name='community1'  id='community1' class="border rounded h-[38px] w-full" value='{{-- old("community1", $allfooter->community1) --}}'>
                                        
                                            @error('community1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class='col-md-6'>
                                        <!-- community_link_1 -->
                                        <div class="mb-3">
                                            <label for="community_link_1" class="form-label">Community Link 1</label>
                                            <input name='community_link_1'  id='community_link_1' class="border rounded h-[38px] w-full" value='{{-- old("community_link_1", $allfooter->community_link_1) --}}'>
                                        
                                            @error('community_link_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- community2 -->
                                        <div class="mb-3">
                                            <label for="community2" class="form-label">Community Text 2</label>
                                            <input name='community2'  id='community2' class="border rounded h-[38px] w-full" vlaue='{{-- old("community2", $allfooter->community2) --}}'>
                                        
                                            @error('community2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- community_link_2 -->
                                        <div class="mb-3">
                                            <label for="community_link_2" class="form-label">Community Link 2</label>
                                            <input name='community_link_2'  id='community_link_2' class="border rounded h-[38px] w-full" value='{{-- old("community_link_2", $allfooter->community_link_2) --}}'>
                                        
                                            @error('community_link_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- community3 -->
                                        <div class="mb-3">
                                            <label for="community3" class="form-label">Community Text 3</label>
                                            <input name='community3'  id='community3' class="border rounded h-[38px] w-full" value='{{-- old("community3", $allfooter->community3) --}}'>
                                        
                                            @error('community3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- community_link_2 -->
                                        <div class="mb-3">
                                            <label for="community_link_3" class="form-label">Community Link 3</label>
                                            <input name='community_link_3'  id='community_link_3' class="border rounded h-[38px] w-full" value='{{-- old("community_link_3", $allfooter->community_link_3) --}}'>
                                        
                                            @error('community_link_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- community4 -->
                                        <div class="mb-3">
                                            <label for="community4" class="form-label">Community Text 4</label>
                                            <input name='community4'  id='community4' class="border rounded h-[38px] w-full" value='{{-- old("community4", $allfooter->community4) --}}'>
                                        
                                            @error('community4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- community_link_4 -->
                                        <div class="mb-7">
                                            <label for="community_link_4" class="form-label">Community Link 4</label>
                                            <input name='community_link_4'  id='community_link_4' class="border rounded h-[38px] w-full" value=' {{-- old("community_link_4", $allfooter->community_link_4) --}}'>
                                        
                                            @error('community_link_4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-5"></div>
                                    <div class='col-md-6'>
                                        <!-- blog1 -->
                                        <div class="mb-3">
                                            <label for="blog1" class="form-label">Blog Text 1</label>
                                            <input name='blog1'  id='blog1' class="border rounded h-[38px] w-full" value='{{-- old("blog1", $allfooter->blog1) --}}'>
                                        
                                            @error('blog1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- blog_link_1 -->
                                        <div class="mb-3">
                                            <label for="blog_link_1" class="form-label">Blog Link 1</label>
                                            <input name='blog_link_1'  id='blog_link_1' class="border rounded h-[38px] w-full" value='{{-- old("blog_link_1", $allfooter->blog_link_1) --}}'>
                                        
                                            @error('blog_link_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                        <!-- blog2 -->
                                        <div class="mb-3">
                                            <label for="blog2" class="form-label">Blog Text 2</label>
                                            <input name='blog2'  id='blog2' class="border rounded h-[38px] w-full" value='{{-- old("blog2", $allfooter->blog2) --}}'>
                                        
                                            @error('blog2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- blog_link_2 -->
                                        <div class="mb-3">
                                            <label for="blog_link_2" class="form-label">Blog Link 2</label>
                                            <input name='blog_link_2'  id='blog_link_2' class="border rounded h-[38px] w-full" value='{{-- old("blog_link_2", $allfooter->blog_link_2) --}}'>
                                        
                                            @error('blog_link_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- blog3 -->
                                        <div class="mb-3">
                                            <label for="blog3" class="form-label">Blog Text 3</label>
                                            <input name='blog3'  id='blog3' class="border rounded h-[38px] w-full" value='{{-- old("blog3", $allfooter->blog3) --}}'>
                                        
                                            @error('blog3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- blog_link_3 -->
                                        <div class="mb-3">
                                            <label for="blog_link_3" class="form-label">Blog Link 3</label>
                                            <input name='blog_link_3'  id='blog_link_3' class="border rounded h-[38px] w-full" value='{{-- old("blog_link_3", $allfooter->blog_link_3) --}}'>
                                        
                                            @error('blog_link_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                        
                                        
                                    <div class='col-md-6'>
                                        <!-- blog4 -->
                                        <div class="mb-3">
                                            <label for="blog4" class="form-label">Blog  Text 4</label>
                                            <input name='blog4'  id='blog4' class="border rounded h-[38px] w-full" value='{{-- old("blog4", $allfooter->blog4) --}}'>
                                        
                                            @error('blog4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- blog_link_4 -->
                                        <div class="mb-3">
                                            <label for="blog_link_4" class="form-label">Blog Link 4</label>
                                            <input name='blog_link_4'  id='blog_link_4' class="border rounded h-[38px] w-full" value='{{-- old("blog_link_4", $allfooter->blog_link_4) --}}'>
                                        
                                            @error('blog_link_4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- blog5 -->
                                        <div class="mb-3">
                                            <label for="blog5" class="form-label">Blog text 5</label>
                                            <input name='blog5'  id='blog5' class="border rounded h-[38px] w-full" value='{{-- old("blog5", $allfooter->blog5) --}}'>
                                        
                                            @error('blog5')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- blog_link_5 -->
                                        <div class="mb-3">
                                            <label for="blog_link_5" class="form-label">Blog Link 1</label>
                                            <input name='blog_link_5'  id='blog_link_5' class="border rounded h-[38px] w-full" value='{{-- old("blog_link_5", $allfooter->blog_link_5) --}}'>
                                        
                                            @error('blog_link_5')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-5"></div>

                                    <div class='col-md-6'>
                                        <!-- contact1 -->
                                        <div class="mb-3">
                                            <label for="contact1" class="form-label">Contact text 1</label>
                                            <input name='contact1'  id='contact1' class="border rounded h-[38px] w-full" value='{{-- old("contact1", $allfooter->contact1) --}}'>
                                        
                                            @error('contact1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- contact_link_1 -->
                                        <div class="mb-3">
                                            <label for="contact_link_1" class="form-label">Contact Link 1</label>
                                            <input name='contact_link_1'  id='contact_link_1' class="border rounded h-[38px] w-full" value='{{-- old("contact_link_1", $allfooter->contact_link_1) --}}'>
                                        
                                            @error('contact_link_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- contact2 -->
                                        <div class="mb-3">
                                            <label for="contact2" class="form-label">Contact text 2</label>
                                            <input name='contact2'  id='contact2' class="border rounded h-[38px] w-full" value='{{-- old("contact2", $allfooter->contact2) --}}'>
                                        
                                            @error('contact2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- contact_link_2 -->
                                        <div class="mb-3">
                                            <label for="contact_link_2" class="form-label">Contact Link 2</label>
                                            <input name='contact_link_2'  id='contact_link_2' class="border rounded h-[38px] w-full" value='{{-- old("contact_link_2", $allfooter->contact_link_2) --}}'>
                                        
                                            @error('contact_link_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <!-- contact3 -->
                                        <div class="mb-3">
                                            <label for="contact3" class="form-label">Contact text 3</label>
                                            <input name='contact3'  id='contact3' class="border rounded h-[38px] w-full" value='{{-- old("contact3", $allfooter->contact3) --}}'>
                                        
                                            @error('contact3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- contact_link_3 -->
                                        <div class="mb-3">
                                            <label for="contact_link_3" class="form-label">Contact Link 3</label>
                                            <input name='contact_link_3'  id='contact_link_3' class="border rounded h-[38px] w-full" value='{{-- old("contact_link_3", $allfooter->contact_link_3) --}}'>
                                        
                                            @error('contact_link_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class='col-md-6'>
                                        <!-- contact4 -->
                                        <div class="mb-3">
                                            <label for="contact4" class="form-label">Contact text 4</label>
                                            <input name='contact4'  id='contact4' class="border rounded h-[38px] w-full" value='{{-- old("contact4", $allfooter->contact4) --}}'>
                                        
                                            @error('contact4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class='col-md-6'>
                                        <!-- contact_link_4 -->
                                        <div class="mb-3">
                                            <label for="contact_link_4" class="form-label">Contact Link 4</label>
                                            <input name='contact_link_4'  id='contact_link_4' class="border rounded h-[38px] w-full" value='{{-- old("contact_link_4", $allfooter->contact_link_4) --}}'>
                                        
                                            @error('contact_link_4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- contact5 -->
                                        <div class="mb-3">
                                            <label for="contact5" class="form-label">Contact text 5</label>
                                            <input name='contact5'  id='contact5' class="border rounded h-[38px] w-full" value='{{-- old("contact5", $allfooter->contact5) --}}'>
                                        
                                            @error('contact5')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                        <!-- contact_link_5 -->
                                        <div class="mb-3">
                                            <label for="contact_link_5" class="form-label">Contact Link 1</label>
                                            <input name='contact_link_5'  id='contact_link_5' class="border rounded h-[38px] w-full" value='{{-- old("contact_link_5", $allfooter->contact_link_5) --}}'>
                                        
                                            @error('contact_link_5')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-5"></div>

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
        initTinyMCE('box_short_description_1');
        initTinyMCE('box_short_description_2');
        initTinyMCE('box_short_description_3');
        initTinyMCE('box_short_description_4');
        initTinyMCE('project_short_title');
        initTinyMCE('difference_title');

    });

</script>
@endsection