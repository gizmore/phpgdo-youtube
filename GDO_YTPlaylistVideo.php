<?php
namespace GDO\YouTube;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;
use GDO\Core\GDT_Object;

/**
 * @author gizmore
 */
final class GDO_YTPlaylistVideo extends GDO
{

	public function gdoColumns(): array
	{
		return [
			GDT_AutoInc::make('ytlv_id'),
			GDT_Object::make('ytlv_playlist')->table(GDO_YTPlaylist::table())->notNull(),
			GDT_Object::make('ytlv_video')->table(GDO_YTVideo::table())->notNull(),
		];
	}

}
