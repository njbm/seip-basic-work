<?php
$students = [
[ 'id' => 1, 'name' => 'Alice', 'department' => 'CSE' ],
[ 'id' => 2, 'name' => 'Bob', 'department' => 'BBA' ],
[ 'id' => 3, 'name' => 'Charlie', 'department' => 'CSE' ],
[ 'id' => 4, 'name' => 'David', 'department' => 'CSE' ],
[ 'id' => 5, 'name' => 'Eve', 'department' => 'BBA' ]
];

function getStudentsOfDept(...$departments) {
global $students;
$filtered = array_filter($students, function($student) use ($departments) {
return in_array($student['department'], $departments);
});
$mapped = array_map(function($student) {
return [ 'id' => $student['id'], 'name' => $student['name'] ];
}, $filtered);
return $mapped;
}

// Example usage:
// $cseBbaStudents = getStudentsOfDept('CSE', 'BBA');
// print_r($cseBbaStudents); // Array ( [0] => Array ( [id] => 1 [name] => Alice ) [1] => Array ( [id] => 2 [name] => Bob ) [2] => Array ( [id] => 3 [name] => Charlie ) [3] => Array ( [id] => 5 [name] => Eve ) )

$students= getStudentsOfDept('CSE');
print_r($students) ;