<?php
include_once('main.php');



?>

<html>
		<center>
	
		<a href="my/profile.php"><button>My Profile</button></a>
						<a href="logout.php"><button>Logout</button></a>
							<center>
							<hr/>
							<table border="1" >
							<tr>
							<th>Employee</th>
							<th>Department</th>
							<th>Salary</th>
							<th>Attendance</th>
							
							</tr>
							  <tr>
								<td><a href="employee/addemployee.php">Add new Employee</a></td>
								<td><a href="department/adddepartment.php">Add new Department</a></td>		
								<td><a href="salary/deptwisesalary.php">Check Departwise Employee Salary,Absents,Payable</a></td>
								<td rowspan="3"><a href="attendance/attendanceindex.php">Make Department Wise Daily Attendance</td>
							  </tr>
							  <tr>
							   <td><a href="employee/editemployee.php">Modify An Employee Information</a></td>
							    <td><a href="department/modifydepartment.php">Modify  Department Information</a></td>
							<td rowspan="2"><a href="salary/total.php">Total amount of Payable salary end of month</a></td>
								
							  </tr>
							  
							  
							</table>
							</center>
		</center>
</html>