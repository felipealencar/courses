<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $nome nome
@property int $idade idade
@property varchar $categoria categoria
@property date $updated_at updated at
@property date $created_at created at
   
 */
class Pet extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'pets';

    /**
    * Mass assignable columns
    */
    protected $fillable=['nome','idade','categoria'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}