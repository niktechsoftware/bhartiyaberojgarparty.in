<?php
class Apanel extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->is_login();
	}
	
	function is_login(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		$logtype = $this->session->userdata('login_type');
		if(!$is_login){
			//echo $is_login;
			redirect(base_url()."login/index");
		}
		elseif(!$is_lock){
			redirect(base_url()."login/lockPage");
		}
	}
	
	function index(){
		// Opening balance closing balance code start
		$clinic_id = $this->session->userdata("clinic_id");
		$clo1 = $this->db->query("select * from opening_closing_balance WHERE clinic_id = '$clinic_id' ORDER BY id DESC LIMIT 1");
		$clo = $clo1->row();
		if($clo1->num_rows() <=0 ){
			$balance = array(
				"opening_balance" => 0,
				"closing_balance" => 0,
				"clinic_id" => $clinic_id,
				"opening_date" => date("Y-m-d"),
				"closing_date" => date("Y-m-d")			);
			$this->db->insert('opening_closing_balance',$balance);
		}else{
			$cl_date = $clo->closing_date;
			$cl_balance = $clo->closing_balance;
			$cr_date = date('Y-m-d');
			if($cl_date != $cr_date)
			{
				$balance = array(
						"opening_balance" => $cl_balance,
						"closing_balance" => $cl_balance,
						"clinic_id" => $clinic_id,
						"opening_date" => $cr_date,
						"closing_date" => $cr_date
				);
				$this->db->insert('opening_closing_balance',$balance);
			}
			// Opening balance closing balance code end
		}
		$data['subPage'] = 'Home';
		$data['smallTitle'] = 'Dashboard';
		$data['pageTitle'] = 'Overview of all Section';
		
		
		$data['title'] = 'B. B. Party | Dashboard';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'dashboard';
		$this->load->view("include/template", $data);
	
	}
	
	
	function profile(){
		$data['subPage'] = 'Profile';
		$data['smallTitle'] = 'Profile';
		$data['pageTitle'] = 'Your Profile';
		$data['title'] = 'B. B. Party | Profile';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'profile';
		
		$this->load->view("include/template", $data);
	}
	
	function addprofile(){
		$data['subPage'] = 'Profile';
		$data['smallTitle'] = 'New Branch';
		$data['pageTitle'] = 'Add New Branch';
		$data['title'] = 'B. B. Party | New Branch';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'newBranch';
	
		$this->load->view("include/template", $data);
	}
	public function studentList(){
		$data['subPage'] = 'B. B. Party';
		$data['title'] = "B. B. Party List";
		$data['smallTitle'] = "Student List";
		$data['pageTitle'] = "Student List";
		$data['mainContent'] = "studentList";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	

	
	function mla(){
		$data['subPage'] = 'B. B. Party';
		$data['title'] = "B. B. Party ";
		$data['smallTitle'] = "Mamber List";
		$data['pageTitle'] = "Mamber List";
		$data['mainContent'] = "memberListApproved";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
		
	}
	
	function mlna(){
		$data['subPage'] = 'B. B. Party';
		$data['title'] = "B. B. Party ";
		$data['smallTitle'] = "B. B. Party List";
		$data['pageTitle'] = "B. B. Party List";
		$data['mainContent'] = "memberListNotApproved";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	
	}
	
	function approvedMember(){
		$mid= $this->input->post("cnumber");
		$data = array(
				"status" => "Active"
		);
		$this->db->where("member_id",$mid);
		$cvalue = $this->db->update("member",$data);
		if($cvalue){
		$this->load->helper("sms");
		$this->db->where("member_id",$mid);
		$cvalue=$this->db->get("member")->row();
		$mn=$cvalue->mobile_number;
		$msg =	"Dear Member Your id ".$cvalue->member_id." [".$cvalue->member_name."] is successfullty registered with Bhartiyaberojgar Party.  THANKS FOR Register with us";
		sms($msg,$mn);
		echo "Approved Success";
	}
	else{
		echo "Error";
	}
	}
	
	
	function letestNews(){
		$data['subPage'] = 'B. B. Party';
		$data['title'] = "B. B. Party";
		$data['smallTitle'] = "B. B. Party";
		$data['pageTitle'] = "Letest News";
		$data['mainContent'] = "letestNews";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
		
	}
	
	function saveLetestNews(){
		
	$sub=	$this->input->post("title");
	$con=	$this->input->post("content");
		$data= array(
				'subject' =>$sub,
				'news_contant' =>$con,
				'date1' => date('Y-m-d')
				);
		if($this->db->insert("letest_news",$data)){
			redirect(base_url()."apanel/letestNews/success");
		}
		else{
			redirect(base_url()."apanel/letestNews/fail");
		}
	}
	
	function editnews(){
		$s_no = $this->input->post("s_no");
		$sub=	$this->input->post("title");
		$con=	$this->input->post("content");
		$data = array(
				'subject' =>$sub,
				'news_contant' =>$con,
				'date1' => date('Y-m-d')
				);
		$this->db->where("s_no",$s_no);
		if($this->db->update("letest_news",$data)){
			redirect(base_url()."apanel/letestNews/success");
		}
		
		else{
			redirect(base_url()."apanel/letestNews/fail");
		}
	}
	
	function deleteNews(){
		$s_no = $this->uri->segment(3);
		$this->db->where("s_no",$s_no);
		if($this->db->delete("letest_news")){
			redirect(base_url()."apanel/letestNews/success");
		}
	
		else{
			redirect(base_url()."apanel/letestNews/fail");
		}
	}
	
	function gallery(){
		$data['subPage'] = 'B. B. Party';
		$data['title'] = "B. B. Party";
		$data['smallTitle'] = "B. B. Party";
		$data['pageTitle'] = "Letest News";
		$data['mainContent'] = "gallery";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	
	
	function saveGallery(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'title'=>$this->input->post("title"),
				'img'=>$photo_name,
				'dt'=>date("Y-m-d")
		);
		$query = $this->db->insert("gallery",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/gallery');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			redirect(base_url()."apanel/gallery/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteGallery(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("gallery")){
			redirect(base_url()."apanel/gallery");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	function delMember(){
		$mid= $this->input->post("cnumber");
		
		$this->db->where("member_id",$mid);
		 $this->db->delete("member");
		 redirect(base_url()."apanel/mlna");
			
	}
	
}