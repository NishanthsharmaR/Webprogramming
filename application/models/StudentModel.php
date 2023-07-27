<?php
     
class StudentModel extends CI_Model
{
    public function student_data()
    {
        $stud_class = $this->student_class();
        return $stud_name = "Rohith His Class is:" . $stud_class;
    }
    private function student_class()
    {
        return $stud_class = "BCA";
    }
}

?>