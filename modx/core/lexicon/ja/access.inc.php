<?php
/**
 * Access English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['access_category_management_msg'] = 'エレメントへのユーザーグループメンバーのアクセスを管理します。カテゴリーを介する管理、または任意のアクセスポリシーを適用できます。';
$_lang['access_category_create'] = 'Add Category Access';
$_lang['access_category_err_ae'] = '指定されたカテゴリーのアクセス制御リストは既に存在します。';
$_lang['access_category_err_nf'] = 'カテゴリーのアクセス制御リストが見つかりませんでした。';
$_lang['access_category_err_ns'] = 'カテゴリーのアクセス制御リストが指定されていません。';
$_lang['access_category_err_remove'] = 'An error occurred while trying to delete the Category ACL.';
$_lang['access_category_remove'] = 'Delete Category Access';
$_lang['access_category_update'] = 'Edit Category Access';
$_lang['access_confirm_remove'] = 'Are you sure you want to delete this security access control record?';
$_lang['access_context_management_msg'] = 'ユーザーグループメンバーをコンテキストとオプションアクセスポリシーへアクセス可能にする';
$_lang['access_context_create'] = 'Add Context Access';
$_lang['access_context_err_ae'] = '指定されたコンテキストへのアクセス制御リストは既に存在します。';
$_lang['access_context_err_nf'] = 'コンテキストのアクセス制御リストが見つかりませんでした。';
$_lang['access_context_err_ns'] = 'コンテキストのアクセス制御リストが指定されていません。';
$_lang['access_context_err_remove'] = 'An error occurred while trying to delete the Context ACL.';
$_lang['access_context_remove'] = 'Delete Context Access';
$_lang['access_context_update'] = 'Edit Context Access';
$_lang['access_err_ae'] = 'アクセス制御リストは既に存在しています。';
$_lang['access_err_create_md'] = 'アクセス制御リストを生成できません。データが消失しています。';
$_lang['access_err_nf'] = 'アクセス制御リストを特定できませんでした。';
$_lang['access_err_remove'] = 'An error occurred while trying to delete the ACL!';
$_lang['access_err_save'] = 'アクセス制御リスト保存中のエラー';
$_lang['access_grid_empty'] = '表示するアクセス制御リストが存在しません。';
$_lang['access_grid_paginate'] = '{0} - {1} 中 {2}のアクセス制御リストを表示';
$_lang['access_namespace_create'] = 'Add Namespace Access';
$_lang['access_namespace_remove'] = 'Delete Namespace Access';
$_lang['access_namespace_update'] = 'Edit Namespace Access';
$_lang['access_permissions'] = 'アクセス許可';
$_lang['access_permissions_add_document_group'] = 'ドキュメントグループを作成';
$_lang['access_permissions_add_user_group'] = 'ユーザーグループを作成';
$_lang['access_permissions_documents_in_group'] = '<strong>グループ内ドキュメント:</strong> ';
$_lang['access_permissions_documents_tab'] = 'Here you can see which document groups have been set up. You can also create new groups, rename groups, delete groups and see which documents are in the different groups (hover over the id of the document to see its name). To add a document to a group or delete a document from a group, edit the document directly.';
$_lang['access_permissions_document_groups'] = 'ドキュメントグループ';
$_lang['access_permissions_introtext'] = 'ユーザーグループとドキュメントグループを管理します。ここでユーザーグループまたはドキュメントグループを作ると、ユーザ編集画面またはドキュメント編集画面で所属グループを選択できるようになります。また、ユーザーグループとドキュメントグループをここで関連付けることができます。つまり誰がどのドキュメントをという関連付けをここで行ないます。利用できる機能を制限・管理する「ロール」と違い、当機能ではコンテンツ（ドキュメント）対象の権限を管理します。<br />ロール管理とは区別されているため、同じユーザーグループ内に「強い権限を持つユーザー」や「限定された権限を持つユーザー」を自由に混在させることができます。<br />※「ツール」→「グローバル設定」→「詳細設定」の「アクセス権限設定の使用」を「いいえ」にすると、グループ設定を経由しない運用になります。信用できる少数のメンバーでシンプルにサイトを管理運用したい場合は参考にしてください。';
$_lang['access_permissions_links'] = 'グループリンク';
$_lang['access_permissions_links_tab'] = 'This is where we specify which user groups are given access (i.e. can edit or create children) for the document groups. To link a document group to a user group, select the group from the dropdown, and click on \'Link\'. To delete the link for a certain group, press \'Delete ->\'. This will immediately delete the link.';
$_lang['access_permissions_no_documents_in_group'] = '無し';
$_lang['access_permissions_no_users_in_group'] = '無し';
$_lang['access_permissions_off'] = '<span class="warning">アクセス権限設定（グローバル設定→詳細設定）が無効になっています。</span> アクセス権限を有効にしない限り、全ての変更作業は無視されます。';
$_lang['access_permissions_users_in_group'] = '<strong>グループ内ユーザー:</strong> ';
$_lang['access_permissions_users_tab'] = 'Here you can see which user groups have been set up. You can also create new groups, rename groups, delete groups and see which users are members of the different groups. To add a new user to a group or to delete a user from a group, edit the user directly.';
$_lang['access_permissions_user_group'] = 'ユーザーグループ:';
$_lang['access_permissions_user_groups'] = 'ユーザーグループ:';
$_lang['access_permissions_user_group_access'] = 'このユーザーグループがアクセス権を持つリソースグループ：';
$_lang['access_permissions_user_message'] = 'ユーザーが所属するグループを選択できます。<br>ユーザーグループのリストはドラッグ&ドロップで並べ替えることができます。一番上（ランク0）のユーザーグループがこのユーザーのプライマリーグループとなります。この設定はダッシュボードの表示内容などに影響を与えます。';
$_lang['access_permission_denied'] = 'このドキュメントにアクセスする権限がありません。';
$_lang['access_permission_parent_denied'] = 'ここにドキュメントを作成する権限がありません。';
$_lang['access_policy_err_nf'] = 'アクセスポリシーが見つかりませんでした。.';
$_lang['access_policy_err_ns'] = 'アクセスポリシーが指定されていません。';
$_lang['access_policy_grid_empty'] = '表示するポリシーがありません。';
$_lang['access_policy_grid_paginate'] = '{0} - {1} 中 {2}のポリシーを表示';
$_lang['access_resourcegroup_management_msg'] = 'ユーザーグループに対して、リソースグループへのアクセス権および設定してください。';
$_lang['access_resourcegroup_create'] = 'Add Resource Group Access';
$_lang['access_resourcegroup_remove'] = 'Delete Resource Group Access';
$_lang['access_resourcegroup_update'] = 'Edit Resource Group Access';
$_lang['access_rgroup_err_ae'] = '指定されたリソースグループのアクセス制御リストは既に存在します。';
$_lang['access_rgroup_err_nf'] = 'リソースグループのアクセス制御リストが見つかりませんでした。';
$_lang['access_rgroup_err_ns'] = 'リソースグループのアクセス制御リストが指定されていません。';
$_lang['access_rgroup_err_remove'] = 'An error occurred while trying to delete the Resource Group ACL.';
$_lang['access_source_create'] = 'Add Media Source Access';
$_lang['access_source_err_ae'] = 'An ACL for that Media Source already exists.';
$_lang['access_source_remove'] = 'Delete Media Source Access';
$_lang['access_source_update'] = 'Edit Media Source Access';
$_lang['access_to_contexts'] = 'コンテキストへアクセス';
$_lang['access_to_resource_groups'] = 'リソースグループへアクセス';
$_lang['access_type_err_ns'] = 'ターゲットタイプもしくはIDタイプが特定されていません。';
$_lang['authority'] = '特権レベル';
$_lang['authority_err_ns'] = 'ミニマムロールを指定してください。';
$_lang['category'] = 'カテゴリー';
$_lang['category_add'] = 'カテゴリーを追加';
$_lang['filter_by_context'] = 'コンテキストで絞り込む';
$_lang['filter_by_policy'] = 'ポリシーで絞り込む';
$_lang['filter_by_resource_group'] = 'リソースグループで絞り込む';
$_lang['filter_by_category'] = 'カテゴリーで絞り込む';
$_lang['filter_by_source'] = 'メディアソースで絞り込む';
$_lang['no_policy_option'] = ' （ポリシーなし） ';
$_lang['permissions_in_policy'] = '選択されたポリシーに対するパーミッション';
$_lang['resource_group'] = 'リソースグループ';
$_lang['resource_group_add'] = 'リソースグループを追加';
$_lang['resource_group_access_remove'] = 'Delete Resource from Group';
$_lang['resource_group_access_remove_confirm'] = 'Are you sure you want to delete this resource from the resource group?';
$_lang['resource_group_create'] = 'リソースグループを作成';
$_lang['resource_group_err_ae'] = '同名のリソースグループが存在します。';
$_lang['resource_group_err_create'] = 'リソースグループの作成中にエラーが発生しました。';
$_lang['resource_group_err_nf'] = 'リソースグループが見つかりませんでした。';
$_lang['resource_group_err_ns'] = 'リソースグループが指定されていません。';
$_lang['resource_group_err_remove'] = 'An error occurred while trying to delete the resource group.';
$_lang['resource_group_remove'] = 'リソースグループの削除';
$_lang['resource_group_remove_confirm'] = 'Are you sure you want to delete the resource group: "[[+resource_group]]"?';
$_lang['resource_group_resource_err_ae'] = '指定されたリソースは既にリソースグループに存在します。';
$_lang['resource_group_resource_err_create'] = 'リソースをリソースグループへ配置中にエラーが発生しました。';
$_lang['resource_group_resource_err_nf'] = '指定されたリソースはリソースグループに含まれていません。';
$_lang['resource_group_resource_err_remove'] = 'An error occurred while trying to delete the resource from the resource group.';
$_lang['resource_group_untitled'] = '無名のリソースグループ';
$_lang['resource_group_update'] = 'Edit Resource Group';
$_lang['resource_group_access_contexts'] = 'A comma-separated list of Contexts that the Resource Group should pertain to for the following options.';
$_lang['resource_group_automatic_access'] = 'アクセスウィザード';
$_lang['resource_group_automatic_access_desc'] = 'Note: You may have to flush sessions after creating the Resource Group if you check any of the options below.';
$_lang['resource_group_access_admin'] = 'Automatically Give Administrator Group Access';
$_lang['resource_group_access_admin_desc'] = 'チェックした場合、上記コンテキストでこのリソースグループに対し、Adminstratorグループの表示と編集アクセス権を付与します。';
$_lang['resource_group_access_anon'] = '匿名アクセス権の自動付与';
$_lang['resource_group_access_anon_desc'] = 'チェックした場合、上記コンテキストでこのリソースグループに対し、非ログインユーザーの表示アクセス権を付与します。';
$_lang['resource_group_access_parallel'] = 'パラレルユーザーグループの作成';
$_lang['resource_group_access_parallel_desc'] = 'チェックした場合、自動的に同名のユーザーグループが作成され、上記コンテキストでこのリソースグループに対する表示アクセス権を付与されます。';
$_lang['resource_group_access_ugs'] = '他ユーザーグループアクセス権の自動付与';
$_lang['resource_group_access_ugs_desc'] = 'ユーザーグループ名をカンマ区切りのリストで指定します。指定した場合、上記コンテキストでこのリソースグループに対し、指定したグループへ表示アクセス権が付与されます。';
$_lang['roles_msg'] = 'A role is, by definition, a position or status one holds within a certain situation. They can be used to group Users into a position or status within a User Group. Roles in MODX also have what is called "Authority". This is a number value that can be any valid integer. Authority levels are "inheritable downward", in the sense that a Role with Authority 1 will inherit any and all Group Policies assigned to itself, and to any Roles with higher Authority level than 1.';
$_lang['source_add'] = 'メディアソースの追加';
$_lang['namespace_add'] = 'Add Namespace';

$_lang['filter_by_namespace'] = 'Filter by Namespace...';

$_lang['user_group_aw'] = 'アクセスウィザード';
$_lang['user_group_aw_desc'] = 'Note: You may have to flush sessions after creating the User Group if you check any of the options below.';
$_lang['user_group_aw_contexts'] = 'コンテキスト';
$_lang['user_group_aw_contexts_desc'] = 'このユーザーグループが表示可能なコンテキストを、カンマ区切りのリストで指定。';
$_lang['user_group_aw_manager_policy'] = '管理画面ポリシー';
$_lang['user_group_aw_manager_policy_desc'] = 'ポリシーは、管理画面での編集をユーザーグループに与えます。管理画面へのアクセス権を付与したくない場合、（no policy）を選択してください。';
$_lang['user_group_aw_users'] = 'ユーザー';
$_lang['user_group_aw_users_desc'] = 'このユーザーグループに追加する、ユーザー名のカンマ区切りリストを指定。You can use the format username:role to set the role; otherwise, Member will be assumed.';
$_lang['user_group_aw_resource_groups'] = 'リソースグループ';
$_lang['user_group_aw_resource_groups_desc'] = '上で指定したコンテキストでのアクセスを与える、リソースグループのカンマ区切りリストを指定。';
$_lang['user_group_aw_categories'] = 'エレメントのカテゴリー';
$_lang['user_group_aw_categories_desc'] = '上で指定したコンテキストでのアクセスを与える、エレメントのカテゴリーのカンマ区切りリストを指定。';
$_lang['user_group_aw_parallel'] = 'パラレルリソースグループの作成';
$_lang['user_group_aw_parallel_desc'] = 'チェックした場合、同じ名前のリソースグループを自動的に作成し、上で指定されたコンテキストに、このユーザーグループの表示権限を付与します。';

$_lang['user_group_category_access'] = 'エレメントのカテゴリー';
$_lang['user_group_category_access_msg'] = 'Set the Element Categories this User Group can access.';
$_lang['user_group_category_authority_desc'] = 'The minimum Role that will have access to the Permissions in the selected Policy for this context. Roles with stronger Authority （lower numbers） will inherit this access as well. Most situations can leave this at "Member".';
$_lang['user_group_category_category_desc'] = 'The Category to grant access to.';
$_lang['user_group_category_context_desc'] = 'The Context to target for Elements with the above Category associated to them.';
$_lang['user_group_category_err_ae'] = 'User Group already has access to that Category.';
$_lang['user_group_category_policy_desc'] = 'The Policy to apply to this Context with Elements in the Category for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';
$_lang['user_group_category_remove_confirm'] = 'Are you sure you want to delete this Category from this User Group?';

$_lang['user_group_context_access'] = 'コンテキスト';
$_lang['user_group_context_access_msg'] = 'Set the Contexts this User Group can access.';
$_lang['user_group_context_authority_desc'] = 'The minimum Role that will have access to the Permissions in the selected Policy for this context. Roles with stronger Authority （lower numbers） will inherit this access as well. Most situations can leave this at "Member".';
$_lang['user_group_context_context_desc'] = 'The Context to grant access to.';
$_lang['user_group_context_policy_desc'] = 'The Policy to apply to this Context for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';
$_lang['user_group_context_err_ae'] = 'ユーザーグループは既にコンテキストへのアクセス権を持っています。';
$_lang['user_group_context_remove_confirm'] = 'Are you sure you want to delete this Context from this User Group?';

$_lang['user_group_resourcegroup_access'] = 'リソースグループ';
$_lang['user_group_resourcegroup_access_msg'] = 'Set the Resource Groups this User Group can access.';
$_lang['user_group_resourcegroup_authority_desc'] = 'The minimum Role that will have access to the Permissions in the selected Policy for this context. Roles with stronger Authority （lower numbers） will inherit this access as well. Most situations can leave this at "Member".';
$_lang['user_group_resourcegroup_context_desc'] = 'The Context to target for items with the above Resource Group associated to them.';
$_lang['user_group_resourcegroup_err_ae'] = 'ユーザーグループは既にそのリソースグループへのアクセス権があります。';
$_lang['user_group_resourcegroup_policy_desc'] = 'The Policy to apply to this Context with Resources in the Resource Group for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';
$_lang['user_group_resourcegroup_remove_confirm'] = 'Are you sure you want to delete this Resource Group from this User Group?';
$_lang['user_group_resourcegroup_resource_group_desc'] = 'アクセスを許可するリソースグループを指定します。';

$_lang['user_group_source_access'] = 'Media Sources';
$_lang['user_group_source_access_msg'] = 'Set the Media Sources this User Group can access.';
$_lang['user_group_source_authority_desc'] = 'このポリシーを適用する最低限のロール。より強い権限を持ったロール（特権レベルの数字が小さいもの）はこのポリシーを継承します。多くの場合、この項目はメンバー（特権レベル9999）によるアクセスの制限に使われるでしょう。';
$_lang['user_group_source_err_ae'] = 'ユーザーグループは、すでにそのメディアソースへのアクセス権を与えられています。';
$_lang['user_group_source_policy_desc'] = 'The Policy to apply to this Media Source for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';
$_lang['user_group_source_remove_confirm'] = 'Are you sure you want to delete this Media Source from this User Group?';
$_lang['user_group_source_source_desc'] = 'メディアソースへのアクセス許可を付与します。';
$_lang['user_group_user_access_msg'] = 'このユーザーグループへ加えるユーザーを選択してください。';

$_lang['user_group_namespace_access'] = 'Namespaces';
$_lang['user_group_namespace_access_desc'] = 'Set the Namespaces this User Group can access.';

$_lang['user_group_namespace_namespace_desc'] = 'The Namespace to grant access to.';
$_lang['user_group_namespace_authority_desc'] = 'このポリシーを適用する最低限のロール。より強い権限を持ったロール（特権レベルの数字が小さいもの）はこのポリシーを継承します。多くの場合、この項目はメンバー（特権レベル9999）によるアクセスの制限に使われるでしょう。';
$_lang['user_group_namespace_policy_desc'] = 'The Policy to apply to this Namespace for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';

// Renamed, deprecated as of 3.0.4, remove in 3.1.0
$_lang['access_rgroup_remove'] = $lang['access_resourcegroup_remove'];
$_lang['access_rgroup_update'] = $lang['access_resourcegroup_update'];