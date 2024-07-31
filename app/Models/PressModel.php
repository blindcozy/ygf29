<?php namespace App\Models;

use CodeIgniter\Model;

class PressModel extends Model
{
    protected $allowedFields = [
        'title', 'slug', 'image', 'intro', 'content'
    ];

    protected $table      = 'press';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $returnType     = 'array';
    

}