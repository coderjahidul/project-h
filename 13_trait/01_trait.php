<?php 
    trait NumberSeriesOne {
        private function numberSeriesA() {
            echo "Number Series A \n";
        }
        function numberSeriesB() {
            $this->numberSeriesA();
            echo "Number Series B \n";
        }
    }

    trait NumberSeriesTwo {
        use NumberSeriesOne;
        function numberSeriesC(){
            echo "Number Series C \n";
        }
        function numberSeriesD(){
            echo "Number Series D \n";
        }
    }

    class NumberSeries {
        use NumberSeriesTwo;
    }

    $ns = new NumberSeries();
    // $ns->numberSeriesA();
    $ns->numberSeriesB();
    $ns->numberSeriesC();
    $ns->numberSeriesD();


?>