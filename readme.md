# Checkbox Field plugin for Craft

![Checkbox Field Type](https://github.com/carlcs/craft-checkboxfield/blob/master/checkboxfield.png)

This plugin provides a field type that looks exactly like Craft's default [Checkboxes field][1], but stores a boolean value to the database (similar to the Lightswitch field), so you can use a custom field parameter in your ElementCriteriaModel.

## Installation

To install the plugin, copy the checkboxfield/ folder into craft/plugins/. Then go to Settings → Plugins and click the "Install" button next to "Checkbox Field".

## Usage

Custom field parameter usage:

    {% set entries = craft.entries.myCheckbox(1).myOtherCheckbox(0) %}

## Field Type Settings

Uncheck "Show field name and instructions" to hide the field's name and it's instructions. This also removes the top margin, to make multiple Checkbox fields look exactly like Craft's default Checkboxes field with mutliple options.


  [1]: https://craftcms.com/docs/checkboxes-fields
