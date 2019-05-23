$(function() {

  $('.modalDetail').on('click', function(){

  const nuptk = $(this).data('nuptk');
    $.ajax({
      url: 'http://localhost/smk-pb2/profil/detail',
      data: {nuptk : nuptk},
      method: 'post',
      dataType: 'json',
      success: function(data) {
        // console.log(data);
        $('#gambar').prop("src","http://localhost/smk-pb2/admin/upload/guru/"+data.gambar);
        // $('#gambar').html(data.gambar);
        $('#nama').html(data.nama);
        $('#email').html(data.email);
        $('#pendidikan').html(data.pendidikan);
      }
    });

  });

});
