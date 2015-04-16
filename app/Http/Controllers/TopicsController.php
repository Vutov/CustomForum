<?php namespace Forum\Http\Controllers;

use Carbon\Carbon;
use Forum\Comment;
use Forum\Http\Requests;
use Forum\Http\Requests\NewTopicRequest;
use Forum\Http\Requests\SubmitTopicRequest;
use Forum\Topic;
use Forum\User;
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
        $data = [];
        foreach ($topics as $topic) {
            $author = User::find($topic['author_id'])['name'];
            $time = $topic->created_at->diffForHumans();
            $topic = $topic->toArray();
            $topic['author'] = $author;
            $topic['time'] = $time;
            $data[] = $topic;
        }

        return view('all-topics', ['topics' => $data]);
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
        Topic::create([
            'title' => $input['title'],
            'body' => $input['body'],
            'author_id' => Auth::user()->id,
            'visits' => 0,
            'tags' => '100 symbol limit',
            'category' => '25 symbol limit',
        ]);

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
        //Get comments
        $comments = Comment::where('topic_id', '=', $id)->latest()->get();
        $data = [];
        foreach($comments as $comment) {
            $time = $comment->created_at->diffForHumans();
            $comment = $comment->toArray();
            $comment['time'] = $time;
            $data[] = $comment;

        }
        //Update view count
        $topic->visits++;
        $topic->push();
        //Sum up the data
        $topic = $topic->toArray();
        $time = Carbon::parse($topic['created_at'])->format('jS F Y \a\t H:m:s');
        $author = User::find($topic['author_id'])['name'];
        $topic['time'] = $time;
        $topic['author'] = $author;
        $topic['comments'] = $data;

        return view('topic', $topic);
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
