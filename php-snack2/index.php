<?php
/* ASSIGNMENT
Creare un array di nomi
e generare due numeri casuali.
Creare un nuovo array con i valori che si trovano in una posizione compresa tra i due numeri generati.
*/

// Variables initialization
$title = 'Names list';
$subtitle = 'Creating a new names list containing the names included in a given range from the previous one.';
$min = 0;
$max = 15;
$highest_num = 0;
$lowest_num = 0;
$names_array = ['William', 'Robert', 'Anne', 'Christian', 'Josephine', 'Karleen', 'Astrid', 'Clark', 'Judith', 'Carla', 'David', 'Ronnie', 'Alice', 'Ted', 'Emma'];
$new_names_list = [];

// Generating two random numbers
$first_number = rand($min, $max);
$second_number = rand($min, $max);

// Checking highest and lowest number
if($first_number > $second_number) {
  $highest_num = $first_number;
  $lowest_num = $second_number;
} else if($first_number < $second_number){
  $highest_num = $second_number;
  $lowest_num = $first_number;
} else {
  // They are equals
  $highest_num = $first_number = $second_number = $lowest_num;
}

// Generating new array
for ($i=$lowest_num; $i < $highest_num; $i++) {
  $new_names_list[] = $names_array[$i];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 2</title>
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
            <p>The list of names is:</p>
            <ul>
              <?php
              foreach ($names_array as $name) {
              ?>
              <li>
                <?php
                  echo $name;
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
            <div class="message">
              <p>
                The two numbers randomly generated are:
              </p>
              <ul>
                <li>
                  <?php
                    echo $lowest_num;
                  ?>
                </li>
                <li>
                  <?php
                    echo $highest_num;
                  ?>
                </li>
              </ul>
            </div>
            <div class="results-box">
              <p>
                The new list of names containing the names included in the two numbers randomly generated is:
                <ul>
                  <?php
                  foreach ($new_names_list as $name) {
                  ?>
                  <li>
                    <?php
                      echo $name;
                    ?>
                  </li>
                  <?php
                  }
                  ?>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
