<?php require_once('../../chain_gang/private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Id</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
        <th>&nbsp;</th>
      </tr>

<?php
//Reading values from a csv file
//$parser = new ParseCSV(PRIVATE_PATH . '/used_bicycles.csv');
//$bike_array = $parser->parse();
//print_r($bike_array);

//Manually inputting values 
//$args = ['brand' => 'Trek', 'model' => 'Emonda', 'year' => 2017, 'gender' => 'Unisex', 'color' => 'black', 'category' => 'Road', 'weight_kg' => 1.5, 'condition_id' => '5', 'price' => 1000.00];
?>
<?php //$bike = new Bicycle($args); ?>

      <?php //Reading values from a csv file ?>
      <?php //foreach($bike_array as $args) { ?>
      <?php //$bike = new Bicycle($args); ?>
      
      <?php //Reading values and converting them to objects in the database ?>
      
      <?php

      $bikes = Bicycle::find_all();

      ?>
      <?php foreach($bikes as $bike) { ?>
      <tr>
        <td><?php echo h($bike->id); ?></td>
        <td><?php echo h($bike->brand); ?></td>
        <td><?php echo h($bike->model); ?></td>
        <td><?php echo h($bike->year); ?></td>
        <td><?php echo h($bike->category); ?></td>
        <td><?php echo h($bike->gender); ?></td>
        <td><?php echo h($bike->color); ?></td>
        <td><?php echo h($bike->weight_kg()) . ' / ' . h($bike->weight_lbs()); ?></td>
        <td><?php echo h($bike->condition()); ?></td>
        <td><?php echo h(asEuros($bike->price)); ?></td>
        <td><a href="detail.php?id=<?php echo $bike->id; ?>">View</a></td>
      </tr>
      <?php } ?>
    </table>
    
    <?php
//Reading records from the database, but not converting them to objects, simply showing the recors in an associative array
//$result = Bicycle::find_all();
//$row = $result->fetch_assoc();
//$result->free();

//echo "BRAND: " . $row['brand']. '</br>';
//echo "MODEL: " . $row['model'];


?>

    
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
