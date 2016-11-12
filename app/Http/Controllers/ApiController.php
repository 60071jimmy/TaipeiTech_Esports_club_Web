<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Html\FormFacade;
use Facebook\Facebook;

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
    public function index($postID)
    {   
        $ID='857268977677559_'.$postID;
        $url =  ("https://graph.facebook.com/v2.8/?ids=".$ID."&fields=reactions.type(LIKE).limit(0).summary(total_count).as(reactions_like),reactions.type(LOVE).limit(0).summary(total_count).as(reactions_love),reactions.type(WOW).limit(0).summary(total_count).as(reactions_wow),reactions.type(HAHA).limit(0).summary(total_count).as(reactions_haha),reactions.type(SAD).limit(0).summary(total_count).as(reactions_sad),reactions.type(ANGRY).limit(0).summary(total_count).as(reactions_angry)&access_token=EAAU5XAe6Ii0BAM55U8oTpMWMkdOQwvtfrt0KYQBV93Tcv9Gg5ZBKC767BdBXbgHuy9EuQJaDJrEHknSHgb2DIxVab5RSPiMzJr30x9WVM9ju04Du2U9x4j5sWYvLki4ffrFeNPAQh6VKdHM5NV9Mqd9VLarMY3zxFoZCGhHwZDZD");


        $json = file_get_contents($url);
        $json_data = json_decode($json, true);
        //print_r($json_data);
        $like_count = $json_data[$ID]['reactions_like']['summary']['total_count'];
        $heart_count = $json_data[$ID]['reactions_love']['summary']['total_count'];

        return view('api',compact(['like_count','heart_count']));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

