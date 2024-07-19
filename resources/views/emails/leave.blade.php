<!DOCTYPE html>
<html>
<head>
    <title>Leave Request</title>
</head>
<body>
    <h2>Leave Request Notification</h2>
    
    <p>Dear {{ $data['manager_name'] }},</p>

    <p>I hope this message finds you well. I am writing to formally request leave from {{ $data['start_date'] }} to {{ $data['end_date'] }} due to {{ $data['reason'] }}.</p>

    <p>During my absence, I will ensure that all my responsibilities are covered. I have arranged for {{ $data['backup_person'] }} to handle any urgent matters.</p>

    <p>Please let me know if you need any further information or if there are forms I should complete before my leave. I appreciate your understanding and support.</p>

    <p>Thank you for considering my request. Looking forward to your approval.</p>

    <p style="margin-bottom:2px;">Best regards,</p>
    <p style="margin-bottom:2px;">{{ $data['user_name'] }}</p>
    <p>{{ $data['user_email'] }}</p>
</body>
</html>
