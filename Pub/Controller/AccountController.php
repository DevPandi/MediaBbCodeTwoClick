<?php

namespace DevPandi\MediaBbCodeTwoClick\Pub\Controller;

use XF\Entity\User;

class AccountController extends XFCP_AccountController
{
    protected function savePrivacyProcess(User $visitor)
    {
        $input = $this->filter(['user' => ['dp_load_embedded' => 'bool']]);
        $visitor->set('dp_load_embedded', $input['user']['dp_load_embedded']);

        return parent::accountDetailsSaveProcess($visitor);
    }
}