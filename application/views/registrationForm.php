<?php $this->load->view("include/menu");?>
<style>
.btn {
  background: #5dd934;
  background-image: -webkit-linear-gradient(top, #5dd934, #7fb82b);
  background-image: -moz-linear-gradient(top, #5dd934, #7fb82b);
  background-image: -ms-linear-gradient(top, #5dd934, #7fb82b);
  background-image: -o-linear-gradient(top, #5dd934, #7fb82b);
  background-image: linear-gradient(to bottom, #5dd934, #7fb82b);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

.success {
color: #4F8A10;
background-color: #DFF2BF;
background-image:url('success.png');
}

.textox {
   width: 211px;
   height: 33px;
   border: solid 2px #00E3E3;
   padding: 2px;
   border-radius: 5px;
   font-size: 14px;
   box-shadow: 0px 1px 2px 0px #9C9C9C;
   background-color: #FFFFFF;
   outline: none;
   color: #474747;
  }
.textox:hover  {
   border: 2px solid #FF00D5;
  }
.textox:focus  {
   border: solid 2px #00D43C;
   box-shadow: inset 0px 1px 2px 0px #9C9C9C;
  }
.textox:active  {
   border: solid 2px #0043EB;
  }
</style>
<script src="http://www.niktechsoftware.com/school/assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
<div class="panels-flexible-row panels-flexible-row-aap_layout-2 clearfix center-content-rows aap-background-class">
				<div class="inside panels-flexible-row-inside panels-flexible-row-aap_layout-2-inside clearfix">
					<div class="panels-flexible-region panels-flexible-region-aap_layout-sliding_region panels-flexible-region-first ">
						<div class="inside panels-flexible-region-inside panels-flexible-region-aap_layout-sliding_region-inside panels-flexible-region-inside-first">
							<div class="panel-pane pane-views pane-ticker-demo">
								<div class="pane-content">
									<div id="fb-root"><center><h1> BBP Online Registration Form</h1></center></div>
								</div>
							</div>
							<br>
							</br>
							
									<div>
									<form action="<?php echo base_url();?>index.php/welcome/saveMember"  method ="post" enctype="multipart/form-data" >
										<div >
										<div><?php 
								if($this->uri->segment(3) == 'success'){
									$msg = $this->uri->segment(3); 
							?>
								<div class="success" role="alert">
	                                <h2> Well done! We have successfully Save you information for Registration, We will Contact with in 24 hours.</h2>
	                            </div>
	                            <div class="successNot" role="alert">
	                                <h2> </h2>
	                            </div>
							<?php }?>
							</div>
											<div >
												<label class="col-sm-5 control-label">
													Member Name &nbsp;&nbsp;: <span class="symbol required"></span>
												</label>
													<input type="text" class="textox " id="mname" name="mname"  required="required" />&nbsp;&nbsp;
												<label class="col-sm-5 control-label">
													&nbsp;&nbsp;	Father Name &nbsp;: <span class="symbol required"></span>
													</label>
													
														<input type="text" class="textox " id="fname" name="fname"  required="required" />
											</div>
											
											<br>
											<div >
												<label class="col-sm-5 control-label">
													Mobile Number : <span class="symbol required"></span>
												</label>
												
													
													<input type="text" class="textox " id="mnum" name="mnum"  required="required" />&nbsp;&nbsp;
												
												
													<label class="col-sm-5 control-label">
													&nbsp;&nbsp;	Education &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="symbol required"></span>
													</label>
													
														<input type="text" class="textox "  name="edu"  required="required" />
											</div>
											<br>
											<div >
												<label class="col-sm-5 control-label">
													Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="symbol required"></span>
												</label>
												
													
											<input type="text" class="textox " id="address" name="address"  required="required" />&nbsp;&nbsp;
												
												<label class="col-sm-5 control-label">
													&nbsp;&nbsp;	State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="symbol required"></span>
													</label>
													
														<select class="textox " id="state" name="state"  required="required">
															<option value="">-SELECT STATE-</option>
															<?php foreach($state as $row):?>
															<option value="<?php echo $row->state; ?>"><?php echo $row->state; ?></option>
															<?php endforeach; ?>
										</select>
												
												
													
											</div>
											<br>
											<div >
											
												
												<label class="col-sm-5 control-label">
												&nbsp;&nbsp;		City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span class="symbol required"></span>
													</label>
													<select class="textox " id="city" name="city"  required="required">
														</select>&nbsp;&nbsp;
									
												
													<label class="col-sm-5 control-label">
													&nbsp;&nbsp;	Area &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="symbol required"></span>
												</label>
												
													<select class="textox " id="area" name="area"  required="required">
														</select>
													
												
											</div>
											<br>
											<div >
												<label class="col-sm-5 control-label">
														Pincode &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="symbol required"></span>
												</label>
												
													<input type="text" class="textox" id="pincode" name="pincode"  required="required" >
										
													
												
												
													<label class="col-sm-5 control-label">
													&nbsp;&nbsp;	Aadhar No.&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; : <span class="symbol required"></span>
													</label>
													
														<input type="text" class="textox"  data-type="adhaar-number" maxLength="14" name="aadhar_number"  required="required" />
											</div>
											
											<br>
											<div >
												<label class="col-sm-5 control-label">
														&nbsp;&nbsp; Photo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="symbol required"></span>
												</label>
												
													<input type="file"  id="photo" name="stuImage"  required="required" >
										
													
												
												
													<label class="col-sm-5 control-label">
													&nbsp;&nbsp;	&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <span class="symbol required"></span>
													</label>
													
														<button class = "btn btn:hover" type ="submit" id = "submit"> Submit</button>
											</div>
											
											<br>
											<div >
												
												
											</div>
												
											</div>
											</form>	
												
									</div>	
									
						</div>
					</div>
					<?php $this->load->view("include/menuRight")?>
				</div>
			</div>
			
		

<?php $this->load->view("include/footer");?>
<script type="text/javascript">

$("#mname").keyup(function(){
	  //alert("Please enter a valid name");
	var mname = $("#mname").val();
	function allLetter(mname)
    { 
    var letters = /^[A-Za-z]+$/;
    if(mname.value.match(letters))
    {
    alert('Your name have accepted : you can try another');
    return true;
    }
    else
    {
    alert('Please input alphabet characters only');
    return false;
    }
    }
});


$("#mnum").keyup(function(){
	var mname = $("#mname").val();
	var fname = $("#fname").val();
	var mnum = $("#mnum").val();
	
	$.post("<?php echo site_url("welcome/getvalid") ?>",{mname : mname,fname : fname,mnum : mnum}, function(data){
		$("#successNot").html(data);
		});
	
	});

$("#state").change(function(){
	//alert("1");
	var state = $("#state").val();
	//alert(state);
	$.post("<?php echo site_url('welcome/getCity') ?>",{state : state},function(data){
		$("#city").html(data);
	});
});

$("#city").change(function(){
	var state = $("#state").val();
	var city = $("#city").val();
	//alert(state);
	$.post("<?php echo site_url('welcome/getArea') ?>",{city : city,state : state},function(data){
		$("#area").html(data);
	});
});

$("#area").change(function(){
	var state = $("#state").val();
	var city = $("#city").val();
	var area = $("#area").val();
	//alert(state);
	$.post("<?php echo site_url('welcome/getPin') ?>",{area : area,city : city,state : state},function(data){
		$("#pincode").val(data);
	});
});
$('[data-type="adhaar-number"]').keyup(function() {
	  var value = $(this).val();
	  value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
	  $(this).val(value);
	});

	$('[data-type="adhaar-number"]').on("change, blur", function() {
	  var value = $(this).val();
	  var maxLength = $(this).attr("maxLength");
	  if (value.length != maxLength) {
	    $(this).addClass("highlight-error");
	  } else {
	    $(this).removeClass("highlight-error");
	  }
	});

	$('[data-type="mobileNumber"]').keyup(function() {
		  var value = $(this).val();
		  value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("");
		  $(this).val(value);
		});

		$('[data-type="adhaar-number"]').on("change, blur", function() {
		  var value = $(this).val();
		  var maxLength = $(this).attr("maxLength");
		  if (value.length != maxLength) {
		    $(this).addClass("highlight-error");
		  } else {
		    $(this).removeClass("highlight-error");
		  }
		});


</script>