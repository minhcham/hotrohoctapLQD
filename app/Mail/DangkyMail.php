<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

class DangkyMail extends BaseMailer
{
    const MAIL_SUBJECT = 'Xác nhận đăng ký - Trường THPT chuyên Lê Quý Đôn TP Lai Châu';
    const BODY_TEMPLATE = 'emails.dangky';

    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;

        parent::__construct($this->data, self::BODY_TEMPLATE, self::MAIL_SUBJECT);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        parent::sendMail();
    }
}
