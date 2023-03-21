<?php
namespace GDO\YouTube;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;
use GDO\Core\GDT_CreatedAt;
use GDO\Core\GDT_CreatedBy;
use GDO\Core\GDT_Text;
use GDO\Core\GDT_Token;
use GDO\UI\GDT_Title;

/**
 * A YouTube video. @TODO Add own votes.
 *
 * @author gizmore
 */
final class GDO_YTPlaylist extends GDO
{

	public function gdoColumns(): array
	{
		return [
			GDT_AutoInc::make('ytl_id'),
			GDT_Token::make('ytl_idx')->notNull(),
			GDT_Title::make('ytl_title'),
			GDT_Text::make('ytl_description'),
			GDT_CreatedAt::make('ytl_created'),
			GDT_CreatedBy::make('ytl_creator'),
		];
	}

}
