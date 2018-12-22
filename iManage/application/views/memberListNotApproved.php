<link href="<?php echo base_url()?>assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url()?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/pace-master/pace.min.js"></script>
        
        <link href="<?php echo base_url()?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
       
        <link href="<?php echo base_url()?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
          <link href="<?php echo base_url()?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo base_url()?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url()?>assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
      
        
<div class="col-sm-12">
				<!-- start: FORM WIZARD PANEL -->
				<div class="panel panel-white">
					<div class="panel-heading">
						<h4 class="panel-title">Not Approved Member  <span class="text-bold">List</span></h4>
					</div>
					<div class="panel-body">
				
					<table class="table table-striped table-bordered table-hover" id="sample_1">
							
					<thead>
                                        	<tr>
                                            	<th>#</th>
                                                <th>Member Id</th>
                                                 <th>Member Name</th>
                                                <th>Father Name</th>
                                                <th>Mobile Number</th>
                                                <th>Education</th>
                                                <th>Address</th>
                                                <th>State</th>
                                                <th>City</th>
                                                 <th>Registration Date</th>
                                                 <th>Activity</th>
                                            </tr>
                  	 </thead>		
					<tbody>		
							 <?php 
                                       $this->db->where("status","Inactive");
                                   $dval =    $this->db->get("member");
                                        if($dval->num_rows()>0)
                                        {
                                        	$i = 1; foreach($dval->result() as $row):
                                        ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><button class="btn btn-success" id = "cn<?php echo $i;?>" value ="<?php echo $row->member_id;?>"><?php echo $row->member_id;?> </button></td>
                                                <td><?php echo $row->member_name;?></td>
                                                 <td><?php echo $row->father_name;?></td>
                                                <td><?php echo  $row->mobile_number;?></td>
                                                <td><?php echo  $row->education;?></td>
                                                <td><?php echo $row->address;?></td>
                                                <td><?php echo $row->state;?></td>
                                                <td><?php echo $row->city;?></td>
                                                 <td><?php echo $row->date1;?></td>
                                              <td><button class="btn btn-success" id = "reminder1<?php echo $i;?>" >Approve</button>
                                           </td>
	 	                                        <script language="JavaScript" type="text/javascript">
	 	                                              $("#reminder1<?php echo $i;?>").click(function(){
	 	                                         		var cnumber = $("#cn<?php echo $i;?>").val();
	 	                                         		$.post("<?php echo site_url("apanel/approvedMember");?>", {cnumber : cnumber}, function(data){
	 	                                         			$("#reminder1<?php echo $i;?>").html(data);
	 	                                         		});
	 	                                         		
	 	                                         	});	
	 	                                            
	 	                                               </script>       
                                            </tr>
                                            
                                        <?php $i++; endforeach;
                                        }
                                        else {
                                        echo "No Record found";
                                        }?>
					</tbody>			
				</table>	
				</div>
				
			</div>
		
	  </div>
	  
	   <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url();?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url();?>assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'keenthemes.com');
  ga('send', 'pageview');
</script>
                 		  