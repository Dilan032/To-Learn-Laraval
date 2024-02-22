<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    @if(session('msg'))
      <div class="alert alert-success">
          {{ session('msg') }}
      </div>
    @endif

    {{-- @if (\session::has('msg'))
      <div class="alert alert-success">
        <ul>
          <li>{|| \session::get('msg') ||}</li>
        </ul>
      </div>
    @endif --}}
  
    {{-- this massege pass codee not work session word not work --}}

    <h1>Hello, world!</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">address</th>
            <th scope="col">Tp</th>
            <th> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($myNames as $oneName )
                <tr>
                    <th scope="row">{{ $oneName->id }}</th>
                    <td>{{ $oneName->frist_name }}</td>
                    <td>{{ $oneName->address }}</td>
                    <td>{{ $oneName->tp }}</td>
                    <td>
                      <form action="{{url('dilan/'.$oneName->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                      </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>