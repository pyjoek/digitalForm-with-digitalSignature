@component('mail::message')
# New Responsibility Form

- Visitor: {{ $data['visitorName'] }}
- Supervisor: {{ $data['supervisorName'] ?? 'N/A' }}
- Email: {{ $data['contactInfo'] }}
- Date: {{ $data['date'] }}

@endcomponent
