<?php
class Student {
    public $RollNo;
    public $Name;
    public $Branch;
    public $Year;

    public function __construct($rollNo, $name, $branch, $year) {
        $this->RollNo = $rollNo;
        $this->Name = $name;
        $this->Branch = $branch;
        $this->Year = $year;
    }

    public function displayInfo() {
        echo "Roll No: " . $this->RollNo . "<br>";
        echo "Name: " . $this->Name . "<br>";
        echo "Branch: " . $this->Branch . "<br>";
        echo "Year: " . $this->Year . "<br><br>";
    }
}

$student1 = new Student(1, "John Doe", "Computer Science", 2023);
$student2 = new Student(2, "Alice Smith", "Electrical Engineering", 2024);
$student3 = new Student(3, "Bob Johnson", "Mechanical Engineering", 2022);

echo "Student 1 Information:<br>";
$student1->displayInfo();

echo "Student 2 Information:<br>";
$student2->displayInfo();

echo "Student 3 Information:<br>";
$student3->displayInfo();
?>
