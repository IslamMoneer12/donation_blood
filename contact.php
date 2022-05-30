<?php include"inc/dbconnect.php";
global $conn;
?>

<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<body>

<?php
	 include"top_nav.php";
?>

    <!-- Page Content -->
    <div class="container" style="margin-top:30px;">

			<div class="row">
				<div class="col-md-6">
						<img class="img-responsive" src="images/Contact_us.jpg" alt="">
				</div>

				<div class="col-md-6">
				<h3 class='text-primary'>نحن نتشرف بمراسلتكم لنا عبر البريد الالكتروني</h3>
				<?php
					if(isset($_POST["submit"]))
					{
					 $sql="INSERT INTO contact (name, email, msg, status,time_msg) VALUES
					       ('{$_POST["name"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
						if($conn->query($sql))
				{
					echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						 تم ارسال رسالتك بنجاح.
					</div>


					';
				}
					}
				?>
				<br>
                <form method="post" action="contact.php" role="form" autocomplete="off" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>الاسم </label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>البريد الالكتروني</label>
                            <input type="email" class="form-control" name="email"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>الرسالة</label>
                            <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" name="submit"><i class='fa fa-send'></i> ارسل الرسالة</button>
                </form>

			</div>

        </div>

        <hr>
		<?php include"footer.php"; ?>

    </div>
</body>

</html>
