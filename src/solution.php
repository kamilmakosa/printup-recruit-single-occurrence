<?php
/**
 * Znajduje liczby, które się nie powtarzają
 *
 * @param $input array Tablica liczb
 * @return array
 */
function findSingle(array $input): array
{
	$uniqueInput = array_unique($input);

	$notUniqueItems = array_diff_key($input, $uniqueInput);

	return array_values(array_diff($uniqueInput, $notUniqueItems));
}

print_r(findSingle([1, 2, 3, 4, 1, 2, 3]));
// Array
// (
//     [0] => 4
// )


print_r(findSingle([11, 21, 33.4, 18, 21, 33.39999, 33.4]));
// Array
// (
//     [0] => 11
//     [1] => 33.39999
//     [2] => 18
// )
