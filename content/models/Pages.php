<?php namespace Zotovda\Content\Models;

use Model;

/**
 * Model
 */
class Pages extends Model
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
    public $table = 'zotovda_content_pages';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [ 'home_about_slider' => 'System\Models\File', 'about_slider' => 'System\Models\File' ];
    public $attachOne = [ 'home_video_thumb' => 'System\Models\File' ];

}
