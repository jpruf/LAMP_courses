<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$this->load->model("Model");
		$course_details['courses'] = $this->Model->get_all_courses();
		$this->load->view('add', $course_details);
	}
    // public function show($id)
    // {   
    //     $this->output->enable_profiler(TRUE); //enables the profiler
    //     $this->load->model("Model"); //loads the model
    //     $course = $this->Model->get_course_by_id($id);  //calls the get_course_by_id method
    //     var_dump($course);
    // }
	public function add()
	{
		$this->load->model("Model");
		$course_details = array(
			"name" => $this->input->post('name'),
			"description" => $this->input->post('description')
			); 
		if($this->Model->add_course($course_details) === TRUE){
			redirect('/');
		}
	}
	public function destroy($id)
	{

		$this->load->model("Model");
		if($this->Model->delete_course($id) === TRUE){
			redirect('/');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>