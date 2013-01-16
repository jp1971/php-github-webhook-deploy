<?php 

$json = $_POST['payload'];

$payload = json_decode($json, true);

foreach( $payload['commits'] as $commit ){
    if ( strpos( $commit['message'], '[deploy]' ) ) {
        echo "shell_exec( 'git fetch origin master' )";
   }
}

?>  
