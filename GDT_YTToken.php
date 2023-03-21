<?php
namespace GDO\YouTube;

use GDO\Core\GDT_String;

final class GDT_YTToken extends GDT_String
{

	protected function __construct()
	{
		parent::__construct();
		$this->min(10);
		$this->max(16);
		$this->icon('video');
	}

}
