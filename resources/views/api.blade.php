@extends('layout.master')

@section('content')
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
            background:url('') no-repeat; /* IMAGE NAME HERE */
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
        .tc { text-align: center; font-size: 20rem; font-weight: bold; }
        .wf { width: 28%; }
        .likes {
            position: absolute;
            top: 50%;
            left: 10%;
        }
        .likes img {
            position: absolute;
            top: 0%;
            left: 25%;
        }
        .heart {
            position: absolute;
            top: 50%;
            right: 10%;
        }
        .heart img {
            position: absolute;
            top: 50%;
            right: 25%;
        }
        .sad {
            position: absolute;
            top: 77.5%;
            left: 5%;
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
<div class="tc wf likes">{{$like_count}}
      <!--img src="/img/download/marketing.jpg"-->
</div>
<div class="tc wf heart">{{$heart_count}}</div>

@endsection