<?php
/* ASSIGNMENT
A partire da un array bidimensionale di array associativi,
creare una copia dell'array
e aggiungere ai singoli elementi dell'array una nuova proprietà "position"
che contiene un numero casuale.
*/

// Variables initialization
$title = 'Movies list';
$subtitle = 'Manipulating arrays';
$min = 0;
$max = 100;
$movies_list_copy = [];
$movies_list = [
  [
    'title' => 'Fight Club',
    'director' => 'David Fincher',
    'year' => '1999',
  ],
  [
    'title' => 'Inception',
    'director' => 'Christopher Nolan',
    'year' => '2010',
  ],
  [
    'title' => 'Shutter Island',
    'director' => 'Martin Scorsese',
    'year' => '2010',
  ],
  [
    'title' => 'Into The Wild',
    'director' => 'Sean Penn',
    'year' => '2007',
  ],
  [
    'title' => 'Vanilla Sky',
    'director' => 'Cameron Crowe',
    'year' => '2001',
  ],
  [
    'title' => 'Devil\'s Advocate',
    'director' => 'Taylor Hackford',
    'year' => '1997',
  ],
  [
    'title' => 'Eternal Sunshine of the Spotless Mind',
    'director' => 'Michel Gondry',
    'year' => '2004',
  ],
  [
    'title' => 'Number 23',
    'director' => 'Joel Schumacher',
    'year' => '2007',
  ],
];

// Adding the property "position"
foreach ($movies_list as $key => $movie) {
  $current_position = rand($min, $max);
  $movie += ['position' => $current_position];
  $movies_list_copy[] = $movie;
  // array_push($movie, array('position' => $current_position));
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
            <p>The list of movies is:</p>
            <table>
              <thead>
                <tr>
                  <th>
                    Title
                  </th>
                  <th>
                    Director
                  </th>
                  <th>
                    Year
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($movies_list as $movie) {
                ?>
                <tr>
                  <td>
                    <?php
                    echo $movie['title'];
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $movie['director'];
                    ?>
                  </td>
                  <td>
                    <?php
                    echo $movie['year'];
                    ?>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <!-- Results -->
          <div id="results">
            <h3>Results</h3>
            <div class="message">
              <p>
                The copy of the movies array with the "position" property is:
              </p>
              <table>
                <thead>
                  <tr>
                    <th>
                      Title
                    </th>
                    <th>
                      Director
                    </th>
                    <th>
                      Year
                    </th>
                    <th>
                      Position
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($movies_list_copy as $movie) {
                    ?>
                    <tr>
                      <td>
                        <?php
                        echo $movie['title'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $movie['director'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $movie['year'];
                        ?>
                      </td>
                      <td>
                        <?php
                        echo $movie['position'];
                        ?>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
