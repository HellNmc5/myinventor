<?php
namespace GlpiPlugin\myinventor;



use CommonDBTM;

class Superasset extends CommonDBTM
{
    // right management, we'll change this later
    static $rightname = 'computer';

    /**
     *  Name of the itemtype
     */
    /** @phan-suppress-next-line PhanUndeclaredFunction */
    static function getTypeName($nb=0)
    {
        return _n('Super-asset', 'Super-assets', $nb);
    }
}