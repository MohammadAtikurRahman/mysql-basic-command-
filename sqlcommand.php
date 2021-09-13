<?php
$sql = "SELECT employee_id, department_id from job_history";
// distinct thakle douplicate value return kore na
//The SELECT DISTINCT statement is used to return only distinct (different) values.
$sql = "SELECT DISTINCT manager_id from employees";
// same sonkha 11 type er ache
$sql = "SELECT COUNT(DISTINCT department_id) FROM employees"


?>