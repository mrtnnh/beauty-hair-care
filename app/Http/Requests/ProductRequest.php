<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
  //protected $redirectRoute ='product_edit'
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category' =>['required'],
            'brand' =>['required','string','max:20'],
            'product_name' => ['required','string','max:30'],
            'price' =>['required','integer'],
            'stock' =>['required','integer'],
            'use_scene' =>['required'],
            'description' =>['required','string','max:1000'],
            'image'=>['required']
        ];
    }

   //  public function validationData()
   // {
   //     return array_merge($this->request->all(), [
   //         'id' => Route::input('id')
   //     ]);
   // }
}
