@extends('layout.master')

@section('content')

<meta http-equiv="refresh" content="5;url='http://ntut-esports.servegame.com/api/{{$user_id}}/{{$post_id}}/{{$reaction}}" />
@if(false)
<style>
        html {
          box-sizing: border-box;
          width: 100%;
          height: 100%;
        }
        *, *:before, *:after {
          box-sizing: inherit;
        }
        body{
            margin: 0;
            background:url('/img/vote/background.png') no-repeat; /* IMAGE NAME HERE */
            color: #F00;
            width: 100%;
            height: 100%;
        }
        #wrap{
            position: relative;
            margin: 0px auto;
            width: 1280px;
            height: 720px;
        }
        .cover{
            padding: 20px 80px;
            position: absolute;
            width: 1280px;
            height: 720px;
            top: 0;
            left: 0;
            z-index: 10;
        }
        .tc { text-align: left; font-size: 4rem; font-weight: bold; }
        .wf { width:40%; }
        .likes {
            position: absolute;
            top: 50%;
            left: 10%;
        }
        .heart {
            position: absolute;
            top: 50%;
            left: 10%;
        }
        .heart img {
            position: absolute;
            top: 25%;
            left: 0%;
        }
        .happy {
            position: absolute;
            top: 50%;
            right: 10%;
        }
        .happy img {
            position: absolute;
            top: 90%;
            right: 36%;
        }
        .sad {
            position: absolute;
            top: 50%;
            right: 10%;
        }
        .fml {
            position: absolute;
            top: 20%;
            right: 10%;
        }
        .angry {
            position: absolute;
            top: 48%;
            right: 10%;
        }
        .shock {
            position: absolute;
            top: 77.5%;
            right: 10%;
        }
    </style>
@endif
<style>
  #content {font-size: 20rem; text-align:center; line-height:600px; }
</style>

<div id="content">
     {{$count}}
</div>



@endsection