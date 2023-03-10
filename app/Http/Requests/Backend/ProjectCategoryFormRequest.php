<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\ProjectCategory;

class ProjectCategoryFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'name' => [
            'required',
            'max:255',
            Rule::unique(ProjectCategory::class)->ignore($this->project_category->id ?? null),],
            'status' => [
                'required',
            ],
        ];
    }

}
