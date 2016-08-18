// Sed datatables error throw console log
$.fn.dataTable.ext.errMode = 'throw';
// Delay function
var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();
// Function to slug string
function slugify(string) {
    return string
    .toString()
    .trim()
    .toLowerCase()
    .replace(/\s+/g, "-")
    .replace(/[^\w\-]+/g, "")
    .replace(/\-\-+/g, "-")
    .replace(/^-+/, "")
    .replace(/-+$/, "");
}
var original_top_search_val;
var tab_active = get_url_param('tab');
var tab_group = get_url_param('group');
var side_bar = $('#side-menu');
var setup_menu = $('#customize-sidebar');
var menu_href_selector;
var activity_log_table = $('.table-activity-log');
var available_reminders_table = [
'.table-reminders',
'.table-invoices',
'.table-reminders-leads',
'.table-invoices',
'.table-estimates',
'.table-proposals'];

$(window).bind("resize click", function() {
    // Add special class to minimalize page elements when screen is less than 768px
    setBodySmall();
    // Waint until metsiMenu, collapse and other effect finish and set wrapper height
    setTimeout(function() {
        mainWrapperHeightFix();
    }, 300);
});

$(document).ready(function() {
    $(document).on('focusin', function(e) {
        if ($(e.target).closest(".mce-window").length) {
            e.stopImmediatePropagation();
        }
    });
    // Set timeout to remove php alerts added from flashdata
    setTimeout(function() {
        $('#alerts').slideUp();
    }, 4000);
    // Check for active tab if any found in url so we can set this tab to active - Tab active is defined on top
    if (tab_active) {
        $('body').find('.nav-tabs [href="#' + tab_active + '"]').click();
    }
    // Check for active tab groups (this is custom made) and not related to boostrap - tab_group is defined on top
    if (tab_group) {
        // Do not track bootstrap default tabs
        $('body').find('.nav-tabs li').not('[role="presentation"]').removeClass('active');
        // Add the class active to this group manualy so the tab can be highlighted
        $('body').find('.nav-tabs [data-group="' + tab_group + '"]').parents('li').addClass('active');
    }
    // Set datetimepicker locale
    jQuery.datetimepicker.setLocale(locale);
    // Set moment locale
    moment.locale(locale);
    // Set timezone locale
    moment().tz(timezone).format();
    // Init tinymce editors
    init_editor();
    // Init staff top timers
    init_timers();
    // Dont close dropdown on timer top click
    $('body').on('click', 'li.timer a', function(e) {
        e.stopPropagation();
    });
    // Init all color pickers
    init_color_pickers();
    // Init tables offline (no serverside)
    initDataTableOffline();
    // Init switch ON/OFF
    bs_switch();
    // Bootstrap switch active or inactive global function
    $('body').on('switchChange.bootstrapSwitch', '.switch-box', function(event, state) {
        var switch_url = $(this).data('switch-url');
        if (!switch_url) {
            return;
        }
        switch_field(this);
    });
    // Init progress bars
    init_progress_bars();
    // Init datepickers
    init_datepicker();
    // Init bootstrap selectpicker
    init_selectpicker();
    // Optimize body
    setBodySmall();
    // Optimize wrapper height
    mainWrapperHeightFix();
    // Validate all form for reminders
    init_form_reminder();
    // On delete reminder reload the tables
    $('body').on('click', '.delete-reminder', function() {
        var r = confirm(confirm_action_prompt);
        if (r == false) {
            return false;
        } else {
            $.get($(this).attr('href'), function(response) {
                alert_float(response.alert_type, response.message);
                // Looop throug all availble reminders table to reload the data
                $.each(available_reminders_table,function(i,table){
                    if ($.fn.DataTable.isDataTable(table)) {
                        $('body').find(table).DataTable().ajax.reload();
                    }
                });
            }, 'json');
        }
        return false;
    });
    $('body').on('click','[data-loading-text]',function(){
        var form = $(this).data('form');
        if(form != null){
            if($(form).valid()){
                $(this).button('loading');
            }
        } else {
            $(this).button('loading');
        }
    });
    // Custom close function for reminder modals in case is modal in modal
    $('body').on('click', '.close-reminder-modal', function() {
        $('.reminder-modal').modal('hide');
    });
    // Recalculate responsive for hidden tables
    $('body').on('shown.bs.tab','a[data-toggle="tab"]' ,function (e) {
        $( $.fn.dataTable.tables(true) ).DataTable().responsive.recalc();
    });
    // Init are you sure on forms
    $('form').not('#single-ticket-form,#calendar-event-form,#proposal-form,#task-form').areYouSure();
    // Check for active class in sidebar links
    $.each(side_bar.find('li > a'), function(i, data) {
        var href = $(data).attr('href');
        // Check if the url matches so we can add the active class
        if (location == href) {
            menu_href_selector = 'a[href="' + href + '"]';
            // Do not add on the top quick links
            side_bar.find(menu_href_selector).parents('li').not('.quick-links').addClass('active');
            // Set aria expanded to true
            side_bar.find(menu_href_selector).prop('aria-expanded', true);
            side_bar.find(menu_href_selector).parents('ul.nav-second-level').prop('aria-expanded', true);
            side_bar.find(menu_href_selector).parents('li').find('a:first-child').prop('aria-expanded', true);
        }
    });
    // Check for customizer active class
    if (setup_menu.hasClass('display-block')) {
        $.each(setup_menu.find('li > a'), function(i, data) {
            var href = $(data).attr('href');
            if (location == href) {
                menu_href_selector = 'a[href="' + href + '"]';
                setup_menu.find(menu_href_selector).parents('li').addClass('active');
                setup_menu.find(menu_href_selector).prev('active');
                setup_menu.find(menu_href_selector).parents('ul.nav-second-level').prop('aria-expanded', true);
                setup_menu.find(menu_href_selector).parents('li').find('a:first-child').prop('aria-expanded', true);
            }
        });
    }
    // Init now metisMenu for the main admin sidebar
    $('#side-menu').metisMenu();
    // Init setup menu
    $('#customize-sidebar').metisMenu();
    // Handle minimalize sidebar menu
    $('.hide-menu').click(function(event) {
        event.preventDefault();
        if ($(window).width() < 769) {
            $("body").toggleClass("show-sidebar");
        } else {
            $("body").toggleClass("hide-sidebar");
        }
    });
    // Check if is mobile to clone the searchbar to the body so can be visible on mobile
    if (is_mobile()) {
        // Clone the input
        var search_bar = $('#top_search').clone();
        // Clone the button
        var search_button = $('#top_search_button').clone();
        // Store mobile search
        var ms = $('#mobile-search');
        ms.find('ul').append(search_bar).append(search_button);
        // Remove the hidden class for mobile search wrapper
        ms.removeClass('hide');
        // Remove the original search for desktop
        $('.navbar-right #top_search').remove();
        // Remove the original search for desktop
        $('.navbar-right #top_search_button').remove();
    }
    // Top search input fetch results
    $('#search_input').on('keyup paste', function() {
        var q = $(this).val().trim();
        var wrapper = $('#wrapper');
        var search_results = $('#search_results');
        if (q == '') {
            wrapper.unhighlight();
            search_results.html('');
            original_top_search_val = '';
            return;
        }
        delay(function() {
            if (q == original_top_search_val) { return; }
            $.post(admin_url + 'misc/search', {
                q: q
            }).success(function(results) {
                wrapper.unhighlight();
                search_results.html(results);
                wrapper.highlight(q);
                original_top_search_val = q;
            });
        }, 700);
    });
    // Fix for dropdown search to close if user click anyhere on html except on dropdown
    $("body").click(function(e) {
        if (!$(e.target).parents('#top_search_dropdown').hasClass('search-results')) {
            $('#top_search_dropdown').remove();
            $('#search_input').val('');
        }
    });
    // Focus search input on click
    $('#top_search_button button').on('click', function() {
        $('#search_input').focus();
    });
    // Init tooltips
    $('body').tooltip({
        selector: '[data-toggle="tooltip"]'
    });
    // Init popovers
    $('body').popover({
        selector: '[data-toggle="popover"]'
    });
    // Close all popovers if user click on body and the click is not inside the popover content area
    $('body').on('click', function(e) {
        $('[data-toggle="popover"]').each(function() {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
    // Remove tooltip fix on body click (in case user clicked link and tooltip stays open)
    $('body').on('click', function() {
        $('.tooltip').remove();
    });
    // Add are you sure on all delete links (onclick is not included here)
    $('body').on('click', '._delete', function(e) {
        var r = confirm(confirm_action_prompt);
        if (r == true) { return true; } else { return false;}
    });
    // Activity log tables filter by date / Currently used for system activity log and ticket pipe log
    if (activity_log_table.length > 0) {
        $('.datepicker.activity-log-date').on('change', function() {
            activity_log_table.DataTable().column($(this).attr('data-column')).search($(this).val()).draw();
        });
    }

    // On mass_select all select all the availble rows in the tables.
    $('body').on('change', '#mass_select_all', function() {
        var to,rows,checked;
        to = $(this).data('to-table');
        rows = $('.table-' + to).find('tbody tr');
        checked = $(this).prop('checked');
        $.each(rows, function() {
            var checkbox = $($(this).find('td').eq(($('.table-' + to + ' thead th').length - 1))).find('input').prop('checked', checked);
        });
    });
    // Init the editor for email templates where changing data is allowed
    $('body').on('show.bs.modal','.modal.email-template',function(){
        init_editor($(this).data('editor-id'));
    });
    // Remove the editor inited for the email sending templates where changing the email template data is allowed
    $('body').on('hidden.bs.modal','.modal.email-template',function(){
        tinymce.remove($(this).data('editor-id'));
    });

    $('body').on('hidden.bs.modal', '.reminder-modal,#estimate_send_to_client_modal,#proposal_send_to_customer', function(event) {
        var estimate_pipeline_modal = $('.estimate-pipeline:visible').length;
        var proposal_pipeline_modal = $('.proposal-pipeline-modal:visible').length;
        var lead_modal_open = $('.lead-modal:visible').length;
        // Fix for scroll
        if (proposal_pipeline_modal > 0 || lead_modal_open > 0 || estimate_pipeline_modal > 0) {
            $('body').addClass('modal-open');
        }
    });

    // Customizer close and remove open from session
    $('.close-customizer').on('click', function(e) {
        e.preventDefault();
        $('#customize-sidebar').addClass(isRTL == 'true' ? "fadeOutRight" : "fadeOutLeft");
        // Clear the session for setup menu so in reload wont be closed
        $.get(admin_url + 'misc/set_customizer_closed');
    });

    // Open customizer and add that is open to session
    $('.open-customizer').on('click', function(e) {
        e.preventDefault();
        // Store the setup menu selector
        var customizer = $('#customize-sidebar');
        if (customizer.hasClass(isRTL == 'true' ? "fadeOutRight" : "fadeOutLeft")) {
            customizer.removeClass(isRTL == 'true' ? "fadeOutRight" : "fadeOutLeft");
        }
        customizer.addClass(isRTL == 'true' ? "fadeInRight" : "fadeInLeft");
        customizer.addClass('display-block');
        // Set session that the setup menu is open in case of reload
        $.get(admin_url + 'misc/set_customizer_open');
    });
    // Change live the colors for colorpicker in kanban/pipeline
    $('body').on('click', '.cpicker', function() {
        var color = $(this).data('color');
        $(this).parents('.cpicker-wrapper').find('.cpicker-big').removeClass('cpicker-big').addClass('cpicker-small');
        $(this).removeClass('cpicker-small', 'fast').addClass('cpicker-big', 'fast');
        if($(this).hasClass('kanban-cpicker')){
            $(this).parents('.panel-heading-bg').css('background', color);
            $(this).parents('.panel-heading-bg').css('border', '1px solid ' + color);
        } else if($(this).hasClass('calendar-cpicker')){
            $('body').find('._event input[name="color"]').val(color);
        }
    });
    // Notification profile link click
    $('body').on('click', '.notification_link', function() {
        var link = $(this).data('link');
        window.location.href = link;
    });
    // Set notifications to read when notifictions dropdown is opened
    $('.notifications-icon').on('click', function() {
        $.post(admin_url + 'misc/set_notifications_read').success(function(response) {
            response = $.parseJSON(response);
            if (response.success == true) {
                $(".icon-notifications").addClass('hide');
                setTimeout(function() {
                    $('.notification-box.unread').removeClass('unread', 'slow');
                }, 1000);
            }
        })
    });

    // Tables
    var ticket_created = 8;
    if (use_services == 0) {
        ticket_created = 7;
    }
    var tickets_not_sortable = $('.table-projects').find('th').length - 1;
    var TicketServerParams = {
        'custom_view': '[name="custom_view"]',
        'project_id': '[name="project_id"]',
    }
    initDataTable('.tickets-table', admin_url + 'tickets', [tickets_not_sortable], [tickets_not_sortable], TicketServerParams, [ticket_created, 'DESC']);
    initDataTable('.tickets-table-home', admin_url + 'tickets', [tickets_not_sortable], [tickets_not_sortable], 'undefined', [ticket_created, 'DESC']);
    initDataTable('.table-announcements', admin_url + 'announcements', [2], [2], 'undefined', [1, 'DESC']);
    initDataTable('.table-staff-projects', admin_url + 'projects/staff_projects', 'undefined', 'undefined', 'undefined', [2, 'ASC']);
    // Ticket pipe log and system activity log
    initDataTable('.table-activity-log', window.location.href, 'undefined', 'undefined', 'undefined', [1, 'DESC']);
    // Invoices additional server params
    var Invoices_Estimates_ServerParams = {
        'status': '[name="status"]',
        'custom_view': '[name="custom_view"]',
        'project_id': '[name="project_id"]',
    };
    initDataTable('.table-invoices', admin_url + 'invoices/list_invoices', 'undefined', 'undefined', Invoices_Estimates_ServerParams, [0, 'DESC']);
    initDataTable('.table-estimates', window.location.href, 'undefined', 'undefined', Invoices_Estimates_ServerParams, [0, 'DESC']);

    $('#send_file').on('show.bs.modal', function(e) {
        $('#send_file').find('input[name="filetype"]').val($($(e.relatedTarget)).data('filetype'));
        $('#send_file').find('input[name="file_path"]').val($($(e.relatedTarget)).data('path'));
        $('#send_file').find('input[name="file_name"]').val($($(e.relatedTarget)).data('file-name'));
        if ($('input[name="email"]').length > 0) {
            $('#send_file').find('input[name="send_file_email"]').val($('input[name="email"]').val());
        }
    });
    // Set password checkbox change
    $('body').on('change', 'input[name="send_set_password_email"]', function() {
        $('body').find('.client_password_set_wrapper').toggleClass('hide');
    });
    // Todo status change checkbox click
    $('body').on('change', '.todo input[type="checkbox"]', function() {
        var finished = $(this).prop('checked') === true ? 1 : 0;
        window.location.href = admin_url + 'todo/change_todo_status/' + $(this).val() + '/' + finished;
    });
    // Makes todos sortable
    var todos_sortable = $(".todos-sortable").sortable({
        connectWith: ".todo",
        items: "li",
        handle: '.dragger',
        appendTo: "body",
        update: function(event, ui) {
            if (this === ui.item.parent()[0]) {
                update_todo_items();
            }
        }
    });
});

// Progress bar animation load
function init_progress_bars() {
    setTimeout(function() {
        $('.progress .progress-bar').each(function() {
            var bar = $(this);
            var perc = bar.attr("data-percent");
            var current_perc = 0;
            var progress = setInterval(function() {
                if (current_perc >= perc) {
                    clearInterval(progress);
                    if (perc == 0) {
                        bar.css('width', 0 + '%');
                    }
                } else {
                    current_perc += 1;
                    bar.css('width', (current_perc) + '%');
                }
                if (!bar.hasClass('no-percent-text')) {
                    bar.text((current_perc) + '%');
                }
            }, 10);
        });
    }, 300);
}
// Get url params like $_GET
function get_url_param(param) {
    var vars = {};
    window.location.href.replace(location.hash, '').replace(
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function(m, key, value) { // callback
            vars[key] = value !== undefined ? value : '';
        }
        );

    if (param) {
        return vars[param] ? vars[param] : null;
    }
    return vars;
}

function mainWrapperHeightFix() {
    // Get and set current height
    var headerH = 56;
    var navigationH = $("#side-menu").height();
    var contentH = $(".content").height();
    var h = $(window).height() - headerH + 'px';
    $('#customize-sidebar').css('min-height', h);
    // Set new height when contnet height is less then navigation
    if (contentH < navigationH) {
        $("#wrapper").css("min-height", navigationH + 'px');
    }
    // Set new height when contnet height is less then navigation and navigation is less then window
    if (contentH < navigationH && navigationH < $(window).height()) {
        $("#wrapper").css("min-height", $(window).height() - headerH + 'px');
    }
    // Set new height when contnet is higher then navigation but less then window
    if (contentH > navigationH && contentH < $(window).height()) {
        $("#wrapper").css("min-height", $(window).height() - headerH + 'px');
    }
}
function setBodySmall() {
    if ($(this).width() < 769) {
        $('body').addClass('page-small');
    } else {
        $('body').removeClass('page-small');
        $('body').removeClass('show-sidebar');
    }
}
// Generate random password
function generatePassword(field) {
    var length = 12,
    charset = "abcdefghijklnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
    retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    $(field).parents().find('input.password').val(retVal)
}
// Switch field make request
function switch_field(field) {
    var status,url,id;
    status = 0;
    if ($(field).prop('checked') == true) {
        status = 1;
    }
    url = $(field).data('switch-url');
    id = $(field).data('id');
    $.get(site_url + url + '/' + id + '/' + status);
}

// General validate form function
function _validate_form(form, form_rules, submithandler) {
    $.extend($.validator.messages, {
        required: field_is_required,
        maxlength:field_max_length,
        extension:function(){
            return extension_not_allowed;
        }
    });

    $.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'text-danger',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
    });

    $(form).validate({
        rules: form_rules,
        messages: {
            email: {
                remote: email_exists,
            },
        },
        ignore: [],
        submitHandler: function(form) {
            if (typeof(submithandler) !== 'undefined') {
                submithandler(form);
            } else {
                return true;
            }
        }

    });
    setTimeout(function() {
        var custom_required_fields = $(form).find('[data-custom-field-required]');
        if (custom_required_fields.length > 0) {
            $.each(custom_required_fields, function() {
                $(this).rules("add", {
                    required: true
                });
            });
        }

    }, 15);
    return false;
}
// Delete option from database AJAX
function delete_option(child, id) {
    var r = confirm(confirm_action_prompt);
    if (r == false) {
        return false;
    } else {
        $.get(admin_url + 'settings/delete_option/' + id, function(response) {
            if (response.success == true) {
                $(child).parents('.option').remove();
            }
        }, 'json');
    }
}
// Slide toggle any selector passed
function slideToggle(selector, callback) {
    if ($(selector).hasClass('hide')) {
        $(selector).toggleClass('hide', 'slow');
    } else {
        $(selector).slideToggle();
    }
    // Set all progress bar to 0 percent
    var progress_bars = $('.progress-bar').not('.not-dynamic');
    if (progress_bars.length > 0) {
        $('.progress .progress-bar').each(function() {
            $(this).css('width', 0 + '%');
            $(this).text(0 + '%');
        });
        // Init the progress bars again
        init_progress_bars();
    }
    // Possible callback after slide toggle
    if (typeof(callback) == 'function') {
        callback();
    }
}
// Generate float alert
function alert_float(type, message) {
    $.notify({
        message: message,
    }, {
        delay: 2000,
        type: type,
        animate: {
            enter: 'animated bounceInRight',
            exit: 'animated bounceOutRight'
        },
    });
}

function init_rel_tasks_table(rel_id, rel_type, server_params, selector) {
    if (typeof(selector) == 'undefined') {
        selector = '.table-rel-tasks';
    }
    var not_sortable_tasks = ($('body').find(selector).find('th').length - 1);
    initDataTable(selector, admin_url + 'tasks/init_relation_tasks/' + rel_id + '/' + rel_type, [not_sortable_tasks], [not_sortable_tasks], server_params, [2, 'ASC']);
}

function initDataTableOffline(dt_table) {
    var selector = '.dt-table';
    if (typeof(dt_table) !== 'undefined') {
        selector = dt_table;
    }
    var order_col,order_type,options;
    var _options = {
        "language": dt_lang,
        "processing": true,
        'paginate': true,
        "responsive": true,
        "autoWidth": false,
        "order":[0,'DESC'],
        "stateSave":true,
    }
    var order_col = $($(this)).data('order-col');
    var order_type = $($(this)).data('order-type');
    var tables = $(selector);
    $.each(tables,function(){
        options = _options;
        order_col = $(this).data('order-col');
        order_type = $(this).data('order-type');
        if (order_col && order_type) {
            options.order = [
            [order_col, order_type]
            ]
        }
        $(this).DataTable(options);
    });
}

// General function for all datatables serverside
function initDataTable(table, url, notsearchable, notsortable, fnserverparams, defaultorder) {

    var _table_name = table;
    if ($(table).length == 0) {
        return;
    }
    if (fnserverparams == 'undefined' || typeof(fnserverparams) == 'undefined') {
        fnserverparams = []
    }
    var export_columns = [':visible'];
    // If not order is passed order by the first column
    if (typeof(defaultorder) == 'undefined') {
        defaultorder = [0, 'ASC'];
    }

    var buttons = [{
        extend: 'collection',
        text: dt_button_export,
        className: 'btn btn-default',
        buttons: [{
            extend: 'excelHtml5',
            text: dt_button_excel,
            exportOptions: {
                columns: export_columns,
            }

        }, {
            extend: 'csvHtml5',
            text: dt_button_csv,
            exportOptions: {
                columns: export_columns
            }

        }, {
            extend: 'pdfHtml5',
            text: dt_button_pdf,
            orientation: 'landscape',
            customize: function(doc) {
                // Fix for column widths
                var table_api = table.DataTable();
                var columns = table_api.columns().visible();
                var columns_total = columns.length;
                var pdf_widths = [];
                for (i = 0; i < columns_total; i++) {
                    // Is only visible column
                    if (columns[i] == true) {
                        pdf_widths.push('*');
                    }
                }
                doc.styles.tableHeader.alignment = 'left'
                doc.styles.tableHeader.margin = [5, 5, 5, 5]
                doc.content[1].table.widths = pdf_widths;
                doc.pageMargins = [12, 12, 12, 12];

            },
            exportOptions: {
                columns: export_columns,
            }
        }, {
            extend: 'print',
            text: dt_button_print,
            exportOptions: {
                columns: export_columns,
            },
        }],
    }, {
        extend: 'colvis',
        postfixButtons: ['colvisRestore'],
        className: 'btn btn-default dt-column-visibility',
        text: dt_button_column_visibility
    }, {
        text: dt_button_reload,
        className: 'btn btn-default',
        action: function(e, dt, node, config) {
            dt.ajax.reload();
        }
    }, ];

    if (table == '.table-invoices-single-client') {
        buttons.push({
            text: zip_invoices,
            className: 'btn btn-info',
            action: function(e, dt, node, config) {
                client_zip_invoices();
            }
        });
    } else if (table == '.table-estimates-single-client') {
        buttons.push({
            text: zip_estimates,
            className: 'btn btn-info',
            action: function(e, dt, node, config) {
                client_zip_estimates();
            }
        });
    } else if (table == '.table-payments-single-client') {
        buttons.push({
            text: zip_payments,
            className: 'btn btn-info',
            action: function(e, dt, node, config) {
                client_zip_payments();
            }
        });
    } else if ((table == '.table-rel-tasks' && has_tasks_permission == 1) || table == '.table-rel-tasks-leads' && has_tasks_permission == 1) {
        buttons.push({
            text: dt_new_task,
            className: 'btn btn-info',
            action: function(e, dt, node, config) {
                new_task_from_relation(table);
            }
        });
    } else if (table == '.table-contract-equipments') {
        buttons.push({
            text: dt_new_equipment,
            className: 'btn btn-info',
            action: function(e, dt, node, config) {
                new_equipment();
            }
        });
    } else if (table == '.table-leads' || table == '.table-clients') {
        if ((table == '.table-clients' && has_delete_permission_customer == 1) || (table == '.table-leads' && is_admin == 1)) {
            var del;
            if (table == '.table-leads') {
                del = 'leads';
            } else {
                del = 'clients';
            }
            buttons.push({
                text: mass_delete_btn,
                className: 'btn btn-danger _mass_delete',
                action: function(e, dt, node, config) {
                    mass_delete(del);
                }
            });
        }
    }

    var length_options = [10, 25, 50, 100];
    var length_options_names = [10, 25, 50, 100];
    tables_pagination_limit = parseFloat(tables_pagination_limit);
    if ($.inArray(tables_pagination_limit, length_options) == -1) {
        length_options.push(tables_pagination_limit)
        length_options_names.push(tables_pagination_limit)
    }

    length_options.sort(function(a, b) {
        return a - b;
    });

    length_options_names.sort(function(a, b) {
        return a - b;
    });

    length_options.push(-1);
    length_options_names.push(dt_length_menu_all);
    var table = $('body').find(table).dataTable({
        "language": dt_lang,
        "processing": true,
        "retrieve": true,
        "serverSide": true,
        'paginate': true,
        'searchDelay': 400,
        "bDeferRender": true,
        "responsive": true,
        "autoWidth": false,
        "stateSave": true,
        dom: "<'mbot25'B><'row'><'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-4'i>><'row'<'#colvis'>p>",
        "pageLength": tables_pagination_limit,
        "lengthMenu": [length_options, length_options_names],
        buttons: buttons,
        "columnDefs": [{
            "searchable": false,
            "targets": notsearchable,
        }, {
            "sortable": false,
            "targets": notsortable
        }],
        "drawCallback": function(oSettings) {
            bs_switch();
        },
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            // If tooltips found
            $(nRow).attr('data-title', aData.Data_Title)
            $(nRow).attr('data-toggle', aData.Data_Toggle)
        },
        "fnHeaderCallback": function(nHead, aData, iStart, iEnd, aiDisplay) {
            $(nHead).find('.mass_select_all_wrap').removeClass('hide');
        },
        "order": [defaultorder],
        "ajax": {
            "url": url,
            "type": "POST",
            "data": function(d) {
                for (var key in fnserverparams) {
                    d[key] = $(fnserverparams[key]).val();
                }
            }
        }
    });

    // mass-delete button have addition btn-default class which is added from datatables we need to remove in case user make custom style for buttons
    $('.dataTables_wrapper .dt-buttons').find('._mass_delete').removeClass('btn-default');
    var tableApi = table.DataTable();
    $('body').find('._mass_delete').attr('data-placement', 'bottom');
    $('body').find('._mass_delete').attr('data-toggle', 'tooltip');
    $('body').find('._mass_delete').attr('title', dt_mass_delete_help);
    setTimeout(function() {
        // Fix for hidden tables colspan not correct if the table is empty
        if ($(_table_name).is(':hidden')) {
            $(_table_name).find('.dataTables_empty').attr('colspan', $(_table_name).find('thead th').length);
        }
        if (is_mobile()) {
            // If on mobile and the column is hidden bootstrap switcher wont be inited we need to re-init again
            $(_table_name + ' tbody').on('click', 'td:first-child', function() {
                bs_switch();
            });
        }
    }, 1000);
}
// Update todo items when drop happen
function update_todo_items() {
    var unfinished_items = $('.unfinished-todos li:not(.no-todos)');
    var finished = $('.finished-todos li:not(.no-todos)');
    var i = 1;
    // Refresh orders
    $.each(unfinished_items, function() {
        $(this).find('input[name="todo_order"]').val(i);
        $(this).find('input[name="finished"]').val(0);
        i++;
    });
    if (unfinished_items.length == 0) {
        $('.nav-total-todos').addClass('hide');
        $('.unfinished-todos li.no-todos').removeClass('hide');
    } else if (unfinished_items.length > 0) {
        if (!$('.unfinished-todos li.no-todos').hasClass('hide')) {
            $('.unfinished-todos li.no-todos').addClass('hide');
        }
        $('.nav-total-todos').removeClass('hide');
        $('.nav-total-todos').html(unfinished_items.length);
    }
    x = 1;
    $.each(finished, function() {
        $(this).find('input[name="todo_order"]').val(x);
        $(this).find('input[name="finished"]').val(1);
        $(this).find('input[type="checkbox"]').prop('checked', true);
        i++;
        x++;
    });
    if (finished.length == 0) {
        $('.finished-todos li.no-todos').removeClass('hide');
    } else if (finished.length > 0) {
        if (!$('.finished-todos li.no-todos').hasClass('hide')) {
            $('.finished-todos li.no-todos').addClass('hide');
        }
    }
    var update = [];
    $.each(unfinished_items, function() {
        var todo_id = $(this).find('input[name="todo_id"]').val();
        var order = $(this).find('input[name="todo_order"]').val();
        var finished = $(this).find('input[name="finished"]').val();
        var description = $(this).find('.todo-description');
        if (description.hasClass('line-throught')) {
            description.removeClass('line-throught')
        }
        $(this).find('input[type="checkbox"]').prop('checked', false);
        update.push([todo_id, order, finished])
    });
    $.each(finished, function() {
        var todo_id = $(this).find('input[name="todo_id"]').val();
        var order = $(this).find('input[name="todo_order"]').val();
        var finished = $(this).find('input[name="finished"]').val();
        var description = $(this).find('.todo-description');
        if (!description.hasClass('line-throught')) {
            description.addClass('line-throught')
        }
        update.push([todo_id, order, finished])
    });
    data = {};
    data.data = update;
    $.post(admin_url + 'todo/update_todo_items_order', data);
}
// Delete single todo item
function delete_todo_item(list, id) {
    $.get(admin_url + 'todo/delete_todo_item/' + id, function(response) {
        if (response.success == true) {
            $(list).parents('li').remove();
            update_todo_items();
        }
    }, 'json');
}
// Date picker init with selected timeformat from settings
function init_datepicker() {
    var datepickers = $('.datepicker');
    var datetimepickers = $('.datetimepicker');
    var opt;
    // Datepicker without time
    $.each(datepickers, function() {
        var opt = {
            format: date_format,
            timepicker: false,
            lazyInit: true,
        };
        // Check in case the input have date-end-date or date-min-date
        var max_date = $(this).data('date-end-date');
        var min_date = $(this).data('date-min-date');
        if (max_date) {
            opt.maxDate = max_date;
        }
        if (min_date) {
            opt.minDate = min_date;
        }
        // Init the picker
        $(this).datetimepicker(opt);
    });
    var opt_time;
    // Datepicker with time
    $.each(datetimepickers, function() {
        opt_time = {
            format: date_format + ' H:i',
            lazyInit: true,
        };
        // Check in case the input have date-end-date or date-min-date
        var max_date = $(this).data('date-end-date');
        var min_date = $(this).data('date-min-date');
        if (max_date) {
            opt_time.maxDate = max_date;
        }
        if (min_date) {
            opt_time.minDate = min_date;
        }
        // Init the picker
        $(this).datetimepicker(opt_time);
    });
    // Option of user click on the icon calendar the datepicker to be shown
    $('.calendar-icon').on('click', function() {
        $(this).parents('.date').find('.datepicker').datetimepicker('show');
        $(this).parents('.date').find('.datetimepicker').datetimepicker('show');
    });
}
// Init color pickers
function init_color_pickers(){
    $('body').find('.colorpicker-input').colorpicker({
        format: "hex"
    });
}
// Init bootstrap select picker
function init_selectpicker() {
    $('.selectpicker').selectpicker({
        showSubtext: true,
    });
    $('.selectpicker.auto-toggle').not('.toggled').selectpicker('toggle').addClass('toggled');
}
// Datatables custom view will fill input with the value
function dt_custom_view(view, table, custom_input_name) {
    var name;
    if (typeof(custom_input_name) == 'undefined' || custom_input_name == '') {
        name = 'custom_view';
    } else {
        name = custom_input_name;
    }
    $('input[name="' + name + '"]').val(view);
    $(table).DataTable().ajax.reload();
}
// Called when editing member profile
function init_roles_permissions(roleid, user_changed) {
    if (typeof(roleid) == 'undefined') {
        roleid = $('select[name="role"]').val();
    }
    var isedit = $('.member > input[name="isedit"]');
    // Check if user is edit view and user has changed the dropdown permission if not only return
    if (isedit.length > 0 && typeof(roleid) !== 'undefined' && typeof(user_changed) == 'undefined') {
        return;
    }
    // Last if the roleid is blank return
    if (roleid == '') {
        return;
    }
    // Get all permissions
    var permissions = $('table.roles').find('tr');
    $.get(admin_url + 'misc/get_role_permissions_ajax/' + roleid).success(function(response) {
        response = $.parseJSON(response);
        $.each(permissions, function() {
            var permissionid = $(this).data('id');
            var row = $(this);
            $.each(response, function(i, obj) {
                if (permissionid == obj.permissionid) {
                    if (obj.can_view == 1) {
                        row.find('[data-can-view]').prop('checked', true);
                    } else {
                        row.find('[data-can-view]').prop('checked', false);
                    }
                    if (obj.can_edit == 1) {
                        row.find('[data-can-edit]').prop('checked', true);
                    } else {
                        row.find('[data-can-edit]').prop('checked', false);
                    }
                    if (obj.can_create == 1) {
                        row.find('[data-can-create]').prop('checked', true);
                    } else {
                        row.find('[data-can-create]').prop('checked', false);
                    }
                    if (obj.can_delete == 1) {
                        row.find('[data-can-delete]').prop('checked', true);
                    } else {
                        row.find('[data-can-delete]').prop('checked', false);
                    }
                }
            });
        });
    });
}

// Generate hidden input field
function hidden_input(name, val) {
    return '<input type="hidden" name="' + name + '" value="' + val + '">';
}
// Show/hide full table
function toggle_small_view(table, main_data) {
    $('body').toggleClass('small-table');
    var tablewrap = $('#small-table');
    var _visible = false;
    if (tablewrap.hasClass('col-md-5')) {
        tablewrap.removeClass('col-md-5');
        tablewrap.addClass('col-md-12');
        _visible = true;
        $('.toggle-small-view').find('i').removeClass('fa fa-angle-double-right').addClass('fa fa-angle-double-left');
    } else {
        tablewrap.addClass('col-md-5');
        tablewrap.removeClass('col-md-12');
        $('.toggle-small-view').find('i').removeClass('fa fa-angle-double-left').addClass('fa fa-angle-double-right');
    }
    var _table = $(table).DataTable();
    // Show hide hidden columns
    _table.columns(hidden_columns).visible(_visible, false);
    _table.columns.adjust().draw(false);
    $(main_data).toggleClass('hide')
}
function stripTags(html) {
    var tmp = document.createElement("DIV");
    tmp.innerHTML = html;
    return tmp.textContent || tmp.innerText || "";
}
// Check if field is empty
function empty(data) {
    if (typeof(data) == 'number' || typeof(data) == 'boolean') {
        return false;
    }
    if (typeof(data) == 'undefined' || data === null) {
        return true;
    }
    if (typeof(data.length) != 'undefined') {
        return data.length == 0;
    }
    var count = 0;
    for (var i in data) {
        if (data.hasOwnProperty(i)) {
            count++;
        }
    }
    return count == 0;
}
// Is mobile checker javascript
function is_mobile() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        return true;
    }
    return false;
}
// Main logout function check if timers found to show the warning
function logout() {
    var started_timers = $('.started-timers-top').find('li.timer').length;
    if (started_timers > 0) {
        // Timers found return false and show the modal
        $('.timers-modal-logout').modal('show');
        return false;
    } else {
        // No timer logout free
        window.location.href = site_url + 'authentication/logout';
    }
}
// Generate color rgb
function color(r, g, b) {
    return 'rgb(' + r + ',' + g + ',' + b + ')';
}
// Url builder function with parameteres
function buildUrl(url, parameters) {
    var qs = "";
    for (var key in parameters) {
        var value = parameters[key];
        qs += encodeURIComponent(key) + "=" + encodeURIComponent(value) + "&";
    }
    if (qs.length > 0) {
        qs = qs.substring(0, qs.length - 1); //chop off last "&"
        url = url + "?" + qs;
    }
    return url;
}
// Init the media elfinder for tinymce browser
function elFinderBrowser(field_name, url, type, win) {
    tinymce.activeEditor.windowManager.open({
        file: admin_url + 'misc/tinymce_file_browser', // use an absolute path!
        title: media_files,
        width: 900,
        height: 450,
        resizable: 'yes'
    }, {
        setUrl: function(url) {
            win.document.getElementById(field_name).value = url;
        }
    });
    return false;
}
// Function to init the tinymce editor
function init_editor(selector, settings) {
    if (typeof(selector) == 'undefined') {
        selector = '.tinymce';
    }
    // Check if is rtl availble to init the editor as RTL
    var _isRTL;
    if (isRTL == 'true') {
        _isRTL = true;
    } else {
        _isRTL = false;
    }
    // Original settings
    var _settings = {
        selector: selector,
        height: 400,
        theme: 'modern',
        skin: 'light',
        language: tinymce_lang,
        relative_urls: false,
        remove_script_host: false,
        removed_menuitems: 'newdocument',
        fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
        setup: function(ed) {
            // Default fontsize is 14
            ed.on('init', function() {
                this.getDoc().body.style.fontSize = '14px';
            });
        },
        table_default_styles: {
            // Default all tables width 10)%
            width: '100%'
        },
        plugins: [
        'advlist autoresize autolink lists link image charmap print preview hr anchor pagebreak codesample',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'media nonbreaking save table contextmenu directionality',
        'paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'fontselect fontsizeselect  insertfile | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        toolbar2: 'undo redo rtl print preview media image | forecolor backcolor link | codesample',
        file_browser_callback: elFinderBrowser,
    };
    // Add the rtl to the settings if is true
    if (_isRTL == true) {
        _settings.directionality  = 'rtl';
    }
    // Possible settings passed to be overwrited or added
    if (typeof(settings) != 'undefined') {
        for (var key in settings) {
            _settings[key] = settings[key];
        }
    }
    // Init the editor
    var editor = tinymce.init(_settings);
    // Init code formating with Prism
    Prism.highlightAll();
    return editor;
}
// Function used to add custom bootstrap menu for setup and main menu and to add fa on front like fa fa-question
function _formatMenuIconInput(e) {
    if (typeof(e) == 'undefined') {
        return;
    }
    var _input = $(e.target);
    if (!_input.val().match(/^fa /)) {
        _input.val(
            'fa ' + _input.val()
            );
    }
}
jQuery.extend({
    highlight: function(node, re, nodeName, className) {
        if (node.nodeType === 3) {
            var match = node.data.match(re);
            if (match) {
                var highlight = document.createElement(nodeName || 'span');
                highlight.className = className || 'highlight';
                var wordNode = node.splitText(match.index);
                wordNode.splitText(match[0].length);
                var wordClone = wordNode.cloneNode(true);
                highlight.appendChild(wordClone);
                wordNode.parentNode.replaceChild(highlight, wordNode);
                return 1; //skip added node in parent
            }
        } else if ((node.nodeType === 1 && node.childNodes) && // only element nodes that have children
            !/(script|style)/i.test(node.tagName) && // ignore script and style nodes
            !(node.tagName === nodeName.toUpperCase() && node.className === className)) { // skip if already highlighted
            for (var i = 0; i < node.childNodes.length; i++) {
                i += jQuery.highlight(node.childNodes[i], re, nodeName, className);
            }
        }
        return 0;
    }
});
// Mass delete function for, parameter is table name like table-name the name only should be passed
function mass_delete(to) {
    var r = confirm(confirm_action_prompt);
    if (r == false) {
        return false;
    } else {
        var ids = [];
        var rows = $('.table-' + to).find('tbody tr');
        $.each(rows, function() {
            var checkbox = $($(this).find('td').eq(($('.table-' + to + ' thead th').length - 1))).find('input');
            if (checkbox.prop('checked') == true) {
                ids.push(checkbox.val());
            }
        });
        var data = {};
        data.ids = ids;
        $.post(admin_url + to + '/mass_delete', data).success(function() {
            window.location.reload();
        });
    }
}
// Show password on hidden input field
function showPassword(name) {
    var target = $('input[name="' + name + '"]');
    if ($(target).attr('type') == 'password' && $(target).val() != '') {
        $(target)
        .queue(function() {
            $(target).attr('type', 'text').dequeue();
        });
    } else {
        $(target).queue(function() {
            $(target).attr('type', 'password').dequeue();
        });
    }
}
// This is used for mobile where tooltip on _buttons class wrapper is found
// Will show all buttons tooltips as regular button with text
function init_btn_with_tooltips() {
    if (is_mobile()) {
        var tooltips_href_btn = $('._buttons').find('.btn-with-tooltip');
        $.each(tooltips_href_btn, function() {
            var title = $(this).attr('title');
            if (typeof(title) == 'undefined') {
                title = $(this).attr('data-title');
            }
            if (typeof(title) != 'undefined') {
                $(this).append(' ' + title);
                $(this).removeClass('btn-with-tooltip');
            }
        });
        var tooltips_group = $('._buttons').find('.btn-with-tooltip-group');
        $.each(tooltips_group, function() {
            var title = $(this).attr('title');
            if (typeof(title) == 'undefined') {
                title = $(this).attr('data-title');
            }
            if (typeof(title) != 'undefined') {
                $(this).find('.btn').eq(0).append(' ' + title);
                $(this).removeClass('btn-with-tooltip-group');
            }
        });
    }
}
// Helper hash id for estimates,invoices,proposals,expenses
function do_hash_helper(hash){
    if (typeof (history.pushState) != "undefined") {
        var url = window.location.href;
        var obj = {Url: url};
        history.pushState(obj, '', obj.Url);
        window.location.hash = hash;
    }
}
// Knowledge base groups
$(document).ready(function(){
    // Validating the knowledge group form
    _validate_form($('#kb_group_form'),{name:'required'},manage_kb_groups);
    // On hidden modal reset the values
    $('#kb_group_modal').on('hidden.bs.modal', function(event) {
        $('#additional').html('');
        $('#kb_group_modal input').val('');
        $('.add-title').removeClass('hide');
        $('.edit-title').removeClass('hide');
        $('#kb_group_modal input[name="group_order"]').val($('table tbody tr').length + 1);
    });
});
// Form handler function for knowledgebase group
function manage_kb_groups(form) {
    var data = $(form).serialize();
    var url = form.action;
    $.post(url, data).success(function(response) {
        window.location.reload();
    });
    return false;
}
// New knowledgebase group, opens modal
function new_kb_group(){
    $('#kb_group_modal').modal('show');
    $('.edit-title').addClass('hide');
}
// Edit KB group, 2 places groups view or articles view directly click on kanban
function edit_kb_group(invoker,id){
    $('#additional').append(hidden_input('id',id));
    $('#kb_group_modal input[name="name"]').val($(invoker).data('name'));
    $('#kb_group_modal textarea[name="description"]').val($(invoker).data('description'));
    $('#kb_group_modal .colorpicker-input').colorpicker('setValue',$(invoker).data('color'));
    $('#kb_group_modal input[name="group_order"]').val($(invoker).data('order'));
    var active = $(invoker).data('active');
    if(active == 0){
        $('input[name="disabled"]').prop('checked',true);
    } else {
        $('input[name="disabled"]').prop('checked',false);
    }
    $('#kb_group_modal').modal('show');
    $('.add-title').addClass('hide');
}
// Bootstrap switch initer
function bs_switch(){
    $('.switch-box').bootstrapSwitch();
}
// Validate the form reminder
function init_form_reminder(){
    _validate_form($('#form-reminder'), {
        date: 'required',
        staff: 'required'
    }, reminderFormHandler);
}
// Handles reminder modal form
function reminderFormHandler(form) {
    form = $(form);
    var data = form.serialize();
    var serializeArray = $(form).serializeArray();
    $.post(form.attr('action'), data).success(function(data) {
        data = $.parseJSON(data);
        alert_float(data.alert_type, data.message);
        $.each(available_reminders_table,function(i,table){
            if ($.fn.DataTable.isDataTable(table)) {
                $('body').find(table).DataTable().ajax.reload();
            }
        });
    });
    $('.reminder-modal').modal('hide');
    return false;
}

jQuery.fn.unhighlight = function(options) {
    var settings = {
        className: 'highlight',
        element: 'span'
    };
    jQuery.extend(settings, options);
    return this.find(settings.element + "." + settings.className).each(function() {
        var parent = this.parentNode;
        parent.replaceChild(this.firstChild, this);
        parent.normalize();
    }).end();
};

jQuery.fn.highlight = function(words, options) {
    var settings = {
        className: 'highlight animated flash',
        element: 'span',
        caseSensitive: false,
        wordsOnly: false
    };
    jQuery.extend(settings, options);

    if (words.constructor === String) {
        words = [words];
    }
    words = jQuery.grep(words, function(word, i) {
        return word != '';
    });
    words = jQuery.map(words, function(word, i) {
        return word.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
    });
    if (words.length == 0) {
        return this;
    };
    var flag = settings.caseSensitive ? "" : "i";
    var pattern = "(" + words.join("|") + ")";
    if (settings.wordsOnly) {
        pattern = "\\b" + pattern + "\\b";
    }
    var re = new RegExp(pattern, flag);

    return this.each(function() {
        jQuery.highlight(this, re, settings.element, settings.className);
    });
};
