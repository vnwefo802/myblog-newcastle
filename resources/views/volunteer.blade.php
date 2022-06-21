@extends('layouts.app')

@section('title', 'Volunteer')
<head>
<meta name="description" content="Volunteer and Help Communities in Need.">
</head>
@section('content')

<div class='global-message info d-none'></div>


<div class="bg-gray-100 dark:bg-gray-800">
    <div class="container flex flex-col items-center py-12 mx-auto sm:py-24">
        <div class="flex-col items-center justify-center w-11/12 mb-5 sm:w-2/3 lg:flex sm:mb-10">
            <h1 class="text-2xl font-black leading-7 text-center text-gray-800 sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl dark:text-white md:leading-10">
            Volunteer Now and Help The
                <span class="text-indigo-700 dark:text-indigo-300">Communities</span>
                in Need
            </h1>
            <p class="mt-5 text-sm font-normal text-center text-gray-400 sm:mt-10 lg:w-10/12 sm:text-lg">Do you want to make a difference? Join our volunteer force now and make a differents!</p>
        </div>
        <div class="flex items-center justify-center">
            {{-- <button class="px-4 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border border-indigo-700 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600 lg:text-xl lg:font-bold sm:px-10 sm:py-4" onclick="scrollForm()">Get Started</button> --}}
            <!-- <button onclick="scrollForm()" class="px-4 py-2 ml-4 text-sm text-indigo-700 transition duration-150 ease-in-out bg-transparent border border-indigo-700 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:border-indigo-600 lg:text-xl lg:font-bold sm:px-10 sm:py-4 hover:bg-gray-700 hover:text-white">Volunteer Now!</button> -->
<script>
    function scrollForm() {
    const element = document.getElementById("formscroll");
    element.scrollIntoView();
    }
</script>
        </div>
    </div>
</div>





<div class="dark:text-white px-6 py-4 border-0 rounded relative mt-4 mb-4 bg-white dark:bg-gray-800 shadow xl:w-[1080px] md:w-11/12 lg:mx-auto" id="formscroll">

    <span class="inline-block mr-8 align-middle">
       We take <b class="capitalize">privacy!</b> issues seriously. You can be sure that your personal data is securely protected.
    </span>
    <button class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none" onclick="closeAlert(event)">
      <span>×</span>
    </button>
  </div>
  <script>
    function closeAlert(event){
      let element = event.target;
      while(element.nodeName !== "BUTTON"){
        element = element.parentNode;
      }
      element.parentNode.parentNode.removeChild(element.parentNode);
    }
  </script>





<div>
    <form id="form" action="{{ route('volunteer.store') }}" method="post" class="container mx-auto lg:w-[1080px] md:w-11/12 bg-white dark:bg-gray-800 shadow rounded">
        @csrf
        <div class="py-5 border-b border-gray-300 xl:w-full dark:border-gray-700">
            <div class="flex items-center w-11/12 mx-auto">
                <h1 role="heading"  class="text-lg font-bold text-gray-800 dark:text-gray-100">Personal Information</h1>
                <div class="ml-2 text-gray-600 cursor-pointer dark:text-gray-400">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_card_with_inputs-svg1.svg" alt="information">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_card_with_inputs-svg1dark.svg" alt="information">
                </div>
            </div>
        </div>

        <div class="w-11/12 mx-auto">
            <div class="container mx-auto">
                <div class="mx-auto my-8 xl:w-full xl:mx-0 py-14">
                    <div class="flex-wrap xl:flex lg:flex md:flex justify-evenly">
                        <div class="flex flex-col mb-6 xl:w-2/5 lg:w-2/5 md:w-2/5">
                            <label for="FirstName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">First Name</label>
                            <input tabindex="0" aria-label="Enter first name" type="text" name="first_name" required id="first_name" class="py-3 pl-3 text-sm text-gray-800 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-100" placeholder="" value="{{ old('first_name') }}"/>
                            @error('first_name')
                                <p class='text-red-500'>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6 xl:w-2/5 lg:w-2/5 md:w-2/5">
                            <label for="LastName" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Last Name</label>
                            <input tabindex="0" aria-label="Enter last name" type="text" id="last_name" name="last_name" required class="py-3 pl-3 text-sm text-gray-800 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-100" placeholder="" value="{{ old('last_name') }}" />
                            @error('last_name')
                                <p class='text-red-500'>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6 xl:w-2/5 lg:w-2/5 md:w-2/5">
                            <label for="email" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email</label>
                            <div class="relative">
                                <div class="absolute flex items-center h-full px-4 text-gray-600 border-r dark:text-gray-400">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_card_with_inputs-svg2.svg" alt="mail">
                                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_card_with_inputs-svg2dark.svg" alt="mail">
                                </div>
                                <input tabindex="0" aria-label="Enter email address" id="email" name="email" required class="flex items-center w-full py-3 pl-16 text-sm font-normal text-gray-800 bg-transparent border border-gray-300 rounded shadow dark:text-gray-100 focus:outline-none focus:border focus:border-indigo-700" placeholder="example@gmail.com" value="{{ old('email') }}"/>
                                @error('email')
                                    <p class='text-red-500'>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-col mb-6 xl:w-2/5 lg:w-2/5 md:w-2/5">
                            <label for="Country" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Country</label>
                            <input tabindex="0" aria-label="Enter country" type="text" id="country" name="country" required class="py-3 pl-3 text-sm text-gray-800 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-100" placeholder="" value="{{ old('country') }}"/>
                            @error('country')
                                <p class='text-red-500'>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6 xl:w-2/5 lg:w-2/5 md:w-2/5">
                            <label for="phone_number" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Phone Number</label>
                            <input tabindex="0" aria-label="Enter Phone number" type="text" id="phone_number" name="phone_number" required class="py-3 pl-3 text-sm text-gray-800 bg-transparent border border-gray-300 rounded shadow-sm dark:border-gray-700 focus:outline-none focus:border-indigo-700 dark:text-gray-100" placeholder="" value="{{ old('phone_number') }}"/>
                            @error('phone_number')
                                <p class='text-red-500'>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end w-full px-4 py-4 mt-6 bg-gray-100 rounded-bl rounded-br sm:px-12 dark:bg-gray-700">
            <button role="button" aria-label="save form" class="px-8 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded confirmDelete focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600 focus:outline-none" type="submit">Save</button>
        </div>
    </form>


</div>

@endsection


@section('custom_js')

<script>

	$(document).on("click", '.send-message-btn', (e) => {
		// e.preventDefault();
		let $this = e.target;

		let csrf_token = $($this).parents("form").find("input[name='_token']").val()

		let first_name = $($this).parents("form").find("input[name='first_name']").val()

		let last_name = $($this).parents("form").find("input[name='last_name']").val()

		let phone_number = $($this).parents("form").find("input[name='phone_number']").val()

        // console.log(phone_number);
		let country = $($this).parents("form").find("input[name='country']").val()


		let email = $($this).parents("form").find("input[name='email']").val()



		let formData = new FormData();
		formData.append('_token', csrf_token);
		formData.append('first_name', first_name);
		formData.append('last_name', last_name);
		formData.append('phone_number', phone_number);
		formData.append('country', country);
		formData.append('email', email);

		$.ajax({
			url: "{{ route('contact.store') }}",
			data: formData,
			type: 'POST',
			dataType: 'JSON',
			processData:false,
			contentType: false,
			success: function(data){

				if(data.success)
				{
                    console.log(data);
					$(".global-message").addClass('alert , alert-info')
					$(".global-message").fadeIn()
					$(".global-message").text(data.message)

					clearData($($this).parents("form"), ['first_name', 'last_name', 'phone_number', 'country', 'email']);

					setTimeout(() => {
						$(".global-message").fadeOut()
					}, 5000);
				}
				else
				{
					for (const error in data.errors)
					{
						$("small."+error).text(data.errors[error]);
					}
				}
			}
		})

	})

</script>
@endsection

