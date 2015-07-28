<?php

namespace App\Http\Requests;

use App\Service;
use App\Http\Requests\Request;

class ApplicationFormRequest extends Request
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
        $service = Service::findorFail($this->input('service_id'));
        return  $service->fields->lists('rules', 'id')->toArray();
    }
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
      $service = Service::findorFail($this->input('service_id'));
      $messages = [];
      foreach ($service->fields as $field) {
        foreach ($field->rulemessages as $rm) {
          $messages[$rm->rule] = $rm->message;
        }
      }
      return $messages;
    }
}
