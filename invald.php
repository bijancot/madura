invalid!!!
<style>
h1{
color:red;
border:1px solid blue;
padding:5px;
width:20%;
text-align:center;
}
</style>
<?php
session_start();
$data = $_SESSION['data'];
echo "<H1>".$data."</H1>";

if($data="errno1"){
echo "<br/>";
echo "<br/>";
echo "error password & usename blank!!!";
} 
?>