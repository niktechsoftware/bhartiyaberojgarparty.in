<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function comingSoon()
	{
		$this->load->view('comingSoon');
	}
	public function background()
	{
		$this->load->view('background');
	}
	
	public function contactUs(){
		$this->load->view('contactUs');
	}
	public function donate(){
		$this->load->view('donate');
	}
	
	public function registrationForm(){
		$this->load->model("allformmodel");
		$state = $this->allformmodel->getState()->result();
		
		$data['state'] = $state;
		$this->load->view('registrationForm',$data);
	}
	public function memberList(){
		$this->load->model("allformmodel");
		$state = $this->allformmodel->getState()->result();
		$data['state'] = $state;
		$this->load->view('mamberlist1',$data);
	}
	
	public function searchMember(){
		$rt= array();
		if((strlen($this->input->post("state"))>0) && (strlen($this->input->post("city"))>0) && (strlen($this->input->post("area"))>0)){
				$this->db->where("state",$this->input->post("state"));
				$this->db->where("city",$this->input->post("city"));
				$this->db->where("area",$this->input->post("area"));
			$rt = $this->db->get("member");
		}else{
			if((strlen($this->input->post("state"))>0) && (strlen($this->input->post("city"))>0)){
				$this->db->where("state",$this->input->post("state"));
				$this->db->where("city",$this->input->post("city"));
				$rt = $this->db->get("member");
			}else{
				if((strlen($this->input->post("state"))>0) ){
					$this->db->where("state",$this->input->post("state"));
					$rt = $this->db->get("member");
				}
			}
		}
		$data['rt'] = $rt;
		$this->load->model("allformmodel");
		$state = $this->allformmodel->getState()->result();
		$data['state'] = $state;
		$this->load->view('memberList',$data);
		
		
	}
	
	public function gallery(){
		$this->load->view('gallery');
	}
	public function saveMember(){
		$S_no = $this->db->query("SELECT S_no From member order by S_no DESC Limit 1")->row()->S_no;
		$S_no=$S_no+1;
		$photo_name = time().trim($_FILES['stuImage']['name']);
		$photo_name = str_replace(' ', '_', $photo_name);
		$member_id = "BBP"."000".$S_no;
		$member_name=$this->input->post("mname");
		$mobile_number=	$this->input->post("mnum");
		$data = array(
		'member_id' =>$member_id,
		'member_name'=>$this->input->post("mname"),
		'father_name'=>	$this->input->post("fname"),
		'mobile_number'=>$this->input->post("mnum"),
		'education'=>	$this->input->post("edu"),
		'address'=>	$this->input->post("address"),
		'state'=>$this->input->post("state"),
		'city'=>$this->input->post("city"),
		'area'=>$this->input->post("area"),
		'pincode'=>$this->input->post("pincode"),
				'aadhar_number'=>$this->input->post("aadhar_number"),
		'status'=>"Inactive",
				'date1'=>date('Y-m-d'),
				'mphoto'=>$photo_name
				
				);
		
		
		$this->load->library('upload');
		// Set configuration array for uploaded photo.
		$image_path = realpath(APPPATH . '../assets/mphoto');
		$config['upload_path'] = $image_path;
		$config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
		$config['max_size'] = '2024';
		$config['file_name'] = $photo_name;
		// Upload first photo and create a thumbnail of it.
		if (!empty($_FILES['stuImage']['name'])) {
			$this->upload->initialize($config);
			if ($this->upload->do_upload('stuImage')) {
				$this->db->insert("member",$data);
				$this->load->helper("sms");
				
				$msg =	"Dear ".$member_name." you information is successfuly saved  Party registration is in process we will conform with 24 hours,THANKS to communicate with us";
				sms($msg,$mobile_number);
				redirect(base_url()."index.php/welcome/registrationForm/success");
			}else{
				echo "Something is wrong";
			}
			}
		
			
		
	}
	
	function getvalid(){
		$mname 	= 	$this->input->post("mname");
		$fname 	= 	$this->input->post("fname");
		$mnum 	= 	$this->input->post("mnum");
		$this->db->where("member_name",$mname);
		$this->db->where("father_name",$fname);
		$this->db->where("mobile_number",$mnum);
		$print1 = $this->db->get("member")->row();
		if($print1){
			?><script> alert("Dublicate Entry");</script>
			<?php echo " you have Already Registered with member Id ".$print->member-id;
		}
		
	}
	function memo(){
	$this->load->view('memo');
	}
	function manifesto(){
	$this->load->view('manifesto');
	}
	
	function getCity(){
		$state = $this->input->post("state");
		$this->load->model("allFormModel");
		$result = $this->allFormModel->getCity($state);
	
		echo '<option value="">-City-</option>';
		foreach ($result->result() as $row):
		echo '<option value="'.$row->city.'">'.$row->city.'</option>';
		endforeach;
	}
	
	function getArea(){
		$state = $this->input->post("state");
		$city = $this->input->post("city");
		$this->load->model("allFormModel");
		$result = $this->allFormModel->getArea($state,$city);
	
		echo '<option value="">-Area-</option>';
		foreach ($result->result() as $row):
		echo '<option value="'.$row->area.'">'.$row->area.'</option>';
		endforeach;
	}
	
	function getPin(){
		$state = $this->input->post("state");
		$city = $this->input->post("city");
		$area = $this->input->post("area");
		$this->load->model("allFormModel");
		$result = $this->allFormModel->getPin($state,$city,$area);
	
		foreach ($result->result() as $row):
		echo $row->pin;
		endforeach;
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */