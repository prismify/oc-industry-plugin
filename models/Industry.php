<?php namespace Prismify\Industry\Models;

use Form;
use Model;

/**
 * Industry Model
 */
class Industry extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'prismify_industry_industries';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'code' => 'required:unique:prismify_industry_industries',
    ];

    /**
     * @var array Behaviours implemented by this model.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array The translatable table fields.
     */
    public $translatable = ['name'];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name',
        'code'
    ];


    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * @var bool Indicates if the model should be timestamped.
     */
    public $timestamps = false;

    /**
     * @var array Cache for nameList() method
     */
    protected static $nameList = null;

    public static function getNameList()
    {
        if (self::$nameList) {
            return self::$nameList;
        }

        return self::$nameList = self::isEnabled()->lists('name', 'id');
    }

    public static function formSelect($name, $selectedValue = null, $options = [])
    {
        return Form::select($name, self::getNameList(), $selectedValue, $options);
    }

    public function scopeIsEnabled($query)
    {
        return $query->where('is_enabled', true);
    }
}
