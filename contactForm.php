<?php
$content = '<p>Nombre<br />
                [text* name] </p>

            <p>Email<br />
                [email* email] </p>

            <p>Teléfono<br />
                [text* phone] </p>

            <p>Asunto<br />
                [text subject] </p>

            <p>Mensaje<br />
                [textarea message] </p>

            <p>[submit "Send"]</p>

            Contacto desde : ' . get_bloginfo('home'). '
            [name] <info@pimex.co>
            From: [name] <[name]>
            Asunto: Contacto desde: ' . get_bloginfo('home'). '

            Mensaje:
            [message]

            --
            Este e-mail es enviado desde '.get_bloginfo('url').'
            Reply-To: [email]

            Pimex "[subject]"
            [name] <info@pimex.co>
            From: [name] <[name]>
            Asunto: Contacto desde ' . get_bloginfo('home'). '
            Teléfono: [phone]

            Mensaje:
            [message]

            --
            Este e-mail es enviado desde '.get_bloginfo('url').'
            Reply-To: [email]

            Mensaje enviado correctamente.
            Ocurrió un error al enviar el mensaje.
            One or more fields have an error. Please check and try again.
            There was an error trying to send your message. Please try again later.
            You must accept the terms and conditions before sending your message.
            The field is required.
            The field is too long.
            The field is too short.
            The date format is incorrect.
            The date is before the earliest one allowed.
            The date is after the latest one allowed.
            There was an unknown error uploading the file.
            You are not allowed to upload files of this type.
            The file is too big.
            There was an error uploading the file.
            The number format is invalid.
            The number is smaller than the minimum allowed.
            The number is larger than the maximum allowed.
            The answer to the quiz is incorrect.
            Your entered code is incorrect.
            The e-mail address entered is invalid.
            The URL is invalid.
            The telephone number is invalid.';
?>
