<?php

namespace DevPandi\MediaBbCodeTwoClick;

use XF\AddOn\AbstractSetup;
use XF\Db\Schema\Alter;

class Setup extends AbstractSetup
{
	public function install(array $stepParams = [])
	{
        $this->schemaManager()->alterTable(
            'xf_user',
            function (Alter $user_table) {
                $user_table->addColumn('load_embedded', 'tinyint')->setDefault(0);
            }
        );
	}

	public function upgrade(array $stepParams = [])
	{
		// TODO: Implement upgrade() method.
	}

	public function uninstall(array $stepParams = [])
	{
		// TODO: Implement uninstall() method.
	}
}