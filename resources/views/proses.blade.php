<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Form</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>www.malasngoding.com</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">ID</td>
                                <td>{{ $data->id }}</td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td>{{ $data->judul }}</td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td>{{ $data->penerbit }}</td>
                            </tr>
                            <tr>
                                <td>Tahun Terbit</td>
                                <td>{{ $data->tahun_terbit }}</td>
                            </tr>
                            <tr>
                                <td>Pengarang</td>
                                <td>{{ $data->pengarang }}</td>
                            </tr>
                        </table>

                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
