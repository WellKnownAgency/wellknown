<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;

class NewLeadSlack extends Notification
{
    use Queueable;

    public $lead;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($lead)
    {
        $this->lead = $lead;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

		public function toSlack($notifiable)
    {
        $lead = $this->lead;
        return (new SlackMessage)
            ->success()
            ->content("New lead")
            ->attachment(function ($attachment) use ($lead) {
                $attachment->title($lead->first_name, route('admin.leads'))
                    ->content($lead->body);
            });
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

        ];
    }
}
