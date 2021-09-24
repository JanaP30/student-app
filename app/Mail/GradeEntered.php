<?php

namespace App\Mail;

use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GradeEntered extends Mailable
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
    public function __construct(Student $student, Grade $grade, Subject $subject)
    {
            $this->student = $student;
            $this->mail_subject = $subject;
            $this->grade = $grade;

           
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        

        return $this->view('mail.student_grade_notification')
        ->subject('Grade entered')
        ->with([
            
            'student' => $this->student,
            'grade'  => $this->grade,
            'subject'  =>$this->mail_subject,
        ]);
    }
}
