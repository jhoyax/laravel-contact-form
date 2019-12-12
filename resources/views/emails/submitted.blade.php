<html>
    <style>
        html {
            font-family: arial;
        }
    </style>
    <body>
        <h1>{{ __('contact_form::fields.title') }}</h1>
        <table border="0">
            <tr>
                <td>{{ __('contact_form::fields.name') }}</td>
                <td>{{ $submission->name }}</td>
            </tr>
            <tr>
                <td>{{ __('contact_form::fields.email_address') }}</td>
                <td>{{ $submission->email_address }}</td>
            </tr>
            <tr>
                <td>{{ __('contact_form::fields.message') }}</td>
                <td>{{ $submission->message }}</td>
            </tr>
        </table>
    </body>
</html>