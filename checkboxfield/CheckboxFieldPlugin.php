<?php
namespace Craft;

class CheckboxFieldPlugin extends BasePlugin
{
        function getName()
        {
                return 'Checkbox Field';
        }

        function getVersion()
        {
                return '1.0';
        }

        function getSchemaVersion()
        {
                return '1.0';
        }

        function getDeveloper()
        {
                return 'carlcs';
        }

        function getDeveloperUrl()
        {
                return 'https://github.com/carlcs/craft-checkboxfield';
        }

        function getDocumentationUrl()
        {
                return 'https://github.com/carlcs/craft-checkboxfield';
        }

        function getReleaseFeedUrl()
        {
                return 'https://github.com/carlcs/craft-checkboxfield/raw/master/releases.json';
        }
}
