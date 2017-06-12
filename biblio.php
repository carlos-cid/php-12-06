<?php include("head.php");?>

<?php
$json = file_get_contents('data/biblio.json');
$datos = json_decode($json,true);
$todos = count($datos);
?>

<header class="intro-header" style="background-image: url('')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Bibliografía</h1>
                    <hr class="small">

                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Main Content -->
<div class="container">
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<pre><?php print_r($datos);?></pre>
</div>

<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

<h3>Tengo <?php echo($todos);?> referencias bibliográficas, que son:</h3>

<?php for($n = 0; $n < $todos; $n++){?>
  <div class="post-preview">
      <p><?php echo($datos[$n]["author"]);?> (<?php echo($datos[$n]["year"]);?>). <?php echo($datos[$n]["name"]);?>. <?php echo($datos[$n]["city"]);?>:<?php echo($datos[$n]["ed"]);?></p>
  </div>
<?php }; ?>


            </div>
        </div>
    </div>

<hr>

<?php include("footer.php");?>
