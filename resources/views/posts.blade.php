<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                        <th scope="col">Category_id</th>
                        <th scope="col">like</th>
                        <th scope="col">dislike</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $key => $value)
                        <tr>
                            <th scope="row">{{$value->id}}</th>
                            <td>{{$value->title}}</td>
                            <td>{{$value->body}}</td>
                            <td>{{$value->category_id}}</td>
                            <td>{{$value->like}}</td>
                            <td>{{$value->dislike}}</td>
                          </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>