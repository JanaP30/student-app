<?php

namespace App\Mail;

use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeacherEntered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $student;
    public $grade;
    public $mail_subject;
    public $teacher;
    public function __construct(Student $student, Grade $grade, Subject $subject, Teacher $teacher)
    {
            $this->student = $student;
            $this->mail_subject = $subject;
            $this->grade = $grade;
            $this->teacher=$teacher;

           
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.teacher_grade_notification')
        ->subject('Grade entered')
        ->with([
            
            'student' => $this->student,
            'grade'  => $this->grade,
            'subject'  =>$this->mail_subject,
        ]);
    }
}
