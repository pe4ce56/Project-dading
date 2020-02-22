<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducts extends FormRequest
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
            'code' => 'required|unique:products',
            'name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Kode Produk Harus diisi',
            'name.required' => 'Nama Produk Harus diisi',
            'image.required' => 'Gambar Produk Harus diisi',
            'category_id.required' => 'Kategori Produk Harus diisi',
            'code.unique' => 'Kode Produk Sudah Digunakan',
            'image.mimes' => 'Tipe File Harus jpg,jpeg,png',
        ];
    }
}
