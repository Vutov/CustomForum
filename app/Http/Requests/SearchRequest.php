<?php namespace Forum\Http\Requests;

use Forum\Http\Requests\Request;

class SearchRequest extends Request {

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
			'search' => 'required|min:4|max:20',
            'criteria' => 'required'
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
            'search.min' => 'The search must be at least 4 characters long.',
            'search.max' => 'The search may not be greater than 20 characters long.',
        ];
    }

}
