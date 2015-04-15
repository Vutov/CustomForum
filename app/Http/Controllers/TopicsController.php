<?php namespace Forum\Http\Controllers;

use Carbon\Carbon;
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
            $newTopic = [
                'title' => $topic['title'],
                'body' => $topic['body'],
                'author' => $author,
                'time' => $time,
                'id' => $topic['id'],
            ];
            $data[] = $newTopic;
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
        Topic::create(['title' => $input['title'], 'body' => $input['body'], 'author_id' => Auth::user()->id]);
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
        $topic = Topic::findOrFail($id)->toArray();
        $time = Carbon::parse($topic['created_at'])->format('jS F Y \a\t H:m:s');
        $author = User::find($topic['author_id'])['name'];
        $data = ['topic' => $topic['title'], 'body' => $topic['body'], 'time' => $time, 'author' => $author];
        return view('topic', $data);
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
