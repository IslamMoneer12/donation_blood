
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("head.php");?>
</head>
<body>
<?php
include("top_nav.php");
?>
    <div class="container" style='margin-top:30px;'>
			<div class="row">
            <div class="col-md-12">
                <h3 class=" text-primary">
					<i class='fa fa-users'></i>تسجيل تبرع جديد
                </h3><hr>
						<?php  include("blood_bread.php"); ?>

            </div>
        </div>

			<div class="row centered-form ">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-user "> </span> نموذج تعبئة بيانات</h3>
                    </div>
                    <div class="panel-body">
						<form  method="post"  autocomplete="off" id="form1"  role="form">
						<div class="form-group">
							<label class="control-label text-primary" for="NAME" >الاسم كامل</label>
							<input type="text" placeholder="ادخل اسمك بالكامل" id="donorName"  name="donorName"  required class="form-control input-sm">
						</div>

							<div class="form-group">
								<label class="control-label text-primary"> المدينة</label>
									<select id="donorCity" name="donorCity"  class="form-control input-sm" required>
										<option value="">  اختر المدينة</option>
					          <option value="اريحا" >اريحا</option>
					          <option value="الخليل">الخليل</option>
					          <option value="القدس">القدس</option>
					          <option value="بيت حانون">بيت حانون</option>
					          <option value="بيت لاهيا">بيت لاهيا</option>
					          <option value="بيت لحم">بيت لحم</option>
					          <option value="جباليا">جباليا</option>
					          <option value="جنين">جنين</option>
					          <option value="خانيونس">خانيونس</option>
					          <option value="دير البلح">دير البلح</option>
					          <option value="رام الله">رام الله</option>
					          <option value="رفح">رفح</option>
					          <option value="طولكرم">طولكرم</option>
					          <option value="غزة">غزة</option>
					          <option value="قلقيلية">قلقيلية</option>
					          <option value="نابلس">نابلس</option>
									</select>
							</div>

						<div class="form-group">
							<label class="control-label text-primary" for="BLOOD" >فصيلة الدم</label>
						<select id="bloodGroup" name="bloodGroup" class="form-control input-sm" required>
							<option value="">اختر الفصيلة</option>
							<option value="Op">+O</option>
							<option value="On">-O</option>
							<option value="Bp">+B</option>
							<option value="Bn">-B</option>
							<option value="Ap">+A</option>
							<option value="An">-A</option>
							<option value="ABp">+AB</option>
							<option value="ABn">-AB</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label text-primary"  for="GENDER">الجنس</label>
								<select id="donor_gender"  name="donor_gender" class="form-control input-sm" required>
									<option >Select Gender</option>
									<option value="ذكر">ذكر</option>
									<option value="انثى">انثى</option>
								</select>
						</div>
						<div class="form-group">
							<label class="control-label text-primary" for="" > رقم الهاتف-الجوال</label>
							<input type="text" placeholder="ادخل رقم هاتفك للتواصل معك" id="donorNo"   name="donorNo"  required class="form-control input-sm">
						</div>
						<div class="form-group">
							 <label class="control-label text-primary" for="EMAIL" > البريد الالكتروني</label>
									 <input type="email" id="donorEmail"   name="donorEmail"  class="form-control" placeholder=" ادخل البريد الالكتروني" required>
						 </div>

						<div class="form-group">
						 <input id="submit" onclick="req_data();" class="btn btn-primary"  type="button" value="أضف بياناتك" style="margin-left:280px;margin-right:20px" >

						 </div>
						 </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<script type="text/javascript">

		function req_data() {
		var name = document.getElementById("donorName").value;
		var city = document.getElementById("donorCity").value;
		var bloodGroup = document.getElementById("bloodGroup").value;
		var gender = document.getElementById("donor_gender").value;
		var contactNo = document.getElementById("donorNo").value;
		var email = document.getElementById("donorEmail").value;
		var dataString = 'donorName=' + name + '&donorCity=' + city + '&bloodGroup=' + bloodGroup + '&donor_gender=' + gender +  '&donorNo=' + contactNo + '&donorEmail=' + email;
		if (name == '' || city == '' || bloodGroup == '' || gender == '' || contactNo == '' || email == '') {
		alert("أرجو تعبئة جميع المدخلات");
		} else {
		// AJAX code to submit form.
		$.ajax({
		type: "POST",
		url: "inc/req_blood_data.php",
		data: dataString,
		cache: false,
		success: function(html) {
		alert("تم اضافة بياناتك بنجاح");
		}
		});
		}
		return false;
		}


		</script>
 <?php include("footer.php"); ?>

</body>
</html>
