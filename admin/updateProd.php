<?php
include '../dbconn.php';
session_start();

extract($_POST);
if (isset($update)) {
	mysqli_query($conn, "UPDATE cars SET brand='$brand',model='$model', car_type='$cartype' where id='" . $_GET['pid'] . "'");
	$err = "<font color='blue'>Product updated </font>";
	echo '<script>
	alert("Product Updated");
	window.location.href="manageprod.php";
	</script>';
}

//select old product

$q = mysqli_query($conn, "SELECT * FROM cars WHERE id='" . $_GET['pid'] . "'");
$res = mysqli_fetch_array($q);
?>
<?php
include '../includes/aside.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Cheers | Update Product</title>
	<link rel="icon" type="image/x-icon" href="../image/kisanarea.png" />

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/bootstrap.css" />
	<link rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- daterange picker -->
	<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css" />
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" />
	<!-- BS Stepper -->
	<link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css" />
	<!-- dropzonejs -->
	<link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css" />
	<!-- Theme style -->
	<link rel="stylesheet" href="css/adminlte.min.css" />

</head>

<body>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container d-flex justify-content-center mt-3">
				<b class="font">
					<h1>Update Existing Product</h1>
				</b>
			</div>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- SELECT2 EXAMPLE -->
				<div class="card card-default">

				</div>
			</div>
			<!-- /.card-header -->
			<div class="border border-secondary card-body font m-auto rounded-3 w-50">
				<form method="POST" class="">
					<div class="form-group mb-3">
						<div class="col-sm-4"><?php echo @$err; ?></div>
					</div>
					<div class="form-group">
						<label for="brand">Brand:</label>
						<select id="brand" name="brand" value="<?php echo $res['brand']; ?>">
							<option value="Hyundai">Hyundai</option>
							<option value="Volkswagen">Volkswagen</option>
							<option value="Honda">Honda</option>
							<option value="KIA">KIA</option>
							<option value="Toyota">Toyota</option>
							<option value="Skoda">Skoda</option>
							<option value="Suzuki">Suzuki</option>
							<option value="Nissan">Nissan</option>
							<option value="Jeep">Jeep</option>
						</select>
					</div>
					<div class="form-group mb-3">
						<b>Select Product</b>

					</div>
					<div class="form-group">
						<select id="car_type" value="<?php echo $res['car_type']; ?>" name="car_type">
							<option value="Sedan">Sedan</option>
							<option value="SUV">SUV</option>
							<option value="Hatchbag">Hatchbag</option>
						</select>
					</div>

					<div class="form-group">
						<label for="model">Model:</label>
						<input type="text" id="model" value="<?php echo $res['model']; ?>" name="model" required>
					</div>

					<div class="form-group">
						<label for="year">Year:</label>
						<input type="number" id="year" value="<?php echo $res['year']; ?>" name="year" min="1886" max="2099" required>
					</div>

					<div class="form-group mb-3">
						<b>Enter Price</b>
						<input type="text" name="price" value="<?php echo $res['price']; ?>" class="mt-2 border-secondary form-control" />
					</div>




					<div class="text-white form-group mt-4">
						<input type="submit" value="Update" name="update" class="btn btn-primary" />
						<input type="reset" class="btn btn-dark" />
					</div>
				</form>
			</div>
		</section>
		<footer class="d-flex justify-content-center mt-5">
			<strong>Copyright &copy; 2022
				<a href="#">Cheers</a>.</strong>
		</footer>

	</div>
</body>


</html>