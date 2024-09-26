<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StudentNotification extends Notification
{
    use Queueable;

    public $student;

    /**
     * Create a new notification instance.
     */
    public function __construct($student)
    {
        $this->student = $student;
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via($notifiable)
    {
        return ['mail']; // You can also add other channels like 'database' if required
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Welcome ' . $this->student->user->name)
            ->greeting('Hello ' . $this->student->user->name . ',')
            ->line('You have been successfully registered as a student in the system.')
            ->line('USN: ' . $this->student->usn)
            ->line('Semester: ' . $this->student->semester)
            ->action('View Your Profile', url('/your-profile'))  // Replace with actual URL if needed
            ->line('Thank you for being a part of our institution!');
    }
}
