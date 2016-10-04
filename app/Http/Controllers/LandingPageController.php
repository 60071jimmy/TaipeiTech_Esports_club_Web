<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Join;
class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createJoin(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required|max:30',
        'class' => 'required|max:30',
        'student_id' => 'required|unique:joins|max:20',
        'gender' => 'required|max:2',
        'facebook_url' => 'required',
        'clubs_experience' => 'required',
        'activities_experience' => 'required',
        'games' => 'required',
        'join_motivation' => 'required',
        ]);

        if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
        }

        $join = new Join;
        $join->name = $request->name;
        $join->class = $request->class;
        $join->student_id = $request->student_id;
        $join->gender = $request->gender;
        $join->facebook_url = $request->facebook_url;
        $join->clubs_experience = $request->clubs_experience;
        $join->activities_experience = $request->activities_experience;

        if(count($request->games)>0){
            $games_array = $request->games;
            foreach ($games_array as $game ) {
                $join->games_experience .=$game .",";
            }
            $join->games_experience = $request->other_games? $join->games_experience.$request->other_games : substr($join->games_experience, 0, -1);
        }
        
        $join->join_motivation = $request->join_motivation;
        $join->save();

        //print_r($request->games) ;
        flash('歡迎加入電競社<br>
            粉絲專頁：<a href="https://www.facebook.com/TaipeiTechESport">https://www.facebook.com/TaipeiTechESport</a><br>
            社團網址：<a href="https://www.facebook.com/groups/741022806041779/">https://www.facebook.com/groups/741022806041779/</a><br>
            北科校際盃正火熱招募工作人員中~<br>
            歡迎有興趣的同學與我們一同見證冠軍的誕生。<br>
            決賽日期暫定於12月中旬<br>
            (詳細請聯絡社團幹部)');

        return redirect('/');
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
