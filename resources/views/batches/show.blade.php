<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Page</title>
</head>

<body>


<h1>{{ $batch->title }}</h1>

<div class="comments">

    @foreach ($batch->entries as $entry)

        <article>

            {{ $entry->body }}

        </article>

    @endforeach

    howdy


</div>
</body>
</html>