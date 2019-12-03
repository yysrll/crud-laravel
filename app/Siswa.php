<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'user_id'];

    public function getAvatar() {
        if(!$this->avatar) {
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->avatar);
    }
}
