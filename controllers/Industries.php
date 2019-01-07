<?php namespace Prismify\Industry\Controllers;

use Lang;
use Flash;
use Backend;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;
use Prismify\Industry\Models\Industry;

/**
 * Industries Back-end Controller
 */
class Industries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['prismify.industry.access_industries'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Prismify.Industry', 'industries');
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->is_enabled) {
            return 'safe disabled';
        }
    }

    public function onLoadDisableForm()
    {
        try {
            $this->vars['checked'] = post('checked');
        }
        catch (Exception $ex) {
            $this->handleError($ex);
        }

        return $this->makePartial('disable_form');
    }

    public function onDisableIndustries()
    {
        $enable = post('enable', false);

        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $objectId) {
                if (!$object = Industry::find($objectId)) {
                    continue;
                }

                $object->is_enabled = $enable;
                $object->save();
            }

        }

        if ($enable) {
            Flash::success(Lang::get('prismify.industry::lang.controllers.industries.config.form.enable.success'));
        }
        else {
            Flash::success(Lang::get('prismify.industry::lang.controllers.industries.config.form.disable.success'));
        }

        return Backend::redirect('prismify/industry/industries');
    }
}
