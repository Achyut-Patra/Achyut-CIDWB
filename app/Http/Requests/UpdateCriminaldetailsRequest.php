<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCriminaldetailsRequest extends FormRequest {

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
            'namfst' => 'required', 
            'nammddl' => 'required', 
            'namlst' => 'required', 
            'namalis' => 'required', 
            'lsidefce' => 'max:2048', 
            'fsidefce' => 'max:2048', 
            'rsidefce' => 'max:2048', 
            'crmdet' => 'required', 
            'dofcrm' => 'required', 
            'opertare' => 'required', 
            'cseref' => 'required', 
            'gend' => 'required', 
            
		];
	}
}
