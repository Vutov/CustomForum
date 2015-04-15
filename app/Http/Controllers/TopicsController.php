<?php namespace Forum\Http\Controllers;

use Forum\Http\Requests;
use Forum\Http\Requests\NewTopicRequest;
use Forum\Http\Requests\SubmitTopicRequest;
use Forum\Topic;
use Illuminate\Support\Facades\Auth;
use Request;

class TopicsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $topics = Topic::latest()->get();
        return view('all-topics', ['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(NewTopicRequest $request)
    {
        return view('new-topic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SubmitTopicRequest $request)
    {
        $input = Request::all();
        Topic::create(['title'=>$input['title'], 'body'=>$input['body'], 'author'=>Auth::user()->name]);
        return redirect('/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        return $topic->toArray();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
