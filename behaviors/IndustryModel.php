<?php namespace Prismify\Industry\Behaviors;

use System\Classes\ModelBehavior;
use Prismify\Industry\Models\Industry;

/**
 * Industry model extension
 *
 * Adds Industry relations to a model
 *
 * Usage:
 *
 * In the model class definition:
 *
 *   public $implement = ['Prismify.Industry.Behaviors.IndustryModel'];
 *
 */
class IndustryModel extends ModelBehavior
{
    /**
     * Constructor
     */
    public function __construct($model)
    {
        parent::__construct($model);

        $guarded = $model->getGuarded();

        if (count($guarded) === 1 && $guarded[0] === '*') {
            $model->addFillable([
                'industry',
                'industry_id',
                'industry_code'
            ]);
        }

        $model->belongsTo['industry'] = ['Prismify\Industry\Models\Industry'];
    }

    public function getIndustryOptions()
    {
        return Industry::getNameList();
    }

    /**
     * Sets the "industry" relation with the code specified, model lookup used.
     * @param string $code
     */
    public function setIndustryCodeAttribute($code)
    {
        if (!$industry = Industry::whereCode($code)->first()) {
            return;
        }

        $this->model->industry = $industry;
    }

    /**
     * Mutator for "industry_code" attribute.
     * @return string
     */
    public function getIndustryCodeAttribute()
    {
        return $this->model->industry ? $this->model->industry->code : null;
    }

    /**
     * Ensure an integer value is set, otherwise nullable.
     */
    public function setIndustryIdAttribute($value)
    {
        $this->model->attributes['industry_id'] = $value ?: null;
    }
}
