@extends('admin.layout.master')

@section('content')
<body>
  <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1470442312966701',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
        var accessToken = response.authResponse.accessToken;
        var userId = response.authResponse.userID;
        console.log(response);
        document.getElementsByName('token')[0].value = accessToken;
        document.getElementsByName('user_id')[0].value = userId;
        document.getElementsByName('successful')[0].innerText = "logged in";
       } 
    } );

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.

</script>
    
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">

                     @if (count($errors) > 0)
				    <!-- Form Error List -->
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
					@endif

                        <h3 class="panel-title">API register</h3>
                    </div>
                    <div class="panel-body">
                        <form method="GET" action="{{url('/api/{user_id}/{post_id}/{reaction}')}}" role="form">
                        {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <p>User id</p>
                                    <input class="form-control" placeholder="" name="user_id" type="text" autofocus  readonly="readonly"  value="857268977677559"></form> 
                                </div>
                                <div class="form-group">
                                    <p>Post id</p>
                                    <input class="form-control" placeholder="" name="post_id" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <p>Reactions</p>
                                    <select class="form-control" name = "reactions">
                                        <option value="like">like</option>
                                        <option value="love">love</option>
                                        <option value="wow">wow</option>
                                        <option value="haha">haha</option>
                                        <option value="sad">sad</option>
                                        <option value="angry">angry</option>
                                    </select>
                                </div>

                                <!--div class="form-group">
                                    <fb:login-button scope="public_profile,manage_pages" onlogin="checkLoginState();">授權</fb:login-button>
                                     <div name="successful"></div>
                                    
                                </div-->
                                
                                
                                <!--div class="form-group">
                                    <p>Token
                                    </p>
                                    <input class="form-control" placeholder="" name="token" type="text" value=""></form>
                                </div-->
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Get</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

<div id="status">
</div>



    <!--script>
    document.getElementById('shareBtn').onclick = function() {
      FB.ui({
        method: 'share',
        display: 'popup',
        href: 'https://developers.facebook.com/docs/',
      }, function(response){});
    }
    </script-->

</body>
</html>
@endsection