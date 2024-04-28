<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
  // return __DIR__ . '/' . $path;
  
    // This will return the directory path even if $path is empty
    return __DIR__ . '/' . trim($path, '/');
}
function baseBath2 ($path){
  return __DIR__ . '../' . $path;
}
/**
 * Load a view
 * @param string name
 * @return void
 */
function loadView($name){

$viewPath = basePath("views/{$name}.view.php");

if (file_exists($viewPath)){
  require $viewPath;
} else {
  echo "View {$name} not found";
}// require basePath("../views/{$name}.php");


}

function loadPartial($name) {
  if (empty($name)) {
    echo "Error: The name parameter is required and cannot be empty.";
    return;
}
  require basePath("views/partials/{$name}.php"); // Check what this actually returns

}

/** Inspect a value
 * @param mixed
 * @return void
 */

 function inspect($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
 }

/** Inspect a value and die
 * @param mixed
 * @return void
 */

 function inspectAndDie($value){
  echo '<pre>';
  die (var_dump($value));
  echo '</pre>';
  
 }
