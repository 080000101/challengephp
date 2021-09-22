<?php

$MovieDate =[
    1981=> "Raiders of the Lost Ark",
    1984=> "Indiana Jones and the Temple of the Doom",
    1989=> "Indiana Jone and the Last Crusade"];

ksort($MovieDate);

foreach ($MovieDate as $title => $Date) {
    echo $Date ;
    echo" : ";
    echo $title;
}
?>
