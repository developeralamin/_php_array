
<?php

  // =================================================================//
  // ==============Multidimensional Array Practise==================//
  // ===============================================================//

  echo "<h1>Multidimensional Array</h1>";
 

echo '<pre>';


  $birdsName = [
    				[
                'Crow','Hayna','Doyel',
    				], 
              [
                'Quail','Pigeon','Peacock'
              ],5,

    			      ['Parrot','Woodpecker','Sparrow',
    		  				[
  		 				'Owl','Kingfisher','Kite'
  		  				]
  			]
  ];

  echo $birdsName[3][3][0];
  echo '<br>';
  echo $birdsName[0][0];
  echo '<br>';
  echo $birdsName[1][0];
  echo '<br>';
  echo '<br>';
 
 
 
  $aniMals = [
  				[
                  'Ant','Monkey','Cow',
  				],'Chicken','Butterfly',

  			      ['Bear','Lion','Hen',
		  				[
		 				'Fox','Tiger','Elephent'
		  				]
  			]
  ];

  echo $aniMals[3][3][1];
  echo '<br>';
  echo $aniMals[0][0];
  echo '<br>';
  echo '<br>';


  $foodItems = [
  				[
                  'Pasta','French Fries','Ice Cream',
  				],'Bread','Vegetables',

  			      ['Fried Rice','Polayo','Pizza',
		  				[
		 				'Patoto','Fish','Fry Egg'
		  				]
  			]
  ];

  echo $foodItems[3][3][0];
  echo '<br>';
  echo $foodItems[0][0];
  echo '<br>';
  echo '<br>';



  $topsoftwareCompanies = [
  				[
                  'Enosis Solutions','weDevs','Piistech Ltd ',
  				],'Miquido ','Avenga',

  			      ['BJIT Group','Battery Low','Codesign',
		  				[
		 				'SoftechIT','Dream71','JoomShepar'
		  				]
  			]
  ];

  echo $topsoftwareCompanies[3][3][1];
  echo '<br>';
  echo $topsoftwareCompanies[0][0];
  echo '<br>';
  echo '<br>';
  // =================================================================//
  // ==============Multidimensional Array Practise==================//
  // ===============================================================//


