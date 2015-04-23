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
            'category' => ['regex:/\bProgramming\b|\bFun\b|\bCannot think of category\b/', 'max:25', 'required'],
            'tags' => 'required|min:3|max:100'
        ];
    }

    /**
     * Overrides default messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'body.required' => 'The question field is required.',
        ];
    }

}
