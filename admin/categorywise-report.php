<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['detsadminid']==0)) {
  header('location:logout.php');
  } else{

  
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Family Expense Tracker || Categorical User Expense Report</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Categorical User Expense Report</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Categorical User Expense Report</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form role="form" method="post"  name="bwdatesreport">
								<div class="form-group">
									<label>From Date</label>
									<input class="form-control" type="date"  id="fromdate" name="fromdate" required="true">
								</div>
								<div class="form-group">
									<label>To Date</label>
									<input class="form-control" type="date"  id="todate" name="todate" required="true">
								</div>
								
									<div class="form-group">
									<label>Users</label>
									<select class="form-control" name="user" required="true">
										<option value="">Select User</option>
										<option value="all">All Users</option>
										<?php $sql=mysqli_query($con,"select ID,FullName from tbluser");
										while($result=mysqli_fetch_array($sql)){?>
<option value="<?php echo $result['ID'].'-'.$result['FullName'];?>"><?php echo $result['FullName']; ?></option>
<?php } ?>
									</select>
								</div>
							
								
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Submit</button>
								</div>
								
								
								</div>
								
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->


<?php if(isset($_POST['submit'])){?>
		<div class="col-lg-12">
<?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$userdata=$_POST['user'];
$userdetails=explode('-', $userdata);
$userid=$userdetails[0];
$username=$userdetails[1];
?>

<?php if($userdata=='all'):?>
<h5 align="center" style="color:blue">Categorical Expense Report of All Users from  <?php echo $fdate?> to <?php echo $tdate?></h5>
<?php else: ?>
	<h5 align="center" style="color:blue">Categorical Expense Report of <?php echo $username?> from  <?php echo $fdate?> to <?php echo $tdate?></h5>
<?php endif;?>
<hr />
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <tr>
              <th>S.NO</th>
              <th>Category</th>
              <th>Expense Amount</th>
                </tr>
                                        </tr>
                                        </thead>
 <?php
if($userdata=='all'):
$ret=mysqli_query($con,"SELECT CategoryName,SUM(ExpenseCost) as totalexpense FROM tblexpense  where (date(ExpenseDate) BETWEEN '$fdate' and '$tdate') group by CategoryName");
else:
$ret=mysqli_query($con,"SELECT CategoryName,SUM(ExpenseCost) as totalexpense FROM tblexpense  where (date(ExpenseDate) BETWEEN '$fdate' and '$tdate') && (UserId='$userid') group by CategoryName");
endif;
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['CategoryName'];?></td>
                  <td><?php  echo $ttlsl=$row['totalexpense'];?></td>
           
           
                </tr>
                <?php
                $totalsexp+=$ttlsl; 
$cnt=$cnt+1;
} ?>

 <tr>
  <th colspan="2" style="text-align:center">Grand Total</th>     
  <td><?php echo $totalsexp;?></td>
 </tr>     
<?php } else { ?>
	<tr>
		<td colspan="3" style="color:red;">No Record Found</td>
	</tr>
<?php } ?>

                                    </table>
		</div>
<?php } ?>


			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	
</body>
</html>
