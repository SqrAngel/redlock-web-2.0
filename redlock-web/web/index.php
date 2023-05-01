<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redlock User Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #444;
        }

        table {
            margin: 0 auto;
            background-color: #fff;
        }

        th, td {
            text-align: center;
            vertical-align: middle;
            padding: 0.75rem;
            font-size: 1.125rem;
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            table {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Redlock User Database</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // membuat koneksi ke database
                $servername = "redlock-db";
                $username = "root";
                $password = "root";
                $dbname = "Redlock";
        
                // Membuat koneksi ke database
                $conn = new mysqli($servername, $username, $password, $dbname);
        
                // Mengecek apakah koneksi berhasil
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["ID"]. "</td>
                            <td>" . $row["Nama"]. "</td>
                            <td>" . $row["Alamat"]. "</td>
                            <td>" . $row["Jabatan"]. "</td>
                        </tr>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
