<?php namespace Forum\Http\Requests;

use Forum\Comment;
use Forum\Http\Requests\Request;
use Forum\Topic;
use Illuminate\Support\Facades\Auth;

class EditRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
    public function authorize()
    {
        $topicId = $this->route('forum');
        $commentId = $this->route('reply');
        if($topicId){
            $edit = Topic::find($topicId);
        }
        elseif ($commentId) {
            $edit = Comment::find($commentId);
        }
        else {
            return false;
        }
        if (Auth::user()) {
            if (Auth::user()->id === $edit['user_id'] || Auth::user()->admin) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function forbiddenResponse()
    {
        session()->flash('flash_message_forbidden', 'What are you doing?!');
        return redirect()->back();
    }


    /**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
		];
	}

}
