<?php
  
// Program to compare execution time 
// of static and instance methods
set_time_limit(0);
  
// Checking php version
echo 'Current PHP version: ' . phpversion();
  
// Creating class for static
Class St {
  
    public static $count = 0;
      
    // function that will print nothing
    public static function getResult()
    {
        self::$count = self::$count + 1;
    }
}
  
// For calculating time
$time_start_static = microtime(true);
  
// This loop will run 100000 times
for($i = 0; $i < 100000; $i++) {
    St::getResult();
}
  
// Execution time for static method ends here
$time_end_static = microtime(true);
  
// Execution time is end -start time
$time_static = $time_end_static - $time_start_static;
  
// Printing the result
echo "\nTotal execution time is for static method is: $time_static";
  
// Demo class for instance method
class Ins {
    private $count = 0;
      
    // Function that will not print anything
    public function getResult() {
        $this -> count = $this -> count + 2;
    }
}
  
// Creating an instance object
$ob = new Ins;
  
// Starting time is insitialize
$time_start_instance = microtime(true);
  
// For time loop is run
for($i = 0; $i < 100000; $i++)
{
    $ob -> getResult();
}
  
// Execution end for instance method
$time_end_instance = microtime(true);
  
// Total time is end-start time
$time_instance = $time_end_instance - $time_start_instance;
  
// Result is printed
echo "\nTotal execution time for instance method is: $time_instance";


if ($time_instance < $time_static) {
    echo "\nCreating intanse is faster than static.\nTime Diff :". ($time_static-$time_instance);
} else {
    echo "\nCreating static is faster than intanse.\nTime Diff :". ($time_instance-$time_static);
}
?>