<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserAccount extends Authenticatable
{
    use Notifiable;

    /** Const Role **/
    const ROLE_ROOT = 99; // システム管理者
    const ROLE_INIT = 1; // 登録時
    const ROLE_GENERAL = 50; // 一般使用者
    const ROLE_ADMIN = 90; // 管理者
    const ROLE_LIST = [
        self::ROLE_INIT => '初期',
        self::ROLE_GENERAL => '一般',
        self::ROLE_ADMIN => '管理者',
    ];

    /**
     * テーブル名
     * @var string
     */
    protected $table = 'user_account';

    /**
     * プライマリID
     * @var string
     */
    protected $primaryKey = 'user_account_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
