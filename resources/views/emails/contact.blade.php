<!-- resources/views/emails/contact.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Message</title>
</head>
<body>
    <h2>Contact Us Message</h2>
    <p>Name: {{ $details['name'] }}</p>
    <p>Address: {{ $details['address'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Phone: {{ $details['phone'] }}</p>
    <p>Message: {{ $details['message'] }}</p>
</body>
</html>
