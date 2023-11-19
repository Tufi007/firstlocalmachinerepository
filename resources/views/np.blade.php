<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>np</title>
</head>
<body>
    {{Auth::check()}}
    @php
        $user = auth()->user();
        // $check= Auth::login($user);
        print_r($user);
        // print_r($check);
    @endphp
    <h1>helloooo {{auth()->user()}}</h1>
</body>
</html>
