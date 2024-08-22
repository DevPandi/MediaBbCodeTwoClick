<?php

namespace DevPandi\MediaBbCodeTwoClick\Listener;

use XF\MvC\Entity\Entity;
use XF\Mvc\Entity\Manager;
use XF\Mvc\Entity\Structure;

class TwoClickListener
{
    public static function userEntityStructure(Manager $em, Structure &$structure)
    {
        $structure->columns['dp_load_embedded'] = ['type' => Entity::BOOL, 'default' => 0, 'nullable' => false];
    }
}
