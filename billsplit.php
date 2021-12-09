<?php include('header.php');
if (!isset($_SESSION['user'])) {
  header('location:login.php');
} ?>
<?php
$nops = empty($_POST['nops']) ? 0 : (int)$_POST['nops'] ;
?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css" />

<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
<!-- =============================================== -->
<?php
include('form.php');
$frm = new formBuilder;
?>
</div>
<div class="content">
  <div class="wrap">
    <div class="content-top">
      <h3>Payment</h3>
      <form action="" method="post" id="form1010">
        <div class="col-md-4 col-md-offset-4" style="margin-bottom:50px">
          <div class="form-group">
            <label class="control-label">Number of people</label>
            <input type="text" class="form-control" name="nops">
          </div>
          <?php if (0 !== $nops) :
            foreach (range(1, $nops) as $nop) : ?>
              <div>
                <label class="control-label">UPI Id <?php echo $nop; ?></p>
                  <input type="email" class="form-control" name="UPI_ID[<?php echo $nop; ?>]" />
              </div>
          <?php endforeach;
          endif; ?>
          <div class="form-group">
            <button class="btn btn-success">Split</button>
          </div>
        </form>
    </div>
  </div>
</div>

<div class="clear"></div>

</div>
<?php include('footer.php'); 

?>
</div>

<script>

</script>