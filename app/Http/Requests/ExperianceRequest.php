<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperianceRequest extends FormRequest
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
            'start_month' => 'string',
            'end_month'   => 'string',
            'start_year'  => 'string',
            'job_title'   => 'required',
            'company'     => 'required',
            'description' => '',
            'end_year'    => '',
            'outofrange'  => 'integer|min:3600' // For 28 days (min Expireance)
        ];
    }

    /**
     * Validate request
     * @return
     */
    public function prepareForValidation()
    {
        $starttime = mktime(
            0, 0, 0,
            array_search($this->input('start_month'), __('cv_lang.months')),
            0, $this->input('start_year'));

        $endtime = mktime(
            0, 0, 0,
            array_search($this->input('end_month'), __('cv_lang.months')),
            0, $this->input('end_year'));

        $end_year = $this->input('end_year');
        if ($this->input('end_month') == __('cv_lang.months')[0]) {
            $endtime  = time();
            $end_year = null;
        }
        $outofrange = $endtime - $starttime;

        $this->merge([
            'end_year'   => $end_year,
            'outofrange' => $outofrange,
        ]);

    }

    public function messages()
    {
        return [
            'outofrange.min' => __('cv_lang.date_error')
        ];
    }
}
