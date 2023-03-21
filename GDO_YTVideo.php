<?php
namespace GDO\YouTube;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;
use GDO\Core\GDT_CreatedAt;
use GDO\Core\GDT_CreatedBy;
use GDO\Core\GDT_Text;
use GDO\Core\GDT_Token;
use GDO\UI\GDT_Badge;
use GDO\UI\GDT_Title;

/**
 * A YouTube video. @TODO Add own votes.
 *
 * @author gizmore
 */
final class GDO_YTVideo extends GDO
{

	public function gdoColumns(): array
	{
		return [
			GDT_AutoInc::make('yt_id'),
			GDT_Token::make('yt_idx')->notNull(),
			GDT_Title::make('yt_title'),
			GDT_Text::make('yt_description'),
			GDT_Badge::make('yt_likes'),
			GDT_Badge::make('yt_views'),
			GDT_CreatedAt::make('yt_created'),
			GDT_CreatedBy::make('yt_creator'),
		];
	}

}
