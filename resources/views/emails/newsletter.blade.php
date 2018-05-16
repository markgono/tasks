@component('mail::message')
# Tasks Newsletter

Our weekly newsletter, featuring topics covering:
- Productivity
- Life-hacking
- Motivation
- Interviews
- and more!

@component('mail::button', ['url' => 'tasks.test'])
Go to Tasks
@endcomponent

@component('mail::panel')
The best content for your productivity, efficiency and motivation. Every week!
@endcomponent
 
Written with care by,<br>
{{ config('app.name') }}
@endcomponent
