<?php

namespace App\Http\Controllers;

use App\Models\OnlineReviews;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;//クエリビルダでDBに保存されているものを表示させる。
use App\Http\Requests\StoreOnlineReviews;


class OnlineReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $reviews =DB::table('online_reviews')
            ->select('title','text','user_id','created_at')
            ->orderBy('created_at','desc')// 登録日時の順序を設定できる laravel公式にてクエリビルダにある。
            ->paginate(5); //メソッドチェーンのget

            return view('online-reviews.index',compact('reviews'));
            
        }
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOnlineReviews $request)
    {
        $review = new OnlineReviews;
        $review->user_id = $request->user()->id;
        $review->title = $request->input('title');
        $review->text = $request->input('text');

        $review->save();
        return redirect()->route('online_reviews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = OnlineReviews::find($id); //ddで$reviewに値が入っていないのでルーティングを確認
        // dd($id);

        return view('online-reviews.show',compact('review'));
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

// dd($posts);