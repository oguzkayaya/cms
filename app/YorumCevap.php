<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YorumCevap extends Model
{
    protected $guarded = [];
    static function getMessageControl($yorumid)
    {
        return (YorumCevap::where('yorumid',$yorumid)->count()!=0 )?true : false;
    }
    static function getMessage($yorumid)
    {
        $control = YorumCevap::where('yorumid','=',$yorumid)->count();
        if ($control) {
            $data = YorumCevap::where('yorumid','=',$yorumid)->get();
            return $data[0]['mesaj'];
        } else {
            return redirect()->back();
        }
        
    }
}
