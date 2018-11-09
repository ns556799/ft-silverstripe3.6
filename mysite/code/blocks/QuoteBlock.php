<?php

class QuoteBlock extends Block
{
    static $singular_name = 'Quote Block';
    static $plural_name = 'Quote Blocks';
    static $description = 'Use this block to create a Quote';
    static $icon = "themes/tutorial/images/treeicons/news";
    static $defaults = array('ProvideComments' => true);

    private static $db = array(
        "QuoteAlignment" => "Boolean",
        "QuoteFullName" => "Text",
        "QuoteCompany" => "Text",
        "QuoteJobTitle" => "Text",
        "Quote" => "Text",
        "Content" => "HTMLText",

    );

    private static $has_one = array(
    );


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName(['ExtraCSSClasses']);

        $fields->addFieldToTab('Root.Main', new TextareaField('Quote'));
        $fields->addFieldToTab('Root.Main', new TextField('QuoteFullName', 'Quote Author: Full Name'));
        $fields->addFieldToTab('Root.Main', new TextField('QuoteCompany', 'Quote Author: Company'));
        $fields->addFieldToTab('Root.Main', new TextField('QuoteJobTitle', 'Quote Author: Job Title'));

        $fields->addFieldToTab('Root.Main', new OptionsetField( $name = "QuoteAlignment", $title = "Quote Alignment",
            $source = array( "0" => "Left", "1" => "Right"),
            $value = "0" ));

        $fields->addFieldToTab('Root.Main', new HtmlEditorField('Content', 'Content'));

        return $fields;

    }

    public function QuoteAlign() {
        $alignment = null;
        $this->QuoteAlignment ? $alignment = '-align-right' : $alignment = null;

        return $alignment;
    }


}
