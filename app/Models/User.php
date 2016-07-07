<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nickname',
        'mobile',
        'qq',
        'avatar',
        'last_login_at',
        'last_login_ip',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * 用于表单验证时的字段名称提示.
     *
     * @var array
     */
    public static $aliases = [
        'name'          => '用户名',
        'password'      => '登录密码',
        'nickname'      => '昵称',
        'email'         => '邮箱',
        'mobile'        => '手机号',
        'qq'            => 'qq号',
        'last_login_at' => '最后登录时间',
        'last_login_ip' => '最后登录IP',
    ];

    /**
     * 关联拥有的公众号.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function account()
    {
        return $this->hasMany('App\Models\Account');
    }
}
