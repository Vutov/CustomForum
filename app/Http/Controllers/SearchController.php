<?php namespace Forum\Http\Controllers;

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
        $query = Request::all()['query'];
        $user = User::where('name', '=', $query)->get()->toArray();
        $query = preg_split('/\s+/', $query, -1, PREG_SPLIT_NO_EMPTY);
        $data['user'] = $user;
        $topic = [];
        foreach ($query as $str) {
            $topicTitle = Topic::where('title', 'LIKE', '%' . $str . '%')->get()->toArray();
            $topicBody = Topic::where('body', 'LIKE', '%' . $str . '%')->get()->toArray();
            $topic[$str] = array_merge ($topicTitle, $topicBody);
//            $topicTags = Topic::where('tags', 'LIKE', '%' . $str . '%')->get()->toArray();
//            $topic[$str] = $topicTitle;
        }
        $data['title'] = $topic;
        return view('search', ['data' => $data]);
    }


}
