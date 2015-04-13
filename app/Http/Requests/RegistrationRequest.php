<?php namespace Forum\Http\Requests;

use Forum\Http\Requests\Request;

class RegistrationRequest extends Request {

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
    //To fix better validation
	public function rules()
	{
		return [
			'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'pass' => 'required|min:3|max:20',
            'pass2' => 'required|same:pass',
		];
	}
    //To fix better messages
    public function messages() {
        return [
            'name.required' => 'TODO OVerride messages!',
        ];
    }
}
