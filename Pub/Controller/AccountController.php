<?php

namespace DevPandi\MediaBbCodeTwoClick\Pub\Controller;

use XF\Entity\User;

class AccountController extends XFCP_AccountController
{
    protected function savePrivacyProcess(User $visitor)
    {
        $input = $this->filter(['user' => ['load_embedded' => 'bool']]);
        $visitor->set('load_embedded', $input['user']['load_embedded']);

        return parent::accountDetailsSaveProcess($visitor);
    }
}