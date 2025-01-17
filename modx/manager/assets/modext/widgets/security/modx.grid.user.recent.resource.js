/**
 * Loads a grid of all the resources a user has recently edited.
 *
 * @class MODx.grid.RecentlyEditedResourcesByUser
 * @extends MODx.grid.Grid
 * @param {Object} config An object of options.
 * @xtype modx-grid-user-recent-resource
 */
MODx.grid.RecentlyEditedResourcesByUser = function(config) {
    config = config || {};
    var dateFormat = MODx.config.manager_date_format + ' ' + MODx.config.manager_time_format;
    Ext.applyIf(config,{
        title: _('recent_docs')
        ,url: MODx.config.connector_url
        ,baseParams: {
            action: 'Security/User/GetRecentlyEditedResources'
            ,user: config.user
        }
        ,autosave: true
        ,save_action: 'Resource/UpdateFromGrid'
        ,pageSize: 10
        ,fields: ['id','pagetitle','description','editedon','deleted','published','context_key','menu', 'link', 'occurred']
        ,columns: [{
            header: _('id')
            ,dataIndex: 'id'
            ,width: 75
            ,fixed: true
        },{
            header: _('pagetitle')
            ,dataIndex: 'pagetitle'
            ,renderer: { fn: function(v,md,record) {
                return this.renderLink(v, {
                    href: '?a=resource/update&id=' + record.data.id
                    ,target: '_blank'
                });
            }, scope: this }
        },{
            header: _('editedon')
            ,dataIndex: 'occurred'
        },{
            header: _('published')
            ,dataIndex: 'published'
            ,width: 120
            ,fixed: true
            ,editor: { xtype: 'combo-boolean' ,renderer: 'boolean' }
        }]
        ,paging: true
        ,listeners: {
            afteredit: this.refresh
            ,afterrender: this.onAfterRender
            ,scope: this
        }
    });
    MODx.grid.RecentlyEditedResourcesByUser.superclass.constructor.call(this,config);
};
Ext.extend(MODx.grid.RecentlyEditedResourcesByUser,MODx.grid.Grid,{
    preview: function() {
        window.open(this.menu.record.link);
    }
    ,refresh: function() {
        var tree = Ext.getCmp('modx-resource-tree');
        if (tree && tree.rendered) {
            tree.refresh();
        }
    }
    // Workaround to resize the grid when in a dashboard widget
    ,onAfterRender: function() {
        var cnt = Ext.getCmp('modx-content')
            // Dashboard widget "parent" (renderTo)
            ,parent = Ext.get('modx-grid-user-recent-resource');

        if (cnt && parent) {
            cnt.on('afterlayout', function(elem, layout) {
                var width = parent.getWidth();
                // Only resize when more than 500px (else let's use/enable the horizontal scrolling)
                if (width > 500) {
                    this.setWidth(width);
                }
            }, this);
        }
    }
});
Ext.reg('modx-grid-user-recent-resource',MODx.grid.RecentlyEditedResourcesByUser);
