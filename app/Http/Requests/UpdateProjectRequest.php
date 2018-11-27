<?php

namespace App\Http\Requests;

use App\Rules\Host;
use App\Rules\UrlPath;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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

        $project_rules = [
            'name' => 'required',
            'site' => [
                'required',
                'unique:seo_projects,site,' . $this->id,
                new Host()
            ]
        ];

        $pages_rules = [];
        foreach ($this->pages as $k => $page) {
            $rules = [
                'required',
                new UrlPath(),
            ];

            $pages_rules['pages.' . $k . '.url_path'] = $rules;
        }

        $pages_rules['pages.*.url_path'] = 'distinct';
        $pages_rules['pages.*.keywords.*.phrase'] = 'required';

        $result_rules = array_merge($project_rules, $pages_rules);

        return $result_rules;
    }
}
