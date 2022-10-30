<?php

class Isomorphic
{
	public static function isIsomorphic(string $s, string $t): bool
	{
		$mapping = [];
		$mappedBefore = [];
		$equivalent = true;

		for ($i = 0; $i < strlen($s); $i++) {
			if (true === array_key_exists($s[$i], $mapping)) {
				$mapped = $mapping[$s[$i]];
				if ($mapped !== $t[$i]) {
					$equivalent = false;
					break;
				}
			} else {
				if (true === array_key_exists($t[$i], $mappedBefore)) {
					$equivalent = false;
					break;
				} else {
					$mappedBefore[$t[$i]] = true;

					$mapping[$s[$i]] = $t[$i];
				}
			}
		}
		return $equivalent;
	}
}


$s = "ada";
$t = "egg";

$res = Isomorphic::isIsomorphic($s,$t);

print_r($res);


