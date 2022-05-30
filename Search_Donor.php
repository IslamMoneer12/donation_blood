<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php");?>
</head>
<body>

<?php
include("top_nav.php");
?>
    <!-- Page Content -->
    <div class="container-fluid"  style='margin-top:20px;'>
        <!-- Marketing Icons Section -->
		  		<div class="row  centered-form ">
            <div class="col-xs-12 col-sm-12 col-md-6" id="feedback">
     			<img src="images/123456.PNG" alt="">
     			  </div>
		    <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-search "> </span> بحث عن المتبرعين</h3>
                    </div>
                    <div class="panel-body">
					<form  name="form_seach_donor" id="form_seach_donor" >
            <div class="form-group">
              <label class="control-label text-primary"> اختر المدينة</label>
                <select name="City"  required  class="form-control input-sm">
                  <option value="">  << اختر المدينة >></option>
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
							<label class="control-label text-primary"> اختــر فصيلة الدم</label>
								<select name="Blood_group"  required  class="form-control input-sm">
                    <option> << اختر فصيلة الدم>></option>
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
							<button class="btn btn-primary"  name="search" type="button" id="search"><i class='fa fa-search'></i> بحث</button>
						  </div>
              <div class="col-xs-12 col-sm-12 col-md-6" id="feedback">

              </div>
                    </div>
                </div>
            </div>

            </div>
           </div>


 <?php include("footer.php"); ?>
 <script>
 $(document).on('click','#search',function(){

   $.ajax({
         url:"inc/search_data_donor.php",
         method:"POST",
         data:$("#form_seach_donor").serialize(),
         success:function(data)
         {
           $("#feedback").html(data);

         }
       });

 });
</script>

</body>
</html>
