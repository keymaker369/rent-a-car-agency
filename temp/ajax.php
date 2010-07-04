<?php
if (isset ( $_POST ['search'] )) {
	$search = htmlentities ( $_POST ['search'] );
} else
	$search = '';

$db = mysql_connect ( 'localhost', 'root', '' ); //Don't forget to change
mysql_select_db ( 'seminarski', $db ); //theses parameters

$upit = "SELECT model from vozilo WHERE model LIKE '$search%'";
$req = mysql_query ( $upit ) or die ();
echo '<ul>';
while ( $data = mysql_fetch_array ( $req ) ) {
	echo '<li><a href="#" onclick="selected(this.innerHTML);">' . htmlentities ( $data ['name'] ) . '</a></li>';
}
echo '</ul>';
mysql_close ();
?>