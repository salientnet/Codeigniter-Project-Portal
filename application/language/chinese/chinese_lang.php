<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = '姓名';
$lang['options']              = '选项';
$lang['submit']               = '保存';
$lang['added_successfuly']    = '%s 添加成功.';
$lang['updated_successfuly']  = '%s 更新成功.';
$lang['edit']                 = '编辑 %s';
$lang['add_new']              = '添加新的 %s';
$lang['deleted']              = '%s 删除';
$lang['problem_deleting']     = '问题删除 %s';
$lang['is_referenced']        = '%s 的身份证已经被用过了.';
$lang['close']                = '关闭';
$lang['send']                 = '发出';
$lang['cancel']               = '取消';
$lang['go_back']              = '回顾';
$lang['error_uploading_file'] = '文件上传错误';
$lang['load_more']            = '加载更多';
$lang['cant_delete_default']  = '不能删除默认 %s';

# Invoice General
$lang['invoice_status_paid']                = '付款';
$lang['invoice_status_unpaid']              = '未付款';
$lang['invoice_status_overdue']             = '过期的';
$lang['invoice_status_not_paid_completely'] = '部分支付';

$lang['invoice_pdf_heading'] = '发票';

$lang['invoice_table_item_heading']            = '条款';
$lang['invoice_table_quantity_heading']        = '数量';
$lang['invoice_table_rate_heading']            = '估价';
$lang['invoice_table_tax_heading']             = '税款';
$lang['invoice_table_amount_heading']          = '总额';
$lang['invoice_subtotal']                      = '小计';
$lang['invoice_adjustment']                    = '调整';
$lang['invoice_total']                         = '总数';
$lang['invoice_vat']                           = '增值税税号';
$lang['invoice_bill_to']                       = '付款方';
$lang['invoice_data_date']                     = '发票日期:';
$lang['invoice_data_duedate']                  = '截止日期:';
$lang['invoice_received_payments']             = '交易';
$lang['invoice_no_payments_found']             = '这张发票未付款';
$lang['invoice_note']                          = '注解:';
$lang['invoice_payments_table_number_heading'] = '支付 #';
$lang['invoice_payments_table_mode_heading']   = '支付方式';
$lang['invoice_payments_table_date_heading']   = '日期';
$lang['invoice_payments_table_amount_heading'] = '总额';


# Announcements
$lang['announcement']                 = '通告';
$lang['announcement_lowercase']       = '通告';
$lang['announcements']                = '通告';
$lang['announcements_lowercase']      = '通告';
$lang['new_announcement']             = '新的通告';
$lang['announcement_name']            = '通告名称';
$lang['announcement_message']         = '消息';
$lang['announcement_show_to_staff']   = '显示员工';
$lang['announcement_show_to_clients'] = '显示客户';
$lang['announcement_show_my_name']    = '显示我的名字';

# Clients
$lang['clients']                               = '客户';
$lang['client']                                = '客户';
$lang['new_client']                            = '新客户';
$lang['client_lowercase']                      = '客户';
$lang['client_delete_tooltip']                 = '所有客户合同,工单,票据将被删除. 注: 如果想要找到被删除的客户发票. 你可以将这个发票的发票号码让另一个客户保存';
$lang['customer_delete_invoices_warning']      = '你不能删除有发票帐户的客户. 将所有的发票换到另一个客户，然后删除.';
$lang['client_firstname']                      = '姓';
$lang['client_lastname']                       = '名';
$lang['client_email']                          = '电子邮件';
$lang['client_company']                        = '公司';
$lang['client_vat_number']                     = '增值税税号';
$lang['client_address']                        = '地址';
$lang['client_city']                           = '城市';
$lang['client_postal_code']                    = '邮递区号';
$lang['client_state']                          = '省份';
$lang['client_password']                       = '密码';
$lang['client_password_change_populate_note']  = '注: 如果您填充这个字段，密码将被更改为该客户.';
$lang['client_password_last_changed']          = '最后修改密码:';
$lang['login_as_client']                       = '登录客户';
$lang['client_invoices_tab']                   = '发票';
$lang['contracts_invoices_tab']               = '合同';
$lang['contracts_tickets_tab']                 = '票';
$lang['contracts_notes_tab']                   = '备注';
$lang['client_invoice_number_table_heading']   = '发票 #';
$lang['client_invoice_date_table_heading']     = '日期';
$lang['client_invoice_due_date_table_heading'] = '截止日期';
$lang['client_string_table_heading']           = '客户';
$lang['client_amount_table_heading']           = '数量';
$lang['client_status_table_heading']           = '状态';
$lang['note_description']                      = '注意说明';

$lang['client_string_contracts_table_heading']      = '客户';
$lang['client_start_date_contracts_table_heading'] = '开始日期';
$lang['client_end_date_contracts_table_heading']    = '结束日期';
$lang['client_description_contracts_table_heading'] = '描述';
$lang['client_do_not_send_welcome_email']           = '请勿发送欢迎邮件';

$lang['clients_notes_table_description_heading'] = '描述';
$lang['clients_notes_table_addedfrom_heading']   = '添加';
$lang['clients_notes_table_dateadded_heading']   = '添加日期';

$lang['clients_list_full_name']   = '全称';
$lang['clients_list_last_login']  = '最后登录';

# Contracts
$lang['contracts']               = '合同';
$lang['contract']                = '合同';
$lang['new_contract']             = '新合同';
$lang['contract_lowercase']      = '合同';
$lang['contract_start_date']     = '开始日期';
$lang['contract_end_date']        = '结束日期';
$lang['contract_subject']         = '项目';
$lang['contract_description']     = '描述';
$lang['contract_subject_tooltip'] = '客户也可以看见项目';
$lang['contract_client_string']   = '客户';
$lang['contract_attach']          = '附加文件';

$lang['contract_list_client']     = '客户';
$lang['contract_list_subject']    = '项目';
$lang['contract_list_start_date']= '开始日期';
$lang['contract_list_end_date']   = '结束日期';

# Currencies
$lang['currencies']           = '货币';
$lang['currency']             = '货币';
$lang['new_currency']         = '新货币';
$lang['currency_lowercase']   = '货币';
$lang['base_currency_set']    = '这是你的基础货币.';
$lang['make_base_currency']   = '使用基础货币';
$lang['base_currency_string'] = '基本货币';

$lang['currency_list_name']   = '名称';
$lang['currency_list_symbol'] = '符号';


$lang['currency_add_edit_description'] = '货币名称';
$lang['currency_add_edit_rate']        = '符号';

$lang['currency_edit_heading'] = '编辑货币';
$lang['currency_add_heading']  = '添加新的货币';


# Department
$lang['departments']          = '部门';
$lang['department']           = '部门';
$lang['new_department']       = '新部门';
$lang['department_lowercase'] = '部门';

$lang['department_name']             = '部门名称';
$lang['department_email']            = '部门邮件';
$lang['department_hide_from_client'] = '隐藏的客户?';
$lang['department_list_name']        = '名称';

# Email Templates
$lang['email_templates']                        = '电子邮件模板';
$lang['email_template']                         = '电子邮件模板';
$lang['email_template_lowercase']               = '电子邮件模板';
$lang['email_templates_lowercase']              = '电子邮件模板';
$lang['email_template_ticket_fields_heading']   = '工单';
$lang['email_template_invoices_fields_heading'] = '发票';
$lang['email_template_clients_fields_heading']  = '客户';

$lang['template_name']                                      = '模板名称';
$lang['template_subject']                                   = '项目';
$lang['template_fromname']                                  = '姓名';
$lang['template_fromemail']                                 = '电子邮件';
$lang['send_as_plain_text']                                 = '发送纯文本';
$lang['email_template_disabed']                             = '禁用';
$lang['email_template_email_message']                       = '电子邮件消息';
$lang['available_merge_fields']                             = '可合并字段';
# Home
$lang['dashboard_string']                                   = '主面板';
$lang['home_latest_todos']                                  = '新的待办事项\'s';
$lang['home_no_latest_todos']                               = '暂不需要做的事项';
$lang['home_latest_finished_todos']                         = '最新完成的任务\'s';
$lang['home_no_finished_todos_found']                       = '发现没有完成所有的';
$lang['home_todo_heading']                                  = '做项目';
$lang['home_tickets_awaiting_reply_by_department']          = '各部门等待批复的工单';
$lang['home_tickets_awaiting_reply_by_status']              = '等待状态回复的工单';
$lang['home_this_week_events']                              = '本周的事情';
$lang['home_upcoming_events_next_week']                     = '下周即将举行的活动';
$lang['home_event_added_by']                                = '增加的事件';
$lang['home_public_event']                                  = '公共事件';
$lang['home_weekly_payment_records']                        = '每周付款记录';
$lang['home_weekend_ticket_opening_statistics']             = '每周空缺票统计';
# Newsfeed
$lang['whats_on_your_mind']                                 = '你有什么想法?';
$lang['new_post']                                           = '岗位';
$lang['newsfeed_upload_tooltip']                            = '提示：将文件移动至目标框上传';
$lang['newsfeed_all_departments']                           = '所有部门';
$lang['newsfeed_pin_post']                                  = '置顶信息';
$lang['newsfeed_unpin_post']                                = '取消置顶信息';
$lang['newsfeed_delete_post']                               = '删除';
$lang['newsfeed_published_post']                            = '发布时间';
$lang['newsfeed_you_like_this']                             = '你喜欢这个';
$lang['newsfeed_like_this']                                 = '喜欢这个';
$lang['newsfeed_one_other']                                 = '其他的';
$lang['newsfeed_you']                                       = '你';
$lang['newsfeed_and']                                       = '和';
$lang['newsfeed_you_and']                                   = '你 和';
$lang['newsfeed_like_this_saying']                          = '喜欢这个';
$lang['newsfeed_unlike_this_saying']                        = '不喜欢这个';
$lang['newsfeed_show_more_comments']                        = '显示更多评论';
$lang['comment_this_post_placeholder']                      = '评论这篇文章..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Coleques 谁喜欢这篇文章';
$lang['newsfeed_comment_likes_modal_heading']               = 'Coleques 谁喜欢这评论';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = '这篇文章仅能看到下列部门: %s';
# Invoice Items
$lang['invoice_items']                                      = '发票项目';
$lang['invoice_item']                                       = '发票项目';
$lang['new_invoice_item']                                   = '新的项目';
$lang['invoice_item_lowercase']                             = '发票项目';

$lang['invoice_items_list_description'] = '描述';
$lang['invoice_items_list_rate']        = '金额';
$lang['invoice_items_list_tax']         = '税额';

$lang['invoice_item_add_edit_description'] = '描述';
$lang['invoice_item_add_edit_rate']        = '金额';
$lang['invoice_item_add_edit_tax']         = '税额';
$lang['invoice_item_add_edit_tax_select']  = '选择税种';

$lang['invoice_item_edit_heading'] = '编辑项目';
$lang['invoice_item_add_heading']  = '添加新项';

# Invoices


$lang['invoices']                       = '发票';
$lang['invoice']                       = '发票';
$lang['invoice_lowercase']             = '发票';
$lang['create_new_invoice']             = '创建新的发票';
$lang['view_invoice']                 = '查看发票';
$lang['invoice_payment_recorded']       = '发票的付款记录';
$lang['invoice_payment_record_failed']  = '未记载付款发票';
$lang['invoice_sent_to_client_success'] = '给客户发送发票成功';
$lang['invoice_sent_to_client_fail']    = '发送发票失败';
$lang['invoice_reminder_send_problem']  = '发送发票过期提醒';
$lang['invoice_overdue_reminder_sent']  = '发票逾期提醒发送成功';

$lang['invoice_details']              = '发票明细';
$lang['invoice_view']               = '查看发票';
$lang['invoice_select_customer']      = '客户';
$lang['invoice_add_edit_number']      = '发票号';
$lang['invoice_add_edit_date']        = '发票日期';
$lang['invoice_add_edit_duedate']     = '截止日期';
$lang['invoice_add_edit_currency']    = '货币';
$lang['invoice_add_edit_client_note'] = '客户报告';
$lang['invoice_add_edit_admin_note']  = '请注意';

$lang['invoice_add_edit_search_item']  = '搜索项目';
$lang['invoices_toggle_table_tooltip'] = '查看完整表格';

$lang['edit_invoice_tooltip']                   = '编辑发票';
$lang['delete_invoice_tooltip']                 = '删除发票。注：所有关于本发票付款将被删除（如果有的话）.';
$lang['invoice_sent_to_email_tooltip']          = '发送电子邮件';
$lang['invoice_already_send_to_client_tooltip'] = '这张发票已发送给客户 %s';
$lang['send_overdue_notice_tooltip']            = '发送逾期公告';
$lang['invoice_view_activity_tooltip']         = '活动日志';
$lang['invoice_record_payment']                 = '支付记录';

$lang['invoice_send_to_client_modal_heading']    = '把这张发票发给客户';
$lang['invoice_send_to_client_attach_pdf']       = '附上发票PDF';
$lang['invoice_send_to_client_preview_template']= '预览电子邮件模板';

$lang['invoice_dt_table_heading_number']  = '发票 #';
$lang['invoice_dt_table_heading_date']    = '日期';
$lang['invoice_dt_table_heading_client']  = '客户';
$lang['invoice_dt_table_heading_duedate'] = '截止日期';
$lang['invoice_dt_table_heading_amount']  = '金额';
$lang['invoice_dt_table_heading_status']  = '状态';

$lang['record_payment_for_invoice']              = '付款记录';
$lang['record_payment_amount_received']          = '已收金额';
$lang['record_payment_date']                     = '付款日期';
$lang['record_payment_leave_note']               = '留个便条';
$lang['invoice_payments_received']               = '收到的款项';
$lang['invoice_record_payment_note_placeholder'] = '请注意';
$lang['no_payments_found']                       = '未发现该发票的付款';
$lang['invoice_email_link_text']               = '查看发票';

# Payments
$lang['payments']                             = '付款';
$lang['payment']                              = '付款';
$lang['payment_lowercase']                    = '付款';
$lang['payments_table_number_heading']        = '付款 #';
$lang['payments_table_invoicenumber_heading'] = '发票 #';
$lang['payments_table_mode_heading']          = '支付方式';
$lang['payments_table_date_heading']          = '日期';
$lang['payments_table_amount_heading']        = '金额';
$lang['payments_table_client_heading']        = '客户';
$lang['payment_not_exists']                   = '付款不存在';

$lang['payment_edit_for_invoice']     = '付款发票';
$lang['payment_edit_amount_received'] = '已收金额';
$lang['payment_edit_date']            = '付款日期';
$lang['payment_edit_lave_note']       = '留下的字条';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = '项目';
$lang['kb_article_add_edit_group']   = '分类';
$lang['kb_string']                   = '知识库';
$lang['kb_article']                  = '条款';
$lang['kb_article_lowercase']        = '条款';
$lang['kb_article_new_article']      = '新条款';
$lang['kb_article_disabled']         = '禁用';
$lang['kb_article_description']      = '条款描述';

$lang['kb_table']                      = '目录';
$lang['kb_no_articles_found']          = '没有knowledgbase找到的物品';
$lang['kb_dt_article_name']            = '条款名称';
$lang['kb_dt_group_name']              = '分类';
$lang['new_group']                     = '新建群组';
$lang['kb_group_add_edit_name']        = '组名';
$lang['kb_group_add_edit_description'] = '短描述';
$lang['kb_group_add_edit_disabled']    = '禁用';
$lang['kb_group_add_edit_note']        = '注：本组中的所有物品将被隐藏，如果检查禁用';
$lang['group_table_name_heading']      = '名称';
$lang['group_table_isactive_heading']  = '激活';
$lang['kb_no_groups_found']            = '没有找到的知识基础组';

# Mail Lists
$lang['mail_lists']                           = '邮件列表';
$lang['mail_list']                            = '邮件列表';
$lang['new_mail_list']                        = '新邮件列表';
$lang['mail_list_lowercase']                  = '邮件列表';
$lang['custom_field_deleted_success']         = '删除自定义字段';
$lang['custom_field_deleted_fail']            = '删除自定义字段的问题';
$lang['email_removed_from_list']              = '从邮件列表中删除';
$lang['email_remove_fail']                    = '邮件删除失败';
$lang['staff_mail_lists']                     = '员工的邮件列表';
$lang['clients_mail_lists']                   = '客户邮件列表';
$lang['mail_list_total_imported']             = '全部邮件输入: %s';
$lang['mail_list_total_duplicate']            = '全部重复的电子邮件: %s';
$lang['mail_list_total_failed_to_insert']     = '邮件未能添加: %s';
$lang['mail_list_total_invalid']              = '无效的电子邮件地址: %s';
$lang['cant_edit_mail_list']                  = '你不能编辑这个列表，这个列表是自动填充的';
$lang['mail_list_add_edit_name']              = '邮件列表名称';
$lang['mail_list_add_edit_customfield']       = '添加自定义字段';
$lang['mail_lists_viewing_emails']            = '查看邮件列表';
$lang['mail_lists_view_email_email_heading']  = '电子邮件';
$lang['mail_lists_view_email_date_heading']   = '添加日期';
$lang['add_new_email_to']                     = '添加新的电子邮件 %s';
$lang['import_emails_to']                     = '导入邮件 %s';
$lang['mail_list_new_email_edit_add_label']   = '电子邮件';
$lang['mail_list_import_file']                = '导入文件';
$lang['mail_list_available_custom_fields']    = '可自定义字段';
$lang['submit_import_emails']                 = '导入邮件';
$lang['btn_import_emails']                    = '导入邮件 (Excel)';
$lang['btn_add_email_to_list']                = '添加到该列表的电子邮件';
$lang['mail_lists_dt_list_name']              = '列表名称';
$lang['mail_lists_dt_datecreated']            = '创建日期';
$lang['mail_lists_dt_creator']                = '写信人';
$lang['email_added_to_mail_list_successfuly'] = '邮件已添加到列表';
$lang['email_is_duplicate_mail_list']         = '电子邮件已存在于此列表中';

# Media
$lang['media_files']            = '文件夹';

# Payment modes
$lang['new_payment_mode']       = '新的支付方式';
$lang['payment_modes']          = '支付方式';
$lang['payment_mode']           = '支付方式';
$lang['payment_mode_lowercase'] = '支付方式';
$lang['payment_modes_dt_name']  = '付款方式名称';

$lang['payment_mode_add_edit_name'] = '付款方式名称';
$lang['payment_mode_edit_heading']  = '编辑付款方式';
$lang['payment_mode_add_heading']   = '增加新的付款方式';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = '新的预定义的回复';
$lang['predefined_replies']                = '预定义回答';
$lang['predefined_reply']                  = '预定义的回复';
$lang['predefined_reply_lowercase']        = '预定义的回复';
$lang['predifined_replies_dt_name']        = '预定义的回复名称';
$lang['predifined_reply_add_edit_name']    = '预定义的回复名称';
$lang['predifined_reply_add_edit_content'] = '回复内容';

# Ticket Priorities
$lang['new_ticket_priority']           = '新的优先';
$lang['ticket_priorities']             = '工单的优先级';
$lang['ticket_priority']               = '工单优先';
$lang['ticket_priority_lowercase']     = '工单优先';
$lang['no_ticket_priorities_found']    = '没有发现优先级';
$lang['ticket_priority_dt_name']       = '工单优先的名称';
$lang['ticket_priority_add_edit_name'] = '优先级名称';

# Reports
$lang['kb_reports']                         = '知识库文章报告';
$lang['sales_reports']                      = '销售报告';
$lang['reports_choose_kb_group']            = '选择组';
$lang['reports_sales_select_report_type']   = '选择报告类型';
$lang['report_kb_yes']                      = '是';
$lang['report_kb_no']                       = '不是';
$lang['report_kb_no_votes']                 = '没有投票';
$lang['report_this_week_leads_conversions'] = '本周机会转换';
$lang['report_leads_sources_conversions']   = '来源';
$lang['report_leads_monthly_conversions']   = '每月';
$lang['sales_report_heading']               = '销售报告';
$lang['report_sales_type_income']           = '总收入';

$lang['report_sales_type_customer']                    = '客户报告';
$lang['report_sales_base_currency_select_explanation'] = '您需要选择货币，因为你必须使用不同货币的发票';
$lang['report_sales_from_date']                        = '从';
$lang['report_sales_to_date']                          = '至';


$lang['report_sales_months_all_time']      = '全部时间';
$lang['report_sales_months_six_months']    = '过去的6个月';
$lang['report_sales_months_twelve_months'] = '过去的12个月';
$lang['report_sales_months_custom']        = '关税';
$lang['reports_sales_generated_report']    = '生成的报告';



$lang['reports_sales_dt_customers_client']                = '客户';
$lang['reports_sales_dt_customers_total_invoices']        = '所有发票';
$lang['reports_sales_dt_items_customers_amount']          = '金额';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = '税后金额';

# Roles
$lang['new_role']           = '新角色';
$lang['all_roles']          = '所有的角色';
$lang['roles']              = '员工的角色';
$lang['role']               = '角色';
$lang['role_lowercase']     = '角色';
$lang['roles_total_users']  = '总用户: ';
$lang['roles_dt_name']      = '角色名字';
$lang['role_add_edit_name'] = '角色名字';

# Service
$lang['new_service']           = '新的服务';
$lang['services']              = '服务';
$lang['service']               = '服务';
$lang['service_lowercase']     = '服务';
$lang['services_dt_name']      = '服务名称';
$lang['service_add_edit_name'] = '服务名称';

# Settings
$lang['settings']                     = '设置';
$lang['settings_updated']             = '设置更新';
$lang['settings_save']                = '保存设置值';
$lang['settings_group_general']       = '基础设置';
$lang['settings_group_localization']  = '本土化';
$lang['settings_group_tickets']       = '工单';
$lang['settings_group_sales']         = '财务';
$lang['settings_group_email']         = '邮件';
$lang['settings_group_clients']       = '客户';
$lang['settings_group_newsfeed']      = '新鲜事';
$lang['settings_group_cronjob']       = 'Cron作业';

$lang['settings_yes']                                        = '是';
$lang['settings_no']                                         = '不是';
$lang['settings_clients_default_theme']                      = '违约客户主题';
$lang['settings_clients_allow_registration']                 = '允许客户注册';
$lang['settings_clients_allow_kb_view_without_registration'] = '允许不注册的知识库';

$lang['settings_cron_send_overdue_reminder']                 = '发送发票过期提醒';
$lang['settings_cron_send_overdue_reminder_tooltip']         = '发送电子邮件到客户时，逾期发票状态更新，逾期从cron作业';
$lang['automatically_send_invoice_overdue_reminder_after']   = '自动发送提醒（天）';
$lang['automatically_resend_invoice_overdue_reminder_after'] = '自动重新发送提醒（天）';

$lang['settings_email_host']      = 'SMTP主机';
$lang['settings_email_port']      = 'SMTP端口';
$lang['settings_email']           = 'SMTP电子邮件';
$lang['settings_email_password']  = 'SMTP密码';
$lang['settings_email_charset']   = '电子邮件字符集';
$lang['settings_email_signature'] = '电子邮件签名';

$lang['settings_general_company_logo']                = '公司标志';
$lang['settings_general_company_logo_tooltip']        = '推荐尺寸：150×32px';
$lang['settings_general_company_remove_logo_tooltip'] = '将公司的标志';
$lang['settings_general_company_name']                = '公司名称';
$lang['settings_general_company_main_domain']         = '公司的主要领域';
$lang['settings_general_use_knowledgebase']           = '利用知识库';
$lang['settings_general_use_knowledgebase_tooltip']   = '如果您允许该选项知识库将显示在客户上';
$lang['settings_general_tables_limit']                = '表格分页极限';
$lang['settings_general_default_staff_role']          = '缺省人员角色';
$lang['settings_general_default_staff_role_tooltip']  = '当您添加新的工作人员时，该角色将被默认选择';

$lang['settings_localization_date_format']      = '日期格式';
$lang['settings_localization_default_timezone'] = '默认时区';
$lang['settings_localization_default_language'] = '默认语言';

$lang['settings_newsfeed_max_file_upload_post']    = '最大文件上传';
$lang['settings_newsfeed_max_file_size']           = '最大文件大小（兆字节）';

$lang['settings_reminders_contracts']         = '合同到期提醒';
$lang['settings_reminders_contracts_tooltip'] = '过期提醒通知天数';

$lang['settings_tickets_use_services']             = '使用服务';
$lang['settings_tickets_max_attachments']          = '最高票的附件';
$lang['settings_tickets_allow_departments_access'] = '让员工只能进入员工部门的票';
$lang['settings_tickets_allowed_file_extensions']  = '允许附件文件扩展名';

$lang['settings_sales_general']                                    = '基础设置';
$lang['settings_sales_general_note']                               = '基础设置';
$lang['settings_sales_invoice_prefix']                             = '发票号码前缀';
$lang['settings_sales_decimal_separator']                          = '小数点分隔符';
$lang['settings_sales_thousand_separator']                         = '千位分隔符';
$lang['settings_sales_currency_placement']                         = '货币安置';
$lang['settings_sales_currency_placement_before']                  = '在金额前';
$lang['settings_sales_currency_placement_after']                   = '在金额后';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = '要求客户登录查看发票';
$lang['settings_sales_next_invoice_number']                        = '下一个发票号码';
$lang['settings_sales_next_invoice_number_tooltip']                = '如果你想开始从开始此字段设置为1';
$lang['settings_sales_decrement_invoice_number_on_delete']         = '删除发票号码';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '当上次发票被删除时，你要减少发票号码吗？如果设置此选项是在发票删除下一个发票号码为15的发票号码将减少未来14未来发票如果设置为NO的数量将保持15';
$lang['settings_sales_invoice_number_format']                      = '发票号码格式';
$lang['settings_sales_invoice_number_format_year_based']           = '去年的基础';
$lang['settings_sales_invoice_number_format_number_based']         = '数量为基础（1 00000）';
$lang['settings_sales_invoice_year']                               = '发票（年/ 00000年1）';
$lang['settings_sales_invoice_year_tooltip']                       = '现行发票年度。重置这个新年到来时';

$lang['settings_sales_company_info_heading'] = '公司';
$lang['settings_sales_company_info_note']    = '此信息将显示在发票/报价/付款和其他PDF文件在公司的信息是必需的';
$lang['settings_sales_company_name']         = '公司名称';
$lang['settings_sales_address']              = '地址';
$lang['settings_sales_city']                 = '城市';
$lang['settings_sales_country_code']         = '国家代码';
$lang['settings_sales_postal_code']          = '邮递区号';
$lang['settings_sales_phonenumber']          = '电话';

# Leads
$lang['new_lead']       = '新销售机会';
$lang['leads']          = '销售机会';
$lang['lead']           = '销售机会';
$lang['lead_lowercase'] = '销售机会';
$lang['leads_all']      = '全部';

$lang['leads_canban_notes']  = '注：%';
$lang['leads_canban_source'] = '来源：%';

$lang['lead_new_source']            = '新来源';
$lang['lead_sources']               = '机会的来源';
$lang['lead_source']                = '机会的来源';
$lang['lead_source_lowercase']      = '机会的来源';
$lang['leads_sources_not_found']    = '没有来源';
$lang['leads_sources_table_name']   = '来源名称';
$lang['leads_source_add_edit_name'] = '来源名称';

$lang['lead_new_status']         = '新机会状态';
$lang['lead_statuss']            = '机会地位';
$lang['lead_status']             = '机会地位';
$lang['lead_status_lowercase']   = '机会地位';
$lang['leads_status_table_name'] = '状态名称';

$lang['leads_status_add_edit_name']  = '状态名称';
$lang['leads_status_add_edit_order'] = '排序';

$lang['lead_statuses_not_found']      = '无机会状态发现';
$lang['leads_search']                 = '搜索引';

$lang['leads_table_total'] = '总线索：%';

$lang['leads_dt_name']         = '名字';
$lang['leads_dt_email']        = '电子邮件';
$lang['leads_dt_phonenumber']  = '电话';
$lang['leads_dt_assigned']     = '分配';
$lang['leads_dt_status']       = '状态';
$lang['leads_dt_last_contact'] = '最后联系';

$lang['lead_add_edit_name']                 = '名字';
$lang['lead_add_edit_email']                = '电子邮件地址';
$lang['lead_add_edit_phonenumber']          = '电话';
$lang['lead_add_edit_source']               = '来源';
$lang['lead_add_edit_status']               = '机会地位';
$lang['lead_add_edit_assigned']             = '分配';
$lang['lead_add_edit_datecontacted']        = '联系时间';
$lang['lead_add_edit_contected_today']      = '今天已联系';
$lang['lead_add_edit_activity']             = '日志';
$lang['lead_add_edit_notes']                = '备注';
$lang['lead_add_edit_add_note']             = '添加备注';
$lang['lead_not_contacted']                 = '没有联系过';
$lang['lead_add_edit_contected_this_lead']  = '已联系';
$lang['lead_confirmation_canban_contacted'] = '有没有联系过？';

# Misc
$lang['activity_log_when_cron_job'] = 'cron作业';
$lang['access_denied']              = '访问拒绝';
$lang['prev']                       = '上一页';
$lang['next']                       = '下一页';

# Datatables
$lang['dt_paginate_first']          = '第一';
$lang['dt_paginate_last']           = '最后';
$lang['dt_paginate_next']           = '下一个';
$lang['dt_paginate_previous']       = '以前';
$lang['dt_empty_table']             = '没有找到{0}';
$lang['dt_search']                  = '搜索:';
$lang['dt_zero_records']            = '未找到匹配记录';
$lang['dt_loading_records']         = '加载…';
$lang['dt_length_menu']             = '显示_MENU_ ';
$lang['dt_info_filtered']           = '（从_MAC_总过滤{0}）';
$lang['dt_info_empty']              = '显示0至0 0{0}';
$lang['dt_info']                    = '显示_START_到_TOTAL_的_END_{0}';
$lang['dt_empty_table']             = '没有找到{0}';
$lang['dt_sort_ascending']          = '激活排序列';
$lang['dt_sort_descending']         = '激活排序列降';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '发送发票过期提醒';

# Weekdays
$lang['wd_monday']    = '星期一';
$lang['wd_tuesday']   = '星期二';
$lang['wd_thursday']  = '星期四';
$lang['wd_wednesday'] = '星期三';
$lang['wd_friday']    = '星期五';
$lang['wd_saturday']  = '星期六';
$lang['wd_sunday']    = '星期日';

# Admin Left Sidebar
$lang['als_dashboard'] = '主面板';
$lang['als_clients']   = '客户';
$lang['als_leads']     = '销售机会';

$lang['als_contracts'] = '合同';

$lang['als_all_tickets'] = '所有的工单';
$lang['als_sales']       = '销售';

$lang['als_staff'] = '工作人员';
$lang['als_tasks'] = '任务';
$lang['als_kb']    = '知识库';

$lang['als_surveys']               = '调查';
$lang['als_media']                 = '文件';
$lang['als_reports']               = '报告';
$lang['als_reports_sales_submenu'] = '销售';
$lang['als_reports_leads_submenu'] = '机会';
$lang['als_kb_articles_submenu']   = '知识库文章';
$lang['als_utilities']             = '工具';
$lang['als_announcements_submenu'] = '通告';
$lang['als_mail_lists_submenu']    = '邮件列表';
$lang['als_calendar_submenu']      = '日历';
$lang['als_activity_log_submenu']  = '活动日志';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = '工单';
$lang['acs_ticket_priority_submenu']           = '工单优先';
$lang['acs_ticket_statuses_submenu']           = '工单的状态';
$lang['acs_ticket_predefined_replies_submenu'] = '预设回复';
$lang['acs_ticket_services_submenu']           = '服务';
$lang['acs_departments']                       = '部门';
$lang['acs_leads']                             = '机会';
$lang['acs_leads_sources_submenu']             = '来源';
$lang['acs_leads_statuses_submenu']            = '状态';
$lang['acs_sales_taxes_submenu']               = '税额';
$lang['acs_sales_currencies_submenu']          = '货币';
$lang['acs_sales_payment_modes_submenu']       = '支付方式';
$lang['acs_email_templates']                   = '邮件模板';
$lang['acs_roles']                             = '角色';
$lang['acs_settings']                          = '设置';

# Tickets
$lang['new_ticket']                                         = '打开新的工单';
$lang['tickets']                                            = '工单';
$lang['ticket']                                             = '工单';
$lang['ticket_lowercase']                                   = '工单';
$lang['support_tickets']                                    = '工单';
$lang['support_ticket']                                     = '工单';
$lang['ticket_settings_to']                                 = '到';
$lang['ticket_settings_email']                              = '邮件地址';
$lang['ticket_settings_departments']                        = '部门';
$lang['ticket_settings_service']                            = '服务';
$lang['ticket_settings_priority']                           = '优先级';
$lang['ticket_settings_subject']                            = '项目';
$lang['ticket_settings_assign_to']                          = '分配工单（默认为分配给当前用户）';
$lang['ticket_settings_assign_to_you']                      = '你';
$lang['ticket_settings_select_client']                      = '选择客户';
$lang['ticket_add_body']                                    = '工单内容';
$lang['ticket_add_attachments']                             = '附件';
$lang['ticket_no_reply_yet']                                = '还没有回复';
$lang['new_ticket_added_succesfuly']                        = '工单 #%s 添加成功';
$lang['replied_to_ticket_succesfuly']                       = '工单 #%s 回复成功';
$lang['ticket_settings_updated_successfuly']                = '工单设置更新成功';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = '票务设置成功更新 - 分配给部门 %s';
$lang['ticket_dt_subject']                                  = '项目';
$lang['ticket_dt_department']                               = '部门';
$lang['ticket_dt_service']                                  = '服务';
$lang['ticket_dt_submitter']                                = '客户';
$lang['ticket_dt_status']                                   = '状态';
$lang['ticket_dt_priority']                                 = '优先级';
$lang['ticket_dt_last_reply']                               = '最后回复';

$lang['ticket_single_add_reply']                  = '添加回复';
$lang['ticket_single_add_note']                   = '添加备注';
$lang['ticket_single_other_user_tickets']         = '其他的工单';
$lang['ticket_single_settings']                   = '设置';
$lang['ticket_single_priority']                   = '优先级：%';
$lang['ticket_single_last_reply']                 = '最后回答：%';
$lang['ticket_single_change_status_top']          = '改变现状';
$lang['ticket_single_ticket_note_by']             = '工单被 %s 备注';
$lang['ticket_single_note_added']                 = '注：%';
$lang['ticket_single_change_status']              = '改变工单状态';
$lang['ticket_single_assign_to_me_on_update']     = '自动把工单分配给我';
$lang['ticket_single_insert_predefined_reply']    = '插入预设置的回复';
$lang['ticket_single_insert_knowledge_base_link'] = '插入知识库链接';
$lang['ticket_single_attachments']                = '附件';
$lang['ticket_single_add_response']               = '添加的回复';
$lang['ticket_single_note_heading']               = '备注';
$lang['ticket_single_add_note']                   = '添加备注';
$lang['ticket_settings_none_assigned']            = '没有';
$lang['ticket_status_changed_successfuly']        = '工单状态已改变';
$lang['ticket_status_changed_fail']               = '更改状态发生错误';

$lang['ticket_staff_string']                    = '员工';
$lang['ticket_client_string']                   = '客户';
$lang['ticket_posted']                          = '发送人：%';
$lang['ticket_insert_predefined_reply_heading'] = '插入预设置的回复';
$lang['ticket_kb_link_heading']                 = '插入知识库链接';
$lang['ticket_access_by_department_denied']     = '你没有权访问此工单，该工单属于其他部门';

# Staff
$lang['new_staff']                       = '新加入的成员';
$lang['staff_members']                   = '工作人员';
$lang['staff_member']                    = '工作人员';
$lang['staff_member_lowercase']          = '工作人员';
$lang['staff_profile_updated']           = '你的个人资料已经更新';
$lang['staff_old_password_incorect']     = '您的旧密码不正确';
$lang['staff_password_changed']          = '您的密码已更改';
$lang['staff_problem_changing_password'] = '更改有误的密码';
$lang['staff_profile_string']            = '个人档案';

$lang['staff_cant_remove_main_admin']          = '无法删除主管理员';
$lang['staff_cant_remove_yourself_from_admin'] = '你不能删除自己的管理员角色';

$lang['staff_dt_name']       = '全称';
$lang['staff_dt_email']      = '电子邮件';
$lang['staff_dt_last_Login'] = '最后登录';
$lang['staff_dt_active']     = '有效';

$lang['staff_add_edit_firstname']             = '姓';
$lang['staff_add_edit_lastname']              = '名字';
$lang['staff_add_edit_email']                 = '电子邮件';
$lang['staff_add_edit_phonenumber']           = '电话';
$lang['staff_add_edit_facebook']              = 'Facebook账号';
$lang['staff_add_edit_linkedin']              = 'Linkedin账号';
$lang['staff_add_edit_skype']                 = 'Skype账号';
$lang['staff_add_edit_departments']           = '部门';
$lang['staff_add_edit_role']                  = '角色';
$lang['staff_add_edit_permissions']           = '权限';
$lang['staff_add_edit_administrator']         = '管理员';
$lang['staff_add_edit_password']              = '密码';
$lang['staff_add_edit_password_note']         = '注：如果您输入此字段，该成员将更改密码';
$lang['staff_add_edit_password_last_changed'] = '上次更改密码';
$lang['staff_add_edit_notes']                 = '备注';
$lang['staff_add_edit_note_description']      = '备注说明';

$lang['staff_notes_table_description_heading'] = '备注';
$lang['staff_notes_table_addedfrom_heading']   = '添加';
$lang['staff_notes_table_dateadded_heading']   = '添加日期';

$lang['staff_admin_profile']         = '这是管理配置文件';
$lang['staff_profile_notifications'] = '通知';
$lang['staff_profile_departments']   = '部门';

$lang['staff_edit_profile_image']                     = '轮廓图片';
$lang['staff_edit_profile_your_departments']          = '你的部门';
$lang['staff_edit_profile_change_your_password']      = '更改您的密码';
$lang['staff_edit_profile_change_old_password']       = '旧密码';
$lang['staff_edit_profile_change_new_password']       = '新密码';
$lang['staff_edit_profile_change_repet_new_password'] = '重复新密码';

# Surveys
$lang['new_survey']                    = '新的调查';
$lang['surveys']                       = '调查';
$lang['survey']                        = '调查';
$lang['survey_lowercase']              = '调查';
$lang['survey_no_mail_lists_selected'] = '没有选择邮件列表';
$lang['survey_send_success_note']      = '所有调查的电子邮件(% s)将通过CRON作业发送间隔5分钟';
$lang['survey_result']                 = '调查结果：%s';
$lang['question_string']               = '问题';
$lang['question_field_string']         = '菲尔德';

$lang['survey_list_view_tooltip']         = '看法的调查';
$lang['survey_list_view_results_tooltip'] = '查看结果';

$lang['survey_add_edit_subject']                   = '调查项目';
$lang['survey_add_edit_email_description']         = '调查描述（电子邮件描述)';
$lang['survey_include_survey_link']                = '包括调查链接在描述';
$lang['survey_available_mail_lists_custom_fields'] = '从电子邮件列表可用自定义字段';
$lang['survey_mail_lists_custom_fields_tooltip']   = '自定义字段可用于电子邮件编辑器。提示：点击电子邮件编辑器，然后从下拉菜单中选择要附加自动.';
$lang['survey_add_edit_short_description_view']    = '调查简短描述（视图描述）';
$lang['survey_add_edit_from']                      = '（不同规格的电子邮件）';
$lang['survey_add_edit_redirect_url']              = '调查重定向网址';
$lang['survey_add_edit_red_url_note']              = '当用户完成调查，被重定向（空白留给这个网站url）';
$lang['survey_add_edit_disabled']                  = '禁用';
$lang['survey_add_edit_only_for_logged_in']        = '只记录参与者（员工，客户）';
$lang['send_survey_string']                        = '发送调查问卷';
$lang['survey_send_mail_list_clients']             = '客户';
$lang['survey_send_mail_list_staff']               = '工作人员';
$lang['survey_send_mail_lists_string']             = '邮件列表';
$lang['survey_send_mail_lists_note_logged_in']     = '注意：如果你发送调查邮件列表只有登录参与者需要检查';
$lang['survey_send_string']                        = '发送';

$lang['survey_send_to_total']  = '发送到总&的电子邮件';
$lang['survey_send_till_now']  = '到现在为止';
$lang['survey_send_finished']  = '调查发送完成：%s';
$lang['survey_added_to_queue'] = '这项调查是添加到cron %s 的队列';

$lang['survey_questions_string']          = '问题';
$lang['survey_insert_field']              = '插入字段';
$lang['survey_field_checkbox']            = '复选框';
$lang['survey_field_radio']               = '无线电';
$lang['survey_field_input']               = '输入栏';
$lang['survey_field_textarea']            = '文本区域';
$lang['survey_question_required']         = '要求';
$lang['survey_question_only_for_preview'] = '仅供预览';
$lang['survey_create_first']              = '首先您需要创建调查然后你将能插入问题';


$lang['survey_dt_name']               = '名称';
$lang['survey_dt_total_questions']    = '总的问题';
$lang['survey_dt_total_participants'] = '总的参与者';
$lang['survey_dt_date_created']       = '创建日期';
$lang['survey_dt_active']             = '有效';

$lang['survey_text_questions_results'] = '文本问题结果';
$lang['survey_view_all_answers']       = '查看所有的答案';

# Staff Tasks
$lang['new_task']       = '新的任务';
$lang['tasks']          = '任务';
$lang['task']           = '任务';
$lang['task_lowercase'] = '任务';
$lang['comment_string'] = '评论';

$lang['task_marked_as_complete'] = '任务标记为完成';
$lang['task_follower_removed']   = '任务追随者删除是否成功';
$lang['task_assignee_removed']   = '任务受让人删除是否成功';

$lang['task_no_assignees'] = '这个任务没有受托人';
$lang['task_no_followers'] = '这项任务没有追随者';

$lang['task_list_all']            = '所有';
$lang['task_list_finished']       = '完成了';
$lang['task_list_unfinished']     = '未完成的';
$lang['task_list_not_assigned']   = '不分配';
$lang['task_list_duedate_passed'] = '到期日期已过';
$lang['tasks_dt_name']            = '名称';

$lang['task_single_priority']               = '优先级';
$lang['task_single_start_date']             = '开始日期';
$lang['task_single_due_date']               = '到期日期';
$lang['task_single_finished']               = '完成了';
$lang['task_single_mark_as_complete']       = '标记为完成';
$lang['task_single_edit']                   = '编辑';
$lang['task_single_delete']                 = '删除';
$lang['task_single_assignees']              = '受让人';
$lang['task_single_assignees_select_title'] = '分配任务';
$lang['task_single_followers']              = '追随者';
$lang['task_single_followers_select_title'] = '添加的追随者';
$lang['task_single_insert_media_link']      = '插入文件链接';
$lang['task_single_add_new_comment']        = '添加评论';

$lang['task_add_edit_subject']     = '主题';
$lang['task_add_edit_priority']    = '优先级';
$lang['task_priority_low']         = '低';
$lang['task_priority_medium']      = '中';
$lang['task_priority_high']        = '高';
$lang['task_priority_urgent']      = '紧急';
$lang['task_add_edit_start_date']  = '开始日期';
$lang['task_add_edit_due_date']    = '到期日期';
$lang['task_add_edit_description'] = '任务说明';

# Taxes
$lang['new_tax']       = '新税';
$lang['taxes']         = '税';
$lang['tax']           = '税';
$lang['tax_lowercase'] = '税';
$lang['tax_dt_name']   = '税收的名字';
$lang['tax_dt_rate']   = '比例（百分比）';

$lang['tax_add_edit_name'] = '税收的名字';
$lang['tax_add_edit_rate'] = '税率（百分比）';
$lang['tax_edit_title']    = '编辑税种';
$lang['tax_add_title']     = '添加新的税种';

# Ticket Statuses
$lang['new_ticket_status']       = '新的工单状态';
$lang['ticket_statuses']         = '工单的状态';
$lang['ticket_status']           = '工单状态';
$lang['ticket_status_lowercase'] = '工单状态';

$lang['ticket_statuses_dt_name']      = '工单状态';
$lang['no_ticket_statuses_found']     = '没有发现票状态';
$lang['ticket_statuses_table_total']  = '总 %s';
$lang['ticket_status_add_edit_name']  = '工单状态名称';
$lang['ticket_status_add_edit_color'] = '选择颜色';
$lang['ticket_status_add_edit_order'] = '状态的顺序';

# Todos
$lang['new_todo']                  = '新的待办事项';
$lang['my_todos']                  = '我的所有事项';
$lang['todo']                      = '待办事项';
$lang['todo_lowercase']            = '待办事项';
$lang['todo_status_changed']       = '待办事项状态已改变';
$lang['todo_add_title']            = '添加新的待办事项';
$lang['add_new_todo_description']  = '描述';
$lang['no_finished_todos_found']   = '没有已完成的待办事项';
$lang['no_unfinished_todos_found'] = '没有待办事项';
$lang['unfinished_todos_title']    = '未完成的待办事项';
$lang['finished_todos_title']      = '最新完成的待办事项';

# Authentication
$lang['password_changed_email_subject']             = '您的密码已更改';
$lang['password_reset_email_subject']               = '重置 %s 的密码';
# Utilities
$lang['utility_activity_log']                       = '活动日志';
$lang['utility_activity_log_filter_by_date']        = '按日期筛选';
$lang['utility_activity_log_dt_description']        = '描述';
$lang['utility_activity_log_dt_date']               = '日期';
$lang['utility_activity_log_dt_staff']              = '工作人员';
$lang['utility_calendar_new_event_title']           = '添加新事件';
$lang['utility_calendar_new_event_start_date']      = '开始日期';
$lang['utility_calendar_new_event_end_date']        = '结束日期';
$lang['utility_calendar_new_event_make_public']     = '公布';
$lang['utility_calendar_event_added_successfuly']   = '新的事件添加成功';
$lang['utility_calendar_event_deleted_successfuly'] = '成功删除';
$lang['utility_calendar_new_event_placeholder']     = '活动名称';


# Navigation
$lang['nav_notifications']          = '通知';
$lang['nav_my_profile']             = '我的个人资料';
$lang['nav_edit_profile']           = '编辑个人资料';
$lang['nav_logout']                 = '注销';
$lang['nav_no_notifications']       = '没有新通知';
$lang['nav_view_all_notifications'] = '查看所有通知';
$lang['nav_customizer_tooltip']     = '自定义设置';
$lang['nav_notifications_tooltip']  = '查看通知';

## Clients
#

$lang['clients_required_field'] = '必填';

# Footer
$lang['clients_copyright'] = '%s 版权所有';

# Announcements
$lang['clients_announcement_from']  = '来自: ';
$lang['clients_announcement_added'] = '添加人: ';

# Contracts
$lang['clients_contracts']               = '合同';
$lang['clients_contracts_dt_subject']    = '主题';
$lang['clients_contracts_dt_start_date'] = '开始日期';
$lang['clients_contracts_dt_end_date']   = '结束日期';

# Home
$lang['clients_quick_invoice_info']                = '发票概述';
$lang['clients_home_currency_select_tooltip']      = '你需要选择币种因为你有发票使用不同的币种';
# Invoices
$lang['clients_invoice_html_btn_download'] = '下载';

$lang['clients_my_invoices']        = '我的发票';
$lang['clients_invoice_dt_number']  = '发票号 #';
$lang['clients_invoice_dt_date']    = '日期';
$lang['clients_invoice_dt_duedate'] = '截止日期';
$lang['clients_invoice_dt_amount']  = '金额';
$lang['clients_invoice_dt_status']  = '状态';

# Profile
$lang['clients_profile_heading'] = '配置文件';

# Used for edit profile and register START
$lang['clients_firstname'] = '姓';
$lang['clients_lastname']  = '名';
$lang['clients_email']     = '邮件地址';
$lang['clients_company']   = '公司';
$lang['clients_vat']       = '增值税税号;';
$lang['clients_phone']     = '电话';
$lang['clients_country']   = '国家';
$lang['clients_city']      = '城市';
$lang['clients_address']   = '地址';
$lang['clients_zip']       = '邮政编码';
$lang['clients_state']     = '状态';

# Used for edit profile and register END

$lang['clients_register_password']        = '密码';
$lang['clients_register_password_repeat'] = '在输入一次';
$lang['clients_edit_profile_update_btn']  = '更新';

$lang['clients_edit_profile_change_password_heading'] = '修改密码';
$lang['clients_edit_profile_old_password']            = '原密码';
$lang['clients_edit_profile_new_password']            = '新密码';
$lang['clients_edit_profile_new_password_repeat']     = '重复密码';
$lang['clients_edit_profile_change_password_btn']     = '修改密码;';
$lang['clients_profile_last_changed_password']        = '密码最后一次被 %s 修改';

# Knowledge base
$lang['clients_knowledge_base']                    = '知识库';
$lang['clients_knowledge_base_articles_not_found'] = '没有发现相关文章';
$lang['clients_knowledge_base_find_useful']        = '你觉得这篇文章对你有帮助吗？';
$lang['clients_knowledge_base_find_useful_yes']    = '有';
$lang['clients_knowledge_base_find_useful_no']     = '没有';
$lang['clients_article_only_1_vote_today']         = '你可以在24小时内投票';
$lang['clients_article_voted_thanks_for_feedback'] = '谢谢你的反馈';

# Tickets
$lang['clients_ticket_open_subject']                = '新建工单';
$lang['clients_ticket_open_departments']            = '部门';
$lang['clients_tickets_heading']                    = '工单';
$lang['clients_ticket_open_service']                = '服务';
$lang['clients_ticket_open_priority']               = '优先级';
$lang['clients_latest_tickets']                     = '最新工单';
$lang['clients_ticket_open_body']                   = '工单内容';
$lang['clients_ticket_attachments']                 = '附件';
$lang['clients_ticket_posted']                      = '发布人：%s';
$lang['clients_single_ticket_string']               = '工单';
$lang['clients_single_ticket_replied']              = '回复人: %s';
$lang['clients_single_ticket_informations_heading'] = '票务信息';

$lang['clients_tickets_dt_number']     = '票 #';
$lang['clients_tickets_dt_subject']    = '主题';
$lang['clients_tickets_dt_department'] = '部门';
$lang['clients_tickets_dt_service']    = '服务';
$lang['clients_tickets_dt_status']     = '状态';
$lang['clients_tickets_dt_last_reply'] = '最后的回答';

$lang['clients_ticket_single_department']        = '部门: %s';
$lang['clients_ticket_single_submited']          = '提交: %s';
$lang['clients_ticket_single_status']            = '状态:';
$lang['clients_ticket_single_priority']          = '优先: %s';
$lang['clients_ticket_single_add_reply_btn']     = '添加回复';
$lang['clients_ticket_single_add_reply_heading'] = '添加回复此票';

# Login
$lang['clients_login_heading_no_register'] = '请登录';
$lang['clients_login_heading_register']    = '请登录或注册';
$lang['clients_login_email']               = '电子邮件地址';
$lang['clients_login_password']            = '密码';
$lang['clients_login_remember']            = '记住我';
$lang['clients_login_login_string']        = '进入';

# Register
$lang['clients_register_string']  = '注册';
$lang['clients_register_heading'] = '注册';

# Navigation
$lang['clients_nav_login']     = '进入';
$lang['clients_nav_register']  = '注册';
$lang['clients_nav_invoices']  = '发票';
$lang['clients_nav_contracts'] = '合同';
$lang['clients_nav_kb']        = '知识库';
$lang['clients_nav_profile']   = '配置文件';
$lang['clients_nav_logout']    = '注销';

# Datatables
$lang['clients_dt_paginate_first']    = '第一';
$lang['clients_dt_paginate_last']     = '去年';
$lang['clients_dt_paginate_next']     = '下一个';
$lang['clients_dt_paginate_previous'] = '以前的';
$lang['clients_dt_empty_table']       = '没有发现{ 0 }';
$lang['clients_dt_search']            = '搜索:';
$lang['clients_dt_zero_records']      = '未找到匹配记录';
$lang['clients_dt_loading_records']   = '加载…';
$lang['clients_dt_length_menu']       = '显示_menu_';
$lang['clients_dt_info_filtered']     = '（过滤_max_总{ 0 }）';
$lang['clients_dt_info_empty']        = '显示0至0的0 { 0 }';
$lang['clients_dt_info']              = '显示_START_到_TOTAL_的_END_{0}';
$lang['clients_dt_empty_table']       = '没有发现{ 0 }';
$lang['clients_dt_sort_ascending']    = '激活排序列';
$lang['clients_dt_sort_descending']   = '激活列降序进行排序';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = '付款收据';
$lang['payment_for_string']                            = '付款';
$lang['payment_date']                                  = '付款日期:';
$lang['payment_view_mode']                             = '支付方式:';
$lang['payment_total_amount']                          = '总计';
$lang['payment_table_invoice_number']                  = '发票号码';
$lang['payment_table_invoice_date']                    = '发票日期;';
$lang['payment_table_invoice_amount_total']            = '发票金额;';
$lang['payment_table_payment_amount_total']            = '付款金额';
$lang['payments_table_transaction_id']                 = '事务ID: %s';
$lang['payment_getaway_token_not_found']               = '令牌未找到';
$lang['online_payment_recorded_success']               = '成功付款记录';
$lang['online_payment_recorded_success_fail_database'] = '支付成功，但未能插入支付数据库，联系管理员';

# Leads
$lang['lead_convert_to_client']                   = '转换到客户';
$lang['lead_convert_to_email']                    = '电子邮件';
$lang['lead_convert_to_client_firstname']         = '姓';
$lang['lead_convert_to_client_lastname']          = '名';
$lang['lead_email_already_exists']                = '电子邮件已经存在于客户数据';
$lang['lead_to_client_base_converted_success']    = '铅转化为客户成功';
$lang['lead_already_converted']                   = '转换为客户';
$lang['lead_have_client_profile']                 = '已转化为客户.';
$lang['lead_converted_edit_client_profile']       = '编辑配置文件';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = '查看发票为客户';
$lang['invoice_add_edit_recurring']                                           = '反复出现的发票？';
$lang['invoice_add_edit_recurring_no']                                        = '不';
$lang['invoice_add_edit_recurring_month']                                     = '每个月';
$lang['invoice_add_edit_recurring_months']                                    = '每个月';
$lang['invoices_list_all']                                                    = '所有';
$lang['invoices_list_not_sent']                                               = '发票没有发送';
$lang['invoices_list_not_have_payment']                                       = '没有付款记录的发票';
$lang['invoices_list_recuring']                                               = '经常性发票';
$lang['invoices_list_made_payment_by']                                        = '付款的 %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = '创建一个从主要周期性发票的新发票仅是付费状态';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = '创建仅在主发票与支付的地位主要重复发票新发票？如果该字段设置为否，反复出现的发票不符合身份支付新的发票不会被创建';
$lang['send_renewed_invoice_from_recurring_to_email']                         = '自动向客户发送新的发票';
$lang['view_invoice_pdf_link_pay']                                            = '支付发票';

# Payment modes
$lang['payment_mode_add_edit_description']         = '银行账户/说明';
$lang['payment_mode_add_edit_description_tooltip'] = '你可以在这里设置银行账户信息。将HTML发票';
$lang['payment_modes_dt_description']              = '银行账户/说明';
$lang['payment_modes_add_edit_announcement']       = '注：下面列出的付款方式是离线模式。在线支付模式可以配置在设置-> 支付接口';
$lang['payment_mode_add_edit_active']              = '有效';
$lang['payment_modes_dt_active']                   = '有效';

# Contracts
$lang['contract_not_found'] = '合同未找到。可能被删除,检查活动日志';

# Settings
$lang['setting_bar_heading']                 = '设置';
$lang['settings_group_online_payment_modes'] = '支付模块';
$lang['settings_paymentmethod_mode_label']   = '符号';
$lang['settings_paymentmethod_active']       = '有效';
$lang['settings_paymentmethod_currencies']   = '逗号分隔货币';
$lang['settings_paymentmethod_testing_mode'] = '启用测试模式';

$lang['settings_paymentmethod_paypal_username']  = '贝宝API用户名';
$lang['settings_paymentmethod_paypal_password']  = '贝宝API密码';
$lang['settings_paymentmethod_paypal_signature'] = 'API签名';

$lang['settings_paymentmethod_stripe_api_secret_key']      = '条纹的API密钥';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = '条发布的关键';
$lang['settings_limit_top_search_bar_results']             = '限制高级搜索栏的结果';

# Quick Actions
$lang['qa_create_invoice']  = '创建发票';
$lang['qa_create_task']     = '创建任务';
$lang['qa_create_client']   = '创建客户';
$lang['qa_create_contract'] = '创建合同';
$lang['qa_create_kba']      = '创建知识库文章';
$lang['qa_create_survey']   = '创建调查';
$lang['qa_create_ticket']   = '新建工单';
$lang['qa_create_staff']    = '创建工作人员';

## Clients
$lang['client_phonenumber'] = '电话';

# Main Clients
$lang['clients_register']                          = '登记';
$lang['clients_profile_updated']                   = '您的配置文件已更新';
$lang['clients_successfully_registered']           = '感谢您的注册';
$lang['clients_account_created_but_not_logged_in'] = '您的帐户已创建,但您没有自动登录到我们的系统中.请尝试登录';
# Tickets
$lang['clients_tickets_heading']                   = '支持票';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = '付款发票';
$lang['payment_total']       = '总数: %s';

# Invoice
$lang['invoice_html_online_payment']             = '在线支付';
$lang['invoice_html_online_payment_button_text'] = '现在付款';
$lang['invoice_html_payment_modes_not_selected'] = '请选择付款方式';
$lang['invoice_html_amount_blank']               = '总金额不能为空或零';
$lang['invoice_html_offline_payment']            = '线下支付';
$lang['invoice_html_amount']                     = '金额';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = '显示方式';
$lang['dt_button_reload']             = '重置';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = '打印';
$lang['is_not_active_export']         = 'No';
$lang['is_active_export']             = 'Yes';

# Invoice
$lang['invoice_add_edit_advanced_options']               = '高级选项';
$lang['invoice_add_edit_allowed_payment_modes']          = '此发票的付款方式';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = '这张发票是常用发票';
$lang['invoice_add_edit_no_payment_modes_found']         = '没有发现付款方式.';
$lang['invoice_html_total_pay']                          = '总数: %s';

# Email templates
$lang['email_templates_table_heading_name'] = '模板名称';
# General
$lang['discount_type']                      = '折扣类型';
$lang['discount_type_after_tax']            = '税后';
$lang['discount_type_before_tax']           = '税前';
$lang['terms_and_conditions']               = '条款及条件';
$lang['reference_no']                       = '参考 #';
$lang['no_discount']                        = '无折扣';
$lang['view_stats_tooltip']                 = '查看快速统计';
# Clients
$lang['zip_from_date']                      = '开始日期:';
$lang['zip_to_date']                        = '结束日期:';
$lang['client_zip_payments']                = 'ZIP 付款';
$lang['client_zip_invoices']                = 'ZIP 发票';
$lang['client_zip_estimates']               = 'ZIP 报价';
$lang['client_zip_status']                  = '现状';
$lang['client_zip_status_all']              = '所有';
$lang['client_zip_payment_modes']           = '付款';
$lang['client_zip_no_data_found']           = '没有发现 %s 发现';

# Payments
$lang['payment_mode']         = '支付方式';
$lang['payment_view_heading'] = '付款';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = '允许客户修改支付金额(用于在线支付)';
$lang['settings_survey_send_emails_per_cron_run']                   = '每小时发送多少电子邮件 (调查)';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = '此选项用于发送调查时使用. 调查cron每5分钟运行一次。所以你可以设置每5分钟发送多少电子邮件';
$lang['settings_delete_only_on_last_invoice']                       = '只允许删除最后一张发票';
$lang['settings_sales_estimate_prefix']                             = '报价数的前缀';
$lang['settings_sales_next_estimate_number']                        = '下一个报价数';
$lang['settings_sales_next_estimate_number_tooltip']                = '如果你想开始从开始此字段设置为1';
$lang['settings_sales_decrement_estimate_number_on_delete']         = '我们删除减缩报价数';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '你想在删除最后一个报价数时减少报价数吗？如果设置此选项是在报价删除下一个报价数是15下报价数将减少到14下报价如果设置为NO的数量将保持15';
$lang['settings_sales_estimate_number_format']                      = '报价的数字格式';
$lang['settings_sales_estimate_number_format_year_based']           = '去年的基础';
$lang['settings_sales_estimate_number_format_number_based']         = '基于数字(000001)';
$lang['settings_sales_estimate_year']                               = '报价年份 (YYYY/000001)';
$lang['settings_sales_estimate_year_tooltip']                       = '目前报价年份. 重置这个新年到来时.';
$lang['settings_delete_only_on_last_estimate']                      = '删除报价只允许在最后一张发票';
$lang['settings_cron_invoice_heading']                              = '发票';
$lang['settings_send_test_email_heading']                           = '发送测试电子邮件';
$lang['settings_send_test_email_subheading']                        = '发送测试电子邮件确认您的SMTP设置正确设置.';
$lang['settings_send_test_email_string']                            = '电子邮件地址';
$lang['settings_smtp_settings_heading']                             = 'SMTP 设置';
$lang['settings_smtp_settings_subheading']                          = '设置的主要电子邮件';
$lang['settings_sales_heading_general']                             = '基础设置';
$lang['settings_sales_heading_invoice']                             = '发票';
$lang['settings_sales_heading_estimates']                           = '报价';
$lang['settings_sales_heading_company']                             = '公司信息';
$lang['settings_sales_cron_invoice_heading']                        = '';

# Tasks
$lang['tasks_dt_datestart'] = '开始日期';
$lang['tasks_dt_priority']  = '优先';

# Invoice General
$lang['invoice_discount'] = '优惠';

# Tickets
$lang['ticket_settings_client'] = '客户';

# Settings
$lang['settings_rtl_support_admin']                                   = '管理界面边侧栏靠右';
$lang['settings_rtl_support_client']                                  = '客户界面边侧栏靠右';
$lang['acs_language_editor']                                          = '语言编辑器';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = '报价客户同意之后自动转换发票';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = '排除客户区的状态报价';

# Months
$lang['January']   = '一月';
$lang['February']  = '二月';
$lang['March']     = '三月';
$lang['April']     = '四月';
$lang['May']       = '五月';
$lang['June']      = '六月';
$lang['July']      = '七月';
$lang['August']    = '八月';
$lang['September'] = '九月';
$lang['October']   = '十月';
$lang['November']  = '十一月';
$lang['December']  = '十二月';

# Time ago function translate
$lang['time_ago_just_now']  = '就刚刚';
$lang['time_ago_minute']    = '一分钟前';
$lang['time_ago_minutes']   = '%s 分钟前';
$lang['time_ago_hour']      = '一小时前';
$lang['time_ago_hours']     = '%s 小时前';
$lang['time_ago_yesterday'] = '昨天';
$lang['time_ago_days']      = '%s 天前';
$lang['time_ago_week']      = '一个星期前';
$lang['time_ago_weeks']     = '%s 星期前';
$lang['time_ago_month']     = '一个月前';
$lang['time_ago_months']    = '%s 月前';
$lang['time_ago_year']      = '一年前';
$lang['time_ago_years']     = '%s 年前';


# Estimates
$lang['estimates']                          = '报价';
$lang['estimate']                           = '报价';
$lang['estimate_lowercase']                 = '报价';
$lang['create_new_estimate']                = '创造新的报价';
$lang['view_estimate']                      = '视图报价';
$lang['estimate_sent_to_client_success']    = '报价发送成功的客户';
$lang['estimate_sent_to_client_fail']       = '在发送报价时的问题';
$lang['estimate_reminder_send_problem']     = '发送报价逾期提醒的问题';
$lang['estimate_details']                   = 'Estimate Details';
$lang['estimate_view']                      = '报价细节';
$lang['estimate_select_customer']           = '客户';
$lang['estimate_add_edit_number']           = '报价数';
$lang['estimate_add_edit_date']             = '报价日期';
$lang['estimate_add_edit_expirydate']       = '到期日';
$lang['estimate_add_edit_currency']         = '货币';
$lang['estimate_add_edit_client_note']      = '客户报告';
$lang['estimate_add_edit_admin_note']       = '请注意';
$lang['estimate_add_edit_new_item']         = '新的项目';
$lang['estimate_add_edit_search_item']      = '搜索项目';
$lang['estimates_toggle_table_tooltip']     = '查看完整表格';
$lang['estimate_add_edit_advanced_options'] = '高级选项';
$lang['estimate_vat']                       = 'VAT 数';
$lang['estimate_to']                        = 'To';
$lang['estimates_list_all']                 = 'All';

$lang['estimate_invoiced_date']                  = '报价发票在 %s';
$lang['edit_estimate_tooltip']                   = '编辑报价';
$lang['delete_estimate_tooltip']                 = '删除的报价';
$lang['estimate_sent_to_email_tooltip']          = '发送电子邮件';
$lang['estimate_already_send_to_client_tooltip'] = '此报价已发送至客户 %s';
$lang['send_overdue_notice_tooltip']             = '过期的通知';
$lang['estimate_view_activity_tooltip']          = '活动日志';

$lang['estimate_send_to_client_modal_heading']    = '向客户发送此报价';
$lang['estimate_send_to_client_attach_pdf']       = '检查报价 PDF';
$lang['estimate_send_to_client_preview_template'] = '预览电子邮件模板';

$lang['estimate_dt_table_heading_number']     = '报价 #';
$lang['estimate_dt_table_heading_date']       = '日期';
$lang['estimate_dt_table_heading_client']     = '客户';
$lang['estimate_dt_table_heading_expirydate'] = '客户';
$lang['estimate_dt_table_heading_amount']     = '金额';
$lang['estimate_dt_table_heading_status']     = '现状';

$lang['estimate_email_link_text']    = '查看报价';
$lang['estimate_convert_to_invoice'] = '转化为发票';
# Home
$lang['home_unfinished_tasks']       = '未完成的任务';

# Clients
$lang['client_estimates_tab'] = '报价';
$lang['client_payments_tab']  = '付款';


# Estimate General
$lang['estimate_pdf_heading']            = '报价';
$lang['estimate_table_item_heading']     = '项目';
$lang['estimate_table_quantity_heading'] = '数量';
$lang['estimate_table_rate_heading']     = '金额';
$lang['estimate_table_tax_heading']      = '税额';
$lang['estimate_table_amount_heading']   = '金额';
$lang['estimate_subtotal']               = '小计';
$lang['estimate_adjustment']             = '调整';
$lang['estimate_discount']               = '折扣';
$lang['estimate_total']                  = '总';
$lang['estimate_to']                     = '总';
$lang['estimate_data_date']              = '报价日期';
$lang['estimate_data_expiry_date']       = '到期日';
$lang['estimate_note']                   = '注:';
$lang['estimate_status_draft']           = '草案';
$lang['estimate_status_sent']            = '发送';
$lang['estimate_status_declined']        = '拒绝';
$lang['estimate_status_accepted']        = '接受';
$lang['estimate_status_expired']         = '过期';
$lang['estimate_note']                   = '备注:';

# Quick create
$lang['qa_create_estimate'] = '创建报价';
$lang['qa_create_lead']     = '销售机会';


## Clients
$lang['clients_estimate_dt_number']             = '报价 #';
$lang['clients_estimate_dt_date']               = '日期';
$lang['clients_estimate_dt_duedate']            = '报价日期';
$lang['clients_estimate_dt_amount']             = '金额';
$lang['clients_estimate_dt_status']             = '现状';
$lang['clients_nav_estimates']                  = '报价';
$lang['clients_decline_estimate']               = '拒绝';
$lang['clients_accept_estimate']                = '接受';
$lang['clients_my_estimates']                   = '报价';
$lang['clients_estimate_invoiced_successfuly']  = '接受报价. 这是报价的发票';
$lang['clients_estimate_accepted_not_invoiced'] = '谢谢你接受这个报价';
$lang['clients_estimate_declined']              = '被拒的报价.在到期日之前，你可以接受任何时间的报价';
$lang['clients_estimate_failed_action']         = '对这一报价未能回复';
$lang['client_add_edit_profile']                = '简介';

# Version 1.0.3
# Admin
# Home
$lang['home_invoice_not_sent']        = '未发送的发票';
$lang['home_expired_estimates']       = '过期的报价';
$lang['home_invoice_overdue']         = '逾期发票';
$lang['home_payments_received_today'] = '今天收到的款项';

# Reports

# Custom Fields
$lang['custom_field']                          = '自定义字段';
$lang['custom_field_lowercase']                = '自定义字段';
$lang['custom_fields']                         = '自定义字段';
$lang['custom_fields_lowercase']               = '自定义字段';
$lang['new_custom_field']                      = '新的自定义字段';
$lang['custom_field_name']                     = '字段名称';
$lang['custom_field_add_edit_type']            = '型';
$lang['custom_field_add_edit_belongs_top']     = '所属领域';
$lang['custom_field_add_edit_options']         = '选项';
$lang['custom_field_add_edit_options_tooltip'] = '仅用于选择类型. 通过分离用逗号选项填充字段. 如苹果、橘子、香蕉';
$lang['custom_field_add_edit_order']           = '秩序';

$lang['custom_field_dt_field_to']       = '属于';
$lang['custom_field_dt_field_name']     = '名称';
$lang['custom_field_dt_field_type']     = '型';
$lang['custom_field_add_edit_active']   = '有效';
$lang['custom_field_add_edit_disabled'] = '没有资格';

# Ticket replies
$lang['ticket_reply']           = '票的回复';
$lang['ticket_reply_lowercase'] = '票的回复';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = '自定义字段';

# Contracts
$lang['contract_types']          = '合同类型';
$lang['contract_type']           = '合同类型';
$lang['new_contract_type']       = '新合同类型';
$lang['contract_type_lowercase'] = '合同';
$lang['contract_type_name']      = '名称';

$lang['contract_types_list_name'] = '合同类型';

# Customizer Menu
$lang['acs_contracts']      = '合同';
$lang['acs_contract_types'] = '合同类型';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = '较长的描述';
# Customers
$lang['client_delete_invoices_warning']    = '这个客户有发票或报价。你不能删除这个客户。将所有的发票换到另一个客户，然后删除.';
$lang['clients_list_phone']                = '电话';
$lang['client_expenses_tab']               = '报价';
$lang['customers_summary']                 = '客户状态';
$lang['customers_summary_active']          = '有效';
$lang['customers_summary_inactive']        = '无效';
$lang['customers_summary_logged_in_today'] = '今天的记录';

# Authentication
$lang['admin_auth_forgot_password_email']             = '电子邮件地址';
$lang['admin_auth_forgot_password_heading']           = '忘记密码';
$lang['admin_auth_login_heading']                     = '登录';
$lang['admin_auth_login_email']                       = '电子邮件地址';
$lang['admin_auth_login_password']                    = '密码';
$lang['admin_auth_login_remember_me']                 = '记住我';
$lang['admin_auth_login_button']                      = '登录';
$lang['admin_auth_login_fp']                          = '忘记密码?';
$lang['admin_auth_reset_password_heading']            = '重置密码';
$lang['admin_auth_reset_password']                    = '密码';
$lang['admin_auth_reset_password_repeat']             = '重复密码';
$lang['admin_auth_invalid_email_or_password']         = '无效的电子邮件或密码';
$lang['admin_auth_inactive_account']                  = '无效帐户';
# Calender
$lang['calendar_estimate']                            = '报价';
$lang['calendar_invoice']                             = '发票';
$lang['calendar_contract']                            = '合同';
$lang['calendar_customer_reminder']                     = '客户的提醒';
$lang['calendar_event']                               = '事件';
$lang['calendar_task']                                = '任务';
# Leads
$lang['lead_edit_delete_tooltip']                     = '删除导致';
$lang['lead_attachments']                             = '附件';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = '财务';
# Settings
$lang['new_company_field_info']                       = '这一领域将显示在发票/报价的公司方面（左）。你是不允许添加任何字符（点、线、标志等）在名称字段.';
$lang['new_company_field_name']                       = '字段名称';
$lang['new_company_field_value']                      = '字段值';
$lang['new_company_field']                            = '加入新公司';
$lang['settings_number_padding_invoice_and_estimate'] = '发票/报价数补 0\'s. <br /> <small>Ex. 如果这个值为3的号码将被格式化: 005 or 025</small>';
$lang['settings_show_sale_agent_on_invoices']         = '在发票上显示销售代理';
$lang['settings_show_sale_agent_on_estimates']        = '显示销售代理';
$lang['settings_predefined_predefined_term']          = '预定义的条款和条件';
$lang['settings_predefined_clientnote']               = '预定客户的注意';
$lang['settings_custom_pdf_logo_image_url']           = '自定义 PDF 公司 Logo URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = '你可能会有问题，PNG图片透明处理的方式不同，这取决于PHP或PHP GD版本使用imagick。尝试更新PHP imagick禁用PHP GD
。如果你离开这个领域的空白的上传标志将被使用.';

# General
$lang['sale_agent_string']               = '销售代理';
$lang['amount_display_in_base_currency'] = '在您的基础货币中显示的金额';

# Leads
$lang['leads_summary']                                         = '总结线索';

# Contracts
$lang['contract_value']                 = '合同价值';
$lang['contract_trash']                 = '垃圾箱';
$lang['contracts_view_trash']           = '查看垃圾箱';
$lang['contracts_view_all']             = '所有';
$lang['contracts_view_exclude_trashed'] = '排除的合同';
$lang['contract_value_tooltip']         = '添加合同. The value will be shown in your base currency.';
$lang['contract_trash_tooltip']         = '当你将所有的合同都列出来时,如果你把合同加在垃圾桶里，不会显示在客户，不会被包含在图表中，其他的数据也不会被显示.';

$lang['contract_renew_heading']               = '续订合同';
$lang['contract_summary_heading']             = '合同概况';
$lang['contract_summary_expired']             = '过期';
$lang['contract_summary_active']              = '有效';
$lang['contract_summary_about_to_expire']     = '即将到期';
$lang['contract_summary_recently_added']      = '最近添加';
$lang['contract_summary_trash']               = '垃圾箱';
$lang['contract_summary_by_type']             = '合同的类型';
$lang['contract_summary_by_type_value']       = '合同价值';
$lang['contract_renewed_successfuly']         = '续约成功';
$lang['contract_renewed_fail']                = '同时更新合同的问题。联系管理员';
$lang['no_contract_renewals_found']           = '没有发现本合同的续约';
$lang['no_contract_renewals_history_heading'] = '合同更新历史';
$lang['contract_renewed_by']                  = '%s 新的合同';
$lang['contract_renewal_deleted']             = '成功删除更新';
$lang['contract_renewal_delete_fail']         = '删除合同更新失败。联系管理员';

$lang['contract_renewal_new_value'] = '新合同价格: %s';
$lang['contract_renewal_old_value'] = '老合同价格: %s';

$lang['contract_renewal_new_start_date'] = '新的开始日期: %s';
$lang['contract_renewal_old_start_date'] = '老合同开始日期是: %s';

$lang['contract_renewal_new_end_date'] = '新的结束日期: %s';
$lang['contract_renewal_old_end_date'] = '老合同结束日期: %s';
$lang['contract_attachment']           = '附件';
$lang['contract_attachment_lowercase'] = '附件';

# Admin Aside Menu
$lang['als_goals_tracking']     = '目标踪迹';
$lang['als_expenses']           = '费用';
$lang['als_reports_expenses']   = '费用';
$lang['als_expenses_vs_income'] = '支出与收入';

# Invoices
$lang['invoice_attach_file']           = '附件';
$lang['invoice_mark_as_sent']          = '标记为发送';
$lang['invoice_marked_as_sent']        = '发票上注明为已发送成功';
$lang['invoice_marked_as_sent_failed'] = '未能按发票发送';

# Quick Actions
$lang['qa_new_goal']    = '设置新的目标';
$lang['qa_new_expense'] = '费用详情';

# Goals Tracking
$lang['goals']                                         = '目标';
$lang['goal']                                          = '目标';
$lang['goals_tracking']                                = '目标跟踪';
$lang['new_goal']                                      = '新目标';
$lang['goal_lowercase']                                = '目标';
$lang['goal_start_date']                               = '开始日期';
$lang['goal_end_date']                                 = '结束日期';
$lang['goal_subject']                                  = '项目';
$lang['goal_description']                              = '描述';
$lang['goal_type']                                     = '目标类型';
$lang['goal_achievement']                              = '成就';
$lang['goal_contract_type']                            = '合同类型';
$lang['goal_notify_when_fail']                         = '当目标未能实现时通知工作人员';
$lang['goal_notify_when_achieve']                      = '在目标实现时通知工作人员';
$lang['goal_progress']                                 = '进展';
$lang['goal_total']                                    = '总数：%';
$lang['goal_result_heading']                           = '目标的进展';
$lang['goal_income_shown_in_base_currency']            = '收入总额以基础货币显示';
$lang['goal_notify_when_end_date_arrives']             = '工作人员将在结束日期到达时通知';
$lang['goal_staff_members_notified_about_achievement'] = '员工通报这一目标的成就';
$lang['goal_staff_members_notified_about_failure']     = '通知员工有关故障';
$lang['goal_notify_staff_manualy']                     = '通知职工手动';
$lang['goal_notify_staff_notified_manualy_success']    = '该工作人员通报关于这一目标的结果';
$lang['goal_notify_staff_notified_manualy_fail']       = '未能通知工作人员关于这个目标的结果';

$lang['goal_achieved'] = '实现';
$lang['goal_failed']   = '失败';
$lang['goal_close']    = '很接近';

$lang['goal_type_total_income']                                         = '实现总收入';
$lang['goal_type_convert_leads']                                        = '将x转换信息';
$lang['goal_type_increase_customers_without_leads_conversions']         = '增加客户的数量';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = '导致转换被排除';

$lang['goal_type_increase_customers_with_leads_conversions']         = '增加客户的数量';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = '信息转换包括';
$lang['goal_type_make_contracts_by_type_calc_database']              = '按类型签订合同';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = '从添加到数据库之日起计算';
$lang['goal_type_make_contracts_by_type_calc_date']                  = '按类型签订合同';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = '从合同开始日期计算';
$lang['goal_type_total_estimates_converted']                         = 'X报价转换';
$lang['goal_type_total_estimates_converted_subtext']                 = '将只报价谁将被转换为发票';
$lang['goal_type_income_subtext']                                    = '收入将计算在您的基础货币（未转换）';
# Payments
$lang['payment_transaction_id']                                      = '事务ID';
# Settings Menu
$lang['acs_expenses']                                                = '花费';
$lang['acs_expense_categories']                                      = '费用类别';
# Expeneses
$lang['expense_category']                                            = '费用类别';
$lang['expense_category_lowercase']                                  = '费用类别';
$lang['new_expense']                                                 = '记录费用';
$lang['expense_add_edit_name']                                       = '类别名称';
$lang['expense_add_edit_description']                                = '类别描述';
$lang['expense_categories']                                          = '费用类别';
$lang['new_expense_category']                                        = '新的类别';
$lang['dt_expense_description']                                      = '描述';
$lang['expense']                                                     = '花费';
$lang['expenses']                                                    = '花费';
$lang['expense_lowercase']                                           = '花费';
$lang['expense_add_edit_tax']                                        = '税额';
$lang['expense_add_edit_customer']                                   = '客户';
$lang['expense_add_edit_currency']                                   = '货币';
$lang['expense_add_edit_note']                                       = '备注';
$lang['expense_add_edit_date']                                       = '费用日期';
$lang['expense_add_edit_amount']                                     = '总额';
$lang['expense_add_edit_billable']                                   = '计费';
$lang['expense_add_edit_attach_receipt']                             = '附收据';
$lang['expense_add_edit_reference_no']                               = '参考';
$lang['expense_receipt']                                             = '费用收据';
$lang['expense_receipt_lowercase']                                   = '费用收据';
$lang['expense_dt_table_heading_category']                           = '类别';
$lang['expense_dt_table_heading_amount']                             = '金额';
$lang['expense_dt_table_heading_date']                               = '日期';
$lang['expense_dt_table_heading_reference_no']                       = '参考';
$lang['expense_dt_table_heading_customer']                           = '客户';
$lang['expense_dt_table_heading_payment_mode']                       = '支付方式';
$lang['expense_converted_to_invoice']                                = '成功转换费用发票';
$lang['expense_converted_to_invoice_fail']                           = '没能把这个费用发票检查错误日志';
$lang['expense_copy_success']                                        = '复制成功';
$lang['expense_copy_fail']                                           = '复制费用失败。请检查所需的字段，然后再试一次';
$lang['expenses_list_all']                                           = '全部';
$lang['expenses_list_billable']                                      = '计费';
$lang['expenses_list_non_billable']                                  = '非结算';
$lang['expenses_list_invoiced']                                      = '开发票';
$lang['expenses_list_unbilled']                                      = '未开票';
$lang['expenses_list_recurring']                                     = '经常性的';
$lang['expense_invoice_delete_not_allowed']                          = '您不能删除此费用。费用已开具发票';
$lang['expense_convert_to_invoice']                                  = '转换为发票';
$lang['expense_edit']                                                = '编辑费用';
$lang['expense_delete']                                              = '删除';
$lang['expense_copy']                                                = '复制';
$lang['expense_invoice_not_created']                                 = '发票没有创建';
$lang['expense_billed']                                              = '收费';
$lang['expense_not_billed']                                          = '不收费';
$lang['expense_customer']                                            = '客户';
$lang['expense_note']                                                = '注：';
$lang['expense_date']                                                = '日期：';
$lang['expense_ref_noe']                                             = '参考号:';
$lang['expense_tax']                                                 = '税：';
$lang['expense_amount']                                              = '金额：';
$lang['expense_recurring_indicator']                                 = '反复出现的';
$lang['expense_already_invoiced']                                    = '此费用已开具发票';
$lang['expense_recurring_auto_create_invoice']                       = '自动创建发票';
$lang['expense_recurring_send_custom_on_renew']                      = '费用重复发送发票到客户邮件';
$lang['expense_recurring_autocreate_invoice_tooltip']                = '如果该选项被选中，客户将自动创建，费用将被更新';
$lang['report_expenses_full']                                        = '完整的报告';
$lang['expenses_yearly_by_categories']                               = '按类别分类费用';
$lang['total_expenses_for']                                          = '总费用'; // year
$lang['expenses_report_for']                                         = '费用'; // year
$lang['expense_report_info']                                         = '计费的费用不计算在报告中';
# Custom fields
$lang['custom_field_required']                                       = '要求';
$lang['custom_field_show_on_pdf']                                    = '显示PDF';
$lang['custom_field_leads']                                          = '领导';
$lang['custom_field_customers']                                      = '客户';
$lang['custom_field_staff']                                          = '工作人员';
$lang['custom_field_contracts']                                      = '合同';
$lang['custom_field_tasks']                                          = '任务';
$lang['custom_field_expenses']                                       = '费用';
$lang['custom_field_invoice']                                        = '发票';
$lang['custom_field_estimate']                                       = '报价';
# Tickets
$lang['ticket_single_private_staff_notes']                           = '员工的私人备注';


# Business News
$lang['business_news'] = '商业新闻';

# Navigation
$lang['nav_todo_items']               = '所有的物品';
# Clients
# Contracts
$lang['clients_contracts_type']       = '合同类型';

# Version 1.0.5
# General
$lang['no_tax']                             = '无税';
$lang['numbers_not_formated_while_editing'] = '在输入字段的速率，同时编辑/添加项目，应保持不格式化不要尝试在这里手动格式化';
# Contracts
$lang['contracts_view_expired']             = '过期';
$lang['contracts_view_without_dateend']     = '没有日期的合同';

# Email Templates
$lang['email_template_contracts_fields_heading'] = '合同';
# Invoices General
$lang['invoice_estimate_general_options']        = '基础设置';
$lang['invoice_table_item_description']          = '描述';
$lang['invoice_recurring_indicator']             = '复发';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = '报价转换发票是否成功';
$lang['estimate_table_item_description']         = '描述';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = '你不能删除基础货币。你需要删除这个分配新的基础货币。';
$lang['invoice_copy']              = '发票副本';
$lang['invoice_copy_success']      = '发票复制成功';
$lang['invoice_copy_fail']         = '未能复制发票';
$lang['invoice_due_after_help']    = '设置为零，以避免计算';

$lang['show_shipping_on_invoice'] = '在发票中显示发货细节';

# Estimates
$lang['show_shipping_on_estimate']         = '显示运费细节';
$lang['is_invoiced_estimate_delete_error'] = '这是报价发票。您不能删除报价';

# Customers & Invoices / Estimates
$lang['ship_to']                  = '运送到';
$lang['customer_profile_details'] = '客户详细信息';
$lang['billing_shipping']         = '物流信息';
$lang['billing_address']          = '帐单地址';
$lang['shipping_address']         = '送货地址';

$lang['billing_street']  = '街道';
$lang['billing_city']    = '城市';
$lang['billing_state']   = '州';
$lang['billing_zip']     = '邮递区号';
$lang['billing_country'] = '国家';

$lang['shipping_street']                    = '街道';
$lang['shipping_city']                      = '城市';
$lang['shipping_state']                     = '州';
$lang['shipping_zip']                       = '邮递区号';
$lang['shipping_country']                   = '国家';
$lang['get_shipping_from_customer_profile'] = '从客户资料中获取运输信息';

# Customer
$lang['customer_file_from']                                    = '显示 %';
$lang['customer_default_currency']                             = '默认的货币';
$lang['customer_no_attachments_found']                         = '没有找到附件';
$lang['customer_update_address_info_on_invoices']              = '更新所有的发票/报价的运费/帐单信息';
$lang['customer_update_address_info_on_invoices_help']         = '如果您检查此字段的运费和帐单信息将被更新到所有的发票和报价。注：带有状态的发票不会受到影响';
$lang['setup_google_api_key_customer_map']                     = '设置谷歌应用程序接口以查看客户地图';
$lang['customer_attachments_file']                             = '文件';
$lang['client_send_set_password_email']                        = '发送设置密码电子邮件';
$lang['customer_billing_same_as_profile']                      = '相同的客户信息';
$lang['customer_billing_copy']                                 = '复制地址';
$lang['customer_map']                                          = '地图';
$lang['set_password_email_sent_to_client']                     = '电子邮件设置密码将发送到客户';
$lang['set_password_email_sent_to_client_and_profile_updated'] = '资料的更新和电子邮件设置密码将发送到客户';
$lang['customer_attachments']                                  = '文件';
$lang['customer_longitude']                                    = '经度（谷歌地图）';
$lang['customer_latitude']                                     = '纬度（谷歌地图）';

# Authentication
$lang['admin_auth_set_password']          = '密码';
$lang['admin_auth_set_password_repeat']   = '重复密码';
$lang['admin_auth_set_password_heading']  = '设置密码';
$lang['password_set_email_subject']       = '设置新密码';
# General
$lang['apply']                            = '应用';
$lang['department_calendar_id']           = '谷歌日历ID';
$lang['kan_ban_string']                   = '看板';
$lang['localization_default_language']    = '默认语言';
$lang['system_default_string']            = '系统默认';
$lang['advanced_options']                 = '高级选项';
# Expenses
$lang['expense_list_invoice']             = '开发票';
$lang['expense_list_billed']              = '安排';
$lang['expense_list_unbilled']            = '未开票';
# Leads
$lang['lead_merge_custom_field']          = '合并作为自定义字段';
$lang['lead_merge_custom_field_existing'] = '合并现有的数据库字段';
$lang['lead_dont_merge_custom_field']     = '不合并';
$lang['no_lead_notes_found']              = '没有发现线索';
$lang['leads_view_list']                  = '列表';
$lang['lost_leads']                       = '失去了线索';
$lang['junk_leads']                       = '垃圾线索';
$lang['lead_mark_as_lost']                = '标记为丢失';
$lang['lead_unmark_as_lost']              = '成为取消标记';
$lang['lead_marked_as_lost']              = '标记丢失是否成功';
$lang['lead_unmarked_as_lost']            = '标示成功地减掉了';
$lang['leads_status_color']               = '颜色';

$lang['lead_mark_as_junk']     = '标记为垃圾';
$lang['lead_unmark_as_junk']   = '标记线索为垃圾';
$lang['lead_marked_as_junk']   = '标记线索为垃圾成功';
$lang['lead_unmarked_as_junk'] = '标记线索为垃圾成功';

$lang['lead_not_found']                                                      = '没有发现线索';
$lang['lead_lost']                                                           = '丢失';
$lang['lead_junk']                                                           = '垃圾';
$lang['leads_not_assigned']                                                  = '不分配';
# Contacts
$lang['contract_not_visible_to_client']                                      = '隐藏客户';
$lang['contract_edit_overview']                                              = '合同概况';
$lang['contract_attachments']                                                = '附件';
# Tasks
$lang['task_view_make_public']                                               = '公开';
$lang['task_is_private']                                                     = '私人任务';
$lang['task_finished']                                                       = '完成了';
$lang['task_single_related']                                                 = '相关的';
$lang['task_unmark_as_complete']                                             = '标记为完成';
$lang['task_unmarked_as_complete']                                           = '任务标记为完成';
$lang['task_relation']                                                       = '相关的';
$lang['task_public']                                                         = '公共';
$lang['task_public_help']                                                    = '如果设置此任务，任务将成为所有工作人员可见。否则只有会员，跟随者，创建者或管理员可见';
# Settings
$lang['settings_general_favicon']                                            = '网站图标';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = '从管理区的客户语言输出端PDF文档';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = '如果该选项设置为是和前。系统将默认语言是英语和客户机，已经安装语言法语PDF文档将在客户语言输出';
$lang['settings_cron_surveys']                                               = '调查';
$lang['settings_default_tax']                                                = '预设税';
$lang['setup_calendar_by_departments']                                       = '各部门设置日历';
$lang['settings_calendar']                                                   = '日历';
$lang['settings_sales_invoice_due_after']                                    = '发票到期期限（天）';
$lang['settings_google_api']                                                 = '谷歌的API密钥';
$lang['settings_gcal_main_calendar_id']                                      = '谷歌日历ID';
$lang['settings_gcal_main_calendar_id_help']                                 = '这是主要的公司日历。所有这个日历上的事件将被显示。如果要指定基于部门的日历，你可以在部门谷歌日历ID添加';

$lang['show_on_calendar']                  = '显示日历';
$lang['show_invoices_on_calendar']         = '发票';
$lang['show_estimates_on_calendar']        = '报价';
$lang['show_contracts_on_calendar']        = '合同';
$lang['show_tasks_on_calendar']            = '任务';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = '复制自定义字段到客户简介';
$lang['copy_custom_fields_convert_to_customer_help']                 = '如果不存在下列自定义域中，客户将被自动创建，否则只能被复制从引线配置文件';
$lang['lead_profile']                                                = '简介';
$lang['lead_is_client']                                              = '客户';
$lang['leads_kan_ban_notes_title']                                   = '备注';
$lang['leads_email_integration_folder_no_encryption']                = '没有加密';
$lang['leads_email_integration']                                     = '电子邮件集成';
$lang['leads_email_active']                                          = '有效';
$lang['leads_email_integration_imap']                                = 'IMAP服务器';
$lang['leads_email_integration_email']                               = '电子邮件地址（登录）';
$lang['leads_email_integration_password']                            = '密码';
$lang['leads_email_integration_default_source']                      = '默认源';
$lang['leads_email_integration_check_every']                         = '检查每个(分钟)';
$lang['leads_email_integration_default_assigned']                    = '负责新线索';
$lang['leads_email_encryption']                                      = '加密';
$lang['leads_email_integration_updated']                             = '集成电子邮件更新';
$lang['leads_email_integration_default_status']                      = '默认状态';
$lang['leads_email_integration_folder']                              = '文件夹';
$lang['leads_email_integration_notify_when_lead_imported']           = '进入时通知';
$lang['leads_email_integration_only_check_unseen_emails']            = '只检查没打开的邮件';
$lang['leads_email_integration_only_check_unseen_emails_help']       = '该脚本将自动设置电子邮件打开后检查。这是用来防止和检查所有的电子邮件，并再次。不标书勾选这个选项，如果你有很多的邮件和你安装了大量转发的电子邮件';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = '如果多次发送电子邮件通知线索';
$lang['leads_email_integration_test_connection']                     = 'IMAP连接测试';
$lang['lead_email_connection_ok']                                    = 'IMAP连接好';
$lang['lead_email_connection_not_ok']                                = 'IMAP连接不好';
$lang['lead_email_activity']                                         = '电子邮件活动';
$lang['leads_email_integration_notify_roles']                        = '角色的通知';
$lang['leads_email_integration_notify_staff']                        = '工作人员通知';
$lang['lead_public']                                                 = '公共';
# Knowledge Base

$lang['kb_group_color']                = '颜色';
$lang['kb_group_order']                = '订单';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = '批量PDF输出';
$lang['bulk_export_pdf_payments']      = '支付';
$lang['bulk_export_pdf_estimates']     = '报价';
$lang['bulk_export_pdf_invoices']      = '发票';
$lang['bulk_pdf_export_button']        = '出口';
$lang['bulk_pdf_export_select_type']   = '选择类型';
$lang['no_data_found_bulk_pdf_export'] = '未发现出口数据';
$lang['bulk_export_status_all']        = '全部';
$lang['bulk_export_status']            = '状态';
$lang['bulk_export_zip_payment_modes'] = '支付由';
$lang['bulk_export_include_tag']       = '包括标签';
$lang['bulk_export_include_tag_help']  = '原始或复制。标签将在PDF输出。标书只使用1标签';
# Predefined replies
$lang['no_predefined_replies_found']   = '没有预先确定的答复';
## Clients area
$lang['clients_contract_attachments']  = '附件';
# Backup
$lang['backup_type_full']              = '全部备份';
$lang['backup_type_db']                = '数据库备份';

$lang['auto_backup_options_updated']     = '自动备份选项更新';
$lang['auto_backup_every']               = '每隔几天创建一个备份';
$lang['auto_backup_enabled']             = '启用(需要Cron)';
$lang['auto_backup']                     = '自动备份';
$lang['backup_delete']                   = '备份删除';
$lang['create_backup']                   = '创建备份';
$lang['backup_success']                  = '备份是成功的';
$lang['utility_backup']                  = '数据库备份';
$lang['utility_create_new_backup_db']    = '创建数据库备份';
$lang['utility_backup_table_backupname'] = '备份';
$lang['utility_backup_table_backupsize'] = '备份大小';
$lang['utility_backup_table_backupdate'] = '日期';
$lang['utility_db_backup_note']          = '注意:由于有限的执行时间和内存可用的PHP,备份非常大的数据库是不可能的。如果您的数据库非常大,您可能需要备份通过命令行直接从您的SQL服务器,或有你的服务器管理员帮你，如果你没有根特权。';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = '提议';
$lang['clients_nav_support']   = '支持';
# General
$lang['more']                  = '更多';
$lang['add_item']              = '添加物品';
$lang['goto_admin_area']       = '去管理区域';
$lang['click_here_to_edit']    = '点击这里编辑';
$lang['delete']                = '删除';
$lang['welcome_top']           = '欢迎';

# Customers
$lang['customer_permissions']         = '允许';
$lang['customer_permission_invoice']  = '发票';
$lang['customer_permission_estimate'] = '报价';
$lang['customer_permission_proposal'] = '提议';
$lang['customer_permission_contract'] = '合同';
$lang['customer_permission_support']  = '支持';


#Tasks
$lang['task_related_to'] = '有关';

# Send file
$lang['custom_file_fail_send']    = '发送文件失败';
$lang['custom_file_success_send'] = '文件被成功发送到';
$lang['send_file_subject']        = '邮件主题';
$lang['send_file_email']          = '电子邮件地址';
$lang['send_file_message']        = '信息';
$lang['send_file']                = '发送文件';
$lang['add_checklist_item']       = '项目清单';
$lang['task_checklist_items']     = '项目清单';

# Import
$lang['default_pass_clients_import'] = '所有客户的默认密码';
$lang['simulate_import']             = '模拟输入';
$lang['import_upload_failed']        = '上传失败';
$lang['import_total_imported']       = '导入总额: %s';
$lang['import_leads']                = '导入销售机会';
$lang['import_customers']            = '导入客户';
$lang['choose_csv_file']             = '选择CSV文件';
$lang['import']                      = '导入';
$lang['lead_import_status']          = '状态';
$lang['lead_import_source']          = '来源';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = '标书';

# Invoices
$lang['delete_invoice'] = '删除';

# Calendar
$lang['calendar_lead_reminder'] = '机会提醒';

$lang['items']      = '项目';
$lang['support']    = '支持';
$lang['new_ticket'] = '新的票';

# Reminders
$lang['client_edit_set_reminder_title'] = '添加用户提醒';
$lang['lead_set_reminder_title']        = '添加机会的提醒';
$lang['set_reminder_tooltip']           = '这个选择让你永远不会忘记你的客户.';
$lang['client_reminders_tab']           = '提醒';
$lang['leads_reminders_tab']            = '提醒';

# Tickets
$lang['delete_ticket_reply']  = '删除回复';
$lang['ticket_priority_edit'] = '编辑优先';
$lang['ticket_priority_add']  = '添加优先';
$lang['ticket_status_edit']   = '编辑工单状态';
$lang['ticket_service_edit']  = '编辑票务服务';
$lang['edit_department']      = '编辑部门';

# Expenses
$lang['edit_expense_category']                                    = '编辑费用类别';
# Settings
$lang['customer_default_country']                                 = '默认的国家';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = '要求客户登录查看报价';
$lang['set_reminder']                                             = '设置提醒';
$lang['set_reminder_date']                                        = '通知日期';
$lang['reminder_description']                                     = '设置简介';
$lang['reminder_notify_me_by_email']                              = '同时发送电子邮件此提醒';
$lang['reminder_added_successfuly']                               = '提示添加成功。你会及时通知.';
$lang['reminder_description']                                     = '描述';
$lang['reminder_date']                                            = '日期';
$lang['reminder_staff']                                           = '提醒';
$lang['reminder_is_notified']                                     = '通知？';
$lang['reminder_is_notified_boolean_no']                          = '不';
$lang['reminder_is_notified_boolean_yes']                         = '是';
$lang['reminder_set_to']                                          = '设置提醒';
$lang['reminder_deleted']                                         = '删除成功提示';
$lang['reminder_failed_to_delete']                                = '无法删除提示';
$lang['show_invoice_estimate_status_on_pdf']                      = '在PDF显示发票/报价状态';
$lang['email_piping_default_priority']                            = '在管道车票默认优先';
$lang['show_lead_reminders_on_calendar']                          = '机会的提醒';
$lang['tickets_piping']                                           = '电子邮件管道';
$lang['email_piping_only_replies']                                = '只允许通过电子邮件回答';
$lang['email_piping_only_registered']                             = 'Pipe 只有注册用户';
$lang['email_piping_enabled']                                     = '启用';

# Estimates
$lang['view_estimate_as_client']         = '视图报价';
$lang['estimate_mark_as']                = '标记为 %s';
$lang['estimate_status_changed_success'] = '报价状态改变';
$lang['estimate_status_changed_fail']    = '未能更改报价状态';
$lang['estimate_email_link_text']        = '视图的报价';

# Proposals
$lang['proposal_to']                            = '公司 / 名称';
$lang['proposal_date']                          = '开始日期';
$lang['proposal_address']                       = '地址';
$lang['proposal_phone']                         = '电话';
$lang['proposal_email']                         = '电子邮件';
$lang['proposal_date_created']                  = '创建日期';
$lang['proposal_open_till']                     = '截止日期';
$lang['proposal_status_open']                   = '开始';
$lang['proposal_status_accepted']               = '成功接受';
$lang['proposal_status_declined']               = '拒绝';
$lang['proposal_status_sent']                   = '发送';
$lang['proposal_expired']                       = '过期';
$lang['proposal_subject']                       = '主题';
$lang['proposal_total']                         = '总计';
$lang['proposal_status']                        = '状态';
$lang['proposals_list_all']                     = '所有';
$lang['proposals_leads_related']                = '信息相关';
$lang['proposals_customers_related']            = '相关的客户';
$lang['proposal_related']                       = '相关的';
$lang['proposal_for_lead']                      = '机会';
$lang['proposal_for_customer']                  = '客户';
$lang['proposal']                               = '标书';
$lang['proposal_lowercase']                     = '提议';
$lang['proposals']                              = '标书';
$lang['proposals_lowercase']                    = '提议';
$lang['new_proposal']                           = '新标书';
$lang['proposal_currency']                      = '货币';
$lang['proposal_allow_comments']                = '允许评论';
$lang['proposal_allow_comments_help']           = '如果选中该选项的意见将在您的客户查看该提案被允许.';
$lang['proposal_edit']                          = '编辑';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = '发送电子邮件';
$lang['proposal_send_to_email_title']           = '发送标书到电子邮件';
$lang['proposal_attach_pdf']                    = '连接 PDF';
$lang['proposal_preview_template']              = '预览模板';
$lang['proposal_view']                          = '查看标书';
$lang['proposal_copy']                          = '复制';
$lang['proposal_delete']                        = '删除';
$lang['proposal_mark_as_open']                  = '标记为公开';
$lang['proposal_mark_as_declined']              = '标记为已拒绝';
$lang['proposal_mark_as_accepted']              = '标记为接受';
$lang['proposal_mark_as_sent']                  = '标记为发送';
$lang['proposal_to']                            = '公司名称';
$lang['proposal_add_comment']                   = '添加评论';
$lang['proposal_sent_to_email_success']         = '标书发送到电子邮件成功';
$lang['proposal_sent_to_email_fail']            = '未能发送标书到电子邮件';
$lang['proposal_copy_fail']                     = '复制提案失败';
$lang['proposal_copy_success']                  = '标书复制成功';
$lang['proposal_status_changed_success']        = '提案状态成功更改';
$lang['proposal_status_changed_fail']           = '未能改变标书状态';
$lang['proposal_assigned']                      = '分配';
$lang['proposal_comments']                      = '评论';
$lang['proposal_convert']                       = '转换';
$lang['proposal_convert_estimate']              = '报价';
$lang['proposal_convert_invoice']               = '发票';
$lang['proposal_convert_to_estimate']           = '转换为报价';
$lang['proposal_convert_to_invoice']            = '转换为发票';
$lang['proposal_convert_to_lead_disabled_help'] = '您需要将领先优势转化为客户，以创建％S';
$lang['proposal_convert_not_related_help']      = '该提案必须与客户以转换到％s';
$lang['proposal_converted_to_estimate_success'] = '标书转化为成功的报价';
$lang['proposal_converted_to_invoice_success']  = '标书转化为成功的发票';
$lang['proposal_converted_to_estimate_fail']    = '未能转换标书报价';
$lang['proposal_converted_to_invoice_fail']     = '未能将提案转化为发票';

# Proposals - view proposal template
$lang['proposal_total_info']   = '合计 %s';
$lang['proposal_accept_info']  = '接受';
$lang['proposal_decline_info'] = '拒绝';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = '重置';
$lang['customer_reset_password_heading']  = '重置您的密码';
$lang['customer_forgot_password_heading'] = '忘记密码';
$lang['customer_forgot_password']         = '忘记密码？';
$lang['customer_reset_password']          = '密码';
$lang['customer_reset_password_repeat']   = '重复密码';
$lang['customer_forgot_password_email']   = '电子邮件地址';
$lang['customer_forgot_password_submit']  = '标书';
$lang['customer_ticket_subject']          = '主题';

# Email templates
$lang['email_template_proposals_fields_heading'] = '提议';

# Tasks
$lang['add_task_attachments']                 = '附件';
$lang['task_view_attachments']                = '附件';
$lang['task_view_description']                = '描述';
$lang['task_table_is_finished_indicator']     = '是的';
$lang['task_table_is_not_finished_indicator'] = '不';
$lang['tasks_dt_finished']                    = '完成了的';

# Customer Groups
$lang['customer_group_add_heading']  = '新增客户群';
$lang['customer_group_edit_heading'] = '编辑用户组';
$lang['new_customer_group']          = '新的客户群';
$lang['customer_group_name']         = '名称';
$lang['customer_groups']             = '组';
$lang['customer_group']              = '客户群';
$lang['customer_group_lowercase']    = '客户群';

$lang['customer_have_invoices_by']       = '包含发票的状态 %s';
$lang['customer_have_estimates_by']      = '包含状态％S报价';
$lang['customer_have_contracts_by_type'] = '有％S合同的类型';

# Custom fields
$lang['custom_field_show_on_table']              = '显示表';
$lang['custom_field_show_on_client_portal']      = '客户门户网站';
$lang['custom_field_show_on_client_portal_help'] = '如果检查该字段，将显示在表中';
$lang['custom_field_visibility']                 = '能见度';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = '你也可以在这里添加翻译字符串。如果员工/系统语言其他那么默认菜单项的名称将在员工输出语言。否则如果字符串翻译文件中不存在将您输入的字符串.';
$lang['utilities_menu_icon']                = '图标';
$lang['active_menu_items']                  = '活动菜单项';
$lang['inactive_menu_items']                = '菜单项无效';
$lang['utilities_menu_permission']          = '许可';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = '名称';
$lang['utilities_menu_save']                = '保存菜单';

# Knowledge Base
$lang['view_articles_list']     = '查看文章';
$lang['view_articles_list_all'] = '所有的文章';
$lang['als_add_article']        = '添加文章';
$lang['als_all_articles']       = '所有的文章';
$lang['als_kb_groups']          = '组';

# Customizer Menu
$lang['menu_builder']            = '菜单设置';
$lang['main_menu']               = '主菜单';
$lang['setup_menu']              = '设置菜单';
$lang['utilities_menu_url_help'] = '％s是自动追加到url';

# Spam Filter - Tickets
$lang['spam_filters']                 = '垃圾邮件过滤器';
$lang['spam_filter']                  = '垃圾邮件过滤器';
$lang['new_spam_filter']              = '新的垃圾邮件过滤器';
$lang['spam_filter_blocked_senders']  = '阻止发件人';
$lang['spam_filter_blocked_subjects'] = '封锁对象';
$lang['spam_filter_blocked_phrases']  = '阻止短语';
$lang['spam_filter_content']          = '内容';
$lang['spamfilter_edit_heading']      = '编辑垃圾邮件过滤器';
$lang['spamfilter_add_heading']       = '添加垃圾邮件过滤';
$lang['spamfilter_type']              = '类型';
$lang['spamfilter_type_subject']      = '主题';
$lang['spamfilter_type_sender']       = '寄件人';
$lang['spamfilter_type_phrase']       = '短语';

# Tickets
$lang['block_sender']               = '阻止发件人';
$lang['sender_blocked']             = '发件人阻止';
$lang['sender_blocked_successfuly'] = '发件人成功阻止';
$lang['ticket_date_created']        = '创建日期';

#KB
$lang['edit_kb_group']             = '编辑组';
# Leads
$lang['edit_source']               = '编辑源';
$lang['edit_status']               = '编辑状态';
# Contacts
$lang['contract_type_edit']        = '编辑合同类型';
# Reports
$lang['report_by_customer_groups'] = '客户群体的总价值';
#Utilities
$lang['ticket_pipe_log']           = '票管日志';
$lang['ticket_pipe_name']          = '从名字';
$lang['ticket_pipe_email_to']      = '至';
$lang['ticket_pipe_email']         = '从电子邮件';
$lang['ticket_pipe_subject']       = '主题';
$lang['ticket_pipe_message']       = '消息';
$lang['ticket_pipe_date']          = '日期';
$lang['ticket_pipe_status']        = '状态';

# Home
$lang['home_invoice_paid']          = '已支付的发票';
$lang['home_invoice_partialy_paid'] = '部分支付的发票';
$lang['home_estimate_declined']     = '被拒的报价';
$lang['home_estimate_accepted']     = '已接受报价';
$lang['home_estimate_sent']         = '已发送的报价';
$lang['home_latest_activity']       = '最新活动';
$lang['home_my_tasks']              = '我的任务';
$lang['home_latest_activity']       = '最新活动';
$lang['home_my_todo_items']         = '我的所有项目';
$lang['home_widget_view_all']       = '查看所有';
$lang['home_stats_full_report']     = '完整的报告';

# Validation - Customer Portal

$lang['form_validation_required']    = '{域}域是必需的.';
$lang['form_validation_valid_email'] = '{域}域必须包含一个有效的电子邮件地址.';
$lang['form_validation_matches']     = '{field} 字段和 {param} 字段不符.';
$lang['form_validation_is_unique']   = '{域}域必须包含一个唯一值.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = '事件从今天开始 - %s ...';
$lang['not_event_public'] = '公共事件从今天开始 - %s...';
$lang['not_contract_expiry_reminder'] = '合同到期提醒 - %s...';
$lang['not_recurring_expense_cron_activity_heading'] = '经常性开支Cron作业活动';
$lang['not_recurring_invoices_cron_activity_heading'] = '反复出现的发票Cron作业活动';
$lang['not_recurring_total_renewed'] = '总更新: %s';
$lang['not_recurring_expenses_action_taken_from'] = '从一次性费用采取的行动';
$lang['not_invoice_created'] = '发票创建:';
$lang['not_invoice_renewed'] = '新的发票:';
$lang['not_expense_renewed'] = '更新费用:';
$lang['not_invoice_sent_to_customer'] = '发票发送给客户：%s 的';
$lang['not_invoice_sent_yes'] = '是的';
$lang['not_invoice_sent_not'] = '不';
$lang['not_action_taken_from_recurring_invoice'] = '从经常性发票采取的行动:';
$lang['not_new_reminder_for'] = '％s的新提醒';
$lang['not_received_one_or_more_messages_lead'] = '收到一个电子邮件消息';
$lang['not_received_lead_imported_email_integration'] = '主要导入电子邮件集成';
$lang['not_lead_imported_attachment'] = '从电子邮件附件导入';
$lang['not_estimate_status_change'] = '从电子邮件附件导入';
$lang['not_estimate_status_updated'] = '报价状态更新:从 %s 到 %s';
$lang['not_goal_message_success'] = '恭喜！我们实现了新的目标. <br /> 目标类型: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['not_assigned_lead_to_you'] = '%s 分配给你的领导';
$lang['not_lead_activity_assigned_to'] = '%s 被分配给 %s';
$lang['not_lead_activity_attachment_deleted'] = '删除附件';
$lang['not_lead_activity_status_updated'] = '%s 没有领导活动状态从 %s 到 %s';
$lang['not_lead_activity_contacted'] = '%s 引导这个联络 %s';
$lang['not_lead_activity_created'] = '%s 销售机会';
$lang['not_lead_activity_marked_lost'] = '标记为丢失';
$lang['not_lead_activity_unmarked_lost'] = '标记为丢失';
$lang['not_lead_activity_marked_junk'] = '标记为垃圾';
$lang['not_lead_activity_unmarked_junk'] = '标记为垃圾';
$lang['not_lead_activity_added_attachment'] = '新增附件';
$lang['not_lead_activity_converted_email'] = '电子邮件改变了线索. 第一封电子邮件的线索是: %s 和增加作为客户的电子邮件%s';
$lang['not_lead_activity_converted'] = '%s 将这一转变为顾客';
$lang['not_liked_your_post'] = '%s 喜欢你的文章 %s ...';
$lang['not_commented_your_post'] = '%s 评论你的文章 %s ...';
$lang['not_liked_your_comment'] = '%s 喜欢你的评论 %s ...';
$lang['not_proposal_assigned_to_you'] = '分配给你的标书 - %s ...';
$lang['not_proposal_comment_from_client'] = '客户对提案的新评论 %s ...';
$lang['not_proposal_proposal_accepted'] = '标书接受';
$lang['not_proposal_proposal_declined'] = '拒绝标书';
$lang['not_task_added_you_as_follower'] = '增加作为子账号的任务 %s ...';
$lang['not_task_added_someone_as_follower'] = '增加 %s任务给子账号 %s ...';
$lang['not_task_added_himself_as_follower'] = '增加自己子账号的任务 %s ...';
$lang['not_task_assigned_to_you'] = '给你布置一个任务 %s ...';
$lang['not_task_assigned_someone'] = '分配 %s 给 任务 %s ...';
$lang['not_task_will_do_user'] = '要做的任务 %s ...';
$lang['not_task_new_attachment'] = '新的附件添加';
$lang['not_task_marked_as_complete'] = '完成任务 %s';
$lang['not_task_unmarked_as_complete'] = '标记任务完成 %s';
$lang['not_ticket_assigned_to_you'] = '给你的票- %s ...';
$lang['not_ticket_reassigned_to_you'] = '工单分配给你 - %s ...';
$lang['not_estimate_customer_accepted'] = '祝贺! 客户接受报价的金额 %s';
$lang['not_estimate_customer_declined'] = '客户拒绝报价金额 %s';
$lang['estimate_activity_converted'] = '将这一报价转换为发票.<br /> %s';
$lang['estimate_activity_created'] = '创建的报价';
$lang['invoice_estimate_activity_removed_item'] = '删除项目<b>%s</b>';
$lang['estimate_activity_number_changed'] = '报价数额变化从 %s 到 %s';
$lang['invoice_activity_number_changed'] = '发票号码更改从 %s 到 %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = '更新项目的简短描述从 %s 到 %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = '更新项目长描述从 <b>%s</b> 到 <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = '更新项目率从 %s 到 %s';
$lang['invoice_estimate_activity_updated_qty_item'] = '项目的更新数量为<b>%s</b> 从 %s 到 %s';
$lang['invoice_estimate_activity_added_item'] = '添加新项<b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = '把报价发给客户';
$lang['estimate_activity_client_accepted_and_converted'] = '客户接受这一报价。报价被转换为发票号码是 %s';
$lang['estimate_activity_client_accepted'] = '客户接受这一报价';
$lang['estimate_activity_client_declined'] = '客户拒绝这一报价';
$lang['estimate_activity_marked'] = '有标记的报价 %s';
$lang['invoice_activity_status_updated'] = '发票状态更新从 %s 到 %s';
$lang['invoice_activity_created'] = '创建发票';
$lang['invoice_activity_from_expense'] = '把开支转化为发票';
$lang['invoice_activity_recuring_created'] = '通过CRON创建发票[经常性] ';
$lang['invoice_activity_recuring_from_expense_created'] = '使用CRON把开支转化为发票';
$lang['invoice_activity_sent_to_client_cron'] = '通过CRON发送给客户发票';
$lang['invoice_activity_sent_to_client'] = '向客户发送发票';
$lang['invoice_activity_marked_as_sent'] = '标记发票为已发送';
$lang['invoice_activity_payment_deleted'] = '已删除的发票付款. 付款 #%s, 总金额 %s';
$lang['invoice_activity_payment_made_by_client'] = '客户付款的发票总额<b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = '记录付款总额 <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = '添加附件';

# Navigation
$lang['top_search_placeholder'] = '搜索...';

# Staff
$lang['staff_profile_inactive_account'] = '这个工作人员帐户是无效的';

# Estimates
$lang['copy_estimate'] = '复制报价';
$lang['estimate_copied_successfuly'] = '报价复制成功';
$lang['estimate_copied_fail'] = '报价复制失败';

# Tasks
$lang['tasks_view_assigned_to_user'] = '分配给我的任务';
$lang['tasks_view_follower_by_user'] = ' i\'m 下面的任务';
$lang['no_tasks_found'] = '没有找到任务';

# Leads
$lang['leads_dt_datecreated'] = '创建';
$lang['leads_sort_by'] = '排序';
$lang['leads_sort_by_datecreated'] = '创建日期';
$lang['leads_sort_by_kanban_order'] = '订单';

# Proposals
$lang['proposal_items_name'] = '项目';
$lang['proposal_items_description'] = '描述';
$lang['proposal_items_qty'] = '数量';
$lang['proposal_items_rate'] = '金额';
$lang['proposal_items_tax'] = '税额';
$lang['proposal_items_amount'] = '金额';

# Authentication
$lang['check_email_for_reseting_password'] = '检查您的电子邮件，为进一步指示重置您的密码';
$lang['inactive_account'] = '无效帐户';
$lang['error_setting_new_password_key'] = '设置新密码时出错';
$lang['password_reset_message'] = '您的密码已重置。现在请登录!';
$lang['password_reset_message_fail'] = '您的密码重置错误。再试一次.';
$lang['password_reset_key_expired'] = '密码密钥过期或无效的用户';
$lang['admin_auth_reset_pass_repeat'] = '密码重复';
$lang['auth_reset_pass_email_not_found'] = '未发现电子邮件';
$lang['auth_reset_password_submit'] = '重置密码';

# Settings
$lang['settings_amount_to_words'] = '数量词';
$lang['settings_amount_to_words_desc'] = '在发票/报价上写出总金额';
$lang['settings_amount_to_words_enabled'] = '启用';
$lang['settings_total_to_words_lowercase'] = '字数成小写';
$lang['settings_show_tax_per_item'] = '显示每件税（发票/报价）';

# Reports
$lang['report_sales_months_three_months'] = '最近三个月';
$lang['report_invoice_number'] = '发票 #';
$lang['report_invoice_customer'] = '客户';
$lang['report_invoice_date'] = '日期';
$lang['report_invoice_duedate'] = '到期日期';
$lang['report_invoice_amount'] = '金额';
$lang['report_invoice_amount_with_tax'] = '金额与税收';
$lang['report_invoice_amount_open'] = 'amount open';
$lang['report_invoice_status'] = '状态';
$lang['report_invoice_total_amount_with_tax'] = '无税总金额';
$lang['report_invoice_total_amount_without_tax'] = '总额不含税';
$lang['report_invoice_total_taxes'] = '税额';

#Version 1.0.9

# Home stats
$lang['home_stats_see_weekly_payments'] = '看每周支付';
$lang['home_stats_by_project_status'] = '通过项目状态统计';
$lang['home_invoice_overview'] = '发票概述';
$lang['home_estimate_overview'] = '估价概述';
$lang['home_proposal_overview'] = '方案概述';
$lang['home_lead_overview'] = '销售机会概述';
$lang['home_my_projects'] = '我的项目';
$lang['home_announcements'] = '通告';

# Settings
$lang['settings_leads_kanban_limit'] = '设置引导看板限制';
$lang['settings_group_misc'] = '杂项';
$lang['show_projects_on_calendar'] = '在日历上显示项目';
$lang['settings_media_max_file_size_upload'] = '最大文件大小 (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = '允许客户/员工在第一个小时内添加/编辑任务注释 (管理者不适用)';

# Email templates
$lang['email_template_only_domain_email'] = '只有域名的电子邮件';

# Announcements
$lang['dismiss_announcement'] = '驳回通知';
$lang['dismiss_announcement'] = '驳回通知';
$lang['announcement_from'] = '来自:';
$lang['announcement_date'] = '发布日期: %s';
$lang['announcement_not_found'] = '没有发现公告';
$lang['announcements_recents'] = '最新公告';

# General
$lang['zip_invoices'] = 'Zip 发票';
$lang['zip_estimates'] = 'Zip 报价';
$lang['zip_payments'] = 'Zip 付款';
$lang['setup_help'] = '帮助';
$lang['clients_list_company'] = '客户';
$lang['dt_button_export'] = '输出';

$lang['dt_entries'] = '记录';
$lang['invoice_total_paid'] = '支付总额';
$lang['invoice_amount_due'] = '到期金额';
$lang['report_invoice_discount'] = '数目';

# Calendar
$lang['calendar_project'] = '项目';

# Leads
$lang['leads_import_assignee'] = '代理人';
$lang['customer_from_lead'] = '客户从 %s';
$lang['lead_kan_ban_attachments'] = '附件 %s';
$lang['leads_sort_by_lastcontact'] = '最后联系';

# Tasks
$lang['task_comment_added'] = '成功添加评论';
$lang['task_duedate'] = '截止日期';
$lang['task_view_comments'] = '评论';
$lang['task_comment_updated'] = '评论更新';
$lang['task_visible_to_client'] = '可见客户';
$lang['task_hourly_rate'] = '每小时收费';
$lang['hours'] = '小时';
$lang['seconds'] = '秒';
$lang['minutes'] = '分钟';
$lang['task_start_timer'] = '开始时间';
$lang['task_stop_timer'] = '结束时间';
$lang['task_billable_help'] = '帮助计费的';
$lang['task_billable'] = '账单';
$lang['task_billable_yes'] = '账单';
$lang['task_billable_no'] = '未收费';
$lang['task_billed'] = '已收费';
$lang['task_billed_yes'] = '已收费';
$lang['task_billed_no'] = '未收费';
$lang['task_user_logged_time'] = '你的记录时间:';
$lang['task_total_logged_time'] = '总记录时间:';
$lang['task_is_billed'] = '此任务结算与发票号码 %s';
$lang['task_statistics'] = '统计';
$lang['task_milestone'] = '进程';

# Tickets
$lang['ticket_message_updated_successfuly'] = '信息更新成功';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = '项目任务不包括在这个列表中.';
$lang['show_quantity_as'] = '显示数量:';
$lang['quantity_as_qty'] = '数量';
$lang['quantity_as_hours'] = '小时';
$lang['invoice_table_hours_heading'] = '小时';
$lang['bill_tasks'] = 'Bill Tasks';
$lang['invoice_estimate_sent_to_email'] = '电子邮件';

# Estimates
$lang['estimate_table_hours_heading'] = '小时';

# General
$lang['is_customer_indicator'] = '客户';
$lang['print']            = '照片';
$lang['customer_permission_projects']            = '项目';
$lang['no_timers_found']            = '没有创建开始时间';
$lang['timers_started_confirm_logout']            = '创建开始时间!<br /><br />你确定你要注销还没有结束的时间?';
$lang['confirm_logout']            = '注销';
$lang['timer_top_started']            = '开始在 %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = '你不能改变账单类型. 已经发现了这个项目的任务.';
$lang['project_customer_permission_warning'] = '该系统表明，客户不具有项目的权限. 顾客不能够看到这个项目. 考虑在客户配置文件选项中权限中添加权限.';
$lang['project_invoice_timesheet_start_time'] = '开始时间: %s';
$lang['project_invoice_timesheet_end_time'] = '结束时间: %s';
$lang['project_invoice_timesheet_total_logged_time'] = '记录时间: %s';
$lang['project_view_as_client'] = '项目客户';
$lang['project_mark_all_tasks_as_completed'] = '完成所有的任务，停止所有定时器 (没有发送给项目成员的通知)';
$lang['project_not_started_status_tasks_timers_found'] = '此项目发现任务计时器，但该项目尚未启动. 建议更改项目状态进展';
$lang['project_status'] = '状态';
$lang['project_status_1'] = '没有开始';
$lang['project_status_2'] = '进行中';
$lang['project_status_3'] = '推迟';
$lang['project_status_4'] = '完成了的';

$lang['project_file_uploaded_by_customer'] = '客户';
$lang['project_file_dateadded'] = '上传日期';
$lang['project_file_filename'] = '文件名';
$lang['project_file__filetype'] = '文件类型';
$lang['project_file_visible_to_customer'] = '可见客户';
$lang['project_file_uploaded_by'] = '上传的';
$lang['edit_project'] = '编辑项目';
$lang['copy_project'] = '复制项目';
$lang['delete_project'] = '删除项目';
$lang['project_task_assigned_to_user'] = '分配给你的任务';
$lang['seconds'] = '秒';
$lang['hours'] = '小时';
$lang['minutes'] = '分钟';
$lang['project']                = '项目';
$lang['project_lowercase']      = '项目';
$lang['projects']                = '项目';
$lang['projects_lowercase']      = '项目';
$lang['project_settings']      = '项目设置';
$lang['project_invoiced_successfuly']             = '成功项目发票';
$lang['new_project']             = '新项目';
$lang['project_files']            = '文件';
$lang['project_activity']            = '激活';
$lang['project_name']            = '项目名';
$lang['project_description']            = '项目描述';
$lang['project_customer']            = '客户';
$lang['project_start_date']            = '开始日期';
$lang['project_datecreated']            = '创建日期';
$lang['project_deadline']            = '截止期限';
$lang['project_billing_type']            = '账单类型';
$lang['project_billing_type_fixed_cost']            = '固定成本';
$lang['project_billing_type_project_hours']            = '项目时间';
$lang['project_billing_type_project_task_hours']            = '任务时间';
$lang['project_billing_type_project_task_hours_hourly_rate']            = '基于任务的时薪';
$lang['project_rate_per_hour']            = '每小时速度';
$lang['project_total_cost']            = '总成本';
$lang['project_members']            = '项目成员';
$lang['project_member_removed']     = '项目成员删除成功';
$lang['project_overview']           = '项目概述';
$lang['project_gant']            = '条状视图';
$lang['project_milestones']            = '进程';
$lang['project_milestone_order']            = '订购';
$lang['project_milestone_duedate_passed']            = '通过交货期';
$lang['record_timesheet']            = '工时表';
$lang['new_milestone']            = '新进程';
$lang['edit_milestone']            = '编辑进程';
$lang['milestone_name']            = '名称';
$lang['milestone_due_date']            = '交货期';
$lang['project_milestone']            = '进程';
$lang['project_notes']            = '备注';
$lang['project_timesheets']            = '时间表';
$lang['project_timesheet']            = '工时表';
$lang['milestone_total_logged_time']            = '记录时间';
$lang['project_overview_total_logged_hours']            = '总记录时间';
$lang['milestones_uncategorized']            = '未分类';
$lang['milestone_no_tasks_found']            = '没有找到任务';
$lang['copy_project_discussions_not_included']            = '附件和注释不包括在内';
$lang['project_copied_successfuly']            = '项目数据复制成功';
$lang['failed_to_copy_project']            = '复制项目失败';
$lang['copy_project_task_include_check_list_items']            = '复制清单项目';
$lang['copy_project_task_include_assignees']            = '复制相同的代理人';
$lang['copy_project_task_include_followers']            = '复制相同的仿效者';

$lang['project_days_left']            = '左边的日子';
$lang['project_open_tasks']            = '打开任务';
$lang['timesheet_stop_timer']            = '停止定时器';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = '无法添加时间表。结束时间比开始时间小';
$lang['project_timesheet_user']            = '成员';
$lang['project_timesheet_start_time']            = '开始时间';
$lang['project_timesheet_end_time']            = '结束时间';
$lang['project_timesheet_time_spend']            = '花费的时间';
$lang['project_timesheet_task']            = '任务';
$lang['project_invoices']                = '发票';
$lang['total_logged_hours_by_staff']            = '总记录时间';
$lang['invoice_project']            = '发票项目';
$lang['invoice_project_info']            = '工程发票信息';
$lang['invoice_project_data_single_line']            = '一行';
$lang['invoice_project_data_task_per_item']            = '每项任务';
$lang['invoice_project_data_timesheets_individualy']            = '分别所有的时间表';
$lang['invoice_project_item_name_data']            = '物品的名称';
$lang['invoice_project_description_data']            = '描述';
$lang['invoice_project_projectname_taskname']            = '项目名 + 任务名';
$lang['invoice_project_all_tasks_total_logged_time']            = '所有的任务 + 每个任务的总记录时间';
$lang['invoice_project_project_name_data']            = '项目名';
$lang['invoice_project_timesheet_indivudualy_data']            = '时间表开始时间 + 结束时间 + 总记录时间';
$lang['invoice_project_total_logged_time_data']            = '总记录时间';

$lang['project_allow_client_to'] = '允许客户 %s';
$lang['project_setting_view_task_attachments'] = '查看任务附件';
$lang['project_setting_view_task_checklist_items'] = '查看任务清单项目';
$lang['project_setting_upload_files'] = '上传文件';
$lang['project_setting_view_task_comments'] = '查看任务的意见';
$lang['project_setting_upload_on_tasks'] = '上传任务附件';
$lang['project_setting_view_task_total_logged_time'] = '查看任务总日志时间';
$lang['project_setting_open_discussions'] = '开放的讨论';
$lang['project_setting_comment_on_tasks'] = '项目任务';
$lang['project_setting_view_tasks'] = '查看任务';
$lang['project_setting_view_milestones'] = '查看进程';
$lang['project_setting_view_gantt'] = '条状视图';
$lang['project_setting_view_timesheets'] = '查看时间表';
$lang['project_setting_view_activity_log'] = '查看活动日志';
$lang['project_setting_view_team_members'] = '查看团队成员';

$lang['project_discussion_visible_to_customer_yes']                 = '看得见的';
$lang['project_discussion_visible_to_customer_no']                 = '看不见的';

$lang['project_discussion_posted_on']                 = '张贴在 %s';
$lang['project_discussion_posted_by']                 = '发表于 %s';
$lang['project_discussion_failed_to_delete']                 = '删除讨论失败';
$lang['project_discussion_deleted']                 = '成功删除聊天';
$lang['project_discussion_no_activity']                 = '没有活动';
$lang['project_discussion']                 = '讨论';
$lang['project_discussions']                 = '讨论';
$lang['edit_discussion'] = '创建讨论';
$lang['new_project_discussion'] = '创建讨论';
$lang['project_discussion_subject'] = '主题';
$lang['project_discussion_description'] = '类型';
$lang['project_discussion_show_to_customer'] = '可见客户';
$lang['project_discussion_total_comments'] = '总的评论';
$lang['project_discussion_last_activity'] = '最后的活动';
$lang['discussion_add_comment'] = '添加评论';
$lang['discussion_newest'] = '最新的';
$lang['discussion_oldest'] = '以前的';
$lang['discussion_attachments'] = '附件';
$lang['discussion_send'] = '发送';
$lang['discussion_reply'] = '回答';
$lang['discussion_edit'] = '编辑';
$lang['discussion_edited'] = '修改';
$lang['discussion_you'] = '你';
$lang['discussion_save'] = '保存';
$lang['discussion_delete'] = '删除';
$lang['discussion_view_all_replies'] = '显示全部回复';
$lang['discussion_hide_replies'] = '隐藏回答';
$lang['discussion_no_comments'] = '没有评论';
$lang['discussion_no_attachments'] = '没有附件';
$lang['discussion_attachments_drop'] = '文件上传拖放';
$lang['project_note'] = '备注';
$lang['project_note_private'] = '私人标注';
$lang['project_save_note'] = '保存备注';

# Project Activity
$lang['project_activity_created'] = '创建项目';
$lang['project_activity_updated'] = '更新的项目';
$lang['project_activity_removed_team_member'] = '移除团队成员';
$lang['project_activity_added_team_member'] = '增加了新的团队成员';
$lang['project_activity_marked_all_tasks_as_complete'] = '完成所有任务';
$lang['project_activity_recorded_timesheet'] = '记录时间表';
$lang['project_activity_task_name'] = '任务:';
$lang['project_activity_deleted_discussion'] = '删除的讨论';
$lang['project_activity_created_discussion'] = '创建的讨论';
$lang['project_activity_updated_discussion'] = '更新的讨论';
$lang['project_activity_commented_on_discussion'] = '评论的讨论';
$lang['project_activity_deleted_discussion_comment'] = '删除讨论的评论';
$lang['project_activity_deleted_milestone'] = '删除的进程';
$lang['project_activity_updated_milestone'] = '最新的进程';
$lang['project_activity_created_milestone'] = '创建新的进程';
$lang['project_activity_invoiced_project'] = '发票项目';
$lang['project_activity_task_marked_complete'] = '任务标记成功';
$lang['project_activity_task_unmarked_complete'] = '取消标记成功';
$lang['project_activity_task_deleted'] = '项目已删除';
$lang['project_activity_new_task_comment'] = '添加评论';
$lang['project_activity_new_task_attachment'] = '上传附件';
$lang['project_activity_new_task_assignee'] = '增加了新的任务成员';
$lang['project_activity_task_assignee_removed'] = '删除任务成员';
$lang['project_activity_task_timesheet_deleted'] = '删除时间表';
$lang['project_activity_uploaded_file'] = '上传项目文件';
$lang['project_activity_status_updated'] = '更新项目状态';
$lang['project_activity_visible_to_customer'] = '对客户可见';
$lang['project_activity_project_file_removed'] = '删除项目文件';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = '新的文件已上传';
$lang['not_customer_created_new_project_discussion'] = '新讨论已添加';
$lang['not_customer_commented_on_project_discussion'] = '有新评论';

# Customers area
$lang['clients_my_estimates'] = '报价';
$lang['client_no_reply'] = '无答复';
$lang['clients_nav_projects'] = '项目';
$lang['clients_my_projects'] = '项目';
$lang['client_profile_image'] = '头像';

/////
$lang['sales_report_cancelled_invoices_not_included'] = '取消被排除在报告中的发票';
$lang['invoices_merge_cancel_merged_invoices'] = '将合并的发票标记为取消而不是删除';
$lang['invoice_marked_as_cancelled_successfuly'] = '发票被标明为已被取消';
$lang['invoice_unmarked_as_cancelled'] = '发票标记为取消成功';

$lang['tasks_reminder_notification_before'] = '设置截止日期前的提醒时间(天) ';
$lang['not_task_deadline_reminder'] = '任务到期提醒';
$lang['dt_length_menu_all'] = '全部';
$lang['task_not_finished'] = '没有完成';
$lang['task_billed_cant_start_timer'] = '任务结束。定时器不能启动';
$lang['invoice_task_billable_timers_found'] = '根据工作时间开具发票';
$lang['project_timesheet_not_updated'] = '时间表不受影响';
$lang['project_invoice_task_no_timers_found'] = '没有找到这个任务的计时器';
$lang['invoice_project_tasks_not_started'] = '还没有开始|开始日期: %s';
$lang['invoice_project_see_billed_tasks'] = '查看此发票上的任务';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = '所有已开帐单的任务将被标记为完成';
$lang['invoice_project_nothing_to_bill'] = '没有任务. 随意添加任何你想添加的项目.';
$lang['invoice_project_start_date_tasks_not_passed'] = '被设定为在将来开始的任务不能开具账单';
$lang['invoice_project_stop_all_timers'] = '停止所有的定时器';
$lang['invoice_project_stop_billabe_timers_only'] = '只有停止计费计时器';
$lang['project_tasks_total_timers_stopped'] = '停止 %s 的所有定时器';
$lang['project_invoice_timers_started'] = '发现有计费的任务在运行，发票不能创造。请停止任务定时器创建发票.';
$lang['task_start_timer_only_assignee'] = '你不能启动定时器，直到你被分配到这个任务!';
$lang['task_comments'] = '评论';
$lang['invoice_total_tax'] = '总税额';
$lang['estimates_total_tax'] = '总税额';
$lang['report_invoice_total_tax'] = '总税额';
$lang['home_tickets'] = '工单';
$lang['home_project_activity'] = '最新的项目活动记录';
$lang['home_project_activity_not_found'] = '没有发现项目活动记录';
$lang['view_tracking'] = '查看项目追踪';
$lang['view_date'] = '日期';
$lang['view_ip'] = 'IP 地址';
$lang['article_total_views'] = '总阅读量';
$lang['leads_source'] = '来源';
$lang['invoices_available_for_merging'] = '可以合并的发票';
$lang['invoices_merge_discount'] = '你必须为 %s 的所有发票手工添加折扣';
$lang['invoice_merge_number_warning'] = '合并将导致发票在日历上显示错误.';
$lang['invoice_mark_as'] = '标记人 %s';
$lang['invoice_unmark_as'] = '取消人 %s';
$lang['invoice_status_cancelled'] = '已取消';
$lang['tasks_reminder_notification_before_help'] = '在项目截止前X天提醒成员邮件只会发送给被分配到此项目的成员.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Select all tasks';
$lang['lead_company'] = 'Company';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Confirm';
$lang['task_assigned'] = 'Assigned to';
$lang['switch_to_pipeline'] = 'Switch to pipeline';
$lang['switch_to_list_view'] = 'Switch to list';
$lang['estimates_pipeline'] = 'Estimates Pipeline';
$lang['estimates_pipeline_sort'] = 'Sort By';
$lang['estimates_sort_expiry_date'] = 'Expiry Date';
$lang['estimates_sort_pipeline'] = 'Pipeline Order';
$lang['estimates_sort_datecreated'] = 'Date Created';
$lang['estimates_sort_estimate_date'] = 'Estimate Date';
$lang['estimate_set_reminder_title'] = 'Set Estimate Reminder';
$lang['invoice_set_reminder_title'] = 'Set Invoice Reminder';
$lang['estimate_reminders'] = 'Reminders';
$lang['invoice_reminders'] = 'Reminders';
$lang['estimate_notes'] = 'Notes';
$lang['estimate_add_note'] = 'Add Note';
$lang['dropdown_non_selected_tex'] = 'Nothing selected';
$lang['auto_close_ticket_after'] = 'Auto close ticket after (Hours)';
$lang['event_description'] = 'Description';
$lang['delete_event'] = 'Delete';
$lang['not_new_ticket_created'] = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket'] = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated'] = 'Event updated successfuly';
$lang['customer_contacts'] = 'Contacts';
$lang['new_contact'] = 'New Contact';
$lang['contact'] = 'Contact';
$lang['contact_lowercase'] = 'contact';
$lang['contact_primary'] = 'Primary contact';
$lang['contact_position'] = 'Position';
$lang['contact_active'] = 'Active';
$lang['client_company_info'] = 'Company details';
$lang['proposal_save'] = 'Save Proposal';
$lang['calendar'] = 'Calendar';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Font';
$lang['settings_pdf_table_heading_color'] = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color'] = 'Items table heading text color';
$lang['settings_pdf_font_size'] = 'Default font size';
$lang['proposal_status_draft'] = 'Draft';
$lang['custom_field_contacts'] = 'Contacts';
$lang['company_primary_email'] = 'Primary email';
$lang['client_register_contact_info'] = 'Primary Contact Information';
$lang['client_register_company_info'] = 'Company Informations';
$lang['contact_permissions_info'] = 'Make sure to set appropriate permissions for this contact';
$lang['defaut_leads_kanban_sort'] = 'Default leads Kan Ban Sort';
$lang['defaut_leads_kanban_sort_type'] = 'Sort';
$lang['order_ascending'] = 'Ascending';
$lang['order_descending'] = 'Descending';
$lang['calendar_expand'] = 'expand';
$lang['proposal_reminders'] = 'Reminders';
$lang['proposal_set_reminder_title'] = 'Set proposal reminder';
$lang['settings_allowed_upload_file_types'] = 'Allowed file types';
$lang['no_primary_contact'] = 'This customer dont have primary contact. You need to setup primary contact login as customer. Its recomended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Customer fields merging';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Phone';
$lang['invoice_status_report_all'] = 'All';
$lang['import_contact_field'] = 'Contact field';
$lang['proposal_mark_as_draft'] = 'Mark as Draft';

$lang['file_uploaded_success'] = 'There is no error, the file uploaded with success';
$lang['file_exceds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded'] = 'No file was uploaded';
$lang['file_missing_temporary_folder'] = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk'] = 'Failed to write file to disk.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'Expand';
$lang['view_pdf'] = 'View PDF';
$lang['expense_repeat_every'] = 'Repeat every';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Switch to kan ban';
$lang['survey_no_questions'] = 'This survey does not have questions added yet.';
$lang['survey_submit'] = 'Submit';
$lang['contract_content'] = 'Contract';
$lang['contract_save'] = 'Save Contract';
$lang['contract_send_to_email'] = 'Send to email';
$lang['contract_send_to_client_modal_heading'] = 'Send contract to email';
$lang['contract_send_to'] = 'Send to';
$lang['contract_send_to_client_attach_pdf'] = 'Attach PDF';
$lang['contract_send_to_client_preview_template'] = 'Preview Email Template';
$lang['include_attachments_to_email'] = 'Include attachments to email';
$lang['contract_sent_to_client_success'] = 'The contract is successfully sent to the customer';
$lang['contract_sent_to_client_fail'] = 'Failed to send contract';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Invalid username or password';
$lang['client_old_password_incorect']     = 'Your old password is incorrect';
$lang['client_password_changed']          = 'Your password has been changed';
$lang['check_for_new_version']          = 'Check for new version';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total leads deleted: %s';
$lang['total_clients_deleted'] = 'Total customers deleted: %s';
$lang['confirm_action_prompt'] = 'Are you sure you want to perform this action?';
$lang['mass_delete'] = 'Mass Delete';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Add/Edit Members';
$lang['project_overview_logged_hours'] = 'Logged Hours:';
$lang['project_overview_billable_hours'] = 'Billable Hours:';
$lang['project_overview_billed_hours'] = 'Billed Hours:';
$lang['project_overview_unbilled_hours'] = 'Unbilled Hours:';
$lang['calendar_first_day'] = 'First Day';
$lang['dt_mass_delete_help'] = 'Use the checkboxes on the right side for mass delete.';
$lang['permission_view'] = 'View';
$lang['permission_edit'] = 'Edit';
$lang['permission_create'] = 'Create';
$lang['permission_delete'] = 'Delete';
$lang['permission'] = 'Permission';
$lang['permissions'] = 'Permissions';
$lang['access_denied'] = 'Access Danied';
$lang['proposals_pipeline'] = 'Proposals Pipeline';
$lang['proposals_pipeline_sort'] = 'Sort By';
$lang['proposals_sort_open_till'] = 'Open Till';
$lang['proposals_sort_pipeline'] = 'Pipeline Order';
$lang['proposals_sort_datecreated'] = 'Date Created';
$lang['proposals_sort_proposal_date'] = 'Proposal Date';
$lang['is_not_staff_member'] = 'Not staff member';
$lang['lead_created'] = 'Created';
$lang['access_tickets_to_none_staff_members'] = 'Allow access to tickets for none staff members';
$lang['project_expenses'] = 'Expenses';
$lang['expense_currency'] = 'Currency';
$lang['currency_valid_code_help'] = 'Make sure to enter valid currency code.';
$lang['week'] = 'Week';
$lang['weeks'] = 'Weeks';
$lang['month'] = 'Month';
$lang['months'] = 'Months';
$lang['year'] = 'Year';
$lang['years'] = 'Years';
$lang['expense_report_category'] = 'Category';
$lang['expense_paid_via'] = 'Paid Via %s';
$lang['item_as_expense'] = '[Expense]';
$lang['show_help_on_setup_menu'] = 'Show help menu item on setup menu';
$lang['customers_summary_total'] = 'Total Customers';
$lang['filter_by'] = 'Filter by';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site key';
$lang['recaptcha_secret_key'] = 'Secret key';
$lang['recaptcha_error'] = 'The reCAPTCHA field is telling that you are a robot.';
$lang['smtp_username'] = 'SMTP Username';
$lang['smtp_username_help'] = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']= 'Pinned Project';
$lang['pin_project']= 'Pin Project';
$lang['unpin_project']= 'Unpin Project';
$lang['smtp_encryption']= 'Email Encryption';
$lang['smtp_encryption_none']= 'None';
$lang['show_proposals_on_calendar']= 'Proposals';
$lang['invoice_project_see_billed_expenses']= 'See expenses who wil be billed on this invoice';
$lang['recaptcha_help_settings']= 'If fields are not filled reCAPTCHA will not be used.';
$lang['project_overview_expenses'] = 'Total Expenses';
$lang['project_overview_expenses_billable'] = 'Billable Expenses';
$lang['project_overview_expenses_billed'] = 'Billed Expenses';
$lang['project_overview_expenses_unbilled'] = 'Unbilled Expenses';
$lang['announcement_date_list'] = 'Date';
$lang['project_setting_view_finance_overview'] = 'view finance overview';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Recorded Expense';
$lang['save_customer_and_add_contact'] = 'Save and create contact';
$lang['tickets_chart_weekly_opening_stats'] = 'Weekly Stats';
$lang['related_knowledgebase_articles'] = 'Related Articles';
$lang['detailed_overview'] = 'Tasks Overview';
$lang['tasks_total_checklists_finished'] = 'Total checklist items marked as finished';
$lang['tasks_total_added_attachments'] = 'Total attachments added';
$lang['tasks_total_comments'] = 'Total comments';
$lang['task_finished_on_time'] = 'Finished on time?';
$lang['task_finished_on_time_indicator'] = 'Yes';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['task_filter_fetch_month_by'] = 'Fetch month from';
$lang['filter'] = 'Filter';
$lang['task_filter_detailed_all_months'] = 'All Months';
$lang['task_filter_detailed_show_tasks'] = 'Show Tasks';


# Version 1.1.7
$lang['email_template_ticket_warning'] = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields wont be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recored'] = 'New invoice payment - %s';
$lang['email_template_contact_warning'] = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['theme_style'] = 'Theme Style';
$lang['change_role_permission_warning'] = 'Changing role permissions now wont affected current staff members permissions that are using this role.';
$lang['task_copied_successfuly'] = 'Task copied successfully';
$lang['failed_to_copy_task'] = 'Failed to copy task';
$lang['not_project_file_uploaded'] = 'New project file added';
$lang['settings_calendar_color'] = '%s Color';
$lang['settings_calendar_colors_heading'] = 'Styling';
$lang['reminder'] = 'Reminder';
$lang['back_to_tasks_list'] = 'Back to tasks list';
$lang['copy_task_confirm'] = 'Confirm';
$lang['changing_items_affect_warning'] = 'Changing item info wont affect on the created invoices/estimates.';
$lang['tax_is_used_in_expenses_warning'] = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note'] = 'Note';
$lang['leads_staff_report_converted'] = 'Total converted leads';
$lang['leads_staff_report_created'] = 'Total created leads';
$lang['leads_staff_report_lost'] = 'Total lost leads';
$lang['client_go_to_dashboard'] = 'Back to portal';
$lang['show_estimate_reminders_on_calendar'] = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar'] = 'Invoice Reminders';
$lang['calendar_estimate_reminder'] = 'Estimate Reminder';
$lang['calendar_invoice_reminder'] = 'Invoice Reminder';
$lang['show_proposal_reminders_on_calendar'] = 'Proposal Reminders';
$lang['calendar_proposal_reminder'] = 'Proposal Reminder';
$lang['proposal_due_after']= 'Proposal Due After (days)';
$lang['project_progress']= 'Progress';
$lang['calculate_progress_through_tasks']= 'Calculate progress through tasks';
$lang['allow_customer_to_change_ticket_status']= 'Allow customer to change ticket status from customers area';
$lang['switch_to_general_report']= 'Switch to staff report';
$lang['switch_to_staff_report']= 'Switch to general report';
$lang['generate']= 'Generate';
$lang['from_date']= 'From date';
$lang['to_date']= 'To date';
$lang['not_results_found']= 'No results found';
$lang['lead_lock_after_convert_to_customer']= 'Dont allow editing the lead after converting to customer (admins not applied)';
$lang['default_pipeline_sort'] = 'Default pipeline sort';
$lang['not_goal_message_failed'] = 'We failed to achieve goal!<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['toggle_full_view'] = 'Toggle full view';
$lang['not_estimate_invoice_deleted'] = 'deleted the created invoice';
$lang['not_task_new_comment'] = 'commented on task %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'This invoice number exists for the ongoing year.';
$lang['estimate_number_exists'] = 'This estimate number exists for the ongoing year.';
$lang['email_exists'] = 'Email already exists';
$lang['field_is_required'] = 'This field is required';
$lang['field_max_length'] = 'Please enter value no more than {0} characters';
$lang['not_uploaded_project_file'] = 'New file uploaded';
$lang['not_created_new_project_discussion'] = 'New project discussion created';
$lang['not_commented_on_project_discussion'] = 'New comment on project discussion';
$lang['all_staff_members'] = 'All staff members';
$lang['help_project_permissions'] = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions'] = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recuring_days'] = 'Day(s)';
$lang['expense_recuring_weeks'] = 'Week(s)';
$lang['expense_recuring_months'] = 'Month(s)';
$lang['expense_recuring_years'] = 'Years(s)';
$lang['reset_to_default_color'] = 'Reset to default color';
$lang['pdf_logo_width'] = 'Logo Width (PX)';
$lang['drop_files_here_to_upload'] = 'Drop files here to upload';
$lang['browser_not_support_drag_and_drop'] = 'Your browser does not support drag\'n\'drop file uploads';
$lang['remove_file'] = 'Remove file';
$lang['you_can_not_upload_any_more_files'] = 'You can not upload any more files';
$lang['custom_field_only_admin'] = 'Restrict visibility for administrators only';
$lang['leads_default_source'] = 'Default source';
$lang['clear_activity_log'] = 'Clear log';
$lang['default_contact_permissions'] = 'Default contact permissions';
$lang['invoice_activity_marked_as_cancelled'] = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text'] = 'Please wait...';
$lang['projects_summary'] = 'Projects summary';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Encryption';
$lang['dept_email_password'] = 'Password';
$lang['dept_email_no_encryption'] = 'No Encryption';
$lang['failed_to_decrypt_password'] = 'Failed to decrypt password';
$lang['delete_mail_after_import'] = 'Delete mail after import?';
$lang['expiry_reminder_enabled'] = 'Send expiration reminder';
$lang['send_expiry_reminder_before'] = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent'] = 'Expiry reminder sent';
$lang['send_expiry_reminder'] = 'Sent expiration reminder';
$lang['sent_expiry_reminder_success'] = 'Expiration reminder successfuly sent';
$lang['sent_expiry_reminder_fail'] = 'Failed to send expiration reminder';
$lang['leads_default_status'] = 'Default status';
$lang['item_description_placeholder'] = 'Description';
$lang['item_long_description_placeholder'] = 'Long description';
$lang['item_quantity_placeholder'] = 'Quantity';
$lang['item_rate_placeholder'] = 'Rate';
$lang['tickets_summary'] = 'Tickets Summary';
$lang['tasks_list_priority'] = 'Priority';
$lang['ticket_status_db_2'] = 'In Progress';
$lang['ticket_status_db_1'] = 'Open';
$lang['ticket_status_db_3'] = 'Answered';
$lang['ticket_status_db_4'] = 'On Hold';
$lang['ticket_status_db_5'] = 'Closed';
$lang['ticket_priority_db_1'] = 'Low';
$lang['ticket_priority_db_2'] = 'Medium';
$lang['ticket_priority_db_3'] = 'High';
$lang['customer_have_projects_by'] = 'Contains projects by status %s';
$lang['customer_have_proposals_by'] = 'Contains proposals by status %s';
$lang['do_not_redirect_payment'] = 'Do not redirect me to the payment processor';
$lang['extension_not_allowed'] = 'Extension not allowed';
$lang['project_tickets'] = 'Tickets';
$lang['invoice_report'] = 'Invoice Report';
$lang['payment_modes_report'] = 'Payment Modes (Transactions)';
$lang['customer_admins'] = 'Customer Admins';
$lang['assign_admin'] = 'Assign admin';
$lang['customer_admin_date_assigned'] = 'Date Assigned';
$lang['customer_admin_login_as_client_message'] = 'Hello %s. You are added as admin to this customer. To see all customer data and adjust the portal login as customer.';
$lang['ticket_form_validation_file_size'] = 'File size must be less than %s';
$lang['has_transactions_currency_base_change'] = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all'] = 'All';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Allow recaptcha on customers area (Login/Register)';
$lang['project_marked_as_finished'] = 'Project completed';
$lang['project_status_updated'] = 'Project status updated';
$lang['remove_decimals_on_zero'] = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row (Invoices/Estimates)';
