@props(['message'])
<div>
    <h1>{{$message->created_at}}|{{$message->name}}</h1>
    <span>{{$message->email}}</span>
    <p>{{$message->message}}</p>
</div>
