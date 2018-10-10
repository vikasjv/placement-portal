<?php
#include 'connect.php';

  $company = $_POST['company'];
  
  if($company=="jpmorgan")
{
   header(Location:"jpmorganstats.html");

}
else if($company=="sap")
{
   header(Location:"sapstats.html");

}
else if($company=="dell")
{
   header(Location:"dellstats.html");

}
else if($company=="hp")
{
   header(Location:"hpstats.html");

}
else
{
  echo "option invalid";

}
?>