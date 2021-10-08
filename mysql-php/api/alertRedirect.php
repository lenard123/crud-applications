<?php

/**
 * Alert Message and Redirect
 */
return function($message, $redirectTo){
  $data  = "<script>";
  $data .= "window.alert(`$message`);";
  $data .= "window.location.href = `$redirectTo`";
  $data .= "</script>";
  echo $data;
  exit();
};
