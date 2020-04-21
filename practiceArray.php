<?php


$populationData = array(
    'New York, NY' => 8008278,
    'Los Angeles, CA' => 3694820,
    'Chicago, IL' => 2896016,
    'Houston, TX' => 1953631,
    'Philadelphia, PA' => 1517550,
    'Phoenix, AZ' => 1321045,
    'San Diego, CA' => 1223400,
    'Dallas, TX' => 1188580,
    'San Antonio, TX' => 1144646,
    'Detoroit, MI' => 951270    
);

$totalValue=NULL;

print "1.<br>";
foreach($populationData as $key => $value){
  
    print $key.": ".$value."<br>";
    $totalValue += $value;
   
}
print "total: ".$totalValue."<br><br>";



print "2.<br>";
asort($populationData);
foreach($populationData as $key => $value){
    
    print $key.": ".$value."<br>";
    
}
print "<br>";



print "3.<br>";
$i = 0;
$stateData = array();


foreach($populationData as $key => $value){
    $key = substr($key, -2, 2);
   $stateData[$i] = $key;
           ++$i; 
}
$stateData2=array_unique($stateData);

$j=0;
foreach($stateData2 as $key1 => $value1){
    foreach($populationData as $key2 => $value2){
        $key3 = substr($key2, -2, 2);
        if($value1==$key3){
            $statePop[$j] += $value2;
        }
    }

    print $value1.": ".$statePop[$j]."<br>";
        ++$j;
}
