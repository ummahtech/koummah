<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hit_counter extends CI_Controller {

    // Show "unique" visits only ?
    public $unique_visits = false;
 
    // Number of hours a visitor is considered as "unique"
    public $unique_hours = 24;
 
    // Directory to write to (without any trailing slashes)
    public $hit_count_dir = 'hitcount';
 
    // File to write to
    public $hit_count_file = 'hitcount.txt';
 
    // Cookie Name
    public $cookie_name = 'bt_hit_count';
 
    // Record HIT
    public function recordHit() {
 
        // Check whether the target dir exists or not. If not, then create it.
        if ( isset($this->hit_count_dir) && strlen($this->hit_count_dir) > 0 ) {
 
            if( !file_exists($this->hit_count_dir) ) {
                mkdir($hit_count_dir/*, 0777, TRUE*/) or die('ERROR: Could not create the specified directory!');  // http://php.net/mkdir
            }
 
        }
 
        $hit_count_file = $this->hit_count_dir . '/' . $this->hit_count_file;
 
        // Check whether the target file exists or not. If not, then create it.
        if( !file_exists($hit_count_file) ) {
            file_put_contents($hit_count_file, '', LOCK_EX) or die("ERROR: Can't write to "$hit_count_file", please make sure that your path is correct and you have appropriate permissions on the target directory and/or file!");
        }
 
        // Get current count from file
        $hit_count = intval( trim(file_get_contents($hit_count_file)) );
 
        if ( !$this->unique_visits || !isset($_COOKIE[$this->cookie_name]) ) {
 
            // Increment the hit count by 1 and write to the file
            $hit_count++;
            file_put_contents($hit_count_file, $hit_count, LOCK_EX) or die("ERROR: Can't write to "$hit_count_file", please make sure that your path is correct and you have appropriate permissions on the target directory and/or file!");
 
            if( $this->unique_visits ) {
                // Send a cookie to the visitor (to track him) along with the P3P compact privacy policy
                header('P3P: CP="NOI NID"');
                setcookie($cookie_name, 1, time() + 60 * 60 * $unique_hours);
            }
 
        }
 
    } // End of Method
     
    // Get Total HITs
    public function getHitCount() {
        $hit_count_file = $this->hit_count_dir . '/' . $this->hit_count_file;
 
        // Get current count from file
        return (int) trim(file_get_contents($hit_count_file));
    } // End of Method
 
} // End of Class
 
$hit_obj = new BT_HitCounter();
// $hit_obj->unique_visits = true;
$hit_obj->recordHit();
}
