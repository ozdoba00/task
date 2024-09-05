<?php

class UserValidator {
    
    /**
     * validateEmail
     *
     * @param  string $email
     * @return bool
     */
    public function validateEmail(string $email): bool 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    /**
     * validatePassword
     *
     * @param  string $password
     * @return bool
     */
    public function validatePassword(string $password): bool 
    {
        $passwordRegex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';
        return preg_match($passwordRegex, $password) === 1;
    }
}

$validator = new UserValidator();

$email = "testowy.test@gmail.com";
$password = "Haslo.12";

echo $validator->validateEmail($email) ? 'Email is valid' : 'Email is invalid';
echo "<br>";
echo $validator->validatePassword($password) ? 'Password is valid' : 'Password is invalid';

?>