<?php

namespace App\Service\Email;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Config;

class MailServiceProvider extends ServiceProvider
{
    public function register()
    {
        try{
            if (\Schema::hasTable('setting_email')) {
                $mail = $this->getConfigEmail();
                if ($mail) {
                    $config = [
                        'driver'   => $mail->mail_driver,
                        'host'     => $mail->mail_host,
                        'port'     => $mail->mail_port,
                        'from'     => [
                            'address' => $mail->mail_from_address,
                            'name'    => $mail->mail_domain
                        ],
                        'encryption' => 'tls',
                        'sendmail' => '/usr/sbin/sendmail -bs',
                        'username' => $mail->mail_username,
                        'password' => $mail->mail_password,
                    ];
                    Config::set('mail', $config);
                }
            }
        }catch (\Exception $exception){

        }
    }

    protected function getConfigEmail()
    {
        $email = Cache::remember(config('key_cache.email'), 60 * 24 * 360, function () {
            return DB::table('setting_email')->first();
        });

        return $email;
    }
}
