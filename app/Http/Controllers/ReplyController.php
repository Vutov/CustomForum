<?php namespace Forum\Http\Controllers;


use Forum\Comment;
use Forum\Http\Requests;
use Forum\Http\Requests\ReplyRequest;
use Forum\Topic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Request;

class ReplyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\ReplyRequest $request
     * @return Response
     */
    public function store(ReplyRequest $request)
    {
        $input = Request::all();
        $id = Crypt::decrypt($input['id']);
        $topic = Topic::findorfail($id);

        if (Auth::guest()) {
            Comment::create([
                'title' => $input['title'],
                'body' => $input['body'],
                'topic_id' => $topic['id'],
                'guest' => true,
                'user_name' => $input['name'],
                'user_email' => $input['email'],
            ]);
        } else {
            $comment = new Comment([
                'title' => $input['title'],
                'body' => $input['body'],
                'topic_id' => $topic['id'],
                'guest' => false,
                'user_name' => Auth::User()->name,
                'user_email' => "",
            ]);
            Auth::user()->comments()->save($comment);
        }

        return redirect("/forum/$id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
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
