<?php

/*
 * This file is part of MODX Revolution.
 *
 * Copyright (c) MODX, LLC. All Rights Reserved.
 *
 * For complete copyright and license information, see the COPYRIGHT and LICENSE
 * files found in the top-level directory of this distribution.
 */

use MODX\Revolution\modResource;
use xPDO\xPDO;
use xPDO\Cache\xPDOCacheManager;

require_once __DIR__ . '/resource.class.php';

/**
 * Loads the resource data page
 *
 * @package modx
 * @subpackage manager.controllers
 */
class ResourceDataManagerController extends ResourceManagerController
{
    /** @var modResource $resource */
    public $resource;
    /** @var string $previewUrl */
    public $previewUrl;


    /**
     * Check for any permissions or requirements to load page
     *
     * @return bool
     */
    public function checkPermissions()
    {
        return $this->modx->hasPermission('view_document');
    }


    /**
     * Register custom CSS/JS for the page
     *
     * @return void
     */
    public function loadCustomCssJs()
    {
        $mgrUrl = $this->modx->getOption('manager_url', null, MODX_MANAGER_URL);
        $this->addJavascript($mgrUrl . 'assets/modext/widgets/system/modx.grid.manager.log.js');
        $this->addJavascript($mgrUrl . 'assets/modext/widgets/resource/modx.panel.resource.data.js');
        $this->addJavascript($mgrUrl . 'assets/modext/sections/resource/data.js');
        $data = [
            'xtype' => 'modx-page-resource-data',
            'record' => [
                'id' => $this->resource->get('id'),
                'context_key' => $this->resource->get('context_key'),
                'class_key' => $this->resource->get('class_key'),
                'pagetitle' => htmlentities($this->resource->get('pagetitle'), ENT_QUOTES, 'UTF-8'),
                'preview_url' => $this->previewUrl,
                'parents' => $this->getParents(),
            ],
            'canEdit' => (int)$this->modx->hasPermission('edit_document'),
        ];
        $this->addHtml('<script>
        MODx.ctx = "' . $this->resource->get('context_key') . '";
        Ext.onReady(function() {MODx.load(' . json_encode($data, JSON_INVALID_UTF8_SUBSTITUTE) . ')});</script>');
    }


    /**
     * Custom logic code here for setting placeholders, etc
     *
     * @param array $scriptProperties
     *
     * @return mixed
     */
    public function process(array $scriptProperties = [])
    {
        $placeholders = [];

        $id = (int)$this->scriptProperties['id'];
        if (!$this->resource = $this->modx->getObject($this->resourceClass, $id)) {
            return $this->modx->lexicon('resource_err_nfs', ['id' => $this->scriptProperties['id']]);
        }

        if (!$this->resource->checkPolicy('view')) {
            $this->failure($this->modx->lexicon('access_denied'));

            return '';
        }

        $this->resource->getOne('CreatedBy');
        $this->resource->getOne('EditedBy');
        $this->resource->getOne('Template');

        $server_offset_time = intval($this->modx->getOption('server_offset_time', null, 0));
        $this->resource->set('createdon_adjusted', strftime('%c', $this->resource->get('createdon') + $server_offset_time));
        $this->resource->set('editedon_adjusted', strftime('%c', $this->resource->get('editedon') + $server_offset_time));

        $this->resource->_contextKey = $this->resource->get('context_key');
        $buffer = $this->modx->cacheManager->get($this->resource->getCacheKey(), [
            xPDO::OPT_CACHE_KEY => $this->modx->getOption('cache_resource_key', null, 'resource'),
            xPDO::OPT_CACHE_HANDLER => $this->modx->getOption('cache_resource_handler', null, $this->modx->getOption(xPDO::OPT_CACHE_HANDLER)),
            xPDO::OPT_CACHE_FORMAT => (int)$this->modx->getOption('cache_resource_format', null, $this->modx->getOption(xPDO::OPT_CACHE_FORMAT, null, xPDOCacheManager::CACHE_PHP)),
        ]);
        if ($buffer) {
            $placeholders['buffer'] = htmlspecialchars($buffer['resource']['_content']);
        }
        // assign resource to smarty
        $placeholders['resource'] = $this->resource;

        // make preview url
        $this->getPreviewUrl();
        $placeholders['_ctx'] = $this->resource->get('context_key');

        return $placeholders;
        return '';
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        $this->previewUrl = $this->modx->makeUrl($this->resource->get('id'), $this->resource->get('context_key'));

        return $this->previewUrl;
    }


    /**
     * Return the pagetitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->resource
            ? $this->resource->get('pagetitle')
            : '';
    }


    /**
     * Return the location of the template file
     *
     * @return string
     */
    public function getTemplateFile()
    {
        return '';
    }


    /**
     * Specify the language topics to load
     *
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['resource', 'manager_log'];
    }


    /**
     * Get the Help URL
     *
     * @return string
     */
    public function getHelpUrl()
    {
        return 'Resources';
    }


    public function firePreRenderEvents()
    {
        return;
    }


    public function fireOnRenderEvent()
    {
        return;
    }


    public function fireOnTVFormRender()
    {
        return;
    }


    public function loadRichTextEditor()
    {
    }
}
