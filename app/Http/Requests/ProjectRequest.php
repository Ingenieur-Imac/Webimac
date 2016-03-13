<?php

namespace Imac\Http\Requests;

use Imac\Http\Requests\Request;

class ProjectRequest extends Request
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
            'name' => 'required|min:3',
            'github_link' => 'active_url',
            'web_link' => 'active_url',
            'vimeo_link' => 'active_url'
        ];
    }
}
