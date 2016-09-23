<!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
            
            @if (count($errors) > 0)
		    <!-- Form Error List -->
		    <div class="alert alert-danger">
		        <strong>Whoops! Something went wrong!</strong>

		        <br><br>

		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
			@endif

			@if (session()->has('flash_notification.message'))
			    <div class="alert alert-{{ session('flash_notification.level') }}">
			        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

			        {!! session('flash_notification.message') !!}
			    </div>
			@endif
				
				<div class="intro-heading">北科電競社</div>
                <div class="intro-lead-in">For the e-Sports</div>

                <a href="#join" class="page-scroll btn btn-xl">加入社團</a>
            </div>
        </div>
    </header>