<?

<?

// stack implement @version 1.0

$stack = array();


function push($data, &$stack)
{
  $stack[] = $data;
}


function pop(&$stack)
{
  $size = count($stack);
  
  $top = $stack[$size - 1];
  
  unset($stack[ $size -1 ]);
  
  return $top;
}



var_dump($stack);

//push datas into array 
push(1, $stack);
push(2, $stack);
push('test', $stack);
push(array(1, 3, 5), $stack);

var_dump($stack);

echo pop($stack);
echo pop($stack);

//print out result
var_dump($stack);


?>

?>
