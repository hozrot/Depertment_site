<?php
class Course {
	public $course_code;
	public $course_title;
	public $level;
	public $depertment;
	public $credits;
	public $books;
	public $links;

	public function __construct() {

	}

	public static function get_all_courses() {
		
		$sql = "SELECT * FROM courses";

		global $con;

		$result = mysqli_query($con, $sql);
		if(!$result) {
			die("Error " . mysqli_error($con));
		}


		$courses = array();

		while($row = mysqli_fetch_assoc($result)) {
			$course = new Course;
			$course->course_code = $row['course_code'];
			$course->course_title = $row['course_title'];
			$course->level = $row['level'];
			$course->depertment = $row['depertment'];
			$course->credits = $row['credits'];
			$course->books = $row['books'];
			$course->links = $row['links'];

			$courses[] = $course;
		}


		return $courses;

	}


}