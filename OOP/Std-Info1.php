<?php
class Student
{
    public $name;
    public $address;

    function setName($name)
    {
        $this->name=$name;
        return $this;
    }
    function address($address)
    {
        $this->address=$address;
        return $this;
    }
    function getStudent()
    {
        $studentsInfo = [ 'name' => $this->name, 'address' => $this->address ];
        return $studentsInfo;
    }
}

$student_ob=new Student;

$studentsInfo = $student_ob->setName('Mr. X')
                            ->getStudent();
        echo '<pre>';
        print_r($studentsInfo);
        

?>