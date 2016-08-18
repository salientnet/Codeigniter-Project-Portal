<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Nombre';
$lang['options']              = 'Opciones';
$lang['submit']               = 'Enviar';
$lang['added_successfuly']    = '%s añadido con éxito.';
$lang['updated_successfuly']  = '%s actualizados con éxito.';
$lang['edit']                 = 'Editar %s';
$lang['add_new']              = 'Añadir un nuevo %s';
$lang['deleted']              = '%s borrado';
$lang['problem_deleting']     = 'Problema al eliminar %s';
$lang['is_referenced']        = 'El ID de la %s ya está utilizando.';
$lang['close']                = 'Cerrar';
$lang['send']                 = 'Enviar';
$lang['cancel']               = 'Cancelar';
$lang['go_back']              = 'Volver';
$lang['error_uploading_file'] = 'Error al subir el archivo';
$lang['load_more']            = 'Cargar más';
$lang['cant_delete_default']  = 'No me puedo eliminar por defecto %s';

# Invoice General
$lang['invoice_status_paid']                = 'Pagado';
$lang['invoice_status_unpaid']              = 'No pagado';
$lang['invoice_status_overdue']             = 'Atrasado';
$lang['invoice_status_not_paid_completely'] = 'Parcialmente pagado';

$lang['invoice_pdf_heading'] = 'FACTURA';

$lang['invoice_table_item_heading']            = 'Artículo';
$lang['invoice_table_quantity_heading']        = 'Cantidad';
$lang['invoice_table_rate_heading']            = 'Tarifa';
$lang['invoice_table_tax_heading']             = 'Impuesto';
$lang['invoice_table_amount_heading']          = 'Cantidad';
$lang['invoice_subtotal']                      = 'Sub total';
$lang['invoice_adjustment']                    = 'Ajuste';
$lang['invoice_total']                         = 'Total';
$lang['invoice_vat']                           = 'CIF/NIF/VAT';
$lang['invoice_bill_to']                       = 'Cobrar a';
$lang['invoice_data_date']                     = 'Fecha de la factura:';
$lang['invoice_data_duedate']                  = 'Fecha de vencimiento:';
$lang['invoice_received_payments']             = 'Actas';
$lang['invoice_no_payments_found']             = 'No se han encontrado para esta factura Pagos';
$lang['invoice_note']                          = 'Nota:';
$lang['invoice_payments_table_number_heading'] = 'Pago #';
$lang['invoice_payments_table_mode_heading']   = 'Modo de pago';
$lang['invoice_payments_table_date_heading']   = 'Fecha';
$lang['invoice_payments_table_amount_heading'] = 'Cantidad';


# Announcements
$lang['announcement']                 = 'Anuncio';
$lang['announcement_lowercase']       = 'anuncio';
$lang['announcements']                = 'Anuncios';
$lang['announcements_lowercase']      = 'anuncios';
$lang['new_announcement']             = 'Nuevo aviso';
$lang['announcement_name']            = 'Anuncio de los nombres';
$lang['announcement_message']         = 'Mensaje';
$lang['announcement_show_to_staff']   = 'Mostrar a los empleados';
$lang['announcement_show_to_clients'] = 'Mostrar a los clientes';
$lang['announcement_show_my_name']    = 'Mostrar mi nombre';

# Clients
$lang['clients']                               = 'Clientes';
$lang['client']                                = 'Cliente';
$lang['new_client']                            = 'Nuevo cliente';
$lang['client_lowercase']                      = 'cliente';
$lang['client_delete_tooltip']                 = 'Se eliminarán todos los datos de los clientes. Los contratos, billetes, billetes. NOTA: Si las facturas encontraron al cliente suele ser borrado. Es necesario asignar esta facturas a otro cliente para mantener el número de factura';
$lang['customer_delete_invoices_warning']      = 'Este cliente tiene facturas en la cuenta. Usted no puede eliminar este cliente. Cambiar todas las facturas a otro cliente y a continuación, elimine.';
$lang['client_firstname']                      = 'Nombre de pila';
$lang['client_lastname']                       = 'Apellido';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Empresa';
$lang['client_vat_number']                     = 'CIF/NIF/VAT';
$lang['client_address']                        = 'Dirección';
$lang['client_city']                           = 'Ciudad';
$lang['client_postal_code']                    = 'Código postal';
$lang['client_state']                          = 'Estado';
$lang['client_password']                       = 'Contraseña';
$lang['client_password_change_populate_note']  = 'Nota: Si rellena estos campos, la contraseña será cambiada para este cliente.';
$lang['client_password_last_changed']          = 'Contraseña últimos modificados:';
$lang['login_as_client']                       = 'Entrar como cliente';
$lang['client_invoices_tab']                   = 'Facturas';
$lang['contracts_invoices_tab']                = 'Contratos';
$lang['contracts_tickets_tab']                 = 'Entradas';
$lang['contracts_notes_tab']                   = 'Notas';
$lang['client_invoice_number_table_heading']   = 'Factura #';
$lang['client_invoice_date_table_heading']     = 'Fecha';
$lang['client_invoice_due_date_table_heading'] = 'Fecha de vencimiento';
$lang['client_string_table_heading']           = 'Cliente';
$lang['client_amount_table_heading']           = 'Cantidad';
$lang['client_status_table_heading']           = 'Estado';
$lang['note_description']                      = 'Descripción nota';

$lang['client_string_contracts_table_heading']      = 'Cliente';
$lang['client_start_date_contracts_table_heading']  = 'Fecha de inicio';
$lang['client_end_date_contracts_table_heading']    = 'Fecha final';
$lang['client_description_contracts_table_heading'] = 'Descripción';
$lang['client_do_not_send_welcome_email']           = 'No enviar correo electrónico de bienvenida';

$lang['clients_notes_table_description_heading'] = 'Descripción';
$lang['clients_notes_table_addedfrom_heading']   = 'Desde añadido';
$lang['clients_notes_table_dateadded_heading']   = 'Fecha Agregada';

$lang['clients_list_full_name']   = 'Nombre completo';
$lang['clients_list_last_login']  = 'Último acceso';

# Contracts
$lang['contracts']                = 'Contratos';
$lang['contract']                 = 'Contrato';
$lang['new_contract']             = 'Nuevo contrato';
$lang['contract_lowercase']       = 'contrato';
$lang['contract_start_date']      = 'Fecha de inicio';
$lang['contract_end_date']        = 'Fecha final';
$lang['contract_subject']         = 'Tema';
$lang['contract_description']     = 'Descripción';
$lang['contract_subject_tooltip'] = 'Tema también es visible para el cliente';
$lang['contract_client_string']   = 'Cliente';
$lang['contract_attach']          = 'Documento adjunto';

$lang['contract_list_client']     = 'Cliente';
$lang['contract_list_subject']    = 'Tema';
$lang['contract_list_start_date'] = 'Fecha de inicio';
$lang['contract_list_end_date']   = 'Fecha final';

# Currencies
$lang['currencies']           = 'Monedas';
$lang['currency']             = 'Moneda';
$lang['new_currency']         = 'Nueva moneda';
$lang['currency_lowercase']   = 'moneda';
$lang['base_currency_set']    = 'Esta es ahora su divisa base.';
$lang['make_base_currency']   = 'Hacer moneda base';
$lang['base_currency_string'] = 'Moneda base';

$lang['currency_list_name']   = 'Nombre';
$lang['currency_list_symbol'] = 'Símbolo';


$lang['currency_add_edit_description'] = 'Nombre moneda';
$lang['currency_add_edit_rate']        = 'Símbolo';

$lang['currency_edit_heading'] = 'Cambiar la moneda';
$lang['currency_add_heading']  = 'Añadir nueva moneda';


# Department
$lang['departments']          = 'Departamentos';
$lang['department']           = 'Departamento';
$lang['new_department']       = 'Departamento nuevo';
$lang['department_lowercase'] = 'Departamento';

$lang['department_name']             = 'Nombre del Departamento';
$lang['department_email']            = 'Departamento de correo electrónico';
$lang['department_hide_from_client'] = 'Esconder del cliente?';
$lang['department_list_name']        = 'Nombre';

# Email Templates
$lang['email_templates']                        = 'Plantillas de correo electrónico';
$lang['email_template']                         = 'Plantilla de correo electrónico';
$lang['email_template_lowercase']               = 'plantilla de correo electrónico';
$lang['email_templates_lowercase']              = 'Plantillas de correo electrónico';
$lang['email_template_ticket_fields_heading']   = 'Entradas';
$lang['email_template_invoices_fields_heading'] = 'Facturas';
$lang['email_template_clients_fields_heading']  = 'Clientes';

$lang['template_name']                                      = 'Nombre de la plantilla';
$lang['template_subject']                                   = 'Tema';
$lang['template_fromname']                                  = 'Desde nombre';
$lang['template_fromemail']                                 = 'Desde el correo electrónico';
$lang['send_as_plain_text']                                 = 'Enviar como texto sin formato';
$lang['email_template_disabed']                             = 'Discapacitado';
$lang['email_template_email_message']                       = 'Mensaje de correo electrónico';
$lang['available_merge_fields']                             = 'campos de combinación disponibles';
# Home
$lang['dashboard_string']                                   = 'Panel Principal';
$lang['home_latest_todos']                                  = 'Últimas Tareas';
$lang['home_no_latest_todos']                               = 'No se encontraron Todos';
$lang['home_latest_finished_todos']                         = 'Tareas Acabadas Recientemente';
$lang['home_no_finished_todos_found']                       = 'No se encontraron Todos terminados';
$lang['home_todo_heading']                                  = 'Para hacer artículos';
$lang['home_tickets_awaiting_reply_by_department']          = 'Incidencias en espera de respuesta por el departamento';
$lang['home_tickets_awaiting_reply_by_status']              = 'Incidencias en espera de respuesta por situación';
$lang['home_this_week_events']                              = 'Esta semana los eventos';
$lang['home_upcoming_events_next_week']                     = 'Próximos eventos de la próxima semana';
$lang['home_event_added_by']                                = 'Evento añadida por';
$lang['home_public_event']                                  = 'Evento público';
$lang['home_weekly_payment_records']                        = 'Resumen de Pagos Semanales';
$lang['home_weekend_ticket_opening_statistics']             = 'Semanales de billetes Aperturas Estadísticas';
# Newsfeed
$lang['whats_on_your_mind']                                 = '¿Qué tienes en mente?';
$lang['new_post']                                           = 'Enviar';
$lang['newsfeed_upload_tooltip']                            = 'Consejo: Arrastre y suelte archivos para subir';
$lang['newsfeed_all_departments']                           = 'Todos los departamentos';
$lang['newsfeed_pin_post']                                  = 'Fijar la publicación';
$lang['newsfeed_unpin_post']                                = 'Desanclar Post';
$lang['newsfeed_delete_post']                               = 'Borrar';
$lang['newsfeed_published_post']                            = 'Publicado';
$lang['newsfeed_you_like_this']                             = 'Te gusta';
$lang['newsfeed_like_this']                                 = 'Me gusta';
$lang['newsfeed_one_other']                                 = 'otro';
$lang['newsfeed_you']                                       = 'Tú';
$lang['newsfeed_and']                                       = 'y';
$lang['newsfeed_you_and']                                   = 'Usted y';
$lang['newsfeed_like_this_saying']                          = 'Me gusta';
$lang['newsfeed_unlike_this_saying']                        = 'No me gusta esto';
$lang['newsfeed_show_more_comments']                        = 'Mostrar más comentarios';
$lang['comment_this_post_placeholder']                      = 'Comentar este post ..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Colegas que les gusta este post';
$lang['newsfeed_comment_likes_modal_heading']               = 'Colegas que les gusta este comentario';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Este blog es sólo visible para los siguientes departamentos: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Los artículos de la factura';
$lang['invoice_item']                                       = 'artículo factura';
$lang['new_invoice_item']                                   = 'Nuevo artículo';
$lang['invoice_item_lowercase']                             = 'posición de factura';

$lang['invoice_items_list_description'] = 'Descripción';
$lang['invoice_items_list_rate']        = 'Tarifa';
$lang['invoice_items_list_tax']         = 'Impuesto';

$lang['invoice_item_add_edit_description'] = 'Descripción';
$lang['invoice_item_add_edit_rate']        = 'Tarifa';
$lang['invoice_item_add_edit_tax']         = 'Impuesto';
$lang['invoice_item_add_edit_tax_select']  = 'Seleccione Tributaria';

$lang['invoice_item_edit_heading'] = 'Editar elemento';
$lang['invoice_item_add_heading']  = 'Agregar nuevo elemento';

# Invoices


$lang['invoices']                       = 'Facturas';
$lang['invoice']                        = 'Factura';
$lang['invoice_lowercase']              = 'factura';
$lang['create_new_invoice']             = 'Crear Factura';
$lang['view_invoice']                   = 'Ver factura';
$lang['invoice_payment_recorded']       = 'Factura de pagos registrado';
$lang['invoice_payment_record_failed']  = 'Error al registrar la factura de pago';
$lang['invoice_sent_to_client_success'] = 'La factura se ha envíado con éxito al cliente';
$lang['invoice_sent_to_client_fail']    = 'Problema al enviar la factura';
$lang['invoice_reminder_send_problem']  = 'Problema con la factura enviar recordatorio de retraso';
$lang['invoice_overdue_reminder_sent']  = 'Recordatorio de factura vencida enviado con éxito';

$lang['invoice_details']              = 'Detalles de la factura';
$lang['invoice_view']                 = 'Ver factura';
$lang['invoice_select_customer']      = 'Cliente';
$lang['invoice_add_edit_number']      = 'Número de factura';
$lang['invoice_add_edit_date']        = 'Fecha de la factura';
$lang['invoice_add_edit_duedate']     = 'Fecha de vencimiento';
$lang['invoice_add_edit_currency']    = 'Moneda';
$lang['invoice_add_edit_client_note'] = 'Nota cliente';
$lang['invoice_add_edit_admin_note']  = 'Admin nota';

$lang['invoice_add_edit_search_item']  = 'Búsqueda artículos';
$lang['invoices_toggle_table_tooltip'] = 'Ver Tabla completa';





$lang['edit_invoice_tooltip']                   = 'Editar factura';
$lang['delete_invoice_tooltip']                 = 'Eliminar la factura. Nota: Se borrarán todos los pagos con respecto a esta factura (si lo hay).';
$lang['invoice_sent_to_email_tooltip']          = 'Envía por email';
$lang['invoice_already_send_to_client_tooltip'] = 'Esta factura ya se ha envíado al cliente %s';
$lang['send_overdue_notice_tooltip']            = 'Enviar aviso de vencimiento';
$lang['invoice_view_activity_tooltip']          = 'Registro de actividades';
$lang['invoice_record_payment']                 = 'Registrar Pago';


$lang['invoice_send_to_client_modal_heading']    = 'Enviar esta factura al cliente';
$lang['invoice_send_to_client_attach_pdf']       = 'Adjuntar la factura en PDF';
$lang['invoice_send_to_client_preview_template'] = 'Vista previa de plantilla de correo electrónico';

$lang['invoice_dt_table_heading_number']  = 'Factura #';
$lang['invoice_dt_table_heading_date']    = 'Fecha';
$lang['invoice_dt_table_heading_client']  = 'Cliente';
$lang['invoice_dt_table_heading_duedate'] = 'Fecha de vencimiento';
$lang['invoice_dt_table_heading_amount']  = 'Cantidad';
$lang['invoice_dt_table_heading_status']  = 'Estado';

$lang['record_payment_for_invoice']              = 'Registrar Pago';
$lang['record_payment_amount_received']          = 'Cantidad recibida';
$lang['record_payment_date']                     = 'Fecha de pago';
$lang['record_payment_leave_note']               = 'Dejar una nota';
$lang['invoice_payments_received']               = 'Pagos recibidos';
$lang['invoice_record_payment_note_placeholder'] = 'Admin nota';
$lang['no_payments_found']                       = 'No se han encontrado Pagos para esta factura';
$lang['invoice_email_link_text']                 = 'Ver factura';

# Payments
$lang['payments']                             = 'Pagos';
$lang['payment']                              = 'Pago';
$lang['payment_lowercase']                    = 'pago';
$lang['payments_table_number_heading']        = 'Pago #';
$lang['payments_table_invoicenumber_heading'] = 'Factura #';
$lang['payments_table_mode_heading']          = 'Modo de pago';
$lang['payments_table_date_heading']          = 'Fecha';
$lang['payments_table_amount_heading']        = 'Cantidad';
$lang['payments_table_client_heading']        = 'Cliente';
$lang['payment_not_exists']                   = 'El pago no existe';

$lang['payment_edit_for_invoice']     = 'El pago de la factura';
$lang['payment_edit_amount_received'] = 'Cantidad recibida';
$lang['payment_edit_date']            = 'Fecha de pago';
$lang['payment_edit_lave_note']       = 'Deja Nota';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Tema';
$lang['kb_article_add_edit_group']   = 'Grupo';
$lang['kb_string']                   = 'Base de conocimiento';
$lang['kb_article']                  = 'Artículo';
$lang['kb_article_lowercase']        = 'artículo';
$lang['kb_article_new_article']      = 'Artículo nuevo';
$lang['kb_article_disabled']         = 'Deshabilitado';
$lang['kb_article_description']      = 'Descripción del artículo';

$lang['kb_table']                      = 'Lista';
$lang['kb_no_articles_found']          = 'No hay artículos encontrados en la Base de conocimientos';
$lang['kb_dt_article_name']            = 'Nombre del artículo';
$lang['kb_dt_group_name']              = 'Grupo';
$lang['new_group']                     = 'Nuevo grupo';
$lang['kb_group_add_edit_name']        = 'Nombre del grupo';
$lang['kb_group_add_edit_description'] = 'breve descripción';
$lang['kb_group_add_edit_disabled']    = 'Deshabilitado';
$lang['kb_group_add_edit_note']        = 'Nota: Todos los artículos en este grupo se ocultarán si no se marca como desabilitado';
$lang['group_table_name_heading']      = 'Nombre';
$lang['group_table_isactive_heading']  = 'Activo';
$lang['kb_no_groups_found']            = 'No hay Grupos de base de conocimientos encontrados';

# Mail Lists
$lang['mail_lists']                           = 'Las listas de correo';
$lang['mail_list']                            = 'Lista de correo';
$lang['new_mail_list']                        = 'Lista de correo nuevo';
$lang['mail_list_lowercase']                  = 'lista de correo';
$lang['custom_field_deleted_success']         = 'campo personalizado eliminado';
$lang['custom_field_deleted_fail']            = 'Problema al eliminar campo personalizado';
$lang['email_removed_from_list']              = 'Correo electrónico eliminado de la lista';
$lang['email_remove_fail']                    = 'Correo electrónico eliminado de la lista';
$lang['staff_mail_lists']                     = 'Listas de Correo del Personal';
$lang['clients_mail_lists']                   = 'Listas de Correo de Los clientes';
$lang['mail_list_total_imported']             = 'correos electrónicos importados totales: %s';
$lang['mail_list_total_duplicate']            = 'Total de mensajes de correo electrónico duplicados: %s';
$lang['mail_list_total_failed_to_insert']     = 'Los correos electrónicos no pudo insertar: %s';
$lang['mail_list_total_invalid']              = 'dirección de correo electrónico no válida: %s';
$lang['cant_edit_mail_list']                  = 'Usted no puede editar esta lista, esta lista se rellena automáticamente';
$lang['mail_list_add_edit_name']              = 'Nombre de lista de correo';
$lang['mail_list_add_edit_customfield']       = 'Añadir campo personalizado';
$lang['mail_lists_viewing_emails']            = 'Visualización de la lista de mensajes de correo electrónico';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Fecha Agregada';
$lang['add_new_email_to']                     = 'Agregar nuevo correo electrónico a %s';
$lang['import_emails_to']                     = 'Importación de Los correos electrónicos %s';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Importar archivo';
$lang['mail_list_available_custom_fields']    = 'Campos personalizados disponibles';
$lang['submit_import_emails']                 = 'Los correos electrónicos de importación';
$lang['btn_import_emails']                    = 'Los correos electrónicos de importación (Excel)';
$lang['btn_add_email_to_list']                = 'Añadir a esta lista de correo electrónico';
$lang['mail_lists_dt_list_name']              = 'Lista de nombres';
$lang['mail_lists_dt_datecreated']            = 'fecha de creacion';
$lang['mail_lists_dt_creator']                = 'Crear';
$lang['email_added_to_mail_list_successfuly'] = 'Email añadió a la lista';
$lang['email_is_duplicate_mail_list']         = 'Correo electrónico ya existe en esta lista';

# Payment modes
$lang['new_payment_mode']       = 'Nuevo Modo de Pago';
$lang['payment_modes']          = 'Modos de pago';
$lang['payment_mode']           = 'Modo de pago';
$lang['payment_mode_lowercase'] = 'modo de pago';
$lang['payment_modes_dt_name']  = 'Modo de Pago Nombre';

$lang['payment_mode_add_edit_name'] = 'Modo de Pago Nombre';
$lang['payment_mode_edit_heading']  = 'Modo de edición de Pago';
$lang['payment_mode_add_heading']   = 'Agregar nuevo modo de pago';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nueva respuesta predefinida';
$lang['predefined_replies']                = 'Respuesta predefinida';
$lang['predefined_reply']                  = 'Responder predefinido';
$lang['predefined_reply_lowercase']        = 'Respuesta predefinido';
$lang['predifined_replies_dt_name']        = 'Respuesta predefinida Nombre';
$lang['predifined_reply_add_edit_name']    = 'Respuesta predefinida Nombre';
$lang['predifined_reply_add_edit_content'] = 'Responder contenido';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nueva prioridad';
$lang['ticket_priorities']             = 'Prioridades de billetes';
$lang['ticket_priority']               = 'prioridad de billetes';
$lang['ticket_priority_lowercase']     = 'prioridad de billetes';
$lang['no_ticket_priorities_found']    = 'No se han encontrado Prioridades de billetes';
$lang['ticket_priority_dt_name']       = 'Prioridad Nombre de billetes';
$lang['ticket_priority_add_edit_name'] = 'prioridad Nombre';

# Reports
$lang['kb_reports']                         = 'Informes de artículos de';
$lang['sales_reports']                      = 'Informes de ventas';
$lang['reports_choose_kb_group']            = 'Elegir grupo';
$lang['reports_sales_select_report_type']   = 'Seleccione el tipo de informe';
$lang['report_kb_yes']                      = 'Sí';
$lang['report_kb_no']                       = 'No';
$lang['report_kb_no_votes']                 = 'Sin votos';
$lang['report_this_week_leads_conversions'] = 'Esta Semana prospectos Convertidos';
$lang['report_leads_sources_conversions']   = 'Fuentes';
$lang['report_leads_monthly_conversions']   = 'Mensual';
$lang['sales_report_heading']               = 'Reporte de ventas';
$lang['report_sales_type_income']           = 'Ingresos totales';

$lang['report_sales_type_customer']                    = 'Informe de cliente';
$lang['report_sales_base_currency_select_explanation'] = 'Es necesario seleccionar la moneda por que usted tiene facturas con moneda diferente';
$lang['report_sales_from_date']                        = 'A partir de la fecha';
$lang['report_sales_to_date']                          = 'Hasta la fecha';


$lang['report_sales_months_all_time']      = 'Todo el tiempo';
$lang['report_sales_months_six_months']    = 'Últimos 6 meses';
$lang['report_sales_months_twelve_months'] = 'Últimos 12 meses';
$lang['report_sales_months_custom']        = 'Personalizado';
$lang['reports_sales_generated_report']    = 'Informe generado';



$lang['reports_sales_dt_customers_client']                = 'Cliente';
$lang['reports_sales_dt_customers_total_invoices']        = 'Las facturas totales';
$lang['reports_sales_dt_items_customers_amount']          = 'Cantidad';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Cantidad con Impuestos';

# Roles
$lang['new_role']           = 'Nuevo rol';
$lang['all_roles']          = 'Todos los roles';
$lang['roles']              = 'Roles';
$lang['role']               = 'Papel';
$lang['role_lowercase']     = 'papel';
$lang['roles_total_users']  = 'Total de usuarios:';
$lang['roles_dt_name']      = 'Nombre de rol';
$lang['role_add_edit_name'] = 'Nombre de rol';

# Service
$lang['new_service']           = 'nuevo Servicio';
$lang['services']              = 'Servicios';
$lang['service']               = 'Servicio';
$lang['service_lowercase']     = 'Servicio';
$lang['services_dt_name']      = 'Nombre del Servicio';
$lang['service_add_edit_name'] = 'Nombre del Servicio';

# Settings
$lang['settings']                     = 'Ajustes';
$lang['settings_updated']             = 'Configuración de Actualizada';
$lang['settings_save']                = 'Guardar ajustes';
$lang['settings_group_general']       = 'General';
$lang['settings_group_localization']  = 'Localización';
$lang['settings_group_tickets']       = 'Entradas';
$lang['settings_group_sales']         = 'Financiar';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Clientela';
$lang['settings_group_newsfeed']      = 'Noticias';
$lang['settings_group_cronjob']       = 'Cron job';

$lang['settings_yes']                                        = 'Sí';
$lang['settings_no']                                         = 'No';
$lang['settings_clients_default_theme']                      = 'Tema predeterminado clientes';
$lang['settings_clients_allow_registration']                 = 'Permitir que los clientes se registren';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Permitir que la base de conocimientos sea visto sin conexion';

$lang['settings_cron_send_overdue_reminder']                 = 'Enviará recordatorio para la factura vencida';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Enviar correo electrónico al cliente cuando atrasados ​​estado de la factura actualiza al atraso de trabajo Cron';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Enviar automáticamente después de recordatorio (días)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Automáticamente volver a enviar recordatorio después de (días)';

$lang['settings_email_host']      = 'Host SMTP';
$lang['settings_email_port']      = 'Puerto SMTP';
$lang['settings_email']           = 'Correo electrónico SMTP';
$lang['settings_email_password']  = 'Contraseña SMTP';
$lang['settings_email_charset']   = 'Juego de caracteres de correo electrónico';
$lang['settings_email_signature'] = 'Firma de email';

$lang['settings_general_company_logo']                = 'Logo de la compañía';
$lang['settings_general_company_logo_tooltip']        = 'Dimensiones recomendadas: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Retire logotipo de la empresa';
$lang['settings_general_company_name']                = 'Nombre de la empresa';
$lang['settings_general_company_main_domain']         = 'Dominio principal de la Compañía';
$lang['settings_general_use_knowledgebase']           = 'Usar la base de conocimiento';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Si permite esta Opciones la base de conocimientos se le aparecen también en el lado de los clientes';
$lang['settings_general_tables_limit']                = 'Mesas de límites de paginación';
$lang['settings_general_default_staff_role']          = 'El rolPor defecto del personal';
$lang['settings_general_default_staff_role_tooltip']  = 'Al añadir un nuevo miembro del personal de este papel se seleccionará de forma predeterminada';

$lang['settings_localization_date_format']      = 'Formato de fecha';
$lang['settings_localization_default_timezone'] = 'La zona horaria predeterminada';
$lang['settings_localization_default_language'] = 'Idioma predeterminado';

$lang['settings_newsfeed_max_file_upload_post']    = 'Archivos máximo de carga en el post';
$lang['settings_newsfeed_max_file_size']           = 'El tamaño máximo de los archivos (MB)';

$lang['settings_reminders_contracts']         = 'Contrato de caducidad recordatorio';
$lang['settings_reminders_contracts_tooltip'] = 'Notificación de aviso de caducidad en días';

$lang['settings_tickets_use_services']             = 'Uzo de los billetes de servicios';
$lang['settings_tickets_max_attachments']          = 'Ajuste tamaño máximo ficheros adjuntos para los billetes';
$lang['settings_tickets_allow_departments_access'] = 'Que el personal pueda acceder único billete que pertenece al personal departamentos';
$lang['settings_tickets_allowed_file_extensions']  = 'Se admiten las extensiones de archivos adjuntos';

$lang['settings_sales_general']                                    = 'General';
$lang['settings_sales_general_note']                               = 'Configuración general';
$lang['settings_sales_invoice_prefix']                             = 'Número de factura Prefijo';
$lang['settings_sales_decimal_separator']                          = 'Separador decimal';
$lang['settings_sales_thousand_separator']                         = 'Separador de miles';
$lang['settings_sales_currency_placement']                         = 'Colocación moneda';
$lang['settings_sales_currency_placement_before']                  = 'Antes Monto';
$lang['settings_sales_currency_placement_after']                   = 'Después Monto';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Requerir cliente que se haya identificado para ver la factura';
$lang['settings_sales_next_invoice_number']                        = 'Siguiente número de factura';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Establecer este campo a 1 si desea empezar de inicio';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Disminuir el número de factura en Eliminar';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = '¿Quieres disminuir el número de factura cuando se elimina la última factura? Ex. Si se establece esta opción en Sí y antes de la factura borrar el siguiente número de la factura es 15 el siguiente número de la factura disminuirá a 14 para la próxima factura si se establece en NO el número permanecerá hasta el 15';
$lang['settings_sales_invoice_number_format']                      = 'Formato de número de factura';
$lang['settings_sales_invoice_number_format_year_based']           = 'Basada en el año';
$lang['settings_sales_invoice_number_format_number_based']         = 'Basado número (000001)';
$lang['settings_sales_invoice_year']                               = 'Factura Año (AAAA / 000001)';
$lang['settings_sales_invoice_year_tooltip']                       = 'Año actual de la factura. Restablecer este cuando llega un nuevo año.';

$lang['settings_sales_company_info_heading'] = 'Empresa';
$lang['settings_sales_company_info_note']    = 'Todos estos datos se mostrarán en las facturas / presupuestos / pagos y otros documentos PDF donde se requiere información de la empresa';
$lang['settings_sales_company_name']         = 'Nombre de la Empresa';
$lang['settings_sales_address']              = 'Dirección';
$lang['settings_sales_city']                 = 'Ciudad';
$lang['settings_sales_country_code']         = 'Código de país';
$lang['settings_sales_postal_code']          = 'Código postal';
$lang['settings_sales_phonenumber']          = 'Teléfono';

# Leads
$lang['new_lead']       = 'Nueva prospecto';
$lang['leads']          = 'Prospectos';
$lang['lead']           = 'Dirigir';
$lang['lead_lowercase'] = 'Dirigir';
$lang['leads_all']      = 'Todas';

$lang['leads_canban_notes']  = 'Notas: %s';
$lang['leads_canban_source'] = 'Fuente: %s';

$lang['lead_new_source']            = 'Nueva fuente';
$lang['lead_sources']               = 'Fuentes de prospecto';
$lang['lead_source']                = 'Fuente principal';
$lang['lead_source_lowercase']      = 'fuente principal';
$lang['leads_sources_not_found']    = 'No se encontraron fuentes de derivaciones';
$lang['leads_sources_table_name']   = 'Nombre de la fuente';
$lang['leads_source_add_edit_name'] = 'Nombre de la fuente';

$lang['lead_new_status']         = 'Nuevo Estado del prospecto';
$lang['lead_statuss']            = 'Estado del prospecto';
$lang['lead_status']             = 'Estado del prospecto';
$lang['lead_status_lowercase']   = 'estado de prospecto';
$lang['leads_status_table_name'] = 'Nombre Estado';

$lang['leads_status_add_edit_name']  = 'Nombre Estado';
$lang['leads_status_add_edit_order'] = 'Orden';

$lang['lead_statuses_not_found']      = 'No se encontraron las derivaciones estados';
$lang['leads_search']                 = 'Ventas de búsqueda';

$lang['leads_table_total'] = 'Ventas totales: %s';

$lang['leads_dt_name']         = 'Nombre';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Teléfono';
$lang['leads_dt_assigned']     = 'Asignado';
$lang['leads_dt_status']       = 'Estado';
$lang['leads_dt_last_contact'] = 'última Contacto';

$lang['lead_add_edit_name']                 = 'Nombre';
$lang['lead_add_edit_email']                = 'Dirección de correo electrónico';
$lang['lead_add_edit_phonenumber']          = 'Teléfono';
$lang['lead_add_edit_source']               = 'Fuente';
$lang['lead_add_edit_status']               = 'Estado del prospecto';
$lang['lead_add_edit_assigned']             = 'Asignado';
$lang['lead_add_edit_datecontacted']        = 'Fecha contactado';
$lang['lead_add_edit_contected_today']      = 'contactado Hoy';
$lang['lead_add_edit_activity']             = 'Registro de actividades';
$lang['lead_add_edit_notes']                = 'Notas';
$lang['lead_add_edit_add_note']             = 'Añadir la nota';
$lang['lead_not_contacted']                 = 'No me he puesto en contacto este prospecto';
$lang['lead_add_edit_contected_this_lead']  = 'Me puse en contacto con este prospecto';
$lang['lead_confirmation_canban_contacted'] = '¿Usted se ha puesto en contacto con este prospecto?';

# Misc
$lang['activity_log_when_cron_job'] = 'Cron job';
$lang['access_denied']              = 'Que da acceso denegado';
$lang['prev']                       = 'Anterior';
$lang['next']                       = 'Siguiente';

# Datatables
$lang['dt_paginate_first']          = 'Primero';
$lang['dt_paginate_last']           = 'Último';
$lang['dt_paginate_next']           = 'Siguiente';
$lang['dt_paginate_previous']       = 'Anterior';
$lang['dt_empty_table']             = 'No {0} encontrado';
$lang['dt_search']                  = 'Buscar:';
$lang['dt_zero_records']            = 'No se encontraron coincidencias';
$lang['dt_loading_records']         = 'Cargando...';
$lang['dt_length_menu']             = 'Clientes por Página _MENU_';
$lang['dt_info_filtered']           = '(Filtrado de _MAX_ total de {0})';
$lang['dt_info_empty']              = 'Mostrando 0 al 0 de 0 {0}';
$lang['dt_info']                    = 'Mostrando desde _START_ hasta _END_ de _TOTAL_ {0}';
$lang['dt_empty_table']             = 'No {0} encontrado';
$lang['dt_sort_ascending']          = 'Activar para ordenar la columna ascendente';
$lang['dt_sort_descending']         = 'Activar para ordenar la columna descendente';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s factura enviada recordatorio de retraso';

# Weekdays
$lang['wd_monday']    = 'Lunes';
$lang['wd_tuesday']   = 'Martes';
$lang['wd_thursday']  = 'Jueves';
$lang['wd_wednesday'] = 'Miércoles';
$lang['wd_friday']    = 'Viernes';
$lang['wd_saturday']  = 'Sábado';
$lang['wd_sunday']    = 'Domingo';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Tablero';
$lang['als_clients']   = 'Clientes';
$lang['als_leads']     = 'Prospectos';

$lang['als_contracts'] = 'Contratos';

$lang['als_all_tickets'] = 'Todas los billetes';
$lang['als_sales']       = 'Ventas';

$lang['als_staff'] = 'Personal';
$lang['als_tasks'] = 'Tareas';
$lang['als_kb']    = 'Base de conocimiento';

$lang['als_surveys']               = 'Encuestas';
$lang['als_media']                 = 'Medios de comunicación';
$lang['als_reports']               = 'Informes';
$lang['als_reports_sales_submenu'] = 'Ventas';
$lang['als_reports_leads_submenu'] = 'Prospectos';
$lang['als_kb_articles_submenu']   = 'Artículos de KB';
$lang['als_utilities']             = 'Utilidades';
$lang['als_announcements_submenu'] = 'Anuncios';
$lang['als_mail_lists_submenu']    = 'Las listas de correo';
$lang['als_calendar_submenu']      = 'Calendario';
$lang['als_activity_log_submenu']  = 'Registro de actividades';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Entradas';
$lang['acs_ticket_priority_submenu']           = 'prioridad de billetes';
$lang['acs_ticket_statuses_submenu']           = 'Los estados de billetes';
$lang['acs_ticket_predefined_replies_submenu'] = 'Respuestas Predifinidas';
$lang['acs_ticket_services_submenu']           = 'Servicios';
$lang['acs_departments']                       = 'departamentos';
$lang['acs_leads']                             = 'Prospectos';
$lang['acs_leads_sources_submenu']             = 'Fuentes';
$lang['acs_leads_statuses_submenu']            = 'Estados';
$lang['acs_sales_taxes_submenu']               = 'Impuestos';
$lang['acs_sales_currencies_submenu']          = 'Monedas';
$lang['acs_sales_payment_modes_submenu']       = 'Modos de pago';
$lang['acs_email_templates']                   = 'Plantillas de correo electrónico';
$lang['acs_roles']                             = 'Roles';
$lang['acs_settings']                          = 'Ajustes';

# Tickets
$lang['new_ticket']                                         = 'Abrir un nuevo Ticket';
$lang['tickets']                                            = 'Entradas';
$lang['ticket']                                             = 'ticket';
$lang['ticket_lowercase']                                   = 'ticket';
$lang['support_tickets']                                    = 'Tickets de Soporte Técnico';
$lang['support_ticket']                                     = 'Ticket de soporte técnico';
$lang['ticket_settings_to']                                 = 'A';
$lang['ticket_settings_email']                              = 'Dirección de correo electrónico';
$lang['ticket_settings_departments']                        = 'Departamento';
$lang['ticket_settings_service']                            = 'Servicio';
$lang['ticket_settings_priority']                           = 'Prioridad';
$lang['ticket_settings_subject']                            = 'Tema';
$lang['ticket_settings_assign_to']                          = 'Asignar tickets (por defecto es el usuario actual)';
$lang['ticket_settings_assign_to_you']                      = 'Tú';
$lang['ticket_settings_select_client']                      = 'Seleccione Cliente';
$lang['ticket_add_body']                                    = 'Cuerpo de tickets';
$lang['ticket_add_attachments']                             = 'Archivos adjuntos';
$lang['ticket_no_reply_yet']                                = 'Sin embargo, no hay respuesta';
$lang['new_ticket_added_succesfuly']                        = 'Ticket # %s añadido con éxito';
$lang['replied_to_ticket_succesfuly']                       = 'Respondido al ticket # %s con éxito';
$lang['ticket_settings_updated_successfuly']                = 'Ajustes del ticket actualizados con exito';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Ajustes del ticket actualizados – reasignado al departamento de %s';
$lang['ticket_dt_subject']                                  = 'Tema';
$lang['ticket_dt_department']                               = 'Departamento';
$lang['ticket_dt_service']                                  = 'Servicio';
$lang['ticket_dt_submitter']                                = 'Cliente';
$lang['ticket_dt_status']                                   = 'Estado';
$lang['ticket_dt_priority']                                 = 'Prioridad';
$lang['ticket_dt_last_reply']                               = 'última respuesta';

$lang['ticket_single_add_reply']                  = 'Añadir respuesta';
$lang['ticket_single_add_note']                   = 'Añadir la nota';
$lang['ticket_single_other_user_tickets']         = 'otras billetes';
$lang['ticket_single_settings']                   = 'ajustes';
$lang['ticket_single_priority']                   = 'Prioridad: %s';
$lang['ticket_single_last_reply']                 = 'Última respuesta: %s';
$lang['ticket_single_change_status_top']          = 'Cambiar Estado';
$lang['ticket_single_ticket_note_by']             = 'Venta de tickets nota de %s';
$lang['ticket_single_note_added']                 = 'Nota añadida: %s';
$lang['ticket_single_change_status']              = 'Cambiar Estado';
$lang['ticket_single_assign_to_me_on_update']     = 'Asignarme este ticket esta predefinida';
$lang['ticket_single_insert_predefined_reply']    = 'Insertar respuesta predefinida';
$lang['ticket_single_insert_knowledge_base_link'] = 'Inserte el enlace a la base de conocimiento';
$lang['ticket_single_attachments']                = 'Archivos adjuntos';
$lang['ticket_single_add_response']               = 'Añadir respuesta';
$lang['ticket_single_note_heading']               = 'Nota';
$lang['ticket_single_add_note']                   = 'Añadir la nota';
$lang['ticket_settings_none_assigned']            = 'Ningúna';
$lang['ticket_status_changed_successfuly']        = 'Estado del Ticket Cambiado';
$lang['ticket_status_changed_fail']               = 'Problema en el cambio de estado de tickets';

$lang['ticket_staff_string']                    = 'Personal';
$lang['ticket_client_string']                   = 'Cliente';
$lang['ticket_posted']                          = 'Publicado: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Insertar respuesta predefinida';
$lang['ticket_kb_link_heading']                 = 'Inserte el enlace a la base de conocimiento';
$lang['ticket_access_by_department_denied']     = 'Usted no tiene acceso a este billete. Este billete es de departamento que no le esta asignado.';

# Staff
$lang['new_staff']                       = 'Nuevo Miembro del Personal';
$lang['staff_members']                   = 'Los miembros del personal';
$lang['staff_member']                    = 'Miembro del equipo';
$lang['staff_member_lowercase']          = 'miembro del equipo';
$lang['staff_profile_updated']           = 'Tu perfil ha sido actualizado';
$lang['staff_old_password_incorect']     = 'Su antigua contraseña es incorrecta';
$lang['staff_password_changed']          = 'Su contraseña ha sido cambiada';
$lang['staff_problem_changing_password'] = 'Problema cambiar su contraseña';
$lang['staff_profile_string']            = 'Perfil';

$lang['staff_cant_remove_main_admin']          = 'No puede quitarse de administrador principal';
$lang['staff_cant_remove_yourself_from_admin'] = 'Usted no puede darse la función de administrador';

$lang['staff_dt_name']       = 'Nombre completo';
$lang['staff_dt_email']      = 'Email';
$lang['staff_dt_last_Login'] = 'Último acceso';
$lang['staff_dt_active']     = 'Activo';

$lang['staff_add_edit_firstname']             = 'Nombre de pila';
$lang['staff_add_edit_lastname']              = 'Apellido';
$lang['staff_add_edit_email']                 = 'Email';
$lang['staff_add_edit_phonenumber']           = 'Teléfono';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'departamentos miembro';
$lang['staff_add_edit_role']                  = 'Papel';
$lang['staff_add_edit_permissions']           = 'Permisos';
$lang['staff_add_edit_administrator']         = 'Administrador';
$lang['staff_add_edit_password']              = 'Contraseña';
$lang['staff_add_edit_password_note']         = 'Nota: Si rellena estos campos, la contraseña será cambiada en este miembro.';
$lang['staff_add_edit_password_last_changed'] = 'Contraseña cambió por última vez';
$lang['staff_add_edit_notes']                 = 'Notas';
$lang['staff_add_edit_note_description']      = 'Descripción nota';

$lang['staff_notes_table_description_heading'] = 'Nota';
$lang['staff_notes_table_addedfrom_heading']   = 'Desde añadido';
$lang['staff_notes_table_dateadded_heading']   = 'Fecha Agregada';

$lang['staff_admin_profile']         = 'Este es el perfil de administración';
$lang['staff_profile_notifications'] = 'Notificaciones';
$lang['staff_profile_departments']   = 'Departamentos';

$lang['staff_edit_profile_image']                     = 'Imagen de perfil';
$lang['staff_edit_profile_your_departments']          = 'Sus departamentos';
$lang['staff_edit_profile_change_your_password']      = 'cambia tu contraseña';
$lang['staff_edit_profile_change_old_password']       = 'Contraseña anterior';
$lang['staff_edit_profile_change_new_password']       = 'Nueva contraseña';
$lang['staff_edit_profile_change_repet_new_password'] = 'Repita la nueva contraseña';

# Surveys
$lang['new_survey']                    = 'Nueva encuesta';
$lang['surveys']                       = 'Encuestas';
$lang['survey']                        = 'Encuesta';
$lang['survey_lowercase']              = 'encuesta';
$lang['survey_no_mail_lists_selected'] = 'No hay listas de correo seleccionados';
$lang['survey_send_success_note']      = 'Todos los correos electrónicos de la encuesta ( %s) será envíados vía la Cron Job con intervalos de 5 minutos';
$lang['survey_result']                 = 'Resultado Encuesta: %s';
$lang['question_string']               = 'Pregunta';
$lang['question_field_string']         = 'Campo';

$lang['survey_list_view_tooltip']         = 'Ver resultados';
$lang['survey_list_view_results_tooltip'] = 'Ver resultados';

$lang['survey_add_edit_subject']                   = 'Sujetos de la encuesta';
$lang['survey_add_edit_email_description']         = 'Descripción encuesta (E-mail Descripción)';
$lang['survey_include_survey_link']                = 'Incluir enlace de la encuesta en la descripción';
$lang['survey_available_mail_lists_custom_fields'] = 'campos personalizados disponibles a partir de listas de correo electrónico';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Los campos personalizados se pueden utilizar para el editar el correo electrónico. CONSEJO: Haga clic en el editor de correo electrónico y, a continuación, seleccione en el menú desplegable para ser añadido de forma automática.';
$lang['survey_add_edit_short_description_view']    = 'Encuesta breve descripción (Ver descripción)';
$lang['survey_add_edit_from']                      = 'A partir de (desplegable en el correo electrónico)';
$lang['survey_add_edit_redirect_url']              = 'URL de redireccionamiento encuesta';
$lang['survey_add_edit_red_url_note']              = 'Cuando la encuesta ha acabado donde redirigir al usuario? (dejar en blanco para este sitio url)';
$lang['survey_add_edit_disabled']                  = 'Desabilitado';
$lang['survey_add_edit_only_for_logged_in']        = 'Sólo iniciar sesión para los participantes (personal, clientes)';
$lang['send_survey_string']                        = 'Enviar Encuesta';
$lang['survey_send_mail_list_clients']             = 'Clientes';
$lang['survey_send_mail_list_staff']               = 'Personal';
$lang['survey_send_mail_lists_string']             = 'Las listas de correo';
$lang['survey_send_mail_lists_note_logged_in']     = 'Nota: Si va a enviar la encuesta a las listas de correo sólo para los que inicien sesión los participantes tienen que estar sin marcar';
$lang['survey_send_string']                        = 'Enviar';

$lang['survey_send_to_total']  = 'Enviar a un total de %s mensajes de correo electrónico';
$lang['survey_send_till_now']  = 'Hasta ahora';
$lang['survey_send_finished']  = 'Enviar encuesta terminó: %s';
$lang['survey_added_to_queue'] = 'Se añade esta encuesta a la cola de Cron Job en %s';

$lang['survey_questions_string']          = 'Preguntas de la encuesta';
$lang['survey_insert_field']              = 'Insertar campo';
$lang['survey_field_checkbox']            = 'Caja';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Campo de entrada';
$lang['survey_field_textarea']            = 'Área de texto';
$lang['survey_question_required']         = 'Necesario';
$lang['survey_question_only_for_preview'] = 'Sólo para la vista previa';
$lang['survey_create_first']              = 'Es necesario crear la primera encuesta, entonces usted será capaz de insertar las preguntas.';


$lang['survey_dt_name']               = 'Nombre';
$lang['survey_dt_total_questions']    = 'Total de preguntas';
$lang['survey_dt_total_participants'] = 'Total de participantes';
$lang['survey_dt_date_created']       = 'Fecha de creacion';
$lang['survey_dt_active']             = 'Activo';

$lang['survey_text_questions_results'] = 'Resultado de las preguntas de la encuesta';
$lang['survey_view_all_answers']       = 'Ver todas las respuestas';

# Staff Tasks
$lang['new_task']       = 'Nueva tarea';
$lang['tasks']          = 'Tareas';
$lang['task']           = 'Tarea';
$lang['task_lowercase'] = 'tarea';
$lang['comment_string'] = 'Comentario';

$lang['task_marked_as_complete'] = 'Tarea marcada como completa';
$lang['task_follower_removed']   = 'Seguidor tarea eliminado exitosamente';
$lang['task_assignee_removed']   = 'El asignado a la tarea se ha eliminado exitosamente';

$lang['task_no_assignees'] = 'No hay asignados para esta tarea';
$lang['task_no_followers'] = 'Sin seguidores para esta tarea';

$lang['task_list_all']            = 'Todas';
$lang['task_list_finished']       = 'Terminado';
$lang['task_list_unfinished']     = 'Inconcluso';
$lang['task_list_not_assigned']   = 'No asignado';
$lang['task_list_duedate_passed'] = 'Debido fecha pasada';
$lang['tasks_dt_name']            = 'Nombre';

$lang['task_single_priority']               = 'Prioridad';
$lang['task_single_start_date']             = 'Fecha de inicio';
$lang['task_single_due_date']               = 'Fecha de vencimiento';
$lang['task_single_finished']               = 'Terminado';
$lang['task_single_mark_as_complete']       = 'Marcar como completa';
$lang['task_single_edit']                   = 'Editar';
$lang['task_single_delete']                 = 'Borrar';
$lang['task_single_assignees']              = 'Cesionarios';
$lang['task_single_assignees_select_title'] = 'Asignar tareas para';
$lang['task_single_followers']              = 'Seguidores';
$lang['task_single_followers_select_title'] = 'Añadir Seguidores';
$lang['task_single_insert_media_link']      = 'Insertar Media Link';
$lang['task_single_add_new_comment']        = 'Agregar comentario';

$lang['task_add_edit_subject']     = 'Tema';
$lang['task_add_edit_priority']    = 'Prioridad';
$lang['task_priority_low']         = 'Bajo';
$lang['task_priority_medium']      = 'Medio';
$lang['task_priority_high']        = 'Alto';
$lang['task_priority_urgent']      = 'Urgente';
$lang['task_add_edit_start_date']  = 'Fecha de inicio';
$lang['task_add_edit_due_date']    = 'Fecha de vencimiento';
$lang['task_add_edit_description'] = 'Descripción de la tarea';

# Taxes
$lang['new_tax']       = 'Nuevo impuesto';
$lang['taxes']         = 'Impuestos';
$lang['tax']           = 'Impuesto';
$lang['tax_lowercase'] = 'impuesto';
$lang['tax_dt_name']   = 'Nombre de Impuestos';
$lang['tax_dt_rate']   = 'Tasa (porcentaje)';

$lang['tax_add_edit_name'] = 'Nombre de Impuestos';
$lang['tax_add_edit_rate'] = 'Tasa de impuestos (por ciento)';
$lang['tax_edit_title']    = 'Editar Impuesto';
$lang['tax_add_title']     = 'Añadir nuevo impuesto';

# Ticket Statuses
$lang['new_ticket_status']       = 'Nuevo estado de tickets';
$lang['ticket_statuses']         = 'Los estados de tickets';
$lang['ticket_status']           = 'Estado del ticket';
$lang['ticket_status_lowercase'] = 'estado de los tickets';

$lang['ticket_statuses_dt_name']      = 'Nombre Estado del Ticket';
$lang['no_ticket_statuses_found']     = 'No se encontraron estados de los tickets';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Nombre Estado del Ticket';
$lang['ticket_status_add_edit_color'] = 'Seleccionar color';
$lang['ticket_status_add_edit_order'] = 'Estado de la orden';

# Todos
$lang['new_todo']                  = 'Tarea nueva';
$lang['my_todos']                  = 'Los artículos de Mis Tareas pendientes';
$lang['todo']                      = 'Tareas artículos';
$lang['todo_lowercase']            = 'Tareas';
$lang['todo_status_changed']       = 'Tarea ha cambiado de estado';
$lang['todo_add_title']            = 'Agregar nueva tarea';
$lang['add_new_todo_description']  = 'Descripción';
$lang['no_finished_todos_found']   = 'No se encontraron Tareas terminadas';
$lang['no_unfinished_todos_found'] = 'No se encontraron tareas';
$lang['unfinished_todos_title']    = 'Tareas sin terminar \s';
$lang['finished_todos_title']      = 'Tareas Acabadas Recientemente';

# Authentication
$lang['password_changed_email_subject']             = 'Su contraseña ha sido cambiada';
$lang['password_reset_email_subject']               = 'Restablecer la contraseña de %s';
# Utilities
$lang['utility_activity_log']                       = 'Registro de actividades';
$lang['utility_activity_log_filter_by_date']        = 'Filtrar por fecha';
$lang['utility_activity_log_dt_description']        = 'Descripción';
$lang['utility_activity_log_dt_date']               = 'Fecha';
$lang['utility_activity_log_dt_staff']              = 'Personal';
$lang['utility_calendar_new_event_title']           = 'Agregar un nuevo evento';
$lang['utility_calendar_new_event_start_date']      = 'Fecha de inicio';
$lang['utility_calendar_new_event_end_date']        = 'Fecha final';
$lang['utility_calendar_new_event_make_public']     = 'Hacer público';
$lang['utility_calendar_event_added_successfuly']   = 'Nuevo evento añadido con éxito';
$lang['utility_calendar_event_deleted_successfuly'] = 'Evento eliminado';
$lang['utility_calendar_new_event_placeholder']     = 'Título del evento';


# Navigation
$lang['nav_notifications']          = 'Notificaciones';
$lang['nav_my_profile']             = 'Mi perfil';
$lang['nav_edit_profile']           = 'Editar perfil';
$lang['nav_logout']                 = 'Cerrar sesión';
$lang['nav_no_notifications']       = 'No se encontraron notificaciones';
$lang['nav_view_all_notifications'] = 'Ver todas las notificaciones';
$lang['nav_customizer_tooltip']     = 'Personalización de la configuración';
$lang['nav_notifications_tooltip']  = 'Ver notificaciones';

## Clients
$lang['clients_required_field'] = 'Este campo es requerido';

# Footer
$lang['clients_copyright'] = 'Derechos de autor de %s';

# Announcements
$lang['clients_announcement_from']  = 'De:';
$lang['clients_announcement_added'] = 'Adicional:';

# Contracts
$lang['clients_contracts']               = 'Contratos';
$lang['clients_contracts_dt_subject']    = 'Tema';
$lang['clients_contracts_dt_start_date'] = 'Fecha de inicio';
$lang['clients_contracts_dt_end_date']   = 'Fecha final';

# Home
$lang['clients_quick_invoice_info']                = 'Rápida Información de Las facturas';
$lang['clients_home_currency_select_tooltip']      = 'Es necesario seleccionar la moneda por que usted tiene facturas con moneda diferente';
# Invoices
$lang['clients_invoice_html_btn_download'] = 'Descargar';

$lang['clients_my_invoices']        = 'Mis facturas';
$lang['clients_invoice_dt_number']  = 'Factura #';
$lang['clients_invoice_dt_date']    = 'Fecha';
$lang['clients_invoice_dt_duedate'] = 'Fecha de vencimiento';
$lang['clients_invoice_dt_amount']  = 'Cantidad';
$lang['clients_invoice_dt_status']  = 'Estado';

# Profile
$lang['clients_profile_heading'] = 'Perfil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Nombre de pila';
$lang['clients_lastname']  = 'Apellido';
$lang['clients_email']     = 'Dirección de correo electrónico';
$lang['clients_company']   = 'Empresa';
$lang['clients_vat']       = 'Número de valor agregado';
$lang['clients_phone']     = 'Teléfono';
$lang['clients_country']   = 'País';
$lang['clients_city']      = 'Ciudad';
$lang['clients_address']   = 'Dirección';
$lang['clients_zip']       = 'Cremallera';
$lang['clients_state']     = 'Estado';

# Used for edit profile and register END

$lang['clients_register_password']        = 'Contraseña';
$lang['clients_register_password_repeat'] = 'Repite la contraseña';
$lang['clients_edit_profile_update_btn']  = 'Actualizar';

$lang['clients_edit_profile_change_password_heading'] = 'Cambia la contraseña';
$lang['clients_edit_profile_old_password']            = 'Contraseña anterior';
$lang['clients_edit_profile_new_password']            = 'nueva contraseña';
$lang['clients_edit_profile_new_password_repeat']     = 'Repite la contraseña';
$lang['clients_edit_profile_change_password_btn']     = 'Cambia la contraseña';
$lang['clients_profile_last_changed_password']        = 'Contraseña últimos modificados %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Base de conocimiento';
$lang['clients_knowledge_base_articles_not_found'] = 'No hay artículos de la base de conocimientos encontrados';
$lang['clients_knowledge_base_find_useful']        = '¿Le ha resultado útil este artículo?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Sí';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'Se puede votar una vez en 24 horas';
$lang['clients_article_voted_thanks_for_feedback'] = 'Gracias por su colaboración';

# Tickets
$lang['clients_ticket_open_subject']                = 'Crear Ticket de Soporte';
$lang['clients_ticket_open_departments']            = 'Departamento';
$lang['clients_tickets_heading']                    = 'Tickets de Soporte';
$lang['clients_ticket_open_service']                = 'Servicio';
$lang['clients_ticket_open_priority']               = 'Prioridad';
$lang['clients_latest_tickets']                     = 'Las tickets más recientes';
$lang['clients_ticket_open_body']                   = 'Cuerpo de tickets';
$lang['clients_ticket_attachments']                 = 'Archivos adjuntos';
$lang['clients_ticket_posted']                      = 'Publicado: %s';
$lang['clients_single_ticket_string']               = 'Ticket';
$lang['clients_single_ticket_replied']              = 'Respondió: %s';
$lang['clients_single_ticket_informations_heading'] = 'Información sobre los tickets';

$lang['clients_tickets_dt_number']     = 'Ticket #';
$lang['clients_tickets_dt_subject']    = 'Tema';
$lang['clients_tickets_dt_department'] = 'Departamento';
$lang['clients_tickets_dt_service']    = 'Servicio';
$lang['clients_tickets_dt_status']     = 'Estado';
$lang['clients_tickets_dt_last_reply'] = 'última respuesta';


$lang['clients_ticket_single_department']        = 'Departamento: %s';
$lang['clients_ticket_single_submited']          = 'Inscrito: %s';
$lang['clients_ticket_single_status']            = 'Estado:';
$lang['clients_ticket_single_priority']          = 'Prioridad: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Añadir respuesta';
$lang['clients_ticket_single_add_reply_heading'] = 'Añadir respuesta a esta entrada';

# Login
$lang['clients_login_heading_no_register'] = 'Por favor Iniciar sesión';
$lang['clients_login_heading_register']    = 'Por favor, inicie sesión o regístrese';
$lang['clients_login_email']               = 'Dirección de correo electrónico';
$lang['clients_login_password']            = 'Contraseña';
$lang['clients_login_remember']            = 'Recuérdame';
$lang['clients_login_login_string']        = 'Iniciar sesión';

# Register
$lang['clients_register_string']  = 'Registro';
$lang['clients_register_heading'] = 'Registro';

# Navigation
$lang['clients_nav_login']     = 'Iniciar sesión';
$lang['clients_nav_register']  = 'Registro';
$lang['clients_nav_invoices']  = 'Facturas';
$lang['clients_nav_contracts'] = 'Contratos';
$lang['clients_nav_kb']        = 'Base de conocimiento';
$lang['clients_nav_profile']   = 'Perfil';
$lang['clients_nav_logout']    = 'Cerrar sesión';

# Datatables
$lang['clients_dt_paginate_first']    = 'Primero';
$lang['clients_dt_paginate_last']     = 'Último';
$lang['clients_dt_paginate_next']     = 'Siguiente';
$lang['clients_dt_paginate_previous'] = 'Anterior';
$lang['clients_dt_empty_table']       = 'No {0} encontrado';
$lang['clients_dt_search']            = 'Buscar:';
$lang['clients_dt_zero_records']      = 'No se encontraron coincidencias';
$lang['clients_dt_loading_records']   = 'Cargando...';
$lang['clients_dt_length_menu']       = 'Muéstrame el menu_';
$lang['clients_dt_info_filtered']     = '(Filtrado de _MAX_ total de {0})';
$lang['clients_dt_info_empty']        = 'Mostrando 0 al 0 de 0 {0}';
$lang['clients_dt_info']              = 'Mostrando desde _START_ hasta _END_ de _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'No {0} encontrado';
$lang['clients_dt_sort_ascending']    = 'Activar para ordenar la columna ascendente';
$lang['clients_dt_sort_descending']   = 'Activar para ordenar la columna descendente';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Recibo de pago';
$lang['payment_for_string']                            = 'Pago por';
$lang['payment_date']                                  = 'Fecha de pago:';
$lang['payment_view_mode']                             = 'Modo de pago:';
$lang['payment_total_amount']                          = 'Cantidad total';
$lang['payment_table_invoice_number']                  = 'Número de factura';
$lang['payment_table_invoice_date']                    = 'Fecha de la factura';
$lang['payment_table_invoice_amount_total']            = 'Importe de la factura';
$lang['payment_table_payment_amount_total']            = 'Monto del pago';
$lang['payments_table_transaction_id']                 = 'ID de transacción: %s';
$lang['payment_getaway_token_not_found']               = 'Pasarella de pago no encontrada';
$lang['online_payment_recorded_success']               = 'Pago registrado con éxito';
$lang['online_payment_recorded_success_fail_database'] = 'El pago se realiza correctamente pero no se pudo insertar el pago en la base de datos, por favor, contacta al administrador';

# Leads
$lang['lead_convert_to_client']                   = 'Convertir a cliente';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'Nombre de pila';
$lang['lead_convert_to_client_lastname']          = 'Apellido';
$lang['lead_email_already_exists']                = 'El correo electrónico prospecto ya existe en los datos de los clientes';
$lang['lead_to_client_base_converted_success']    = 'El prospecto se ha convertido a cliente exitosamente';
$lang['lead_already_converted']                   = 'Convertido a cliente';
$lang['lead_have_client_profile']                 = 'Este prospecto tiene un perfil de cliente.';
$lang['lead_converted_edit_client_profile']       = 'Editar perfil';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Ver factura como cliente';
$lang['invoice_add_edit_recurring']                                           = 'Facturas Recurrentes?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Cada %s mes';
$lang['invoice_add_edit_recurring_months']                                    = 'Cada %s meses';
$lang['invoices_list_all']                                                    = 'Todas';
$lang['invoices_list_not_sent']                                               = 'Facturas no enviadas';
$lang['invoices_list_not_have_payment']                                       = 'Facturas con ningún registro de pago';
$lang['invoices_list_recuring']                                               = 'Las facturas recurrentes';
$lang['invoices_list_made_payment_by']                                        = 'Pago realizado por %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Crear la siguiente factura recurrente aunque la anterior no haya sido pagada';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = '¿Crear la siguiente factura recurrente aunque la anterior no haya sido pagada?';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Enviar automáticamente la factura de renovacion para el cliente';
$lang['view_invoice_pdf_link_pay']                                            = 'Factura de pago';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Cuentas bancarias / Descripción';
$lang['payment_mode_add_edit_description_tooltip'] = 'Se puede establecer aquí la información de cuentas bancarias. Se mostrará en HTML Factura';
$lang['payment_modes_dt_description']              = 'Cuentas bancarias / Descripción';
$lang['payment_modes_add_edit_announcement']       = 'Nota: Los modos de pago que figuran a continuación son los modos offline. Los modos de pago en línea se pueden configurar en Preferencias->pasarelas de pago';
$lang['payment_mode_add_edit_active']              = 'Activo';
$lang['payment_modes_dt_active']                   = 'Activo';

# Contracts
$lang['contract_not_found'] = 'Contrato no encontrado. Tal vez se ha eliminado, verifique el registro de actividades';

# Settings
$lang['setting_bar_heading']                 = 'Preparar';
$lang['settings_group_online_payment_modes'] = 'Pasarela de pago';
$lang['settings_paymentmethod_mode_label']   = 'Etiqueta';
$lang['settings_paymentmethod_active']       = 'Activo';
$lang['settings_paymentmethod_currencies']   = 'Coma Separado Monedas';
$lang['settings_paymentmethod_testing_mode'] = 'Habilitar el Modo de prueba';

$lang['settings_paymentmethod_paypal_username']  = 'PayPal API nombre de usuario';
$lang['settings_paymentmethod_paypal_password']  = 'PayPal API contraseña';
$lang['settings_paymentmethod_paypal_signature'] = 'Firma API';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Raya API clave secreta';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Raya clave publica';
$lang['settings_limit_top_search_bar_results']             = 'Limite de los resultados de la barra de busqueda';

# Quick Actions
$lang['qa_create_invoice']  = 'Crear Factura';
$lang['qa_create_task']     = 'Crear Tarea';
$lang['qa_create_client']   = 'Crear Cliente';
$lang['qa_create_contract'] = 'Crear Contrato';
$lang['qa_create_kba']      = 'Crear Artículo en la Base de Conocimientos';
$lang['qa_create_survey']   = 'Crear Encuesta';
$lang['qa_create_ticket']   = 'Crear Ticket de Soporte';
$lang['qa_create_staff']    = 'Crear Empleado';

## Clients
$lang['client_phonenumber'] = 'Teléfono';

# Main Clients
$lang['clients_register']                          = 'Registro';
$lang['clients_profile_updated']                   = 'Tu perfil ha sido actualizado';
$lang['clients_successfully_registered']           = 'Gracias por su registro';
$lang['clients_account_created_but_not_logged_in'] = 'Su cuenta ha sido creada, pero no ha entrado en nuestro sistema de forma automática. Por favor, intente iniciar la sesión';
# Tickets
$lang['clients_tickets_heading']                   = 'Tickets de Soporte Técnico';

# Payments
// Uses on stripe page';
$lang['payment_for_invoice'] = 'El pago de la factura';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Pago en línea';
$lang['invoice_html_online_payment_button_text'] = 'Pague ahora';
$lang['invoice_html_payment_modes_not_selected'] = 'Por favor, seleccione el modo de pago';
$lang['invoice_html_amount_blank']               = 'La cantidad total no puedo estar en blanco o vacia';
$lang['invoice_html_offline_payment']            = 'El pago en línea';
$lang['invoice_html_amount']                     = 'Cantidad';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Visibilidad';
$lang['dt_button_reload']             = 'Actualizar';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Impresión';
$lang['is_not_active_export']         = 'No';
$lang['is_active_export']             = 'Sí';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Opciones avanzadas';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Modos de pago permitidos para esta factura';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Facturas recurrentes de esta factura';
$lang['invoice_add_edit_no_payment_modes_found']         = 'No se encontraron modos de pago.';
$lang['invoice_html_total_pay']                          = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Nombre de la plantilla';
# General
$lang['discount_type']                      = 'Tipo de descuento';
$lang['discount_type_after_tax']            = 'Despues del impuesto';
$lang['discount_type_before_tax']           = 'Antes de los impuestos';
$lang['terms_and_conditions']               = 'Términos y condiciones';
$lang['reference_no']                       = 'Referencia #';
$lang['no_discount']                        = 'Sin descuento';
$lang['view_stats_tooltip']                 = 'Ver Estadísticas Rápidas';
# Clients
$lang['zip_from_date']                      = 'De la fecha:';
$lang['zip_to_date']                        = 'Hasta la fecha:';
$lang['client_zip_payments']                = 'Los pagos ZIP';
$lang['client_zip_invoices']                = 'Las facturas ZIP';
$lang['client_zip_estimates']               = 'Las presupuestos ZIP';
$lang['client_zip_status']                  = 'Estado';
$lang['client_zip_status_all']              = 'Todas';
$lang['client_zip_payment_modes']           = 'Pago realizado por';
$lang['client_zip_no_data_found']           = 'No se han encontrado %s';

# Payments
$lang['payment_mode']         = 'Modo de pago';
$lang['payment_view_heading'] = 'Pago';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Permitir al cliente para modificar la cantidad a pagar (para pagos en línea)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'La cantidad de mensajes de correo electrónico enviados por el CRON Job (encuestas)';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Esta opción se utiliza cuando se envía encuestas. La Encuesta de cron Job se ejecuta cada 5 minutos. Puede establecer la cantidad de correo electrónico que se envía cada 5 minutos';
$lang['settings_delete_only_on_last_invoice']                       = 'Eliminar factura permitido sólomente en la última factura';
$lang['settings_sales_estimate_prefix']                             = 'Formato de Número de presupuesto';
$lang['settings_sales_next_estimate_number']                        = 'Siguiente Número de presupuesto';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Establecer este campo a 1 si desea empezar de inicio';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Número de presupuesto de disminucion cuando borra';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = '¿Quieres disminuir el número de presupuesto cuando se elimina la última Presupuesto? Ex. Si se establece esta opción en Sí (antes)la Presupuesto borra el siguiente número de presupuesto es de 15 el siguiente número presupuesto disminuirá a 14 para la siguiente Presupuesto si se establece en NO el número permanecerá en 15';
$lang['settings_sales_estimate_number_format']                      = 'Formato de número de presupuesto';
$lang['settings_sales_estimate_number_format_year_based']           = 'Año de base';
$lang['settings_sales_estimate_number_format_number_based']         = 'Número de base(000001)';
$lang['settings_sales_estimate_year']                               = 'presupuesto año (AAAA / 000001)';
$lang['settings_sales_estimate_year_tooltip']                       = 'año Presupuesto actual. Restablecer este cuando llega un nuevo año.';
$lang['settings_delete_only_on_last_estimate']                      = 'Eliminar Presupuesto, permitido sólo en la última factura';
$lang['settings_cron_invoice_heading']                              = 'Factura';
$lang['settings_send_test_email_heading']                           = 'Enviar correo electrónico de prueba';
$lang['settings_send_test_email_subheading']                        = 'Enviar correo electrónico de prueba para asegurarse de que la configuración de SMTP se ha establecido correctamente.';
$lang['settings_send_test_email_string']                            = 'Dirección de correo electrónico';
$lang['settings_smtp_settings_heading']                             = 'Configuración de SMTP';
$lang['settings_smtp_settings_subheading']                          = 'Configuración de correo electrónico principal';
$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Factura';
$lang['settings_sales_heading_estimates']                           = 'Presupuestos';
$lang['settings_sales_heading_company']                             = 'Empresa';
$lang['settings_sales_cron_invoice_heading']                        = 'Factura';

# Tasks
$lang['tasks_dt_datestart'] = 'fecha de inicio';
$lang['tasks_dt_priority']  = 'Prioridad';

# Invoice General
$lang['invoice_discount'] = 'Descuento';

# Tickets
$lang['ticket_settings_client'] = 'Cliente';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL área de administración (de derecha a izquierda) BETA';
$lang['settings_rtl_support_client']                                  = 'RTL Área del Cliente (derecha a izquierda) BETA';
$lang['acs_language_editor']                                          = 'Editor de idiomas';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convertir la Presupuesto a factura después de aceptar al cliente';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Excluir las presupuestos con el estado de basura del área del cliente';

# Months
$lang['January']   = 'Enero';
$lang['February']  = 'Febrero';
$lang['March']     = 'Marzo';
$lang['April']     = 'Abril';
$lang['May']       = 'Mayo';
$lang['June']      = 'Junio';
$lang['July']      = 'Julio';
$lang['August']    = 'Agosto';
$lang['September'] = 'Septiembre';
$lang['October']   = 'Octubre';
$lang['November']  = 'Noviembre';
$lang['December']  = 'Diciembre';

# Time ago function translate
$lang['time_ago_just_now']  = 'Justo ahora';
$lang['time_ago_minute']    = 'Hace un minuto';
$lang['time_ago_minutes']   = 'Hace %s minutos';
$lang['time_ago_hour']      = 'Hace una hora';
$lang['time_ago_hours']     = 'Hace %s hrs';
$lang['time_ago_yesterday'] = 'ayer';
$lang['time_ago_days']      = 'Hace %s días';
$lang['time_ago_week']      = 'Hace una semana';
$lang['time_ago_weeks']     = 'Hace %s semanas';
$lang['time_ago_month']     = 'Hace un mes';
$lang['time_ago_months']    = 'Hace %s meses';
$lang['time_ago_year']      = 'Hace un año';
$lang['time_ago_years']     = 'Hace %s años';


# Estimates
$lang['estimates']                          = 'Estimaciones';
$lang['estimate']                           = 'Estimar';
$lang['estimate_lowercase']                 = 'estimar';
$lang['create_new_estimate']                = 'Crear Presupuesto';
$lang['view_estimate']                      = 'Ver Presupuesto';
$lang['estimate_sent_to_client_success']    = 'La Presupuesto ha sido enviada con éxito al cliente';
$lang['estimate_sent_to_client_fail']       = 'Problema al enviar la Presupuesto';
$lang['estimate_reminder_send_problem']     = 'Problema con la Presupuesto al enviar recordatorio de retraso';
$lang['estimate_details']                   = 'Presupuesto Detalles';
$lang['estimate_view']                      = 'Ver Presupuesto';
$lang['estimate_select_customer']           = 'Cliente';
$lang['estimate_add_edit_number']           = 'Número presupuesto';
$lang['estimate_add_edit_date']             = 'Presupuesto Fecha';
$lang['estimate_add_edit_expirydate']       = 'Fecha de caducidad';
$lang['estimate_add_edit_currency']         = 'Moneda';
$lang['estimate_add_edit_client_note']      = 'Nota cliente';
$lang['estimate_add_edit_admin_note']       = 'admin Nota';
$lang['estimate_add_edit_new_item']         = 'Nuevo artículo';
$lang['estimate_add_edit_search_item']      = 'búsqueda Artículos';
$lang['estimates_toggle_table_tooltip']     = 'Ver Tabla Completa';
$lang['estimate_add_edit_advanced_options'] = 'Opciones avanzadas';
$lang['estimate_vat']                       = 'Número de valor agregado';
$lang['estimate_to']                        = 'A';
$lang['estimates_list_all']                 = 'Todas';

$lang['estimate_invoiced_date']                  = 'Presupuesto Facturas en %s';
$lang['edit_estimate_tooltip']                   = 'Editar Presupuesto';
$lang['delete_estimate_tooltip']                 = 'Eliminar Presupuesto';
$lang['estimate_sent_to_email_tooltip']          = 'Envía por email';
$lang['estimate_already_send_to_client_tooltip'] = 'Esta Presupuesto ya se envío al cliente %s';
$lang['send_overdue_notice_tooltip']             = 'Enviar aviso de vencimiento';
$lang['estimate_view_activity_tooltip']          = 'Registro de actividades';

$lang['estimate_send_to_client_modal_heading']    = 'Enviar esta Presupuesto al cliente';
$lang['estimate_send_to_client_attach_pdf']       = 'Adjuntar Presupuesto PDF';
$lang['estimate_send_to_client_preview_template'] = 'Vista previa de plantilla de correo electrónico';

$lang['estimate_dt_table_heading_number']     = 'Presupuesto #';
$lang['estimate_dt_table_heading_date']       = 'Fecha';
$lang['estimate_dt_table_heading_client']     = 'Cliente';
$lang['estimate_dt_table_heading_expirydate'] = 'Fecha de caducidad';
$lang['estimate_dt_table_heading_amount']     = 'Cantidad';
$lang['estimate_dt_table_heading_status']     = 'Estado';

$lang['estimate_email_link_text']    = 'Ver Presupuesto';
$lang['estimate_convert_to_invoice'] = 'Convertir a Factura';
# Home
$lang['home_unfinished_tasks']       = 'Tareas Pendientes';

# Clients
$lang['client_estimates_tab'] = 'Presupuestos';
$lang['client_payments_tab']  = 'pagos';


# Estimate General
$lang['estimate_pdf_heading']            = 'ESTIMAR';
$lang['estimate_table_item_heading']     = 'Artículo';
$lang['estimate_table_quantity_heading'] = 'Cantidad';
$lang['estimate_table_rate_heading']     = 'Tarifa';
$lang['estimate_table_tax_heading']      = 'Impuesto';
$lang['estimate_table_amount_heading']   = 'Cantidad';
$lang['estimate_subtotal']               = 'Sub total';
$lang['estimate_adjustment']             = 'Ajuste';
$lang['estimate_discount']               = 'Descuento';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'A';
$lang['estimate_data_date']              = 'Presupuesto Fecha';
$lang['estimate_data_expiry_date']       = 'Fecha de caducidad';
$lang['estimate_note']                   = 'Nota:';
$lang['estimate_status_draft']           = 'Borrador';
$lang['estimate_status_sent']            = 'Expedido';
$lang['estimate_status_declined']        = 'Declinada';
$lang['estimate_status_accepted']        = 'Aceptado';
$lang['estimate_status_expired']         = 'Expirado';
$lang['estimate_note']                   = 'Nota:';

# Quick create
$lang['qa_create_estimate'] = 'Crear Presupuesto';
$lang['qa_create_lead']     = 'Crear Propuesta';


## Clients
$lang['clients_estimate_dt_number']             = 'Presupuesto #';
$lang['clients_estimate_dt_date']               = 'Fecha';
$lang['clients_estimate_dt_duedate']            = 'Fecha de caducidad';
$lang['clients_estimate_dt_amount']             = 'Cantidad';
$lang['clients_estimate_dt_status']             = 'Estado';
$lang['clients_nav_estimates']                  = 'Presupuestos';
$lang['clients_decline_estimate']               = 'Disminución';
$lang['clients_accept_estimate']                = 'Aceptar';
$lang['clients_my_estimates']                   = 'Presupuestos';
$lang['clients_estimate_invoiced_successfuly']  = 'Presupuesto Aceptado. Aquí está la factura de esta Presupuesto';
$lang['clients_estimate_accepted_not_invoiced'] = 'Gracias por aceptar esta Presupuesto';
$lang['clients_estimate_declined']              = 'Presupuesto declinada. Puede aceptar la Presupuesto en cualquier momento antes de la fecha de caducidad';
$lang['clients_estimate_failed_action']         = 'No se pudo tomar una decisión sobre esta Presupuesto';
$lang['client_add_edit_profile']                = 'Perfil';

# Version 1.0.3
# Admin
# Home
$lang['home_invoice_not_sent']        = 'Facturas no enviadas';
$lang['home_expired_estimates']       = 'Presupuestos Caducados';
$lang['home_invoice_overdue']         = 'Facturas Vencidas';
$lang['home_payments_received_today'] = 'Pagos Recibidos Hoy';

# Reports

# Custom Fields
$lang['custom_field']                          = 'Campo personalizado';
$lang['custom_field_lowercase']                = 'campo personalizado';
$lang['custom_fields']                         = 'Campos Personalizados';
$lang['custom_fields_lowercase']               = 'campos personalizados';
$lang['new_custom_field']                      = 'Nuevo campo personalizado';
$lang['custom_field_name']                     = 'Nombre del campo';
$lang['custom_field_add_edit_type']            = 'Tipo';
$lang['custom_field_add_edit_belongs_top']     = 'El campo pertenece a';
$lang['custom_field_add_edit_options']         = 'Opciones';
$lang['custom_field_add_edit_options_tooltip'] = 'Utilice únicamente para ciertos tipos. Rellene el campo las Opciones mediante la separación de coma. Ex. manzana, naranja, plátano';
$lang['custom_field_add_edit_order']           = 'Orden';

$lang['custom_field_dt_field_to']       = 'Pertenece a';
$lang['custom_field_dt_field_name']     = 'Nombre';
$lang['custom_field_dt_field_type']     = 'Tipo';
$lang['custom_field_add_edit_active']   = 'Activo';
$lang['custom_field_add_edit_disabled'] = 'Discapacitado';

# Ticket replies
$lang['ticket_reply']           = 'Respuesta de tickets';
$lang['ticket_reply_lowercase'] = 'respuesta de tickets';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Campos Personalizados';

# Contracts
$lang['contract_types']          = 'Tipos de contratos';
$lang['contract_type']           = 'Tipo de contrato';
$lang['new_contract_type']       = 'Nuevo Tipo de contrato';
$lang['contract_type_lowercase'] = 'contrato';
$lang['contract_type_name']      = 'Nombre';

$lang['contract_types_list_name'] = 'tipo de contrato';

# Customizer Menu
$lang['acs_contracts']      = 'Contratos';
$lang['acs_contract_types'] = 'Tipos de contratos';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Descripción larga';
# Customers
$lang['client_delete_invoices_warning']    = 'Este cliente tiene facturas o presupuestos en su cuenta. Usted no puede eliminar este cliente. Cambie todas las facturas a otro cliente y a continuación, elimine.';
$lang['clients_list_phone']                = 'Teléfono';
$lang['client_expenses_tab']               = 'Gastos';
$lang['customers_summary']                 = 'Resumen de los Clientes';
$lang['customers_summary_active']          = 'Activo';
$lang['customers_summary_inactive']        = 'Inactivos';
$lang['customers_summary_logged_in_today'] = 'Conectados actualmente';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Dirección de correo electrónico';
$lang['admin_auth_forgot_password_heading']           = 'Se te olvidó tu contraseña';
$lang['admin_auth_login_heading']                     = 'Iniciar sesión';
$lang['admin_auth_login_email']                       = 'Dirección de correo electrónico';
$lang['admin_auth_login_password']                    = 'Contraseña';
$lang['admin_auth_login_remember_me']                 = 'Recuérdame';
$lang['admin_auth_login_button']                      = 'Iniciar sesión';
$lang['admin_auth_login_fp']                          = '¿Se te olvidó tu contraseña?';
$lang['admin_auth_reset_password_heading']            = 'Restablecer la contraseña';
$lang['admin_auth_reset_password']                    = 'Contraseña';
$lang['admin_auth_reset_password_repeat']             = 'Repite la contraseña';
$lang['admin_auth_invalid_email_or_password']         = 'correo electrónico o contraseña no válidos';
$lang['admin_auth_inactive_account']                  = 'Cuenta inactiva';
# Calender
$lang['calendar_estimate']                            = 'Estimar';
$lang['calendar_invoice']                             = 'Factura';
$lang['calendar_contract']                            = 'Contrato';
$lang['calendar_customer_reminder']                     = 'Recordatorio del cliente';
$lang['calendar_event']                               = 'Evento';
$lang['calendar_task']                                = 'Tarea';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'eliminar prospecto';
$lang['lead_attachments']                             = 'Archivos adjuntos';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Estimaciones';
# Settings
$lang['new_company_field_info']                       = 'Este campo se mostrará en las facturas / presupuestos sobre el equipo de la compañía (izquierda). No se le permite añadir cualquier carácter (puntos, guiones, signos, etc.) en el campo NOMBRE.';
$lang['new_company_field_name']                       = 'Nombre del campo';
$lang['new_company_field_value']                      = 'campo Valor';
$lang['new_company_field']                            = 'Agregar nuevo campo a la empresa';
$lang['settings_number_padding_invoice_and_estimate'] = 'Factura / Número presupuesto de cero relleno \s. <br/> <small> Ex. Si este valor es el número 3 será formateado: 005 o 025 </small>';
$lang['settings_show_sale_agent_on_invoices']         = 'Mostrar el comercial en la factura';
$lang['settings_show_sale_agent_on_estimates']        = 'Mostrar el comercial en Presupuesto';
$lang['settings_predefined_predefined_term']          = 'Términos y condiciones predefinidos';
$lang['settings_predefined_clientnote']               = 'Nota cliente predefinido';
$lang['settings_custom_pdf_logo_image_url']           = 'PDF personalizado Compania Logo URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Probablemente va a tener problemas con las imágenes PNG con transparencia que se manejan en forma diferente dependiendo de la php-imagick o la versión de php-gd utilizado. Intente actualizar php-imagick y desactivar php-gd
. SI deja este campo en blanco el logo por defecto sera usado.';

# General
$lang['sale_agent_string']               = 'Comercial';
$lang['amount_display_in_base_currency'] = 'Cantidad se muestra en su moneda base';

# Leads
$lang['leads_summary']                                         = 'Resumen de prospectos';

# Contracts
$lang['contract_value']                 = 'Valor del contrato';
$lang['contract_trash']                 = 'Basura';
$lang['contracts_view_trash']           = 'vista de los Basura';
$lang['contracts_view_all']             = 'Todas';
$lang['contracts_view_exclude_trashed'] = 'Excluir los contratos basura';
$lang['contract_value_tooltip']         = 'Añadir valor del contrato. El valor se mostrará en su moneda base.';
$lang['contract_trash_tooltip']         = 'Si agrega contrato como basura, no será mostrado en el lado del cliente, no será incluido en el tablero y otras estadísticas y también por defecto suele ser mostrado cuando se mostrará una lista de todos los contratos.';

$lang['contract_renew_heading']               = 'Renovar contrato';
$lang['contract_summary_heading']             = 'Resumen de contrato';
$lang['contract_summary_expired']             = 'Expirado';
$lang['contract_summary_active']              = 'Activo';
$lang['contract_summary_about_to_expire']     = 'A punto de caducar';
$lang['contract_summary_recently_added']      = 'Recientemente añadido';
$lang['contract_summary_trash']               = 'Basura';
$lang['contract_summary_by_type']             = 'Contratos por tipo';
$lang['contract_summary_by_type_value']       = 'Pedidos abiertos por valor de Tipo';
$lang['contract_renewed_successfuly']         = 'Contrato renovado exitosamente';
$lang['contract_renewed_fail']                = 'Problema al renovar el contrato. Contactar con el administrador';
$lang['no_contract_renewals_found']           = 'Las renovaciones de los contratos de esta no se encuentra';
$lang['no_contract_renewals_history_heading'] = 'Renovación de Contrato Historia';
$lang['contract_renewed_by']                  = '%s renovado este contrato';
$lang['contract_renewal_deleted']             = 'Renovación eliminada con éxito';
$lang['contract_renewal_delete_fail']         = 'No se pudo eliminar la renovación del contrato. Contactar con el administrador';

$lang['contract_renewal_new_value'] = 'Nuevo valor del contrato: %s';
$lang['contract_renewal_old_value'] = 'Antiguo Contrato Valor: %s';

$lang['contract_renewal_new_start_date'] = 'Nueva Fecha de Inicio:% ​​s';
$lang['contract_renewal_old_start_date'] = 'Fecha de inicio del contrato de edad fue: %s';

$lang['contract_renewal_new_end_date'] = 'Nueva Fecha de finalización: %s';
$lang['contract_renewal_old_end_date'] = 'La fecha de finalización del contrato fue: %s';
$lang['contract_attachment']           = 'Adjunto archivo';
$lang['contract_attachment_lowercase'] = 'adjunto archivo';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Objetivos de seguimiento';
$lang['als_expenses']           = 'Gastos';
$lang['als_reports_expenses']   = 'Gastos';
$lang['als_expenses_vs_income'] = 'Gastos vs Ingresos';

# Invoices
$lang['invoice_attach_file']           = 'Adjuntar archivo';
$lang['invoice_mark_as_sent']          = 'Marcar como Enviado';
$lang['invoice_marked_as_sent']        = 'Factura marcado como enviado con éxito';
$lang['invoice_marked_as_sent_failed'] = 'Error al marcar la factura en que fue enviado';

# Quick Actions
$lang['qa_new_goal']    = 'Nueva Meta';
$lang['qa_new_expense'] = 'Registrar Gasto';

# Goals Tracking
$lang['goals']                                         = 'Metas';
$lang['goal']                                          = 'Meta';
$lang['goals_tracking']                                = 'objetivos de seguimiento';
$lang['new_goal']                                      = 'Nueva Meta';
$lang['goal_lowercase']                                = 'Meta';
$lang['goal_start_date']                               = 'Fecha de inicio';
$lang['goal_end_date']                                 = 'Fecha final';
$lang['goal_subject']                                  = 'Tema';
$lang['goal_description']                              = 'Descripción';
$lang['goal_type']                                     = 'Tipo de objetivo';
$lang['goal_achievement']                              = 'Logro';
$lang['goal_contract_type']                            = 'tipo de contrato';
$lang['goal_notify_when_fail']                         = 'Notificar a los miembros del personal cuando no logró alcanzar una meta';
$lang['goal_notify_when_achieve']                      = 'Notificar a los miembros del personal cuando se alcanza una meta';
$lang['goal_progress']                                 = 'Progreso';
$lang['goal_total']                                    = 'Total: %s';
$lang['goal_result_heading']                           = 'Progreso de la meta';
$lang['goal_income_shown_in_base_currency']            = 'Los ingresos totales se muestra en la divisa de base';
$lang['goal_notify_when_end_date_arrives']             = 'Los miembros del personal serán notificados cuando llega la fecha de finalización.';
$lang['goal_staff_members_notified_about_achievement'] = 'Los miembros del personal son notificados acerca de este logro de la meta';
$lang['goal_staff_members_notified_about_failure']     = 'Algunos miembros del personal son notificados sobre el fracaso';
$lang['goal_notify_staff_manualy']                     = 'Notificar a los Miembros del Personal manualmente';
$lang['goal_notify_staff_notified_manualy_success']    = 'Los miembros del personal son notificados acerca del resultado de la meta';
$lang['goal_notify_staff_notified_manualy_fail']       = 'No se ha podido notificar a los miembros del personal acerca del resultado de la meta';

$lang['goal_achieved'] = 'Conseguido';
$lang['goal_failed']   = 'Ha fallado';
$lang['goal_close']    = 'Muy cerca';

$lang['goal_type_total_income']                                         = 'Total de recetas logradas';
$lang['goal_type_convert_leads']                                        = 'Convertir X prospectos';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Aumentar el número de clientes';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Converion excluida del prospecto';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Aumentar el número de clientes';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'conversion de prospecto permitida';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Hacer contratos por Tipo';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Se calcula a partir de la fecha añadido a la base de datos';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Hacer contratos por Tipo';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Se calcula a partir de la fecha de inicio del contrato';
$lang['goal_type_total_estimates_converted']                         = 'X presupuestos de conversiones';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Se tomará sólo presupuestos que se convertirán en facturas';
$lang['goal_type_income_subtext']                                    = 'Los ingresos se calcularán en su moneda base (no convertido)';
# Payments
$lang['payment_transaction_id']                                      = 'ID de transacción';
# Settings Menu
$lang['acs_expenses']                                                = 'Gastos';
$lang['acs_expense_categories']                                      = 'gastos Categorías';
# Expeneses
$lang['expense_category']                                            = 'Categoría del gasto';
$lang['expense_category_lowercase']                                  = 'categoría de gastos';
$lang['new_expense']                                                 = 'Registrar Gasto';
$lang['expense_add_edit_name']                                       = 'nombre de la categoría';
$lang['expense_add_edit_description']                                = 'Descripción de categoría';
$lang['expense_categories']                                          = 'Categorías de gastos';
$lang['new_expense_category']                                        = 'Nueva categoría';
$lang['dt_expense_description']                                      = 'Descripción';
$lang['expense']                                                     = 'Gastos';
$lang['expenses']                                                    = 'Gastos';
$lang['expense_lowercase']                                           = 'gastos';
$lang['expense_add_edit_tax']                                        = 'Impuesto';
$lang['expense_add_edit_customer']                                   = 'Cliente';
$lang['expense_add_edit_currency']                                   = 'Moneda';
$lang['expense_add_edit_note']                                       = 'Nota';
$lang['expense_add_edit_date']                                       = 'Fecha de gastos';
$lang['expense_add_edit_amount']                                     = 'Cantidad';
$lang['expense_add_edit_billable']                                   = 'facturable';
$lang['expense_add_edit_attach_receipt']                             = 'adjuntar recibo de pago';
$lang['expense_add_edit_reference_no']                               = 'Referencia #';
$lang['expense_receipt']                                             = 'Recibo de gastos';
$lang['expense_receipt_lowercase']                                   = 'recibo de expensas';
$lang['expense_dt_table_heading_category']                           = 'Categoría';
$lang['expense_dt_table_heading_amount']                             = 'Cantidad';
$lang['expense_dt_table_heading_date']                               = 'Fecha';
$lang['expense_dt_table_heading_reference_no']                       = 'Referencia #';
$lang['expense_dt_table_heading_customer']                           = 'Cliente';
$lang['expense_dt_table_heading_payment_mode']                       = 'Modo de pago';
$lang['expense_converted_to_invoice']                                = 'Gasto convertido a factura';
$lang['expense_converted_to_invoice_fail']                           = 'No se pudo convertir este gasto a factura comprobar el registro de errores.';
$lang['expense_copy_success']                                        = 'El gasto se copió con éxito.';
$lang['expense_copy_fail']                                           = 'No se pudo copiar gasto. Por favor, compruebe los campos necesarios y vuelva a intentarlo';
$lang['expenses_list_all']                                           = 'Todas';
$lang['expenses_list_billable']                                      = 'facturable';
$lang['expenses_list_non_billable']                                  = 'No facturable';
$lang['expenses_list_invoiced']                                      = 'Facturado';
$lang['expenses_list_unbilled']                                      = 'no facturados';
$lang['expenses_list_recurring']                                     = 'Periódico';
$lang['expense_invoice_delete_not_allowed']                          = 'Usted no puede eliminar este gasto. El gasto ya se ha facturado.';
$lang['expense_convert_to_invoice']                                  = 'Convertir a la factura';
$lang['expense_edit']                                                = 'Edición de gastos';
$lang['expense_delete']                                              = 'Borrar';
$lang['expense_copy']                                                = 'Copia';
$lang['expense_invoice_not_created']                                 = 'No se ha creado la factura';
$lang['expense_billed']                                              = 'facturado';
$lang['expense_not_billed']                                          = 'no facturados';
$lang['expense_customer']                                            = 'Cliente';
$lang['expense_note']                                                = 'Nota:';
$lang['expense_date']                                                = 'Fecha:';
$lang['expense_ref_noe']                                             = '# Ref:';
$lang['expense_tax']                                                 = 'Impuesto:';
$lang['expense_amount']                                              = 'Cantidad:';
$lang['expense_recurring_indicator']                                 = 'Periódico';
$lang['expense_already_invoiced']                                    = 'Este gasto ya se factura';
$lang['expense_recurring_auto_create_invoice']                       = 'Creación automática de facturas';
$lang['expense_recurring_send_custom_on_renew']                      = 'Enviar la factura al cliente por correo electrónico cuando el gasto se repite';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Si esta opción está marcada la factura para el cliente se ha creado automáticamente cuando se renovó el gasto.';
$lang['report_expenses_full']                                        = 'Resumen Completo';
$lang['expenses_yearly_by_categories']                               = 'Los gastos anuales por Categorías';
$lang['total_expenses_for']                                          = 'Los gastos totales por // año ';
$lang['expenses_report_for']                                         = 'Los gastos por // año';
$lang['expense_report_info']                                         = 'los gastos facturables no están incluidos en el informe.';
# Custom fields
$lang['custom_field_required']                                       = 'Necesario';
$lang['custom_field_show_on_pdf']                                    = 'Mostrar en PDF';
$lang['custom_field_leads']                                          = 'Prospectos';
$lang['custom_field_customers']                                      = 'Clientes';
$lang['custom_field_staff']                                          = 'Personal';
$lang['custom_field_contracts']                                      = 'Contratos';
$lang['custom_field_tasks']                                          = 'Tareas';
$lang['custom_field_expenses']                                       = 'Gastos';
$lang['custom_field_invoice']                                        = 'Factura';
$lang['custom_field_estimate']                                       = 'Estimar';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Notas privadas del personal';


# Business News
$lang['business_news'] = 'Noticias de negocios en internet';

# Navigation
$lang['nav_todo_items']               = 'Tareas';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'tipo de contrato';

# Version 1.0.5
# General
$lang['no_tax']                             = 'Sin impuestos';
$lang['numbers_not_formated_while_editing'] = 'La tasa en el campo de entrada no está formateada, editar/añadir el artículo y debe seguir siendo no formateado. No intente dar formato manualmente aquí.';
# Contracts='
$lang['contracts_view_expired']             = 'Expirado';
$lang['contracts_view_without_dateend']     = 'Los contratos sin fecha de finalización';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Contratos';
# Invoices General='
$lang['invoice_estimate_general_options']        = 'Opciones generales';
$lang['invoice_table_item_description']          = 'Descripción';
$lang['invoice_recurring_indicator']             = 'Periódico';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Presupuesto se convirtió a factura con éxito';
$lang['estimate_table_item_description']         = 'Descripción';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Usted no puede eliminar la moneda base. Es necesario asignar la nueva moneda de referencia u despues suprimir esta.';
$lang['invoice_copy']              = 'Copia de la factura';
$lang['invoice_copy_success']      = 'Factura copiada con éxito';
$lang['invoice_copy_fail']         = 'No se pudo copiar la factura';
$lang['invoice_due_after_help']    = 'Ajuste a cero para evitar el cálculo';

$lang['show_shipping_on_invoice'] = 'Mostrar los detalles del envío en la factura';

# Estimates
$lang['show_shipping_on_estimate']         = 'Mostrar los detalles del envío en las presupuestos';
$lang['is_invoiced_estimate_delete_error'] = 'Esta Presupuesto se factura. Usted no puede eliminar la Presupuesto';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Envie a';
$lang['customer_profile_details'] = 'Detalles del cliente';
$lang['billing_shipping']         = 'Envío de facturación';
$lang['billing_address']          = 'Dirección de Envio';
$lang['shipping_address']         = 'dirección de envío';

$lang['billing_street']  = 'Calle';
$lang['billing_city']    = 'Ciudad';
$lang['billing_state']   = 'Estado';
$lang['billing_zip']     = 'Código postal';
$lang['billing_country'] = 'País';

$lang['shipping_street']                    = 'Calle';
$lang['shipping_city']                      = 'Ciudad';
$lang['shipping_state']                     = 'Estado';
$lang['shipping_zip']                       = 'Código postal';
$lang['shipping_country']                   = 'País';
$lang['get_shipping_from_customer_profile'] = 'Obtener detalles del envío desde el perfil de cliente';

# Customer
$lang['customer_file_from']                                    = 'Mostrando de %s';
$lang['customer_default_currency']                             = 'moneda predeterminada';
$lang['customer_no_attachments_found']                         = 'No se encontraron archivos adjuntos';
$lang['customer_update_address_info_on_invoices']              = 'Actualizar la información de envío / facturación en todas las facturas / presupuestos anteriores';
$lang['customer_update_address_info_on_invoices_help']         = 'Si marca este campo el envío y la información de facturación se actualizarán para todas las facturas y presupuestos. Nota: Las facturas con estado Abonado suele verse afectados.';
$lang['setup_google_api_key_customer_map']                     = 'Configuración clave API de Google con el fin de ver al mapa del cliente';
$lang['customer_attachments_file']                             = 'Archivo';
$lang['client_send_set_password_email']                        = 'Enviar correo electrónico contraseña SET';
$lang['customer_billing_same_as_profile']                      = 'Igual que la información del cliente';
$lang['customer_billing_copy']                                 = 'Copiar dirección de facturación';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'Correo electrónico para configurar la contraseña se envía exitosamente al cliente';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Perfil actualizado y el correo electrónico para establecer la contraseña está enviado con éxito al cliente';
$lang['customer_attachments']                                  = 'Archivos';
$lang['customer_longitude']                                    = 'Longitud (Google Maps)';
$lang['customer_latitude']                                     = 'Latitud (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Contraseña';
$lang['admin_auth_set_password_repeat']   = 'Repite la contraseña';
$lang['admin_auth_set_password_heading']  = 'Establecer contraseña';
$lang['password_set_email_subject']       = 'Establecer una nueva contraseña en %s';
# General
$lang['apply']                            = 'Aplicar';
$lang['department_calendar_id']           = 'ID de Google Calendar';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Idioma predeterminado';
$lang['system_default_string']            = 'Sistema por defecto';
$lang['advanced_options']                 = 'Opciones avanzadas';
# Expenses
$lang['expense_list_invoice']             = 'Facturado';
$lang['expense_list_billed']              = 'Facturado';
$lang['expense_list_unbilled']            = 'No facturada';
# Leads
$lang['lead_merge_custom_field']          = 'Combinar como campo personalizado';
$lang['lead_merge_custom_field_existing'] = 'Combinar con el campo de base de datos existente';
$lang['lead_dont_merge_custom_field']     = 'No fusionar';
$lang['no_lead_notes_found']              = 'No hay notas de prospecto encontradas';
$lang['leads_view_list']                  = 'Lista';
$lang['lost_leads']                       = 'Prospectos perdidos';
$lang['junk_leads']                       = 'Prospectos basura';
$lang['lead_mark_as_lost']                = 'Marcar como perdido';
$lang['lead_unmark_as_lost']              = 'no marcar El prospecto como perdido';
$lang['lead_marked_as_lost']              = 'El prospecto marcado como perdido exitosamente';
$lang['lead_unmarked_as_lost']            = 'El prospecto no marcado como perdido exitosamente';
$lang['leads_status_color']               = 'Color';

$lang['lead_mark_as_junk']     = 'Marcar como basura';
$lang['lead_unmark_as_junk']   = 'No marcar el prospecto como basura';
$lang['lead_marked_as_junk']   = 'Prospecto marcado como basura con éxito';
$lang['lead_unmarked_as_junk'] = 'Prospecto desmarcado como basura con éxito';

$lang['lead_not_found']                                                      = 'Prospecto No Encontrado';
$lang['lead_lost']                                                           = 'Perdido';
$lang['lead_junk']                                                           = 'Basura';
$lang['leads_not_assigned']                                                  = 'No asignado';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Esconder de los clientes';
$lang['contract_edit_overview']                                              = 'contrato general';
$lang['contract_attachments']                                                = 'Archivos adjuntos';
# Tasks
$lang['task_view_make_public']                                               = 'Hacer público';
$lang['task_is_private']                                                     = 'Tarea privada';
$lang['task_finished']                                                       = 'Terminado';
$lang['task_single_related']                                                 = 'Relacionado';
$lang['task_unmark_as_complete']                                             = 'Desmarcar como completa';
$lang['task_unmarked_as_complete']                                           = 'Tarea sin marcar como completa';
$lang['task_relation']                                                       = 'Relacionado';
$lang['task_public']                                                         = 'Público';
$lang['task_public_help']                                                    = 'Si se establece esta tarea pública será visible para todos los miembros del personal. De lo contrario será visible sólo para usuarios que están asignados, seguidores, creador o administradores';
# Settings
$lang['settings_general_favicon']                                            = 'Icono';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Salida de documentos PDF a partir de cliente en el área de administración del idioma del cliente';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Si esta opción está establecida en Sí y ex. el idioma por defecto del sistema es Inglés y el cliente en lengua de configuración francés los documentos PDF se outputed en el idioma del cliente';
$lang['settings_cron_surveys']                                               = 'Encuestas';
$lang['settings_default_tax']                                                = 'Impuestos por defecto';
$lang['setup_calendar_by_departments']                                       = 'Configuración del calendario para los Departamentos';
$lang['settings_calendar']                                                   = 'Calendario';
$lang['settings_sales_invoice_due_after']                                    = 'Factura vence después de (días)';
$lang['settings_google_api']                                                 = 'Google API Key';
$lang['settings_gcal_main_calendar_id']                                      = 'ID de Google Calendar';
$lang['settings_gcal_main_calendar_id_help']                                 = 'Este es el calendario de la empresa principal. Se mostrarán todos los eventos de este calendario. Si desea especificar un calendario basado en los departamentos puede agregar en el departamento de ID de Google Calendar.';

$lang['show_on_calendar']                  = 'Mostrar en el Calendario';
$lang['show_invoices_on_calendar']         = 'Facturas';
$lang['show_estimates_on_calendar']        = 'presupuestos';
$lang['show_contracts_on_calendar']        = 'contratos';
$lang['show_tasks_on_calendar']            = 'Tareas';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copiar campos personalizados al perfil del cliente';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Si cualquiera de los siguientes campos personalizados no existe para el cliente será automático creada con el mismo nombre de otro modo sólo el valor se copiará a partir del perfil de prospecto.';
$lang['lead_profile']                                                = 'Perfil';
$lang['lead_is_client']                                              = 'Cliente';
$lang['leads_kan_ban_notes_title']                                   = 'Notas';
$lang['leads_email_integration_folder_no_encryption']                = 'sin cifrado';
$lang['leads_email_integration']                                     = 'Integración de correo electrónico';
$lang['leads_email_active']                                          = 'Activo';
$lang['leads_email_integration_imap']                                = 'servidor IMAP';
$lang['leads_email_integration_email']                               = 'dirección de correo electrónico (Entrar)';
$lang['leads_email_integration_password']                            = 'Contraseña';
$lang['leads_email_integration_default_source']                      = 'Fuente predeterminada';
$lang['leads_email_integration_check_every']                         = 'Comprobamos cada (minutos)';
$lang['leads_email_integration_default_assigned']                    = 'Responsibe para la nueva pista';
$lang['leads_email_encryption']                                      = 'Cifrado';
$lang['leads_email_integration_updated']                             = 'Actualizado integración de correo electrónico';
$lang['leads_email_integration_default_status']                      = 'Estado predeterminado';
$lang['leads_email_integration_folder']                              = 'Carpeta';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notificar cuando el prospecto importada';
$lang['leads_email_integration_only_check_unseen_emails']            = 'marque sólo mensajes de correo electrónico no abiertos';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'El guión fijará automática del correo electrónico para abrir después de cheque. Esto se utiliza para evitar que la comprobación de todos los mensajes de correo electrónico y otra vez. No es recomendado para desactivar esta opción si usted tiene muchos mensajes de correo electrónico y tiene una configuración de reenvío mucho a la configuración de correo electrónico que para los Prospectos';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notificará si el correo electrónico prospecto enviar varias veces';
$lang['leads_email_integration_test_connection']                     = 'Prueba de conexión IMAP';
$lang['lead_email_connection_ok']                                    = 'Conexión IMAP es buena';
$lang['lead_email_connection_not_ok']                                = 'Conexión IMAP no es okey';
$lang['lead_email_activity']                                         = 'Actividad de correo electrónico';
$lang['leads_email_integration_notify_roles']                        = 'Papeles para notificar';
$lang['leads_email_integration_notify_staff']                        = 'Los miembros del personal que notificar';
$lang['lead_public']                                                 = 'Público';
# Knowledge Base

$lang['kb_group_color']                = 'Color';
$lang['kb_group_order']                = 'Orden';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Exportador en maza PDF';
$lang['bulk_export_pdf_payments']      = 'pagos';
$lang['bulk_export_pdf_estimates']     = 'Presupuestos';
$lang['bulk_export_pdf_invoices']      = 'Facturas';
$lang['bulk_pdf_export_button']        = 'Exportar';
$lang['bulk_pdf_export_select_type']   = 'Seleccionar el tipo de';
$lang['no_data_found_bulk_pdf_export'] = 'No se han encontrado para la exportación de datos';
$lang['bulk_export_status_all']        = 'Todas';
$lang['bulk_export_status']            = 'Estado';
$lang['bulk_export_zip_payment_modes'] = 'Los pagos realizados por';
$lang['bulk_export_include_tag']       = 'incluir Tag';
$lang['bulk_export_include_tag_help']  = 'Ex. Original o copia. La etiqueta se sacara del PDF. Recomendado usar sólo 1 etiqueta';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Sin respuestas predefinidas encontradas';
## Clients area
$lang['clients_contract_attachments']  = 'Archivos adjuntos';
# Backup
$lang['backup_type_full']              = 'Copia de seguridad completa';
$lang['backup_type_db']                = 'Copia de seguridad de base de datos';

$lang['auto_backup_options_updated']     = 'Opciones de copia de seguridad automática actualizada';
$lang['auto_backup_every']               = 'Crear copia de seguridad cada X días';
$lang['auto_backup_enabled']             = 'Habilitado (Requiere Cron)';
$lang['auto_backup']                     = 'Copia de seguridad automática';
$lang['backup_delete']                   = 'Copia eliminado';
$lang['create_backup']                   = 'Crear copia de seguridad';
$lang['backup_success']                  = 'La copia de seguridad se realizo con exito';
$lang['utility_backup']                  = 'Copia de seguridad de base de datos';
$lang['utility_create_new_backup_db']    = 'Crear copia de seguridad de base de datos';
$lang['utility_backup_table_backupname'] = 'Copia de seguridad';
$lang['utility_backup_table_backupsize'] = 'El tamaño de la copia de seguridad';
$lang['utility_backup_table_backupdate'] = 'Fecha';
$lang['utility_db_backup_note']          = 'Nota: Debido al tiempo de ejecución limitado y memoria disponible para PHP, las copias de seguridad de bases de datos muy grandes puede no ser posible. Si su base de datos es muy grande es posible que necesite hacer copias de seguridad directamente desde su servidor SQL a través de la línea de comandos, o que su administrador del servidor que lo haga por usted si usted no tiene privilegios de root.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Propuestas';
$lang['clients_nav_support']   = 'Soporte Técnico';
# General
$lang['more']                  = 'Más';
$lang['add_item']              = 'Añadir artículo';
$lang['goto_admin_area']       = 'Ir al área de administración';
$lang['click_here_to_edit']    = 'Haga clic aquí para editar';
$lang['delete']                = 'Eliminar %s';
$lang['welcome_top']           = 'Bienvenido %s';

# Customers
$lang['customer_permissions']         = 'Permisos';
$lang['customer_permission_invoice']  = 'Facturas';
$lang['customer_permission_estimate'] = 'Estimar';
$lang['customer_permission_proposal'] = 'Propuestas';
$lang['customer_permission_contract'] = 'Contratos';
$lang['customer_permission_support']  = 'Apoyo';


#Tasks
$lang['task_related_to'] = 'Relacionado con';

# Send file
$lang['custom_file_fail_send']    = 'No se pudo enviar el archivo';
$lang['custom_file_success_send'] = 'El archivo se envía con éxito a %s';
$lang['send_file_subject']        = 'Asunto del correo';
$lang['send_file_email']          = 'Dirección de correo electrónico';
$lang['send_file_message']        = 'Mensaje';
$lang['send_file']                = 'Enviar archivo';
$lang['add_checklist_item']       = 'Lista de verificación de artículos';
$lang['task_checklist_items']     = 'Lista de verificación de artículos';

# Import
$lang['default_pass_clients_import'] = 'Contraseña por defecto para todos los clientes';
$lang['simulate_import']             = 'Simular importación';
$lang['import_upload_failed']        = 'Subida fallida';
$lang['import_total_imported']       = 'Total importado: %s';
$lang['import_leads']                = 'Ventas de importación';
$lang['import_customers']            = 'Importación de clientes';
$lang['choose_csv_file']             = 'Elija Archivo CSV';
$lang['import']                      = 'Importar';
$lang['lead_import_status']          = 'Estado';
$lang['lead_import_source']          = 'Fuente';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'propuestas';

# Invoices
$lang['delete_invoice'] = 'Borrar';

# Calendar
$lang['calendar_lead_reminder'] = 'Recordatorio de prospecto';

$lang['items']      = 'Artículos';
$lang['support']    = 'Soporte';
$lang['new_ticket'] = 'Nuevo Incidencia';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Añadir recordatorio al cliente';
$lang['lead_set_reminder_title']        = 'Añadir recordatorio de prospecto';
$lang['set_reminder_tooltip']           = 'Esta opción le permite no olvidar nada acerca de sus clientes.';
$lang['client_reminders_tab']           = 'Recordatorios';
$lang['leads_reminders_tab']            = 'Recordatorios';

# Tickets
$lang['delete_ticket_reply']  = 'Borrar Respuesta';
$lang['ticket_priority_edit'] = 'Editar prioridad';
$lang['ticket_priority_add']  = 'Añadir prioridad';
$lang['ticket_status_edit']   = 'Estado edición de tickets';
$lang['ticket_service_edit']  = 'Edición de tickets';
$lang['edit_department']      = 'Edición Departamento';

# Expenses
$lang['edit_expense_category']                                    = 'Editar Categoría del gasto';
# Settings
$lang['customer_default_country']                                 = 'País predeterminado';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Requerir al cliente estar registrado para ver Presupuesto';
$lang['set_reminder']                                             = 'Ha configurado un recordatorio';
$lang['set_reminder_date']                                        = 'Fecha de ser notificado';
$lang['reminder_description']                                     = 'Descripción conjunto';
$lang['reminder_notify_me_by_email']                              = 'Enviar también un correo electrónico para este recordatorio';
$lang['reminder_added_successfuly']                               = 'Recordatorio añadido con éxito. Se le notificará en el tiempo.';
$lang['reminder_description']                                     = 'Descripción';
$lang['reminder_date']                                            = 'Fecha';
$lang['reminder_staff']                                           = 'Recordar';
$lang['reminder_is_notified']                                     = 'Se notifica?';
$lang['reminder_is_notified_boolean_no']                          = 'No';
$lang['reminder_is_notified_boolean_yes']                         = 'Sí';
$lang['reminder_set_to']                                          = 'Establecer recordatorio para';
$lang['reminder_deleted']                                         = 'Recordatorio elimina exitosamente';
$lang['reminder_failed_to_delete']                                = 'No se pudo eliminar el recordatorio';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Mostrar factura / estado de Presupuesto en PDF';
$lang['email_piping_default_priority']                            = 'prioridad por defecto en el billete entubada';
$lang['show_lead_reminders_on_calendar']                          = 'Recordatorios de prospecto';
$lang['tickets_piping']                                           = 'Cesion por correo electrónico';
$lang['email_piping_only_replies']                                = 'Sólo respuestas permitidas por Correo Electrónico';
$lang['email_piping_only_registered']                             = 'Sólo seciones de Usuarios Registrados';
$lang['email_piping_enabled']                                     = 'habilitado';

# Estimates
$lang['view_estimate_as_client']         = 'Ver presupuesto como cliente';
$lang['estimate_mark_as']                = 'Marcar como %s';
$lang['estimate_status_changed_success'] = 'Presupuesto cambio de estado';
$lang['estimate_status_changed_fail']    = 'No se pudo cambiar el estado de la Presupuesto';
$lang['estimate_email_link_text']        = 'Ver Presupuesto';

# Proposals
$lang['proposal_to']                            = 'Nombre de empresa';
$lang['proposal_date']                          = 'Fecha';
$lang['proposal_address']                       = 'Dirección';
$lang['proposal_phone']                         = 'Teléfono';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'fecha de creacion';
$lang['proposal_open_till']                     = 'abierto hasta';
$lang['proposal_status_open']                   = 'Abiertas';
$lang['proposal_status_accepted']               = 'Aceptadas';
$lang['proposal_status_declined']               = 'Declinadas';
$lang['proposal_status_sent']                   = 'Expedidas';
$lang['proposal_expired']                       = 'Expirado';
$lang['proposal_subject']                       = 'Tema';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Estado';
$lang['proposals_list_all']                     = 'Todas';
$lang['proposals_leads_related']                = 'conduce Relacionados';
$lang['proposals_customers_related']            = 'Los clientes relacionados';
$lang['proposal_related']                       = 'Relacionado';
$lang['proposal_for_lead']                      = 'Dirigir';
$lang['proposal_for_customer']                  = 'Cliente';
$lang['proposal']                               = 'Propuesta';
$lang['proposal_lowercase']                     = 'propuesta';
$lang['proposals']                              = 'Propuestas';
$lang['proposals_lowercase']                    = 'propuestas';
$lang['new_proposal']                           = 'Nueva Propuesta';
$lang['proposal_currency']                      = 'Moneda';
$lang['proposal_allow_comments']                = 'Permitir comentarios';
$lang['proposal_allow_comments_help']           = 'Si marca esta opción se permitirán comentarios cuando sus clientes ver la propuesta.';
$lang['proposal_edit']                          = 'Editar';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Envía por email';
$lang['proposal_send_to_email_title']           = 'Enviar a Correo electrónico Propuesta';
$lang['proposal_attach_pdf']                    = 'adjuntar PDF';
$lang['proposal_preview_template']              = 'Vista previa de la plantilla';
$lang['proposal_view']                          = 'Ver Propuesta';
$lang['proposal_copy']                          = 'Copia';
$lang['proposal_delete']                        = 'Borrar';
$lang['proposal_mark_as_open']                  = 'Marcar como Abierta';
$lang['proposal_mark_as_declined']              = 'Marcar como Rehusó';
$lang['proposal_mark_as_accepted']              = 'Marcar como Aceptado';
$lang['proposal_mark_as_sent']                  = 'Marcar como Enviado';
$lang['proposal_to']                            = 'A';
$lang['proposal_add_comment']                   = 'Agregar comentario';
$lang['proposal_sent_to_email_success']         = 'Propuesta enviada al correo electrónico con exito';
$lang['proposal_sent_to_email_fail']            = 'No se ha podido propuesta enviada al correo electrónico';
$lang['proposal_copy_fail']                     = 'No se pudo copiar propuesta';
$lang['proposal_copy_success']                  = 'Propuesta copiada con éxito';
$lang['proposal_status_changed_success']        = 'El estado de la propuesta ha cambiado con éxito';
$lang['proposal_status_changed_fail']           = 'No se pudo cambiar el estado de la propuesta';
$lang['proposal_assigned']                      = 'Asignado';
$lang['proposal_comments']                      = 'Comentarios';
$lang['proposal_convert']                       = 'Convertir';
$lang['proposal_convert_estimate']              = 'Estimar';
$lang['proposal_convert_invoice']               = 'Factura';
$lang['proposal_convert_to_estimate']           = 'Convertir a presupuesto';
$lang['proposal_convert_to_invoice']            = 'Convertir a Factura';
$lang['proposal_convert_to_lead_disabled_help'] = 'Es necesario para convertir el prospecto a cliente con el fin de crear %s';
$lang['proposal_convert_not_related_help']      = 'La propuesta tiene que estar relacionada a el cliente con el fin de convertir a %s';
$lang['proposal_converted_to_estimate_success'] = 'Propuesta convierte para estimar exitosamente';
$lang['proposal_converted_to_invoice_success']  = 'Propuesta convertida a factura con exito';
$lang['proposal_converted_to_estimate_fail']    = 'No se pudo convertir propuesta a presupuesto';
$lang['proposal_converted_to_invoice_fail']     = 'No se pudo convertir la propuesta a factura';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Aceptar';
$lang['proposal_decline_info'] = 'Declinado';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reiniciar';
$lang['customer_reset_password_heading']  = 'Restablecer su contraseña';
$lang['customer_forgot_password_heading'] = 'Se te olvidó tu contraseña';
$lang['customer_forgot_password']         = '¿Se te olvidó tu contraseña?';
$lang['customer_reset_password']          = 'Contraseña';
$lang['customer_reset_password_repeat']   = 'Repite la contraseña';
$lang['customer_forgot_password_email']   = 'Dirección de correo electrónico';
$lang['customer_forgot_password_submit']  = 'Enviar';
$lang['customer_ticket_subject']          = 'Tema';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'propuestas';

# Tasks
$lang['add_task_attachments']                 = 'Adjunto archivo';
$lang['task_view_attachments']                = 'Archivos adjuntos';
$lang['task_view_description']                = 'Descripción';
$lang['task_table_is_finished_indicator']     = 'Sí';
$lang['task_table_is_not_finished_indicator'] = 'No';
$lang['tasks_dt_finished']                    = 'Terminado';

# Customer Groups
$lang['customer_group_add_heading']  = 'Añadir nuevo grupo de clientes';
$lang['customer_group_edit_heading'] = 'Editar Grupo de Clientes';
$lang['new_customer_group']          = 'Nuevo Grupo de Clientes';
$lang['customer_group_name']         = 'Nombre';
$lang['customer_groups']             = 'Grupos';
$lang['customer_group']              = 'Grupo de clientes';
$lang['customer_group_lowercase']    = 'grupo de clientes';

$lang['customer_have_invoices_by']       = 'Contiene facturas por estatus %s';
$lang['customer_have_estimates_by']      = 'Contiene presupuestos de estado %s';
$lang['customer_have_contracts_by_type'] = 'Tener contratos por tipo %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Mostrar en tabla';
$lang['custom_field_show_on_client_portal']      = 'Mostrar en el portal de clientes';
$lang['custom_field_show_on_client_portal_help'] = 'Si este campo está marcado también se muestra en las tablas';
$lang['custom_field_visibility']                 = 'Visibilidad';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'Puede añadir aquí también para traducir cadenas. Así que si el personal / sistema tiene idioma distinto el valor por defecto los nombres de los elementos del menú se veran en el lenguaje personal. De lo contrario, si no existe la cadena en el archivo traducir, será tomada la cadena que introduzca aquí.';
$lang['utilities_menu_icon']                = 'Icono';
$lang['active_menu_items']                  = 'Elementos de menú activos';
$lang['inactive_menu_items']                = 'Elementos de menú inactivos';
$lang['utilities_menu_permission']          = 'Permisos';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Nombre';
$lang['utilities_menu_save']                = 'Guardar Menú';

# Knowledge Base
$lang['view_articles_list']     = 'Ver Artículos';
$lang['view_articles_list_all'] = 'Todos los artículos';
$lang['als_add_article']        = 'Añadir artículo';
$lang['als_all_articles']       = 'Todos los artículos';
$lang['als_kb_groups']          = 'Grupos';

# Customizer Menu
$lang['menu_builder']            = 'Configuración del menú';
$lang['main_menu']               = 'Menú principal';
$lang['setup_menu']              = 'Menú de configuración';
$lang['utilities_menu_url_help'] = '%s se auto añade a la URL';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Los filtros de spam';
$lang['spam_filter']                  = 'Filtro de spam';
$lang['new_spam_filter']              = 'Nuevo filtro de spam';
$lang['spam_filter_blocked_senders']  = 'Los remitentes bloqueados';
$lang['spam_filter_blocked_subjects'] = 'Los sujetos bloqueados';
$lang['spam_filter_blocked_phrases']  = 'Frases bloqueadas';
$lang['spam_filter_content']          = 'Contenido';
$lang['spamfilter_edit_heading']      = 'Editar filtro de correo no deseado';
$lang['spamfilter_add_heading']       = 'Añadir Filtro de Spam';
$lang['spamfilter_type']              = 'Tipo';
$lang['spamfilter_type_subject']      = 'Tema';
$lang['spamfilter_type_sender']       = 'Remitente';
$lang['spamfilter_type_phrase']       = 'Frase';

# Tickets
$lang['block_sender']               = 'Bloquear remitente';
$lang['sender_blocked']             = 'remitentes bloqueados';
$lang['sender_blocked_successfuly'] = 'Remitente bloqueado exitosamente';
$lang['ticket_date_created']        = 'fecha de creacion';

#KB
$lang['edit_kb_group']             = 'Editar grupo';
# Leads
$lang['edit_source']               = 'Modificar origen';
$lang['edit_status']               = 'Editar estado';
# Contacts
$lang['contract_type_edit']        = 'Editar tipo de contrato';
# Reports
$lang['report_by_customer_groups'] = 'Valor Total Por Grupos de clientes';
#Utilities
$lang['ticket_pipe_log']           = 'Tubo de tickets de registro';
$lang['ticket_pipe_name']          = 'Desde nombre';
$lang['ticket_pipe_email_to']      = 'A';
$lang['ticket_pipe_email']         = 'Desde el correo electrónico';
$lang['ticket_pipe_subject']       = 'Tema';
$lang['ticket_pipe_message']       = 'Mensaje';
$lang['ticket_pipe_date']          = 'Fecha';
$lang['ticket_pipe_status']        = 'Estado';

# Home
$lang['home_invoice_paid']          = 'Facturas pagadas';
$lang['home_invoice_partialy_paid'] = 'Facturas pagadas parcialmente';
$lang['home_estimate_declined']     = 'Prespuestos Rechazados';
$lang['home_estimate_accepted']     = 'PRESUPUESTOS ACEPTADOS';
$lang['home_estimate_sent']         = 'PRESUPUESTOS ENVIADOS';
$lang['home_latest_activity']       = 'Actividad Reciente';
$lang['home_my_tasks']              = 'Mis Tareas';
$lang['home_latest_activity']       = 'Actividad Reciente';
$lang['home_my_todo_items']         = 'Resumen de las Tareas';
$lang['home_widget_view_all']       = 'Ver todo';
$lang['home_stats_full_report']     = 'Resumen Completo';

# Validation - Customer Portal

$lang['form_validation_required']    = 'Se requiere que el campo {field}.';
$lang['form_validation_valid_email'] = 'El {field} campo debe contener una dirección válida de correo electrónico.';
$lang['form_validation_matches']     = 'El campo {field} no coincide con el campo {param}.';
$lang['form_validation_is_unique']   = 'El campo {field} debe contener un valor único.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Inicio del evento de hoy - %s ...';
$lang['not_event_public'] = 'Evento público da comienzo hoy - %s ...';
$lang['not_contract_expiry_reminder'] = 'Recordatorio de caducidad del contrato - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Gastos recurrente Actividad de trabajo Cron ';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Facturas recurrentes Actividad de tarea Cron';
$lang['not_recurring_total_renewed'] = 'Actualizado total: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Accion tomada por gastos recurrente';
$lang['not_invoice_created'] = 'Factura creada:';
$lang['not_invoice_renewed'] = 'Factura renovada:';
$lang['not_expense_renewed'] = 'Gastos renovados:';
$lang['not_invoice_sent_to_customer'] = 'Factura enviada al cliente: %s';
$lang['not_invoice_sent_yes'] = 'Si';
$lang['not_invoice_sent_not'] = 'No';
$lang['not_action_taken_from_recurring_invoice'] = 'Accion tomada de la factura recurrente:';
$lang['not_new_reminder_for'] = 'Nuevo recordatorio para %s';
$lang['not_received_one_or_more_messages_lead'] = 'Se ha recibido un mensaje de correo electrónico de más de una ventaja';
$lang['not_received_lead_imported_email_integration'] = 'Ventaja importada de integración de correo electrónico';
$lang['not_lead_imported_attachment'] = 'Anexos importado de correo electrónico';
$lang['not_estimate_status_change'] = 'Anexos importado de correo electrónico';
$lang['not_estimate_status_updated'] = 'Estado presupuesto de actualizacion: desde: %s a %s';
$lang['not_goal_message_success'] = 'Felicitaciones! Alcazamos el Nuevo objetivo.<br />Tipo de objetivo: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['not_assigned_lead_to_you'] = '%s ventaja asignada %s para ti';
$lang['not_lead_activity_assigned_to'] = '%s asignada para %s';
$lang['not_lead_activity_attachment_deleted'] = 'Borrar anexo';
$lang['not_lead_activity_status_updated'] = '%s actualizar ventaja de estado desde %s a %s';
$lang['not_lead_activity_contacted'] = '%s puesta en contacto esta ventaja sobre %s';
$lang['not_lead_activity_created'] = '%s crear ventaja';
$lang['not_lead_activity_marked_lost'] = 'Marcado como perdido';
$lang['not_lead_activity_unmarked_lost'] = 'desmarcado como perdido';
$lang['not_lead_activity_marked_junk'] = 'Marcado como basura';
$lang['not_lead_activity_unmarked_junk'] = 'desmarcado como basura';
$lang['not_lead_activity_added_attachment'] = 'Anexo agregado';
$lang['not_lead_activity_converted_email'] = 'Ventaja de correo electrónico cambiada. La primera ventaja de correo electronico fue: %s y añadido como cliente con el correo electrónico %s';
$lang['not_lead_activity_converted'] = '%s Convertir esta ventaja para el cliente';
$lang['not_liked_your_post'] = '%s le gustó su %s ...';
$lang['not_commented_your_post'] = '%s comentó tu publicacion %s ...';
$lang['not_liked_your_comment'] = '%s le gustó su comentario %s ...';
$lang['not_proposal_assigned_to_you'] = 'Propuesta asignada por ti - %s ...';
$lang['not_proposal_comment_from_client'] = 'Nuevo comentario sobre la propuesta del cliente%s ...';
$lang['not_proposal_proposal_accepted'] = 'Propuesta aceptada';
$lang['not_proposal_proposal_declined'] = 'Propuesta rechazada';
$lang['not_task_added_you_as_follower'] = 'Te añadió como seguidor en la tarea %s ...';
$lang['not_task_added_someone_as_follower'] = 'añadido como seguidor en la tarea %s ...';
$lang['not_task_added_himself_as_follower'] = 'añadido el mismo como seguidor en la tarea %s ...';
$lang['not_task_assigned_to_you'] = 'asignada una tarea para ti %s ...';
$lang['not_task_assigned_someone'] = 'asignada%s a la tarea %s ...';
$lang['not_task_will_do_user'] = 'Hara la tarea %s ...';
$lang['not_task_new_attachment'] = 'Nuevo anexo añadido';
$lang['not_task_marked_as_complete'] = 'Marca tarea como complete %s';
$lang['not_task_unmarked_as_complete'] = 'Desmarcar tarea como completa %s';
$lang['not_ticket_assigned_to_you'] = 'Boleto asignado para ti - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Boleto no asignado para ti- %s ...';
$lang['not_estimate_customer_accepted'] = 'Felicidades! El cliente acepto la presupuesto con el número %s';
$lang['not_estimate_customer_declined'] = 'El cliente rechazo la Presupuesto con el número  %s';
$lang['estimate_activity_converted'] = 'convertido esta Presupuesto para facturar.<br /> %s';
$lang['estimate_activity_created'] = 'Creado la presupuesto';
$lang['invoice_estimate_activity_removed_item'] = 'Artículo quitado <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Numero presupuesto cambiado  desde %s a %s';
$lang['invoice_activity_number_changed'] = 'Numero de facture cambiado desde %s a %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'actualizar descripción corta del artículo desde %s a %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'actualizar descripción larga del artículo desde <b>%s</b> a <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'actualizar tarifa del artículo desde %s a %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'actualizar calidad de artículos <b>%s</b> desde %s a %s';
$lang['invoice_estimate_activity_added_item'] = 'nuevo artículo agregado <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'enviar Presupuesto al cliente';
$lang['estimate_activity_client_accepted_and_converted'] = 'El cliente aceptó esta Presupuesto. La Presupuesto es convertida para facturar con el número %s';
$lang['estimate_activity_client_accepted'] = 'El cliente ha aceptado esta Presupuesto';
$lang['estimate_activity_client_declined'] = 'El cliente ha rechazado esta Presupuesto';
$lang['estimate_activity_marked'] = 'Presupuesto marcada como %s';
$lang['invoice_activity_status_updated'] = 'Actualizar estado de factura desde %s a %s';
$lang['invoice_activity_created'] = 'Factura creada';
$lang['invoice_activity_from_expense'] = 'convertido para facturar el costo';
$lang['invoice_activity_recuring_created'] = '[Recurrente] Factura creada por CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Factura de costo] Factura creada por CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Factura enviada al cliente por CRON';
$lang['invoice_activity_sent_to_client'] = 'enviar facture al cliente';
$lang['invoice_activity_marked_as_sent'] = 'factura marcada como enviada';
$lang['invoice_activity_payment_deleted'] = 'suprimido el pago de la factura. Pago #%s, cantidad total %s';
$lang['invoice_activity_payment_made_by_client'] = 'El cliente hizo el pago de la factura por un total de <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'pago registrado en total de <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Anexo agregado';

# Navigation
$lang['top_search_placeholder'] = 'Buscar...';

# Staff
$lang['staff_profile_inactive_account'] = 'Esta cuenta de empleado es inactiva ';

# Estimates
$lang['copy_estimate'] = 'Copia de Presupuesto';
$lang['estimate_copied_successfuly'] = 'Presupuesto copiada con exito';
$lang['estimate_copied_fail'] = 'Falló la copia de Presupuesto';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tareas asignadas para mi';
$lang['tasks_view_follower_by_user'] = 'Tareas i\'m siguiente';
$lang['no_tasks_found'] = 'Tareas no encontradas';

# Leads
$lang['leads_dt_datecreated'] = 'Creado';
$lang['leads_sort_by'] = 'Ordenar por';
$lang['leads_sort_by_datecreated'] = 'Crear fecha';
$lang['leads_sort_by_kanban_order'] = 'Orden de Kan Ban';

# Proposals
$lang['proposal_items_name'] = 'Artículo';
$lang['proposal_items_description'] = 'Descripción';
$lang['proposal_items_qty'] = 'Cantidad';
$lang['proposal_items_rate'] = 'Tarifa';
$lang['proposal_items_tax'] = 'Impuesto';
$lang['proposal_items_amount'] = 'Cantidad';

# Authentication
$lang['check_email_for_reseting_password'] = 'Por favor, comprueba tu correo electrónico para obtener más instrucciones para restablecer la contraseña';
$lang['inactive_account'] = 'Cuenta Inactiva';
$lang['error_setting_new_password_key'] = 'Error de configuración de la nueva contraseña';
$lang['password_reset_message'] = 'Tu contraseña ha sido restablecida. Por favor inicie sesión ahora!';
$lang['password_reset_message_fail'] = 'Error de restablecer tu contraseña. Intente de nuevo.';
$lang['password_reset_key_expired'] = 'La contraseña ha expirado o usuario inválido';
$lang['admin_auth_reset_pass_repeat'] = 'Repita la contraseña';
$lang['auth_reset_pass_email_not_found'] = 'Correo electrónico no encontrado';
$lang['auth_reset_password_submit'] = 'Restablecer contraseña';

# Settings
$lang['settings_amount_to_words'] = 'Cantidad de palabras';
$lang['settings_amount_to_words_desc'] = 'Salida de la cantidad total de palabras en la facture / presupuesto';
$lang['settings_amount_to_words_enabled'] = 'Permitir';
$lang['settings_total_to_words_lowercase'] = 'Numero de palabras en minúsculas';
$lang['settings_show_tax_per_item'] = 'Mostrar impuesto por artículo (Facturas/Estimaciones)';

# Reports
$lang['report_sales_months_three_months'] = 'Los últimos 3 meses';
$lang['report_invoice_number'] = 'Factura #';
$lang['report_invoice_customer'] = 'Cliente';
$lang['report_invoice_date'] = 'Fecha';
$lang['report_invoice_duedate'] = 'Fecha de vencimiento';
$lang['report_invoice_amount'] = 'Cantidad';
$lang['report_invoice_amount_with_tax'] = 'Cantidad con impuesto';
$lang['report_invoice_amount_open'] = 'Cantidad abierta';
$lang['report_invoice_status'] = 'Estado';
$lang['report_invoice_total_amount_with_tax'] = 'Total de cantidad con impuesto';
$lang['report_invoice_total_amount_without_tax'] = 'Total de cantidad sin impuesto';
$lang['report_invoice_total_taxes'] = 'Impuestos';

#Version 1.0.9

# Home stats
$lang['home_stats_see_weekly_payments'] = 'Ver pagos semanales';
$lang['home_stats_by_project_status'] = 'Estadística por estado del proyecto';
$lang['home_invoice_overview'] = 'Resumen de las Facturas';
$lang['home_estimate_overview'] = 'Resumen de los Presupuestos';
$lang['home_proposal_overview'] = 'Resumen de las Propuestas';
$lang['home_lead_overview'] = 'Resumen de Posibles Clientes';
$lang['home_my_projects'] = 'Mis Proyectos';
$lang['home_announcements'] = 'Anuncios';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limites por ventajas de filas de estados por Kan Ban';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Mostrar proyectos o calendario';
$lang['settings_media_max_file_size_upload'] = 'Tamaño máximo de archivos de carga en los medios de comunicación (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Permitir al cliente/personal para agregar/ editar comentarios de tarea sólo en la primera hora (Los administradores no aplican)';

# Email templates
$lang['email_template_only_domain_email'] = 'Solo correo electronico de dominio';

# Announcements
$lang['dismiss_announcement'] = 'Anuncio de despedida';
$lang['dismiss_announcement'] = 'Anuncio de despedida';
$lang['announcement_from'] = 'Desde:';
$lang['announcement_date'] = 'Fecha de publicacion: %s';
$lang['announcement_not_found'] = 'Anuncio no encontrado';
$lang['announcements_recents'] = 'Anuncios recientes';

# General
$lang['zip_invoices'] = 'Facturas Zip';
$lang['zip_estimates'] = 'Estimacion Zip';
$lang['zip_payments'] = 'Pagos Zip';
$lang['setup_help'] = 'Ayuda';
$lang['clients_list_company'] = 'Empresa';
$lang['dt_button_export'] = 'Exportar';

$lang['dt_entries'] = 'entradas';
$lang['invoice_total_paid'] = 'Total pagado';
$lang['invoice_amount_due'] = 'Monto a pagar';
$lang['report_invoice_discount'] = 'Descuentos';

# Calendar
$lang['calendar_project'] = 'Proyecto';

# Leads
$lang['leads_import_assignee'] = 'Cesionario';
$lang['customer_from_lead'] = 'Cliente desde %s';
$lang['lead_kan_ban_attachments'] = 'Archivos adjuntos %s';
$lang['leads_sort_by_lastcontact'] = 'Ultimo contacto';

# Tasks
$lang['task_comment_added'] = 'Comentario añadido recientemente';
$lang['task_duedate'] = 'Fecha de vencimiento';
$lang['task_view_comments'] = 'Comentarios';
$lang['task_comment_updated'] = 'Comentario actualizado';
$lang['task_visible_to_client'] = 'Visible para el cliente';
$lang['task_hourly_rate'] = 'Tarifa por hora';
$lang['hours'] = 'Horas';
$lang['seconds'] = 'Segundos';
$lang['minutes'] = 'Minutos';
$lang['task_start_timer'] = 'Temporadizador de inicio';
$lang['task_stop_timer'] = 'Detener temporadizador';
$lang['task_billable_help'] = 'Si marca la tarea facturable se mostrará la hora cuando se creo la factura de artículos';
$lang['task_billable'] = 'Facturable';
$lang['task_billable_yes'] = 'Facturable';
$lang['task_billable_no'] = 'No facturable';
$lang['task_billed'] = 'Facturada';
$lang['task_billed_yes'] = 'Facturada';
$lang['task_billed_no'] = 'No facturada';
$lang['task_user_logged_time'] = 'Tiempo registrado:';
$lang['task_total_logged_time'] = 'Total de tiempo registrado:';
$lang['task_is_billed'] = 'Esta tarea es facturada en la facture numero %s';
$lang['task_statistics'] = 'Estadisticas';
$lang['task_milestone'] = 'Hito';

# Tickets
$lang['ticket_message_updated_successfuly'] = 'Mensaje actualizado correctamente';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Los proyectos de las tareas no están incluidos en esta lista.';
$lang['show_quantity_as'] = 'Mostrar la cantidad como:';
$lang['quantity_as_qty'] = 'Cant';
$lang['quantity_as_hours'] = 'Horas';
$lang['invoice_table_hours_heading'] = 'Horas';
$lang['bill_tasks'] = 'Tareas Bill';
$lang['invoice_estimate_sent_to_email'] = 'Correo electrónico';

# Estimates
$lang['estimate_table_hours_heading'] = 'Horas';

# General
$lang['is_customer_indicator'] = 'Cliente';
$lang['print']            = 'Imprimir';
$lang['customer_permission_projects']            = 'Proyectos';
$lang['no_timers_found']            = 'Ningún temporadizador iniciado encontrado';
$lang['timers_started_confirm_logout']            = 'Temporizador de tareas iniciado!<br /><br />¿Está seguro que quiere salir sin detener el temporizador?';
$lang['confirm_logout']            = 'Salir';
$lang['timer_top_started'] = 'Empezó a las %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'No se puede cambiar el tipo de facturación. Tareas facturadas ya encontradas para este proyecto.';
$lang['project_customer_permission_warning'] = 'El sistema indicó que el cliente no tiene el permiso para los proyectos. El cliente no será capaz de ver el proyecto. Considere la posibilidad de añadir el permiso de configuración del perfil del cliente.';
$lang['project_invoice_timesheet_start_time'] = 'Hora de inicio: %s';
$lang['project_invoice_timesheet_end_time'] = 'Hora final: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Tiempo de inicio de session: %s';
$lang['project_view_as_client'] = 'Ver el proyecto como cliente';
$lang['project_mark_all_tasks_as_completed'] = 'Marcar todas last areas como completadas y detener todos los temporadizadores (No hay notificaciones enviadas a los miembros del proyecto)';
$lang['project_not_started_status_tasks_timers_found'] = 'Tareas del temporadizador encontrada para este proyecto pero el proyecto no esta con el estado inicio. Recomendar cambiar el estado del proyecto en el progreso';
$lang['project_status'] = 'Estados';
$lang['project_status_1'] = 'Noiniciado';
$lang['project_status_2'] = 'En progreso';
$lang['project_status_3'] = 'En espera';
$lang['project_status_4'] = 'Finalizado';

$lang['project_file_uploaded_by_customer'] = 'Cliente';
$lang['project_file_dateadded'] = 'Fecha de la subida';
$lang['project_file_filename'] = 'Nombre del archivo';
$lang['project_file__filetype'] = 'Tipo del archivo';
$lang['project_file_visible_to_customer'] = 'Visible para el cliente';
$lang['project_file_uploaded_by'] = 'Subido por';
$lang['edit_project'] = 'Editar proyecto';
$lang['copy_project'] = 'Copiar proyecto';
$lang['delete_project'] = 'Borrar proyecto';
$lang['project_task_assigned_to_user'] = 'Tareas asignadas para ti';
$lang['seconds'] = 'Segundos';
$lang['hours'] = 'Horas';
$lang['minutes'] = 'Minutos';
$lang['project']                 = 'Proyecto';
$lang['project_lowercase']       = 'proyecto';
$lang['projects']                = 'Proyectos';
$lang['projects_lowercase']      = 'proyectos';
$lang['project_settings']      = 'Ajustes del proyecto';
$lang['project_invoiced_successfuly']             = 'Facturas del proyecto con exito';
$lang['new_project']             = 'Nuevo proyecto';
$lang['project_files']            = 'Archivos';
$lang['project_activity']            = 'Actividad';
$lang['project_name']            = 'Nombre del proyecto';
$lang['project_description']            = 'Descripcio del proyecto';
$lang['project_customer']            = 'Cliente';
$lang['project_start_date']            = 'Fecha de inicio';
$lang['project_datecreated']            = 'Fecha de creación';
$lang['project_deadline']            = 'Fecha tope';
$lang['project_billing_type']            = 'Tipo de facturación';
$lang['project_billing_type_fixed_cost']            = 'Precio fijo';
$lang['project_billing_type_project_hours']            = 'Horas del proyecto';
$lang['project_billing_type_project_task_hours']            = 'Horas de las tareas';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Base de la tarifa del trabajo por hora';
$lang['project_rate_per_hour']            = 'Tarifa por hora';
$lang['project_total_cost']            = 'Costo total';
$lang['project_members']            = 'Miembros del proyecto';
$lang['project_member_removed']     = 'Miembro del proyecto eliminado correctamente';
$lang['project_overview']           = 'descripción del proyecto';
$lang['project_gant']            = 'Vista Gantt';
$lang['project_milestones']            = 'Hitos';
$lang['project_milestone_order']            = 'Orden';
$lang['project_milestone_duedate_passed']            = 'La fecha de vencimiento expirada';
$lang['record_timesheet']            = 'Registro de horas';
$lang['new_milestone']            = 'Nuevo hito';
$lang['edit_milestone']            = 'Editar hito';
$lang['milestone_name']            = 'Nombre';
$lang['milestone_due_date']            = 'Fecha de vencimiento';
$lang['project_milestone']            = 'Hito';
$lang['project_notes']            = 'Notas';
$lang['project_timesheets']            = 'Planillas';
$lang['project_timesheet']            = 'Planilla';
$lang['milestone_total_logged_time']            = 'Tiempo registrado';
$lang['project_overview_total_logged_hours']            = 'Total de horas registradas';
$lang['milestones_uncategorized']            = 'Sin categoría';
$lang['milestone_no_tasks_found']            = 'Tarea no encontrada';
$lang['copy_project_discussions_not_included']            = 'Archivos y comentarios no incluidos';
$lang['project_copied_successfuly']            = 'Los datos del proyecto se han copiado correctamente';
$lang['failed_to_copy_project']            = 'No se pudo copiar el proyecto';
$lang['copy_project_task_include_check_list_items']            = 'Copiar puntos de la lista';
$lang['copy_project_task_include_assignees']            = 'Copiar los mismos cesionarios';
$lang['copy_project_task_include_followers']            = 'Copiar los mismo seguidores';

$lang['project_days_left']            = 'Dias dejados';
$lang['project_open_tasks']            = 'Tareas abiertas';
$lang['timesheet_stop_timer']            = 'Detener temporadizador';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'No se pudo agregar las planillas. La hora de finalizacion es menor que el tiempo de inicio';
$lang['project_timesheet_user']            = 'Miembro';
$lang['project_timesheet_start_time']            = 'Hora de inicio';
$lang['project_timesheet_end_time']            = 'Hora de finalización';
$lang['project_timesheet_time_spend']            = 'Tiempo usado';
$lang['project_timesheet_task']            = 'Tarea';
$lang['project_invoices']                = 'Facturas';
$lang['total_logged_hours_by_staff']            = 'Total de tiempo registrado';
$lang['invoice_project']            = 'Factura del proyecto';
$lang['invoice_project_info']            = 'Informacion de la facture del proyecto';
$lang['invoice_project_data_single_line']            = 'Linea única';
$lang['invoice_project_data_task_per_item']            = 'Tarea por artículo';
$lang['invoice_project_data_timesheets_individualy']            = 'Todas las planillas individual';
$lang['invoice_project_item_name_data']            = 'Nombre del artículo';
$lang['invoice_project_description_data']            = 'Descripción';
$lang['invoice_project_projectname_taskname']            = 'Nombre del proyecto + Nombre de la tarea';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Todas las tareas + tiempo total registrado por tarea';
$lang['invoice_project_project_name_data']            = 'Nombre del proyecto';
$lang['invoice_project_timesheet_indivudualy_data']            = 'Hora de inicio de la planilla + hora de finalizacion + tiempo total registrado';
$lang['invoice_project_total_logged_time_data']            = 'Tiempo total registrado';

$lang['project_allow_client_to'] = 'Permitir al cliente %s';
$lang['project_setting_view_task_attachments'] = 'archivos adjuntos de tareas vistas';
$lang['project_setting_view_task_checklist_items'] = 'Lista de tareas vistas del artículo';
$lang['project_setting_upload_files'] = 'subir archivos';
$lang['project_setting_view_task_comments'] = 'comentarios de las tareas vistas';
$lang['project_setting_upload_on_tasks'] = 'subir archivos adjuntos a las tareas';
$lang['project_setting_view_task_total_logged_time'] = 'Total del tiempo registrado en tareas vistas';
$lang['project_setting_open_discussions'] = 'discusiones abiertas';
$lang['project_setting_comment_on_tasks'] = 'comentarios sobre last areas del proyecto';
$lang['project_setting_view_tasks'] = 'tareas vistas';
$lang['project_setting_view_milestones'] = 'hitos vistos';
$lang['project_setting_view_gantt'] = 'Gantt visto';
$lang['project_setting_view_timesheets'] = 'Planillas vistas';
$lang['project_setting_view_activity_log'] = 'ver registro de actividad';
$lang['project_setting_view_team_members'] = 'ver los miembros del equipo';

$lang['project_discussion_visible_to_customer_yes']                 = 'Visible';
$lang['project_discussion_visible_to_customer_no']                 = 'No Visible';

$lang['project_discussion_posted_on']                 = 'Publicado en %s';
$lang['project_discussion_posted_by']                 = 'Publicado por %s';
$lang['project_discussion_failed_to_delete']                 = 'No se pudo eliminar la discusion';
$lang['project_discussion_deleted']                 = 'La discussion se ha eliminado correctamente';
$lang['project_discussion_no_activity']                 = 'Ningúna actividad';
$lang['project_discussion']                 = 'Discusion';
$lang['project_discussions']                 = 'Discusiones';
$lang['edit_discussion'] = 'Crear Discusion';
$lang['new_project_discussion'] = 'Crear Discusion';
$lang['project_discussion_subject'] = 'Tema';
$lang['project_discussion_description'] = 'descripción';
$lang['project_discussion_show_to_customer'] = 'Visible para el cliente';
$lang['project_discussion_total_comments'] = 'Comentarios totales';
$lang['project_discussion_last_activity'] = 'Ultima actividad';
$lang['discussion_add_comment'] = 'Agregar comentario';
$lang['discussion_newest'] = 'El mas reciente';
$lang['discussion_oldest'] = 'El mas viejo';
$lang['discussion_attachments'] = 'Archivos adjuntos';
$lang['discussion_send'] = 'Enviar';
$lang['discussion_reply'] = 'Respuesta';
$lang['discussion_edit'] = 'Editar';
$lang['discussion_edited'] = 'Modificar';
$lang['discussion_you'] = 'Tu';
$lang['discussion_save'] = 'Guardar';
$lang['discussion_delete'] = 'Borrar';
$lang['discussion_view_all_replies'] = 'Mostras todas las respuestas';
$lang['discussion_hide_replies'] = 'Ocultar respuestas';
$lang['discussion_no_comments'] = 'Ningún comentario';
$lang['discussion_no_attachments'] = 'Ningún archivo adjunto';
$lang['discussion_attachments_drop'] = 'Arrastrar y soltar para cargar el archivo';
$lang['project_note'] = 'Nota';
$lang['project_note_private'] = 'Notas privadas';
$lang['project_save_note'] = 'Guardar nota';

# Project Activity
$lang['project_activity_created'] = 'Proyecto creado';
$lang['project_activity_updated'] = 'Proyecto actualizado';
$lang['project_activity_removed_team_member'] = 'Miembro del equipo eliminado';
$lang['project_activity_added_team_member'] = 'Nuevo miembro del equipo agregado';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marcadas todas las tareas como completas';
$lang['project_activity_recorded_timesheet'] = 'Factura registrada';
$lang['project_activity_task_name'] = 'Task:';
$lang['project_activity_deleted_discussion'] = 'Eliminar Discusion';
$lang['project_activity_created_discussion'] = 'Dicusion creada';
$lang['project_activity_updated_discussion'] = 'Discusion actualizada';
$lang['project_activity_commented_on_discussion'] = 'Observacion de la discusion';
$lang['project_activity_deleted_discussion_comment'] = 'Observacion de la discussion eliminada';
$lang['project_activity_deleted_milestone'] = 'Hitos eliminados';
$lang['project_activity_updated_milestone'] = 'Actualizacion de hito';
$lang['project_activity_created_milestone'] = 'Nuevo hito creado';
$lang['project_activity_invoiced_project'] = 'Proyecto facturado';
$lang['project_activity_task_marked_complete'] = 'Tarea marcada como completa';
$lang['project_activity_task_unmarked_complete'] = 'Tarea desmarcada como completa';
$lang['project_activity_task_deleted'] = 'Tarea eliminada';
$lang['project_activity_new_task_comment'] = 'Tarea comentada en';
$lang['project_activity_new_task_attachment'] = 'Archivos adjuntos cargados en la tarea';
$lang['project_activity_new_task_assignee'] = 'Nuevo cesionario de tarea añadido';
$lang['project_activity_task_assignee_removed'] = 'Cesonario de tarea eliminado';
$lang['project_activity_task_timesheet_deleted'] = 'Factura eliminada';
$lang['project_activity_uploaded_file'] = 'Subir archivo del proyecto';
$lang['project_activity_status_updated'] = 'Subir estado del proyecto';
$lang['project_activity_visible_to_customer'] = 'Visible para el cliente';
$lang['project_activity_project_file_removed'] = 'Archivo del proyecto eliminado';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'Nuevo archive cargado';
$lang['not_customer_created_new_project_discussion'] = 'Nueva discusion creada del proyecto';
$lang['not_customer_commented_on_project_discussion'] = 'Nuevo comentario en la discusion del proyecto';

# Customers area
$lang['clients_my_estimates'] = 'Mis Estimaciones';
$lang['client_no_reply'] = 'Sin respuesta';
$lang['clients_nav_projects'] = 'Proyectos';
$lang['clients_my_projects'] = 'Mis Proyectos';
$lang['client_profile_image'] = 'Imagen de perfil';

///
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees.';
$lang['tasks_reminder_notification_before'] = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder'] = 'Task deadline reminder';
$lang['dt_length_menu_all'] = 'Todo';
$lang['task_not_finished'] = 'No Completado';
$lang['task_billed_cant_start_timer'] = 'Task billed. Timer cant be start';
$lang['invoice_task_billable_timers_found'] = 'Started timers found';
$lang['project_timesheet_not_updated'] = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found'] = 'No timers found for this task';
$lang['invoice_project_tasks_not_started'] = 'Not yet started | Start Date: %s';
$lang['invoice_project_see_billed_tasks'] = 'See tasks that will be billed on this invoice';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'All billed tasks will be marked as finished';
$lang['invoice_project_nothing_to_bill'] = 'No tasks to bill. Feel free to add whatever you want in the invoice items.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tasks with future start date cannot be billed';
$lang['invoice_project_stop_all_timers'] = 'Stop all timers';
$lang['invoice_project_stop_billabe_timers_only'] = 'Stop only billable timers';
$lang['project_tasks_total_timers_stopped'] = 'Stopped total %s timers';
$lang['project_invoice_timers_started'] = 'Task timers found running on billable tasks, invoice cannot be created. Please stop task timers to create invoice.';
$lang['task_start_timer_only_assignee'] = 'You need to be asigned on this task to start the timer!';
$lang['task_comments'] = 'Comments';
$lang['invoice_total_tax'] = 'IVA Total';
$lang['estimates_total_tax'] = 'IVA Total';
$lang['report_invoice_total_tax'] = 'IVA Total';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Actividad de los Proyectos';
$lang['home_project_activity_not_found'] = 'No projects activity found';
$lang['view_tracking'] = 'Views Tracking';
$lang['view_date'] = 'Date';
$lang['view_ip'] = 'IP Address';
$lang['article_total_views'] = 'Total Views';
$lang['leads_source'] = 'Source';
$lang['invoices_available_for_merging'] = 'Invoices available for merging';
$lang['invoices_merge_discount'] = 'You will have to apply discount of total %s manualy to this invoice';
$lang['invoice_merge_number_warning'] = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as'] = 'Mark as %s';
$lang['invoice_unmark_as'] = 'Unmark as %s';
$lang['invoice_status_cancelled'] = 'Cancelled';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Seleccionar todas las tareas';
$lang['lead_company'] = 'Empresa';

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
$lang['contact_primary'] = 'Contacto Principal';
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
$lang['company_primary_email'] = 'Email Principal';
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
$lang['settings_allowed_upload_file_types'] = 'Tipos de archivos permitidos';
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
$lang['check_for_new_version']          = 'Buscar Actualizaciones';

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
$lang['show_all_tasks_for_project_member'] = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member'] = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency becuase the system found different currencies used for expenses.';

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
