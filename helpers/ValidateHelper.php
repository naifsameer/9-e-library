<?php

namespace app\helpers;

class ValidateHelper
{

  /** Error list
   */
  private static array $validation_errors = [];

  /** validate
   * @param array request [$key => $value]
   * @param array roles [$key => $value]
   * @return true|array true if validation successfully or error list
   * @example => validate(["name" => "required|min:30"])
   */
  public static function validate(array $request, array $roles)
  {
    foreach ($roles as $role_key => $role_value) {
      $patterns =  explode("|", $role_value);

      // required checking
      if (in_array('required', $patterns)) {
        self::required($request, $role_key);
      }

      // required checking
      if (in_array('email', $patterns)) {
        self::email($request, $role_key);
      }


      // min and max checking
      foreach ($patterns as $pattern_key) {

        // min value checking
        if (str_contains($pattern_key, 'min')) {
          $amountSeparator = explode(":", $pattern_key);
          self::min($request, $role_key, end($amountSeparator));
        }

        // max value checking
        if (str_contains($pattern_key, 'max')) {
          $amountSeparator = explode(":", $pattern_key);
          self::max($request, $role_key, end($amountSeparator));
        }
      }
    }

    return empty(self::$validation_errors)  ? true :   self::$validation_errors;
  }


  /** required  check if the request is set and not empty
   * @param array request
   * @param string key
   */
  private static function required(array $request, string $role_key)
  {
    $isKeySet = isset($request[$role_key]);
    $isValueEmpty = empty($request[$role_key]);

    if (!$isKeySet || $isValueEmpty) {
      self::$validation_errors[] = "$role_key is required";
    }
  }

  /** check request if it follow email pattern
   * @param array request
   * @param string key
   */
  private static function email(array $request, string $role_key)
  {
    $isKeySet = isset($request[$role_key]);

    if ($isKeySet) {
      if (!filter_var($request[$role_key], FILTER_VALIDATE_EMAIL)) {
        self::$validation_errors[] = "'{$request[$role_key]}'  is not a valid email";
      }
    }
  }

  /** check min value length
   * @param array request
   * @param string key
   * @param string len
   */
  private static function min(array $request, string $role_key, string $len)
  {
    $isKeySet = isset($request[$role_key]);

    if ($isKeySet) {
      $isLower = strlen($request[$role_key]) < intval($len);

      if ($isLower) {
        self::$validation_errors[] = "$role_key is must be upper than $len";
      }
    }
  }

  /** check max value length
   * @param array request
   * @param string key
   * @param string len
   */
  private static function max(array $request, string $role_key, string $len)
  {
    $isKeySet = isset($request[$role_key]);

    if ($isKeySet) {
      $isUpper = strlen($request[$role_key]) > intval($len);

      if ($isUpper) {
        self::$validation_errors[] = "$role_key is must be lower than $len";
      }
    }
  }
}

// var_dump(
//   ValidateHelper::validate(
//     ["title" => "Hi there", 'email' => 'naif@gmail.com', "a" => 20, "gender" => "male"],
//     ["title" => "required|min:3|max:30", "email" => "required|email|min:100", 'a' => 'required']
//   )
// );
