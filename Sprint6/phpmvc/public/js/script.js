// console.log('ok');
$(function () {

    $('.tombolTambahData').on('click', function () {

        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function () {

        $('#formModalLabel').html('Ubah Data Mahasiswa');// css selector
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Materi-PondokIT/Sprint6/phpmvc/public/mahasiswa/ubah');

        //ajax adalah sebuah teknologi yang membuat website kita semakin interaktif, yang membuat request 
        //data disebagian elemen nya saja ...tidak perlu mereload satu halaman 
        const id = $(this).data('id');
        // console.log(id);

        $.ajax({
            url: 'http://localhost/Materi-PondokIT/Sprint6/phpmvc/public/mahasiswa/getubah',
            data: { id: id }, //id yang sebelah kiri adalah nama data yang dikirimkan. sebelah kanan adalah isi datanya
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});