<?php
class Upload_model extends CI_Model {





public function get_emergency_con(){

$this->db->select('*');
$query=$this->db->get('emergency_contact');
return $query->result_array();


}

public function delete($id){

$this->db->where('id',$id);
return $this->db->delete('emergency_contact');

}





  public function do_upload($filename,$name)
  {

    $field_name                     ='back_pic';
    $config['upload_path']          = './assets/img/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 7000;
    $config['overwrite']             = TRUE;
    $config['file_name']           = $name;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload($field_name))
    {
      $error = array('error' => $this->upload->display_errors());
      return $error;


    }
    else
    {


      return 1;

    }
  }


  public function update_data($data){

    $this->db->where('id',1);
    $q=$this->db->update('background',$data);
    if($q){
      return 1;
    }else{
      return 0;
    }

  }






}