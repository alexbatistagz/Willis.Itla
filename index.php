
<?php 


$OtrosNoMetales=['H'];
$Alcalinos= ['Li','Na','K','Rb','Cs','Fr'];
$AlcalinosTerreos=['Be','Mg','Ca','Sr','Ba','Ra'];
$MetalesDeTrasicion=['Sc','Ti'.'V','Cr','Mn','Fe','Co','Ni','Cu','Zn'];
$MetalesDeTrasicion2=['Y','Zr','Nb','Mo','Tc','Ru','Rh','PD','Ag','Cd'];
$Lantanidos=['La-Lu'];
$MetalesDeTrasicion3=['Hf','Ta','W','Re','OS','Ir','Pt','Au','Hg'];
$Actinidos=['Ac-lr'];
$MetalesDeTrasicion4=['Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn'];
$Metaloides=['B'];
$OtrosMetales=['Ál','Ga','In','Ti','Nh'];
$OtrosNoMetales2=['c'];
$Metaloides2=['Si','Ge'];
$OtrosMetales2=['Sn','Pb','Fl'];
$OtrosNoMetales3=['N','P'];
$Metaloides3=['As','Sb'];
$OtrosMetales3=['Bi','Mc'];
$OtrosNoMetales4=['O','S','Se'];
$Metaloides4=['Te','Po'];
$OtrosMetales4=['Lv'];
$Halogenos=['F','Cl','Br','I','At','TS'];
$GasesNobles=['He','Ne','Ar','Kr','Xe','Rn','Og'];
$Lantanidos2=['La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'];
$Actinidos2=['Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'];
$Caracteriztica=['Metales'];
$Caracteriztica2=['Alcalinos'];
$Caracteriztica3=['Alcalinoterreos'];
$Caracteriztica4=['Metales de Trancision / Bloque D'];
$Caracteriztica5=['Lantanidos'];
$Caracteriztica6=['Acnitidos'];
$Caracteriztica7=['Otros Metales'];
$Caracteriztica8=['No Metales'];
$Caracteriztica9=['Otros No Metales'];
$Caracteriztica10=['Halogenos'];
$Caracteriztica11=['GasesNobles'];
$Caracteriztica12=['Metaloides'];


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TABLA PERIODICA</title>
</head>
<body class="body">


<h1 >Tabla periodica</h1>

<?php foreach ($OtrosNoMetales  as $a) : ?>
      <div class="OtrosNoMetales"> <?php echo"<span>{$a}</span>"?></div>
<?php endforeach?>

<?php foreach ($Alcalinos as $a2) : ?>
      <div class="Alcalinos"> <?php echo"<span>{$a2}</span>"?></div>
<?php endforeach?>


<?php foreach ($AlcalinosTerreos as $a3) : ?>
<div class="AlcalinosTerreos"> <?php echo"<span>{$a3}</span>"?></div>
<?php endforeach ?>

<?php foreach ($MetalesDeTrasicion  as $a4) : ?>
<div class="MetalesDeTrasicion"> <?php echo"<span>{$a4}</span>"?></div>
<?php endforeach ?>

<?php foreach ($MetalesDeTrasicion2 as $a5) : ?>
<div class="MetalesDeTrasicion2"> <?php echo"<span>{$a5}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Lantanidos as $a6) : ?>
<div class="Lantanidos"> <?php echo"<span>{$a6}</span>"?></div>
<?php endforeach ?>

<?php foreach ($MetalesDeTrasicion3 as $a7) : ?>
<div class="MetalesDeTrasicion3"> <?php echo"<span>{$a7}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Actinidos  as $a8) : ?>
<div class="Actinidos"> <?php echo"<span>{$a8}</span>"?></div>
<?php endforeach ?>

<?php foreach ($MetalesDeTrasicion4 as $a9) : ?>
<div class="MetalesDeTrasicion4"> <?php echo"<span>{$a9}</span>"?></div>
<?php endforeach ?>
 
<?php foreach ($Metaloides as $a10) : ?>
<div class="Metaloides"> <?php echo"<span>{$a10}</span>"?></div>
<?php endforeach ?>

<?php foreach ($OtrosMetales  as $a11) : ?>
<div class="OtrosMetales"> <?php echo"<span>{$a11}</span>"?></div>
<?php endforeach ?>

<?php foreach ($OtrosNoMetales2 as $a12) : ?>
<div class="OtrosNoMetales2"> <?php echo"<span>{$a12}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Metaloides2  as $a13) : ?>
<div class="Metaloides2"> <?php echo"<span>{$a13}</span>"?></div>
<?php endforeach ?>

<?php foreach ($OtrosMetales2 as $a14) : ?>
<div class="OtrosMetales2"> <?php echo"<span>{$a14}</span>"?></div>
<?php endforeach ?>

<?php foreach ($OtrosNoMetales3 as $a15) : ?>
<div class="OtrosNoMetales3"> <?php echo"<span>{$a15}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Metaloides3 as $a16) : ?>
<div class="Metaloides3"> <?php echo"<span>{$a16}</span>"?></div>
<?php endforeach ?>

<?php foreach ($OtrosMetales3  as $a17) : ?>
<div class="OtrosMetales3"> <?php echo"<span>{$a17}</span>"?></div>
<?php endforeach ?>

<?php foreach ($OtrosNoMetales4 as $a18) : ?>
<div class="OtrosNoMetales4"> <?php echo"<span>{$a18}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Metaloides4 as $a19) : ?>
<div class="Metaloides4"> <?php echo"<span>{$a19}</span>"?></div>
<?php endforeach ?>

<?php foreach ($OtrosMetales4 as $a20) : ?>
<div class="OtrosMetales4"> <?php echo"<span>{$a20}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Halogenos as $a21) : ?>
<div class="Halogenos"> <?php echo"<span>{$a21}</span>"?></div>
<?php endforeach ?>

<?php foreach ($GasesNobles as $a22) : ?>
<div class="GasesNobles"> <?php echo"<span>{$a22}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Lantanidos2 as $a23) : ?>
<div class="Lantanidos2"> <?php echo"<span>{$a23}</span>"?></div>
<?php endforeach ?>
<br>

<?php foreach ($Actinidos2 as $a24) : ?>
<div class="Actinidos2"> <?php echo"<span>{$a24}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica  as $a25) : ?>
<div class="Caracteriztica"> <?php echo"<span>{$a25}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica2 as $a26) : ?>
<div class="Caracteriztica2"> <?php echo"<span>{$a26}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica3 as $a27) : ?>
<div class="Caracteriztica3"> <?php echo"<span>{$a27}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica4 as $a28) : ?>
<div class="Caracteriztica4"> <?php echo"<span>{$a28}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica5 as $a29) : ?>
<div class="Caracteriztica5"> <?php echo"<span>{$a29}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica6 as $a30) : ?>
<div class="Caracteriztica6"> <?php echo"<span>{$a30}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica7 as $a31) : ?>
<div class="Caracteriztica7"> <?php echo"<span>{$a31}</span>"?></div>
<?php endforeach ?>


<?php foreach ($Caracteriztica12 as $a36) : ?>
<div class="Caracteriztica12"> <?php echo"<span>{$a36}</span>"?></div>
<?php endforeach ?>


<?php foreach ($Caracteriztica8 as $a32) : ?>
<div class="Caracteriztica8"> <?php echo"<span>{$a32}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica9 as $a33) : ?>
<div class="Caracteriztica9"> <?php echo"<span>{$a33}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica10 as $a34) : ?>
<div class="Caracteriztica10"> <?php echo"<span>{$a34}</span>"?></div>
<?php endforeach ?>

<?php foreach ($Caracteriztica11 as $a35) : ?>
<div class="Caracteriztica11"> <?php echo"<span>{$a35}</span>"?></div>
<?php endforeach ?>



</body>
</html>  

