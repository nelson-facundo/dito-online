<?php
include_once "library/inc.connection.php";

$kode=$_GET['code'];
$sql ="SELECT * FROM pelanggan WHERE kode_aktivasi='$kode'";
$qry=mysql_query($sql, $koneksidb) or die("gagal Query".mysql_error());
$data=mysql_fetch_array($qry);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="assets/css/docs.css" rel="stylesheet"/>
	 
    <link href="style.css" rel="stylesheet"/>
	<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	
	
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body>
<section id="Table">
  <div class="page-header">
    <h3>Datos</h1>
  </div>
  <div class="row-fluid">
    <div class="span6">
		<table class="table">
        <thead>
          <tr>
            <th colspan="4">Datos:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>&nbsp;&nbsp;Nombre</td>
            <td><?php echo $data['nm_pelanggan']; ?></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Apellido</td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Email</td>
            <td><?php echo $data['email'];?></td>
          </tr>
          <tr>
          	<td>&nbsp;&nbsp;Usuario</td>
          	<td><?php echo $data['username']; ?></td>
          </tr>
          <tr>
          	<td>&nbsp;&nbsp;Contraseña</td>
          	<td>***********</td>
          </tr>
        </tbody>
      </table>
	</div>
	</div>
	
</section>


	
	
	
	
</div>
	

  </body>
</html>