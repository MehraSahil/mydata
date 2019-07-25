<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailNotification extends Notification implements ShouldQueue
{
    use Queueable;
    private $detail;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($detail)
    {
        $this->detail = $detail;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->from('deftsoft787@gmail.com','robin kumar')
                    ->subject('For Interview')
                    ->greeting('Hi Lover')
                    ->line($this->detail['body'])
                    ->action($this->detail['actionText'],$this->detail['actionUrl'])
                    ->line($this->detail['invoice_no'])
                    ->line($this->detail['amount'])
                    ->line($this->detail['unit_price']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'invoice_no' => $this->detail['invoice_no'],
            'amount' => $this->detail['amount'],
            'unit_price' => $this->detail['unit_price'] 
        ];
    }
}