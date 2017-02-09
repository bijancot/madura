<?php
if( isset( $_GET["caller"] ) && $_GET["caller"] == "somevalue" ) {
    // I'm using Location because this will remove the get value
    header( "Location: refresh.php" );
    exit;
}
?>
<a href="refresh.php">just go to index</a><br/>
<a href="refresh.php?caller=somevalue">got to index and refresh?</a>