</div>
<!-- END wrapper -->


<!-- Vendor js -->
<script src="<?= base_url('assets/') ?>js/vendor.min.js"></script>

<!-- knob plugin -->
<script src="<?= base_url('assets/') ?>libs/jquery-knob/jquery.knob.min.js"></script>

<!--Morris Chart-->
<script src="<?= base_url('assets/') ?>libs/morris-js/morris.min.js"></script>
<script src="<?= base_url('assets/') ?>libs/raphael/raphael.min.js"></script>

<!-- Chart JS -->
<script src="<?= base_url('assets/') ?>libs/chart-js/Chart.bundle.min.js"></script>

<!-- Dashboard init js-->
<script src="<?= base_url('assets/') ?>js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="<?= base_url('assets/') ?>js/app.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('assets') ?>/libs/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables/dataTables.bootstrap4.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/datatables/buttons.bootstrap4.min.js"></script>
<script>
    $('#datatable').DataTable()
</script>


<!-- dropify -->
<script src="<?= base_url('assets/') ?>libs/fileuploads/js/dropify.min.js"></script>
<script>
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong appended.'
        },
        error: {
            'fileSize': 'The file size is too big (1M max).'
        }
    });
</script>

<!-- Modal -->
<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>
<!-- Delete modal -->
<script>
    $(document).ready(function() {
        $("#hapus").click(function() {
            //Say - $('p').get(0).id - this delete item id
            //modal.find('#delete_item_id').attr("value",div.data('#delete_item_id'));
            $("#delete_item_id").val($('p').get());
            $('#deleteModalPengumuman').modal('show');
        });
    });
</script>


<!-- CHART JS -->
<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                if (count($nilai) > 0) {
                    foreach ($nilai as $data) {
                        echo "'" . $data->provinsi . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Jumlah Nilai',
                backgroundColor: '#ADD8E6',
                borderColor: '##93C3D2',
                data: [
                    <?php
                    if (count($graph) > 0) {
                        foreach ($graph as $data) {
                            echo $data['nama_siswa'] . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>
</body>

</html>