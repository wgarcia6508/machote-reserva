// Token info
    $token  = $_POST['token'];

    // Card info
    $card_num = $_POST['card_num'];
    $card_cvv = $_POST['cvv'];
    $card_exp_month = $_POST['exp_month'];
    $card_exp_year = $_POST['exp_year'];

    // Buyer info
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = '555-555-5555';
    $addrLine1 = '123 Test St';
    $city = 'Columbus';
    $state = 'OH';
    $zipCode = '43123';
    $country = 'USA';

    // Item info
    $itemName = 'Premium Script CodexWorld';
    $itemNumber = 'PS123456';
    $itemPrice = '7.00';
    $currency = 'USD';
    $orderID = 'SKA92712382139';


    // Include 2Checkout PHP library
    require_once("2checkout-php/Twocheckout.php");

    // Set API key
    Twocheckout::privateKey('83218129-867C-46A4-8F0A-8A738DCF7FC4');
    Twocheckout::sellerId('901416237');
    Twocheckout::sandbox(true);

    try {
        // Charge a credit card
        $charge = Twocheckout_Charge::auth(array(
            "merchantOrderId" => $orderID,
            "token"      => $token,
            "currency"   => $currency,
            "total"      => $itemPrice,
            "billingAddr" => array(
                "name" => $name,
                "addrLine1" => $addrLine1,
                "city" => $city,
                "state" => $state,
                "zipCode" => $zipCode,
                "country" => $country,
                "email" => $email,
                "phoneNumber" => $phoneNumber
            )
        ));

        // Check whether the charge is successful
        if ($charge['response']['responseCode'] == 'APPROVED') {

            // Order details
            $orderNumber = $charge['response']['orderNumber'];
            $total = $charge['response']['total'];
            $transactionId = $charge['response']['transactionId'];
            $currency = $charge['response']['currencyCode'];
            $status = $charge['response']['responseCode'];

            // Include database config file

            // Insert order info to database
            echo  ".$name.', '" . $email . "', '" . $card_num . "', '" . $card_cvv . "', '" . $card_exp_month . "', '" . $card_exp_year . "', '" . $itemName . "', '" . $itemNumber . "','" . $itemPrice . "', '" . $currency . "', '" . $total . "', '" . $orderNumber . "', '" . $transactionId . "', '" . $status . "";
            $statusMsg = '<h2>Thanks for your Order!</h2>';
            $statusMsg .= '<h4>The transaction was successful. Order details are given below:</h4>';
            $statusMsg .= "<p>Order ID: {$insert_id}</p>";
            $statusMsg .= "<p>Order Number: {$orderNumber}</p>";
            $statusMsg .= "<p>Transaction ID: {$transactionId}</p>";
            $statusMsg .= "<p>Order Total: {$total} {$currency}</p>";
            /*
            $sql = "INSERT INTO orders(name, email, card_num, card_cvv, card_exp_month, card_exp_year, item_name, item_number, item_price, currency, paid_amount, order_number, txn_id, payment_status, created, modified) VALUES('".$name."', '".$email."', '".$card_num."', '".$card_cvv."', '".$card_exp_month."', '".$card_exp_year."', '".$itemName."', '".$itemNumber."','".$itemPrice."', '".$currency."', '".$total."', '".$orderNumber."', '".$transactionId."', '".$status."', NOW(), NOW())";
            $insert = $db->query($sql);
            $insert_id = $db->insert_id;
            
            $statusMsg = '<h2>Thanks for your Order!</h2>';
            $statusMsg .= '<h4>The transaction was successful. Order details are given below:</h4>';
            $statusMsg .= "<p>Order ID: {$insert_id}</p>";
            $statusMsg .= "<p>Order Number: {$orderNumber}</p>";
            $statusMsg .= "<p>Transaction ID: {$transactionId}</p>";
            $statusMsg .= "<p>Order Total: {$total} {$currency}</p>";*/
        }
    } catch (Twocheckout_Error $e) {
        $statusMsg = '<h2>Transaction failed!</h2>';
        $statusMsg .= '<p>' . $e->getMessage() . '</p>';
    }

    /99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999

    {"title":"Theme","date_format":"F j, Y","week_days":"0","day_start":"1","default_year":"","default_month":"0","cal_animation_type":"tada","scroll_offset":"","show_form":"on","type_days_selection":"multiple_days","sale_conditions":{"count":[""],"type":["percent"],"percent":[""]},"min_days":"","max_days":"","enable_checkinout":"on","enable_number_items":"on","max_item":"","enable_terms_cond":"on","terms_cond_link":"https:\/\/es.orisonhostels.com\/managua\/servicios-adicionales\/#politicas-y-co","enable_form_title":"on","enable_extras_title":"on","legend_enable":"on","legend_available_enable":"on","legend_available":"Disponible","legend_booked_enable":"on","legend_booked":"Reservado","legend_unavailable_enable":"on","legend_unavailable":"Cerrado.","action_after_submit":"stay_on_calendar","message_text":"Gracias por Confiar en Nosotros","redirect_url":"webwalter.com","custom_css":"","currency":"USD","currency_pos":"after","type_hours_selection":"multiple_hours","hours_sale_conditions":{"count":[""],"type":["percent"],"percent":[""]},"min_hours":"","max_hours":"","show_hours_info":"on","hours":{"hour_value":[""],"hour_price":[""],"hours_marked_price":[""],"hours_availability":["available"],"hours_number_availability":[""],"hour_info":[""]},"show_day_info_on_hover":"on","days_for_new":"30","calendar_max_width":"680","calendar_header_font_weight":"normal","calendar_header_font_style":"normal","calendar_header_padding":"10","next_prev_month_size":"15","current_month_size":"19","current_year_size":"19","week_days_font_weight":"normal","week_days_font_style":"normal","week_days_size":"13","day_number_font_weight":"normal","day_number_font_style":"normal","day_number_size":"13","day_availability_font_weight":"normal","day_availability_font_style":"normal","day_availability_size":"13","day_price_font_weight":"normal","day_price_font_style":"normal","day_price_size":"12","days_min_height":"65","hours_width":"95","hours_height":"125","info_font_weight":"normal","info_font_style":"normal","info_size":"13","info_border_radius":"","form_title_weight":"normal","form_title_style":"italic","form_title_size":"21","form_labels_weight":"normal","form_labels_style":"italic","form_labels_size":"15","form_fields_weight":"normal","form_fields_style":"normal","form_fields_size":"15","form_submit_weight":"normal","form_style_style":"normal","reserv_info_weight":"normal","reserv_info_style":"normal","reserv_info_size":"14","widget_day_info_weight":"normal","widget_day_info_style":"normal","widget_day_info_size":"14","load_spinner_color":"#464646","calendar_header_bg":"#FFFFFF","next_prev_month":"#636363","current_month":"#636363","current_year":"#636363","week_days_bg":"#ECECEC","week_days_color":"#656565","calendar_bg":"#FFFFFF","calendar_border":"#ddd","day_bg":"#FFFFFF","day_number_bg":"#ECECEC","day_color":"#464646","day_availability_color":"#848484","day_price_color":"#848484","available_day_bg":"#FFFFFF","available_day_number_bg":"#85B70B","available_day_color":"#FFFFFF","selected_day_bg":"#FFFFFF","selected_day_number_bg":"#373740","selected_day_color":"#FFFFFF","selected_day_availability_color":"#848484","selected_day_price_color":"#848484","unavailable_day_bg":"#FFFFFF","unavailable_day_number_bg":"#464646","unavailable_day_color":"#ECECEC","unavailable_day_availability_color":"#848484","booked_day_bg":"#FFFFFF","booked_day_number_bg":"#FD7C93","booked_day_color":"#FFFFFF","booked_day_availability_color":"#848484","info_icon_color":"#FFFFFF","info_bg":"#FFFFFF","info_color":"#4E4E4E","form_bg":"#FDFDFD","form_border":"#ddd","form_title_color":"#636363","form_title_bg":"#FDFDFD","form_labels_color":"#636363","form_fields_color":"#636363","reserv_info_color":"#545454","total_bg":"#545454","total_color":"#F7F7F7","required_star_color":"#FD7C93","submit_button_bg":"#FD7C93","submit_button_color":"#FFFFFF","error_info_bg":"#FFFFFF","error_info_color":"#C11212","error_info_border":"#C11212","error_info_close_bg":"#C11212","error_info_close_color":"#FFFFFF","successfully_info_bg":"#FFFFFF","successfully_info_color":"#7FAD16","successfully_info_border":"#7FAD16","successfully_info_close_bg":"#7FAD16","successfully_info_close_color":"#FFFFFF","widget_day_info_bg":"#FFFFFF","widget_day_info_color":"#6B6B6B","widget_day_info_border_color":"#C7C7C7","use_phpmailer":"on","mail_bg":"#f25454","mail_content_bg":"#FFFFFF","mail_color":"#303030","mail_header_img":"http:\/\/conejillo.goodywalt.com\/es-orison\/wp-content\/uploads\/2019\/01\/logo-Orison-Hostal.png","mail_footer_text":"Orison Hostal","mail_footer_text_color":"#dd3333","notify_admin_on_book":"on","notify_admin_on_book_to":"hellomanagua@orisonhostels.com","notify_admin_on_book_from":"[useremail]","notify_admin_on_book_fromname":"Administracion Orison H","notify_admin_on_book_subject":"Alerta!! Tienes Una Nueva Reservacion","notify_admin_on_book_content":"<div class=\"section-title\"><span class=\"wpdevart-title\">Nueva Reserva de ORISONESPA\u00f1OL<\/span><\/div>\r\n<div id=\"wpdevart_wrap_admin_mail_info\" class=\"wpdevart-item-elem-container element-info\">Tipo de habitacion: [calendartitle]\u00a0- inserting title of calendar,\r\n[totalprice]\u00a0- inserting total price,\r\n[details]\u00a0- inserting details about the reservation,\r\n[siteurl]\u00a0- inserting your site URL ,\r\n[moderatelink]\u00a0- inserting moderate link of new reservation,\r\n[form]\u00a0- inserting form information,\r\n[extras]\u00a0- inserting extras information,<\/div>\r\n<span style=\"vertical-align: inherit\"><span style=\"vertical-align: inherit\">Usted recibi\u00f3 un pago. <\/span><span style=\"vertical-align: inherit\">Para m\u00e1s detalles, visite: [moderatelink]<\/span><\/span>","notify_admin_on_book_error":"on","notify_admin_on_approved":"on","notify_admin_on_approved_to":"[useremail]","notify_admin_on_approved_from":"hellomanagua@orisonhostels.com","notify_admin_on_approved_fromname":"","notify_admin_on_approved_subject":"Su Reservacion ha sido aprobada.","notify_admin_on_approved_content":"<span style=\"vertical-align: inherit\"><span style=\"vertical-align: inherit\">Solicitud de reserva ha sido aprobada. <\/span><span style=\"vertical-align: inherit\">Para m\u00e1s detalles, visite: [moderatelink]<\/span><\/span>","notify_admin_paypal_to":"sadas@dsd.sd","notify_admin_paypal_from":"[useremail]","notify_admin_paypal_fromname":"","notify_admin_paypal_subject":"You received a booking request.","notify_admin_paypal_content":"<span style=\"vertical-align: inherit\"><span style=\"vertical-align: inherit\">Usted recibi\u00f3 un pago. <\/span><span style=\"vertical-align: inherit\">Para m\u00e1s detalles, visite: [moderatelink]<\/span><\/span>","notify_user_on_book":"on","notify_user_on_book_from":"hellomanagua@orisonhostels.com","notify_user_on_book_fromname":"Walter","notify_user_on_book_subject":"Your booking request has been sent.","notify_user_on_book_content":"<span style=\"vertical-align: inherit\">Su solicitud de reserva ha sido enviada.<\/span>","notify_user_on_approved":"on","notify_user_on_approved_from":"hellomanagua@orisonhostels.com","notify_user_on_approved_fromname":"","notify_user_on_approved_subject":"Your booking request has been approved","notify_user_on_approved_content":"<span style=\"vertical-align: inherit\"><span style=\"vertical-align: inherit\">Su solicitud de reserva ha sido aprobada.<\/span><\/span>","notify_user_canceled":"on","notify_user_canceled_from":"hellomanagua@orisonhostels.com","notify_user_canceled_fromname":"Walter admin","notify_user_canceled_subject":"Your booking request has been canceled","notify_user_canceled_content":"<span style=\"vertical-align: inherit\"><span style=\"vertical-align: inherit\">Su solicitud de reserva ha sido cancelada.<\/span><\/span>","notify_user_canceled_error":"on","notify_user_deleted":"on","notify_user_deleted_from":"hellomanagua@orisonhostels.com","notify_user_deleted_fromname":"[details]","notify_user_deleted_subject":"Your booking request has been rejected","notify_user_deleted_content":"[details]","notify_user_deleted_error":"on","notify_user_paypal_from":"info@info.com","notify_user_paypal_fromname":"","notify_user_paypal_subject":"Thank you for your purchase","notify_user_paypal_content":"<span style=\"vertical-align: inherit\"><span style=\"vertical-align: inherit\">Tu orden ha sido recibida. <\/span><span style=\"vertical-align: inherit\">Gracias por su compra! <\/span><span style=\"vertical-align: inherit\">Recibir\u00e1 una confirmaci\u00f3n de pedido por correo electr\u00f3nico.<\/span><\/span>","notify_user_paypal_failed_from":"info@info.com","notify_user_paypal_failed_fromname":"","notify_user_paypal_failed_subject":"Payment failed","notify_user_paypal_failed_content":"<span style=\"vertical-align: inherit\"><span style=\"vertical-align: inherit\">Su pago ha fallado.<\/span><\/span>","for_available":"Disponible","for_booked":"Reservado","for_unavailable":"Indisponible","for_check_in":"Fecha de Entrada","for_check_out":"Fecha de Salida","for_date":"Fecha","for_no_hour":"No hay hora disponible.","for_start_hour":"Hora de inicio","for_end_hour":"Hora final","for_hour":"Hora","for_item_count":"Recuento de elementos","for_termscond":"Acepto aceptar los T\u00e9rminos y Condiciones.","for_reservation":"Reserva","for_select_days":"Por favor seleccione los d\u00edas del calendario.","for_price":"Precio","for_total":"Total","for_submit_button":"Reservar ahora","for_request_successfully_sent":"Su solicitud ha sido enviada correctamente. Por favor, espere la aprobaci\u00f3n.","for_request_successfully_received":"Su solicitud ha sido recibida con \u00e9xito. \u00a1Te estamos esperando!","for_error_single":"No hay servicios disponibles para este d\u00eda.","for_error_multi":"No hay servicios disponibles para el per\u00edodo seleccionado.","for_night":"Debes seleccionar al menos dos d\u00edas.","for_min":"Debes seleccionar al menos [min] d\u00edas","for_max":"Debe seleccionar d\u00edas inferiores a [max]",
    "for_min_hour":"Debes seleccionar al menos [min] horas",
    "for_max_hour":"Debe seleccionar menos de [max] horas",
    "for_capcha":"No fue verificado por recaptcha.",
    "for_pay_in_cash":"Pago en efectivo","for_paypal":"Pay with PayPal","for_shipping_info":"Igual que la informaci\u00f3n de facturaci\u00f3n","for_notify_admin_on_book":"Correo electr\u00f3nico en el libro para el administrador no env\u00eda","for_notify_admin_on_approved":"Correo electr\u00f3nico en aprobado para el administrador no env\u00eda","for_notify_user_on_book":"Correo electr\u00f3nico en el libro al usuario no env\u00eda","for_notify_user_on_approved":"Correo electr\u00f3nico en aprobado para el usuario no env\u00eda","for_notify_user_canceled":"Correo electr\u00f3nico en cancelado al usuario no env\u00eda","for_notify_user_deleted":"Correo electr\u00f3nico en eliminar al usuario no env\u00eda","billing_address_form":"1","shipping_address_form":"1","redirect_url_successful":"","tax":"","payment_mode":"sandbox","paypal_email":"","paypal_image":"https:\/\/es.orisonhostels.com\/wp-content\/plugins\/booking-calendar\/css\/images\/paynow.png","button_action":"save","task":"save","id":"1"}

