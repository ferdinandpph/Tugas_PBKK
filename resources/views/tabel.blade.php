<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inventaris</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        table.inventory-table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table.inventory-table th,
        table.inventory-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        table.inventory-table thead {
            background-color: #007bff;
            color: #fff;
        }

        table.inventory-table th {
            font-weight: bold;
        }

        table.inventory-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>Data Inventaris</h1>
            <ul>
                <li><a href="dashbord">Beranda</a></li>
                <li><a href="#">Pengguna</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table class="inventory-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Laptop</td>
                    <td>5</td>
                    <td>$1000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Printer</td>
                    <td>3</td>
                    <td>$500</td>
                </tr>
                <!-- Tambahkan data inventaris lainnya di sini -->
            </tbody>
        </table>
    </main>
</body>
</html>
