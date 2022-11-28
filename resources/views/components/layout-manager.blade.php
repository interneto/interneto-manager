@props(["directories", "tags"])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer>
    </script>
    <!-- vasturiano graph -->
    <style>body { margin: 0; }</style>
    <script src="//unpkg.com/force-graph"></script>
    <!--<script src="../../dist/force-graph.js"></script>-->
</head>

<body>
    <div class="row mx-2 my-2 ">
        <div class="col-sm-2">
            <x-layout-user.sidebar :directories="$directories" />
        </div>

        <div class="col-sm-10">
            <x-layout-user.header />

            {{ $slot }}
        </div>
    </div>
</body>

</html>
