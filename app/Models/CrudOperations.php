<?php namespace App\Models;
use App\Controllers\BaseController;

use App\Models\User\UserModel;
use App\Models\User\PersonModel;

use App\Models\User\AdminModel;
use App\Models\User\StaffModel;
use App\Models\User\TeacherModel;
use App\Models\User\ParentModel;
use App\Models\User\StudentModel;

use App\Models\Course\CourseModel;
use App\Models\Course\CourseModuleModel;
use App\Models\Course\CourseModuleTaskModel;

use App\Models\Enroll\EnrolModel;
use App\Models\Enroll\GradeModel;
use App\Models\Enroll\ScheduleModel;
use App\Models\Enroll\PaymentModel;
use App\Models\Enroll\DaysModel;





use App\Libraries\Send_Mail;
use App\Libraries\Curd;

use CodeIgniter\I18n\Time;


class CrudOperations
{
	private $user_model;
	private $person_model;

	private $student_model;
	private $parent_model;
	private $staff_model;
	private $teacher_model;
	private $admin_model;

	private $course_model;
	private $course_module_model;
	private $course_module_task_model;
	private $student_model;


	private $enroll_model;
	private $grade_module_model;
	private $schedule_module_task_model;
	private $payment_model;
	private $days_model;

	private $mail_operation;



	public function __construct()
						{
							helper('form');
							helper('date');
							$this->user_model = new UserModel();
							$this->mail = new Send_Mail();
							$this->curd = new Curd();

						}


		// Users -Managment ---------------------------------->
		// Users
		public function add_user($role="Admin",$data = '',$id=True)
		{
					// Add Users

			if($role=="Admin")
			{
					if ($fields !='')
					{
										if ($id){
											$this->user_model->save($data);
											$user_id = $this->user_model->getInsertID();
											return $user_id;
										}
											$this->user_model->save($data);
					}
					else
					{
									$message = "There is no record to save in the database"
									return $message;
					}

					default: Student::student_create_by_student();
					endswitch;
			}
			elseif($role="Staff")
			{
				// code...
			}
			elseif($role="Teacher")
			{
				// code...
			}
			elseif($role="Parent")
			{
				// code...
			}
			elseif($role="Student")
			{
				// code...
			}
			else
			{
				$role="Guest";
			}

		}

		// Edit Users
		public function edit_user()
		{
			// Edit Users
		}
		public function remove_user()
		{
			// Remove Users
		}
		public function list_users($slug="null")
		{
			// list users acording to slug
			if ($slug==null)
			{
				// list all users
			}
			else
			{
				// list only users with slug
			}
		}

		// Person
		public function add_person($role="Admin",$fields = '')
		{
			// Add Person

		}
		public function edit_person()
		{
			// Edit Person
		}
		public function remove_person()
		{
			// Remove Person
		}
		public function list_persons($slug="null")
		{
			// list person acording to slug
			if ($slug==null)
			{
				// list all persons
			}
			else
			{
				// list only person with slug
			}
		}

		// Students
		public function add_student()
		{
			// Add Student
		}
		public function edit_student()
		{
			// Edit Student
		}
		public function remove_student()
		{
			// Remove Student
		}
		public function list_students($slug="null")
		{
			// list student acording to slug
			if ($slug==null)
			{
				// list all students
			}
			else
			{
				// list only student with slug
			}
		}


		// Parent
		public function add_parent()
		{
			// Add Parent
		}
		public function edit_parent()
		{
			// Edit Parent
		}
		public function remove_parent()
		{
			// Remove Parent
		}
		public function list_parents($slug="null")
		{
			// list parent acording to slug
			if ($slug==null)
			{
				// list all parent
			}
			else
			{
				// list only parent with slug
			}
		}


		// Teacher
		public function add_teacher()
		{
			// Add Teacher
		}
		public function edit_teacher()
		{
			// Edit Teacher
		}
		public function remove_teacher()
		{
			// Remove Teacher
		}
		public function list_teachers($slug="null")
		{
			// list teacher acording to slug
			if ($slug==null)
			{
				// list all teacher
			}
			else
			{
				// list only teacher with slug
			}
		}

		// Staff
		public function add_staff()
		{
			// Add Staff
		}
		public function edit_staff()
		{
			// Edit Staff
		}
		public function remove_staff()
		{
			// Remove Staff
		}
		public function list_staffs($slug="null")
		{
			// list staff acording to slug
			if ($slug==null)
			{
				// list all staff
			}
			else
			{
				// list only staff with slug
			}
		}

		// Addmin
		public function add_admin()
		{
			// Add Addmin
		}
		public function edit_admin()
		{
			// Edit Addmin
		}
		public function remove_admin()
		{
			// Remove Addmin
		}
		public function list_admin($slug="null")
		{
			// list admin acording to slug
			if ($slug==null)
			{
				// list all admin
			}
			else
			{
				// list only admin with slug
			}
		}

		// Courses Managemnt  ----------------------------------->
		// Course
		public function add_course()
		{
			// Add Course
		}
		public function edit_course()
		{
			// Edit Course
		}
		public function remove_course()
		{
			// Remove Course
		}
		public function list_courses($slug="null")
		{
			// list admin acording to slug
			if ($slug==null)
			{
				// list all admin
			}
			else
			{
				// list only admin with slug
			}
		}


		//Course Module
		public function add_course_module()
		{
				// Add Course Module
			}
		public function edit_course_module()
		{
				// Edit Course Module
			}
		public function remove_course_module()
		{
				// Remove Course Module
			}
		public function list_courses_module($slug="null")
		{
				// list course acording to slug
				if ($slug==null)
				{
					// list all course
				}
				else
				{
					// list only course with slug
				}
			}


		// Course Module  Tasks
		public function add_course_module_task()
		{
				// Add Course Module  Tasks
			}
		public function edit_course_module_task()
		{
				// Edit Course Module Tasks
			}
		public function remove_course_module_task()
		{
				// Remove Course Module Tasks
			}
		public function list_course_module_tasks($slug="null")
		{
				// list course module tasks acording to slug
				if ($slug==null)
				{
					// list all course module tasks
				}
				else
				{
					// list only course module tasks with slug
				}
			}

		// Course Enrollment Managemnt
		// Course Enrolls
		public function add_enroll()
		{
			// Add Enrolls
		}
		public function edit_enroll()
		{
			// Edit Enrolls
		}
		public function remove_enroll()
		{
			// Remove Enrolls
		}
		public function list_enroll($slug="null")
		{
			// list enroll acording to slug
			if ($slug==null)
			{
				// list all enrolls
			}
			else
			{
				// list only enroll with slug
			}
		}

    // Course Schedules
		public function add_schedule()
		{
			// Add Course Schedules
		}
		public function edit_schedule()
		{
			// Edit Course Schedules
		}
		public function remove_schedule()
		{
			// Remove Course Schedules
		}
		public function list_schedules($slug="null")
		{
			// list schedule acording to slug
			if ($slug==null)
			{
				// list all schedules
			}
			else
			{
				// list only schedule with slug
			}
		}

		// Course Grades
		public function add_grade()
		{
			// Add Course Grades
		}
		public function edit_grade()
		{
			// Edit Course Grades
		}
		public function remove_grade()
		{
			// Remove Course Grades
		}
		public function list_grades($slug="null")
		{
			// list grade acording to slug
			if ($slug==null)
			{
				// list all grades
			}
			else
			{
				// list only grade with slug
			}
		}

		//  Payment
		public function add_payment()
		{
			// Add  Payment
		}
		public function edit_payment()
		{
			// Edit  Payment
		}
		public function remove_payment()
		{
			// Remove  Payment
		}
		public function list_payments($slug="null")
		{
			// list payment acording to slug
			if ($slug==null)
			{
				// list all payments
			}
			else
			{
				// list only payment with slug
			}
		}




	public function add_student($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			case "Staff":
			case "Parent":
			default: Student::student_create_by_student();
			endswitch;

	}

	public function edit_student($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}
	public function remove_student($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}

	public function view_student($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}

	public function view_students($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}

// Teachers

public function edit_student($role="Admin")
{
		swtich($role):
		case "Admin": Admin::teacher_create_by_admin();break;
		case "Staff": Staff::teacher_create_by_staff();break;
		default: Student::teacher_create_by_student();
		endswitch;

}
public function remove_teacher($role="Admin")
{
		swtich($role):
		case "Admin": Admin::student_create_by_admin();break;
		case "Staff": Staff::teacher_create_by_staff();break;
		default: Student::teacher_create_by_student();
		endswitch;

}

public function view_student($role="Admin")
{
		swtich($role):
		case "Admin": Admin::student_create_by_admin();break;
		case "Staff": Staff::student_create_by_staff();break;
		default: Student::student_create_by_student();
		endswitch;

}

public function view_students($role="Admin")
{
		swtich($role):
		case "Admin": Admin::student_create_by_admin();break;
		case "Staff": Staff::student_create_by_staff();break;
		default: Student::student_create_by_student();
		endswitch;

}

// Courses



	public function add_course($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}

	public function edit_course($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}
	public function remove_course($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}

	public function view_course($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}

	public function view_courses($role="Admin")
	{
			swtich($role):
			case "Admin": Admin::student_create_by_admin();break;
			case "Staff": Staff::student_create_by_staff();break;
			default: Student::student_create_by_student();
			endswitch;

	}
}
