<?php





function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    
    return ($miles * 1.609344 * 1000);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

function referchart($latref){

switch($latref){

case 1: { $txt="Engineering Lab";
          break;
        }

case 2: { $txt="Engineering Faculty Office";
          break;
        }

case 3: { $txt="Engineering Workshop";
          break;
        }

case 4: { $txt="EC and TC Common gate";
          break;
        }

case 5: { $txt="USIC";
          break;
        }

case 6: { $txt="TC main building";
          break;
        }

case 7: { $txt="Boys Hostel";
          break;
        }

case 8: { $txt="Canteen";
          break;
        }

case 9: { $txt="ICT Building";
          break;
        }

case 10: { $txt="Multimedia Extension";
          break;
        }

case 11: { $txt="Faculty of Education";
          break;
        }

case 12: { $txt="Computer Center";
          break;
        }

case 13: { $txt="Faculty of Arts";
          break;
        }

case 14: { $txt="Central Office";
          break;
        }

case 15: { $txt="Faculty of Science office";
          break;
        }

case 16: { $txt="Faculty of Social Science";
          break;
        }

case 17: { $txt="Department of English Studies";
          break;
        }

case 18: { $txt="Car Parking";
          break;
        }

case 19: { $txt="WorkShop Behind Canteen";
          break;
        }

}

return $txt;
}


/*=======================================================================*/


$mix1 = file_get_contents('cart1.txt');
$vals1 = split(",",$mix1);
$lat1 = $vals1[0];
$lon1 = $vals1[1];


$mix2 = file_get_contents('cart2.txt');
$vals2 = split(",",$mix2);
$lat2 = $vals2[0];
$lon2 = $vals2[1];

$mix3 = file_get_contents('cart3.txt');
$vals3 = split(",",$mix3);
$lat3 = $vals3[0];
$lon3 = $vals3[1];

$use = file_get_contents('user.txt');
$user = split(",",$use);
$latref = $user[0];
$lonref = $user[1];

/*============================SUPER SWITCH==========================*/
if($latref==0 && $lonref==0)

{ 
    $myfile1 = fopen("read1.txt", "w") or die("Unable to open file!");
    fwrite($myfile1,"No Task"." : ".date('l jS \of F Y h:i:s A'));
    fclose($myfile1);

    $myfile2 = fopen("read2.txt", "w") or die("Unable to open file!");
    fwrite($myfile2,"No Task"." : ".date('l jS \of F Y h:i:s A'));
    fclose($myfile2);

    $myfile3 = fopen("read3.txt", "w") or die("Unable to open file!");
    fwrite($myfile3,"No Task"." : ".date('l jS \of F Y h:i:s A'));
    fclose($myfile3);



}

else{
switch($latref){

case 1: { $latu=27.231313 ;
          $lonu=78.014109 ;
	break;
          }

case 2: { $latu=27.230352 ;
          $lonu=78.013881 ;
	break;
          }

case 3: { $latu=27.230228 ;
          $lonu=78.014656 ;
	break;
          }

case 4: { $latu=27.229570 ;
          $lonu=78.014554 ;
	break;
          }

case 5: { $latu=27.229136 ;
          $lonu=78.015638 ;
	break;
          }

case 6: { $latu=27.229603 ;
          $lonu=78.013808 ;
	break;
          }

case 7: { $latu=27.229005 ;
          $lonu=78.014407 ;
	break;
          }

case 8: { $latu=27.228516 ;
          $lonu=78.014897 ;
	break;
          }

case 9: { $latu=27.228048 ;
          $lonu=78.014763 ;
	break;
          }

case 10: { $latu=27.227380 ;
           $lonu=78.014533 ;
	break;
          }

case 11: { $latu=27.227698 ;
           $lonu=78.014420 ;
	break;
          }

case 12: { $latu=27.227235 ;
           $lonu=78.014884 ;
	break;
          }

case 13: { $latu=27.226324 ;
           $lonu=78.014635 ;
	break;
          }

case 14: { $latu=27.227969 ;
           $lonu=78.013626 ;
	break;
          }
case 15: { $latu=27.226712 ;
           $lonu=78.013553 ;
	break;
          }

case 16: { $latu=27.226550 ;
           $lonu=78.012293 ;
	break;
          }

case 17: { $latu=27.226140 ;
           $lonu=78.013156 ;
	break;
          }

case 18: { $latu=27.228597 ;
           $lonu=78.014100 ;
	break;
          }

case 19: { $latu=27.228902 ;
           $lonu=78.015058 ;
	break;
          }

}

/*=====================REFERENCE================
1- Engineering Lab 27.231313, 78.014109
2- Engineering Faculty Office 27.230352, 78.013881
3- Engineering Workshop 27.230228, 78.014656
4- EC and TC Common gate 27.229570, 78.014554
5- USIC 27.229136, 78.015638
6- TC main building 27.229603, 78.013808
7- Boys Hostel 27.229005, 78.014407
8- Canteen 27.228516, 78.014897
9- ICT Building 27.228048, 78.014763
10- Multimedia Extension 27.227380, 78.014533
11- Faculty of Education 27.227698, 78.014420
12- Computer Center 27.227235, 78.014884
13- Faculty of Arts 27.226324, 78.014635
14- Central Office 27.227969, 78.013626
15- Faculty of Science office 27.226712, 78.013553
16- Faculty of Social Science 27.226550, 78.012293
17- Department of English Studies 27.226140, 78.013156
18- Car Parking 27.228597, 78.014100
19- WorkShop Behind Canteen 27.228902, 78.015058
================================================*/


$dist1=distance($latu, $lonu, $lat1, $lon1, "K");
$dist2=distance($latu, $lonu, $lat2, $lon2, "K");
$dist3=distance($latu, $lonu, $lat3, $lon3, "K");



/*=====For Server Intelligence=====*/

if(dist1<10)
 { 
    $myfile1 = fopen("read1.txt", "w") or die("Unable to open file!");
    fwrite($myfile1,"No Task"." : ".date('l jS \of F Y h:i:s A'));
    fclose($myfile1);
    
    $myfile1 = fopen("user.txt", "w") or die("Unable to open file!");
    fwrite($myfile1,"0,0");
    fclose($myfile1);
    
 }
else if(dist2<10)
 { 
    $myfile2 = fopen("read2.txt", "w") or die("Unable to open file!");
    fwrite($myfile2,"No Task"." : ".date('l jS \of F Y h:i:s A'));
    fclose($myfile2);

    $myfile2 = fopen("user.txt", "w") or die("Unable to open file!");
    fwrite($myfile2,"0,0");
    fclose($myfile2);
 }
else if(dist3<10)
 { 
    $myfile3 = fopen("read3.txt", "w") or die("Unable to open file!");
    fwrite($myfile3,"No Task"." : ".date('l jS \of F Y h:i:s A'));
    fclose($myfile3);

    $myfile3 = fopen("user.txt", "w") or die("Unable to open file!");
    fwrite($myfile3,"0,0");
    fclose($myfile3);
 }

else if ($dist1 < $dist2 && $dist1 < $dist3) {

  $myfile1 = fopen("read1.txt", "w") or die("Unable to open file!");

$txt=referchart($latref);
$txt1=referchart($lonref);

fwrite($myfile1,"From"." ".$txt." "."to"." ".$txt1." : ".date('l jS \of F Y h:i:s A'));
fclose($myfile1);

} 

else if ($dist2 < $dist1 && $dist2 < $dist3) {
	$myfile2 = fopen("read2.txt", "w") or die("Unable to open file!");

$txt=referchart($latref);
$txt1=referchart($lonref);

fwrite($myfile2,"From"." ".$txt." "."to"." ".$txt1." : ".date('l jS \of F Y h:i:s A'));
fclose($myfile2);
}

else
{ $myfile3 = fopen("read3.txt", "w") or die("Unable to open file!");

$txt=referchart($latref);
$txt1=referchart($lonref);

fwrite($myfile3,"From"." ".$txt." "."to"." ".$txt1." : ".date('l jS \of F Y h:i:s A'));
fclose($myfile3);
}
}

echo '<strong>You should not close this page. updated=>> <strong>  ' . date('l jS \of F Y h:i:s A');


$url1=$_SERVER['REQUEST_URI'];

header("Refresh: 5; URL=$url1");

?>
