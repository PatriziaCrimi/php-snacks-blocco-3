<?php
/* ASSIGNMENT
Creare un array bidimensionale di array associativi: ogni elemento descriverà una bici da corsa
con le seguenti proprietà: nome e peso.
Stampare a schermo la bici con peso minore.
*/

// Variables initialization
$title = 'Racing bikes';
$subtitle = 'Calculating lighter bike';
$min_weight = 3;
$max_weight = 10;
$lightest_bike;
$lowest_weight = 0;
$same_weight_bikes = [];
$racing_bikes = [
  [
    'name' => 'Alchemy Atlas',
    'weight' => rand($min_weight, $max_weight)
  ],
  [
    'name' => 'ARC8 Escapee',
    'weight' => rand($min_weight, $max_weight)
  ],
  [
    'name' => 'Argon 18',
    'weight' => rand($min_weight, $max_weight)
  ],
  [
    'name' => 'Basso Diamante',
    'weight' => rand($min_weight, $max_weight)
  ],
  [
    'name' => 'BH Ultralight',
    'weight' => rand($min_weight, $max_weight)
  ],
  [
    'name' => 'Bmc Teammachine',
    'weight' => rand($min_weight, $max_weight)
  ],
  [
    'name' => 'Emme4 Superlight',
    'weight' => rand($min_weight, $max_weight)
  ]
];

// *********** Calculating lowest weight ***********
// Assigning the lowest weight to the first bike
$lowest_weight = $racing_bikes[0]['weight'];
foreach ($racing_bikes as $key => $bike) {
  if($bike['weight'] <= $lowest_weight) {
    $lowest_weight = $bike['weight'];
    $lightest_bike = $bike['name'];
  }
}

// Checking same weight bikes (only if their weight is the lowest weight)
foreach ($racing_bikes as $key => $bike) {
  if($bike['weight'] == $lowest_weight) {
    $same_weight_bikes[] = $bike['name'];
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <div class="row">
          <h1>
            <?php echo $title; ?>
          </h1>
        </div>
        <div class="row">
          <h2>
            <?php echo $subtitle; ?>
          </h2>
        </div>
        <div class="row">
          <!-- Printing data -->
          <div id="data-info">
            <h3>Data Information</h3>
            <p>The list of racing bikes is:</p>
            <ul>
              <?php
              foreach ($racing_bikes as $key => $bike) {
              ?>
              <li>
                <?php
                  echo $bike['name'] . ' &rarr; weight: ' . $bike['weight'] . ' kilograms.';
                ?>
              </li>
              <?php
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="row">
          <!-- Results -->
          <div id="results">
            <h3>Results</h3>
            <div class="results-box">
              <?php
              if(count($same_weight_bikes) > 1) {
              ?>
                <p>
                  The lightest bikes are:
                  <ul>
                    <?php
                    foreach ($same_weight_bikes as $key => $bike) {
                    ?>
                    <li>
                      <?php
                        echo $bike;
                      ?>
                    </li>
                    <?php
                    }
                    ?>
                  </ul>
                </p>
                <p>
                Their weight is:
                  <span>
                  <?php
                  echo $lowest_weight;
                  ?>
                  kilograms
                  </span>
                </p>
              <?php
              } else {
              ?>
                <p>
                The lightest bike is:
                  <span>
                  <?php
                  echo $lightest_bike;
                  ?>
                  </span>
                </p>
                <p>
                Its weight is:
                  <span>
                  <?php
                  echo $lowest_weight;
                  ?>
                  kilograms
                  </span>
                </p>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
