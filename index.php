<?php include('head.php');?>

<!-- Page Header -->
 <!-- Set your background image for this header on the line below. -->
 <header class="intro-header" style="background-image: url('https://raw.githubusercontent.com/carlos-cid/php-12-06/gh-pages/img/play.jpg')">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <div class="site-heading">
                     <h1>La Evolución del Cine Chileno</h1>
                     <hr class="small">
                     <span class="subheading">Como reflejo de nuestra sociedad</span>
                 </div>
             </div>
         </div>
     </div>
 </header>

<!-- Main Content -->
   <div class="container">
       <div class="row">
           <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

<?php
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/carlos-cid/php-12-06/gh-pages/datos.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>
// ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
// lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
<?php for($a = 0; $a < $total = count($csv); $a++){?>
  <!--esto es lo que repetiré-->
                 <div class="post-preview">
                     <a href="single.php?url=<?php print($a)?>">
                         <h2 class="post-title"><?php echo($csv[$a]["titulo"])?></h2>

                             <?php echo($csv[$a]["apa"])?>
                         </h3>
                     </a>
                     <p class="post-meta">Tags: <?php echo($csv[$a]["tags"]);?></p>
                 </div>
                 <?php };?>
                 <hr>
                 <!--hasta acá lo que repetiré-->

             </div>
         </div>
     </div>

<hr>

<?php include('footer.php');?>
