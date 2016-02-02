<?php
namespace Craft;

class CheckboxFieldFieldType extends BaseFieldType
{
    // Public Methods
    // =========================================================================

    public function getName()
    {
        return Craft::t('Checkbox');
    }

    public function defineContentAttribute()
    {
        return AttributeType::Bool;
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('checkboxField/fieldtypes/checkbox/settings', array(
            'settings' => $this->getSettings(),
        ));
    }

    public function getInputHtml($name, $value)
    {
        // If this is a new entry, look for a default option
        if ($this->isFresh()) {
            $value = $this->getSettings()->default;
        }

        return craft()->templates->render('checkboxField/fieldtypes/checkbox/input', array(
            'id'    => craft()->templates->formatInputId($name),
            'name'  => $name,
            'value' => (bool) $value,
            'settings' => $this->getSettings(),
        ));
    }

    public function prepValueFromPost($value)
    {
        return (bool) $value;
    }

    public function prepValue($value)
    {
        // It's stored as '0' in the database, but it's returned as false. Change it back to '0'.
        return $value == false ? '0' : $value;
    }

    // Protected Methods
    // =========================================================================

    protected function defineSettings()
    {
        return array(
            'heading' => array(AttributeType::Bool, 'default' => true),
            'label'   => array(AttributeType::String),
            'default' => array(AttributeType::Bool, 'default' => false),
        );
    }
}
