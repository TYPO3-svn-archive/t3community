<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');




$TCA['tx_t3community_domain_model_profile'] = array(
	'ctrl' => $TCA['tx_t3community_domain_model_profile']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'profielvalue,trust,profilevaluelabel'
	),
	'types' => array(
		'1' => array('showitem' => 'profielvalue,trust,profilevaluelabel')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'profielvalue' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_profile.profielvalue',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'trust' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_profile.trust',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'profilevaluelabel' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_profile.profilevaluelabel',
			'config'  => array(
				'type' => 'inline',
				'size' => 10,
				'minitems' => 0,
				'maxitems' => 9999,
				'autoSizeMax' => 30,
				'multiple' => 1,
				'foreign_table' => 'tx_t3community_domain_model_profiletemplates',
				'MM' => 'tx_t3community_profile_profiletemplates_mm',
			)
		),
		'frontenduser' => array(
			'config' => array(
				'type' => 'passthrough',
			)
		),
	),
);

$TCA['tx_t3community_domain_model_frontenduser'] = array(
	'ctrl' => $TCA['tx_t3community_domain_model_frontenduser']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'profiel,friends_list,guestbook'
	),
	'types' => array(
		'1' => array('showitem' => 'profiel,friends_list,guestbook')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'profiel' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_frontenduser.profiel',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_t3community_domain_model_profile',
				'foreign_field' => 'frontenduser',
				'maxitems'      => 9999,
			)
		),
		'friends_list' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_frontenduser.friends_list',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_t3community_domain_model_friendslist',
				'foreign_field' => 'frontenduser',
				'maxitems'      => 9999,
			)
		),
		'guestbook' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_frontenduser.guestbook',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_t3community_domain_model_guestbook',
				'foreign_field' => 'frontenduser',
				'maxitems'      => 9999,
			)
		),
	),
);

$TCA['tx_t3community_domain_model_profiletemplates'] = array(
	'ctrl' => $TCA['tx_t3community_domain_model_profiletemplates']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'profilwertart,feldtype,validation,cssid,innertag'
	),
	'types' => array(
		'1' => array('showitem' => 'profilwertart,feldtype,validation,cssid,innertag')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'profilwertart' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_profiletemplates.profilwertart',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'feldtype' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_profiletemplates.feldtype',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'validation' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_profiletemplates.validation',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'cssid' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_profiletemplates.cssid',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'innertag' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_profiletemplates.innertag',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
	),
);

$TCA['tx_t3community_domain_model_frontendusergroup'] = array(
	'ctrl' => $TCA['tx_t3community_domain_model_frontendusergroup']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => ''
	),
	'types' => array(
		'1' => array('showitem' => '')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
	),
);

$TCA['tx_t3community_domain_model_friendslist'] = array(
	'ctrl' => $TCA['tx_t3community_domain_model_friendslist']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'friend,request,initiation,blacklist,allowprofiledata,user'
	),
	'types' => array(
		'1' => array('showitem' => 'friend,request,initiation,blacklist,allowprofiledata,user')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'friend' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_friendslist.friend',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'request' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_friendslist.request',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'initiation' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_friendslist.initiation',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'blacklist' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_friendslist.blacklist',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'allowprofiledata' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_friendslist.allowprofiledata',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'user' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_friendslist.user',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_t3community_domain_model_frontenduser',
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'frontenduser' => array(
			'config' => array(
				'type' => 'passthrough',
			)
		),
	),
);

$TCA['tx_t3community_domain_model_guestbook'] = array(
	'ctrl' => $TCA['tx_t3community_domain_model_guestbook']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'text,user'
	),
	'types' => array(
		'1' => array('showitem' => 'text,user')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_guestbook.text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'user' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_guestbook.user',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_t3community_domain_model_frontenduser',
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'frontenduser' => array(
			'config' => array(
				'type' => 'passthrough',
			)
		),
	),
);

$TCA['tx_t3community_domain_model_messages'] = array(
	'ctrl' => $TCA['tx_t3community_domain_model_messages']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'text'
	),
	'types' => array(
		'1' => array('showitem' => 'text')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array (
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array (
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array (
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array (
				'type' => 'select',
				'items' => array (
					array('', 0),
				),
				'foreign_table' => 'tt_news',
				'foreign_table_where' => 'AND tt_news.uid=###REC_FIELD_l18n_parent### AND tt_news.sys_language_uid IN (-1,0)', // TODO
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array (
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array (
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:t3community/Resources/Private/Language/locallang_db.xml:tx_t3community_domain_model_messages.text',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
	),
);

?>