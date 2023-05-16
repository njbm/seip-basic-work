<?php

class Student
{
    public $cse = array(
        array('Jaber', '200'),
        array('Masud', '201'),
        array('Bhuiyan', '202')
    );
    public $bba = array(
        array('Rafsan', '200'),
        array('Rayhan', '201'),
        array('Bhuiyan', '205')
    );

    public function getStudentsOfDept($dep)
    {
        if ($dep == 'cse') return $this->cse;
        else if ($dep == 'bba') return $this->bba;
    }
}

$student = new Student;
$CSE = $student->getStudentsOfDept('cse');
$BBA = $student->getStudentsOfDept('bba');

?>

<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($CSE as $cse) : ?>
            <tr>
                <td><?php echo $cse[0]; ?></td>
                <td><?php echo $cse[1]; ?></td>
                <td>CSE</td>
            </tr>
        <?php endforeach; ?>
        <?php foreach ($BBA as $bba) : ?>
            <tr>
                <td><?php echo $bba[0]; ?></td>
                <td><?php echo $bba[1]; ?></td>
                <td>BBA</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>