  @if(session()->has('flash_message'))
    <script>
        swal({   
        	title: "{{ session('flash_message.title') }}",
        	text: "{{ session('flash_message.message') }}",   
        	type: "{{ session('flash_message.notice') }}",   
        	timer: 2100,
        	showConfirmationButton: false,
        	//confirmButtonText: "Cool" 
        });
    </script>
  @endif