<?php
# Version 1.0.0
#
# General
$lang['id'] = 'ID';
$lang['name'] = 'Nome';
$lang['options'] = 'Opções';
$lang['submit'] = 'Salvar';
$lang['added_successfuly'] = '%s adicionado com sucesso.';
$lang['updated_successfuly'] = '%s atualizado com sucesso.';
$lang['edit'] = 'Editar %s';
$lang['add_new'] = 'Adicionar novo %s';
$lang['deleted'] = '%s deletado';
$lang['problem_deleting'] = 'Deletado o problema %s';
$lang['is_referenced'] = 'O ID do %s já foi usado.';
$lang['close'] = 'Fechar';
$lang['send'] = 'Enviar';
$lang['cancel'] = 'Cancelar';
$lang['go_back'] = 'Voltar';
$lang['error_uploading_file'] = 'Erro ao atualizar o arquivo';
$lang['load_more'] = 'Carregar Mais';
$lang['cant_delete_default'] = 'Não é possível deletar o padrão %s';

# Invoice General
$lang['invoice_status_paid'] = 'Pago';
$lang['invoice_status_unpaid'] = 'Não pago';
$lang['invoice_status_overdue'] = 'Vencido';
$lang['invoice_status_not_paid_completely'] = 'Parcialmente Pago';

$lang['invoice_pdf_heading'] = 'INVOICE';

$lang['invoice_table_item_heading'] = 'Item';
$lang['invoice_table_quantity_heading'] = 'Qtdd';
$lang['invoice_table_rate_heading'] = 'Tarifa';
$lang['invoice_table_tax_heading'] = 'Taxa';
$lang['invoice_table_amount_heading'] = 'Quantia';
$lang['invoice_subtotal'] = 'Sub Total';
$lang['invoice_adjustment'] = 'Ajuste';
$lang['invoice_total'] = 'Total';
$lang['invoice_vat'] = 'Número VAT';
$lang['invoice_bill_to'] = 'Conta Para';
$lang['invoice_data_date'] = 'Data da Fatura:';
$lang['invoice_data_duedate'] = 'Data de Vencimento:';
$lang['invoice_received_payments'] = 'Transações';
$lang['invoice_no_payments_found'] = 'Nenhum Pagamento encontrado para essa fatura';
$lang['invoice_note'] = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pagamento #';
$lang['invoice_payments_table_mode_heading'] = 'Modo de Pagamento';
$lang['invoice_payments_table_date_heading'] = 'Data';
$lang['invoice_payments_table_amount_heading'] = 'Quantia';


# Announcements
$lang['announcement'] = 'Anúncio';
$lang['announcement_lowercase'] = 'anúncio';
$lang['announcements'] = 'Anúncios';
$lang['announcements_lowercase'] = 'anúncios';
$lang['new_announcement'] = 'Novo Anúncio';
$lang['announcement_name'] = 'Nome do anúncio';
$lang['announcement_message'] = 'Mensagem';
$lang['announcement_show_to_staff'] = 'Mostrar para o Funcionários';
$lang['announcement_show_to_clients'] = 'Mostrar para os Clientes';
$lang['announcement_show_my_name'] = 'Mostrar meu nome';

# Clients
$lang['clients'] = 'Clientes';
$lang['client'] = 'Cliente';
$lang['new_client'] = 'Novo Cliente';
$lang['client_lowercase'] = 'cliente';
$lang['client_delete_tooltip'] = 'Todos os dados do cliente serão deletados. Contratos, tiquetes, notas. NOTA: Se as faturas encontradas do cliente não serão deletadas. Você precisa atribuir essa fatura para outro cliente para manter o número da fatura';
$lang['customer_delete_invoices_warning'] = 'Este cliente tem faturas na conta. Você não pode deletar este cliente. Altere todas as faturas para outro cliente no futuro e, então delete.';
$lang['client_firstname'] = 'Nome';
$lang['client_lastname'] = 'Sobrenome';
$lang['client_email'] = 'E-mail';
$lang['client_company'] = 'Empresa';
$lang['client_vat_number'] = 'Número VAT';
$lang['client_address'] = 'Endereço';
$lang['client_city'] = 'Cidade';
$lang['client_postal_code'] = 'CEP';
$lang['client_state'] = 'Estado';
$lang['client_password'] = 'Senha';
$lang['client_password_change_populate_note'] = 'Nota: se você preencher os campos, a senha pode ser mudada por este cliente.';
$lang['client_password_last_changed'] = 'Senha alterada pela última vez:';
$lang['login_as_client'] = 'Login como cliente';
$lang['client_invoices_tab'] = 'Faturas';
$lang['contracts_invoices_tab'] = 'Contratos';
$lang['contracts_tickets_tab'] = 'Tiquetes';
$lang['contracts_notes_tab'] = 'Notas';
$lang['client_invoice_number_table_heading'] = 'Fatura #';
$lang['client_invoice_date_table_heading'] = 'Data';
$lang['client_invoice_due_date_table_heading'] = 'Data de Vencimento';
$lang['client_string_table_heading'] = 'Cliente';
$lang['client_amount_table_heading'] = 'Quantia';
$lang['client_status_table_heading'] = 'Status';
$lang['note_description'] = 'Descrição da Nota';

$lang['client_string_contracts_table_heading'] = 'Cliente';
$lang['client_start_date_contracts_table_heading'] = 'Data de Início';
$lang['client_end_date_contracts_table_heading'] = 'Data Final';
$lang['client_description_contracts_table_heading'] = 'Descrição';
$lang['client_do_not_send_welcome_email'] = 'Não enviar e-mail de boas-vindas';

$lang['clients_notes_table_description_heading'] = 'Descrição';
$lang['clients_notes_table_addedfrom_heading'] = 'Adicionado Por';
$lang['clients_notes_table_dateadded_heading'] = 'Data da Adição';

$lang['clients_list_full_name'] = 'Nome Completo';
$lang['clients_list_last_login'] = 'Último Login';

# Contracts
$lang['contracts'] = 'Contratos';
$lang['contract'] = 'Contrato';
$lang['new_contract'] = 'Novo Contrato';
$lang['contract_lowercase'] = 'contrato';
$lang['contract_start_date'] = 'Data de Início';
$lang['contract_end_date'] = 'Data Final';
$lang['contract_subject'] = 'Assunto';
$lang['contract_description'] = 'Descrição';
$lang['contract_subject_tooltip'] = 'Assunto está também visível para o cliente';
$lang['contract_client_string'] = 'Cliente';
$lang['contract_attach'] = 'Documento anexo';

$lang['contract_list_client'] = 'Cliente';
$lang['contract_list_subject'] = 'Assunto';
$lang['contract_list_start_date'] = 'Data de Início';
$lang['contract_list_end_date'] = 'Data Final';

# Currencies
$lang['currencies'] = 'Moedas';
$lang['currency'] = 'Moeda';
$lang['new_currency'] = 'Nova Moeda';
$lang['currency_lowercase'] = 'moeda';
$lang['base_currency_set'] = 'Essa é agora sua moeda base.';
$lang['make_base_currency'] = 'Tornar moeda base';
$lang['base_currency_string'] = 'Moeda Base';

$lang['currency_list_name'] = 'Nome';
$lang['currency_list_symbol'] = 'Símbolo';


$lang['currency_add_edit_description'] = 'Nome da Moeda';
$lang['currency_add_edit_rate'] = 'Símbolo';

$lang['currency_edit_heading'] = 'Editar Moeda';
$lang['currency_add_heading'] = 'Adicionar Nova Moeda';


# Department
$lang['departments'] = 'Departamentos';
$lang['department'] = 'Departamento';
$lang['new_department'] = 'Novo Departamento';
$lang['department_lowercase'] = 'departamento';

$lang['department_name'] = 'Nome do Departamento';
$lang['department_email'] = 'E-mail do Departamento';
$lang['department_hide_from_client'] = 'Esconder do cliente?';
$lang['department_list_name'] = 'Nome';

# Email Templates
$lang['email_templates'] = 'Modelos de e-mail';
$lang['email_template'] = 'Modelo de e-mail';
$lang['email_template_lowercase'] = 'modelo de e-mail';
$lang['email_templates_lowercase'] = 'modelos de e-mail';
$lang['email_template_ticket_fields_heading'] = 'Tiquetes';
$lang['email_template_invoices_fields_heading'] = 'Faturas';
$lang['email_template_clients_fields_heading'] = 'Clientes';

$lang['template_name'] = 'Nome do Modelo';
$lang['template_subject'] = 'Assunto';
$lang['template_fromname'] = 'Do Nome';
$lang['template_fromemail'] = 'Do E-mail';
$lang['send_as_plain_text'] = 'Enviar como Plaintext';
$lang['email_template_disabed'] = 'Desabilitar';
$lang['email_template_email_message'] = 'Mensagem do e-mail';
$lang['available_merge_fields'] = 'Disponibilizar mesclagem dos campos';
# Home
$lang['dashboard_string'] = 'Painel';
$lang['home_latest_todos'] = 'Últimas tarefas';
$lang['home_no_latest_todos'] = 'Nenhuma tarefa encontrada';
$lang['home_latest_finished_todos'] = 'Últimas tarefas concluídas';
$lang['home_no_finished_todos_found'] = 'Nenhuma tarefa concluída encontrada';
$lang['home_todo_heading'] = 'Itens a fazer';
$lang['home_tickets_awaiting_reply_by_department'] = 'Tiquetes esperando resposta por departamento';
$lang['home_tickets_awaiting_reply_by_status'] = 'Tiquetes esperando por resposta por status';
$lang['home_this_week_events'] = 'Eventos dessa semana';
$lang['home_upcoming_events_next_week'] = 'Próximos eventos da próxima semana';
$lang['home_event_added_by'] = 'Evento adicionado por';
$lang['home_public_event'] = 'Evento público';
$lang['home_weekly_payment_records'] = 'Registros de Pagamentos Semanais';
$lang['home_weekend_ticket_opening_statistics'] = 'Estatísticas Abertas dos Tiquetes Semanais';
# Newsfeed
$lang['whats_on_your_mind'] = 'Compartilhar documentos, ideias..';
$lang['new_post'] = 'Postar';
$lang['newsfeed_upload_tooltip'] = 'Dica: Arraste e solte os arquivos para carregar';
$lang['newsfeed_all_departments'] = 'Todos os Departamentos';
$lang['newsfeed_pin_post'] = 'Fixar a postagem';
$lang['newsfeed_unpin_post'] = 'Desfixar a postagem';
$lang['newsfeed_delete_post'] = 'Deletar';
$lang['newsfeed_published_post'] = 'Publicado';
$lang['newsfeed_you_like_this'] = 'Você curti isso';
$lang['newsfeed_like_this'] = 'curta isso';
$lang['newsfeed_one_other'] = 'outro';
$lang['newsfeed_you'] = 'Você';
$lang['newsfeed_and'] = 'e';
$lang['newsfeed_you_and'] = 'Você e';
$lang['newsfeed_like_this_saying'] = 'Curta isso';
$lang['newsfeed_unlike_this_saying'] = 'descurta isso';
$lang['newsfeed_show_more_comments'] = 'Mostrar mais comentários';
$lang['comment_this_post_placeholder'] = 'Comentar essa postagem...';
$lang['newsfeed_post_likes_modal_heading'] = 'Amigos que curtiram essa postagem';
$lang['newsfeed_comment_likes_modal_heading'] = 'Amigos que curtiram esse comentário';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Essa postagem está visível apenas para os seguintes departamentos: %s';
# Invoice Items
$lang['invoice_items'] = 'Itens da Fatura';
$lang['invoice_item'] = 'Item da Fatura';
$lang['new_invoice_item'] = 'Novo Item';
$lang['invoice_item_lowercase'] = 'item da fatura';

$lang['invoice_items_list_description'] = 'Descrição';
$lang['invoice_items_list_rate'] = 'Tarifa';
$lang['invoice_items_list_tax'] = 'Taxa';

$lang['invoice_item_add_edit_description'] = 'Descrição';
$lang['invoice_item_add_edit_rate'] = 'Tarifa';
$lang['invoice_item_add_edit_tax'] = 'Taxa';
$lang['invoice_item_add_edit_tax_select'] = 'Selecionar Taxa';

$lang['invoice_item_edit_heading'] = 'Editar o Item';
$lang['invoice_item_add_heading'] = 'Adicionar Novo Item';

# Invoices


$lang['invoices'] = 'Faturas';
$lang['invoice'] = 'Fatura';
$lang['invoice_lowercase'] = 'fatura';
$lang['create_new_invoice'] = 'Criar Nova Fatura';
$lang['view_invoice'] = 'Visualizar Fatura';
$lang['invoice_payment_recorded'] = 'Pagamento da Fatura Registrado';
$lang['invoice_payment_record_failed'] = 'Falha no Registro do Pagamento da Fatura';
$lang['invoice_sent_to_client_success'] = 'A fatura foi enviada com sucesso para o cliente';
$lang['invoice_sent_to_client_fail'] = 'Problema ao enviar a fatura';
$lang['invoice_reminder_send_problem'] = 'Problema ao enviar o lembrete de fatura atrasada';
$lang['invoice_overdue_reminder_sent'] = 'Lembrete de Fatura Atrasada Enviado com Sucesso';

$lang['invoice_details'] = 'Detalhes da Fatura';
$lang['invoice_view'] = 'Visualizar a Fatura';
$lang['invoice_select_customer'] = 'Cliente';
$lang['invoice_add_edit_number'] = 'Número da Fatura';
$lang['invoice_add_edit_date'] = 'Data da Fatura';
$lang['invoice_add_edit_duedate'] = 'Data de Vencimento';
$lang['invoice_add_edit_currency'] = 'Moeda';
$lang['invoice_add_edit_client_note'] = 'Nota do Cliente';
$lang['invoice_add_edit_admin_note'] = 'Nota da Admin';

$lang['invoice_add_edit_search_item'] = 'Procurar Itens';
$lang['invoices_toggle_table_tooltip'] = 'Tabela de alternância';

$lang['edit_invoice_tooltip'] = 'Editar Fatura';
$lang['delete_invoice_tooltip'] = 'Deletar Fatura. Nota: Todos os pagamentos relativos a essa fatura serão deletados (se houver algum).';
$lang['invoice_sent_to_email_tooltip'] = 'Enviar por E-mail';
$lang['invoice_already_send_to_client_tooltip'] = 'Essa fatura já foi enviada para o cliente %s';
$lang['send_overdue_notice_tooltip'] = 'Enviar Aviso de Vencimento';
$lang['invoice_view_activity_tooltip'] = 'Registro de Atividade';
$lang['invoice_record_payment'] = 'Registro de Pagamento';

$lang['invoice_send_to_client_modal_heading'] = 'Enviar a fatura para o cliente';
$lang['invoice_send_to_client_attach_pdf'] = 'Anexar Fatura como PDF';
$lang['invoice_send_to_client_preview_template'] = 'Prévia do Modelo de E-mail';

$lang['invoice_dt_table_heading_number'] = 'Fatura #';
$lang['invoice_dt_table_heading_date'] = 'Data';
$lang['invoice_dt_table_heading_client'] = 'Cliente';
$lang['invoice_dt_table_heading_duedate'] = 'Data de Vencimento';
$lang['invoice_dt_table_heading_amount'] = 'Quantia';
$lang['invoice_dt_table_heading_status'] = 'Status';

$lang['record_payment_for_invoice'] = 'Pagamento Registrado para';
$lang['record_payment_amount_received'] = 'Quantia Recebida';
$lang['record_payment_date'] = 'Data de Pagamento';
$lang['record_payment_leave_note'] = 'Deixar uma anotação';
$lang['invoice_payments_received'] = 'Pagamentos Recebidos';
$lang['invoice_record_payment_note_placeholder'] = 'Anotação do Admin';
$lang['no_payments_found'] = 'Nenhum Pagamento encontrado para essa fatura';
$lang['invoice_email_link_text'] = 'Visualizar Fatura';

# Payments
$lang['payments'] = 'Pagamentos';
$lang['payment'] = 'Pagamento';
$lang['payment_lowercase'] = 'pagamento';
$lang['payments_table_number_heading'] = 'Pagamento #';
$lang['payments_table_invoicenumber_heading'] = 'Fatura #';
$lang['payments_table_mode_heading'] = 'Modo de Pagamento';
$lang['payments_table_date_heading'] = 'Data';
$lang['payments_table_amount_heading'] = 'Quantia';
$lang['payments_table_client_heading'] = 'Cliente';
$lang['payment_not_exists'] = 'O pagamento não existe';

$lang['payment_edit_for_invoice'] = 'Pagamento por Fatura';
$lang['payment_edit_amount_received'] = 'Quantia Recebida';
$lang['payment_edit_date'] = 'Data de Pagamento';
$lang['payment_edit_lave_note'] = 'Deixar uma Anotação';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Assunto';
$lang['kb_article_add_edit_group'] = 'Gropo';
$lang['kb_string'] = 'Conhecimento Base';
$lang['kb_article'] = 'Artigo';
$lang['kb_article_lowercase'] = 'artigo';
$lang['kb_article_new_article'] = 'Novo Artigo';
$lang['kb_article_disabled'] = 'Desabilitar';
$lang['kb_article_description'] = 'Descrição do Artigo';

$lang['kb_table'] = 'Lista';
$lang['kb_no_articles_found'] = 'Nenhum artigo de conhecimento encontrado';
$lang['kb_dt_article_name'] = 'Nome do Artigo';
$lang['kb_dt_group_name'] = 'Gropo';
$lang['new_group'] = 'Novo Grupo';
$lang['kb_group_add_edit_name'] = 'Nome do Grupo';
$lang['kb_group_add_edit_description'] = 'Descrição curta';
$lang['kb_group_add_edit_disabled'] = 'Desabilitado';
$lang['kb_group_add_edit_note'] = 'Nota: Todos os artigos nesse grupo serão escondidos se desabilitado for selecionado';
$lang['group_table_name_heading'] = 'Nome';
$lang['group_table_isactive_heading'] = 'Ativo';
$lang['kb_no_groups_found'] = 'Nenhum grupo de base de conhecimento encontrado';

# Mail Lists
$lang['mail_lists'] = 'Listas de Envio';
$lang['mail_list'] = 'Lista de Envio';
$lang['new_mail_list'] = 'Nova Lista de Envio';
$lang['mail_list_lowercase'] = 'lista de envio';
$lang['custom_field_deleted_success'] = 'Campo Personalizado deletado';
$lang['custom_field_deleted_fail'] = 'Problema ao deletar o campo personalizado';
$lang['email_removed_from_list'] = 'E-mail removido da lista';
$lang['email_remove_fail'] = 'E-mail removido da lista';
$lang['staff_mail_lists'] = 'Lista de Envio dos Funcionários';
$lang['clients_mail_lists'] = 'Lista de Envio dos Clientes';
$lang['mail_list_total_imported'] = 'Total de e-mails importados: %s';
$lang['mail_list_total_duplicate'] = 'Total de e-amils duplicados: %s';
$lang['mail_list_total_failed_to_insert'] = 'Falha nos e-mails a inserir: %s';
$lang['mail_list_total_invalid'] = 'Endereço de e-mail inválido: %s';
$lang['cant_edit_mail_list'] = 'Você pode editar essa lista, essa lista é preenchida automaticamente';
$lang['mail_list_add_edit_name'] = 'Nome da Lista de Envio';
$lang['mail_list_add_edit_customfield'] = 'Adicionar campo personalizado';
$lang['mail_lists_viewing_emails'] = 'Visualizar os E-mails Da Lista';
$lang['mail_lists_view_email_email_heading'] = 'E-mail';
$lang['mail_lists_view_email_date_heading'] = 'Data Adicionada';
$lang['add_new_email_to'] = 'Adicionar Novo E-mail a %s';
$lang['import_emails_to'] = 'Importar E-mails para %s';
$lang['mail_list_new_email_edit_add_label'] = 'E-mail';
$lang['mail_list_import_file'] = 'Importar Arquivo';
$lang['mail_list_available_custom_fields'] = 'Campos Personalizados Disponíveis';
$lang['submit_import_emails'] = 'Importar E-mails';
$lang['btn_import_emails'] = 'Importar E-mails (Excel)';
$lang['btn_add_email_to_list'] = 'Adicionar E-mail a Esta Lista';
$lang['mail_lists_dt_list_name'] = 'Nome da Lista';
$lang['mail_lists_dt_datecreated'] = 'Data Criada';
$lang['mail_lists_dt_creator'] = 'Criador';
$lang['email_added_to_mail_list_successfuly'] = 'E-mail adicionado a lista';
$lang['email_is_duplicate_mail_list'] = 'E-mail já existente nessa lista';

# Media
$lang['media_files'] = 'Arquivos';

# Payment modes
$lang['new_payment_mode'] = 'Novo Modo de Pagamento';
$lang['payment_modes'] = 'Modos de Pagamento';
$lang['payment_mode'] = 'Modo de Pagamento';
$lang['payment_mode_lowercase'] = 'modo de pagamento';
$lang['payment_modes_dt_name'] = 'Nome do Modo de Pagamento';

$lang['payment_mode_add_edit_name'] = 'Nome do Modo de Pagamento';
$lang['payment_mode_edit_heading'] = 'Editar Modo de Pagamento';
$lang['payment_mode_add_heading'] = 'Adicionar Novo Modo de Pagamento';

# Predefined Ticket Replies
$lang['new_predefined_reply'] = 'Nova Resposta Predefinida';
$lang['predefined_replies'] = 'Respostas Predefinidas';
$lang['predefined_reply'] = 'Resposta Predefinida';
$lang['predefined_reply_lowercase'] = 'resposta predefinida';
$lang['predifined_replies_dt_name'] = 'Nome da Resposta Predefinida';
$lang['predifined_reply_add_edit_name'] = 'Nomde da Resposta Predefinida';
$lang['predifined_reply_add_edit_content'] = 'Conteúdo da Resposta';

# Ticket Priorities
$lang['new_ticket_priority'] = 'Nova Prioridade';
$lang['ticket_priorities'] = 'Prioridades dos Tiquetes';
$lang['ticket_priority'] = 'Prioridade do Tiquete';
$lang['ticket_priority_lowercase'] = 'prioridade do tiquete';
$lang['no_ticket_priorities_found'] = 'Nenhuma Prioridade do Tiquete Encontrada';
$lang['ticket_priority_dt_name'] = 'Nome da Prioridade do Tiquete';
$lang['ticket_priority_add_edit_name'] = 'Nome da Prioridade';

# Reports
$lang['kb_reports'] = 'Relatórios da Base de Conhecimento dos artigos';
$lang['sales_reports'] = 'Relatórios de Vendas';
$lang['reports_choose_kb_group'] = 'Escolher Grupo';
$lang['reports_sales_select_report_type'] = 'Selecionar Tipo do Relatório';
$lang['report_kb_yes'] = 'Sim';
$lang['report_kb_no'] = 'Não';
$lang['report_kb_no_votes'] = 'Nenhum voto ainda';
$lang['report_this_week_leads_conversions'] = 'Conversões de Lead Dessa Semana';
$lang['report_leads_sources_conversions'] = 'Fontes';
$lang['report_leads_monthly_conversions'] = 'Mensal';
$lang['sales_report_heading'] = 'Relatórios de Vendas';
$lang['report_sales_type_income'] = 'Renda Total';

$lang['report_sales_type_customer'] = 'Relatório do Cliente';
$lang['report_sales_base_currency_select_explanation'] = 'Você precisa selecionar uma moeda por que você tem faturas em moedas diferentes';
$lang['report_sales_from_date'] = 'Da Data';
$lang['report_sales_to_date'] = 'Até a Data';


$lang['report_sales_months_all_time'] = 'Todo o Tempo';
$lang['report_sales_months_six_months'] = 'Últimos 6 meses';
$lang['report_sales_months_twelve_months'] = 'Últimos 12 meses';
$lang['report_sales_months_custom'] = 'Personalizados';
$lang['reports_sales_generated_report'] = 'Relatórios Generalizados';



$lang['reports_sales_dt_customers_client'] = 'Cliente';
$lang['reports_sales_dt_customers_total_invoices'] = 'Total de Faturas';
$lang['reports_sales_dt_items_customers_amount'] = 'Quantia';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Quantia com Taxas';

# Roles
$lang['new_role'] = 'Nova Função';
$lang['all_roles'] = 'Todas as Funções';
$lang['roles'] = 'Funções dos Funcionários';
$lang['role'] = 'Função';
$lang['role_lowercase'] = 'função';
$lang['roles_total_users'] = 'Total de Usuários: ';
$lang['roles_dt_name'] = 'Nome da Função';
$lang['role_add_edit_name'] = 'Nome da Função';

# Service
$lang['new_service'] = 'Novo Serviço';
$lang['services'] = 'Serviços';
$lang['service'] = 'Serviço';
$lang['service_lowercase'] = 'serviço';
$lang['services_dt_name'] = 'Nome do Serviço';
$lang['service_add_edit_name'] = 'Nome do Serviço';

# Settings
$lang['settings'] = 'Configurações';
$lang['settings_updated'] = 'Configurações Atualizadas';
$lang['settings_save'] = 'Salvar Configurações';
$lang['settings_group_general'] = 'Geral';
$lang['settings_group_localization'] = 'Localização';
$lang['settings_group_tickets'] = 'Tiquetes';
$lang['settings_group_sales'] = 'Finanças';
$lang['settings_group_email'] = 'E-mail';
$lang['settings_group_clients'] = 'Clientes';
$lang['settings_group_newsfeed'] = 'Notícias';
$lang['settings_group_cronjob'] = 'Cron de Trabalho';

$lang['settings_yes'] = 'Sim';
$lang['settings_no'] = 'Não';
$lang['settings_clients_default_theme'] = 'Tema padrão do Cliente';
$lang['settings_clients_allow_registration'] = 'Permitir que os clientes registrem';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Permitir que a base de conhecimento seja visualizada sem registro';

$lang['settings_cron_send_overdue_reminder'] = 'Enviar lembrete do atraso da fatura';
$lang['settings_cron_send_overdue_reminder_tooltip'] = 'Enviar e-mail com o atraso para o cliente quando o status da fatura for atualizado como atrasado no Cron do Trabalho';
$lang['automatically_send_invoice_overdue_reminder_after'] = 'Enviar Automaticamente um lembrete depois de (dias)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Reenviar automaticamente um lembrete depois de (dias)';

$lang['settings_email_host'] = 'Hospedagem SMTP';
$lang['settings_email_port'] = 'Portal SMTP';
$lang['settings_email'] = 'E-mail SMTP';
$lang['settings_email_password'] = 'Senha SMTP';
$lang['settings_email_charset'] = 'Codificação do E-mail';
$lang['settings_email_signature'] = 'Assinatura do E-mail';

$lang['settings_general_company_logo'] = 'Logo da Empresa';
$lang['settings_general_company_logo_tooltip'] = 'Dimensões recomendadas: 150 x 32px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Remover o logo da empresa';
$lang['settings_general_company_name'] = 'Nome da Empresa';
$lang['settings_general_company_main_domain'] = 'Domínio Principal da Empresa';
$lang['settings_general_use_knowledgebase'] = 'Usar a base de Conhecimento';
$lang['settings_general_use_knowledgebase_tooltip'] = 'Se você permitir essa opção de base de conhecimento aparecerá também para o cliente';
$lang['settings_general_tables_limit'] = 'Tabelas com Limites de Paginação';
$lang['settings_general_default_staff_role'] = 'Função padrão do Funcionário';
$lang['settings_general_default_staff_role_tooltip'] = 'Quando você adicionar um novo funcionário essa função será selecionada como padrão';

$lang['settings_localization_date_format'] = 'Formato da Data';
$lang['settings_localization_default_timezone'] = 'Fuso Horário Padrão';
$lang['settings_localization_default_language'] = 'Idioma Padrão';

$lang['settings_newsfeed_max_file_upload_post'] = 'Máximo de arquivos para carregamento na postagem';
$lang['settings_newsfeed_max_file_size'] = 'Tamanho máximo dos arquivos (MB)';

$lang['settings_reminders_contracts'] = 'Lembrete de expiração do contrato';
$lang['settings_reminders_contracts_tooltip'] = 'Notificação do lembrete de expiração em dias';

$lang['settings_tickets_use_services'] = 'Usar Serviços';
$lang['settings_tickets_max_attachments'] = 'Máximo de tiquetes anexos';
$lang['settings_tickets_allow_departments_access'] = 'Permitir que o funcionário acesse apenas tiquetes que pertençam ao departamento de funcionário';
$lang['settings_tickets_allowed_file_extensions'] = 'Anexos permitidos para extensões de arquivos';

$lang['settings_sales_general'] = 'Geral';
$lang['settings_sales_general_note'] = 'Configurações Gerais';
$lang['settings_sales_invoice_prefix'] = 'Prefixo do Número da Fatura';
$lang['settings_sales_decimal_separator'] = 'Separador Decimal';
$lang['settings_sales_thousand_separator'] = 'Separador Centesimal';
$lang['settings_sales_currency_placement'] = 'Colocação da Moeda';
$lang['settings_sales_currency_placement_before'] = 'Quantia Anterior';
$lang['settings_sales_currency_placement_after'] = 'Quantia Posterior';
$lang['settings_sales_require_client_logged_in_to_view_invoice'] = 'É necessário que o cliente esteja conectado a uma faturada vista';
$lang['settings_sales_next_invoice_number'] = 'Próximo Número de Fatura';
$lang['settings_sales_next_invoice_number_tooltip'] = 'Defina esse campo como 1 se você quer começar do início';
$lang['settings_sales_decrement_invoice_number_on_delete'] = 'Diminuir o número da fatura ao deletar';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Você quer diminuir o número da fatura quando a última fatura for deletada? Ex. Se é definido essa opção como SIM e antes da fatura deletada o próximo número da fatura for 15 o próximo número da fatura será diminuido para 14 para a próxima fatura se é definido como NÃO o número vai continuar a partir do 15';
$lang['settings_sales_invoice_number_format'] = 'Formato do Número da Fatura';
$lang['settings_sales_invoice_number_format_year_based'] = 'Ano de Base';
$lang['settings_sales_invoice_number_format_number_based'] = 'Número de Base (000001)';
$lang['settings_sales_invoice_year'] = 'Ano da Fatura (YYYY/000001)';
$lang['settings_sales_invoice_year_tooltip'] = 'Ano atual da fatura. Redefina isso quando o novo ano chegar.';

$lang['settings_sales_company_info_heading'] = 'Empresa';
$lang['settings_sales_company_info_note'] = 'Essa informação será exibida nas faturas/estimativas/pagamentos e outros documentos em PDF nos quais as informações da empresa são necessárias';
$lang['settings_sales_company_name'] = 'Nome da Empresa';
$lang['settings_sales_address'] = 'Endereço';
$lang['settings_sales_city'] = 'Cidade';
$lang['settings_sales_country_code'] = 'Código do País';
$lang['settings_sales_postal_code'] = 'CEP';
$lang['settings_sales_phonenumber'] = 'Telefone';

# Leads
$lang['new_lead'] = 'Novo Lead';
$lang['leads'] = 'Leads';
$lang['lead'] = 'Lead';
$lang['lead_lowercase'] = 'Lead';
$lang['leads_all'] = 'Todos';

$lang['leads_canban_notes'] = 'Notas: %s';
$lang['leads_canban_source'] = 'Fonte: %s';

$lang['lead_new_source'] = 'Nova Fonte';
$lang['lead_sources'] = 'Fontes de Lead';
$lang['lead_source'] = 'Fonte de Lead';
$lang['lead_source_lowercase'] = 'fonte de lead';
$lang['leads_sources_not_found'] = 'Nenhuma fonte de leads encontrada';
$lang['leads_sources_table_name'] = 'Nome da Fonte';
$lang['leads_source_add_edit_name'] = 'Nome da Fonte';

$lang['lead_new_status'] = 'Novo Status do Lead';
$lang['lead_statuss'] = 'Status do Lead';
$lang['lead_status'] = 'Status do Lead';
$lang['lead_status_lowercase'] = 'status do lead';
$lang['leads_status_table_name'] = 'Nome do Status';

$lang['leads_status_add_edit_name'] = 'Nome do Status';
$lang['leads_status_add_edit_order'] = 'Pedido';

$lang['lead_statuses_not_found'] = 'Nenhum status de lead encontrado';
$lang['leads_search'] = 'Procurar Leads';

$lang['leads_table_total'] = 'Total de Leads: %s';

$lang['leads_dt_name'] = 'Nome';
$lang['leads_dt_email'] = 'E-mail';
$lang['leads_dt_phonenumber'] = 'Telefone';
$lang['leads_dt_assigned'] = 'Atribuido';
$lang['leads_dt_status'] = 'Status';
$lang['leads_dt_last_contact'] = 'Último Contato';

$lang['lead_add_edit_name'] = 'Nome';
$lang['lead_add_edit_email'] = 'Endereço de E-mail';
$lang['lead_add_edit_phonenumber'] = 'Telefone';
$lang['lead_add_edit_source'] = 'Fonte';
$lang['lead_add_edit_status'] = 'Status do Lead';
$lang['lead_add_edit_assigned'] = 'Atribuido';
$lang['lead_add_edit_datecontacted'] = 'Data de Contato';
$lang['lead_add_edit_contected_today'] = 'Contato Hoje';
$lang['lead_add_edit_activity'] = 'Registro de Atividade';
$lang['lead_add_edit_notes'] = 'Notas';
$lang['lead_add_edit_add_note'] = 'Adicionar notas';
$lang['lead_not_contacted'] = 'Eu não contatei esse lead';
$lang['lead_add_edit_contected_this_lead'] = 'Eu entrei em contato com esse lead';
$lang['lead_confirmation_canban_contacted'] = 'Você entrou em contato com esse lead?';

# Misc
$lang['activity_log_when_cron_job'] = 'Cron de Trabalho';
$lang['access_denied'] = 'Acesso negado';
$lang['prev'] = 'Anterior';
$lang['next'] = 'próximo';

# Datatables
$lang['dt_paginate_first'] = 'Primeiro';
$lang['dt_paginate_last'] = 'Último';
$lang['dt_paginate_next'] = 'Próximo';
$lang['dt_paginate_previous'] = 'Anterior';
$lang['dt_empty_table'] = 'Nenhum {0} encontrado';
$lang['dt_search'] = 'Procurar:';
$lang['dt_zero_records'] = 'Nenhum registro compatível encontrado';
$lang['dt_loading_records'] = 'Carregando...';
$lang['dt_length_menu'] = 'Mostrar _MENU_ entradas';
$lang['dt_info_filtered'] = '(filtrado do _MAX_ total {0})';
$lang['dt_info_empty'] = 'Mostrar 0 a 0 de 0 {0}';
$lang['dt_info'] = 'Mostrar _START_ a _END_ de _TOTAL_ {0}';
$lang['dt_empty_table'] = 'Nenhuma {0} encontrado';
$lang['dt_sort_ascending'] = 'ativar a classificação ascendente da coluna';
$lang['dt_sort_descending'] = 'ativar a classificação descendente da coluna';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s lembrete de fatura atrasada enviado';

# Weekdays
$lang['wd_monday'] = 'Segunda-feira';
$lang['wd_tuesday'] = 'Terça-feira';
$lang['wd_thursday'] = 'Quarta-feira';
$lang['wd_wednesday'] = 'Quinta-feira';
$lang['wd_friday'] = 'Sexta-feira';
$lang['wd_saturday'] = 'Sábado';
$lang['wd_sunday'] = 'Domingo';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Painel';
$lang['als_clients'] = 'Clientes';
$lang['als_leads'] = 'Leads';

$lang['als_contracts'] = 'Contratos';

$lang['als_all_tickets'] = 'Todos os Tiquetes';
$lang['als_sales'] = 'Vendas';

$lang['als_staff'] = 'Funcionário';
$lang['als_tasks'] = 'Tarefas';
$lang['als_kb'] = 'Base de Conhecimento';

$lang['als_surveys'] = 'Pesquisas';
$lang['als_media'] = 'Mídia';
$lang['als_reports'] = 'Relatórios';
$lang['als_reports_sales_submenu'] = 'Vendas';
$lang['als_reports_leads_submenu'] = 'Leads';
$lang['als_kb_articles_submenu'] = 'Artigos BC';
$lang['als_utilities'] = 'Utilidades';
$lang['als_announcements_submenu'] = 'Anúncios';
$lang['als_mail_lists_submenu'] = 'Listas de Envio';
$lang['als_calendar_submenu'] = 'Calendário';
$lang['als_activity_log_submenu'] = 'Registro de Atividade';

# Admin Customizer Sidebar
$lang['acs_tickets'] = 'Tiquetes';
$lang['acs_ticket_priority_submenu'] = 'Prioridade do Tiquete';
$lang['acs_ticket_statuses_submenu'] = 'Status do Tiquete';
$lang['acs_ticket_predefined_replies_submenu'] = 'Respostas Predefinidas';
$lang['acs_ticket_services_submenu'] = 'Serviços';
$lang['acs_departments'] = 'Departamentos';
$lang['acs_leads'] = 'Leads';
$lang['acs_leads_sources_submenu'] = 'Fontes';
$lang['acs_leads_statuses_submenu'] = 'Status';
$lang['acs_sales_taxes_submenu'] = 'Taxas';
$lang['acs_sales_currencies_submenu'] = 'Moedas';
$lang['acs_sales_payment_modes_submenu'] = 'Modo de Pagamento';
$lang['acs_email_templates'] = 'Modelo de E-mail';
$lang['acs_roles'] = 'Funções';
$lang['acs_settings'] = 'Configurações';

# Tickets
$lang['new_ticket'] = 'Abrir um Novo Tiquete';
$lang['tickets'] = 'Tiquetes';
$lang['ticket'] = 'Tiquete';
$lang['ticket_lowercase'] = 'tiquete';
$lang['support_tickets'] = 'Tiquetes de Suporte';
$lang['support_ticket'] = 'Tiquete de Suporte';
$lang['ticket_settings_to'] = 'Para';
$lang['ticket_settings_email'] = 'Endereço de E-mail';
$lang['ticket_settings_departments'] = 'Departamento';
$lang['ticket_settings_service'] = 'Serviço';
$lang['ticket_settings_priority'] = 'Prioridade';
$lang['ticket_settings_subject'] = 'Assunto';
$lang['ticket_settings_assign_to'] = 'Atribuir tiquete (padrão é o usuário atual)';
$lang['ticket_settings_assign_to_you'] = 'Você';
$lang['ticket_settings_select_client'] = 'Selecionar Cliente';
$lang['ticket_add_body'] = 'Corpo do Tiquete';
$lang['ticket_add_attachments'] = 'Anexos';
$lang['ticket_no_reply_yet'] = 'Ainda Sem Resposta';
$lang['new_ticket_added_succesfuly'] = 'Tiquete #%s adicionado com sucesso';
$lang['replied_to_ticket_succesfuly'] = 'Respondido para o tiquete #%s com sucesso';
$lang['ticket_settings_updated_successfuly'] = 'Configurações do tiquete atualizadas com sucesso';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Configurações do tiquete atualizadas com sucesso - transferido para o departamento %s';
$lang['ticket_dt_subject'] = 'Assunto';
$lang['ticket_dt_department'] = 'Departamento';
$lang['ticket_dt_service'] = 'Serviço';
$lang['ticket_dt_submitter'] = 'Cliente';
$lang['ticket_dt_status'] = 'Status';
$lang['ticket_dt_priority'] = 'Prioridade';
$lang['ticket_dt_last_reply'] = 'Última Resposta';

$lang['ticket_single_add_reply'] = 'Adicionar Resposta';
$lang['ticket_single_add_note'] = 'Adicionar Notas';
$lang['ticket_single_other_user_tickets'] = 'Outros Tiquetes';
$lang['ticket_single_settings'] = 'Configurações';
$lang['ticket_single_priority'] = 'Prioridade: %s';
$lang['ticket_single_last_reply'] = 'Última Resposta: %s';
$lang['ticket_single_change_status_top'] = 'Alterar Status';
$lang['ticket_single_ticket_note_by'] = 'Nota do tiquete por %s';
$lang['ticket_single_note_added'] = 'Nota adicionada: %s';
$lang['ticket_single_change_status'] = 'Alterar Status';
$lang['ticket_single_assign_to_me_on_update'] = 'Atribuir esse tiquete para mim automaticamente';
$lang['ticket_single_insert_predefined_reply'] = 'Inserir resposta predefinida';
$lang['ticket_single_insert_knowledge_base_link'] = 'Inserir o link da base de conhecimento';
$lang['ticket_single_attachments'] = 'Anexos';
$lang['ticket_single_add_response'] = 'Adicionar Resposta';
$lang['ticket_single_note_heading'] = 'Nota';
$lang['ticket_single_add_note'] = 'Adicionar nota';
$lang['ticket_settings_none_assigned'] = 'Nenhuma';
$lang['ticket_status_changed_successfuly'] = 'Alterar o Status do Tiquete';
$lang['ticket_status_changed_fail'] = 'Problema para Alterar o Status do Tiquete';

$lang['ticket_staff_string'] = 'Funcionário';
$lang['ticket_client_string'] = 'Cliente';
$lang['ticket_posted'] = 'Postado: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Inserir resposta predefinida';
$lang['ticket_kb_link_heading'] = 'Inserir o link da base de conhecimento';
$lang['ticket_access_by_department_denied'] = 'Você não tem acesso a esse tiquete. Esse tiquete pertence ao departamento que você não está designado';

# Staff
$lang['new_staff'] = 'Novo Funcionário';
$lang['staff_members'] = 'Funcionários';
$lang['staff_member'] = 'Funcionário';
$lang['staff_member_lowercase'] = 'funcionário';
$lang['staff_profile_updated'] = 'Seu Perfil foi Atualizado';
$lang['staff_old_password_incorect'] = 'Sua senha antiga está incorreta';
$lang['staff_password_changed'] = 'Sua senha foi Alterada';
$lang['staff_problem_changing_password'] = 'Problema ao alterar sua senha';
$lang['staff_profile_string'] = 'Perfil';

$lang['staff_cant_remove_main_admin'] = 'Não pode remover o administrador principal';
$lang['staff_cant_remove_yourself_from_admin'] = 'Você não pode remover você mesmo da função de administrador';

$lang['staff_dt_name'] = 'Nome Completo';
$lang['staff_dt_email'] = 'E-mail';
$lang['staff_dt_last_Login'] = 'Último Login';
$lang['staff_dt_active'] = 'Ativo';

$lang['staff_add_edit_firstname'] = 'Nome';
$lang['staff_add_edit_lastname'] = 'Sobrenome';
$lang['staff_add_edit_email'] = 'E-mail';
$lang['staff_add_edit_phonenumber'] = 'Telefone';
$lang['staff_add_edit_facebook'] = 'Facebook';
$lang['staff_add_edit_linkedin'] = 'LinkedIn';
$lang['staff_add_edit_skype'] = 'Skype';
$lang['staff_add_edit_departments'] = 'Departamentos membros';
$lang['staff_add_edit_role'] = 'Função';
$lang['staff_add_edit_permissions'] = 'Permissões';
$lang['staff_add_edit_administrator'] = 'Administrador';
$lang['staff_add_edit_password'] = 'Senha';
$lang['staff_add_edit_password_note'] = 'Nota: se você preencher esses campos, a senha será alterada nesse membro.';
$lang['staff_add_edit_password_last_changed'] = 'Senha última vez alterada';
$lang['staff_add_edit_notes'] = 'Notas';
$lang['staff_add_edit_note_description'] = 'descrição da nota';

$lang['staff_notes_table_description_heading'] = 'Nota';
$lang['staff_notes_table_addedfrom_heading'] = 'Adicionado Por';
$lang['staff_notes_table_dateadded_heading'] = 'Data da Adição';

$lang['staff_admin_profile'] = 'Esse é o perfil do admin';
$lang['staff_profile_notifications'] = 'Notificações';
$lang['staff_profile_departments'] = 'Departamentos';

$lang['staff_edit_profile_image'] = 'Imagem de Perfil';
$lang['staff_edit_profile_your_departments'] = 'Seus Departamentos';
$lang['staff_edit_profile_change_your_password'] = 'Alterar sua Senha';
$lang['staff_edit_profile_change_old_password'] = 'Senha Antiga';
$lang['staff_edit_profile_change_new_password'] = 'Nova Senha';
$lang['staff_edit_profile_change_repet_new_password'] = 'Repetir a Nova Senha';

# Surveys
$lang['new_survey'] = 'Nova Pesquisa';
$lang['surveys'] = 'Pesquisas';
$lang['survey'] = 'Pesquisa';
$lang['survey_lowercase'] = 'pesquisa';
$lang['survey_no_mail_lists_selected'] = 'Nenhuma lista de envio selecionada';
$lang['survey_send_success_note'] = 'Todos os Emails Pesquisados(%s) serão enviados através do CRON de Trabalho com um intervalo de 5 minutos';
$lang['survey_result'] = 'Resultado da Pesquisa: %s';
$lang['question_string'] = 'Questão';
$lang['question_field_string'] = 'Campo';

$lang['survey_list_view_tooltip'] = 'Visualizar Pesquisa';
$lang['survey_list_view_results_tooltip'] = 'Visualizar Resultados';

$lang['survey_add_edit_subject'] = 'Assunto da Pesquisa';
$lang['survey_add_edit_email_description'] = 'Descrição da Pesquisa (E-mail de Descrição)';
$lang['survey_include_survey_link'] = 'Incluir o link da pesquisa na descrição';
$lang['survey_available_mail_lists_custom_fields'] = 'Campo do cliente disponível para listas de e-mails';
$lang['survey_mail_lists_custom_fields_tooltip'] = 'Os campos personalizados podem ser usados para editar e-mail. DICA: Clique no editor de e-mail e, em seguida, selecionar a partir de lista suspensa do menu para ser anexado automaticamente.';
$lang['survey_add_edit_short_description_view'] = 'Pesquisa de descrição curta (Visualizar Descrição)';
$lang['survey_add_edit_from'] = 'De (exibido no e-mail)';
$lang['survey_add_edit_redirect_url'] = 'Pesquisa redirecionada para URL';
$lang['survey_add_edit_red_url_note'] = 'Quando o usuário acabar a pesquisa para onde ele será redirecionado (deixar em branco para esse site url)';
$lang['survey_add_edit_disabled'] = 'Desabilitar';
$lang['survey_add_edit_only_for_logged_in'] = 'Apenas para participantes logados (funcionários,clientes)';
$lang['send_survey_string'] = 'Enviar Pesquisa';
$lang['survey_send_mail_list_clients'] = 'Clientes';
$lang['survey_send_mail_list_staff'] = 'Funcionários';
$lang['survey_send_mail_lists_string'] = 'Listas de Envio';
$lang['survey_send_mail_lists_note_logged_in'] = 'Nota: Se você está enviando uma pesquisa para as listas de envio Apenas para participantes logados precisa não estar selecionado';
$lang['survey_send_string'] = 'Enviar';

$lang['survey_send_to_total'] = 'Enviar para total de %s e-mails';
$lang['survey_send_till_now'] = 'Até agora';
$lang['survey_send_finished'] = 'Envio da pesquisa terminado: %s';
$lang['survey_added_to_queue'] = 'Essa pesquisa foi adicionada a fila cron em %s';

$lang['survey_questions_string'] = 'Questões';
$lang['survey_insert_field'] = 'Inserir Campo';
$lang['survey_field_checkbox'] = 'Caixa de Seleção';
$lang['survey_field_radio'] = 'Rádio';
$lang['survey_field_input'] = 'Incluir Campo';
$lang['survey_field_textarea'] = 'Área de Texto';
$lang['survey_question_required'] = 'Necessário';
$lang['survey_question_only_for_preview'] = 'Apenas para previsualização';
$lang['survey_create_first'] = 'Você precisa criar uma pesquisa primeiro então você vai poder inserir questões.';


$lang['survey_dt_name'] = 'Nome';
$lang['survey_dt_total_questions'] = 'Total de Questões';
$lang['survey_dt_total_participants'] = 'Total de Participantes';
$lang['survey_dt_date_created'] = 'Data de Criação';
$lang['survey_dt_active'] = 'Ativo';

$lang['survey_text_questions_results'] = 'Resultado das Perguntas de Texto';
$lang['survey_view_all_answers'] = 'Visualizar outras Respostas';

# Staff Tasks
$lang['new_task'] = 'Nova Tarefa';
$lang['tasks'] = 'Tarefas';
$lang['task'] = 'Tarefa';
$lang['task_lowercase'] = 'tarefa';
$lang['comment_string'] = 'Comentário';

$lang['task_marked_as_complete'] = 'Tarefa marcada como completa';
$lang['task_follower_removed'] = 'Seguidor da tarefa removido com sucesso';
$lang['task_assignee_removed'] = 'Destinatário da tarefa removido com sucesso';

$lang['task_no_assignees'] = 'Nenhum destinatário para essa tarefa';
$lang['task_no_followers'] = 'Nenhum seguidor para essa tarefa';

$lang['task_list_all'] = 'Todos';
$lang['task_list_finished'] = 'Concluido';
$lang['task_list_unfinished'] = 'Não concluido';
$lang['task_list_not_assigned'] = 'Não atribuido';
$lang['task_list_duedate_passed'] = 'Data de Vencimento passada';
$lang['tasks_dt_name'] = 'Nome';

$lang['task_single_priority'] = 'Prioridade';
$lang['task_single_start_date'] = 'Data de Início';
$lang['task_single_due_date'] = 'Data de Vencimento';
$lang['task_single_finished'] = 'Concluido';
$lang['task_single_mark_as_complete'] = 'Marcar como completo';
$lang['task_single_edit'] = 'Editar';
$lang['task_single_delete'] = 'Deletar';
$lang['task_single_assignees'] = 'Destinatários';
$lang['task_single_assignees_select_title'] = 'Atribuir a tarefa a';
$lang['task_single_followers'] = 'Seguidores';
$lang['task_single_followers_select_title'] = 'Adicionar seguidores';
$lang['task_single_insert_media_link'] = 'Inserir Link de Mídia';
$lang['task_single_add_new_comment'] = 'Adicionar Comentário';

$lang['task_add_edit_subject'] = 'Assunto';
$lang['task_add_edit_priority'] = 'Prioridade';
$lang['task_priority_low'] = 'Baixa';
$lang['task_priority_medium'] = 'Média';
$lang['task_priority_high'] = 'Alta';
$lang['task_priority_urgent'] = 'Urgente';
$lang['task_add_edit_start_date'] = 'Data de Início';
$lang['task_add_edit_due_date'] = 'Data de Vencimento';
$lang['task_add_edit_description'] = 'Descrição da Tarefa';

# Taxes
$lang['new_tax'] = 'Nova Taxa';
$lang['taxes'] = 'Taxas';
$lang['tax'] = 'Taxa';
$lang['tax_lowercase'] = 'taxa';
$lang['tax_dt_name'] = 'Nome da Taxa';
$lang['tax_dt_rate'] = 'Tarifa (porcentual)';

$lang['tax_add_edit_name'] = 'Nome da Taxa';
$lang['tax_add_edit_rate'] = 'Tarifa da Taxa (porcentual)';
$lang['tax_edit_title'] = 'Editar Taxa';
$lang['tax_add_title'] = 'Adicionar Nova Taxa';

# Ticket Statuses
$lang['new_ticket_status'] = 'Novo Status do Tiquete';
$lang['ticket_statuses'] = 'Status do Tiquete';
$lang['ticket_status'] = 'Status do Tiquete';
$lang['ticket_status_lowercase'] = 'Status do Tiquete';

$lang['ticket_statuses_dt_name'] = 'Nome do Status do Tiquete';
$lang['no_ticket_statuses_found'] = 'Nenhum status do Tiquete encontrado';
$lang['ticket_statuses_table_total'] = 'Total %s';
$lang['ticket_status_add_edit_name'] = 'Nome do Status do Tiquete';
$lang['ticket_status_add_edit_color'] = 'Escolher cor';
$lang['ticket_status_add_edit_order'] = 'Status do Pedido';

# Todos
$lang['new_todo'] = 'Nova Tarefa';
$lang['my_todos'] = 'Meus Itens de Tarefas';
$lang['todo'] = 'Item de Tarefa';
$lang['todo_lowercase'] = 'tarefa';
$lang['todo_status_changed'] = 'Status da tarefa alterado';
$lang['todo_add_title'] = 'Adicionar nova tarefa';
$lang['add_new_todo_description'] = 'Descrição';
$lang['no_finished_todos_found'] = 'Nenhuma tarefa acabada encontrada';
$lang['no_unfinished_todos_found'] = 'Nenhuma tarefa acabada';
$lang['unfinished_todos_title'] = 'Tarefas inacabadas';
$lang['finished_todos_title'] = 'Últimas tarefas acabadas';

# Authentication
$lang['password_changed_email_subject'] = 'Sua senha foi alterada';
$lang['password_reset_email_subject'] = 'Redefinir sua senha em %s';
# Utilities
$lang['utility_activity_log'] = 'Registro de atividade';
$lang['utility_activity_log_filter_by_date'] = 'Filtrar por data';
$lang['utility_activity_log_dt_description'] = 'Descrição';
$lang['utility_activity_log_dt_date'] = 'Data';
$lang['utility_activity_log_dt_staff'] = 'Staff';
$lang['utility_calendar_new_event_title'] = 'Adicionar novo evento';
$lang['utility_calendar_new_event_start_date'] = 'Data de Início';
$lang['utility_calendar_new_event_end_date'] = 'Data de Término';
$lang['utility_calendar_new_event_make_public'] = 'Tornar Público';
$lang['utility_calendar_event_added_successfuly'] = 'Novo evento adicionado com sucesso';
$lang['utility_calendar_event_deleted_successfuly'] = 'Evento deletado';
$lang['utility_calendar_new_event_placeholder'] = 'Título do evento';


# Navigation
$lang['nav_notifications'] = 'Notificações';
$lang['nav_my_profile'] = 'Meu Perfil';
$lang['nav_edit_profile'] = 'Editar Perfil';
$lang['nav_logout'] = 'Sair';
$lang['nav_no_notifications'] = 'Nenhuma notificação encontrada';
$lang['nav_view_all_notifications'] = 'Visualizar todas as notificações';
$lang['nav_customizer_tooltip'] = 'Personalizar Configurações';
$lang['nav_notifications_tooltip'] = 'Visualizar Notificações';
## Clients
#

$lang['clients_required_field'] = 'Esse campo é necessário';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Announcements
$lang['clients_announcement_from'] = 'De: ';
$lang['clients_announcement_added'] = 'Adicionado: ';

# Contracts
$lang['clients_contracts'] = 'Contratos';
$lang['clients_contracts_dt_subject'] = 'Assunto';
$lang['clients_contracts_dt_start_date'] = 'Data de Início';
$lang['clients_contracts_dt_end_date'] = 'Data Final';

# Home
$lang['clients_quick_invoice_info'] = 'Informações rápidas de Faturas';
$lang['clients_home_currency_select_tooltip'] = 'Você precisa selecionar uma moeda porque você tem faturas com moeda diferentes';
# Invoices
$lang['clients_invoice_html_btn_download'] = 'Baixar';

$lang['clients_my_invoices'] = 'Minhas Faturas';
$lang['clients_invoice_dt_number'] = 'Fatura #';
$lang['clients_invoice_dt_date'] = 'Data';
$lang['clients_invoice_dt_duedate'] = 'Data de Vencimento';
$lang['clients_invoice_dt_amount'] = 'Quantia';
$lang['clients_invoice_dt_status'] = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Perfil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nome';
$lang['clients_lastname'] = 'Sobrenome';
$lang['clients_email'] = 'Endereço de E-mail';
$lang['clients_company'] = 'Empresa';
$lang['clients_vat'] = 'Número VAT';
$lang['clients_phone'] = 'Telefone';
$lang['clients_country'] = 'País';
$lang['clients_city'] = 'Cidade';
$lang['clients_address'] = 'Endereco';
$lang['clients_zip'] = 'CEP';
$lang['clients_state'] = 'Estado';

# Used for edit profile and register END

$lang['clients_register_password'] = 'Senha';
$lang['clients_register_password_repeat'] = 'Repetir a Senha';
$lang['clients_edit_profile_update_btn'] = 'Atualizar';

$lang['clients_edit_profile_change_password_heading'] = 'Alterar Senha';
$lang['clients_edit_profile_old_password'] = 'Senha Antiga';
$lang['clients_edit_profile_new_password'] = 'Senha Nova';
$lang['clients_edit_profile_new_password_repeat'] = 'Repetir a Senha';
$lang['clients_edit_profile_change_password_btn'] = 'Alterar a Senha';
$lang['clients_profile_last_changed_password'] = 'Senha alterada pela última vez %s';

# Knowledge base
$lang['clients_knowledge_base'] = 'Base de Conhecimento';
$lang['clients_knowledge_base_articles_not_found'] = 'Nenhum artigo encontrado na base de conhecimento';
$lang['clients_knowledge_base_find_useful'] = 'Você achou esse artigo útil?';
$lang['clients_knowledge_base_find_useful_yes'] = 'Sim';
$lang['clients_knowledge_base_find_useful_no'] = 'Não';
$lang['clients_article_only_1_vote_today'] = 'Você ode votar uma vez em 24 horas';
$lang['clients_article_voted_thanks_for_feedback'] = 'Obrigado pela sua opinião';

# Tickets
$lang['clients_ticket_open_subject'] = 'Abrir Tiquete';
$lang['clients_ticket_open_departments'] = 'Departamento';
$lang['clients_tickets_heading'] = 'Tiquetes de Suporte';
$lang['clients_ticket_open_service'] = 'Serviço';
$lang['clients_ticket_open_priority'] = 'Prioridade';
$lang['clients_latest_tickets'] = 'Últimos Tiquetes';
$lang['clients_ticket_open_body'] = 'Corpo do Tiquete';
$lang['clients_ticket_attachments'] = 'Anexos';
$lang['clients_ticket_posted'] = 'Postado: %s';
$lang['clients_single_ticket_string'] = 'Tiquete';
$lang['clients_single_ticket_replied'] = 'Respondido: %s';
$lang['clients_single_ticket_informations_heading'] = 'Informações do Tiquete';

$lang['clients_tickets_dt_number'] = 'Tiquete #';
$lang['clients_tickets_dt_subject'] = 'Assunto';
$lang['clients_tickets_dt_department'] = 'Departamento';
$lang['clients_tickets_dt_service'] = 'Serviço';
$lang['clients_tickets_dt_status'] = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Última Resposta';


$lang['clients_ticket_single_department'] = 'Departamento: %s';
$lang['clients_ticket_single_submited'] = 'Submetido: %s';
$lang['clients_ticket_single_status'] = 'Status:';
$lang['clients_ticket_single_priority'] = 'Prioridade: %s';
$lang['clients_ticket_single_add_reply_btn'] = 'Adicionar Resposta';
$lang['clients_ticket_single_add_reply_heading'] = 'Adicionar Resposta a esse tiquete';

# Login
$lang['clients_login_heading_no_register'] = 'Por favor, entre';
$lang['clients_login_heading_register'] = 'Por favor, entre ou inscreva-se';
$lang['clients_login_email'] = 'Endereço de E-mail';
$lang['clients_login_password'] = 'Senha';
$lang['clients_login_remember'] = 'Lembre-se de mim';
$lang['clients_login_login_string'] = 'Entrar';

# Register
$lang['clients_register_string'] = 'Inscrever-se';
$lang['clients_register_heading'] = 'Inscrever-se';

# Navigation
$lang['clients_nav_login'] = 'Entrar';
$lang['clients_nav_register'] = 'Inscrever-se';
$lang['clients_nav_invoices'] = 'Faturas';
$lang['clients_nav_contracts'] = 'Contratos';
$lang['clients_nav_kb'] = 'Base de Conhecimento';
$lang['clients_nav_profile'] = 'Pefil';
$lang['clients_nav_logout'] = 'Sair';

# Datatables
$lang['clients_dt_paginate_first'] = 'Primeiro';
$lang['clients_dt_paginate_last'] = 'Último';
$lang['clients_dt_paginate_next'] = 'Próximo';
$lang['clients_dt_paginate_previous'] = 'Anterior';
$lang['clients_dt_empty_table'] = 'Nenhum {0} encontrado';
$lang['clients_dt_search'] = 'Procurar:';
$lang['clients_dt_zero_records'] = 'Nenhum registro encontrada';
$lang['clients_dt_loading_records'] = 'Carregando...';
$lang['clients_dt_length_menu'] = 'Mostrar _MENU_ ';
$lang['clients_dt_info_filtered'] = '(filtrado do _MAX_ total {0})';
$lang['clients_dt_info_empty'] = 'Mostrar 0 a 0 de 0 {0}';
$lang['clients_dt_info'] = 'Mostrar _START_ a _END_ de _TOTAL_ {0}';
$lang['clients_dt_empty_table'] = 'Nenhum {0} encontrado';
$lang['clients_dt_sort_ascending'] = 'ativar classificação de coluna ascendente';
$lang['clients_dt_sort_descending'] = 'ativar classificação de coluna descendente';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt'] = 'Recibo do pagamento';
$lang['payment_for_string'] = 'Pagamento Para';
$lang['payment_date'] = 'Data de Pagamento:';
$lang['payment_view_mode'] = 'Modo de Pagamento:';
$lang['payment_total_amount'] = 'Quantia Total';
$lang['payment_table_invoice_number'] = 'Número da Fatura';
$lang['payment_table_invoice_date'] = 'Data da Fatura';
$lang['payment_table_invoice_amount_total'] = 'Quantia da Fatura';
$lang['payment_table_payment_amount_total'] = 'Quantia do Pagamento';
$lang['payments_table_transaction_id'] = 'ID da Transação: %s';
$lang['payment_getaway_token_not_found'] = 'Símbolo não Encontrado';
$lang['online_payment_recorded_success'] = 'Pagamento registado com sucesso';
$lang['online_payment_recorded_success_fail_database'] = 'Pagamento bem sucedido, mas não foi possível inserir o pagamento ao banco de dados, entre em contato com o administrador';

# Leads
$lang['lead_convert_to_client'] = 'Converter para o cliente';
$lang['lead_convert_to_email'] = 'E-mail';
$lang['lead_convert_to_client_firstname'] = 'Nome';
$lang['lead_convert_to_client_lastname'] = 'Sobrenome';
$lang['lead_email_already_exists'] = 'E-mail lead já existe nos dados dos clientes';
$lang['lead_to_client_base_converted_success'] = 'Lead convertido para o cliente com sucesso';
$lang['lead_already_converted'] = 'Convertido para o cliente';
$lang['lead_have_client_profile'] = 'Esse lead está no perfil do cliente.';
$lang['lead_converted_edit_client_profile'] = 'Editar Perfil';

# Invoices
$lang['view_invoice_as_customer_tooltip'] = 'Visualizar fatura como o cliente';
$lang['invoice_add_edit_recurring'] = 'Fatura Recorrente?';
$lang['invoice_add_edit_recurring_no'] = 'Não';
$lang['invoice_add_edit_recurring_month'] = 'Todo mês';
$lang['invoice_add_edit_recurring_months'] = 'A cada %s meses';
$lang['invoices_list_all'] = 'Tudo';
$lang['invoices_list_not_sent'] = 'Faturas Não Enviadas';
$lang['invoices_list_not_have_payment'] = 'Faturas sem registro de pagamento';
$lang['invoices_list_recuring'] = 'Faturas Recorrentes';
$lang['invoices_list_made_payment_by'] = 'Pagamento realizado por %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices'] = 'Criar uma nova fatura da fatura recorrente principal somente se estiver com o status pago';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Criar nova fatura da fatura principal recorrente apenas se a fatura principal tiver como status paga? Se esse canpo está definido como Não e a fatura recorrente não está com status paga a nova fatura não será criada';
$lang['send_renewed_invoice_from_recurring_to_email'] = 'Enviar automaticamente a fatura de renovação para o cliente';
$lang['view_invoice_pdf_link_pay'] = 'Pagar a Fatura';

# Payment modes
$lang['payment_mode_add_edit_description'] = 'Contas Bancárias / Descrição';
$lang['payment_mode_add_edit_description_tooltip'] = 'Você pode definir aqui suas informações das contas bancárias. Será mostrado na Fatura HTML';
$lang['payment_modes_dt_description'] = 'Contas Bancárias / Descrição';
$lang['payment_modes_add_edit_announcement'] = 'Nota: Modos de pagamentos listados abaixo são modos offline. Modos de pagamentos online podem ser configurados em Configurações-> Meios de Pagamento';
$lang['payment_mode_add_edit_active'] = 'Ativo';
$lang['payment_modes_dt_active'] = 'Ativo';

# Contracts
$lang['contract_not_found'] = 'Contrato não encontrado. Talvez esteja deletado, verifique o registro de atividade';

# Settings
$lang['setting_bar_heading'] = 'Configuração';
$lang['settings_group_online_payment_modes'] = 'Meios de Pagamento';
$lang['settings_paymentmethod_mode_label'] = 'Título';
$lang['settings_paymentmethod_active'] = 'Ativo';
$lang['settings_paymentmethod_currencies'] = 'Vírgulas Separando Moedas';
$lang['settings_paymentmethod_testing_mode'] = 'Habilitar Modo de Teste';

$lang['settings_paymentmethod_paypal_username'] = 'Usuário API Paypal';
$lang['settings_paymentmethod_paypal_password'] = 'Senha API Paypal';
$lang['settings_paymentmethod_paypal_signature'] = 'Assinatura API';

$lang['settings_paymentmethod_stripe_api_secret_key'] = 'Chave Secreta Tarjada API';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Chave Publicável Tarjada';
$lang['settings_limit_top_search_bar_results'] = 'Limite Superior da Barra de Pesquisa Resultados para';

# Quick Actions
$lang['qa_create_invoice'] = 'Criar Fatura';
$lang['qa_create_task'] = 'Criar Tarefa';
$lang['qa_create_client'] = 'Criar Cliente';
$lang['qa_create_contract'] = 'Criar Contrato';
$lang['qa_create_kba'] = 'Criar Artigo da Base de Conhecimento';
$lang['qa_create_survey'] = 'Criar Pesquisa';
$lang['qa_create_ticket'] = 'Abrir Tiquete';
$lang['qa_create_staff'] = 'Criar Membro do Staff';

## Clients
$lang['client_phonenumber'] = 'Telefone';

# Main Clients
$lang['clients_register'] = 'Inscrever-se';
$lang['clients_profile_updated'] = 'Seu perfil foi atualizado';
$lang['clients_successfully_registered'] = 'Obrigado por se inscrever';
$lang['clients_account_created_but_not_logged_in'] = 'Sua conta foi criada mas você não está logado no nosso sistema automaticamente. Por favor, tente entrar';
# Tickets
$lang['clients_tickets_heading'] = 'Tiquetes de Suporte';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Pagamento pela Fatura';
$lang['payment_total'] = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment'] = 'Pagamento Online';
$lang['invoice_html_online_payment_button_text'] = 'Pagar agora';
$lang['invoice_html_payment_modes_not_selected'] = 'Por favor, Selecione um Modo de Pagamento';
$lang['invoice_html_amount_blank'] = 'Quantia total não pode estar em branco ou ser zero';
$lang['invoice_html_offline_payment'] = 'Pagamento Offline';
$lang['invoice_html_amount'] = 'Quantia';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility'] = 'Visibilidade';
$lang['dt_button_reload'] = 'Recarregar';
$lang['dt_button_excel'] = 'Excel';
$lang['dt_button_csv'] = 'CSV';
$lang['dt_button_pdf'] = 'PDF';
$lang['dt_button_print'] = 'Imprimir';
$lang['is_not_active_export'] = 'Não';
$lang['is_active_export'] = 'Sim';

# Invoice
$lang['invoice_add_edit_advanced_options'] = 'Opções Avançadas';
$lang['invoice_add_edit_allowed_payment_modes'] = 'Modos de pagamentos permitidos para essa fatura';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Faturas recorrentes desta fatura';
$lang['invoice_add_edit_no_payment_modes_found'] = 'Nenhum modo de pagamento encontrado.';
$lang['invoice_html_total_pay'] = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nome do Modelo';
# General
$lang['discount_type'] = 'Tipo de Desconto';
$lang['discount_type_after_tax'] = 'Após Taxas';
$lang['discount_type_before_tax'] = 'Antes da Taxas';
$lang['terms_and_conditions'] = 'Termos e Condições';
$lang['reference_no'] = 'Referência #';
$lang['no_discount'] = 'Sem desconto';
$lang['view_stats_tooltip'] = 'Visualizar Estatisticas Rápidas';
# Clients
$lang['zip_from_date'] = 'Da Data:';
$lang['zip_to_date'] = 'Até a Data:';
$lang['client_zip_payments'] = 'Pagamentos ZIP';
$lang['client_zip_invoices'] = 'Faturamentos ZIP';
$lang['client_zip_estimates'] = 'Estimativas ZIP';
$lang['client_zip_status'] = 'Status';
$lang['client_zip_status_all'] = 'Todos';
$lang['client_zip_payment_modes'] = 'Pagamento realizado por';
$lang['client_zip_no_data_found'] = 'Nenhum %s encontrado';

# Payments
$lang['payment_mode'] = 'Modo de Pagamento';
$lang['payment_view_heading'] = 'Pagamento';

# Settings
$lang['settings_allow_payment_amount_to_be_modified'] = 'Permitir que o cliente altere o valor a pagar (para pagamentos online)';
$lang['settings_survey_send_emails_per_cron_run'] = 'Quantos e-mails enviar por hora';
$lang['settings_survey_send_emails_per_cron_run_tooltip'] = 'Esta opção é usada quando a pesquisa é emviada. A Pesquisa cron é realizada a cada 5 minutos. Então você pode definir quantos e-mails serão enviados a cada 5 minutos';
$lang['settings_delete_only_on_last_invoice'] = 'Deletar a fatura permitido apenas na última fatura';
$lang['settings_sales_estimate_prefix'] = 'Prefixo do Número Estimado';
$lang['settings_sales_next_estimate_number'] = 'Próximo Número Estimado';
$lang['settings_sales_next_estimate_number_tooltip'] = 'Defina esse campo para 1 se você quiser começar pelo início';
$lang['settings_sales_decrement_estimate_number_on_delete'] = 'Diminuir o número da estimativa ao deletar';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Você quer diminuir o número estimado quando a última estimativa for deletada? Ex. Se esta opção está definida para SIM e a estimativa anterior é deletada o próximo número estimado é o número seguinte da estimativa e irá diminuir a 14 para a próxima estimativa, se estiver definida como Não o número continuar a ser 15';
$lang['settings_sales_estimate_number_format'] = 'Formato da Estimativa do Número';
$lang['settings_sales_estimate_number_format_year_based'] = 'Ano de Base';
$lang['settings_sales_estimate_number_format_number_based'] = 'Número de Base (000001)';
$lang['settings_sales_estimate_year'] = 'Ano Estimado (YYYY/000001)';
$lang['settings_sales_estimate_year_tooltip'] = 'Ano estimado atual. Redefinir isso quando o ano novo chegar.';
$lang['settings_delete_only_on_last_estimate'] = 'Deletar estimativa permitida apenas na última fatura';
$lang['settings_cron_invoice_heading'] = 'Fatura';
$lang['settings_send_test_email_heading'] = 'Enviar E-mail Teste';
$lang['settings_send_test_email_subheading'] = 'Enviar e-mail teste para garantir que suas configurações SMTP estão definidas corretamente.';
$lang['settings_send_test_email_string'] = 'Endereço de E-mail';
$lang['settings_smtp_settings_heading'] = 'Configurações SMTP';
$lang['settings_smtp_settings_subheading'] = 'Configurar e-mail principal';
$lang['settings_sales_heading_general'] = 'Geral';
$lang['settings_sales_heading_invoice'] = 'Fatura';
$lang['settings_sales_heading_estimates'] = 'Estimativa';
$lang['settings_sales_heading_company'] = 'Empresa';
$lang['settings_sales_cron_invoice_heading'] = 'Fatura';

# Tasks
$lang['tasks_dt_datestart'] = 'Data de Início';
$lang['tasks_dt_priority'] = 'Prioridade';

# Invoice General
$lang['invoice_discount'] = 'Desconto';

# Tickets
$lang['ticket_settings_client'] = 'Cliente';

# Settings
$lang['settings_rtl_support_admin'] = 'RTL Área Admin (Direita para Esquerda)';
$lang['settings_rtl_support_client'] = 'RTL Área do Cliente (Direita para Esquerda)';
$lang['acs_language_editor'] = 'Editor de Idioma';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept'] = 'Auto conversão da estimativa de fatura após o cliente aceitar';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excluir estimativas com status do rascunho da área de cliente';

# Months
$lang['January'] = 'Janeiro';
$lang['February'] = 'Fevereiro';
$lang['March'] = 'Março';
$lang['April'] = 'Abril';
$lang['May'] = 'Maio';
$lang['June'] = 'Junho';
$lang['July'] = 'Julho';
$lang['August'] = 'Agosto';
$lang['September'] = 'Setembro';
$lang['October'] = 'Outubro';
$lang['November'] = 'Novembro';
$lang['December'] = 'Dezembro';

# Time ago function translate
$lang['time_ago_just_now'] = 'Agora mesmo';
$lang['time_ago_minute'] = 'um minuto atrás';
$lang['time_ago_minutes'] = '%s minutos atrás';
$lang['time_ago_hour'] = 'uma hora atrás';
$lang['time_ago_hours'] = '%s horas atrás';
$lang['time_ago_yesterday'] = 'ontem';
$lang['time_ago_days'] = '%s dias atrás';
$lang['time_ago_week'] = 'uma semana atrás';
$lang['time_ago_weeks'] = '%s semanas atrás';
$lang['time_ago_month'] = 'um mês atrás';
$lang['time_ago_months'] = '%s meses atrás';
$lang['time_ago_year'] = 'um ano atrás';
$lang['time_ago_years'] = '%s anos atrás';


# Estimates
$lang['estimates'] = 'Estimativas';
$lang['estimate'] = 'Estimativa';
$lang['estimate_lowercase'] = 'estimativa';
$lang['create_new_estimate'] = 'Criar Nova Estimativa';
$lang['view_estimate'] = 'Visualizar estimativa';
$lang['estimate_sent_to_client_success'] = 'A estimativa foi enviada com sucesso para o cliente';
$lang['estimate_sent_to_client_fail'] = 'Problema ao enviar a estimativa';
$lang['estimate_reminder_send_problem'] = 'Problema ao enviar a estimativa de lembrete de atraso';
$lang['estimate_details'] = 'Detalhes da Estimativa';
$lang['estimate_view'] = 'Visualizar estimativa';
$lang['estimate_select_customer'] = 'Cliente';
$lang['estimate_add_edit_number'] = 'Número da Estimativa';
$lang['estimate_add_edit_date'] = 'Data da Estimativa';
$lang['estimate_add_edit_expirydate'] = 'Data de Expiração';
$lang['estimate_add_edit_currency'] = 'Moeda';
$lang['estimate_add_edit_client_note'] = 'Nota do Cliente';
$lang['estimate_add_edit_admin_note'] = 'Nota do Admin';
$lang['estimate_add_edit_new_item'] = 'Novo Item';
$lang['estimate_add_edit_search_item'] = 'Procurar Itens';
$lang['estimates_toggle_table_tooltip'] = 'Tabela de alternância';
$lang['estimate_add_edit_advanced_options'] = 'Opções Avançadas';
$lang['estimate_vat'] = 'Número VAT';
$lang['estimate_to'] = 'Para';
$lang['estimates_list_all'] = 'Todos';

$lang['estimate_invoiced_date'] = 'Estimar Fatura em %s';
$lang['edit_estimate_tooltip'] = 'Editar Estimativa';
$lang['delete_estimate_tooltip'] = 'Deletar Estimativa';
$lang['estimate_sent_to_email_tooltip'] = 'Enviar E-mail';
$lang['estimate_already_send_to_client_tooltip'] = 'Essa estimativa já foi enviada para o cliente %s';
$lang['send_overdue_notice_tooltip'] = 'Enviar Aviso de Vencimento';
$lang['estimate_view_activity_tooltip'] = 'Registro de Atividade';

$lang['estimate_send_to_client_modal_heading'] = 'Enviar esta estimativa para o cliente';
$lang['estimate_send_to_client_attach_pdf'] = 'Anexar estimativa em PDF';
$lang['estimate_send_to_client_preview_template'] = 'Pré-visualização do Modelo de e-mail';

$lang['estimate_dt_table_heading_number'] = 'Estimativa #';
$lang['estimate_dt_table_heading_date'] = 'Data';
$lang['estimate_dt_table_heading_client'] = 'Cliente';
$lang['estimate_dt_table_heading_expirydate'] = 'Data de Expiração';
$lang['estimate_dt_table_heading_amount'] = 'Quantia';
$lang['estimate_dt_table_heading_status'] = 'Status';

$lang['estimate_email_link_text'] = 'Visualizar Estimativa';
$lang['estimate_convert_to_invoice'] = 'Converter a Fatura';
# Home
$lang['home_unfinished_tasks'] = 'Tarefa não concluida';

# Clients
$lang['client_estimates_tab'] = 'Estimativas';
$lang['client_payments_tab'] = 'Pagamentos';


# Estimate General
$lang['estimate_pdf_heading'] = 'ESTIMATIVA';
$lang['estimate_table_item_heading'] = 'Item';
$lang['estimate_table_quantity_heading'] = 'Qtdd';
$lang['estimate_table_rate_heading'] = 'Tarifa';
$lang['estimate_table_tax_heading'] = 'Taxa';
$lang['estimate_table_amount_heading'] = 'Quantia';
$lang['estimate_subtotal'] = 'Sub Total';
$lang['estimate_adjustment'] = 'Ajuste';
$lang['estimate_discount'] = 'Desconto';
$lang['estimate_total'] = 'Total';
$lang['estimate_to'] = 'Para';
$lang['estimate_data_date'] = 'Data Estimada';
$lang['estimate_data_expiry_date'] = 'Data de Expiração';
$lang['estimate_note'] = 'Nota:';
$lang['estimate_status_draft'] = 'Rascunho';
$lang['estimate_status_sent'] = 'Enviado';
$lang['estimate_status_declined'] = 'Declinado';
$lang['estimate_status_accepted'] = 'Aceito';
$lang['estimate_status_expired'] = 'Expirado';
$lang['estimate_note'] = 'Nota:';

# Quick create
$lang['qa_create_estimate'] = 'Criar Estimativa';
$lang['qa_create_lead'] = 'Criar Lead';


## Clients
$lang['clients_estimate_dt_number'] = 'Estimativa #';
$lang['clients_estimate_dt_date'] = 'Data';
$lang['clients_estimate_dt_duedate'] = 'Data de Expiração';
$lang['clients_estimate_dt_amount'] = 'Quantia';
$lang['clients_estimate_dt_status'] = 'Status';
$lang['clients_nav_estimates'] = 'Estimativas';
$lang['clients_decline_estimate'] = 'Declinar';
$lang['clients_accept_estimate'] = 'Aceitar';
$lang['clients_my_estimates'] = 'Estimativas';
$lang['clients_estimate_invoiced_successfuly'] = 'Estimativa aceita. Aqui está a fatura dessa estimativa';
$lang['clients_estimate_accepted_not_invoiced'] = 'Obrigada por aceitar essa estimativa';
$lang['clients_estimate_declined'] = 'Estimativa declinada. Você pode aceitar a estimativa a qualquer momento antes da data de expiração';
$lang['clients_estimate_failed_action'] = 'Falha para tomar a ação nessa estimativa';
$lang['client_add_edit_profile'] = 'Perfil';

# Version 1.0.3
# Admin
# Home
$lang['home_invoice_not_sent'] = 'Fatura não Enviada';
$lang['home_expired_estimates'] = 'Estimativa Expirada';
$lang['home_invoice_overdue'] = 'Fatura Vencida';
$lang['home_payments_received_today'] = 'Pagamentos Recebidos Hoje';

# Reports

# Custom Fields
$lang['custom_field'] = 'Campo Personalizado';
$lang['custom_field_lowercase'] = 'campo personalizado';
$lang['custom_fields'] = 'Campos Personalizados';
$lang['custom_fields_lowercase'] = 'campos personalizados';
$lang['new_custom_field'] = 'Novo Campo Personalizado';
$lang['custom_field_name'] = 'Nome do Campo';
$lang['custom_field_add_edit_type'] = 'Tipo';
$lang['custom_field_add_edit_belongs_top'] = 'Campo Pertencente a';
$lang['custom_field_add_edit_options'] = 'Opções';
$lang['custom_field_add_edit_options_tooltip'] = 'Use apenas para tipos Selecionados. Preencha o campo separando as opções por vírgulas. Ex. maça,laranja,banana';
$lang['custom_field_add_edit_order'] = 'Pedido';

$lang['custom_field_dt_field_to'] = 'Pertencente a';
$lang['custom_field_dt_field_name'] = 'Nome';
$lang['custom_field_dt_field_type'] = 'Tipo';
$lang['custom_field_add_edit_active'] = 'Ativo';
$lang['custom_field_add_edit_disabled'] = 'Desabilitado';

# Ticket replies
$lang['ticket_reply'] = 'Resposta do Tiquete';
$lang['ticket_reply_lowercase'] = 'resposta do tiquete';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Campos Personalizados';

# Contracts
$lang['contract_types'] = 'Tipos de Contratos';
$lang['contract_type'] = 'Tipo de contrato';
$lang['new_contract_type'] = 'Novo Tipo de Contrato';
$lang['contract_type_lowercase'] = 'contrato';
$lang['contract_type_name'] = 'Nome';

$lang['contract_types_list_name'] = 'Tipo de Contrato';

# Customizer Menu
$lang['acs_contracts'] = 'Contratos';
$lang['acs_contract_types'] = 'Tipos de Contrato';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description'] = 'Descrição Longa';
# Customers
$lang['client_delete_invoices_warning'] = 'Este cliente tem faturas e estimativas na sua conta. Você não pode deletar o cliente. Altere todas as faturas para outro cliente no futuro, então delete.';
$lang['clients_list_phone'] = 'Telefone';
$lang['client_expenses_tab'] = 'Despesas';
$lang['customers_summary'] = 'Resumo dos clientes';
$lang['customers_summary_active'] = 'Ativo';
$lang['customers_summary_inactive'] = 'Inativo';
$lang['customers_summary_logged_in_today'] = 'Logado Hoje';

# Authentication
$lang['admin_auth_forgot_password_email'] = 'Endereço de E-mail';
$lang['admin_auth_forgot_password_heading'] = 'Senha Esquecida';
$lang['admin_auth_login_heading'] = 'Entrar';
$lang['admin_auth_login_email'] = 'Endereço de E-mail';
$lang['admin_auth_login_password'] = 'Senha';
$lang['admin_auth_login_remember_me'] = 'Lembre-se de mim';
$lang['admin_auth_login_button'] = 'Entrar';
$lang['admin_auth_login_fp'] = 'Senha Esquecida?';
$lang['admin_auth_reset_password_heading'] = 'Redefinir senha';
$lang['admin_auth_reset_password'] = 'Senha';
$lang['admin_auth_reset_password_repeat'] = 'Repetir a senha';
$lang['admin_auth_invalid_email_or_password'] = 'E-mail inválido ou senha';
$lang['admin_auth_inactive_account'] = 'Conta inativa';
# Calender
$lang['calendar_estimate'] = 'Estimativa';
$lang['calendar_invoice'] = 'Fatura';
$lang['calendar_contract'] = 'Contrato';
$lang['calendar_customer_reminder'] = 'Lembrete ao Cliente';
$lang['calendar_event'] = 'Evento';
$lang['calendar_task'] = 'Tarefa';
# Leads
$lang['lead_edit_delete_tooltip'] = 'Deletar Lead';
$lang['lead_attachments'] = 'Anexos';
# Admin Customizer Sidebar
$lang['acs_finance'] = 'Finanças';
# Settings
$lang['new_company_field_info'] = 'Este campo será mostrado nas faturas / estimativas do lado da empresa (à esquerda). Você não tem permissão para adicionar quaisquer caracteres (pontos, traços, sinais etc.) no campo NOME.';
$lang['new_company_field_name'] = 'Campo Nome';
$lang['new_company_field_value'] = 'Campo Valor';
$lang['new_company_field'] = 'Adicionar Novo Campo da Empresa';
$lang['settings_number_padding_invoice_and_estimate'] = 'Número da Fatura/Estimativa Preenchido com Zero. <br /> <small>Ex. Se esse valor é 3 o número será formatado: 005 ou 025</small>';
$lang['settings_show_sale_agent_on_invoices'] = 'Mostrar o Agente de Venda na Fatura';
$lang['settings_show_sale_agent_on_estimates'] = 'Mostrar o Agente da Venda na Estimativa';
$lang['settings_predefined_predefined_term'] = 'Termos e Condições predefinidos';
$lang['settings_predefined_clientnote'] = 'Nota do Cliente Predefinida';
$lang['settings_custom_pdf_logo_image_url'] = 'Personalizar o PDF do Logo da Empresa URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip'] = 'Provavelmente você terá problemas com imagens PNG com transparência que são tratadas de forma diferente dependendo da versão do php-imagick ou php-gd usada. Tente atualizar o php-imagick e desabilitar o php-gd
. Se você deixar este campo em branco o logo carregado será usado.';

# General
$lang['sale_agent_string'] = 'Agente de Venda';
$lang['amount_display_in_base_currency'] = 'Quantia está exibida na sua moeda base';

# Leads
$lang['leads_summary'] = 'Resumo de Leads';

# Contracts
$lang['contract_value'] = 'Valor do Contrato';
$lang['contract_trash'] = 'Lixeira';
$lang['contracts_view_trash'] = 'Visualizar Lixeira';
$lang['contracts_view_all'] = 'Todos';
$lang['contracts_view_exclude_trashed'] = 'Excluir os Contratos da Lixeira';
$lang['contract_value_tooltip'] = 'Adicionar valor de contrato. O valor será exibido na sua moeda base.';
$lang['contract_trash_tooltip'] = 'Se você adicionar um contrato a lixeira, não será mostrado no lado do cliente, não será incluido no gráfico e outras estatisticas e também por padrão não será mostrado quando você listar todos os contratos.';

$lang['contract_renew_heading'] = 'Renovar contrato';
$lang['contract_summary_heading'] = 'Resumo do contrato';
$lang['contract_summary_expired'] = 'Expirado';
$lang['contract_summary_active'] = 'Ativo';
$lang['contract_summary_about_to_expire'] = 'Próximo de Expirar';
$lang['contract_summary_recently_added'] = 'Recentemente adicionado';
$lang['contract_summary_trash'] = 'Lixeira';
$lang['contract_summary_by_type'] = 'Contratos por Tipo';
$lang['contract_summary_by_type_value'] = 'Valor de Contratos por Tipo';
$lang['contract_renewed_successfuly'] = 'Contrato renovado com sucesso';
$lang['contract_renewed_fail'] = 'Problema ao renovar o contrato. Entre em contato com o administrador';
$lang['no_contract_renewals_found'] = 'Renovações para este contrato não encontradas';
$lang['no_contract_renewals_history_heading'] = 'Histórico de Renovação do Contrato';
$lang['contract_renewed_by'] = '%s renovado este contratp';
$lang['contract_renewal_deleted'] = 'Renovação deletada com sucesso';
$lang['contract_renewal_delete_fail'] = 'Falha ao deletar o contrato renovado. Entre em contato com o administrador';

$lang['contract_renewal_new_value'] = 'Novo Valor de Contrato: %s';
$lang['contract_renewal_old_value'] = 'Antigo Valor de Contrato: %s';

$lang['contract_renewal_new_start_date'] = 'Nova Data de Início: %s';
$lang['contract_renewal_old_start_date'] = 'No Contrato Antigo a Data de Início era: %s';

$lang['contract_renewal_new_end_date'] = 'Nova Data Final: %s';
$lang['contract_renewal_old_end_date'] = 'No Contrato Antigo a Data Final era: %s';
$lang['contract_attachment'] = 'Anexo';
$lang['contract_attachment_lowercase'] = 'anexo';

# Admin Aside Menu
$lang['als_goals_tracking'] = 'Metas rastreadas';
$lang['als_expenses'] = 'Despesas';
$lang['als_reports_expenses'] = 'Despesas';
$lang['als_expenses_vs_income'] = 'Despesas vs Renda';

# Invoices
$lang['invoice_attach_file'] = 'Arquivo Anexo';
$lang['invoice_mark_as_sent'] = 'Marcar como Enviado';
$lang['invoice_marked_as_sent'] = 'Fatura marcada como enviada com sucesso';
$lang['invoice_marked_as_sent_failed'] = 'Falha ao marcar a fatura como enviada';

# Quick Actions
$lang['qa_new_goal'] = 'Definir Nova Meta';
$lang['qa_new_expense'] = 'Gravar Despesas';

# Goals Tracking
$lang['goals'] = 'Metas';
$lang['goal'] = 'Meta';
$lang['goals_tracking'] = 'Rastrear Metas';
$lang['new_goal'] = 'Nova meta';
$lang['goal_lowercase'] = 'meta';
$lang['goal_start_date'] = 'Data de Início';
$lang['goal_end_date'] = 'Data Final';
$lang['goal_subject'] = 'Assunto';
$lang['goal_description'] = 'Descrição';
$lang['goal_type'] = 'Tipo de meta';
$lang['goal_achievement'] = 'Realização';
$lang['goal_contract_type'] = 'Tipo de Contrato';
$lang['goal_notify_when_fail'] = 'Notificar membros do staff quando a meta não for realizada';
$lang['goal_notify_when_achieve'] = 'Notificar membros do staff quando a meta for realizada';
$lang['goal_progress'] = 'Progresso';
$lang['goal_total'] = 'Total: %s';
$lang['goal_result_heading'] = 'Progresso da Meta';
$lang['goal_income_shown_in_base_currency'] = 'Renda total é mostrada na sua moeda base';
$lang['goal_notify_when_end_date_arrives'] = 'Os membros do staff serão notificados quando a ata final chegar.';
$lang['goal_staff_members_notified_about_achievement'] = 'Os membros do staff são notificados sobre a realização da meta';
$lang['goal_staff_members_notified_about_failure'] = 'Os membros do Staff são notificados sobre as falhas';
$lang['goal_notify_staff_manualy'] = 'Notificar os Membros Staff Manualmente';
$lang['goal_notify_staff_notified_manualy_success'] = 'Os membros do staff são notificados sobre o resultado dessa meta';
$lang['goal_notify_staff_notified_manualy_fail'] = 'Falha ao notificar os membros do staff sobre o resultado dessa meta';

$lang['goal_achieved'] = 'Realizada';
$lang['goal_failed'] = 'Falha';
$lang['goal_close'] = 'Muito Perto';

$lang['goal_type_total_income'] = 'Renda Total Realizada';
$lang['goal_type_convert_leads'] = 'Conversão X Leads';
$lang['goal_type_increase_customers_without_leads_conversions'] = 'Aumentar o Número de Clientes';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Conversão de Leads está Excluida';

$lang['goal_type_increase_customers_with_leads_conversions'] = 'Aumentar o Número de Clientes';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Conversão de Leads está Incluida';
$lang['goal_type_make_contracts_by_type_calc_database'] = 'Fazer Contratos por Tipo';
$lang['goal_type_make_contracts_by_type_calc_database_subtext'] = 'É calculado a partir dos dados adicionados na base de dados';
$lang['goal_type_make_contracts_by_type_calc_date'] = 'Fazer Contratos por Tipo';
$lang['goal_type_make_contracts_by_type_calc_date_subtext'] = 'É calculado a partir da data de início do contrato';
$lang['goal_type_total_estimates_converted'] = 'X Conversões Estimadas ';
$lang['goal_type_total_estimates_converted_subtext'] = 'Serão tomadas apenas estimativas, que serão convertidos em faturas';
$lang['goal_type_income_subtext'] = 'A renda será calculada na sua moeda base (não convertida)';
# Payments
$lang['payment_transaction_id'] = 'ID da Transação';
# Settings Menu
$lang['acs_expenses'] = 'Despesas';
$lang['acs_expense_categories'] = 'Categorias de Despesas';
# Expeneses
$lang['expense_category'] = 'Categoria da Despesa';
$lang['expense_category_lowercase'] = 'Categoria da despesa';
$lang['new_expense'] = 'Gravar a Despesa';
$lang['expense_add_edit_name'] = 'Nome da Categoria';
$lang['expense_add_edit_description'] = 'Descrição da Categoria';
$lang['expense_categories'] = 'Categorias de Despesas';
$lang['new_expense_category'] = 'Nova Categoria';
$lang['dt_expense_description'] = 'Descrição';
$lang['expense'] = 'Despesa';
$lang['expenses'] = 'Despesas';
$lang['expense_lowercase'] = 'despesa';
$lang['expense_add_edit_tax'] = 'Taxa';
$lang['expense_add_edit_customer'] = 'Cliente';
$lang['expense_add_edit_currency'] = 'Moeda';
$lang['expense_add_edit_note'] = 'Nota';
$lang['expense_add_edit_date'] = 'Data da despesa';
$lang['expense_add_edit_amount'] = 'Quantia';
$lang['expense_add_edit_billable'] = 'Faturável';
$lang['expense_add_edit_attach_receipt'] = 'Recibo Anexo';
$lang['expense_add_edit_reference_no'] = 'Referência #';
$lang['expense_receipt'] = 'Recibo da Despesa';
$lang['expense_receipt_lowercase'] = 'recibo da despesa';
$lang['expense_dt_table_heading_category'] = 'Categoria';
$lang['expense_dt_table_heading_amount'] = 'Quantia';
$lang['expense_dt_table_heading_date'] = 'Data';
$lang['expense_dt_table_heading_reference_no'] = 'Referência #';
$lang['expense_dt_table_heading_customer'] = 'Cliente';
$lang['expense_dt_table_heading_payment_mode'] = 'Modo de pagamento';
$lang['expense_converted_to_invoice'] = 'Despesa convertida com sucesso a fatura';
$lang['expense_converted_to_invoice_fail'] = 'Falha ao converter essa despesa para faturar o registro de erro de verificação.';
$lang['expense_copy_success'] = 'A despesa foi copiada com sucesso.';
$lang['expense_copy_fail'] = 'Falha ao copiar despesa. Por favor, verifique os campos obrigatórios e tente novamente';
$lang['expenses_list_all'] = 'Todos';
$lang['expenses_list_billable'] = 'Faturável';
$lang['expenses_list_non_billable'] = 'Não Faturada';
$lang['expenses_list_invoiced'] = 'Faturada';
$lang['expenses_list_unbilled'] = 'Não Faturada';
$lang['expenses_list_recurring'] = 'Recorrente';
$lang['expense_invoice_delete_not_allowed'] = 'Você não pode excluir essa despesa. A despesa já está faturada.';
$lang['expense_convert_to_invoice'] = 'Converter Para Fatura';
$lang['expense_edit'] = 'Editar Despesas';
$lang['expense_delete'] = 'Deletar';
$lang['expense_copy'] = 'Copiar';
$lang['expense_invoice_not_created'] = 'Fatura Não Criada';
$lang['expense_billed'] = 'Faturada';
$lang['expense_not_billed'] = 'Não Faturada';
$lang['expense_customer'] = 'Cliente';
$lang['expense_note'] = 'Nota:';
$lang['expense_date'] = 'Data:';
$lang['expense_ref_noe'] = 'Ref #:';
$lang['expense_tax'] = 'Taxa:';
$lang['expense_amount'] = 'Quantia:';
$lang['expense_recurring_indicator'] = 'Recorrente';
$lang['expense_already_invoiced'] = 'Esta despesa já está faturada';
$lang['expense_recurring_auto_create_invoice'] = 'Auto Criação da Fatura';
$lang['expense_recurring_send_custom_on_renew'] = 'Enviar a fatura por e-mail ao cliente quando repetida despesa';
$lang['expense_recurring_autocreate_invoice_tooltip'] = 'Se esta opção estiver marcada a fatura para o cliente será auto criada quando a despesa for renovada.';
$lang['report_expenses_full'] = 'Relatório Completo';
$lang['expenses_yearly_by_categories'] = 'Despesas anuais por Categorias';
$lang['total_expenses_for'] = 'Total de Despesas para'; // year
$lang['expenses_report_for'] = 'Despesas para'; // year
$lang['expense_report_info'] = 'Despesas faturáveis não estão calculadas no relatório';
# Custom fields
$lang['custom_field_required'] = 'Necessário';
$lang['custom_field_show_on_pdf'] = 'Mostrar em PDF';
$lang['custom_field_leads'] = 'Leads';
$lang['custom_field_customers'] = 'Clientes';
$lang['custom_field_staff'] = 'Staff';
$lang['custom_field_contracts'] = 'Contratos';
$lang['custom_field_tasks'] = 'Tarefas';
$lang['custom_field_expenses'] = 'Despesas';
$lang['custom_field_invoice'] = 'Fatura';
$lang['custom_field_estimate'] = 'Estimativa';
# Tickets
$lang['ticket_single_private_staff_notes'] = 'Notas Privadas para o Staff';


# Business News
$lang['business_news'] = 'Notícias de Negócios';

# Navigation
$lang['nav_todo_items'] = 'Itens de Tarefas';
# Clients
# Contracts
$lang['clients_contracts_type'] = 'Tipo de Contrato';

# Version 1.0.5
# General
$lang['no_tax'] = 'Sem Taxa';
$lang['numbers_not_formated_while_editing'] = 'A tarifa no campo de entrada não está formatada quando editar/adicionar item e deve permanecer não formatada não tente formatá-la manualmente aqui.';
# Contracts
$lang['contracts_view_expired'] = 'Expirado';
$lang['contracts_view_without_dateend'] = 'Contratos Sem Data Final';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contratos';
# Invoices General
$lang['invoice_estimate_general_options'] = 'Opções Gerais';
$lang['invoice_table_item_description'] = 'Descrição';
$lang['invoice_recurring_indicator'] = 'Recorrente';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Estimativa convertida a fatura com sucesso';
$lang['estimate_table_item_description'] = 'Descrição';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Você não pode excluir a moeda base. É necessário atribuir uma nova moeda de base para excluir esta.';
$lang['invoice_copy'] = 'Copiar Fatura';
$lang['invoice_copy_success'] = 'Fatura copiada com sucesso';
$lang['invoice_copy_fail'] = 'Falha ao copiar a fatura';
$lang['invoice_due_after_help'] = 'Definir zero para evitar cálculo';

$lang['show_shipping_on_invoice'] = 'Mostrar detalhes do envio em fatura';

# Estimates
$lang['show_shipping_on_estimate'] = 'Mostrar detalhes de envio em estimativas';
$lang['is_invoiced_estimate_delete_error'] = 'Essa estimativa está faturada. Você não pode deletar a estimativa';

# Customers & Invoices / Estimates
$lang['ship_to'] = 'Entrega para';
$lang['customer_profile_details'] = 'Detalhes do cliente';
$lang['billing_shipping'] = 'Fatura e Entrega';
$lang['billing_address'] = 'Endereço para Fatura';
$lang['shipping_address'] = 'Endereço de Entrega';

$lang['billing_street'] = 'Rua';
$lang['billing_city'] = 'Cidade';
$lang['billing_state'] = 'Estado';
$lang['billing_zip'] = 'CEP';
$lang['billing_country'] = 'País';

$lang['shipping_street'] = 'Rua';
$lang['shipping_city'] = 'Cidade';
$lang['shipping_state'] = 'Estado';
$lang['shipping_zip'] = 'CEP';
$lang['shipping_country'] = 'País';
$lang['get_shipping_from_customer_profile'] = 'Obter detalhes do envio de perfil de cliente';

# Customer
$lang['customer_file_from'] = 'Mostrando a partir de %s';
$lang['customer_default_currency'] = 'Moeda Padrão';
$lang['customer_no_attachments_found'] = 'Nenhum anexo encotrado';
$lang['customer_update_address_info_on_invoices'] = 'Atualizar a informação de entrega/cobrança em todas as faturas/estimativas anteriores';
$lang['customer_update_address_info_on_invoices_help'] = 'Se você marcar esse campo de entrega e informações de faturamento será atualizado para todas as faturas e estimativas. Nota: As faturas com status pagas não vão ser afetadas.';
$lang['setup_google_api_key_customer_map'] = 'Configuração google api key a fim de visualizar o mapa personalizado';
$lang['customer_attachments_file'] = 'Arquivo';
$lang['client_send_set_password_email'] = 'Enviar senha SET do e-mail';
$lang['customer_billing_same_as_profile'] = 'Mesma Informações do Cliente';
$lang['customer_billing_copy'] = 'Copiar Endereço de Faturamento';
$lang['customer_map'] = 'Mapa';
$lang['set_password_email_sent_to_client'] = 'E-mail para definir a senha é enviada com sucesso para o cliente';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil atualizado e e-mail enviado para definir a senha é enviada com sucesso para o cliente';
$lang['customer_attachments'] = 'Arquivos';
$lang['customer_longitude'] = 'Longitude (Google Maps)';
$lang['customer_latitude'] = 'Latitude (Google Maps)';

# Authentication
$lang['admin_auth_set_password'] = 'Senha';
$lang['admin_auth_set_password_repeat'] = 'Repetir a Senha';
$lang['admin_auth_set_password_heading'] = 'Definir Senha';
$lang['password_set_email_subject'] = 'Definir nova senha no %s';
# General
$lang['apply'] = 'Aplicar';
$lang['department_calendar_id'] = 'Google Calendar ID';
$lang['kan_ban_string'] = 'Kan Ban';
$lang['localization_default_language'] = 'Idioma Padrão';
$lang['system_default_string'] = 'Sistema Padrão';
$lang['advanced_options'] = 'Opções Avançadas';
# Expenses
$lang['expense_list_invoice'] = 'Faturado';
$lang['expense_list_billed'] = 'Faturado';
$lang['expense_list_unbilled'] = 'Não faturar';
# Leads
$lang['lead_merge_custom_field'] = 'Mesclar como campo personalizado';
$lang['lead_merge_custom_field_existing'] = 'Mesclar com o campo de banco de dados existente';
$lang['lead_dont_merge_custom_field'] = 'Não misturar';
$lang['no_lead_notes_found'] = 'Nenhuma notas do lead encontrado';
$lang['leads_view_list'] = 'Lista';
$lang['lost_leads'] = 'Leads Perdidos';
$lang['junk_leads'] = 'Leads no Lixo';
$lang['lead_mark_as_lost'] = 'Marcar como perdido';
$lang['lead_unmark_as_lost'] = 'Desmarcar Lead como perdido';
$lang['lead_marked_as_lost'] = 'Lead marcado como perdido com sucesso';
$lang['lead_unmarked_as_lost'] = 'Lead desmarcado como perdido com sucesso';
$lang['leads_status_color'] = 'Cor';

$lang['lead_mark_as_junk'] = 'Marcado como lixo';
$lang['lead_unmark_as_junk'] = 'Desmarcado Lead como lixo';
$lang['lead_marked_as_junk'] = 'Lead marcado como lixo com sucesso';
$lang['lead_unmarked_as_junk'] = 'Lead desmarcado como lixo com sucesso';

$lang['lead_not_found'] = 'Lead Não Encontrado';
$lang['lead_lost'] = 'Perdido';
$lang['lead_junk'] = 'Lixo';
$lang['leads_not_assigned'] = 'Não Atribuido';
# Contacts
$lang['contract_not_visible_to_client'] = 'Ocultar do cliente';
$lang['contract_edit_overview'] = 'Visão Geral do Contrato';
$lang['contract_attachments'] = 'Anexos';
# Tasks
$lang['task_view_make_public'] = 'Tornar público';
$lang['task_is_private'] = 'Tarefa privada';
$lang['task_finished'] = 'Concluida';
$lang['task_single_related'] = 'Relacionada';
$lang['task_unmark_as_complete'] = 'Desmarcar como completa';
$lang['task_unmarked_as_complete'] = 'Tarefa desmarcada como concluída';
$lang['task_relation'] = 'Relacionado';
$lang['task_public'] = 'Público';
$lang['task_public_help'] = 'Se você definir essa tarefa como pública ela será visível para todos os membros da equipe. Caso contrário, será apenas visível para os membros que são remetentes, seguidores, criadores ou administradores';
# Settings
$lang['settings_general_favicon'] = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language'] = 'Documentos de saída do cliente em PDF da área de administração no idioma do cliente';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Se esta opção estiver definida como sim e por ex. o idioma padrão do sistema é Inglês e o cliente têm idioma de configuração em francês os documentos em PDF serão emitidos na língua do cliente';
$lang['settings_cron_surveys'] = 'Pesquisas';
$lang['settings_default_tax'] = 'Taxa Padrão';
$lang['setup_calendar_by_departments'] = 'Configurar calendário dos Departamentos';
$lang['settings_calendar'] = 'Calendário';
$lang['settings_sales_invoice_due_after'] = 'Fatura devida depois de (dias)';
$lang['settings_google_api'] = 'Google API Key';
$lang['settings_gcal_main_calendar_id'] = 'Google Calendar ID';
$lang['settings_gcal_main_calendar_id_help'] = 'Este é o principal calendário da empresa. Todos os eventos deste calendário serão mostrados. Se você deseja especificar um calendário com base em departamentos você pode adicionar no departamento do Google Calendar ID.';

$lang['show_on_calendar'] = 'Mostrar no Calendário';
$lang['show_invoices_on_calendar'] = 'Faturas';
$lang['show_estimates_on_calendar'] = 'Estimativas';
$lang['show_contracts_on_calendar'] = 'Contratos';
$lang['show_tasks_on_calendar'] = 'Tarefas';

# Leads
$lang['copy_custom_fields_convert_to_customer'] = 'Copiar os campos personalizados ao perfil do cliente';
$lang['copy_custom_fields_convert_to_customer_help'] = 'Se qualquer um dos seguintes campos personalizados não existir para o cliente será automaticamente criado com o mesmo nome de outra forma apenas o valor será copiado do perfil do lead.';
$lang['lead_profile'] = 'Perfil';
$lang['lead_is_client'] = 'Cliente';
$lang['leads_kan_ban_notes_title'] = 'Notas';
$lang['leads_email_integration_folder_no_encryption'] = 'Sem Criptografia';
$lang['leads_email_integration'] = 'E-mail de Integração';
$lang['leads_email_active'] = 'Ativo';
$lang['leads_email_integration_imap'] = 'Servidor IMAP';
$lang['leads_email_integration_email'] = 'Endereço de e-mail (Entrar)';
$lang['leads_email_integration_password'] = 'Senha';
$lang['leads_email_integration_default_source'] = 'Fonte Padrão';
$lang['leads_email_integration_check_every'] = 'Verificar a cada (minutos)';
$lang['leads_email_integration_default_assigned'] = 'Responsável pelo novo lead';
$lang['leads_email_encryption'] = 'Criptografia';
$lang['leads_email_integration_updated'] = 'E-mail de Integração Atualizado';
$lang['leads_email_integration_default_status'] = 'Status Padrão';
$lang['leads_email_integration_folder'] = 'Pasta';
$lang['leads_email_integration_notify_when_lead_imported'] = 'Notificar quando o lead for importado';
$lang['leads_email_integration_only_check_unseen_emails'] = 'Verificar apenas os e-mails não abertos';
$lang['leads_email_integration_only_check_unseen_emails_help'] = 'O script irá auto definir o e-mail para estar aberto após verificação. Isto é usado para evitar a verificação de todos os e-mails novamente e novamente. Não é recomendado desmarcar esta opção se você tem muitos e-mails e você tem uma configuração de encaminhamento de e-mails da configuração para leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificar se o lead enviado por e-mail múltiplas vezes';
$lang['leads_email_integration_test_connection'] = 'Teste da Conexão IMAP';
$lang['lead_email_connection_ok'] = 'Conexão IMAP está boa';
$lang['lead_email_connection_not_ok'] = 'Conexão IMAP não está correta';
$lang['lead_email_activity'] = 'Atividade de E-mail';
$lang['leads_email_integration_notify_roles'] = 'Função para Notificar';
$lang['leads_email_integration_notify_staff'] = 'Membros do Staff para Notificar';
$lang['lead_public'] = 'Público';
# Knowledge Base

$lang['kb_group_color'] = 'Cor';
$lang['kb_group_order'] = 'Pedido';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter'] = 'Exportador de PDF em Massa';
$lang['bulk_export_pdf_payments'] = 'Pagamentos';
$lang['bulk_export_pdf_estimates'] = 'Estimativas';
$lang['bulk_export_pdf_invoices'] = 'Faturas';
$lang['bulk_pdf_export_button'] = 'Exportar';
$lang['bulk_pdf_export_select_type'] = 'Selecionar Tipo';
$lang['no_data_found_bulk_pdf_export'] = 'Nenhum dado encontrado para exportar';
$lang['bulk_export_status_all'] = 'Todos';
$lang['bulk_export_status'] = 'Status';
$lang['bulk_export_zip_payment_modes'] = 'Pagamentos feito por';
$lang['bulk_export_include_tag'] = 'Incluir Tag';
$lang['bulk_export_include_tag_help'] = 'Ex. Original ou Cópia. O tag será mostrado no PDF. Recomenda-se usar apenas 1 tag';
# Predefined replies
$lang['no_predefined_replies_found'] = 'Nenhuma resposta predefinida encontrada';
## Clients area
$lang['clients_contract_attachments'] = 'Anexos';
# Backup
$lang['backup_type_full'] = 'Backup Completo';
$lang['backup_type_db'] = 'Backup da Base de Dados';

$lang['auto_backup_options_updated'] = 'Opções atualizadas de Auto backup';
$lang['auto_backup_every'] = 'Criar backup a cada X dias';
$lang['auto_backup_enabled'] = 'Habilitar (Cron Necessário)';
$lang['auto_backup'] = 'Auto backup';
$lang['backup_delete'] = 'Backup Deletado';
$lang['create_backup'] = 'Criar Backup';
$lang['backup_success'] = 'Backup foi feito com sucesso';
$lang['utility_backup'] = 'Base de dados de Backup';
$lang['utility_create_new_backup_db'] = 'Criar Base de Dados de Backup';
$lang['utility_backup_table_backupname'] = 'Backup';
$lang['utility_backup_table_backupsize'] = 'Tamanho do Backup';
$lang['utility_backup_table_backupdate'] = 'Data';
$lang['utility_db_backup_note'] = 'Nota: Devido ao tempo de execução limitado e memória disponível para o PHP, o backup de grandes bases de dados pode não ser possível. Se seu banco de dados é muito grande você pode precisar de backup diretamente do seu servidor SQL via linha de comando, ou ter o seu administrador do servidor para fazê-lo para você, se você não tiver os privilégios de root.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Propostas';
$lang['clients_nav_support'] = 'Suporte';
# General
$lang['more'] = 'Mais';
$lang['add_item'] = 'Adicionar Item';
$lang['goto_admin_area'] = 'Ir para a área do admin';
$lang['click_here_to_edit'] = 'Clique aqui para editar';
$lang['delete'] = 'Deletar %s';
$lang['welcome_top'] = 'Bem-vindo %s';

# Customers
$lang['customer_permissions'] = 'Permissões';
$lang['customer_permission_invoice'] = 'Faturas';
$lang['customer_permission_estimate'] = 'Estimativa';
$lang['customer_permission_proposal'] = 'Proposta';
$lang['customer_permission_contract'] = 'Contratos';
$lang['customer_permission_support'] = 'Suporte';


#Tasks
$lang['task_related_to'] = 'Relacionado ao';

# Send file
$lang['custom_file_fail_send'] = 'Falha ao enviar o arquivo';
$lang['custom_file_success_send'] = 'O arquivo foi enviado com sucesso para %s';
$lang['send_file_subject'] = 'Assunto do E-mail';
$lang['send_file_email'] = 'Endereço de E-mail';
$lang['send_file_message'] = 'Mensagem';
$lang['send_file'] = 'Enviar Arquivo';
$lang['add_checklist_item'] = 'Verificar Item';
$lang['task_checklist_items'] = 'Verificar Itens';

# Import
$lang['default_pass_clients_import'] = 'Senha Padrão para todos os clientes';
$lang['simulate_import'] = 'Simular Importação';
$lang['import_upload_failed'] = 'Carregamento Falhou';
$lang['import_total_imported'] = 'Total Importado: %s';
$lang['import_leads'] = 'Importar Leads';
$lang['import_customers'] = 'Importar Clientes';
$lang['choose_csv_file'] = 'Esvolher Arquivo CSV';
$lang['import'] = 'Importar';
$lang['lead_import_status'] = 'Status';
$lang['lead_import_source'] = 'Fonte';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Propostas';

# Invoices
$lang['delete_invoice'] = 'Deletar';

# Calendar
$lang['calendar_lead_reminder'] = 'Lembrete do Lead';

$lang['items'] = 'Itens';
$lang['support'] = 'Suporte';
$lang['new_ticket'] = 'Novo Tiquete';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Adicionar lembrete de cliente';
$lang['lead_set_reminder_title'] = 'Adiconar lembrete de lead';
$lang['set_reminder_tooltip'] = 'Esta opção permite que você nunca esqueça de nada sobre seus clientes.';
$lang['client_reminders_tab'] = 'Lembretes';
$lang['leads_reminders_tab'] = 'Lembretes';

# Tickets
$lang['delete_ticket_reply'] = 'Deletar Resposta';
$lang['ticket_priority_edit'] = 'Editar Prioridade';
$lang['ticket_priority_add'] = 'Adicionar Prioridade';
$lang['ticket_status_edit'] = 'Editar Status do Tiquete';
$lang['ticket_service_edit'] = 'Editar Serviço do Tiquete';
$lang['edit_department'] = 'Editar Departamento';

# Expenses
$lang['edit_expense_category'] = 'Editar Categoria de Despesa';
# Settings
$lang['customer_default_country'] = 'País Padrão';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Exigir que o cliente esteja logado para ver a estimativa';
$lang['set_reminder'] = 'Definir Lembrete';
$lang['set_reminder_date'] = 'Data para ser notificado';
$lang['reminder_description'] = 'Definir descrição';
$lang['reminder_notify_me_by_email'] = 'Enviar também um e-mail para este lembrete';
$lang['reminder_added_successfuly'] = 'Lembrete adicionado com sucesso. Você será notificado a tempo.';
$lang['reminder_description'] = 'Descrição';
$lang['reminder_date'] = 'Data';
$lang['reminder_staff'] = 'Lembrete';
$lang['reminder_is_notified'] = 'Está notificado?';
$lang['reminder_is_notified_boolean_no'] = 'Não';
$lang['reminder_is_notified_boolean_yes'] = 'Sim';
$lang['reminder_set_to'] = 'Definir lembrete para';
$lang['reminder_deleted'] = 'Lembrete deletado com sucesso';
$lang['reminder_failed_to_delete'] = 'Falha para deletar o lembrete';
$lang['show_invoice_estimate_status_on_pdf'] = 'Mostrar status da fatura/estimativa no PDF';
$lang['email_piping_default_priority'] = 'Prioridade padrão no tiquete da ordem';
$lang['show_lead_reminders_on_calendar'] = 'Lembretes do Lead';
$lang['tickets_piping'] = 'E-mail do orden';
$lang['email_piping_only_replies'] = 'Apenas respostas permitidas por E-mail';
$lang['email_piping_only_registered'] = 'Ordenar Apenas nos Usuários registrados';
$lang['email_piping_enabled'] = 'Habilitar';

# Estimates
$lang['view_estimate_as_client'] = 'Visualizar a estimativa como cliente';
$lang['estimate_mark_as'] = 'Marcar como %s';
$lang['estimate_status_changed_success'] = 'Status da estimativa alterado';
$lang['estimate_status_changed_fail'] = 'Falha ao alterar o status da estimativa';
$lang['estimate_email_link_text'] = 'Visualizar Estimativa';

# Proposals
$lang['proposal_to'] = 'Empresa / Nome';
$lang['proposal_date'] = 'Data';
$lang['proposal_address'] = 'Endereço';
$lang['proposal_phone'] = 'Telefone';
$lang['proposal_email'] = 'E-mail';
$lang['proposal_date_created'] = 'Data de Criação';
$lang['proposal_open_till'] = 'Abrir Até';
$lang['proposal_status_open'] = 'Abrir';
$lang['proposal_status_accepted'] = 'Aceito';
$lang['proposal_status_declined'] = 'Declinado';
$lang['proposal_status_sent'] = 'Enviado';
$lang['proposal_expired'] = 'Expirado';
$lang['proposal_subject'] = 'Assunto';
$lang['proposal_total'] = 'Total';
$lang['proposal_status'] = 'Status';
$lang['proposals_list_all'] = 'Todos';
$lang['proposals_leads_related'] = 'Leads Relacionados';
$lang['proposals_customers_related'] = 'Clientes relacionados';
$lang['proposal_related'] = 'Relacionado';
$lang['proposal_for_lead'] = 'Lead';
$lang['proposal_for_customer'] = 'Cliente';
$lang['proposal'] = 'Proposta';
$lang['proposal_lowercase'] = 'proposta';
$lang['proposals'] = 'Propostas';
$lang['proposals_lowercase'] = 'propostas';
$lang['new_proposal'] = 'Nova Proposta';
$lang['proposal_currency'] = 'Moeda';
$lang['proposal_allow_comments'] = 'Permitir Comentários';
$lang['proposal_allow_comments_help'] = 'Se você verificar estas opções de comentários serão permitidos quando os seus clientes visualizarem a proposta.';
$lang['proposal_edit'] = 'Editar';
$lang['proposal_pdf'] = 'PDF';
$lang['proposal_send_to_email'] = 'Enviar para o E-mail';
$lang['proposal_send_to_email_title'] = 'Enviar a Proposta por E-mail';
$lang['proposal_attach_pdf'] = 'PDF Anexo';
$lang['proposal_preview_template'] = 'Pré-visualizar o modelo';
$lang['proposal_view'] = 'Visualizar a Proposta';
$lang['proposal_copy'] = 'Copiar';
$lang['proposal_delete'] = 'Deletar';
$lang['proposal_mark_as_open'] = 'Marcar como Aberto';
$lang['proposal_mark_as_declined'] = 'Marcar como Declinado';
$lang['proposal_mark_as_accepted'] = 'Marcar como Aceito';
$lang['proposal_mark_as_sent'] = 'Marcar como Enviado';
$lang['proposal_to'] = 'Para';
$lang['proposal_add_comment'] = 'Adicionar comentário';
$lang['proposal_sent_to_email_success'] = 'Proposta enviado por e-mail com sucesso';
$lang['proposal_sent_to_email_fail'] = 'Falha para enviar a proposta para o e-mail';
$lang['proposal_copy_fail'] = 'Falha para copiar a proposta';
$lang['proposal_copy_success'] = 'Proposta copiada com sucesso';
$lang['proposal_status_changed_success'] = 'Status da proposta alterado com sucesso';
$lang['proposal_status_changed_fail'] = 'Falha para alterar o status da proposta';
$lang['proposal_assigned'] = 'Atribuido';
$lang['proposal_comments'] = 'Comentários';
$lang['proposal_convert'] = 'Converter';
$lang['proposal_convert_estimate'] = 'Estimativa';
$lang['proposal_convert_invoice'] = 'Fatura';
$lang['proposal_convert_to_estimate'] = 'Converter para Estimativa';
$lang['proposal_convert_to_invoice'] = 'Converter para Fatura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Você precisa converter o lead para o cliente para poder criar %s';
$lang['proposal_convert_not_related_help'] = 'A proposta precisa estar relacionada ao cliente para poder coverter para %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposal converted to estimate successfuly';
$lang['proposal_converted_to_invoice_success'] = 'Proposta convertida em fatura com sucesso';
$lang['proposal_converted_to_estimate_fail'] = 'Falha para converter a Proposta em estimativa';
$lang['proposal_converted_to_invoice_fail'] = 'Falha para converter a proposta em fatura';

# Proposals - view proposal template
$lang['proposal_total_info'] = 'Total %s';
$lang['proposal_accept_info'] = 'Aceitar';
$lang['proposal_decline_info'] = 'Declinar';
$lang['proposal_pdf_info'] = 'PDF';

# Customers Portal
$lang['customer_reset_action'] = 'Redefinir';
$lang['customer_reset_password_heading'] = 'Redefinir sua senha';
$lang['customer_forgot_password_heading'] = 'Esqueceu a Senha';
$lang['customer_forgot_password'] = 'Esqueceu a Senha?';
$lang['customer_reset_password'] = 'Senha';
$lang['customer_reset_password_repeat'] = 'Repetir a Senha';
$lang['customer_forgot_password_email'] = 'EndereCo de E-mail';
$lang['customer_forgot_password_submit'] = 'Submeter';
$lang['customer_ticket_subject'] = 'Assunto';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Propostas';

# Tasks
$lang['add_task_attachments'] = 'Anexo';
$lang['task_view_attachments'] = 'Anexos';
$lang['task_view_description'] = 'Descrição';
$lang['task_table_is_finished_indicator'] = 'Sim';
$lang['task_table_is_not_finished_indicator'] = 'Não';
$lang['tasks_dt_finished'] = 'Concluido';

# Customer Groups
$lang['customer_group_add_heading'] = 'Adicionar Novo Grupo de Cliente';
$lang['customer_group_edit_heading'] = 'Editar Grupo de Cliente';
$lang['new_customer_group'] = 'Novo grupo de Cliente';
$lang['customer_group_name'] = 'Nome';
$lang['customer_groups'] = 'Grupos';
$lang['customer_group'] = 'Grupo de Cliente';
$lang['customer_group_lowercase'] = 'grupo de cliente';

$lang['customer_have_invoices_by'] = 'Conter faturas por status %s';
$lang['customer_have_estimates_by'] = 'Conter estimativas por status %s';
$lang['customer_have_contracts_by_type'] = 'Ter contratos por tipo %s';

# Custom fields
$lang['custom_field_show_on_table'] = 'Mostrar na tabela';
$lang['custom_field_show_on_client_portal'] = 'Mostrar no portal do cliente';
$lang['custom_field_show_on_client_portal_help'] = 'Se esse campo está verificado também mostrará em tabelas';
$lang['custom_field_visibility'] = 'Visibilidade';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Você pode adicionar aqui também para traduzir as linhas. Então, se o staff/sistema estiver em outra língua, então o padrão dos nomes dos itens do menu serão atualizados na língua da equipe. Caso contrário, se a linha não existir no arquivo que será traduzido será considerada a linha que entrar aqui.';
$lang['utilities_menu_icon'] = 'Icone';
$lang['active_menu_items'] = 'Itens Ativos do Menu';
$lang['inactive_menu_items'] = 'Itens Inativos do Menu';
$lang['utilities_menu_permission'] = 'Permissão';
$lang['utilities_menu_url'] = 'URL';
$lang['utilities_menu_name'] = 'Nome';
$lang['utilities_menu_save'] = 'Salvar Menu';

# Knowledge Base
$lang['view_articles_list'] = 'Visualizar Artigos';
$lang['view_articles_list_all'] = 'Todos os Artigos';
$lang['als_add_article'] = 'Adicionar Artigo';
$lang['als_all_articles'] = 'Todos os Artigos';
$lang['als_kb_groups'] = 'Grupos';

# Customizer Menu
$lang['menu_builder'] = 'Configurar Menu';
$lang['main_menu'] = 'Menu Principal';
$lang['setup_menu'] = 'Configurar Menu';
$lang['utilities_menu_url_help'] = '%s está auto anexado ao url';

# Spam Filter - Tickets
$lang['spam_filters'] = 'Filtros de Spam';
$lang['spam_filter'] = 'Filtro de Spam';
$lang['new_spam_filter'] = 'Novo Filtro de Spam';
$lang['spam_filter_blocked_senders'] = 'Remetentes Bloqueados';
$lang['spam_filter_blocked_subjects'] = 'Assuntos Bloqueados';
$lang['spam_filter_blocked_phrases'] = 'Frases Bloqueadas';
$lang['spam_filter_content'] = 'Conteúdo';
$lang['spamfilter_edit_heading'] = 'Editar Filtro de Spam';
$lang['spamfilter_add_heading'] = 'Adicionar Filtro de Spam';
$lang['spamfilter_type'] = 'Tipo';
$lang['spamfilter_type_subject'] = 'Assunto';
$lang['spamfilter_type_sender'] = 'Remetente';
$lang['spamfilter_type_phrase'] = 'Frase';

# Tickets
$lang['block_sender'] = 'Bloquear Remetente';
$lang['sender_blocked'] = 'Remetente bloqueado';
$lang['sender_blocked_successfuly'] = 'Remetente bloqueado com sucesso';
$lang['ticket_date_created'] = 'Data de Criação';

#KB
$lang['edit_kb_group'] = 'Editar grupo';
# Leads
$lang['edit_source'] = 'Editar Fonte';
$lang['edit_status'] = 'Editar Status';
# Contacts
$lang['contract_type_edit'] = 'Editar Tipo de Contrato';
# Reports
$lang['report_by_customer_groups'] = 'Valor Total Value Por Grupos de Clientes';
#Utilities
$lang['ticket_pipe_log'] = 'Pipe de Atividade do Tiquete';
$lang['ticket_pipe_name'] = 'Do Nome';
$lang['ticket_pipe_email_to'] = 'Para';
$lang['ticket_pipe_email'] = 'Do E-mail';
$lang['ticket_pipe_subject'] = 'Assunto';
$lang['ticket_pipe_message'] = 'Mensagem';
$lang['ticket_pipe_date'] = 'Data';
$lang['ticket_pipe_status'] = 'Status';

# Home
$lang['home_invoice_paid'] = 'Fatura Paga';
$lang['home_invoice_partialy_paid'] = 'Fatura Parcialmente Paga';
$lang['home_estimate_declined'] = 'Estimativa de Recusa';
$lang['home_estimate_accepted'] = 'Estimativa de Aceitação';
$lang['home_estimate_sent'] = 'Estimativa de Envio';
$lang['home_latest_activity'] = 'Últimas Atividades';
$lang['home_my_tasks'] = 'Minhas Tarefas';
$lang['home_latest_activity'] = 'Últimas Atividades';
$lang['home_my_todo_items'] = 'Minha lista de Tarefas';
$lang['home_widget_view_all'] = 'Visualizar Todas';
$lang['home_stats_full_report'] = 'Relatório Completo';

# Validation - Customer Portal

$lang['form_validation_required'] = 'O {field} campo é necessário.';
$lang['form_validation_valid_email'] = 'O {field} campo deve conter um endereço de e-mail válido.';
$lang['form_validation_matches'] = 'O {field} campo não combina com o {param} campo.';
$lang['form_validation_is_unique'] = 'O {field} campo deve conter um valor único.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Evento começa hoje - %s ...';
$lang['not_event_public'] = 'Evento público começa hoje - %s ...';
$lang['not_contract_expiry_reminder'] = 'Lembrete do contrato expirado - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Despesas Recorrentes das Atividades de Trabalho Cron';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Faturas Recorrentes das Atividades de Trabalho Cron';
$lang['not_recurring_total_renewed'] = 'Total Renovado: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Ações tomadas a partir de despesas recorrentes';
$lang['not_invoice_created'] = 'Fatura Criada:';
$lang['not_invoice_renewed'] = 'Fatura Renovada:';
$lang['not_expense_renewed'] = 'Despesa Renovada:';
$lang['not_invoice_sent_to_customer'] = 'Fatura Enviada para o Cliente: %s';
$lang['not_invoice_sent_yes'] = 'Sim';
$lang['not_invoice_sent_not'] = 'Não';
$lang['not_action_taken_from_recurring_invoice'] = 'Ações tomadas a partir da fatura recorrente:';
$lang['not_new_reminder_for'] = 'Novo Lembrete para %s';
$lang['not_received_one_or_more_messages_lead'] = 'Recebido mais de uma mensagem de e-mail do lead';
$lang['not_received_lead_imported_email_integration'] = 'Lead Importado do E-mail de Integração';
$lang['not_lead_imported_attachment'] = 'Anexo importado do e-mail';
$lang['not_estimate_status_change'] = 'Anexo importado do e-mail';
$lang['not_estimate_status_updated'] = 'Status da Estimativa Atualizada: De: %s para %s';
$lang['not_goal_message_success'] = 'Parabéns! Nós realizamos a nova meta.<br />Tipo de meta: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['not_assigned_lead_to_you'] = '%s lead atribuido %s para você';
$lang['not_lead_activity_assigned_to'] = '%s atribuido para %s';
$lang['not_lead_activity_attachment_deleted'] = 'Deletar o Anexo';
$lang['not_lead_activity_status_updated'] = '%s atualizou o status do lead de %s para %s';
$lang['not_lead_activity_contacted'] = '%s contatou esse lead no %s';
$lang['not_lead_activity_created'] = '%s criou lead';
$lang['not_lead_activity_marked_lost'] = 'Marcado como perdido';
$lang['not_lead_activity_unmarked_lost'] = 'Desmarcado como perdido';
$lang['not_lead_activity_marked_junk'] = 'Marcado como lixo';
$lang['not_lead_activity_unmarked_junk'] = 'Desmarcado como lixo';
$lang['not_lead_activity_added_attachment'] = 'Anexo adicionado';
$lang['not_lead_activity_converted_email'] = 'E-mail lead alterado. O primeiro lead do e-mail era: %s e adicionou com cliente o e-mail %s';
$lang['not_lead_activity_converted'] = '%s Converteu esse lead para o cliente';
$lang['not_liked_your_post'] = '%s curtiu a sua postagem %s ...';
$lang['not_commented_your_post'] = '%s comentou a sua postagem %s ...';
$lang['not_liked_your_comment'] = '%s curtiu o seu comentário %s ...';
$lang['not_proposal_assigned_to_you'] = 'Proposta atribuida a você - %s ...';
$lang['not_proposal_comment_from_client'] = 'Novo comentário do cliente sobre a proposta %s ...';
$lang['not_proposal_proposal_accepted'] = 'Proposta Aceita';
$lang['not_proposal_proposal_declined'] = 'Proposta Declinada';
$lang['not_task_added_you_as_follower'] = 'adicionou você como seguidor na tarefa %s ...';
$lang['not_task_added_someone_as_follower'] = 'adicionou %s como seguidor na tarefa %s ...';
$lang['not_task_added_himself_as_follower'] = 'adicionou ele mesmo como seguidor na tarefa %s ...';
$lang['not_task_assigned_to_you'] = 'atribuida uma tarefa para você %s ...';
$lang['not_task_assigned_someone'] = 'atribuida %s para tarefa %s ...';
$lang['not_task_will_do_user'] = 'fará a tarefa %s ...';
$lang['not_task_new_attachment'] = 'Novo Anexo Adicionado';
$lang['not_task_marked_as_complete'] = 'tarefa marcada como completa %s';
$lang['not_task_unmarked_as_complete'] = 'tarefa desmarcada como completa %s';
$lang['not_ticket_assigned_to_you'] = 'Tiquete atribuido a você - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Tiquete atribuido a você - %s ...';
$lang['not_estimate_customer_accepted'] = 'Parabéns! Cliente aceitou a estimativa com número %s';
$lang['not_estimate_customer_declined'] = 'Cliente declinou a estimativa com número %s';
$lang['estimate_activity_converted'] = 'converteu essa estimativa em fatura.<br /> %s';
$lang['estimate_activity_created'] = 'Criou a estimativa';
$lang['invoice_estimate_activity_removed_item'] = 'item removido <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Número da estimativa alterado de %s para %s';
$lang['invoice_activity_number_changed'] = 'Número da fatura alterado de %s para %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'descrição curta do item atualizada de %s para %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'descrição longa do item atualizada de <b>%s</b> para <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'tarifa do item atualizada de %s para %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'quantidade atualizada no item <b>%s</b> de %s para %s';
$lang['invoice_estimate_activity_added_item'] = 'novo item adicionado <b>%s</b>';
$lang['estimate_activity_client_accepted_and_converted'] = 'Cliente aceitou esta estimativa. Estimativa é convertida para faturar com número %s';
$lang['estimate_activity_client_accepted'] = 'Cliente aceitou essa estimativa';
$lang['estimate_activity_client_declined'] = 'Cliente declinou dessa estimativa';
$lang['estimate_activity_marked'] = 'estimativa marcada como %s';
$lang['invoice_activity_status_updated'] = 'Status da fatura atualizado de %s para %s';
$lang['invoice_activity_created'] = 'criou a factura';
$lang['invoice_activity_from_expense'] = 'fatura convertida a partir da despesa';
$lang['invoice_activity_recuring_created'] = '[Recurring] Fatura criada por CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Invoice From Expense] Fatura criada por CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Fatura enviada para o cliente por CRON';
$lang['invoice_activity_sent_to_client'] = 'fatura enviada para o cliente';
$lang['invoice_activity_marked_as_sent'] = 'fatura marcada como enviada';
$lang['invoice_activity_payment_deleted'] = 'pagamento deletado para a fatura. Pagamento #%s, quantia total %s';
$lang['invoice_activity_payment_made_by_client'] = 'Cliente realizou o pagamento para a fatura do total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'pagamento registrado do total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Anexo adicionado';

# Navigation
$lang['top_search_placeholder'] = 'Procurar...';

# Staff
$lang['staff_profile_inactive_account'] = 'Essa conta do membro do staff member está inativa';

# Estimates
$lang['copy_estimate'] = 'Copiar estimativas';
$lang['estimate_copied_successfuly'] = 'Estimativas copiadas com sucesso';
$lang['estimate_copied_fail'] = 'Falha ao copiar as estimativas';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tarefas atribuídas a mim';
$lang['tasks_view_follower_by_user'] = 'Tarefas que eu estou seguindo';
$lang['no_tasks_found'] = 'Nenhuma Tarefa encontrada';

# Leads
$lang['leads_dt_datecreated'] = 'Criado';
$lang['leads_sort_by'] = 'Classificar por';
$lang['leads_sort_by_datecreated'] = 'Data de Criação';
$lang['leads_sort_by_kanban_order'] = 'Pedido Kan Ban';

# Proposals
$lang['proposal_items_name'] = 'Item';
$lang['proposal_items_description'] = 'Descrição';
$lang['proposal_items_qty'] = 'Qtdd';
$lang['proposal_items_rate'] = 'Tarifa';
$lang['proposal_items_tax'] = 'Taxa';
$lang['proposal_items_amount'] = 'Quantia';

# Authentication
$lang['check_email_for_reseting_password'] = 'Verifique seu e-mail para obter mais instruções para redefinir sua senha';
$lang['inactive_account'] = 'Conta Inativa';
$lang['error_setting_new_password_key'] = 'Erro ao definir nova senha';
$lang['password_reset_message'] = 'Sua senha foi redefinida. Por favor, entre agora!';
$lang['password_reset_message_fail'] = 'Erro ao redefinir sua senha. Tente novamente';
$lang['password_reset_key_expired'] = 'Chave da senha expirada ou usuário inválido';
$lang['admin_auth_reset_pass_repeat'] = 'Repetir a Senha';
$lang['auth_reset_pass_email_not_found'] = 'E-mail não encontrado';
$lang['auth_reset_password_submit'] = 'Redefinir Senha';

# Settings
$lang['settings_amount_to_words'] = 'Quantidade de palavras';
$lang['settings_amount_to_words_desc'] = 'Quantia total de saída por palavras em fatura/estimativa';
$lang['settings_amount_to_words_enabled'] = 'Habilitar';
$lang['settings_total_to_words_lowercase'] = 'Número de palavras em letras minúsculas';
$lang['settings_show_tax_per_item'] = 'Mostrar TAXA por item (Faturas/Estimativas)';

# Reports
$lang['report_sales_months_three_months'] = 'Últimos 3 meses';
$lang['report_invoice_number'] = 'Fatura #';
$lang['report_invoice_customer'] = 'Cliente';
$lang['report_invoice_date'] = 'Data';
$lang['report_invoice_duedate'] = 'Data de Vencimento';
$lang['report_invoice_amount'] = 'Quantia';
$lang['report_invoice_amount_with_tax'] = 'Quantia com taxa';
$lang['report_invoice_amount_open'] = 'Quantia aberta';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Quantia total com taxa';
$lang['report_invoice_total_amount_without_tax'] = 'Quantia total sem taxa';
$lang['report_invoice_total_taxes'] = 'Taxas';

#Version 1.0.9

# Home stats
$lang['home_stats_see_weekly_payments'] = 'Ver pagamentos semanais';
$lang['home_stats_by_project_status'] = 'Estatisticas do status do projeto';
$lang['home_invoice_overview'] = 'Visão geral da fatura';
$lang['home_estimate_overview'] = 'Visão geral da estimativa';
$lang['home_proposal_overview'] = 'Visão geral da proposta';
$lang['home_lead_overview'] = 'Visão geral do lead';
$lang['home_my_projects'] = 'Meus Projetos';
$lang['home_announcements'] = 'Avisos';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limitar linhas dos leads Kan Ban por status';
$lang['settings_group_misc'] = 'Variados';
$lang['show_projects_on_calendar'] = 'Mostrar projetos no calendário';
$lang['settings_media_max_file_size_upload'] = 'Tamanho máx do arquivo carregado em Mídia (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permitir ao cliente/staff adicionar/editar comentários de tarefas apenas na primeira hora (Não aplicados aos administradores)';

# Email templates
$lang['email_template_only_domain_email'] = 'Apenas e-mail de domínio';

# Announcements
$lang['dismiss_announcement'] = 'Aviso de demissão';
$lang['dismiss_announcement'] = 'Aviso de demissão';
$lang['announcement_from'] = 'De:';
$lang['announcement_date'] = 'Data de postagem: %s';
$lang['announcement_not_found'] = 'Aviso não encontrado';
$lang['announcements_recents'] = 'Avisos recentes';

# General
$lang['zip_invoices'] = 'Faturas Zip';
$lang['zip_estimates'] = 'Estimativas Zip';
$lang['zip_payments'] = 'Pagamentos Zip';
$lang['setup_help'] = 'Suporte';
$lang['clients_list_company'] = 'Empresa';
$lang['dt_button_export'] = 'Exportar';

$lang['dt_entries'] = 'entrada';
$lang['invoice_total_paid'] = 'Total Pago';
$lang['invoice_amount_due'] = 'Quantia devida';
$lang['report_invoice_discount'] = 'Descontos';

# Calendar
$lang['calendar_project'] = 'Projeto';

# Leads
$lang['leads_import_assignee'] = 'Cessionário';
$lang['customer_from_lead'] = 'Cliente de %s';
$lang['lead_kan_ban_attachments'] = 'Anexos %s';
$lang['leads_sort_by_lastcontact'] = 'Último contato';

# Tasks
$lang['task_comment_added'] = 'Comentário adicionado com sucesso';
$lang['task_duedate'] = 'Data de Vencimento';
$lang['task_view_comments'] = 'Comentários';
$lang['task_comment_updated'] = 'Comentário atualizado';
$lang['task_visible_to_client'] = 'Visível para Cliente';
$lang['task_hourly_rate'] = 'Tarifa por Hora';
$lang['hours'] = 'Horas';
$lang['seconds'] = 'Segundos';
$lang['minutes'] = 'Minutos';
$lang['task_start_timer'] = 'Iniciar o cronometro';
$lang['task_stop_timer'] = 'Parar o cronometro';
$lang['task_billable_help'] = 'Se você verificar a cobrança da tarefa será apresentada durante a criação da fatura conforme itens';
$lang['task_billable'] = 'Faturável';
$lang['task_billable_yes'] = 'Faturável';
$lang['task_billable_no'] = 'Nnao Faturável';
$lang['task_billed'] = 'Faturado';
$lang['task_billed_yes'] = 'Faturado';
$lang['task_billed_no'] = 'Não faturado';
$lang['task_user_logged_time'] = 'Seu tempo logado:';
$lang['task_total_logged_time'] = 'Tempo total logado:';
$lang['task_is_billed'] = 'Esta tarefa é cobrada na fatura com o número %s';
$lang['task_statistics'] = 'Estatisticas';
$lang['task_milestone'] = 'Marco';

# Tickets
$lang['ticket_message_updated_successfuly'] = 'Mensagem atualizada com sucesso';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Tarefas do Projeto não estão incluidas nessa lista.';
$lang['show_quantity_as'] = 'Mostra quantidade como:';
$lang['quantity_as_qty'] = 'Qtdd';
$lang['quantity_as_hours'] = 'Horas';
$lang['invoice_table_hours_heading'] = 'Horas';
$lang['bill_tasks'] = 'Tarefas da Conta';
$lang['invoice_estimate_sent_to_email'] = 'Email';

# Estimates
$lang['estimate_table_hours_heading'] = 'Horas';

# General
$lang['is_customer_indicator'] = 'Cliente';
$lang['print'] = 'Print';
$lang['customer_permission_projects'] = 'Projetos';
$lang['no_timers_found'] = 'Nenhum cronometro iniciado encontrado';
$lang['timers_started_confirm_logout'] = 'Cronometro de tarefas encontrados iniciados. Você tem certeza que quer fazer logout sem parar os cronometros?';
$lang['confirm_logout'] = 'Sair';
$lang['timer_top_started'] = 'Iniciado em %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Você não pode alterar o tipo de fatura. Tarefas já faturadas encontrada para esse projeto.';
$lang['project_customer_permission_warning'] = 'O sistema indicou que o cliente não tem permissão para esses projetos. O cliente não poderá ver esse projeto. Considere adicionar o perfil do cliente na tabela de Permissões.';
$lang['project_invoice_timesheet_start_time'] = 'Tempo de início: %s';
$lang['project_invoice_timesheet_end_time'] = 'Tempo final: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Tempo logado: %s';
$lang['project_view_as_client'] = 'Visualizar o projeto como cliente';
$lang['project_mark_all_tasks_as_completed'] = 'Marcar todas as tarefas como concluidas e parar todos os cronometros (Nenhum notificação enviada para os membros do projeto)';
$lang['project_not_started_status_tasks_timers_found'] = 'Cronometros das tarefas encontrado para esse projeto, mas o projeto está com Status de Não Iniciado. Recomedado alterar o status do Projeto para Em Progresso';
$lang['project_status'] = 'Status';
$lang['project_status_1'] = 'Não Iniciado';
$lang['project_status_2'] = 'Em Progresso';
$lang['project_status_3'] = 'Aguardando';
$lang['project_status_4'] = 'Concluido';
$lang['project_file_uploaded_by_customer'] = 'Cliente';
$lang['project_file_dateadded'] = 'Date uploaded';
$lang['project_file_filename'] = 'Nome do Arquivo';
$lang['project_file__filetype'] = 'Tipo do Arquivo';
$lang['project_file_visible_to_customer'] = 'Visível para cliente';
$lang['project_file_uploaded_by'] = 'Carregado por';
$lang['edit_project'] = 'Editar Projeto';
$lang['copy_project'] = 'Copiar Projeto';
$lang['delete_project'] = 'Deletar Projeto';
$lang['project_task_assigned_to_user'] = 'Tarefas atribuidas a você';
$lang['seconds'] = 'Segundos';
$lang['hours'] = 'Horas';
$lang['minutes'] = 'Minutos';
$lang['project'] = 'Projeto';
$lang['project_lowercase'] = 'projeto';
$lang['projects'] = 'Projetos';
$lang['projects_lowercase'] = 'projetos';
$lang['project_settings'] = 'Configurações do Projeto';
$lang['project_invoiced_successfuly'] = 'Projeto Faturado com Sucesso';
$lang['new_project'] = 'Novo Projeto';
$lang['project_files'] = 'Arquivos';
$lang['project_activity'] = 'Atividade';
$lang['project_name'] = 'Nome do Projeto';
$lang['project_description'] = 'Descrição do Projeto';
$lang['project_customer'] = 'Cliente';
$lang['project_start_date'] = 'Data de Início';
$lang['project_datecreated'] = 'Data de criação';
$lang['project_deadline'] = 'Prazo';
$lang['project_billing_type'] = 'Tipo de faturamento';
$lang['project_billing_type_fixed_cost'] = 'Custos Fixos';
$lang['project_billing_type_project_hours'] = 'Horas do Projeto';
$lang['project_billing_type_project_task_hours'] = 'Horas da tarefas';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Com base na tarefa RTU taxa horária';
$lang['project_rate_per_hour'] = 'Tarifa Por Hora';
$lang['project_total_cost'] = 'Total de Custos';
$lang['project_members'] = 'Membros do Projeto';
$lang['project_member_removed'] = 'Membro do Projeto removido com sucesso';
$lang['project_overview'] = 'Visualização Geral do Projeto';
$lang['project_gant'] = 'Visualização Gantt';
$lang['project_milestones'] = 'Marcos';
$lang['project_milestone_order'] = 'Pedido';
$lang['project_milestone_duedate_passed'] = 'Data de Vencimento Passada';
$lang['record_timesheet'] = 'Planilha de Tempo';
$lang['new_milestone'] = 'Novo Marco';
$lang['edit_milestone'] = 'Editar Marco';
$lang['milestone_name'] = 'Nome';
$lang['milestone_due_date'] = 'Data de Vencimento';
$lang['project_milestone'] = 'Marcos';
$lang['project_notes'] = 'Notas';
$lang['project_timesheets'] = 'Planilhas de Tempo';
$lang['project_timesheet'] = 'Planilha de Tempo';
$lang['milestone_total_logged_time'] = 'Tempo Logado';
$lang['project_overview_total_logged_hours'] = 'Total de Horas Logado';
$lang['milestones_uncategorized'] = 'Sem categoria';
$lang['milestone_no_tasks_found'] = 'Nenhuma Tarefa Encontrada';
$lang['copy_project_discussions_not_included'] = 'Anexos e comentários não estão incluidos';
$lang['project_copied_successfuly'] = 'Dados do projeto copiados com sucesso';
$lang['failed_to_copy_project'] = 'Falha ao copiar o projeto';
$lang['copy_project_task_include_check_list_items'] = 'Copiar os itens da lista de verificação';
$lang['copy_project_task_include_assignees'] = 'Copiar os mesmos destinatários';
$lang['copy_project_task_include_followers'] = 'Copiar os mesmos seguidores';

$lang['project_days_left'] = 'Dias Restantes';
$lang['project_open_tasks'] = 'Abrir Tarefas';
$lang['timesheet_stop_timer'] = 'Parar o Cronômetro';
$lang['failed_to_add_project_timesheet_end_time_smaller'] = 'Falha ao adicionar a planilha de tempo. O tempo final é menor do que o tempo inicial.';
$lang['project_timesheet_user'] = 'Membro';
$lang['project_timesheet_start_time'] = 'Tempo Inicial';
$lang['project_timesheet_end_time'] = 'Tempo Final';
$lang['project_timesheet_time_spend'] = 'Tempo Gasto';
$lang['project_timesheet_task'] = 'Tarefa';
$lang['project_invoices'] = 'Faturas';
$lang['total_logged_hours_by_staff'] = 'Total de Tempo Logado';
$lang['invoice_project'] = 'Fatura do Projeto';
$lang['invoice_project_info'] = 'Informações da Fatura do Projeto';
$lang['invoice_project_data_single_line'] = 'Linha única';
$lang['invoice_project_data_task_per_item'] = 'Tarefa por item';
$lang['invoice_project_data_timesheets_individualy'] = 'Todas as planilhas de tempo individualmente';
$lang['invoice_project_item_name_data'] = 'Nome do Item';
$lang['invoice_project_description_data'] = 'Descrição';
$lang['invoice_project_projectname_taskname'] = 'Nome do projeto + Nome da Tarefa';
$lang['invoice_project_all_tasks_total_logged_time'] = 'Todas as tarefas + total de tempo logado por tarefa';
$lang['invoice_project_project_name_data'] = 'Nome do Projeto';
$lang['invoice_project_timesheet_indivudualy_data'] = 'Planilha de tempo de começo + tempo de término + tempo total logado';
$lang['invoice_project_total_logged_time_data'] = 'Tempo total logado';

$lang['project_allow_client_to'] = 'Permitir clientes a %s';
$lang['project_setting_view_task_total_logged_time'] = 'visualizar o tempo total logado da tarefa';
$lang['project_setting_view_task_comments'] = 'visualizar comentários da tarefa';
$lang['project_setting_upload_files'] = 'atualizar os arquivos';
$lang['project_setting_view_task_checklist_items'] = 'visualizar os itens da lista de tarefas';
$lang['project_setting_view_task_attachments'] = 'visualizar as tarefas anexas';
$lang['project_setting_upload_on_tasks'] = 'enviar anexos nas tarefas';
$lang['project_setting_open_discussions'] = 'abrir discussões';
$lang['project_setting_comment_on_tasks'] = 'comentar nas tarefas do projeto';
$lang['project_setting_view_tasks'] = 'visualizar tarefas';
$lang['project_setting_view_milestones'] = 'visualizar marcos';
$lang['project_setting_view_gantt'] = 'visualizar Gantt';
$lang['project_setting_view_timesheets'] = 'visualizar planilhas de horários';
$lang['project_setting_view_activity_log'] = 'visualizar registro de atividades';
$lang['project_setting_view_team_members'] = 'visualizar membros da equipe';

$lang['project_discussion_visible_to_customer_yes'] = 'Visível';
$lang['project_discussion_visible_to_customer_no'] = 'Não Visível';

$lang['project_discussion_posted_on'] = 'Postado no %s';
$lang['project_discussion_posted_by'] = 'Postado por %s';
$lang['project_discussion_failed_to_delete'] = 'Falha ao deletar a discussão';
$lang['project_discussion_deleted'] = 'Discussão deletada com sucesso';
$lang['project_discussion_no_activity'] = 'Nenhuma Atividade';
$lang['project_discussion'] = 'Discussão';
$lang['project_discussions'] = 'Discussões';
$lang['edit_discussion'] = 'Criar Discussão';
$lang['new_project_discussion'] = 'Criar Discussão';
$lang['project_discussion_subject'] = 'Assunto';
$lang['project_discussion_description'] = 'Descrição';
$lang['project_discussion_show_to_customer'] = 'Visível aos Clientes';
$lang['project_discussion_total_comments'] = 'Total de Comentários';
$lang['project_discussion_last_activity'] = 'Últimas Atividades';
$lang['discussion_add_comment'] = 'Adicionar comentário';
$lang['discussion_newest'] = 'Mais novos';
$lang['discussion_oldest'] = 'Mais antigos';
$lang['discussion_attachments'] = 'Anexos';
$lang['discussion_send'] = 'Enviar';
$lang['discussion_reply'] = 'Responder';
$lang['discussion_edit'] = 'Editar';
$lang['discussion_edited'] = 'Modificado';
$lang['discussion_you'] = 'Você';
$lang['discussion_save'] = 'Salvar';
$lang['discussion_delete'] = 'Deletar';
$lang['discussion_view_all_replies'] = 'Mostrar todos as respostas';
$lang['discussion_hide_replies'] = 'Esconder Respostas';
$lang['discussion_no_comments'] = 'Nenhum comentário';
$lang['discussion_no_attachments'] = 'Nenhum anexo';
$lang['discussion_attachments_drop'] = 'Arraste e solte para carregar os arquivos';
$lang['project_note'] = 'Nota';
$lang['project_note_private'] = 'Notas Privadas';
$lang['project_save_note'] = 'Salvar nota';

# Project Activity
$lang['project_activity_created'] = 'Criou o projeto';
$lang['project_activity_updated'] = 'Atualizou o projeto';
$lang['project_activity_removed_team_member'] = 'Removeu um membro da equipe';
$lang['project_activity_added_team_member'] = 'Adicionou um novo membro na equipe';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marcou todas as tarefas como completas';
$lang['project_activity_recorded_timesheet'] = 'Gravou na planilha de tempo';
$lang['project_activity_task_name'] = 'Tarefa:';
$lang['project_activity_deleted_discussion'] = 'Deletou discussão';
$lang['project_activity_created_discussion'] = 'Criou discussão';
$lang['project_activity_updated_discussion'] = 'Atualizou discussão';
$lang['project_activity_commented_on_discussion'] = 'Comentou na discussão';
$lang['project_activity_deleted_discussion_comment'] = 'Deletou comentário na discussão';
$lang['project_activity_deleted_milestone'] = 'Deletou marco';
$lang['project_activity_updated_milestone'] = 'Atualizou marco';
$lang['project_activity_created_milestone'] = 'Criou um novo marco';
$lang['project_activity_invoiced_project'] = 'Faturou o projeto';
$lang['project_activity_task_marked_complete'] = 'Tarefa marcada como completa';
$lang['project_activity_task_unmarked_complete'] = 'Tarefa desmarcada como completa';
$lang['project_activity_task_deleted'] = 'Tarefa deletada';
$lang['project_activity_new_task_comment'] = 'Comentou na tarefa';
$lang['project_activity_new_task_attachment'] = 'Atualizou o anexo na tarefa';
$lang['project_activity_new_task_assignee'] = 'Adicionou novo remetente a tarefa';
$lang['project_activity_task_assignee_removed'] = 'Remobeu remetente da tarefa';
$lang['project_activity_task_timesheet_deleted'] = 'Removeu a planilha de tempo';
$lang['project_activity_uploaded_file'] = 'Atualizou o arquivo do projeto';
$lang['project_activity_status_updated'] = 'Atualizou o status do projeto';
$lang['project_activity_visible_to_customer'] = 'Visível ao Cliente';
$lang['project_activity_project_file_removed'] = 'Removeu arquivo do projeto';

# Notifications
$lang['not_customer_uploaded_project_file'] = 'Novo arquivo atualizado';
$lang['not_customer_created_new_project_discussion'] = 'Nova discussão do projeto criada';
$lang['not_customer_commented_on_project_discussion'] = 'Novo comentário na discussão do projeto';

# Customers area
$lang['clients_my_estimates'] = 'Minhas Estimativas';
$lang['client_no_reply'] = 'Sem Resposta';
$lang['clients_nav_projects'] = 'Projetos';
$lang['clients_my_projects'] = 'Meus Projetos';
$lang['client_profile_image'] = 'Imagem de Perfil';
$lang['tasks_reminder_notification_before_help'] = 'Notificar os destinatários da tarefa com prazo de entrega antes de X dias. A notificação/e-mail é enviado somente para os destinatários.';

$lang['tasks_reminder_notification_before'] = 'Lembrete do prazo da tarefas antes (Dias)';
$lang['not_task_deadline_reminder'] = 'Lembrete do prazo da tarefa';
$lang['dt_length_menu_all'] = 'Todos';
$lang['task_not_finished'] = 'Incompleto';
$lang['task_billed_cant_start_timer'] = 'Tarefa faturada. Cronômetro não pode ser o começo';
$lang['invoice_task_billable_timers_found'] = 'Cronômetro iniciado encontrado';
$lang['project_timesheet_not_updated'] = 'Quadro de horários não afetado';
$lang['project_invoice_task_no_timers_found'] = 'Nenhum cronômetro encontrado para esta tarefa';
$lang['invoice_project_tasks_not_started'] = 'Ainda não iniciado | Data de início: %s.';
$lang['invoice_project_see_billed_tasks'] = 'Ver tarefas que serão cobradas nesta fatura';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Todas as tarefas faturadas serão marcadas como acabadas';
$lang['invoice_project_nothing_to_bill'] = 'Não há tarefas para faturar. Fique a vontade para adicionar o que quiser nos itens da fatura.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tarefas com data de início no futuro não podem ser cobradas';
$lang['invoice_project_stop_all_timers'] = 'Parar todos os cronômetros';
$lang['invoice_project_stop_billabe_timers_only'] = 'Parar apenas cronômetros faturáveis';
$lang['project_tasks_total_timers_stopped'] = 'Total de %s cronômetros parados';
$lang['project_invoice_timers_started'] = 'Os cronômetros da tarefa encontrada estão executando as tarefas faturáveis, fatura não pode ser criada. Por favor, pare o cronômetro da tarefa para criar fatura.';
$lang['task_start_timer_only_assignee'] = 'Você precisa estar atribuída esta tarefa para iniciar o cronômetro!';
$lang['task_comments'] = 'Comentário';
$lang['invoice_total_tax'] = 'Total Imposto';
$lang['estimates_total_tax'] = 'Total Imposto';
$lang['report_invoice_total_tax'] = 'Total Imposto';
$lang['home_tickets'] = 'Tiquetes';
$lang['home_project_activity'] = 'Últimas atividades de projetos';
$lang['home_project_activity_not_found'] = 'Nenhuma atividade dos projetos encontrada';
$lang['view_tracking'] = 'Rastreamento das Visualizações';
$lang['view_date'] = 'Data';
$lang['view_ip'] = 'Endereço IP';
$lang['article_total_views'] = 'Total de Visualizações';
$lang['leads_source'] = 'Fonte';
$lang['invoices_available_for_merging'] = 'Faturas disponíveis para mesclar';
$lang['invoices_merge_discount'] = 'Você terá que aplicar o desconto de %s total manualmente para esta fatura';
$lang['invoice_merge_number_warning'] = 'Mesclar faturas irá criar lacunas nos números de fatura. Por favor, não mescle as faturas se não quiser lacunas na sua história da fatura. Você também tem a opção de ajustar manualmente os números da fatura se você deseja preencher as lacunas.';
$lang['invoice_mark_as'] = 'Marcar como %s';
$lang['invoice_unmark_as'] = 'Desmarcar como %s';
$lang['invoice_status_cancelled'] = 'Cancelado';
$lang['tasks_reminder_notification_before_help'] = 'Notificar os destinatários da tarefa com prazo de entrega antes de X dias. A notificação/e-mail é enviado somente para os destinatários.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Selecionar todas as tarefas';
$lang['lead_company'] = 'Empresa';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Confirmar';
$lang['task_assigned'] = 'Atribuído ao';
$lang['switch_to_pipeline'] = 'Mudar para pipeline';
$lang['switch_to_list_view'] = 'Mudar a lista';
$lang['estimates_pipeline'] = 'Estimativas Pipeline';
$lang['estimates_pipeline_sort'] = 'Ordenar por';
$lang['estimates_sort_expiry_date'] = 'Data de Validade';
$lang['estimates_sort_pipeline'] = 'Pedido de Pipeline';
$lang['estimates_sort_datecreated'] = 'Data de Criação';
$lang['estimates_sort_estimate_date'] = 'Data de estimativa';
$lang['estimate_set_reminder_title'] = 'Definir Lembrete da Estimativa';
$lang['invoice_set_reminder_title'] = 'Definir Lembrete da Fatura';
$lang['estimate_reminders'] = 'Lembretes';
$lang['invoice_reminders'] = 'Lembretes';
$lang['estimate_notes'] = 'Anotações';
$lang['estimate_add_note'] = 'Adicionar Anotação';
$lang['dropdown_non_selected_tex'] = 'Nada selecionado';
$lang['auto_close_ticket_after'] = 'Auto fechamento do bilhete depois (Horas)';
$lang['event_description'] = 'Descrição';
$lang['delete_event'] = 'Deletar';
$lang['not_new_ticket_created'] = 'Novo bilhete aberto no seu departamento - %s';
$lang['receive_notification_on_new_ticket'] = 'Receber notificação sobre novo bilhete aberto';
$lang['receive_notification_on_new_ticket_help'] = 'Todos os colaboradores que pertencem ao departamento do bilhete receberão uma notificação de que o novo bilhete está aberto';
$lang['event_updated'] = 'Evento atualizado com sucesso';
$lang['customer_contacts'] = 'Contatos';
$lang['new_contact'] = 'Novo Contato';
$lang['contact'] = 'Contato';
$lang['contact_lowercase'] = 'contato';
$lang['contact_primary'] = 'Contato principal';
$lang['contact_position'] = 'Posição';
$lang['contact_active'] = 'Ativo';
$lang['client_company_info'] = 'Detalhes da Empresa';
$lang['proposal_save'] = 'Salvar Proposta';
$lang['calendar'] = 'Calendário';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'Fonte PDF';
$lang['settings_pdf_table_heading_color'] = 'Cor do título da tabela de itens';
$lang['settings_pdf_table_heading_text_color'] = 'Cor do texto do título da tabela de itens';
$lang['settings_pdf_font_size'] = 'Tamanho padrão da fonte';
$lang['proposal_status_draft'] = 'Rascunho';
$lang['custom_field_contacts'] = 'Contatos';
$lang['company_primary_email'] = 'E-mail principal';
$lang['client_register_contact_info'] = 'Informação de contato principais';
$lang['client_register_company_info'] = 'Informações da Empresa';
$lang['contact_permissions_info'] = 'Certifique-se de definir as permissões apropriadas para este contato';
$lang['defaut_leads_kanban_sort'] = 'Padrão conduz a ordenação Kan Ban';
$lang['defaut_leads_kanban_sort_type'] = 'Ordenar';
$lang['order_ascending'] = 'Crescente';
$lang['order_descending'] = 'Decrescente';
$lang['calendar_expand'] = 'expandir';
$lang['proposal_reminders'] = 'Lembretes';
$lang['proposal_set_reminder_title'] = 'Definir lembrete da proposta';
$lang['settings_allowed_upload_file_types'] = 'Tipos de arquivo permitidos';
$lang['no_primary_contact'] = 'Este cliente não tem contato principal. Você precisará definir o login principal contato como cliente. É recomendado que todos os clientes tenham contatos primários.';
$lang['leads_merge_customer'] = 'Campos de cliente mesclados';
$lang['leads_merge_contact'] = 'Campos de contato mesclados';
$lang['leads_merge_as_contact_field'] = 'Mesclar como campo de contato';
$lang['lead_convert_to_client_phone'] = 'Telefone';
$lang['invoice_status_report_all'] = 'Todos';
$lang['import_contact_field'] = 'Campo de contatos';
$lang['proposal_mark_as_draft'] = 'Marcar como rascunho';

$lang['file_uploaded_success'] = 'Não há nenhum erro, o arquivo enviado com sucesso';
$lang['file_exceds_max_filesize'] = 'O arquivo enviado excede a diretiva upload_max_filesize em php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'O arquivo enviado excede a diretiva MAX_FILE_SIZE que foi especificada no formulário HTML';
$lang['file_uploaded_partially'] = 'O arquivo enviado foi apenas parcialmente carregado';
$lang['file_not_uploaded'] = 'Nenhum arquivo foi enviado';
$lang['file_missing_temporary_folder'] = 'Faltando uma pasta temporária';
$lang['file_failed_to_write_to_disk'] = 'Erro ao gravar o arquivo em disco.';
$lang['file_php_extension_blocked'] = 'Uma extensão PHP parou o envio do arquivo.';
$lang['calendar_expand'] = 'Expandir';
$lang['view_pdf'] = 'Visualizar PDF';
$lang['expense_repeat_every'] = 'Repitir todos';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Mudar para kan ban';
$lang['survey_no_questions'] = 'Esta pesquisa não tem perguntas acrescentadas ainda.';
$lang['survey_submit'] = 'Enviar';
$lang['contract_content'] = 'Contrato';
$lang['contract_save'] = 'Salvar Contrato';
$lang['contract_send_to_email'] = 'Enviar e-mail';
$lang['contract_send_to_client_modal_heading'] = 'Enviar contrato por e-mail';
$lang['contract_send_to'] = 'Enviar para';
$lang['contract_send_to_client_attach_pdf'] = 'Anexar PDF';
$lang['contract_send_to_client_preview_template'] = 'Visualização do Modelo de E-mail';
$lang['include_attachments_to_email'] = 'Incluir anexos por e-mail';
$lang['contract_sent_to_client_success'] = 'O contrato é enviado com sucesso para o cliente';
$lang['contract_sent_to_client_fail'] = 'Falha ao enviar o contrato';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Nome do usuário inválido ou senha';
$lang['client_old_password_incorect'] = 'Sua senha antiga está incorreta';
$lang['client_password_changed'] = 'Sua senha foi alterada';
$lang['check_for_new_version'] = 'Verificar nova versão';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total de contatos excluídos: %s.';
$lang['total_clients_deleted'] = 'Total de clientes excluídos: %s.';
$lang['confirm_action_prompt'] = 'Tem certeza de que deseja executar esta ação?';
$lang['mass_delete'] = 'Deletar a Massa';
$lang['email_protocol'] = 'Protocolo de E-mail';
$lang['add_edit_members'] = 'Adicionar/Editar Membros';
$lang['project_overview_logged_hours'] = 'Horas Registrados:';
$lang['project_overview_billable_hours'] = 'Horas Faturáveis:';
$lang['project_overview_billed_hours'] = 'Horas Faturadas:';
$lang['project_overview_unbilled_hours'] = 'Horas não Faturadas:';
$lang['calendar_first_day'] = 'Primeiro dia';
$lang['dt_mass_delete_help'] = 'Use as caixas de seleção no lado direito para exclusão em massa.';
$lang['permission_view'] = 'Visualizar';
$lang['permission_edit'] = 'Editar';
$lang['permission_create'] = 'Criar';
$lang['permission_delete'] = 'Deletar';
$lang['permission'] = 'Permissão';
$lang['permissions'] = 'Permissões';
$lang['proposals_pipeline'] = 'Proposta do Pipeline';
$lang['proposals_pipeline_sort'] = 'Ordenar por';
$lang['proposals_sort_open_till'] = 'Aberto até';
$lang['proposals_sort_pipeline'] = 'Ordem do Pipeline';
$lang['proposals_sort_datecreated'] = 'Data de criação';
$lang['proposals_sort_proposal_date'] = 'Data da Proposta';
$lang['is_not_staff_member'] = 'Não é membro do pessoal';
$lang['lead_created'] = 'Criado';
$lang['access_tickets_to_none_staff_members'] = 'Permitir acesso aos tiquetes para nenhum dos membros do pessoal';
$lang['project_expenses'] = 'Despesas';
$lang['expense_currency'] = 'Moeda';
$lang['currency_valid_code_help'] = 'Certifique-se de introduzir código de moeda válido.';
$lang['week'] = 'Semana';
$lang['weeks'] = 'Semanas';
$lang['month'] = 'Mês';
$lang['months'] = 'Meses';
$lang['year'] = 'Ano';
$lang['years'] = 'Anos';
$lang['expense_report_category'] = 'Categoria';
$lang['expense_paid_via'] = 'Pago Via %s';
$lang['item_as_expense'] = '[Despesa]';
$lang['show_help_on_setup_menu'] = 'Mostrar o item de suporte do menu no menu de configuração';
$lang['customers_summary_total'] = 'Total de Clientes';
$lang['filter_by'] = 'Filtrar por';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Chave do site';
$lang['recaptcha_secret_key'] = 'Chave secreta';
$lang['recaptcha_error'] = 'O campo reCAPTCHA está dizendo que você é um robô.';
$lang['smtp_username'] = 'Nome de usuário do SMTP';
$lang['smtp_username_help'] = 'Preencher somente se o seu cliente de e-mail usar nome de usuário para login SMTP.';
$lang['pinned_project'] = 'Projeto Fixado';
$lang['pin_project'] = 'Fixar Projeto';
$lang['unpin_project'] = 'Desprender o Projeto';
$lang['smtp_encryption'] = 'Criptografia de E-mail';
$lang['smtp_encryption_none'] = 'Nenhum';
$lang['show_proposals_on_calendar'] = 'Propostas';
$lang['invoice_project_see_billed_expenses'] = 'Ver as despesas que serão faturadas nesta';
$lang['recaptcha_help_settings'] = 'Se os campos não forem preenchidos ou se não houver conexão de internet, reCAPTCHA não vai ser usado.';
$lang['project_overview_expenses'] = 'Total de Despesas';
$lang['project_overview_expenses_billable'] = 'Despesas Faturaveis';
$lang['project_overview_expenses_billed'] = 'Despesas Faturadas';
$lang['project_overview_expenses_unbilled'] = 'Despesas não Faturadas';
$lang['announcement_date_list'] = 'Data';
$lang['project_setting_view_finance_overview'] = 'ver visão geral das finanças';
$lang['show_all_tasks_for_project_member'] = 'Liberar todos funcionários a ver todas as tarefas relacionadas a projetos (inclui não funcionários)';
$lang['not_staff_added_as_project_member'] = 'Adicionado você como um membro do projeto';
$lang['report_expenses_base_currency_select_explanation'] = 'Você precisa selecionar uma moeda porque o sistema encontrou diferentes moedas usadadas nas despesas.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Despesa Registrada';
$lang['save_customer_and_add_contact'] = 'Salvar e criar contato';
$lang['tickets_chart_weekly_opening_stats'] = 'Status semanal';
$lang['related_knowledgebase_articles'] = 'Artigos relacionados';
$lang['detailed_overview'] = 'Visão geral das tarefas';
$lang['tasks_total_checklists_finished'] = 'Total de items da checklist marcados como terminados';
$lang['tasks_total_added_attachments'] = 'Total de anexos adicionados';
$lang['tasks_total_comments'] = 'Total de comentários';
$lang['task_finished_on_time'] = 'Terminado a tempo?';
$lang['task_finished_on_time_indicator'] = 'Sim';
$lang['task_not_finished_on_time_indicator'] = 'Não';
$lang['task_filter_fetch_month_by'] = 'Buscar mês de';
$lang['filter'] = 'Filtro';
$lang['task_filter_detailed_all_months'] = 'Todos os meses';
$lang['task_filter_detailed_show_tasks'] = 'Mostrar Tarefas';


# Version 1.1.7
$lang['email_template_ticket_warning'] = 'Se o tiquet for importado com o direcionamento de email e o contato não existir no CRM os campos não serão substituidos.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Parar todos os outros cronometros quando começar um novo';
$lang['notification_when_customer_pay_invoice'] = 'Receber notificação quando cliente efetuar um pagamento (embutido)';
$lang['not_invoice_payment_recored'] = 'Novo pagamento de fatura - %s';
$lang['email_template_contact_warning'] = 'A ação de mesclagem de campo de contatos não será substituida se o contato não estiver logado ao mesmo tempo.';
$lang['theme_style'] = 'Estilo de Tema';
$lang['change_role_permission_warning'] = 'Alterar permissões de função agora não vão afetar permissões dos funcionários atuais que estão usando este papel.';
$lang['task_copied_successfuly'] = 'Tarefa copiada com sucesso';
$lang['failed_to_copy_task'] = 'Falha ao copiar tarefa';
$lang['not_project_file_uploaded'] = 'Novo arquivo de projeto adicionado';
$lang['settings_calendar_color'] = '%s Cor';
$lang['settings_calendar_colors_heading'] = 'Cores';
$lang['reminder'] = 'Lembrete';
$lang['back_to_tasks_list'] = 'Voltar a lista de tarefas';
$lang['copy_task_confirm'] = 'Confirmar';
$lang['changing_items_affect_warning'] = 'Alterar as informações de itens não afetará as Faturas/Estimativas criadas.';
$lang['tax_is_used_in_expenses_warning'] = 'Você não pode atualizar este imposto, pois transações de gastos usando este imposto foram encontrados.';
$lang['note'] = 'Nota';
$lang['leads_staff_report_converted'] = 'Total de leads convertidos';
$lang['leads_staff_report_created'] = 'Total de leads criados';
$lang['leads_staff_report_lost'] = 'Total de leads perdidos';
$lang['client_go_to_dashboard'] = 'Voltar ao Painel';
$lang['show_estimate_reminders_on_calendar'] = 'Lembretes de estimativas';
$lang['show_invoice_reminders_on_calendar'] = 'Lembretes de faturas';
$lang['calendar_estimate_reminder'] = 'Lembrete de estimativa';
$lang['calendar_invoice_reminder'] = 'Lembrete de fatura';
$lang['show_proposal_reminders_on_calendar'] = 'Lembretes de propostas';
$lang['calendar_proposal_reminder'] = 'Lembrete de proposta';
$lang['proposal_due_after'] = 'Proposta vencida após (dias)';
$lang['project_progress'] = 'Progresso';
$lang['calculate_progress_through_tasks'] = 'Calcular progresso através de tarefas';
$lang['allow_customer_to_change_ticket_status'] = 'Aceitar cliente mudar o status do tiquete da área de cliente';
$lang['switch_to_general_report'] = 'Trocar para relatórios geral';
$lang['switch_to_staff_report'] = 'Trocar para relatório de funcionários';
$lang['generate'] = 'Gerar';
$lang['from_date'] = 'Da data';
$lang['to_date'] = 'Até a data';
$lang['not_results_found'] = 'Nenhum resultado encontrado';
$lang['lead_lock_after_convert_to_customer'] = 'Não deixar editar lead depois de converter para Cliente (Não aplicado a admins)';
$lang['default_pipeline_sort'] = 'Padrão de ordenação';
$lang['not_goal_message_failed'] = 'Nós falhamos de alcançar nossa meta!<br /> Tipo de meta: %s
<br />Objetivo: %s
<br />Total Realizado: %s
<br />Data início:: %s
<br />Data fim: %s';
$lang['toggle_full_view'] = 'Ativar visão Geral';
$lang['not_estimate_invoice_deleted'] = 'apagado a invoice criada';
$lang['not_task_new_comment'] = 'comentadoo na tarefa %s';

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
