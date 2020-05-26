<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUploadRequest extends FormRequest {

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
            'upload_type_id_fk' => 'required', 
            'title' => 'required', 
            'description' => 'required', 
            'file_name' => 'required', 
            'flag' => 'numeric|required', 
            
		];
	}
}
