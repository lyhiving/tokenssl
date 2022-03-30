<?php
/**
 * Automatically generated
 *
 * @author: Viskov Sergey
 * @date: 07.05.15
 */


namespace LTDBeget\apacheConfigurator\directives\available;


use LTDBeget\apacheConfigurator\ConfigurationFile;
use LTDBeget\apacheConfigurator\directives\Directive;

class DBDPrepareSQL extends Directive
{
    /**
     * Return link to full description of apache directive
     * @return String
     */
    public static function getApacheDocLink()
    {
        return Directive::$apacheSite."/docs/2.4/mod/mod_dbd.html#dbdpreparesql";
    }

    /**
     * the source module which defines the directive
     * @return String
     */
    public static function getModule()
    {
        return "mod_dbd";
    }

    /**
     * Return text description of apache directive
     * @return String
     */
    public static function getDescription()
    {
        return "Define an SQL prepared statement";
    }

    /**
     * Return Apache directive Syntax
     * @return String
     */
    public static function getSyntax()
    {
        return 'DBDPrepareSQL "SQL statement" label';
    }

    /**
     * is this directive can include inner directives
     * @return boolean
     */
    public function isSection()
    {
        return false;
    }

    /**
     * Set allowed context of concrete directive
     */
    protected function setAllowedContext()
    {
        $this->allowedContext = [
            ConfigurationFile::SERVER_CONFIG,
            VirtualHost::getFullName(),
        ];
    }

}