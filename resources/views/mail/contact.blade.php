<p><b>Name:</b>{{ $name }}</p>
<p><b>Last Name:</b>{{ $lname }}</p>
<p><b>Email:</b>{{ $email }}</p>
<p><b>Phone:</b>{{ $phone }}</p>
@if(strlen($question) > 0)
    <p><b>Question:</b>{{ $question }}</p>
@endif
