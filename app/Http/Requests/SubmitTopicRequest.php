<?php namespace Forum\Http\Requests;

use Forum\Http\Requests\Request;

class SubmitTopicRequest extends Request {

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
        return [
            'title' => 'required|min:10|max:25',
            'body' => 'required|min:10',
        ];
    }

    public function messages()
    {
        //TODO fix messages;
        return [
            'title.required' => 'Er, I have to add message!',
        ];
    }

}
