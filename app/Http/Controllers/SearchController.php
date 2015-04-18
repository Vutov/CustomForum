<?php namespace Forum\Http\Controllers;

use Forum\Comment;
use Forum\Http\Requests;
use Forum\Topic;
use Forum\User;
use Request;

class SearchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function search()
    {
        $input = Request::all();
        $query = $input['search'];
        $criteria = $input['criteria'];
        $query = preg_split('/\s+/', $query, -1, PREG_SPLIT_NO_EMPTY);
        $data = [];
        foreach ($query as $str) {
            if ($criteria === 'Username') {
                $user = User::where('name', 'LIKE', '%' . $str . '%')->get()->toArray();
                $data[] = $user;
            } else if ($criteria === 'Topic title') {
                $topic = Topic::where('title', 'LIKE', '%' . $str . '%')->get()->toArray();
                $data[] = $topic;
            } else if ($criteria === 'Topic question') {
                $topic = Topic::where('body', 'LIKE', '%' . $str . '%')->get()->toArray();
                $data[] = $topic;
            } else if ($criteria === 'Topic tags') {
                $topic = Topic::where('tags', 'LIKE', '%' . $str . '%')->get()->toArray();
                $data[] = $topic;
            } else if ($criteria === 'Topic category') {
                $topic = Topic::where('category', 'LIKE', '%' . $str . '%')->get()->toArray();
                $data[] = $topic;
            } else if ($criteria === 'Comment title') {
                $comment = Comment::where('title', 'LIKE', '%' . $str . '%')->get()->toArray();
                $data[] = $comment;
            } else if ($criteria === 'Comment answer') {
                $comment = Comment::where('body', 'LIKE', '%' . $str . '%')->get()->toArray();
                $data[] = $comment;
            }
        }

        return view('search', ['data' => $data]);
    }


}
