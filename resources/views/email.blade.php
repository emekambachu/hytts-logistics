<img class="light-logo logo-size"
     src="{{ asset('logo.png') }}"
     data-dsn-src="{{ asset('logo.png') }}" alt="" />

<div>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Destination:</strong> {{ $from }} - {{ $to }}</p>
    <p><strong>Description:</strong> {{ $description }}</p>
</div>
