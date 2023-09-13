<!DOCTYPE html>
<html>
<head>
    <title>Users from API</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="text-center">Users</h1>

    @if(isset($count))
    <div class="alert alert-info">
        <p>Items in Cart: {{ $count }}</p>
    </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Avatar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><img src="{{ $user->avatar }}" alt="{{ $user->first_name }}" class="img-fluid" style="width: 50px;"></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Display pagination links with Bootstrap styling -->
    <div class="d-flex justify-content-center">
        {{ $data->links() }}
    </div>

</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
