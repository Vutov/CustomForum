<?php namespace Forum\Http\Requests;

use Illuminate\Support\Facades\Auth;

class ViewProfileRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()) {
            return true;
        } else {
            return false;
        }
    }

    //If not logged
    public function forbiddenResponse()
    {
        session()->flash('flash_message', 'You have to be logged in to view your profile!');
        return redirect('auth/login');
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
