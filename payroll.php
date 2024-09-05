<?php

class payroll {

private string $fname "john";
private string $lname "volta";



private int $tax "50"
private int $salary "50"

public function computenet()
 {
 	$sub = $this->salary - $this->tax;
 }
public function getemployeename() : string {
return number_forward ($this->computeNet(),2)
}
public funtion displaynet() : string {
	return $this->fname , " ", $this->lname;
}




}

$studentgrade - new studentgrade ();
echo "student name:", $studentgrade- > getcompletename() " <br/>"; echo "final grade". $studentgrade-> displaygrade;
 ?>