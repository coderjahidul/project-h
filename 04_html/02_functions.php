<?php
function displayOptions($options, $selectedValue){
    foreach($options as $option){
        $selected = "";
        if(in_array($option, $selectedValue)){
            $option = strtolower($option); // Banana => banana
            $selected = "selected";
        }
        printf("<option value='%s' %s>%s</option>\n", $option, $selected, ucwords($option));
    }
}