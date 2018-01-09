<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
 use App\category;
 
class Event extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'category_id',
        'price',
        'country',
        'city',
        'date_from',
        'date_to'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}