 <link href="<?php echo base_url()?>assets/table/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url()?>assets/table/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url()?>assets/table/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
       
        <link href="<?php echo base_url()?>assets/table/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url()?>assets/table/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url()?>assets/table/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url()?>assets/table/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url()?>assets/table/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url()?>assets/table/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url()?>assets/table/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url()?>assets/table/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
 <link href="<?php echo base_url()?>assets/table/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url()?>assets/table/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url()?>assets/table/plugins/3d-bold-navigation/js/modernizr.js"></script>
       
        
        <link href="<?php echo base_url()?>assets/table/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
       
        <link href="<?php echo base_url()?>assets/table/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/table/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
          <link href="<?php echo base_url()?>assets/table/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/table/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url()?>assets/table/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url()?>assets/table/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url()?>assets/table/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/table/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo base_url()?>assets/table/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url()?>assets/table/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url()?>assets/table/plugins/3d-bold-navigation/js/modernizr.js"></script>
       
        
        <link href="<?php echo base_url()?>assets/table/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
       
        <link href="<?php echo base_url()?>assets/table/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/table/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
          <link href="<?php echo base_url()?>assets/table/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/table/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url()?>assets/table/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url()?>assets/table/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url()?>assets/table/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/table/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
      
       

<div class="col-sm-12">
				<!-- start: FORM WIZARD PANEL -->
				<div class="panel panel-white">
					<div class="panel-heading">
						<h4 class="panel-title">Recharge  <span class="text-bold">Information</span></h4>
					</div>
					<div class="panel-body">
				
					<table class="table table-striped table-bordered table-hover" id="sample_1">
	 							
	 								<thead>
									<tr> <th>Sno.</th>
										 <th>Member Name</th>
										 <th>Father Name</th>
										  <th>Mobile Number</th>
										  <th>Address</th>
										  <th>City</th>
										 
										  <th>State</th>
										   <th>Distic</th>
										  <th>Join Date</th>
										 
									</tr>
									</thead>
									<tbody>
									<?php $val=$this->db->get("member");
									if($val->num_rows()>0){
									$i=1; foreach($val->result() as $v):
									?><tr><td><?php echo $i;?></td>
									<td><?php echo $v->member_name;?></td>
									<td><?php echo $v->father_name;?></td>
									<td><?php echo $v->mobile_number;?></td>
									<td><?php echo $v->address;?></td>
									<td><?php echo $v->city;?></td>
									<td><?php echo $v->state;?></td>
									<td><?php echo $v->distic;?></td>
									<td><?php echo $v->date1;?></td>
								<?php $i++;	endforeach;
									}else{
									echo "No Record Found";
									}?>
									
									
									</tbody>
							</table>		
				</div>
				
			</div>
		
	  </div>
	  
	   <script src="<?php echo base_url();?>assets/table/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url();?>assets/table/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/table/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/table/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url();?>assets/table/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/table/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url()?>assets/table/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/summernote-master/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url()?>assets/table/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?php echo base_url()?>assets/table/js/modern.min.js"></script>
        <script src="<?php echo base_url()?>assets/table/js/pages/form-elements.js"></script>
     <script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'keenthemes.com');
  ga('send', 'pageview');
</script>
                          