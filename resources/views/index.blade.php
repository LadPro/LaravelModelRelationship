<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    @forelse ($users as $user)
        <div>
            <h1>{{ $user->name }}</h1>
            <h2>{{ $user->email }}</h2>
            @forelse($user->phone as $phon)
            <h3>+{{$phon->prefix}}-{{$phon->number}}</h3>
            
            @empty
            <h3>No phone</h3>
            @endforelse
            <h3>Role: {{$user->role[0]->name}}</h3>
            
            <h3>sim company: {{$user->phoneSim}}</h3>
        </div>

    @empty
        <h1>No data</h1>    

    @endforelse
</body>
</html>