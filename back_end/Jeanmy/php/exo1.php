<?php

$map = array (
	array (0,1,1,1),
	array (0,1,1,0),
	array (0,1,0,0),
	array (0,0,0,1)
);

foreach ($map as $row) 
{
	foreach ($row as $col)
		{
			echo $col;
		}
}