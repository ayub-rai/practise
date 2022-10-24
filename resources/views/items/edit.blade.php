<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Milap</h1>
        <form action="/item/{{ $item->id }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" value="$item->name">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input id="price" class="form-control" type="text" name="price" value="$item->price">
            </div>

            <button type="submit" class="btn btn-primary my-3">Save</button>

            <a href="/list" class="btn btn-danger">Show list</a>
        </form>
    </div>
  </body>
</html>