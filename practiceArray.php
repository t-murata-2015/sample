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
    $totalValue += $value;
    
}
print "<br>";


print "3.<br>";
$i = 0;
$stateData = array();

foreach($populationData as $key => $value){
    $key = substr($key, -2, 2);
    print $key.": ".$value."<br>";
    $stateData += array($i => array($key, $value));
       ++$i; 
}

var_dump($stateData);

$j=0;
foreach($stateData as $key => $value){
    var_dump($stateData[$key][0]);
    if($key != 0){

      if ($stateData[$key][0] == $stateData[$key-1][0]){
        // $value[$j+1][1] += $value[$j][1];
print "同じ";
      }
} 
//print $value[$j][0].$value[$j][1];
++$j; 
 }


print "total: ".$totalValue."<br><br>";