<?php
function displayMenu (array $items) {
	$res='<ul>';
	foreach ($items as $item) {
		$res.="<li>$item</li>