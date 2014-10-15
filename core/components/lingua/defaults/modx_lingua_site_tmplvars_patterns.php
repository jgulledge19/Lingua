<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 0.2b
 */

//
// Database `modx_revo_lingua`
//

// `modx_revo_lingua`.`modx_lingua_site_tmplvars_patterns`
$modx_lingua_site_tmplvars_patterns = array(
  array('id' => '1','type' => 'tag','search' => '/("|\'){1}tv-tags-{{tvId}}("|\'){1}/','replacement' => '${1}tv-tags-{{tvCloneId}}${2}'),
  array('id' => '2','type' => 'tag','search' => '/fld{{tvId}}/','replacement' => 'fld{{tvCloneId}}'),
  array('id' => '3','type' => 'tag','search' => '/tv-{{tvId}}-tag-list/','replacement' => 'tv-{{tvCloneId}}-tag-list'),
  array('id' => '4','type' => 'tag','search' => '/o.id != \'{{tvId}}\'/','replacement' => 'o.id != \'{{tvCloneId}}\''),
  array('id' => '5','type' => 'tag','search' => '/("|\'){1}tvdef{{tvId}}("|\'){1}/','replacement' => '${1}tvdef{{tvCloneId}}${2}'),
  array('id' => '6','type' => 'autotag','search' => '/("|\'){1}tv-tags-{{tvId}}("|\'){1}/','replacement' => '${1}tv-tags-{{tvCloneId}}${2}'),
  array('id' => '7','type' => 'autotag','search' => '/fld{{tvId}}/','replacement' => 'fld{{tvCloneId}}'),
  array('id' => '8','type' => 'autotag','search' => '/tv-{{tvId}}-tag-list/','replacement' => 'tv-{{tvCloneId}}-tag-list'),
  array('id' => '9','type' => 'autotag','search' => '/o.id != \'{{tvId}}\'/','replacement' => 'o.id != \'{{tvCloneId}}\''),
  array('id' => '10','type' => 'autotag','search' => '/("|\'){1}tvdef{{tvId}}("|\'){1}/','replacement' => '${1}tvdef{{tvCloneId}}${2}'),
  array('id' => '11','type' => 'autotag','search' => '/("|\'){1}tvdef{{tvId}}("|\'){1}/','replacement' => '${1}tvdef{{tvCloneId}}${2}'),
  array('id' => '12','type' => 'option','search' => '/("|\'){1}tv{{tvId}}-/','replacement' => '${1}tv{{tvCloneId}}-'),
  array('id' => '13','type' => 'checkbox','search' => '/("|\'){1}tv{{tvId}}-/','replacement' => '${1}tv{{tvCloneId}}-'),
  array('id' => '14','type' => 'checkbox','search' => '/("|\'){1}tv-{{tvId}}("|\'){1}/','replacement' => '${1}tv-{{tvCloneId}}${2}'),
  array('id' => '15','type' => 'checkbox','search' => '/("|\'){1}tvdef{{tvId}}("|\'){1}/','replacement' => '${1}tvdef{{tvCloneId}}${2}'),
  array('id' => '16','type' => 'file','search' => '/("|\'){1}tvbrowser{{tvId}}("|\'){1}/','replacement' => '${1}tvbrowser{{tvCloneId}}${2}'),
  array('id' => '17','type' => 'file','search' => '/("|\'){1}tvpanel{{tvId}}("|\'){1}/','replacement' => '${1}tvpanel{{tvCloneId}}${2}'),
  array('id' => '18','type' => 'file','search' => '/fld{{tvId}}/','replacement' => 'fld{{tvCloneId}}'),
  array('id' => '19','type' => 'file','search' => '/tv: ("|\'){1}{{tvId}}("|\'){1}/','replacement' => 'tv: ${1}{{tvCloneId}}${2}'),
  array('id' => '20','type' => 'image','search' => '/("|\'){1}tvbrowser{{tvId}}("|\'){1}/','replacement' => '${1}tvbrowser{{tvCloneId}}${2}'),
  array('id' => '21','type' => 'image','search' => '/("|\'){1}tv-image-{{tvId}}("|\'){1}/','replacement' => '${1}tv-image-{{tvCloneId}}${2}'),
  array('id' => '22','type' => 'image','search' => '/("|\'){1}tv-image-preview-{{tvId}}("|\'){1}/','replacement' => '${1}tv-image-preview-{{tvCloneId}}${2}'),
  array('id' => '23','type' => 'image','search' => '/fld{{tvId}}/','replacement' => 'fld{{tvCloneId}}'),
  array('id' => '24','type' => 'image','search' => '/tv: ("|\'){1}{{tvId}}("|\'){1}/','replacement' => 'tv: ${1}{{tvCloneId}}${2}'),
  array('id' => '25','type' => 'url','search' => '/("|\'){1}tv{{tvId}}_prefix("|\'){1}/','replacement' => '${1}tv{{tvCloneId}}_prefix${2}'),
  array('id' => '26','type' => 'migx','search' => '/("|\'){1}tvpanel{{tvId}}("|\'){1}/','replacement' => '${1}tvpanel{{tvCloneId}}${2}'),
  array('id' => '27','type' => 'migx','search' => '/("|\'){1}tvpanel2{{tvId}}("|\'){1}/','replacement' => '${1}tvpanel2{{tvCloneId}}${2}'),
  array('id' => '28','type' => 'migx','search' => '/("|\'){1}modx-window-mi-grid-update-{{tvId}}("|\'){1}/','replacement' => '${1}modx-window-mi-grid-update-{{tvCloneId}}${2}'),
  array('id' => '29','type' => 'migx','search' => '/MODx.panel.MiGridUpdate{{tvId}}/','replacement' => 'MODx.panel.MiGridUpdate{{tvCloneId}}'),
  array('id' => '30','type' => 'migx','search' => '/("|\'){1}modx-window-tv-item-update-{{tvId}}("|\'){1}/','replacement' => '${1}modx-window-tv-item-update-{{tvCloneId}}${2}'),
  array('id' => '31','type' => 'migx','search' => '/("|\'){1}xdbedit-panel-object-{{tvId}}("|\'){1}/','replacement' => '${1}xdbedit-panel-object-{{tvCloneId}}${2}'),
  array('id' => '32','type' => 'migx','search' => '/("|\'){1}modx-grid-multitvgrid-{{tvId}}("|\'){1}/','replacement' => '${1}modx-grid-multitvgrid-{{tvCloneId}}${2}'),
  array('id' => '33','type' => 'migx','search' => '/tv_id=(\\s)*("|\'){1}{{tvId}}("|\'){1}/','replacement' => 'tv_id=${1}${2}{{tvCloneId}}${3}'),
  array('id' => '34','type' => 'migx','search' => '/("|\'){1}tv{{tvId}}_items("|\'){1}/','replacement' => '${1}tv{{tvCloneId}}_items${2}'),
  array('id' => '35','type' => 'migx','search' => '/("|\'){1}{{tvId}}_gridDD("|\'){1}/','replacement' => '${1}{{tvCloneId}}_gridDD${2}'),
  array('id' => '36','type' => 'migx','search' => '/("|\'){1}modx-window-mi-iframe-{{tvId}}("|\'){1}/','replacement' => '${1}modx-window-mi-iframe-{{tvCloneId}}${2}'),
  array('id' => '37','type' => 'migx','search' => '/("|\'){1}migx_iframewin_object_id_{{tvId}}("|\'){1}/','replacement' => '${1}migx_iframewin_object_id_{{tvCloneId}}${2}'),
  array('id' => '38','type' => 'migx','search' => '/("|\'){1}migx_iframewin_iframeTpl_{{tvId}}("|\'){1}/','replacement' => '${1}migx_iframewin_iframeTpl_{{tvCloneId}}${2}'),
  array('id' => '39','type' => 'migx','search' => '/("|\'){1}modx-window-migx-iframe-{{tvId}}("|\'){1}/','replacement' => '${1}modx-window-migx-iframe-{{tvCloneId}}${2}'),
  array('id' => '40','type' => 'migx','search' => '/("|\'){1}migx_iframewin_form_{{tvId}}("|\'){1}/','replacement' => '${1}migx_iframewin_form_{{tvCloneId}}${2}'),
  array('id' => '41','type' => 'migx','search' => '/("|\'){1}iframewin_iframe_{{tvId}}("|\'){1}/','replacement' => '${1}iframewin_iframe_{{tvCloneId}}${2}'),
  array('id' => '42','type' => 'migx','search' => '/("|\'){1}migx_iframewin_json_{{tvId}}("|\'){1}/','replacement' => '${1}migx_iframewin_json_{{tvCloneId}}${2}'),
  array('id' => '43','type' => 'migx','search' => '/("|\'){1}migx_iframewin_co_id_{{tvId}}("|\'){1}/','replacement' => '${1}migx_iframewin_co_id_{{tvCloneId}}${2}'),
  array('id' => '44','type' => 'migx','search' => '/("|\'){1}migx_iframewin_store_params_{{tvId}}("|\'){1}/','replacement' => '${1}migx_iframewin_store_params_{{tvCloneId}}${2}'),
  array('id' => '45','type' => 'migx','search' => '/tv_id:(\\s)*("|\'){1}{{tvId}}("|\'){1}/','replacement' => 'tv_id:${1}${2}{{tvCloneId}}${3}')
);
