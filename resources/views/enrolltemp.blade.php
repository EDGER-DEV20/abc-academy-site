<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f5f5f5; font-family: Arial, Helvetica, sans-serif;">

    <div style="max-width: 650px; margin: 30px auto; background: #ffffff; border-radius: 10px; overflow: hidden;">

        <!-- Header -->
        <div style="background: #ffffff; padding: 25px; text-align: center;border-bottom:1px solid #707070;">
            <h1 style="margin: 0; color: #0059ff; font-size: 24px;">
                ABC Academy
            </h1>

            <p style="margin: 8px 0 0; color: #707070; font-size: 14px;">
                New Mail Message
            </p>
        </div>

        <!-- Content -->
        <div style="padding: 30px;">

            <h2 style="margin-top: 0; color: #333333;">
                You have received a new Enrollment
            </h2>

            <p style="color: #666666;">
                Someone has submitted the enrollment form on your ABC Academy website.
            </p>

            <!-- Customer Details -->
            <div style="margin-top: 25px;">

                <p style="margin: 10px 0;">
                    <strong>Name:</strong>
                    {{ $dataReceived['name'] ?? 'Not provided' }}
                </p>


                <p style="margin: 10px 0;">
                    <strong>Enrollment Type:</strong>
                    {{ $dataReceived['type'] ?? 'Not provided' }}
                </p>

                <p style="margin: 10px 0;">
                    <strong>Next of Kin's name:</strong>
                    {{ $dataReceived['kin_name'] ?? 'Not provided' }}
                </p>

                <p style="margin: 10px 0;">
                    <strong>Email:</strong>
                    {{ $dataReceived['email'] ?? 'Not provided' }}
                </p>

                <p style="margin: 10px 0;">
                    <strong>Phone:</strong>
                    {{ $dataReceived['phone'] ?? 'Not provided' }}
                </p>

            </div>

            <!-- Message -->


        </div>

        <!-- Footer -->
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eeeeee;">

            <p style="margin: 0; color: #888888; font-size: 13px;">
                This message was sent through the ABC Academy website Enrollment form.
            </p>

        </div>

    </div>

    <!-- Footer -->
    <div style="padding: 20px; background: #f8f8f8; text-align: center;">

        <p style="margin: 0; color: #707070; font-size: 13px;">
            © {{ date('Y') }} ABC Academy. All Rights Reserved.
        </p>

    </div>

    </div>

</body>

</html>