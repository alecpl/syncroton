<?php
/**
 * Syncroton
 *
 * @package     Syncroton
 * @subpackage  Data
 * @license     http://www.tine20.org/licenses/lgpl.html LGPL Version 3
 * @copyright   Copyright (c) 2009-2012 Metaways Infosystems GmbH (http://www.metaways.de)
 * @author      Lars Kneschke <l.kneschke@metaways.de>
 */

/**
 * class to handle ActiveSync Sync command
 *
 * @package     Syncroton
 * @subpackage  Data
 */
class Syncroton_Data_Notes extends Syncroton_Data_AData
{
    protected $_supportedFolderTypes = array(
        Syncroton_Command_FolderSync::FOLDERTYPE_NOTE,
        Syncroton_Command_FolderSync::FOLDERTYPE_NOTE_USER_CREATED
    );
}
