<?php namespace Zotovda\Events\Models;

use Model;

/**
 * Model
 */
class Events extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zotovda_events_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // FOR IMAGES & GELLERIES

    public $attachOne = [ 'poster' => 'System\Models\File' ];
    public $attachMany = [ 'gallery' => 'System\Models\File' ];
}
