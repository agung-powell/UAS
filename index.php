<?php 
  session_start();
  if(!isset($_SESSION['login']))
  {
    header("location: login.php");
    exit;
  }
  else{
 ?>
<!DOCTYPE html>
<html>
<?php
  include "header.php";
?>
	<head>
		<script src="bower_components/chart.js/Chart.js"></script>
	</head>
<body class="hold-transition skin-blue sidebar-mini">

  <div class="content-wrapper">
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
      </ol>
    </section>
	<?php 
	include 'koneksi.php';
	echo "<br><br>";
  $sql="SELECT * FROM relawan";
  $res=mysqli_query($connect,$sql);
  $a=1;
  while($simpan=mysqli_fetch_array($res))
  {
    $lokasi[$a]=mysqli_num_rows(mysqli_query($connect, "SELECT * FROM detail WHERE ID='$a'"));
    $red[$a]=rand(0,255);
    $green[$a]=rand(0,255);
    $blue[$a]=rand(0,255);
    $a++;
  }
	?>
		<div class="col-lg-6 col-xs-6">
		  <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Persentasi Jumlah Relawan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body"> 
              <div class="row">
                <div class="col-md-8">
                  <div id="canvas-holder">
					<canvas id="chart-area" width="200%" height="200%"/>
				  </div>
                </div>
                  <ul class="chart-legend clearfix">
                    <?php 
                    $a=1;
                    $res2=mysqli_query($connect, $sql);
                    while($baris=mysqli_fetch_array($res2)){?>
                      <li><i class="fa fa-circle-o" style="color: rgb(<?php echo "$red[$a]"; ?>, <?php echo "$green[$a]"; ?>, <?php echo "$blue[$a]"; ?>);"></i><?php echo $baris['ID']; ?></li>
                      <?php $a++; ?>
                    <?php } ?>
                  </ul>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <?php
                $a=1;
                $res3=mysqli_query($connect, $sql);
                while($baris1=mysqli_fetch_array($res3)){?>
                  <li><a href="#"><?php echo $baris1['ID']; ?><span class="pull-right" style="color: rgb(<?php echo "$red[$a]"; ?>, <?php echo "$green[$a]"; ?>, <?php echo "$blue[$a]"; ?>);"><?php echo "$lokasi[$a]"; ?></span></a></li>
                <?php $a++;
              } ?>
              </ul>
            </div>
          </div>
		</div>
		
		<div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php 
              $user=mysqli_num_rows(mysqli_query($connect,"SELECT * FROM relawan")); ?>
              <h3><?php echo $user; ?> </h3>
              <p>Jumlah relawan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
	<script>
    <?php 
    $a=1;
    $sql0="SELECT * FROM relawan ";
    $res5=mysqli_query($connect, $sql0); ?>
		var pieData = [
          <?php while($bar=mysqli_fetch_array($res5)){ ?>
        {
          value: <?php echo $lokasi[$a]; ?>,
          color: "rgb(<?php echo $red[$a]; ?>, <?php echo $green[$a]; ?>, <?php echo $blue[$a]; ?>)",
          highlight: "#000000",
          label: "<?php echo $bar['ID']; ?>"
          <?php $a++; ?>
        },
      <?php } ?>
				
			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);
			};
	</script>
</div>
</body>
	<?php
		include "footer.php";
	?>
</html>
<?php }?>