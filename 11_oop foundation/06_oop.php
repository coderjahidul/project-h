<?php 

// class ParentClass{
//     protected $name;
//     public function __construct($name){
//         $this->name = $name;
//         $this->sayHi();
//     }

//     function sayHi(){
//         echo "Hi From {$this->name}\n";
//     }
// }

// class ChildClass extends ParentClass{
//     public function sayHi(){
//         parent::sayHi();
//         echo "Hello From {$this->name}\n";
//     }
// }

// $child = new ChildClass("Child Class");


class ParentClass{
    protected $name;
    public function __construct($name){
        $this->name = $name;
        $this->sayHi();
        $this->address();
    }

    function sayHi(){
        echo "Hi Parent From {$this->name}\n";
    }

    function address(){
        echo "Parent Address From {$this->name}\n";
    }
}

class childClass extends ParentClass{
    public function sayHi(){
        parent::sayHi();
        echo "Hello Child From {$this->name}\n";
    }

    public function address(){
        parent::address();
        echo "Child Address From {$this->name}\n";
    }
}

$child = new childClass("Jahidul Islam");


















































?>