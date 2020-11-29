// console.log('ok');
$(function () {

    $('.tombolTambahData').on('click', function () {

        $('#formModalLabel').html('Tambah Data Artikel');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function () {

        $('#formModalLabel').html('Ubah Data Artikel');// css selector
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Materi-PondokIT/Sprint6/blog/public/artikel/ubah');

        //ajax adalah sebuah teknologi yang membuat website kita semakin interaktif, yang membuat request 
        //data disebagian elemen nya saja ...tidak perlu mereload satu halaman 
        const id = $(this).data('id');
        // console.log(id);

        $.ajax({
            url: 'http://localhost/Materi-PondokIT/Sprint6/blog/public/artikel/getubah',
            data: { id: id }, //id yang sebelah kiri adalah author data yang dikirimkan. sebelah kanan adalah isi datanya
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                $('#author').val(data.author);
                $('#title').val(data.title);
                $('#content').val(data.content);
                $('#id').val(data.id);
            }
        });
    });
});