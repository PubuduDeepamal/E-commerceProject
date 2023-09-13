<!DOCTYPE html>
<html>
<head>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style scoped>

        #Detailspadding{
        margin-top: 30px;

        }

        :root {
        --tmr-bootstrap-border-color: #dee2e6;
        --tmr-white: #eee;
        --tmr-table-header: #54667a;
        --tmr-row-divider-color: #3490dc;
        --tmr-stripped-row-background-color: rgba(0, 0, 0, 0.05);
        }



        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

        [data-content]:before {
            content: attr(data-content);
        }


        .table-mobile-responsive,
        .table-mobile-responsive thead,
        .table-mobile-responsive tbody,
        .table-mobile-responsive th,
        .table-mobile-responsive td,
        .table-mobile-responsive tr {
            display: block;
        }

        .table-mobile-responsive.text-center {
            text-align: left !important;
        }
        .table-mobile-responsive caption {
            width: max-content;
        }


        .table-mobile-responsive thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        .table-mobile-responsive> :not(:first-child) {
            border-top: none;
        }

        .table-mobile-responsive>:not(caption)>*>* {
            border-color: var(--tmr-bootstrap-border-color);
        }

        .table-mobile-responsive tr:not(.bg-light-blue) {
            border-bottom: 2px solid var(--tmr-row-divider-color);
        }


        .table-mobile-responsive td {

            border: none;
            border-bottom: 1px solid var(--tmr-white);
            position: relative;
            padding-left: 50%;
            padding-top: 1.5rem !important;
        }

        .table-mobile-responsive td:before {

            position: absolute;

            top: 0;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            font-weight: bold;
            color: var(--tmr-table-header);
        }


        .table-mobile-responsive.table-mobile-sided> :not(:first-child) {
            border-top: none;
        }

        .table-mobile-responsive.table-mobile-sided>:not(caption)>*>* {
            border-color: var(--bs-table-border-color);
        }
        .table-mobile-responsive.table-mobile-sided td {

            border: none;
            border-bottom: 1px solid var(--tmr-white);
            position: relative;
            padding-left: 50%;
            padding-top: 0px !important;
            display: flex;
            justify-content: flex-end;
        }
        .table-mobile-responsive.table-mobile-sided td:before {

            position: absolute;

            top: 0;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            font-weight: bold;
            color: var(--tmr-table-header);
        }


        .table-mobile-responsive.table-mobile-styleless tr:not(.bg-light-blue) {
            border-bottom: none !important;
        }


        .table-mobile-responsive.table-mobile-striped>tbody>tr:nth-of-type(odd)>* {
            background-color: var(--tmr-stripped-row-background-color) !important;
        }
        }

        .col {
            flex: 1 0 0%;
            padding-bottom: 37px;
        }

        #producttittle{
            color: #21201e;
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: 48px;
            text-align: center;
        }
        </style>
</head>


<body>

<div class="container mt-4">
    <br><br><br><br><br><br>
    <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h2 id="producttittle">Employee Details</h2>
    </div>


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
