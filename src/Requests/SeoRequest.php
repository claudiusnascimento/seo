<?php namespace ClaudiusNascimento\Seo\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeoRequest extends FormRequest {



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

        $rule = [
            'rel' => 'required',
            'rel_id' => 'required',
            'og_image' => 'nullable|url',
            'og_url' => 'nullable|url',
            'twitter_image' => 'nullable|url',
            'twitter_url' => 'nullable|url'
        ];

        return $rule;
    }

    public function messages()
    {
        return array(
            'rel.required' => 'Sem identificação de relação. Contate o suporte',
            'rel_id.required' => 'Sem identificação de instancia. Contate o suporte',
            'og_url.url' => 'URL para o facebook não é válida',
            'og_image.url' => 'Imagem do facebook deve ser um URL válida',
            'twitter_url.url' => 'Url para o twitter não é válida',
            'twitter_image.url' => 'Imagem do twitter deve ser um URL válida',
        );
    }

    public function prepareForValidation()
    {
        $this->setErrorBag();
    }

    private function setErrorBag()
    {
        $this->errorBag = $this->has('errorBag') ? $this->get('errorBag') : 'default';
    }

}
