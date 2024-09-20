<!DOCTYPE html>
<html>
<head>
    <title>New Visitor Notification</title>
</head>
<body>
    <h1>New Visitor Alert!</h1>
    <p>A new visitor has entered the site.</p>
    <p>IP Address: {{ $ip }}</p>
    <p>Check location: <a href="https://tools.keycdn.com/geo?host={{ $ip }}">Location details</a></p>
</body>
</html>
