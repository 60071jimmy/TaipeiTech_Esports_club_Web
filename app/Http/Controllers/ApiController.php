<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Html\FormFacade;
use Facebook\Facebook;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{   
    protected $fb;

    public function __construct()
    {
        $fb = new Facebook([
          'app_id' => '1470442312966701',
          'app_secret' => 'f0358b43669bda9079b84afab1e29106',
          'default_graph_version' => 'v2.8',
          ]);

        $fb->setDefaultAccessToken('EAAU5XAe6Ii0BALDoKEqbqZAIJg3jm5tCvBxU3b0wjVnaxQLFiVqRcdZBThDvxZC5VCKoQEzGt2zZCBy8Vc87FunOZAH9RE5H3nganMCAkqCOilbQhZBA4yZAESg9FcZBwFiJQcZBjaBrGxdZA4AUpYbg1YHmqmVQ0LPq0ZD');

        $this->fb = $fb;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        return view('access');
    }


    public function show(Request $request)
    {   
        /*
        $validator = Validator::make($request->all(), [
        'user_id' => 'required',
        'post_id' => 'required',
        'reactions' => 'required',
        //'token' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect('api')
                ->withInput()
                ->withErrors($validator);
        }
        */
        
        $token="EAACEdEose0cBAKZA2zT8zQzkyoFwjvF917OtohnVu3LsR7uNkLKpTF4LRUGFdYblZAVPRTm6HjcTnhjGyO8n0sLZAyXjmmktb0zPGcqUuZAFuf41jZBVSR9QdcvTROdfOSQRaN3l5zZBC9OD3U2I2sRtfYeStd4m8pnNPviMsZBYwZDZD";
        $user_id = $request['user_id'];
        $post_id = $request['post_id'];
        $reaction = $request['reactions'];

        $ID=$user_id."_".$post_id;
        
        $url =  ("https://graph.facebook.com/v2.8/?ids=".$ID.
            "&fields=reactions.type(LIKE).limit(0).summary(total_count).as(reactions_like),".
            "reactions.type(LOVE).limit(0).summary(total_count).as(reactions_love),".
            "reactions.type(WOW).limit(0).summary(total_count).as(reactions_wow),".
            "reactions.type(HAHA).limit(0).summary(total_count).as(reactions_haha),".
            "reactions.type(SAD).limit(0).summary(total_count).as(reactions_sad),".
            "reactions.type(ANGRY).limit(0).summary(total_count).as(reactions_angry)&".
            "access_token=".$token);


        $json = file_get_contents($url);
        $json_data = json_decode($json, true);
        //print_r($json_data);

        $reactions_array = [
            'LIKE' => 'reactions_like',
            'LOVE' => 'reactions_love',
            'WOW' => 'reactions_wow',
            'HAHA' => 'reactions_haha',
            'SAD' => 'reactions_sad',
            'ANGRY' => 'reactions_angry',
            ];

        $reaction = strtoupper($reaction);
        $count = $json_data[$ID][$reactions_array[$reaction]]['summary']['total_count'];

        return view('api',compact(['count','user_id','post_id','reaction']));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}

