<?php
function restaurant_check($meal, $tax, $tip, $includeTaxInTip = false)
{
    $tax_amount = $meal * ($tax / 100);
    
    if ($includeTaxInTip)
        $tipBase = $meal + $tax_amount;
    else
        $tipBase = $meal;
    
    $tip_amount = $tipBase * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;
    
    return $total_amount; 
}