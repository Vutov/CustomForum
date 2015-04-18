<?php namespace Forum\Http\Requests;

use Forum\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class ReplyRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		if (Auth::guest()) {
            return [
                'title' => 'required|min:10|max:50',
                'body' => 'required|min:10',
                'email' => 'email|min:10|max:35',
                'name' => 'required|min:4|max:25',
            ];
		} else {
            return [
                'title' => 'required|min:10|max:100',
                'body' => 'required|min:10',
            ];
        }
	}

    public function messages()
    {
        return [
            'body.required' => 'The answer field is required.',
        ];
    }
}
