<?php

class Page extends SiteTree
{
    private static $db = array(
    );

    private static $has_one = array(
    );


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['DisabledBlocksReadOnly', 'InheritBlockSets']);
        return $fields;

    }

    public function EncodeTitle() {
        $string = $this->Title;
        $encoded = str_replace(' ', '%20', $string);

        return $encoded;
    }

}
