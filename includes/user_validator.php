<?php

class UserValidator
{
    private $data;
    private $errors = [];
    private static $fields = ['name', 'email', 'comment'];


    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm()
    {
        foreach (self::$fields as $field) {
            if (!array_key_exists($field, $this->data)) {
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this->validateName();
        $this->validateEmail();
        $this->validateComment();
        return $this->errors;
    }

    private function validateName()
    {
        $val = trim($this->data['name']);

        if (empty($val)) {
            $this->addError('name', 'name field cannot be empty');
        }
    }
    private function validateEmail()
    {
        $val = trim($this->data['email']);
        if (empty($val)) {
            $this->addError('email', 'email field cannot be empty');
        } else {
            if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                $this->addError('email', 'email must be a valid email');
            }
        }
    }
    private function validateComment()
    {
        $val = trim($this->data['comment']);
        if (empty($val)) {
            $this->addError('comment', 'comment field cannot be empty');
        }
    }
    private function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}
$validation = new UserValidator($_POST);
