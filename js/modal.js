$('#modalAlbum').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var name = button.data('name') // Extract info from data-* attributes
    var image = button.data('image') // Extract info from data-* attributes
    var genre = button.data('genre') // Extract info from data-* attributes


    var modal = $(this)
    modal.find('.modal-body input[name="id"]').val(id)
    modal.find('.modal-body input[name="name"]').val(name)
    modal.find('.modal-body input[name="image_url"]').val(image)
    modal.find('.modal-body select[name="genre"]').val(genre)
});

$('#modalTitre').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    var name = button.data('name') // Extract info from data-* attributes
    var feat = button.data('feat') // Extract info from data-* attributes
    var album = button.data('album') // Extract info from data-* attributes
    var lyrics = button.data('lyrics') // Extract info from data-* attributes
    var image = button.data('image') // Extract info from data-* attributes
    var genre = button.data('genre') // Extract info from data-* attributes

    var modal = $(this)
    modal.find('.modal-body input[name="id"]').val(id)
    modal.find('.modal-body input[name="name"]').val(name)
    modal.find('.modal-body select[name="feat"]').val(feat)
    modal.find('.modal-body select[name="album"]').val(album)
    modal.find('.modal-body input[name="lyrics"]').val(lyrics)
    modal.find('.modal-body input[name="image_url"]').val(image)
    modal.find('.modal-body select[name="genre"]').val(genre)
})