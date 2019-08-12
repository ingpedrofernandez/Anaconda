
<?php include('includes/header.php'); ?>

  <div id="page-content">
    <h1>Main page</h1>
    <br><br><br>
<h3>The suggestions from the train names are taken from a text file from Wikipedia  "List of named passanger trains of the U.S.A."<br>
Type the first 3 letter of a name and it will give you suggestions of trains that begin with those 3 letters.</h3>
<br><button onclick="myFunction()">Train names textfile</button>
  </div>


<script>
function myFunction() {
  window.open("http://localhost/ajax_autosuggest/includes/us_passenger_trains.txt", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=400,height=400");
}
</script>


<?php include('includes/footer.php'); ?>
