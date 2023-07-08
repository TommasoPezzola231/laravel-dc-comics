<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicBookRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'description' => 'required',
            'thumb' => 'required|max:255|url',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:30',
            'artists' => 'required|min:5|max:255',
            'writers' => 'required|min:5|max:255',
        ];
    }


    public function messages()
    {
        return [
            "title.required" => "Il Titolo è obbligatorio!",
            "title.min" => "Devi inserire almeno :min Caratteri",
            "title.max" => "Puoi inserire un massimo di :max caratteri",

            "description.required" => "La Descrizione è obbligatoria!",

            "thumb.required" => "Il Link dell'immagine è obbligatorio!",
            "thumb.max" => "Puoi inserire un massimo di :max caratteri",
            "thumb.url" => "Il link deve essere valido",

            "price.required" => "Il Prezzo è obbligatorio!",

            "series.required" => "La Serie è obbligatoria!",

            "sale_date.required" => "La Data è obbligatoria",

            "type.required" => "Il Tipo è obbligatorio!",
            "type.min" => "Devi inserire almeno :min Caratteri",
            "type.max" => "Puoi inserire un massimo di :max caratteri",

            "artists.required" => "Gli Artisti sono obbligatori",
            "artists.min" => "Devi inserire almeno :min Caratteri",
            "artists.max" => "Puoi inserire un massimo di :max caratteri",

            "writers.required" => "Gli Scrittori sono obbligatori!",
            "writers.min" => "Devi inserire almeno :min Caratteri",
            "writers.max" => "Puoi inserire un massimo di :max caratteri",
        ];
    }
}
