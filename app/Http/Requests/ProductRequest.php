<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
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
      'category' => 'required|numeric',
      'name' => 'required|max:60',
      'brand' => 'max:100',
      'sku' => 'max:60',
      'oldPrice' => 'numeric|nullable',
      'price' => 'required|numeric',
      'isActive' => 'bool|nullable',
      'preDescription' => 'required|max:70',
      'description' => 'string',
      'stock' => 'required|numeric',
      'size' => 'numeric|nullable',
      'size_unit_id' => 'numeric|nullable',
      'volume' => 'numeric|nullable',
      'volume_unit_id' => 'numeric|nullable',
      'weight' => 'numeric|nullable',
      'weight_unit_id' => 'numeric|nullable',
    ];
  }
}
