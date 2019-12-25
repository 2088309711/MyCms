<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


use think\Route;


Route::get([
    '/' => 'index/index/index',
    'nav' => 'index/index/nav',
    'download' => 'index/index/download',
    'loader_help' => 'index/index/loaderHelp',
    'video_play/:id' => 'index/index/videoPlay',
    'download_loader' => 'index/index/downloadLoader',
    'add' => 'red_pack/index/add',
    'query' => 'red_pack/index/index',
    'login' => 'red_pack/index/login',
    'delete/:id' => 'red_pack/index/delete',
    'update/:id' => 'red_pack/index/update',
    'list_news' => 'admin/Info/news',
    'list_news_get_data' => 'admin/Info/getData',
    'info' => 'admin/Info/index',
    'admin_login' => 'admin/Login/index',
    'admin' => 'admin/Index/index',

    'system' => 'admin/System/index',
    'system_param_set' => 'admin/System/systemParamSet',
    'pseudo_static_param_set' => 'admin/System/pseudoStaticParamSet',
    'dynamic_page_cache_set' => 'admin/System/dynamicPageCacheSet',
    'digg_top_set' => 'admin/System/diggTopSet',
    'extended_variables' => 'admin/System/extendedVariables',
    'security_param_config' => 'admin/System/securityParamConfig',
    'website_firewall' => 'admin/System/websiteFirewall',
    'data_update_center' => 'admin/System/dataUpdateCenter',
    'update_info_page_address' => 'admin/System/updateInfoPageAddress',
    'update_dynamic_page_cache' => 'admin/System/updateDynamicPageCache',
    'data_collation' => 'admin/System/dataCollation',
    'remote_publish' => 'admin/System/remotePublish',
    'new_data_table' => 'admin/System/newDataTable',
    'management_data_sheet' => 'admin/System/managementDataSheet',
    'manage_refresh_tasks' => 'admin/System/manageRefreshTasks',
    'manage_scheduled_tasks' => 'admin/System/manageScheduledTasks',
    'add_workflow' => 'admin/System/addWorkflow',
    'manage_workflow' => 'admin/System/manageWorkflow',
    'management_optimization_plan' => 'admin/System/managementOptimizationPlan',
    'manage_site_visitors' => 'admin/System/manageSiteVisitors',
    'management_menu' => 'admin/System/managementMenu',
    'backup_data' => 'admin/System/backupData',
    'restore_data' => 'admin/System/restoreData',
    'manage_backup_directories' => 'admin/System/manageBackupDirectories',
    'execute_sql_statement' => 'admin/System/executeSqlStatement',

    'class' => 'admin/NjClass/index',
    'manage_info' => 'admin/NjClass/manageInfo',
    'audit_info' => 'admin/NjClass/auditInfo',
    'issue_info' => 'admin/NjClass/issueInfo',
    'manage_review' => 'admin/NjClass/manageReview',
    'update_fragments' => 'admin/NjClass/updateFragments',
    'update_topic' => 'admin/NjClass/updateTopic',
    'data_count' => 'admin/NjClass/dataCount',
    'rank_count' => 'admin/NjClass/rankCount',
    'manage_class' => 'admin/NjClass/manageClass',
    'manage_class_pageing' => 'admin/NjClass/manageClassPageing',
    'class_custom_field' => 'admin/NjClass/classCustomField',
    'batch_set_class_pro' => 'admin/NjClass/batchSetClassPro',
    'manage_topic_class' => 'admin/NjClass/manageTopicClass',
    'manage_topics' => 'admin/NjClass/manageTopics',
    'theme_custom_fields' => 'admin/NjClass/themeCustomFields',
    'add_title_category' => 'admin/NjClass/addTitleCategory',
    'manage_title_type' => 'admin/NjClass/manageTitleType',
    'manage_type' => 'admin/NjClass/manageType',
    'management_debris' => 'admin/NjClass/managementDebris',
    'manage_custom_page_type' => 'admin/NjClass/manageCustomPageType',
    'add_custom_page' => 'admin/NjClass/addCustomPage',
    'manage_custom_page' => 'admin/NjClass/manageCustomPage',
    'manage_custom_list_class' => 'admin/NjClass/manageCustomListClass',
    'add_custom_list' => 'admin/NjClass/addCustomList',
    'manage_custom_lists' => 'admin/NjClass/manageCustomLists',
    'manage_custom_js_type' => 'admin/NjClass/manageCustomJsType',
    'add_custom_js' => 'admin/NjClass/addCustomJs',
    'manage_custom_js' => 'admin/NjClass/manageCustomJs',
    'set_tags_param' => 'admin/NjClass/setTagsParam',
    'manage_tags_type' => 'admin/NjClass/manageTagsType',
    'manage_tags' => 'admin/NjClass/manageTags',
    'manage_headline_levels' => 'admin/NjClass/manageHeadlineLevels',
    'manage_recommendation_levels' => 'admin/NjClass/manageRecommendationLevels',
    'manage_annex' => 'admin/NjClass/manageAnnex',
    'add_acquisition_node' => 'admin/NjClass/addAcquisitionNode',
    'manage_collection_nodes' => 'admin/NjClass/manageCollectionNodes',
    'manage_collection_node_paging' => 'admin/NjClass/manageCollectionNodePaging',
    'site_wide_search_settings' => 'admin/NjClass/siteWideSearchSettings',
    'manage_search_data_sources' => 'admin/NjClass/manageSearchDataSources',
    'clean_up_search_data' => 'admin/NjClass/cleanUpSearchData',
    'wap_set' => 'admin/NjClass/wapSet',
    'manage_wap_templates' => 'admin/NjClass/manageWapTemplates',
    'count_info_data' => 'admin/NjClass/countInfoData',
    'user_publish_count' => 'admin/NjClass/userPublishCount',
    'manage_search_keyword' => 'admin/NjClass/manageSearchKeyword',
    'batch_replace_field_value' => 'admin/NjClass/batchReplaceFieldValue',
    'batch_transfer_info' => 'admin/NjClass/batchTransferInfo',
    'mass_archiving_info' => 'admin/NjClass/massArchivingInfo',
    'bulk_del_info' => 'admin/NjClass/bulkDelInfo',
    'manage_default_voting' => 'admin/NjClass/manageDefaultVoting',

    'template' => 'admin/Template/index',
    'user_manage' => 'admin/UserManage/index',
    'plug_in' => 'admin/PlugIn/index',
    'shopping_mall' => 'admin/ShoppingMall/index',
    'other' => 'admin/Other/index',
]);

Route::post([
    'query' => 'red_pack/index/index',
    'add' => 'red_pack/index/add',
    'login' => 'red_pack/index/login',
    'delete' => 'red_pack/index/delete',
    'update' => 'red_pack/index/update',
    'admin_login' => 'admin/login/index',
]);


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];


