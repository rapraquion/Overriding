<?php

class Over {    
    public function __call($method_name , $parameter){
        $bat1 = array('Robby','Koji','Daniel');
        $bat2 = array('Jaymard','Vanessa','Defin');
            if($method_name == "overloadedClassBatch") {
                foreach($parameter as $batch) {
                    if($batch == "batch1"){
                        echo "Status: <b>Graduated</b>";
                            echo "<ol>";
                                foreach($bat1 as $value) {
                                    echo '<li>'.$value.'</li>';
                                }
                            echo "</ol>";
                    } else if($batch == "batch2") {
                        echo "Status: <b>Trainee</b>";
                            echo "<ol>";
                                foreach($bat2 as $values) {
                                    echo '<li>'.$values.'</li>';
                                }
                            echo "</ol>";
                    } else {
                        echo "Please select if batch1 or 2 only.";
                    }
                }
            } else {
                echo "Function $method_name does not exists ";
            }
        }
}