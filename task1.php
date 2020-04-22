<?php
function getNumberOfBoats(array $dwarfs, int $limit)
{ 
	$n_dwarfs = $dwarfs;
	rsort($n_dwarfs);
	$inn = 0;
	$bar = 0;
		foreach($n_dwarfs as $dwarf) {
			if(key_exists(array_search($dwarf,$n_dwarfs),$n_dwarfs)){
			$bar++;
			$inn=$dwarf;
			unset($n_dwarfs[array_search($inn,$n_dwarfs)]);
			if($inn == $limit) {
				echo 'sailor ' . "$inn";
				
			}
			else{
				for($z=$limit-$inn;$z>0;$z--){
					if(array_search($z,$n_dwarfs)){
						unset($n_dwarfs[array_search($z,$n_dwarfs)]);
						echo ' double ' . "$inn + $z";
						$bar--;
						break 1;
					}
				}
			}
		
			}
			else $bar++;
		}
		
	

	return($bar);
}
echo getNumberOfBoats(array(1,2),2);
