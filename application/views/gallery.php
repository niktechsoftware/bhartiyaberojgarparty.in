<?php $this->load->view("include/menu");?>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 175px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
<div class="panels-flexible-row panels-flexible-row-aap_layout-2 clearfix center-content-rows aap-background-class">
				<div class="inside panels-flexible-row-inside panels-flexible-row-aap_layout-2-inside clearfix">
					<div class="panels-flexible-region panels-flexible-region-aap_layout-sliding_region panels-flexible-region-first ">
						<div class="inside panels-flexible-region-inside panels-flexible-region-aap_layout-sliding_region-inside panels-flexible-region-inside-first">
							<div class="panel-pane pane-views pane-ticker-demo">
								<div class="pane-content">
									<div id="fb-root"></div>
									
									
								</div>
							</div>
									
									
								
									
									  <?php $val = $this->db->get("gallery")->result(); 
									  $i=0; foreach($val as $v):?>
									  <div class="img">
									   <a target="_blank" href="<?php echo base_url(); ?>iManage/assets/images/gallery/<?php echo $v->img; ?>">
									      <img src="<?php echo base_url(); ?>iManage/assets/images/gallery/<?php echo $v->img; ?>" width="300" height="250" alt="Fjords">
									      </a>  
									  </div>
									<?php endforeach; ?>
										
																		
										
						</div>
					</div>
					<?php $this->load->view("include/menuRight")?>
					
					
					
				</div>
			</div>

<?php $this->load->view("include/footer");?>