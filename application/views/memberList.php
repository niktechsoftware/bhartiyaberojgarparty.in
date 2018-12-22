
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
  font-size: 09px;
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
   width: 150px;
   height: 25px;
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

<style type="text/css">
table.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;display:block;}
table.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}

table.tftable tr {background-color:#ffffff;}

table.tftable td {font-size:10px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}

.thead1 {
    display: inline-block;
    width: 100%;
    height: 40px;
}
.tbody1 {
    height: 400px;
  display: inline-block;
    width: 100%;
   
    overflow: auto;
}
</style>


    <script src="http://www.niktechsoftware.com/school/assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
        <?php $this->load->view("include/menu");?>
        <form action="<?php echo base_url();?>index.php/welcome/searchMember"  method ="post" enctype="multipart/form-data" > 
        <div class="panels-flexible-row panels-flexible-row-aap_layout-2 clearfix center-content-rows aap-background-class">
				<div class="inside panels-flexible-row-inside panels-flexible-row-aap_layout-2-inside clearfix">
					<div class="panels-flexible-region panels-flexible-region-aap_layout-sliding_region panels-flexible-region-first ">
						<div class="inside panels-flexible-region-inside panels-flexible-region-aap_layout-sliding_region-inside panels-flexible-region-inside-first">
							<div class="panel-pane pane-views pane-ticker-demo">
								<div class="pane-content">
									<div id="fb-root"></div>
									
									
								</div>
							</div>
							<div >
												<label class="col-sm-3 control-label">
														State : <span class="symbol required"></span>
													</label>
													
														<select class="textox " id="state" name="state"  required="required">
															<option value="">-SELECT STATE-</option>
															<?php foreach($state as $row):?>
															<option value="<?php echo $row->state; ?>"><?php echo $row->state; ?></option>
															<?php endforeach; ?>
										</select>
												
												
												<label class="col-sm-3 control-label">
													City : <span class="symbol required"></span>
												</label>
												<select class="textox " id="city" name="city">
												</select>
														
												<label class="col-sm-5 control-label">
													Area : <span class="symbol required"></span>
												</label>
												
													<select class="textox " id="area" name="area"  >
													
													</select>
													<button class = "btn btn:hover" type ="submit" id = "submit"> Submit</button>		
									
													
											</div>

	 						<table id="tfhover" class="tftable" border="1">
	 							
	 								<thead class= "thead1">
									<tr> <th style="width:10px;height:25;">Sno.</th>
										 <th style="width:100px;height:25;">Member Name</th>
										 <th style="width:130px;height:25;">Father Name</th>
										  <th style="width:130px;height:25;">Education</th>
										  <th style="width:90px;height:25;">City</th>
										  <th style="width:60px;height:25;">State</th>
										  <th style="width:80px;height:25;">Join Date</th>
										 
									</tr>
									</thead>
									<tbody class = "tbody1">
									<?php 
									
									if($rt->num_rows()>0){
									$i=1; foreach($rt->result() as $v):
									?><tr><td style="width:10px;height:25;"><?php echo $i;?></td>
									<td style="width:100px;height:25;"><?php echo $v->member_name;?></td>
									<td style="width:130px;height:25;"><?php echo $v->father_name;?></td>
									<td style="width:90px;height:25;"><?php echo $v->education;?></td>
									<td style="width:90px;height:25;"><?php echo $v->city;?></td>
									<td style="width:60px;height:25;"><?php echo $v->state;?></td>
									<td style="width:80px;height:25;"><?php echo date('d-m-Y',strtotime($v->date1));?></td></tr>
								<?php $i++;	endforeach;
									}else{
									echo "No Record Found";
									}?>
									
									
									</tbody>
							</table>		
				</div>
					</div>
					<?php $this->load->view("include/menuRight")?>
					
					
					
				</div>
			</div>
</form>
<?php $this->load->view("include/footer");?>

<script type="text/javascript">
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

</script>

	 