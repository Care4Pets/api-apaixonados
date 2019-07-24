<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute dever ser aceito.',
    'active_url' => 'O link :attribute não é uma URL válida.',
    'after' => ':attribute deve ser uma data depois de :date.',
    'after_or_equal' => ':attribute deve ser uma data0 igual ou depois de :date.',
    'alpha' => ':attribute deve ter somente letras.',
    'alpha_dash' => ':attribute deve conter apenas letras, números, traços (-) e underscores (_).',
    'alpha_num' => ':attribute pode conter apenas letras e números.',
    'array' => ':attribute deve ser um array|.',
    'before' => ':attribute deve ser uma data anterior à :date.',
    'before_or_equal' => ':attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => ':attribute deve ser um número entre :min e :max.',
        'file' => ':attribute deve ter um tamanho entre :min e :max kilobytes.',
        'string' => ':attribute deve ter entre :min and :max caracteres.',
        'array' => ':attribute must have between :min and :max items.',
    ],
    'boolean' => ':attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação de :attribute é diferente de :attribute.',
    'date' => ':attribute não é uma data válida.',
    'date_equals' => ':attribute deve ser uma data igual à :date.',
    'date_format' => ':attribute deve ter o seguinte formato :format.',
    'different' => ':attribute e :other devem ser diferentes.',
    'digits' => ':attribute deve ter :digits dígitos (algarismos).',
    'digits_between' => ':attribute deve estar entre :min e :max dígitos.',
    'dimensions' => 'A imagem :attribute tem dimensões inválidas.',
    'distinct' => ':attribute tem um valor duplicado.',
    'email' => ':attribute deve ser um e-mail válido.',
    'ends_with' => ':attribute deve terminar com um dos seguintes valores: :values',
    'exists' => 'O valor selecionado em :attribute é inválido.',
    'file' => ':attribute deve ser um arquivo.',
    'filled' => ':attribute deve ser preenchido.',
    'gt' => [
        'numeric' => ':attribute deve ter um valor maior que :value.',
        'file' => ':attribute deve ter um tamanho maior que :value kilobytes.',
        'string' => ':attribute deve ser uma palavra com mais de :value caracteres.',
        'array' => 'O :attribute deve ter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => ':attribute deve ser maior ou igual a :value.',
        'file' => ':attribute deve ter um tamanho maior ou igual a :value kilobytes.',
        'string' => ':attribute deve ser uma palavra com :value ou mais caracteres.',
        'array' => ':attribute deve ter :value ou mais itens.',
    ],
    'image' => ':attribute deve ser uma imagem.',
    'in' => 'O valor selecionado em :attribute é inválido.',
    'in_array' => 'O campo :attribute não existe :other.',
    'integer' => ':attribute deve ser um número inteiro.',
    'ip' => ':attribute deve ser um endereço IP válido.',
    'ipv4' => ':attribute deve ser um endereço IPv4 válido.',
    'ipv6' => ':attribute deve ser um endereço IPv6 válido.',
    'json' => ':attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => ':attribute deve ser menor que :value.',
        'file' => ':attribute deve ter um tamanho menor que :value kilobytes.',
        'string' => ':attribute deve ter ao menos :value caracteres.',
        'array' => ':attribute deve ter menos que :value itens.',
    ],
    'lte' => [
        'numeric' => ':attribute deve ser menor ou igual a :value.',
        'file' => ':attribute deve ter ao menos :value kilobytes de tamanho.',
        'string' => ':attribute deve ter ao menos :value caracteres.',
        'array' => ':attribute deve ter ao menos :value itens.',
    ],
    'max' => [
        'numeric' => ':attribute não deve ser maior que :max.',
        'file' => ':attribute deve ter o tamanho máximo de :max kilobytes.',
        'string' => ':attribute não pode ter mais que :max caracteres.',
        'array' => ':attribute não pode ter mais que :max items.',
    ],
    'mimes' => ':attribute deve ser um arquivo do tipo :values.',
    'mimetypes' => ':attribute deve ser um arquivo dos seguintes tipos: :values.',
    'min' => [
        'numeric' => ':attribute deve ser ao menos :min.',
        'file' => 'O tamanho de :attribute deve ser ao menos de :min kilobytes.',
        'string' => ':attribute deve ter ao menos :min caracteres.',
        'array' => ':attribute deve ter ao menos :min itens.',
    ],
    'not_in' => 'O valor selecionado em :attribute é inválido.',
    'not_regex' => 'O formato de :attribute é inválido.',
    'numeric' => ':attribute deve ser numérico.',
    'present' => ':attribute deve estar presente.',
    'regex' => ':attribute tem o formato inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório se :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório ao menos que :other seja um destes :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values é preenchido.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values são são preenchidos.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não é preenchido.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos seguintes valores :values estão preenchidos.',
    'same' => ':attribute e :other devem ser o mesmo.',
    'size' => [
        'numeric' => ':attribute deve ter :size.',
        'file' => ':attribute deve ter o tamanho de :size kilobytes.',
        'string' => ':attribute deve ter :size caracteres.',
        'array' => ':attribute deve ter  :size itens.',
    ],
    'starts_with' => ':attribute com um dos seguintes valores: :values',
    'string' => ':attribute deve ser uma string.',
    'timezone' => ':attribute deve ser uma zone de tempo válida (fuso horário).',
    'unique' => ':attribute já está sendo utilizado.',
    'uploaded' => 'Falha ao realizar o upload de :attribute.',
    'url' => 'O formato do :attribute é inválido.',
    'uuid' => ':attribute deve ter uma UUID válida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => ['email' => 'Endereço de E-mail'],

];
