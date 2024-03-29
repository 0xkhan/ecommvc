<?php

namespace App\Classes;

use Illuminate\Database\Capsule\Manager as Capsule;

class ValidateRequest
{

    private static $error = [];
    private static $error_messages = [
        'string' => 'The :attribute field cannot contain numbers',
        'required' => 'The :attribute field is required',
        'minLength' => 'The :attribute field must be a minimum of :policy characters',
        'maxLength' => 'The :attribute field must be a maximum of :policy characters',
        'mixed' => 'The :attribute field can contain letter, numbers, dash and space only',
        'number' => 'The :attribute field cannot contain letters only numbers e.g. 20.00, 34,00, 20',
        'email' => 'Email address is not valid',
        'unique' => 'That :attribute is already taken, please try another one'
    ];

    /**
     * Extracts the policies and does validations on them
     *
     * @param array $data, columns and values to validate
     * @param array $policies, the rules that validation must satisfy
     */
    public function abide(array $data, array $policies)
    {
        foreach($data as $column => $value) {
            if (in_array($column, array_keys($policies))) {
                self::doValidation([
                    'column' => $column,
                    'value' => $value,
                    'policies' => $policies[$column],
                ]);
            }
        }
    }

    /**
     * Performs validation for the data provided and set error messages
     *
     * @param array $data
     */
    public static function doValidation(array $data)
    {
        $column = $data['column'];

        foreach($data['policies'] as $rule => $policy) {
            $valid = call_user_func_array(
                [self::class, $rule],
                [$column, $data['value'], $policy]
            );

            if (!$valid) {
                self::setError(str_replace(
                    [':attribute', ':policy', '_'],
                    [$column, $policy, ' '],
                    self::$error_messages[$rule]
                ), $column);
            }
        }
    }

    /**
     * @param string $column, field name or column
     * @param string $value, value passed into the form
     * @param string $policy, the rule we're testing against
     * @return bool, true | false
     */
    protected static function unique($column, $value, $policy)
    {
        if ($value != null && !empty(trim($value))) {
            return !Capsule::table($policy)->where($column, '=', $value)->exists();
        }

        return true;
    }

    protected static function required($column, $value, $policy)
    {
        return $value !== null && !empty(trim($value));
    }

    protected static function minLength($column, $value, $policy)
    {
        if ($value != null && !empty(trim($value))) {
            return strlen($value) >= $policy;
        }

        return true;
    }

    protected static function maxLength($column, $value, $policy)
    {
        if ($value != null && !empty(trim($value))) {
            return strlen($value) <= $policy;
        }

        return true;
    }

    protected static function email($column, $value, $policy)
    {
        if ($value != null && !empty(trim($value))) {
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        }

        return true;
    }

    protected static function mixed($column, $value, $policy)
    {
        if ($value != null && !empty(trim($value))) {
            if (!preg_match('/^[A-Za-z0-9 ._~\-!@#\&%\^\'\*\(\)]+$/', $value)) {
                return false;
            }
        }

        return true;
    }
    
    protected static function string($column, $value, $policy)
    {
        if ($value != null && !empty(trim($value))) {
            if (!preg_match('/^[A-Za-z ]+$/', $value)) {
                return false;
            }
        }

        return true;
    }
    
    protected static function number($column, $value, $policy)
    {
        if ($value != null && !empty(trim($value))) {
            if (!preg_match('/^[0-9.,]+$/', $value)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Set errors for specific action
     *
     * @param $error
     * @param $key = null
     */
    private static function setError($error, $key = null)
    {
        if ($key) {
            self::$error[$key][] = $error;
        } else {
            self::$error[] = $error;
        }
    }

    /**
     * Checks if there are any errors in error array
     *
     * @return bool, true | false
     */
    public function hasError()
    {
        return count(self::$error) > 0 ? true : false;
    }

    /**
     * Returns all validation errors
     *
     * @return array
     */
    public function getErrorMessages()
    {
        return self::$error;
    }

}
