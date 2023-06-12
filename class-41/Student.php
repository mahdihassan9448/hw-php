<?php
    // student class
    class Students{

        public $Connection;

        function __construct()
        {
            $Host = 'localhost';
            $Name = 'root';
            $Pass = '';
            $Db   = 'sms';
        
            $Connection = new mysqli($Host, $Name, $Pass, $Db);
        }
        // This function is used to add new students
        function addStudents($Data)
        {
            $Name    = $Data['name'];
            $Roll    = $Data['roll'];
            $Number  = $Data['number'];
            $Subject = $Data['subject'];
            $Address = $Data['address'];

            $Query  = "INSERT INTO student(name, roll, number, subject, address)";
            $Query .= "VALUES($Name, $Roll, $Number, $Subject, $Address)";

            $Result = $this->Connection->execute_query($Query);
            return $Result;

        }

        // This function is used deleted to spesific students
        function deleteStudent($StudentId)
        {
            $Query = "DELETE FROM student WHERE id = $StudentId";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }

        //This function is used to edit students
        function editStudents($Data, $StudentId)
        {
            $Name = $Data['name'];
            $Roll = $Data['roll'];
            $Number = $Data['number'];
            $Subject = $Data['subject'];
            $Address = $Data['Address'];

            $Query = "UPDATE student SET  name = $Name, roll = $Roll, number = $Number, subject = $Subject, address = $Address WHERE id = $StudentId";
            $Result = $this->Connection->execute_query($Query);
        }

        //This function is used to details of a spesific student
        function getStudent($StudentId){
            $Query = "SELECT * FROM student WHERE id = $StudentId";
            $Result =$this->Connection->execute_query($Query);
            return $Result;
        }

        //This function is used to get all students
        function getStudents()
        {
            $Query = "SELECT * FROM student";
            $Result = $this->Connection->execute_query($Query);
            return $Result;
        }
    }


?>