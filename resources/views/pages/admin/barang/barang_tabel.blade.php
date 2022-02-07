<!-- Mulai Tabel -->
<div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Barang </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    <tr>
                    <?php
                        foreach ($barang as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data["nama_barang"] ?> </td>
              
                        <td> 
                            <a href="{{ route('admin.barang.edit', $data['id_barang']) }}">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        <td> 
                            <a href="{{ route('admin.barang.delete', $data['id_barang']) }}">
                            <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash">
                                    Delete
                                </span>
                            </button>
                            </a> 
                        </td>
                        
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {!! $barang->links() !!}
            </div>
        </div>
	</div>
</div>