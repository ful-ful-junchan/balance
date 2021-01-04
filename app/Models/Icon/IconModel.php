<?php

namespace App\Models\Icon;

use Illuminate\Database\Eloquent\Model;

class IconModel extends Model
{
    /**
     * テーブル名
     * @var string
     */
    protected $table = 'icon_master';

    /**
     * プライマリID
     * @var string
     */
    protected $primaryKey = 'icon_master_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'class',
    ];
}
