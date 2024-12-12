<?php 
// trait NumberSeriesOne {
//     function NumberSeriesA(){
//         echo "Number Series A \n";
//         parent::NumberSeriesA(); 
//     }
//     function NumberSeriesB(){
//         echo "Number Series B \n";
//     }
// }

// class SomeClass {
//     function NumberSeriesA(){
//         echo "Printing Number Series A \n";
//     }
// }

// class NumberSeries extends SomeClass{
//     use NumberSeriesOne{
//         NumberSeriesA as NumberSeriesAA;
//     }
//     function NumberSeriesA(){
//         echo "Printing + Printing Number Series A \n";
//     }
// }


// $ns = new NumberSeries();
// $ns->NumberSeriesAA();
// $ns->NumberSeriesB();
// $ns->NumberSeriesA();



trait NumberSeriesOne {
    function NumberSeriesA(){
        echo "Number Series A One \n";
    }
    function NumberSeriesB(){
        echo "Number Series B One \n";
    }
}

trait NumberSeriesTwo {
    function NumberSeriesA(){
        echo "Number Series A Two \n";
    }
    function NumberSeriesB(){
        echo "Number Series B Two \n";
    }
}

class NumberSeries {
    use NumberSeriesOne, NumberSeriesTwo{
        NumberSeriesOne::NumberSeriesA as NumberSeriesAOne;
        NumberSeriesTwo::NumberSeriesA as NumberSeriesATwo;
          
        NumberSeriesOne::NumberSeriesB as NumberSeriesBOne;
        NumberSeriesTwo::NumberSeriesB as NumberSeriesBTwo;
    }

    function NumberSeriesA(){
        echo "Number Series A \n";
    }
    function NumberSeriesB(){
        echo "Number Series B \n";
    }
}
$ns = new NumberSeries();
$ns->NumberSeriesA();
$ns->NumberSeriesAOne();
$ns->NumberSeriesATwo();
$ns->NumberSeriesB();
$ns->NumberSeriesBOne();
$ns->NumberSeriesBTwo();















?>