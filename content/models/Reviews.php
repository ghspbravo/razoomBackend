<?php namespace Zotovda\Content\Models;

use Model;

/**
 * Model
 */
class Reviews extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zotovda_content_reviews';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
