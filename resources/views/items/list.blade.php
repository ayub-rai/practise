<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
   .<div class="container">
    <a href="/" class="btn btn-danger">Back</a>
    <table class="table">
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td><a href="/item/{{ $item->id }}/edit" class="badge bg-success text-decoration-none">Edit</a></td>
            </tr>
        @endforeach
    </table>
   </div>
  </body>
</html>