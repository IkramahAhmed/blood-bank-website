<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
  #sidebar{position:relative;margin-top:-20px}
  #content{position:relative;margin-left:210px}
  @media screen and (max-width: 600px) {
    #content {
      position:relative;margin-left:auto;margin-right:auto;
    }
  }
  #he{
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    padding: 3px 7px;
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
    align:center
  }
  .table-container {
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 30px;
  }
  .table-responsive {
    overflow-x: auto;
  }
  .table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 15px;
  }
  .table thead th {
    background-color: #e74c3c;
    color: white;
    padding: 15px;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
  }
  .table tbody tr {
    background-color: #f8f9fa;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }
  .table tbody tr:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  }
  .table tbody td {
    padding: 15px;
    text-align: center;
    vertical-align: middle;
    border: none;
  }
  .action-button {
    background-color: #3498db;
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }
  .action-button:hover {
    background-color: #2980b9;
    color: white;
  }
  .pagination {
    justify-content: center;
    margin-top: 20px;
  }
  .pagination li a {
    color: #e74c3c;
    border: 1px solid #e74c3c;
    margin: 0 5px;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .pagination li a:hover {
    background-color: #e74c3c;
    color: white;
  }
  .pagination li.active a {
    background-color: #e74c3c;
    color: white;
    border-color: #e74c3c;
  }
</style>
</head>
<?php
include 'conn.php';
include 'session.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
<body style="color:black">
<div id="header">
<?php include 'header.php'; ?>
</div>
<div id="sidebar">
<?php $active="list"; include 'sidebar.php'; ?>
</div>
<div id="content">
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">
          <h1 class="page-title">Donor List</h1>
        </div>
      </div>
      <hr>
      <?php
        include 'conn.php';

        $limit = 10;
        if(isset($_GET['page'])){
          $page = $_GET['page'];
        }else{
          $page = 1;
        }
        $offset = ($page - 1) * $limit;
        $count=$offset+1;
        $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id LIMIT {$offset},{$limit}";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)   {
      ?>
      <div class="table-container">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Email Id</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row['donor_name']; ?></td>
                <td><?php echo $row['donor_number']; ?></td>
                <td><?php echo $row['donor_mail']; ?></td>
                <td><?php echo $row['donor_age']; ?></td>
                <td><?php echo $row['donor_gender']; ?></td>
                <td><?php echo $row['blood_group']; ?></td>
                <td><?php echo $row['donor_address']; ?></td>
                <td>
                  <a href='delete.php?id=<?php echo $row['donor_id']; ?>' class="action-button">Delete</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php } ?>

      <div class="table-responsive" style="text-align:center;align:center">
        <?php
        $sql1 = "SELECT * FROM donor_details";
        $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

        if(mysqli_num_rows($result1) > 0){
          $total_records = mysqli_num_rows($result1);
          $total_page = ceil($total_records / $limit);

          echo '<ul class="pagination admin-pagination">';
          if($page > 1){
            echo '<li><a href="?page='.($page - 1).'">Prev</a></li>';
          }
          for($i = 1; $i <= $total_page; $i++){
            if($i == $page){
              $active = "active";
            }else{
              $active = "";
            }
            echo '<li class="'.$active.'"><a href="donor_list.php?page='.$i.'">'.$i.'</a></li>';
          }
          if($total_page > $page){
            echo '<li><a href="donor_list.php?page='.($page + 1).'">Next</a></li>';
          }
          echo '</ul>';
        }
        ?>
      </div>
    </div>
  </div>
</div>
<?php }
else {
  echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
  ?>
  <form method="post" name="" action="login.php" class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-8 col-sm-offset-4" style="float:left">
        <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
      </div>
    </div>
  </form>
<?php }
?>
</body>
</html>