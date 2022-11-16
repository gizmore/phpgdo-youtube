<?php
namespace GDO\YouTube;

use GDO\Core\GDO_Module;
use GDO\Core\GDT_Enum;
use GDO\Core\GDT_Secret;

/**
 * Youtube Module. Collects YT links. Optionally backs them up.
 * 
 * @author gizmore
 */
final class Module_YouTube extends GDO_Module
{
	public int $priority = 49;
	
	public function onLoadLanguage(): void
	{
		$this->loadLanguage('lang/yt');
	}
	
	public function getClasses(): array
	{
		return [
			GDO_YTVideo::class,
		];
	}
	
	public function getConfig(): array
	{
		return [
			GDT_Enum::make('yt_backup')->enumValues('auto', 'manually')->initial('manually'),
			GDT_Secret::make('yt_api_key')->initial(@include('gizmore_api_key.php')),
// 			GDT_Checkbox::make('yt_confirm_add')->initial('0'),
		];
	}
	
}
