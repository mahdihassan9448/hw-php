<?php
    // students class
    class Student
    {
        public $Id;
        public $Name;
        public $Roll;
        public $Number;
        public $Subject;
        public $Address;
 
        function add($Data)
        {
            $db = new db();

            $this->Name = $Data['name'];
            $this->Roll = $Data['roll'];
            $this->Number = $Data['number'];
            $this->Subject = $Data['subject'];
            $this->Address = $Data['address'];

            $Query = "INSERT INTO student  (name, roll, number, subject, address)";
            $Query .= "VALUES($this->Name, $this->Roll, $this->Number, $this->Subject, $this->Address)";

            $db->execute($Query);
            $db->close();
        }

        function edit($Data, $Id)
        {
            $db = new db();

            $this->Name = $Data['name'];
            $this->Roll = $Data['roll'];
            $this->Number = $Data['number'];
            $this->Subject = $Data['subject'];
            $this->Address = $Data['address'];

            $Query = "UPDATE student SET name = $this->Name, roll = $this->Roll, number = $this->Number, 
            subject = $this->Subject, address = $this->Address WHERE id = $this->Id";

            $db->execute($Query);
            $db->close();
        }

        function delete($Id)
        {
            $Db = new db();
            $this->Id = $Id;

            $Query = "DELETE FROM students WHERE id = $this->Id";
            $Db->execute($Query);
            $Db->close();
        }

    }

?>