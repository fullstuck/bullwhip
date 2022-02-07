<!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> Nama Pegawai </th>
                        <th> Alamat </th>
                        <th> Handphone </th>
                        <th> Nama Bagian </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    @foreach($pegawai as $key => $data)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data["username"] }}</td>
                            <td>{{ $data["password"] }}</td>
                            <td>{{ $data["nama_pegawai"] }}</td>
                            <td>{{ $data["alamat_pegawai"] }}</td>
                            <td>{{ $data["hp_pegawai"] }}</td>
                            <td>{{ $data["nama_bagian"] }}</td>
                            <td> 
                                <a href="pegawai_form_edit.php?id=<?php echo $data['id_pegawai'] ?>">
                                <button type="button" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-pencil">
                                        Edit
                                    </span>
                                </button>
                                </a> 
                            </td>
                            <td> 
                                <a href="pegawai_delete.php?id=<?php echo $data["id_pegawai"]; ?>">
                                <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash">
                                        Delete
                                    </span>
                                </button>
                                </a> 
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
	</div>
</div>