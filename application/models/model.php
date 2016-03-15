<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
     function get_all_courses()
     {
         return $this->db->query("SELECT * FROM course_table")->result_array();
     }
     function get_course_by_id($course_id)
     {
         return $this->db->query("SELECT * FROM course_table WHERE id = ?", array($course_id))->row_array();
     }
     function add_course($course_details)
     {
         $query = "INSERT INTO course_table (name, description, created_at) VALUES (?,?,NOW())";
         $values = array($course_details['name'], $course_details['description']); 
         return $this->db->query($query, $values);
     }
     function delete_course($delete_id)
     {
         $query = "DELETE FROM course_table WHERE id=?";
         $values = array($delete_id);
         return $this->db->query($query, $values);
     }
}

?>