<?

// implement queue data structure

// set the item structure & datas
class Item
{
  public $data = null;
  public $next = null;
  public $prev = null;
  
  public function __construct($data)
  {
    $this->data = $data;
  }
}


//set the structure of queue

class Queue
{
  protected $_head = null;
  protected $_tail = null;
  
  //insert node
  public function insert($data)
  {
    $item = new Item($data);
    
    // check queue list
    if($this->_head == null){
      $this->_head = $item;
    }else if($this->_tail == null){
      $this->_tail = $item;
      $this->_head->next = $this->_tail;
      $this->_tail->prev = $this->_head;
    }else{
      $this->_tail->next = $item;
      $item->prev = $this->_tail;
      $this->_tail = $item;
    }
    
  }
  
  //delete node
  public function delete()
  {
    //implement delete queue list node..
  
  }
  
  // dump datas
  public function __toString()
  {
    //implement dump datas for checking result
  }
  
}

?>
