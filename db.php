<?php
date_default_timezone_set( 'America/Chicago' );
error_reporting( E_ERROR ^ E_NOTICE );
ini_set( 'display_errors', 1 );

$link = mysqli_connect('db_host','db_user','db_pass','db_name');
if ( mysqli_connect_error() ) {
    $emsg = 'MySQL Error: ' . mysqli_connect_error();
    die( $emsg );
}

if(isset($_POST)){

    $address    = $_POST['address'];
    $lat        = $_POST['lat'];
    $lng        = $_POST['lng'];
    $distance   = $_POST['distance'];
    
    $query = 'INSERT INTO `measurement` (`m_id`, `m_address`, `m_lat`, `m_lng`, `m_distance`) VALUES (NULL, \''.$address.'\', \''.$lat.'\', \''.$lng.'\', \''.$distance.'\')';
    
                        
    mysqli_query($link, $query);
    
}
?>