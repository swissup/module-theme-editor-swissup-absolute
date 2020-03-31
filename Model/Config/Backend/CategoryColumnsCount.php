<?php

namespace Swissup\ThemeEditorSwissupAbsolute\Model\Config\Backend;

class CategoryColumnsCount extends \Swissup\ThemeEditor\Model\Config\Backend\ColumnsCount
{
    /**
     * {@inheritdoc}
     */
    protected function getItemWidthValue($columns, $spacing)
    {
        return "calc((100% - {$spacing}%) / {$columns})";
    }
}
