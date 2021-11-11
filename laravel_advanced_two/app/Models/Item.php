<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // テーブル名
    protected $table = 'items';
    //  複数代入
    protected $fillable = ['name', 'email'];
    // validation
    public static $rules = array(
        'name' => 'required',
        'email' => 'required|max:30'
    );
    // ７章参照
    // public function getDetail()
    // {
    //     $txt = 'ID:' . $this->id . ' ' . $this->name . '(' . $this->age .  '才' . ') ' . $this->nationality;
    //     return $txt;
    // }
}
