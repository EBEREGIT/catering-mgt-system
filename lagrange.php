<?php 
	include_once 'core/init.php';
  include_once 'core/functions.php';
  
  if (isset($_GET['suggest'])) {
    $suggest_id = (int)$_GET['suggest'];
    $suggest_id = sanitize($suggest_id);
    $suggest_query = $db->query("SELECT * FROM placed_orders WHERE id = '$suggest_id'");
    
    while ($suggest = mysqli_fetch_assoc($suggest_query)) {
      $type_of_event = $suggest['type_of_event'];

      $interpolate_query = $db->query("SELECT size FROM placed_orders WHERE type_of_event = '$type_of_event'");
      
      $i = 1;
      
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lagrange interpolation">
    <meta name="author" content="Leandro Luciani Tavares">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Lagrange interpolation</title>

    <!-- Bootstrap core CSS -->
    <link href="lagrange/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="lagrange/dist/css/index.css" rel="stylesheet">
    <link href="lagrange/dist/css/style.css" rel="stylesheet">
    <link href="lagrange/dist/css/katex.min.css" rel="stylesheet">

  </head>

  <body>
  <?php include_once('nav.php'); ?>
<div class="container sign-up">
<h1>Lagrange</h1>
<h4>The following equations define Lagrange polinomial interpolation</h4>
<div id="LagrangeEquation" class="row">
 <div class="col">
   <p id="equation"></p>
 </div>
 <div class="col">
  <p id="equation2"></p>
 </div>
</div>
<p> Fill the table with the data points to be interpolated </p>
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
        <th>X</th>
        <th>Y</th>
        <th></th>
        <th></th>
      </tr>

<?php 
  while ($interpolate = mysqli_fetch_assoc($interpolate_query)) {

?>
      <tr>
        <td contenteditable="true" class="number"><?php echo $i++; ?></td>
        <td contenteditable="true" class="number"><?php echo $interpolate['size']; ?></td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>

<?php 
  }
  } 
  }
?>

      <!-- <tr>
        <td contenteditable="true" class="number">4</td>
        <td contenteditable="true" class="number">5.6</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
      <tr>
        <td contenteditable="true" class="number">-10</td>
        <td contenteditable="true" class="number">0</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr> -->
      <!-- This is our clonable table line -->
      <tr class="hide d-none">
        <td contenteditable="true" class="number">0</td>
        <td contenteditable="true" class="number">0</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
    </table>
  </div>
    <button id="clear-btn" class="btn btn-secondary">Clear data points</button>
    <button id="calculate-btn" class="btn btn-primary">Calculate Lagrange</button>


  <p id="export"></p>
 <div class="row">
  <div id="divEquationL" class="col">
  </div>
</div>
<br/>
<div class="row">
  <div class="col">
   <p id="equationP"></p>
  </div>
</div>
<div id="divEval" style="display:none;">
<input id="value"/>
<button id="interpolate-btn" class="btn btn-success">Interpolate</button>
</div>
<div id="resultAlert" class="alert alert-success" role="alert" style="display:none;">
  Lagrange says that interpolated value is <strong><span id="resultValue"></span></strong>
</div>
<div>
  <canvas id="chart"></canvas>
</div>
</div>
</div>

<script src="lagrange/dist/js/jquery-3.3.1.min.js"></script>
<script src="lagrange/dist/js/jquery-ui.min.js"></script>
<script src="lagrange/dist/js/katex.min.js"></script>
<script src="lagrange/dist/js/math.min.js"></script>
<script src="lagrange/dist/js/Chart.min.js"></script>
<script src="lagrange/lagrange.js"></script>
<script src="lagrange/dist/js/index.js"></script>

<script>
katex.render("L_i = \\frac{\\displaystyle \\prod_{{j=0 , j\\neq1}}^{n} (x - x_j)}{\\displaystyle \\prod_{j=0 , j\\neq1}^{n} (x_i - x_j)}" , equation, {
    throwOnError: false
});
katex.render("P_n(x) = \\displaystyle \\sum_{i = 0}^{n} L_i \\cdot f(x_i)" , equation2, {
    throwOnError: false
});


</script>

