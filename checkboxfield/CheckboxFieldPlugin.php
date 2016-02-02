<?php
namespace Craft;

class CheckboxFieldPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Checkbox Field';
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getSchemaVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'carlcs';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/carlcs/craft-checkboxfield';
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/carlcs/craft-checkboxfield';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://github.com/carlcs/craft-checkboxfield/raw/master/releases.json';
    }
}
