<?php

add_shortcode( "covid" , "covid_static");


function covid_static(){
  include "covid.php";
}


