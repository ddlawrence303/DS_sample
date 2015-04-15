<?



class Node
{
  protected $_data = null;
  protected $_next = null;
  
  //construction
  public function __construct($data, $next)
  {
    $this->_data = $data;
    $this->_next = $next;
  }
  
  //get data func
  public function getData()
  {
    return $this->_data; //return self::data
  }

  //set data
  public function setData()
  {
    $this->_data = $data;
  }
  
  //get next node
  public function getNext()
  {
    return $this->next;
  }
  
  //set next node
  public function setNext(&$next)
  {
    $this->_next = $next;
  }
}

class Stack
{
  //setting top node
  protected $_top = null;
  
  // push data 
  public function push($data)
  {
    $item = new Node($data, null);
    
    //check $_top node
    if($this->_top == null){
      $this->_top = $item;
    }else{
      //setting the next node is the current top node
      $item->setNext($this->_top);
      // set the new item as the top node
      $this->_top = $item;
    }
  }  
  
  //delete the top node
  public function pop()
  {
    //check top node is null or not
    if($this->_top == null){
      return null;
    }
    
    if($this->_top){
      $tmp = $this->_top;
      $data = $tmp->getData();
      
      if( $this->_top->getNext()){
        $this->_top = $this->_top->getNext();
      }

      unset($tmp);
      //return the delete item
      return $data;
    }
  }
  
  //dump data
  public function __toString()
  {
    $output = '';
    if($this->_top){
      $current = $this->_top;
      while($current){
        $output .= $current->getData() . '  ';
        //get next
        $current = $current->getNext();
      }
    }
    return $output;
  }
}

?>
