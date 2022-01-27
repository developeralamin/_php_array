
<?php

  // =================================================================//
  // ==============Multidimensional Array Practise==================//
  // ===============================================================//

  echo "<h1>Multidimensional Array</h1>";
 

echo '<pre>';


  $BirdsName = [
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

  echo $BirdsName[3][3][0];
  echo '<br>';
  echo $BirdsName[0][0];
  echo '<br>';
  echo $BirdsName[1][0];
  echo '<br>';
  echo '<br>';
 
 
 
  $Animals = [
  				[
                  'Ant','Monkey','Cow',
  				],'Chicken','Butterfly',

  			      ['Bear','Lion','Hen',
		  				[
		 				'Fox','Tiger','Elephent'
		  				]
  			]
  ];

  echo $Animals[3][3][1];
  echo '<br>';
  echo $Animals[0][0];
  echo '<br>';
  echo '<br>';


  $FoodItems = [
  				[
                  'Pasta','French Fries','Ice Cream',
  				],'Bread','Vegetables',

  			      ['Fried Rice','Polayo','Pizza',
		  				[
		 				'Patoto','Fish','Fry Egg'
		  				]
  			]
  ];

  echo $FoodItems[3][3][0];
  echo '<br>';
  echo $FoodItems[0][0];
  echo '<br>';
  echo '<br>';



  $TopSoftwareCompanies = [
  				[
                  'Enosis Solutions','weDevs','Piistech Ltd ',
  				],'Miquido ','Avenga',

  			      ['BJIT Group','Battery Low','Codesign',
		  				[
		 				'SoftechIT','Dream71','JoomShepar'
		  				]
  			]
  ];

  echo $TopSoftwareCompanies[3][3][1];
  echo '<br>';
  echo $TopSoftwareCompanies[0][0];
  echo '<br>';
  echo '<br>';
  // =================================================================//
  // ==============Multidimensional Array Practise==================//
  // ===============================================================//


