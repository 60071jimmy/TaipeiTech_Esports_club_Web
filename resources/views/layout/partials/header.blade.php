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

			@if(Session::has('flash_message'))
			    <div class="alert alert-success">
		        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('flash_message') }}
		        </div>
			@endif


                <div class="intro-lead-in">北科電競社</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#about" class="page-scroll btn btn-xl">關於我們</a>
            </div>
        </div>
    </header>