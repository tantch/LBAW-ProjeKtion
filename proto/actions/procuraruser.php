<?php


function search() {
	$stmt = $GLOBALS['db']->prepare ( 'SELECT * FROM poll WHERE name LIKE ? AND private = 0' );
	$stmt->execute ( array (
		'%' . $_GET ['pollsearch'] . '%'
		) );
	$result = $stmt->fetchAll ();
	foreach ( $result as $row ) {
		?>
		<a href="./?pagina=pollpage&pollid=<?php echo $row['pollId']?>">
			<?php echo $row['name']?>
		</a>
		<br>
		<?php
	}
}
search ();
?>