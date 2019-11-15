<?php

namespace App\Helpers;

use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMailHelper
{

    /**
     * Send mail with catch exception
     * @param Mailable $mail
     * @param string $to
     * @param string &$errMsg
     * @param array $ccUsers
     * @param array $bccUsers
     * @return bool
     *
     * @throws \Throwable
     */
    public static function sentMail(Mailable $mail, $to, $ccUsers = [], $bccUsers = [], &$errMsg = '')
    {
        if (!empty($to)) {
            try {
                Mail::to($to)
                    ->cc($ccUsers)
                    ->bcc($bccUsers)
                    ->send($mail);
                Log::stack(['email'])->info('Mail was sent to ' . $to);
                return self::isSent($errMsg);
            } catch (\Throwable $exception) {
                report($exception);
                Log::stack(['email'])->error($exception->getMessage());
                return false;
            }
        }
    }

    /**
     * Check mail is sent
     * @param string &$errMsg
     * @return bool
     *
     * @throws \Throwable
     */
    private static function isSent(&$errMsg = '')
    {
        try {
            $errors = Mail::failures();

            if (count($errors) > 0) {
                $errMsg = 'Sending mail was one or more failures. They were: <br />';
                foreach ($errors as $email_address) {
                    $errMsg .= " - $email_address <br />";
                }
                Log::stack(['email'])->error($errMsg);
                return false;
            }
        } catch (\Throwable $exception) {
            report($exception);
            $errMsg = $exception->getMessage();
            Log::stack(['email'])->error($errMsg);
            return false;
        }

        return true;
    }
}
