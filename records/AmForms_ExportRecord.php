<?php
namespace Craft;

class AmForms_ExportRecord extends BaseRecord
{
    /**
     * Return table name
     *
     * @return string
     */
    public function getTableName()
    {
        return 'amforms_exports';
    }

    /**
     * Define attributes
     *
     * @return array
     */
    public function defineAttributes()
    {
        return array(
            'name'          => AttributeType::String,
            'total'         => array(AttributeType::Number, 'required' => true),
            'totalCriteria' => AttributeType::Number,
            'finished'      => array(AttributeType::Bool, 'default' => false),
            'file'          => AttributeType::String,
            'map'           => AttributeType::Mixed,
            'criteria'      => AttributeType::Mixed
        );
    }

    /**
     * @return array
     */
    public function defineRelations()
    {
        return array(
            'form' => array(static::BELONGS_TO, 'AmForms_FormRecord', 'required' => true, 'onDelete' => static::CASCADE)
        );
    }
}
