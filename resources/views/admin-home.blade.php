
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header text-center bg-dark text-light"><b>{{ __(' Admin Dashboard') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome back, <b>{{ Auth::user()->name }}</b></p>
                    <p> <b>></b> UserID - <b>{{ Auth::user()->id }}</b></p>
                    <p> <b>></b> Email address - <b>{{ Auth::user()->email }}</b></p>
                    <p> <b>></b> Account created - <b>{{ Auth::user()->created_at }}</b></p>

                    <?php
                        // Creating the connection
                        $servername = "";
                        $username = "";
                        $password = "";

                        $conn = new mysqli($servername, $username, $password);

                        // Checking the server status
                        if ($conn->connect_error) {
                          die("<b> > </b>Database status - 🔴 Offline" . $conn->connect_error);
                        }
                        echo "<b> > </b>Database status - 🟢 Online";
                    ?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header text-center bg-dark text-light">User database</div>

                    <div class="card-body">

                    <?php

                        // Connecting to the database
                        $servername = "";
                        $username = "";
                        $password = "";

                        // Creating the connection using the given credentials.
                        $conn = new mysqli($servername, $username, $password);

                        // Creating the SQL query to be ran, which will select all users, and their id, email, name and the creation date of their account.
                        $sql = "SELECT id, email, name, created_at FROM gibjohn.users";
                        $result = $conn->query($sql);


                        // Create the table to display the information.
                        echo "<div class='col-xs-6'>";
                        echo "<div class='table-responsive text-center '>";

                        echo "<table class='table table-hover table-inverse'>";

                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Name</th>";
                        echo "<th>Email</th>";
                        echo "<th>Date created</th>";
                        echo "</tr>";

                        // Output data for each row.
                        while($row = $result->fetch_assoc()) {

                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["created_at"] . "</td>";


                        echo "</tr>";           
                        }


                        echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 