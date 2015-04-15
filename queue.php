<?

// queue class implement

class Node
{
  //setting attribute
  public $data = null;
  public $next = null;
  public $prev = null;
  
  public function __construct($data)
  {
    $this->data = $data;
  }
}

class Queue
{
  //setting head and tail node
  protected $_head = null;
  protected $_tail = null;
  
  private function _insert(&$data)
  {
    $item = new Node($data);
    if($this->_head == null){
      $this->_head = $item;
    }
    else if($this->_tail == null){
      $this->_tail = $item;
      //setting spl double linked list
      $this->_head->next = $this->_tail;
      $this->_tail->prev = $this->_head;
    
    }
    else{
      // head and tail exist
      $this->_tail->next = $item;
      $item->prev = $this->_tail;
      $this->_tail = $item;      
    }
  }
  
  //todo: pending
  public function delete()
  {
    //todo: pending
  }
  
  public function insert($data)
  {
    $this->_insert($data);
  }
  
  public function __toString()
  {
    $output = '';
    $tmp = $this->_head;
    while($tmp){
      $output .= $tmp->data . ' ';
      $tmp = $tmp->next;
    }
    
    return $output;
  }

}

?>
