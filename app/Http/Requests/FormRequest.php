<?php
// File: app/Http/Requests/FormRequest.php

namespace App\Http\Requests;

use App\Http\Exceptions\ValidationException;

class FormRequest
{
    protected array $data;
    protected array $rules = [];
    protected array $errors = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function rules(): array
    {
        return [];
    }

    /**
     * @throws ValidationException
     */
    public function validate(): array
    {
        $this->rules = $this->rules();
        foreach ($this->rules as $field => $rule) {
            $value = $this->data[$field] ?? null;
            $rules = explode('|', $rule);
            foreach ($rules as $singleRule) {
                $parts = explode(':', $singleRule);
                $ruleName = $parts[0];
                $param = $parts[1] ?? null;

                if ($ruleName === 'required' && (is_null($value) || $value === '')) {
                    $this->errors[$field][] = "$field é obrigatório";
                }
                if ($ruleName === 'min' && is_string($value) && strlen($value) < (int)$param) {
                    $this->errors[$field][] = "$field deve ter pelo menos $param caracteres";
                }
                if ($ruleName === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->errors[$field][] = "$field deve ser um email válido";
                }
                // New integer rule
                if ($ruleName === 'integer' && filter_var($value, FILTER_VALIDATE_INT) === false) {
                    $this->errors[$field][] = "$field deve ser um valor numérico";
                }
            }
        }

        if (!empty($this->errors)) {
            throw new ValidationException($this->errors);
        }
        return $this->data;
    }
}