<?php
    include 'pages/header.php';
  ?>
  <?php
require 'db_connect.php';



$con = mysqli_connect($host,$user,$pass,$db);
if(!$con){
    die("can not connect" . mysqli_connect_error());
    } 
/*mysqli_select_db($db);*/
include 'submit.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Section</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action ="" method = "post">
              <div class="box-body">
                <div class="form-group">
                <label>Type</label>
                <select name="type" class="form-control select2" style="width: 100%;" required>
                  <option value='1'>News</option>
                  <option value='2'>Announcement</option>
                  <option value='3'>Publication</option>
                </select>
              </div>
                <div class="form-group">
                  <label>Headline</label>
                  <input type="text" name="headline" class="form-control" placeholder="Headline">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Description</label>
                  <textarea maxlength="100" id="complaint" name="descript" class="form-control" required rows="3" placeholder="Write the description here"></textarea>
                </div>
                <!-- Date -->
              <div class="form-group">
                <label>Date:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="adate" type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name = "submit" value="Submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
    include 'pages/footer.php';
  ?>
