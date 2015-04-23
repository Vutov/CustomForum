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

        session()->flash('flash_message', 'New reply created');
        return redirect("/forum/$id");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, Requests\EditRequest $request)
    {
        $comment = Comment::findOrFail($id);
        return view('edit-comment', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, ReplyRequest $request)
    {
        $input = Request::all();
        $comment = Comment::findOrFail($id);
        $comment->update($input);

        session()->flash('flash_message', 'You have successfully updated your answer!');
        return redirect("/forum/". $comment['topic_id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id, Requests\EditRequest $request)
    {
        Comment::where('id', '=', $id)->delete();
        session()->flash('flash_message', 'Answer deleted!');
        return redirect()->back();
    }

}
