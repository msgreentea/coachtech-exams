<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // テーブル名
    // protected $table = 'items';
    //  複数代入
    // fillableとguardedは同時に書かない
    protected $fillable = ['name', 'email'];
    // validation
    public static $rules = array(
        'name' => 'required',
        'email' => 'required|max:30'
    );
    // 取得した値を加工する場合
    // public function メソッド名()
    // {
    //     $posts = 'ID:' . $this->id . ' ' . $this->name . '(' . $this->email .   ') ';
    //     return $txt;
    // }
}