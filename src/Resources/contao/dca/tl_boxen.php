<?php

/**
 * Extension for: TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that
 * specializes in accessibility and generates W3C-compliant HTML code. It
 * provides a wide range of functionality to develop professional websites
 * including a built-in search engine, form generator, file and user manager,
 * CSS engine, multi-language support and many more. For more information and
 * additional TYPOlight applications like the TYPOlight MVC Framework please
 * visit the project website http://www.typolight.org.
 *
 * This is the data container array for table tl_boxen.
 *
 * PHP version 5
 * @copyright  Christian Wenzel/Fred Bliss 2007 / computino.de Webservice 2008
 * @author     Christian Wenzel <wenzel@saiga.de>
 * @author     Fred Bliss <fred@stevensdesign.com>
 * @author     Markus Milkereit <markus@computino.de>
 * @license    GPL
 * @filesource
 */

/**
 * Load tl_content language file
 */
$this->loadLanguageFile('tl_content');
$this->loadDataContainer('tl_content');

/**
 * Table tl_boxen
 */
$GLOBALS['TL_DCA']['tl_boxen'] = array
(
    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'enableVersioning'            => true,
        'sql' => array(
            'keys' => array(
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('modul_id','position','title'),
            'flag'                    => 1,
            'panelLayout'             => 'filter;search,limit'
        ),
        'label' => array
        (
            'fields'                  => array('position','title','content'),
            'format'                  => '<i>[%s]</i> <b>%s</b> <br />',
            'maxCharacters'           => '350'
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset();"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_boxen']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_boxen']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'cut' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_boxen']['cut'],
                'href'                => 'act=paste&amp;mode=cut',
                'icon'                => 'cut.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_boxen']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'toggle' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_boxen']['toggle'],
                'icon'                => 'visible.gif',
                'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
                'button_callback'     => array('tl_boxen', 'toggleIcon')
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_boxen']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        '__selector__'                => array('type', 'addImage', 'addEnclosure'),
        'default'                     => '{title_legend},type,title,headline;{column_legend},position,modul_id;',
        'headline'                    => '{title_legend},type,title,headline;{column_legend},position,modul_id;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'text'                        => '{title_legend},type,title,headline;{column_legend},position,modul_id;{content_legend},content;{image_legend},addImage;{enclosure_legend:hide},addEnclosure;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'html'                        => '{title_legend},type,title;{column_legend},position,modul_id;{content_legend},html;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'image'                       => '{title_legend},type,title;{column_legend},position,modul_id;{source_legend},singleSRC;{image_legend},alt,size,imagemargin,imageUrl,fullsize,caption;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'gallery'                     => '{title_legend},type,title,headline;{column_legend},position,modul_id;{source_legend},multiSRC,useHomeDir;{image_legend},size,imagemargin,perRow,perPage,sortBy,fullsize;{template_legend:hide},galleryTpl;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'download'                    => '{title_legend},type,title,headline;{column_legend},position,modul_id;{source_legend},singleSRC;{dwnconfig_legend},linkTitle;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'downloads'                   => '{title_legend},type,title,headline;{column_legend},position,modul_id;{source_legend},multiSRC,useHomeDir;{dwnconfig_legend},sortBy;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'alias'                       => '{title_legend},type,title,headline;{column_legend},position,modul_id;{include_legend},cteAlias;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'article'                     => '{title_legend},type,title,headline;{column_legend},position,modul_id;{include_legend},articleAlias;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
        'module'                      => '{title_legend},type,title,headline;{column_legend},position,modul_id;{include_legend},module;{pages_legend},pages,reversePages,inheritPages;{expert_legend:hide},space,cssID;{publish_legend},published,start,stop',
    ),

    // Subpalettes
    'subpalettes' => array
    (
        'addImage'                    => 'singleSRC,alt,imagemargin,size,imageUrl,caption,floating,fullsize',
        'addEnclosure'                => 'enclosure'
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        "sorting" => array(
            "sql" => "int(10) unsigned NOT NULL default '0'"
        ),
        "pid" => array(
            "sql" => "int(10) unsigned NOT NULL default '0'"
        ),
        "tstamp" => array(
            "sql" => "int(10) unsigned NOT NULL default '0'"
        ),
        "addEnclosure" => array(
            "sql" => "char(1) NOT NULL default ''"
        ),
        "enclosure" => array(
            "sql" => "varchar(255) NOT NULL default ''"
        ),
        'type' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['type'],
            'default'                 => 'text',
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_boxen', 'getContentElements'),
            'reference'               => &$GLOBALS['TL_LANG']['Boxes_CTE'],
            'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default 'text'"
        ),
        'title' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['title'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'headline' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['headline'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'inputUnit',
            'options'                 => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
            'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'modul_id' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['modul_id'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'filter'                  => true,
            'options_callback'        => array('tl_boxen', 'getModules'),
            'eval'                    => array('helpwizard'=>true, 'tl_class'=>'w50'),
            'explanation'             => 'modul_id',
            'sql'                     => "int(5) unsigned NOT NULL default '0'"
        ),
        'content' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['text'],
            'inputType'               => 'textarea',
            'eval'                    => array('allowHTML'=>true,'preserveTags'=>true,'rte'=>'tinyMCE'),
            'sql'                     => "text NULL"
        ),
        'html' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['html'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'textarea',
            'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'editArea|html', 'helpwizard'=>true),
            'explanation'             => 'insertTags',
            'sql'                     => "text NULL"
        ),
        'addImage' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addImage'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('submitOnChange'=>true),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'singleSRC' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['singleSRC'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'mandatory'=>true, 'tl_class'=>'clr'),
            'save_callback' => array
            (
                array('tl_content', 'storeFileMetaInformation')
            ),
            'sql'                     => "binary(16) NULL"
        ),
        'multiSRC' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['multiSRC'],
            'exclude'                 => true,
            'inputType'               => 'fileTree',
            'eval'                    => array('fieldType'=>'checkbox', 'files'=>true, 'mandatory'=>true),
            'sql'                     => "blob NULL"
        ),
        'perRow' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['perRow'],
            'default'                 => 4,
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'perPage' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['perPage'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
            'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
        ),
        'sortBy' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sortBy'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('name_asc', 'name_desc', 'date_asc', 'date_desc', 'meta', 'random'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'galleryTpl' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['galleryTpl'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_content', 'getGalleryTemplates'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        ),
        'alt' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['alt'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'rgxp'=>'extnd', 'maxlength'=>255, 'tl_class'=>'long'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'size' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['size'],
			'exclude'                 => true,
			'inputType'               => 'imageSize',
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('rgxp'=>'natural', 'includeBlankOption'=>true, 'nospace'=>true, 'helpwizard'=>true, 'tl_class'=>'w50'),
			'options_callback' => function ()
			{
				return System::getContainer()->get('contao.image.image_sizes')->getOptionsForUser(BackendUser::getInstance());
			},
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
        'caption' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['caption'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'extnd', 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'floating' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['floating'],
            'exclude'                 => true,
            'inputType'               => 'radioTable',
            'options'                 => array('above', 'left', 'right', 'below'),
            'eval'                    => array('cols'=>4, 'tl_class'=>'w50'),
            'reference'               => &$GLOBALS['TL_LANG']['MSC'],
            'sql'                     => "varchar(32) NOT NULL default ''"
        ),
        'imagemargin' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['imagemargin'],
            'exclude'                 => true,
            'inputType'               => 'trbl',
            'options'                 => array('px', '%', 'em', 'pt', 'pc', 'in', 'cm', 'mm'),
            'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'fullsize' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fullsize'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'imageUrl' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['imageUrl'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
            'wizard'                  => array(array('tl_content', 'pagePicker')),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'cteAlias' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cteAlias'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_content', 'getAlias'),
            'eval'                    => array('mandatory'=>true, 'submitOnChange'=>true),
            'wizard' => array
            (
                array('tl_content', 'editAlias')
            ),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'articleAlias' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['articleAlias'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_boxen', 'getArticleAlias'),
            'eval'                    => array('mandatory'=>true, 'submitOnChange'=>true),
            'wizard' => array
            (
                array('tl_content', 'editArticleAlias')
            ),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'module' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['module'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options_callback'        => array('tl_content', 'getModules'),
            'eval'                    => array('mandatory'=>true, 'submitOnChange'=>true),
            'wizard' => array
            (
                array('tl_content', 'editModule')
            ),
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'reversePages' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['reversePages'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'inheritPages' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['inheritPages'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'pages' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['pages'],
            'inputType'               => 'pageTree',
            'eval'                    => array("multiple"=>true, 'fieldType'=>'checkbox'),
            'sql'                     => "text NULL"
        ),
        'position' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['position'],
            'inputType'               => 'text',
            'eval'                    => array('tl_class'=>'w50'),
            'sql'                     => "int(4) NOT NULL default '0'"
        ),
        'space' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['space'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'cssID' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['cssID'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('multiple'=>true, 'size'=>2, 'maxlength'=>240, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'published' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['published'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('doNotCopy'=>true),
            'sql'                     => "char(1) NOT NULL default '1'"
        ),
        'start' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['start'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(10) NOT NULL default ''"
        ),
        'stop' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_boxen']['stop'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50 wizard'),
            'sql'                     => "varchar(10) NOT NULL default ''"
        )
    )
);

// Changes for TL 2.8 and later:
if(VERSION == 2.6 || VERSION == 2.7)
{
    $GLOBALS['TL_DCA']['tl_boxen']['fields']['size']['inputType'] = 'text';
    $GLOBALS['TL_DCA']['tl_boxen']['fields']['size']['eval'] = array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50');
    $GLOBALS['TL_DCA']['tl_boxen']['fields']['size']['save_callback'] = array(array('tl_content', 'limitImageWidth'));
}
else
{
    $GLOBALS['TL_DCA']['tl_boxen']['fields']['size']['inputType'] = 'imageSize';
    $GLOBALS['TL_DCA']['tl_boxen']['fields']['size']['options'] = array('proportional', 'crop', 'box');
    $GLOBALS['TL_DCA']['tl_boxen']['fields']['size']['reference'] = &$GLOBALS['TL_LANG']['MSC'];
    $GLOBALS['TL_DCA']['tl_boxen']['fields']['size']['eval'] = array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50');
}


/**
* Class tl_boxen
*
* Provide miscellaneous methods that are used by the data configuration array.
*
* @copyright  Christian Wenzel/Fred Bliss 2007 / computino.de Webservice 2008
* @author     Christian Wenzel <wenzel@saiga.de>
* @author     Fred Bliss <fred@stevensdesign.com>
* @author     Markus Milkereit <markus@computino.de>
* @package    Controller
*/
class tl_boxen extends \Backend
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }

    /**
     * Get all articles and return them as array (article alias)
     * @param object
     * @return array
     */
    public function getArticleAlias(DataContainer $dc)
    {
        $arrPids = array();
        $arrAlias = array();

        if (!$this->User->isAdmin)
        {
            foreach ($this->User->pagemounts as $id)
            {
                $arrPids[] = $id;
                $arrPids = array_merge($arrPids, $this->getChildRecords($id, 'tl_page', true));
            }

            if (empty($arrPids))
            {
                return $arrAlias;
            }

            $objAlias = $this->Database->prepare("SELECT a.id, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid WHERE a.pid IN(". implode(',', array_map('intval', array_unique($arrPids))) .") ORDER BY parent, a.sorting")
                                       ->execute();
        }
        else
        {
            $objAlias = $this->Database->prepare("SELECT a.id, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid ORDER BY parent, a.sorting")
                                       ->execute();
        }

        if ($objAlias->numRows)
        {
            $this->loadLanguageFile('tl_article');

            while ($objAlias->next())
            {
                $arrAlias[$objAlias->parent][$objAlias->id] = $objAlias->title . ' (' . (strlen($GLOBALS['TL_LANG']['tl_article'][$objAlias->inColumn]) ? $GLOBALS['TL_LANG']['tl_article'][$objAlias->inColumn] : $objAlias->inColumn) . ', ID ' . $objAlias->id . ')';
            }
        }

        return $arrAlias;
    }

    /**
     * Return all box content elements as array
     * @return array
     */
    public function getContentElements()
    {
        $groups = array();

        foreach ($GLOBALS['TL_Boxes_CTE'] as $k=>$v)
        {
            foreach (array_keys($v) as $kk)
            {
                $groups[$k][] = $kk;
            }
        }

        return $groups;
    }

    /**
     * Get Moduls with type tl_boxen
     * @param array
     * @return string
     */
    public function getModules()
    {
        $arrModuls = array();
        $objModuls = $this->Database->prepare("SELECT * FROM tl_module WHERE type=?")->execute("contentbox");

        while($objModuls->next())
        {
            $arrModuls[$objModuls->id] = $objModuls->name;
        }

        return $arrModuls;
    }


    /**
     * Return the "toggle visibility" button
     * @param array
     * @param string
     * @param string
     * @param string
     * @param string
     * @param string
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        if (strlen($this->Input->get('tid')))
        {
            $this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
            $this->redirect($this->getReferer());
        }

        // Check permissions AFTER checking the tid, so hacking attempts are logged
        if (!$this->User->isAdmin && !$this->User->hasAccess('tl_boxen::published', 'alexf'))
        {
            return '';
        }

        $href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

        if (!$row['published'])
        {
            $icon = 'invisible.gif';
        }

        $objPage = $this->Database->prepare("SELECT * FROM tl_boxen WHERE id=?")->limit(1)->execute($row['id']);

        if (!$this->User->isAdmin && !$this->User->isAllowed(2, $objPage->row()))
        {
            return $this->generateImage($icon) . ' ';
        }

        return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
    }


    /**
     * Disable/enable a user group
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible)
    {
        // Check permissions to edit
        $this->Input->setGet('id', $intId);
        $this->Input->setGet('act', 'toggle');

        // Check permissions to publish
        if (!$this->User->isAdmin && !$this->User->hasAccess('tl_boxen::published', 'alexf'))
        {
            $this->log('Not enough permissions to publish/unpublish Content-Box ID "'.$intId.'"', 'tl_boxen toggleVisibility', TL_ERROR);
            $this->redirect('contao/main.php?act=error');
        }

        $this->createInitialVersion('tl_boxen', $intId);

        // Update the database
        $this->Database->prepare("UPDATE tl_boxen SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")->execute($intId);

        $this->createNewVersion('tl_boxen', $intId);
    }

}
