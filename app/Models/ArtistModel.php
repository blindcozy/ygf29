<?php namespace App\Models;

use CodeIgniter\Model;

class ArtistModel extends Model
{
    protected $allowedFields = [
        'name', 'photo', 'about', 'performed'
    ];

    protected $table      = 'artist';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    

}