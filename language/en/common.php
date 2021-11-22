<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'TFORUM_STATS'	=> 'Forum Stats',
	'TNEWEST_MEM'	=> 'Newest Member',
	'TTOP_THANKED'	=> 'Top Thanked',
	'TTOP_POSTER'	=> 'Top Poster',
	'TNEW_THREAD'	=> 'Latest Post',
	'TMOST_VIEW'	=> 'Most Viewed',
	'THOT_TOPIC'	=> 'Hotest Topics',
	 'NEWEST_TOPICS'		=> 'Newest Topic',
	'ACTIVE_MEM'	=> 'Top poster',
    'NEWEST_MEM'	=> 'Newest member',
	'BY'                => 'by',
	'VIEWS'		=> 'Views',
	'REPLY'		=> 'Reply',
	'THANKED'		=> 'Thanked',
	'TOPICS'		=> 'Topic',
	'REGDATE'		=> 'Date',
	'POSTER'		=> 'Author',
	'LATEST_POSTER'		=> 'Last reply',
	'LATEST_POST_TIME'	=> 'Last post time',
	'POST_TIME'		=> 'Post time',
	'TIMES'			=> 'times',
));

?>
